<?php namespace PHPFHIRGenerated\FHIRResource\FHIRConceptMap;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A statement of relationships from one set of concepts to one or more other concept systems.
 */
class FHIRConceptMapConcept extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * System that defines the concept being mapped.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $system = null;

    /**
     * Identifies concept being mapped.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $code = null;

    /**
     * A set of additional dependencies for this mapping to hold. This mapping is only applicable if the specified concept can be resolved, and it has the specified value.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConceptMap\FHIRConceptMapDependsOn[]
     */
    public $dependsOn = array();

    /**
     * A concept from the target value set that this concept maps to.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConceptMap\FHIRConceptMapMap[]
     */
    public $map = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ConceptMap.Concept';

    /**
     * System that defines the concept being mapped.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * System that defines the concept being mapped.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $system
     * @return $this
     */
    public function setSystem($system)
    {
        $this->system = $system;
        return $this;
    }

    /**
     * Identifies concept being mapped.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Identifies concept being mapped.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A set of additional dependencies for this mapping to hold. This mapping is only applicable if the specified concept can be resolved, and it has the specified value.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConceptMap\FHIRConceptMapDependsOn[]
     */
    public function getDependsOn()
    {
        return $this->dependsOn;
    }

    /**
     * A set of additional dependencies for this mapping to hold. This mapping is only applicable if the specified concept can be resolved, and it has the specified value.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConceptMap\FHIRConceptMapDependsOn $dependsOn
     * @return $this
     */
    public function addDependsOn($dependsOn)
    {
        $this->dependsOn[] = $dependsOn;
        return $this;
    }

    /**
     * A concept from the target value set that this concept maps to.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConceptMap\FHIRConceptMapMap[]
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * A concept from the target value set that this concept maps to.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConceptMap\FHIRConceptMapMap $map
     * @return $this
     */
    public function addMap($map)
    {
        $this->map[] = $map;
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
        if (null !== $this->system) $json['system'] = json_encode($this->system);
        if (null !== $this->code) $json['code'] = json_encode($this->code);
        if (0 < count($this->dependsOn)) {
            $json['dependsOn'] = [];
            foreach($this->dependsOn as $dependsOn) {
                $json['dependsOn'][] = json_encode($dependsOn);
            }
        }
        if (0 < count($this->map)) {
            $json['map'] = [];
            foreach($this->map as $map) {
                $json['map'][] = json_encode($map);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ConceptMapConcept xmlns="http://hl7.org/fhir"></ConceptMapConcept>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->system) $this->system->xmlSerialize(true, $sxe->addChild('system'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (0 < count($this->dependsOn)) {
            foreach($this->dependsOn as $dependsOn) {
                $dependsOn->xmlSerialize(true, $sxe->addChild('dependsOn'));
            }
        }
        if (0 < count($this->map)) {
            foreach($this->map as $map) {
                $map->xmlSerialize(true, $sxe->addChild('map'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}