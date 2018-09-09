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

use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceParticipant;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRInvoiceStatus;
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use PHPFHIRGenerated\FHIRElement\FHIRMoney;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Invoice containing collected ChargeItems from an Account with calculated individual and total price for Billing purpose.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRInvoice
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRInvoice extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Invoice';

    /**
     * Account which is supposed to be balanced with this Invoice.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $account = null;

    /**
     * In case of Invoice cancellation a reason must be given (entered in error, superseded by corrected invoice etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $cancelledReason = null;

    /**
     * Date/time(s) of when this Invoice was posted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Identifier of this Invoice, often used for reference in corresponcence about this invoice or for tracking of payments.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The organizationissuing the Invoice.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $issuer = null;

    /**
     * Each line item represents one charge for goods ond services rendered. Details such as date, code and amount are found in the referenced ChargeItem resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem
     */
    public $lineItem = null;

    /**
     * Comments made about the invoice by the issuer, subject or other participants.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * Indicates who or what performed or participated in the charged service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceParticipant
     */
    public $participant = null;

    /**
     * Payment details such as banking details, period of payment, deductables, methods of payment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $paymentTerms = null;

    /**
     * The individual or Organization responsible for balancing of this invoice.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $recipient = null;

    /**
     * The current state of the Invoice.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInvoiceStatus
     */
    public $status = null;

    /**
     * The individual or set of individuals receiving the goods and services billed in this invoice.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Invoice total, tax included.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public $totalGross = null;

    /**
     * Invoice total , taxes excluded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public $totalNet = null;

    /**
     * The total amount for the Invoice may be calculated as the sum of the line items with surcharges/deductions that apply in certain conditions.  The priceComponent element can be used to offer transparency to the recipient of the Invoice of how the total price was calculated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent
     */
    public $totalPriceComponent = null;

    /**
     * Type of Invoice depending on domain, realm an usage (eg. internal/external, dental, preliminary).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRInvoice Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['account'])) {
                $this->setAccount($data['account']);
            }
            if (isset($data['cancelledReason'])) {
                $this->setCancelledReason($data['cancelledReason']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['issuer'])) {
                $this->setIssuer($data['issuer']);
            }
            if (isset($data['lineItem'])) {
                $this->setLineItem($data['lineItem']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['participant'])) {
                $this->setParticipant($data['participant']);
            }
            if (isset($data['paymentTerms'])) {
                $this->setPaymentTerms($data['paymentTerms']);
            }
            if (isset($data['recipient'])) {
                $this->setRecipient($data['recipient']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['totalGross'])) {
                $this->setTotalGross($data['totalGross']);
            }
            if (isset($data['totalNet'])) {
                $this->setTotalNet($data['totalNet']);
            }
            if (isset($data['totalPriceComponent'])) {
                $this->setTotalPriceComponent($data['totalPriceComponent']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRInvoice::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Account which is supposed to be balanced with this Invoice.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAccount(FHIRReference $account = null)
    {
        if (null === $account) {
            return $this; 
        }
        $this->account = $account;
        return $this;
    }

    /**
     * Account which is supposed to be balanced with this Invoice.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAccount()
    {
        return $this->account;
    }


    /**
     * In case of Invoice cancellation a reason must be given (entered in error, superseded by corrected invoice etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setCancelledReason($cancelledReason)
    {
        if (null === $cancelledReason) {
            return $this; 
        }
        if (is_scalar($cancelledReason)) {
            $cancelledReason = new FHIRString($cancelledReason);
        }
        if (!($cancelledReason instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRInvoice::setCancelledReason - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($cancelledReason)
            ));
        }
        $this->cancelledReason = $cancelledReason;
        return $this;
    }

    /**
     * In case of Invoice cancellation a reason must be given (entered in error, superseded by corrected invoice etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCancelledReason()
    {
        return $this->cancelledReason;
    }


    /**
     * Date/time(s) of when this Invoice was posted.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDate($date)
    {
        if (null === $date) {
            return $this; 
        }
        if (is_scalar($date)) {
            $date = new FHIRDateTime($date);
        }
        if (!($date instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRInvoice::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * Date/time(s) of when this Invoice was posted.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * Identifier of this Invoice, often used for reference in corresponcence about this invoice or for tracking of payments.
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
     * Identifier of this Invoice, often used for reference in corresponcence about this invoice or for tracking of payments.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The organizationissuing the Invoice.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setIssuer(FHIRReference $issuer = null)
    {
        if (null === $issuer) {
            return $this; 
        }
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * The organizationissuing the Invoice.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getIssuer()
    {
        return $this->issuer;
    }


    /**
     * Each line item represents one charge for goods ond services rendered. Details such as date, code and amount are found in the referenced ChargeItem resource.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem
     * @return $this
     */
    public function setLineItem(FHIRInvoiceLineItem $lineItem = null)
    {
        if (null === $lineItem) {
            return $this; 
        }
        $this->lineItem = $lineItem;
        return $this;
    }

    /**
     * Each line item represents one charge for goods ond services rendered. Details such as date, code and amount are found in the referenced ChargeItem resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }


    /**
     * Comments made about the invoice by the issuer, subject or other participants.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note = $note;
        return $this;
    }

    /**
     * Comments made about the invoice by the issuer, subject or other participants.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * Indicates who or what performed or participated in the charged service.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceParticipant
     * @return $this
     */
    public function setParticipant(FHIRInvoiceParticipant $participant = null)
    {
        if (null === $participant) {
            return $this; 
        }
        $this->participant = $participant;
        return $this;
    }

    /**
     * Indicates who or what performed or participated in the charged service.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceParticipant
     */
    public function getParticipant()
    {
        return $this->participant;
    }


    /**
     * Payment details such as banking details, period of payment, deductables, methods of payment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setPaymentTerms($paymentTerms)
    {
        if (null === $paymentTerms) {
            return $this; 
        }
        if (is_scalar($paymentTerms)) {
            $paymentTerms = new FHIRMarkdown($paymentTerms);
        }
        if (!($paymentTerms instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRInvoice::setPaymentTerms - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($paymentTerms)
            ));
        }
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Payment details such as banking details, period of payment, deductables, methods of payment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }


    /**
     * The individual or Organization responsible for balancing of this invoice.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRecipient(FHIRReference $recipient = null)
    {
        if (null === $recipient) {
            return $this; 
        }
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * The individual or Organization responsible for balancing of this invoice.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRecipient()
    {
        return $this->recipient;
    }


    /**
     * The current state of the Invoice.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInvoiceStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRInvoiceStatus($status);
        }
        if (!($status instanceof FHIRInvoiceStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRInvoice::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInvoiceStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The current state of the Invoice.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInvoiceStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * The individual or set of individuals receiving the goods and services billed in this invoice.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubject(FHIRReference $subject = null)
    {
        if (null === $subject) {
            return $this; 
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * The individual or set of individuals receiving the goods and services billed in this invoice.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * Invoice total, tax included.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     * @return $this
     */
    public function setTotalGross(FHIRMoney $totalGross = null)
    {
        if (null === $totalGross) {
            return $this; 
        }
        $this->totalGross = $totalGross;
        return $this;
    }

    /**
     * Invoice total, tax included.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public function getTotalGross()
    {
        return $this->totalGross;
    }


    /**
     * Invoice total , taxes excluded.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     * @return $this
     */
    public function setTotalNet(FHIRMoney $totalNet = null)
    {
        if (null === $totalNet) {
            return $this; 
        }
        $this->totalNet = $totalNet;
        return $this;
    }

    /**
     * Invoice total , taxes excluded.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public function getTotalNet()
    {
        return $this->totalNet;
    }


    /**
     * The total amount for the Invoice may be calculated as the sum of the line items with surcharges/deductions that apply in certain conditions.  The priceComponent element can be used to offer transparency to the recipient of the Invoice of how the total price was calculated.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent
     * @return $this
     */
    public function setTotalPriceComponent(FHIRInvoicePriceComponent $totalPriceComponent = null)
    {
        if (null === $totalPriceComponent) {
            return $this; 
        }
        $this->totalPriceComponent = $totalPriceComponent;
        return $this;
    }

    /**
     * The total amount for the Invoice may be calculated as the sum of the line items with surcharges/deductions that apply in certain conditions.  The priceComponent element can be used to offer transparency to the recipient of the Invoice of how the total price was calculated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent
     */
    public function getTotalPriceComponent()
    {
        return $this->totalPriceComponent;
    }


    /**
     * Type of Invoice depending on domain, realm an usage (eg. internal/external, dental, preliminary).
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
     * Type of Invoice depending on domain, realm an usage (eg. internal/external, dental, preliminary).
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getAccount())) {
            $a['account'] = $v;
        }
        if (null !== ($v = $this->getCancelledReason())) {
            $a['cancelledReason'] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a['date'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getIssuer())) {
            $a['issuer'] = $v;
        }
        if (null !== ($v = $this->getLineItem())) {
            $a['lineItem'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getParticipant())) {
            $a['participant'] = $v;
        }
        if (null !== ($v = $this->getPaymentTerms())) {
            $a['paymentTerms'] = $v;
        }
        if (null !== ($v = $this->getRecipient())) {
            $a['recipient'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getTotalGross())) {
            $a['totalGross'] = $v;
        }
        if (null !== ($v = $this->getTotalNet())) {
            $a['totalNet'] = $v;
        }
        if (null !== ($v = $this->getTotalPriceComponent())) {
            $a['totalPriceComponent'] = $v;
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
            $sxe = new \SimpleXMLElement('<Invoice xmlns="http://hl7.org/fhir"></Invoice>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}