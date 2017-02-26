<?php namespace PHPFHIRGenerated\FHIRResource\FHIRProvenance;

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
 * Provenance of a resource is a record that describes entities and processes involved in producing and delivering or otherwise influencing that resource. Provenance provides a critical foundation for assessing authenticity, enabling trust, and allowing reproducibility. Provenance assertions are a form of contextual metadata and can themselves become important records with their own provenance. Provenance statement indicates clinical significance in terms of confidence in authenticity, reliability, and trustworthiness, integrity, and stage in lifecycle (e.g. Document Completion - has the artifact been legally authenticated), all of which may impact security, privacy, and trust policies.
 */
class FHIRProvenanceAgent extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The function of the agent with respect to the activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $role = null;

    /**
     * The individual, device or organization that participated in the event. (choose any one of who*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $whoUri = null;

    /**
     * The individual, device or organization that participated in the event. (choose any one of who*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $whoReference = null;

    /**
     * A reference to an application-usable description of the identity that is represented by the signature. (choose any one of onBehalfOf*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $onBehalfOfUri = null;

    /**
     * A reference to an application-usable description of the identity that is represented by the signature. (choose any one of onBehalfOf*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $onBehalfOfReference = null;

    /**
     * The type of relationship between agents.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $relatedAgentType = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Provenance.Agent';

    /**
     * The function of the agent with respect to the activity.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * The function of the agent with respect to the activity.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * The individual, device or organization that participated in the event. (choose any one of who*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getWhoUri()
    {
        return $this->whoUri;
    }

    /**
     * The individual, device or organization that participated in the event. (choose any one of who*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $whoUri
     * @return $this
     */
    public function setWhoUri($whoUri)
    {
        $this->whoUri = $whoUri;
        return $this;
    }

    /**
     * The individual, device or organization that participated in the event. (choose any one of who*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getWhoReference()
    {
        return $this->whoReference;
    }

    /**
     * The individual, device or organization that participated in the event. (choose any one of who*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $whoReference
     * @return $this
     */
    public function setWhoReference($whoReference)
    {
        $this->whoReference = $whoReference;
        return $this;
    }

    /**
     * A reference to an application-usable description of the identity that is represented by the signature. (choose any one of onBehalfOf*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getOnBehalfOfUri()
    {
        return $this->onBehalfOfUri;
    }

    /**
     * A reference to an application-usable description of the identity that is represented by the signature. (choose any one of onBehalfOf*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $onBehalfOfUri
     * @return $this
     */
    public function setOnBehalfOfUri($onBehalfOfUri)
    {
        $this->onBehalfOfUri = $onBehalfOfUri;
        return $this;
    }

    /**
     * A reference to an application-usable description of the identity that is represented by the signature. (choose any one of onBehalfOf*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOnBehalfOfReference()
    {
        return $this->onBehalfOfReference;
    }

    /**
     * A reference to an application-usable description of the identity that is represented by the signature. (choose any one of onBehalfOf*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $onBehalfOfReference
     * @return $this
     */
    public function setOnBehalfOfReference($onBehalfOfReference)
    {
        $this->onBehalfOfReference = $onBehalfOfReference;
        return $this;
    }

    /**
     * The type of relationship between agents.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRelatedAgentType()
    {
        return $this->relatedAgentType;
    }

    /**
     * The type of relationship between agents.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $relatedAgentType
     * @return $this
     */
    public function setRelatedAgentType($relatedAgentType)
    {
        $this->relatedAgentType = $relatedAgentType;
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
        if (null !== $this->role) $json['role'] = json_encode($this->role);
        if (null !== $this->whoUri) $json['whoUri'] = json_encode($this->whoUri);
        if (null !== $this->whoReference) $json['whoReference'] = json_encode($this->whoReference);
        if (null !== $this->onBehalfOfUri) $json['onBehalfOfUri'] = json_encode($this->onBehalfOfUri);
        if (null !== $this->onBehalfOfReference) $json['onBehalfOfReference'] = json_encode($this->onBehalfOfReference);
        if (null !== $this->relatedAgentType) $json['relatedAgentType'] = json_encode($this->relatedAgentType);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ProvenanceAgent xmlns="http://hl7.org/fhir"></ProvenanceAgent>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->role) $this->role->xmlSerialize(true, $sxe->addChild('role'));
        if (null !== $this->whoUri) $this->whoUri->xmlSerialize(true, $sxe->addChild('whoUri'));
        if (null !== $this->whoReference) $this->whoReference->xmlSerialize(true, $sxe->addChild('whoReference'));
        if (null !== $this->onBehalfOfUri) $this->onBehalfOfUri->xmlSerialize(true, $sxe->addChild('onBehalfOfUri'));
        if (null !== $this->onBehalfOfReference) $this->onBehalfOfReference->xmlSerialize(true, $sxe->addChild('onBehalfOfReference'));
        if (null !== $this->relatedAgentType) $this->relatedAgentType->xmlSerialize(true, $sxe->addChild('relatedAgentType'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}