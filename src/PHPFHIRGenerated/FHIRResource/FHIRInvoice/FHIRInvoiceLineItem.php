<?php namespace PHPFHIRGenerated\FHIRResource\FHIRInvoice;

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
 * Invoice containing collected ChargeItems from an Account with calculated individual and total price for Billing purpose.
 */
class FHIRInvoiceLineItem extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Sequence in which the items appear on the invoice.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $sequence = null;

    /**
     * The ChargeItem contains information such as the billing code, date, amount etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $chargeItem = null;

    /**
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under developement. The priceComponent element can be used to offer transparency to the recipient of the Invoice of how the prices have been calculated.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRInvoice\FHIRInvoicePriceComponent[]
     */
    public $priceComponent = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Invoice.LineItem';

    /**
     * Sequence in which the items appear on the invoice.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getSequence() {
        return $this->sequence;
    }

    /**
     * Sequence in which the items appear on the invoice.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $sequence
     * @return $this
     */
    public function setSequence($sequence) {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * The ChargeItem contains information such as the billing code, date, amount etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getChargeItem() {
        return $this->chargeItem;
    }

    /**
     * The ChargeItem contains information such as the billing code, date, amount etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $chargeItem
     * @return $this
     */
    public function setChargeItem($chargeItem) {
        $this->chargeItem = $chargeItem;
        return $this;
    }

    /**
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under developement. The priceComponent element can be used to offer transparency to the recipient of the Invoice of how the prices have been calculated.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRInvoice\FHIRInvoicePriceComponent[]
     */
    public function getPriceComponent() {
        return $this->priceComponent;
    }

    /**
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under developement. The priceComponent element can be used to offer transparency to the recipient of the Invoice of how the prices have been calculated.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRInvoice\FHIRInvoicePriceComponent $priceComponent
     * @return $this
     */
    public function addPriceComponent($priceComponent) {
        $this->priceComponent[] = $priceComponent;
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
            if (isset($data['sequence'])) {
                $this->setSequence($data['sequence']);
            }
            if (isset($data['chargeItem'])) {
                $this->setChargeItem($data['chargeItem']);
            }
            if (isset($data['priceComponent'])) {
                if (is_array($data['priceComponent'])) {
                    foreach($data['priceComponent'] as $d) {
                        $this->addPriceComponent($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"priceComponent" must be array of objects or null, '.gettype($data['priceComponent']).' seen.');
                }
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
        if (isset($this->sequence)) $json['sequence'] = $this->sequence;
        if (isset($this->chargeItem)) $json['chargeItem'] = $this->chargeItem;
        if (0 < count($this->priceComponent)) {
            $json['priceComponent'] = [];
            foreach($this->priceComponent as $priceComponent) {
                if (null !== $priceComponent) $json['priceComponent'][] = $priceComponent;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<InvoiceLineItem xmlns="http://hl7.org/fhir"></InvoiceLineItem>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->sequence)) $this->sequence->xmlSerialize(true, $sxe->addChild('sequence'));
        if (isset($this->chargeItem)) $this->chargeItem->xmlSerialize(true, $sxe->addChild('chargeItem'));
        if (0 < count($this->priceComponent)) {
            foreach($this->priceComponent as $priceComponent) {
                $priceComponent->xmlSerialize(true, $sxe->addChild('priceComponent'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}