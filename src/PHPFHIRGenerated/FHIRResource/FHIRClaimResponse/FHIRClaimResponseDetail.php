<?php namespace PHPFHIRGenerated\FHIRResource\FHIRClaimResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * This resource provides the adjudication details from the processing of a Claim resource.
 */
class FHIRClaimResponseDetail extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A service line number.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $sequenceLinkId = null;

    /**
     * A list of note references to the notes provided below.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt[]
     */
    public $noteNumber = array();

    /**
     * The adjudications results.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAdjudication[]
     */
    public $adjudication = array();

    /**
     * The third tier service adjudications for submitted services.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseSubDetail[]
     */
    public $subDetail = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ClaimResponse.Detail';

    /**
     * A service line number.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getSequenceLinkId()
    {
        return $this->sequenceLinkId;
    }

    /**
     * A service line number.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $sequenceLinkId
     * @return $this
     */
    public function setSequenceLinkId($sequenceLinkId)
    {
        $this->sequenceLinkId = $sequenceLinkId;
        return $this;
    }

    /**
     * A list of note references to the notes provided below.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt[]
     */
    public function getNoteNumber()
    {
        return $this->noteNumber;
    }

    /**
     * A list of note references to the notes provided below.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $noteNumber
     * @return $this
     */
    public function addNoteNumber($noteNumber)
    {
        $this->noteNumber[] = $noteNumber;
        return $this;
    }

    /**
     * The adjudications results.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAdjudication[]
     */
    public function getAdjudication()
    {
        return $this->adjudication;
    }

    /**
     * The adjudications results.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAdjudication $adjudication
     * @return $this
     */
    public function addAdjudication($adjudication)
    {
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * The third tier service adjudications for submitted services.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseSubDetail[]
     */
    public function getSubDetail()
    {
        return $this->subDetail;
    }

    /**
     * The third tier service adjudications for submitted services.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseSubDetail $subDetail
     * @return $this
     */
    public function addSubDetail($subDetail)
    {
        $this->subDetail[] = $subDetail;
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
        if (null !== $this->sequenceLinkId) $json['sequenceLinkId'] = json_encode($this->sequenceLinkId);
        if (0 < count($this->noteNumber)) {
            $json['noteNumber'] = [];
            foreach($this->noteNumber as $noteNumber) {
                $json['noteNumber'][] = json_encode($noteNumber);
            }
        }
        if (0 < count($this->adjudication)) {
            $json['adjudication'] = [];
            foreach($this->adjudication as $adjudication) {
                $json['adjudication'][] = json_encode($adjudication);
            }
        }
        if (0 < count($this->subDetail)) {
            $json['subDetail'] = [];
            foreach($this->subDetail as $subDetail) {
                $json['subDetail'][] = json_encode($subDetail);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ClaimResponseDetail xmlns="http://hl7.org/fhir"></ClaimResponseDetail>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->sequenceLinkId) $this->sequenceLinkId->xmlSerialize(true, $sxe->addChild('sequenceLinkId'));
        if (0 < count($this->noteNumber)) {
            foreach($this->noteNumber as $noteNumber) {
                $noteNumber->xmlSerialize(true, $sxe->addChild('noteNumber'));
            }
        }
        if (0 < count($this->adjudication)) {
            foreach($this->adjudication as $adjudication) {
                $adjudication->xmlSerialize(true, $sxe->addChild('adjudication'));
            }
        }
        if (0 < count($this->subDetail)) {
            foreach($this->subDetail as $subDetail) {
                $subDetail->xmlSerialize(true, $sxe->addChild('subDetail'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}