<?php namespace PHPFHIRGenerated\FHIRResource\FHIRPaymentReconciliation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * Code to indicate the nature of the payment, adjustment, funds advance, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * The claim or financial resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * The claim or financial resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $request
     * @return $this
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * The claim response resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * The claim response resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $response
     * @return $this
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * The Organization which submitted the claim or financial transaction.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubmitter()
    {
        return $this->submitter;
    }

    /**
     * The Organization which submitted the claim or financial transaction.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $submitter
     * @return $this
     */
    public function setSubmitter($submitter)
    {
        $this->submitter = $submitter;
        return $this;
    }

    /**
     * The organization which is receiving the payment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPayee()
    {
        return $this->payee;
    }

    /**
     * The organization which is receiving the payment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $payee
     * @return $this
     */
    public function setPayee($payee)
    {
        $this->payee = $payee;
        return $this;
    }

    /**
     * The date of the invoice or financial resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date of the invoice or financial resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Amount paid for this detail.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Amount paid for this detail.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
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
        if (null !== $this->type) $json['type'] = json_encode($this->type);
        if (null !== $this->request) $json['request'] = json_encode($this->request);
        if (null !== $this->response) $json['response'] = json_encode($this->response);
        if (null !== $this->submitter) $json['submitter'] = json_encode($this->submitter);
        if (null !== $this->payee) $json['payee'] = json_encode($this->payee);
        if (null !== $this->date) $json['date'] = json_encode($this->date);
        if (null !== $this->amount) $json['amount'] = json_encode($this->amount);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<PaymentReconciliationDetail xmlns="http://hl7.org/fhir"></PaymentReconciliationDetail>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->request) $this->request->xmlSerialize(true, $sxe->addChild('request'));
        if (null !== $this->response) $this->response->xmlSerialize(true, $sxe->addChild('response'));
        if (null !== $this->submitter) $this->submitter->xmlSerialize(true, $sxe->addChild('submitter'));
        if (null !== $this->payee) $this->payee->xmlSerialize(true, $sxe->addChild('payee'));
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->amount) $this->amount->xmlSerialize(true, $sxe->addChild('amount'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}