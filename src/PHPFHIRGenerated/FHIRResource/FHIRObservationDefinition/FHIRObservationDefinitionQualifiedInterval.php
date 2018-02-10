<?php namespace PHPFHIRGenerated\FHIRResource\FHIRObservationDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * Set of definitional characteristics for a kind of observation or measurement produced or consumed by an orderable health care service.
 */
class FHIRObservationDefinitionQualifiedInterval extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The category or type of interval.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * The value and associated unit of the low bound (inclusive) of the reference range.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $range = null;

    /**
     * Codes to indicate what part of the targeted reference population it applies to. For example, the normal or therapeutic range.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Codes to indicate the target population this reference range applies to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $appliesTo = [];

    /**
     * The age at which this reference range is applicable. This is a neonatal age (e.g. number of weeks at term) if the meaning says so.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $age = null;

    /**
     * The gestational age at which this reference range is applicable, in the context of pregnancy.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $gestationalAge = null;

    /**
     * Text based condition for which the reference range is valid.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $condition = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ObservationDefinition.QualifiedInterval';

    /**
     * The category or type of interval.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * The category or type of interval.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    /**
     * The value and associated unit of the low bound (inclusive) of the reference range.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getRange() {
        return $this->range;
    }

    /**
     * The value and associated unit of the low bound (inclusive) of the reference range.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $range
     * @return $this
     */
    public function setRange($range) {
        $this->range = $range;
        return $this;
    }

    /**
     * Codes to indicate what part of the targeted reference population it applies to. For example, the normal or therapeutic range.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Codes to indicate what part of the targeted reference population it applies to. For example, the normal or therapeutic range.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Codes to indicate the target population this reference range applies to.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAppliesTo() {
        return $this->appliesTo;
    }

    /**
     * Codes to indicate the target population this reference range applies to.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $appliesTo
     * @return $this
     */
    public function addAppliesTo($appliesTo) {
        $this->appliesTo[] = $appliesTo;
        return $this;
    }

    /**
     * The age at which this reference range is applicable. This is a neonatal age (e.g. number of weeks at term) if the meaning says so.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getAge() {
        return $this->age;
    }

    /**
     * The age at which this reference range is applicable. This is a neonatal age (e.g. number of weeks at term) if the meaning says so.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $age
     * @return $this
     */
    public function setAge($age) {
        $this->age = $age;
        return $this;
    }

    /**
     * The gestational age at which this reference range is applicable, in the context of pregnancy.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getGestationalAge() {
        return $this->gestationalAge;
    }

    /**
     * The gestational age at which this reference range is applicable, in the context of pregnancy.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $gestationalAge
     * @return $this
     */
    public function setGestationalAge($gestationalAge) {
        $this->gestationalAge = $gestationalAge;
        return $this;
    }

    /**
     * Text based condition for which the reference range is valid.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCondition() {
        return $this->condition;
    }

    /**
     * Text based condition for which the reference range is valid.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $condition
     * @return $this
     */
    public function setCondition($condition) {
        $this->condition = $condition;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['range'])) {
                $this->setRange($data['range']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['appliesTo'])) {
                if (is_array($data['appliesTo'])) {
                    foreach($data['appliesTo'] as $d) {
                        $this->addAppliesTo($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"appliesTo" must be array of objects or null, '.gettype($data['appliesTo']).' seen.');
                }
            }
            if (isset($data['age'])) {
                $this->setAge($data['age']);
            }
            if (isset($data['gestationalAge'])) {
                $this->setGestationalAge($data['gestationalAge']);
            }
            if (isset($data['condition'])) {
                $this->setCondition($data['condition']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        if (isset($this->category)) $json['category'] = $this->category;
        if (isset($this->range)) $json['range'] = $this->range;
        if (isset($this->type)) $json['type'] = $this->type;
        if (0 < count($this->appliesTo)) {
            $json['appliesTo'] = [];
            foreach($this->appliesTo as $appliesTo) {
                if (null !== $appliesTo) $json['appliesTo'][] = $appliesTo;
            }
        }
        if (isset($this->age)) $json['age'] = $this->age;
        if (isset($this->gestationalAge)) $json['gestationalAge'] = $this->gestationalAge;
        if (isset($this->condition)) $json['condition'] = $this->condition;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ObservationDefinitionQualifiedInterval xmlns="http://hl7.org/fhir"></ObservationDefinitionQualifiedInterval>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->category)) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (isset($this->range)) $this->range->xmlSerialize(true, $sxe->addChild('range'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (0 < count($this->appliesTo)) {
            foreach($this->appliesTo as $appliesTo) {
                $appliesTo->xmlSerialize(true, $sxe->addChild('appliesTo'));
            }
        }
        if (isset($this->age)) $this->age->xmlSerialize(true, $sxe->addChild('age'));
        if (isset($this->gestationalAge)) $this->gestationalAge->xmlSerialize(true, $sxe->addChild('gestationalAge'));
        if (isset($this->condition)) $this->condition->xmlSerialize(true, $sxe->addChild('condition'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}