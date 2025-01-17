<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdministrativeGender;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationRangeCategory;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Set of definitional characteristics for a kind of observation or measurement
 * produced or consumed by an orderable health care service.
 */
class FHIRObservationDefinitionQualifiedValue extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_VALUE;


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
    protected FHIRCodeableConcept $context;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target population this set of qualified values applies to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $appliesTo;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The gender this set of qualified values applies to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdministrativeGender 
     */
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
    protected FHIRString $condition;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The category of range of values for continuous or ordinal observations that
     * match the criteria of this set of qualified values.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationRangeCategory 
     */
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
    protected FHIRCanonical $criticalCodedValueSet;

    /** Default validation map for fields in type ObservationDefinition.QualifiedValue */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRObservationDefinitionQualifiedValue Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $context
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $appliesTo
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdministrativeGender $gender
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $age
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $gestationalAge
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $condition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationRangeCategory $rangeCategory
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
                                null|FHIRAdministrativeGender $gender = null,
                                null|FHIRRange $age = null,
                                null|FHIRRange $gestationalAge = null,
                                null|string|FHIRStringPrimitive|FHIRString $condition = null,
                                null|FHIRObservationRangeCategory $rangeCategory = null,
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

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
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
        if (!isset($this->appliesTo) || [] === $this->appliesTo) {
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdministrativeGender $gender
     * @return static
     */
    public function setGender(null|FHIRAdministrativeGender $gender): self
    {
        if (null === $gender) {
            unset($this->gender);
            return $this;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationRangeCategory $rangeCategory
     * @return static
     */
    public function setRangeCategory(null|FHIRObservationRangeCategory $rangeCategory): self
    {
        if (null === $rangeCategory) {
            unset($this->rangeCategory);
            return $this;
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
        if (isset($validationRules[self::FIELD_CONTEXT])) {
            $v = $this->getContext();
            foreach($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT])) {
                        $errs[self::FIELD_CONTEXT] = [];
                    }
                    $errs[self::FIELD_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_APPLIES_TO])) {
            $v = $this->getAppliesTo();
            foreach($validationRules[self::FIELD_APPLIES_TO] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_APPLIES_TO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPLIES_TO])) {
                        $errs[self::FIELD_APPLIES_TO] = [];
                    }
                    $errs[self::FIELD_APPLIES_TO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GENDER])) {
            $v = $this->getGender();
            foreach($validationRules[self::FIELD_GENDER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GENDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GENDER])) {
                        $errs[self::FIELD_GENDER] = [];
                    }
                    $errs[self::FIELD_GENDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AGE])) {
            $v = $this->getAge();
            foreach($validationRules[self::FIELD_AGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGE])) {
                        $errs[self::FIELD_AGE] = [];
                    }
                    $errs[self::FIELD_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GESTATIONAL_AGE])) {
            $v = $this->getGestationalAge();
            foreach($validationRules[self::FIELD_GESTATIONAL_AGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GESTATIONAL_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GESTATIONAL_AGE])) {
                        $errs[self::FIELD_GESTATIONAL_AGE] = [];
                    }
                    $errs[self::FIELD_GESTATIONAL_AGE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_RANGE_CATEGORY])) {
            $v = $this->getRangeCategory();
            foreach($validationRules[self::FIELD_RANGE_CATEGORY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RANGE_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RANGE_CATEGORY])) {
                        $errs[self::FIELD_RANGE_CATEGORY] = [];
                    }
                    $errs[self::FIELD_RANGE_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RANGE])) {
            $v = $this->getRange();
            foreach($validationRules[self::FIELD_RANGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RANGE])) {
                        $errs[self::FIELD_RANGE] = [];
                    }
                    $errs[self::FIELD_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALID_CODED_VALUE_SET])) {
            $v = $this->getValidCodedValueSet();
            foreach($validationRules[self::FIELD_VALID_CODED_VALUE_SET] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALID_CODED_VALUE_SET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALID_CODED_VALUE_SET])) {
                        $errs[self::FIELD_VALID_CODED_VALUE_SET] = [];
                    }
                    $errs[self::FIELD_VALID_CODED_VALUE_SET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NORMAL_CODED_VALUE_SET])) {
            $v = $this->getNormalCodedValueSet();
            foreach($validationRules[self::FIELD_NORMAL_CODED_VALUE_SET] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NORMAL_CODED_VALUE_SET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NORMAL_CODED_VALUE_SET])) {
                        $errs[self::FIELD_NORMAL_CODED_VALUE_SET] = [];
                    }
                    $errs[self::FIELD_NORMAL_CODED_VALUE_SET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ABNORMAL_CODED_VALUE_SET])) {
            $v = $this->getAbnormalCodedValueSet();
            foreach($validationRules[self::FIELD_ABNORMAL_CODED_VALUE_SET] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ABNORMAL_CODED_VALUE_SET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABNORMAL_CODED_VALUE_SET])) {
                        $errs[self::FIELD_ABNORMAL_CODED_VALUE_SET] = [];
                    }
                    $errs[self::FIELD_ABNORMAL_CODED_VALUE_SET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CRITICAL_CODED_VALUE_SET])) {
            $v = $this->getCriticalCodedValueSet();
            foreach($validationRules[self::FIELD_CRITICAL_CODED_VALUE_SET] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CRITICAL_CODED_VALUE_SET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CRITICAL_CODED_VALUE_SET])) {
                        $errs[self::FIELD_CRITICAL_CODED_VALUE_SET] = [];
                    }
                    $errs[self::FIELD_CRITICAL_CODED_VALUE_SET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
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
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTEXT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setContext(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_APPLIES_TO === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addAppliesTo(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_GENDER === $childName) {
                $v = new FHIRAdministrativeGender(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setGender(FHIRAdministrativeGender::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AGE === $childName) {
                $v = new FHIRRange();
                $type->setAge(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_GESTATIONAL_AGE === $childName) {
                $v = new FHIRRange();
                $type->setGestationalAge(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONDITION === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setCondition(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RANGE_CATEGORY === $childName) {
                $v = new FHIRObservationRangeCategory(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setRangeCategory(FHIRObservationRangeCategory::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RANGE === $childName) {
                $v = new FHIRRange();
                $type->setRange(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALID_CODED_VALUE_SET === $childName) {
                $v = new FHIRCanonical(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setValidCodedValueSet(FHIRCanonical::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NORMAL_CODED_VALUE_SET === $childName) {
                $v = new FHIRCanonical(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setNormalCodedValueSet(FHIRCanonical::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ABNORMAL_CODED_VALUE_SET === $childName) {
                $v = new FHIRCanonical(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setAbnormalCodedValueSet(FHIRCanonical::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CRITICAL_CODED_VALUE_SET === $childName) {
                $v = new FHIRCanonical(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setCriticalCodedValueSet(FHIRCanonical::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_CONDITION])) {
            $pt = $type->getCondition();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CONDITION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCondition(new FHIRString(
                    value: (string)$attributes[self::FIELD_CONDITION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VALID_CODED_VALUE_SET])) {
            $pt = $type->getValidCodedValueSet();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALID_CODED_VALUE_SET]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValidCodedValueSet(new FHIRCanonical(
                    value: (string)$attributes[self::FIELD_VALID_CODED_VALUE_SET],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_NORMAL_CODED_VALUE_SET])) {
            $pt = $type->getNormalCodedValueSet();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NORMAL_CODED_VALUE_SET]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setNormalCodedValueSet(new FHIRCanonical(
                    value: (string)$attributes[self::FIELD_NORMAL_CODED_VALUE_SET],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ABNORMAL_CODED_VALUE_SET])) {
            $pt = $type->getAbnormalCodedValueSet();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ABNORMAL_CODED_VALUE_SET]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAbnormalCodedValueSet(new FHIRCanonical(
                    value: (string)$attributes[self::FIELD_ABNORMAL_CODED_VALUE_SET],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CRITICAL_CODED_VALUE_SET])) {
            $pt = $type->getCriticalCodedValueSet();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CRITICAL_CODED_VALUE_SET]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCriticalCodedValueSet(new FHIRCanonical(
                    value: (string)$attributes[self::FIELD_CRITICAL_CODED_VALUE_SET],
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
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('ObservationDefinitionQualifiedValue', $this->_getSourceXMLNS());
        }
        if (isset($this->condition) && $this->condition->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CONDITION, $this->condition->getValue()?->getFormattedValue());
        }
        if (isset($this->validCodedValueSet) && $this->validCodedValueSet->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALID_CODED_VALUE_SET, $this->validCodedValueSet->getValue()?->getFormattedValue());
        }
        if (isset($this->normalCodedValueSet) && $this->normalCodedValueSet->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NORMAL_CODED_VALUE_SET, $this->normalCodedValueSet->getValue()?->getFormattedValue());
        }
        if (isset($this->abnormalCodedValueSet) && $this->abnormalCodedValueSet->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ABNORMAL_CODED_VALUE_SET, $this->abnormalCodedValueSet->getValue()?->getFormattedValue());
        }
        if (isset($this->criticalCodedValueSet) && $this->criticalCodedValueSet->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CRITICAL_CODED_VALUE_SET, $this->criticalCodedValueSet->getValue()?->getFormattedValue());
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
        if (isset($this->gender)) {
            $xw->startElement(self::FIELD_GENDER);
            $this->gender->xmlSerialize($xw, $config);
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
        if (isset($this->condition) && $this->condition->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CONDITION);
            $this->condition->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->rangeCategory)) {
            $xw->startElement(self::FIELD_RANGE_CATEGORY);
            $this->rangeCategory->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->range)) {
            $xw->startElement(self::FIELD_RANGE);
            $this->range->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->validCodedValueSet) && $this->validCodedValueSet->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALID_CODED_VALUE_SET);
            $this->validCodedValueSet->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->normalCodedValueSet) && $this->normalCodedValueSet->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NORMAL_CODED_VALUE_SET);
            $this->normalCodedValueSet->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->abnormalCodedValueSet) && $this->abnormalCodedValueSet->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ABNORMAL_CODED_VALUE_SET);
            $this->abnormalCodedValueSet->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->criticalCodedValueSet) && $this->criticalCodedValueSet->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CRITICAL_CODED_VALUE_SET);
            $this->criticalCodedValueSet->xmlSerialize($xw, $config);
            $xw->endElement();
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
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
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_CONTEXT]) || array_key_exists(self::FIELD_CONTEXT, $json)) {
            if ($json[self::FIELD_CONTEXT] instanceof FHIRCodeableConcept) {
                $type->setContext($json[self::FIELD_CONTEXT]);
            } else {
                $type->setContext(new FHIRCodeableConcept($json[self::FIELD_CONTEXT]));
            }
        }
        if (isset($json[self::FIELD_APPLIES_TO]) || array_key_exists(self::FIELD_APPLIES_TO, $json)) {
            if (is_array($json[self::FIELD_APPLIES_TO])) {
                foreach($json[self::FIELD_APPLIES_TO] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addAppliesTo($v);
                    } else {
                        $type->addAppliesTo(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_APPLIES_TO] instanceof FHIRCodeableConcept) {
                $type->addAppliesTo($json[self::FIELD_APPLIES_TO]);
            } else {
                $type->addAppliesTo(new FHIRCodeableConcept($json[self::FIELD_APPLIES_TO]));
            }
        }
        if (isset($json[self::FIELD_GENDER]) || isset($json[self::FIELD_GENDER_EXT]) || array_key_exists(self::FIELD_GENDER, $json) || array_key_exists(self::FIELD_GENDER_EXT, $json)) {
            $value = $json[self::FIELD_GENDER] ?? null;
            $ext = (isset($json[self::FIELD_GENDER_EXT]) && is_array($json[self::FIELD_GENDER_EXT])) ? $json[self::FIELD_GENDER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAdministrativeGender) {
                    $type->setGender($value);
                } else if (is_array($value)) {
                    $type->setGender(new FHIRAdministrativeGender(array_merge($ext, $value)));
                } else {
                    $type->setGender(new FHIRAdministrativeGender([FHIRAdministrativeGender::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setGender(new FHIRAdministrativeGender($ext));
            } else {
                $type->setGender(new FHIRAdministrativeGender(null));
            }
        }
        if (isset($json[self::FIELD_AGE]) || array_key_exists(self::FIELD_AGE, $json)) {
            if ($json[self::FIELD_AGE] instanceof FHIRRange) {
                $type->setAge($json[self::FIELD_AGE]);
            } else {
                $type->setAge(new FHIRRange($json[self::FIELD_AGE]));
            }
        }
        if (isset($json[self::FIELD_GESTATIONAL_AGE]) || array_key_exists(self::FIELD_GESTATIONAL_AGE, $json)) {
            if ($json[self::FIELD_GESTATIONAL_AGE] instanceof FHIRRange) {
                $type->setGestationalAge($json[self::FIELD_GESTATIONAL_AGE]);
            } else {
                $type->setGestationalAge(new FHIRRange($json[self::FIELD_GESTATIONAL_AGE]));
            }
        }
        if (isset($json[self::FIELD_CONDITION]) || isset($json[self::FIELD_CONDITION_EXT]) || array_key_exists(self::FIELD_CONDITION, $json) || array_key_exists(self::FIELD_CONDITION_EXT, $json)) {
            $value = $json[self::FIELD_CONDITION] ?? null;
            $ext = (isset($json[self::FIELD_CONDITION_EXT]) && is_array($json[self::FIELD_CONDITION_EXT])) ? $json[self::FIELD_CONDITION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setCondition($value);
                } else if (is_array($value)) {
                    $type->setCondition(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setCondition(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCondition(new FHIRString($ext));
            } else {
                $type->setCondition(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_RANGE_CATEGORY]) || isset($json[self::FIELD_RANGE_CATEGORY_EXT]) || array_key_exists(self::FIELD_RANGE_CATEGORY, $json) || array_key_exists(self::FIELD_RANGE_CATEGORY_EXT, $json)) {
            $value = $json[self::FIELD_RANGE_CATEGORY] ?? null;
            $ext = (isset($json[self::FIELD_RANGE_CATEGORY_EXT]) && is_array($json[self::FIELD_RANGE_CATEGORY_EXT])) ? $json[self::FIELD_RANGE_CATEGORY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRObservationRangeCategory) {
                    $type->setRangeCategory($value);
                } else if (is_array($value)) {
                    $type->setRangeCategory(new FHIRObservationRangeCategory(array_merge($ext, $value)));
                } else {
                    $type->setRangeCategory(new FHIRObservationRangeCategory([FHIRObservationRangeCategory::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setRangeCategory(new FHIRObservationRangeCategory($ext));
            } else {
                $type->setRangeCategory(new FHIRObservationRangeCategory(null));
            }
        }
        if (isset($json[self::FIELD_RANGE]) || array_key_exists(self::FIELD_RANGE, $json)) {
            if ($json[self::FIELD_RANGE] instanceof FHIRRange) {
                $type->setRange($json[self::FIELD_RANGE]);
            } else {
                $type->setRange(new FHIRRange($json[self::FIELD_RANGE]));
            }
        }
        if (isset($json[self::FIELD_VALID_CODED_VALUE_SET]) || isset($json[self::FIELD_VALID_CODED_VALUE_SET_EXT]) || array_key_exists(self::FIELD_VALID_CODED_VALUE_SET, $json) || array_key_exists(self::FIELD_VALID_CODED_VALUE_SET_EXT, $json)) {
            $value = $json[self::FIELD_VALID_CODED_VALUE_SET] ?? null;
            $ext = (isset($json[self::FIELD_VALID_CODED_VALUE_SET_EXT]) && is_array($json[self::FIELD_VALID_CODED_VALUE_SET_EXT])) ? $json[self::FIELD_VALID_CODED_VALUE_SET_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $type->setValidCodedValueSet($value);
                } else if (is_array($value)) {
                    $type->setValidCodedValueSet(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $type->setValidCodedValueSet(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setValidCodedValueSet(new FHIRCanonical($ext));
            } else {
                $type->setValidCodedValueSet(new FHIRCanonical(null));
            }
        }
        if (isset($json[self::FIELD_NORMAL_CODED_VALUE_SET]) || isset($json[self::FIELD_NORMAL_CODED_VALUE_SET_EXT]) || array_key_exists(self::FIELD_NORMAL_CODED_VALUE_SET, $json) || array_key_exists(self::FIELD_NORMAL_CODED_VALUE_SET_EXT, $json)) {
            $value = $json[self::FIELD_NORMAL_CODED_VALUE_SET] ?? null;
            $ext = (isset($json[self::FIELD_NORMAL_CODED_VALUE_SET_EXT]) && is_array($json[self::FIELD_NORMAL_CODED_VALUE_SET_EXT])) ? $json[self::FIELD_NORMAL_CODED_VALUE_SET_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $type->setNormalCodedValueSet($value);
                } else if (is_array($value)) {
                    $type->setNormalCodedValueSet(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $type->setNormalCodedValueSet(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setNormalCodedValueSet(new FHIRCanonical($ext));
            } else {
                $type->setNormalCodedValueSet(new FHIRCanonical(null));
            }
        }
        if (isset($json[self::FIELD_ABNORMAL_CODED_VALUE_SET]) || isset($json[self::FIELD_ABNORMAL_CODED_VALUE_SET_EXT]) || array_key_exists(self::FIELD_ABNORMAL_CODED_VALUE_SET, $json) || array_key_exists(self::FIELD_ABNORMAL_CODED_VALUE_SET_EXT, $json)) {
            $value = $json[self::FIELD_ABNORMAL_CODED_VALUE_SET] ?? null;
            $ext = (isset($json[self::FIELD_ABNORMAL_CODED_VALUE_SET_EXT]) && is_array($json[self::FIELD_ABNORMAL_CODED_VALUE_SET_EXT])) ? $json[self::FIELD_ABNORMAL_CODED_VALUE_SET_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $type->setAbnormalCodedValueSet($value);
                } else if (is_array($value)) {
                    $type->setAbnormalCodedValueSet(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $type->setAbnormalCodedValueSet(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setAbnormalCodedValueSet(new FHIRCanonical($ext));
            } else {
                $type->setAbnormalCodedValueSet(new FHIRCanonical(null));
            }
        }
        if (isset($json[self::FIELD_CRITICAL_CODED_VALUE_SET]) || isset($json[self::FIELD_CRITICAL_CODED_VALUE_SET_EXT]) || array_key_exists(self::FIELD_CRITICAL_CODED_VALUE_SET, $json) || array_key_exists(self::FIELD_CRITICAL_CODED_VALUE_SET_EXT, $json)) {
            $value = $json[self::FIELD_CRITICAL_CODED_VALUE_SET] ?? null;
            $ext = (isset($json[self::FIELD_CRITICAL_CODED_VALUE_SET_EXT]) && is_array($json[self::FIELD_CRITICAL_CODED_VALUE_SET_EXT])) ? $json[self::FIELD_CRITICAL_CODED_VALUE_SET_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $type->setCriticalCodedValueSet($value);
                } else if (is_array($value)) {
                    $type->setCriticalCodedValueSet(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $type->setCriticalCodedValueSet(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCriticalCodedValueSet(new FHIRCanonical($ext));
            } else {
                $type->setCriticalCodedValueSet(new FHIRCanonical(null));
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
        if (isset($this->context)) {
            $out->context = $this->context;
        }
        if (isset($this->appliesTo) && [] !== $this->appliesTo) {
            $out->appliesTo = $this->appliesTo;
        }
        if (isset($this->gender)) {
            if (null !== ($val = $this->gender->getValue())) {
                $out->gender = $val;
            }
            $ext = $this->gender->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
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
            $ext = $this->condition->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_condition = $ext;
            }
        }
        if (isset($this->rangeCategory)) {
            if (null !== ($val = $this->rangeCategory->getValue())) {
                $out->rangeCategory = $val;
            }
            $ext = $this->rangeCategory->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
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
            $ext = $this->validCodedValueSet->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_validCodedValueSet = $ext;
            }
        }
        if (isset($this->normalCodedValueSet)) {
            if (null !== ($val = $this->normalCodedValueSet->getValue())) {
                $out->normalCodedValueSet = $val;
            }
            $ext = $this->normalCodedValueSet->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_normalCodedValueSet = $ext;
            }
        }
        if (isset($this->abnormalCodedValueSet)) {
            if (null !== ($val = $this->abnormalCodedValueSet->getValue())) {
                $out->abnormalCodedValueSet = $val;
            }
            $ext = $this->abnormalCodedValueSet->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_abnormalCodedValueSet = $ext;
            }
        }
        if (isset($this->criticalCodedValueSet)) {
            if (null !== ($val = $this->criticalCodedValueSet->getValue())) {
                $out->criticalCodedValueSet = $val;
            }
            $ext = $this->criticalCodedValueSet->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_criticalCodedValueSet = $ext;
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