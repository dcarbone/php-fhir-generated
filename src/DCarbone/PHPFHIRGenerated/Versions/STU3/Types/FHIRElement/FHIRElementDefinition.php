<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 16th, 2025 01:05+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
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
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBase64BinaryPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionExample;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRCount;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDistance;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIROidPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRElementDefinition extends FHIRElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_ELEMENT_DEFINITION;


    public const FIELD_PATH = 'path';
    public const FIELD_PATH_EXT = '_path';
    public const FIELD_REPRESENTATION = 'representation';
    public const FIELD_REPRESENTATION_EXT = '_representation';
    public const FIELD_SLICE_NAME = 'sliceName';
    public const FIELD_SLICE_NAME_EXT = '_sliceName';
    public const FIELD_LABEL = 'label';
    public const FIELD_LABEL_EXT = '_label';
    public const FIELD_CODE = 'code';
    public const FIELD_SLICING = 'slicing';
    public const FIELD_SHORT = 'short';
    public const FIELD_SHORT_EXT = '_short';
    public const FIELD_DEFINITION = 'definition';
    public const FIELD_DEFINITION_EXT = '_definition';
    public const FIELD_COMMENT = 'comment';
    public const FIELD_COMMENT_EXT = '_comment';
    public const FIELD_REQUIREMENTS = 'requirements';
    public const FIELD_REQUIREMENTS_EXT = '_requirements';
    public const FIELD_ALIAS = 'alias';
    public const FIELD_ALIAS_EXT = '_alias';
    public const FIELD_MIN = 'min';
    public const FIELD_MIN_EXT = '_min';
    public const FIELD_MAX = 'max';
    public const FIELD_MAX_EXT = '_max';
    public const FIELD_BASE = 'base';
    public const FIELD_CONTENT_REFERENCE = 'contentReference';
    public const FIELD_CONTENT_REFERENCE_EXT = '_contentReference';
    public const FIELD_TYPE = 'type';
    public const FIELD_DEFAULT_VALUE_BASE_64BINARY = 'defaultValueBase64Binary';
    public const FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT = '_defaultValueBase64Binary';
    public const FIELD_DEFAULT_VALUE_BOOLEAN = 'defaultValueBoolean';
    public const FIELD_DEFAULT_VALUE_BOOLEAN_EXT = '_defaultValueBoolean';
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
    public const FIELD_DEFAULT_VALUE_META = 'defaultValueMeta';
    public const FIELD_MEANING_WHEN_MISSING = 'meaningWhenMissing';
    public const FIELD_MEANING_WHEN_MISSING_EXT = '_meaningWhenMissing';
    public const FIELD_ORDER_MEANING = 'orderMeaning';
    public const FIELD_ORDER_MEANING_EXT = '_orderMeaning';
    public const FIELD_FIXED_BASE_64BINARY = 'fixedBase64Binary';
    public const FIELD_FIXED_BASE_64BINARY_EXT = '_fixedBase64Binary';
    public const FIELD_FIXED_BOOLEAN = 'fixedBoolean';
    public const FIELD_FIXED_BOOLEAN_EXT = '_fixedBoolean';
    public const FIELD_FIXED_CODE = 'fixedCode';
    public const FIELD_FIXED_CODE_EXT = '_fixedCode';
    public const FIELD_FIXED_DATE = 'fixedDate';
    public const FIELD_FIXED_DATE_EXT = '_fixedDate';
    public const FIELD_FIXED_DATE_TIME = 'fixedDateTime';
    public const FIELD_FIXED_DATE_TIME_EXT = '_fixedDateTime';
    public const FIELD_FIXED_DECIMAL = 'fixedDecimal';
    public const FIELD_FIXED_DECIMAL_EXT = '_fixedDecimal';
    public const FIELD_FIXED_ID = 'fixedId';
    public const FIELD_FIXED_ID_EXT = '_fixedId';
    public const FIELD_FIXED_INSTANT = 'fixedInstant';
    public const FIELD_FIXED_INSTANT_EXT = '_fixedInstant';
    public const FIELD_FIXED_INTEGER = 'fixedInteger';
    public const FIELD_FIXED_INTEGER_EXT = '_fixedInteger';
    public const FIELD_FIXED_MARKDOWN = 'fixedMarkdown';
    public const FIELD_FIXED_MARKDOWN_EXT = '_fixedMarkdown';
    public const FIELD_FIXED_OID = 'fixedOid';
    public const FIELD_FIXED_OID_EXT = '_fixedOid';
    public const FIELD_FIXED_POSITIVE_INT = 'fixedPositiveInt';
    public const FIELD_FIXED_POSITIVE_INT_EXT = '_fixedPositiveInt';
    public const FIELD_FIXED_STRING = 'fixedString';
    public const FIELD_FIXED_STRING_EXT = '_fixedString';
    public const FIELD_FIXED_TIME = 'fixedTime';
    public const FIELD_FIXED_TIME_EXT = '_fixedTime';
    public const FIELD_FIXED_UNSIGNED_INT = 'fixedUnsignedInt';
    public const FIELD_FIXED_UNSIGNED_INT_EXT = '_fixedUnsignedInt';
    public const FIELD_FIXED_URI = 'fixedUri';
    public const FIELD_FIXED_URI_EXT = '_fixedUri';
    public const FIELD_FIXED_ADDRESS = 'fixedAddress';
    public const FIELD_FIXED_AGE = 'fixedAge';
    public const FIELD_FIXED_ANNOTATION = 'fixedAnnotation';
    public const FIELD_FIXED_ATTACHMENT = 'fixedAttachment';
    public const FIELD_FIXED_CODEABLE_CONCEPT = 'fixedCodeableConcept';
    public const FIELD_FIXED_CODING = 'fixedCoding';
    public const FIELD_FIXED_CONTACT_POINT = 'fixedContactPoint';
    public const FIELD_FIXED_COUNT = 'fixedCount';
    public const FIELD_FIXED_DISTANCE = 'fixedDistance';
    public const FIELD_FIXED_DURATION = 'fixedDuration';
    public const FIELD_FIXED_HUMAN_NAME = 'fixedHumanName';
    public const FIELD_FIXED_IDENTIFIER = 'fixedIdentifier';
    public const FIELD_FIXED_MONEY = 'fixedMoney';
    public const FIELD_FIXED_PERIOD = 'fixedPeriod';
    public const FIELD_FIXED_QUANTITY = 'fixedQuantity';
    public const FIELD_FIXED_RANGE = 'fixedRange';
    public const FIELD_FIXED_RATIO = 'fixedRatio';
    public const FIELD_FIXED_REFERENCE = 'fixedReference';
    public const FIELD_FIXED_SAMPLED_DATA = 'fixedSampledData';
    public const FIELD_FIXED_SIGNATURE = 'fixedSignature';
    public const FIELD_FIXED_TIMING = 'fixedTiming';
    public const FIELD_FIXED_META = 'fixedMeta';
    public const FIELD_PATTERN_BASE_64BINARY = 'patternBase64Binary';
    public const FIELD_PATTERN_BASE_64BINARY_EXT = '_patternBase64Binary';
    public const FIELD_PATTERN_BOOLEAN = 'patternBoolean';
    public const FIELD_PATTERN_BOOLEAN_EXT = '_patternBoolean';
    public const FIELD_PATTERN_CODE = 'patternCode';
    public const FIELD_PATTERN_CODE_EXT = '_patternCode';
    public const FIELD_PATTERN_DATE = 'patternDate';
    public const FIELD_PATTERN_DATE_EXT = '_patternDate';
    public const FIELD_PATTERN_DATE_TIME = 'patternDateTime';
    public const FIELD_PATTERN_DATE_TIME_EXT = '_patternDateTime';
    public const FIELD_PATTERN_DECIMAL = 'patternDecimal';
    public const FIELD_PATTERN_DECIMAL_EXT = '_patternDecimal';
    public const FIELD_PATTERN_ID = 'patternId';
    public const FIELD_PATTERN_ID_EXT = '_patternId';
    public const FIELD_PATTERN_INSTANT = 'patternInstant';
    public const FIELD_PATTERN_INSTANT_EXT = '_patternInstant';
    public const FIELD_PATTERN_INTEGER = 'patternInteger';
    public const FIELD_PATTERN_INTEGER_EXT = '_patternInteger';
    public const FIELD_PATTERN_MARKDOWN = 'patternMarkdown';
    public const FIELD_PATTERN_MARKDOWN_EXT = '_patternMarkdown';
    public const FIELD_PATTERN_OID = 'patternOid';
    public const FIELD_PATTERN_OID_EXT = '_patternOid';
    public const FIELD_PATTERN_POSITIVE_INT = 'patternPositiveInt';
    public const FIELD_PATTERN_POSITIVE_INT_EXT = '_patternPositiveInt';
    public const FIELD_PATTERN_STRING = 'patternString';
    public const FIELD_PATTERN_STRING_EXT = '_patternString';
    public const FIELD_PATTERN_TIME = 'patternTime';
    public const FIELD_PATTERN_TIME_EXT = '_patternTime';
    public const FIELD_PATTERN_UNSIGNED_INT = 'patternUnsignedInt';
    public const FIELD_PATTERN_UNSIGNED_INT_EXT = '_patternUnsignedInt';
    public const FIELD_PATTERN_URI = 'patternUri';
    public const FIELD_PATTERN_URI_EXT = '_patternUri';
    public const FIELD_PATTERN_ADDRESS = 'patternAddress';
    public const FIELD_PATTERN_AGE = 'patternAge';
    public const FIELD_PATTERN_ANNOTATION = 'patternAnnotation';
    public const FIELD_PATTERN_ATTACHMENT = 'patternAttachment';
    public const FIELD_PATTERN_CODEABLE_CONCEPT = 'patternCodeableConcept';
    public const FIELD_PATTERN_CODING = 'patternCoding';
    public const FIELD_PATTERN_CONTACT_POINT = 'patternContactPoint';
    public const FIELD_PATTERN_COUNT = 'patternCount';
    public const FIELD_PATTERN_DISTANCE = 'patternDistance';
    public const FIELD_PATTERN_DURATION = 'patternDuration';
    public const FIELD_PATTERN_HUMAN_NAME = 'patternHumanName';
    public const FIELD_PATTERN_IDENTIFIER = 'patternIdentifier';
    public const FIELD_PATTERN_MONEY = 'patternMoney';
    public const FIELD_PATTERN_PERIOD = 'patternPeriod';
    public const FIELD_PATTERN_QUANTITY = 'patternQuantity';
    public const FIELD_PATTERN_RANGE = 'patternRange';
    public const FIELD_PATTERN_RATIO = 'patternRatio';
    public const FIELD_PATTERN_REFERENCE = 'patternReference';
    public const FIELD_PATTERN_SAMPLED_DATA = 'patternSampledData';
    public const FIELD_PATTERN_SIGNATURE = 'patternSignature';
    public const FIELD_PATTERN_TIMING = 'patternTiming';
    public const FIELD_PATTERN_META = 'patternMeta';
    public const FIELD_EXAMPLE = 'example';
    public const FIELD_MIN_VALUE_DATE = 'minValueDate';
    public const FIELD_MIN_VALUE_DATE_EXT = '_minValueDate';
    public const FIELD_MIN_VALUE_DATE_TIME = 'minValueDateTime';
    public const FIELD_MIN_VALUE_DATE_TIME_EXT = '_minValueDateTime';
    public const FIELD_MIN_VALUE_INSTANT = 'minValueInstant';
    public const FIELD_MIN_VALUE_INSTANT_EXT = '_minValueInstant';
    public const FIELD_MIN_VALUE_TIME = 'minValueTime';
    public const FIELD_MIN_VALUE_TIME_EXT = '_minValueTime';
    public const FIELD_MIN_VALUE_DECIMAL = 'minValueDecimal';
    public const FIELD_MIN_VALUE_DECIMAL_EXT = '_minValueDecimal';
    public const FIELD_MIN_VALUE_INTEGER = 'minValueInteger';
    public const FIELD_MIN_VALUE_INTEGER_EXT = '_minValueInteger';
    public const FIELD_MIN_VALUE_POSITIVE_INT = 'minValuePositiveInt';
    public const FIELD_MIN_VALUE_POSITIVE_INT_EXT = '_minValuePositiveInt';
    public const FIELD_MIN_VALUE_UNSIGNED_INT = 'minValueUnsignedInt';
    public const FIELD_MIN_VALUE_UNSIGNED_INT_EXT = '_minValueUnsignedInt';
    public const FIELD_MIN_VALUE_QUANTITY = 'minValueQuantity';
    public const FIELD_MAX_VALUE_DATE = 'maxValueDate';
    public const FIELD_MAX_VALUE_DATE_EXT = '_maxValueDate';
    public const FIELD_MAX_VALUE_DATE_TIME = 'maxValueDateTime';
    public const FIELD_MAX_VALUE_DATE_TIME_EXT = '_maxValueDateTime';
    public const FIELD_MAX_VALUE_INSTANT = 'maxValueInstant';
    public const FIELD_MAX_VALUE_INSTANT_EXT = '_maxValueInstant';
    public const FIELD_MAX_VALUE_TIME = 'maxValueTime';
    public const FIELD_MAX_VALUE_TIME_EXT = '_maxValueTime';
    public const FIELD_MAX_VALUE_DECIMAL = 'maxValueDecimal';
    public const FIELD_MAX_VALUE_DECIMAL_EXT = '_maxValueDecimal';
    public const FIELD_MAX_VALUE_INTEGER = 'maxValueInteger';
    public const FIELD_MAX_VALUE_INTEGER_EXT = '_maxValueInteger';
    public const FIELD_MAX_VALUE_POSITIVE_INT = 'maxValuePositiveInt';
    public const FIELD_MAX_VALUE_POSITIVE_INT_EXT = '_maxValuePositiveInt';
    public const FIELD_MAX_VALUE_UNSIGNED_INT = 'maxValueUnsignedInt';
    public const FIELD_MAX_VALUE_UNSIGNED_INT_EXT = '_maxValueUnsignedInt';
    public const FIELD_MAX_VALUE_QUANTITY = 'maxValueQuantity';
    public const FIELD_MAX_LENGTH = 'maxLength';
    public const FIELD_MAX_LENGTH_EXT = '_maxLength';
    public const FIELD_CONDITION = 'condition';
    public const FIELD_CONDITION_EXT = '_condition';
    public const FIELD_CONSTRAINT = 'constraint';
    public const FIELD_MUST_SUPPORT = 'mustSupport';
    public const FIELD_MUST_SUPPORT_EXT = '_mustSupport';
    public const FIELD_IS_MODIFIER = 'isModifier';
    public const FIELD_IS_MODIFIER_EXT = '_isModifier';
    public const FIELD_IS_SUMMARY = 'isSummary';
    public const FIELD_IS_SUMMARY_EXT = '_isSummary';
    public const FIELD_BINDING = 'binding';
    public const FIELD_MAPPING = 'mapping';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The path identifies the element and is expressed as a "."-separated list of
     * ancestor elements, beginning with the name of the resource or extension.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $path;
    /**
     * How a property is represented when serialized.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Codes that define how this element is represented in instances, when the
     * deviation varies from the normal case.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPropertyRepresentation[] 
     */
    protected array $representation;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $sliceName;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A single preferred label which is the text to display beside the element
     * indicating its meaning or to use to prompt for the element in a user display or
     * form.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $label;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that has the same meaning as the element in a particular terminology.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding[] 
     */
    protected array $code;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing 
     */
    protected FHIRElementDefinitionSlicing $slicing;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A concise description of what this element means (e.g. for use in autogenerated
     * summaries).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $short;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $definition;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $comment;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $requirements;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString[] 
     */
    protected array $alias;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum number of times this element SHALL appear in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $min;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $max;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase 
     */
    protected FHIRElementDefinitionBase $base;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the identity of an element defined elsewhere in the profile whose
     * content rules should be applied to the current element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $contentReference;
    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The data type or resource that the value of this element is permitted to be.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType[] 
     */
    protected array $type;
    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBase64Binary 
     */
    protected FHIRBase64Binary $defaultValueBase64Binary;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $defaultValueBoolean;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $defaultValueCode;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate 
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $defaultValueDateTime;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $defaultValueId;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $defaultValueInstant;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $defaultValueInteger;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $defaultValueMarkdown;
    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIROid 
     */
    protected FHIROid $defaultValueOid;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $defaultValuePositiveInt;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $defaultValueString;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime 
     */
    protected FHIRTime $defaultValueTime;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $defaultValueUnsignedInt;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $defaultValueUri;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAddress 
     */
    protected FHIRAddress $defaultValueAddress;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge 
     */
    protected FHIRAge $defaultValueAge;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation 
     */
    protected FHIRAnnotation $defaultValueAnnotation;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment 
     */
    protected FHIRAttachment $defaultValueAttachment;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $defaultValueCodeableConcept;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $defaultValueCoding;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactPoint 
     */
    protected FHIRContactPoint $defaultValueContactPoint;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRCount 
     */
    protected FHIRCount $defaultValueCount;
    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDistance 
     */
    protected FHIRDistance $defaultValueDistance;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $defaultValueDuration;
    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRHumanName 
     */
    protected FHIRHumanName $defaultValueHumanName;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $defaultValueIdentifier;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney 
     */
    protected FHIRMoney $defaultValueMoney;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $defaultValuePeriod;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $defaultValueQuantity;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $defaultValueRange;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRatio 
     */
    protected FHIRRatio $defaultValueRatio;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $defaultValueReference;
    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledData 
     */
    protected FHIRSampledData $defaultValueSampledData;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSignature 
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming 
     */
    protected FHIRTiming $defaultValueTiming;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta 
     */
    protected FHIRMeta $defaultValueMeta;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $meaningWhenMissing;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the order of the repeating element has meaning and
     * describes what that meaning is. If absent, it means that the order of the
     * element has no meaning.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $orderMeaning;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBase64Binary 
     */
    protected FHIRBase64Binary $fixedBase64Binary;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $fixedBoolean;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $fixedCode;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $fixedDate;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $fixedDateTime;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $fixedDecimal;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $fixedId;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $fixedInstant;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $fixedInteger;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $fixedMarkdown;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIROid 
     */
    protected FHIROid $fixedOid;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $fixedPositiveInt;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $fixedString;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime 
     */
    protected FHIRTime $fixedTime;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $fixedUnsignedInt;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $fixedUri;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAddress 
     */
    protected FHIRAddress $fixedAddress;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge 
     */
    protected FHIRAge $fixedAge;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation 
     */
    protected FHIRAnnotation $fixedAnnotation;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment 
     */
    protected FHIRAttachment $fixedAttachment;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $fixedCodeableConcept;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $fixedCoding;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactPoint 
     */
    protected FHIRContactPoint $fixedContactPoint;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRCount 
     */
    protected FHIRCount $fixedCount;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDistance 
     */
    protected FHIRDistance $fixedDistance;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $fixedDuration;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRHumanName 
     */
    protected FHIRHumanName $fixedHumanName;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $fixedIdentifier;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney 
     */
    protected FHIRMoney $fixedMoney;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $fixedPeriod;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $fixedQuantity;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $fixedRange;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRatio 
     */
    protected FHIRRatio $fixedRatio;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $fixedReference;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledData 
     */
    protected FHIRSampledData $fixedSampledData;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSignature 
     */
    protected FHIRSignature $fixedSignature;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming 
     */
    protected FHIRTiming $fixedTiming;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta 
     */
    protected FHIRMeta $fixedMeta;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBase64Binary 
     */
    protected FHIRBase64Binary $patternBase64Binary;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $patternBoolean;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $patternCode;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $patternDate;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $patternDateTime;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $patternDecimal;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $patternId;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $patternInstant;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $patternInteger;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $patternMarkdown;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIROid 
     */
    protected FHIROid $patternOid;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $patternPositiveInt;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $patternString;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime 
     */
    protected FHIRTime $patternTime;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $patternUnsignedInt;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $patternUri;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAddress 
     */
    protected FHIRAddress $patternAddress;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge 
     */
    protected FHIRAge $patternAge;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation 
     */
    protected FHIRAnnotation $patternAnnotation;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment 
     */
    protected FHIRAttachment $patternAttachment;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $patternCodeableConcept;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $patternCoding;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactPoint 
     */
    protected FHIRContactPoint $patternContactPoint;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRCount 
     */
    protected FHIRCount $patternCount;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDistance 
     */
    protected FHIRDistance $patternDistance;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $patternDuration;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRHumanName 
     */
    protected FHIRHumanName $patternHumanName;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $patternIdentifier;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney 
     */
    protected FHIRMoney $patternMoney;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $patternPeriod;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $patternQuantity;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $patternRange;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRatio 
     */
    protected FHIRRatio $patternRatio;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $patternReference;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledData 
     */
    protected FHIRSampledData $patternSampledData;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSignature 
     */
    protected FHIRSignature $patternSignature;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming 
     */
    protected FHIRTiming $patternTiming;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta 
     */
    protected FHIRMeta $patternMeta;
    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A sample value for this element demonstrating the type of information that would
     * typically be found in the element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionExample[] 
     */
    protected array $example;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $minValueDate;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $minValueDateTime;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $minValueInstant;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime 
     */
    protected FHIRTime $minValueTime;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $minValueDecimal;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $minValueInteger;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $minValuePositiveInt;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $minValueUnsignedInt;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $minValueQuantity;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $maxValueDate;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $maxValueDateTime;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $maxValueInstant;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime 
     */
    protected FHIRTime $maxValueTime;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $maxValueDecimal;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $maxValueInteger;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $maxValuePositiveInt;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $maxValueUnsignedInt;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $maxValueQuantity;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the maximum length in characters that is permitted to be present in
     * conformant instances and which is expected to be supported by conformant
     * consumers that support the element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $maxLength;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId[] 
     */
    protected array $condition;
    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Formal constraints such as co-occurrence and other constraints that can be
     * computationally evaluated within the context of the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint[] 
     */
    protected array $constraint;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, implementations that produce or consume resources SHALL provide
     * "support" for the element in some meaningful way. If false, the element may be
     * ignored and not supported.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $mustSupport;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $isModifier;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the element should be included if a client requests a search with the
     * parameter _summary=true.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $isSummary;
    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept,
     * Quantity), or the data types (string, uri).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding 
     */
    protected FHIRElementDefinitionBinding $binding;
    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a concept from an external specification that roughly corresponds to
     * this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping[] 
     */
    protected array $mapping;

    /** Default validation map for fields in type ElementDefinition */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_PATH => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRElementDefinition Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $path
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPropertyRepresentation[] $representation
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $sliceName
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $label
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding[] $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing $slicing
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $short
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $definition
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $comment
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $requirements
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString[] $alias
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt $min
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $max
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase $base
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $contentReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType[] $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBase64Binary $defaultValueBase64Binary
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $defaultValueBoolean
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $defaultValueCode
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $defaultValueDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $defaultValueDateTime
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $defaultValueDecimal
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $defaultValueId
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant $defaultValueInstant
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $defaultValueInteger
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $defaultValueMarkdown
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIROid $defaultValueOid
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $defaultValuePositiveInt
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $defaultValueString
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime $defaultValueTime
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt $defaultValueUnsignedInt
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $defaultValueUri
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAddress $defaultValueAddress
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge $defaultValueAge
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation $defaultValueAnnotation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment $defaultValueAttachment
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $defaultValueCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding $defaultValueCoding
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactPoint $defaultValueContactPoint
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRCount $defaultValueCount
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDistance $defaultValueDistance
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration $defaultValueDuration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRHumanName $defaultValueHumanName
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $defaultValueIdentifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney $defaultValueMoney
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $defaultValuePeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $defaultValueQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange $defaultValueRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRatio $defaultValueRatio
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $defaultValueReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledData $defaultValueSampledData
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSignature $defaultValueSignature
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming $defaultValueTiming
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta $defaultValueMeta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $meaningWhenMissing
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $orderMeaning
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBase64Binary $fixedBase64Binary
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $fixedBoolean
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $fixedCode
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $fixedDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $fixedDateTime
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $fixedDecimal
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $fixedId
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant $fixedInstant
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $fixedInteger
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $fixedMarkdown
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIROid $fixedOid
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $fixedPositiveInt
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $fixedString
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime $fixedTime
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt $fixedUnsignedInt
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $fixedUri
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAddress $fixedAddress
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge $fixedAge
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation $fixedAnnotation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment $fixedAttachment
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $fixedCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding $fixedCoding
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactPoint $fixedContactPoint
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRCount $fixedCount
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDistance $fixedDistance
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration $fixedDuration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRHumanName $fixedHumanName
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $fixedIdentifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney $fixedMoney
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $fixedPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $fixedQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange $fixedRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRatio $fixedRatio
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $fixedReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledData $fixedSampledData
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSignature $fixedSignature
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming $fixedTiming
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta $fixedMeta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBase64Binary $patternBase64Binary
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $patternBoolean
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $patternCode
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $patternDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $patternDateTime
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $patternDecimal
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $patternId
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant $patternInstant
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $patternInteger
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $patternMarkdown
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIROid $patternOid
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $patternPositiveInt
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $patternString
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime $patternTime
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt $patternUnsignedInt
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $patternUri
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAddress $patternAddress
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge $patternAge
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation $patternAnnotation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment $patternAttachment
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $patternCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding $patternCoding
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactPoint $patternContactPoint
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRCount $patternCount
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDistance $patternDistance
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration $patternDuration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRHumanName $patternHumanName
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $patternIdentifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney $patternMoney
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $patternPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $patternQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange $patternRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRatio $patternRatio
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $patternReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledData $patternSampledData
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSignature $patternSignature
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming $patternTiming
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta $patternMeta
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionExample[] $example
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $minValueDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $minValueDateTime
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant $minValueInstant
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime $minValueTime
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $minValueDecimal
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $minValueInteger
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $minValuePositiveInt
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt $minValueUnsignedInt
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $minValueQuantity
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $maxValueDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $maxValueDateTime
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant $maxValueInstant
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime $maxValueTime
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $maxValueDecimal
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $maxValueInteger
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $maxValuePositiveInt
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt $maxValueUnsignedInt
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $maxValueQuantity
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $maxLength
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId[] $condition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint[] $constraint
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $mustSupport
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $isModifier
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $isSummary
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding $binding
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping[] $mapping
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|string|FHIRStringPrimitive|FHIRString $path = null,
                                null|iterable $representation = null,
                                null|string|FHIRStringPrimitive|FHIRString $sliceName = null,
                                null|string|FHIRStringPrimitive|FHIRString $label = null,
                                null|iterable $code = null,
                                null|FHIRElementDefinitionSlicing $slicing = null,
                                null|string|FHIRStringPrimitive|FHIRString $short = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $definition = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $comment = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $requirements = null,
                                null|iterable $alias = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $min = null,
                                null|string|FHIRStringPrimitive|FHIRString $max = null,
                                null|FHIRElementDefinitionBase $base = null,
                                null|string|FHIRUriPrimitive|FHIRUri $contentReference = null,
                                null|iterable $type = null,
                                null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $defaultValueBase64Binary = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $defaultValueBoolean = null,
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
                                null|FHIRMeta $defaultValueMeta = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $meaningWhenMissing = null,
                                null|string|FHIRStringPrimitive|FHIRString $orderMeaning = null,
                                null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $fixedBase64Binary = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $fixedBoolean = null,
                                null|string|FHIRCodePrimitive|FHIRCode $fixedCode = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $fixedDate = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $fixedDateTime = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $fixedDecimal = null,
                                null|string|FHIRIdPrimitive|FHIRId $fixedId = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $fixedInstant = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $fixedInteger = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $fixedMarkdown = null,
                                null|string|FHIROidPrimitive|FHIROid $fixedOid = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $fixedPositiveInt = null,
                                null|string|FHIRStringPrimitive|FHIRString $fixedString = null,
                                null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $fixedTime = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $fixedUnsignedInt = null,
                                null|string|FHIRUriPrimitive|FHIRUri $fixedUri = null,
                                null|FHIRAddress $fixedAddress = null,
                                null|FHIRAge $fixedAge = null,
                                null|FHIRAnnotation $fixedAnnotation = null,
                                null|FHIRAttachment $fixedAttachment = null,
                                null|FHIRCodeableConcept $fixedCodeableConcept = null,
                                null|FHIRCoding $fixedCoding = null,
                                null|FHIRContactPoint $fixedContactPoint = null,
                                null|FHIRCount $fixedCount = null,
                                null|FHIRDistance $fixedDistance = null,
                                null|FHIRDuration $fixedDuration = null,
                                null|FHIRHumanName $fixedHumanName = null,
                                null|FHIRIdentifier $fixedIdentifier = null,
                                null|FHIRMoney $fixedMoney = null,
                                null|FHIRPeriod $fixedPeriod = null,
                                null|FHIRQuantity $fixedQuantity = null,
                                null|FHIRRange $fixedRange = null,
                                null|FHIRRatio $fixedRatio = null,
                                null|FHIRReference $fixedReference = null,
                                null|FHIRSampledData $fixedSampledData = null,
                                null|FHIRSignature $fixedSignature = null,
                                null|FHIRTiming $fixedTiming = null,
                                null|FHIRMeta $fixedMeta = null,
                                null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $patternBase64Binary = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $patternBoolean = null,
                                null|string|FHIRCodePrimitive|FHIRCode $patternCode = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $patternDate = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $patternDateTime = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $patternDecimal = null,
                                null|string|FHIRIdPrimitive|FHIRId $patternId = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $patternInstant = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $patternInteger = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $patternMarkdown = null,
                                null|string|FHIROidPrimitive|FHIROid $patternOid = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $patternPositiveInt = null,
                                null|string|FHIRStringPrimitive|FHIRString $patternString = null,
                                null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $patternTime = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $patternUnsignedInt = null,
                                null|string|FHIRUriPrimitive|FHIRUri $patternUri = null,
                                null|FHIRAddress $patternAddress = null,
                                null|FHIRAge $patternAge = null,
                                null|FHIRAnnotation $patternAnnotation = null,
                                null|FHIRAttachment $patternAttachment = null,
                                null|FHIRCodeableConcept $patternCodeableConcept = null,
                                null|FHIRCoding $patternCoding = null,
                                null|FHIRContactPoint $patternContactPoint = null,
                                null|FHIRCount $patternCount = null,
                                null|FHIRDistance $patternDistance = null,
                                null|FHIRDuration $patternDuration = null,
                                null|FHIRHumanName $patternHumanName = null,
                                null|FHIRIdentifier $patternIdentifier = null,
                                null|FHIRMoney $patternMoney = null,
                                null|FHIRPeriod $patternPeriod = null,
                                null|FHIRQuantity $patternQuantity = null,
                                null|FHIRRange $patternRange = null,
                                null|FHIRRatio $patternRatio = null,
                                null|FHIRReference $patternReference = null,
                                null|FHIRSampledData $patternSampledData = null,
                                null|FHIRSignature $patternSignature = null,
                                null|FHIRTiming $patternTiming = null,
                                null|FHIRMeta $patternMeta = null,
                                null|iterable $example = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $minValueDate = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $minValueDateTime = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $minValueInstant = null,
                                null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $minValueTime = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $minValueDecimal = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $minValueInteger = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $minValuePositiveInt = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $minValueUnsignedInt = null,
                                null|FHIRQuantity $minValueQuantity = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $maxValueDate = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $maxValueDateTime = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $maxValueInstant = null,
                                null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $maxValueTime = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $maxValueDecimal = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $maxValueInteger = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $maxValuePositiveInt = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $maxValueUnsignedInt = null,
                                null|FHIRQuantity $maxValueQuantity = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $maxLength = null,
                                null|iterable $condition = null,
                                null|iterable $constraint = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $mustSupport = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isModifier = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isSummary = null,
                                null|FHIRElementDefinitionBinding $binding = null,
                                null|iterable $mapping = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            fhirComments: $fhirComments);
        if (null !== $path) {
            $this->setPath($path);
        }
        if (null !== $representation) {
            $this->setRepresentation(...$representation);
        }
        if (null !== $sliceName) {
            $this->setSliceName($sliceName);
        }
        if (null !== $label) {
            $this->setLabel($label);
        }
        if (null !== $code) {
            $this->setCode(...$code);
        }
        if (null !== $slicing) {
            $this->setSlicing($slicing);
        }
        if (null !== $short) {
            $this->setShort($short);
        }
        if (null !== $definition) {
            $this->setDefinition($definition);
        }
        if (null !== $comment) {
            $this->setComment($comment);
        }
        if (null !== $requirements) {
            $this->setRequirements($requirements);
        }
        if (null !== $alias) {
            $this->setAlias(...$alias);
        }
        if (null !== $min) {
            $this->setMin($min);
        }
        if (null !== $max) {
            $this->setMax($max);
        }
        if (null !== $base) {
            $this->setBase($base);
        }
        if (null !== $contentReference) {
            $this->setContentReference($contentReference);
        }
        if (null !== $type) {
            $this->setType(...$type);
        }
        if (null !== $defaultValueBase64Binary) {
            $this->setDefaultValueBase64Binary($defaultValueBase64Binary);
        }
        if (null !== $defaultValueBoolean) {
            $this->setDefaultValueBoolean($defaultValueBoolean);
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
        if (null !== $defaultValueMeta) {
            $this->setDefaultValueMeta($defaultValueMeta);
        }
        if (null !== $meaningWhenMissing) {
            $this->setMeaningWhenMissing($meaningWhenMissing);
        }
        if (null !== $orderMeaning) {
            $this->setOrderMeaning($orderMeaning);
        }
        if (null !== $fixedBase64Binary) {
            $this->setFixedBase64Binary($fixedBase64Binary);
        }
        if (null !== $fixedBoolean) {
            $this->setFixedBoolean($fixedBoolean);
        }
        if (null !== $fixedCode) {
            $this->setFixedCode($fixedCode);
        }
        if (null !== $fixedDate) {
            $this->setFixedDate($fixedDate);
        }
        if (null !== $fixedDateTime) {
            $this->setFixedDateTime($fixedDateTime);
        }
        if (null !== $fixedDecimal) {
            $this->setFixedDecimal($fixedDecimal);
        }
        if (null !== $fixedId) {
            $this->setFixedId($fixedId);
        }
        if (null !== $fixedInstant) {
            $this->setFixedInstant($fixedInstant);
        }
        if (null !== $fixedInteger) {
            $this->setFixedInteger($fixedInteger);
        }
        if (null !== $fixedMarkdown) {
            $this->setFixedMarkdown($fixedMarkdown);
        }
        if (null !== $fixedOid) {
            $this->setFixedOid($fixedOid);
        }
        if (null !== $fixedPositiveInt) {
            $this->setFixedPositiveInt($fixedPositiveInt);
        }
        if (null !== $fixedString) {
            $this->setFixedString($fixedString);
        }
        if (null !== $fixedTime) {
            $this->setFixedTime($fixedTime);
        }
        if (null !== $fixedUnsignedInt) {
            $this->setFixedUnsignedInt($fixedUnsignedInt);
        }
        if (null !== $fixedUri) {
            $this->setFixedUri($fixedUri);
        }
        if (null !== $fixedAddress) {
            $this->setFixedAddress($fixedAddress);
        }
        if (null !== $fixedAge) {
            $this->setFixedAge($fixedAge);
        }
        if (null !== $fixedAnnotation) {
            $this->setFixedAnnotation($fixedAnnotation);
        }
        if (null !== $fixedAttachment) {
            $this->setFixedAttachment($fixedAttachment);
        }
        if (null !== $fixedCodeableConcept) {
            $this->setFixedCodeableConcept($fixedCodeableConcept);
        }
        if (null !== $fixedCoding) {
            $this->setFixedCoding($fixedCoding);
        }
        if (null !== $fixedContactPoint) {
            $this->setFixedContactPoint($fixedContactPoint);
        }
        if (null !== $fixedCount) {
            $this->setFixedCount($fixedCount);
        }
        if (null !== $fixedDistance) {
            $this->setFixedDistance($fixedDistance);
        }
        if (null !== $fixedDuration) {
            $this->setFixedDuration($fixedDuration);
        }
        if (null !== $fixedHumanName) {
            $this->setFixedHumanName($fixedHumanName);
        }
        if (null !== $fixedIdentifier) {
            $this->setFixedIdentifier($fixedIdentifier);
        }
        if (null !== $fixedMoney) {
            $this->setFixedMoney($fixedMoney);
        }
        if (null !== $fixedPeriod) {
            $this->setFixedPeriod($fixedPeriod);
        }
        if (null !== $fixedQuantity) {
            $this->setFixedQuantity($fixedQuantity);
        }
        if (null !== $fixedRange) {
            $this->setFixedRange($fixedRange);
        }
        if (null !== $fixedRatio) {
            $this->setFixedRatio($fixedRatio);
        }
        if (null !== $fixedReference) {
            $this->setFixedReference($fixedReference);
        }
        if (null !== $fixedSampledData) {
            $this->setFixedSampledData($fixedSampledData);
        }
        if (null !== $fixedSignature) {
            $this->setFixedSignature($fixedSignature);
        }
        if (null !== $fixedTiming) {
            $this->setFixedTiming($fixedTiming);
        }
        if (null !== $fixedMeta) {
            $this->setFixedMeta($fixedMeta);
        }
        if (null !== $patternBase64Binary) {
            $this->setPatternBase64Binary($patternBase64Binary);
        }
        if (null !== $patternBoolean) {
            $this->setPatternBoolean($patternBoolean);
        }
        if (null !== $patternCode) {
            $this->setPatternCode($patternCode);
        }
        if (null !== $patternDate) {
            $this->setPatternDate($patternDate);
        }
        if (null !== $patternDateTime) {
            $this->setPatternDateTime($patternDateTime);
        }
        if (null !== $patternDecimal) {
            $this->setPatternDecimal($patternDecimal);
        }
        if (null !== $patternId) {
            $this->setPatternId($patternId);
        }
        if (null !== $patternInstant) {
            $this->setPatternInstant($patternInstant);
        }
        if (null !== $patternInteger) {
            $this->setPatternInteger($patternInteger);
        }
        if (null !== $patternMarkdown) {
            $this->setPatternMarkdown($patternMarkdown);
        }
        if (null !== $patternOid) {
            $this->setPatternOid($patternOid);
        }
        if (null !== $patternPositiveInt) {
            $this->setPatternPositiveInt($patternPositiveInt);
        }
        if (null !== $patternString) {
            $this->setPatternString($patternString);
        }
        if (null !== $patternTime) {
            $this->setPatternTime($patternTime);
        }
        if (null !== $patternUnsignedInt) {
            $this->setPatternUnsignedInt($patternUnsignedInt);
        }
        if (null !== $patternUri) {
            $this->setPatternUri($patternUri);
        }
        if (null !== $patternAddress) {
            $this->setPatternAddress($patternAddress);
        }
        if (null !== $patternAge) {
            $this->setPatternAge($patternAge);
        }
        if (null !== $patternAnnotation) {
            $this->setPatternAnnotation($patternAnnotation);
        }
        if (null !== $patternAttachment) {
            $this->setPatternAttachment($patternAttachment);
        }
        if (null !== $patternCodeableConcept) {
            $this->setPatternCodeableConcept($patternCodeableConcept);
        }
        if (null !== $patternCoding) {
            $this->setPatternCoding($patternCoding);
        }
        if (null !== $patternContactPoint) {
            $this->setPatternContactPoint($patternContactPoint);
        }
        if (null !== $patternCount) {
            $this->setPatternCount($patternCount);
        }
        if (null !== $patternDistance) {
            $this->setPatternDistance($patternDistance);
        }
        if (null !== $patternDuration) {
            $this->setPatternDuration($patternDuration);
        }
        if (null !== $patternHumanName) {
            $this->setPatternHumanName($patternHumanName);
        }
        if (null !== $patternIdentifier) {
            $this->setPatternIdentifier($patternIdentifier);
        }
        if (null !== $patternMoney) {
            $this->setPatternMoney($patternMoney);
        }
        if (null !== $patternPeriod) {
            $this->setPatternPeriod($patternPeriod);
        }
        if (null !== $patternQuantity) {
            $this->setPatternQuantity($patternQuantity);
        }
        if (null !== $patternRange) {
            $this->setPatternRange($patternRange);
        }
        if (null !== $patternRatio) {
            $this->setPatternRatio($patternRatio);
        }
        if (null !== $patternReference) {
            $this->setPatternReference($patternReference);
        }
        if (null !== $patternSampledData) {
            $this->setPatternSampledData($patternSampledData);
        }
        if (null !== $patternSignature) {
            $this->setPatternSignature($patternSignature);
        }
        if (null !== $patternTiming) {
            $this->setPatternTiming($patternTiming);
        }
        if (null !== $patternMeta) {
            $this->setPatternMeta($patternMeta);
        }
        if (null !== $example) {
            $this->setExample(...$example);
        }
        if (null !== $minValueDate) {
            $this->setMinValueDate($minValueDate);
        }
        if (null !== $minValueDateTime) {
            $this->setMinValueDateTime($minValueDateTime);
        }
        if (null !== $minValueInstant) {
            $this->setMinValueInstant($minValueInstant);
        }
        if (null !== $minValueTime) {
            $this->setMinValueTime($minValueTime);
        }
        if (null !== $minValueDecimal) {
            $this->setMinValueDecimal($minValueDecimal);
        }
        if (null !== $minValueInteger) {
            $this->setMinValueInteger($minValueInteger);
        }
        if (null !== $minValuePositiveInt) {
            $this->setMinValuePositiveInt($minValuePositiveInt);
        }
        if (null !== $minValueUnsignedInt) {
            $this->setMinValueUnsignedInt($minValueUnsignedInt);
        }
        if (null !== $minValueQuantity) {
            $this->setMinValueQuantity($minValueQuantity);
        }
        if (null !== $maxValueDate) {
            $this->setMaxValueDate($maxValueDate);
        }
        if (null !== $maxValueDateTime) {
            $this->setMaxValueDateTime($maxValueDateTime);
        }
        if (null !== $maxValueInstant) {
            $this->setMaxValueInstant($maxValueInstant);
        }
        if (null !== $maxValueTime) {
            $this->setMaxValueTime($maxValueTime);
        }
        if (null !== $maxValueDecimal) {
            $this->setMaxValueDecimal($maxValueDecimal);
        }
        if (null !== $maxValueInteger) {
            $this->setMaxValueInteger($maxValueInteger);
        }
        if (null !== $maxValuePositiveInt) {
            $this->setMaxValuePositiveInt($maxValuePositiveInt);
        }
        if (null !== $maxValueUnsignedInt) {
            $this->setMaxValueUnsignedInt($maxValueUnsignedInt);
        }
        if (null !== $maxValueQuantity) {
            $this->setMaxValueQuantity($maxValueQuantity);
        }
        if (null !== $maxLength) {
            $this->setMaxLength($maxLength);
        }
        if (null !== $condition) {
            $this->setCondition(...$condition);
        }
        if (null !== $constraint) {
            $this->setConstraint(...$constraint);
        }
        if (null !== $mustSupport) {
            $this->setMustSupport($mustSupport);
        }
        if (null !== $isModifier) {
            $this->setIsModifier($isModifier);
        }
        if (null !== $isSummary) {
            $this->setIsSummary($isSummary);
        }
        if (null !== $binding) {
            $this->setBinding($binding);
        }
        if (null !== $mapping) {
            $this->setMapping(...$mapping);
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The path identifies the element and is expressed as a "."-separated list of
     * ancestor elements, beginning with the name of the resource or extension.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getPath(): null|FHIRString
    {
        return $this->path ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The path identifies the element and is expressed as a "."-separated list of
     * ancestor elements, beginning with the name of the resource or extension.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $path
     * @return static
     */
    public function setPath(null|string|FHIRStringPrimitive|FHIRString $path): self
    {
        if (null === $path) {
            unset($this->path);
            return $this;
        }
        if (!($path instanceof FHIRString)) {
            $path = new FHIRString(value: $path);
        }
        $this->path = $path;
        return $this;
    }

    /**
     * How a property is represented when serialized.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Codes that define how this element is represented in instances, when the
     * deviation varies from the normal case.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPropertyRepresentation[]
     */
    public function getRepresentation(): array
    {
        return $this->representation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPropertyRepresentation>
     */
    public function getRepresentationIterator(): iterable
    {
        if (!isset($this->representation) || [] === $this->representation) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->representation);
    }

    /**
     * How a property is represented when serialized.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Codes that define how this element is represented in instances, when the
     * deviation varies from the normal case.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPropertyRepresentation $representation
     * @return static
     */
    public function addRepresentation(FHIRPropertyRepresentation $representation): self
    {
        if (!isset($this->representation)) {
            $this->representation = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPropertyRepresentation ...$representation
     * @return static
     */
    public function setRepresentation(FHIRPropertyRepresentation ...$representation): self
    {
        $this->representation = [];
        foreach($representation as $v) {
            if ($v instanceof FHIRPropertyRepresentation) {
                $this->representation[] = $v;
            } else {
                $this->representation[] = new FHIRPropertyRepresentation(value: $v);
            }
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getSliceName(): null|FHIRString
    {
        return $this->sliceName ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $sliceName
     * @return static
     */
    public function setSliceName(null|string|FHIRStringPrimitive|FHIRString $sliceName): self
    {
        if (null === $sliceName) {
            unset($this->sliceName);
            return $this;
        }
        if (!($sliceName instanceof FHIRString)) {
            $sliceName = new FHIRString(value: $sliceName);
        }
        $this->sliceName = $sliceName;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getLabel(): null|FHIRString
    {
        return $this->label ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $label
     * @return static
     */
    public function setLabel(null|string|FHIRStringPrimitive|FHIRString $label): self
    {
        if (null === $label) {
            unset($this->label);
            return $this;
        }
        if (!($label instanceof FHIRString)) {
            $label = new FHIRString(value: $label);
        }
        $this->label = $label;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that has the same meaning as the element in a particular terminology.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding[]
     */
    public function getCode(): array
    {
        return $this->code ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding>
     */
    public function getCodeIterator(): iterable
    {
        if (!isset($this->code) || [] === $this->code) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->code);
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that has the same meaning as the element in a particular terminology.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding $code
     * @return static
     */
    public function addCode(FHIRCoding $code): self
    {
        if (!isset($this->code)) {
            $this->code = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding ...$code
     * @return static
     */
    public function setCode(FHIRCoding ...$code): self
    {
        $this->code = $code;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing
     */
    public function getSlicing(): null|FHIRElementDefinitionSlicing
    {
        return $this->slicing ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing $slicing
     * @return static
     */
    public function setSlicing(null|FHIRElementDefinitionSlicing $slicing): self
    {
        if (null === $slicing) {
            unset($this->slicing);
            return $this;
        }
        $this->slicing = $slicing;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getShort(): null|FHIRString
    {
        return $this->short ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A concise description of what this element means (e.g. for use in autogenerated
     * summaries).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $short
     * @return static
     */
    public function setShort(null|string|FHIRStringPrimitive|FHIRString $short): self
    {
        if (null === $short) {
            unset($this->short);
            return $this;
        }
        if (!($short instanceof FHIRString)) {
            $short = new FHIRString(value: $short);
        }
        $this->short = $short;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown
     */
    public function getDefinition(): null|FHIRMarkdown
    {
        return $this->definition ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $definition
     * @return static
     */
    public function setDefinition(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $definition): self
    {
        if (null === $definition) {
            unset($this->definition);
            return $this;
        }
        if (!($definition instanceof FHIRMarkdown)) {
            $definition = new FHIRMarkdown(value: $definition);
        }
        $this->definition = $definition;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown
     */
    public function getComment(): null|FHIRMarkdown
    {
        return $this->comment ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $comment
     * @return static
     */
    public function setComment(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $comment): self
    {
        if (null === $comment) {
            unset($this->comment);
            return $this;
        }
        if (!($comment instanceof FHIRMarkdown)) {
            $comment = new FHIRMarkdown(value: $comment);
        }
        $this->comment = $comment;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown
     */
    public function getRequirements(): null|FHIRMarkdown
    {
        return $this->requirements ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $requirements
     * @return static
     */
    public function setRequirements(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $requirements): self
    {
        if (null === $requirements) {
            unset($this->requirements);
            return $this;
        }
        if (!($requirements instanceof FHIRMarkdown)) {
            $requirements = new FHIRMarkdown(value: $requirements);
        }
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString[]
     */
    public function getAlias(): array
    {
        return $this->alias ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString>
     */
    public function getAliasIterator(): iterable
    {
        if (!isset($this->alias) || [] === $this->alias) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->alias);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $alias
     * @return static
     */
    public function addAlias(string|FHIRStringPrimitive|FHIRString $alias): self
    {
        if (!($alias instanceof FHIRString)) {
            $alias = new FHIRString(value: $alias);
        }
        if (!isset($this->alias)) {
            $this->alias = [];
        }
        $this->alias[] = $alias;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString ...$alias
     * @return static
     */
    public function setAlias(string|FHIRStringPrimitive|FHIRString ...$alias): self
    {
        $this->alias = [];
        foreach($alias as $v) {
            if ($v instanceof FHIRString) {
                $this->alias[] = $v;
            } else {
                $this->alias[] = new FHIRString(value: $v);
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum number of times this element SHALL appear in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt
     */
    public function getMin(): null|FHIRUnsignedInt
    {
        return $this->min ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum number of times this element SHALL appear in the instance.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt $min
     * @return static
     */
    public function setMin(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $min): self
    {
        if (null === $min) {
            unset($this->min);
            return $this;
        }
        if (!($min instanceof FHIRUnsignedInt)) {
            $min = new FHIRUnsignedInt(value: $min);
        }
        $this->min = $min;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getMax(): null|FHIRString
    {
        return $this->max ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the instance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $max
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase
     */
    public function getBase(): null|FHIRElementDefinitionBase
    {
        return $this->base ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase $base
     * @return static
     */
    public function setBase(null|FHIRElementDefinitionBase $base): self
    {
        if (null === $base) {
            unset($this->base);
            return $this;
        }
        $this->base = $base;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri
     */
    public function getContentReference(): null|FHIRUri
    {
        return $this->contentReference ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the identity of an element defined elsewhere in the profile whose
     * content rules should be applied to the current element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $contentReference
     * @return static
     */
    public function setContentReference(null|string|FHIRUriPrimitive|FHIRUri $contentReference): self
    {
        if (null === $contentReference) {
            unset($this->contentReference);
            return $this;
        }
        if (!($contentReference instanceof FHIRUri)) {
            $contentReference = new FHIRUri(value: $contentReference);
        }
        $this->contentReference = $contentReference;
        return $this;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The data type or resource that the value of this element is permitted to be.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType[]
     */
    public function getType(): array
    {
        return $this->type ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType>
     */
    public function getTypeIterator(): iterable
    {
        if (!isset($this->type) || [] === $this->type) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->type);
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The data type or resource that the value of this element is permitted to be.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType $type
     * @return static
     */
    public function addType(FHIRElementDefinitionType $type): self
    {
        if (!isset($this->type)) {
            $this->type = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType ...$type
     * @return static
     */
    public function setType(FHIRElementDefinitionType ...$type): self
    {
        $this->type = $type;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBase64Binary
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBase64Binary $defaultValueBase64Binary
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getDefaultValueBoolean(): null|FHIRBoolean
    {
        return $this->defaultValueBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $defaultValueBoolean
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
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $defaultValueCode
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $defaultValueDate
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $defaultValueDateTime
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
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getDefaultValueDecimal(): null|FHIRDecimal
    {
        return $this->defaultValueDecimal ?? null;
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $defaultValueDecimal
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $defaultValueId
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
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant
     */
    public function getDefaultValueInstant(): null|FHIRInstant
    {
        return $this->defaultValueInstant ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant $defaultValueInstant
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $defaultValueInteger
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown
     */
    public function getDefaultValueMarkdown(): null|FHIRMarkdown
    {
        return $this->defaultValueMarkdown ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $defaultValueMarkdown
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIROid
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIROid $defaultValueOid
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $defaultValuePositiveInt
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getDefaultValueString(): null|FHIRString
    {
        return $this->defaultValueString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $defaultValueString
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime
     */
    public function getDefaultValueTime(): null|FHIRTime
    {
        return $this->defaultValueTime ?? null;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime $defaultValueTime
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt $defaultValueUnsignedInt
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $defaultValueUri
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAddress
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAddress $defaultValueAddress
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge $defaultValueAge
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation $defaultValueAnnotation
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment $defaultValueAttachment
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $defaultValueCodeableConcept
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding $defaultValueCoding
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactPoint
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactPoint $defaultValueContactPoint
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRCount
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRCount $defaultValueCount
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDistance
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDistance $defaultValueDistance
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration $defaultValueDuration
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRHumanName
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRHumanName $defaultValueHumanName
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier
     */
    public function getDefaultValueIdentifier(): null|FHIRIdentifier
    {
        return $this->defaultValueIdentifier ?? null;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $defaultValueIdentifier
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney $defaultValueMoney
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $defaultValuePeriod
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $defaultValueQuantity
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange $defaultValueRange
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRatio
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRatio $defaultValueRatio
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $defaultValueReference
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledData
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledData $defaultValueSampledData
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSignature
     */
    public function getDefaultValueSignature(): null|FHIRSignature
    {
        return $this->defaultValueSignature ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSignature $defaultValueSignature
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming $defaultValueTiming
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
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta
     */
    public function getDefaultValueMeta(): null|FHIRMeta
    {
        return $this->defaultValueMeta ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta $defaultValueMeta
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown
     */
    public function getMeaningWhenMissing(): null|FHIRMarkdown
    {
        return $this->meaningWhenMissing ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $meaningWhenMissing
     * @return static
     */
    public function setMeaningWhenMissing(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $meaningWhenMissing): self
    {
        if (null === $meaningWhenMissing) {
            unset($this->meaningWhenMissing);
            return $this;
        }
        if (!($meaningWhenMissing instanceof FHIRMarkdown)) {
            $meaningWhenMissing = new FHIRMarkdown(value: $meaningWhenMissing);
        }
        $this->meaningWhenMissing = $meaningWhenMissing;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getOrderMeaning(): null|FHIRString
    {
        return $this->orderMeaning ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $orderMeaning
     * @return static
     */
    public function setOrderMeaning(null|string|FHIRStringPrimitive|FHIRString $orderMeaning): self
    {
        if (null === $orderMeaning) {
            unset($this->orderMeaning);
            return $this;
        }
        if (!($orderMeaning instanceof FHIRString)) {
            $orderMeaning = new FHIRString(value: $orderMeaning);
        }
        $this->orderMeaning = $orderMeaning;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBase64Binary
     */
    public function getFixedBase64Binary(): null|FHIRBase64Binary
    {
        return $this->fixedBase64Binary ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBase64Binary $fixedBase64Binary
     * @return static
     */
    public function setFixedBase64Binary(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $fixedBase64Binary): self
    {
        if (null === $fixedBase64Binary) {
            unset($this->fixedBase64Binary);
            return $this;
        }
        if (!($fixedBase64Binary instanceof FHIRBase64Binary)) {
            $fixedBase64Binary = new FHIRBase64Binary(value: $fixedBase64Binary);
        }
        $this->fixedBase64Binary = $fixedBase64Binary;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getFixedBoolean(): null|FHIRBoolean
    {
        return $this->fixedBoolean ?? null;
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $fixedBoolean
     * @return static
     */
    public function setFixedBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $fixedBoolean): self
    {
        if (null === $fixedBoolean) {
            unset($this->fixedBoolean);
            return $this;
        }
        if (!($fixedBoolean instanceof FHIRBoolean)) {
            $fixedBoolean = new FHIRBoolean(value: $fixedBoolean);
        }
        $this->fixedBoolean = $fixedBoolean;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode
     */
    public function getFixedCode(): null|FHIRCode
    {
        return $this->fixedCode ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $fixedCode
     * @return static
     */
    public function setFixedCode(null|string|FHIRCodePrimitive|FHIRCode $fixedCode): self
    {
        if (null === $fixedCode) {
            unset($this->fixedCode);
            return $this;
        }
        if (!($fixedCode instanceof FHIRCode)) {
            $fixedCode = new FHIRCode(value: $fixedCode);
        }
        $this->fixedCode = $fixedCode;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate
     */
    public function getFixedDate(): null|FHIRDate
    {
        return $this->fixedDate ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $fixedDate
     * @return static
     */
    public function setFixedDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $fixedDate): self
    {
        if (null === $fixedDate) {
            unset($this->fixedDate);
            return $this;
        }
        if (!($fixedDate instanceof FHIRDate)) {
            $fixedDate = new FHIRDate(value: $fixedDate);
        }
        $this->fixedDate = $fixedDate;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime
     */
    public function getFixedDateTime(): null|FHIRDateTime
    {
        return $this->fixedDateTime ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $fixedDateTime
     * @return static
     */
    public function setFixedDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $fixedDateTime): self
    {
        if (null === $fixedDateTime) {
            unset($this->fixedDateTime);
            return $this;
        }
        if (!($fixedDateTime instanceof FHIRDateTime)) {
            $fixedDateTime = new FHIRDateTime(value: $fixedDateTime);
        }
        $this->fixedDateTime = $fixedDateTime;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getFixedDecimal(): null|FHIRDecimal
    {
        return $this->fixedDecimal ?? null;
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $fixedDecimal
     * @return static
     */
    public function setFixedDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $fixedDecimal): self
    {
        if (null === $fixedDecimal) {
            unset($this->fixedDecimal);
            return $this;
        }
        if (!($fixedDecimal instanceof FHIRDecimal)) {
            $fixedDecimal = new FHIRDecimal(value: $fixedDecimal);
        }
        $this->fixedDecimal = $fixedDecimal;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId
     */
    public function getFixedId(): null|FHIRId
    {
        return $this->fixedId ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $fixedId
     * @return static
     */
    public function setFixedId(null|string|FHIRIdPrimitive|FHIRId $fixedId): self
    {
        if (null === $fixedId) {
            unset($this->fixedId);
            return $this;
        }
        if (!($fixedId instanceof FHIRId)) {
            $fixedId = new FHIRId(value: $fixedId);
        }
        $this->fixedId = $fixedId;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant
     */
    public function getFixedInstant(): null|FHIRInstant
    {
        return $this->fixedInstant ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant $fixedInstant
     * @return static
     */
    public function setFixedInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $fixedInstant): self
    {
        if (null === $fixedInstant) {
            unset($this->fixedInstant);
            return $this;
        }
        if (!($fixedInstant instanceof FHIRInstant)) {
            $fixedInstant = new FHIRInstant(value: $fixedInstant);
        }
        $this->fixedInstant = $fixedInstant;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger
     */
    public function getFixedInteger(): null|FHIRInteger
    {
        return $this->fixedInteger ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $fixedInteger
     * @return static
     */
    public function setFixedInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $fixedInteger): self
    {
        if (null === $fixedInteger) {
            unset($this->fixedInteger);
            return $this;
        }
        if (!($fixedInteger instanceof FHIRInteger)) {
            $fixedInteger = new FHIRInteger(value: $fixedInteger);
        }
        $this->fixedInteger = $fixedInteger;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown
     */
    public function getFixedMarkdown(): null|FHIRMarkdown
    {
        return $this->fixedMarkdown ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $fixedMarkdown
     * @return static
     */
    public function setFixedMarkdown(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $fixedMarkdown): self
    {
        if (null === $fixedMarkdown) {
            unset($this->fixedMarkdown);
            return $this;
        }
        if (!($fixedMarkdown instanceof FHIRMarkdown)) {
            $fixedMarkdown = new FHIRMarkdown(value: $fixedMarkdown);
        }
        $this->fixedMarkdown = $fixedMarkdown;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIROid
     */
    public function getFixedOid(): null|FHIROid
    {
        return $this->fixedOid ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIROid $fixedOid
     * @return static
     */
    public function setFixedOid(null|string|FHIROidPrimitive|FHIROid $fixedOid): self
    {
        if (null === $fixedOid) {
            unset($this->fixedOid);
            return $this;
        }
        if (!($fixedOid instanceof FHIROid)) {
            $fixedOid = new FHIROid(value: $fixedOid);
        }
        $this->fixedOid = $fixedOid;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt
     */
    public function getFixedPositiveInt(): null|FHIRPositiveInt
    {
        return $this->fixedPositiveInt ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $fixedPositiveInt
     * @return static
     */
    public function setFixedPositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $fixedPositiveInt): self
    {
        if (null === $fixedPositiveInt) {
            unset($this->fixedPositiveInt);
            return $this;
        }
        if (!($fixedPositiveInt instanceof FHIRPositiveInt)) {
            $fixedPositiveInt = new FHIRPositiveInt(value: $fixedPositiveInt);
        }
        $this->fixedPositiveInt = $fixedPositiveInt;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getFixedString(): null|FHIRString
    {
        return $this->fixedString ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $fixedString
     * @return static
     */
    public function setFixedString(null|string|FHIRStringPrimitive|FHIRString $fixedString): self
    {
        if (null === $fixedString) {
            unset($this->fixedString);
            return $this;
        }
        if (!($fixedString instanceof FHIRString)) {
            $fixedString = new FHIRString(value: $fixedString);
        }
        $this->fixedString = $fixedString;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime
     */
    public function getFixedTime(): null|FHIRTime
    {
        return $this->fixedTime ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime $fixedTime
     * @return static
     */
    public function setFixedTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $fixedTime): self
    {
        if (null === $fixedTime) {
            unset($this->fixedTime);
            return $this;
        }
        if (!($fixedTime instanceof FHIRTime)) {
            $fixedTime = new FHIRTime(value: $fixedTime);
        }
        $this->fixedTime = $fixedTime;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt
     */
    public function getFixedUnsignedInt(): null|FHIRUnsignedInt
    {
        return $this->fixedUnsignedInt ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt $fixedUnsignedInt
     * @return static
     */
    public function setFixedUnsignedInt(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $fixedUnsignedInt): self
    {
        if (null === $fixedUnsignedInt) {
            unset($this->fixedUnsignedInt);
            return $this;
        }
        if (!($fixedUnsignedInt instanceof FHIRUnsignedInt)) {
            $fixedUnsignedInt = new FHIRUnsignedInt(value: $fixedUnsignedInt);
        }
        $this->fixedUnsignedInt = $fixedUnsignedInt;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri
     */
    public function getFixedUri(): null|FHIRUri
    {
        return $this->fixedUri ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $fixedUri
     * @return static
     */
    public function setFixedUri(null|string|FHIRUriPrimitive|FHIRUri $fixedUri): self
    {
        if (null === $fixedUri) {
            unset($this->fixedUri);
            return $this;
        }
        if (!($fixedUri instanceof FHIRUri)) {
            $fixedUri = new FHIRUri(value: $fixedUri);
        }
        $this->fixedUri = $fixedUri;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAddress
     */
    public function getFixedAddress(): null|FHIRAddress
    {
        return $this->fixedAddress ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAddress $fixedAddress
     * @return static
     */
    public function setFixedAddress(null|FHIRAddress $fixedAddress): self
    {
        if (null === $fixedAddress) {
            unset($this->fixedAddress);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getFixedAge(): null|FHIRAge
    {
        return $this->fixedAge ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge $fixedAge
     * @return static
     */
    public function setFixedAge(null|FHIRAge $fixedAge): self
    {
        if (null === $fixedAge) {
            unset($this->fixedAge);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation
     */
    public function getFixedAnnotation(): null|FHIRAnnotation
    {
        return $this->fixedAnnotation ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation $fixedAnnotation
     * @return static
     */
    public function setFixedAnnotation(null|FHIRAnnotation $fixedAnnotation): self
    {
        if (null === $fixedAnnotation) {
            unset($this->fixedAnnotation);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment
     */
    public function getFixedAttachment(): null|FHIRAttachment
    {
        return $this->fixedAttachment ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment $fixedAttachment
     * @return static
     */
    public function setFixedAttachment(null|FHIRAttachment $fixedAttachment): self
    {
        if (null === $fixedAttachment) {
            unset($this->fixedAttachment);
            return $this;
        }
        $this->fixedAttachment = $fixedAttachment;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getFixedCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->fixedCodeableConcept ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $fixedCodeableConcept
     * @return static
     */
    public function setFixedCodeableConcept(null|FHIRCodeableConcept $fixedCodeableConcept): self
    {
        if (null === $fixedCodeableConcept) {
            unset($this->fixedCodeableConcept);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding
     */
    public function getFixedCoding(): null|FHIRCoding
    {
        return $this->fixedCoding ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding $fixedCoding
     * @return static
     */
    public function setFixedCoding(null|FHIRCoding $fixedCoding): self
    {
        if (null === $fixedCoding) {
            unset($this->fixedCoding);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactPoint
     */
    public function getFixedContactPoint(): null|FHIRContactPoint
    {
        return $this->fixedContactPoint ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactPoint $fixedContactPoint
     * @return static
     */
    public function setFixedContactPoint(null|FHIRContactPoint $fixedContactPoint): self
    {
        if (null === $fixedContactPoint) {
            unset($this->fixedContactPoint);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getFixedCount(): null|FHIRCount
    {
        return $this->fixedCount ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRCount $fixedCount
     * @return static
     */
    public function setFixedCount(null|FHIRCount $fixedCount): self
    {
        if (null === $fixedCount) {
            unset($this->fixedCount);
            return $this;
        }
        $this->fixedCount = $fixedCount;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getFixedDistance(): null|FHIRDistance
    {
        return $this->fixedDistance ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDistance $fixedDistance
     * @return static
     */
    public function setFixedDistance(null|FHIRDistance $fixedDistance): self
    {
        if (null === $fixedDistance) {
            unset($this->fixedDistance);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getFixedDuration(): null|FHIRDuration
    {
        return $this->fixedDuration ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration $fixedDuration
     * @return static
     */
    public function setFixedDuration(null|FHIRDuration $fixedDuration): self
    {
        if (null === $fixedDuration) {
            unset($this->fixedDuration);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRHumanName
     */
    public function getFixedHumanName(): null|FHIRHumanName
    {
        return $this->fixedHumanName ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRHumanName $fixedHumanName
     * @return static
     */
    public function setFixedHumanName(null|FHIRHumanName $fixedHumanName): self
    {
        if (null === $fixedHumanName) {
            unset($this->fixedHumanName);
            return $this;
        }
        $this->fixedHumanName = $fixedHumanName;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier
     */
    public function getFixedIdentifier(): null|FHIRIdentifier
    {
        return $this->fixedIdentifier ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $fixedIdentifier
     * @return static
     */
    public function setFixedIdentifier(null|FHIRIdentifier $fixedIdentifier): self
    {
        if (null === $fixedIdentifier) {
            unset($this->fixedIdentifier);
            return $this;
        }
        $this->fixedIdentifier = $fixedIdentifier;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getFixedMoney(): null|FHIRMoney
    {
        return $this->fixedMoney ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney $fixedMoney
     * @return static
     */
    public function setFixedMoney(null|FHIRMoney $fixedMoney): self
    {
        if (null === $fixedMoney) {
            unset($this->fixedMoney);
            return $this;
        }
        $this->fixedMoney = $fixedMoney;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod
     */
    public function getFixedPeriod(): null|FHIRPeriod
    {
        return $this->fixedPeriod ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $fixedPeriod
     * @return static
     */
    public function setFixedPeriod(null|FHIRPeriod $fixedPeriod): self
    {
        if (null === $fixedPeriod) {
            unset($this->fixedPeriod);
            return $this;
        }
        $this->fixedPeriod = $fixedPeriod;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity
     */
    public function getFixedQuantity(): null|FHIRQuantity
    {
        return $this->fixedQuantity ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $fixedQuantity
     * @return static
     */
    public function setFixedQuantity(null|FHIRQuantity $fixedQuantity): self
    {
        if (null === $fixedQuantity) {
            unset($this->fixedQuantity);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange
     */
    public function getFixedRange(): null|FHIRRange
    {
        return $this->fixedRange ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange $fixedRange
     * @return static
     */
    public function setFixedRange(null|FHIRRange $fixedRange): self
    {
        if (null === $fixedRange) {
            unset($this->fixedRange);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRatio
     */
    public function getFixedRatio(): null|FHIRRatio
    {
        return $this->fixedRatio ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRatio $fixedRatio
     * @return static
     */
    public function setFixedRatio(null|FHIRRatio $fixedRatio): self
    {
        if (null === $fixedRatio) {
            unset($this->fixedRatio);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getFixedReference(): null|FHIRReference
    {
        return $this->fixedReference ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $fixedReference
     * @return static
     */
    public function setFixedReference(null|FHIRReference $fixedReference): self
    {
        if (null === $fixedReference) {
            unset($this->fixedReference);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledData
     */
    public function getFixedSampledData(): null|FHIRSampledData
    {
        return $this->fixedSampledData ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledData $fixedSampledData
     * @return static
     */
    public function setFixedSampledData(null|FHIRSampledData $fixedSampledData): self
    {
        if (null === $fixedSampledData) {
            unset($this->fixedSampledData);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSignature
     */
    public function getFixedSignature(): null|FHIRSignature
    {
        return $this->fixedSignature ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSignature $fixedSignature
     * @return static
     */
    public function setFixedSignature(null|FHIRSignature $fixedSignature): self
    {
        if (null === $fixedSignature) {
            unset($this->fixedSignature);
            return $this;
        }
        $this->fixedSignature = $fixedSignature;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming
     */
    public function getFixedTiming(): null|FHIRTiming
    {
        return $this->fixedTiming ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming $fixedTiming
     * @return static
     */
    public function setFixedTiming(null|FHIRTiming $fixedTiming): self
    {
        if (null === $fixedTiming) {
            unset($this->fixedTiming);
            return $this;
        }
        $this->fixedTiming = $fixedTiming;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta
     */
    public function getFixedMeta(): null|FHIRMeta
    {
        return $this->fixedMeta ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta $fixedMeta
     * @return static
     */
    public function setFixedMeta(null|FHIRMeta $fixedMeta): self
    {
        if (null === $fixedMeta) {
            unset($this->fixedMeta);
            return $this;
        }
        $this->fixedMeta = $fixedMeta;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBase64Binary
     */
    public function getPatternBase64Binary(): null|FHIRBase64Binary
    {
        return $this->patternBase64Binary ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBase64Binary $patternBase64Binary
     * @return static
     */
    public function setPatternBase64Binary(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $patternBase64Binary): self
    {
        if (null === $patternBase64Binary) {
            unset($this->patternBase64Binary);
            return $this;
        }
        if (!($patternBase64Binary instanceof FHIRBase64Binary)) {
            $patternBase64Binary = new FHIRBase64Binary(value: $patternBase64Binary);
        }
        $this->patternBase64Binary = $patternBase64Binary;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getPatternBoolean(): null|FHIRBoolean
    {
        return $this->patternBoolean ?? null;
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $patternBoolean
     * @return static
     */
    public function setPatternBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $patternBoolean): self
    {
        if (null === $patternBoolean) {
            unset($this->patternBoolean);
            return $this;
        }
        if (!($patternBoolean instanceof FHIRBoolean)) {
            $patternBoolean = new FHIRBoolean(value: $patternBoolean);
        }
        $this->patternBoolean = $patternBoolean;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode
     */
    public function getPatternCode(): null|FHIRCode
    {
        return $this->patternCode ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $patternCode
     * @return static
     */
    public function setPatternCode(null|string|FHIRCodePrimitive|FHIRCode $patternCode): self
    {
        if (null === $patternCode) {
            unset($this->patternCode);
            return $this;
        }
        if (!($patternCode instanceof FHIRCode)) {
            $patternCode = new FHIRCode(value: $patternCode);
        }
        $this->patternCode = $patternCode;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate
     */
    public function getPatternDate(): null|FHIRDate
    {
        return $this->patternDate ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $patternDate
     * @return static
     */
    public function setPatternDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $patternDate): self
    {
        if (null === $patternDate) {
            unset($this->patternDate);
            return $this;
        }
        if (!($patternDate instanceof FHIRDate)) {
            $patternDate = new FHIRDate(value: $patternDate);
        }
        $this->patternDate = $patternDate;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime
     */
    public function getPatternDateTime(): null|FHIRDateTime
    {
        return $this->patternDateTime ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $patternDateTime
     * @return static
     */
    public function setPatternDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $patternDateTime): self
    {
        if (null === $patternDateTime) {
            unset($this->patternDateTime);
            return $this;
        }
        if (!($patternDateTime instanceof FHIRDateTime)) {
            $patternDateTime = new FHIRDateTime(value: $patternDateTime);
        }
        $this->patternDateTime = $patternDateTime;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getPatternDecimal(): null|FHIRDecimal
    {
        return $this->patternDecimal ?? null;
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $patternDecimal
     * @return static
     */
    public function setPatternDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $patternDecimal): self
    {
        if (null === $patternDecimal) {
            unset($this->patternDecimal);
            return $this;
        }
        if (!($patternDecimal instanceof FHIRDecimal)) {
            $patternDecimal = new FHIRDecimal(value: $patternDecimal);
        }
        $this->patternDecimal = $patternDecimal;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId
     */
    public function getPatternId(): null|FHIRId
    {
        return $this->patternId ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $patternId
     * @return static
     */
    public function setPatternId(null|string|FHIRIdPrimitive|FHIRId $patternId): self
    {
        if (null === $patternId) {
            unset($this->patternId);
            return $this;
        }
        if (!($patternId instanceof FHIRId)) {
            $patternId = new FHIRId(value: $patternId);
        }
        $this->patternId = $patternId;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant
     */
    public function getPatternInstant(): null|FHIRInstant
    {
        return $this->patternInstant ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant $patternInstant
     * @return static
     */
    public function setPatternInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $patternInstant): self
    {
        if (null === $patternInstant) {
            unset($this->patternInstant);
            return $this;
        }
        if (!($patternInstant instanceof FHIRInstant)) {
            $patternInstant = new FHIRInstant(value: $patternInstant);
        }
        $this->patternInstant = $patternInstant;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger
     */
    public function getPatternInteger(): null|FHIRInteger
    {
        return $this->patternInteger ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $patternInteger
     * @return static
     */
    public function setPatternInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $patternInteger): self
    {
        if (null === $patternInteger) {
            unset($this->patternInteger);
            return $this;
        }
        if (!($patternInteger instanceof FHIRInteger)) {
            $patternInteger = new FHIRInteger(value: $patternInteger);
        }
        $this->patternInteger = $patternInteger;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown
     */
    public function getPatternMarkdown(): null|FHIRMarkdown
    {
        return $this->patternMarkdown ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $patternMarkdown
     * @return static
     */
    public function setPatternMarkdown(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $patternMarkdown): self
    {
        if (null === $patternMarkdown) {
            unset($this->patternMarkdown);
            return $this;
        }
        if (!($patternMarkdown instanceof FHIRMarkdown)) {
            $patternMarkdown = new FHIRMarkdown(value: $patternMarkdown);
        }
        $this->patternMarkdown = $patternMarkdown;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIROid
     */
    public function getPatternOid(): null|FHIROid
    {
        return $this->patternOid ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIROid $patternOid
     * @return static
     */
    public function setPatternOid(null|string|FHIROidPrimitive|FHIROid $patternOid): self
    {
        if (null === $patternOid) {
            unset($this->patternOid);
            return $this;
        }
        if (!($patternOid instanceof FHIROid)) {
            $patternOid = new FHIROid(value: $patternOid);
        }
        $this->patternOid = $patternOid;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt
     */
    public function getPatternPositiveInt(): null|FHIRPositiveInt
    {
        return $this->patternPositiveInt ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $patternPositiveInt
     * @return static
     */
    public function setPatternPositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $patternPositiveInt): self
    {
        if (null === $patternPositiveInt) {
            unset($this->patternPositiveInt);
            return $this;
        }
        if (!($patternPositiveInt instanceof FHIRPositiveInt)) {
            $patternPositiveInt = new FHIRPositiveInt(value: $patternPositiveInt);
        }
        $this->patternPositiveInt = $patternPositiveInt;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getPatternString(): null|FHIRString
    {
        return $this->patternString ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $patternString
     * @return static
     */
    public function setPatternString(null|string|FHIRStringPrimitive|FHIRString $patternString): self
    {
        if (null === $patternString) {
            unset($this->patternString);
            return $this;
        }
        if (!($patternString instanceof FHIRString)) {
            $patternString = new FHIRString(value: $patternString);
        }
        $this->patternString = $patternString;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime
     */
    public function getPatternTime(): null|FHIRTime
    {
        return $this->patternTime ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime $patternTime
     * @return static
     */
    public function setPatternTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $patternTime): self
    {
        if (null === $patternTime) {
            unset($this->patternTime);
            return $this;
        }
        if (!($patternTime instanceof FHIRTime)) {
            $patternTime = new FHIRTime(value: $patternTime);
        }
        $this->patternTime = $patternTime;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt
     */
    public function getPatternUnsignedInt(): null|FHIRUnsignedInt
    {
        return $this->patternUnsignedInt ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt $patternUnsignedInt
     * @return static
     */
    public function setPatternUnsignedInt(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $patternUnsignedInt): self
    {
        if (null === $patternUnsignedInt) {
            unset($this->patternUnsignedInt);
            return $this;
        }
        if (!($patternUnsignedInt instanceof FHIRUnsignedInt)) {
            $patternUnsignedInt = new FHIRUnsignedInt(value: $patternUnsignedInt);
        }
        $this->patternUnsignedInt = $patternUnsignedInt;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri
     */
    public function getPatternUri(): null|FHIRUri
    {
        return $this->patternUri ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $patternUri
     * @return static
     */
    public function setPatternUri(null|string|FHIRUriPrimitive|FHIRUri $patternUri): self
    {
        if (null === $patternUri) {
            unset($this->patternUri);
            return $this;
        }
        if (!($patternUri instanceof FHIRUri)) {
            $patternUri = new FHIRUri(value: $patternUri);
        }
        $this->patternUri = $patternUri;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAddress
     */
    public function getPatternAddress(): null|FHIRAddress
    {
        return $this->patternAddress ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAddress $patternAddress
     * @return static
     */
    public function setPatternAddress(null|FHIRAddress $patternAddress): self
    {
        if (null === $patternAddress) {
            unset($this->patternAddress);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getPatternAge(): null|FHIRAge
    {
        return $this->patternAge ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge $patternAge
     * @return static
     */
    public function setPatternAge(null|FHIRAge $patternAge): self
    {
        if (null === $patternAge) {
            unset($this->patternAge);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation
     */
    public function getPatternAnnotation(): null|FHIRAnnotation
    {
        return $this->patternAnnotation ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation $patternAnnotation
     * @return static
     */
    public function setPatternAnnotation(null|FHIRAnnotation $patternAnnotation): self
    {
        if (null === $patternAnnotation) {
            unset($this->patternAnnotation);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment
     */
    public function getPatternAttachment(): null|FHIRAttachment
    {
        return $this->patternAttachment ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment $patternAttachment
     * @return static
     */
    public function setPatternAttachment(null|FHIRAttachment $patternAttachment): self
    {
        if (null === $patternAttachment) {
            unset($this->patternAttachment);
            return $this;
        }
        $this->patternAttachment = $patternAttachment;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getPatternCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->patternCodeableConcept ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $patternCodeableConcept
     * @return static
     */
    public function setPatternCodeableConcept(null|FHIRCodeableConcept $patternCodeableConcept): self
    {
        if (null === $patternCodeableConcept) {
            unset($this->patternCodeableConcept);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding
     */
    public function getPatternCoding(): null|FHIRCoding
    {
        return $this->patternCoding ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding $patternCoding
     * @return static
     */
    public function setPatternCoding(null|FHIRCoding $patternCoding): self
    {
        if (null === $patternCoding) {
            unset($this->patternCoding);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactPoint
     */
    public function getPatternContactPoint(): null|FHIRContactPoint
    {
        return $this->patternContactPoint ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactPoint $patternContactPoint
     * @return static
     */
    public function setPatternContactPoint(null|FHIRContactPoint $patternContactPoint): self
    {
        if (null === $patternContactPoint) {
            unset($this->patternContactPoint);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getPatternCount(): null|FHIRCount
    {
        return $this->patternCount ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRCount $patternCount
     * @return static
     */
    public function setPatternCount(null|FHIRCount $patternCount): self
    {
        if (null === $patternCount) {
            unset($this->patternCount);
            return $this;
        }
        $this->patternCount = $patternCount;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getPatternDistance(): null|FHIRDistance
    {
        return $this->patternDistance ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDistance $patternDistance
     * @return static
     */
    public function setPatternDistance(null|FHIRDistance $patternDistance): self
    {
        if (null === $patternDistance) {
            unset($this->patternDistance);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getPatternDuration(): null|FHIRDuration
    {
        return $this->patternDuration ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration $patternDuration
     * @return static
     */
    public function setPatternDuration(null|FHIRDuration $patternDuration): self
    {
        if (null === $patternDuration) {
            unset($this->patternDuration);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRHumanName
     */
    public function getPatternHumanName(): null|FHIRHumanName
    {
        return $this->patternHumanName ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRHumanName $patternHumanName
     * @return static
     */
    public function setPatternHumanName(null|FHIRHumanName $patternHumanName): self
    {
        if (null === $patternHumanName) {
            unset($this->patternHumanName);
            return $this;
        }
        $this->patternHumanName = $patternHumanName;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier
     */
    public function getPatternIdentifier(): null|FHIRIdentifier
    {
        return $this->patternIdentifier ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $patternIdentifier
     * @return static
     */
    public function setPatternIdentifier(null|FHIRIdentifier $patternIdentifier): self
    {
        if (null === $patternIdentifier) {
            unset($this->patternIdentifier);
            return $this;
        }
        $this->patternIdentifier = $patternIdentifier;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getPatternMoney(): null|FHIRMoney
    {
        return $this->patternMoney ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney $patternMoney
     * @return static
     */
    public function setPatternMoney(null|FHIRMoney $patternMoney): self
    {
        if (null === $patternMoney) {
            unset($this->patternMoney);
            return $this;
        }
        $this->patternMoney = $patternMoney;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod
     */
    public function getPatternPeriod(): null|FHIRPeriod
    {
        return $this->patternPeriod ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $patternPeriod
     * @return static
     */
    public function setPatternPeriod(null|FHIRPeriod $patternPeriod): self
    {
        if (null === $patternPeriod) {
            unset($this->patternPeriod);
            return $this;
        }
        $this->patternPeriod = $patternPeriod;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity
     */
    public function getPatternQuantity(): null|FHIRQuantity
    {
        return $this->patternQuantity ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $patternQuantity
     * @return static
     */
    public function setPatternQuantity(null|FHIRQuantity $patternQuantity): self
    {
        if (null === $patternQuantity) {
            unset($this->patternQuantity);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange
     */
    public function getPatternRange(): null|FHIRRange
    {
        return $this->patternRange ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange $patternRange
     * @return static
     */
    public function setPatternRange(null|FHIRRange $patternRange): self
    {
        if (null === $patternRange) {
            unset($this->patternRange);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRatio
     */
    public function getPatternRatio(): null|FHIRRatio
    {
        return $this->patternRatio ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRatio $patternRatio
     * @return static
     */
    public function setPatternRatio(null|FHIRRatio $patternRatio): self
    {
        if (null === $patternRatio) {
            unset($this->patternRatio);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getPatternReference(): null|FHIRReference
    {
        return $this->patternReference ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $patternReference
     * @return static
     */
    public function setPatternReference(null|FHIRReference $patternReference): self
    {
        if (null === $patternReference) {
            unset($this->patternReference);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledData
     */
    public function getPatternSampledData(): null|FHIRSampledData
    {
        return $this->patternSampledData ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledData $patternSampledData
     * @return static
     */
    public function setPatternSampledData(null|FHIRSampledData $patternSampledData): self
    {
        if (null === $patternSampledData) {
            unset($this->patternSampledData);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSignature
     */
    public function getPatternSignature(): null|FHIRSignature
    {
        return $this->patternSignature ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSignature $patternSignature
     * @return static
     */
    public function setPatternSignature(null|FHIRSignature $patternSignature): self
    {
        if (null === $patternSignature) {
            unset($this->patternSignature);
            return $this;
        }
        $this->patternSignature = $patternSignature;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming
     */
    public function getPatternTiming(): null|FHIRTiming
    {
        return $this->patternTiming ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming $patternTiming
     * @return static
     */
    public function setPatternTiming(null|FHIRTiming $patternTiming): self
    {
        if (null === $patternTiming) {
            unset($this->patternTiming);
            return $this;
        }
        $this->patternTiming = $patternTiming;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta
     */
    public function getPatternMeta(): null|FHIRMeta
    {
        return $this->patternMeta ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta $patternMeta
     * @return static
     */
    public function setPatternMeta(null|FHIRMeta $patternMeta): self
    {
        if (null === $patternMeta) {
            unset($this->patternMeta);
            return $this;
        }
        $this->patternMeta = $patternMeta;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionExample[]
     */
    public function getExample(): array
    {
        return $this->example ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionExample>
     */
    public function getExampleIterator(): iterable
    {
        if (!isset($this->example) || [] === $this->example) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->example);
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A sample value for this element demonstrating the type of information that would
     * typically be found in the element.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionExample $example
     * @return static
     */
    public function addExample(FHIRElementDefinitionExample $example): self
    {
        if (!isset($this->example)) {
            $this->example = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionExample ...$example
     * @return static
     */
    public function setExample(FHIRElementDefinitionExample ...$example): self
    {
        $this->example = $example;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate
     */
    public function getMinValueDate(): null|FHIRDate
    {
        return $this->minValueDate ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $minValueDate
     * @return static
     */
    public function setMinValueDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $minValueDate): self
    {
        if (null === $minValueDate) {
            unset($this->minValueDate);
            return $this;
        }
        if (!($minValueDate instanceof FHIRDate)) {
            $minValueDate = new FHIRDate(value: $minValueDate);
        }
        $this->minValueDate = $minValueDate;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime
     */
    public function getMinValueDateTime(): null|FHIRDateTime
    {
        return $this->minValueDateTime ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $minValueDateTime
     * @return static
     */
    public function setMinValueDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $minValueDateTime): self
    {
        if (null === $minValueDateTime) {
            unset($this->minValueDateTime);
            return $this;
        }
        if (!($minValueDateTime instanceof FHIRDateTime)) {
            $minValueDateTime = new FHIRDateTime(value: $minValueDateTime);
        }
        $this->minValueDateTime = $minValueDateTime;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant
     */
    public function getMinValueInstant(): null|FHIRInstant
    {
        return $this->minValueInstant ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant $minValueInstant
     * @return static
     */
    public function setMinValueInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $minValueInstant): self
    {
        if (null === $minValueInstant) {
            unset($this->minValueInstant);
            return $this;
        }
        if (!($minValueInstant instanceof FHIRInstant)) {
            $minValueInstant = new FHIRInstant(value: $minValueInstant);
        }
        $this->minValueInstant = $minValueInstant;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime
     */
    public function getMinValueTime(): null|FHIRTime
    {
        return $this->minValueTime ?? null;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime $minValueTime
     * @return static
     */
    public function setMinValueTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $minValueTime): self
    {
        if (null === $minValueTime) {
            unset($this->minValueTime);
            return $this;
        }
        if (!($minValueTime instanceof FHIRTime)) {
            $minValueTime = new FHIRTime(value: $minValueTime);
        }
        $this->minValueTime = $minValueTime;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getMinValueDecimal(): null|FHIRDecimal
    {
        return $this->minValueDecimal ?? null;
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $minValueDecimal
     * @return static
     */
    public function setMinValueDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $minValueDecimal): self
    {
        if (null === $minValueDecimal) {
            unset($this->minValueDecimal);
            return $this;
        }
        if (!($minValueDecimal instanceof FHIRDecimal)) {
            $minValueDecimal = new FHIRDecimal(value: $minValueDecimal);
        }
        $this->minValueDecimal = $minValueDecimal;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger
     */
    public function getMinValueInteger(): null|FHIRInteger
    {
        return $this->minValueInteger ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $minValueInteger
     * @return static
     */
    public function setMinValueInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $minValueInteger): self
    {
        if (null === $minValueInteger) {
            unset($this->minValueInteger);
            return $this;
        }
        if (!($minValueInteger instanceof FHIRInteger)) {
            $minValueInteger = new FHIRInteger(value: $minValueInteger);
        }
        $this->minValueInteger = $minValueInteger;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt
     */
    public function getMinValuePositiveInt(): null|FHIRPositiveInt
    {
        return $this->minValuePositiveInt ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $minValuePositiveInt
     * @return static
     */
    public function setMinValuePositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $minValuePositiveInt): self
    {
        if (null === $minValuePositiveInt) {
            unset($this->minValuePositiveInt);
            return $this;
        }
        if (!($minValuePositiveInt instanceof FHIRPositiveInt)) {
            $minValuePositiveInt = new FHIRPositiveInt(value: $minValuePositiveInt);
        }
        $this->minValuePositiveInt = $minValuePositiveInt;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt
     */
    public function getMinValueUnsignedInt(): null|FHIRUnsignedInt
    {
        return $this->minValueUnsignedInt ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt $minValueUnsignedInt
     * @return static
     */
    public function setMinValueUnsignedInt(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $minValueUnsignedInt): self
    {
        if (null === $minValueUnsignedInt) {
            unset($this->minValueUnsignedInt);
            return $this;
        }
        if (!($minValueUnsignedInt instanceof FHIRUnsignedInt)) {
            $minValueUnsignedInt = new FHIRUnsignedInt(value: $minValueUnsignedInt);
        }
        $this->minValueUnsignedInt = $minValueUnsignedInt;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity
     */
    public function getMinValueQuantity(): null|FHIRQuantity
    {
        return $this->minValueQuantity ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $minValueQuantity
     * @return static
     */
    public function setMinValueQuantity(null|FHIRQuantity $minValueQuantity): self
    {
        if (null === $minValueQuantity) {
            unset($this->minValueQuantity);
            return $this;
        }
        $this->minValueQuantity = $minValueQuantity;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate
     */
    public function getMaxValueDate(): null|FHIRDate
    {
        return $this->maxValueDate ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $maxValueDate
     * @return static
     */
    public function setMaxValueDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $maxValueDate): self
    {
        if (null === $maxValueDate) {
            unset($this->maxValueDate);
            return $this;
        }
        if (!($maxValueDate instanceof FHIRDate)) {
            $maxValueDate = new FHIRDate(value: $maxValueDate);
        }
        $this->maxValueDate = $maxValueDate;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime
     */
    public function getMaxValueDateTime(): null|FHIRDateTime
    {
        return $this->maxValueDateTime ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $maxValueDateTime
     * @return static
     */
    public function setMaxValueDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $maxValueDateTime): self
    {
        if (null === $maxValueDateTime) {
            unset($this->maxValueDateTime);
            return $this;
        }
        if (!($maxValueDateTime instanceof FHIRDateTime)) {
            $maxValueDateTime = new FHIRDateTime(value: $maxValueDateTime);
        }
        $this->maxValueDateTime = $maxValueDateTime;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant
     */
    public function getMaxValueInstant(): null|FHIRInstant
    {
        return $this->maxValueInstant ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant $maxValueInstant
     * @return static
     */
    public function setMaxValueInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $maxValueInstant): self
    {
        if (null === $maxValueInstant) {
            unset($this->maxValueInstant);
            return $this;
        }
        if (!($maxValueInstant instanceof FHIRInstant)) {
            $maxValueInstant = new FHIRInstant(value: $maxValueInstant);
        }
        $this->maxValueInstant = $maxValueInstant;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime
     */
    public function getMaxValueTime(): null|FHIRTime
    {
        return $this->maxValueTime ?? null;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime $maxValueTime
     * @return static
     */
    public function setMaxValueTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $maxValueTime): self
    {
        if (null === $maxValueTime) {
            unset($this->maxValueTime);
            return $this;
        }
        if (!($maxValueTime instanceof FHIRTime)) {
            $maxValueTime = new FHIRTime(value: $maxValueTime);
        }
        $this->maxValueTime = $maxValueTime;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getMaxValueDecimal(): null|FHIRDecimal
    {
        return $this->maxValueDecimal ?? null;
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $maxValueDecimal
     * @return static
     */
    public function setMaxValueDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $maxValueDecimal): self
    {
        if (null === $maxValueDecimal) {
            unset($this->maxValueDecimal);
            return $this;
        }
        if (!($maxValueDecimal instanceof FHIRDecimal)) {
            $maxValueDecimal = new FHIRDecimal(value: $maxValueDecimal);
        }
        $this->maxValueDecimal = $maxValueDecimal;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger
     */
    public function getMaxValueInteger(): null|FHIRInteger
    {
        return $this->maxValueInteger ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $maxValueInteger
     * @return static
     */
    public function setMaxValueInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $maxValueInteger): self
    {
        if (null === $maxValueInteger) {
            unset($this->maxValueInteger);
            return $this;
        }
        if (!($maxValueInteger instanceof FHIRInteger)) {
            $maxValueInteger = new FHIRInteger(value: $maxValueInteger);
        }
        $this->maxValueInteger = $maxValueInteger;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt
     */
    public function getMaxValuePositiveInt(): null|FHIRPositiveInt
    {
        return $this->maxValuePositiveInt ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $maxValuePositiveInt
     * @return static
     */
    public function setMaxValuePositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $maxValuePositiveInt): self
    {
        if (null === $maxValuePositiveInt) {
            unset($this->maxValuePositiveInt);
            return $this;
        }
        if (!($maxValuePositiveInt instanceof FHIRPositiveInt)) {
            $maxValuePositiveInt = new FHIRPositiveInt(value: $maxValuePositiveInt);
        }
        $this->maxValuePositiveInt = $maxValuePositiveInt;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt
     */
    public function getMaxValueUnsignedInt(): null|FHIRUnsignedInt
    {
        return $this->maxValueUnsignedInt ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt $maxValueUnsignedInt
     * @return static
     */
    public function setMaxValueUnsignedInt(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $maxValueUnsignedInt): self
    {
        if (null === $maxValueUnsignedInt) {
            unset($this->maxValueUnsignedInt);
            return $this;
        }
        if (!($maxValueUnsignedInt instanceof FHIRUnsignedInt)) {
            $maxValueUnsignedInt = new FHIRUnsignedInt(value: $maxValueUnsignedInt);
        }
        $this->maxValueUnsignedInt = $maxValueUnsignedInt;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity
     */
    public function getMaxValueQuantity(): null|FHIRQuantity
    {
        return $this->maxValueQuantity ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $maxValueQuantity
     * @return static
     */
    public function setMaxValueQuantity(null|FHIRQuantity $maxValueQuantity): self
    {
        if (null === $maxValueQuantity) {
            unset($this->maxValueQuantity);
            return $this;
        }
        $this->maxValueQuantity = $maxValueQuantity;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger
     */
    public function getMaxLength(): null|FHIRInteger
    {
        return $this->maxLength ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $maxLength
     * @return static
     */
    public function setMaxLength(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $maxLength): self
    {
        if (null === $maxLength) {
            unset($this->maxLength);
            return $this;
        }
        if (!($maxLength instanceof FHIRInteger)) {
            $maxLength = new FHIRInteger(value: $maxLength);
        }
        $this->maxLength = $maxLength;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId[]
     */
    public function getCondition(): array
    {
        return $this->condition ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId>
     */
    public function getConditionIterator(): iterable
    {
        if (!isset($this->condition) || [] === $this->condition) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->condition);
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $condition
     * @return static
     */
    public function addCondition(string|FHIRIdPrimitive|FHIRId $condition): self
    {
        if (!($condition instanceof FHIRId)) {
            $condition = new FHIRId(value: $condition);
        }
        if (!isset($this->condition)) {
            $this->condition = [];
        }
        $this->condition[] = $condition;
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId ...$condition
     * @return static
     */
    public function setCondition(string|FHIRIdPrimitive|FHIRId ...$condition): self
    {
        $this->condition = [];
        foreach($condition as $v) {
            if ($v instanceof FHIRId) {
                $this->condition[] = $v;
            } else {
                $this->condition[] = new FHIRId(value: $v);
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint[]
     */
    public function getConstraint(): array
    {
        return $this->constraint ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint>
     */
    public function getConstraintIterator(): iterable
    {
        if (!isset($this->constraint) || [] === $this->constraint) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->constraint);
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Formal constraints such as co-occurrence and other constraints that can be
     * computationally evaluated within the context of the instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint $constraint
     * @return static
     */
    public function addConstraint(FHIRElementDefinitionConstraint $constraint): self
    {
        if (!isset($this->constraint)) {
            $this->constraint = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint ...$constraint
     * @return static
     */
    public function setConstraint(FHIRElementDefinitionConstraint ...$constraint): self
    {
        $this->constraint = $constraint;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getMustSupport(): null|FHIRBoolean
    {
        return $this->mustSupport ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, implementations that produce or consume resources SHALL provide
     * "support" for the element in some meaningful way. If false, the element may be
     * ignored and not supported.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $mustSupport
     * @return static
     */
    public function setMustSupport(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $mustSupport): self
    {
        if (null === $mustSupport) {
            unset($this->mustSupport);
            return $this;
        }
        if (!($mustSupport instanceof FHIRBoolean)) {
            $mustSupport = new FHIRBoolean(value: $mustSupport);
        }
        $this->mustSupport = $mustSupport;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getIsModifier(): null|FHIRBoolean
    {
        return $this->isModifier ?? null;
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $isModifier
     * @return static
     */
    public function setIsModifier(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isModifier): self
    {
        if (null === $isModifier) {
            unset($this->isModifier);
            return $this;
        }
        if (!($isModifier instanceof FHIRBoolean)) {
            $isModifier = new FHIRBoolean(value: $isModifier);
        }
        $this->isModifier = $isModifier;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the element should be included if a client requests a search with the
     * parameter _summary=true.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getIsSummary(): null|FHIRBoolean
    {
        return $this->isSummary ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the element should be included if a client requests a search with the
     * parameter _summary=true.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $isSummary
     * @return static
     */
    public function setIsSummary(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isSummary): self
    {
        if (null === $isSummary) {
            unset($this->isSummary);
            return $this;
        }
        if (!($isSummary instanceof FHIRBoolean)) {
            $isSummary = new FHIRBoolean(value: $isSummary);
        }
        $this->isSummary = $isSummary;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding
     */
    public function getBinding(): null|FHIRElementDefinitionBinding
    {
        return $this->binding ?? null;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept,
     * Quantity), or the data types (string, uri).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding $binding
     * @return static
     */
    public function setBinding(null|FHIRElementDefinitionBinding $binding): self
    {
        if (null === $binding) {
            unset($this->binding);
            return $this;
        }
        $this->binding = $binding;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping[]
     */
    public function getMapping(): array
    {
        return $this->mapping ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping>
     */
    public function getMappingIterator(): iterable
    {
        if (!isset($this->mapping) || [] === $this->mapping) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->mapping);
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a concept from an external specification that roughly corresponds to
     * this element.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping $mapping
     * @return static
     */
    public function addMapping(FHIRElementDefinitionMapping $mapping): self
    {
        if (!isset($this->mapping)) {
            $this->mapping = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping ...$mapping
     * @return static
     */
    public function setMapping(FHIRElementDefinitionMapping ...$mapping): self
    {
        $this->mapping = $mapping;
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
        if (null !== ($v = $this->getPath())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATH] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_PATH])) {
            $v = $this->getPath();
            foreach($validationRules[self::FIELD_PATH] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATH])) {
                        $errs[self::FIELD_PATH] = [];
                    }
                    $errs[self::FIELD_PATH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPRESENTATION])) {
            $v = $this->getRepresentation();
            foreach($validationRules[self::FIELD_REPRESENTATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REPRESENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPRESENTATION])) {
                        $errs[self::FIELD_REPRESENTATION] = [];
                    }
                    $errs[self::FIELD_REPRESENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SLICE_NAME])) {
            $v = $this->getSliceName();
            foreach($validationRules[self::FIELD_SLICE_NAME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SLICE_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SLICE_NAME])) {
                        $errs[self::FIELD_SLICE_NAME] = [];
                    }
                    $errs[self::FIELD_SLICE_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LABEL])) {
            $v = $this->getLabel();
            foreach($validationRules[self::FIELD_LABEL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LABEL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LABEL])) {
                        $errs[self::FIELD_LABEL] = [];
                    }
                    $errs[self::FIELD_LABEL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SLICING])) {
            $v = $this->getSlicing();
            foreach($validationRules[self::FIELD_SLICING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SLICING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SLICING])) {
                        $errs[self::FIELD_SLICING] = [];
                    }
                    $errs[self::FIELD_SLICING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SHORT])) {
            $v = $this->getShort();
            foreach($validationRules[self::FIELD_SHORT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SHORT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SHORT])) {
                        $errs[self::FIELD_SHORT] = [];
                    }
                    $errs[self::FIELD_SHORT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION])) {
            $v = $this->getDefinition();
            foreach($validationRules[self::FIELD_DEFINITION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION])) {
                        $errs[self::FIELD_DEFINITION] = [];
                    }
                    $errs[self::FIELD_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMMENT])) {
            $v = $this->getComment();
            foreach($validationRules[self::FIELD_COMMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COMMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMMENT])) {
                        $errs[self::FIELD_COMMENT] = [];
                    }
                    $errs[self::FIELD_COMMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUIREMENTS])) {
            $v = $this->getRequirements();
            foreach($validationRules[self::FIELD_REQUIREMENTS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REQUIREMENTS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUIREMENTS])) {
                        $errs[self::FIELD_REQUIREMENTS] = [];
                    }
                    $errs[self::FIELD_REQUIREMENTS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALIAS])) {
            $v = $this->getAlias();
            foreach($validationRules[self::FIELD_ALIAS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ALIAS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALIAS])) {
                        $errs[self::FIELD_ALIAS] = [];
                    }
                    $errs[self::FIELD_ALIAS][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_BASE])) {
            $v = $this->getBase();
            foreach($validationRules[self::FIELD_BASE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BASE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASE])) {
                        $errs[self::FIELD_BASE] = [];
                    }
                    $errs[self::FIELD_BASE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT_REFERENCE])) {
            $v = $this->getContentReference();
            foreach($validationRules[self::FIELD_CONTENT_REFERENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTENT_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT_REFERENCE])) {
                        $errs[self::FIELD_CONTENT_REFERENCE] = [];
                    }
                    $errs[self::FIELD_CONTENT_REFERENCE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_MEANING_WHEN_MISSING])) {
            $v = $this->getMeaningWhenMissing();
            foreach($validationRules[self::FIELD_MEANING_WHEN_MISSING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MEANING_WHEN_MISSING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEANING_WHEN_MISSING])) {
                        $errs[self::FIELD_MEANING_WHEN_MISSING] = [];
                    }
                    $errs[self::FIELD_MEANING_WHEN_MISSING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORDER_MEANING])) {
            $v = $this->getOrderMeaning();
            foreach($validationRules[self::FIELD_ORDER_MEANING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ORDER_MEANING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORDER_MEANING])) {
                        $errs[self::FIELD_ORDER_MEANING] = [];
                    }
                    $errs[self::FIELD_ORDER_MEANING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_BASE_64BINARY])) {
            $v = $this->getFixedBase64Binary();
            foreach($validationRules[self::FIELD_FIXED_BASE_64BINARY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_BASE_64BINARY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_BOOLEAN, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_CODE])) {
                        $errs[self::FIELD_FIXED_CODE] = [];
                    }
                    $errs[self::FIELD_FIXED_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_DATE])) {
            $v = $this->getFixedDate();
            foreach($validationRules[self::FIELD_FIXED_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_DATE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_DATE_TIME, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_DECIMAL])) {
                        $errs[self::FIELD_FIXED_DECIMAL] = [];
                    }
                    $errs[self::FIELD_FIXED_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_ID])) {
            $v = $this->getFixedId();
            foreach($validationRules[self::FIELD_FIXED_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_ID])) {
                        $errs[self::FIELD_FIXED_ID] = [];
                    }
                    $errs[self::FIELD_FIXED_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_INSTANT])) {
            $v = $this->getFixedInstant();
            foreach($validationRules[self::FIELD_FIXED_INSTANT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_INSTANT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_INTEGER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_MARKDOWN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_MARKDOWN])) {
                        $errs[self::FIELD_FIXED_MARKDOWN] = [];
                    }
                    $errs[self::FIELD_FIXED_MARKDOWN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_OID])) {
            $v = $this->getFixedOid();
            foreach($validationRules[self::FIELD_FIXED_OID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_OID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_OID])) {
                        $errs[self::FIELD_FIXED_OID] = [];
                    }
                    $errs[self::FIELD_FIXED_OID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_POSITIVE_INT])) {
            $v = $this->getFixedPositiveInt();
            foreach($validationRules[self::FIELD_FIXED_POSITIVE_INT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_POSITIVE_INT])) {
                        $errs[self::FIELD_FIXED_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_FIXED_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_STRING])) {
            $v = $this->getFixedString();
            foreach($validationRules[self::FIELD_FIXED_STRING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_STRING, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_TIME])) {
                        $errs[self::FIELD_FIXED_TIME] = [];
                    }
                    $errs[self::FIELD_FIXED_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_UNSIGNED_INT])) {
            $v = $this->getFixedUnsignedInt();
            foreach($validationRules[self::FIELD_FIXED_UNSIGNED_INT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_UNSIGNED_INT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_URI])) {
                        $errs[self::FIELD_FIXED_URI] = [];
                    }
                    $errs[self::FIELD_FIXED_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_ADDRESS])) {
            $v = $this->getFixedAddress();
            foreach($validationRules[self::FIELD_FIXED_ADDRESS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_ADDRESS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_AGE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_ANNOTATION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_ATTACHMENT])) {
                        $errs[self::FIELD_FIXED_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_FIXED_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_CODEABLE_CONCEPT])) {
            $v = $this->getFixedCodeableConcept();
            foreach($validationRules[self::FIELD_FIXED_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_CODEABLE_CONCEPT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_CODING, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_CONTACT_POINT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_COUNT])) {
                        $errs[self::FIELD_FIXED_COUNT] = [];
                    }
                    $errs[self::FIELD_FIXED_COUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_DISTANCE])) {
            $v = $this->getFixedDistance();
            foreach($validationRules[self::FIELD_FIXED_DISTANCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_DISTANCE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_DURATION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_HUMAN_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_HUMAN_NAME])) {
                        $errs[self::FIELD_FIXED_HUMAN_NAME] = [];
                    }
                    $errs[self::FIELD_FIXED_HUMAN_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_IDENTIFIER])) {
            $v = $this->getFixedIdentifier();
            foreach($validationRules[self::FIELD_FIXED_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_IDENTIFIER])) {
                        $errs[self::FIELD_FIXED_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_FIXED_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_MONEY])) {
            $v = $this->getFixedMoney();
            foreach($validationRules[self::FIELD_FIXED_MONEY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_MONEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_MONEY])) {
                        $errs[self::FIELD_FIXED_MONEY] = [];
                    }
                    $errs[self::FIELD_FIXED_MONEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_PERIOD])) {
            $v = $this->getFixedPeriod();
            foreach($validationRules[self::FIELD_FIXED_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_PERIOD])) {
                        $errs[self::FIELD_FIXED_PERIOD] = [];
                    }
                    $errs[self::FIELD_FIXED_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_QUANTITY])) {
            $v = $this->getFixedQuantity();
            foreach($validationRules[self::FIELD_FIXED_QUANTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_QUANTITY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_RANGE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_RATIO, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_REFERENCE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_SAMPLED_DATA, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_SIGNATURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_SIGNATURE])) {
                        $errs[self::FIELD_FIXED_SIGNATURE] = [];
                    }
                    $errs[self::FIELD_FIXED_SIGNATURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_TIMING])) {
            $v = $this->getFixedTiming();
            foreach($validationRules[self::FIELD_FIXED_TIMING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_TIMING])) {
                        $errs[self::FIELD_FIXED_TIMING] = [];
                    }
                    $errs[self::FIELD_FIXED_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_META])) {
            $v = $this->getFixedMeta();
            foreach($validationRules[self::FIELD_FIXED_META] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_META])) {
                        $errs[self::FIELD_FIXED_META] = [];
                    }
                    $errs[self::FIELD_FIXED_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_BASE_64BINARY])) {
            $v = $this->getPatternBase64Binary();
            foreach($validationRules[self::FIELD_PATTERN_BASE_64BINARY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_BASE_64BINARY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_BOOLEAN, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_CODE])) {
                        $errs[self::FIELD_PATTERN_CODE] = [];
                    }
                    $errs[self::FIELD_PATTERN_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_DATE])) {
            $v = $this->getPatternDate();
            foreach($validationRules[self::FIELD_PATTERN_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_DATE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_DATE_TIME, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_DECIMAL])) {
                        $errs[self::FIELD_PATTERN_DECIMAL] = [];
                    }
                    $errs[self::FIELD_PATTERN_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_ID])) {
            $v = $this->getPatternId();
            foreach($validationRules[self::FIELD_PATTERN_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_ID])) {
                        $errs[self::FIELD_PATTERN_ID] = [];
                    }
                    $errs[self::FIELD_PATTERN_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_INSTANT])) {
            $v = $this->getPatternInstant();
            foreach($validationRules[self::FIELD_PATTERN_INSTANT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_INSTANT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_INTEGER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_MARKDOWN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_MARKDOWN])) {
                        $errs[self::FIELD_PATTERN_MARKDOWN] = [];
                    }
                    $errs[self::FIELD_PATTERN_MARKDOWN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_OID])) {
            $v = $this->getPatternOid();
            foreach($validationRules[self::FIELD_PATTERN_OID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_OID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_OID])) {
                        $errs[self::FIELD_PATTERN_OID] = [];
                    }
                    $errs[self::FIELD_PATTERN_OID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_POSITIVE_INT])) {
            $v = $this->getPatternPositiveInt();
            foreach($validationRules[self::FIELD_PATTERN_POSITIVE_INT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_POSITIVE_INT])) {
                        $errs[self::FIELD_PATTERN_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_PATTERN_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_STRING])) {
            $v = $this->getPatternString();
            foreach($validationRules[self::FIELD_PATTERN_STRING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_STRING, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_TIME])) {
                        $errs[self::FIELD_PATTERN_TIME] = [];
                    }
                    $errs[self::FIELD_PATTERN_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_UNSIGNED_INT])) {
            $v = $this->getPatternUnsignedInt();
            foreach($validationRules[self::FIELD_PATTERN_UNSIGNED_INT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_UNSIGNED_INT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_URI])) {
                        $errs[self::FIELD_PATTERN_URI] = [];
                    }
                    $errs[self::FIELD_PATTERN_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_ADDRESS])) {
            $v = $this->getPatternAddress();
            foreach($validationRules[self::FIELD_PATTERN_ADDRESS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_ADDRESS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_AGE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_ANNOTATION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_ATTACHMENT])) {
                        $errs[self::FIELD_PATTERN_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_PATTERN_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_CODEABLE_CONCEPT])) {
            $v = $this->getPatternCodeableConcept();
            foreach($validationRules[self::FIELD_PATTERN_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_CODEABLE_CONCEPT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_CODING, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_CONTACT_POINT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_COUNT])) {
                        $errs[self::FIELD_PATTERN_COUNT] = [];
                    }
                    $errs[self::FIELD_PATTERN_COUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_DISTANCE])) {
            $v = $this->getPatternDistance();
            foreach($validationRules[self::FIELD_PATTERN_DISTANCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_DISTANCE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_DURATION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_HUMAN_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_HUMAN_NAME])) {
                        $errs[self::FIELD_PATTERN_HUMAN_NAME] = [];
                    }
                    $errs[self::FIELD_PATTERN_HUMAN_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_IDENTIFIER])) {
            $v = $this->getPatternIdentifier();
            foreach($validationRules[self::FIELD_PATTERN_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_IDENTIFIER])) {
                        $errs[self::FIELD_PATTERN_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_PATTERN_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_MONEY])) {
            $v = $this->getPatternMoney();
            foreach($validationRules[self::FIELD_PATTERN_MONEY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_MONEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_MONEY])) {
                        $errs[self::FIELD_PATTERN_MONEY] = [];
                    }
                    $errs[self::FIELD_PATTERN_MONEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_PERIOD])) {
            $v = $this->getPatternPeriod();
            foreach($validationRules[self::FIELD_PATTERN_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_PERIOD])) {
                        $errs[self::FIELD_PATTERN_PERIOD] = [];
                    }
                    $errs[self::FIELD_PATTERN_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_QUANTITY])) {
            $v = $this->getPatternQuantity();
            foreach($validationRules[self::FIELD_PATTERN_QUANTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_QUANTITY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_RANGE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_RATIO, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_REFERENCE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_SAMPLED_DATA, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_SIGNATURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_SIGNATURE])) {
                        $errs[self::FIELD_PATTERN_SIGNATURE] = [];
                    }
                    $errs[self::FIELD_PATTERN_SIGNATURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_TIMING])) {
            $v = $this->getPatternTiming();
            foreach($validationRules[self::FIELD_PATTERN_TIMING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_TIMING])) {
                        $errs[self::FIELD_PATTERN_TIMING] = [];
                    }
                    $errs[self::FIELD_PATTERN_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_META])) {
            $v = $this->getPatternMeta();
            foreach($validationRules[self::FIELD_PATTERN_META] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATTERN_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_META])) {
                        $errs[self::FIELD_PATTERN_META] = [];
                    }
                    $errs[self::FIELD_PATTERN_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE])) {
            $v = $this->getExample();
            foreach($validationRules[self::FIELD_EXAMPLE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE])) {
                        $errs[self::FIELD_EXAMPLE] = [];
                    }
                    $errs[self::FIELD_EXAMPLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_DATE])) {
            $v = $this->getMinValueDate();
            foreach($validationRules[self::FIELD_MIN_VALUE_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MIN_VALUE_DATE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MIN_VALUE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_DATE_TIME])) {
                        $errs[self::FIELD_MIN_VALUE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_INSTANT])) {
            $v = $this->getMinValueInstant();
            foreach($validationRules[self::FIELD_MIN_VALUE_INSTANT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MIN_VALUE_INSTANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_INSTANT])) {
                        $errs[self::FIELD_MIN_VALUE_INSTANT] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_INSTANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_TIME])) {
            $v = $this->getMinValueTime();
            foreach($validationRules[self::FIELD_MIN_VALUE_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MIN_VALUE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_TIME])) {
                        $errs[self::FIELD_MIN_VALUE_TIME] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_DECIMAL])) {
            $v = $this->getMinValueDecimal();
            foreach($validationRules[self::FIELD_MIN_VALUE_DECIMAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MIN_VALUE_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_DECIMAL])) {
                        $errs[self::FIELD_MIN_VALUE_DECIMAL] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_INTEGER])) {
            $v = $this->getMinValueInteger();
            foreach($validationRules[self::FIELD_MIN_VALUE_INTEGER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MIN_VALUE_INTEGER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MIN_VALUE_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_POSITIVE_INT])) {
                        $errs[self::FIELD_MIN_VALUE_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_UNSIGNED_INT])) {
            $v = $this->getMinValueUnsignedInt();
            foreach($validationRules[self::FIELD_MIN_VALUE_UNSIGNED_INT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MIN_VALUE_UNSIGNED_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_UNSIGNED_INT])) {
                        $errs[self::FIELD_MIN_VALUE_UNSIGNED_INT] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_UNSIGNED_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_QUANTITY])) {
            $v = $this->getMinValueQuantity();
            foreach($validationRules[self::FIELD_MIN_VALUE_QUANTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MIN_VALUE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_QUANTITY])) {
                        $errs[self::FIELD_MIN_VALUE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_DATE])) {
            $v = $this->getMaxValueDate();
            foreach($validationRules[self::FIELD_MAX_VALUE_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_VALUE_DATE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_VALUE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_DATE_TIME])) {
                        $errs[self::FIELD_MAX_VALUE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_INSTANT])) {
            $v = $this->getMaxValueInstant();
            foreach($validationRules[self::FIELD_MAX_VALUE_INSTANT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_VALUE_INSTANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_INSTANT])) {
                        $errs[self::FIELD_MAX_VALUE_INSTANT] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_INSTANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_TIME])) {
            $v = $this->getMaxValueTime();
            foreach($validationRules[self::FIELD_MAX_VALUE_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_VALUE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_TIME])) {
                        $errs[self::FIELD_MAX_VALUE_TIME] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_DECIMAL])) {
            $v = $this->getMaxValueDecimal();
            foreach($validationRules[self::FIELD_MAX_VALUE_DECIMAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_VALUE_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_DECIMAL])) {
                        $errs[self::FIELD_MAX_VALUE_DECIMAL] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_INTEGER])) {
            $v = $this->getMaxValueInteger();
            foreach($validationRules[self::FIELD_MAX_VALUE_INTEGER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_VALUE_INTEGER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_VALUE_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_POSITIVE_INT])) {
                        $errs[self::FIELD_MAX_VALUE_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_UNSIGNED_INT])) {
            $v = $this->getMaxValueUnsignedInt();
            foreach($validationRules[self::FIELD_MAX_VALUE_UNSIGNED_INT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_VALUE_UNSIGNED_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_UNSIGNED_INT])) {
                        $errs[self::FIELD_MAX_VALUE_UNSIGNED_INT] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_UNSIGNED_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_QUANTITY])) {
            $v = $this->getMaxValueQuantity();
            foreach($validationRules[self::FIELD_MAX_VALUE_QUANTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_VALUE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_QUANTITY])) {
                        $errs[self::FIELD_MAX_VALUE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_LENGTH])) {
            $v = $this->getMaxLength();
            foreach($validationRules[self::FIELD_MAX_LENGTH] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_LENGTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_LENGTH])) {
                        $errs[self::FIELD_MAX_LENGTH] = [];
                    }
                    $errs[self::FIELD_MAX_LENGTH][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_CONSTRAINT])) {
            $v = $this->getConstraint();
            foreach($validationRules[self::FIELD_CONSTRAINT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONSTRAINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONSTRAINT])) {
                        $errs[self::FIELD_CONSTRAINT] = [];
                    }
                    $errs[self::FIELD_CONSTRAINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MUST_SUPPORT])) {
            $v = $this->getMustSupport();
            foreach($validationRules[self::FIELD_MUST_SUPPORT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MUST_SUPPORT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MUST_SUPPORT])) {
                        $errs[self::FIELD_MUST_SUPPORT] = [];
                    }
                    $errs[self::FIELD_MUST_SUPPORT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IS_MODIFIER])) {
            $v = $this->getIsModifier();
            foreach($validationRules[self::FIELD_IS_MODIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IS_MODIFIER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IS_SUMMARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IS_SUMMARY])) {
                        $errs[self::FIELD_IS_SUMMARY] = [];
                    }
                    $errs[self::FIELD_IS_SUMMARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BINDING])) {
            $v = $this->getBinding();
            foreach($validationRules[self::FIELD_BINDING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BINDING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BINDING])) {
                        $errs[self::FIELD_BINDING] = [];
                    }
                    $errs[self::FIELD_BINDING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAPPING])) {
            $v = $this->getMapping();
            foreach($validationRules[self::FIELD_MAPPING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAPPING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAPPING])) {
                        $errs[self::FIELD_MAPPING] = [];
                    }
                    $errs[self::FIELD_MAPPING][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRElementDefinition)) {
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
            } else if (self::FIELD_PATH === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPath(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REPRESENTATION === $childName) {
                $v = new FHIRPropertyRepresentation(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addRepresentation(FHIRPropertyRepresentation::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SLICE_NAME === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setSliceName(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LABEL === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setLabel(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CODE === $childName) {
                $v = new FHIRCoding();
                $type->addCode(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SLICING === $childName) {
                $v = new FHIRElementDefinitionSlicing();
                $type->setSlicing(FHIRElementDefinitionSlicing::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SHORT === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setShort(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFINITION === $childName) {
                $v = new FHIRMarkdown(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefinition(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COMMENT === $childName) {
                $v = new FHIRMarkdown(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setComment(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REQUIREMENTS === $childName) {
                $v = new FHIRMarkdown(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setRequirements(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ALIAS === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addAlias(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MIN === $childName) {
                $v = new FHIRUnsignedInt(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMin(FHIRUnsignedInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAX === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMax(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BASE === $childName) {
                $v = new FHIRElementDefinitionBase();
                $type->setBase(FHIRElementDefinitionBase::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTENT_REFERENCE === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setContentReference(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRElementDefinitionType();
                $type->addType(FHIRElementDefinitionType::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_BASE_64BINARY === $childName) {
                $v = new FHIRBase64Binary(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefaultValueBase64Binary(FHIRBase64Binary::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_BOOLEAN === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefaultValueBoolean(FHIRBoolean::xmlUnserialize($n, $v, $config));
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
            } else if (self::FIELD_DEFAULT_VALUE_META === $childName) {
                $v = new FHIRMeta();
                $type->setDefaultValueMeta(FHIRMeta::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MEANING_WHEN_MISSING === $childName) {
                $v = new FHIRMarkdown(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMeaningWhenMissing(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ORDER_MEANING === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setOrderMeaning(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_BASE_64BINARY === $childName) {
                $v = new FHIRBase64Binary(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setFixedBase64Binary(FHIRBase64Binary::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_BOOLEAN === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setFixedBoolean(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_CODE === $childName) {
                $v = new FHIRCode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setFixedCode(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_DATE === $childName) {
                $v = new FHIRDate(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setFixedDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_DATE_TIME === $childName) {
                $v = new FHIRDateTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setFixedDateTime(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_DECIMAL === $childName) {
                $v = new FHIRDecimal(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setFixedDecimal(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_ID === $childName) {
                $v = new FHIRId(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setFixedId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_INSTANT === $childName) {
                $v = new FHIRInstant(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setFixedInstant(FHIRInstant::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_INTEGER === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setFixedInteger(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_MARKDOWN === $childName) {
                $v = new FHIRMarkdown(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setFixedMarkdown(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_OID === $childName) {
                $v = new FHIROid(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setFixedOid(FHIROid::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_POSITIVE_INT === $childName) {
                $v = new FHIRPositiveInt(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setFixedPositiveInt(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_STRING === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setFixedString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_TIME === $childName) {
                $v = new FHIRTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setFixedTime(FHIRTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_UNSIGNED_INT === $childName) {
                $v = new FHIRUnsignedInt(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setFixedUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_URI === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setFixedUri(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_ADDRESS === $childName) {
                $v = new FHIRAddress();
                $type->setFixedAddress(FHIRAddress::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_AGE === $childName) {
                $v = new FHIRAge();
                $type->setFixedAge(FHIRAge::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_ANNOTATION === $childName) {
                $v = new FHIRAnnotation();
                $type->setFixedAnnotation(FHIRAnnotation::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_ATTACHMENT === $childName) {
                $v = new FHIRAttachment();
                $type->setFixedAttachment(FHIRAttachment::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_CODEABLE_CONCEPT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setFixedCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_CODING === $childName) {
                $v = new FHIRCoding();
                $type->setFixedCoding(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_CONTACT_POINT === $childName) {
                $v = new FHIRContactPoint();
                $type->setFixedContactPoint(FHIRContactPoint::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_COUNT === $childName) {
                $v = new FHIRCount();
                $type->setFixedCount(FHIRCount::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_DISTANCE === $childName) {
                $v = new FHIRDistance();
                $type->setFixedDistance(FHIRDistance::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_DURATION === $childName) {
                $v = new FHIRDuration();
                $type->setFixedDuration(FHIRDuration::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_HUMAN_NAME === $childName) {
                $v = new FHIRHumanName();
                $type->setFixedHumanName(FHIRHumanName::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->setFixedIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_MONEY === $childName) {
                $v = new FHIRMoney();
                $type->setFixedMoney(FHIRMoney::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setFixedPeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_QUANTITY === $childName) {
                $v = new FHIRQuantity();
                $type->setFixedQuantity(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_RANGE === $childName) {
                $v = new FHIRRange();
                $type->setFixedRange(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_RATIO === $childName) {
                $v = new FHIRRatio();
                $type->setFixedRatio(FHIRRatio::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_REFERENCE === $childName) {
                $v = new FHIRReference();
                $type->setFixedReference(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_SAMPLED_DATA === $childName) {
                $v = new FHIRSampledData();
                $type->setFixedSampledData(FHIRSampledData::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_SIGNATURE === $childName) {
                $v = new FHIRSignature();
                $type->setFixedSignature(FHIRSignature::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_TIMING === $childName) {
                $v = new FHIRTiming();
                $type->setFixedTiming(FHIRTiming::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_META === $childName) {
                $v = new FHIRMeta();
                $type->setFixedMeta(FHIRMeta::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_BASE_64BINARY === $childName) {
                $v = new FHIRBase64Binary(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPatternBase64Binary(FHIRBase64Binary::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_BOOLEAN === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPatternBoolean(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_CODE === $childName) {
                $v = new FHIRCode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPatternCode(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_DATE === $childName) {
                $v = new FHIRDate(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPatternDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_DATE_TIME === $childName) {
                $v = new FHIRDateTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPatternDateTime(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_DECIMAL === $childName) {
                $v = new FHIRDecimal(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPatternDecimal(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_ID === $childName) {
                $v = new FHIRId(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPatternId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_INSTANT === $childName) {
                $v = new FHIRInstant(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPatternInstant(FHIRInstant::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_INTEGER === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPatternInteger(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_MARKDOWN === $childName) {
                $v = new FHIRMarkdown(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPatternMarkdown(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_OID === $childName) {
                $v = new FHIROid(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPatternOid(FHIROid::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_POSITIVE_INT === $childName) {
                $v = new FHIRPositiveInt(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPatternPositiveInt(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_STRING === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPatternString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_TIME === $childName) {
                $v = new FHIRTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPatternTime(FHIRTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_UNSIGNED_INT === $childName) {
                $v = new FHIRUnsignedInt(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPatternUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_URI === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPatternUri(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_ADDRESS === $childName) {
                $v = new FHIRAddress();
                $type->setPatternAddress(FHIRAddress::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_AGE === $childName) {
                $v = new FHIRAge();
                $type->setPatternAge(FHIRAge::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_ANNOTATION === $childName) {
                $v = new FHIRAnnotation();
                $type->setPatternAnnotation(FHIRAnnotation::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_ATTACHMENT === $childName) {
                $v = new FHIRAttachment();
                $type->setPatternAttachment(FHIRAttachment::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_CODEABLE_CONCEPT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setPatternCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_CODING === $childName) {
                $v = new FHIRCoding();
                $type->setPatternCoding(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_CONTACT_POINT === $childName) {
                $v = new FHIRContactPoint();
                $type->setPatternContactPoint(FHIRContactPoint::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_COUNT === $childName) {
                $v = new FHIRCount();
                $type->setPatternCount(FHIRCount::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_DISTANCE === $childName) {
                $v = new FHIRDistance();
                $type->setPatternDistance(FHIRDistance::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_DURATION === $childName) {
                $v = new FHIRDuration();
                $type->setPatternDuration(FHIRDuration::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_HUMAN_NAME === $childName) {
                $v = new FHIRHumanName();
                $type->setPatternHumanName(FHIRHumanName::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->setPatternIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_MONEY === $childName) {
                $v = new FHIRMoney();
                $type->setPatternMoney(FHIRMoney::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setPatternPeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_QUANTITY === $childName) {
                $v = new FHIRQuantity();
                $type->setPatternQuantity(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_RANGE === $childName) {
                $v = new FHIRRange();
                $type->setPatternRange(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_RATIO === $childName) {
                $v = new FHIRRatio();
                $type->setPatternRatio(FHIRRatio::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_REFERENCE === $childName) {
                $v = new FHIRReference();
                $type->setPatternReference(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_SAMPLED_DATA === $childName) {
                $v = new FHIRSampledData();
                $type->setPatternSampledData(FHIRSampledData::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_SIGNATURE === $childName) {
                $v = new FHIRSignature();
                $type->setPatternSignature(FHIRSignature::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_TIMING === $childName) {
                $v = new FHIRTiming();
                $type->setPatternTiming(FHIRTiming::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATTERN_META === $childName) {
                $v = new FHIRMeta();
                $type->setPatternMeta(FHIRMeta::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE === $childName) {
                $v = new FHIRElementDefinitionExample();
                $type->addExample(FHIRElementDefinitionExample::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MIN_VALUE_DATE === $childName) {
                $v = new FHIRDate(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMinValueDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MIN_VALUE_DATE_TIME === $childName) {
                $v = new FHIRDateTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMinValueDateTime(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MIN_VALUE_INSTANT === $childName) {
                $v = new FHIRInstant(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMinValueInstant(FHIRInstant::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MIN_VALUE_TIME === $childName) {
                $v = new FHIRTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMinValueTime(FHIRTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MIN_VALUE_DECIMAL === $childName) {
                $v = new FHIRDecimal(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMinValueDecimal(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MIN_VALUE_INTEGER === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMinValueInteger(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MIN_VALUE_POSITIVE_INT === $childName) {
                $v = new FHIRPositiveInt(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMinValuePositiveInt(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MIN_VALUE_UNSIGNED_INT === $childName) {
                $v = new FHIRUnsignedInt(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMinValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MIN_VALUE_QUANTITY === $childName) {
                $v = new FHIRQuantity();
                $type->setMinValueQuantity(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAX_VALUE_DATE === $childName) {
                $v = new FHIRDate(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMaxValueDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAX_VALUE_DATE_TIME === $childName) {
                $v = new FHIRDateTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMaxValueDateTime(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAX_VALUE_INSTANT === $childName) {
                $v = new FHIRInstant(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMaxValueInstant(FHIRInstant::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAX_VALUE_TIME === $childName) {
                $v = new FHIRTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMaxValueTime(FHIRTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAX_VALUE_DECIMAL === $childName) {
                $v = new FHIRDecimal(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMaxValueDecimal(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAX_VALUE_INTEGER === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMaxValueInteger(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAX_VALUE_POSITIVE_INT === $childName) {
                $v = new FHIRPositiveInt(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMaxValuePositiveInt(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAX_VALUE_UNSIGNED_INT === $childName) {
                $v = new FHIRUnsignedInt(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMaxValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAX_VALUE_QUANTITY === $childName) {
                $v = new FHIRQuantity();
                $type->setMaxValueQuantity(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAX_LENGTH === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMaxLength(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONDITION === $childName) {
                $v = new FHIRId(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addCondition(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONSTRAINT === $childName) {
                $v = new FHIRElementDefinitionConstraint();
                $type->addConstraint(FHIRElementDefinitionConstraint::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MUST_SUPPORT === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMustSupport(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IS_MODIFIER === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setIsModifier(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IS_SUMMARY === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setIsSummary(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BINDING === $childName) {
                $v = new FHIRElementDefinitionBinding();
                $type->setBinding(FHIRElementDefinitionBinding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAPPING === $childName) {
                $v = new FHIRElementDefinitionMapping();
                $type->addMapping(FHIRElementDefinitionMapping::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_PATH])) {
            $pt = $type->getPath();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATH]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPath(new FHIRString(
                    value: (string)$attributes[self::FIELD_PATH],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SLICE_NAME])) {
            $pt = $type->getSliceName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SLICE_NAME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSliceName(new FHIRString(
                    value: (string)$attributes[self::FIELD_SLICE_NAME],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LABEL])) {
            $pt = $type->getLabel();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LABEL]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLabel(new FHIRString(
                    value: (string)$attributes[self::FIELD_LABEL],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SHORT])) {
            $pt = $type->getShort();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SHORT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setShort(new FHIRString(
                    value: (string)$attributes[self::FIELD_SHORT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFINITION])) {
            $pt = $type->getDefinition();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFINITION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefinition(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_DEFINITION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_COMMENT])) {
            $pt = $type->getComment();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_COMMENT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setComment(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_COMMENT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_REQUIREMENTS])) {
            $pt = $type->getRequirements();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_REQUIREMENTS]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setRequirements(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_REQUIREMENTS],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ALIAS])) {
            $v = new FHIRString(value: (string)$attributes[self::FIELD_ALIAS],
                                                       xmlLocation: XMLLocationEnum::ATTRIBUTE);
            $type->addAlias($v);
        }
        if (isset($attributes[self::FIELD_MIN])) {
            $pt = $type->getMin();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMin(new FHIRUnsignedInt(
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
        if (isset($attributes[self::FIELD_CONTENT_REFERENCE])) {
            $pt = $type->getContentReference();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CONTENT_REFERENCE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setContentReference(new FHIRUri(
                    value: (string)$attributes[self::FIELD_CONTENT_REFERENCE],
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
        if (isset($attributes[self::FIELD_MEANING_WHEN_MISSING])) {
            $pt = $type->getMeaningWhenMissing();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MEANING_WHEN_MISSING]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMeaningWhenMissing(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_MEANING_WHEN_MISSING],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ORDER_MEANING])) {
            $pt = $type->getOrderMeaning();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ORDER_MEANING]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setOrderMeaning(new FHIRString(
                    value: (string)$attributes[self::FIELD_ORDER_MEANING],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FIXED_BASE_64BINARY])) {
            $pt = $type->getFixedBase64Binary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_BASE_64BINARY]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedBase64Binary(new FHIRBase64Binary(
                    value: (string)$attributes[self::FIELD_FIXED_BASE_64BINARY],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FIXED_BOOLEAN])) {
            $pt = $type->getFixedBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_BOOLEAN]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedBoolean(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_FIXED_BOOLEAN],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FIXED_CODE])) {
            $pt = $type->getFixedCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_CODE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedCode(new FHIRCode(
                    value: (string)$attributes[self::FIELD_FIXED_CODE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FIXED_DATE])) {
            $pt = $type->getFixedDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_DATE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_FIXED_DATE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FIXED_DATE_TIME])) {
            $pt = $type->getFixedDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_DATE_TIME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedDateTime(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_FIXED_DATE_TIME],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FIXED_DECIMAL])) {
            $pt = $type->getFixedDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_DECIMAL]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedDecimal(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_FIXED_DECIMAL],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FIXED_ID])) {
            $pt = $type->getFixedId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedId(new FHIRId(
                    value: (string)$attributes[self::FIELD_FIXED_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FIXED_INSTANT])) {
            $pt = $type->getFixedInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_INSTANT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedInstant(new FHIRInstant(
                    value: (string)$attributes[self::FIELD_FIXED_INSTANT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FIXED_INTEGER])) {
            $pt = $type->getFixedInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_INTEGER]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedInteger(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_FIXED_INTEGER],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FIXED_MARKDOWN])) {
            $pt = $type->getFixedMarkdown();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_MARKDOWN]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedMarkdown(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_FIXED_MARKDOWN],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FIXED_OID])) {
            $pt = $type->getFixedOid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_OID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedOid(new FHIROid(
                    value: (string)$attributes[self::FIELD_FIXED_OID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FIXED_POSITIVE_INT])) {
            $pt = $type->getFixedPositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_POSITIVE_INT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedPositiveInt(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_FIXED_POSITIVE_INT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FIXED_STRING])) {
            $pt = $type->getFixedString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_STRING]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedString(new FHIRString(
                    value: (string)$attributes[self::FIELD_FIXED_STRING],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FIXED_TIME])) {
            $pt = $type->getFixedTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_TIME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedTime(new FHIRTime(
                    value: (string)$attributes[self::FIELD_FIXED_TIME],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FIXED_UNSIGNED_INT])) {
            $pt = $type->getFixedUnsignedInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_UNSIGNED_INT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedUnsignedInt(new FHIRUnsignedInt(
                    value: (string)$attributes[self::FIELD_FIXED_UNSIGNED_INT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FIXED_URI])) {
            $pt = $type->getFixedUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_URI]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedUri(new FHIRUri(
                    value: (string)$attributes[self::FIELD_FIXED_URI],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_BASE_64BINARY])) {
            $pt = $type->getPatternBase64Binary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_BASE_64BINARY]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternBase64Binary(new FHIRBase64Binary(
                    value: (string)$attributes[self::FIELD_PATTERN_BASE_64BINARY],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_BOOLEAN])) {
            $pt = $type->getPatternBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_BOOLEAN]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternBoolean(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_PATTERN_BOOLEAN],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_CODE])) {
            $pt = $type->getPatternCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_CODE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternCode(new FHIRCode(
                    value: (string)$attributes[self::FIELD_PATTERN_CODE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_DATE])) {
            $pt = $type->getPatternDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_DATE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_PATTERN_DATE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_DATE_TIME])) {
            $pt = $type->getPatternDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_DATE_TIME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternDateTime(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_PATTERN_DATE_TIME],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_DECIMAL])) {
            $pt = $type->getPatternDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_DECIMAL]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternDecimal(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_PATTERN_DECIMAL],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_ID])) {
            $pt = $type->getPatternId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternId(new FHIRId(
                    value: (string)$attributes[self::FIELD_PATTERN_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_INSTANT])) {
            $pt = $type->getPatternInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_INSTANT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternInstant(new FHIRInstant(
                    value: (string)$attributes[self::FIELD_PATTERN_INSTANT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_INTEGER])) {
            $pt = $type->getPatternInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_INTEGER]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternInteger(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_PATTERN_INTEGER],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_MARKDOWN])) {
            $pt = $type->getPatternMarkdown();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_MARKDOWN]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternMarkdown(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_PATTERN_MARKDOWN],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_OID])) {
            $pt = $type->getPatternOid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_OID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternOid(new FHIROid(
                    value: (string)$attributes[self::FIELD_PATTERN_OID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_POSITIVE_INT])) {
            $pt = $type->getPatternPositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_POSITIVE_INT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternPositiveInt(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_PATTERN_POSITIVE_INT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_STRING])) {
            $pt = $type->getPatternString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_STRING]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternString(new FHIRString(
                    value: (string)$attributes[self::FIELD_PATTERN_STRING],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_TIME])) {
            $pt = $type->getPatternTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_TIME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternTime(new FHIRTime(
                    value: (string)$attributes[self::FIELD_PATTERN_TIME],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_UNSIGNED_INT])) {
            $pt = $type->getPatternUnsignedInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_UNSIGNED_INT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternUnsignedInt(new FHIRUnsignedInt(
                    value: (string)$attributes[self::FIELD_PATTERN_UNSIGNED_INT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_URI])) {
            $pt = $type->getPatternUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_URI]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternUri(new FHIRUri(
                    value: (string)$attributes[self::FIELD_PATTERN_URI],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_DATE])) {
            $pt = $type->getMinValueDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN_VALUE_DATE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMinValueDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_MIN_VALUE_DATE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_DATE_TIME])) {
            $pt = $type->getMinValueDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN_VALUE_DATE_TIME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMinValueDateTime(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_MIN_VALUE_DATE_TIME],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_INSTANT])) {
            $pt = $type->getMinValueInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN_VALUE_INSTANT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMinValueInstant(new FHIRInstant(
                    value: (string)$attributes[self::FIELD_MIN_VALUE_INSTANT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_TIME])) {
            $pt = $type->getMinValueTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN_VALUE_TIME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMinValueTime(new FHIRTime(
                    value: (string)$attributes[self::FIELD_MIN_VALUE_TIME],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_DECIMAL])) {
            $pt = $type->getMinValueDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN_VALUE_DECIMAL]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMinValueDecimal(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_MIN_VALUE_DECIMAL],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_INTEGER])) {
            $pt = $type->getMinValueInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN_VALUE_INTEGER]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMinValueInteger(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_MIN_VALUE_INTEGER],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_POSITIVE_INT])) {
            $pt = $type->getMinValuePositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN_VALUE_POSITIVE_INT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMinValuePositiveInt(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_MIN_VALUE_POSITIVE_INT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_UNSIGNED_INT])) {
            $pt = $type->getMinValueUnsignedInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN_VALUE_UNSIGNED_INT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMinValueUnsignedInt(new FHIRUnsignedInt(
                    value: (string)$attributes[self::FIELD_MIN_VALUE_UNSIGNED_INT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_DATE])) {
            $pt = $type->getMaxValueDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX_VALUE_DATE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaxValueDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_MAX_VALUE_DATE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_DATE_TIME])) {
            $pt = $type->getMaxValueDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX_VALUE_DATE_TIME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaxValueDateTime(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_MAX_VALUE_DATE_TIME],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_INSTANT])) {
            $pt = $type->getMaxValueInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX_VALUE_INSTANT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaxValueInstant(new FHIRInstant(
                    value: (string)$attributes[self::FIELD_MAX_VALUE_INSTANT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_TIME])) {
            $pt = $type->getMaxValueTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX_VALUE_TIME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaxValueTime(new FHIRTime(
                    value: (string)$attributes[self::FIELD_MAX_VALUE_TIME],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_DECIMAL])) {
            $pt = $type->getMaxValueDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX_VALUE_DECIMAL]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaxValueDecimal(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_MAX_VALUE_DECIMAL],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_INTEGER])) {
            $pt = $type->getMaxValueInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX_VALUE_INTEGER]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaxValueInteger(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_MAX_VALUE_INTEGER],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_POSITIVE_INT])) {
            $pt = $type->getMaxValuePositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX_VALUE_POSITIVE_INT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaxValuePositiveInt(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_MAX_VALUE_POSITIVE_INT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_UNSIGNED_INT])) {
            $pt = $type->getMaxValueUnsignedInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX_VALUE_UNSIGNED_INT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaxValueUnsignedInt(new FHIRUnsignedInt(
                    value: (string)$attributes[self::FIELD_MAX_VALUE_UNSIGNED_INT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MAX_LENGTH])) {
            $pt = $type->getMaxLength();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX_LENGTH]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaxLength(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_MAX_LENGTH],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CONDITION])) {
            $v = new FHIRId(value: (string)$attributes[self::FIELD_CONDITION],
                                                       xmlLocation: XMLLocationEnum::ATTRIBUTE);
            $type->addCondition($v);
        }
        if (isset($attributes[self::FIELD_MUST_SUPPORT])) {
            $pt = $type->getMustSupport();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MUST_SUPPORT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMustSupport(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_MUST_SUPPORT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IS_MODIFIER])) {
            $pt = $type->getIsModifier();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IS_MODIFIER]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setIsModifier(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_IS_MODIFIER],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IS_SUMMARY])) {
            $pt = $type->getIsSummary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IS_SUMMARY]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setIsSummary(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_IS_SUMMARY],
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
        if (null === $xw) {
            $xw = new XMLWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode($config, 'ElementDefinition', $this->_getSourceXMLNS());
        }
        if (isset($this->path) && $this->path->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATH, $this->path->getValue()?->getFormattedValue());
        }
        if (isset($this->sliceName) && $this->sliceName->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SLICE_NAME, $this->sliceName->getValue()?->getFormattedValue());
        }
        if (isset($this->label) && $this->label->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_LABEL, $this->label->getValue()?->getFormattedValue());
        }
        if (isset($this->short) && $this->short->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SHORT, $this->short->getValue()?->getFormattedValue());
        }
        if (isset($this->definition) && $this->definition->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFINITION, $this->definition->getValue()?->getFormattedValue());
        }
        if (isset($this->comment) && $this->comment->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_COMMENT, $this->comment->getValue()?->getFormattedValue());
        }
        if (isset($this->requirements) && $this->requirements->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_REQUIREMENTS, $this->requirements->getValue()?->getFormattedValue());
        }
        if (isset($this->alias)) {
           foreach($this->alias as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_ALIAS, $v->getValue()?->getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->min) && $this->min->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MIN, $this->min->getValue()?->getFormattedValue());
        }
        if (isset($this->max) && $this->max->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MAX, $this->max->getValue()?->getFormattedValue());
        }
        if (isset($this->contentReference) && $this->contentReference->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CONTENT_REFERENCE, $this->contentReference->getValue()?->getFormattedValue());
        }
        if (isset($this->defaultValueBase64Binary) && $this->defaultValueBase64Binary->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_BASE_64BINARY, $this->defaultValueBase64Binary->getValue()?->getFormattedValue());
        }
        if (isset($this->defaultValueBoolean) && $this->defaultValueBoolean->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_BOOLEAN, $this->defaultValueBoolean->getValue()?->getFormattedValue());
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
        if (isset($this->meaningWhenMissing) && $this->meaningWhenMissing->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MEANING_WHEN_MISSING, $this->meaningWhenMissing->getValue()?->getFormattedValue());
        }
        if (isset($this->orderMeaning) && $this->orderMeaning->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ORDER_MEANING, $this->orderMeaning->getValue()?->getFormattedValue());
        }
        if (isset($this->fixedBase64Binary) && $this->fixedBase64Binary->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FIXED_BASE_64BINARY, $this->fixedBase64Binary->getValue()?->getFormattedValue());
        }
        if (isset($this->fixedBoolean) && $this->fixedBoolean->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FIXED_BOOLEAN, $this->fixedBoolean->getValue()?->getFormattedValue());
        }
        if (isset($this->fixedCode) && $this->fixedCode->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FIXED_CODE, $this->fixedCode->getValue()?->getFormattedValue());
        }
        if (isset($this->fixedDate) && $this->fixedDate->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FIXED_DATE, $this->fixedDate->getValue()?->getFormattedValue());
        }
        if (isset($this->fixedDateTime) && $this->fixedDateTime->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FIXED_DATE_TIME, $this->fixedDateTime->getValue()?->getFormattedValue());
        }
        if (isset($this->fixedDecimal) && $this->fixedDecimal->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FIXED_DECIMAL, $this->fixedDecimal->getValue()?->getFormattedValue());
        }
        if (isset($this->fixedId) && $this->fixedId->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FIXED_ID, $this->fixedId->getValue()?->getFormattedValue());
        }
        if (isset($this->fixedInstant) && $this->fixedInstant->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FIXED_INSTANT, $this->fixedInstant->getValue()?->getFormattedValue());
        }
        if (isset($this->fixedInteger) && $this->fixedInteger->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FIXED_INTEGER, $this->fixedInteger->getValue()?->getFormattedValue());
        }
        if (isset($this->fixedMarkdown) && $this->fixedMarkdown->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FIXED_MARKDOWN, $this->fixedMarkdown->getValue()?->getFormattedValue());
        }
        if (isset($this->fixedOid) && $this->fixedOid->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FIXED_OID, $this->fixedOid->getValue()?->getFormattedValue());
        }
        if (isset($this->fixedPositiveInt) && $this->fixedPositiveInt->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FIXED_POSITIVE_INT, $this->fixedPositiveInt->getValue()?->getFormattedValue());
        }
        if (isset($this->fixedString) && $this->fixedString->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FIXED_STRING, $this->fixedString->getValue()?->getFormattedValue());
        }
        if (isset($this->fixedTime) && $this->fixedTime->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FIXED_TIME, $this->fixedTime->getValue()?->getFormattedValue());
        }
        if (isset($this->fixedUnsignedInt) && $this->fixedUnsignedInt->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FIXED_UNSIGNED_INT, $this->fixedUnsignedInt->getValue()?->getFormattedValue());
        }
        if (isset($this->fixedUri) && $this->fixedUri->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FIXED_URI, $this->fixedUri->getValue()?->getFormattedValue());
        }
        if (isset($this->patternBase64Binary) && $this->patternBase64Binary->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATTERN_BASE_64BINARY, $this->patternBase64Binary->getValue()?->getFormattedValue());
        }
        if (isset($this->patternBoolean) && $this->patternBoolean->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATTERN_BOOLEAN, $this->patternBoolean->getValue()?->getFormattedValue());
        }
        if (isset($this->patternCode) && $this->patternCode->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATTERN_CODE, $this->patternCode->getValue()?->getFormattedValue());
        }
        if (isset($this->patternDate) && $this->patternDate->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATTERN_DATE, $this->patternDate->getValue()?->getFormattedValue());
        }
        if (isset($this->patternDateTime) && $this->patternDateTime->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATTERN_DATE_TIME, $this->patternDateTime->getValue()?->getFormattedValue());
        }
        if (isset($this->patternDecimal) && $this->patternDecimal->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATTERN_DECIMAL, $this->patternDecimal->getValue()?->getFormattedValue());
        }
        if (isset($this->patternId) && $this->patternId->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATTERN_ID, $this->patternId->getValue()?->getFormattedValue());
        }
        if (isset($this->patternInstant) && $this->patternInstant->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATTERN_INSTANT, $this->patternInstant->getValue()?->getFormattedValue());
        }
        if (isset($this->patternInteger) && $this->patternInteger->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATTERN_INTEGER, $this->patternInteger->getValue()?->getFormattedValue());
        }
        if (isset($this->patternMarkdown) && $this->patternMarkdown->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATTERN_MARKDOWN, $this->patternMarkdown->getValue()?->getFormattedValue());
        }
        if (isset($this->patternOid) && $this->patternOid->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATTERN_OID, $this->patternOid->getValue()?->getFormattedValue());
        }
        if (isset($this->patternPositiveInt) && $this->patternPositiveInt->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATTERN_POSITIVE_INT, $this->patternPositiveInt->getValue()?->getFormattedValue());
        }
        if (isset($this->patternString) && $this->patternString->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATTERN_STRING, $this->patternString->getValue()?->getFormattedValue());
        }
        if (isset($this->patternTime) && $this->patternTime->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATTERN_TIME, $this->patternTime->getValue()?->getFormattedValue());
        }
        if (isset($this->patternUnsignedInt) && $this->patternUnsignedInt->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATTERN_UNSIGNED_INT, $this->patternUnsignedInt->getValue()?->getFormattedValue());
        }
        if (isset($this->patternUri) && $this->patternUri->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATTERN_URI, $this->patternUri->getValue()?->getFormattedValue());
        }
        if (isset($this->minValueDate) && $this->minValueDate->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_DATE, $this->minValueDate->getValue()?->getFormattedValue());
        }
        if (isset($this->minValueDateTime) && $this->minValueDateTime->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_DATE_TIME, $this->minValueDateTime->getValue()?->getFormattedValue());
        }
        if (isset($this->minValueInstant) && $this->minValueInstant->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_INSTANT, $this->minValueInstant->getValue()?->getFormattedValue());
        }
        if (isset($this->minValueTime) && $this->minValueTime->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_TIME, $this->minValueTime->getValue()?->getFormattedValue());
        }
        if (isset($this->minValueDecimal) && $this->minValueDecimal->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_DECIMAL, $this->minValueDecimal->getValue()?->getFormattedValue());
        }
        if (isset($this->minValueInteger) && $this->minValueInteger->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_INTEGER, $this->minValueInteger->getValue()?->getFormattedValue());
        }
        if (isset($this->minValuePositiveInt) && $this->minValuePositiveInt->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_POSITIVE_INT, $this->minValuePositiveInt->getValue()?->getFormattedValue());
        }
        if (isset($this->minValueUnsignedInt) && $this->minValueUnsignedInt->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_UNSIGNED_INT, $this->minValueUnsignedInt->getValue()?->getFormattedValue());
        }
        if (isset($this->maxValueDate) && $this->maxValueDate->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_DATE, $this->maxValueDate->getValue()?->getFormattedValue());
        }
        if (isset($this->maxValueDateTime) && $this->maxValueDateTime->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_DATE_TIME, $this->maxValueDateTime->getValue()?->getFormattedValue());
        }
        if (isset($this->maxValueInstant) && $this->maxValueInstant->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_INSTANT, $this->maxValueInstant->getValue()?->getFormattedValue());
        }
        if (isset($this->maxValueTime) && $this->maxValueTime->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_TIME, $this->maxValueTime->getValue()?->getFormattedValue());
        }
        if (isset($this->maxValueDecimal) && $this->maxValueDecimal->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_DECIMAL, $this->maxValueDecimal->getValue()?->getFormattedValue());
        }
        if (isset($this->maxValueInteger) && $this->maxValueInteger->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_INTEGER, $this->maxValueInteger->getValue()?->getFormattedValue());
        }
        if (isset($this->maxValuePositiveInt) && $this->maxValuePositiveInt->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_POSITIVE_INT, $this->maxValuePositiveInt->getValue()?->getFormattedValue());
        }
        if (isset($this->maxValueUnsignedInt) && $this->maxValueUnsignedInt->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_UNSIGNED_INT, $this->maxValueUnsignedInt->getValue()?->getFormattedValue());
        }
        if (isset($this->maxLength) && $this->maxLength->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MAX_LENGTH, $this->maxLength->getValue()?->getFormattedValue());
        }
        if (isset($this->condition)) {
           foreach($this->condition as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_CONDITION, $v->getValue()?->getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->mustSupport) && $this->mustSupport->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MUST_SUPPORT, $this->mustSupport->getValue()?->getFormattedValue());
        }
        if (isset($this->isModifier) && $this->isModifier->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_IS_MODIFIER, $this->isModifier->getValue()?->getFormattedValue());
        }
        if (isset($this->isSummary) && $this->isSummary->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_IS_SUMMARY, $this->isSummary->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->path) && $this->path->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATH);
            $this->path->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->representation)) {
            foreach ($this->representation as $v) {
                $xw->startElement(self::FIELD_REPRESENTATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->sliceName) && $this->sliceName->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SLICE_NAME);
            $this->sliceName->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->label) && $this->label->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_LABEL);
            $this->label->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->code)) {
            foreach ($this->code as $v) {
                $xw->startElement(self::FIELD_CODE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->slicing)) {
            $xw->startElement(self::FIELD_SLICING);
            $this->slicing->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->short) && $this->short->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SHORT);
            $this->short->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->definition) && $this->definition->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFINITION);
            $this->definition->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->comment) && $this->comment->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_COMMENT);
            $this->comment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->requirements) && $this->requirements->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_REQUIREMENTS);
            $this->requirements->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->alias)) {
            foreach($this->alias as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_ALIAS);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
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
        if (isset($this->base)) {
            $xw->startElement(self::FIELD_BASE);
            $this->base->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->contentReference) && $this->contentReference->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CONTENT_REFERENCE);
            $this->contentReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->type)) {
            foreach ($this->type as $v) {
                $xw->startElement(self::FIELD_TYPE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
        if (isset($this->defaultValueMeta)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_META);
            $this->defaultValueMeta->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->meaningWhenMissing) && $this->meaningWhenMissing->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MEANING_WHEN_MISSING);
            $this->meaningWhenMissing->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->orderMeaning) && $this->orderMeaning->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ORDER_MEANING);
            $this->orderMeaning->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedBase64Binary) && $this->fixedBase64Binary->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FIXED_BASE_64BINARY);
            $this->fixedBase64Binary->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedBoolean) && $this->fixedBoolean->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FIXED_BOOLEAN);
            $this->fixedBoolean->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedCode) && $this->fixedCode->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FIXED_CODE);
            $this->fixedCode->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedDate) && $this->fixedDate->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FIXED_DATE);
            $this->fixedDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedDateTime) && $this->fixedDateTime->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FIXED_DATE_TIME);
            $this->fixedDateTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedDecimal) && $this->fixedDecimal->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FIXED_DECIMAL);
            $this->fixedDecimal->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedId) && $this->fixedId->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FIXED_ID);
            $this->fixedId->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedInstant) && $this->fixedInstant->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FIXED_INSTANT);
            $this->fixedInstant->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedInteger) && $this->fixedInteger->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FIXED_INTEGER);
            $this->fixedInteger->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedMarkdown) && $this->fixedMarkdown->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FIXED_MARKDOWN);
            $this->fixedMarkdown->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedOid) && $this->fixedOid->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FIXED_OID);
            $this->fixedOid->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedPositiveInt) && $this->fixedPositiveInt->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FIXED_POSITIVE_INT);
            $this->fixedPositiveInt->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedString) && $this->fixedString->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FIXED_STRING);
            $this->fixedString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedTime) && $this->fixedTime->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FIXED_TIME);
            $this->fixedTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedUnsignedInt) && $this->fixedUnsignedInt->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FIXED_UNSIGNED_INT);
            $this->fixedUnsignedInt->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedUri) && $this->fixedUri->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FIXED_URI);
            $this->fixedUri->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedAddress)) {
            $xw->startElement(self::FIELD_FIXED_ADDRESS);
            $this->fixedAddress->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedAge)) {
            $xw->startElement(self::FIELD_FIXED_AGE);
            $this->fixedAge->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedAnnotation)) {
            $xw->startElement(self::FIELD_FIXED_ANNOTATION);
            $this->fixedAnnotation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedAttachment)) {
            $xw->startElement(self::FIELD_FIXED_ATTACHMENT);
            $this->fixedAttachment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedCodeableConcept)) {
            $xw->startElement(self::FIELD_FIXED_CODEABLE_CONCEPT);
            $this->fixedCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedCoding)) {
            $xw->startElement(self::FIELD_FIXED_CODING);
            $this->fixedCoding->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedContactPoint)) {
            $xw->startElement(self::FIELD_FIXED_CONTACT_POINT);
            $this->fixedContactPoint->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedCount)) {
            $xw->startElement(self::FIELD_FIXED_COUNT);
            $this->fixedCount->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedDistance)) {
            $xw->startElement(self::FIELD_FIXED_DISTANCE);
            $this->fixedDistance->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedDuration)) {
            $xw->startElement(self::FIELD_FIXED_DURATION);
            $this->fixedDuration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedHumanName)) {
            $xw->startElement(self::FIELD_FIXED_HUMAN_NAME);
            $this->fixedHumanName->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedIdentifier)) {
            $xw->startElement(self::FIELD_FIXED_IDENTIFIER);
            $this->fixedIdentifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedMoney)) {
            $xw->startElement(self::FIELD_FIXED_MONEY);
            $this->fixedMoney->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedPeriod)) {
            $xw->startElement(self::FIELD_FIXED_PERIOD);
            $this->fixedPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedQuantity)) {
            $xw->startElement(self::FIELD_FIXED_QUANTITY);
            $this->fixedQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedRange)) {
            $xw->startElement(self::FIELD_FIXED_RANGE);
            $this->fixedRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedRatio)) {
            $xw->startElement(self::FIELD_FIXED_RATIO);
            $this->fixedRatio->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedReference)) {
            $xw->startElement(self::FIELD_FIXED_REFERENCE);
            $this->fixedReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedSampledData)) {
            $xw->startElement(self::FIELD_FIXED_SAMPLED_DATA);
            $this->fixedSampledData->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedSignature)) {
            $xw->startElement(self::FIELD_FIXED_SIGNATURE);
            $this->fixedSignature->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedTiming)) {
            $xw->startElement(self::FIELD_FIXED_TIMING);
            $this->fixedTiming->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fixedMeta)) {
            $xw->startElement(self::FIELD_FIXED_META);
            $this->fixedMeta->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternBase64Binary) && $this->patternBase64Binary->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATTERN_BASE_64BINARY);
            $this->patternBase64Binary->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternBoolean) && $this->patternBoolean->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATTERN_BOOLEAN);
            $this->patternBoolean->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternCode) && $this->patternCode->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATTERN_CODE);
            $this->patternCode->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternDate) && $this->patternDate->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATTERN_DATE);
            $this->patternDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternDateTime) && $this->patternDateTime->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATTERN_DATE_TIME);
            $this->patternDateTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternDecimal) && $this->patternDecimal->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATTERN_DECIMAL);
            $this->patternDecimal->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternId) && $this->patternId->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATTERN_ID);
            $this->patternId->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternInstant) && $this->patternInstant->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATTERN_INSTANT);
            $this->patternInstant->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternInteger) && $this->patternInteger->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATTERN_INTEGER);
            $this->patternInteger->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternMarkdown) && $this->patternMarkdown->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATTERN_MARKDOWN);
            $this->patternMarkdown->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternOid) && $this->patternOid->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATTERN_OID);
            $this->patternOid->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternPositiveInt) && $this->patternPositiveInt->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATTERN_POSITIVE_INT);
            $this->patternPositiveInt->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternString) && $this->patternString->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATTERN_STRING);
            $this->patternString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternTime) && $this->patternTime->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATTERN_TIME);
            $this->patternTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternUnsignedInt) && $this->patternUnsignedInt->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATTERN_UNSIGNED_INT);
            $this->patternUnsignedInt->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternUri) && $this->patternUri->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATTERN_URI);
            $this->patternUri->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternAddress)) {
            $xw->startElement(self::FIELD_PATTERN_ADDRESS);
            $this->patternAddress->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternAge)) {
            $xw->startElement(self::FIELD_PATTERN_AGE);
            $this->patternAge->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternAnnotation)) {
            $xw->startElement(self::FIELD_PATTERN_ANNOTATION);
            $this->patternAnnotation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternAttachment)) {
            $xw->startElement(self::FIELD_PATTERN_ATTACHMENT);
            $this->patternAttachment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternCodeableConcept)) {
            $xw->startElement(self::FIELD_PATTERN_CODEABLE_CONCEPT);
            $this->patternCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternCoding)) {
            $xw->startElement(self::FIELD_PATTERN_CODING);
            $this->patternCoding->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternContactPoint)) {
            $xw->startElement(self::FIELD_PATTERN_CONTACT_POINT);
            $this->patternContactPoint->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternCount)) {
            $xw->startElement(self::FIELD_PATTERN_COUNT);
            $this->patternCount->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternDistance)) {
            $xw->startElement(self::FIELD_PATTERN_DISTANCE);
            $this->patternDistance->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternDuration)) {
            $xw->startElement(self::FIELD_PATTERN_DURATION);
            $this->patternDuration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternHumanName)) {
            $xw->startElement(self::FIELD_PATTERN_HUMAN_NAME);
            $this->patternHumanName->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternIdentifier)) {
            $xw->startElement(self::FIELD_PATTERN_IDENTIFIER);
            $this->patternIdentifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternMoney)) {
            $xw->startElement(self::FIELD_PATTERN_MONEY);
            $this->patternMoney->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternPeriod)) {
            $xw->startElement(self::FIELD_PATTERN_PERIOD);
            $this->patternPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternQuantity)) {
            $xw->startElement(self::FIELD_PATTERN_QUANTITY);
            $this->patternQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternRange)) {
            $xw->startElement(self::FIELD_PATTERN_RANGE);
            $this->patternRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternRatio)) {
            $xw->startElement(self::FIELD_PATTERN_RATIO);
            $this->patternRatio->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternReference)) {
            $xw->startElement(self::FIELD_PATTERN_REFERENCE);
            $this->patternReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternSampledData)) {
            $xw->startElement(self::FIELD_PATTERN_SAMPLED_DATA);
            $this->patternSampledData->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternSignature)) {
            $xw->startElement(self::FIELD_PATTERN_SIGNATURE);
            $this->patternSignature->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternTiming)) {
            $xw->startElement(self::FIELD_PATTERN_TIMING);
            $this->patternTiming->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patternMeta)) {
            $xw->startElement(self::FIELD_PATTERN_META);
            $this->patternMeta->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->example)) {
            foreach ($this->example as $v) {
                $xw->startElement(self::FIELD_EXAMPLE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->minValueDate) && $this->minValueDate->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MIN_VALUE_DATE);
            $this->minValueDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->minValueDateTime) && $this->minValueDateTime->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MIN_VALUE_DATE_TIME);
            $this->minValueDateTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->minValueInstant) && $this->minValueInstant->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MIN_VALUE_INSTANT);
            $this->minValueInstant->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->minValueTime) && $this->minValueTime->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MIN_VALUE_TIME);
            $this->minValueTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->minValueDecimal) && $this->minValueDecimal->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MIN_VALUE_DECIMAL);
            $this->minValueDecimal->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->minValueInteger) && $this->minValueInteger->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MIN_VALUE_INTEGER);
            $this->minValueInteger->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->minValuePositiveInt) && $this->minValuePositiveInt->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MIN_VALUE_POSITIVE_INT);
            $this->minValuePositiveInt->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->minValueUnsignedInt) && $this->minValueUnsignedInt->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MIN_VALUE_UNSIGNED_INT);
            $this->minValueUnsignedInt->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->minValueQuantity)) {
            $xw->startElement(self::FIELD_MIN_VALUE_QUANTITY);
            $this->minValueQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxValueDate) && $this->maxValueDate->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MAX_VALUE_DATE);
            $this->maxValueDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxValueDateTime) && $this->maxValueDateTime->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MAX_VALUE_DATE_TIME);
            $this->maxValueDateTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxValueInstant) && $this->maxValueInstant->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MAX_VALUE_INSTANT);
            $this->maxValueInstant->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxValueTime) && $this->maxValueTime->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MAX_VALUE_TIME);
            $this->maxValueTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxValueDecimal) && $this->maxValueDecimal->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MAX_VALUE_DECIMAL);
            $this->maxValueDecimal->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxValueInteger) && $this->maxValueInteger->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MAX_VALUE_INTEGER);
            $this->maxValueInteger->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxValuePositiveInt) && $this->maxValuePositiveInt->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MAX_VALUE_POSITIVE_INT);
            $this->maxValuePositiveInt->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxValueUnsignedInt) && $this->maxValueUnsignedInt->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MAX_VALUE_UNSIGNED_INT);
            $this->maxValueUnsignedInt->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxValueQuantity)) {
            $xw->startElement(self::FIELD_MAX_VALUE_QUANTITY);
            $this->maxValueQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxLength) && $this->maxLength->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MAX_LENGTH);
            $this->maxLength->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->condition)) {
            foreach($this->condition as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_CONDITION);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->constraint)) {
            foreach ($this->constraint as $v) {
                $xw->startElement(self::FIELD_CONSTRAINT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->mustSupport) && $this->mustSupport->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MUST_SUPPORT);
            $this->mustSupport->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->isModifier) && $this->isModifier->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_IS_MODIFIER);
            $this->isModifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->isSummary) && $this->isSummary->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_IS_SUMMARY);
            $this->isSummary->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->binding)) {
            $xw->startElement(self::FIELD_BINDING);
            $this->binding->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->mapping)) {
            foreach ($this->mapping as $v) {
                $xw->startElement(self::FIELD_MAPPING);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRElementDefinition)) {
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
        if (isset($json[self::FIELD_PATH]) || isset($json[self::FIELD_PATH_EXT]) || array_key_exists(self::FIELD_PATH, $json) || array_key_exists(self::FIELD_PATH_EXT, $json)) {
            $value = $json[self::FIELD_PATH] ?? null;
            $ext = (isset($json[self::FIELD_PATH_EXT]) && is_array($json[self::FIELD_PATH_EXT])) ? $json[self::FIELD_PATH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setPath($value);
                } else if (is_array($value)) {
                    $type->setPath(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setPath(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPath(new FHIRString($ext));
            } else {
                $type->setPath(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_REPRESENTATION]) || isset($json[self::FIELD_REPRESENTATION_EXT]) || array_key_exists(self::FIELD_REPRESENTATION, $json) || array_key_exists(self::FIELD_REPRESENTATION_EXT, $json)) {
            $value = $json[self::FIELD_REPRESENTATION] ?? null;
            $ext = (isset($json[self::FIELD_REPRESENTATION_EXT]) && is_array($json[self::FIELD_REPRESENTATION_EXT])) ? $json[self::FIELD_REPRESENTATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPropertyRepresentation) {
                    $type->addRepresentation($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRPropertyRepresentation) {
                            $type->addRepresentation($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addRepresentation(new FHIRPropertyRepresentation(array_merge($v, $iext)));
                            } else {
                                $type->addRepresentation(new FHIRPropertyRepresentation([FHIRPropertyRepresentation::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addRepresentation(new FHIRPropertyRepresentation(array_merge($ext, $value)));
                } else {
                    $type->addRepresentation(new FHIRPropertyRepresentation([FHIRPropertyRepresentation::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addRepresentation(new FHIRPropertyRepresentation($iext));
                }
            } else {
                $type->addRepresentation(new FHIRPropertyRepresentation(null));
            }
        }
        if (isset($json[self::FIELD_SLICE_NAME]) || isset($json[self::FIELD_SLICE_NAME_EXT]) || array_key_exists(self::FIELD_SLICE_NAME, $json) || array_key_exists(self::FIELD_SLICE_NAME_EXT, $json)) {
            $value = $json[self::FIELD_SLICE_NAME] ?? null;
            $ext = (isset($json[self::FIELD_SLICE_NAME_EXT]) && is_array($json[self::FIELD_SLICE_NAME_EXT])) ? $json[self::FIELD_SLICE_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setSliceName($value);
                } else if (is_array($value)) {
                    $type->setSliceName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setSliceName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSliceName(new FHIRString($ext));
            } else {
                $type->setSliceName(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_LABEL]) || isset($json[self::FIELD_LABEL_EXT]) || array_key_exists(self::FIELD_LABEL, $json) || array_key_exists(self::FIELD_LABEL_EXT, $json)) {
            $value = $json[self::FIELD_LABEL] ?? null;
            $ext = (isset($json[self::FIELD_LABEL_EXT]) && is_array($json[self::FIELD_LABEL_EXT])) ? $json[self::FIELD_LABEL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setLabel($value);
                } else if (is_array($value)) {
                    $type->setLabel(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setLabel(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setLabel(new FHIRString($ext));
            } else {
                $type->setLabel(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            if (is_array($json[self::FIELD_CODE])) {
                foreach($json[self::FIELD_CODE] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $type->addCode($v);
                    } else {
                        $type->addCode(new FHIRCoding($v));
                    }
                }
            } elseif ($json[self::FIELD_CODE] instanceof FHIRCoding) {
                $type->addCode($json[self::FIELD_CODE]);
            } else {
                $type->addCode(new FHIRCoding($json[self::FIELD_CODE]));
            }
        }
        if (isset($json[self::FIELD_SLICING]) || array_key_exists(self::FIELD_SLICING, $json)) {
            if ($json[self::FIELD_SLICING] instanceof FHIRElementDefinitionSlicing) {
                $type->setSlicing($json[self::FIELD_SLICING]);
            } else {
                $type->setSlicing(new FHIRElementDefinitionSlicing($json[self::FIELD_SLICING]));
            }
        }
        if (isset($json[self::FIELD_SHORT]) || isset($json[self::FIELD_SHORT_EXT]) || array_key_exists(self::FIELD_SHORT, $json) || array_key_exists(self::FIELD_SHORT_EXT, $json)) {
            $value = $json[self::FIELD_SHORT] ?? null;
            $ext = (isset($json[self::FIELD_SHORT_EXT]) && is_array($json[self::FIELD_SHORT_EXT])) ? $json[self::FIELD_SHORT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setShort($value);
                } else if (is_array($value)) {
                    $type->setShort(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setShort(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setShort(new FHIRString($ext));
            } else {
                $type->setShort(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_DEFINITION]) || isset($json[self::FIELD_DEFINITION_EXT]) || array_key_exists(self::FIELD_DEFINITION, $json) || array_key_exists(self::FIELD_DEFINITION_EXT, $json)) {
            $value = $json[self::FIELD_DEFINITION] ?? null;
            $ext = (isset($json[self::FIELD_DEFINITION_EXT]) && is_array($json[self::FIELD_DEFINITION_EXT])) ? $json[self::FIELD_DEFINITION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setDefinition($value);
                } else if (is_array($value)) {
                    $type->setDefinition(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setDefinition(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefinition(new FHIRMarkdown($ext));
            } else {
                $type->setDefinition(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_COMMENT]) || isset($json[self::FIELD_COMMENT_EXT]) || array_key_exists(self::FIELD_COMMENT, $json) || array_key_exists(self::FIELD_COMMENT_EXT, $json)) {
            $value = $json[self::FIELD_COMMENT] ?? null;
            $ext = (isset($json[self::FIELD_COMMENT_EXT]) && is_array($json[self::FIELD_COMMENT_EXT])) ? $json[self::FIELD_COMMENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setComment($value);
                } else if (is_array($value)) {
                    $type->setComment(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setComment(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setComment(new FHIRMarkdown($ext));
            } else {
                $type->setComment(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_REQUIREMENTS]) || isset($json[self::FIELD_REQUIREMENTS_EXT]) || array_key_exists(self::FIELD_REQUIREMENTS, $json) || array_key_exists(self::FIELD_REQUIREMENTS_EXT, $json)) {
            $value = $json[self::FIELD_REQUIREMENTS] ?? null;
            $ext = (isset($json[self::FIELD_REQUIREMENTS_EXT]) && is_array($json[self::FIELD_REQUIREMENTS_EXT])) ? $json[self::FIELD_REQUIREMENTS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setRequirements($value);
                } else if (is_array($value)) {
                    $type->setRequirements(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setRequirements(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setRequirements(new FHIRMarkdown($ext));
            } else {
                $type->setRequirements(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_ALIAS]) || isset($json[self::FIELD_ALIAS_EXT]) || array_key_exists(self::FIELD_ALIAS, $json) || array_key_exists(self::FIELD_ALIAS_EXT, $json)) {
            $value = $json[self::FIELD_ALIAS] ?? null;
            $ext = (isset($json[self::FIELD_ALIAS_EXT]) && is_array($json[self::FIELD_ALIAS_EXT])) ? $json[self::FIELD_ALIAS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->addAlias($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $type->addAlias($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addAlias(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $type->addAlias(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addAlias(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->addAlias(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addAlias(new FHIRString($iext));
                }
            } else {
                $type->addAlias(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_MIN]) || isset($json[self::FIELD_MIN_EXT]) || array_key_exists(self::FIELD_MIN, $json) || array_key_exists(self::FIELD_MIN_EXT, $json)) {
            $value = $json[self::FIELD_MIN] ?? null;
            $ext = (isset($json[self::FIELD_MIN_EXT]) && is_array($json[self::FIELD_MIN_EXT])) ? $json[self::FIELD_MIN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $type->setMin($value);
                } else if (is_array($value)) {
                    $type->setMin(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $type->setMin(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMin(new FHIRUnsignedInt($ext));
            } else {
                $type->setMin(new FHIRUnsignedInt(null));
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
        if (isset($json[self::FIELD_BASE]) || array_key_exists(self::FIELD_BASE, $json)) {
            if ($json[self::FIELD_BASE] instanceof FHIRElementDefinitionBase) {
                $type->setBase($json[self::FIELD_BASE]);
            } else {
                $type->setBase(new FHIRElementDefinitionBase($json[self::FIELD_BASE]));
            }
        }
        if (isset($json[self::FIELD_CONTENT_REFERENCE]) || isset($json[self::FIELD_CONTENT_REFERENCE_EXT]) || array_key_exists(self::FIELD_CONTENT_REFERENCE, $json) || array_key_exists(self::FIELD_CONTENT_REFERENCE_EXT, $json)) {
            $value = $json[self::FIELD_CONTENT_REFERENCE] ?? null;
            $ext = (isset($json[self::FIELD_CONTENT_REFERENCE_EXT]) && is_array($json[self::FIELD_CONTENT_REFERENCE_EXT])) ? $json[self::FIELD_CONTENT_REFERENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setContentReference($value);
                } else if (is_array($value)) {
                    $type->setContentReference(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setContentReference(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setContentReference(new FHIRUri($ext));
            } else {
                $type->setContentReference(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            if (is_array($json[self::FIELD_TYPE])) {
                foreach($json[self::FIELD_TYPE] as $v) {
                    if ($v instanceof FHIRElementDefinitionType) {
                        $type->addType($v);
                    } else {
                        $type->addType(new FHIRElementDefinitionType($v));
                    }
                }
            } elseif ($json[self::FIELD_TYPE] instanceof FHIRElementDefinitionType) {
                $type->addType($json[self::FIELD_TYPE]);
            } else {
                $type->addType(new FHIRElementDefinitionType($json[self::FIELD_TYPE]));
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
        if (isset($json[self::FIELD_DEFAULT_VALUE_META]) || array_key_exists(self::FIELD_DEFAULT_VALUE_META, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_META] instanceof FHIRMeta) {
                $type->setDefaultValueMeta($json[self::FIELD_DEFAULT_VALUE_META]);
            } else {
                $type->setDefaultValueMeta(new FHIRMeta($json[self::FIELD_DEFAULT_VALUE_META]));
            }
        }
        if (isset($json[self::FIELD_MEANING_WHEN_MISSING]) || isset($json[self::FIELD_MEANING_WHEN_MISSING_EXT]) || array_key_exists(self::FIELD_MEANING_WHEN_MISSING, $json) || array_key_exists(self::FIELD_MEANING_WHEN_MISSING_EXT, $json)) {
            $value = $json[self::FIELD_MEANING_WHEN_MISSING] ?? null;
            $ext = (isset($json[self::FIELD_MEANING_WHEN_MISSING_EXT]) && is_array($json[self::FIELD_MEANING_WHEN_MISSING_EXT])) ? $json[self::FIELD_MEANING_WHEN_MISSING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setMeaningWhenMissing($value);
                } else if (is_array($value)) {
                    $type->setMeaningWhenMissing(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setMeaningWhenMissing(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMeaningWhenMissing(new FHIRMarkdown($ext));
            } else {
                $type->setMeaningWhenMissing(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_ORDER_MEANING]) || isset($json[self::FIELD_ORDER_MEANING_EXT]) || array_key_exists(self::FIELD_ORDER_MEANING, $json) || array_key_exists(self::FIELD_ORDER_MEANING_EXT, $json)) {
            $value = $json[self::FIELD_ORDER_MEANING] ?? null;
            $ext = (isset($json[self::FIELD_ORDER_MEANING_EXT]) && is_array($json[self::FIELD_ORDER_MEANING_EXT])) ? $json[self::FIELD_ORDER_MEANING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setOrderMeaning($value);
                } else if (is_array($value)) {
                    $type->setOrderMeaning(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setOrderMeaning(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setOrderMeaning(new FHIRString($ext));
            } else {
                $type->setOrderMeaning(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_FIXED_BASE_64BINARY]) || isset($json[self::FIELD_FIXED_BASE_64BINARY_EXT]) || array_key_exists(self::FIELD_FIXED_BASE_64BINARY, $json) || array_key_exists(self::FIELD_FIXED_BASE_64BINARY_EXT, $json)) {
            $value = $json[self::FIELD_FIXED_BASE_64BINARY] ?? null;
            $ext = (isset($json[self::FIELD_FIXED_BASE_64BINARY_EXT]) && is_array($json[self::FIELD_FIXED_BASE_64BINARY_EXT])) ? $json[self::FIELD_FIXED_BASE_64BINARY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $type->setFixedBase64Binary($value);
                } else if (is_array($value)) {
                    $type->setFixedBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $type->setFixedBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFixedBase64Binary(new FHIRBase64Binary($ext));
            } else {
                $type->setFixedBase64Binary(new FHIRBase64Binary(null));
            }
        }
        if (isset($json[self::FIELD_FIXED_BOOLEAN]) || isset($json[self::FIELD_FIXED_BOOLEAN_EXT]) || array_key_exists(self::FIELD_FIXED_BOOLEAN, $json) || array_key_exists(self::FIELD_FIXED_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_FIXED_BOOLEAN] ?? null;
            $ext = (isset($json[self::FIELD_FIXED_BOOLEAN_EXT]) && is_array($json[self::FIELD_FIXED_BOOLEAN_EXT])) ? $json[self::FIELD_FIXED_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setFixedBoolean($value);
                } else if (is_array($value)) {
                    $type->setFixedBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setFixedBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFixedBoolean(new FHIRBoolean($ext));
            } else {
                $type->setFixedBoolean(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_FIXED_CODE]) || isset($json[self::FIELD_FIXED_CODE_EXT]) || array_key_exists(self::FIELD_FIXED_CODE, $json) || array_key_exists(self::FIELD_FIXED_CODE_EXT, $json)) {
            $value = $json[self::FIELD_FIXED_CODE] ?? null;
            $ext = (isset($json[self::FIELD_FIXED_CODE_EXT]) && is_array($json[self::FIELD_FIXED_CODE_EXT])) ? $json[self::FIELD_FIXED_CODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $type->setFixedCode($value);
                } else if (is_array($value)) {
                    $type->setFixedCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $type->setFixedCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFixedCode(new FHIRCode($ext));
            } else {
                $type->setFixedCode(new FHIRCode(null));
            }
        }
        if (isset($json[self::FIELD_FIXED_DATE]) || isset($json[self::FIELD_FIXED_DATE_EXT]) || array_key_exists(self::FIELD_FIXED_DATE, $json) || array_key_exists(self::FIELD_FIXED_DATE_EXT, $json)) {
            $value = $json[self::FIELD_FIXED_DATE] ?? null;
            $ext = (isset($json[self::FIELD_FIXED_DATE_EXT]) && is_array($json[self::FIELD_FIXED_DATE_EXT])) ? $json[self::FIELD_FIXED_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $type->setFixedDate($value);
                } else if (is_array($value)) {
                    $type->setFixedDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $type->setFixedDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFixedDate(new FHIRDate($ext));
            } else {
                $type->setFixedDate(new FHIRDate(null));
            }
        }
        if (isset($json[self::FIELD_FIXED_DATE_TIME]) || isset($json[self::FIELD_FIXED_DATE_TIME_EXT]) || array_key_exists(self::FIELD_FIXED_DATE_TIME, $json) || array_key_exists(self::FIELD_FIXED_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_FIXED_DATE_TIME] ?? null;
            $ext = (isset($json[self::FIELD_FIXED_DATE_TIME_EXT]) && is_array($json[self::FIELD_FIXED_DATE_TIME_EXT])) ? $json[self::FIELD_FIXED_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setFixedDateTime($value);
                } else if (is_array($value)) {
                    $type->setFixedDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setFixedDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFixedDateTime(new FHIRDateTime($ext));
            } else {
                $type->setFixedDateTime(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_FIXED_DECIMAL]) || isset($json[self::FIELD_FIXED_DECIMAL_EXT]) || array_key_exists(self::FIELD_FIXED_DECIMAL, $json) || array_key_exists(self::FIELD_FIXED_DECIMAL_EXT, $json)) {
            $value = $json[self::FIELD_FIXED_DECIMAL] ?? null;
            $ext = (isset($json[self::FIELD_FIXED_DECIMAL_EXT]) && is_array($json[self::FIELD_FIXED_DECIMAL_EXT])) ? $json[self::FIELD_FIXED_DECIMAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $type->setFixedDecimal($value);
                } else if (is_array($value)) {
                    $type->setFixedDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $type->setFixedDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFixedDecimal(new FHIRDecimal($ext));
            } else {
                $type->setFixedDecimal(new FHIRDecimal(null));
            }
        }
        if (isset($json[self::FIELD_FIXED_ID]) || isset($json[self::FIELD_FIXED_ID_EXT]) || array_key_exists(self::FIELD_FIXED_ID, $json) || array_key_exists(self::FIELD_FIXED_ID_EXT, $json)) {
            $value = $json[self::FIELD_FIXED_ID] ?? null;
            $ext = (isset($json[self::FIELD_FIXED_ID_EXT]) && is_array($json[self::FIELD_FIXED_ID_EXT])) ? $json[self::FIELD_FIXED_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $type->setFixedId($value);
                } else if (is_array($value)) {
                    $type->setFixedId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $type->setFixedId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFixedId(new FHIRId($ext));
            } else {
                $type->setFixedId(new FHIRId(null));
            }
        }
        if (isset($json[self::FIELD_FIXED_INSTANT]) || isset($json[self::FIELD_FIXED_INSTANT_EXT]) || array_key_exists(self::FIELD_FIXED_INSTANT, $json) || array_key_exists(self::FIELD_FIXED_INSTANT_EXT, $json)) {
            $value = $json[self::FIELD_FIXED_INSTANT] ?? null;
            $ext = (isset($json[self::FIELD_FIXED_INSTANT_EXT]) && is_array($json[self::FIELD_FIXED_INSTANT_EXT])) ? $json[self::FIELD_FIXED_INSTANT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $type->setFixedInstant($value);
                } else if (is_array($value)) {
                    $type->setFixedInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $type->setFixedInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFixedInstant(new FHIRInstant($ext));
            } else {
                $type->setFixedInstant(new FHIRInstant(null));
            }
        }
        if (isset($json[self::FIELD_FIXED_INTEGER]) || isset($json[self::FIELD_FIXED_INTEGER_EXT]) || array_key_exists(self::FIELD_FIXED_INTEGER, $json) || array_key_exists(self::FIELD_FIXED_INTEGER_EXT, $json)) {
            $value = $json[self::FIELD_FIXED_INTEGER] ?? null;
            $ext = (isset($json[self::FIELD_FIXED_INTEGER_EXT]) && is_array($json[self::FIELD_FIXED_INTEGER_EXT])) ? $json[self::FIELD_FIXED_INTEGER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setFixedInteger($value);
                } else if (is_array($value)) {
                    $type->setFixedInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setFixedInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFixedInteger(new FHIRInteger($ext));
            } else {
                $type->setFixedInteger(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_FIXED_MARKDOWN]) || isset($json[self::FIELD_FIXED_MARKDOWN_EXT]) || array_key_exists(self::FIELD_FIXED_MARKDOWN, $json) || array_key_exists(self::FIELD_FIXED_MARKDOWN_EXT, $json)) {
            $value = $json[self::FIELD_FIXED_MARKDOWN] ?? null;
            $ext = (isset($json[self::FIELD_FIXED_MARKDOWN_EXT]) && is_array($json[self::FIELD_FIXED_MARKDOWN_EXT])) ? $json[self::FIELD_FIXED_MARKDOWN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setFixedMarkdown($value);
                } else if (is_array($value)) {
                    $type->setFixedMarkdown(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setFixedMarkdown(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFixedMarkdown(new FHIRMarkdown($ext));
            } else {
                $type->setFixedMarkdown(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_FIXED_OID]) || isset($json[self::FIELD_FIXED_OID_EXT]) || array_key_exists(self::FIELD_FIXED_OID, $json) || array_key_exists(self::FIELD_FIXED_OID_EXT, $json)) {
            $value = $json[self::FIELD_FIXED_OID] ?? null;
            $ext = (isset($json[self::FIELD_FIXED_OID_EXT]) && is_array($json[self::FIELD_FIXED_OID_EXT])) ? $json[self::FIELD_FIXED_OID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $type->setFixedOid($value);
                } else if (is_array($value)) {
                    $type->setFixedOid(new FHIROid(array_merge($ext, $value)));
                } else {
                    $type->setFixedOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFixedOid(new FHIROid($ext));
            } else {
                $type->setFixedOid(new FHIROid(null));
            }
        }
        if (isset($json[self::FIELD_FIXED_POSITIVE_INT]) || isset($json[self::FIELD_FIXED_POSITIVE_INT_EXT]) || array_key_exists(self::FIELD_FIXED_POSITIVE_INT, $json) || array_key_exists(self::FIELD_FIXED_POSITIVE_INT_EXT, $json)) {
            $value = $json[self::FIELD_FIXED_POSITIVE_INT] ?? null;
            $ext = (isset($json[self::FIELD_FIXED_POSITIVE_INT_EXT]) && is_array($json[self::FIELD_FIXED_POSITIVE_INT_EXT])) ? $json[self::FIELD_FIXED_POSITIVE_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setFixedPositiveInt($value);
                } else if (is_array($value)) {
                    $type->setFixedPositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setFixedPositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFixedPositiveInt(new FHIRPositiveInt($ext));
            } else {
                $type->setFixedPositiveInt(new FHIRPositiveInt(null));
            }
        }
        if (isset($json[self::FIELD_FIXED_STRING]) || isset($json[self::FIELD_FIXED_STRING_EXT]) || array_key_exists(self::FIELD_FIXED_STRING, $json) || array_key_exists(self::FIELD_FIXED_STRING_EXT, $json)) {
            $value = $json[self::FIELD_FIXED_STRING] ?? null;
            $ext = (isset($json[self::FIELD_FIXED_STRING_EXT]) && is_array($json[self::FIELD_FIXED_STRING_EXT])) ? $json[self::FIELD_FIXED_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setFixedString($value);
                } else if (is_array($value)) {
                    $type->setFixedString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setFixedString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFixedString(new FHIRString($ext));
            } else {
                $type->setFixedString(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_FIXED_TIME]) || isset($json[self::FIELD_FIXED_TIME_EXT]) || array_key_exists(self::FIELD_FIXED_TIME, $json) || array_key_exists(self::FIELD_FIXED_TIME_EXT, $json)) {
            $value = $json[self::FIELD_FIXED_TIME] ?? null;
            $ext = (isset($json[self::FIELD_FIXED_TIME_EXT]) && is_array($json[self::FIELD_FIXED_TIME_EXT])) ? $json[self::FIELD_FIXED_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $type->setFixedTime($value);
                } else if (is_array($value)) {
                    $type->setFixedTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $type->setFixedTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFixedTime(new FHIRTime($ext));
            } else {
                $type->setFixedTime(new FHIRTime(null));
            }
        }
        if (isset($json[self::FIELD_FIXED_UNSIGNED_INT]) || isset($json[self::FIELD_FIXED_UNSIGNED_INT_EXT]) || array_key_exists(self::FIELD_FIXED_UNSIGNED_INT, $json) || array_key_exists(self::FIELD_FIXED_UNSIGNED_INT_EXT, $json)) {
            $value = $json[self::FIELD_FIXED_UNSIGNED_INT] ?? null;
            $ext = (isset($json[self::FIELD_FIXED_UNSIGNED_INT_EXT]) && is_array($json[self::FIELD_FIXED_UNSIGNED_INT_EXT])) ? $json[self::FIELD_FIXED_UNSIGNED_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $type->setFixedUnsignedInt($value);
                } else if (is_array($value)) {
                    $type->setFixedUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $type->setFixedUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFixedUnsignedInt(new FHIRUnsignedInt($ext));
            } else {
                $type->setFixedUnsignedInt(new FHIRUnsignedInt(null));
            }
        }
        if (isset($json[self::FIELD_FIXED_URI]) || isset($json[self::FIELD_FIXED_URI_EXT]) || array_key_exists(self::FIELD_FIXED_URI, $json) || array_key_exists(self::FIELD_FIXED_URI_EXT, $json)) {
            $value = $json[self::FIELD_FIXED_URI] ?? null;
            $ext = (isset($json[self::FIELD_FIXED_URI_EXT]) && is_array($json[self::FIELD_FIXED_URI_EXT])) ? $json[self::FIELD_FIXED_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setFixedUri($value);
                } else if (is_array($value)) {
                    $type->setFixedUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setFixedUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFixedUri(new FHIRUri($ext));
            } else {
                $type->setFixedUri(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_FIXED_ADDRESS]) || array_key_exists(self::FIELD_FIXED_ADDRESS, $json)) {
            if ($json[self::FIELD_FIXED_ADDRESS] instanceof FHIRAddress) {
                $type->setFixedAddress($json[self::FIELD_FIXED_ADDRESS]);
            } else {
                $type->setFixedAddress(new FHIRAddress($json[self::FIELD_FIXED_ADDRESS]));
            }
        }
        if (isset($json[self::FIELD_FIXED_AGE]) || array_key_exists(self::FIELD_FIXED_AGE, $json)) {
            if ($json[self::FIELD_FIXED_AGE] instanceof FHIRAge) {
                $type->setFixedAge($json[self::FIELD_FIXED_AGE]);
            } else {
                $type->setFixedAge(new FHIRAge($json[self::FIELD_FIXED_AGE]));
            }
        }
        if (isset($json[self::FIELD_FIXED_ANNOTATION]) || array_key_exists(self::FIELD_FIXED_ANNOTATION, $json)) {
            if ($json[self::FIELD_FIXED_ANNOTATION] instanceof FHIRAnnotation) {
                $type->setFixedAnnotation($json[self::FIELD_FIXED_ANNOTATION]);
            } else {
                $type->setFixedAnnotation(new FHIRAnnotation($json[self::FIELD_FIXED_ANNOTATION]));
            }
        }
        if (isset($json[self::FIELD_FIXED_ATTACHMENT]) || array_key_exists(self::FIELD_FIXED_ATTACHMENT, $json)) {
            if ($json[self::FIELD_FIXED_ATTACHMENT] instanceof FHIRAttachment) {
                $type->setFixedAttachment($json[self::FIELD_FIXED_ATTACHMENT]);
            } else {
                $type->setFixedAttachment(new FHIRAttachment($json[self::FIELD_FIXED_ATTACHMENT]));
            }
        }
        if (isset($json[self::FIELD_FIXED_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_FIXED_CODEABLE_CONCEPT, $json)) {
            if ($json[self::FIELD_FIXED_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $type->setFixedCodeableConcept($json[self::FIELD_FIXED_CODEABLE_CONCEPT]);
            } else {
                $type->setFixedCodeableConcept(new FHIRCodeableConcept($json[self::FIELD_FIXED_CODEABLE_CONCEPT]));
            }
        }
        if (isset($json[self::FIELD_FIXED_CODING]) || array_key_exists(self::FIELD_FIXED_CODING, $json)) {
            if ($json[self::FIELD_FIXED_CODING] instanceof FHIRCoding) {
                $type->setFixedCoding($json[self::FIELD_FIXED_CODING]);
            } else {
                $type->setFixedCoding(new FHIRCoding($json[self::FIELD_FIXED_CODING]));
            }
        }
        if (isset($json[self::FIELD_FIXED_CONTACT_POINT]) || array_key_exists(self::FIELD_FIXED_CONTACT_POINT, $json)) {
            if ($json[self::FIELD_FIXED_CONTACT_POINT] instanceof FHIRContactPoint) {
                $type->setFixedContactPoint($json[self::FIELD_FIXED_CONTACT_POINT]);
            } else {
                $type->setFixedContactPoint(new FHIRContactPoint($json[self::FIELD_FIXED_CONTACT_POINT]));
            }
        }
        if (isset($json[self::FIELD_FIXED_COUNT]) || array_key_exists(self::FIELD_FIXED_COUNT, $json)) {
            if ($json[self::FIELD_FIXED_COUNT] instanceof FHIRCount) {
                $type->setFixedCount($json[self::FIELD_FIXED_COUNT]);
            } else {
                $type->setFixedCount(new FHIRCount($json[self::FIELD_FIXED_COUNT]));
            }
        }
        if (isset($json[self::FIELD_FIXED_DISTANCE]) || array_key_exists(self::FIELD_FIXED_DISTANCE, $json)) {
            if ($json[self::FIELD_FIXED_DISTANCE] instanceof FHIRDistance) {
                $type->setFixedDistance($json[self::FIELD_FIXED_DISTANCE]);
            } else {
                $type->setFixedDistance(new FHIRDistance($json[self::FIELD_FIXED_DISTANCE]));
            }
        }
        if (isset($json[self::FIELD_FIXED_DURATION]) || array_key_exists(self::FIELD_FIXED_DURATION, $json)) {
            if ($json[self::FIELD_FIXED_DURATION] instanceof FHIRDuration) {
                $type->setFixedDuration($json[self::FIELD_FIXED_DURATION]);
            } else {
                $type->setFixedDuration(new FHIRDuration($json[self::FIELD_FIXED_DURATION]));
            }
        }
        if (isset($json[self::FIELD_FIXED_HUMAN_NAME]) || array_key_exists(self::FIELD_FIXED_HUMAN_NAME, $json)) {
            if ($json[self::FIELD_FIXED_HUMAN_NAME] instanceof FHIRHumanName) {
                $type->setFixedHumanName($json[self::FIELD_FIXED_HUMAN_NAME]);
            } else {
                $type->setFixedHumanName(new FHIRHumanName($json[self::FIELD_FIXED_HUMAN_NAME]));
            }
        }
        if (isset($json[self::FIELD_FIXED_IDENTIFIER]) || array_key_exists(self::FIELD_FIXED_IDENTIFIER, $json)) {
            if ($json[self::FIELD_FIXED_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->setFixedIdentifier($json[self::FIELD_FIXED_IDENTIFIER]);
            } else {
                $type->setFixedIdentifier(new FHIRIdentifier($json[self::FIELD_FIXED_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_FIXED_MONEY]) || array_key_exists(self::FIELD_FIXED_MONEY, $json)) {
            if ($json[self::FIELD_FIXED_MONEY] instanceof FHIRMoney) {
                $type->setFixedMoney($json[self::FIELD_FIXED_MONEY]);
            } else {
                $type->setFixedMoney(new FHIRMoney($json[self::FIELD_FIXED_MONEY]));
            }
        }
        if (isset($json[self::FIELD_FIXED_PERIOD]) || array_key_exists(self::FIELD_FIXED_PERIOD, $json)) {
            if ($json[self::FIELD_FIXED_PERIOD] instanceof FHIRPeriod) {
                $type->setFixedPeriod($json[self::FIELD_FIXED_PERIOD]);
            } else {
                $type->setFixedPeriod(new FHIRPeriod($json[self::FIELD_FIXED_PERIOD]));
            }
        }
        if (isset($json[self::FIELD_FIXED_QUANTITY]) || array_key_exists(self::FIELD_FIXED_QUANTITY, $json)) {
            if ($json[self::FIELD_FIXED_QUANTITY] instanceof FHIRQuantity) {
                $type->setFixedQuantity($json[self::FIELD_FIXED_QUANTITY]);
            } else {
                $type->setFixedQuantity(new FHIRQuantity($json[self::FIELD_FIXED_QUANTITY]));
            }
        }
        if (isset($json[self::FIELD_FIXED_RANGE]) || array_key_exists(self::FIELD_FIXED_RANGE, $json)) {
            if ($json[self::FIELD_FIXED_RANGE] instanceof FHIRRange) {
                $type->setFixedRange($json[self::FIELD_FIXED_RANGE]);
            } else {
                $type->setFixedRange(new FHIRRange($json[self::FIELD_FIXED_RANGE]));
            }
        }
        if (isset($json[self::FIELD_FIXED_RATIO]) || array_key_exists(self::FIELD_FIXED_RATIO, $json)) {
            if ($json[self::FIELD_FIXED_RATIO] instanceof FHIRRatio) {
                $type->setFixedRatio($json[self::FIELD_FIXED_RATIO]);
            } else {
                $type->setFixedRatio(new FHIRRatio($json[self::FIELD_FIXED_RATIO]));
            }
        }
        if (isset($json[self::FIELD_FIXED_REFERENCE]) || array_key_exists(self::FIELD_FIXED_REFERENCE, $json)) {
            if ($json[self::FIELD_FIXED_REFERENCE] instanceof FHIRReference) {
                $type->setFixedReference($json[self::FIELD_FIXED_REFERENCE]);
            } else {
                $type->setFixedReference(new FHIRReference($json[self::FIELD_FIXED_REFERENCE]));
            }
        }
        if (isset($json[self::FIELD_FIXED_SAMPLED_DATA]) || array_key_exists(self::FIELD_FIXED_SAMPLED_DATA, $json)) {
            if ($json[self::FIELD_FIXED_SAMPLED_DATA] instanceof FHIRSampledData) {
                $type->setFixedSampledData($json[self::FIELD_FIXED_SAMPLED_DATA]);
            } else {
                $type->setFixedSampledData(new FHIRSampledData($json[self::FIELD_FIXED_SAMPLED_DATA]));
            }
        }
        if (isset($json[self::FIELD_FIXED_SIGNATURE]) || array_key_exists(self::FIELD_FIXED_SIGNATURE, $json)) {
            if ($json[self::FIELD_FIXED_SIGNATURE] instanceof FHIRSignature) {
                $type->setFixedSignature($json[self::FIELD_FIXED_SIGNATURE]);
            } else {
                $type->setFixedSignature(new FHIRSignature($json[self::FIELD_FIXED_SIGNATURE]));
            }
        }
        if (isset($json[self::FIELD_FIXED_TIMING]) || array_key_exists(self::FIELD_FIXED_TIMING, $json)) {
            if ($json[self::FIELD_FIXED_TIMING] instanceof FHIRTiming) {
                $type->setFixedTiming($json[self::FIELD_FIXED_TIMING]);
            } else {
                $type->setFixedTiming(new FHIRTiming($json[self::FIELD_FIXED_TIMING]));
            }
        }
        if (isset($json[self::FIELD_FIXED_META]) || array_key_exists(self::FIELD_FIXED_META, $json)) {
            if ($json[self::FIELD_FIXED_META] instanceof FHIRMeta) {
                $type->setFixedMeta($json[self::FIELD_FIXED_META]);
            } else {
                $type->setFixedMeta(new FHIRMeta($json[self::FIELD_FIXED_META]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_BASE_64BINARY]) || isset($json[self::FIELD_PATTERN_BASE_64BINARY_EXT]) || array_key_exists(self::FIELD_PATTERN_BASE_64BINARY, $json) || array_key_exists(self::FIELD_PATTERN_BASE_64BINARY_EXT, $json)) {
            $value = $json[self::FIELD_PATTERN_BASE_64BINARY] ?? null;
            $ext = (isset($json[self::FIELD_PATTERN_BASE_64BINARY_EXT]) && is_array($json[self::FIELD_PATTERN_BASE_64BINARY_EXT])) ? $json[self::FIELD_PATTERN_BASE_64BINARY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $type->setPatternBase64Binary($value);
                } else if (is_array($value)) {
                    $type->setPatternBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $type->setPatternBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPatternBase64Binary(new FHIRBase64Binary($ext));
            } else {
                $type->setPatternBase64Binary(new FHIRBase64Binary(null));
            }
        }
        if (isset($json[self::FIELD_PATTERN_BOOLEAN]) || isset($json[self::FIELD_PATTERN_BOOLEAN_EXT]) || array_key_exists(self::FIELD_PATTERN_BOOLEAN, $json) || array_key_exists(self::FIELD_PATTERN_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_PATTERN_BOOLEAN] ?? null;
            $ext = (isset($json[self::FIELD_PATTERN_BOOLEAN_EXT]) && is_array($json[self::FIELD_PATTERN_BOOLEAN_EXT])) ? $json[self::FIELD_PATTERN_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setPatternBoolean($value);
                } else if (is_array($value)) {
                    $type->setPatternBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setPatternBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPatternBoolean(new FHIRBoolean($ext));
            } else {
                $type->setPatternBoolean(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_PATTERN_CODE]) || isset($json[self::FIELD_PATTERN_CODE_EXT]) || array_key_exists(self::FIELD_PATTERN_CODE, $json) || array_key_exists(self::FIELD_PATTERN_CODE_EXT, $json)) {
            $value = $json[self::FIELD_PATTERN_CODE] ?? null;
            $ext = (isset($json[self::FIELD_PATTERN_CODE_EXT]) && is_array($json[self::FIELD_PATTERN_CODE_EXT])) ? $json[self::FIELD_PATTERN_CODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $type->setPatternCode($value);
                } else if (is_array($value)) {
                    $type->setPatternCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $type->setPatternCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPatternCode(new FHIRCode($ext));
            } else {
                $type->setPatternCode(new FHIRCode(null));
            }
        }
        if (isset($json[self::FIELD_PATTERN_DATE]) || isset($json[self::FIELD_PATTERN_DATE_EXT]) || array_key_exists(self::FIELD_PATTERN_DATE, $json) || array_key_exists(self::FIELD_PATTERN_DATE_EXT, $json)) {
            $value = $json[self::FIELD_PATTERN_DATE] ?? null;
            $ext = (isset($json[self::FIELD_PATTERN_DATE_EXT]) && is_array($json[self::FIELD_PATTERN_DATE_EXT])) ? $json[self::FIELD_PATTERN_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $type->setPatternDate($value);
                } else if (is_array($value)) {
                    $type->setPatternDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $type->setPatternDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPatternDate(new FHIRDate($ext));
            } else {
                $type->setPatternDate(new FHIRDate(null));
            }
        }
        if (isset($json[self::FIELD_PATTERN_DATE_TIME]) || isset($json[self::FIELD_PATTERN_DATE_TIME_EXT]) || array_key_exists(self::FIELD_PATTERN_DATE_TIME, $json) || array_key_exists(self::FIELD_PATTERN_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_PATTERN_DATE_TIME] ?? null;
            $ext = (isset($json[self::FIELD_PATTERN_DATE_TIME_EXT]) && is_array($json[self::FIELD_PATTERN_DATE_TIME_EXT])) ? $json[self::FIELD_PATTERN_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setPatternDateTime($value);
                } else if (is_array($value)) {
                    $type->setPatternDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setPatternDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPatternDateTime(new FHIRDateTime($ext));
            } else {
                $type->setPatternDateTime(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_PATTERN_DECIMAL]) || isset($json[self::FIELD_PATTERN_DECIMAL_EXT]) || array_key_exists(self::FIELD_PATTERN_DECIMAL, $json) || array_key_exists(self::FIELD_PATTERN_DECIMAL_EXT, $json)) {
            $value = $json[self::FIELD_PATTERN_DECIMAL] ?? null;
            $ext = (isset($json[self::FIELD_PATTERN_DECIMAL_EXT]) && is_array($json[self::FIELD_PATTERN_DECIMAL_EXT])) ? $json[self::FIELD_PATTERN_DECIMAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $type->setPatternDecimal($value);
                } else if (is_array($value)) {
                    $type->setPatternDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $type->setPatternDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPatternDecimal(new FHIRDecimal($ext));
            } else {
                $type->setPatternDecimal(new FHIRDecimal(null));
            }
        }
        if (isset($json[self::FIELD_PATTERN_ID]) || isset($json[self::FIELD_PATTERN_ID_EXT]) || array_key_exists(self::FIELD_PATTERN_ID, $json) || array_key_exists(self::FIELD_PATTERN_ID_EXT, $json)) {
            $value = $json[self::FIELD_PATTERN_ID] ?? null;
            $ext = (isset($json[self::FIELD_PATTERN_ID_EXT]) && is_array($json[self::FIELD_PATTERN_ID_EXT])) ? $json[self::FIELD_PATTERN_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $type->setPatternId($value);
                } else if (is_array($value)) {
                    $type->setPatternId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $type->setPatternId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPatternId(new FHIRId($ext));
            } else {
                $type->setPatternId(new FHIRId(null));
            }
        }
        if (isset($json[self::FIELD_PATTERN_INSTANT]) || isset($json[self::FIELD_PATTERN_INSTANT_EXT]) || array_key_exists(self::FIELD_PATTERN_INSTANT, $json) || array_key_exists(self::FIELD_PATTERN_INSTANT_EXT, $json)) {
            $value = $json[self::FIELD_PATTERN_INSTANT] ?? null;
            $ext = (isset($json[self::FIELD_PATTERN_INSTANT_EXT]) && is_array($json[self::FIELD_PATTERN_INSTANT_EXT])) ? $json[self::FIELD_PATTERN_INSTANT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $type->setPatternInstant($value);
                } else if (is_array($value)) {
                    $type->setPatternInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $type->setPatternInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPatternInstant(new FHIRInstant($ext));
            } else {
                $type->setPatternInstant(new FHIRInstant(null));
            }
        }
        if (isset($json[self::FIELD_PATTERN_INTEGER]) || isset($json[self::FIELD_PATTERN_INTEGER_EXT]) || array_key_exists(self::FIELD_PATTERN_INTEGER, $json) || array_key_exists(self::FIELD_PATTERN_INTEGER_EXT, $json)) {
            $value = $json[self::FIELD_PATTERN_INTEGER] ?? null;
            $ext = (isset($json[self::FIELD_PATTERN_INTEGER_EXT]) && is_array($json[self::FIELD_PATTERN_INTEGER_EXT])) ? $json[self::FIELD_PATTERN_INTEGER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setPatternInteger($value);
                } else if (is_array($value)) {
                    $type->setPatternInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setPatternInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPatternInteger(new FHIRInteger($ext));
            } else {
                $type->setPatternInteger(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_PATTERN_MARKDOWN]) || isset($json[self::FIELD_PATTERN_MARKDOWN_EXT]) || array_key_exists(self::FIELD_PATTERN_MARKDOWN, $json) || array_key_exists(self::FIELD_PATTERN_MARKDOWN_EXT, $json)) {
            $value = $json[self::FIELD_PATTERN_MARKDOWN] ?? null;
            $ext = (isset($json[self::FIELD_PATTERN_MARKDOWN_EXT]) && is_array($json[self::FIELD_PATTERN_MARKDOWN_EXT])) ? $json[self::FIELD_PATTERN_MARKDOWN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setPatternMarkdown($value);
                } else if (is_array($value)) {
                    $type->setPatternMarkdown(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setPatternMarkdown(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPatternMarkdown(new FHIRMarkdown($ext));
            } else {
                $type->setPatternMarkdown(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_PATTERN_OID]) || isset($json[self::FIELD_PATTERN_OID_EXT]) || array_key_exists(self::FIELD_PATTERN_OID, $json) || array_key_exists(self::FIELD_PATTERN_OID_EXT, $json)) {
            $value = $json[self::FIELD_PATTERN_OID] ?? null;
            $ext = (isset($json[self::FIELD_PATTERN_OID_EXT]) && is_array($json[self::FIELD_PATTERN_OID_EXT])) ? $json[self::FIELD_PATTERN_OID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $type->setPatternOid($value);
                } else if (is_array($value)) {
                    $type->setPatternOid(new FHIROid(array_merge($ext, $value)));
                } else {
                    $type->setPatternOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPatternOid(new FHIROid($ext));
            } else {
                $type->setPatternOid(new FHIROid(null));
            }
        }
        if (isset($json[self::FIELD_PATTERN_POSITIVE_INT]) || isset($json[self::FIELD_PATTERN_POSITIVE_INT_EXT]) || array_key_exists(self::FIELD_PATTERN_POSITIVE_INT, $json) || array_key_exists(self::FIELD_PATTERN_POSITIVE_INT_EXT, $json)) {
            $value = $json[self::FIELD_PATTERN_POSITIVE_INT] ?? null;
            $ext = (isset($json[self::FIELD_PATTERN_POSITIVE_INT_EXT]) && is_array($json[self::FIELD_PATTERN_POSITIVE_INT_EXT])) ? $json[self::FIELD_PATTERN_POSITIVE_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setPatternPositiveInt($value);
                } else if (is_array($value)) {
                    $type->setPatternPositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setPatternPositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPatternPositiveInt(new FHIRPositiveInt($ext));
            } else {
                $type->setPatternPositiveInt(new FHIRPositiveInt(null));
            }
        }
        if (isset($json[self::FIELD_PATTERN_STRING]) || isset($json[self::FIELD_PATTERN_STRING_EXT]) || array_key_exists(self::FIELD_PATTERN_STRING, $json) || array_key_exists(self::FIELD_PATTERN_STRING_EXT, $json)) {
            $value = $json[self::FIELD_PATTERN_STRING] ?? null;
            $ext = (isset($json[self::FIELD_PATTERN_STRING_EXT]) && is_array($json[self::FIELD_PATTERN_STRING_EXT])) ? $json[self::FIELD_PATTERN_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setPatternString($value);
                } else if (is_array($value)) {
                    $type->setPatternString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setPatternString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPatternString(new FHIRString($ext));
            } else {
                $type->setPatternString(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_PATTERN_TIME]) || isset($json[self::FIELD_PATTERN_TIME_EXT]) || array_key_exists(self::FIELD_PATTERN_TIME, $json) || array_key_exists(self::FIELD_PATTERN_TIME_EXT, $json)) {
            $value = $json[self::FIELD_PATTERN_TIME] ?? null;
            $ext = (isset($json[self::FIELD_PATTERN_TIME_EXT]) && is_array($json[self::FIELD_PATTERN_TIME_EXT])) ? $json[self::FIELD_PATTERN_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $type->setPatternTime($value);
                } else if (is_array($value)) {
                    $type->setPatternTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $type->setPatternTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPatternTime(new FHIRTime($ext));
            } else {
                $type->setPatternTime(new FHIRTime(null));
            }
        }
        if (isset($json[self::FIELD_PATTERN_UNSIGNED_INT]) || isset($json[self::FIELD_PATTERN_UNSIGNED_INT_EXT]) || array_key_exists(self::FIELD_PATTERN_UNSIGNED_INT, $json) || array_key_exists(self::FIELD_PATTERN_UNSIGNED_INT_EXT, $json)) {
            $value = $json[self::FIELD_PATTERN_UNSIGNED_INT] ?? null;
            $ext = (isset($json[self::FIELD_PATTERN_UNSIGNED_INT_EXT]) && is_array($json[self::FIELD_PATTERN_UNSIGNED_INT_EXT])) ? $json[self::FIELD_PATTERN_UNSIGNED_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $type->setPatternUnsignedInt($value);
                } else if (is_array($value)) {
                    $type->setPatternUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $type->setPatternUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPatternUnsignedInt(new FHIRUnsignedInt($ext));
            } else {
                $type->setPatternUnsignedInt(new FHIRUnsignedInt(null));
            }
        }
        if (isset($json[self::FIELD_PATTERN_URI]) || isset($json[self::FIELD_PATTERN_URI_EXT]) || array_key_exists(self::FIELD_PATTERN_URI, $json) || array_key_exists(self::FIELD_PATTERN_URI_EXT, $json)) {
            $value = $json[self::FIELD_PATTERN_URI] ?? null;
            $ext = (isset($json[self::FIELD_PATTERN_URI_EXT]) && is_array($json[self::FIELD_PATTERN_URI_EXT])) ? $json[self::FIELD_PATTERN_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setPatternUri($value);
                } else if (is_array($value)) {
                    $type->setPatternUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setPatternUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPatternUri(new FHIRUri($ext));
            } else {
                $type->setPatternUri(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_PATTERN_ADDRESS]) || array_key_exists(self::FIELD_PATTERN_ADDRESS, $json)) {
            if ($json[self::FIELD_PATTERN_ADDRESS] instanceof FHIRAddress) {
                $type->setPatternAddress($json[self::FIELD_PATTERN_ADDRESS]);
            } else {
                $type->setPatternAddress(new FHIRAddress($json[self::FIELD_PATTERN_ADDRESS]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_AGE]) || array_key_exists(self::FIELD_PATTERN_AGE, $json)) {
            if ($json[self::FIELD_PATTERN_AGE] instanceof FHIRAge) {
                $type->setPatternAge($json[self::FIELD_PATTERN_AGE]);
            } else {
                $type->setPatternAge(new FHIRAge($json[self::FIELD_PATTERN_AGE]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_ANNOTATION]) || array_key_exists(self::FIELD_PATTERN_ANNOTATION, $json)) {
            if ($json[self::FIELD_PATTERN_ANNOTATION] instanceof FHIRAnnotation) {
                $type->setPatternAnnotation($json[self::FIELD_PATTERN_ANNOTATION]);
            } else {
                $type->setPatternAnnotation(new FHIRAnnotation($json[self::FIELD_PATTERN_ANNOTATION]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_ATTACHMENT]) || array_key_exists(self::FIELD_PATTERN_ATTACHMENT, $json)) {
            if ($json[self::FIELD_PATTERN_ATTACHMENT] instanceof FHIRAttachment) {
                $type->setPatternAttachment($json[self::FIELD_PATTERN_ATTACHMENT]);
            } else {
                $type->setPatternAttachment(new FHIRAttachment($json[self::FIELD_PATTERN_ATTACHMENT]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_PATTERN_CODEABLE_CONCEPT, $json)) {
            if ($json[self::FIELD_PATTERN_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $type->setPatternCodeableConcept($json[self::FIELD_PATTERN_CODEABLE_CONCEPT]);
            } else {
                $type->setPatternCodeableConcept(new FHIRCodeableConcept($json[self::FIELD_PATTERN_CODEABLE_CONCEPT]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_CODING]) || array_key_exists(self::FIELD_PATTERN_CODING, $json)) {
            if ($json[self::FIELD_PATTERN_CODING] instanceof FHIRCoding) {
                $type->setPatternCoding($json[self::FIELD_PATTERN_CODING]);
            } else {
                $type->setPatternCoding(new FHIRCoding($json[self::FIELD_PATTERN_CODING]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_CONTACT_POINT]) || array_key_exists(self::FIELD_PATTERN_CONTACT_POINT, $json)) {
            if ($json[self::FIELD_PATTERN_CONTACT_POINT] instanceof FHIRContactPoint) {
                $type->setPatternContactPoint($json[self::FIELD_PATTERN_CONTACT_POINT]);
            } else {
                $type->setPatternContactPoint(new FHIRContactPoint($json[self::FIELD_PATTERN_CONTACT_POINT]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_COUNT]) || array_key_exists(self::FIELD_PATTERN_COUNT, $json)) {
            if ($json[self::FIELD_PATTERN_COUNT] instanceof FHIRCount) {
                $type->setPatternCount($json[self::FIELD_PATTERN_COUNT]);
            } else {
                $type->setPatternCount(new FHIRCount($json[self::FIELD_PATTERN_COUNT]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_DISTANCE]) || array_key_exists(self::FIELD_PATTERN_DISTANCE, $json)) {
            if ($json[self::FIELD_PATTERN_DISTANCE] instanceof FHIRDistance) {
                $type->setPatternDistance($json[self::FIELD_PATTERN_DISTANCE]);
            } else {
                $type->setPatternDistance(new FHIRDistance($json[self::FIELD_PATTERN_DISTANCE]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_DURATION]) || array_key_exists(self::FIELD_PATTERN_DURATION, $json)) {
            if ($json[self::FIELD_PATTERN_DURATION] instanceof FHIRDuration) {
                $type->setPatternDuration($json[self::FIELD_PATTERN_DURATION]);
            } else {
                $type->setPatternDuration(new FHIRDuration($json[self::FIELD_PATTERN_DURATION]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_HUMAN_NAME]) || array_key_exists(self::FIELD_PATTERN_HUMAN_NAME, $json)) {
            if ($json[self::FIELD_PATTERN_HUMAN_NAME] instanceof FHIRHumanName) {
                $type->setPatternHumanName($json[self::FIELD_PATTERN_HUMAN_NAME]);
            } else {
                $type->setPatternHumanName(new FHIRHumanName($json[self::FIELD_PATTERN_HUMAN_NAME]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_IDENTIFIER]) || array_key_exists(self::FIELD_PATTERN_IDENTIFIER, $json)) {
            if ($json[self::FIELD_PATTERN_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->setPatternIdentifier($json[self::FIELD_PATTERN_IDENTIFIER]);
            } else {
                $type->setPatternIdentifier(new FHIRIdentifier($json[self::FIELD_PATTERN_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_MONEY]) || array_key_exists(self::FIELD_PATTERN_MONEY, $json)) {
            if ($json[self::FIELD_PATTERN_MONEY] instanceof FHIRMoney) {
                $type->setPatternMoney($json[self::FIELD_PATTERN_MONEY]);
            } else {
                $type->setPatternMoney(new FHIRMoney($json[self::FIELD_PATTERN_MONEY]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_PERIOD]) || array_key_exists(self::FIELD_PATTERN_PERIOD, $json)) {
            if ($json[self::FIELD_PATTERN_PERIOD] instanceof FHIRPeriod) {
                $type->setPatternPeriod($json[self::FIELD_PATTERN_PERIOD]);
            } else {
                $type->setPatternPeriod(new FHIRPeriod($json[self::FIELD_PATTERN_PERIOD]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_QUANTITY]) || array_key_exists(self::FIELD_PATTERN_QUANTITY, $json)) {
            if ($json[self::FIELD_PATTERN_QUANTITY] instanceof FHIRQuantity) {
                $type->setPatternQuantity($json[self::FIELD_PATTERN_QUANTITY]);
            } else {
                $type->setPatternQuantity(new FHIRQuantity($json[self::FIELD_PATTERN_QUANTITY]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_RANGE]) || array_key_exists(self::FIELD_PATTERN_RANGE, $json)) {
            if ($json[self::FIELD_PATTERN_RANGE] instanceof FHIRRange) {
                $type->setPatternRange($json[self::FIELD_PATTERN_RANGE]);
            } else {
                $type->setPatternRange(new FHIRRange($json[self::FIELD_PATTERN_RANGE]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_RATIO]) || array_key_exists(self::FIELD_PATTERN_RATIO, $json)) {
            if ($json[self::FIELD_PATTERN_RATIO] instanceof FHIRRatio) {
                $type->setPatternRatio($json[self::FIELD_PATTERN_RATIO]);
            } else {
                $type->setPatternRatio(new FHIRRatio($json[self::FIELD_PATTERN_RATIO]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_REFERENCE]) || array_key_exists(self::FIELD_PATTERN_REFERENCE, $json)) {
            if ($json[self::FIELD_PATTERN_REFERENCE] instanceof FHIRReference) {
                $type->setPatternReference($json[self::FIELD_PATTERN_REFERENCE]);
            } else {
                $type->setPatternReference(new FHIRReference($json[self::FIELD_PATTERN_REFERENCE]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_SAMPLED_DATA]) || array_key_exists(self::FIELD_PATTERN_SAMPLED_DATA, $json)) {
            if ($json[self::FIELD_PATTERN_SAMPLED_DATA] instanceof FHIRSampledData) {
                $type->setPatternSampledData($json[self::FIELD_PATTERN_SAMPLED_DATA]);
            } else {
                $type->setPatternSampledData(new FHIRSampledData($json[self::FIELD_PATTERN_SAMPLED_DATA]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_SIGNATURE]) || array_key_exists(self::FIELD_PATTERN_SIGNATURE, $json)) {
            if ($json[self::FIELD_PATTERN_SIGNATURE] instanceof FHIRSignature) {
                $type->setPatternSignature($json[self::FIELD_PATTERN_SIGNATURE]);
            } else {
                $type->setPatternSignature(new FHIRSignature($json[self::FIELD_PATTERN_SIGNATURE]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_TIMING]) || array_key_exists(self::FIELD_PATTERN_TIMING, $json)) {
            if ($json[self::FIELD_PATTERN_TIMING] instanceof FHIRTiming) {
                $type->setPatternTiming($json[self::FIELD_PATTERN_TIMING]);
            } else {
                $type->setPatternTiming(new FHIRTiming($json[self::FIELD_PATTERN_TIMING]));
            }
        }
        if (isset($json[self::FIELD_PATTERN_META]) || array_key_exists(self::FIELD_PATTERN_META, $json)) {
            if ($json[self::FIELD_PATTERN_META] instanceof FHIRMeta) {
                $type->setPatternMeta($json[self::FIELD_PATTERN_META]);
            } else {
                $type->setPatternMeta(new FHIRMeta($json[self::FIELD_PATTERN_META]));
            }
        }
        if (isset($json[self::FIELD_EXAMPLE]) || array_key_exists(self::FIELD_EXAMPLE, $json)) {
            if (is_array($json[self::FIELD_EXAMPLE])) {
                foreach($json[self::FIELD_EXAMPLE] as $v) {
                    if ($v instanceof FHIRElementDefinitionExample) {
                        $type->addExample($v);
                    } else {
                        $type->addExample(new FHIRElementDefinitionExample($v));
                    }
                }
            } elseif ($json[self::FIELD_EXAMPLE] instanceof FHIRElementDefinitionExample) {
                $type->addExample($json[self::FIELD_EXAMPLE]);
            } else {
                $type->addExample(new FHIRElementDefinitionExample($json[self::FIELD_EXAMPLE]));
            }
        }
        if (isset($json[self::FIELD_MIN_VALUE_DATE]) || isset($json[self::FIELD_MIN_VALUE_DATE_EXT]) || array_key_exists(self::FIELD_MIN_VALUE_DATE, $json) || array_key_exists(self::FIELD_MIN_VALUE_DATE_EXT, $json)) {
            $value = $json[self::FIELD_MIN_VALUE_DATE] ?? null;
            $ext = (isset($json[self::FIELD_MIN_VALUE_DATE_EXT]) && is_array($json[self::FIELD_MIN_VALUE_DATE_EXT])) ? $json[self::FIELD_MIN_VALUE_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $type->setMinValueDate($value);
                } else if (is_array($value)) {
                    $type->setMinValueDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $type->setMinValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMinValueDate(new FHIRDate($ext));
            } else {
                $type->setMinValueDate(new FHIRDate(null));
            }
        }
        if (isset($json[self::FIELD_MIN_VALUE_DATE_TIME]) || isset($json[self::FIELD_MIN_VALUE_DATE_TIME_EXT]) || array_key_exists(self::FIELD_MIN_VALUE_DATE_TIME, $json) || array_key_exists(self::FIELD_MIN_VALUE_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_MIN_VALUE_DATE_TIME] ?? null;
            $ext = (isset($json[self::FIELD_MIN_VALUE_DATE_TIME_EXT]) && is_array($json[self::FIELD_MIN_VALUE_DATE_TIME_EXT])) ? $json[self::FIELD_MIN_VALUE_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setMinValueDateTime($value);
                } else if (is_array($value)) {
                    $type->setMinValueDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setMinValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMinValueDateTime(new FHIRDateTime($ext));
            } else {
                $type->setMinValueDateTime(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_MIN_VALUE_INSTANT]) || isset($json[self::FIELD_MIN_VALUE_INSTANT_EXT]) || array_key_exists(self::FIELD_MIN_VALUE_INSTANT, $json) || array_key_exists(self::FIELD_MIN_VALUE_INSTANT_EXT, $json)) {
            $value = $json[self::FIELD_MIN_VALUE_INSTANT] ?? null;
            $ext = (isset($json[self::FIELD_MIN_VALUE_INSTANT_EXT]) && is_array($json[self::FIELD_MIN_VALUE_INSTANT_EXT])) ? $json[self::FIELD_MIN_VALUE_INSTANT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $type->setMinValueInstant($value);
                } else if (is_array($value)) {
                    $type->setMinValueInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $type->setMinValueInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMinValueInstant(new FHIRInstant($ext));
            } else {
                $type->setMinValueInstant(new FHIRInstant(null));
            }
        }
        if (isset($json[self::FIELD_MIN_VALUE_TIME]) || isset($json[self::FIELD_MIN_VALUE_TIME_EXT]) || array_key_exists(self::FIELD_MIN_VALUE_TIME, $json) || array_key_exists(self::FIELD_MIN_VALUE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_MIN_VALUE_TIME] ?? null;
            $ext = (isset($json[self::FIELD_MIN_VALUE_TIME_EXT]) && is_array($json[self::FIELD_MIN_VALUE_TIME_EXT])) ? $json[self::FIELD_MIN_VALUE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $type->setMinValueTime($value);
                } else if (is_array($value)) {
                    $type->setMinValueTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $type->setMinValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMinValueTime(new FHIRTime($ext));
            } else {
                $type->setMinValueTime(new FHIRTime(null));
            }
        }
        if (isset($json[self::FIELD_MIN_VALUE_DECIMAL]) || isset($json[self::FIELD_MIN_VALUE_DECIMAL_EXT]) || array_key_exists(self::FIELD_MIN_VALUE_DECIMAL, $json) || array_key_exists(self::FIELD_MIN_VALUE_DECIMAL_EXT, $json)) {
            $value = $json[self::FIELD_MIN_VALUE_DECIMAL] ?? null;
            $ext = (isset($json[self::FIELD_MIN_VALUE_DECIMAL_EXT]) && is_array($json[self::FIELD_MIN_VALUE_DECIMAL_EXT])) ? $json[self::FIELD_MIN_VALUE_DECIMAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $type->setMinValueDecimal($value);
                } else if (is_array($value)) {
                    $type->setMinValueDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $type->setMinValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMinValueDecimal(new FHIRDecimal($ext));
            } else {
                $type->setMinValueDecimal(new FHIRDecimal(null));
            }
        }
        if (isset($json[self::FIELD_MIN_VALUE_INTEGER]) || isset($json[self::FIELD_MIN_VALUE_INTEGER_EXT]) || array_key_exists(self::FIELD_MIN_VALUE_INTEGER, $json) || array_key_exists(self::FIELD_MIN_VALUE_INTEGER_EXT, $json)) {
            $value = $json[self::FIELD_MIN_VALUE_INTEGER] ?? null;
            $ext = (isset($json[self::FIELD_MIN_VALUE_INTEGER_EXT]) && is_array($json[self::FIELD_MIN_VALUE_INTEGER_EXT])) ? $json[self::FIELD_MIN_VALUE_INTEGER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setMinValueInteger($value);
                } else if (is_array($value)) {
                    $type->setMinValueInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setMinValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMinValueInteger(new FHIRInteger($ext));
            } else {
                $type->setMinValueInteger(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_MIN_VALUE_POSITIVE_INT]) || isset($json[self::FIELD_MIN_VALUE_POSITIVE_INT_EXT]) || array_key_exists(self::FIELD_MIN_VALUE_POSITIVE_INT, $json) || array_key_exists(self::FIELD_MIN_VALUE_POSITIVE_INT_EXT, $json)) {
            $value = $json[self::FIELD_MIN_VALUE_POSITIVE_INT] ?? null;
            $ext = (isset($json[self::FIELD_MIN_VALUE_POSITIVE_INT_EXT]) && is_array($json[self::FIELD_MIN_VALUE_POSITIVE_INT_EXT])) ? $json[self::FIELD_MIN_VALUE_POSITIVE_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setMinValuePositiveInt($value);
                } else if (is_array($value)) {
                    $type->setMinValuePositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setMinValuePositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMinValuePositiveInt(new FHIRPositiveInt($ext));
            } else {
                $type->setMinValuePositiveInt(new FHIRPositiveInt(null));
            }
        }
        if (isset($json[self::FIELD_MIN_VALUE_UNSIGNED_INT]) || isset($json[self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT]) || array_key_exists(self::FIELD_MIN_VALUE_UNSIGNED_INT, $json) || array_key_exists(self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT, $json)) {
            $value = $json[self::FIELD_MIN_VALUE_UNSIGNED_INT] ?? null;
            $ext = (isset($json[self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT]) && is_array($json[self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT])) ? $json[self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $type->setMinValueUnsignedInt($value);
                } else if (is_array($value)) {
                    $type->setMinValueUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $type->setMinValueUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMinValueUnsignedInt(new FHIRUnsignedInt($ext));
            } else {
                $type->setMinValueUnsignedInt(new FHIRUnsignedInt(null));
            }
        }
        if (isset($json[self::FIELD_MIN_VALUE_QUANTITY]) || array_key_exists(self::FIELD_MIN_VALUE_QUANTITY, $json)) {
            if ($json[self::FIELD_MIN_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $type->setMinValueQuantity($json[self::FIELD_MIN_VALUE_QUANTITY]);
            } else {
                $type->setMinValueQuantity(new FHIRQuantity($json[self::FIELD_MIN_VALUE_QUANTITY]));
            }
        }
        if (isset($json[self::FIELD_MAX_VALUE_DATE]) || isset($json[self::FIELD_MAX_VALUE_DATE_EXT]) || array_key_exists(self::FIELD_MAX_VALUE_DATE, $json) || array_key_exists(self::FIELD_MAX_VALUE_DATE_EXT, $json)) {
            $value = $json[self::FIELD_MAX_VALUE_DATE] ?? null;
            $ext = (isset($json[self::FIELD_MAX_VALUE_DATE_EXT]) && is_array($json[self::FIELD_MAX_VALUE_DATE_EXT])) ? $json[self::FIELD_MAX_VALUE_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $type->setMaxValueDate($value);
                } else if (is_array($value)) {
                    $type->setMaxValueDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $type->setMaxValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMaxValueDate(new FHIRDate($ext));
            } else {
                $type->setMaxValueDate(new FHIRDate(null));
            }
        }
        if (isset($json[self::FIELD_MAX_VALUE_DATE_TIME]) || isset($json[self::FIELD_MAX_VALUE_DATE_TIME_EXT]) || array_key_exists(self::FIELD_MAX_VALUE_DATE_TIME, $json) || array_key_exists(self::FIELD_MAX_VALUE_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_MAX_VALUE_DATE_TIME] ?? null;
            $ext = (isset($json[self::FIELD_MAX_VALUE_DATE_TIME_EXT]) && is_array($json[self::FIELD_MAX_VALUE_DATE_TIME_EXT])) ? $json[self::FIELD_MAX_VALUE_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setMaxValueDateTime($value);
                } else if (is_array($value)) {
                    $type->setMaxValueDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setMaxValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMaxValueDateTime(new FHIRDateTime($ext));
            } else {
                $type->setMaxValueDateTime(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_MAX_VALUE_INSTANT]) || isset($json[self::FIELD_MAX_VALUE_INSTANT_EXT]) || array_key_exists(self::FIELD_MAX_VALUE_INSTANT, $json) || array_key_exists(self::FIELD_MAX_VALUE_INSTANT_EXT, $json)) {
            $value = $json[self::FIELD_MAX_VALUE_INSTANT] ?? null;
            $ext = (isset($json[self::FIELD_MAX_VALUE_INSTANT_EXT]) && is_array($json[self::FIELD_MAX_VALUE_INSTANT_EXT])) ? $json[self::FIELD_MAX_VALUE_INSTANT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $type->setMaxValueInstant($value);
                } else if (is_array($value)) {
                    $type->setMaxValueInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $type->setMaxValueInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMaxValueInstant(new FHIRInstant($ext));
            } else {
                $type->setMaxValueInstant(new FHIRInstant(null));
            }
        }
        if (isset($json[self::FIELD_MAX_VALUE_TIME]) || isset($json[self::FIELD_MAX_VALUE_TIME_EXT]) || array_key_exists(self::FIELD_MAX_VALUE_TIME, $json) || array_key_exists(self::FIELD_MAX_VALUE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_MAX_VALUE_TIME] ?? null;
            $ext = (isset($json[self::FIELD_MAX_VALUE_TIME_EXT]) && is_array($json[self::FIELD_MAX_VALUE_TIME_EXT])) ? $json[self::FIELD_MAX_VALUE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $type->setMaxValueTime($value);
                } else if (is_array($value)) {
                    $type->setMaxValueTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $type->setMaxValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMaxValueTime(new FHIRTime($ext));
            } else {
                $type->setMaxValueTime(new FHIRTime(null));
            }
        }
        if (isset($json[self::FIELD_MAX_VALUE_DECIMAL]) || isset($json[self::FIELD_MAX_VALUE_DECIMAL_EXT]) || array_key_exists(self::FIELD_MAX_VALUE_DECIMAL, $json) || array_key_exists(self::FIELD_MAX_VALUE_DECIMAL_EXT, $json)) {
            $value = $json[self::FIELD_MAX_VALUE_DECIMAL] ?? null;
            $ext = (isset($json[self::FIELD_MAX_VALUE_DECIMAL_EXT]) && is_array($json[self::FIELD_MAX_VALUE_DECIMAL_EXT])) ? $json[self::FIELD_MAX_VALUE_DECIMAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $type->setMaxValueDecimal($value);
                } else if (is_array($value)) {
                    $type->setMaxValueDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $type->setMaxValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMaxValueDecimal(new FHIRDecimal($ext));
            } else {
                $type->setMaxValueDecimal(new FHIRDecimal(null));
            }
        }
        if (isset($json[self::FIELD_MAX_VALUE_INTEGER]) || isset($json[self::FIELD_MAX_VALUE_INTEGER_EXT]) || array_key_exists(self::FIELD_MAX_VALUE_INTEGER, $json) || array_key_exists(self::FIELD_MAX_VALUE_INTEGER_EXT, $json)) {
            $value = $json[self::FIELD_MAX_VALUE_INTEGER] ?? null;
            $ext = (isset($json[self::FIELD_MAX_VALUE_INTEGER_EXT]) && is_array($json[self::FIELD_MAX_VALUE_INTEGER_EXT])) ? $json[self::FIELD_MAX_VALUE_INTEGER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setMaxValueInteger($value);
                } else if (is_array($value)) {
                    $type->setMaxValueInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setMaxValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMaxValueInteger(new FHIRInteger($ext));
            } else {
                $type->setMaxValueInteger(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_MAX_VALUE_POSITIVE_INT]) || isset($json[self::FIELD_MAX_VALUE_POSITIVE_INT_EXT]) || array_key_exists(self::FIELD_MAX_VALUE_POSITIVE_INT, $json) || array_key_exists(self::FIELD_MAX_VALUE_POSITIVE_INT_EXT, $json)) {
            $value = $json[self::FIELD_MAX_VALUE_POSITIVE_INT] ?? null;
            $ext = (isset($json[self::FIELD_MAX_VALUE_POSITIVE_INT_EXT]) && is_array($json[self::FIELD_MAX_VALUE_POSITIVE_INT_EXT])) ? $json[self::FIELD_MAX_VALUE_POSITIVE_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setMaxValuePositiveInt($value);
                } else if (is_array($value)) {
                    $type->setMaxValuePositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setMaxValuePositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMaxValuePositiveInt(new FHIRPositiveInt($ext));
            } else {
                $type->setMaxValuePositiveInt(new FHIRPositiveInt(null));
            }
        }
        if (isset($json[self::FIELD_MAX_VALUE_UNSIGNED_INT]) || isset($json[self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT]) || array_key_exists(self::FIELD_MAX_VALUE_UNSIGNED_INT, $json) || array_key_exists(self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT, $json)) {
            $value = $json[self::FIELD_MAX_VALUE_UNSIGNED_INT] ?? null;
            $ext = (isset($json[self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT]) && is_array($json[self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT])) ? $json[self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $type->setMaxValueUnsignedInt($value);
                } else if (is_array($value)) {
                    $type->setMaxValueUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $type->setMaxValueUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMaxValueUnsignedInt(new FHIRUnsignedInt($ext));
            } else {
                $type->setMaxValueUnsignedInt(new FHIRUnsignedInt(null));
            }
        }
        if (isset($json[self::FIELD_MAX_VALUE_QUANTITY]) || array_key_exists(self::FIELD_MAX_VALUE_QUANTITY, $json)) {
            if ($json[self::FIELD_MAX_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $type->setMaxValueQuantity($json[self::FIELD_MAX_VALUE_QUANTITY]);
            } else {
                $type->setMaxValueQuantity(new FHIRQuantity($json[self::FIELD_MAX_VALUE_QUANTITY]));
            }
        }
        if (isset($json[self::FIELD_MAX_LENGTH]) || isset($json[self::FIELD_MAX_LENGTH_EXT]) || array_key_exists(self::FIELD_MAX_LENGTH, $json) || array_key_exists(self::FIELD_MAX_LENGTH_EXT, $json)) {
            $value = $json[self::FIELD_MAX_LENGTH] ?? null;
            $ext = (isset($json[self::FIELD_MAX_LENGTH_EXT]) && is_array($json[self::FIELD_MAX_LENGTH_EXT])) ? $json[self::FIELD_MAX_LENGTH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setMaxLength($value);
                } else if (is_array($value)) {
                    $type->setMaxLength(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setMaxLength(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMaxLength(new FHIRInteger($ext));
            } else {
                $type->setMaxLength(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_CONDITION]) || isset($json[self::FIELD_CONDITION_EXT]) || array_key_exists(self::FIELD_CONDITION, $json) || array_key_exists(self::FIELD_CONDITION_EXT, $json)) {
            $value = $json[self::FIELD_CONDITION] ?? null;
            $ext = (isset($json[self::FIELD_CONDITION_EXT]) && is_array($json[self::FIELD_CONDITION_EXT])) ? $json[self::FIELD_CONDITION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $type->addCondition($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRId) {
                            $type->addCondition($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addCondition(new FHIRId(array_merge($v, $iext)));
                            } else {
                                $type->addCondition(new FHIRId([FHIRId::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addCondition(new FHIRId(array_merge($ext, $value)));
                } else {
                    $type->addCondition(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addCondition(new FHIRId($iext));
                }
            } else {
                $type->addCondition(new FHIRId(null));
            }
        }
        if (isset($json[self::FIELD_CONSTRAINT]) || array_key_exists(self::FIELD_CONSTRAINT, $json)) {
            if (is_array($json[self::FIELD_CONSTRAINT])) {
                foreach($json[self::FIELD_CONSTRAINT] as $v) {
                    if ($v instanceof FHIRElementDefinitionConstraint) {
                        $type->addConstraint($v);
                    } else {
                        $type->addConstraint(new FHIRElementDefinitionConstraint($v));
                    }
                }
            } elseif ($json[self::FIELD_CONSTRAINT] instanceof FHIRElementDefinitionConstraint) {
                $type->addConstraint($json[self::FIELD_CONSTRAINT]);
            } else {
                $type->addConstraint(new FHIRElementDefinitionConstraint($json[self::FIELD_CONSTRAINT]));
            }
        }
        if (isset($json[self::FIELD_MUST_SUPPORT]) || isset($json[self::FIELD_MUST_SUPPORT_EXT]) || array_key_exists(self::FIELD_MUST_SUPPORT, $json) || array_key_exists(self::FIELD_MUST_SUPPORT_EXT, $json)) {
            $value = $json[self::FIELD_MUST_SUPPORT] ?? null;
            $ext = (isset($json[self::FIELD_MUST_SUPPORT_EXT]) && is_array($json[self::FIELD_MUST_SUPPORT_EXT])) ? $json[self::FIELD_MUST_SUPPORT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setMustSupport($value);
                } else if (is_array($value)) {
                    $type->setMustSupport(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setMustSupport(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMustSupport(new FHIRBoolean($ext));
            } else {
                $type->setMustSupport(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_IS_MODIFIER]) || isset($json[self::FIELD_IS_MODIFIER_EXT]) || array_key_exists(self::FIELD_IS_MODIFIER, $json) || array_key_exists(self::FIELD_IS_MODIFIER_EXT, $json)) {
            $value = $json[self::FIELD_IS_MODIFIER] ?? null;
            $ext = (isset($json[self::FIELD_IS_MODIFIER_EXT]) && is_array($json[self::FIELD_IS_MODIFIER_EXT])) ? $json[self::FIELD_IS_MODIFIER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setIsModifier($value);
                } else if (is_array($value)) {
                    $type->setIsModifier(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setIsModifier(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setIsModifier(new FHIRBoolean($ext));
            } else {
                $type->setIsModifier(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_IS_SUMMARY]) || isset($json[self::FIELD_IS_SUMMARY_EXT]) || array_key_exists(self::FIELD_IS_SUMMARY, $json) || array_key_exists(self::FIELD_IS_SUMMARY_EXT, $json)) {
            $value = $json[self::FIELD_IS_SUMMARY] ?? null;
            $ext = (isset($json[self::FIELD_IS_SUMMARY_EXT]) && is_array($json[self::FIELD_IS_SUMMARY_EXT])) ? $json[self::FIELD_IS_SUMMARY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setIsSummary($value);
                } else if (is_array($value)) {
                    $type->setIsSummary(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setIsSummary(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setIsSummary(new FHIRBoolean($ext));
            } else {
                $type->setIsSummary(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_BINDING]) || array_key_exists(self::FIELD_BINDING, $json)) {
            if ($json[self::FIELD_BINDING] instanceof FHIRElementDefinitionBinding) {
                $type->setBinding($json[self::FIELD_BINDING]);
            } else {
                $type->setBinding(new FHIRElementDefinitionBinding($json[self::FIELD_BINDING]));
            }
        }
        if (isset($json[self::FIELD_MAPPING]) || array_key_exists(self::FIELD_MAPPING, $json)) {
            if (is_array($json[self::FIELD_MAPPING])) {
                foreach($json[self::FIELD_MAPPING] as $v) {
                    if ($v instanceof FHIRElementDefinitionMapping) {
                        $type->addMapping($v);
                    } else {
                        $type->addMapping(new FHIRElementDefinitionMapping($v));
                    }
                }
            } elseif ($json[self::FIELD_MAPPING] instanceof FHIRElementDefinitionMapping) {
                $type->addMapping($json[self::FIELD_MAPPING]);
            } else {
                $type->addMapping(new FHIRElementDefinitionMapping($json[self::FIELD_MAPPING]));
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
        if (isset($this->path)) {
            if (null !== ($val = $this->path->getValue())) {
                $out->path = $val;
            }
            $ext = $this->path->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_path = $ext;
            }
        }
        if (isset($this->representation) && [] !== $this->representation) {
            $vals = [];
            $exts = [];
            foreach ($this->representation as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->representation = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_representation = $exts;
            }
        }
        if (isset($this->sliceName)) {
            if (null !== ($val = $this->sliceName->getValue())) {
                $out->sliceName = $val;
            }
            $ext = $this->sliceName->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_sliceName = $ext;
            }
        }
        if (isset($this->label)) {
            if (null !== ($val = $this->label->getValue())) {
                $out->label = $val;
            }
            $ext = $this->label->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_label = $ext;
            }
        }
        if (isset($this->code) && [] !== $this->code) {
            $out->code = $this->code;
        }
        if (isset($this->slicing)) {
            $out->slicing = $this->slicing;
        }
        if (isset($this->short)) {
            if (null !== ($val = $this->short->getValue())) {
                $out->short = $val;
            }
            $ext = $this->short->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_short = $ext;
            }
        }
        if (isset($this->definition)) {
            if (null !== ($val = $this->definition->getValue())) {
                $out->definition = $val;
            }
            $ext = $this->definition->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_definition = $ext;
            }
        }
        if (isset($this->comment)) {
            if (null !== ($val = $this->comment->getValue())) {
                $out->comment = $val;
            }
            $ext = $this->comment->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_comment = $ext;
            }
        }
        if (isset($this->requirements)) {
            if (null !== ($val = $this->requirements->getValue())) {
                $out->requirements = $val;
            }
            $ext = $this->requirements->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_requirements = $ext;
            }
        }
        if (isset($this->alias) && [] !== $this->alias) {
            $vals = [];
            $exts = [];
            foreach ($this->alias as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->alias = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_alias = $exts;
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
        if (isset($this->base)) {
            $out->base = $this->base;
        }
        if (isset($this->contentReference)) {
            if (null !== ($val = $this->contentReference->getValue())) {
                $out->contentReference = $val;
            }
            $ext = $this->contentReference->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_contentReference = $ext;
            }
        }
        if (isset($this->type) && [] !== $this->type) {
            $out->type = $this->type;
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
        if (isset($this->defaultValueMeta)) {
            $out->defaultValueMeta = $this->defaultValueMeta;
        }
        if (isset($this->meaningWhenMissing)) {
            if (null !== ($val = $this->meaningWhenMissing->getValue())) {
                $out->meaningWhenMissing = $val;
            }
            $ext = $this->meaningWhenMissing->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_meaningWhenMissing = $ext;
            }
        }
        if (isset($this->orderMeaning)) {
            if (null !== ($val = $this->orderMeaning->getValue())) {
                $out->orderMeaning = $val;
            }
            $ext = $this->orderMeaning->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_orderMeaning = $ext;
            }
        }
        if (isset($this->fixedBase64Binary)) {
            if (null !== ($val = $this->fixedBase64Binary->getValue())) {
                $out->fixedBase64Binary = $val;
            }
            $ext = $this->fixedBase64Binary->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_fixedBase64Binary = $ext;
            }
        }
        if (isset($this->fixedBoolean)) {
            if (null !== ($val = $this->fixedBoolean->getValue())) {
                $out->fixedBoolean = $val;
            }
            $ext = $this->fixedBoolean->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_fixedBoolean = $ext;
            }
        }
        if (isset($this->fixedCode)) {
            if (null !== ($val = $this->fixedCode->getValue())) {
                $out->fixedCode = $val;
            }
            $ext = $this->fixedCode->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_fixedCode = $ext;
            }
        }
        if (isset($this->fixedDate)) {
            if (null !== ($val = $this->fixedDate->getValue())) {
                $out->fixedDate = $val;
            }
            $ext = $this->fixedDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_fixedDate = $ext;
            }
        }
        if (isset($this->fixedDateTime)) {
            if (null !== ($val = $this->fixedDateTime->getValue())) {
                $out->fixedDateTime = $val;
            }
            $ext = $this->fixedDateTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_fixedDateTime = $ext;
            }
        }
        if (isset($this->fixedDecimal)) {
            if (null !== ($val = $this->fixedDecimal->getValue())) {
                $out->fixedDecimal = $val;
            }
            $ext = $this->fixedDecimal->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_fixedDecimal = $ext;
            }
        }
        if (isset($this->fixedId)) {
            if (null !== ($val = $this->fixedId->getValue())) {
                $out->fixedId = $val;
            }
            $ext = $this->fixedId->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_fixedId = $ext;
            }
        }
        if (isset($this->fixedInstant)) {
            if (null !== ($val = $this->fixedInstant->getValue())) {
                $out->fixedInstant = $val;
            }
            $ext = $this->fixedInstant->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_fixedInstant = $ext;
            }
        }
        if (isset($this->fixedInteger)) {
            if (null !== ($val = $this->fixedInteger->getValue())) {
                $out->fixedInteger = $val;
            }
            $ext = $this->fixedInteger->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_fixedInteger = $ext;
            }
        }
        if (isset($this->fixedMarkdown)) {
            if (null !== ($val = $this->fixedMarkdown->getValue())) {
                $out->fixedMarkdown = $val;
            }
            $ext = $this->fixedMarkdown->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_fixedMarkdown = $ext;
            }
        }
        if (isset($this->fixedOid)) {
            if (null !== ($val = $this->fixedOid->getValue())) {
                $out->fixedOid = $val;
            }
            $ext = $this->fixedOid->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_fixedOid = $ext;
            }
        }
        if (isset($this->fixedPositiveInt)) {
            if (null !== ($val = $this->fixedPositiveInt->getValue())) {
                $out->fixedPositiveInt = $val;
            }
            $ext = $this->fixedPositiveInt->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_fixedPositiveInt = $ext;
            }
        }
        if (isset($this->fixedString)) {
            if (null !== ($val = $this->fixedString->getValue())) {
                $out->fixedString = $val;
            }
            $ext = $this->fixedString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_fixedString = $ext;
            }
        }
        if (isset($this->fixedTime)) {
            if (null !== ($val = $this->fixedTime->getValue())) {
                $out->fixedTime = $val;
            }
            $ext = $this->fixedTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_fixedTime = $ext;
            }
        }
        if (isset($this->fixedUnsignedInt)) {
            if (null !== ($val = $this->fixedUnsignedInt->getValue())) {
                $out->fixedUnsignedInt = $val;
            }
            $ext = $this->fixedUnsignedInt->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_fixedUnsignedInt = $ext;
            }
        }
        if (isset($this->fixedUri)) {
            if (null !== ($val = $this->fixedUri->getValue())) {
                $out->fixedUri = $val;
            }
            $ext = $this->fixedUri->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_fixedUri = $ext;
            }
        }
        if (isset($this->fixedAddress)) {
            $out->fixedAddress = $this->fixedAddress;
        }
        if (isset($this->fixedAge)) {
            $out->fixedAge = $this->fixedAge;
        }
        if (isset($this->fixedAnnotation)) {
            $out->fixedAnnotation = $this->fixedAnnotation;
        }
        if (isset($this->fixedAttachment)) {
            $out->fixedAttachment = $this->fixedAttachment;
        }
        if (isset($this->fixedCodeableConcept)) {
            $out->fixedCodeableConcept = $this->fixedCodeableConcept;
        }
        if (isset($this->fixedCoding)) {
            $out->fixedCoding = $this->fixedCoding;
        }
        if (isset($this->fixedContactPoint)) {
            $out->fixedContactPoint = $this->fixedContactPoint;
        }
        if (isset($this->fixedCount)) {
            $out->fixedCount = $this->fixedCount;
        }
        if (isset($this->fixedDistance)) {
            $out->fixedDistance = $this->fixedDistance;
        }
        if (isset($this->fixedDuration)) {
            $out->fixedDuration = $this->fixedDuration;
        }
        if (isset($this->fixedHumanName)) {
            $out->fixedHumanName = $this->fixedHumanName;
        }
        if (isset($this->fixedIdentifier)) {
            $out->fixedIdentifier = $this->fixedIdentifier;
        }
        if (isset($this->fixedMoney)) {
            $out->fixedMoney = $this->fixedMoney;
        }
        if (isset($this->fixedPeriod)) {
            $out->fixedPeriod = $this->fixedPeriod;
        }
        if (isset($this->fixedQuantity)) {
            $out->fixedQuantity = $this->fixedQuantity;
        }
        if (isset($this->fixedRange)) {
            $out->fixedRange = $this->fixedRange;
        }
        if (isset($this->fixedRatio)) {
            $out->fixedRatio = $this->fixedRatio;
        }
        if (isset($this->fixedReference)) {
            $out->fixedReference = $this->fixedReference;
        }
        if (isset($this->fixedSampledData)) {
            $out->fixedSampledData = $this->fixedSampledData;
        }
        if (isset($this->fixedSignature)) {
            $out->fixedSignature = $this->fixedSignature;
        }
        if (isset($this->fixedTiming)) {
            $out->fixedTiming = $this->fixedTiming;
        }
        if (isset($this->fixedMeta)) {
            $out->fixedMeta = $this->fixedMeta;
        }
        if (isset($this->patternBase64Binary)) {
            if (null !== ($val = $this->patternBase64Binary->getValue())) {
                $out->patternBase64Binary = $val;
            }
            $ext = $this->patternBase64Binary->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_patternBase64Binary = $ext;
            }
        }
        if (isset($this->patternBoolean)) {
            if (null !== ($val = $this->patternBoolean->getValue())) {
                $out->patternBoolean = $val;
            }
            $ext = $this->patternBoolean->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_patternBoolean = $ext;
            }
        }
        if (isset($this->patternCode)) {
            if (null !== ($val = $this->patternCode->getValue())) {
                $out->patternCode = $val;
            }
            $ext = $this->patternCode->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_patternCode = $ext;
            }
        }
        if (isset($this->patternDate)) {
            if (null !== ($val = $this->patternDate->getValue())) {
                $out->patternDate = $val;
            }
            $ext = $this->patternDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_patternDate = $ext;
            }
        }
        if (isset($this->patternDateTime)) {
            if (null !== ($val = $this->patternDateTime->getValue())) {
                $out->patternDateTime = $val;
            }
            $ext = $this->patternDateTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_patternDateTime = $ext;
            }
        }
        if (isset($this->patternDecimal)) {
            if (null !== ($val = $this->patternDecimal->getValue())) {
                $out->patternDecimal = $val;
            }
            $ext = $this->patternDecimal->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_patternDecimal = $ext;
            }
        }
        if (isset($this->patternId)) {
            if (null !== ($val = $this->patternId->getValue())) {
                $out->patternId = $val;
            }
            $ext = $this->patternId->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_patternId = $ext;
            }
        }
        if (isset($this->patternInstant)) {
            if (null !== ($val = $this->patternInstant->getValue())) {
                $out->patternInstant = $val;
            }
            $ext = $this->patternInstant->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_patternInstant = $ext;
            }
        }
        if (isset($this->patternInteger)) {
            if (null !== ($val = $this->patternInteger->getValue())) {
                $out->patternInteger = $val;
            }
            $ext = $this->patternInteger->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_patternInteger = $ext;
            }
        }
        if (isset($this->patternMarkdown)) {
            if (null !== ($val = $this->patternMarkdown->getValue())) {
                $out->patternMarkdown = $val;
            }
            $ext = $this->patternMarkdown->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_patternMarkdown = $ext;
            }
        }
        if (isset($this->patternOid)) {
            if (null !== ($val = $this->patternOid->getValue())) {
                $out->patternOid = $val;
            }
            $ext = $this->patternOid->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_patternOid = $ext;
            }
        }
        if (isset($this->patternPositiveInt)) {
            if (null !== ($val = $this->patternPositiveInt->getValue())) {
                $out->patternPositiveInt = $val;
            }
            $ext = $this->patternPositiveInt->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_patternPositiveInt = $ext;
            }
        }
        if (isset($this->patternString)) {
            if (null !== ($val = $this->patternString->getValue())) {
                $out->patternString = $val;
            }
            $ext = $this->patternString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_patternString = $ext;
            }
        }
        if (isset($this->patternTime)) {
            if (null !== ($val = $this->patternTime->getValue())) {
                $out->patternTime = $val;
            }
            $ext = $this->patternTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_patternTime = $ext;
            }
        }
        if (isset($this->patternUnsignedInt)) {
            if (null !== ($val = $this->patternUnsignedInt->getValue())) {
                $out->patternUnsignedInt = $val;
            }
            $ext = $this->patternUnsignedInt->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_patternUnsignedInt = $ext;
            }
        }
        if (isset($this->patternUri)) {
            if (null !== ($val = $this->patternUri->getValue())) {
                $out->patternUri = $val;
            }
            $ext = $this->patternUri->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_patternUri = $ext;
            }
        }
        if (isset($this->patternAddress)) {
            $out->patternAddress = $this->patternAddress;
        }
        if (isset($this->patternAge)) {
            $out->patternAge = $this->patternAge;
        }
        if (isset($this->patternAnnotation)) {
            $out->patternAnnotation = $this->patternAnnotation;
        }
        if (isset($this->patternAttachment)) {
            $out->patternAttachment = $this->patternAttachment;
        }
        if (isset($this->patternCodeableConcept)) {
            $out->patternCodeableConcept = $this->patternCodeableConcept;
        }
        if (isset($this->patternCoding)) {
            $out->patternCoding = $this->patternCoding;
        }
        if (isset($this->patternContactPoint)) {
            $out->patternContactPoint = $this->patternContactPoint;
        }
        if (isset($this->patternCount)) {
            $out->patternCount = $this->patternCount;
        }
        if (isset($this->patternDistance)) {
            $out->patternDistance = $this->patternDistance;
        }
        if (isset($this->patternDuration)) {
            $out->patternDuration = $this->patternDuration;
        }
        if (isset($this->patternHumanName)) {
            $out->patternHumanName = $this->patternHumanName;
        }
        if (isset($this->patternIdentifier)) {
            $out->patternIdentifier = $this->patternIdentifier;
        }
        if (isset($this->patternMoney)) {
            $out->patternMoney = $this->patternMoney;
        }
        if (isset($this->patternPeriod)) {
            $out->patternPeriod = $this->patternPeriod;
        }
        if (isset($this->patternQuantity)) {
            $out->patternQuantity = $this->patternQuantity;
        }
        if (isset($this->patternRange)) {
            $out->patternRange = $this->patternRange;
        }
        if (isset($this->patternRatio)) {
            $out->patternRatio = $this->patternRatio;
        }
        if (isset($this->patternReference)) {
            $out->patternReference = $this->patternReference;
        }
        if (isset($this->patternSampledData)) {
            $out->patternSampledData = $this->patternSampledData;
        }
        if (isset($this->patternSignature)) {
            $out->patternSignature = $this->patternSignature;
        }
        if (isset($this->patternTiming)) {
            $out->patternTiming = $this->patternTiming;
        }
        if (isset($this->patternMeta)) {
            $out->patternMeta = $this->patternMeta;
        }
        if (isset($this->example) && [] !== $this->example) {
            $out->example = $this->example;
        }
        if (isset($this->minValueDate)) {
            if (null !== ($val = $this->minValueDate->getValue())) {
                $out->minValueDate = $val;
            }
            $ext = $this->minValueDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_minValueDate = $ext;
            }
        }
        if (isset($this->minValueDateTime)) {
            if (null !== ($val = $this->minValueDateTime->getValue())) {
                $out->minValueDateTime = $val;
            }
            $ext = $this->minValueDateTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_minValueDateTime = $ext;
            }
        }
        if (isset($this->minValueInstant)) {
            if (null !== ($val = $this->minValueInstant->getValue())) {
                $out->minValueInstant = $val;
            }
            $ext = $this->minValueInstant->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_minValueInstant = $ext;
            }
        }
        if (isset($this->minValueTime)) {
            if (null !== ($val = $this->minValueTime->getValue())) {
                $out->minValueTime = $val;
            }
            $ext = $this->minValueTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_minValueTime = $ext;
            }
        }
        if (isset($this->minValueDecimal)) {
            if (null !== ($val = $this->minValueDecimal->getValue())) {
                $out->minValueDecimal = $val;
            }
            $ext = $this->minValueDecimal->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_minValueDecimal = $ext;
            }
        }
        if (isset($this->minValueInteger)) {
            if (null !== ($val = $this->minValueInteger->getValue())) {
                $out->minValueInteger = $val;
            }
            $ext = $this->minValueInteger->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_minValueInteger = $ext;
            }
        }
        if (isset($this->minValuePositiveInt)) {
            if (null !== ($val = $this->minValuePositiveInt->getValue())) {
                $out->minValuePositiveInt = $val;
            }
            $ext = $this->minValuePositiveInt->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_minValuePositiveInt = $ext;
            }
        }
        if (isset($this->minValueUnsignedInt)) {
            if (null !== ($val = $this->minValueUnsignedInt->getValue())) {
                $out->minValueUnsignedInt = $val;
            }
            $ext = $this->minValueUnsignedInt->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_minValueUnsignedInt = $ext;
            }
        }
        if (isset($this->minValueQuantity)) {
            $out->minValueQuantity = $this->minValueQuantity;
        }
        if (isset($this->maxValueDate)) {
            if (null !== ($val = $this->maxValueDate->getValue())) {
                $out->maxValueDate = $val;
            }
            $ext = $this->maxValueDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_maxValueDate = $ext;
            }
        }
        if (isset($this->maxValueDateTime)) {
            if (null !== ($val = $this->maxValueDateTime->getValue())) {
                $out->maxValueDateTime = $val;
            }
            $ext = $this->maxValueDateTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_maxValueDateTime = $ext;
            }
        }
        if (isset($this->maxValueInstant)) {
            if (null !== ($val = $this->maxValueInstant->getValue())) {
                $out->maxValueInstant = $val;
            }
            $ext = $this->maxValueInstant->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_maxValueInstant = $ext;
            }
        }
        if (isset($this->maxValueTime)) {
            if (null !== ($val = $this->maxValueTime->getValue())) {
                $out->maxValueTime = $val;
            }
            $ext = $this->maxValueTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_maxValueTime = $ext;
            }
        }
        if (isset($this->maxValueDecimal)) {
            if (null !== ($val = $this->maxValueDecimal->getValue())) {
                $out->maxValueDecimal = $val;
            }
            $ext = $this->maxValueDecimal->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_maxValueDecimal = $ext;
            }
        }
        if (isset($this->maxValueInteger)) {
            if (null !== ($val = $this->maxValueInteger->getValue())) {
                $out->maxValueInteger = $val;
            }
            $ext = $this->maxValueInteger->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_maxValueInteger = $ext;
            }
        }
        if (isset($this->maxValuePositiveInt)) {
            if (null !== ($val = $this->maxValuePositiveInt->getValue())) {
                $out->maxValuePositiveInt = $val;
            }
            $ext = $this->maxValuePositiveInt->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_maxValuePositiveInt = $ext;
            }
        }
        if (isset($this->maxValueUnsignedInt)) {
            if (null !== ($val = $this->maxValueUnsignedInt->getValue())) {
                $out->maxValueUnsignedInt = $val;
            }
            $ext = $this->maxValueUnsignedInt->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_maxValueUnsignedInt = $ext;
            }
        }
        if (isset($this->maxValueQuantity)) {
            $out->maxValueQuantity = $this->maxValueQuantity;
        }
        if (isset($this->maxLength)) {
            if (null !== ($val = $this->maxLength->getValue())) {
                $out->maxLength = $val;
            }
            $ext = $this->maxLength->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_maxLength = $ext;
            }
        }
        if (isset($this->condition) && [] !== $this->condition) {
            $vals = [];
            $exts = [];
            foreach ($this->condition as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->condition = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_condition = $exts;
            }
        }
        if (isset($this->constraint) && [] !== $this->constraint) {
            $out->constraint = $this->constraint;
        }
        if (isset($this->mustSupport)) {
            if (null !== ($val = $this->mustSupport->getValue())) {
                $out->mustSupport = $val;
            }
            $ext = $this->mustSupport->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_mustSupport = $ext;
            }
        }
        if (isset($this->isModifier)) {
            if (null !== ($val = $this->isModifier->getValue())) {
                $out->isModifier = $val;
            }
            $ext = $this->isModifier->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_isModifier = $ext;
            }
        }
        if (isset($this->isSummary)) {
            if (null !== ($val = $this->isSummary->getValue())) {
                $out->isSummary = $val;
            }
            $ext = $this->isSummary->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_isSummary = $ext;
            }
        }
        if (isset($this->binding)) {
            $out->binding = $this->binding;
        }
        if (isset($this->mapping) && [] !== $this->mapping) {
            $out->mapping = $this->mapping;
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