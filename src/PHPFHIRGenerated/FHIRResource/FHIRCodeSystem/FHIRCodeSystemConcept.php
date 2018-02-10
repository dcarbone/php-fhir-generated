<?php namespace PHPFHIRGenerated\FHIRResource\FHIRCodeSystem;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A code system resource specifies a set of codes drawn from one or more code systems.
 */
class FHIRCodeSystemConcept extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A code - a text symbol - that uniquely identifies the concept within the code system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $code = null;

    /**
     * A human readable string that is the recommended default way to present this concept to a user.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $display = null;

    /**
     * The formal definition of the concept. The code system resource does not make formal definitions required, because of the prevalence of legacy systems. However, they are highly recommended, as without them there is no formal meaning associated with the concept.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $definition = null;

    /**
     * Additional representations for the concept - other languages, aliases, specialized purposes, used for particular purposes, etc.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCodeSystem\FHIRCodeSystemDesignation[]
     */
    public $designation = array();

    /**
     * A property value for this concept.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCodeSystem\FHIRCodeSystemProperty1[]
     */
    public $property = array();

    /**
     * Defines children of a concept to produce a hierarchy of concepts. The nature of the relationships is variable (is-a/contains/categorizes) - see hierarchyMeaning.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCodeSystem\FHIRCodeSystemConcept[]
     */
    public $concept = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'CodeSystem.Concept';

    /**
     * A code - a text symbol - that uniquely identifies the concept within the code system.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A code - a text symbol - that uniquely identifies the concept within the code system.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A human readable string that is the recommended default way to present this concept to a user.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * A human readable string that is the recommended default way to present this concept to a user.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $display
     * @return $this
     */
    public function setDisplay($display)
    {
        $this->display = $display;
        return $this;
    }

    /**
     * The formal definition of the concept. The code system resource does not make formal definitions required, because of the prevalence of legacy systems. However, they are highly recommended, as without them there is no formal meaning associated with the concept.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * The formal definition of the concept. The code system resource does not make formal definitions required, because of the prevalence of legacy systems. However, they are highly recommended, as without them there is no formal meaning associated with the concept.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $definition
     * @return $this
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * Additional representations for the concept - other languages, aliases, specialized purposes, used for particular purposes, etc.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCodeSystem\FHIRCodeSystemDesignation[]
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Additional representations for the concept - other languages, aliases, specialized purposes, used for particular purposes, etc.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCodeSystem\FHIRCodeSystemDesignation $designation
     * @return $this
     */
    public function addDesignation($designation)
    {
        $this->designation[] = $designation;
        return $this;
    }

    /**
     * A property value for this concept.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCodeSystem\FHIRCodeSystemProperty1[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * A property value for this concept.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCodeSystem\FHIRCodeSystemProperty1 $property
     * @return $this
     */
    public function addProperty($property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * Defines children of a concept to produce a hierarchy of concepts. The nature of the relationships is variable (is-a/contains/categorizes) - see hierarchyMeaning.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCodeSystem\FHIRCodeSystemConcept[]
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * Defines children of a concept to produce a hierarchy of concepts. The nature of the relationships is variable (is-a/contains/categorizes) - see hierarchyMeaning.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCodeSystem\FHIRCodeSystemConcept $concept
     * @return $this
     */
    public function addConcept($concept)
    {
        $this->concept[] = $concept;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->code) $json['code'] = $this->code;
        if (null !== $this->display) $json['display'] = $this->display;
        if (null !== $this->definition) $json['definition'] = $this->definition;
        if (0 < count($this->designation)) {
            $json['designation'] = [];
            foreach($this->designation as $designation) {
                $json['designation'][] = $designation;
            }
        }
        if (0 < count($this->property)) {
            $json['property'] = [];
            foreach($this->property as $property) {
                $json['property'][] = $property;
            }
        }
        if (0 < count($this->concept)) {
            $json['concept'] = [];
            foreach($this->concept as $concept) {
                $json['concept'][] = $concept;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CodeSystemConcept xmlns="http://hl7.org/fhir"></CodeSystemConcept>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->display) $this->display->xmlSerialize(true, $sxe->addChild('display'));
        if (null !== $this->definition) $this->definition->xmlSerialize(true, $sxe->addChild('definition'));
        if (0 < count($this->designation)) {
            foreach($this->designation as $designation) {
                $designation->xmlSerialize(true, $sxe->addChild('designation'));
            }
        }
        if (0 < count($this->property)) {
            foreach($this->property as $property) {
                $property->xmlSerialize(true, $sxe->addChild('property'));
            }
        }
        if (0 < count($this->concept)) {
            foreach($this->concept as $concept) {
                $concept->xmlSerialize(true, $sxe->addChild('concept'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}