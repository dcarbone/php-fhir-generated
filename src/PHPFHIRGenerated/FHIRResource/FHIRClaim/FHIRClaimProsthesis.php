<?php namespace PHPFHIRGenerated\FHIRResource\FHIRClaim;

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
 * A provider issued list of services and products provided, or to be provided, to a patient which is provided to an insurer for payment recovery.
 */
class FHIRClaimProsthesis extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Indicates whether this is the initial placement of a fixed prosthesis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $initial = null;

    /**
     * Date of the initial placement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $priorDate = null;

    /**
     * Material of the prior denture or bridge prosthesis. (Oral).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $priorMaterial = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Claim.Prosthesis';

    /**
     * Indicates whether this is the initial placement of a fixed prosthesis.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getInitial()
    {
        return $this->initial;
    }

    /**
     * Indicates whether this is the initial placement of a fixed prosthesis.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $initial
     * @return $this
     */
    public function setInitial($initial)
    {
        $this->initial = $initial;
        return $this;
    }

    /**
     * Date of the initial placement.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getPriorDate()
    {
        return $this->priorDate;
    }

    /**
     * Date of the initial placement.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $priorDate
     * @return $this
     */
    public function setPriorDate($priorDate)
    {
        $this->priorDate = $priorDate;
        return $this;
    }

    /**
     * Material of the prior denture or bridge prosthesis. (Oral).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPriorMaterial()
    {
        return $this->priorMaterial;
    }

    /**
     * Material of the prior denture or bridge prosthesis. (Oral).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $priorMaterial
     * @return $this
     */
    public function setPriorMaterial($priorMaterial)
    {
        $this->priorMaterial = $priorMaterial;
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
        if (null !== $this->initial) $json['initial'] = json_encode($this->initial);
        if (null !== $this->priorDate) $json['priorDate'] = json_encode($this->priorDate);
        if (null !== $this->priorMaterial) $json['priorMaterial'] = json_encode($this->priorMaterial);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ClaimProsthesis xmlns="http://hl7.org/fhir"></ClaimProsthesis>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->initial) $this->initial->xmlSerialize(true, $sxe->addChild('initial'));
        if (null !== $this->priorDate) $this->priorDate->xmlSerialize(true, $sxe->addChild('priorDate'));
        if (null !== $this->priorMaterial) $this->priorMaterial->xmlSerialize(true, $sxe->addChild('priorMaterial'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}