<?php namespace PHPFHIRGenerated\FHIRResource\FHIRClaim;

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
 * A provider issued list of services and products provided, or to be provided, to a patient which is provided to an insurer for payment recovery.
 */
class FHIRClaimDetail extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A service line number.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $sequence = null;

    /**
     * The type of reveneu or cost center providing the product and/or service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $revenue = null;

    /**
     * Health Care Service Type Codes  to identify the classification of service or benefits.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * If this is an actual service or product line, ie. not a Group, then use code to indicate the Professional Service or Product supplied (eg. CTP, HCPCS,USCLS,ICD10, NCPDP,DIN,ACHI,CCI). If a grouping item then use a group code to indicate the type of thing being grouped eg. 'glasses' or 'compound'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $service = null;

    /**
     * Item typification or modifiers codes, eg for Oral whether the treatment is cosmetic or associated with TMJ, or for medical whether the treatment was outside the clinic or out of office hours.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $modifier = [];

    /**
     * For programs which require reson codes for the inclusion, covering, of this billed item under the program or sub-program.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $programCode = [];

    /**
     * The number of repetitions of a service or product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * If the item is a node then this is the fee for the product or service, otherwise this is the total of the fees for the children of the group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $unitPrice = null;

    /**
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $factor = null;

    /**
     * The quantity times the unit price for an addittional service or product or charge. For example, the formula: unit Quantity * unit Price (Cost per Point) * factor Number  * points = net Amount. Quantity, factor and points are assumed to be 1 if not supplied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $net = null;

    /**
     * List of Unique Device Identifiers associated with this line item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $udi = [];

    /**
     * Third tier of goods and services.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClaim\FHIRClaimSubDetail[]
     */
    public $subDetail = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Claim.Detail';

    /**
     * A service line number.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getSequence() {
        return $this->sequence;
    }

    /**
     * A service line number.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $sequence
     * @return $this
     */
    public function setSequence($sequence) {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * The type of reveneu or cost center providing the product and/or service.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRevenue() {
        return $this->revenue;
    }

    /**
     * The type of reveneu or cost center providing the product and/or service.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $revenue
     * @return $this
     */
    public function setRevenue($revenue) {
        $this->revenue = $revenue;
        return $this;
    }

    /**
     * Health Care Service Type Codes  to identify the classification of service or benefits.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Health Care Service Type Codes  to identify the classification of service or benefits.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    /**
     * If this is an actual service or product line, ie. not a Group, then use code to indicate the Professional Service or Product supplied (eg. CTP, HCPCS,USCLS,ICD10, NCPDP,DIN,ACHI,CCI). If a grouping item then use a group code to indicate the type of thing being grouped eg. 'glasses' or 'compound'.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getService() {
        return $this->service;
    }

    /**
     * If this is an actual service or product line, ie. not a Group, then use code to indicate the Professional Service or Product supplied (eg. CTP, HCPCS,USCLS,ICD10, NCPDP,DIN,ACHI,CCI). If a grouping item then use a group code to indicate the type of thing being grouped eg. 'glasses' or 'compound'.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $service
     * @return $this
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * Item typification or modifiers codes, eg for Oral whether the treatment is cosmetic or associated with TMJ, or for medical whether the treatment was outside the clinic or out of office hours.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getModifier() {
        return $this->modifier;
    }

    /**
     * Item typification or modifiers codes, eg for Oral whether the treatment is cosmetic or associated with TMJ, or for medical whether the treatment was outside the clinic or out of office hours.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $modifier
     * @return $this
     */
    public function addModifier($modifier) {
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * For programs which require reson codes for the inclusion, covering, of this billed item under the program or sub-program.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getProgramCode() {
        return $this->programCode;
    }

    /**
     * For programs which require reson codes for the inclusion, covering, of this billed item under the program or sub-program.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $programCode
     * @return $this
     */
    public function addProgramCode($programCode) {
        $this->programCode[] = $programCode;
        return $this;
    }

    /**
     * The number of repetitions of a service or product.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * The number of repetitions of a service or product.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $quantity
     * @return $this
     */
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * If the item is a node then this is the fee for the product or service, otherwise this is the total of the fees for the children of the group.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getUnitPrice() {
        return $this->unitPrice;
    }

    /**
     * If the item is a node then this is the fee for the product or service, otherwise this is the total of the fees for the children of the group.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney $unitPrice
     * @return $this
     */
    public function setUnitPrice($unitPrice) {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getFactor() {
        return $this->factor;
    }

    /**
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $factor
     * @return $this
     */
    public function setFactor($factor) {
        $this->factor = $factor;
        return $this;
    }

    /**
     * The quantity times the unit price for an addittional service or product or charge. For example, the formula: unit Quantity * unit Price (Cost per Point) * factor Number  * points = net Amount. Quantity, factor and points are assumed to be 1 if not supplied.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getNet() {
        return $this->net;
    }

    /**
     * The quantity times the unit price for an addittional service or product or charge. For example, the formula: unit Quantity * unit Price (Cost per Point) * factor Number  * points = net Amount. Quantity, factor and points are assumed to be 1 if not supplied.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney $net
     * @return $this
     */
    public function setNet($net) {
        $this->net = $net;
        return $this;
    }

    /**
     * List of Unique Device Identifiers associated with this line item.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getUdi() {
        return $this->udi;
    }

    /**
     * List of Unique Device Identifiers associated with this line item.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $udi
     * @return $this
     */
    public function addUdi($udi) {
        $this->udi[] = $udi;
        return $this;
    }

    /**
     * Third tier of goods and services.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClaim\FHIRClaimSubDetail[]
     */
    public function getSubDetail() {
        return $this->subDetail;
    }

    /**
     * Third tier of goods and services.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClaim\FHIRClaimSubDetail $subDetail
     * @return $this
     */
    public function addSubDetail($subDetail) {
        $this->subDetail[] = $subDetail;
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
            if (isset($data['revenue'])) {
                $this->setRevenue($data['revenue']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['service'])) {
                $this->setService($data['service']);
            }
            if (isset($data['modifier'])) {
                if (is_array($data['modifier'])) {
                    foreach($data['modifier'] as $d) {
                        $this->addModifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"modifier" must be array of objects or null, '.gettype($data['modifier']).' seen.');
                }
            }
            if (isset($data['programCode'])) {
                if (is_array($data['programCode'])) {
                    foreach($data['programCode'] as $d) {
                        $this->addProgramCode($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"programCode" must be array of objects or null, '.gettype($data['programCode']).' seen.');
                }
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['unitPrice'])) {
                $this->setUnitPrice($data['unitPrice']);
            }
            if (isset($data['factor'])) {
                $this->setFactor($data['factor']);
            }
            if (isset($data['net'])) {
                $this->setNet($data['net']);
            }
            if (isset($data['udi'])) {
                if (is_array($data['udi'])) {
                    foreach($data['udi'] as $d) {
                        $this->addUdi($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"udi" must be array of objects or null, '.gettype($data['udi']).' seen.');
                }
            }
            if (isset($data['subDetail'])) {
                if (is_array($data['subDetail'])) {
                    foreach($data['subDetail'] as $d) {
                        $this->addSubDetail($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"subDetail" must be array of objects or null, '.gettype($data['subDetail']).' seen.');
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
        if (isset($this->revenue)) $json['revenue'] = $this->revenue;
        if (isset($this->category)) $json['category'] = $this->category;
        if (isset($this->service)) $json['service'] = $this->service;
        if (0 < count($this->modifier)) {
            $json['modifier'] = [];
            foreach($this->modifier as $modifier) {
                if (null !== $modifier) $json['modifier'][] = $modifier;
            }
        }
        if (0 < count($this->programCode)) {
            $json['programCode'] = [];
            foreach($this->programCode as $programCode) {
                if (null !== $programCode) $json['programCode'][] = $programCode;
            }
        }
        if (isset($this->quantity)) $json['quantity'] = $this->quantity;
        if (isset($this->unitPrice)) $json['unitPrice'] = $this->unitPrice;
        if (isset($this->factor)) $json['factor'] = $this->factor;
        if (isset($this->net)) $json['net'] = $this->net;
        if (0 < count($this->udi)) {
            $json['udi'] = [];
            foreach($this->udi as $udi) {
                if (null !== $udi) $json['udi'][] = $udi;
            }
        }
        if (0 < count($this->subDetail)) {
            $json['subDetail'] = [];
            foreach($this->subDetail as $subDetail) {
                if (null !== $subDetail) $json['subDetail'][] = $subDetail;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ClaimDetail xmlns="http://hl7.org/fhir"></ClaimDetail>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->sequence)) $this->sequence->xmlSerialize(true, $sxe->addChild('sequence'));
        if (isset($this->revenue)) $this->revenue->xmlSerialize(true, $sxe->addChild('revenue'));
        if (isset($this->category)) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (isset($this->service)) $this->service->xmlSerialize(true, $sxe->addChild('service'));
        if (0 < count($this->modifier)) {
            foreach($this->modifier as $modifier) {
                $modifier->xmlSerialize(true, $sxe->addChild('modifier'));
            }
        }
        if (0 < count($this->programCode)) {
            foreach($this->programCode as $programCode) {
                $programCode->xmlSerialize(true, $sxe->addChild('programCode'));
            }
        }
        if (isset($this->quantity)) $this->quantity->xmlSerialize(true, $sxe->addChild('quantity'));
        if (isset($this->unitPrice)) $this->unitPrice->xmlSerialize(true, $sxe->addChild('unitPrice'));
        if (isset($this->factor)) $this->factor->xmlSerialize(true, $sxe->addChild('factor'));
        if (isset($this->net)) $this->net->xmlSerialize(true, $sxe->addChild('net'));
        if (0 < count($this->udi)) {
            foreach($this->udi as $udi) {
                $udi->xmlSerialize(true, $sxe->addChild('udi'));
            }
        }
        if (0 < count($this->subDetail)) {
            foreach($this->subDetail as $subDetail) {
                $subDetail->xmlSerialize(true, $sxe->addChild('subDetail'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}