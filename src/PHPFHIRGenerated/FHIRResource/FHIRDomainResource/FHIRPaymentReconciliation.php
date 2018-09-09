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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationDetail;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationProcessNote;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRMoney;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRRemittanceOutcome;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * This resource provides payment details and claim references supporting a bulk payment.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRPaymentReconciliation
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRPaymentReconciliation extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'PaymentReconciliation';

    /**
     * The date when the resource was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * List of individual settlement amounts and the corresponding transaction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationDetail
     */
    public $detail = null;

    /**
     * A description of the status of the adjudication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $disposition = null;

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
     * The Insurer who produced this adjudicated response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * Transaction status: error, complete.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRemittanceOutcome
     */
    public $outcome = null;

    /**
     * The period of time for which payments have been gathered into this bulk payment for settlement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Suite of notes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationProcessNote
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
     * Total payment amount.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public $total = null;

    /**
     * FHIRPaymentReconciliation Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['created'])) {
                $this->setCreated($data['created']);
            }
            if (isset($data['detail'])) {
                $this->setDetail($data['detail']);
            }
            if (isset($data['disposition'])) {
                $this->setDisposition($data['disposition']);
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
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
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
            if (isset($data['total'])) {
                $this->setTotal($data['total']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The date when the resource was created.
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
                'FHIRPaymentReconciliation::setCreated - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($created)
            ));
        }
        $this->created = $created;
        return $this;
    }

    /**
     * The date when the resource was created.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }


    /**
     * List of individual settlement amounts and the corresponding transaction.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationDetail
     * @return $this
     */
    public function setDetail(FHIRPaymentReconciliationDetail $detail = null)
    {
        if (null === $detail) {
            return $this; 
        }
        $this->detail = $detail;
        return $this;
    }

    /**
     * List of individual settlement amounts and the corresponding transaction.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationDetail
     */
    public function getDetail()
    {
        return $this->detail;
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
                'FHIRPaymentReconciliation::setDisposition - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
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
     * The Insurer who produced this adjudicated response.
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
     * The Insurer who produced this adjudicated response.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
    }


    /**
     * Transaction status: error, complete.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRemittanceOutcome
     * @return $this
     */
    public function setOutcome($outcome)
    {
        if (null === $outcome) {
            return $this; 
        }
        if (is_scalar($outcome)) {
            $outcome = new FHIRRemittanceOutcome($outcome);
        }
        if (!($outcome instanceof FHIRRemittanceOutcome)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPaymentReconciliation::setOutcome - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRRemittanceOutcome or appropriate scalar value, %s seen.',
                gettype($outcome)
            ));
        }
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Transaction status: error, complete.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRemittanceOutcome
     */
    public function getOutcome()
    {
        return $this->outcome;
    }


    /**
     * The period of time for which payments have been gathered into this bulk payment for settlement.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        if (null === $period) {
            return $this; 
        }
        $this->period = $period;
        return $this;
    }

    /**
     * The period of time for which payments have been gathered into this bulk payment for settlement.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }


    /**
     * Suite of notes.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationProcessNote
     * @return $this
     */
    public function setProcessNote(FHIRPaymentReconciliationProcessNote $processNote = null)
    {
        if (null === $processNote) {
            return $this; 
        }
        $this->processNote = $processNote;
        return $this;
    }

    /**
     * Suite of notes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationProcessNote
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
                'FHIRPaymentReconciliation::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes or appropriate scalar value, %s seen.',
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
     * Total payment amount.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     * @return $this
     */
    public function setTotal(FHIRMoney $total = null)
    {
        if (null === $total) {
            return $this; 
        }
        $this->total = $total;
        return $this;
    }

    /**
     * Total payment amount.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public function getTotal()
    {
        return $this->total;
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
        if (null !== ($v = $this->getCreated())) {
            $a['created'] = $v;
        }
        if (null !== ($v = $this->getDetail())) {
            $a['detail'] = $v;
        }
        if (null !== ($v = $this->getDisposition())) {
            $a['disposition'] = $v;
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
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
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
        if (null !== ($v = $this->getTotal())) {
            $a['total'] = $v;
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
            $sxe = new \SimpleXMLElement('<PaymentReconciliation xmlns="http://hl7.org/fhir"></PaymentReconciliation>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}