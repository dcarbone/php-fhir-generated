<?php namespace PHPFHIRGenerated\FHIRResource\FHIRComposition;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A set of healthcare-related information that is assembled together into a single logical document that provides a single coherent statement of meaning, establishes its own context and that has clinical attestation with regard to who is making the statement. While a Composition defines the structure, it does not actually contain the content: rather the full content of a document is contained in a Bundle, of which the Composition is the first resource contained.
 */
class FHIRCompositionAttester extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The type of attestation the authenticator offers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCompositionAttestationMode[]
     */
    public $mode = array();

    /**
     * When composition was attested by the party.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $time = null;

    /**
     * Who attested the composition in the specified way.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $party = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Composition.Attester';

    /**
     * The type of attestation the authenticator offers.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCompositionAttestationMode[]
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * The type of attestation the authenticator offers.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCompositionAttestationMode $mode
     * @return $this
     */
    public function addMode($mode)
    {
        $this->mode[] = $mode;
        return $this;
    }

    /**
     * When composition was attested by the party.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * When composition was attested by the party.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $time
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * Who attested the composition in the specified way.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Who attested the composition in the specified way.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $party
     * @return $this
     */
    public function setParty($party)
    {
        $this->party = $party;
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
        if (0 < count($this->mode)) {
            $json['mode'] = [];
            foreach($this->mode as $mode) {
                $json['mode'][] = json_encode($mode);
            }
        }
        if (null !== $this->time) $json['time'] = json_encode($this->time);
        if (null !== $this->party) $json['party'] = json_encode($this->party);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CompositionAttester xmlns="http://hl7.org/fhir"></CompositionAttester>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->mode)) {
            foreach($this->mode as $mode) {
                $mode->xmlSerialize(true, $sxe->addChild('mode'));
            }
        }
        if (null !== $this->time) $this->time->xmlSerialize(true, $sxe->addChild('time'));
        if (null !== $this->party) $this->party->xmlSerialize(true, $sxe->addChild('party'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}