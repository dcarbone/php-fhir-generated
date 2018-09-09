<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * Set of definitional characteristics for a kind of observation or measurement produced or consumed by an orderable health care service.
 *
 * Class FHIRObservationDefinitionQualifiedInterval
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition
 */
class FHIRObservationDefinitionQualifiedInterval extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ObservationDefinition.QualifiedInterval';

    /**
     * The age at which this reference range is applicable. This is a neonatal age (e.g. number of weeks at term) if the meaning says so.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $age = null;

    /**
     * Codes to indicate the target population this reference range applies to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $appliesTo = null;

    /**
     * The category or type of interval.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * Text based condition for which the reference range is valid.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $condition = null;

    /**
     * The gestational age at which this reference range is applicable, in the context of pregnancy.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $gestationalAge = null;

    /**
     * The range of the interval.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $range = null;

    /**
     * Codes to indicate what part of the targeted reference population it applies to. For example, the normal or therapeutic range.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRObservationDefinitionQualifiedInterval Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['age'])) {
                $this->setAge($data['age']);
            }
            if (isset($data['appliesTo'])) {
                $this->setAppliesTo($data['appliesTo']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['condition'])) {
                $this->setCondition($data['condition']);
            }
            if (isset($data['gestationalAge'])) {
                $this->setGestationalAge($data['gestationalAge']);
            }
            if (isset($data['range'])) {
                $this->setRange($data['range']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The age at which this reference range is applicable. This is a neonatal age (e.g. number of weeks at term) if the meaning says so.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setAge(FHIRRange $age = null)
    {
        if (null === $age) {
            return $this; 
        }
        $this->age = $age;
        return $this;
    }

    /**
     * The age at which this reference range is applicable. This is a neonatal age (e.g. number of weeks at term) if the meaning says so.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getAge()
    {
        return $this->age;
    }


    /**
     * Codes to indicate the target population this reference range applies to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setAppliesTo(FHIRCodeableConcept $appliesTo = null)
    {
        if (null === $appliesTo) {
            return $this; 
        }
        $this->appliesTo = $appliesTo;
        return $this;
    }

    /**
     * Codes to indicate the target population this reference range applies to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAppliesTo()
    {
        return $this->appliesTo;
    }


    /**
     * The category or type of interval.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        if (null === $category) {
            return $this; 
        }
        $this->category = $category;
        return $this;
    }

    /**
     * The category or type of interval.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * Text based condition for which the reference range is valid.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setCondition($condition)
    {
        if (null === $condition) {
            return $this; 
        }
        if (is_scalar($condition)) {
            $condition = new FHIRString($condition);
        }
        if (!($condition instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservationDefinitionQualifiedInterval::setCondition - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($condition)
            ));
        }
        $this->condition = $condition;
        return $this;
    }

    /**
     * Text based condition for which the reference range is valid.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCondition()
    {
        return $this->condition;
    }


    /**
     * The gestational age at which this reference range is applicable, in the context of pregnancy.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setGestationalAge(FHIRRange $gestationalAge = null)
    {
        if (null === $gestationalAge) {
            return $this; 
        }
        $this->gestationalAge = $gestationalAge;
        return $this;
    }

    /**
     * The gestational age at which this reference range is applicable, in the context of pregnancy.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getGestationalAge()
    {
        return $this->gestationalAge;
    }


    /**
     * The range of the interval.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setRange(FHIRRange $range = null)
    {
        if (null === $range) {
            return $this; 
        }
        $this->range = $range;
        return $this;
    }

    /**
     * The range of the interval.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getRange()
    {
        return $this->range;
    }


    /**
     * Codes to indicate what part of the targeted reference population it applies to. For example, the normal or therapeutic range.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Codes to indicate what part of the targeted reference population it applies to. For example, the normal or therapeutic range.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAge())) {
            $a['age'] = $v;
        }
        if (null !== ($v = $this->getAppliesTo())) {
            $a['appliesTo'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getCondition())) {
            $a['condition'] = $v;
        }
        if (null !== ($v = $this->getGestationalAge())) {
            $a['gestationalAge'] = $v;
        }
        if (null !== ($v = $this->getRange())) {
            $a['range'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ObservationDefinitionQualifiedInterval xmlns="http://hl7.org/fhir"></ObservationDefinitionQualifiedInterval>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}