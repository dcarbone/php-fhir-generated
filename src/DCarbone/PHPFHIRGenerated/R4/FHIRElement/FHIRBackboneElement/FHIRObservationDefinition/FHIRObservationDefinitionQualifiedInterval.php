<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
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
    const FIELD_CONDITION = 'condition';
    const FIELD_CONDITION_EXT = '_condition';
    const FIELD_CONTEXT = 'context';
    const FIELD_GENDER = 'gender';
    const FIELD_GESTATIONAL_AGE = 'gestationalAge';
    const FIELD_RANGE = 'range';

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The age at which this reference range is applicable. This is a neonatal age
     * (e.g. number of weeks at term) if the meaning says so.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    private $age = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Codes to indicate the target population this reference range applies to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $appliesTo = [];
    /**
     * Codes identifying the category of observation range.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The category of interval of values for continuous or ordinal observations
     * conforming to this ObservationDefinition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRObservationRangeCategory
     */
    private $category = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Text based condition for which the reference range is valid.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $condition = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Codes to indicate the health context the range applies to. For example, the
     * normal or therapeutic range.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $context = null;
    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Sex of the population the range applies to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAdministrativeGender
     */
    private $gender = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The gestational age to which this reference range is applicable, in the context
     * of pregnancy.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    private $gestationalAge = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The low and high values determining the interval. There may be only one of the
     * two.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    private $range = null;

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
        if (isset($data[self::FIELD_CATEGORY])) {
            if ($data[self::FIELD_CATEGORY] instanceof FHIRObservationRangeCategory) {
                $this->setCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->setCategory(new FHIRObservationRangeCategory($data[self::FIELD_CATEGORY]));
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
            if ($data[self::FIELD_CONTEXT] instanceof FHIRCodeableConcept) {
                $this->setContext($data[self::FIELD_CONTEXT]);
            } else {
                $this->setContext(new FHIRCodeableConcept($data[self::FIELD_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_GENDER])) {
            if ($data[self::FIELD_GENDER] instanceof FHIRAdministrativeGender) {
                $this->setGender($data[self::FIELD_GENDER]);
            } else {
                $this->setGender(new FHIRAdministrativeGender($data[self::FIELD_GENDER]));
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
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The age at which this reference range is applicable. This is a neonatal age
     * (e.g. number of weeks at term) if the meaning says so.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $age
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Codes to indicate the target population this reference range applies to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $appliesTo
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Codes to indicate the target population this reference range applies to.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $appliesTo
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval
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
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The category of interval of values for continuous or ordinal observations
     * conforming to this ObservationDefinition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRObservationRangeCategory $category
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval
     */
    public function setCategory(FHIRObservationRangeCategory $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Text based condition for which the reference range is valid.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $condition
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Codes to indicate the health context the range applies to. For example, the
     * normal or therapeutic range.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $context
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval
     */
    public function setContext(FHIRCodeableConcept $context = null)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Sex of the population the range applies to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAdministrativeGender $gender
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval
     */
    public function setGender(FHIRAdministrativeGender $gender = null)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The gestational age to which this reference range is applicable, in the context
     * of pregnancy.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $gestationalAge
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval
     */
    public function setGestationalAge(FHIRRange $gestationalAge = null)
    {
        $this->gestationalAge = $gestationalAge;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The low and high values determining the interval. There may be only one of the
     * two.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $range
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval
     */
    public function setRange(FHIRRange $range = null)
    {
        $this->range = $range;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval $type
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRObservationDefinitionQualifiedInterval::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRObservationDefinitionQualifiedInterval::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRObservationDefinitionQualifiedInterval);
        } elseif (!is_object($type) || !($type instanceof FHIRObservationDefinitionQualifiedInterval)) {
            throw new \RuntimeException(sprintf(
                'FHIRObservationDefinitionQualifiedInterval::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
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
        if (isset($attributes->condition)) {
            $type->setCondition((string)$attributes->condition);
        }
        if (isset($children->condition)) {
            $type->setCondition(FHIRString::xmlUnserialize($children->condition));
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
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ObservationDefinitionQualifiedInterval xmlns="http://hl7.org/fhir"></ObservationDefinitionQualifiedInterval>');
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getAge())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AGE));
        }

        if ([] !== ($vs = $this->getAppliesTo())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_APPLIES_TO));
            }
        }

        if (null !== ($v = $this->getCategory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY));
        }
        if (null !== ($v = $this->getCondition())) {
            $sxe->addAttribute(self::FIELD_CONDITION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONDITION));
            }
        }

        if (null !== ($v = $this->getContext())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTEXT));
        }

        if (null !== ($v = $this->getGender())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GENDER));
        }

        if (null !== ($v = $this->getGestationalAge())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GESTATIONAL_AGE));
        }

        if (null !== ($v = $this->getRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RANGE));
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
            $a[self::FIELD_APPLIES_TO] = $vs;
        }
        if (null !== ($v = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = $v;
        }
        if (null !== ($v = $this->getCondition())) {
            $a[self::FIELD_CONDITION] = (string)$v;
            $a[self::FIELD_CONDITION_EXT] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a[self::FIELD_CONTEXT] = $v;
        }
        if (null !== ($v = $this->getGender())) {
            $a[self::FIELD_GENDER] = $v;
        }
        if (null !== ($v = $this->getGestationalAge())) {
            $a[self::FIELD_GESTATIONAL_AGE] = $v;
        }
        if (null !== ($v = $this->getRange())) {
            $a[self::FIELD_RANGE] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}