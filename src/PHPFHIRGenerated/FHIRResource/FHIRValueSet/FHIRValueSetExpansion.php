<?php namespace PHPFHIRGenerated\FHIRResource\FHIRValueSet;

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
 * A value set specifies a set of codes drawn from one or more code systems.
 */
class FHIRValueSetExpansion extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * An identifier that uniquely identifies this expansion of the valueset. Systems may re-use the same identifier as long as the expansion and the definition remain the same, but are not required to do so.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $identifier = null;

    /**
     * The time at which the expansion was produced by the expanding system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $timestamp = null;

    /**
     * The total number of concepts in the expansion. If the number of concept nodes in this resource is less than the stated number, then the server can return more using the offset parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $total = null;

    /**
     * If paging is being used, the offset at which this resource starts.  I.e. this resource is a partial view into the expansion. If paging is not being used, this element SHALL not be present.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $offset = null;

    /**
     * A parameter that controlled the expansion process. These parameters may be used by users of expanded value sets to check whether the expansion is suitable for a particular purpose, or to pick the correct expansion.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetParameter[]
     */
    public $parameter = array();

    /**
     * The codes that are contained in the value set expansion.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetContains[]
     */
    public $contains = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ValueSet.Expansion';

    /**
     * An identifier that uniquely identifies this expansion of the valueset. Systems may re-use the same identifier as long as the expansion and the definition remain the same, but are not required to do so.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier that uniquely identifies this expansion of the valueset. Systems may re-use the same identifier as long as the expansion and the definition remain the same, but are not required to do so.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The time at which the expansion was produced by the expanding system.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * The time at which the expansion was produced by the expanding system.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $timestamp
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * The total number of concepts in the expansion. If the number of concept nodes in this resource is less than the stated number, then the server can return more using the offset parameter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * The total number of concepts in the expansion. If the number of concept nodes in this resource is less than the stated number, then the server can return more using the offset parameter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $total
     * @return $this
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * If paging is being used, the offset at which this resource starts.  I.e. this resource is a partial view into the expansion. If paging is not being used, this element SHALL not be present.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * If paging is being used, the offset at which this resource starts.  I.e. this resource is a partial view into the expansion. If paging is not being used, this element SHALL not be present.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $offset
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * A parameter that controlled the expansion process. These parameters may be used by users of expanded value sets to check whether the expansion is suitable for a particular purpose, or to pick the correct expansion.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetParameter[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * A parameter that controlled the expansion process. These parameters may be used by users of expanded value sets to check whether the expansion is suitable for a particular purpose, or to pick the correct expansion.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetParameter $parameter
     * @return $this
     */
    public function addParameter($parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * The codes that are contained in the value set expansion.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetContains[]
     */
    public function getContains()
    {
        return $this->contains;
    }

    /**
     * The codes that are contained in the value set expansion.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetContains $contains
     * @return $this
     */
    public function addContains($contains)
    {
        $this->contains[] = $contains;
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
        if (null !== $this->identifier) $json['identifier'] = $this->identifier;
        if (null !== $this->timestamp) $json['timestamp'] = $this->timestamp;
        if (null !== $this->total) $json['total'] = $this->total;
        if (null !== $this->offset) $json['offset'] = $this->offset;
        if (0 < count($this->parameter)) {
            $json['parameter'] = [];
            foreach($this->parameter as $parameter) {
                $json['parameter'][] = $parameter;
            }
        }
        if (0 < count($this->contains)) {
            $json['contains'] = [];
            foreach($this->contains as $contains) {
                $json['contains'][] = $contains;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ValueSetExpansion xmlns="http://hl7.org/fhir"></ValueSetExpansion>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->timestamp) $this->timestamp->xmlSerialize(true, $sxe->addChild('timestamp'));
        if (null !== $this->total) $this->total->xmlSerialize(true, $sxe->addChild('total'));
        if (null !== $this->offset) $this->offset->xmlSerialize(true, $sxe->addChild('offset'));
        if (0 < count($this->parameter)) {
            foreach($this->parameter as $parameter) {
                $parameter->xmlSerialize(true, $sxe->addChild('parameter'));
            }
        }
        if (0 < count($this->contains)) {
            foreach($this->contains as $contains) {
                $contains->xmlSerialize(true, $sxe->addChild('contains'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}