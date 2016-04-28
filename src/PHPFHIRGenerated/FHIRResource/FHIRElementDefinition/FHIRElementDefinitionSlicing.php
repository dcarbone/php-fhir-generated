<?php namespace PHPFHIRGenerated\FHIRResource\FHIRElementDefinition;

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

use PHPFHIRGenerated\FHIRElement;
use PHPFHIRGenerated\JsonSerializable;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRElementDefinitionSlicing extends FHIRElement implements JsonSerializable
{
    /**
     * Designates which child elements are used to discriminate between the slices when processing an instance. If one or more discriminators are provided, the value of the child elements in the instance data SHALL completely distinguish which slice the element in the resource matches based on the allowed values for those elements in each of the slices.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $discriminator = array();

    /**
     * A human-readable text description of how the slicing works. If there is no discriminator, this is required to be present to provide whatever information is possible about how the slices can be differentiated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * If the matching elements have to occur in the same order as defined in the profile.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $ordered = null;

    /**
     * Whether additional slices are allowed or not. When the slices are ordered, profile authors can also say that additional slices are only allowed at the end.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSlicingRules
     */
    public $rules = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ElementDefinition.Slicing';

    /**
     * Designates which child elements are used to discriminate between the slices when processing an instance. If one or more discriminators are provided, the value of the child elements in the instance data SHALL completely distinguish which slice the element in the resource matches based on the allowed values for those elements in each of the slices.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getDiscriminator()
    {
        return $this->discriminator;
    }

    /**
     * Designates which child elements are used to discriminate between the slices when processing an instance. If one or more discriminators are provided, the value of the child elements in the instance data SHALL completely distinguish which slice the element in the resource matches based on the allowed values for those elements in each of the slices.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString[] $discriminator
     * @return $this
     */
    public function addDiscriminator($discriminator)
    {
        $this->discriminator[] = $discriminator;
        return $this;
    }

    /**
     * A human-readable text description of how the slicing works. If there is no discriminator, this is required to be present to provide whatever information is possible about how the slices can be differentiated.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A human-readable text description of how the slicing works. If there is no discriminator, this is required to be present to provide whatever information is possible about how the slices can be differentiated.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * If the matching elements have to occur in the same order as defined in the profile.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getOrdered()
    {
        return $this->ordered;
    }

    /**
     * If the matching elements have to occur in the same order as defined in the profile.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $ordered
     * @return $this
     */
    public function setOrdered($ordered)
    {
        $this->ordered = $ordered;
        return $this;
    }

    /**
     * Whether additional slices are allowed or not. When the slices are ordered, profile authors can also say that additional slices are only allowed at the end.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSlicingRules
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * Whether additional slices are allowed or not. When the slices are ordered, profile authors can also say that additional slices are only allowed at the end.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSlicingRules $rules
     * @return $this
     */
    public function setRules($rules)
    {
        $this->rules = $rules;
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
        if (0 < count($this->discriminator)) {
            $json['discriminator'] = array();
            foreach($this->discriminator as $discriminator) {
                $json['discriminator'][] = $discriminator->jsonSerialize();
            }
        }
        if (null !== $this->description) $json['description'] = $this->description->jsonSerialize();
        if (null !== $this->ordered) $json['ordered'] = $this->ordered->jsonSerialize();
        if (null !== $this->rules) $json['rules'] = $this->rules->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ElementDefinitionSlicing xmlns="http://hl7.org/fhir"></ElementDefinitionSlicing>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->discriminator)) {
            foreach($this->discriminator as $discriminator) {
                $discriminator->xmlSerialize(true, $sxe->addChild('discriminator'));
            }
        }
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->ordered) $this->ordered->xmlSerialize(true, $sxe->addChild('ordered'));
        if (null !== $this->rules) $this->rules->xmlSerialize(true, $sxe->addChild('rules'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}