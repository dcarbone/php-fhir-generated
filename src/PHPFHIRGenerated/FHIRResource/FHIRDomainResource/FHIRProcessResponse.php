<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcessResponse\FHIRProcessResponseProcessNote;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRProcessOutcomeCodes;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * This resource provides processing status, errors and notes from the processing of a resource.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRProcessResponse
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRProcessResponse extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ProcessResponse';

    /**
     * Request for additional supporting or authorizing information, such as: documents, images or resources.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $communicationRequest = null;

    /**
     * The date when the enclosed suite of services were performed or completed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * A description of the status of the adjudication or processing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $disposition = null;

    /**
     * Processing errors.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $error = null;

    /**
     * The form to be used for printing the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $form = null;

    /**
     * The Response business identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The organization who produced this adjudicated response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * Transaction status: error, complete, held.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRProcessOutcomeCodes
     */
    public $outcome = null;

    /**
     * Suite of processing notes or additional requirements if the processing has been held.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcessResponse\FHIRProcessResponseProcessNote
     */
    public $processNote = null;

    /**
     * Original request resource reference.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $request = null;

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $requestProvider = null;

    /**
     * The status of the resource instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public $status = null;

    /**
     * FHIRProcessResponse Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['communicationRequest'])) {
                $this->setCommunicationRequest($data['communicationRequest']);
            }
            if (isset($data['created'])) {
                $this->setCreated($data['created']);
            }
            if (isset($data['disposition'])) {
                $this->setDisposition($data['disposition']);
            }
            if (isset($data['error'])) {
                $this->setError($data['error']);
            }
            if (isset($data['form'])) {
                $this->setForm($data['form']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['organization'])) {
                $this->setOrganization($data['organization']);
            }
            if (isset($data['outcome'])) {
                $this->setOutcome($data['outcome']);
            }
            if (isset($data['processNote'])) {
                $this->setProcessNote($data['processNote']);
            }
            if (isset($data['request'])) {
                $this->setRequest($data['request']);
            }
            if (isset($data['requestProvider'])) {
                $this->setRequestProvider($data['requestProvider']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Request for additional supporting or authorizing information, such as: documents, images or resources.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setCommunicationRequest(FHIRReference $communicationRequest = null)
    {
        if (null === $communicationRequest) {
            return $this; 
        }
        $this->communicationRequest = $communicationRequest;
        return $this;
    }

    /**
     * Request for additional supporting or authorizing information, such as: documents, images or resources.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCommunicationRequest()
    {
        return $this->communicationRequest;
    }


    /**
     * The date when the enclosed suite of services were performed or completed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setCreated($created)
    {
        if (null === $created) {
            return $this; 
        }
        if (is_scalar($created)) {
            $created = new FHIRDateTime($created);
        }
        if (!($created instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProcessResponse::setCreated - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($created)
            ));
        }
        $this->created = $created;
        return $this;
    }

    /**
     * The date when the enclosed suite of services were performed or completed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }


    /**
     * A description of the status of the adjudication or processing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDisposition($disposition)
    {
        if (null === $disposition) {
            return $this; 
        }
        if (is_scalar($disposition)) {
            $disposition = new FHIRString($disposition);
        }
        if (!($disposition instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProcessResponse::setDisposition - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($disposition)
            ));
        }
        $this->disposition = $disposition;
        return $this;
    }

    /**
     * A description of the status of the adjudication or processing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDisposition()
    {
        return $this->disposition;
    }


    /**
     * Processing errors.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setError(FHIRCodeableConcept $error = null)
    {
        if (null === $error) {
            return $this; 
        }
        $this->error = $error;
        return $this;
    }

    /**
     * Processing errors.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getError()
    {
        return $this->error;
    }


    /**
     * The form to be used for printing the content.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setForm(FHIRCodeableConcept $form = null)
    {
        if (null === $form) {
            return $this; 
        }
        $this->form = $form;
        return $this;
    }

    /**
     * The form to be used for printing the content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getForm()
    {
        return $this->form;
    }


    /**
     * The Response business identifier.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The Response business identifier.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The organization who produced this adjudicated response.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setOrganization(FHIRReference $organization = null)
    {
        if (null === $organization) {
            return $this; 
        }
        $this->organization = $organization;
        return $this;
    }

    /**
     * The organization who produced this adjudicated response.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
    }


    /**
     * Transaction status: error, complete, held.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRProcessOutcomeCodes
     * @return $this
     */
    public function setOutcome($outcome)
    {
        if (null === $outcome) {
            return $this; 
        }
        if (is_scalar($outcome)) {
            $outcome = new FHIRProcessOutcomeCodes($outcome);
        }
        if (!($outcome instanceof FHIRProcessOutcomeCodes)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProcessResponse::setOutcome - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRProcessOutcomeCodes or appropriate scalar value, %s seen.',
                gettype($outcome)
            ));
        }
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Transaction status: error, complete, held.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRProcessOutcomeCodes
     */
    public function getOutcome()
    {
        return $this->outcome;
    }


    /**
     * Suite of processing notes or additional requirements if the processing has been held.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcessResponse\FHIRProcessResponseProcessNote
     * @return $this
     */
    public function setProcessNote(FHIRProcessResponseProcessNote $processNote = null)
    {
        if (null === $processNote) {
            return $this; 
        }
        $this->processNote = $processNote;
        return $this;
    }

    /**
     * Suite of processing notes or additional requirements if the processing has been held.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcessResponse\FHIRProcessResponseProcessNote
     */
    public function getProcessNote()
    {
        return $this->processNote;
    }


    /**
     * Original request resource reference.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRequest(FHIRReference $request = null)
    {
        if (null === $request) {
            return $this; 
        }
        $this->request = $request;
        return $this;
    }

    /**
     * Original request resource reference.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequest()
    {
        return $this->request;
    }


    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRequestProvider(FHIRReference $requestProvider = null)
    {
        if (null === $requestProvider) {
            return $this; 
        }
        $this->requestProvider = $requestProvider;
        return $this;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequestProvider()
    {
        return $this->requestProvider;
    }


    /**
     * The status of the resource instance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRFinancialResourceStatusCodes($status);
        }
        if (!($status instanceof FHIRFinancialResourceStatusCodes)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProcessResponse::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of the resource instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getCommunicationRequest())) {
            $a['communicationRequest'] = $v;
        }
        if (null !== ($v = $this->getCreated())) {
            $a['created'] = $v;
        }
        if (null !== ($v = $this->getDisposition())) {
            $a['disposition'] = $v;
        }
        if (null !== ($v = $this->getError())) {
            $a['error'] = $v;
        }
        if (null !== ($v = $this->getForm())) {
            $a['form'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getOrganization())) {
            $a['organization'] = $v;
        }
        if (null !== ($v = $this->getOutcome())) {
            $a['outcome'] = $v;
        }
        if (null !== ($v = $this->getProcessNote())) {
            $a['processNote'] = $v;
        }
        if (null !== ($v = $this->getRequest())) {
            $a['request'] = $v;
        }
        if (null !== ($v = $this->getRequestProvider())) {
            $a['requestProvider'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ProcessResponse xmlns="http://hl7.org/fhir"></ProcessResponse>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}