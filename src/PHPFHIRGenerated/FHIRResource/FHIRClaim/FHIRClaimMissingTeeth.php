<?php namespace PHPFHIRGenerated\FHIRResource\FHIRClaim;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
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
class FHIRClaimMissingTeeth extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The code identifying which tooth is missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $tooth = null;

    /**
     * Missing reason may be: E-extraction, O-other.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $reason = null;

    /**
     * The date of the extraction either known from records or patient reported estimate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $extractionDate = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Claim.MissingTeeth';

    /**
     * The code identifying which tooth is missing.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getTooth()
    {
        return $this->tooth;
    }

    /**
     * The code identifying which tooth is missing.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $tooth
     * @return $this
     */
    public function setTooth($tooth)
    {
        $this->tooth = $tooth;
        return $this;
    }

    /**
     * Missing reason may be: E-extraction, O-other.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Missing reason may be: E-extraction, O-other.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * The date of the extraction either known from records or patient reported estimate.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getExtractionDate()
    {
        return $this->extractionDate;
    }

    /**
     * The date of the extraction either known from records or patient reported estimate.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $extractionDate
     * @return $this
     */
    public function setExtractionDate($extractionDate)
    {
        $this->extractionDate = $extractionDate;
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
        if (null !== $this->tooth) $json['tooth'] = $this->tooth;
        if (null !== $this->reason) $json['reason'] = $this->reason;
        if (null !== $this->extractionDate) $json['extractionDate'] = $this->extractionDate;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ClaimMissingTeeth xmlns="http://hl7.org/fhir"></ClaimMissingTeeth>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->tooth) $this->tooth->xmlSerialize(true, $sxe->addChild('tooth'));
        if (null !== $this->reason) $this->reason->xmlSerialize(true, $sxe->addChild('reason'));
        if (null !== $this->extractionDate) $this->extractionDate->xmlSerialize(true, $sxe->addChild('extractionDate'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}