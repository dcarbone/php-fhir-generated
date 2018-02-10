<?php namespace PHPFHIRGenerated\FHIRResource\FHIRPaymentReconciliation;

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
 * This resource provides payment details and claim references supporting a bulk payment.
 */
class FHIRPaymentReconciliationDetail extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Code to indicate the nature of the payment, adjustment, funds advance, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

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
     * The organization which is receiving the payment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $payee = null;

    /**
     * The date of the invoice or financial resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $date = null;

    /**
     * Amount paid for this detail.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $amount = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'PaymentReconciliation.Detail';

    /**
     * Code to indicate the nature of the payment, adjustment, funds advance, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Code to indicate the nature of the payment, adjustment, funds advance, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * The claim or financial resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequest() {
        return $this->request;
    }

    /**
     * The claim or financial resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $request
     * @return $this
     */
    public function setRequest($request) {
        $this->request = $request;
        return $this;
    }

    /**
     * The claim response resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getResponse() {
        return $this->response;
    }

    /**
     * The claim response resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $response
     * @return $this
     */
    public function setResponse($response) {
        $this->response = $response;
        return $this;
    }

    /**
     * The Organization which submitted the claim or financial transaction.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubmitter() {
        return $this->submitter;
    }

    /**
     * The Organization which submitted the claim or financial transaction.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $submitter
     * @return $this
     */
    public function setSubmitter($submitter) {
        $this->submitter = $submitter;
        return $this;
    }

    /**
     * The organization which is receiving the payment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPayee() {
        return $this->payee;
    }

    /**
     * The organization which is receiving the payment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $payee
     * @return $this
     */
    public function setPayee($payee) {
        $this->payee = $payee;
        return $this;
    }

    /**
     * The date of the invoice or financial resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * The date of the invoice or financial resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $date
     * @return $this
     */
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    /**
     * Amount paid for this detail.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * Amount paid for this detail.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney $amount
     * @return $this
     */
    public function setAmount($amount) {
        $this->amount = $amount;
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
            if (isset($data['type'])) {
                $this->setType($data['type']);
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
            if (isset($data['payee'])) {
                $this->setPayee($data['payee']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['amount'])) {
                $this->setAmount($data['amount']);
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
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->request)) $json['request'] = $this->request;
        if (isset($this->response)) $json['response'] = $this->response;
        if (isset($this->submitter)) $json['submitter'] = $this->submitter;
        if (isset($this->payee)) $json['payee'] = $this->payee;
        if (isset($this->date)) $json['date'] = $this->date;
        if (isset($this->amount)) $json['amount'] = $this->amount;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<PaymentReconciliationDetail xmlns="http://hl7.org/fhir"></PaymentReconciliationDetail>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->request)) $this->request->xmlSerialize(true, $sxe->addChild('request'));
        if (isset($this->response)) $this->response->xmlSerialize(true, $sxe->addChild('response'));
        if (isset($this->submitter)) $this->submitter->xmlSerialize(true, $sxe->addChild('submitter'));
        if (isset($this->payee)) $this->payee->xmlSerialize(true, $sxe->addChild('payee'));
        if (isset($this->date)) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (isset($this->amount)) $this->amount->xmlSerialize(true, $sxe->addChild('amount'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}