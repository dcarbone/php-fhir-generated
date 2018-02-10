<?php namespace PHPFHIRGenerated\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * This resource provides the target, request and response, and action details for an action to be performed by the target on or about existing resources.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRProcessRequest extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The ProcessRequest business identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * The status of the resource instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public $status = null;

    /**
     * The type of processing action being requested, for example Reversal, Readjudication, StatusRequest,PendedRequest.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRActionList
     */
    public $action = null;

    /**
     * The organization which is the target of the request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $target = null;

    /**
     * The date when this resource was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * The practitioner who is responsible for the action specified in this request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $provider = null;

    /**
     * The organization which is responsible for the action speccified in this request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * Reference of resource which is the target or subject of this action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $request = null;

    /**
     * Reference of a prior response to resource which is the target or subject of this action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $response = null;

    /**
     * If true remove all history excluding audit.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $nullify = null;

    /**
     * A reference to supply which authenticates the process.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $reference = null;

    /**
     * List of top level items to be re-adjudicated, if none specified then the entire submission is re-adjudicated.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProcessRequest\FHIRProcessRequestItem[]
     */
    public $item = [];

    /**
     * Names of resource types to include.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $include = [];

    /**
     * Names of resource types to exclude.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $exclude = [];

    /**
     * A period of time during which the fulfilling resources would have been created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ProcessRequest';

    /**
     * The ProcessRequest business identifier.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * The ProcessRequest business identifier.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The status of the resource instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The status of the resource instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * The type of processing action being requested, for example Reversal, Readjudication, StatusRequest,PendedRequest.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRActionList
     */
    public function getAction() {
        return $this->action;
    }

    /**
     * The type of processing action being requested, for example Reversal, Readjudication, StatusRequest,PendedRequest.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRActionList $action
     * @return $this
     */
    public function setAction($action) {
        $this->action = $action;
        return $this;
    }

    /**
     * The organization which is the target of the request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTarget() {
        return $this->target;
    }

    /**
     * The organization which is the target of the request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $target
     * @return $this
     */
    public function setTarget($target) {
        $this->target = $target;
        return $this;
    }

    /**
     * The date when this resource was created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * The date when this resource was created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $created
     * @return $this
     */
    public function setCreated($created) {
        $this->created = $created;
        return $this;
    }

    /**
     * The practitioner who is responsible for the action specified in this request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProvider() {
        return $this->provider;
    }

    /**
     * The practitioner who is responsible for the action specified in this request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $provider
     * @return $this
     */
    public function setProvider($provider) {
        $this->provider = $provider;
        return $this;
    }

    /**
     * The organization which is responsible for the action speccified in this request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization() {
        return $this->organization;
    }

    /**
     * The organization which is responsible for the action speccified in this request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $organization
     * @return $this
     */
    public function setOrganization($organization) {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Reference of resource which is the target or subject of this action.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequest() {
        return $this->request;
    }

    /**
     * Reference of resource which is the target or subject of this action.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $request
     * @return $this
     */
    public function setRequest($request) {
        $this->request = $request;
        return $this;
    }

    /**
     * Reference of a prior response to resource which is the target or subject of this action.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getResponse() {
        return $this->response;
    }

    /**
     * Reference of a prior response to resource which is the target or subject of this action.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $response
     * @return $this
     */
    public function setResponse($response) {
        $this->response = $response;
        return $this;
    }

    /**
     * If true remove all history excluding audit.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getNullify() {
        return $this->nullify;
    }

    /**
     * If true remove all history excluding audit.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $nullify
     * @return $this
     */
    public function setNullify($nullify) {
        $this->nullify = $nullify;
        return $this;
    }

    /**
     * A reference to supply which authenticates the process.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getReference() {
        return $this->reference;
    }

    /**
     * A reference to supply which authenticates the process.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $reference
     * @return $this
     */
    public function setReference($reference) {
        $this->reference = $reference;
        return $this;
    }

    /**
     * List of top level items to be re-adjudicated, if none specified then the entire submission is re-adjudicated.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProcessRequest\FHIRProcessRequestItem[]
     */
    public function getItem() {
        return $this->item;
    }

    /**
     * List of top level items to be re-adjudicated, if none specified then the entire submission is re-adjudicated.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProcessRequest\FHIRProcessRequestItem $item
     * @return $this
     */
    public function addItem($item) {
        $this->item[] = $item;
        return $this;
    }

    /**
     * Names of resource types to include.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getInclude() {
        return $this->include;
    }

    /**
     * Names of resource types to include.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $include
     * @return $this
     */
    public function addInclude($include) {
        $this->include[] = $include;
        return $this;
    }

    /**
     * Names of resource types to exclude.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getExclude() {
        return $this->exclude;
    }

    /**
     * Names of resource types to exclude.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $exclude
     * @return $this
     */
    public function addExclude($exclude) {
        $this->exclude[] = $exclude;
        return $this;
    }

    /**
     * A period of time during which the fulfilling resources would have been created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod() {
        return $this->period;
    }

    /**
     * A period of time during which the fulfilling resources would have been created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period) {
        $this->period = $period;
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
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addIdentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.');
                }
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['action'])) {
                $this->setAction($data['action']);
            }
            if (isset($data['target'])) {
                $this->setTarget($data['target']);
            }
            if (isset($data['created'])) {
                $this->setCreated($data['created']);
            }
            if (isset($data['provider'])) {
                $this->setProvider($data['provider']);
            }
            if (isset($data['organization'])) {
                $this->setOrganization($data['organization']);
            }
            if (isset($data['request'])) {
                $this->setRequest($data['request']);
            }
            if (isset($data['response'])) {
                $this->setResponse($data['response']);
            }
            if (isset($data['nullify'])) {
                $this->setNullify($data['nullify']);
            }
            if (isset($data['reference'])) {
                $this->setReference($data['reference']);
            }
            if (isset($data['item'])) {
                if (is_array($data['item'])) {
                    foreach($data['item'] as $d) {
                        $this->addItem($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"item" must be array of objects or null, '.gettype($data['item']).' seen.');
                }
            }
            if (isset($data['include'])) {
                if (is_array($data['include'])) {
                    foreach($data['include'] as $d) {
                        $this->addInclude($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"include" must be array of objects or null, '.gettype($data['include']).' seen.');
                }
            }
            if (isset($data['exclude'])) {
                if (is_array($data['exclude'])) {
                    foreach($data['exclude'] as $d) {
                        $this->addExclude($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"exclude" must be array of objects or null, '.gettype($data['exclude']).' seen.');
                }
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
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
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->action)) $json['action'] = $this->action;
        if (isset($this->target)) $json['target'] = $this->target;
        if (isset($this->created)) $json['created'] = $this->created;
        if (isset($this->provider)) $json['provider'] = $this->provider;
        if (isset($this->organization)) $json['organization'] = $this->organization;
        if (isset($this->request)) $json['request'] = $this->request;
        if (isset($this->response)) $json['response'] = $this->response;
        if (isset($this->nullify)) $json['nullify'] = $this->nullify;
        if (isset($this->reference)) $json['reference'] = $this->reference;
        if (0 < count($this->item)) {
            $json['item'] = [];
            foreach($this->item as $item) {
                if (null !== $item) $json['item'][] = $item;
            }
        }
        if (0 < count($this->include)) {
            $json['include'] = [];
            foreach($this->include as $include) {
                if (null !== $include) $json['include'][] = $include;
            }
        }
        if (0 < count($this->exclude)) {
            $json['exclude'] = [];
            foreach($this->exclude as $exclude) {
                if (null !== $exclude) $json['exclude'][] = $exclude;
            }
        }
        if (isset($this->period)) $json['period'] = $this->period;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ProcessRequest xmlns="http://hl7.org/fhir"></ProcessRequest>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->action)) $this->action->xmlSerialize(true, $sxe->addChild('action'));
        if (isset($this->target)) $this->target->xmlSerialize(true, $sxe->addChild('target'));
        if (isset($this->created)) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if (isset($this->provider)) $this->provider->xmlSerialize(true, $sxe->addChild('provider'));
        if (isset($this->organization)) $this->organization->xmlSerialize(true, $sxe->addChild('organization'));
        if (isset($this->request)) $this->request->xmlSerialize(true, $sxe->addChild('request'));
        if (isset($this->response)) $this->response->xmlSerialize(true, $sxe->addChild('response'));
        if (isset($this->nullify)) $this->nullify->xmlSerialize(true, $sxe->addChild('nullify'));
        if (isset($this->reference)) $this->reference->xmlSerialize(true, $sxe->addChild('reference'));
        if (0 < count($this->item)) {
            foreach($this->item as $item) {
                $item->xmlSerialize(true, $sxe->addChild('item'));
            }
        }
        if (0 < count($this->include)) {
            foreach($this->include as $include) {
                $include->xmlSerialize(true, $sxe->addChild('include'));
            }
        }
        if (0 < count($this->exclude)) {
            foreach($this->exclude as $exclude) {
                $exclude->xmlSerialize(true, $sxe->addChild('exclude'));
            }
        }
        if (isset($this->period)) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}