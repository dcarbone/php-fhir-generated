<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap;

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
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * A statement of relationships from one set of concepts to one or more other concepts - either concepts in code systems, or data element/data element concepts, or classes in class models.
 *
 * Class FHIRConceptMapDependsOn
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap
 */
class FHIRConceptMapDependsOn extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ConceptMap.DependsOn';

    /**
     * The display for the code. The display is only provided to help editors when editing the concept map.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $display = null;

    /**
     * A reference to an element that holds a coded value that corresponds to a code system property. The idea is that the information model carries an element somewhere that is labeled to correspond with a code system property.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $property = null;

    /**
     * An absolute URI that identifies the code system of the dependency code (if the source/dependency is a value set that crosses code systems).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $system = null;

    /**
     * Identity (code or path) or the element/item/ValueSet/text that the map depends on / refers to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $value = null;

    /**
     * FHIRConceptMapDependsOn Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['display'])) {
                $this->setDisplay($data['display']);
            }
            if (isset($data['property'])) {
                $this->setProperty($data['property']);
            }
            if (isset($data['system'])) {
                $this->setSystem($data['system']);
            }
            if (isset($data['value'])) {
                $this->setValue($data['value']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The display for the code. The display is only provided to help editors when editing the concept map.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDisplay($display)
    {
        if (null === $display) {
            return $this; 
        }
        if (is_scalar($display)) {
            $display = new FHIRString($display);
        }
        if (!($display instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConceptMapDependsOn::setDisplay - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($display)
            ));
        }
        $this->display = $display;
        return $this;
    }

    /**
     * The display for the code. The display is only provided to help editors when editing the concept map.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDisplay()
    {
        return $this->display;
    }


    /**
     * A reference to an element that holds a coded value that corresponds to a code system property. The idea is that the information model carries an element somewhere that is labeled to correspond with a code system property.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setProperty($property)
    {
        if (null === $property) {
            return $this; 
        }
        if (is_scalar($property)) {
            $property = new FHIRUri($property);
        }
        if (!($property instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConceptMapDependsOn::setProperty - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($property)
            ));
        }
        $this->property = $property;
        return $this;
    }

    /**
     * A reference to an element that holds a coded value that corresponds to a code system property. The idea is that the information model carries an element somewhere that is labeled to correspond with a code system property.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getProperty()
    {
        return $this->property;
    }


    /**
     * An absolute URI that identifies the code system of the dependency code (if the source/dependency is a value set that crosses code systems).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setSystem($system)
    {
        if (null === $system) {
            return $this; 
        }
        if (is_scalar($system)) {
            $system = new FHIRCanonical($system);
        }
        if (!($system instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConceptMapDependsOn::setSystem - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($system)
            ));
        }
        $this->system = $system;
        return $this;
    }

    /**
     * An absolute URI that identifies the code system of the dependency code (if the source/dependency is a value set that crosses code systems).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getSystem()
    {
        return $this->system;
    }


    /**
     * Identity (code or path) or the element/item/ValueSet/text that the map depends on / refers to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setValue($value)
    {
        if (null === $value) {
            return $this; 
        }
        if (is_scalar($value)) {
            $value = new FHIRString($value);
        }
        if (!($value instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConceptMapDependsOn::setValue - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($value)
            ));
        }
        $this->value = $value;
        return $this;
    }

    /**
     * Identity (code or path) or the element/item/ValueSet/text that the map depends on / refers to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValue()
    {
        return $this->value;
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
        if (null !== ($v = $this->getDisplay())) {
            $a['display'] = $v;
        }
        if (null !== ($v = $this->getProperty())) {
            $a['property'] = $v;
        }
        if (null !== ($v = $this->getSystem())) {
            $a['system'] = $v;
        }
        if (null !== ($v = $this->getValue())) {
            $a['value'] = $v;
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
            $sxe = new \SimpleXMLElement('<ConceptMapDependsOn xmlns="http://hl7.org/fhir"></ConceptMapDependsOn>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}