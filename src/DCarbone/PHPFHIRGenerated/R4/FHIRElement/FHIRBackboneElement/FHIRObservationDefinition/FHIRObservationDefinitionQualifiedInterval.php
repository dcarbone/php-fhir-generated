<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAdministrativeGender;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRObservationRangeCategory;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Set of definitional characteristics for a kind of observation or measurement
 * produced or consumed by an orderable health care service.
 *
 * Class FHIRObservationDefinitionQualifiedInterval
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition
 */
class FHIRObservationDefinitionQualifiedInterval extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_INTERVAL;
    const FIELD_AGE = 'age';
    const FIELD_APPLIES_TO = 'appliesTo';
    const FIELD_CATEGORY = 'category';
    const FIELD_CATEGORY_EXT = '_category';
    const FIELD_CONDITION = 'condition';
    const FIELD_CONDITION_EXT = '_condition';
    const FIELD_CONTEXT = 'context';
    const FIELD_GENDER = 'gender';
    const FIELD_GENDER_EXT = '_gender';
    const FIELD_GESTATIONAL_AGE = 'gestationalAge';
    const FIELD_RANGE = 'range';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age at which this reference range is applicable. This is a neonatal age
     * (e.g. number of weeks at term) if the meaning says so.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    protected $age = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes to indicate the target population this reference range applies to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $appliesTo = [];

    /**
     * Codes identifying the category of observation range.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The category of interval of values for continuous or ordinal observations
     * conforming to this ObservationDefinition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRObservationRangeCategory
     */
    protected $category = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text based condition for which the reference range is valid.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $condition = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes to indicate the health context the range applies to. For example, the
     * normal or therapeutic range.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $context = null;

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sex of the population the range applies to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAdministrativeGender
     */
    protected $gender = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The gestational age to which this reference range is applicable, in the context
     * of pregnancy.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    protected $gestationalAge = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The low and high values determining the interval. There may be only one of the
     * two.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    protected $range = null;

    /**
     * Validation map for fields in type ObservationDefinition.QualifiedInterval
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRObservationDefinitionQualifiedInterval Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservationDefinitionQualifiedInterval::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AGE])) {
            if ($data[self::FIELD_AGE] instanceof FHIRRange) {
                $this->setAge($data[self::FIELD_AGE]);
            } else {
                $this->setAge(new FHIRRange($data[self::FIELD_AGE]));
            }
        }
        if (isset($data[self::FIELD_APPLIES_TO])) {
            if (is_array($data[self::FIELD_APPLIES_TO])) {
                foreach($data[self::FIELD_APPLIES_TO] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addAppliesTo($v);
                    } else {
                        $this->addAppliesTo(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_APPLIES_TO] instanceof FHIRCodeableConcept) {
                $this->addAppliesTo($data[self::FIELD_APPLIES_TO]);
            } else {
                $this->addAppliesTo(new FHIRCodeableConcept($data[self::FIELD_APPLIES_TO]));
            }
        }
        if (isset($data[self::FIELD_CATEGORY]) || isset($data[self::FIELD_CATEGORY_EXT])) {
            if (isset($data[self::FIELD_CATEGORY])) {
                $value = $data[self::FIELD_CATEGORY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CATEGORY_EXT]) && is_array($data[self::FIELD_CATEGORY_EXT])) {
                $ext = $data[self::FIELD_CATEGORY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRObservationRangeCategory) {
                    $this->setCategory($value);
                } else if (is_array($value)) {
                    $this->setCategory(new FHIRObservationRangeCategory(array_merge($ext, $value)));
                } else {
                    $this->setCategory(new FHIRObservationRangeCategory([FHIRObservationRangeCategory::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCategory(new FHIRObservationRangeCategory($ext));
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
                if ($value instanceof FHIRString) {
                    $this->setCondition($value);
                } else if (is_array($value)) {
                    $this->setCondition(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCondition(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCondition(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_CONTEXT])) {
            if ($data[self::FIELD_CONTEXT] instanceof FHIRCodeableConcept) {
                $this->setContext($data[self::FIELD_CONTEXT]);
            } else {
                $this->setContext(new FHIRCodeableConcept($data[self::FIELD_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_GENDER]) || isset($data[self::FIELD_GENDER_EXT])) {
            if (isset($data[self::FIELD_GENDER])) {
                $value = $data[self::FIELD_GENDER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_GENDER_EXT]) && is_array($data[self::FIELD_GENDER_EXT])) {
                $ext = $data[self::FIELD_GENDER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRAdministrativeGender) {
                    $this->setGender($value);
                } else if (is_array($value)) {
                    $this->setGender(new FHIRAdministrativeGender(array_merge($ext, $value)));
                } else {
                    $this->setGender(new FHIRAdministrativeGender([FHIRAdministrativeGender::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setGender(new FHIRAdministrativeGender($ext));
            }
        }
        if (isset($data[self::FIELD_GESTATIONAL_AGE])) {
            if ($data[self::FIELD_GESTATIONAL_AGE] instanceof FHIRRange) {
                $this->setGestationalAge($data[self::FIELD_GESTATIONAL_AGE]);
            } else {
                $this->setGestationalAge(new FHIRRange($data[self::FIELD_GESTATIONAL_AGE]));
            }
        }
        if (isset($data[self::FIELD_RANGE])) {
            if ($data[self::FIELD_RANGE] instanceof FHIRRange) {
                $this->setRange($data[self::FIELD_RANGE]);
            } else {
                $this->setRange(new FHIRRange($data[self::FIELD_RANGE]));
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
        return "<ObservationDefinitionQualifiedInterval{$xmlns}></ObservationDefinitionQualifiedInterval>";
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age at which this reference range is applicable. This is a neonatal age
     * (e.g. number of weeks at term) if the meaning says so.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age at which this reference range is applicable. This is a neonatal age
     * (e.g. number of weeks at term) if the meaning says so.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $age
     * @return static
     */
    public function setAge(FHIRRange $age = null)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes to indicate the target population this reference range applies to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAppliesTo()
    {
        return $this->appliesTo;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes to indicate the target population this reference range applies to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $appliesTo
     * @return static
     */
    public function addAppliesTo(FHIRCodeableConcept $appliesTo = null)
    {
        $this->appliesTo[] = $appliesTo;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes to indicate the target population this reference range applies to.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $appliesTo
     * @return static
     */
    public function setAppliesTo(array $appliesTo = [])
    {
        $this->appliesTo = [];
        if ([] === $appliesTo) {
            return $this;
        }
        foreach($appliesTo as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addAppliesTo($v);
            } else {
                $this->addAppliesTo(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * Codes identifying the category of observation range.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The category of interval of values for continuous or ordinal observations
     * conforming to this ObservationDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRObservationRangeCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Codes identifying the category of observation range.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The category of interval of values for continuous or ordinal observations
     * conforming to this ObservationDefinition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRObservationRangeCategory $category
     * @return static
     */
    public function setCategory(FHIRObservationRangeCategory $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text based condition for which the reference range is valid.
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text based condition for which the reference range is valid.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $condition
     * @return static
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes to indicate the health context the range applies to. For example, the
     * normal or therapeutic range.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes to indicate the health context the range applies to. For example, the
     * normal or therapeutic range.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $context
     * @return static
     */
    public function setContext(FHIRCodeableConcept $context = null)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sex of the population the range applies to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAdministrativeGender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sex of the population the range applies to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAdministrativeGender $gender
     * @return static
     */
    public function setGender(FHIRAdministrativeGender $gender = null)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The gestational age to which this reference range is applicable, in the context
     * of pregnancy.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    public function getGestationalAge()
    {
        return $this->gestationalAge;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The gestational age to which this reference range is applicable, in the context
     * of pregnancy.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $gestationalAge
     * @return static
     */
    public function setGestationalAge(FHIRRange $gestationalAge = null)
    {
        $this->gestationalAge = $gestationalAge;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The low and high values determining the interval. There may be only one of the
     * two.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The low and high values determining the interval. There may be only one of the
     * two.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $range
     * @return static
     */
    public function setRange(FHIRRange $range = null)
    {
        $this->range = $range;
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
        if (null !== ($v = $this->getAge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AGE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAppliesTo())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_APPLIES_TO, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCategory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CATEGORY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCondition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONDITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContext())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTEXT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGender())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GENDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGestationalAge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GESTATIONAL_AGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RANGE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_AGE])) {
            $v = $this->getAge();
            foreach($validationRules[self::FIELD_AGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_INTERVAL, self::FIELD_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGE])) {
                        $errs[self::FIELD_AGE] = [];
                    }
                    $errs[self::FIELD_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_APPLIES_TO])) {
            $v = $this->getAppliesTo();
            foreach($validationRules[self::FIELD_APPLIES_TO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_INTERVAL, self::FIELD_APPLIES_TO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPLIES_TO])) {
                        $errs[self::FIELD_APPLIES_TO] = [];
                    }
                    $errs[self::FIELD_APPLIES_TO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_INTERVAL, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITION])) {
            $v = $this->getCondition();
            foreach($validationRules[self::FIELD_CONDITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_INTERVAL, self::FIELD_CONDITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITION])) {
                        $errs[self::FIELD_CONDITION] = [];
                    }
                    $errs[self::FIELD_CONDITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTEXT])) {
            $v = $this->getContext();
            foreach($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_INTERVAL, self::FIELD_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT])) {
                        $errs[self::FIELD_CONTEXT] = [];
                    }
                    $errs[self::FIELD_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GENDER])) {
            $v = $this->getGender();
            foreach($validationRules[self::FIELD_GENDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_INTERVAL, self::FIELD_GENDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GENDER])) {
                        $errs[self::FIELD_GENDER] = [];
                    }
                    $errs[self::FIELD_GENDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GESTATIONAL_AGE])) {
            $v = $this->getGestationalAge();
            foreach($validationRules[self::FIELD_GESTATIONAL_AGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_INTERVAL, self::FIELD_GESTATIONAL_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GESTATIONAL_AGE])) {
                        $errs[self::FIELD_GESTATIONAL_AGE] = [];
                    }
                    $errs[self::FIELD_GESTATIONAL_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RANGE])) {
            $v = $this->getRange();
            foreach($validationRules[self::FIELD_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_INTERVAL, self::FIELD_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RANGE])) {
                        $errs[self::FIELD_RANGE] = [];
                    }
                    $errs[self::FIELD_RANGE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval
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
                throw new \DomainException(sprintf('FHIRObservationDefinitionQualifiedInterval::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRObservationDefinitionQualifiedInterval::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRObservationDefinitionQualifiedInterval;
        } elseif (!is_object($type) || !($type instanceof FHIRObservationDefinitionQualifiedInterval)) {
            throw new \RuntimeException(sprintf(
                'FHIRObservationDefinitionQualifiedInterval::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval or null, %s seen.',
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
        if (isset($children->age)) {
            $type->setAge(FHIRRange::xmlUnserialize($children->age));
        }
        if (isset($children->appliesTo)) {
            foreach($children->appliesTo as $child) {
                $type->addAppliesTo(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->category)) {
            $type->setCategory(FHIRObservationRangeCategory::xmlUnserialize($children->category));
        }
        if (isset($children->condition)) {
            $type->setCondition(FHIRString::xmlUnserialize($children->condition));
        }
        if (isset($attributes->condition)) {
            $pt = $type->getCondition();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->condition);
            } else {
                $type->setCondition((string)$attributes->condition);
            }
        }
        if (isset($children->context)) {
            $type->setContext(FHIRCodeableConcept::xmlUnserialize($children->context));
        }
        if (isset($children->gender)) {
            $type->setGender(FHIRAdministrativeGender::xmlUnserialize($children->gender));
        }
        if (isset($children->gestationalAge)) {
            $type->setGestationalAge(FHIRRange::xmlUnserialize($children->gestationalAge));
        }
        if (isset($children->range)) {
            $type->setRange(FHIRRange::xmlUnserialize($children->range));
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
        if (null !== ($v = $this->getAge())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AGE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getAppliesTo())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_APPLIES_TO, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getCategory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCondition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONDITION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getContext())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTEXT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getGender())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GENDER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getGestationalAge())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GESTATIONAL_AGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAge())) {
            $a[self::FIELD_AGE] = $v;
        }
        if ([] !== ($vs = $this->getAppliesTo())) {
            $a[self::FIELD_APPLIES_TO] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_APPLIES_TO][] = $v;
            }
        }
        if (null !== ($v = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRObservationRangeCategory::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRObservationRangeCategory::FIELD_VALUE]);
                $a[self::FIELD_CATEGORY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getCondition())) {
            $a[self::FIELD_CONDITION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_CONDITION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getContext())) {
            $a[self::FIELD_CONTEXT] = $v;
        }
        if (null !== ($v = $this->getGender())) {
            $a[self::FIELD_GENDER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRAdministrativeGender::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRAdministrativeGender::FIELD_VALUE]);
                $a[self::FIELD_GENDER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getGestationalAge())) {
            $a[self::FIELD_GESTATIONAL_AGE] = $v;
        }
        if (null !== ($v = $this->getRange())) {
            $a[self::FIELD_RANGE] = $v;
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