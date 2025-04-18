<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition;

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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdministrativeGender;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationRangeCategory;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAdministrativeGenderEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRObservationRangeCategoryEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Set of definitional characteristics for a kind of observation or measurement
 * produced or consumed by an orderable health care service.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRObservationDefinitionQualifiedValue extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_VALUE;

    /* class_default.php:56 */
    public const FIELD_CONTEXT = 'context';
    public const FIELD_APPLIES_TO = 'appliesTo';
    public const FIELD_GENDER = 'gender';
    public const FIELD_GENDER_EXT = '_gender';
    public const FIELD_AGE = 'age';
    public const FIELD_GESTATIONAL_AGE = 'gestationalAge';
    public const FIELD_CONDITION = 'condition';
    public const FIELD_CONDITION_EXT = '_condition';
    public const FIELD_RANGE_CATEGORY = 'rangeCategory';
    public const FIELD_RANGE_CATEGORY_EXT = '_rangeCategory';
    public const FIELD_RANGE = 'range';
    public const FIELD_VALID_CODED_VALUE_SET = 'validCodedValueSet';
    public const FIELD_VALID_CODED_VALUE_SET_EXT = '_validCodedValueSet';
    public const FIELD_NORMAL_CODED_VALUE_SET = 'normalCodedValueSet';
    public const FIELD_NORMAL_CODED_VALUE_SET_EXT = '_normalCodedValueSet';
    public const FIELD_ABNORMAL_CODED_VALUE_SET = 'abnormalCodedValueSet';
    public const FIELD_ABNORMAL_CODED_VALUE_SET_EXT = '_abnormalCodedValueSet';
    public const FIELD_CRITICAL_CODED_VALUE_SET = 'criticalCodedValueSet';
    public const FIELD_CRITICAL_CODED_VALUE_SET_EXT = '_criticalCodedValueSet';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_GENDER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CONDITION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_RANGE_CATEGORY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALID_CODED_VALUE_SET => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NORMAL_CODED_VALUE_SET => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ABNORMAL_CODED_VALUE_SET => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CRITICAL_CODED_VALUE_SET => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A concept defining the context for this set of qualified values.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $context;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target population this set of qualified values applies to.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $appliesTo;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The gender this set of qualified values applies to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdministrativeGender 
     */
    #[FHIRAdministrativeGender]
    protected FHIRAdministrativeGender $gender;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age range this set of qualified values applies to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange 
     */
    #[FHIRRange]
    protected FHIRRange $age;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The gestational age this set of qualified values applies to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange 
     */
    #[FHIRRange]
    protected FHIRRange $gestationalAge;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text based condition for which the the set of qualified values is valid.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $condition;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The category of range of values for continuous or ordinal observations that
     * match the criteria of this set of qualified values.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationRangeCategory 
     */
    #[FHIRObservationRangeCategory]
    protected FHIRObservationRangeCategory $rangeCategory;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The range of values defined for continuous or ordinal observations that match
     * the criteria of this set of qualified values.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange 
     */
    #[FHIRRange]
    protected FHIRRange $range;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The set of valid coded results for qualitative observations that match the
     * criteria of this set of qualified values.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical 
     */
    #[FHIRCanonical]
    protected FHIRCanonical $validCodedValueSet;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The set of normal coded results for qualitative observations that match the
     * criteria of this set of qualified values.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical 
     */
    #[FHIRCanonical]
    protected FHIRCanonical $normalCodedValueSet;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The set of abnormal coded results for qualitative observations that match the
     * criteria of this set of qualified values.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical 
     */
    #[FHIRCanonical]
    protected FHIRCanonical $abnormalCodedValueSet;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The set of critical coded results for qualitative observations that match the
     * criteria of this set of qualified values.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical 
     */
    #[FHIRCanonical]
    protected FHIRCanonical $criticalCodedValueSet;

    /* constructor.php:61 */
    /**
     * FHIRObservationDefinitionQualifiedValue Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $context
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $appliesTo
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAdministrativeGenderEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdministrativeGender $gender
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $age
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $gestationalAge
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $condition
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRObservationRangeCategoryEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationRangeCategory $rangeCategory
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $range
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $validCodedValueSet
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $normalCodedValueSet
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $abnormalCodedValueSet
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $criticalCodedValueSet
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $context = null,
                                null|iterable $appliesTo = null,
                                null|string|FHIRAdministrativeGenderEnum|FHIRAdministrativeGender $gender = null,
                                null|FHIRRange $age = null,
                                null|FHIRRange $gestationalAge = null,
                                null|string|FHIRStringPrimitive|FHIRString $condition = null,
                                null|string|FHIRObservationRangeCategoryEnum|FHIRObservationRangeCategory $rangeCategory = null,
                                null|FHIRRange $range = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $validCodedValueSet = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $normalCodedValueSet = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $abnormalCodedValueSet = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $criticalCodedValueSet = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $context) {
            $this->setContext($context);
        }
        if (null !== $appliesTo) {
            $this->setAppliesTo(...$appliesTo);
        }
        if (null !== $gender) {
            $this->setGender($gender);
        }
        if (null !== $age) {
            $this->setAge($age);
        }
        if (null !== $gestationalAge) {
            $this->setGestationalAge($gestationalAge);
        }
        if (null !== $condition) {
            $this->setCondition($condition);
        }
        if (null !== $rangeCategory) {
            $this->setRangeCategory($rangeCategory);
        }
        if (null !== $range) {
            $this->setRange($range);
        }
        if (null !== $validCodedValueSet) {
            $this->setValidCodedValueSet($validCodedValueSet);
        }
        if (null !== $normalCodedValueSet) {
            $this->setNormalCodedValueSet($normalCodedValueSet);
        }
        if (null !== $abnormalCodedValueSet) {
            $this->setAbnormalCodedValueSet($abnormalCodedValueSet);
        }
        if (null !== $criticalCodedValueSet) {
            $this->setCriticalCodedValueSet($criticalCodedValueSet);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A concept defining the context for this set of qualified values.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getContext(): null|FHIRCodeableConcept
    {
        return $this->context ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A concept defining the context for this set of qualified values.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $context
     * @return static
     */
    public function setContext(null|FHIRCodeableConcept $context): self
    {
        if (null === $context) {
            unset($this->context);
            return $this;
        }
        $this->context = $context;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target population this set of qualified values applies to.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getAppliesTo(): array
    {
        return $this->appliesTo ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getAppliesToIterator(): iterable
    {
        if (!isset($this->appliesTo)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->appliesTo);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target population this set of qualified values applies to.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $appliesTo
     * @return static
     */
    public function addAppliesTo(FHIRCodeableConcept $appliesTo): self
    {
        if (!isset($this->appliesTo)) {
            $this->appliesTo = [];
        }
        $this->appliesTo[] = $appliesTo;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target population this set of qualified values applies to.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$appliesTo
     * @return static
     */
    public function setAppliesTo(FHIRCodeableConcept ...$appliesTo): self
    {
        if ([] === $appliesTo) {
            unset($this->appliesTo);
            return $this;
        }
        $this->appliesTo = $appliesTo;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The gender this set of qualified values applies to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdministrativeGender
     */
    public function getGender(): null|FHIRAdministrativeGender
    {
        return $this->gender ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The gender this set of qualified values applies to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAdministrativeGenderEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdministrativeGender $gender
     * @return static
     */
    public function setGender(null|string|FHIRAdministrativeGenderEnum|FHIRAdministrativeGender $gender): self
    {
        if (null === $gender) {
            unset($this->gender);
            return $this;
        }
        if (!($gender instanceof FHIRAdministrativeGender)) {
            $gender = new FHIRAdministrativeGender(value: $gender);
        }
        $this->gender = $gender;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age range this set of qualified values applies to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getAge(): null|FHIRRange
    {
        return $this->age ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age range this set of qualified values applies to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $age
     * @return static
     */
    public function setAge(null|FHIRRange $age): self
    {
        if (null === $age) {
            unset($this->age);
            return $this;
        }
        $this->age = $age;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The gestational age this set of qualified values applies to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getGestationalAge(): null|FHIRRange
    {
        return $this->gestationalAge ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The gestational age this set of qualified values applies to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $gestationalAge
     * @return static
     */
    public function setGestationalAge(null|FHIRRange $gestationalAge): self
    {
        if (null === $gestationalAge) {
            unset($this->gestationalAge);
            return $this;
        }
        $this->gestationalAge = $gestationalAge;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text based condition for which the the set of qualified values is valid.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getCondition(): null|FHIRString
    {
        return $this->condition ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text based condition for which the the set of qualified values is valid.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $condition
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The category of range of values for continuous or ordinal observations that
     * match the criteria of this set of qualified values.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationRangeCategory
     */
    public function getRangeCategory(): null|FHIRObservationRangeCategory
    {
        return $this->rangeCategory ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The category of range of values for continuous or ordinal observations that
     * match the criteria of this set of qualified values.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRObservationRangeCategoryEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationRangeCategory $rangeCategory
     * @return static
     */
    public function setRangeCategory(null|string|FHIRObservationRangeCategoryEnum|FHIRObservationRangeCategory $rangeCategory): self
    {
        if (null === $rangeCategory) {
            unset($this->rangeCategory);
            return $this;
        }
        if (!($rangeCategory instanceof FHIRObservationRangeCategory)) {
            $rangeCategory = new FHIRObservationRangeCategory(value: $rangeCategory);
        }
        $this->rangeCategory = $rangeCategory;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The range of values defined for continuous or ordinal observations that match
     * the criteria of this set of qualified values.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getRange(): null|FHIRRange
    {
        return $this->range ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The range of values defined for continuous or ordinal observations that match
     * the criteria of this set of qualified values.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $range
     * @return static
     */
    public function setRange(null|FHIRRange $range): self
    {
        if (null === $range) {
            unset($this->range);
            return $this;
        }
        $this->range = $range;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The set of valid coded results for qualitative observations that match the
     * criteria of this set of qualified values.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getValidCodedValueSet(): null|FHIRCanonical
    {
        return $this->validCodedValueSet ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The set of valid coded results for qualitative observations that match the
     * criteria of this set of qualified values.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $validCodedValueSet
     * @return static
     */
    public function setValidCodedValueSet(null|string|FHIRCanonicalPrimitive|FHIRCanonical $validCodedValueSet): self
    {
        if (null === $validCodedValueSet) {
            unset($this->validCodedValueSet);
            return $this;
        }
        if (!($validCodedValueSet instanceof FHIRCanonical)) {
            $validCodedValueSet = new FHIRCanonical(value: $validCodedValueSet);
        }
        $this->validCodedValueSet = $validCodedValueSet;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The set of normal coded results for qualitative observations that match the
     * criteria of this set of qualified values.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getNormalCodedValueSet(): null|FHIRCanonical
    {
        return $this->normalCodedValueSet ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The set of normal coded results for qualitative observations that match the
     * criteria of this set of qualified values.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $normalCodedValueSet
     * @return static
     */
    public function setNormalCodedValueSet(null|string|FHIRCanonicalPrimitive|FHIRCanonical $normalCodedValueSet): self
    {
        if (null === $normalCodedValueSet) {
            unset($this->normalCodedValueSet);
            return $this;
        }
        if (!($normalCodedValueSet instanceof FHIRCanonical)) {
            $normalCodedValueSet = new FHIRCanonical(value: $normalCodedValueSet);
        }
        $this->normalCodedValueSet = $normalCodedValueSet;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The set of abnormal coded results for qualitative observations that match the
     * criteria of this set of qualified values.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getAbnormalCodedValueSet(): null|FHIRCanonical
    {
        return $this->abnormalCodedValueSet ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The set of abnormal coded results for qualitative observations that match the
     * criteria of this set of qualified values.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $abnormalCodedValueSet
     * @return static
     */
    public function setAbnormalCodedValueSet(null|string|FHIRCanonicalPrimitive|FHIRCanonical $abnormalCodedValueSet): self
    {
        if (null === $abnormalCodedValueSet) {
            unset($this->abnormalCodedValueSet);
            return $this;
        }
        if (!($abnormalCodedValueSet instanceof FHIRCanonical)) {
            $abnormalCodedValueSet = new FHIRCanonical(value: $abnormalCodedValueSet);
        }
        $this->abnormalCodedValueSet = $abnormalCodedValueSet;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The set of critical coded results for qualitative observations that match the
     * criteria of this set of qualified values.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getCriticalCodedValueSet(): null|FHIRCanonical
    {
        return $this->criticalCodedValueSet ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The set of critical coded results for qualitative observations that match the
     * criteria of this set of qualified values.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $criticalCodedValueSet
     * @return static
     */
    public function setCriticalCodedValueSet(null|string|FHIRCanonicalPrimitive|FHIRCanonical $criticalCodedValueSet): self
    {
        if (null === $criticalCodedValueSet) {
            unset($this->criticalCodedValueSet);
            return $this;
        }
        if (!($criticalCodedValueSet instanceof FHIRCanonical)) {
            $criticalCodedValueSet = new FHIRCanonical(value: $criticalCodedValueSet);
        }
        $this->criticalCodedValueSet = $criticalCodedValueSet;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRObservationDefinitionQualifiedValue)) {
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
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTEXT === $cen) {
                $type->setContext(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_APPLIES_TO === $cen) {
                $type->addAppliesTo(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_GENDER === $cen) {
                $type->setGender(FHIRAdministrativeGender::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AGE === $cen) {
                $type->setAge(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_GESTATIONAL_AGE === $cen) {
                $type->setGestationalAge(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONDITION === $cen) {
                $type->setCondition(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RANGE_CATEGORY === $cen) {
                $type->setRangeCategory(FHIRObservationRangeCategory::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RANGE === $cen) {
                $type->setRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALID_CODED_VALUE_SET === $cen) {
                $type->setValidCodedValueSet(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NORMAL_CODED_VALUE_SET === $cen) {
                $type->setNormalCodedValueSet(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ABNORMAL_CODED_VALUE_SET === $cen) {
                $type->setAbnormalCodedValueSet(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CRITICAL_CODED_VALUE_SET === $cen) {
                $type->setCriticalCodedValueSet(FHIRCanonical::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_GENDER])) {
            if (isset($type->gender)) {
                $type->gender->setValue((string)$attributes[self::FIELD_GENDER]);
            } else {
                $type->setGender((string)$attributes[self::FIELD_GENDER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_GENDER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CONDITION])) {
            if (isset($type->condition)) {
                $type->condition->setValue((string)$attributes[self::FIELD_CONDITION]);
            } else {
                $type->setCondition((string)$attributes[self::FIELD_CONDITION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CONDITION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_RANGE_CATEGORY])) {
            if (isset($type->rangeCategory)) {
                $type->rangeCategory->setValue((string)$attributes[self::FIELD_RANGE_CATEGORY]);
            } else {
                $type->setRangeCategory((string)$attributes[self::FIELD_RANGE_CATEGORY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_RANGE_CATEGORY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALID_CODED_VALUE_SET])) {
            if (isset($type->validCodedValueSet)) {
                $type->validCodedValueSet->setValue((string)$attributes[self::FIELD_VALID_CODED_VALUE_SET]);
            } else {
                $type->setValidCodedValueSet((string)$attributes[self::FIELD_VALID_CODED_VALUE_SET]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VALID_CODED_VALUE_SET, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_NORMAL_CODED_VALUE_SET])) {
            if (isset($type->normalCodedValueSet)) {
                $type->normalCodedValueSet->setValue((string)$attributes[self::FIELD_NORMAL_CODED_VALUE_SET]);
            } else {
                $type->setNormalCodedValueSet((string)$attributes[self::FIELD_NORMAL_CODED_VALUE_SET]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_NORMAL_CODED_VALUE_SET, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ABNORMAL_CODED_VALUE_SET])) {
            if (isset($type->abnormalCodedValueSet)) {
                $type->abnormalCodedValueSet->setValue((string)$attributes[self::FIELD_ABNORMAL_CODED_VALUE_SET]);
            } else {
                $type->setAbnormalCodedValueSet((string)$attributes[self::FIELD_ABNORMAL_CODED_VALUE_SET]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ABNORMAL_CODED_VALUE_SET, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CRITICAL_CODED_VALUE_SET])) {
            if (isset($type->criticalCodedValueSet)) {
                $type->criticalCodedValueSet->setValue((string)$attributes[self::FIELD_CRITICAL_CODED_VALUE_SET]);
            } else {
                $type->setCriticalCodedValueSet((string)$attributes[self::FIELD_CRITICAL_CODED_VALUE_SET]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CRITICAL_CODED_VALUE_SET, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->gender) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_GENDER]) {
            $xw->writeAttribute(self::FIELD_GENDER, $this->gender->_getValueAsString());
        }
        if (isset($this->condition) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CONDITION]) {
            $xw->writeAttribute(self::FIELD_CONDITION, $this->condition->_getValueAsString());
        }
        if (isset($this->rangeCategory) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RANGE_CATEGORY]) {
            $xw->writeAttribute(self::FIELD_RANGE_CATEGORY, $this->rangeCategory->_getValueAsString());
        }
        if (isset($this->validCodedValueSet) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALID_CODED_VALUE_SET]) {
            $xw->writeAttribute(self::FIELD_VALID_CODED_VALUE_SET, $this->validCodedValueSet->_getValueAsString());
        }
        if (isset($this->normalCodedValueSet) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NORMAL_CODED_VALUE_SET]) {
            $xw->writeAttribute(self::FIELD_NORMAL_CODED_VALUE_SET, $this->normalCodedValueSet->_getValueAsString());
        }
        if (isset($this->abnormalCodedValueSet) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ABNORMAL_CODED_VALUE_SET]) {
            $xw->writeAttribute(self::FIELD_ABNORMAL_CODED_VALUE_SET, $this->abnormalCodedValueSet->_getValueAsString());
        }
        if (isset($this->criticalCodedValueSet) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CRITICAL_CODED_VALUE_SET]) {
            $xw->writeAttribute(self::FIELD_CRITICAL_CODED_VALUE_SET, $this->criticalCodedValueSet->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->context)) {
            $xw->startElement(self::FIELD_CONTEXT);
            $this->context->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->appliesTo)) {
            foreach ($this->appliesTo as $v) {
                $xw->startElement(self::FIELD_APPLIES_TO);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->gender)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_GENDER]
                || $this->gender->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_GENDER);
            $this->gender->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_GENDER]);
            $xw->endElement();
        }
        if (isset($this->age)) {
            $xw->startElement(self::FIELD_AGE);
            $this->age->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->gestationalAge)) {
            $xw->startElement(self::FIELD_GESTATIONAL_AGE);
            $this->gestationalAge->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->condition)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CONDITION]
                || $this->condition->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CONDITION);
            $this->condition->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CONDITION]);
            $xw->endElement();
        }
        if (isset($this->rangeCategory)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RANGE_CATEGORY]
                || $this->rangeCategory->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RANGE_CATEGORY);
            $this->rangeCategory->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RANGE_CATEGORY]);
            $xw->endElement();
        }
        if (isset($this->range)) {
            $xw->startElement(self::FIELD_RANGE);
            $this->range->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->validCodedValueSet)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALID_CODED_VALUE_SET]
                || $this->validCodedValueSet->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALID_CODED_VALUE_SET);
            $this->validCodedValueSet->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALID_CODED_VALUE_SET]);
            $xw->endElement();
        }
        if (isset($this->normalCodedValueSet)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NORMAL_CODED_VALUE_SET]
                || $this->normalCodedValueSet->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NORMAL_CODED_VALUE_SET);
            $this->normalCodedValueSet->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NORMAL_CODED_VALUE_SET]);
            $xw->endElement();
        }
        if (isset($this->abnormalCodedValueSet)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ABNORMAL_CODED_VALUE_SET]
                || $this->abnormalCodedValueSet->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ABNORMAL_CODED_VALUE_SET);
            $this->abnormalCodedValueSet->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ABNORMAL_CODED_VALUE_SET]);
            $xw->endElement();
        }
        if (isset($this->criticalCodedValueSet)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CRITICAL_CODED_VALUE_SET]
                || $this->criticalCodedValueSet->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CRITICAL_CODED_VALUE_SET);
            $this->criticalCodedValueSet->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CRITICAL_CODED_VALUE_SET]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRObservationDefinitionQualifiedValue)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->context) || property_exists($decoded, self::FIELD_CONTEXT)) {
            if (is_array($decoded->context)) {
                $type->setContext(FHIRCodeableConcept::jsonUnserialize(reset($decoded->context), $config));
            } else {
                $type->setContext(FHIRCodeableConcept::jsonUnserialize($decoded->context, $config));
            }
        }
        if (isset($decoded->appliesTo) || property_exists($decoded, self::FIELD_APPLIES_TO)) {
            if (is_object($decoded->appliesTo)) {
                $vals = [$decoded->appliesTo];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_APPLIES_TO, true);
            } else {
                $vals = $decoded->appliesTo;
            }
            foreach($vals as $v) {
                $type->addAppliesTo(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->gender)
            || isset($decoded->_gender)
            || property_exists($decoded, self::FIELD_GENDER)
            || property_exists($decoded, self::FIELD_GENDER_EXT)) {
            $v = $decoded->_gender ?? new \stdClass();
            $v->value = $decoded->gender ?? null;
            $type->setGender(FHIRAdministrativeGender::jsonUnserialize($v, $config));
        }
        if (isset($decoded->age) || property_exists($decoded, self::FIELD_AGE)) {
            if (is_array($decoded->age)) {
                $type->setAge(FHIRRange::jsonUnserialize(reset($decoded->age), $config));
            } else {
                $type->setAge(FHIRRange::jsonUnserialize($decoded->age, $config));
            }
        }
        if (isset($decoded->gestationalAge) || property_exists($decoded, self::FIELD_GESTATIONAL_AGE)) {
            if (is_array($decoded->gestationalAge)) {
                $type->setGestationalAge(FHIRRange::jsonUnserialize(reset($decoded->gestationalAge), $config));
            } else {
                $type->setGestationalAge(FHIRRange::jsonUnserialize($decoded->gestationalAge, $config));
            }
        }
        if (isset($decoded->condition)
            || isset($decoded->_condition)
            || property_exists($decoded, self::FIELD_CONDITION)
            || property_exists($decoded, self::FIELD_CONDITION_EXT)) {
            $v = $decoded->_condition ?? new \stdClass();
            $v->value = $decoded->condition ?? null;
            $type->setCondition(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->rangeCategory)
            || isset($decoded->_rangeCategory)
            || property_exists($decoded, self::FIELD_RANGE_CATEGORY)
            || property_exists($decoded, self::FIELD_RANGE_CATEGORY_EXT)) {
            $v = $decoded->_rangeCategory ?? new \stdClass();
            $v->value = $decoded->rangeCategory ?? null;
            $type->setRangeCategory(FHIRObservationRangeCategory::jsonUnserialize($v, $config));
        }
        if (isset($decoded->range) || property_exists($decoded, self::FIELD_RANGE)) {
            if (is_array($decoded->range)) {
                $type->setRange(FHIRRange::jsonUnserialize(reset($decoded->range), $config));
            } else {
                $type->setRange(FHIRRange::jsonUnserialize($decoded->range, $config));
            }
        }
        if (isset($decoded->validCodedValueSet)
            || isset($decoded->_validCodedValueSet)
            || property_exists($decoded, self::FIELD_VALID_CODED_VALUE_SET)
            || property_exists($decoded, self::FIELD_VALID_CODED_VALUE_SET_EXT)) {
            $v = $decoded->_validCodedValueSet ?? new \stdClass();
            $v->value = $decoded->validCodedValueSet ?? null;
            $type->setValidCodedValueSet(FHIRCanonical::jsonUnserialize($v, $config));
        }
        if (isset($decoded->normalCodedValueSet)
            || isset($decoded->_normalCodedValueSet)
            || property_exists($decoded, self::FIELD_NORMAL_CODED_VALUE_SET)
            || property_exists($decoded, self::FIELD_NORMAL_CODED_VALUE_SET_EXT)) {
            $v = $decoded->_normalCodedValueSet ?? new \stdClass();
            $v->value = $decoded->normalCodedValueSet ?? null;
            $type->setNormalCodedValueSet(FHIRCanonical::jsonUnserialize($v, $config));
        }
        if (isset($decoded->abnormalCodedValueSet)
            || isset($decoded->_abnormalCodedValueSet)
            || property_exists($decoded, self::FIELD_ABNORMAL_CODED_VALUE_SET)
            || property_exists($decoded, self::FIELD_ABNORMAL_CODED_VALUE_SET_EXT)) {
            $v = $decoded->_abnormalCodedValueSet ?? new \stdClass();
            $v->value = $decoded->abnormalCodedValueSet ?? null;
            $type->setAbnormalCodedValueSet(FHIRCanonical::jsonUnserialize($v, $config));
        }
        if (isset($decoded->criticalCodedValueSet)
            || isset($decoded->_criticalCodedValueSet)
            || property_exists($decoded, self::FIELD_CRITICAL_CODED_VALUE_SET)
            || property_exists($decoded, self::FIELD_CRITICAL_CODED_VALUE_SET_EXT)) {
            $v = $decoded->_criticalCodedValueSet ?? new \stdClass();
            $v->value = $decoded->criticalCodedValueSet ?? null;
            $type->setCriticalCodedValueSet(FHIRCanonical::jsonUnserialize($v, $config));
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
            $out->context = $this->context;
        }
        if (isset($this->appliesTo) && [] !== $this->appliesTo) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_APPLIES_TO) && 1 === count($this->appliesTo)) {
                $out->appliesTo = $this->appliesTo[0];
            } else {
                $out->appliesTo = $this->appliesTo;
            }
        }
        if (isset($this->gender)) {
            if (null !== ($val = $this->gender->getValue())) {
                $out->gender = $val;
            }
            if ($this->gender->_nonValueFieldDefined()) {
                $ext = $this->gender->jsonSerialize();
                unset($ext->value);
                $out->_gender = $ext;
            }
        }
        if (isset($this->age)) {
            $out->age = $this->age;
        }
        if (isset($this->gestationalAge)) {
            $out->gestationalAge = $this->gestationalAge;
        }
        if (isset($this->condition)) {
            if (null !== ($val = $this->condition->getValue())) {
                $out->condition = $val;
            }
            if ($this->condition->_nonValueFieldDefined()) {
                $ext = $this->condition->jsonSerialize();
                unset($ext->value);
                $out->_condition = $ext;
            }
        }
        if (isset($this->rangeCategory)) {
            if (null !== ($val = $this->rangeCategory->getValue())) {
                $out->rangeCategory = $val;
            }
            if ($this->rangeCategory->_nonValueFieldDefined()) {
                $ext = $this->rangeCategory->jsonSerialize();
                unset($ext->value);
                $out->_rangeCategory = $ext;
            }
        }
        if (isset($this->range)) {
            $out->range = $this->range;
        }
        if (isset($this->validCodedValueSet)) {
            if (null !== ($val = $this->validCodedValueSet->getValue())) {
                $out->validCodedValueSet = $val;
            }
            if ($this->validCodedValueSet->_nonValueFieldDefined()) {
                $ext = $this->validCodedValueSet->jsonSerialize();
                unset($ext->value);
                $out->_validCodedValueSet = $ext;
            }
        }
        if (isset($this->normalCodedValueSet)) {
            if (null !== ($val = $this->normalCodedValueSet->getValue())) {
                $out->normalCodedValueSet = $val;
            }
            if ($this->normalCodedValueSet->_nonValueFieldDefined()) {
                $ext = $this->normalCodedValueSet->jsonSerialize();
                unset($ext->value);
                $out->_normalCodedValueSet = $ext;
            }
        }
        if (isset($this->abnormalCodedValueSet)) {
            if (null !== ($val = $this->abnormalCodedValueSet->getValue())) {
                $out->abnormalCodedValueSet = $val;
            }
            if ($this->abnormalCodedValueSet->_nonValueFieldDefined()) {
                $ext = $this->abnormalCodedValueSet->jsonSerialize();
                unset($ext->value);
                $out->_abnormalCodedValueSet = $ext;
            }
        }
        if (isset($this->criticalCodedValueSet)) {
            if (null !== ($val = $this->criticalCodedValueSet->getValue())) {
                $out->criticalCodedValueSet = $val;
            }
            if ($this->criticalCodedValueSet->_nonValueFieldDefined()) {
                $ext = $this->criticalCodedValueSet->jsonSerialize();
                unset($ext->value);
                $out->_criticalCodedValueSet = $ext;
            }
        }
        return $out;
    }
}