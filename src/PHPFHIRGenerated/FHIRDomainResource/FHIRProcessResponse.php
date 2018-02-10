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
 * This resource provides processing status, errors and notes from the processing of a resource.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRProcessResponse extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The Response business identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * The status of the resource instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public $status = null;

    /**
     * The date when the enclosed suite of services were performed or completed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * The organization who produced this adjudicated response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * Original request resource reference.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $request = null;

    /**
     * Transaction status: error, complete, held.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRProcessOutcomeCodes
     */
    public $outcome = null;

    /**
     * A description of the status of the adjudication or processing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $disposition = null;

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $requestProvider = null;

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $requestOrganization = null;

    /**
     * The form to be used for printing the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $form = null;

    /**
     * Suite of processing notes or additional requirements if the processing has been held.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProcessResponse\FHIRProcessResponseProcessNote[]
     */
    public $processNote = [];

    /**
     * Processing errors.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $error = [];

    /**
     * Request for additional supporting or authorizing information, such as: documents, images or resources.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $communicationRequest = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'ProcessResponse';

    /**
     * The Response business identifier.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * The Response business identifier.
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
     * The date when the enclosed suite of services were performed or completed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * The date when the enclosed suite of services were performed or completed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $created
     * @return $this
     */
    public function setCreated($created) {
        $this->created = $created;
        return $this;
    }

    /**
     * The organization who produced this adjudicated response.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization() {
        return $this->organization;
    }

    /**
     * The organization who produced this adjudicated response.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $organization
     * @return $this
     */
    public function setOrganization($organization) {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Original request resource reference.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequest() {
        return $this->request;
    }

    /**
     * Original request resource reference.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $request
     * @return $this
     */
    public function setRequest($request) {
        $this->request = $request;
        return $this;
    }

    /**
     * Transaction status: error, complete, held.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRProcessOutcomeCodes
     */
    public function getOutcome() {
        return $this->outcome;
    }

    /**
     * Transaction status: error, complete, held.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRProcessOutcomeCodes $outcome
     * @return $this
     */
    public function setOutcome($outcome) {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A description of the status of the adjudication or processing.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDisposition() {
        return $this->disposition;
    }

    /**
     * A description of the status of the adjudication or processing.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $disposition
     * @return $this
     */
    public function setDisposition($disposition) {
        $this->disposition = $disposition;
        return $this;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequestProvider() {
        return $this->requestProvider;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $requestProvider
     * @return $this
     */
    public function setRequestProvider($requestProvider) {
        $this->requestProvider = $requestProvider;
        return $this;
    }

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequestOrganization() {
        return $this->requestOrganization;
    }

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $requestOrganization
     * @return $this
     */
    public function setRequestOrganization($requestOrganization) {
        $this->requestOrganization = $requestOrganization;
        return $this;
    }

    /**
     * The form to be used for printing the content.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getForm() {
        return $this->form;
    }

    /**
     * The form to be used for printing the content.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $form
     * @return $this
     */
    public function setForm($form) {
        $this->form = $form;
        return $this;
    }

    /**
     * Suite of processing notes or additional requirements if the processing has been held.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProcessResponse\FHIRProcessResponseProcessNote[]
     */
    public function getProcessNote() {
        return $this->processNote;
    }

    /**
     * Suite of processing notes or additional requirements if the processing has been held.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProcessResponse\FHIRProcessResponseProcessNote $processNote
     * @return $this
     */
    public function addProcessNote($processNote) {
        $this->processNote[] = $processNote;
        return $this;
    }

    /**
     * Processing errors.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getError() {
        return $this->error;
    }

    /**
     * Processing errors.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $error
     * @return $this
     */
    public function addError($error) {
        $this->error[] = $error;
        return $this;
    }

    /**
     * Request for additional supporting or authorizing information, such as: documents, images or resources.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getCommunicationRequest() {
        return $this->communicationRequest;
    }

    /**
     * Request for additional supporting or authorizing information, such as: documents, images or resources.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $communicationRequest
     * @return $this
     */
    public function addCommunicationRequest($communicationRequest) {
        $this->communicationRequest[] = $communicationRequest;
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
            if (isset($data['created'])) {
                $this->setCreated($data['created']);
            }
            if (isset($data['organization'])) {
                $this->setOrganization($data['organization']);
            }
            if (isset($data['request'])) {
                $this->setRequest($data['request']);
            }
            if (isset($data['outcome'])) {
                $this->setOutcome($data['outcome']);
            }
            if (isset($data['disposition'])) {
                $this->setDisposition($data['disposition']);
            }
            if (isset($data['requestProvider'])) {
                $this->setRequestProvider($data['requestProvider']);
            }
            if (isset($data['requestOrganization'])) {
                $this->setRequestOrganization($data['requestOrganization']);
            }
            if (isset($data['form'])) {
                $this->setForm($data['form']);
            }
            if (isset($data['processNote'])) {
                if (is_array($data['processNote'])) {
                    foreach($data['processNote'] as $d) {
                        $this->addProcessNote($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"processNote" must be array of objects or null, '.gettype($data['processNote']).' seen.');
                }
            }
            if (isset($data['error'])) {
                if (is_array($data['error'])) {
                    foreach($data['error'] as $d) {
                        $this->addError($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"error" must be array of objects or null, '.gettype($data['error']).' seen.');
                }
            }
            if (isset($data['communicationRequest'])) {
                if (is_array($data['communicationRequest'])) {
                    foreach($data['communicationRequest'] as $d) {
                        $this->addCommunicationRequest($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"communicationRequest" must be array of objects or null, '.gettype($data['communicationRequest']).' seen.');
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
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->created)) $json['created'] = $this->created;
        if (isset($this->organization)) $json['organization'] = $this->organization;
        if (isset($this->request)) $json['request'] = $this->request;
        if (isset($this->outcome)) $json['outcome'] = $this->outcome;
        if (isset($this->disposition)) $json['disposition'] = $this->disposition;
        if (isset($this->requestProvider)) $json['requestProvider'] = $this->requestProvider;
        if (isset($this->requestOrganization)) $json['requestOrganization'] = $this->requestOrganization;
        if (isset($this->form)) $json['form'] = $this->form;
        if (0 < count($this->processNote)) {
            $json['processNote'] = [];
            foreach($this->processNote as $processNote) {
                if (null !== $processNote) $json['processNote'][] = $processNote;
            }
        }
        if (0 < count($this->error)) {
            $json['error'] = [];
            foreach($this->error as $error) {
                if (null !== $error) $json['error'][] = $error;
            }
        }
        if (0 < count($this->communicationRequest)) {
            $json['communicationRequest'] = [];
            foreach($this->communicationRequest as $communicationRequest) {
                if (null !== $communicationRequest) $json['communicationRequest'][] = $communicationRequest;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ProcessResponse xmlns="http://hl7.org/fhir"></ProcessResponse>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->created)) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if (isset($this->organization)) $this->organization->xmlSerialize(true, $sxe->addChild('organization'));
        if (isset($this->request)) $this->request->xmlSerialize(true, $sxe->addChild('request'));
        if (isset($this->outcome)) $this->outcome->xmlSerialize(true, $sxe->addChild('outcome'));
        if (isset($this->disposition)) $this->disposition->xmlSerialize(true, $sxe->addChild('disposition'));
        if (isset($this->requestProvider)) $this->requestProvider->xmlSerialize(true, $sxe->addChild('requestProvider'));
        if (isset($this->requestOrganization)) $this->requestOrganization->xmlSerialize(true, $sxe->addChild('requestOrganization'));
        if (isset($this->form)) $this->form->xmlSerialize(true, $sxe->addChild('form'));
        if (0 < count($this->processNote)) {
            foreach($this->processNote as $processNote) {
                $processNote->xmlSerialize(true, $sxe->addChild('processNote'));
            }
        }
        if (0 < count($this->error)) {
            foreach($this->error as $error) {
                $error->xmlSerialize(true, $sxe->addChild('error'));
            }
        }
        if (0 < count($this->communicationRequest)) {
            foreach($this->communicationRequest as $communicationRequest) {
                $communicationRequest->xmlSerialize(true, $sxe->addChild('communicationRequest'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}