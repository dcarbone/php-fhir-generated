<?php namespace PHPFHIRGenerated\FHIRResource\FHIRRequestGroup;

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
 * A group of related requests that can be used to capture intended activities that have inter-dependencies such as "give this medication after that one".
 */
class FHIRRequestGroupRelatedAction extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The unique identifier of the related action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $actionIdentifier = null;

    /**
     * The relationship of this action to the related action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $relationship = null;

    /**
     * A duration or range of durations to apply to the relationship. For example, 30-60 minutes before. (choose any one of offset*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $offsetDuration = null;

    /**
     * A duration or range of durations to apply to the relationship. For example, 30-60 minutes before. (choose any one of offset*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $offsetRange = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'RequestGroup.RelatedAction';

    /**
     * The unique identifier of the related action.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getActionIdentifier()
    {
        return $this->actionIdentifier;
    }

    /**
     * The unique identifier of the related action.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $actionIdentifier
     * @return $this
     */
    public function setActionIdentifier($actionIdentifier)
    {
        $this->actionIdentifier = $actionIdentifier;
        return $this;
    }

    /**
     * The relationship of this action to the related action.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * The relationship of this action to the related action.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $relationship
     * @return $this
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * A duration or range of durations to apply to the relationship. For example, 30-60 minutes before. (choose any one of offset*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getOffsetDuration()
    {
        return $this->offsetDuration;
    }

    /**
     * A duration or range of durations to apply to the relationship. For example, 30-60 minutes before. (choose any one of offset*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $offsetDuration
     * @return $this
     */
    public function setOffsetDuration($offsetDuration)
    {
        $this->offsetDuration = $offsetDuration;
        return $this;
    }

    /**
     * A duration or range of durations to apply to the relationship. For example, 30-60 minutes before. (choose any one of offset*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getOffsetRange()
    {
        return $this->offsetRange;
    }

    /**
     * A duration or range of durations to apply to the relationship. For example, 30-60 minutes before. (choose any one of offset*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $offsetRange
     * @return $this
     */
    public function setOffsetRange($offsetRange)
    {
        $this->offsetRange = $offsetRange;
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
        if (null !== $this->actionIdentifier) $json['actionIdentifier'] = json_encode($this->actionIdentifier);
        if (null !== $this->relationship) $json['relationship'] = json_encode($this->relationship);
        if (null !== $this->offsetDuration) $json['offsetDuration'] = json_encode($this->offsetDuration);
        if (null !== $this->offsetRange) $json['offsetRange'] = json_encode($this->offsetRange);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<RequestGroupRelatedAction xmlns="http://hl7.org/fhir"></RequestGroupRelatedAction>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->actionIdentifier) $this->actionIdentifier->xmlSerialize(true, $sxe->addChild('actionIdentifier'));
        if (null !== $this->relationship) $this->relationship->xmlSerialize(true, $sxe->addChild('relationship'));
        if (null !== $this->offsetDuration) $this->offsetDuration->xmlSerialize(true, $sxe->addChild('offsetDuration'));
        if (null !== $this->offsetRange) $this->offsetRange->xmlSerialize(true, $sxe->addChild('offsetRange'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}