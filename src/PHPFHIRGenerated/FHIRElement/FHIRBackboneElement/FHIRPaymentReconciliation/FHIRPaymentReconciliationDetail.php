<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRMoney;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * This resource provides payment details and claim references supporting a bulk payment.
 *
 * Class FHIRPaymentReconciliationDetail
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation
 */
class FHIRPaymentReconciliationDetail extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'PaymentReconciliation.Detail';

    /**
     * Amount paid for this detail.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public $amount = null;

    /**
     * The date of the invoice or financial resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $date = null;

    /**
     * The organization which is receiving the payment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $payee = null;

    /**
     * The claim or financial resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $request = null;

    /**
     * The claim response resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $response = null;

    /**
     * The Organization which submitted the claim or financial transaction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $submitter = null;

    /**
     * Code to indicate the nature of the payment, adjustment, funds advance, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRPaymentReconciliationDetail Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['amount'])) {
                $this->setAmount($data['amount']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['payee'])) {
                $this->setPayee($data['payee']);
            }
            if (isset($data['request'])) {
                $this->setRequest($data['request']);
            }
            if (isset($data['response'])) {
                $this->setResponse($data['response']);
            }
            if (isset($data['submitter'])) {
                $this->setSubmitter($data['submitter']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationDetail::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Amount paid for this detail.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     * @return $this
     */
    public function setAmount(FHIRMoney $amount = null)
    {
        if (null === $amount) {
            return $this; 
        }
        $this->amount = $amount;
        return $this;
    }

    /**
     * Amount paid for this detail.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public function getAmount()
    {
        return $this->amount;
    }


    /**
     * The date of the invoice or financial resource.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setDate($date)
    {
        if (null === $date) {
            return $this; 
        }
        if (is_scalar($date)) {
            $date = new FHIRDate($date);
        }
        if (!($date instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPaymentReconciliationDetail::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * The date of the invoice or financial resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * The organization which is receiving the payment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPayee(FHIRReference $payee = null)
    {
        if (null === $payee) {
            return $this; 
        }
        $this->payee = $payee;
        return $this;
    }

    /**
     * The organization which is receiving the payment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPayee()
    {
        return $this->payee;
    }


    /**
     * The claim or financial resource.
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
     * The claim or financial resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequest()
    {
        return $this->request;
    }


    /**
     * The claim response resource.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setResponse(FHIRReference $response = null)
    {
        if (null === $response) {
            return $this; 
        }
        $this->response = $response;
        return $this;
    }

    /**
     * The claim response resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getResponse()
    {
        return $this->response;
    }


    /**
     * The Organization which submitted the claim or financial transaction.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubmitter(FHIRReference $submitter = null)
    {
        if (null === $submitter) {
            return $this; 
        }
        $this->submitter = $submitter;
        return $this;
    }

    /**
     * The Organization which submitted the claim or financial transaction.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubmitter()
    {
        return $this->submitter;
    }


    /**
     * Code to indicate the nature of the payment, adjustment, funds advance, etc.
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
     * Code to indicate the nature of the payment, adjustment, funds advance, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
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
        if (null !== ($v = $this->getAmount())) {
            $a['amount'] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a['date'] = $v;
        }
        if (null !== ($v = $this->getPayee())) {
            $a['payee'] = $v;
        }
        if (null !== ($v = $this->getRequest())) {
            $a['request'] = $v;
        }
        if (null !== ($v = $this->getResponse())) {
            $a['response'] = $v;
        }
        if (null !== ($v = $this->getSubmitter())) {
            $a['submitter'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
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
            $sxe = new \SimpleXMLElement('<PaymentReconciliationDetail xmlns="http://hl7.org/fhir"></PaymentReconciliationDetail>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}