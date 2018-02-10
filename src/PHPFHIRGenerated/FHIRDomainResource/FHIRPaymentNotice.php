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
 * This resource provides the status of the payment for goods and services rendered, and the request and response resource references.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRPaymentNotice extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The notice business identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * The status of the resource instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public $status = null;

    /**
     * Reference of resource for which payment is being made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $request = null;

    /**
     * Reference of response to resource for which payment is being made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $response = null;

    /**
     * The date when the above payment action occurrred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $statusDate = null;

    /**
     * The date when this resource was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * The Insurer who is target  of the request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $target = null;

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $provider = null;

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * The payment status, typically paid: payment sent, cleared: payment received.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $paymentStatus = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'PaymentNotice';

    /**
     * The notice business identifier.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * The notice business identifier.
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
     * Reference of resource for which payment is being made.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequest() {
        return $this->request;
    }

    /**
     * Reference of resource for which payment is being made.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $request
     * @return $this
     */
    public function setRequest($request) {
        $this->request = $request;
        return $this;
    }

    /**
     * Reference of response to resource for which payment is being made.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getResponse() {
        return $this->response;
    }

    /**
     * Reference of response to resource for which payment is being made.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $response
     * @return $this
     */
    public function setResponse($response) {
        $this->response = $response;
        return $this;
    }

    /**
     * The date when the above payment action occurrred.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getStatusDate() {
        return $this->statusDate;
    }

    /**
     * The date when the above payment action occurrred.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $statusDate
     * @return $this
     */
    public function setStatusDate($statusDate) {
        $this->statusDate = $statusDate;
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
     * The Insurer who is target  of the request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTarget() {
        return $this->target;
    }

    /**
     * The Insurer who is target  of the request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $target
     * @return $this
     */
    public function setTarget($target) {
        $this->target = $target;
        return $this;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProvider() {
        return $this->provider;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $provider
     * @return $this
     */
    public function setProvider($provider) {
        $this->provider = $provider;
        return $this;
    }

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization() {
        return $this->organization;
    }

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $organization
     * @return $this
     */
    public function setOrganization($organization) {
        $this->organization = $organization;
        return $this;
    }

    /**
     * The payment status, typically paid: payment sent, cleared: payment received.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPaymentStatus() {
        return $this->paymentStatus;
    }

    /**
     * The payment status, typically paid: payment sent, cleared: payment received.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $paymentStatus
     * @return $this
     */
    public function setPaymentStatus($paymentStatus) {
        $this->paymentStatus = $paymentStatus;
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
            if (isset($data['request'])) {
                $this->setRequest($data['request']);
            }
            if (isset($data['response'])) {
                $this->setResponse($data['response']);
            }
            if (isset($data['statusDate'])) {
                $this->setStatusDate($data['statusDate']);
            }
            if (isset($data['created'])) {
                $this->setCreated($data['created']);
            }
            if (isset($data['target'])) {
                $this->setTarget($data['target']);
            }
            if (isset($data['provider'])) {
                $this->setProvider($data['provider']);
            }
            if (isset($data['organization'])) {
                $this->setOrganization($data['organization']);
            }
            if (isset($data['paymentStatus'])) {
                $this->setPaymentStatus($data['paymentStatus']);
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
        if (isset($this->request)) $json['request'] = $this->request;
        if (isset($this->response)) $json['response'] = $this->response;
        if (isset($this->statusDate)) $json['statusDate'] = $this->statusDate;
        if (isset($this->created)) $json['created'] = $this->created;
        if (isset($this->target)) $json['target'] = $this->target;
        if (isset($this->provider)) $json['provider'] = $this->provider;
        if (isset($this->organization)) $json['organization'] = $this->organization;
        if (isset($this->paymentStatus)) $json['paymentStatus'] = $this->paymentStatus;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<PaymentNotice xmlns="http://hl7.org/fhir"></PaymentNotice>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->request)) $this->request->xmlSerialize(true, $sxe->addChild('request'));
        if (isset($this->response)) $this->response->xmlSerialize(true, $sxe->addChild('response'));
        if (isset($this->statusDate)) $this->statusDate->xmlSerialize(true, $sxe->addChild('statusDate'));
        if (isset($this->created)) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if (isset($this->target)) $this->target->xmlSerialize(true, $sxe->addChild('target'));
        if (isset($this->provider)) $this->provider->xmlSerialize(true, $sxe->addChild('provider'));
        if (isset($this->organization)) $this->organization->xmlSerialize(true, $sxe->addChild('organization'));
        if (isset($this->paymentStatus)) $this->paymentStatus->xmlSerialize(true, $sxe->addChild('paymentStatus'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}