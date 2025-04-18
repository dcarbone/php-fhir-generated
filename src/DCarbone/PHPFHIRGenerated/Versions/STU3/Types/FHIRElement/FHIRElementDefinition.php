<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBase64BinaryPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRPropertyRepresentationList;
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
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRElementDefinition extends FHIRElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_ELEMENT_DEFINITION;

    /* class_default.php:56 */
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

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_PATH => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_PATH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SLICE_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LABEL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SHORT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFINITION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COMMENT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_REQUIREMENTS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MIN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAX => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CONTENT_REFERENCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_VALUE_BASE_64BINARY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_VALUE_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
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
        self::FIELD_MEANING_WHEN_MISSING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ORDER_MEANING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FIXED_BASE_64BINARY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FIXED_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FIXED_CODE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FIXED_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FIXED_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FIXED_DECIMAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FIXED_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FIXED_INSTANT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FIXED_INTEGER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FIXED_MARKDOWN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FIXED_OID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FIXED_POSITIVE_INT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FIXED_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FIXED_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FIXED_UNSIGNED_INT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FIXED_URI => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PATTERN_BASE_64BINARY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PATTERN_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PATTERN_CODE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PATTERN_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PATTERN_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PATTERN_DECIMAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PATTERN_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PATTERN_INSTANT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PATTERN_INTEGER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PATTERN_MARKDOWN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PATTERN_OID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PATTERN_POSITIVE_INT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PATTERN_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PATTERN_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PATTERN_UNSIGNED_INT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PATTERN_URI => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MIN_VALUE_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MIN_VALUE_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MIN_VALUE_INSTANT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MIN_VALUE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MIN_VALUE_DECIMAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MIN_VALUE_INTEGER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MIN_VALUE_POSITIVE_INT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MIN_VALUE_UNSIGNED_INT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAX_VALUE_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAX_VALUE_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAX_VALUE_INSTANT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAX_VALUE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAX_VALUE_DECIMAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAX_VALUE_INTEGER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAX_VALUE_POSITIVE_INT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAX_VALUE_UNSIGNED_INT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAX_LENGTH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MUST_SUPPORT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_IS_MODIFIER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_IS_SUMMARY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
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
    #[FHIRString]
    protected FHIRString $path;
    /**
     * How a property is represented when serialized.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Codes that define how this element is represented in instances, when the
     * deviation varies from the normal case.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPropertyRepresentation> 
     */
    #[FHIRPropertyRepresentation]
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
    #[FHIRString]
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
    #[FHIRString]
    protected FHIRString $label;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that has the same meaning as the element in a particular terminology.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding> 
     */
    #[FHIRCoding]
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
    #[FHIRElementDefinitionSlicing]
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
    #[FHIRString]
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
    #[FHIRMarkdown]
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
    #[FHIRMarkdown]
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
    #[FHIRMarkdown]
    protected FHIRMarkdown $requirements;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString> 
     */
    #[FHIRString]
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
    #[FHIRUnsignedInt]
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
    #[FHIRString]
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
    #[FHIRElementDefinitionBase]
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
    #[FHIRUri]
    protected FHIRUri $contentReference;
    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The data type or resource that the value of this element is permitted to be.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType> 
     */
    #[FHIRElementDefinitionType]
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
    #[FHIRBase64Binary]
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
    #[FHIRBoolean]
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
    #[FHIRCode]
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
    #[FHIRDate]
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
    #[FHIRDateTime]
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
    #[FHIRDecimal]
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
    #[FHIRId]
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
    #[FHIRInstant]
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
    #[FHIRInteger]
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
    #[FHIRMarkdown]
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
    #[FHIROid]
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
    #[FHIRPositiveInt]
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
    #[FHIRString]
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
    #[FHIRTime]
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
    #[FHIRUnsignedInt]
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
    #[FHIRUri]
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
    #[FHIRAddress]
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
    #[FHIRAge]
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
    #[FHIRAnnotation]
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
    #[FHIRAttachment]
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
    #[FHIRCodeableConcept]
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
    #[FHIRCoding]
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
    #[FHIRContactPoint]
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
    #[FHIRCount]
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
    #[FHIRDistance]
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
    #[FHIRDuration]
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
    #[FHIRHumanName]
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
    #[FHIRIdentifier]
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
    #[FHIRMoney]
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
    #[FHIRPeriod]
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
    #[FHIRQuantity]
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
    #[FHIRRange]
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
    #[FHIRRatio]
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
    #[FHIRReference]
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
    #[FHIRSampledData]
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
    #[FHIRSignature]
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
    #[FHIRTiming]
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
    #[FHIRMeta]
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
    #[FHIRMarkdown]
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
    #[FHIRString]
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
    #[FHIRBase64Binary]
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
    #[FHIRBoolean]
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
    #[FHIRCode]
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
    #[FHIRDate]
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
    #[FHIRDateTime]
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
    #[FHIRDecimal]
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
    #[FHIRId]
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
    #[FHIRInstant]
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
    #[FHIRInteger]
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
    #[FHIRMarkdown]
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
    #[FHIROid]
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
    #[FHIRPositiveInt]
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
    #[FHIRString]
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
    #[FHIRTime]
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
    #[FHIRUnsignedInt]
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
    #[FHIRUri]
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
    #[FHIRAddress]
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
    #[FHIRAge]
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
    #[FHIRAnnotation]
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
    #[FHIRAttachment]
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
    #[FHIRCodeableConcept]
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
    #[FHIRCoding]
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
    #[FHIRContactPoint]
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
    #[FHIRCount]
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
    #[FHIRDistance]
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
    #[FHIRDuration]
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
    #[FHIRHumanName]
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
    #[FHIRIdentifier]
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
    #[FHIRMoney]
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
    #[FHIRPeriod]
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
    #[FHIRQuantity]
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
    #[FHIRRange]
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
    #[FHIRRatio]
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
    #[FHIRReference]
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
    #[FHIRSampledData]
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
    #[FHIRSignature]
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
    #[FHIRTiming]
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
    #[FHIRMeta]
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
    #[FHIRBase64Binary]
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
    #[FHIRBoolean]
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
    #[FHIRCode]
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
    #[FHIRDate]
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
    #[FHIRDateTime]
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
    #[FHIRDecimal]
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
    #[FHIRId]
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
    #[FHIRInstant]
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
    #[FHIRInteger]
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
    #[FHIRMarkdown]
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
    #[FHIROid]
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
    #[FHIRPositiveInt]
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
    #[FHIRString]
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
    #[FHIRTime]
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
    #[FHIRUnsignedInt]
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
    #[FHIRUri]
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
    #[FHIRAddress]
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
    #[FHIRAge]
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
    #[FHIRAnnotation]
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
    #[FHIRAttachment]
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
    #[FHIRCodeableConcept]
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
    #[FHIRCoding]
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
    #[FHIRContactPoint]
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
    #[FHIRCount]
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
    #[FHIRDistance]
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
    #[FHIRDuration]
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
    #[FHIRHumanName]
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
    #[FHIRIdentifier]
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
    #[FHIRMoney]
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
    #[FHIRPeriod]
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
    #[FHIRQuantity]
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
    #[FHIRRange]
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
    #[FHIRRatio]
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
    #[FHIRReference]
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
    #[FHIRSampledData]
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
    #[FHIRSignature]
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
    #[FHIRTiming]
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
    #[FHIRMeta]
    protected FHIRMeta $patternMeta;
    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A sample value for this element demonstrating the type of information that would
     * typically be found in the element.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionExample> 
     */
    #[FHIRElementDefinitionExample]
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
    #[FHIRDate]
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
    #[FHIRDateTime]
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
    #[FHIRInstant]
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
    #[FHIRTime]
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
    #[FHIRDecimal]
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
    #[FHIRInteger]
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
    #[FHIRPositiveInt]
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
    #[FHIRUnsignedInt]
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
    #[FHIRQuantity]
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
    #[FHIRDate]
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
    #[FHIRDateTime]
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
    #[FHIRInstant]
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
    #[FHIRTime]
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
    #[FHIRDecimal]
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
    #[FHIRInteger]
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
    #[FHIRPositiveInt]
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
    #[FHIRUnsignedInt]
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
    #[FHIRQuantity]
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
    #[FHIRInteger]
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
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId> 
     */
    #[FHIRId]
    protected array $condition;
    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Formal constraints such as co-occurrence and other constraints that can be
     * computationally evaluated within the context of the instance.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint> 
     */
    #[FHIRElementDefinitionConstraint]
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
    #[FHIRBoolean]
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
    #[FHIRBoolean]
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
    #[FHIRBoolean]
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
    #[FHIRElementDefinitionBinding]
    protected FHIRElementDefinitionBinding $binding;
    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a concept from an external specification that roughly corresponds to
     * this element.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping> 
     */
    #[FHIRElementDefinitionMapping]
    protected array $mapping;

    /* constructor.php:61 */
    /**
     * FHIRElementDefinition Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $path
     * @param null|iterable<string>|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRPropertyRepresentationList>|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPropertyRepresentation> $representation
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $sliceName
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $label
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding> $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing $slicing
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $short
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $definition
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $comment
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $requirements
     * @param null|iterable<string>|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString> $alias
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt $min
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $max
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase $base
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $contentReference
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType> $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBase64Binary $defaultValueBase64Binary
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $defaultValueBoolean
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $defaultValueCode
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $defaultValueDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $defaultValueDateTime
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $defaultValueDecimal
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $defaultValueId
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant $defaultValueInstant
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $defaultValueInteger
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $defaultValueMarkdown
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIROid $defaultValueOid
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $defaultValuePositiveInt
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $fixedDecimal
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $fixedId
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant $fixedInstant
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $fixedInteger
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $fixedMarkdown
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIROid $fixedOid
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $fixedPositiveInt
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $patternDecimal
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $patternId
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant $patternInstant
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $patternInteger
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $patternMarkdown
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIROid $patternOid
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $patternPositiveInt
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
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionExample> $example
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $minValueDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $minValueDateTime
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant $minValueInstant
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime $minValueTime
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $minValueDecimal
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $minValueInteger
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $minValuePositiveInt
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt $minValueUnsignedInt
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $minValueQuantity
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $maxValueDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $maxValueDateTime
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant $maxValueInstant
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime $maxValueTime
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $maxValueDecimal
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $maxValueInteger
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $maxValuePositiveInt
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt $maxValueUnsignedInt
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $maxValueQuantity
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $maxLength
     * @param null|iterable<string>|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId> $condition
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint> $constraint
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $mustSupport
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $isModifier
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $isSummary
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding $binding
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping> $mapping
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
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $defaultValueDecimal = null,
                                null|string|FHIRIdPrimitive|FHIRId $defaultValueId = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $defaultValueInstant = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $defaultValueInteger = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $defaultValueMarkdown = null,
                                null|string|FHIROidPrimitive|FHIROid $defaultValueOid = null,
                                null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $defaultValuePositiveInt = null,
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
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $fixedDecimal = null,
                                null|string|FHIRIdPrimitive|FHIRId $fixedId = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $fixedInstant = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $fixedInteger = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $fixedMarkdown = null,
                                null|string|FHIROidPrimitive|FHIROid $fixedOid = null,
                                null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $fixedPositiveInt = null,
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
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $patternDecimal = null,
                                null|string|FHIRIdPrimitive|FHIRId $patternId = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $patternInstant = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $patternInteger = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $patternMarkdown = null,
                                null|string|FHIROidPrimitive|FHIROid $patternOid = null,
                                null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $patternPositiveInt = null,
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
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $minValueDecimal = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $minValueInteger = null,
                                null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $minValuePositiveInt = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $minValueUnsignedInt = null,
                                null|FHIRQuantity $minValueQuantity = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $maxValueDate = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $maxValueDateTime = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $maxValueInstant = null,
                                null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $maxValueTime = null,
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $maxValueDecimal = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $maxValueInteger = null,
                                null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $maxValuePositiveInt = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $maxValueUnsignedInt = null,
                                null|FHIRQuantity $maxValueQuantity = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $maxLength = null,
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

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPropertyRepresentation>
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
        if (!isset($this->representation)) {
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRPropertyRepresentationList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPropertyRepresentation $representation
     * @return static
     */
    public function addRepresentation(string|FHIRPropertyRepresentationList|FHIRPropertyRepresentation $representation): self
    {
        if (!($representation instanceof FHIRPropertyRepresentation)) {
            $representation = new FHIRPropertyRepresentation(value: $representation);
        }
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRPropertyRepresentationList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPropertyRepresentation ...$representation
     * @return static
     */
    public function setRepresentation(string|FHIRPropertyRepresentationList|FHIRPropertyRepresentation ...$representation): self
    {
        if ([] === $representation) {
            unset($this->representation);
            return $this;
        }
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding>
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
        if (!isset($this->code)) {
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
        if ([] === $code) {
            unset($this->code);
            return $this;
        }
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString>
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
        if (!isset($this->alias)) {
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
        if ([] === $alias) {
            unset($this->alias);
            return $this;
        }
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType>
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
        if (!isset($this->type)) {
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
        if ([] === $type) {
            unset($this->type);
            return $this;
        }
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $defaultValueDecimal
     * @return static
     */
    public function setDefaultValueDecimal(null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $defaultValueDecimal): self
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $defaultValueInteger
     * @return static
     */
    public function setDefaultValueInteger(null|string|float|FHIRIntegerPrimitive|FHIRInteger $defaultValueInteger): self
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $defaultValuePositiveInt
     * @return static
     */
    public function setDefaultValuePositiveInt(null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $defaultValuePositiveInt): self
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $fixedDecimal
     * @return static
     */
    public function setFixedDecimal(null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $fixedDecimal): self
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $fixedInteger
     * @return static
     */
    public function setFixedInteger(null|string|float|FHIRIntegerPrimitive|FHIRInteger $fixedInteger): self
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $fixedPositiveInt
     * @return static
     */
    public function setFixedPositiveInt(null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $fixedPositiveInt): self
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $patternDecimal
     * @return static
     */
    public function setPatternDecimal(null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $patternDecimal): self
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $patternInteger
     * @return static
     */
    public function setPatternInteger(null|string|float|FHIRIntegerPrimitive|FHIRInteger $patternInteger): self
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $patternPositiveInt
     * @return static
     */
    public function setPatternPositiveInt(null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $patternPositiveInt): self
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionExample>
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
        if (!isset($this->example)) {
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
        if ([] === $example) {
            unset($this->example);
            return $this;
        }
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $minValueDecimal
     * @return static
     */
    public function setMinValueDecimal(null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $minValueDecimal): self
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $minValueInteger
     * @return static
     */
    public function setMinValueInteger(null|string|float|FHIRIntegerPrimitive|FHIRInteger $minValueInteger): self
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $minValuePositiveInt
     * @return static
     */
    public function setMinValuePositiveInt(null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $minValuePositiveInt): self
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $maxValueDecimal
     * @return static
     */
    public function setMaxValueDecimal(null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $maxValueDecimal): self
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $maxValueInteger
     * @return static
     */
    public function setMaxValueInteger(null|string|float|FHIRIntegerPrimitive|FHIRInteger $maxValueInteger): self
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $maxValuePositiveInt
     * @return static
     */
    public function setMaxValuePositiveInt(null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $maxValuePositiveInt): self
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $maxLength
     * @return static
     */
    public function setMaxLength(null|string|float|FHIRIntegerPrimitive|FHIRInteger $maxLength): self
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId>
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
        if (!isset($this->condition)) {
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
        if ([] === $condition) {
            unset($this->condition);
            return $this;
        }
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint>
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
        if (!isset($this->constraint)) {
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
        if ([] === $constraint) {
            unset($this->constraint);
            return $this;
        }
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping>
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
        if (!isset($this->mapping)) {
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
        if ([] === $mapping) {
            unset($this->mapping);
            return $this;
        }
        $this->mapping = $mapping;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_PATH === $cen) {
                $type->setPath(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REPRESENTATION === $cen) {
                $type->addRepresentation(FHIRPropertyRepresentation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SLICE_NAME === $cen) {
                $type->setSliceName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LABEL === $cen) {
                $type->setLabel(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->addCode(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SLICING === $cen) {
                $type->setSlicing(FHIRElementDefinitionSlicing::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SHORT === $cen) {
                $type->setShort(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITION === $cen) {
                $type->setDefinition(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMMENT === $cen) {
                $type->setComment(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REQUIREMENTS === $cen) {
                $type->setRequirements(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ALIAS === $cen) {
                $type->addAlias(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MIN === $cen) {
                $type->setMin(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX === $cen) {
                $type->setMax(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BASE === $cen) {
                $type->setBase(FHIRElementDefinitionBase::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTENT_REFERENCE === $cen) {
                $type->setContentReference(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->addType(FHIRElementDefinitionType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_BASE_64BINARY === $cen) {
                $type->setDefaultValueBase64Binary(FHIRBase64Binary::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_BOOLEAN === $cen) {
                $type->setDefaultValueBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
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
            } else if (self::FIELD_DEFAULT_VALUE_META === $cen) {
                $type->setDefaultValueMeta(FHIRMeta::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MEANING_WHEN_MISSING === $cen) {
                $type->setMeaningWhenMissing(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ORDER_MEANING === $cen) {
                $type->setOrderMeaning(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_BASE_64BINARY === $cen) {
                $type->setFixedBase64Binary(FHIRBase64Binary::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_BOOLEAN === $cen) {
                $type->setFixedBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_CODE === $cen) {
                $type->setFixedCode(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_DATE === $cen) {
                $type->setFixedDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_DATE_TIME === $cen) {
                $type->setFixedDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_DECIMAL === $cen) {
                $type->setFixedDecimal(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_ID === $cen) {
                $type->setFixedId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_INSTANT === $cen) {
                $type->setFixedInstant(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_INTEGER === $cen) {
                $type->setFixedInteger(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_MARKDOWN === $cen) {
                $type->setFixedMarkdown(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_OID === $cen) {
                $type->setFixedOid(FHIROid::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_POSITIVE_INT === $cen) {
                $type->setFixedPositiveInt(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_STRING === $cen) {
                $type->setFixedString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_TIME === $cen) {
                $type->setFixedTime(FHIRTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_UNSIGNED_INT === $cen) {
                $type->setFixedUnsignedInt(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_URI === $cen) {
                $type->setFixedUri(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_ADDRESS === $cen) {
                $type->setFixedAddress(FHIRAddress::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_AGE === $cen) {
                $type->setFixedAge(FHIRAge::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_ANNOTATION === $cen) {
                $type->setFixedAnnotation(FHIRAnnotation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_ATTACHMENT === $cen) {
                $type->setFixedAttachment(FHIRAttachment::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_CODEABLE_CONCEPT === $cen) {
                $type->setFixedCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_CODING === $cen) {
                $type->setFixedCoding(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_CONTACT_POINT === $cen) {
                $type->setFixedContactPoint(FHIRContactPoint::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_COUNT === $cen) {
                $type->setFixedCount(FHIRCount::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_DISTANCE === $cen) {
                $type->setFixedDistance(FHIRDistance::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_DURATION === $cen) {
                $type->setFixedDuration(FHIRDuration::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_HUMAN_NAME === $cen) {
                $type->setFixedHumanName(FHIRHumanName::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_IDENTIFIER === $cen) {
                $type->setFixedIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_MONEY === $cen) {
                $type->setFixedMoney(FHIRMoney::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_PERIOD === $cen) {
                $type->setFixedPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_QUANTITY === $cen) {
                $type->setFixedQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_RANGE === $cen) {
                $type->setFixedRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_RATIO === $cen) {
                $type->setFixedRatio(FHIRRatio::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_REFERENCE === $cen) {
                $type->setFixedReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_SAMPLED_DATA === $cen) {
                $type->setFixedSampledData(FHIRSampledData::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_SIGNATURE === $cen) {
                $type->setFixedSignature(FHIRSignature::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_TIMING === $cen) {
                $type->setFixedTiming(FHIRTiming::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_META === $cen) {
                $type->setFixedMeta(FHIRMeta::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_BASE_64BINARY === $cen) {
                $type->setPatternBase64Binary(FHIRBase64Binary::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_BOOLEAN === $cen) {
                $type->setPatternBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_CODE === $cen) {
                $type->setPatternCode(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_DATE === $cen) {
                $type->setPatternDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_DATE_TIME === $cen) {
                $type->setPatternDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_DECIMAL === $cen) {
                $type->setPatternDecimal(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_ID === $cen) {
                $type->setPatternId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_INSTANT === $cen) {
                $type->setPatternInstant(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_INTEGER === $cen) {
                $type->setPatternInteger(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_MARKDOWN === $cen) {
                $type->setPatternMarkdown(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_OID === $cen) {
                $type->setPatternOid(FHIROid::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_POSITIVE_INT === $cen) {
                $type->setPatternPositiveInt(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_STRING === $cen) {
                $type->setPatternString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_TIME === $cen) {
                $type->setPatternTime(FHIRTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_UNSIGNED_INT === $cen) {
                $type->setPatternUnsignedInt(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_URI === $cen) {
                $type->setPatternUri(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_ADDRESS === $cen) {
                $type->setPatternAddress(FHIRAddress::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_AGE === $cen) {
                $type->setPatternAge(FHIRAge::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_ANNOTATION === $cen) {
                $type->setPatternAnnotation(FHIRAnnotation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_ATTACHMENT === $cen) {
                $type->setPatternAttachment(FHIRAttachment::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_CODEABLE_CONCEPT === $cen) {
                $type->setPatternCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_CODING === $cen) {
                $type->setPatternCoding(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_CONTACT_POINT === $cen) {
                $type->setPatternContactPoint(FHIRContactPoint::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_COUNT === $cen) {
                $type->setPatternCount(FHIRCount::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_DISTANCE === $cen) {
                $type->setPatternDistance(FHIRDistance::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_DURATION === $cen) {
                $type->setPatternDuration(FHIRDuration::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_HUMAN_NAME === $cen) {
                $type->setPatternHumanName(FHIRHumanName::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_IDENTIFIER === $cen) {
                $type->setPatternIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_MONEY === $cen) {
                $type->setPatternMoney(FHIRMoney::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_PERIOD === $cen) {
                $type->setPatternPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_QUANTITY === $cen) {
                $type->setPatternQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_RANGE === $cen) {
                $type->setPatternRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_RATIO === $cen) {
                $type->setPatternRatio(FHIRRatio::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_REFERENCE === $cen) {
                $type->setPatternReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_SAMPLED_DATA === $cen) {
                $type->setPatternSampledData(FHIRSampledData::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_SIGNATURE === $cen) {
                $type->setPatternSignature(FHIRSignature::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_TIMING === $cen) {
                $type->setPatternTiming(FHIRTiming::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATTERN_META === $cen) {
                $type->setPatternMeta(FHIRMeta::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE === $cen) {
                $type->addExample(FHIRElementDefinitionExample::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MIN_VALUE_DATE === $cen) {
                $type->setMinValueDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MIN_VALUE_DATE_TIME === $cen) {
                $type->setMinValueDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MIN_VALUE_INSTANT === $cen) {
                $type->setMinValueInstant(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MIN_VALUE_TIME === $cen) {
                $type->setMinValueTime(FHIRTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MIN_VALUE_DECIMAL === $cen) {
                $type->setMinValueDecimal(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MIN_VALUE_INTEGER === $cen) {
                $type->setMinValueInteger(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MIN_VALUE_POSITIVE_INT === $cen) {
                $type->setMinValuePositiveInt(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MIN_VALUE_UNSIGNED_INT === $cen) {
                $type->setMinValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MIN_VALUE_QUANTITY === $cen) {
                $type->setMinValueQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX_VALUE_DATE === $cen) {
                $type->setMaxValueDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX_VALUE_DATE_TIME === $cen) {
                $type->setMaxValueDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX_VALUE_INSTANT === $cen) {
                $type->setMaxValueInstant(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX_VALUE_TIME === $cen) {
                $type->setMaxValueTime(FHIRTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX_VALUE_DECIMAL === $cen) {
                $type->setMaxValueDecimal(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX_VALUE_INTEGER === $cen) {
                $type->setMaxValueInteger(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX_VALUE_POSITIVE_INT === $cen) {
                $type->setMaxValuePositiveInt(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX_VALUE_UNSIGNED_INT === $cen) {
                $type->setMaxValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX_VALUE_QUANTITY === $cen) {
                $type->setMaxValueQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX_LENGTH === $cen) {
                $type->setMaxLength(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONDITION === $cen) {
                $type->addCondition(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONSTRAINT === $cen) {
                $type->addConstraint(FHIRElementDefinitionConstraint::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MUST_SUPPORT === $cen) {
                $type->setMustSupport(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IS_MODIFIER === $cen) {
                $type->setIsModifier(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IS_SUMMARY === $cen) {
                $type->setIsSummary(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BINDING === $cen) {
                $type->setBinding(FHIRElementDefinitionBinding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAPPING === $cen) {
                $type->addMapping(FHIRElementDefinitionMapping::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PATH])) {
            if (isset($type->path)) {
                $type->path->setValue((string)$attributes[self::FIELD_PATH]);
            } else {
                $type->setPath((string)$attributes[self::FIELD_PATH]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PATH, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SLICE_NAME])) {
            if (isset($type->sliceName)) {
                $type->sliceName->setValue((string)$attributes[self::FIELD_SLICE_NAME]);
            } else {
                $type->setSliceName((string)$attributes[self::FIELD_SLICE_NAME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SLICE_NAME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LABEL])) {
            if (isset($type->label)) {
                $type->label->setValue((string)$attributes[self::FIELD_LABEL]);
            } else {
                $type->setLabel((string)$attributes[self::FIELD_LABEL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LABEL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SHORT])) {
            if (isset($type->short)) {
                $type->short->setValue((string)$attributes[self::FIELD_SHORT]);
            } else {
                $type->setShort((string)$attributes[self::FIELD_SHORT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SHORT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEFINITION])) {
            if (isset($type->definition)) {
                $type->definition->setValue((string)$attributes[self::FIELD_DEFINITION]);
            } else {
                $type->setDefinition((string)$attributes[self::FIELD_DEFINITION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEFINITION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_COMMENT])) {
            if (isset($type->comment)) {
                $type->comment->setValue((string)$attributes[self::FIELD_COMMENT]);
            } else {
                $type->setComment((string)$attributes[self::FIELD_COMMENT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_COMMENT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_REQUIREMENTS])) {
            if (isset($type->requirements)) {
                $type->requirements->setValue((string)$attributes[self::FIELD_REQUIREMENTS]);
            } else {
                $type->setRequirements((string)$attributes[self::FIELD_REQUIREMENTS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_REQUIREMENTS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MIN])) {
            if (isset($type->min)) {
                $type->min->setValue((string)$attributes[self::FIELD_MIN]);
            } else {
                $type->setMin((string)$attributes[self::FIELD_MIN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MIN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MAX])) {
            if (isset($type->max)) {
                $type->max->setValue((string)$attributes[self::FIELD_MAX]);
            } else {
                $type->setMax((string)$attributes[self::FIELD_MAX]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MAX, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CONTENT_REFERENCE])) {
            if (isset($type->contentReference)) {
                $type->contentReference->setValue((string)$attributes[self::FIELD_CONTENT_REFERENCE]);
            } else {
                $type->setContentReference((string)$attributes[self::FIELD_CONTENT_REFERENCE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CONTENT_REFERENCE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])) {
            if (isset($type->defaultValueBase64Binary)) {
                $type->defaultValueBase64Binary->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_BASE_64BINARY]);
            } else {
                $type->setDefaultValueBase64Binary((string)$attributes[self::FIELD_DEFAULT_VALUE_BASE_64BINARY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEFAULT_VALUE_BASE_64BINARY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_BOOLEAN])) {
            if (isset($type->defaultValueBoolean)) {
                $type->defaultValueBoolean->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_BOOLEAN]);
            } else {
                $type->setDefaultValueBoolean((string)$attributes[self::FIELD_DEFAULT_VALUE_BOOLEAN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEFAULT_VALUE_BOOLEAN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_CODE])) {
            if (isset($type->defaultValueCode)) {
                $type->defaultValueCode->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_CODE]);
            } else {
                $type->setDefaultValueCode((string)$attributes[self::FIELD_DEFAULT_VALUE_CODE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEFAULT_VALUE_CODE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_DATE])) {
            if (isset($type->defaultValueDate)) {
                $type->defaultValueDate->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_DATE]);
            } else {
                $type->setDefaultValueDate((string)$attributes[self::FIELD_DEFAULT_VALUE_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEFAULT_VALUE_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_DATE_TIME])) {
            if (isset($type->defaultValueDateTime)) {
                $type->defaultValueDateTime->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_DATE_TIME]);
            } else {
                $type->setDefaultValueDateTime((string)$attributes[self::FIELD_DEFAULT_VALUE_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEFAULT_VALUE_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_DECIMAL])) {
            if (isset($type->defaultValueDecimal)) {
                $type->defaultValueDecimal->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_DECIMAL]);
            } else {
                $type->setDefaultValueDecimal((string)$attributes[self::FIELD_DEFAULT_VALUE_DECIMAL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEFAULT_VALUE_DECIMAL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_ID])) {
            if (isset($type->defaultValueId)) {
                $type->defaultValueId->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_ID]);
            } else {
                $type->setDefaultValueId((string)$attributes[self::FIELD_DEFAULT_VALUE_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEFAULT_VALUE_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_INSTANT])) {
            if (isset($type->defaultValueInstant)) {
                $type->defaultValueInstant->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_INSTANT]);
            } else {
                $type->setDefaultValueInstant((string)$attributes[self::FIELD_DEFAULT_VALUE_INSTANT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEFAULT_VALUE_INSTANT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_INTEGER])) {
            if (isset($type->defaultValueInteger)) {
                $type->defaultValueInteger->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_INTEGER]);
            } else {
                $type->setDefaultValueInteger((string)$attributes[self::FIELD_DEFAULT_VALUE_INTEGER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEFAULT_VALUE_INTEGER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_MARKDOWN])) {
            if (isset($type->defaultValueMarkdown)) {
                $type->defaultValueMarkdown->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_MARKDOWN]);
            } else {
                $type->setDefaultValueMarkdown((string)$attributes[self::FIELD_DEFAULT_VALUE_MARKDOWN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEFAULT_VALUE_MARKDOWN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_OID])) {
            if (isset($type->defaultValueOid)) {
                $type->defaultValueOid->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_OID]);
            } else {
                $type->setDefaultValueOid((string)$attributes[self::FIELD_DEFAULT_VALUE_OID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEFAULT_VALUE_OID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])) {
            if (isset($type->defaultValuePositiveInt)) {
                $type->defaultValuePositiveInt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_POSITIVE_INT]);
            } else {
                $type->setDefaultValuePositiveInt((string)$attributes[self::FIELD_DEFAULT_VALUE_POSITIVE_INT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEFAULT_VALUE_POSITIVE_INT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_STRING])) {
            if (isset($type->defaultValueString)) {
                $type->defaultValueString->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_STRING]);
            } else {
                $type->setDefaultValueString((string)$attributes[self::FIELD_DEFAULT_VALUE_STRING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEFAULT_VALUE_STRING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_TIME])) {
            if (isset($type->defaultValueTime)) {
                $type->defaultValueTime->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_TIME]);
            } else {
                $type->setDefaultValueTime((string)$attributes[self::FIELD_DEFAULT_VALUE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEFAULT_VALUE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])) {
            if (isset($type->defaultValueUnsignedInt)) {
                $type->defaultValueUnsignedInt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT]);
            } else {
                $type->setDefaultValueUnsignedInt((string)$attributes[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_URI])) {
            if (isset($type->defaultValueUri)) {
                $type->defaultValueUri->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_URI]);
            } else {
                $type->setDefaultValueUri((string)$attributes[self::FIELD_DEFAULT_VALUE_URI]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEFAULT_VALUE_URI, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MEANING_WHEN_MISSING])) {
            if (isset($type->meaningWhenMissing)) {
                $type->meaningWhenMissing->setValue((string)$attributes[self::FIELD_MEANING_WHEN_MISSING]);
            } else {
                $type->setMeaningWhenMissing((string)$attributes[self::FIELD_MEANING_WHEN_MISSING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MEANING_WHEN_MISSING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ORDER_MEANING])) {
            if (isset($type->orderMeaning)) {
                $type->orderMeaning->setValue((string)$attributes[self::FIELD_ORDER_MEANING]);
            } else {
                $type->setOrderMeaning((string)$attributes[self::FIELD_ORDER_MEANING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ORDER_MEANING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FIXED_BASE_64BINARY])) {
            if (isset($type->fixedBase64Binary)) {
                $type->fixedBase64Binary->setValue((string)$attributes[self::FIELD_FIXED_BASE_64BINARY]);
            } else {
                $type->setFixedBase64Binary((string)$attributes[self::FIELD_FIXED_BASE_64BINARY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FIXED_BASE_64BINARY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FIXED_BOOLEAN])) {
            if (isset($type->fixedBoolean)) {
                $type->fixedBoolean->setValue((string)$attributes[self::FIELD_FIXED_BOOLEAN]);
            } else {
                $type->setFixedBoolean((string)$attributes[self::FIELD_FIXED_BOOLEAN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FIXED_BOOLEAN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FIXED_CODE])) {
            if (isset($type->fixedCode)) {
                $type->fixedCode->setValue((string)$attributes[self::FIELD_FIXED_CODE]);
            } else {
                $type->setFixedCode((string)$attributes[self::FIELD_FIXED_CODE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FIXED_CODE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FIXED_DATE])) {
            if (isset($type->fixedDate)) {
                $type->fixedDate->setValue((string)$attributes[self::FIELD_FIXED_DATE]);
            } else {
                $type->setFixedDate((string)$attributes[self::FIELD_FIXED_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FIXED_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FIXED_DATE_TIME])) {
            if (isset($type->fixedDateTime)) {
                $type->fixedDateTime->setValue((string)$attributes[self::FIELD_FIXED_DATE_TIME]);
            } else {
                $type->setFixedDateTime((string)$attributes[self::FIELD_FIXED_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FIXED_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FIXED_DECIMAL])) {
            if (isset($type->fixedDecimal)) {
                $type->fixedDecimal->setValue((string)$attributes[self::FIELD_FIXED_DECIMAL]);
            } else {
                $type->setFixedDecimal((string)$attributes[self::FIELD_FIXED_DECIMAL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FIXED_DECIMAL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FIXED_ID])) {
            if (isset($type->fixedId)) {
                $type->fixedId->setValue((string)$attributes[self::FIELD_FIXED_ID]);
            } else {
                $type->setFixedId((string)$attributes[self::FIELD_FIXED_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FIXED_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FIXED_INSTANT])) {
            if (isset($type->fixedInstant)) {
                $type->fixedInstant->setValue((string)$attributes[self::FIELD_FIXED_INSTANT]);
            } else {
                $type->setFixedInstant((string)$attributes[self::FIELD_FIXED_INSTANT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FIXED_INSTANT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FIXED_INTEGER])) {
            if (isset($type->fixedInteger)) {
                $type->fixedInteger->setValue((string)$attributes[self::FIELD_FIXED_INTEGER]);
            } else {
                $type->setFixedInteger((string)$attributes[self::FIELD_FIXED_INTEGER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FIXED_INTEGER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FIXED_MARKDOWN])) {
            if (isset($type->fixedMarkdown)) {
                $type->fixedMarkdown->setValue((string)$attributes[self::FIELD_FIXED_MARKDOWN]);
            } else {
                $type->setFixedMarkdown((string)$attributes[self::FIELD_FIXED_MARKDOWN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FIXED_MARKDOWN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FIXED_OID])) {
            if (isset($type->fixedOid)) {
                $type->fixedOid->setValue((string)$attributes[self::FIELD_FIXED_OID]);
            } else {
                $type->setFixedOid((string)$attributes[self::FIELD_FIXED_OID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FIXED_OID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FIXED_POSITIVE_INT])) {
            if (isset($type->fixedPositiveInt)) {
                $type->fixedPositiveInt->setValue((string)$attributes[self::FIELD_FIXED_POSITIVE_INT]);
            } else {
                $type->setFixedPositiveInt((string)$attributes[self::FIELD_FIXED_POSITIVE_INT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FIXED_POSITIVE_INT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FIXED_STRING])) {
            if (isset($type->fixedString)) {
                $type->fixedString->setValue((string)$attributes[self::FIELD_FIXED_STRING]);
            } else {
                $type->setFixedString((string)$attributes[self::FIELD_FIXED_STRING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FIXED_STRING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FIXED_TIME])) {
            if (isset($type->fixedTime)) {
                $type->fixedTime->setValue((string)$attributes[self::FIELD_FIXED_TIME]);
            } else {
                $type->setFixedTime((string)$attributes[self::FIELD_FIXED_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FIXED_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FIXED_UNSIGNED_INT])) {
            if (isset($type->fixedUnsignedInt)) {
                $type->fixedUnsignedInt->setValue((string)$attributes[self::FIELD_FIXED_UNSIGNED_INT]);
            } else {
                $type->setFixedUnsignedInt((string)$attributes[self::FIELD_FIXED_UNSIGNED_INT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FIXED_UNSIGNED_INT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FIXED_URI])) {
            if (isset($type->fixedUri)) {
                $type->fixedUri->setValue((string)$attributes[self::FIELD_FIXED_URI]);
            } else {
                $type->setFixedUri((string)$attributes[self::FIELD_FIXED_URI]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FIXED_URI, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PATTERN_BASE_64BINARY])) {
            if (isset($type->patternBase64Binary)) {
                $type->patternBase64Binary->setValue((string)$attributes[self::FIELD_PATTERN_BASE_64BINARY]);
            } else {
                $type->setPatternBase64Binary((string)$attributes[self::FIELD_PATTERN_BASE_64BINARY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PATTERN_BASE_64BINARY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PATTERN_BOOLEAN])) {
            if (isset($type->patternBoolean)) {
                $type->patternBoolean->setValue((string)$attributes[self::FIELD_PATTERN_BOOLEAN]);
            } else {
                $type->setPatternBoolean((string)$attributes[self::FIELD_PATTERN_BOOLEAN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PATTERN_BOOLEAN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PATTERN_CODE])) {
            if (isset($type->patternCode)) {
                $type->patternCode->setValue((string)$attributes[self::FIELD_PATTERN_CODE]);
            } else {
                $type->setPatternCode((string)$attributes[self::FIELD_PATTERN_CODE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PATTERN_CODE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PATTERN_DATE])) {
            if (isset($type->patternDate)) {
                $type->patternDate->setValue((string)$attributes[self::FIELD_PATTERN_DATE]);
            } else {
                $type->setPatternDate((string)$attributes[self::FIELD_PATTERN_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PATTERN_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PATTERN_DATE_TIME])) {
            if (isset($type->patternDateTime)) {
                $type->patternDateTime->setValue((string)$attributes[self::FIELD_PATTERN_DATE_TIME]);
            } else {
                $type->setPatternDateTime((string)$attributes[self::FIELD_PATTERN_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PATTERN_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PATTERN_DECIMAL])) {
            if (isset($type->patternDecimal)) {
                $type->patternDecimal->setValue((string)$attributes[self::FIELD_PATTERN_DECIMAL]);
            } else {
                $type->setPatternDecimal((string)$attributes[self::FIELD_PATTERN_DECIMAL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PATTERN_DECIMAL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PATTERN_ID])) {
            if (isset($type->patternId)) {
                $type->patternId->setValue((string)$attributes[self::FIELD_PATTERN_ID]);
            } else {
                $type->setPatternId((string)$attributes[self::FIELD_PATTERN_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PATTERN_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PATTERN_INSTANT])) {
            if (isset($type->patternInstant)) {
                $type->patternInstant->setValue((string)$attributes[self::FIELD_PATTERN_INSTANT]);
            } else {
                $type->setPatternInstant((string)$attributes[self::FIELD_PATTERN_INSTANT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PATTERN_INSTANT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PATTERN_INTEGER])) {
            if (isset($type->patternInteger)) {
                $type->patternInteger->setValue((string)$attributes[self::FIELD_PATTERN_INTEGER]);
            } else {
                $type->setPatternInteger((string)$attributes[self::FIELD_PATTERN_INTEGER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PATTERN_INTEGER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PATTERN_MARKDOWN])) {
            if (isset($type->patternMarkdown)) {
                $type->patternMarkdown->setValue((string)$attributes[self::FIELD_PATTERN_MARKDOWN]);
            } else {
                $type->setPatternMarkdown((string)$attributes[self::FIELD_PATTERN_MARKDOWN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PATTERN_MARKDOWN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PATTERN_OID])) {
            if (isset($type->patternOid)) {
                $type->patternOid->setValue((string)$attributes[self::FIELD_PATTERN_OID]);
            } else {
                $type->setPatternOid((string)$attributes[self::FIELD_PATTERN_OID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PATTERN_OID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PATTERN_POSITIVE_INT])) {
            if (isset($type->patternPositiveInt)) {
                $type->patternPositiveInt->setValue((string)$attributes[self::FIELD_PATTERN_POSITIVE_INT]);
            } else {
                $type->setPatternPositiveInt((string)$attributes[self::FIELD_PATTERN_POSITIVE_INT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PATTERN_POSITIVE_INT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PATTERN_STRING])) {
            if (isset($type->patternString)) {
                $type->patternString->setValue((string)$attributes[self::FIELD_PATTERN_STRING]);
            } else {
                $type->setPatternString((string)$attributes[self::FIELD_PATTERN_STRING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PATTERN_STRING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PATTERN_TIME])) {
            if (isset($type->patternTime)) {
                $type->patternTime->setValue((string)$attributes[self::FIELD_PATTERN_TIME]);
            } else {
                $type->setPatternTime((string)$attributes[self::FIELD_PATTERN_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PATTERN_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PATTERN_UNSIGNED_INT])) {
            if (isset($type->patternUnsignedInt)) {
                $type->patternUnsignedInt->setValue((string)$attributes[self::FIELD_PATTERN_UNSIGNED_INT]);
            } else {
                $type->setPatternUnsignedInt((string)$attributes[self::FIELD_PATTERN_UNSIGNED_INT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PATTERN_UNSIGNED_INT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PATTERN_URI])) {
            if (isset($type->patternUri)) {
                $type->patternUri->setValue((string)$attributes[self::FIELD_PATTERN_URI]);
            } else {
                $type->setPatternUri((string)$attributes[self::FIELD_PATTERN_URI]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PATTERN_URI, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_DATE])) {
            if (isset($type->minValueDate)) {
                $type->minValueDate->setValue((string)$attributes[self::FIELD_MIN_VALUE_DATE]);
            } else {
                $type->setMinValueDate((string)$attributes[self::FIELD_MIN_VALUE_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MIN_VALUE_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_DATE_TIME])) {
            if (isset($type->minValueDateTime)) {
                $type->minValueDateTime->setValue((string)$attributes[self::FIELD_MIN_VALUE_DATE_TIME]);
            } else {
                $type->setMinValueDateTime((string)$attributes[self::FIELD_MIN_VALUE_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MIN_VALUE_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_INSTANT])) {
            if (isset($type->minValueInstant)) {
                $type->minValueInstant->setValue((string)$attributes[self::FIELD_MIN_VALUE_INSTANT]);
            } else {
                $type->setMinValueInstant((string)$attributes[self::FIELD_MIN_VALUE_INSTANT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MIN_VALUE_INSTANT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_TIME])) {
            if (isset($type->minValueTime)) {
                $type->minValueTime->setValue((string)$attributes[self::FIELD_MIN_VALUE_TIME]);
            } else {
                $type->setMinValueTime((string)$attributes[self::FIELD_MIN_VALUE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MIN_VALUE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_DECIMAL])) {
            if (isset($type->minValueDecimal)) {
                $type->minValueDecimal->setValue((string)$attributes[self::FIELD_MIN_VALUE_DECIMAL]);
            } else {
                $type->setMinValueDecimal((string)$attributes[self::FIELD_MIN_VALUE_DECIMAL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MIN_VALUE_DECIMAL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_INTEGER])) {
            if (isset($type->minValueInteger)) {
                $type->minValueInteger->setValue((string)$attributes[self::FIELD_MIN_VALUE_INTEGER]);
            } else {
                $type->setMinValueInteger((string)$attributes[self::FIELD_MIN_VALUE_INTEGER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MIN_VALUE_INTEGER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_POSITIVE_INT])) {
            if (isset($type->minValuePositiveInt)) {
                $type->minValuePositiveInt->setValue((string)$attributes[self::FIELD_MIN_VALUE_POSITIVE_INT]);
            } else {
                $type->setMinValuePositiveInt((string)$attributes[self::FIELD_MIN_VALUE_POSITIVE_INT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MIN_VALUE_POSITIVE_INT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_UNSIGNED_INT])) {
            if (isset($type->minValueUnsignedInt)) {
                $type->minValueUnsignedInt->setValue((string)$attributes[self::FIELD_MIN_VALUE_UNSIGNED_INT]);
            } else {
                $type->setMinValueUnsignedInt((string)$attributes[self::FIELD_MIN_VALUE_UNSIGNED_INT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MIN_VALUE_UNSIGNED_INT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_DATE])) {
            if (isset($type->maxValueDate)) {
                $type->maxValueDate->setValue((string)$attributes[self::FIELD_MAX_VALUE_DATE]);
            } else {
                $type->setMaxValueDate((string)$attributes[self::FIELD_MAX_VALUE_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MAX_VALUE_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_DATE_TIME])) {
            if (isset($type->maxValueDateTime)) {
                $type->maxValueDateTime->setValue((string)$attributes[self::FIELD_MAX_VALUE_DATE_TIME]);
            } else {
                $type->setMaxValueDateTime((string)$attributes[self::FIELD_MAX_VALUE_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MAX_VALUE_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_INSTANT])) {
            if (isset($type->maxValueInstant)) {
                $type->maxValueInstant->setValue((string)$attributes[self::FIELD_MAX_VALUE_INSTANT]);
            } else {
                $type->setMaxValueInstant((string)$attributes[self::FIELD_MAX_VALUE_INSTANT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MAX_VALUE_INSTANT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_TIME])) {
            if (isset($type->maxValueTime)) {
                $type->maxValueTime->setValue((string)$attributes[self::FIELD_MAX_VALUE_TIME]);
            } else {
                $type->setMaxValueTime((string)$attributes[self::FIELD_MAX_VALUE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MAX_VALUE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_DECIMAL])) {
            if (isset($type->maxValueDecimal)) {
                $type->maxValueDecimal->setValue((string)$attributes[self::FIELD_MAX_VALUE_DECIMAL]);
            } else {
                $type->setMaxValueDecimal((string)$attributes[self::FIELD_MAX_VALUE_DECIMAL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MAX_VALUE_DECIMAL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_INTEGER])) {
            if (isset($type->maxValueInteger)) {
                $type->maxValueInteger->setValue((string)$attributes[self::FIELD_MAX_VALUE_INTEGER]);
            } else {
                $type->setMaxValueInteger((string)$attributes[self::FIELD_MAX_VALUE_INTEGER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MAX_VALUE_INTEGER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_POSITIVE_INT])) {
            if (isset($type->maxValuePositiveInt)) {
                $type->maxValuePositiveInt->setValue((string)$attributes[self::FIELD_MAX_VALUE_POSITIVE_INT]);
            } else {
                $type->setMaxValuePositiveInt((string)$attributes[self::FIELD_MAX_VALUE_POSITIVE_INT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MAX_VALUE_POSITIVE_INT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_UNSIGNED_INT])) {
            if (isset($type->maxValueUnsignedInt)) {
                $type->maxValueUnsignedInt->setValue((string)$attributes[self::FIELD_MAX_VALUE_UNSIGNED_INT]);
            } else {
                $type->setMaxValueUnsignedInt((string)$attributes[self::FIELD_MAX_VALUE_UNSIGNED_INT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MAX_VALUE_UNSIGNED_INT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MAX_LENGTH])) {
            if (isset($type->maxLength)) {
                $type->maxLength->setValue((string)$attributes[self::FIELD_MAX_LENGTH]);
            } else {
                $type->setMaxLength((string)$attributes[self::FIELD_MAX_LENGTH]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MAX_LENGTH, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MUST_SUPPORT])) {
            if (isset($type->mustSupport)) {
                $type->mustSupport->setValue((string)$attributes[self::FIELD_MUST_SUPPORT]);
            } else {
                $type->setMustSupport((string)$attributes[self::FIELD_MUST_SUPPORT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MUST_SUPPORT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_IS_MODIFIER])) {
            if (isset($type->isModifier)) {
                $type->isModifier->setValue((string)$attributes[self::FIELD_IS_MODIFIER]);
            } else {
                $type->setIsModifier((string)$attributes[self::FIELD_IS_MODIFIER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_IS_MODIFIER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_IS_SUMMARY])) {
            if (isset($type->isSummary)) {
                $type->isSummary->setValue((string)$attributes[self::FIELD_IS_SUMMARY]);
            } else {
                $type->setIsSummary((string)$attributes[self::FIELD_IS_SUMMARY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_IS_SUMMARY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->path) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATH]) {
            $xw->writeAttribute(self::FIELD_PATH, $this->path->_getValueAsString());
        }
        if (isset($this->sliceName) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SLICE_NAME]) {
            $xw->writeAttribute(self::FIELD_SLICE_NAME, $this->sliceName->_getValueAsString());
        }
        if (isset($this->label) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LABEL]) {
            $xw->writeAttribute(self::FIELD_LABEL, $this->label->_getValueAsString());
        }
        if (isset($this->short) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SHORT]) {
            $xw->writeAttribute(self::FIELD_SHORT, $this->short->_getValueAsString());
        }
        if (isset($this->definition) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFINITION]) {
            $xw->writeAttribute(self::FIELD_DEFINITION, $this->definition->_getValueAsString());
        }
        if (isset($this->comment) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COMMENT]) {
            $xw->writeAttribute(self::FIELD_COMMENT, $this->comment->_getValueAsString());
        }
        if (isset($this->requirements) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_REQUIREMENTS]) {
            $xw->writeAttribute(self::FIELD_REQUIREMENTS, $this->requirements->_getValueAsString());
        }
        if (isset($this->min) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MIN]) {
            $xw->writeAttribute(self::FIELD_MIN, $this->min->_getValueAsString());
        }
        if (isset($this->max) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX]) {
            $xw->writeAttribute(self::FIELD_MAX, $this->max->_getValueAsString());
        }
        if (isset($this->contentReference) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CONTENT_REFERENCE]) {
            $xw->writeAttribute(self::FIELD_CONTENT_REFERENCE, $this->contentReference->_getValueAsString());
        }
        if (isset($this->defaultValueBase64Binary) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_BASE_64BINARY, $this->defaultValueBase64Binary->_getValueAsString());
        }
        if (isset($this->defaultValueBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_BOOLEAN, $this->defaultValueBoolean->_getValueAsString());
        }
        if (isset($this->defaultValueCode) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_CODE]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_CODE, $this->defaultValueCode->_getValueAsString());
        }
        if (isset($this->defaultValueDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_DATE]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_DATE, $this->defaultValueDate->_getValueAsString());
        }
        if (isset($this->defaultValueDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_DATE_TIME, $this->defaultValueDateTime->_getValueAsString());
        }
        if (isset($this->defaultValueDecimal) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_DECIMAL]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_DECIMAL, $this->defaultValueDecimal->_getValueAsString());
        }
        if (isset($this->defaultValueId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_ID]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_ID, $this->defaultValueId->_getValueAsString());
        }
        if (isset($this->defaultValueInstant) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_INSTANT]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_INSTANT, $this->defaultValueInstant->_getValueAsString());
        }
        if (isset($this->defaultValueInteger) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_INTEGER]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_INTEGER, $this->defaultValueInteger->_getValueAsString());
        }
        if (isset($this->defaultValueMarkdown) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_MARKDOWN, $this->defaultValueMarkdown->_getValueAsString());
        }
        if (isset($this->defaultValueOid) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_OID]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_OID, $this->defaultValueOid->_getValueAsString());
        }
        if (isset($this->defaultValuePositiveInt) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_POSITIVE_INT, $this->defaultValuePositiveInt->_getValueAsString());
        }
        if (isset($this->defaultValueString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_STRING]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_STRING, $this->defaultValueString->_getValueAsString());
        }
        if (isset($this->defaultValueTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_TIME]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_TIME, $this->defaultValueTime->_getValueAsString());
        }
        if (isset($this->defaultValueUnsignedInt) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT, $this->defaultValueUnsignedInt->_getValueAsString());
        }
        if (isset($this->defaultValueUri) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_URI]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_URI, $this->defaultValueUri->_getValueAsString());
        }
        if (isset($this->meaningWhenMissing) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MEANING_WHEN_MISSING]) {
            $xw->writeAttribute(self::FIELD_MEANING_WHEN_MISSING, $this->meaningWhenMissing->_getValueAsString());
        }
        if (isset($this->orderMeaning) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ORDER_MEANING]) {
            $xw->writeAttribute(self::FIELD_ORDER_MEANING, $this->orderMeaning->_getValueAsString());
        }
        if (isset($this->fixedBase64Binary) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FIXED_BASE_64BINARY]) {
            $xw->writeAttribute(self::FIELD_FIXED_BASE_64BINARY, $this->fixedBase64Binary->_getValueAsString());
        }
        if (isset($this->fixedBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FIXED_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_FIXED_BOOLEAN, $this->fixedBoolean->_getValueAsString());
        }
        if (isset($this->fixedCode) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FIXED_CODE]) {
            $xw->writeAttribute(self::FIELD_FIXED_CODE, $this->fixedCode->_getValueAsString());
        }
        if (isset($this->fixedDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FIXED_DATE]) {
            $xw->writeAttribute(self::FIELD_FIXED_DATE, $this->fixedDate->_getValueAsString());
        }
        if (isset($this->fixedDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FIXED_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_FIXED_DATE_TIME, $this->fixedDateTime->_getValueAsString());
        }
        if (isset($this->fixedDecimal) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FIXED_DECIMAL]) {
            $xw->writeAttribute(self::FIELD_FIXED_DECIMAL, $this->fixedDecimal->_getValueAsString());
        }
        if (isset($this->fixedId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FIXED_ID]) {
            $xw->writeAttribute(self::FIELD_FIXED_ID, $this->fixedId->_getValueAsString());
        }
        if (isset($this->fixedInstant) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FIXED_INSTANT]) {
            $xw->writeAttribute(self::FIELD_FIXED_INSTANT, $this->fixedInstant->_getValueAsString());
        }
        if (isset($this->fixedInteger) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FIXED_INTEGER]) {
            $xw->writeAttribute(self::FIELD_FIXED_INTEGER, $this->fixedInteger->_getValueAsString());
        }
        if (isset($this->fixedMarkdown) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FIXED_MARKDOWN]) {
            $xw->writeAttribute(self::FIELD_FIXED_MARKDOWN, $this->fixedMarkdown->_getValueAsString());
        }
        if (isset($this->fixedOid) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FIXED_OID]) {
            $xw->writeAttribute(self::FIELD_FIXED_OID, $this->fixedOid->_getValueAsString());
        }
        if (isset($this->fixedPositiveInt) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FIXED_POSITIVE_INT]) {
            $xw->writeAttribute(self::FIELD_FIXED_POSITIVE_INT, $this->fixedPositiveInt->_getValueAsString());
        }
        if (isset($this->fixedString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FIXED_STRING]) {
            $xw->writeAttribute(self::FIELD_FIXED_STRING, $this->fixedString->_getValueAsString());
        }
        if (isset($this->fixedTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FIXED_TIME]) {
            $xw->writeAttribute(self::FIELD_FIXED_TIME, $this->fixedTime->_getValueAsString());
        }
        if (isset($this->fixedUnsignedInt) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FIXED_UNSIGNED_INT]) {
            $xw->writeAttribute(self::FIELD_FIXED_UNSIGNED_INT, $this->fixedUnsignedInt->_getValueAsString());
        }
        if (isset($this->fixedUri) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FIXED_URI]) {
            $xw->writeAttribute(self::FIELD_FIXED_URI, $this->fixedUri->_getValueAsString());
        }
        if (isset($this->patternBase64Binary) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATTERN_BASE_64BINARY]) {
            $xw->writeAttribute(self::FIELD_PATTERN_BASE_64BINARY, $this->patternBase64Binary->_getValueAsString());
        }
        if (isset($this->patternBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATTERN_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_PATTERN_BOOLEAN, $this->patternBoolean->_getValueAsString());
        }
        if (isset($this->patternCode) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATTERN_CODE]) {
            $xw->writeAttribute(self::FIELD_PATTERN_CODE, $this->patternCode->_getValueAsString());
        }
        if (isset($this->patternDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATTERN_DATE]) {
            $xw->writeAttribute(self::FIELD_PATTERN_DATE, $this->patternDate->_getValueAsString());
        }
        if (isset($this->patternDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATTERN_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_PATTERN_DATE_TIME, $this->patternDateTime->_getValueAsString());
        }
        if (isset($this->patternDecimal) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATTERN_DECIMAL]) {
            $xw->writeAttribute(self::FIELD_PATTERN_DECIMAL, $this->patternDecimal->_getValueAsString());
        }
        if (isset($this->patternId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATTERN_ID]) {
            $xw->writeAttribute(self::FIELD_PATTERN_ID, $this->patternId->_getValueAsString());
        }
        if (isset($this->patternInstant) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATTERN_INSTANT]) {
            $xw->writeAttribute(self::FIELD_PATTERN_INSTANT, $this->patternInstant->_getValueAsString());
        }
        if (isset($this->patternInteger) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATTERN_INTEGER]) {
            $xw->writeAttribute(self::FIELD_PATTERN_INTEGER, $this->patternInteger->_getValueAsString());
        }
        if (isset($this->patternMarkdown) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATTERN_MARKDOWN]) {
            $xw->writeAttribute(self::FIELD_PATTERN_MARKDOWN, $this->patternMarkdown->_getValueAsString());
        }
        if (isset($this->patternOid) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATTERN_OID]) {
            $xw->writeAttribute(self::FIELD_PATTERN_OID, $this->patternOid->_getValueAsString());
        }
        if (isset($this->patternPositiveInt) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATTERN_POSITIVE_INT]) {
            $xw->writeAttribute(self::FIELD_PATTERN_POSITIVE_INT, $this->patternPositiveInt->_getValueAsString());
        }
        if (isset($this->patternString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATTERN_STRING]) {
            $xw->writeAttribute(self::FIELD_PATTERN_STRING, $this->patternString->_getValueAsString());
        }
        if (isset($this->patternTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATTERN_TIME]) {
            $xw->writeAttribute(self::FIELD_PATTERN_TIME, $this->patternTime->_getValueAsString());
        }
        if (isset($this->patternUnsignedInt) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATTERN_UNSIGNED_INT]) {
            $xw->writeAttribute(self::FIELD_PATTERN_UNSIGNED_INT, $this->patternUnsignedInt->_getValueAsString());
        }
        if (isset($this->patternUri) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATTERN_URI]) {
            $xw->writeAttribute(self::FIELD_PATTERN_URI, $this->patternUri->_getValueAsString());
        }
        if (isset($this->minValueDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MIN_VALUE_DATE]) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_DATE, $this->minValueDate->_getValueAsString());
        }
        if (isset($this->minValueDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MIN_VALUE_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_DATE_TIME, $this->minValueDateTime->_getValueAsString());
        }
        if (isset($this->minValueInstant) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MIN_VALUE_INSTANT]) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_INSTANT, $this->minValueInstant->_getValueAsString());
        }
        if (isset($this->minValueTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MIN_VALUE_TIME]) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_TIME, $this->minValueTime->_getValueAsString());
        }
        if (isset($this->minValueDecimal) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MIN_VALUE_DECIMAL]) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_DECIMAL, $this->minValueDecimal->_getValueAsString());
        }
        if (isset($this->minValueInteger) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MIN_VALUE_INTEGER]) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_INTEGER, $this->minValueInteger->_getValueAsString());
        }
        if (isset($this->minValuePositiveInt) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MIN_VALUE_POSITIVE_INT]) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_POSITIVE_INT, $this->minValuePositiveInt->_getValueAsString());
        }
        if (isset($this->minValueUnsignedInt) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MIN_VALUE_UNSIGNED_INT]) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_UNSIGNED_INT, $this->minValueUnsignedInt->_getValueAsString());
        }
        if (isset($this->maxValueDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX_VALUE_DATE]) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_DATE, $this->maxValueDate->_getValueAsString());
        }
        if (isset($this->maxValueDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX_VALUE_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_DATE_TIME, $this->maxValueDateTime->_getValueAsString());
        }
        if (isset($this->maxValueInstant) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX_VALUE_INSTANT]) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_INSTANT, $this->maxValueInstant->_getValueAsString());
        }
        if (isset($this->maxValueTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX_VALUE_TIME]) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_TIME, $this->maxValueTime->_getValueAsString());
        }
        if (isset($this->maxValueDecimal) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX_VALUE_DECIMAL]) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_DECIMAL, $this->maxValueDecimal->_getValueAsString());
        }
        if (isset($this->maxValueInteger) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX_VALUE_INTEGER]) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_INTEGER, $this->maxValueInteger->_getValueAsString());
        }
        if (isset($this->maxValuePositiveInt) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX_VALUE_POSITIVE_INT]) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_POSITIVE_INT, $this->maxValuePositiveInt->_getValueAsString());
        }
        if (isset($this->maxValueUnsignedInt) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX_VALUE_UNSIGNED_INT]) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_UNSIGNED_INT, $this->maxValueUnsignedInt->_getValueAsString());
        }
        if (isset($this->maxLength) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX_LENGTH]) {
            $xw->writeAttribute(self::FIELD_MAX_LENGTH, $this->maxLength->_getValueAsString());
        }
        if (isset($this->mustSupport) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MUST_SUPPORT]) {
            $xw->writeAttribute(self::FIELD_MUST_SUPPORT, $this->mustSupport->_getValueAsString());
        }
        if (isset($this->isModifier) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_IS_MODIFIER]) {
            $xw->writeAttribute(self::FIELD_IS_MODIFIER, $this->isModifier->_getValueAsString());
        }
        if (isset($this->isSummary) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_IS_SUMMARY]) {
            $xw->writeAttribute(self::FIELD_IS_SUMMARY, $this->isSummary->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->path)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PATH]
                || $this->path->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PATH);
            $this->path->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PATH]);
            $xw->endElement();
        }
        if (isset($this->representation) && [] !== $this->representation) {
            foreach($this->representation as $v) {
                $xw->startElement(self::FIELD_REPRESENTATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->sliceName)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SLICE_NAME]
                || $this->sliceName->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SLICE_NAME);
            $this->sliceName->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SLICE_NAME]);
            $xw->endElement();
        }
        if (isset($this->label)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LABEL]
                || $this->label->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LABEL);
            $this->label->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LABEL]);
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
        if (isset($this->short)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SHORT]
                || $this->short->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SHORT);
            $this->short->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SHORT]);
            $xw->endElement();
        }
        if (isset($this->definition)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFINITION]
                || $this->definition->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFINITION);
            $this->definition->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFINITION]);
            $xw->endElement();
        }
        if (isset($this->comment)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COMMENT]
                || $this->comment->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COMMENT);
            $this->comment->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COMMENT]);
            $xw->endElement();
        }
        if (isset($this->requirements)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_REQUIREMENTS]
                || $this->requirements->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_REQUIREMENTS);
            $this->requirements->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_REQUIREMENTS]);
            $xw->endElement();
        }
        if (isset($this->alias) && [] !== $this->alias) {
            foreach($this->alias as $v) {
                $xw->startElement(self::FIELD_ALIAS);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
        if (isset($this->base)) {
            $xw->startElement(self::FIELD_BASE);
            $this->base->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->contentReference)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CONTENT_REFERENCE]
                || $this->contentReference->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CONTENT_REFERENCE);
            $this->contentReference->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CONTENT_REFERENCE]);
            $xw->endElement();
        }
        if (isset($this->type)) {
            foreach ($this->type as $v) {
                $xw->startElement(self::FIELD_TYPE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
        if (isset($this->meaningWhenMissing)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MEANING_WHEN_MISSING]
                || $this->meaningWhenMissing->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MEANING_WHEN_MISSING);
            $this->meaningWhenMissing->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MEANING_WHEN_MISSING]);
            $xw->endElement();
        }
        if (isset($this->orderMeaning)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ORDER_MEANING]
                || $this->orderMeaning->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ORDER_MEANING);
            $this->orderMeaning->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ORDER_MEANING]);
            $xw->endElement();
        }
        if (isset($this->fixedBase64Binary)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FIXED_BASE_64BINARY]
                || $this->fixedBase64Binary->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FIXED_BASE_64BINARY);
            $this->fixedBase64Binary->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FIXED_BASE_64BINARY]);
            $xw->endElement();
        }
        if (isset($this->fixedBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FIXED_BOOLEAN]
                || $this->fixedBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FIXED_BOOLEAN);
            $this->fixedBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FIXED_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->fixedCode)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FIXED_CODE]
                || $this->fixedCode->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FIXED_CODE);
            $this->fixedCode->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FIXED_CODE]);
            $xw->endElement();
        }
        if (isset($this->fixedDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FIXED_DATE]
                || $this->fixedDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FIXED_DATE);
            $this->fixedDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FIXED_DATE]);
            $xw->endElement();
        }
        if (isset($this->fixedDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FIXED_DATE_TIME]
                || $this->fixedDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FIXED_DATE_TIME);
            $this->fixedDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FIXED_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->fixedDecimal)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FIXED_DECIMAL]
                || $this->fixedDecimal->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FIXED_DECIMAL);
            $this->fixedDecimal->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FIXED_DECIMAL]);
            $xw->endElement();
        }
        if (isset($this->fixedId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FIXED_ID]
                || $this->fixedId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FIXED_ID);
            $this->fixedId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FIXED_ID]);
            $xw->endElement();
        }
        if (isset($this->fixedInstant)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FIXED_INSTANT]
                || $this->fixedInstant->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FIXED_INSTANT);
            $this->fixedInstant->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FIXED_INSTANT]);
            $xw->endElement();
        }
        if (isset($this->fixedInteger)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FIXED_INTEGER]
                || $this->fixedInteger->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FIXED_INTEGER);
            $this->fixedInteger->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FIXED_INTEGER]);
            $xw->endElement();
        }
        if (isset($this->fixedMarkdown)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FIXED_MARKDOWN]
                || $this->fixedMarkdown->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FIXED_MARKDOWN);
            $this->fixedMarkdown->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FIXED_MARKDOWN]);
            $xw->endElement();
        }
        if (isset($this->fixedOid)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FIXED_OID]
                || $this->fixedOid->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FIXED_OID);
            $this->fixedOid->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FIXED_OID]);
            $xw->endElement();
        }
        if (isset($this->fixedPositiveInt)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FIXED_POSITIVE_INT]
                || $this->fixedPositiveInt->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FIXED_POSITIVE_INT);
            $this->fixedPositiveInt->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FIXED_POSITIVE_INT]);
            $xw->endElement();
        }
        if (isset($this->fixedString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FIXED_STRING]
                || $this->fixedString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FIXED_STRING);
            $this->fixedString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FIXED_STRING]);
            $xw->endElement();
        }
        if (isset($this->fixedTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FIXED_TIME]
                || $this->fixedTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FIXED_TIME);
            $this->fixedTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FIXED_TIME]);
            $xw->endElement();
        }
        if (isset($this->fixedUnsignedInt)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FIXED_UNSIGNED_INT]
                || $this->fixedUnsignedInt->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FIXED_UNSIGNED_INT);
            $this->fixedUnsignedInt->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FIXED_UNSIGNED_INT]);
            $xw->endElement();
        }
        if (isset($this->fixedUri)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FIXED_URI]
                || $this->fixedUri->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FIXED_URI);
            $this->fixedUri->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FIXED_URI]);
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
        if (isset($this->patternBase64Binary)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PATTERN_BASE_64BINARY]
                || $this->patternBase64Binary->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PATTERN_BASE_64BINARY);
            $this->patternBase64Binary->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PATTERN_BASE_64BINARY]);
            $xw->endElement();
        }
        if (isset($this->patternBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PATTERN_BOOLEAN]
                || $this->patternBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PATTERN_BOOLEAN);
            $this->patternBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PATTERN_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->patternCode)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PATTERN_CODE]
                || $this->patternCode->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PATTERN_CODE);
            $this->patternCode->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PATTERN_CODE]);
            $xw->endElement();
        }
        if (isset($this->patternDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PATTERN_DATE]
                || $this->patternDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PATTERN_DATE);
            $this->patternDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PATTERN_DATE]);
            $xw->endElement();
        }
        if (isset($this->patternDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PATTERN_DATE_TIME]
                || $this->patternDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PATTERN_DATE_TIME);
            $this->patternDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PATTERN_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->patternDecimal)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PATTERN_DECIMAL]
                || $this->patternDecimal->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PATTERN_DECIMAL);
            $this->patternDecimal->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PATTERN_DECIMAL]);
            $xw->endElement();
        }
        if (isset($this->patternId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PATTERN_ID]
                || $this->patternId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PATTERN_ID);
            $this->patternId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PATTERN_ID]);
            $xw->endElement();
        }
        if (isset($this->patternInstant)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PATTERN_INSTANT]
                || $this->patternInstant->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PATTERN_INSTANT);
            $this->patternInstant->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PATTERN_INSTANT]);
            $xw->endElement();
        }
        if (isset($this->patternInteger)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PATTERN_INTEGER]
                || $this->patternInteger->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PATTERN_INTEGER);
            $this->patternInteger->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PATTERN_INTEGER]);
            $xw->endElement();
        }
        if (isset($this->patternMarkdown)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PATTERN_MARKDOWN]
                || $this->patternMarkdown->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PATTERN_MARKDOWN);
            $this->patternMarkdown->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PATTERN_MARKDOWN]);
            $xw->endElement();
        }
        if (isset($this->patternOid)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PATTERN_OID]
                || $this->patternOid->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PATTERN_OID);
            $this->patternOid->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PATTERN_OID]);
            $xw->endElement();
        }
        if (isset($this->patternPositiveInt)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PATTERN_POSITIVE_INT]
                || $this->patternPositiveInt->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PATTERN_POSITIVE_INT);
            $this->patternPositiveInt->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PATTERN_POSITIVE_INT]);
            $xw->endElement();
        }
        if (isset($this->patternString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PATTERN_STRING]
                || $this->patternString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PATTERN_STRING);
            $this->patternString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PATTERN_STRING]);
            $xw->endElement();
        }
        if (isset($this->patternTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PATTERN_TIME]
                || $this->patternTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PATTERN_TIME);
            $this->patternTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PATTERN_TIME]);
            $xw->endElement();
        }
        if (isset($this->patternUnsignedInt)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PATTERN_UNSIGNED_INT]
                || $this->patternUnsignedInt->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PATTERN_UNSIGNED_INT);
            $this->patternUnsignedInt->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PATTERN_UNSIGNED_INT]);
            $xw->endElement();
        }
        if (isset($this->patternUri)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PATTERN_URI]
                || $this->patternUri->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PATTERN_URI);
            $this->patternUri->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PATTERN_URI]);
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
        if (isset($this->minValueDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MIN_VALUE_DATE]
                || $this->minValueDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MIN_VALUE_DATE);
            $this->minValueDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MIN_VALUE_DATE]);
            $xw->endElement();
        }
        if (isset($this->minValueDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MIN_VALUE_DATE_TIME]
                || $this->minValueDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MIN_VALUE_DATE_TIME);
            $this->minValueDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MIN_VALUE_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->minValueInstant)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MIN_VALUE_INSTANT]
                || $this->minValueInstant->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MIN_VALUE_INSTANT);
            $this->minValueInstant->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MIN_VALUE_INSTANT]);
            $xw->endElement();
        }
        if (isset($this->minValueTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MIN_VALUE_TIME]
                || $this->minValueTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MIN_VALUE_TIME);
            $this->minValueTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MIN_VALUE_TIME]);
            $xw->endElement();
        }
        if (isset($this->minValueDecimal)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MIN_VALUE_DECIMAL]
                || $this->minValueDecimal->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MIN_VALUE_DECIMAL);
            $this->minValueDecimal->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MIN_VALUE_DECIMAL]);
            $xw->endElement();
        }
        if (isset($this->minValueInteger)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MIN_VALUE_INTEGER]
                || $this->minValueInteger->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MIN_VALUE_INTEGER);
            $this->minValueInteger->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MIN_VALUE_INTEGER]);
            $xw->endElement();
        }
        if (isset($this->minValuePositiveInt)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MIN_VALUE_POSITIVE_INT]
                || $this->minValuePositiveInt->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MIN_VALUE_POSITIVE_INT);
            $this->minValuePositiveInt->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MIN_VALUE_POSITIVE_INT]);
            $xw->endElement();
        }
        if (isset($this->minValueUnsignedInt)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MIN_VALUE_UNSIGNED_INT]
                || $this->minValueUnsignedInt->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MIN_VALUE_UNSIGNED_INT);
            $this->minValueUnsignedInt->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MIN_VALUE_UNSIGNED_INT]);
            $xw->endElement();
        }
        if (isset($this->minValueQuantity)) {
            $xw->startElement(self::FIELD_MIN_VALUE_QUANTITY);
            $this->minValueQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxValueDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MAX_VALUE_DATE]
                || $this->maxValueDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MAX_VALUE_DATE);
            $this->maxValueDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MAX_VALUE_DATE]);
            $xw->endElement();
        }
        if (isset($this->maxValueDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MAX_VALUE_DATE_TIME]
                || $this->maxValueDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MAX_VALUE_DATE_TIME);
            $this->maxValueDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MAX_VALUE_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->maxValueInstant)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MAX_VALUE_INSTANT]
                || $this->maxValueInstant->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MAX_VALUE_INSTANT);
            $this->maxValueInstant->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MAX_VALUE_INSTANT]);
            $xw->endElement();
        }
        if (isset($this->maxValueTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MAX_VALUE_TIME]
                || $this->maxValueTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MAX_VALUE_TIME);
            $this->maxValueTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MAX_VALUE_TIME]);
            $xw->endElement();
        }
        if (isset($this->maxValueDecimal)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MAX_VALUE_DECIMAL]
                || $this->maxValueDecimal->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MAX_VALUE_DECIMAL);
            $this->maxValueDecimal->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MAX_VALUE_DECIMAL]);
            $xw->endElement();
        }
        if (isset($this->maxValueInteger)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MAX_VALUE_INTEGER]
                || $this->maxValueInteger->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MAX_VALUE_INTEGER);
            $this->maxValueInteger->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MAX_VALUE_INTEGER]);
            $xw->endElement();
        }
        if (isset($this->maxValuePositiveInt)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MAX_VALUE_POSITIVE_INT]
                || $this->maxValuePositiveInt->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MAX_VALUE_POSITIVE_INT);
            $this->maxValuePositiveInt->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MAX_VALUE_POSITIVE_INT]);
            $xw->endElement();
        }
        if (isset($this->maxValueUnsignedInt)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MAX_VALUE_UNSIGNED_INT]
                || $this->maxValueUnsignedInt->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MAX_VALUE_UNSIGNED_INT);
            $this->maxValueUnsignedInt->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MAX_VALUE_UNSIGNED_INT]);
            $xw->endElement();
        }
        if (isset($this->maxValueQuantity)) {
            $xw->startElement(self::FIELD_MAX_VALUE_QUANTITY);
            $this->maxValueQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxLength)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MAX_LENGTH]
                || $this->maxLength->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MAX_LENGTH);
            $this->maxLength->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MAX_LENGTH]);
            $xw->endElement();
        }
        if (isset($this->condition) && [] !== $this->condition) {
            foreach($this->condition as $v) {
                $xw->startElement(self::FIELD_CONDITION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->constraint)) {
            foreach ($this->constraint as $v) {
                $xw->startElement(self::FIELD_CONSTRAINT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->mustSupport)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MUST_SUPPORT]
                || $this->mustSupport->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MUST_SUPPORT);
            $this->mustSupport->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MUST_SUPPORT]);
            $xw->endElement();
        }
        if (isset($this->isModifier)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_IS_MODIFIER]
                || $this->isModifier->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_IS_MODIFIER);
            $this->isModifier->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_IS_MODIFIER]);
            $xw->endElement();
        }
        if (isset($this->isSummary)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_IS_SUMMARY]
                || $this->isSummary->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_IS_SUMMARY);
            $this->isSummary->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_IS_SUMMARY]);
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
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->path)
            || isset($decoded->_path)
            || property_exists($decoded, self::FIELD_PATH)
            || property_exists($decoded, self::FIELD_PATH_EXT)) {
            $v = $decoded->_path ?? new \stdClass();
            $v->value = $decoded->path ?? null;
            $type->setPath(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->representation)
            || isset($decoded->_representation)
            || property_exists($decoded, self::FIELD_REPRESENTATION)
            || property_exists($decoded, self::FIELD_REPRESENTATION_EXT)) {
            $vals = (array)($decoded->representation ?? []);
            $exts = (array)($decoded->FIELD_REPRESENTATION_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addRepresentation(FHIRPropertyRepresentation::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->sliceName)
            || isset($decoded->_sliceName)
            || property_exists($decoded, self::FIELD_SLICE_NAME)
            || property_exists($decoded, self::FIELD_SLICE_NAME_EXT)) {
            $v = $decoded->_sliceName ?? new \stdClass();
            $v->value = $decoded->sliceName ?? null;
            $type->setSliceName(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->label)
            || isset($decoded->_label)
            || property_exists($decoded, self::FIELD_LABEL)
            || property_exists($decoded, self::FIELD_LABEL_EXT)) {
            $v = $decoded->_label ?? new \stdClass();
            $v->value = $decoded->label ?? null;
            $type->setLabel(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->code) || property_exists($decoded, self::FIELD_CODE)) {
            if (is_object($decoded->code)) {
                $vals = [$decoded->code];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CODE, true);
            } else {
                $vals = $decoded->code;
            }
            foreach($vals as $v) {
                $type->addCode(FHIRCoding::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->slicing) || property_exists($decoded, self::FIELD_SLICING)) {
            if (is_array($decoded->slicing)) {
                $type->setSlicing(FHIRElementDefinitionSlicing::jsonUnserialize(reset($decoded->slicing), $config));
            } else {
                $type->setSlicing(FHIRElementDefinitionSlicing::jsonUnserialize($decoded->slicing, $config));
            }
        }
        if (isset($decoded->short)
            || isset($decoded->_short)
            || property_exists($decoded, self::FIELD_SHORT)
            || property_exists($decoded, self::FIELD_SHORT_EXT)) {
            $v = $decoded->_short ?? new \stdClass();
            $v->value = $decoded->short ?? null;
            $type->setShort(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->definition)
            || isset($decoded->_definition)
            || property_exists($decoded, self::FIELD_DEFINITION)
            || property_exists($decoded, self::FIELD_DEFINITION_EXT)) {
            $v = $decoded->_definition ?? new \stdClass();
            $v->value = $decoded->definition ?? null;
            $type->setDefinition(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($decoded->comment)
            || isset($decoded->_comment)
            || property_exists($decoded, self::FIELD_COMMENT)
            || property_exists($decoded, self::FIELD_COMMENT_EXT)) {
            $v = $decoded->_comment ?? new \stdClass();
            $v->value = $decoded->comment ?? null;
            $type->setComment(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($decoded->requirements)
            || isset($decoded->_requirements)
            || property_exists($decoded, self::FIELD_REQUIREMENTS)
            || property_exists($decoded, self::FIELD_REQUIREMENTS_EXT)) {
            $v = $decoded->_requirements ?? new \stdClass();
            $v->value = $decoded->requirements ?? null;
            $type->setRequirements(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($decoded->alias)
            || isset($decoded->_alias)
            || property_exists($decoded, self::FIELD_ALIAS)
            || property_exists($decoded, self::FIELD_ALIAS_EXT)) {
            $vals = (array)($decoded->alias ?? []);
            $exts = (array)($decoded->FIELD_ALIAS_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addAlias(FHIRString::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->min)
            || isset($decoded->_min)
            || property_exists($decoded, self::FIELD_MIN)
            || property_exists($decoded, self::FIELD_MIN_EXT)) {
            $v = $decoded->_min ?? new \stdClass();
            $v->value = $decoded->min ?? null;
            $type->setMin(FHIRUnsignedInt::jsonUnserialize($v, $config));
        }
        if (isset($decoded->max)
            || isset($decoded->_max)
            || property_exists($decoded, self::FIELD_MAX)
            || property_exists($decoded, self::FIELD_MAX_EXT)) {
            $v = $decoded->_max ?? new \stdClass();
            $v->value = $decoded->max ?? null;
            $type->setMax(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->base) || property_exists($decoded, self::FIELD_BASE)) {
            if (is_array($decoded->base)) {
                $type->setBase(FHIRElementDefinitionBase::jsonUnserialize(reset($decoded->base), $config));
            } else {
                $type->setBase(FHIRElementDefinitionBase::jsonUnserialize($decoded->base, $config));
            }
        }
        if (isset($decoded->contentReference)
            || isset($decoded->_contentReference)
            || property_exists($decoded, self::FIELD_CONTENT_REFERENCE)
            || property_exists($decoded, self::FIELD_CONTENT_REFERENCE_EXT)) {
            $v = $decoded->_contentReference ?? new \stdClass();
            $v->value = $decoded->contentReference ?? null;
            $type->setContentReference(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($decoded->type) || property_exists($decoded, self::FIELD_TYPE)) {
            if (is_object($decoded->type)) {
                $vals = [$decoded->type];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_TYPE, true);
            } else {
                $vals = $decoded->type;
            }
            foreach($vals as $v) {
                $type->addType(FHIRElementDefinitionType::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->defaultValueBase64Binary)
            || isset($decoded->_defaultValueBase64Binary)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_BASE_64BINARY)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT)) {
            $v = $decoded->_defaultValueBase64Binary ?? new \stdClass();
            $v->value = $decoded->defaultValueBase64Binary ?? null;
            $type->setDefaultValueBase64Binary(FHIRBase64Binary::jsonUnserialize($v, $config));
        }
        if (isset($decoded->defaultValueBoolean)
            || isset($decoded->_defaultValueBoolean)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_BOOLEAN)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT)) {
            $v = $decoded->_defaultValueBoolean ?? new \stdClass();
            $v->value = $decoded->defaultValueBoolean ?? null;
            $type->setDefaultValueBoolean(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->defaultValueCode)
            || isset($decoded->_defaultValueCode)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_CODE)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_CODE_EXT)) {
            $v = $decoded->_defaultValueCode ?? new \stdClass();
            $v->value = $decoded->defaultValueCode ?? null;
            $type->setDefaultValueCode(FHIRCode::jsonUnserialize($v, $config));
        }
        if (isset($decoded->defaultValueDate)
            || isset($decoded->_defaultValueDate)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_DATE)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_DATE_EXT)) {
            $v = $decoded->_defaultValueDate ?? new \stdClass();
            $v->value = $decoded->defaultValueDate ?? null;
            $type->setDefaultValueDate(FHIRDate::jsonUnserialize($v, $config));
        }
        if (isset($decoded->defaultValueDateTime)
            || isset($decoded->_defaultValueDateTime)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_DATE_TIME)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT)) {
            $v = $decoded->_defaultValueDateTime ?? new \stdClass();
            $v->value = $decoded->defaultValueDateTime ?? null;
            $type->setDefaultValueDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->defaultValueDecimal)
            || isset($decoded->_defaultValueDecimal)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_DECIMAL)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_DECIMAL_EXT)) {
            $v = $decoded->_defaultValueDecimal ?? new \stdClass();
            $v->value = $decoded->defaultValueDecimal ?? null;
            $type->setDefaultValueDecimal(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($decoded->defaultValueId)
            || isset($decoded->_defaultValueId)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_ID)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_ID_EXT)) {
            $v = $decoded->_defaultValueId ?? new \stdClass();
            $v->value = $decoded->defaultValueId ?? null;
            $type->setDefaultValueId(FHIRId::jsonUnserialize($v, $config));
        }
        if (isset($decoded->defaultValueInstant)
            || isset($decoded->_defaultValueInstant)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_INSTANT)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_INSTANT_EXT)) {
            $v = $decoded->_defaultValueInstant ?? new \stdClass();
            $v->value = $decoded->defaultValueInstant ?? null;
            $type->setDefaultValueInstant(FHIRInstant::jsonUnserialize($v, $config));
        }
        if (isset($decoded->defaultValueInteger)
            || isset($decoded->_defaultValueInteger)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_INTEGER)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_INTEGER_EXT)) {
            $v = $decoded->_defaultValueInteger ?? new \stdClass();
            $v->value = $decoded->defaultValueInteger ?? null;
            $type->setDefaultValueInteger(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->defaultValueMarkdown)
            || isset($decoded->_defaultValueMarkdown)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_MARKDOWN)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT)) {
            $v = $decoded->_defaultValueMarkdown ?? new \stdClass();
            $v->value = $decoded->defaultValueMarkdown ?? null;
            $type->setDefaultValueMarkdown(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($decoded->defaultValueOid)
            || isset($decoded->_defaultValueOid)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_OID)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_OID_EXT)) {
            $v = $decoded->_defaultValueOid ?? new \stdClass();
            $v->value = $decoded->defaultValueOid ?? null;
            $type->setDefaultValueOid(FHIROid::jsonUnserialize($v, $config));
        }
        if (isset($decoded->defaultValuePositiveInt)
            || isset($decoded->_defaultValuePositiveInt)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_POSITIVE_INT)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT)) {
            $v = $decoded->_defaultValuePositiveInt ?? new \stdClass();
            $v->value = $decoded->defaultValuePositiveInt ?? null;
            $type->setDefaultValuePositiveInt(FHIRPositiveInt::jsonUnserialize($v, $config));
        }
        if (isset($decoded->defaultValueString)
            || isset($decoded->_defaultValueString)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_STRING)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_STRING_EXT)) {
            $v = $decoded->_defaultValueString ?? new \stdClass();
            $v->value = $decoded->defaultValueString ?? null;
            $type->setDefaultValueString(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->defaultValueTime)
            || isset($decoded->_defaultValueTime)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_TIME)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_TIME_EXT)) {
            $v = $decoded->_defaultValueTime ?? new \stdClass();
            $v->value = $decoded->defaultValueTime ?? null;
            $type->setDefaultValueTime(FHIRTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->defaultValueUnsignedInt)
            || isset($decoded->_defaultValueUnsignedInt)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_UNSIGNED_INT)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT)) {
            $v = $decoded->_defaultValueUnsignedInt ?? new \stdClass();
            $v->value = $decoded->defaultValueUnsignedInt ?? null;
            $type->setDefaultValueUnsignedInt(FHIRUnsignedInt::jsonUnserialize($v, $config));
        }
        if (isset($decoded->defaultValueUri)
            || isset($decoded->_defaultValueUri)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_URI)
            || property_exists($decoded, self::FIELD_DEFAULT_VALUE_URI_EXT)) {
            $v = $decoded->_defaultValueUri ?? new \stdClass();
            $v->value = $decoded->defaultValueUri ?? null;
            $type->setDefaultValueUri(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($decoded->defaultValueAddress) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_ADDRESS)) {
            if (is_array($decoded->defaultValueAddress)) {
                $type->setDefaultValueAddress(FHIRAddress::jsonUnserialize(reset($decoded->defaultValueAddress), $config));
            } else {
                $type->setDefaultValueAddress(FHIRAddress::jsonUnserialize($decoded->defaultValueAddress, $config));
            }
        }
        if (isset($decoded->defaultValueAge) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_AGE)) {
            if (is_array($decoded->defaultValueAge)) {
                $type->setDefaultValueAge(FHIRAge::jsonUnserialize(reset($decoded->defaultValueAge), $config));
            } else {
                $type->setDefaultValueAge(FHIRAge::jsonUnserialize($decoded->defaultValueAge, $config));
            }
        }
        if (isset($decoded->defaultValueAnnotation) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_ANNOTATION)) {
            if (is_array($decoded->defaultValueAnnotation)) {
                $type->setDefaultValueAnnotation(FHIRAnnotation::jsonUnserialize(reset($decoded->defaultValueAnnotation), $config));
            } else {
                $type->setDefaultValueAnnotation(FHIRAnnotation::jsonUnserialize($decoded->defaultValueAnnotation, $config));
            }
        }
        if (isset($decoded->defaultValueAttachment) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_ATTACHMENT)) {
            if (is_array($decoded->defaultValueAttachment)) {
                $type->setDefaultValueAttachment(FHIRAttachment::jsonUnserialize(reset($decoded->defaultValueAttachment), $config));
            } else {
                $type->setDefaultValueAttachment(FHIRAttachment::jsonUnserialize($decoded->defaultValueAttachment, $config));
            }
        }
        if (isset($decoded->defaultValueCodeableConcept) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT)) {
            if (is_array($decoded->defaultValueCodeableConcept)) {
                $type->setDefaultValueCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($decoded->defaultValueCodeableConcept), $config));
            } else {
                $type->setDefaultValueCodeableConcept(FHIRCodeableConcept::jsonUnserialize($decoded->defaultValueCodeableConcept, $config));
            }
        }
        if (isset($decoded->defaultValueCoding) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_CODING)) {
            if (is_array($decoded->defaultValueCoding)) {
                $type->setDefaultValueCoding(FHIRCoding::jsonUnserialize(reset($decoded->defaultValueCoding), $config));
            } else {
                $type->setDefaultValueCoding(FHIRCoding::jsonUnserialize($decoded->defaultValueCoding, $config));
            }
        }
        if (isset($decoded->defaultValueContactPoint) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_CONTACT_POINT)) {
            if (is_array($decoded->defaultValueContactPoint)) {
                $type->setDefaultValueContactPoint(FHIRContactPoint::jsonUnserialize(reset($decoded->defaultValueContactPoint), $config));
            } else {
                $type->setDefaultValueContactPoint(FHIRContactPoint::jsonUnserialize($decoded->defaultValueContactPoint, $config));
            }
        }
        if (isset($decoded->defaultValueCount) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_COUNT)) {
            if (is_array($decoded->defaultValueCount)) {
                $type->setDefaultValueCount(FHIRCount::jsonUnserialize(reset($decoded->defaultValueCount), $config));
            } else {
                $type->setDefaultValueCount(FHIRCount::jsonUnserialize($decoded->defaultValueCount, $config));
            }
        }
        if (isset($decoded->defaultValueDistance) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_DISTANCE)) {
            if (is_array($decoded->defaultValueDistance)) {
                $type->setDefaultValueDistance(FHIRDistance::jsonUnserialize(reset($decoded->defaultValueDistance), $config));
            } else {
                $type->setDefaultValueDistance(FHIRDistance::jsonUnserialize($decoded->defaultValueDistance, $config));
            }
        }
        if (isset($decoded->defaultValueDuration) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_DURATION)) {
            if (is_array($decoded->defaultValueDuration)) {
                $type->setDefaultValueDuration(FHIRDuration::jsonUnserialize(reset($decoded->defaultValueDuration), $config));
            } else {
                $type->setDefaultValueDuration(FHIRDuration::jsonUnserialize($decoded->defaultValueDuration, $config));
            }
        }
        if (isset($decoded->defaultValueHumanName) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_HUMAN_NAME)) {
            if (is_array($decoded->defaultValueHumanName)) {
                $type->setDefaultValueHumanName(FHIRHumanName::jsonUnserialize(reset($decoded->defaultValueHumanName), $config));
            } else {
                $type->setDefaultValueHumanName(FHIRHumanName::jsonUnserialize($decoded->defaultValueHumanName, $config));
            }
        }
        if (isset($decoded->defaultValueIdentifier) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_IDENTIFIER)) {
            if (is_array($decoded->defaultValueIdentifier)) {
                $type->setDefaultValueIdentifier(FHIRIdentifier::jsonUnserialize(reset($decoded->defaultValueIdentifier), $config));
            } else {
                $type->setDefaultValueIdentifier(FHIRIdentifier::jsonUnserialize($decoded->defaultValueIdentifier, $config));
            }
        }
        if (isset($decoded->defaultValueMoney) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_MONEY)) {
            if (is_array($decoded->defaultValueMoney)) {
                $type->setDefaultValueMoney(FHIRMoney::jsonUnserialize(reset($decoded->defaultValueMoney), $config));
            } else {
                $type->setDefaultValueMoney(FHIRMoney::jsonUnserialize($decoded->defaultValueMoney, $config));
            }
        }
        if (isset($decoded->defaultValuePeriod) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_PERIOD)) {
            if (is_array($decoded->defaultValuePeriod)) {
                $type->setDefaultValuePeriod(FHIRPeriod::jsonUnserialize(reset($decoded->defaultValuePeriod), $config));
            } else {
                $type->setDefaultValuePeriod(FHIRPeriod::jsonUnserialize($decoded->defaultValuePeriod, $config));
            }
        }
        if (isset($decoded->defaultValueQuantity) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_QUANTITY)) {
            if (is_array($decoded->defaultValueQuantity)) {
                $type->setDefaultValueQuantity(FHIRQuantity::jsonUnserialize(reset($decoded->defaultValueQuantity), $config));
            } else {
                $type->setDefaultValueQuantity(FHIRQuantity::jsonUnserialize($decoded->defaultValueQuantity, $config));
            }
        }
        if (isset($decoded->defaultValueRange) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_RANGE)) {
            if (is_array($decoded->defaultValueRange)) {
                $type->setDefaultValueRange(FHIRRange::jsonUnserialize(reset($decoded->defaultValueRange), $config));
            } else {
                $type->setDefaultValueRange(FHIRRange::jsonUnserialize($decoded->defaultValueRange, $config));
            }
        }
        if (isset($decoded->defaultValueRatio) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_RATIO)) {
            if (is_array($decoded->defaultValueRatio)) {
                $type->setDefaultValueRatio(FHIRRatio::jsonUnserialize(reset($decoded->defaultValueRatio), $config));
            } else {
                $type->setDefaultValueRatio(FHIRRatio::jsonUnserialize($decoded->defaultValueRatio, $config));
            }
        }
        if (isset($decoded->defaultValueReference) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_REFERENCE)) {
            if (is_array($decoded->defaultValueReference)) {
                $type->setDefaultValueReference(FHIRReference::jsonUnserialize(reset($decoded->defaultValueReference), $config));
            } else {
                $type->setDefaultValueReference(FHIRReference::jsonUnserialize($decoded->defaultValueReference, $config));
            }
        }
        if (isset($decoded->defaultValueSampledData) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_SAMPLED_DATA)) {
            if (is_array($decoded->defaultValueSampledData)) {
                $type->setDefaultValueSampledData(FHIRSampledData::jsonUnserialize(reset($decoded->defaultValueSampledData), $config));
            } else {
                $type->setDefaultValueSampledData(FHIRSampledData::jsonUnserialize($decoded->defaultValueSampledData, $config));
            }
        }
        if (isset($decoded->defaultValueSignature) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_SIGNATURE)) {
            if (is_array($decoded->defaultValueSignature)) {
                $type->setDefaultValueSignature(FHIRSignature::jsonUnserialize(reset($decoded->defaultValueSignature), $config));
            } else {
                $type->setDefaultValueSignature(FHIRSignature::jsonUnserialize($decoded->defaultValueSignature, $config));
            }
        }
        if (isset($decoded->defaultValueTiming) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_TIMING)) {
            if (is_array($decoded->defaultValueTiming)) {
                $type->setDefaultValueTiming(FHIRTiming::jsonUnserialize(reset($decoded->defaultValueTiming), $config));
            } else {
                $type->setDefaultValueTiming(FHIRTiming::jsonUnserialize($decoded->defaultValueTiming, $config));
            }
        }
        if (isset($decoded->defaultValueMeta) || property_exists($decoded, self::FIELD_DEFAULT_VALUE_META)) {
            if (is_array($decoded->defaultValueMeta)) {
                $type->setDefaultValueMeta(FHIRMeta::jsonUnserialize(reset($decoded->defaultValueMeta), $config));
            } else {
                $type->setDefaultValueMeta(FHIRMeta::jsonUnserialize($decoded->defaultValueMeta, $config));
            }
        }
        if (isset($decoded->meaningWhenMissing)
            || isset($decoded->_meaningWhenMissing)
            || property_exists($decoded, self::FIELD_MEANING_WHEN_MISSING)
            || property_exists($decoded, self::FIELD_MEANING_WHEN_MISSING_EXT)) {
            $v = $decoded->_meaningWhenMissing ?? new \stdClass();
            $v->value = $decoded->meaningWhenMissing ?? null;
            $type->setMeaningWhenMissing(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($decoded->orderMeaning)
            || isset($decoded->_orderMeaning)
            || property_exists($decoded, self::FIELD_ORDER_MEANING)
            || property_exists($decoded, self::FIELD_ORDER_MEANING_EXT)) {
            $v = $decoded->_orderMeaning ?? new \stdClass();
            $v->value = $decoded->orderMeaning ?? null;
            $type->setOrderMeaning(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->fixedBase64Binary)
            || isset($decoded->_fixedBase64Binary)
            || property_exists($decoded, self::FIELD_FIXED_BASE_64BINARY)
            || property_exists($decoded, self::FIELD_FIXED_BASE_64BINARY_EXT)) {
            $v = $decoded->_fixedBase64Binary ?? new \stdClass();
            $v->value = $decoded->fixedBase64Binary ?? null;
            $type->setFixedBase64Binary(FHIRBase64Binary::jsonUnserialize($v, $config));
        }
        if (isset($decoded->fixedBoolean)
            || isset($decoded->_fixedBoolean)
            || property_exists($decoded, self::FIELD_FIXED_BOOLEAN)
            || property_exists($decoded, self::FIELD_FIXED_BOOLEAN_EXT)) {
            $v = $decoded->_fixedBoolean ?? new \stdClass();
            $v->value = $decoded->fixedBoolean ?? null;
            $type->setFixedBoolean(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->fixedCode)
            || isset($decoded->_fixedCode)
            || property_exists($decoded, self::FIELD_FIXED_CODE)
            || property_exists($decoded, self::FIELD_FIXED_CODE_EXT)) {
            $v = $decoded->_fixedCode ?? new \stdClass();
            $v->value = $decoded->fixedCode ?? null;
            $type->setFixedCode(FHIRCode::jsonUnserialize($v, $config));
        }
        if (isset($decoded->fixedDate)
            || isset($decoded->_fixedDate)
            || property_exists($decoded, self::FIELD_FIXED_DATE)
            || property_exists($decoded, self::FIELD_FIXED_DATE_EXT)) {
            $v = $decoded->_fixedDate ?? new \stdClass();
            $v->value = $decoded->fixedDate ?? null;
            $type->setFixedDate(FHIRDate::jsonUnserialize($v, $config));
        }
        if (isset($decoded->fixedDateTime)
            || isset($decoded->_fixedDateTime)
            || property_exists($decoded, self::FIELD_FIXED_DATE_TIME)
            || property_exists($decoded, self::FIELD_FIXED_DATE_TIME_EXT)) {
            $v = $decoded->_fixedDateTime ?? new \stdClass();
            $v->value = $decoded->fixedDateTime ?? null;
            $type->setFixedDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->fixedDecimal)
            || isset($decoded->_fixedDecimal)
            || property_exists($decoded, self::FIELD_FIXED_DECIMAL)
            || property_exists($decoded, self::FIELD_FIXED_DECIMAL_EXT)) {
            $v = $decoded->_fixedDecimal ?? new \stdClass();
            $v->value = $decoded->fixedDecimal ?? null;
            $type->setFixedDecimal(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($decoded->fixedId)
            || isset($decoded->_fixedId)
            || property_exists($decoded, self::FIELD_FIXED_ID)
            || property_exists($decoded, self::FIELD_FIXED_ID_EXT)) {
            $v = $decoded->_fixedId ?? new \stdClass();
            $v->value = $decoded->fixedId ?? null;
            $type->setFixedId(FHIRId::jsonUnserialize($v, $config));
        }
        if (isset($decoded->fixedInstant)
            || isset($decoded->_fixedInstant)
            || property_exists($decoded, self::FIELD_FIXED_INSTANT)
            || property_exists($decoded, self::FIELD_FIXED_INSTANT_EXT)) {
            $v = $decoded->_fixedInstant ?? new \stdClass();
            $v->value = $decoded->fixedInstant ?? null;
            $type->setFixedInstant(FHIRInstant::jsonUnserialize($v, $config));
        }
        if (isset($decoded->fixedInteger)
            || isset($decoded->_fixedInteger)
            || property_exists($decoded, self::FIELD_FIXED_INTEGER)
            || property_exists($decoded, self::FIELD_FIXED_INTEGER_EXT)) {
            $v = $decoded->_fixedInteger ?? new \stdClass();
            $v->value = $decoded->fixedInteger ?? null;
            $type->setFixedInteger(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->fixedMarkdown)
            || isset($decoded->_fixedMarkdown)
            || property_exists($decoded, self::FIELD_FIXED_MARKDOWN)
            || property_exists($decoded, self::FIELD_FIXED_MARKDOWN_EXT)) {
            $v = $decoded->_fixedMarkdown ?? new \stdClass();
            $v->value = $decoded->fixedMarkdown ?? null;
            $type->setFixedMarkdown(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($decoded->fixedOid)
            || isset($decoded->_fixedOid)
            || property_exists($decoded, self::FIELD_FIXED_OID)
            || property_exists($decoded, self::FIELD_FIXED_OID_EXT)) {
            $v = $decoded->_fixedOid ?? new \stdClass();
            $v->value = $decoded->fixedOid ?? null;
            $type->setFixedOid(FHIROid::jsonUnserialize($v, $config));
        }
        if (isset($decoded->fixedPositiveInt)
            || isset($decoded->_fixedPositiveInt)
            || property_exists($decoded, self::FIELD_FIXED_POSITIVE_INT)
            || property_exists($decoded, self::FIELD_FIXED_POSITIVE_INT_EXT)) {
            $v = $decoded->_fixedPositiveInt ?? new \stdClass();
            $v->value = $decoded->fixedPositiveInt ?? null;
            $type->setFixedPositiveInt(FHIRPositiveInt::jsonUnserialize($v, $config));
        }
        if (isset($decoded->fixedString)
            || isset($decoded->_fixedString)
            || property_exists($decoded, self::FIELD_FIXED_STRING)
            || property_exists($decoded, self::FIELD_FIXED_STRING_EXT)) {
            $v = $decoded->_fixedString ?? new \stdClass();
            $v->value = $decoded->fixedString ?? null;
            $type->setFixedString(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->fixedTime)
            || isset($decoded->_fixedTime)
            || property_exists($decoded, self::FIELD_FIXED_TIME)
            || property_exists($decoded, self::FIELD_FIXED_TIME_EXT)) {
            $v = $decoded->_fixedTime ?? new \stdClass();
            $v->value = $decoded->fixedTime ?? null;
            $type->setFixedTime(FHIRTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->fixedUnsignedInt)
            || isset($decoded->_fixedUnsignedInt)
            || property_exists($decoded, self::FIELD_FIXED_UNSIGNED_INT)
            || property_exists($decoded, self::FIELD_FIXED_UNSIGNED_INT_EXT)) {
            $v = $decoded->_fixedUnsignedInt ?? new \stdClass();
            $v->value = $decoded->fixedUnsignedInt ?? null;
            $type->setFixedUnsignedInt(FHIRUnsignedInt::jsonUnserialize($v, $config));
        }
        if (isset($decoded->fixedUri)
            || isset($decoded->_fixedUri)
            || property_exists($decoded, self::FIELD_FIXED_URI)
            || property_exists($decoded, self::FIELD_FIXED_URI_EXT)) {
            $v = $decoded->_fixedUri ?? new \stdClass();
            $v->value = $decoded->fixedUri ?? null;
            $type->setFixedUri(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($decoded->fixedAddress) || property_exists($decoded, self::FIELD_FIXED_ADDRESS)) {
            if (is_array($decoded->fixedAddress)) {
                $type->setFixedAddress(FHIRAddress::jsonUnserialize(reset($decoded->fixedAddress), $config));
            } else {
                $type->setFixedAddress(FHIRAddress::jsonUnserialize($decoded->fixedAddress, $config));
            }
        }
        if (isset($decoded->fixedAge) || property_exists($decoded, self::FIELD_FIXED_AGE)) {
            if (is_array($decoded->fixedAge)) {
                $type->setFixedAge(FHIRAge::jsonUnserialize(reset($decoded->fixedAge), $config));
            } else {
                $type->setFixedAge(FHIRAge::jsonUnserialize($decoded->fixedAge, $config));
            }
        }
        if (isset($decoded->fixedAnnotation) || property_exists($decoded, self::FIELD_FIXED_ANNOTATION)) {
            if (is_array($decoded->fixedAnnotation)) {
                $type->setFixedAnnotation(FHIRAnnotation::jsonUnserialize(reset($decoded->fixedAnnotation), $config));
            } else {
                $type->setFixedAnnotation(FHIRAnnotation::jsonUnserialize($decoded->fixedAnnotation, $config));
            }
        }
        if (isset($decoded->fixedAttachment) || property_exists($decoded, self::FIELD_FIXED_ATTACHMENT)) {
            if (is_array($decoded->fixedAttachment)) {
                $type->setFixedAttachment(FHIRAttachment::jsonUnserialize(reset($decoded->fixedAttachment), $config));
            } else {
                $type->setFixedAttachment(FHIRAttachment::jsonUnserialize($decoded->fixedAttachment, $config));
            }
        }
        if (isset($decoded->fixedCodeableConcept) || property_exists($decoded, self::FIELD_FIXED_CODEABLE_CONCEPT)) {
            if (is_array($decoded->fixedCodeableConcept)) {
                $type->setFixedCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($decoded->fixedCodeableConcept), $config));
            } else {
                $type->setFixedCodeableConcept(FHIRCodeableConcept::jsonUnserialize($decoded->fixedCodeableConcept, $config));
            }
        }
        if (isset($decoded->fixedCoding) || property_exists($decoded, self::FIELD_FIXED_CODING)) {
            if (is_array($decoded->fixedCoding)) {
                $type->setFixedCoding(FHIRCoding::jsonUnserialize(reset($decoded->fixedCoding), $config));
            } else {
                $type->setFixedCoding(FHIRCoding::jsonUnserialize($decoded->fixedCoding, $config));
            }
        }
        if (isset($decoded->fixedContactPoint) || property_exists($decoded, self::FIELD_FIXED_CONTACT_POINT)) {
            if (is_array($decoded->fixedContactPoint)) {
                $type->setFixedContactPoint(FHIRContactPoint::jsonUnserialize(reset($decoded->fixedContactPoint), $config));
            } else {
                $type->setFixedContactPoint(FHIRContactPoint::jsonUnserialize($decoded->fixedContactPoint, $config));
            }
        }
        if (isset($decoded->fixedCount) || property_exists($decoded, self::FIELD_FIXED_COUNT)) {
            if (is_array($decoded->fixedCount)) {
                $type->setFixedCount(FHIRCount::jsonUnserialize(reset($decoded->fixedCount), $config));
            } else {
                $type->setFixedCount(FHIRCount::jsonUnserialize($decoded->fixedCount, $config));
            }
        }
        if (isset($decoded->fixedDistance) || property_exists($decoded, self::FIELD_FIXED_DISTANCE)) {
            if (is_array($decoded->fixedDistance)) {
                $type->setFixedDistance(FHIRDistance::jsonUnserialize(reset($decoded->fixedDistance), $config));
            } else {
                $type->setFixedDistance(FHIRDistance::jsonUnserialize($decoded->fixedDistance, $config));
            }
        }
        if (isset($decoded->fixedDuration) || property_exists($decoded, self::FIELD_FIXED_DURATION)) {
            if (is_array($decoded->fixedDuration)) {
                $type->setFixedDuration(FHIRDuration::jsonUnserialize(reset($decoded->fixedDuration), $config));
            } else {
                $type->setFixedDuration(FHIRDuration::jsonUnserialize($decoded->fixedDuration, $config));
            }
        }
        if (isset($decoded->fixedHumanName) || property_exists($decoded, self::FIELD_FIXED_HUMAN_NAME)) {
            if (is_array($decoded->fixedHumanName)) {
                $type->setFixedHumanName(FHIRHumanName::jsonUnserialize(reset($decoded->fixedHumanName), $config));
            } else {
                $type->setFixedHumanName(FHIRHumanName::jsonUnserialize($decoded->fixedHumanName, $config));
            }
        }
        if (isset($decoded->fixedIdentifier) || property_exists($decoded, self::FIELD_FIXED_IDENTIFIER)) {
            if (is_array($decoded->fixedIdentifier)) {
                $type->setFixedIdentifier(FHIRIdentifier::jsonUnserialize(reset($decoded->fixedIdentifier), $config));
            } else {
                $type->setFixedIdentifier(FHIRIdentifier::jsonUnserialize($decoded->fixedIdentifier, $config));
            }
        }
        if (isset($decoded->fixedMoney) || property_exists($decoded, self::FIELD_FIXED_MONEY)) {
            if (is_array($decoded->fixedMoney)) {
                $type->setFixedMoney(FHIRMoney::jsonUnserialize(reset($decoded->fixedMoney), $config));
            } else {
                $type->setFixedMoney(FHIRMoney::jsonUnserialize($decoded->fixedMoney, $config));
            }
        }
        if (isset($decoded->fixedPeriod) || property_exists($decoded, self::FIELD_FIXED_PERIOD)) {
            if (is_array($decoded->fixedPeriod)) {
                $type->setFixedPeriod(FHIRPeriod::jsonUnserialize(reset($decoded->fixedPeriod), $config));
            } else {
                $type->setFixedPeriod(FHIRPeriod::jsonUnserialize($decoded->fixedPeriod, $config));
            }
        }
        if (isset($decoded->fixedQuantity) || property_exists($decoded, self::FIELD_FIXED_QUANTITY)) {
            if (is_array($decoded->fixedQuantity)) {
                $type->setFixedQuantity(FHIRQuantity::jsonUnserialize(reset($decoded->fixedQuantity), $config));
            } else {
                $type->setFixedQuantity(FHIRQuantity::jsonUnserialize($decoded->fixedQuantity, $config));
            }
        }
        if (isset($decoded->fixedRange) || property_exists($decoded, self::FIELD_FIXED_RANGE)) {
            if (is_array($decoded->fixedRange)) {
                $type->setFixedRange(FHIRRange::jsonUnserialize(reset($decoded->fixedRange), $config));
            } else {
                $type->setFixedRange(FHIRRange::jsonUnserialize($decoded->fixedRange, $config));
            }
        }
        if (isset($decoded->fixedRatio) || property_exists($decoded, self::FIELD_FIXED_RATIO)) {
            if (is_array($decoded->fixedRatio)) {
                $type->setFixedRatio(FHIRRatio::jsonUnserialize(reset($decoded->fixedRatio), $config));
            } else {
                $type->setFixedRatio(FHIRRatio::jsonUnserialize($decoded->fixedRatio, $config));
            }
        }
        if (isset($decoded->fixedReference) || property_exists($decoded, self::FIELD_FIXED_REFERENCE)) {
            if (is_array($decoded->fixedReference)) {
                $type->setFixedReference(FHIRReference::jsonUnserialize(reset($decoded->fixedReference), $config));
            } else {
                $type->setFixedReference(FHIRReference::jsonUnserialize($decoded->fixedReference, $config));
            }
        }
        if (isset($decoded->fixedSampledData) || property_exists($decoded, self::FIELD_FIXED_SAMPLED_DATA)) {
            if (is_array($decoded->fixedSampledData)) {
                $type->setFixedSampledData(FHIRSampledData::jsonUnserialize(reset($decoded->fixedSampledData), $config));
            } else {
                $type->setFixedSampledData(FHIRSampledData::jsonUnserialize($decoded->fixedSampledData, $config));
            }
        }
        if (isset($decoded->fixedSignature) || property_exists($decoded, self::FIELD_FIXED_SIGNATURE)) {
            if (is_array($decoded->fixedSignature)) {
                $type->setFixedSignature(FHIRSignature::jsonUnserialize(reset($decoded->fixedSignature), $config));
            } else {
                $type->setFixedSignature(FHIRSignature::jsonUnserialize($decoded->fixedSignature, $config));
            }
        }
        if (isset($decoded->fixedTiming) || property_exists($decoded, self::FIELD_FIXED_TIMING)) {
            if (is_array($decoded->fixedTiming)) {
                $type->setFixedTiming(FHIRTiming::jsonUnserialize(reset($decoded->fixedTiming), $config));
            } else {
                $type->setFixedTiming(FHIRTiming::jsonUnserialize($decoded->fixedTiming, $config));
            }
        }
        if (isset($decoded->fixedMeta) || property_exists($decoded, self::FIELD_FIXED_META)) {
            if (is_array($decoded->fixedMeta)) {
                $type->setFixedMeta(FHIRMeta::jsonUnserialize(reset($decoded->fixedMeta), $config));
            } else {
                $type->setFixedMeta(FHIRMeta::jsonUnserialize($decoded->fixedMeta, $config));
            }
        }
        if (isset($decoded->patternBase64Binary)
            || isset($decoded->_patternBase64Binary)
            || property_exists($decoded, self::FIELD_PATTERN_BASE_64BINARY)
            || property_exists($decoded, self::FIELD_PATTERN_BASE_64BINARY_EXT)) {
            $v = $decoded->_patternBase64Binary ?? new \stdClass();
            $v->value = $decoded->patternBase64Binary ?? null;
            $type->setPatternBase64Binary(FHIRBase64Binary::jsonUnserialize($v, $config));
        }
        if (isset($decoded->patternBoolean)
            || isset($decoded->_patternBoolean)
            || property_exists($decoded, self::FIELD_PATTERN_BOOLEAN)
            || property_exists($decoded, self::FIELD_PATTERN_BOOLEAN_EXT)) {
            $v = $decoded->_patternBoolean ?? new \stdClass();
            $v->value = $decoded->patternBoolean ?? null;
            $type->setPatternBoolean(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->patternCode)
            || isset($decoded->_patternCode)
            || property_exists($decoded, self::FIELD_PATTERN_CODE)
            || property_exists($decoded, self::FIELD_PATTERN_CODE_EXT)) {
            $v = $decoded->_patternCode ?? new \stdClass();
            $v->value = $decoded->patternCode ?? null;
            $type->setPatternCode(FHIRCode::jsonUnserialize($v, $config));
        }
        if (isset($decoded->patternDate)
            || isset($decoded->_patternDate)
            || property_exists($decoded, self::FIELD_PATTERN_DATE)
            || property_exists($decoded, self::FIELD_PATTERN_DATE_EXT)) {
            $v = $decoded->_patternDate ?? new \stdClass();
            $v->value = $decoded->patternDate ?? null;
            $type->setPatternDate(FHIRDate::jsonUnserialize($v, $config));
        }
        if (isset($decoded->patternDateTime)
            || isset($decoded->_patternDateTime)
            || property_exists($decoded, self::FIELD_PATTERN_DATE_TIME)
            || property_exists($decoded, self::FIELD_PATTERN_DATE_TIME_EXT)) {
            $v = $decoded->_patternDateTime ?? new \stdClass();
            $v->value = $decoded->patternDateTime ?? null;
            $type->setPatternDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->patternDecimal)
            || isset($decoded->_patternDecimal)
            || property_exists($decoded, self::FIELD_PATTERN_DECIMAL)
            || property_exists($decoded, self::FIELD_PATTERN_DECIMAL_EXT)) {
            $v = $decoded->_patternDecimal ?? new \stdClass();
            $v->value = $decoded->patternDecimal ?? null;
            $type->setPatternDecimal(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($decoded->patternId)
            || isset($decoded->_patternId)
            || property_exists($decoded, self::FIELD_PATTERN_ID)
            || property_exists($decoded, self::FIELD_PATTERN_ID_EXT)) {
            $v = $decoded->_patternId ?? new \stdClass();
            $v->value = $decoded->patternId ?? null;
            $type->setPatternId(FHIRId::jsonUnserialize($v, $config));
        }
        if (isset($decoded->patternInstant)
            || isset($decoded->_patternInstant)
            || property_exists($decoded, self::FIELD_PATTERN_INSTANT)
            || property_exists($decoded, self::FIELD_PATTERN_INSTANT_EXT)) {
            $v = $decoded->_patternInstant ?? new \stdClass();
            $v->value = $decoded->patternInstant ?? null;
            $type->setPatternInstant(FHIRInstant::jsonUnserialize($v, $config));
        }
        if (isset($decoded->patternInteger)
            || isset($decoded->_patternInteger)
            || property_exists($decoded, self::FIELD_PATTERN_INTEGER)
            || property_exists($decoded, self::FIELD_PATTERN_INTEGER_EXT)) {
            $v = $decoded->_patternInteger ?? new \stdClass();
            $v->value = $decoded->patternInteger ?? null;
            $type->setPatternInteger(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->patternMarkdown)
            || isset($decoded->_patternMarkdown)
            || property_exists($decoded, self::FIELD_PATTERN_MARKDOWN)
            || property_exists($decoded, self::FIELD_PATTERN_MARKDOWN_EXT)) {
            $v = $decoded->_patternMarkdown ?? new \stdClass();
            $v->value = $decoded->patternMarkdown ?? null;
            $type->setPatternMarkdown(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($decoded->patternOid)
            || isset($decoded->_patternOid)
            || property_exists($decoded, self::FIELD_PATTERN_OID)
            || property_exists($decoded, self::FIELD_PATTERN_OID_EXT)) {
            $v = $decoded->_patternOid ?? new \stdClass();
            $v->value = $decoded->patternOid ?? null;
            $type->setPatternOid(FHIROid::jsonUnserialize($v, $config));
        }
        if (isset($decoded->patternPositiveInt)
            || isset($decoded->_patternPositiveInt)
            || property_exists($decoded, self::FIELD_PATTERN_POSITIVE_INT)
            || property_exists($decoded, self::FIELD_PATTERN_POSITIVE_INT_EXT)) {
            $v = $decoded->_patternPositiveInt ?? new \stdClass();
            $v->value = $decoded->patternPositiveInt ?? null;
            $type->setPatternPositiveInt(FHIRPositiveInt::jsonUnserialize($v, $config));
        }
        if (isset($decoded->patternString)
            || isset($decoded->_patternString)
            || property_exists($decoded, self::FIELD_PATTERN_STRING)
            || property_exists($decoded, self::FIELD_PATTERN_STRING_EXT)) {
            $v = $decoded->_patternString ?? new \stdClass();
            $v->value = $decoded->patternString ?? null;
            $type->setPatternString(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->patternTime)
            || isset($decoded->_patternTime)
            || property_exists($decoded, self::FIELD_PATTERN_TIME)
            || property_exists($decoded, self::FIELD_PATTERN_TIME_EXT)) {
            $v = $decoded->_patternTime ?? new \stdClass();
            $v->value = $decoded->patternTime ?? null;
            $type->setPatternTime(FHIRTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->patternUnsignedInt)
            || isset($decoded->_patternUnsignedInt)
            || property_exists($decoded, self::FIELD_PATTERN_UNSIGNED_INT)
            || property_exists($decoded, self::FIELD_PATTERN_UNSIGNED_INT_EXT)) {
            $v = $decoded->_patternUnsignedInt ?? new \stdClass();
            $v->value = $decoded->patternUnsignedInt ?? null;
            $type->setPatternUnsignedInt(FHIRUnsignedInt::jsonUnserialize($v, $config));
        }
        if (isset($decoded->patternUri)
            || isset($decoded->_patternUri)
            || property_exists($decoded, self::FIELD_PATTERN_URI)
            || property_exists($decoded, self::FIELD_PATTERN_URI_EXT)) {
            $v = $decoded->_patternUri ?? new \stdClass();
            $v->value = $decoded->patternUri ?? null;
            $type->setPatternUri(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($decoded->patternAddress) || property_exists($decoded, self::FIELD_PATTERN_ADDRESS)) {
            if (is_array($decoded->patternAddress)) {
                $type->setPatternAddress(FHIRAddress::jsonUnserialize(reset($decoded->patternAddress), $config));
            } else {
                $type->setPatternAddress(FHIRAddress::jsonUnserialize($decoded->patternAddress, $config));
            }
        }
        if (isset($decoded->patternAge) || property_exists($decoded, self::FIELD_PATTERN_AGE)) {
            if (is_array($decoded->patternAge)) {
                $type->setPatternAge(FHIRAge::jsonUnserialize(reset($decoded->patternAge), $config));
            } else {
                $type->setPatternAge(FHIRAge::jsonUnserialize($decoded->patternAge, $config));
            }
        }
        if (isset($decoded->patternAnnotation) || property_exists($decoded, self::FIELD_PATTERN_ANNOTATION)) {
            if (is_array($decoded->patternAnnotation)) {
                $type->setPatternAnnotation(FHIRAnnotation::jsonUnserialize(reset($decoded->patternAnnotation), $config));
            } else {
                $type->setPatternAnnotation(FHIRAnnotation::jsonUnserialize($decoded->patternAnnotation, $config));
            }
        }
        if (isset($decoded->patternAttachment) || property_exists($decoded, self::FIELD_PATTERN_ATTACHMENT)) {
            if (is_array($decoded->patternAttachment)) {
                $type->setPatternAttachment(FHIRAttachment::jsonUnserialize(reset($decoded->patternAttachment), $config));
            } else {
                $type->setPatternAttachment(FHIRAttachment::jsonUnserialize($decoded->patternAttachment, $config));
            }
        }
        if (isset($decoded->patternCodeableConcept) || property_exists($decoded, self::FIELD_PATTERN_CODEABLE_CONCEPT)) {
            if (is_array($decoded->patternCodeableConcept)) {
                $type->setPatternCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($decoded->patternCodeableConcept), $config));
            } else {
                $type->setPatternCodeableConcept(FHIRCodeableConcept::jsonUnserialize($decoded->patternCodeableConcept, $config));
            }
        }
        if (isset($decoded->patternCoding) || property_exists($decoded, self::FIELD_PATTERN_CODING)) {
            if (is_array($decoded->patternCoding)) {
                $type->setPatternCoding(FHIRCoding::jsonUnserialize(reset($decoded->patternCoding), $config));
            } else {
                $type->setPatternCoding(FHIRCoding::jsonUnserialize($decoded->patternCoding, $config));
            }
        }
        if (isset($decoded->patternContactPoint) || property_exists($decoded, self::FIELD_PATTERN_CONTACT_POINT)) {
            if (is_array($decoded->patternContactPoint)) {
                $type->setPatternContactPoint(FHIRContactPoint::jsonUnserialize(reset($decoded->patternContactPoint), $config));
            } else {
                $type->setPatternContactPoint(FHIRContactPoint::jsonUnserialize($decoded->patternContactPoint, $config));
            }
        }
        if (isset($decoded->patternCount) || property_exists($decoded, self::FIELD_PATTERN_COUNT)) {
            if (is_array($decoded->patternCount)) {
                $type->setPatternCount(FHIRCount::jsonUnserialize(reset($decoded->patternCount), $config));
            } else {
                $type->setPatternCount(FHIRCount::jsonUnserialize($decoded->patternCount, $config));
            }
        }
        if (isset($decoded->patternDistance) || property_exists($decoded, self::FIELD_PATTERN_DISTANCE)) {
            if (is_array($decoded->patternDistance)) {
                $type->setPatternDistance(FHIRDistance::jsonUnserialize(reset($decoded->patternDistance), $config));
            } else {
                $type->setPatternDistance(FHIRDistance::jsonUnserialize($decoded->patternDistance, $config));
            }
        }
        if (isset($decoded->patternDuration) || property_exists($decoded, self::FIELD_PATTERN_DURATION)) {
            if (is_array($decoded->patternDuration)) {
                $type->setPatternDuration(FHIRDuration::jsonUnserialize(reset($decoded->patternDuration), $config));
            } else {
                $type->setPatternDuration(FHIRDuration::jsonUnserialize($decoded->patternDuration, $config));
            }
        }
        if (isset($decoded->patternHumanName) || property_exists($decoded, self::FIELD_PATTERN_HUMAN_NAME)) {
            if (is_array($decoded->patternHumanName)) {
                $type->setPatternHumanName(FHIRHumanName::jsonUnserialize(reset($decoded->patternHumanName), $config));
            } else {
                $type->setPatternHumanName(FHIRHumanName::jsonUnserialize($decoded->patternHumanName, $config));
            }
        }
        if (isset($decoded->patternIdentifier) || property_exists($decoded, self::FIELD_PATTERN_IDENTIFIER)) {
            if (is_array($decoded->patternIdentifier)) {
                $type->setPatternIdentifier(FHIRIdentifier::jsonUnserialize(reset($decoded->patternIdentifier), $config));
            } else {
                $type->setPatternIdentifier(FHIRIdentifier::jsonUnserialize($decoded->patternIdentifier, $config));
            }
        }
        if (isset($decoded->patternMoney) || property_exists($decoded, self::FIELD_PATTERN_MONEY)) {
            if (is_array($decoded->patternMoney)) {
                $type->setPatternMoney(FHIRMoney::jsonUnserialize(reset($decoded->patternMoney), $config));
            } else {
                $type->setPatternMoney(FHIRMoney::jsonUnserialize($decoded->patternMoney, $config));
            }
        }
        if (isset($decoded->patternPeriod) || property_exists($decoded, self::FIELD_PATTERN_PERIOD)) {
            if (is_array($decoded->patternPeriod)) {
                $type->setPatternPeriod(FHIRPeriod::jsonUnserialize(reset($decoded->patternPeriod), $config));
            } else {
                $type->setPatternPeriod(FHIRPeriod::jsonUnserialize($decoded->patternPeriod, $config));
            }
        }
        if (isset($decoded->patternQuantity) || property_exists($decoded, self::FIELD_PATTERN_QUANTITY)) {
            if (is_array($decoded->patternQuantity)) {
                $type->setPatternQuantity(FHIRQuantity::jsonUnserialize(reset($decoded->patternQuantity), $config));
            } else {
                $type->setPatternQuantity(FHIRQuantity::jsonUnserialize($decoded->patternQuantity, $config));
            }
        }
        if (isset($decoded->patternRange) || property_exists($decoded, self::FIELD_PATTERN_RANGE)) {
            if (is_array($decoded->patternRange)) {
                $type->setPatternRange(FHIRRange::jsonUnserialize(reset($decoded->patternRange), $config));
            } else {
                $type->setPatternRange(FHIRRange::jsonUnserialize($decoded->patternRange, $config));
            }
        }
        if (isset($decoded->patternRatio) || property_exists($decoded, self::FIELD_PATTERN_RATIO)) {
            if (is_array($decoded->patternRatio)) {
                $type->setPatternRatio(FHIRRatio::jsonUnserialize(reset($decoded->patternRatio), $config));
            } else {
                $type->setPatternRatio(FHIRRatio::jsonUnserialize($decoded->patternRatio, $config));
            }
        }
        if (isset($decoded->patternReference) || property_exists($decoded, self::FIELD_PATTERN_REFERENCE)) {
            if (is_array($decoded->patternReference)) {
                $type->setPatternReference(FHIRReference::jsonUnserialize(reset($decoded->patternReference), $config));
            } else {
                $type->setPatternReference(FHIRReference::jsonUnserialize($decoded->patternReference, $config));
            }
        }
        if (isset($decoded->patternSampledData) || property_exists($decoded, self::FIELD_PATTERN_SAMPLED_DATA)) {
            if (is_array($decoded->patternSampledData)) {
                $type->setPatternSampledData(FHIRSampledData::jsonUnserialize(reset($decoded->patternSampledData), $config));
            } else {
                $type->setPatternSampledData(FHIRSampledData::jsonUnserialize($decoded->patternSampledData, $config));
            }
        }
        if (isset($decoded->patternSignature) || property_exists($decoded, self::FIELD_PATTERN_SIGNATURE)) {
            if (is_array($decoded->patternSignature)) {
                $type->setPatternSignature(FHIRSignature::jsonUnserialize(reset($decoded->patternSignature), $config));
            } else {
                $type->setPatternSignature(FHIRSignature::jsonUnserialize($decoded->patternSignature, $config));
            }
        }
        if (isset($decoded->patternTiming) || property_exists($decoded, self::FIELD_PATTERN_TIMING)) {
            if (is_array($decoded->patternTiming)) {
                $type->setPatternTiming(FHIRTiming::jsonUnserialize(reset($decoded->patternTiming), $config));
            } else {
                $type->setPatternTiming(FHIRTiming::jsonUnserialize($decoded->patternTiming, $config));
            }
        }
        if (isset($decoded->patternMeta) || property_exists($decoded, self::FIELD_PATTERN_META)) {
            if (is_array($decoded->patternMeta)) {
                $type->setPatternMeta(FHIRMeta::jsonUnserialize(reset($decoded->patternMeta), $config));
            } else {
                $type->setPatternMeta(FHIRMeta::jsonUnserialize($decoded->patternMeta, $config));
            }
        }
        if (isset($decoded->example) || property_exists($decoded, self::FIELD_EXAMPLE)) {
            if (is_object($decoded->example)) {
                $vals = [$decoded->example];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_EXAMPLE, true);
            } else {
                $vals = $decoded->example;
            }
            foreach($vals as $v) {
                $type->addExample(FHIRElementDefinitionExample::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->minValueDate)
            || isset($decoded->_minValueDate)
            || property_exists($decoded, self::FIELD_MIN_VALUE_DATE)
            || property_exists($decoded, self::FIELD_MIN_VALUE_DATE_EXT)) {
            $v = $decoded->_minValueDate ?? new \stdClass();
            $v->value = $decoded->minValueDate ?? null;
            $type->setMinValueDate(FHIRDate::jsonUnserialize($v, $config));
        }
        if (isset($decoded->minValueDateTime)
            || isset($decoded->_minValueDateTime)
            || property_exists($decoded, self::FIELD_MIN_VALUE_DATE_TIME)
            || property_exists($decoded, self::FIELD_MIN_VALUE_DATE_TIME_EXT)) {
            $v = $decoded->_minValueDateTime ?? new \stdClass();
            $v->value = $decoded->minValueDateTime ?? null;
            $type->setMinValueDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->minValueInstant)
            || isset($decoded->_minValueInstant)
            || property_exists($decoded, self::FIELD_MIN_VALUE_INSTANT)
            || property_exists($decoded, self::FIELD_MIN_VALUE_INSTANT_EXT)) {
            $v = $decoded->_minValueInstant ?? new \stdClass();
            $v->value = $decoded->minValueInstant ?? null;
            $type->setMinValueInstant(FHIRInstant::jsonUnserialize($v, $config));
        }
        if (isset($decoded->minValueTime)
            || isset($decoded->_minValueTime)
            || property_exists($decoded, self::FIELD_MIN_VALUE_TIME)
            || property_exists($decoded, self::FIELD_MIN_VALUE_TIME_EXT)) {
            $v = $decoded->_minValueTime ?? new \stdClass();
            $v->value = $decoded->minValueTime ?? null;
            $type->setMinValueTime(FHIRTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->minValueDecimal)
            || isset($decoded->_minValueDecimal)
            || property_exists($decoded, self::FIELD_MIN_VALUE_DECIMAL)
            || property_exists($decoded, self::FIELD_MIN_VALUE_DECIMAL_EXT)) {
            $v = $decoded->_minValueDecimal ?? new \stdClass();
            $v->value = $decoded->minValueDecimal ?? null;
            $type->setMinValueDecimal(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($decoded->minValueInteger)
            || isset($decoded->_minValueInteger)
            || property_exists($decoded, self::FIELD_MIN_VALUE_INTEGER)
            || property_exists($decoded, self::FIELD_MIN_VALUE_INTEGER_EXT)) {
            $v = $decoded->_minValueInteger ?? new \stdClass();
            $v->value = $decoded->minValueInteger ?? null;
            $type->setMinValueInteger(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->minValuePositiveInt)
            || isset($decoded->_minValuePositiveInt)
            || property_exists($decoded, self::FIELD_MIN_VALUE_POSITIVE_INT)
            || property_exists($decoded, self::FIELD_MIN_VALUE_POSITIVE_INT_EXT)) {
            $v = $decoded->_minValuePositiveInt ?? new \stdClass();
            $v->value = $decoded->minValuePositiveInt ?? null;
            $type->setMinValuePositiveInt(FHIRPositiveInt::jsonUnserialize($v, $config));
        }
        if (isset($decoded->minValueUnsignedInt)
            || isset($decoded->_minValueUnsignedInt)
            || property_exists($decoded, self::FIELD_MIN_VALUE_UNSIGNED_INT)
            || property_exists($decoded, self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT)) {
            $v = $decoded->_minValueUnsignedInt ?? new \stdClass();
            $v->value = $decoded->minValueUnsignedInt ?? null;
            $type->setMinValueUnsignedInt(FHIRUnsignedInt::jsonUnserialize($v, $config));
        }
        if (isset($decoded->minValueQuantity) || property_exists($decoded, self::FIELD_MIN_VALUE_QUANTITY)) {
            if (is_array($decoded->minValueQuantity)) {
                $type->setMinValueQuantity(FHIRQuantity::jsonUnserialize(reset($decoded->minValueQuantity), $config));
            } else {
                $type->setMinValueQuantity(FHIRQuantity::jsonUnserialize($decoded->minValueQuantity, $config));
            }
        }
        if (isset($decoded->maxValueDate)
            || isset($decoded->_maxValueDate)
            || property_exists($decoded, self::FIELD_MAX_VALUE_DATE)
            || property_exists($decoded, self::FIELD_MAX_VALUE_DATE_EXT)) {
            $v = $decoded->_maxValueDate ?? new \stdClass();
            $v->value = $decoded->maxValueDate ?? null;
            $type->setMaxValueDate(FHIRDate::jsonUnserialize($v, $config));
        }
        if (isset($decoded->maxValueDateTime)
            || isset($decoded->_maxValueDateTime)
            || property_exists($decoded, self::FIELD_MAX_VALUE_DATE_TIME)
            || property_exists($decoded, self::FIELD_MAX_VALUE_DATE_TIME_EXT)) {
            $v = $decoded->_maxValueDateTime ?? new \stdClass();
            $v->value = $decoded->maxValueDateTime ?? null;
            $type->setMaxValueDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->maxValueInstant)
            || isset($decoded->_maxValueInstant)
            || property_exists($decoded, self::FIELD_MAX_VALUE_INSTANT)
            || property_exists($decoded, self::FIELD_MAX_VALUE_INSTANT_EXT)) {
            $v = $decoded->_maxValueInstant ?? new \stdClass();
            $v->value = $decoded->maxValueInstant ?? null;
            $type->setMaxValueInstant(FHIRInstant::jsonUnserialize($v, $config));
        }
        if (isset($decoded->maxValueTime)
            || isset($decoded->_maxValueTime)
            || property_exists($decoded, self::FIELD_MAX_VALUE_TIME)
            || property_exists($decoded, self::FIELD_MAX_VALUE_TIME_EXT)) {
            $v = $decoded->_maxValueTime ?? new \stdClass();
            $v->value = $decoded->maxValueTime ?? null;
            $type->setMaxValueTime(FHIRTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->maxValueDecimal)
            || isset($decoded->_maxValueDecimal)
            || property_exists($decoded, self::FIELD_MAX_VALUE_DECIMAL)
            || property_exists($decoded, self::FIELD_MAX_VALUE_DECIMAL_EXT)) {
            $v = $decoded->_maxValueDecimal ?? new \stdClass();
            $v->value = $decoded->maxValueDecimal ?? null;
            $type->setMaxValueDecimal(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($decoded->maxValueInteger)
            || isset($decoded->_maxValueInteger)
            || property_exists($decoded, self::FIELD_MAX_VALUE_INTEGER)
            || property_exists($decoded, self::FIELD_MAX_VALUE_INTEGER_EXT)) {
            $v = $decoded->_maxValueInteger ?? new \stdClass();
            $v->value = $decoded->maxValueInteger ?? null;
            $type->setMaxValueInteger(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->maxValuePositiveInt)
            || isset($decoded->_maxValuePositiveInt)
            || property_exists($decoded, self::FIELD_MAX_VALUE_POSITIVE_INT)
            || property_exists($decoded, self::FIELD_MAX_VALUE_POSITIVE_INT_EXT)) {
            $v = $decoded->_maxValuePositiveInt ?? new \stdClass();
            $v->value = $decoded->maxValuePositiveInt ?? null;
            $type->setMaxValuePositiveInt(FHIRPositiveInt::jsonUnserialize($v, $config));
        }
        if (isset($decoded->maxValueUnsignedInt)
            || isset($decoded->_maxValueUnsignedInt)
            || property_exists($decoded, self::FIELD_MAX_VALUE_UNSIGNED_INT)
            || property_exists($decoded, self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT)) {
            $v = $decoded->_maxValueUnsignedInt ?? new \stdClass();
            $v->value = $decoded->maxValueUnsignedInt ?? null;
            $type->setMaxValueUnsignedInt(FHIRUnsignedInt::jsonUnserialize($v, $config));
        }
        if (isset($decoded->maxValueQuantity) || property_exists($decoded, self::FIELD_MAX_VALUE_QUANTITY)) {
            if (is_array($decoded->maxValueQuantity)) {
                $type->setMaxValueQuantity(FHIRQuantity::jsonUnserialize(reset($decoded->maxValueQuantity), $config));
            } else {
                $type->setMaxValueQuantity(FHIRQuantity::jsonUnserialize($decoded->maxValueQuantity, $config));
            }
        }
        if (isset($decoded->maxLength)
            || isset($decoded->_maxLength)
            || property_exists($decoded, self::FIELD_MAX_LENGTH)
            || property_exists($decoded, self::FIELD_MAX_LENGTH_EXT)) {
            $v = $decoded->_maxLength ?? new \stdClass();
            $v->value = $decoded->maxLength ?? null;
            $type->setMaxLength(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->condition)
            || isset($decoded->_condition)
            || property_exists($decoded, self::FIELD_CONDITION)
            || property_exists($decoded, self::FIELD_CONDITION_EXT)) {
            $vals = (array)($decoded->condition ?? []);
            $exts = (array)($decoded->FIELD_CONDITION_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addCondition(FHIRId::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->constraint) || property_exists($decoded, self::FIELD_CONSTRAINT)) {
            if (is_object($decoded->constraint)) {
                $vals = [$decoded->constraint];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONSTRAINT, true);
            } else {
                $vals = $decoded->constraint;
            }
            foreach($vals as $v) {
                $type->addConstraint(FHIRElementDefinitionConstraint::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->mustSupport)
            || isset($decoded->_mustSupport)
            || property_exists($decoded, self::FIELD_MUST_SUPPORT)
            || property_exists($decoded, self::FIELD_MUST_SUPPORT_EXT)) {
            $v = $decoded->_mustSupport ?? new \stdClass();
            $v->value = $decoded->mustSupport ?? null;
            $type->setMustSupport(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->isModifier)
            || isset($decoded->_isModifier)
            || property_exists($decoded, self::FIELD_IS_MODIFIER)
            || property_exists($decoded, self::FIELD_IS_MODIFIER_EXT)) {
            $v = $decoded->_isModifier ?? new \stdClass();
            $v->value = $decoded->isModifier ?? null;
            $type->setIsModifier(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->isSummary)
            || isset($decoded->_isSummary)
            || property_exists($decoded, self::FIELD_IS_SUMMARY)
            || property_exists($decoded, self::FIELD_IS_SUMMARY_EXT)) {
            $v = $decoded->_isSummary ?? new \stdClass();
            $v->value = $decoded->isSummary ?? null;
            $type->setIsSummary(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->binding) || property_exists($decoded, self::FIELD_BINDING)) {
            if (is_array($decoded->binding)) {
                $type->setBinding(FHIRElementDefinitionBinding::jsonUnserialize(reset($decoded->binding), $config));
            } else {
                $type->setBinding(FHIRElementDefinitionBinding::jsonUnserialize($decoded->binding, $config));
            }
        }
        if (isset($decoded->mapping) || property_exists($decoded, self::FIELD_MAPPING)) {
            if (is_object($decoded->mapping)) {
                $vals = [$decoded->mapping];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MAPPING, true);
            } else {
                $vals = $decoded->mapping;
            }
            foreach($vals as $v) {
                $type->addMapping(FHIRElementDefinitionMapping::jsonUnserialize($v, $config));
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
            if ($this->path->_nonValueFieldDefined()) {
                $ext = $this->path->jsonSerialize();
                unset($ext->value);
                $out->_path = $ext;
            }
        }
        if (isset($this->representation) && [] !== $this->representation) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->representation as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->representation = $vals;
            }
            if ($hasExts) {
                $out->_representation = $exts;
            }
        }
        if (isset($this->sliceName)) {
            if (null !== ($val = $this->sliceName->getValue())) {
                $out->sliceName = $val;
            }
            if ($this->sliceName->_nonValueFieldDefined()) {
                $ext = $this->sliceName->jsonSerialize();
                unset($ext->value);
                $out->_sliceName = $ext;
            }
        }
        if (isset($this->label)) {
            if (null !== ($val = $this->label->getValue())) {
                $out->label = $val;
            }
            if ($this->label->_nonValueFieldDefined()) {
                $ext = $this->label->jsonSerialize();
                unset($ext->value);
                $out->_label = $ext;
            }
        }
        if (isset($this->code) && [] !== $this->code) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CODE) && 1 === count($this->code)) {
                $out->code = $this->code[0];
            } else {
                $out->code = $this->code;
            }
        }
        if (isset($this->slicing)) {
            $out->slicing = $this->slicing;
        }
        if (isset($this->short)) {
            if (null !== ($val = $this->short->getValue())) {
                $out->short = $val;
            }
            if ($this->short->_nonValueFieldDefined()) {
                $ext = $this->short->jsonSerialize();
                unset($ext->value);
                $out->_short = $ext;
            }
        }
        if (isset($this->definition)) {
            if (null !== ($val = $this->definition->getValue())) {
                $out->definition = $val;
            }
            if ($this->definition->_nonValueFieldDefined()) {
                $ext = $this->definition->jsonSerialize();
                unset($ext->value);
                $out->_definition = $ext;
            }
        }
        if (isset($this->comment)) {
            if (null !== ($val = $this->comment->getValue())) {
                $out->comment = $val;
            }
            if ($this->comment->_nonValueFieldDefined()) {
                $ext = $this->comment->jsonSerialize();
                unset($ext->value);
                $out->_comment = $ext;
            }
        }
        if (isset($this->requirements)) {
            if (null !== ($val = $this->requirements->getValue())) {
                $out->requirements = $val;
            }
            if ($this->requirements->_nonValueFieldDefined()) {
                $ext = $this->requirements->jsonSerialize();
                unset($ext->value);
                $out->_requirements = $ext;
            }
        }
        if (isset($this->alias) && [] !== $this->alias) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->alias as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->alias = $vals;
            }
            if ($hasExts) {
                $out->_alias = $exts;
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
        if (isset($this->base)) {
            $out->base = $this->base;
        }
        if (isset($this->contentReference)) {
            if (null !== ($val = $this->contentReference->getValue())) {
                $out->contentReference = $val;
            }
            if ($this->contentReference->_nonValueFieldDefined()) {
                $ext = $this->contentReference->jsonSerialize();
                unset($ext->value);
                $out->_contentReference = $ext;
            }
        }
        if (isset($this->type) && [] !== $this->type) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_TYPE) && 1 === count($this->type)) {
                $out->type = $this->type[0];
            } else {
                $out->type = $this->type;
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
            if ($this->meaningWhenMissing->_nonValueFieldDefined()) {
                $ext = $this->meaningWhenMissing->jsonSerialize();
                unset($ext->value);
                $out->_meaningWhenMissing = $ext;
            }
        }
        if (isset($this->orderMeaning)) {
            if (null !== ($val = $this->orderMeaning->getValue())) {
                $out->orderMeaning = $val;
            }
            if ($this->orderMeaning->_nonValueFieldDefined()) {
                $ext = $this->orderMeaning->jsonSerialize();
                unset($ext->value);
                $out->_orderMeaning = $ext;
            }
        }
        if (isset($this->fixedBase64Binary)) {
            if (null !== ($val = $this->fixedBase64Binary->getValue())) {
                $out->fixedBase64Binary = $val;
            }
            if ($this->fixedBase64Binary->_nonValueFieldDefined()) {
                $ext = $this->fixedBase64Binary->jsonSerialize();
                unset($ext->value);
                $out->_fixedBase64Binary = $ext;
            }
        }
        if (isset($this->fixedBoolean)) {
            if (null !== ($val = $this->fixedBoolean->getValue())) {
                $out->fixedBoolean = $val;
            }
            if ($this->fixedBoolean->_nonValueFieldDefined()) {
                $ext = $this->fixedBoolean->jsonSerialize();
                unset($ext->value);
                $out->_fixedBoolean = $ext;
            }
        }
        if (isset($this->fixedCode)) {
            if (null !== ($val = $this->fixedCode->getValue())) {
                $out->fixedCode = $val;
            }
            if ($this->fixedCode->_nonValueFieldDefined()) {
                $ext = $this->fixedCode->jsonSerialize();
                unset($ext->value);
                $out->_fixedCode = $ext;
            }
        }
        if (isset($this->fixedDate)) {
            if (null !== ($val = $this->fixedDate->getValue())) {
                $out->fixedDate = $val;
            }
            if ($this->fixedDate->_nonValueFieldDefined()) {
                $ext = $this->fixedDate->jsonSerialize();
                unset($ext->value);
                $out->_fixedDate = $ext;
            }
        }
        if (isset($this->fixedDateTime)) {
            if (null !== ($val = $this->fixedDateTime->getValue())) {
                $out->fixedDateTime = $val;
            }
            if ($this->fixedDateTime->_nonValueFieldDefined()) {
                $ext = $this->fixedDateTime->jsonSerialize();
                unset($ext->value);
                $out->_fixedDateTime = $ext;
            }
        }
        if (isset($this->fixedDecimal)) {
            if (null !== ($val = $this->fixedDecimal->getValue())) {
                $out->fixedDecimal = $val;
            }
            if ($this->fixedDecimal->_nonValueFieldDefined()) {
                $ext = $this->fixedDecimal->jsonSerialize();
                unset($ext->value);
                $out->_fixedDecimal = $ext;
            }
        }
        if (isset($this->fixedId)) {
            if (null !== ($val = $this->fixedId->getValue())) {
                $out->fixedId = $val;
            }
            if ($this->fixedId->_nonValueFieldDefined()) {
                $ext = $this->fixedId->jsonSerialize();
                unset($ext->value);
                $out->_fixedId = $ext;
            }
        }
        if (isset($this->fixedInstant)) {
            if (null !== ($val = $this->fixedInstant->getValue())) {
                $out->fixedInstant = $val;
            }
            if ($this->fixedInstant->_nonValueFieldDefined()) {
                $ext = $this->fixedInstant->jsonSerialize();
                unset($ext->value);
                $out->_fixedInstant = $ext;
            }
        }
        if (isset($this->fixedInteger)) {
            if (null !== ($val = $this->fixedInteger->getValue())) {
                $out->fixedInteger = $val;
            }
            if ($this->fixedInteger->_nonValueFieldDefined()) {
                $ext = $this->fixedInteger->jsonSerialize();
                unset($ext->value);
                $out->_fixedInteger = $ext;
            }
        }
        if (isset($this->fixedMarkdown)) {
            if (null !== ($val = $this->fixedMarkdown->getValue())) {
                $out->fixedMarkdown = $val;
            }
            if ($this->fixedMarkdown->_nonValueFieldDefined()) {
                $ext = $this->fixedMarkdown->jsonSerialize();
                unset($ext->value);
                $out->_fixedMarkdown = $ext;
            }
        }
        if (isset($this->fixedOid)) {
            if (null !== ($val = $this->fixedOid->getValue())) {
                $out->fixedOid = $val;
            }
            if ($this->fixedOid->_nonValueFieldDefined()) {
                $ext = $this->fixedOid->jsonSerialize();
                unset($ext->value);
                $out->_fixedOid = $ext;
            }
        }
        if (isset($this->fixedPositiveInt)) {
            if (null !== ($val = $this->fixedPositiveInt->getValue())) {
                $out->fixedPositiveInt = $val;
            }
            if ($this->fixedPositiveInt->_nonValueFieldDefined()) {
                $ext = $this->fixedPositiveInt->jsonSerialize();
                unset($ext->value);
                $out->_fixedPositiveInt = $ext;
            }
        }
        if (isset($this->fixedString)) {
            if (null !== ($val = $this->fixedString->getValue())) {
                $out->fixedString = $val;
            }
            if ($this->fixedString->_nonValueFieldDefined()) {
                $ext = $this->fixedString->jsonSerialize();
                unset($ext->value);
                $out->_fixedString = $ext;
            }
        }
        if (isset($this->fixedTime)) {
            if (null !== ($val = $this->fixedTime->getValue())) {
                $out->fixedTime = $val;
            }
            if ($this->fixedTime->_nonValueFieldDefined()) {
                $ext = $this->fixedTime->jsonSerialize();
                unset($ext->value);
                $out->_fixedTime = $ext;
            }
        }
        if (isset($this->fixedUnsignedInt)) {
            if (null !== ($val = $this->fixedUnsignedInt->getValue())) {
                $out->fixedUnsignedInt = $val;
            }
            if ($this->fixedUnsignedInt->_nonValueFieldDefined()) {
                $ext = $this->fixedUnsignedInt->jsonSerialize();
                unset($ext->value);
                $out->_fixedUnsignedInt = $ext;
            }
        }
        if (isset($this->fixedUri)) {
            if (null !== ($val = $this->fixedUri->getValue())) {
                $out->fixedUri = $val;
            }
            if ($this->fixedUri->_nonValueFieldDefined()) {
                $ext = $this->fixedUri->jsonSerialize();
                unset($ext->value);
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
            if ($this->patternBase64Binary->_nonValueFieldDefined()) {
                $ext = $this->patternBase64Binary->jsonSerialize();
                unset($ext->value);
                $out->_patternBase64Binary = $ext;
            }
        }
        if (isset($this->patternBoolean)) {
            if (null !== ($val = $this->patternBoolean->getValue())) {
                $out->patternBoolean = $val;
            }
            if ($this->patternBoolean->_nonValueFieldDefined()) {
                $ext = $this->patternBoolean->jsonSerialize();
                unset($ext->value);
                $out->_patternBoolean = $ext;
            }
        }
        if (isset($this->patternCode)) {
            if (null !== ($val = $this->patternCode->getValue())) {
                $out->patternCode = $val;
            }
            if ($this->patternCode->_nonValueFieldDefined()) {
                $ext = $this->patternCode->jsonSerialize();
                unset($ext->value);
                $out->_patternCode = $ext;
            }
        }
        if (isset($this->patternDate)) {
            if (null !== ($val = $this->patternDate->getValue())) {
                $out->patternDate = $val;
            }
            if ($this->patternDate->_nonValueFieldDefined()) {
                $ext = $this->patternDate->jsonSerialize();
                unset($ext->value);
                $out->_patternDate = $ext;
            }
        }
        if (isset($this->patternDateTime)) {
            if (null !== ($val = $this->patternDateTime->getValue())) {
                $out->patternDateTime = $val;
            }
            if ($this->patternDateTime->_nonValueFieldDefined()) {
                $ext = $this->patternDateTime->jsonSerialize();
                unset($ext->value);
                $out->_patternDateTime = $ext;
            }
        }
        if (isset($this->patternDecimal)) {
            if (null !== ($val = $this->patternDecimal->getValue())) {
                $out->patternDecimal = $val;
            }
            if ($this->patternDecimal->_nonValueFieldDefined()) {
                $ext = $this->patternDecimal->jsonSerialize();
                unset($ext->value);
                $out->_patternDecimal = $ext;
            }
        }
        if (isset($this->patternId)) {
            if (null !== ($val = $this->patternId->getValue())) {
                $out->patternId = $val;
            }
            if ($this->patternId->_nonValueFieldDefined()) {
                $ext = $this->patternId->jsonSerialize();
                unset($ext->value);
                $out->_patternId = $ext;
            }
        }
        if (isset($this->patternInstant)) {
            if (null !== ($val = $this->patternInstant->getValue())) {
                $out->patternInstant = $val;
            }
            if ($this->patternInstant->_nonValueFieldDefined()) {
                $ext = $this->patternInstant->jsonSerialize();
                unset($ext->value);
                $out->_patternInstant = $ext;
            }
        }
        if (isset($this->patternInteger)) {
            if (null !== ($val = $this->patternInteger->getValue())) {
                $out->patternInteger = $val;
            }
            if ($this->patternInteger->_nonValueFieldDefined()) {
                $ext = $this->patternInteger->jsonSerialize();
                unset($ext->value);
                $out->_patternInteger = $ext;
            }
        }
        if (isset($this->patternMarkdown)) {
            if (null !== ($val = $this->patternMarkdown->getValue())) {
                $out->patternMarkdown = $val;
            }
            if ($this->patternMarkdown->_nonValueFieldDefined()) {
                $ext = $this->patternMarkdown->jsonSerialize();
                unset($ext->value);
                $out->_patternMarkdown = $ext;
            }
        }
        if (isset($this->patternOid)) {
            if (null !== ($val = $this->patternOid->getValue())) {
                $out->patternOid = $val;
            }
            if ($this->patternOid->_nonValueFieldDefined()) {
                $ext = $this->patternOid->jsonSerialize();
                unset($ext->value);
                $out->_patternOid = $ext;
            }
        }
        if (isset($this->patternPositiveInt)) {
            if (null !== ($val = $this->patternPositiveInt->getValue())) {
                $out->patternPositiveInt = $val;
            }
            if ($this->patternPositiveInt->_nonValueFieldDefined()) {
                $ext = $this->patternPositiveInt->jsonSerialize();
                unset($ext->value);
                $out->_patternPositiveInt = $ext;
            }
        }
        if (isset($this->patternString)) {
            if (null !== ($val = $this->patternString->getValue())) {
                $out->patternString = $val;
            }
            if ($this->patternString->_nonValueFieldDefined()) {
                $ext = $this->patternString->jsonSerialize();
                unset($ext->value);
                $out->_patternString = $ext;
            }
        }
        if (isset($this->patternTime)) {
            if (null !== ($val = $this->patternTime->getValue())) {
                $out->patternTime = $val;
            }
            if ($this->patternTime->_nonValueFieldDefined()) {
                $ext = $this->patternTime->jsonSerialize();
                unset($ext->value);
                $out->_patternTime = $ext;
            }
        }
        if (isset($this->patternUnsignedInt)) {
            if (null !== ($val = $this->patternUnsignedInt->getValue())) {
                $out->patternUnsignedInt = $val;
            }
            if ($this->patternUnsignedInt->_nonValueFieldDefined()) {
                $ext = $this->patternUnsignedInt->jsonSerialize();
                unset($ext->value);
                $out->_patternUnsignedInt = $ext;
            }
        }
        if (isset($this->patternUri)) {
            if (null !== ($val = $this->patternUri->getValue())) {
                $out->patternUri = $val;
            }
            if ($this->patternUri->_nonValueFieldDefined()) {
                $ext = $this->patternUri->jsonSerialize();
                unset($ext->value);
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
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_EXAMPLE) && 1 === count($this->example)) {
                $out->example = $this->example[0];
            } else {
                $out->example = $this->example;
            }
        }
        if (isset($this->minValueDate)) {
            if (null !== ($val = $this->minValueDate->getValue())) {
                $out->minValueDate = $val;
            }
            if ($this->minValueDate->_nonValueFieldDefined()) {
                $ext = $this->minValueDate->jsonSerialize();
                unset($ext->value);
                $out->_minValueDate = $ext;
            }
        }
        if (isset($this->minValueDateTime)) {
            if (null !== ($val = $this->minValueDateTime->getValue())) {
                $out->minValueDateTime = $val;
            }
            if ($this->minValueDateTime->_nonValueFieldDefined()) {
                $ext = $this->minValueDateTime->jsonSerialize();
                unset($ext->value);
                $out->_minValueDateTime = $ext;
            }
        }
        if (isset($this->minValueInstant)) {
            if (null !== ($val = $this->minValueInstant->getValue())) {
                $out->minValueInstant = $val;
            }
            if ($this->minValueInstant->_nonValueFieldDefined()) {
                $ext = $this->minValueInstant->jsonSerialize();
                unset($ext->value);
                $out->_minValueInstant = $ext;
            }
        }
        if (isset($this->minValueTime)) {
            if (null !== ($val = $this->minValueTime->getValue())) {
                $out->minValueTime = $val;
            }
            if ($this->minValueTime->_nonValueFieldDefined()) {
                $ext = $this->minValueTime->jsonSerialize();
                unset($ext->value);
                $out->_minValueTime = $ext;
            }
        }
        if (isset($this->minValueDecimal)) {
            if (null !== ($val = $this->minValueDecimal->getValue())) {
                $out->minValueDecimal = $val;
            }
            if ($this->minValueDecimal->_nonValueFieldDefined()) {
                $ext = $this->minValueDecimal->jsonSerialize();
                unset($ext->value);
                $out->_minValueDecimal = $ext;
            }
        }
        if (isset($this->minValueInteger)) {
            if (null !== ($val = $this->minValueInteger->getValue())) {
                $out->minValueInteger = $val;
            }
            if ($this->minValueInteger->_nonValueFieldDefined()) {
                $ext = $this->minValueInteger->jsonSerialize();
                unset($ext->value);
                $out->_minValueInteger = $ext;
            }
        }
        if (isset($this->minValuePositiveInt)) {
            if (null !== ($val = $this->minValuePositiveInt->getValue())) {
                $out->minValuePositiveInt = $val;
            }
            if ($this->minValuePositiveInt->_nonValueFieldDefined()) {
                $ext = $this->minValuePositiveInt->jsonSerialize();
                unset($ext->value);
                $out->_minValuePositiveInt = $ext;
            }
        }
        if (isset($this->minValueUnsignedInt)) {
            if (null !== ($val = $this->minValueUnsignedInt->getValue())) {
                $out->minValueUnsignedInt = $val;
            }
            if ($this->minValueUnsignedInt->_nonValueFieldDefined()) {
                $ext = $this->minValueUnsignedInt->jsonSerialize();
                unset($ext->value);
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
            if ($this->maxValueDate->_nonValueFieldDefined()) {
                $ext = $this->maxValueDate->jsonSerialize();
                unset($ext->value);
                $out->_maxValueDate = $ext;
            }
        }
        if (isset($this->maxValueDateTime)) {
            if (null !== ($val = $this->maxValueDateTime->getValue())) {
                $out->maxValueDateTime = $val;
            }
            if ($this->maxValueDateTime->_nonValueFieldDefined()) {
                $ext = $this->maxValueDateTime->jsonSerialize();
                unset($ext->value);
                $out->_maxValueDateTime = $ext;
            }
        }
        if (isset($this->maxValueInstant)) {
            if (null !== ($val = $this->maxValueInstant->getValue())) {
                $out->maxValueInstant = $val;
            }
            if ($this->maxValueInstant->_nonValueFieldDefined()) {
                $ext = $this->maxValueInstant->jsonSerialize();
                unset($ext->value);
                $out->_maxValueInstant = $ext;
            }
        }
        if (isset($this->maxValueTime)) {
            if (null !== ($val = $this->maxValueTime->getValue())) {
                $out->maxValueTime = $val;
            }
            if ($this->maxValueTime->_nonValueFieldDefined()) {
                $ext = $this->maxValueTime->jsonSerialize();
                unset($ext->value);
                $out->_maxValueTime = $ext;
            }
        }
        if (isset($this->maxValueDecimal)) {
            if (null !== ($val = $this->maxValueDecimal->getValue())) {
                $out->maxValueDecimal = $val;
            }
            if ($this->maxValueDecimal->_nonValueFieldDefined()) {
                $ext = $this->maxValueDecimal->jsonSerialize();
                unset($ext->value);
                $out->_maxValueDecimal = $ext;
            }
        }
        if (isset($this->maxValueInteger)) {
            if (null !== ($val = $this->maxValueInteger->getValue())) {
                $out->maxValueInteger = $val;
            }
            if ($this->maxValueInteger->_nonValueFieldDefined()) {
                $ext = $this->maxValueInteger->jsonSerialize();
                unset($ext->value);
                $out->_maxValueInteger = $ext;
            }
        }
        if (isset($this->maxValuePositiveInt)) {
            if (null !== ($val = $this->maxValuePositiveInt->getValue())) {
                $out->maxValuePositiveInt = $val;
            }
            if ($this->maxValuePositiveInt->_nonValueFieldDefined()) {
                $ext = $this->maxValuePositiveInt->jsonSerialize();
                unset($ext->value);
                $out->_maxValuePositiveInt = $ext;
            }
        }
        if (isset($this->maxValueUnsignedInt)) {
            if (null !== ($val = $this->maxValueUnsignedInt->getValue())) {
                $out->maxValueUnsignedInt = $val;
            }
            if ($this->maxValueUnsignedInt->_nonValueFieldDefined()) {
                $ext = $this->maxValueUnsignedInt->jsonSerialize();
                unset($ext->value);
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
            if ($this->maxLength->_nonValueFieldDefined()) {
                $ext = $this->maxLength->jsonSerialize();
                unset($ext->value);
                $out->_maxLength = $ext;
            }
        }
        if (isset($this->condition) && [] !== $this->condition) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->condition as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->condition = $vals;
            }
            if ($hasExts) {
                $out->_condition = $exts;
            }
        }
        if (isset($this->constraint) && [] !== $this->constraint) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONSTRAINT) && 1 === count($this->constraint)) {
                $out->constraint = $this->constraint[0];
            } else {
                $out->constraint = $this->constraint;
            }
        }
        if (isset($this->mustSupport)) {
            if (null !== ($val = $this->mustSupport->getValue())) {
                $out->mustSupport = $val;
            }
            if ($this->mustSupport->_nonValueFieldDefined()) {
                $ext = $this->mustSupport->jsonSerialize();
                unset($ext->value);
                $out->_mustSupport = $ext;
            }
        }
        if (isset($this->isModifier)) {
            if (null !== ($val = $this->isModifier->getValue())) {
                $out->isModifier = $val;
            }
            if ($this->isModifier->_nonValueFieldDefined()) {
                $ext = $this->isModifier->jsonSerialize();
                unset($ext->value);
                $out->_isModifier = $ext;
            }
        }
        if (isset($this->isSummary)) {
            if (null !== ($val = $this->isSummary->getValue())) {
                $out->isSummary = $val;
            }
            if ($this->isSummary->_nonValueFieldDefined()) {
                $ext = $this->isSummary->jsonSerialize();
                unset($ext->value);
                $out->_isSummary = $ext;
            }
        }
        if (isset($this->binding)) {
            $out->binding = $this->binding;
        }
        if (isset($this->mapping) && [] !== $this->mapping) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MAPPING) && 1 === count($this->mapping)) {
                $out->mapping = $this->mapping[0];
            } else {
                $out->mapping = $this->mapping;
            }
        }
        return $out;
    }
}