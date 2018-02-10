<?php namespace PHPFHIRGenerated\FHIRResource\FHIRConceptMap;

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
 * A statement of relationships from one set of concepts to one or more other concepts - either code systems or data elements, or classes in class models.
 */
class FHIRConceptMapDependsOn extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A reference to an element that holds a coded value that corresponds to a code system property. The idea is that the information model carries an element somwhere that is labeled to correspond with a code system property.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $property = null;

    /**
     * An absolute URI that identifies the code system of the dependency code (if the source/dependency is a value set that crosses code systems).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $system = null;

    /**
     * Identity (code or path) or the element/item/ValueSet that the map depends on / refers to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $code = null;

    /**
     * The display for the code. The display is only provided to help editors when editing the concept map.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $display = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ConceptMap.DependsOn';

    /**
     * A reference to an element that holds a coded value that corresponds to a code system property. The idea is that the information model carries an element somwhere that is labeled to correspond with a code system property.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getProperty() {
        return $this->property;
    }

    /**
     * A reference to an element that holds a coded value that corresponds to a code system property. The idea is that the information model carries an element somwhere that is labeled to correspond with a code system property.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $property
     * @return $this
     */
    public function setProperty($property) {
        $this->property = $property;
        return $this;
    }

    /**
     * An absolute URI that identifies the code system of the dependency code (if the source/dependency is a value set that crosses code systems).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getSystem() {
        return $this->system;
    }

    /**
     * An absolute URI that identifies the code system of the dependency code (if the source/dependency is a value set that crosses code systems).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $system
     * @return $this
     */
    public function setSystem($system) {
        $this->system = $system;
        return $this;
    }

    /**
     * Identity (code or path) or the element/item/ValueSet that the map depends on / refers to.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Identity (code or path) or the element/item/ValueSet that the map depends on / refers to.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $code
     * @return $this
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * The display for the code. The display is only provided to help editors when editing the concept map.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDisplay() {
        return $this->display;
    }

    /**
     * The display for the code. The display is only provided to help editors when editing the concept map.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $display
     * @return $this
     */
    public function setDisplay($display) {
        $this->display = $display;
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
            if (isset($data['property'])) {
                $this->setProperty($data['property']);
            }
            if (isset($data['system'])) {
                $this->setSystem($data['system']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['display'])) {
                $this->setDisplay($data['display']);
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
        if (isset($this->property)) $json['property'] = $this->property;
        if (isset($this->system)) $json['system'] = $this->system;
        if (isset($this->code)) $json['code'] = $this->code;
        if (isset($this->display)) $json['display'] = $this->display;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ConceptMapDependsOn xmlns="http://hl7.org/fhir"></ConceptMapDependsOn>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->property)) $this->property->xmlSerialize(true, $sxe->addChild('property'));
        if (isset($this->system)) $this->system->xmlSerialize(true, $sxe->addChild('system'));
        if (isset($this->code)) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (isset($this->display)) $this->display->xmlSerialize(true, $sxe->addChild('display'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}