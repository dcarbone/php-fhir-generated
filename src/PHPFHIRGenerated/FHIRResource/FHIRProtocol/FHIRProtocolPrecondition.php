<?php namespace PHPFHIRGenerated\FHIRResource\FHIRProtocol;

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
 *   Generated on Tue, Dec 6, 2016 12:22+1100 for FHIR v1.8.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A definition of behaviors to be taken in particular circumstances, often including conditions, options and other decision points.
 */
class FHIRProtocolPrecondition extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Human-readable description of the condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Defines the name/value pair that must hold for the condition to be met.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProtocol\FHIRProtocolCondition
     */
    public $condition = null;

    /**
     * Lists a set of conditions that must all be met.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProtocol\FHIRProtocolPrecondition[]
     */
    public $intersection = array();

    /**
     * Lists alternative conditions, at least one of must be met.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProtocol\FHIRProtocolPrecondition[]
     */
    public $union = array();

    /**
     * Lists conditions of which none must be met.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProtocol\FHIRProtocolPrecondition[]
     */
    public $exclude = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Protocol.Precondition';

    /**
     * Human-readable description of the condition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Human-readable description of the condition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Defines the name/value pair that must hold for the condition to be met.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProtocol\FHIRProtocolCondition
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Defines the name/value pair that must hold for the condition to be met.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProtocol\FHIRProtocolCondition $condition
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Lists a set of conditions that must all be met.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProtocol\FHIRProtocolPrecondition[]
     */
    public function getIntersection()
    {
        return $this->intersection;
    }

    /**
     * Lists a set of conditions that must all be met.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProtocol\FHIRProtocolPrecondition $intersection
     * @return $this
     */
    public function addIntersection($intersection)
    {
        $this->intersection[] = $intersection;
        return $this;
    }

    /**
     * Lists alternative conditions, at least one of must be met.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProtocol\FHIRProtocolPrecondition[]
     */
    public function getUnion()
    {
        return $this->union;
    }

    /**
     * Lists alternative conditions, at least one of must be met.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProtocol\FHIRProtocolPrecondition $union
     * @return $this
     */
    public function addUnion($union)
    {
        $this->union[] = $union;
        return $this;
    }

    /**
     * Lists conditions of which none must be met.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProtocol\FHIRProtocolPrecondition[]
     */
    public function getExclude()
    {
        return $this->exclude;
    }

    /**
     * Lists conditions of which none must be met.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProtocol\FHIRProtocolPrecondition $exclude
     * @return $this
     */
    public function addExclude($exclude)
    {
        $this->exclude[] = $exclude;
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
        if (null !== $this->description) $json['description'] = json_encode($this->description);
        if (null !== $this->condition) $json['condition'] = json_encode($this->condition);
        if (0 < count($this->intersection)) {
            $json['intersection'] = [];
            foreach($this->intersection as $intersection) {
                $json['intersection'][] = json_encode($intersection);
            }
        }
        if (0 < count($this->union)) {
            $json['union'] = [];
            foreach($this->union as $union) {
                $json['union'][] = json_encode($union);
            }
        }
        if (0 < count($this->exclude)) {
            $json['exclude'] = [];
            foreach($this->exclude as $exclude) {
                $json['exclude'][] = json_encode($exclude);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ProtocolPrecondition xmlns="http://hl7.org/fhir"></ProtocolPrecondition>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->condition) $this->condition->xmlSerialize(true, $sxe->addChild('condition'));
        if (0 < count($this->intersection)) {
            foreach($this->intersection as $intersection) {
                $intersection->xmlSerialize(true, $sxe->addChild('intersection'));
            }
        }
        if (0 < count($this->union)) {
            foreach($this->union as $union) {
                $union->xmlSerialize(true, $sxe->addChild('union'));
            }
        }
        if (0 < count($this->exclude)) {
            foreach($this->exclude as $exclude) {
                $exclude->xmlSerialize(true, $sxe->addChild('exclude'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}