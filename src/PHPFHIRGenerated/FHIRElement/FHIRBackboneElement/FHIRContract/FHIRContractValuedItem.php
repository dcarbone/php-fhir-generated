<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract;

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
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRMoney;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;

/**
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 *
 * Class FHIRContractValuedItem
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract
 */
class FHIRContractValuedItem extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Contract.ValuedItem';

    /**
     * Indicates the time during which this Contract ValuedItem information is effective.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $effectiveTime = null;

    /**
     * Specific type of Contract Valued Item that may be priced.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $entityCodeableConcept = null;

    /**
     * Specific type of Contract Valued Item that may be priced.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $entityReference = null;

    /**
     * A real number that represents a multiplier used in determining the overall value of the Contract Valued Item delivered. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $factor = null;

    /**
     * Identifies a Contract Valued Item instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Id  of the clause or question text related to the context of this valuedItem in the referenced form or QuestionnaireResponse.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $linkId = null;

    /**
     * Expresses the product of the Contract Valued Item unitQuantity and the unitPriceAmt. For example, the formula: unit Quantity * unit Price (Cost per Point) * factor Number  * points = net Amount. Quantity, factor and points are assumed to be 1 if not supplied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public $net = null;

    /**
     * Terms of valuation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $payment = null;

    /**
     * When payment is due.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $paymentDate = null;

    /**
     * An amount that expresses the weighting (based on difficulty, cost and/or resource intensiveness) associated with the Contract Valued Item delivered. The concept of Points allows for assignment of point values for a Contract Valued Item, such that a monetary amount can be assigned to each point.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $points = null;

    /**
     * Specifies the units by which the Contract Valued Item is measured or counted, and quantifies the countable or measurable Contract Valued Item instances.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * Who will receive payment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $recipient = null;

    /**
     * Who will make payment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $responsible = null;

    /**
     * A set of security labels that define which terms are controlled by this condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $securityLabelNumber = null;

    /**
     * A Contract Valued Item unit valuation measure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public $unitPrice = null;

    /**
     * FHIRContractValuedItem Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['effectiveTime'])) {
                $this->setEffectiveTime($data['effectiveTime']);
            }
            if (isset($data['entityCodeableConcept'])) {
                $this->setEntityCodeableConcept($data['entityCodeableConcept']);
            }
            if (isset($data['entityReference'])) {
                $this->setEntityReference($data['entityReference']);
            }
            if (isset($data['factor'])) {
                $this->setFactor($data['factor']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['linkId'])) {
                $this->setLinkId($data['linkId']);
            }
            if (isset($data['net'])) {
                $this->setNet($data['net']);
            }
            if (isset($data['payment'])) {
                $this->setPayment($data['payment']);
            }
            if (isset($data['paymentDate'])) {
                $this->setPaymentDate($data['paymentDate']);
            }
            if (isset($data['points'])) {
                $this->setPoints($data['points']);
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['recipient'])) {
                $this->setRecipient($data['recipient']);
            }
            if (isset($data['responsible'])) {
                $this->setResponsible($data['responsible']);
            }
            if (isset($data['securityLabelNumber'])) {
                $this->setSecurityLabelNumber($data['securityLabelNumber']);
            }
            if (isset($data['unitPrice'])) {
                $this->setUnitPrice($data['unitPrice']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Indicates the time during which this Contract ValuedItem information is effective.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setEffectiveTime($effectiveTime)
    {
        if (null === $effectiveTime) {
            return $this; 
        }
        if (is_scalar($effectiveTime)) {
            $effectiveTime = new FHIRDateTime($effectiveTime);
        }
        if (!($effectiveTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractValuedItem::setEffectiveTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($effectiveTime)
            ));
        }
        $this->effectiveTime = $effectiveTime;
        return $this;
    }

    /**
     * Indicates the time during which this Contract ValuedItem information is effective.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getEffectiveTime()
    {
        return $this->effectiveTime;
    }


    /**
     * Specific type of Contract Valued Item that may be priced.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setEntityCodeableConcept(FHIRCodeableConcept $entityCodeableConcept = null)
    {
        if (null === $entityCodeableConcept) {
            return $this; 
        }
        $this->entityCodeableConcept = $entityCodeableConcept;
        return $this;
    }

    /**
     * Specific type of Contract Valued Item that may be priced.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getEntityCodeableConcept()
    {
        return $this->entityCodeableConcept;
    }


    /**
     * Specific type of Contract Valued Item that may be priced.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEntityReference(FHIRReference $entityReference = null)
    {
        if (null === $entityReference) {
            return $this; 
        }
        $this->entityReference = $entityReference;
        return $this;
    }

    /**
     * Specific type of Contract Valued Item that may be priced.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEntityReference()
    {
        return $this->entityReference;
    }


    /**
     * A real number that represents a multiplier used in determining the overall value of the Contract Valued Item delivered. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setFactor($factor)
    {
        if (null === $factor) {
            return $this; 
        }
        if (is_scalar($factor)) {
            $factor = new FHIRDecimal($factor);
        }
        if (!($factor instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractValuedItem::setFactor - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($factor)
            ));
        }
        $this->factor = $factor;
        return $this;
    }

    /**
     * A real number that represents a multiplier used in determining the overall value of the Contract Valued Item delivered. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getFactor()
    {
        return $this->factor;
    }


    /**
     * Identifies a Contract Valued Item instance.
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
     * Identifies a Contract Valued Item instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Id  of the clause or question text related to the context of this valuedItem in the referenced form or QuestionnaireResponse.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setLinkId($linkId)
    {
        if (null === $linkId) {
            return $this; 
        }
        if (is_scalar($linkId)) {
            $linkId = new FHIRString($linkId);
        }
        if (!($linkId instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractValuedItem::setLinkId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($linkId)
            ));
        }
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Id  of the clause or question text related to the context of this valuedItem in the referenced form or QuestionnaireResponse.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLinkId()
    {
        return $this->linkId;
    }


    /**
     * Expresses the product of the Contract Valued Item unitQuantity and the unitPriceAmt. For example, the formula: unit Quantity * unit Price (Cost per Point) * factor Number  * points = net Amount. Quantity, factor and points are assumed to be 1 if not supplied.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     * @return $this
     */
    public function setNet(FHIRMoney $net = null)
    {
        if (null === $net) {
            return $this; 
        }
        $this->net = $net;
        return $this;
    }

    /**
     * Expresses the product of the Contract Valued Item unitQuantity and the unitPriceAmt. For example, the formula: unit Quantity * unit Price (Cost per Point) * factor Number  * points = net Amount. Quantity, factor and points are assumed to be 1 if not supplied.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public function getNet()
    {
        return $this->net;
    }


    /**
     * Terms of valuation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPayment($payment)
    {
        if (null === $payment) {
            return $this; 
        }
        if (is_scalar($payment)) {
            $payment = new FHIRString($payment);
        }
        if (!($payment instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractValuedItem::setPayment - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($payment)
            ));
        }
        $this->payment = $payment;
        return $this;
    }

    /**
     * Terms of valuation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPayment()
    {
        return $this->payment;
    }


    /**
     * When payment is due.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setPaymentDate($paymentDate)
    {
        if (null === $paymentDate) {
            return $this; 
        }
        if (is_scalar($paymentDate)) {
            $paymentDate = new FHIRDateTime($paymentDate);
        }
        if (!($paymentDate instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractValuedItem::setPaymentDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($paymentDate)
            ));
        }
        $this->paymentDate = $paymentDate;
        return $this;
    }

    /**
     * When payment is due.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }


    /**
     * An amount that expresses the weighting (based on difficulty, cost and/or resource intensiveness) associated with the Contract Valued Item delivered. The concept of Points allows for assignment of point values for a Contract Valued Item, such that a monetary amount can be assigned to each point.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setPoints($points)
    {
        if (null === $points) {
            return $this; 
        }
        if (is_scalar($points)) {
            $points = new FHIRDecimal($points);
        }
        if (!($points instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractValuedItem::setPoints - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($points)
            ));
        }
        $this->points = $points;
        return $this;
    }

    /**
     * An amount that expresses the weighting (based on difficulty, cost and/or resource intensiveness) associated with the Contract Valued Item delivered. The concept of Points allows for assignment of point values for a Contract Valued Item, such that a monetary amount can be assigned to each point.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPoints()
    {
        return $this->points;
    }


    /**
     * Specifies the units by which the Contract Valued Item is measured or counted, and quantifies the countable or measurable Contract Valued Item instances.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setQuantity(FHIRQuantity $quantity = null)
    {
        if (null === $quantity) {
            return $this; 
        }
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Specifies the units by which the Contract Valued Item is measured or counted, and quantifies the countable or measurable Contract Valued Item instances.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }


    /**
     * Who will receive payment.
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
     * Who will receive payment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRecipient()
    {
        return $this->recipient;
    }


    /**
     * Who will make payment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setResponsible(FHIRReference $responsible = null)
    {
        if (null === $responsible) {
            return $this; 
        }
        $this->responsible = $responsible;
        return $this;
    }

    /**
     * Who will make payment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getResponsible()
    {
        return $this->responsible;
    }


    /**
     * A set of security labels that define which terms are controlled by this condition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setSecurityLabelNumber($securityLabelNumber)
    {
        if (null === $securityLabelNumber) {
            return $this; 
        }
        if (is_scalar($securityLabelNumber)) {
            $securityLabelNumber = new FHIRUnsignedInt($securityLabelNumber);
        }
        if (!($securityLabelNumber instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractValuedItem::setSecurityLabelNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($securityLabelNumber)
            ));
        }
        $this->securityLabelNumber = $securityLabelNumber;
        return $this;
    }

    /**
     * A set of security labels that define which terms are controlled by this condition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getSecurityLabelNumber()
    {
        return $this->securityLabelNumber;
    }


    /**
     * A Contract Valued Item unit valuation measure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     * @return $this
     */
    public function setUnitPrice(FHIRMoney $unitPrice = null)
    {
        if (null === $unitPrice) {
            return $this; 
        }
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * A Contract Valued Item unit valuation measure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
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
        if (null !== ($v = $this->getEffectiveTime())) {
            $a['effectiveTime'] = $v;
        }
        if (null !== ($v = $this->getEntityCodeableConcept())) {
            $a['entityCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getEntityReference())) {
            $a['entityReference'] = $v;
        }
        if (null !== ($v = $this->getFactor())) {
            $a['factor'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getLinkId())) {
            $a['linkId'] = $v;
        }
        if (null !== ($v = $this->getNet())) {
            $a['net'] = $v;
        }
        if (null !== ($v = $this->getPayment())) {
            $a['payment'] = $v;
        }
        if (null !== ($v = $this->getPaymentDate())) {
            $a['paymentDate'] = $v;
        }
        if (null !== ($v = $this->getPoints())) {
            $a['points'] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a['quantity'] = $v;
        }
        if (null !== ($v = $this->getRecipient())) {
            $a['recipient'] = $v;
        }
        if (null !== ($v = $this->getResponsible())) {
            $a['responsible'] = $v;
        }
        if (null !== ($v = $this->getSecurityLabelNumber())) {
            $a['securityLabelNumber'] = $v;
        }
        if (null !== ($v = $this->getUnitPrice())) {
            $a['unitPrice'] = $v;
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
            $sxe = new \SimpleXMLElement('<ContractValuedItem xmlns="http://hl7.org/fhir"></ContractValuedItem>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}