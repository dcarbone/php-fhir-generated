<?php namespace PHPFHIRGenerated\FHIRResource\FHIRContract;

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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A formal agreement between parties regarding the conduct of business, exchange of information or other matters.
 */
class FHIRContractTerm extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Unique identifier for this particular Contract Provision.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * When this Contract Provision was issued.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $issued = null;

    /**
     * Relevant time or time-period when this Contract Provision is applicable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $applies = null;

    /**
     * Type of Contract Provision such as specific requirements, purposes for actions, obligations, prohibitions, e.g. life time maximum benefit.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Subtype of this Contract Provision, e.g. life time maximum payment for a contract term for specific valued item, e.g. disability payment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $subType = null;

    /**
     * The matter of concern in the context of this provision of the agrement.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractOffer
     */
    public $offer = null;

    /**
     * Contract Term Asset List.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractAsset[]
     */
    public $asset = [];

    /**
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractAgent[]
     */
    public $agent = [];

    /**
     * Action stipulated by this Contract Provision.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $action = [];

    /**
     * Reason or purpose for the action stipulated by this Contract Provision.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $actionReason = [];

    /**
     * Nested group of Contract Provisions.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractTerm[]
     */
    public $group = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Contract.Term';

    /**
     * Unique identifier for this particular Contract Provision.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Unique identifier for this particular Contract Provision.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * When this Contract Provision was issued.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getIssued() {
        return $this->issued;
    }

    /**
     * When this Contract Provision was issued.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $issued
     * @return $this
     */
    public function setIssued($issued) {
        $this->issued = $issued;
        return $this;
    }

    /**
     * Relevant time or time-period when this Contract Provision is applicable.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getApplies() {
        return $this->applies;
    }

    /**
     * Relevant time or time-period when this Contract Provision is applicable.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $applies
     * @return $this
     */
    public function setApplies($applies) {
        $this->applies = $applies;
        return $this;
    }

    /**
     * Type of Contract Provision such as specific requirements, purposes for actions, obligations, prohibitions, e.g. life time maximum benefit.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Type of Contract Provision such as specific requirements, purposes for actions, obligations, prohibitions, e.g. life time maximum benefit.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Subtype of this Contract Provision, e.g. life time maximum payment for a contract term for specific valued item, e.g. disability payment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubType() {
        return $this->subType;
    }

    /**
     * Subtype of this Contract Provision, e.g. life time maximum payment for a contract term for specific valued item, e.g. disability payment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $subType
     * @return $this
     */
    public function setSubType($subType) {
        $this->subType = $subType;
        return $this;
    }

    /**
     * The matter of concern in the context of this provision of the agrement.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractOffer
     */
    public function getOffer() {
        return $this->offer;
    }

    /**
     * The matter of concern in the context of this provision of the agrement.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractOffer $offer
     * @return $this
     */
    public function setOffer($offer) {
        $this->offer = $offer;
        return $this;
    }

    /**
     * Contract Term Asset List.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractAsset[]
     */
    public function getAsset() {
        return $this->asset;
    }

    /**
     * Contract Term Asset List.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractAsset $asset
     * @return $this
     */
    public function addAsset($asset) {
        $this->asset[] = $asset;
        return $this;
    }

    /**
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractAgent[]
     */
    public function getAgent() {
        return $this->agent;
    }

    /**
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractAgent $agent
     * @return $this
     */
    public function addAgent($agent) {
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * Action stipulated by this Contract Provision.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAction() {
        return $this->action;
    }

    /**
     * Action stipulated by this Contract Provision.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $action
     * @return $this
     */
    public function addAction($action) {
        $this->action[] = $action;
        return $this;
    }

    /**
     * Reason or purpose for the action stipulated by this Contract Provision.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getActionReason() {
        return $this->actionReason;
    }

    /**
     * Reason or purpose for the action stipulated by this Contract Provision.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $actionReason
     * @return $this
     */
    public function addActionReason($actionReason) {
        $this->actionReason[] = $actionReason;
        return $this;
    }

    /**
     * Nested group of Contract Provisions.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractTerm[]
     */
    public function getGroup() {
        return $this->group;
    }

    /**
     * Nested group of Contract Provisions.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractTerm $group
     * @return $this
     */
    public function addGroup($group) {
        $this->group[] = $group;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['issued'])) {
                $this->setIssued($data['issued']);
            }
            if (isset($data['applies'])) {
                $this->setApplies($data['applies']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['subType'])) {
                $this->setSubType($data['subType']);
            }
            if (isset($data['offer'])) {
                $this->setOffer($data['offer']);
            }
            if (isset($data['asset'])) {
                if (is_array($data['asset'])) {
                    foreach($data['asset'] as $d) {
                        $this->addAsset($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"asset" must be array of objects or null, '.gettype($data['asset']).' seen.');
                }
            }
            if (isset($data['agent'])) {
                if (is_array($data['agent'])) {
                    foreach($data['agent'] as $d) {
                        $this->addAgent($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"agent" must be array of objects or null, '.gettype($data['agent']).' seen.');
                }
            }
            if (isset($data['action'])) {
                if (is_array($data['action'])) {
                    foreach($data['action'] as $d) {
                        $this->addAction($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"action" must be array of objects or null, '.gettype($data['action']).' seen.');
                }
            }
            if (isset($data['actionReason'])) {
                if (is_array($data['actionReason'])) {
                    foreach($data['actionReason'] as $d) {
                        $this->addActionReason($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"actionReason" must be array of objects or null, '.gettype($data['actionReason']).' seen.');
                }
            }
            if (isset($data['group'])) {
                if (is_array($data['group'])) {
                    foreach($data['group'] as $d) {
                        $this->addGroup($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"group" must be array of objects or null, '.gettype($data['group']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
        if (isset($this->issued)) $json['issued'] = $this->issued;
        if (isset($this->applies)) $json['applies'] = $this->applies;
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->subType)) $json['subType'] = $this->subType;
        if (isset($this->offer)) $json['offer'] = $this->offer;
        if (0 < count($this->asset)) {
            $json['asset'] = [];
            foreach($this->asset as $asset) {
                if (null !== $asset) $json['asset'][] = $asset;
            }
        }
        if (0 < count($this->agent)) {
            $json['agent'] = [];
            foreach($this->agent as $agent) {
                if (null !== $agent) $json['agent'][] = $agent;
            }
        }
        if (0 < count($this->action)) {
            $json['action'] = [];
            foreach($this->action as $action) {
                if (null !== $action) $json['action'][] = $action;
            }
        }
        if (0 < count($this->actionReason)) {
            $json['actionReason'] = [];
            foreach($this->actionReason as $actionReason) {
                if (null !== $actionReason) $json['actionReason'][] = $actionReason;
            }
        }
        if (0 < count($this->group)) {
            $json['group'] = [];
            foreach($this->group as $group) {
                if (null !== $group) $json['group'][] = $group;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ContractTerm xmlns="http://hl7.org/fhir"></ContractTerm>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->issued)) $this->issued->xmlSerialize(true, $sxe->addChild('issued'));
        if (isset($this->applies)) $this->applies->xmlSerialize(true, $sxe->addChild('applies'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->subType)) $this->subType->xmlSerialize(true, $sxe->addChild('subType'));
        if (isset($this->offer)) $this->offer->xmlSerialize(true, $sxe->addChild('offer'));
        if (0 < count($this->asset)) {
            foreach($this->asset as $asset) {
                $asset->xmlSerialize(true, $sxe->addChild('asset'));
            }
        }
        if (0 < count($this->agent)) {
            foreach($this->agent as $agent) {
                $agent->xmlSerialize(true, $sxe->addChild('agent'));
            }
        }
        if (0 < count($this->action)) {
            foreach($this->action as $action) {
                $action->xmlSerialize(true, $sxe->addChild('action'));
            }
        }
        if (0 < count($this->actionReason)) {
            foreach($this->actionReason as $actionReason) {
                $actionReason->xmlSerialize(true, $sxe->addChild('actionReason'));
            }
        }
        if (0 < count($this->group)) {
            foreach($this->group as $group) {
                $group->xmlSerialize(true, $sxe->addChild('group'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}