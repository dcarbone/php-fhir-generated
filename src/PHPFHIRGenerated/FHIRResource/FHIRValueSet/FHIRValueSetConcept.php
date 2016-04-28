<?php namespace PHPFHIRGenerated\FHIRResource\FHIRValueSet;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\JsonSerializable;

/**
 * A value set specifies a set of codes drawn from one or more code systems.
 */
class FHIRValueSetConcept extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * A code - a text symbol - that uniquely identifies the concept within the code system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $code = null;

    /**
     * If this code is not for use as a real concept.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $abstract = null;

    /**
     * A human readable string that is the recommended default way to present this concept to a user.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $display = null;

    /**
     * The formal definition of the concept. The value set resource does not make formal definitions required, because of the prevalence of legacy systems. However, they are highly recommended, as without them there is no formal meaning associated with the concept.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $definition = null;

    /**
     * Additional representations for the concept - other languages, aliases, specialized purposes, used for particular purposes, etc.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetDesignation[]
     */
    public $designation = array();

    /**
     * Defines children of a concept to produce a hierarchy of concepts. The nature of the relationships is variable (is-a/contains/categorizes) and can only be determined by examining the definitions of the concepts.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetConcept[]
     */
    public $concept = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ValueSet.Concept';

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
     * If this code is not for use as a real concept.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * If this code is not for use as a real concept.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $abstract
     * @return $this
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;
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
     * The formal definition of the concept. The value set resource does not make formal definitions required, because of the prevalence of legacy systems. However, they are highly recommended, as without them there is no formal meaning associated with the concept.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * The formal definition of the concept. The value set resource does not make formal definitions required, because of the prevalence of legacy systems. However, they are highly recommended, as without them there is no formal meaning associated with the concept.
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
     * @return \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetDesignation[]
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Additional representations for the concept - other languages, aliases, specialized purposes, used for particular purposes, etc.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetDesignation[] $designation
     * @return $this
     */
    public function addDesignation($designation)
    {
        $this->designation[] = $designation;
        return $this;
    }

    /**
     * Defines children of a concept to produce a hierarchy of concepts. The nature of the relationships is variable (is-a/contains/categorizes) and can only be determined by examining the definitions of the concepts.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetConcept[]
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * Defines children of a concept to produce a hierarchy of concepts. The nature of the relationships is variable (is-a/contains/categorizes) and can only be determined by examining the definitions of the concepts.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetConcept[] $concept
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
        if (null !== $this->code) $json['code'] = $this->code->jsonSerialize();
        if (null !== $this->abstract) $json['abstract'] = $this->abstract->jsonSerialize();
        if (null !== $this->display) $json['display'] = $this->display->jsonSerialize();
        if (null !== $this->definition) $json['definition'] = $this->definition->jsonSerialize();
        if (0 < count($this->designation)) {
            $json['designation'] = array();
            foreach($this->designation as $designation) {
                $json['designation'][] = $designation->jsonSerialize();
            }
        }
        if (0 < count($this->concept)) {
            $json['concept'] = array();
            foreach($this->concept as $concept) {
                $json['concept'][] = $concept->jsonSerialize();
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ValueSetConcept xmlns="http://hl7.org/fhir"></ValueSetConcept>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->abstract) $this->abstract->xmlSerialize(true, $sxe->addChild('abstract'));
        if (null !== $this->display) $this->display->xmlSerialize(true, $sxe->addChild('display'));
        if (null !== $this->definition) $this->definition->xmlSerialize(true, $sxe->addChild('definition'));
        if (0 < count($this->designation)) {
            foreach($this->designation as $designation) {
                $designation->xmlSerialize(true, $sxe->addChild('designation'));
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