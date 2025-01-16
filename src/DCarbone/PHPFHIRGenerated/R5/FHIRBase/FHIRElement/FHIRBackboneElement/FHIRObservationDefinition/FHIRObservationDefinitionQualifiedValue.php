<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:25+0000
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

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRAdministrativeGender;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRObservationRangeCategory;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * Set of definitional characteristics for a kind of observation or measurement
 * produced or consumed by an orderable health care service.
 *
 * Class FHIRObservationDefinitionQualifiedValue
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition
 */
class FHIRObservationDefinitionQualifiedValue extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_VALUE;

    const FIELD_CONTEXT = 'context';
    const FIELD_APPLIES_TO = 'appliesTo';
    const FIELD_GENDER = 'gender';
    const FIELD_GENDER_EXT = '_gender';
    const FIELD_AGE = 'age';
    const FIELD_GESTATIONAL_AGE = 'gestationalAge';
    const FIELD_CONDITION = 'condition';
    const FIELD_CONDITION_EXT = '_condition';
    const FIELD_RANGE_CATEGORY = 'rangeCategory';
    const FIELD_RANGE_CATEGORY_EXT = '_rangeCategory';
    const FIELD_RANGE = 'range';
    const FIELD_VALID_CODED_VALUE_SET = 'validCodedValueSet';
    const FIELD_VALID_CODED_VALUE_SET_EXT = '_validCodedValueSet';
    const FIELD_NORMAL_CODED_VALUE_SET = 'normalCodedValueSet';
    const FIELD_NORMAL_CODED_VALUE_SET_EXT = '_normalCodedValueSet';
    const FIELD_ABNORMAL_CODED_VALUE_SET = 'abnormalCodedValueSet';
    const FIELD_ABNORMAL_CODED_VALUE_SET_EXT = '_abnormalCodedValueSet';
    const FIELD_CRITICAL_CODED_VALUE_SET = 'criticalCodedValueSet';
    const FIELD_CRITICAL_CODED_VALUE_SET_EXT = '_criticalCodedValueSet';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A concept defining the context for this set of qualified values.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $context = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target population this set of qualified values applies to.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $appliesTo = [];
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The gender this set of qualified values applies to.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRAdministrativeGender
     */
    protected null|FHIRAdministrativeGender $gender = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age range this set of qualified values applies to.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    protected null|FHIRRange $age = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The gestational age this set of qualified values applies to.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    protected null|FHIRRange $gestationalAge = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text based condition for which the the set of qualified values is valid.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $condition = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The category of range of values for continuous or ordinal observations that
     * match the criteria of this set of qualified values.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRObservationRangeCategory
     */
    protected null|FHIRObservationRangeCategory $rangeCategory = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The range of values defined for continuous or ordinal observations that match
     * the criteria of this set of qualified values.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    protected null|FHIRRange $range = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The set of valid coded results for qualitative observations that match the
     * criteria of this set of qualified values.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $validCodedValueSet = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The set of normal coded results for qualitative observations that match the
     * criteria of this set of qualified values.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $normalCodedValueSet = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The set of abnormal coded results for qualitative observations that match the
     * criteria of this set of qualified values.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $abnormalCodedValueSet = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The set of critical coded results for qualitative observations that match the
     * criteria of this set of qualified values.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $criticalCodedValueSet = null;

    /**
     * Validation map for fields in type ObservationDefinition.QualifiedValue
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRObservationDefinitionQualifiedValue Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_CONTEXT, $data)) {
            if ($data[self::FIELD_CONTEXT] instanceof FHIRCodeableConcept) {
                $this->setContext($data[self::FIELD_CONTEXT]);
            } else {
                $this->setContext(new FHIRCodeableConcept($data[self::FIELD_CONTEXT]));
            }
        }
        if (array_key_exists(self::FIELD_APPLIES_TO, $data)) {
            if (is_array($data[self::FIELD_APPLIES_TO])) {
                foreach($data[self::FIELD_APPLIES_TO] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addAppliesTo($v);
                    } else {
                        $this->addAppliesTo(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_APPLIES_TO] instanceof FHIRCodeableConcept) {
                $this->addAppliesTo($data[self::FIELD_APPLIES_TO]);
            } else {
                $this->addAppliesTo(new FHIRCodeableConcept($data[self::FIELD_APPLIES_TO]));
            }
        }
        if (array_key_exists(self::FIELD_GENDER, $data) || array_key_exists(self::FIELD_GENDER_EXT, $data)) {
            $value = $data[self::FIELD_GENDER] ?? null;
            $ext = (isset($data[self::FIELD_GENDER_EXT]) && is_array($data[self::FIELD_GENDER_EXT])) ? $data[self::FIELD_GENDER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAdministrativeGender) {
                    $this->setGender($value);
                } else if (is_array($value)) {
                    $this->setGender(new FHIRAdministrativeGender(array_merge($ext, $value)));
                } else {
                    $this->setGender(new FHIRAdministrativeGender([FHIRAdministrativeGender::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setGender(new FHIRAdministrativeGender($ext));
            } else {
                $this->setGender(new FHIRAdministrativeGender(null));
            }
        }
        if (array_key_exists(self::FIELD_AGE, $data)) {
            if ($data[self::FIELD_AGE] instanceof FHIRRange) {
                $this->setAge($data[self::FIELD_AGE]);
            } else {
                $this->setAge(new FHIRRange($data[self::FIELD_AGE]));
            }
        }
        if (array_key_exists(self::FIELD_GESTATIONAL_AGE, $data)) {
            if ($data[self::FIELD_GESTATIONAL_AGE] instanceof FHIRRange) {
                $this->setGestationalAge($data[self::FIELD_GESTATIONAL_AGE]);
            } else {
                $this->setGestationalAge(new FHIRRange($data[self::FIELD_GESTATIONAL_AGE]));
            }
        }
        if (array_key_exists(self::FIELD_CONDITION, $data) || array_key_exists(self::FIELD_CONDITION_EXT, $data)) {
            $value = $data[self::FIELD_CONDITION] ?? null;
            $ext = (isset($data[self::FIELD_CONDITION_EXT]) && is_array($data[self::FIELD_CONDITION_EXT])) ? $data[self::FIELD_CONDITION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCondition($value);
                } else if (is_array($value)) {
                    $this->setCondition(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCondition(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCondition(new FHIRString($ext));
            } else {
                $this->setCondition(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_RANGE_CATEGORY, $data) || array_key_exists(self::FIELD_RANGE_CATEGORY_EXT, $data)) {
            $value = $data[self::FIELD_RANGE_CATEGORY] ?? null;
            $ext = (isset($data[self::FIELD_RANGE_CATEGORY_EXT]) && is_array($data[self::FIELD_RANGE_CATEGORY_EXT])) ? $data[self::FIELD_RANGE_CATEGORY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRObservationRangeCategory) {
                    $this->setRangeCategory($value);
                } else if (is_array($value)) {
                    $this->setRangeCategory(new FHIRObservationRangeCategory(array_merge($ext, $value)));
                } else {
                    $this->setRangeCategory(new FHIRObservationRangeCategory([FHIRObservationRangeCategory::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRangeCategory(new FHIRObservationRangeCategory($ext));
            } else {
                $this->setRangeCategory(new FHIRObservationRangeCategory(null));
            }
        }
        if (array_key_exists(self::FIELD_RANGE, $data)) {
            if ($data[self::FIELD_RANGE] instanceof FHIRRange) {
                $this->setRange($data[self::FIELD_RANGE]);
            } else {
                $this->setRange(new FHIRRange($data[self::FIELD_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_VALID_CODED_VALUE_SET, $data) || array_key_exists(self::FIELD_VALID_CODED_VALUE_SET_EXT, $data)) {
            $value = $data[self::FIELD_VALID_CODED_VALUE_SET] ?? null;
            $ext = (isset($data[self::FIELD_VALID_CODED_VALUE_SET_EXT]) && is_array($data[self::FIELD_VALID_CODED_VALUE_SET_EXT])) ? $data[self::FIELD_VALID_CODED_VALUE_SET_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setValidCodedValueSet($value);
                } else if (is_array($value)) {
                    $this->setValidCodedValueSet(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setValidCodedValueSet(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValidCodedValueSet(new FHIRCanonical($ext));
            } else {
                $this->setValidCodedValueSet(new FHIRCanonical(null));
            }
        }
        if (array_key_exists(self::FIELD_NORMAL_CODED_VALUE_SET, $data) || array_key_exists(self::FIELD_NORMAL_CODED_VALUE_SET_EXT, $data)) {
            $value = $data[self::FIELD_NORMAL_CODED_VALUE_SET] ?? null;
            $ext = (isset($data[self::FIELD_NORMAL_CODED_VALUE_SET_EXT]) && is_array($data[self::FIELD_NORMAL_CODED_VALUE_SET_EXT])) ? $data[self::FIELD_NORMAL_CODED_VALUE_SET_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setNormalCodedValueSet($value);
                } else if (is_array($value)) {
                    $this->setNormalCodedValueSet(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setNormalCodedValueSet(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNormalCodedValueSet(new FHIRCanonical($ext));
            } else {
                $this->setNormalCodedValueSet(new FHIRCanonical(null));
            }
        }
        if (array_key_exists(self::FIELD_ABNORMAL_CODED_VALUE_SET, $data) || array_key_exists(self::FIELD_ABNORMAL_CODED_VALUE_SET_EXT, $data)) {
            $value = $data[self::FIELD_ABNORMAL_CODED_VALUE_SET] ?? null;
            $ext = (isset($data[self::FIELD_ABNORMAL_CODED_VALUE_SET_EXT]) && is_array($data[self::FIELD_ABNORMAL_CODED_VALUE_SET_EXT])) ? $data[self::FIELD_ABNORMAL_CODED_VALUE_SET_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setAbnormalCodedValueSet($value);
                } else if (is_array($value)) {
                    $this->setAbnormalCodedValueSet(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setAbnormalCodedValueSet(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAbnormalCodedValueSet(new FHIRCanonical($ext));
            } else {
                $this->setAbnormalCodedValueSet(new FHIRCanonical(null));
            }
        }
        if (array_key_exists(self::FIELD_CRITICAL_CODED_VALUE_SET, $data) || array_key_exists(self::FIELD_CRITICAL_CODED_VALUE_SET_EXT, $data)) {
            $value = $data[self::FIELD_CRITICAL_CODED_VALUE_SET] ?? null;
            $ext = (isset($data[self::FIELD_CRITICAL_CODED_VALUE_SET_EXT]) && is_array($data[self::FIELD_CRITICAL_CODED_VALUE_SET_EXT])) ? $data[self::FIELD_CRITICAL_CODED_VALUE_SET_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setCriticalCodedValueSet($value);
                } else if (is_array($value)) {
                    $this->setCriticalCodedValueSet(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setCriticalCodedValueSet(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCriticalCodedValueSet(new FHIRCanonical($ext));
            } else {
                $this->setCriticalCodedValueSet(new FHIRCanonical(null));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A concept defining the context for this set of qualified values.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getContext(): null|FHIRCodeableConcept
    {
        return $this->context;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A concept defining the context for this set of qualified values.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $context
     * @return static
     */
    public function setContext(null|FHIRCodeableConcept $context = null): self
    {
        if (null === $context) {
            $context = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->context, $context);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getAppliesTo(): null|array
    {
        return $this->appliesTo;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target population this set of qualified values applies to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $appliesTo
     * @return static
     */
    public function addAppliesTo(null|FHIRCodeableConcept $appliesTo = null): self
    {
        if (null === $appliesTo) {
            $appliesTo = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$appliesTo
     * @return static
     */
    public function setAppliesTo(FHIRCodeableConcept ...$appliesTo): self
    {
        if ([] !== $this->appliesTo) {
            $this->_trackValuesRemoved(count($this->appliesTo));
            $this->appliesTo = [];
        }
        if ([] === $appliesTo) {
            return $this;
        }
        foreach($appliesTo as $v) {
            $this->addAppliesTo($v);
        }
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The gender this set of qualified values applies to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRAdministrativeGender
     */
    public function getGender(): null|FHIRAdministrativeGender
    {
        return $this->gender;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The gender this set of qualified values applies to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRAdministrativeGender $gender
     * @return static
     */
    public function setGender(null|FHIRAdministrativeGender $gender = null): self
    {
        if (null === $gender) {
            $gender = new FHIRAdministrativeGender();
        }
        $this->_trackValueSet($this->gender, $gender);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getAge(): null|FHIRRange
    {
        return $this->age;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age range this set of qualified values applies to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $age
     * @return static
     */
    public function setAge(null|FHIRRange $age = null): self
    {
        if (null === $age) {
            $age = new FHIRRange();
        }
        $this->_trackValueSet($this->age, $age);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getGestationalAge(): null|FHIRRange
    {
        return $this->gestationalAge;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The gestational age this set of qualified values applies to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $gestationalAge
     * @return static
     */
    public function setGestationalAge(null|FHIRRange $gestationalAge = null): self
    {
        if (null === $gestationalAge) {
            $gestationalAge = new FHIRRange();
        }
        $this->_trackValueSet($this->gestationalAge, $gestationalAge);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getCondition(): null|FHIRString
    {
        return $this->condition;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text based condition for which the the set of qualified values is valid.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $condition
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCondition(null|string|FHIRStringPrimitive|FHIRString $condition = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $condition && !($condition instanceof FHIRString)) {
            $condition = new FHIRString($condition);
        }
        $this->_trackValueSet($this->condition, $condition);
        if (!isset($this->_xmlLocations[self::FIELD_CONDITION])) {
            $this->_xmlLocations[self::FIELD_CONDITION] = [];
        }
        $this->_xmlLocations[self::FIELD_CONDITION][0] = $xmlLocation;
        $this->condition = $condition;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The category of range of values for continuous or ordinal observations that
     * match the criteria of this set of qualified values.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRObservationRangeCategory
     */
    public function getRangeCategory(): null|FHIRObservationRangeCategory
    {
        return $this->rangeCategory;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The category of range of values for continuous or ordinal observations that
     * match the criteria of this set of qualified values.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRObservationRangeCategory $rangeCategory
     * @return static
     */
    public function setRangeCategory(null|FHIRObservationRangeCategory $rangeCategory = null): self
    {
        if (null === $rangeCategory) {
            $rangeCategory = new FHIRObservationRangeCategory();
        }
        $this->_trackValueSet($this->rangeCategory, $rangeCategory);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getRange(): null|FHIRRange
    {
        return $this->range;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The range of values defined for continuous or ordinal observations that match
     * the criteria of this set of qualified values.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $range
     * @return static
     */
    public function setRange(null|FHIRRange $range = null): self
    {
        if (null === $range) {
            $range = new FHIRRange();
        }
        $this->_trackValueSet($this->range, $range);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getValidCodedValueSet(): null|FHIRCanonical
    {
        return $this->validCodedValueSet;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical $validCodedValueSet
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValidCodedValueSet(null|string|FHIRCanonicalPrimitive|FHIRCanonical $validCodedValueSet = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $validCodedValueSet && !($validCodedValueSet instanceof FHIRCanonical)) {
            $validCodedValueSet = new FHIRCanonical($validCodedValueSet);
        }
        $this->_trackValueSet($this->validCodedValueSet, $validCodedValueSet);
        if (!isset($this->_xmlLocations[self::FIELD_VALID_CODED_VALUE_SET])) {
            $this->_xmlLocations[self::FIELD_VALID_CODED_VALUE_SET] = [];
        }
        $this->_xmlLocations[self::FIELD_VALID_CODED_VALUE_SET][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getNormalCodedValueSet(): null|FHIRCanonical
    {
        return $this->normalCodedValueSet;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical $normalCodedValueSet
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setNormalCodedValueSet(null|string|FHIRCanonicalPrimitive|FHIRCanonical $normalCodedValueSet = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $normalCodedValueSet && !($normalCodedValueSet instanceof FHIRCanonical)) {
            $normalCodedValueSet = new FHIRCanonical($normalCodedValueSet);
        }
        $this->_trackValueSet($this->normalCodedValueSet, $normalCodedValueSet);
        if (!isset($this->_xmlLocations[self::FIELD_NORMAL_CODED_VALUE_SET])) {
            $this->_xmlLocations[self::FIELD_NORMAL_CODED_VALUE_SET] = [];
        }
        $this->_xmlLocations[self::FIELD_NORMAL_CODED_VALUE_SET][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getAbnormalCodedValueSet(): null|FHIRCanonical
    {
        return $this->abnormalCodedValueSet;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical $abnormalCodedValueSet
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAbnormalCodedValueSet(null|string|FHIRCanonicalPrimitive|FHIRCanonical $abnormalCodedValueSet = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $abnormalCodedValueSet && !($abnormalCodedValueSet instanceof FHIRCanonical)) {
            $abnormalCodedValueSet = new FHIRCanonical($abnormalCodedValueSet);
        }
        $this->_trackValueSet($this->abnormalCodedValueSet, $abnormalCodedValueSet);
        if (!isset($this->_xmlLocations[self::FIELD_ABNORMAL_CODED_VALUE_SET])) {
            $this->_xmlLocations[self::FIELD_ABNORMAL_CODED_VALUE_SET] = [];
        }
        $this->_xmlLocations[self::FIELD_ABNORMAL_CODED_VALUE_SET][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getCriticalCodedValueSet(): null|FHIRCanonical
    {
        return $this->criticalCodedValueSet;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical $criticalCodedValueSet
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCriticalCodedValueSet(null|string|FHIRCanonicalPrimitive|FHIRCanonical $criticalCodedValueSet = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $criticalCodedValueSet && !($criticalCodedValueSet instanceof FHIRCanonical)) {
            $criticalCodedValueSet = new FHIRCanonical($criticalCodedValueSet);
        }
        $this->_trackValueSet($this->criticalCodedValueSet, $criticalCodedValueSet);
        if (!isset($this->_xmlLocations[self::FIELD_CRITICAL_CODED_VALUE_SET])) {
            $this->_xmlLocations[self::FIELD_CRITICAL_CODED_VALUE_SET] = [];
        }
        $this->_xmlLocations[self::FIELD_CRITICAL_CODED_VALUE_SET][0] = $xmlLocation;
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
        if (null !== ($v = $this->getContext())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTEXT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAppliesTo())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_APPLIES_TO, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getGender())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GENDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGestationalAge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GESTATIONAL_AGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCondition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONDITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRangeCategory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RANGE_CATEGORY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValidCodedValueSet())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALID_CODED_VALUE_SET] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNormalCodedValueSet())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NORMAL_CODED_VALUE_SET] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAbnormalCodedValueSet())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ABNORMAL_CODED_VALUE_SET] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCriticalCodedValueSet())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CRITICAL_CODED_VALUE_SET] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CONTEXT])) {
            $v = $this->getContext();
            foreach($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_VALUE, self::FIELD_CONTEXT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_VALUE, self::FIELD_APPLIES_TO, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_VALUE, self::FIELD_GENDER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_VALUE, self::FIELD_AGE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_VALUE, self::FIELD_GESTATIONAL_AGE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_VALUE, self::FIELD_CONDITION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_VALUE, self::FIELD_RANGE_CATEGORY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_VALUE, self::FIELD_RANGE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_VALUE, self::FIELD_VALID_CODED_VALUE_SET, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_VALUE, self::FIELD_NORMAL_CODED_VALUE_SET, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_VALUE, self::FIELD_ABNORMAL_CODED_VALUE_SET, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_VALUE, self::FIELD_CRITICAL_CODED_VALUE_SET, $rule, $constraint, $v);
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue
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
        } else if (!($type instanceof FHIRObservationDefinitionQualifiedValue)) {
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
            if (self::FIELD_CONTEXT === $childName) {
                $type->setContext(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_APPLIES_TO === $childName) {
                $type->addAppliesTo(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_GENDER === $childName) {
                $type->setGender(FHIRAdministrativeGender::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_AGE === $childName) {
                $type->setAge(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_GESTATIONAL_AGE === $childName) {
                $type->setGestationalAge(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONDITION === $childName) {
                $type->setCondition(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_RANGE_CATEGORY === $childName) {
                $type->setRangeCategory(FHIRObservationRangeCategory::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RANGE === $childName) {
                $type->setRange(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALID_CODED_VALUE_SET === $childName) {
                $type->setValidCodedValueSet(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_NORMAL_CODED_VALUE_SET === $childName) {
                $type->setNormalCodedValueSet(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ABNORMAL_CODED_VALUE_SET === $childName) {
                $type->setAbnormalCodedValueSet(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CRITICAL_CODED_VALUE_SET === $childName) {
                $type->setCriticalCodedValueSet(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_CONDITION])) {
            $pt = $type->getCondition();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CONDITION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCondition((string)$attributes[self::FIELD_CONDITION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALID_CODED_VALUE_SET])) {
            $pt = $type->getValidCodedValueSet();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALID_CODED_VALUE_SET], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValidCodedValueSet((string)$attributes[self::FIELD_VALID_CODED_VALUE_SET], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NORMAL_CODED_VALUE_SET])) {
            $pt = $type->getNormalCodedValueSet();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NORMAL_CODED_VALUE_SET], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setNormalCodedValueSet((string)$attributes[self::FIELD_NORMAL_CODED_VALUE_SET], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ABNORMAL_CODED_VALUE_SET])) {
            $pt = $type->getAbnormalCodedValueSet();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ABNORMAL_CODED_VALUE_SET], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAbnormalCodedValueSet((string)$attributes[self::FIELD_ABNORMAL_CODED_VALUE_SET], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CRITICAL_CODED_VALUE_SET])) {
            $pt = $type->getCriticalCodedValueSet();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CRITICAL_CODED_VALUE_SET], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCriticalCodedValueSet((string)$attributes[self::FIELD_CRITICAL_CODED_VALUE_SET], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'ObservationDefinitionQualifiedValue', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_CONDITION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCondition())) {
            $xw->writeAttribute(self::FIELD_CONDITION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_VALID_CODED_VALUE_SET] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValidCodedValueSet())) {
            $xw->writeAttribute(self::FIELD_VALID_CODED_VALUE_SET, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_NORMAL_CODED_VALUE_SET] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getNormalCodedValueSet())) {
            $xw->writeAttribute(self::FIELD_NORMAL_CODED_VALUE_SET, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_ABNORMAL_CODED_VALUE_SET] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAbnormalCodedValueSet())) {
            $xw->writeAttribute(self::FIELD_ABNORMAL_CODED_VALUE_SET, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_CRITICAL_CODED_VALUE_SET] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCriticalCodedValueSet())) {
            $xw->writeAttribute(self::FIELD_CRITICAL_CODED_VALUE_SET, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getContext())) {
            $xw->startElement(self::FIELD_CONTEXT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAppliesTo() as $v) {
            $xw->startElement(self::FIELD_APPLIES_TO);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getGender())) {
            $xw->startElement(self::FIELD_GENDER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAge())) {
            $xw->startElement(self::FIELD_AGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getGestationalAge())) {
            $xw->startElement(self::FIELD_GESTATIONAL_AGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_CONDITION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCondition())) {
            $xw->startElement(self::FIELD_CONDITION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRangeCategory())) {
            $xw->startElement(self::FIELD_RANGE_CATEGORY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRange())) {
            $xw->startElement(self::FIELD_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_VALID_CODED_VALUE_SET] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValidCodedValueSet())) {
            $xw->startElement(self::FIELD_VALID_CODED_VALUE_SET);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_NORMAL_CODED_VALUE_SET] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getNormalCodedValueSet())) {
            $xw->startElement(self::FIELD_NORMAL_CODED_VALUE_SET);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_ABNORMAL_CODED_VALUE_SET] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAbnormalCodedValueSet())) {
            $xw->startElement(self::FIELD_ABNORMAL_CODED_VALUE_SET);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_CRITICAL_CODED_VALUE_SET] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCriticalCodedValueSet())) {
            $xw->startElement(self::FIELD_CRITICAL_CODED_VALUE_SET);
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
        if (null !== ($v = $this->getContext())) {
            $out->{self::FIELD_CONTEXT} = $v;
        }
        if ([] !== ($vs = $this->getAppliesTo())) {
            $out->{self::FIELD_APPLIES_TO} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_APPLIES_TO}[] = $v;
            }
        }
        if (null !== ($v = $this->getGender())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_GENDER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRAdministrativeGender::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_GENDER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAge())) {
            $out->{self::FIELD_AGE} = $v;
        }
        if (null !== ($v = $this->getGestationalAge())) {
            $out->{self::FIELD_GESTATIONAL_AGE} = $v;
        }
        if (null !== ($v = $this->getCondition())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONDITION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONDITION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRangeCategory())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RANGE_CATEGORY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRObservationRangeCategory::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RANGE_CATEGORY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRange())) {
            $out->{self::FIELD_RANGE} = $v;
        }
        if (null !== ($v = $this->getValidCodedValueSet())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALID_CODED_VALUE_SET} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALID_CODED_VALUE_SET_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getNormalCodedValueSet())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NORMAL_CODED_VALUE_SET} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NORMAL_CODED_VALUE_SET_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAbnormalCodedValueSet())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ABNORMAL_CODED_VALUE_SET} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ABNORMAL_CODED_VALUE_SET_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCriticalCodedValueSet())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CRITICAL_CODED_VALUE_SET} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CRITICAL_CODED_VALUE_SET_EXT} = $ext;
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