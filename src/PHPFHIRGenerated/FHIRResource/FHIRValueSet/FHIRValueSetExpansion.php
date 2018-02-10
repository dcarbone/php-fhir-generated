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
 * A value set specifies a set of codes drawn from one or more code systems.
 */
class FHIRValueSetExpansion extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * An identifier that uniquely identifies this expansion of the valueset. Systems may re-use the same identifier as long as the expansion and the definition remain the same, but are not required to do so.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Time valueset expansion happened.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $timestamp = null;

    /**
     * Codes in the value set.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetContains[]
     */
    public $contains = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ValueSet.Expansion';

    /**
     * An identifier that uniquely identifies this expansion of the valueset. Systems may re-use the same identifier as long as the expansion and the definition remain the same, but are not required to do so.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier that uniquely identifies this expansion of the valueset. Systems may re-use the same identifier as long as the expansion and the definition remain the same, but are not required to do so.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Time valueset expansion happened.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Time valueset expansion happened.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $timestamp
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * Codes in the value set.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetContains[]
     */
    public function getContains()
    {
        return $this->contains;
    }

    /**
     * Codes in the value set.
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
        if (0 < count($this->contains)) {
            foreach($this->contains as $contains) {
                $contains->xmlSerialize(true, $sxe->addChild('contains'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}