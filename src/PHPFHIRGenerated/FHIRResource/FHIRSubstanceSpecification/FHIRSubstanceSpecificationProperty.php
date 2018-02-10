<?php namespace PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification;

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
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 */
class FHIRSubstanceSpecificationProperty extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Description todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Description todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $name = null;

    /**
     * A field that should be used to capture parameters that were used in the measurement of a property.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $parameters = null;

    /**
     * Identifier for a substance upon which a defining property depends.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $substanceId = null;

    /**
     * Description todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $substanceName = null;

    /**
     * Quantitative value for this property.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $amount = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'SubstanceSpecification.Property';

    /**
     * Description todo.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Description todo.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Description todo.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Description todo.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * A field that should be used to capture parameters that were used in the measurement of a property.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getParameters() {
        return $this->parameters;
    }

    /**
     * A field that should be used to capture parameters that were used in the measurement of a property.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $parameters
     * @return $this
     */
    public function setParameters($parameters) {
        $this->parameters = $parameters;
        return $this;
    }

    /**
     * Identifier for a substance upon which a defining property depends.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getSubstanceId() {
        return $this->substanceId;
    }

    /**
     * Identifier for a substance upon which a defining property depends.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $substanceId
     * @return $this
     */
    public function setSubstanceId($substanceId) {
        $this->substanceId = $substanceId;
        return $this;
    }

    /**
     * Description todo.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSubstanceName() {
        return $this->substanceName;
    }

    /**
     * Description todo.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $substanceName
     * @return $this
     */
    public function setSubstanceName($substanceName) {
        $this->substanceName = $substanceName;
        return $this;
    }

    /**
     * Quantitative value for this property.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * Quantitative value for this property.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $amount
     * @return $this
     */
    public function setAmount($amount) {
        $this->amount = $amount;
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
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['parameters'])) {
                $this->setParameters($data['parameters']);
            }
            if (isset($data['substanceId'])) {
                $this->setSubstanceId($data['substanceId']);
            }
            if (isset($data['substanceName'])) {
                $this->setSubstanceName($data['substanceName']);
            }
            if (isset($data['amount'])) {
                $this->setAmount($data['amount']);
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
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->name)) $json['name'] = $this->name;
        if (isset($this->parameters)) $json['parameters'] = $this->parameters;
        if (isset($this->substanceId)) $json['substanceId'] = $this->substanceId;
        if (isset($this->substanceName)) $json['substanceName'] = $this->substanceName;
        if (isset($this->amount)) $json['amount'] = $this->amount;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SubstanceSpecificationProperty xmlns="http://hl7.org/fhir"></SubstanceSpecificationProperty>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->name)) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (isset($this->parameters)) $this->parameters->xmlSerialize(true, $sxe->addChild('parameters'));
        if (isset($this->substanceId)) $this->substanceId->xmlSerialize(true, $sxe->addChild('substanceId'));
        if (isset($this->substanceName)) $this->substanceName->xmlSerialize(true, $sxe->addChild('substanceName'));
        if (isset($this->amount)) $this->amount->xmlSerialize(true, $sxe->addChild('amount'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}