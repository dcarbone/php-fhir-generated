<?php namespace PHPFHIRGenerated\FHIRResource\FHIRProfile;

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
 * A Resource Profile - a statement of use of one or more FHIR Resources.  It may include constraints on Resources and Data Types, Terminology Binding Statements and Extension Definitions.
 */
class FHIRProfileMapping1 extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * An internal reference to the definition of a mapping.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $identity = null;

    /**
     * Expresses what part of the target specification corresponds to this element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $map = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Profile.Mapping1';

    /**
     * An internal reference to the definition of a mapping.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * An internal reference to the definition of a mapping.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $identity
     * @return $this
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;
        return $this;
    }

    /**
     * Expresses what part of the target specification corresponds to this element.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Expresses what part of the target specification corresponds to this element.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $map
     * @return $this
     */
    public function setMap($map)
    {
        $this->map = $map;
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
        if (null !== $this->identity) $json['identity'] = $this->identity;
        if (null !== $this->map) $json['map'] = $this->map;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ProfileMapping1 xmlns="http://hl7.org/fhir"></ProfileMapping1>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->identity) $this->identity->xmlSerialize(true, $sxe->addChild('identity'));
        if (null !== $this->map) $this->map->xmlSerialize(true, $sxe->addChild('map'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}