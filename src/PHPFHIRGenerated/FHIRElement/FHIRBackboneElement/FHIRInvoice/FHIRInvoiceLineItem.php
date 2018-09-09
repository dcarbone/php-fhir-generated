<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInvoice;

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
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * Invoice containing collected ChargeItems from an Account with calculated individual and total price for Billing purpose.
 *
 * Class FHIRInvoiceLineItem
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInvoice
 */
class FHIRInvoiceLineItem extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Invoice.LineItem';

    /**
     * The ChargeItem contains information such as the billing code, date, amount etc. Of no further details are required for the lineItem, inline billing codes can be added using the CodeableConcept data type instead of the Reference.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $chargeItemCodeableConcept = null;

    /**
     * The ChargeItem contains information such as the billing code, date, amount etc. Of no further details are required for the lineItem, inline billing codes can be added using the CodeableConcept data type instead of the Reference.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $chargeItemReference = null;

    /**
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under developement. The priceComponent element can be used to offer transparency to the recipient of the Invoice of how the prices have been calculated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent
     */
    public $priceComponent = null;

    /**
     * Sequence in which the items appear on the invoice.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $sequence = null;

    /**
     * FHIRInvoiceLineItem Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['chargeItemCodeableConcept'])) {
                $this->setChargeItemCodeableConcept($data['chargeItemCodeableConcept']);
            }
            if (isset($data['chargeItemReference'])) {
                $this->setChargeItemReference($data['chargeItemReference']);
            }
            if (isset($data['priceComponent'])) {
                $this->setPriceComponent($data['priceComponent']);
            }
            if (isset($data['sequence'])) {
                $this->setSequence($data['sequence']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The ChargeItem contains information such as the billing code, date, amount etc. Of no further details are required for the lineItem, inline billing codes can be added using the CodeableConcept data type instead of the Reference.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setChargeItemCodeableConcept(FHIRCodeableConcept $chargeItemCodeableConcept = null)
    {
        if (null === $chargeItemCodeableConcept) {
            return $this; 
        }
        $this->chargeItemCodeableConcept = $chargeItemCodeableConcept;
        return $this;
    }

    /**
     * The ChargeItem contains information such as the billing code, date, amount etc. Of no further details are required for the lineItem, inline billing codes can be added using the CodeableConcept data type instead of the Reference.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getChargeItemCodeableConcept()
    {
        return $this->chargeItemCodeableConcept;
    }


    /**
     * The ChargeItem contains information such as the billing code, date, amount etc. Of no further details are required for the lineItem, inline billing codes can be added using the CodeableConcept data type instead of the Reference.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setChargeItemReference(FHIRReference $chargeItemReference = null)
    {
        if (null === $chargeItemReference) {
            return $this; 
        }
        $this->chargeItemReference = $chargeItemReference;
        return $this;
    }

    /**
     * The ChargeItem contains information such as the billing code, date, amount etc. Of no further details are required for the lineItem, inline billing codes can be added using the CodeableConcept data type instead of the Reference.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getChargeItemReference()
    {
        return $this->chargeItemReference;
    }


    /**
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under developement. The priceComponent element can be used to offer transparency to the recipient of the Invoice of how the prices have been calculated.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent
     * @return $this
     */
    public function setPriceComponent(FHIRInvoicePriceComponent $priceComponent = null)
    {
        if (null === $priceComponent) {
            return $this; 
        }
        $this->priceComponent = $priceComponent;
        return $this;
    }

    /**
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under developement. The priceComponent element can be used to offer transparency to the recipient of the Invoice of how the prices have been calculated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent
     */
    public function getPriceComponent()
    {
        return $this->priceComponent;
    }


    /**
     * Sequence in which the items appear on the invoice.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setSequence($sequence)
    {
        if (null === $sequence) {
            return $this; 
        }
        if (is_scalar($sequence)) {
            $sequence = new FHIRPositiveInt($sequence);
        }
        if (!($sequence instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRInvoiceLineItem::setSequence - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($sequence)
            ));
        }
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Sequence in which the items appear on the invoice.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getSequence()
    {
        return $this->sequence;
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
        if (null !== ($v = $this->getChargeItemCodeableConcept())) {
            $a['chargeItemCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getChargeItemReference())) {
            $a['chargeItemReference'] = $v;
        }
        if (null !== ($v = $this->getPriceComponent())) {
            $a['priceComponent'] = $v;
        }
        if (null !== ($v = $this->getSequence())) {
            $a['sequence'] = $v;
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
            $sxe = new \SimpleXMLElement('<InvoiceLineItem xmlns="http://hl7.org/fhir"></InvoiceLineItem>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}