<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit;

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
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRMoney;

/**
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 *
 * Class FHIRExplanationOfBenefitPayment
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit
 */
class FHIRExplanationOfBenefitPayment extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ExplanationOfBenefit.Payment';

    /**
     * Adjustment to the payment of this transaction which is not related to adjudication of this transaction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public $adjustment = null;

    /**
     * Reason for the payment adjustment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $adjustmentReason = null;

    /**
     * Payable less any payment adjustment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public $amount = null;

    /**
     * Estimated payment date.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $date = null;

    /**
     * Payment identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Whether this represents partial or complete payment of the claim.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRExplanationOfBenefitPayment Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['adjustment'])) {
                $this->setAdjustment($data['adjustment']);
            }
            if (isset($data['adjustmentReason'])) {
                $this->setAdjustmentReason($data['adjustmentReason']);
            }
            if (isset($data['amount'])) {
                $this->setAmount($data['amount']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Adjustment to the payment of this transaction which is not related to adjudication of this transaction.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     * @return $this
     */
    public function setAdjustment(FHIRMoney $adjustment = null)
    {
        if (null === $adjustment) {
            return $this; 
        }
        $this->adjustment = $adjustment;
        return $this;
    }

    /**
     * Adjustment to the payment of this transaction which is not related to adjudication of this transaction.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public function getAdjustment()
    {
        return $this->adjustment;
    }


    /**
     * Reason for the payment adjustment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setAdjustmentReason(FHIRCodeableConcept $adjustmentReason = null)
    {
        if (null === $adjustmentReason) {
            return $this; 
        }
        $this->adjustmentReason = $adjustmentReason;
        return $this;
    }

    /**
     * Reason for the payment adjustment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAdjustmentReason()
    {
        return $this->adjustmentReason;
    }


    /**
     * Payable less any payment adjustment.
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
     * Payable less any payment adjustment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public function getAmount()
    {
        return $this->amount;
    }


    /**
     * Estimated payment date.
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
                'FHIRExplanationOfBenefitPayment::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * Estimated payment date.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * Payment identifier.
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
     * Payment identifier.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Whether this represents partial or complete payment of the claim.
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
     * Whether this represents partial or complete payment of the claim.
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
        if (null !== ($v = $this->getAdjustment())) {
            $a['adjustment'] = $v;
        }
        if (null !== ($v = $this->getAdjustmentReason())) {
            $a['adjustmentReason'] = $v;
        }
        if (null !== ($v = $this->getAmount())) {
            $a['amount'] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a['date'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
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
            $sxe = new \SimpleXMLElement('<ExplanationOfBenefitPayment xmlns="http://hl7.org/fhir"></ExplanationOfBenefitPayment>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}