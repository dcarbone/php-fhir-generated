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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponsePayment;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseProcessNote;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseTotal;
use PHPFHIRGenerated\FHIRElement\FHIRClaimProcessingCodes;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUse;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * This resource provides the adjudication details from the processing of a Claim resource.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRClaimResponse
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRClaimResponse extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ClaimResponse';

    /**
     * The first-tier service adjudications for payor added services.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem
     */
    public $addItem = null;

    /**
     * Request for additional supporting or authorizing information, such as: documents, images or resources.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $communicationRequest = null;

    /**
     * The date when this resource was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * A description of the status of the adjudication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $disposition = null;

    /**
     * Mutually exclusive with Services Provided (Item).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError
     */
    public $error = null;

    /**
     * The form to be used for printing the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $form = null;

    /**
     * The response business identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Financial instrument by which payment information for health care.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance
     */
    public $insurance = null;

    /**
     * The Insurer who produced this adjudicated response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $insurer = null;

    /**
     * The first-tier service adjudications for submitted services.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem
     */
    public $item = null;

    /**
     * Transaction: error, complete, partial processing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRClaimProcessingCodes
     */
    public $outcome = null;

    /**
     * Patient Resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Party to be reimbursed: Subscriber, provider, other.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $payeeType = null;

    /**
     * Payment details for the claim if the claim has been paid.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponsePayment
     */
    public $payment = null;

    /**
     * A list of references from the Insurer to which these services pertain.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $preAuthRef = null;

    /**
     * Note text.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseProcessNote
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
     * Status of funds reservation (For provider, for Patient, None).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $reserved = null;

    /**
     * The status of the resource instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public $status = null;

    /**
     * A finer grained suite of claim subtype codes which may convey Inpatient vs Outpatient and/or a specialty service. In the US the CMS Bill Type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $subType = null;

    /**
     * Totals for amounts submitted, co-pays, benefits payable etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseTotal
     */
    public $total = null;

    /**
     * The category of claim, e.g, oral, pharmacy, vision, institutional, professional.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * A claim, a list of completed goods and services; a preauthorization, a list or proposed goods and services; or a predetermination, a set of goods and services being considered, for which insurer adjudication is sought.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUse
     */
    public $use = null;

    /**
     * FHIRClaimResponse Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['addItem'])) {
                $this->setAddItem($data['addItem']);
            }
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
            if (isset($data['insurance'])) {
                $this->setInsurance($data['insurance']);
            }
            if (isset($data['insurer'])) {
                $this->setInsurer($data['insurer']);
            }
            if (isset($data['item'])) {
                $this->setItem($data['item']);
            }
            if (isset($data['outcome'])) {
                $this->setOutcome($data['outcome']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['payeeType'])) {
                $this->setPayeeType($data['payeeType']);
            }
            if (isset($data['payment'])) {
                $this->setPayment($data['payment']);
            }
            if (isset($data['preAuthRef'])) {
                $this->setPreAuthRef($data['preAuthRef']);
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
            if (isset($data['reserved'])) {
                $this->setReserved($data['reserved']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subType'])) {
                $this->setSubType($data['subType']);
            }
            if (isset($data['total'])) {
                $this->setTotal($data['total']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['use'])) {
                $this->setUse($data['use']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The first-tier service adjudications for payor added services.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem
     * @return $this
     */
    public function setAddItem(FHIRClaimResponseAddItem $addItem = null)
    {
        if (null === $addItem) {
            return $this; 
        }
        $this->addItem = $addItem;
        return $this;
    }

    /**
     * The first-tier service adjudications for payor added services.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem
     */
    public function getAddItem()
    {
        return $this->addItem;
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
     * The date when this resource was created.
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
                'FHIRClaimResponse::setCreated - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($created)
            ));
        }
        $this->created = $created;
        return $this;
    }

    /**
     * The date when this resource was created.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }


    /**
     * A description of the status of the adjudication.
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
                'FHIRClaimResponse::setDisposition - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($disposition)
            ));
        }
        $this->disposition = $disposition;
        return $this;
    }

    /**
     * A description of the status of the adjudication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDisposition()
    {
        return $this->disposition;
    }


    /**
     * Mutually exclusive with Services Provided (Item).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError
     * @return $this
     */
    public function setError(FHIRClaimResponseError $error = null)
    {
        if (null === $error) {
            return $this; 
        }
        $this->error = $error;
        return $this;
    }

    /**
     * Mutually exclusive with Services Provided (Item).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError
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
     * The response business identifier.
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
     * The response business identifier.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Financial instrument by which payment information for health care.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance
     * @return $this
     */
    public function setInsurance(FHIRClaimResponseInsurance $insurance = null)
    {
        if (null === $insurance) {
            return $this; 
        }
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * Financial instrument by which payment information for health care.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance
     */
    public function getInsurance()
    {
        return $this->insurance;
    }


    /**
     * The Insurer who produced this adjudicated response.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setInsurer(FHIRReference $insurer = null)
    {
        if (null === $insurer) {
            return $this; 
        }
        $this->insurer = $insurer;
        return $this;
    }

    /**
     * The Insurer who produced this adjudicated response.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInsurer()
    {
        return $this->insurer;
    }


    /**
     * The first-tier service adjudications for submitted services.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem
     * @return $this
     */
    public function setItem(FHIRClaimResponseItem $item = null)
    {
        if (null === $item) {
            return $this; 
        }
        $this->item = $item;
        return $this;
    }

    /**
     * The first-tier service adjudications for submitted services.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem
     */
    public function getItem()
    {
        return $this->item;
    }


    /**
     * Transaction: error, complete, partial processing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRClaimProcessingCodes
     * @return $this
     */
    public function setOutcome($outcome)
    {
        if (null === $outcome) {
            return $this; 
        }
        if (is_scalar($outcome)) {
            $outcome = new FHIRClaimProcessingCodes($outcome);
        }
        if (!($outcome instanceof FHIRClaimProcessingCodes)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimResponse::setOutcome - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRClaimProcessingCodes or appropriate scalar value, %s seen.',
                gettype($outcome)
            ));
        }
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Transaction: error, complete, partial processing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRClaimProcessingCodes
     */
    public function getOutcome()
    {
        return $this->outcome;
    }


    /**
     * Patient Resource.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPatient(FHIRReference $patient = null)
    {
        if (null === $patient) {
            return $this; 
        }
        $this->patient = $patient;
        return $this;
    }

    /**
     * Patient Resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }


    /**
     * Party to be reimbursed: Subscriber, provider, other.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setPayeeType(FHIRCodeableConcept $payeeType = null)
    {
        if (null === $payeeType) {
            return $this; 
        }
        $this->payeeType = $payeeType;
        return $this;
    }

    /**
     * Party to be reimbursed: Subscriber, provider, other.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPayeeType()
    {
        return $this->payeeType;
    }


    /**
     * Payment details for the claim if the claim has been paid.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponsePayment
     * @return $this
     */
    public function setPayment(FHIRClaimResponsePayment $payment = null)
    {
        if (null === $payment) {
            return $this; 
        }
        $this->payment = $payment;
        return $this;
    }

    /**
     * Payment details for the claim if the claim has been paid.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponsePayment
     */
    public function getPayment()
    {
        return $this->payment;
    }


    /**
     * A list of references from the Insurer to which these services pertain.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPreAuthRef($preAuthRef)
    {
        if (null === $preAuthRef) {
            return $this; 
        }
        if (is_scalar($preAuthRef)) {
            $preAuthRef = new FHIRString($preAuthRef);
        }
        if (!($preAuthRef instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimResponse::setPreAuthRef - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($preAuthRef)
            ));
        }
        $this->preAuthRef = $preAuthRef;
        return $this;
    }

    /**
     * A list of references from the Insurer to which these services pertain.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPreAuthRef()
    {
        return $this->preAuthRef;
    }


    /**
     * Note text.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseProcessNote
     * @return $this
     */
    public function setProcessNote(FHIRClaimResponseProcessNote $processNote = null)
    {
        if (null === $processNote) {
            return $this; 
        }
        $this->processNote = $processNote;
        return $this;
    }

    /**
     * Note text.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseProcessNote
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
     * Status of funds reservation (For provider, for Patient, None).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setReserved(FHIRCoding $reserved = null)
    {
        if (null === $reserved) {
            return $this; 
        }
        $this->reserved = $reserved;
        return $this;
    }

    /**
     * Status of funds reservation (For provider, for Patient, None).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getReserved()
    {
        return $this->reserved;
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
                'FHIRClaimResponse::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes or appropriate scalar value, %s seen.',
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
     * A finer grained suite of claim subtype codes which may convey Inpatient vs Outpatient and/or a specialty service. In the US the CMS Bill Type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSubType(FHIRCodeableConcept $subType = null)
    {
        if (null === $subType) {
            return $this; 
        }
        $this->subType = $subType;
        return $this;
    }

    /**
     * A finer grained suite of claim subtype codes which may convey Inpatient vs Outpatient and/or a specialty service. In the US the CMS Bill Type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubType()
    {
        return $this->subType;
    }


    /**
     * Totals for amounts submitted, co-pays, benefits payable etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseTotal
     * @return $this
     */
    public function setTotal(FHIRClaimResponseTotal $total = null)
    {
        if (null === $total) {
            return $this; 
        }
        $this->total = $total;
        return $this;
    }

    /**
     * Totals for amounts submitted, co-pays, benefits payable etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseTotal
     */
    public function getTotal()
    {
        return $this->total;
    }


    /**
     * The category of claim, e.g, oral, pharmacy, vision, institutional, professional.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The category of claim, e.g, oral, pharmacy, vision, institutional, professional.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * A claim, a list of completed goods and services; a preauthorization, a list or proposed goods and services; or a predetermination, a set of goods and services being considered, for which insurer adjudication is sought.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUse
     * @return $this
     */
    public function setUse($use)
    {
        if (null === $use) {
            return $this; 
        }
        if (is_scalar($use)) {
            $use = new FHIRUse($use);
        }
        if (!($use instanceof FHIRUse)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimResponse::setUse - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUse or appropriate scalar value, %s seen.',
                gettype($use)
            ));
        }
        $this->use = $use;
        return $this;
    }

    /**
     * A claim, a list of completed goods and services; a preauthorization, a list or proposed goods and services; or a predetermination, a set of goods and services being considered, for which insurer adjudication is sought.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUse
     */
    public function getUse()
    {
        return $this->use;
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
        if (null !== ($v = $this->getAddItem())) {
            $a['addItem'] = $v;
        }
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
        if (null !== ($v = $this->getInsurance())) {
            $a['insurance'] = $v;
        }
        if (null !== ($v = $this->getInsurer())) {
            $a['insurer'] = $v;
        }
        if (null !== ($v = $this->getItem())) {
            $a['item'] = $v;
        }
        if (null !== ($v = $this->getOutcome())) {
            $a['outcome'] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a['patient'] = $v;
        }
        if (null !== ($v = $this->getPayeeType())) {
            $a['payeeType'] = $v;
        }
        if (null !== ($v = $this->getPayment())) {
            $a['payment'] = $v;
        }
        if (null !== ($v = $this->getPreAuthRef())) {
            $a['preAuthRef'] = $v;
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
        if (null !== ($v = $this->getReserved())) {
            $a['reserved'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSubType())) {
            $a['subType'] = $v;
        }
        if (null !== ($v = $this->getTotal())) {
            $a['total'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getUse())) {
            $a['use'] = $v;
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
            $sxe = new \SimpleXMLElement('<ClaimResponse xmlns="http://hl7.org/fhir"></ClaimResponse>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}