<?php namespace PHPFHIRGenerated\FHIRResource\FHIRAdverseReaction;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
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
use PHPFHIRGenerated\JsonSerializable;

/**
 * Records an unexpected reaction suspected to be related to the exposure of the reaction subject to a substance.
 */
class FHIRAdverseReactionExposure extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * Identifies the initial date of the exposure that is suspected to be related to the reaction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * The type of exposure: Drug Administration, Immunization, Coincidental.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExposureType
     */
    public $type = null;

    /**
     * A statement of how confident that the recorder was that this exposure caused the reaction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCausalityExpectation
     */
    public $causalityExpectation = null;

    /**
     * Substance that is presumed to have caused the adverse reaction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $substance = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'AdverseReaction.Exposure';

    /**
     * Identifies the initial date of the exposure that is suspected to be related to the reaction.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Identifies the initial date of the exposure that is suspected to be related to the reaction.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * The type of exposure: Drug Administration, Immunization, Coincidental.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRExposureType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of exposure: Drug Administration, Immunization, Coincidental.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRExposureType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A statement of how confident that the recorder was that this exposure caused the reaction.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCausalityExpectation
     */
    public function getCausalityExpectation()
    {
        return $this->causalityExpectation;
    }

    /**
     * A statement of how confident that the recorder was that this exposure caused the reaction.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCausalityExpectation $causalityExpectation
     * @return $this
     */
    public function setCausalityExpectation($causalityExpectation)
    {
        $this->causalityExpectation = $causalityExpectation;
        return $this;
    }

    /**
     * Substance that is presumed to have caused the adverse reaction.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSubstance()
    {
        return $this->substance;
    }

    /**
     * Substance that is presumed to have caused the adverse reaction.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $substance
     * @return $this
     */
    public function setSubstance($substance)
    {
        $this->substance = $substance;
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
        if (null !== $this->date) $json['date'] = $this->date->jsonSerialize();
        if (null !== $this->type) $json['type'] = $this->type->jsonSerialize();
        if (null !== $this->causalityExpectation) $json['causalityExpectation'] = $this->causalityExpectation->jsonSerialize();
        if (null !== $this->substance) $json['substance'] = $this->substance->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<AdverseReactionExposure xmlns="http://hl7.org/fhir"></AdverseReactionExposure>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->causalityExpectation) $this->causalityExpectation->xmlSerialize(true, $sxe->addChild('causalityExpectation'));
        if (null !== $this->substance) $this->substance->xmlSerialize(true, $sxe->addChild('substance'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}