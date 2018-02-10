<?php namespace PHPFHIRGenerated\FHIRResource\FHIRImmunizationRecommendation;

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
 * A patient's point-in-time immunization and recommendation (i.e. forecasting a patient's immunization eligibility according to a published schedule) with optional supporting justification.
 */
class FHIRImmunizationRecommendationProtocol extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Indicates the nominal position in a series of the next dose.  This is the recommended dose number as per a specified protocol.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $doseSequence = null;

    /**
     * Contains the description about the protocol under which the vaccine was administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Indicates the authority who published the protocol.  For example, ACIP.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $authority = null;

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $series = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ImmunizationRecommendation.Protocol';

    /**
     * Indicates the nominal position in a series of the next dose.  This is the recommended dose number as per a specified protocol.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getDoseSequence()
    {
        return $this->doseSequence;
    }

    /**
     * Indicates the nominal position in a series of the next dose.  This is the recommended dose number as per a specified protocol.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $doseSequence
     * @return $this
     */
    public function setDoseSequence($doseSequence)
    {
        $this->doseSequence = $doseSequence;
        return $this;
    }

    /**
     * Contains the description about the protocol under which the vaccine was administered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Contains the description about the protocol under which the vaccine was administered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Indicates the authority who published the protocol.  For example, ACIP.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * Indicates the authority who published the protocol.  For example, ACIP.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $authority
     * @return $this
     */
    public function setAuthority($authority)
    {
        $this->authority = $authority;
        return $this;
    }

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $series
     * @return $this
     */
    public function setSeries($series)
    {
        $this->series = $series;
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
        if (null !== $this->doseSequence) $json['doseSequence'] = $this->doseSequence;
        if (null !== $this->description) $json['description'] = $this->description;
        if (null !== $this->authority) $json['authority'] = $this->authority;
        if (null !== $this->series) $json['series'] = $this->series;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImmunizationRecommendationProtocol xmlns="http://hl7.org/fhir"></ImmunizationRecommendationProtocol>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->doseSequence) $this->doseSequence->xmlSerialize(true, $sxe->addChild('doseSequence'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->authority) $this->authority->xmlSerialize(true, $sxe->addChild('authority'));
        if (null !== $this->series) $this->series->xmlSerialize(true, $sxe->addChild('series'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}