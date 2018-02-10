<?php namespace PHPFHIRGenerated\FHIRResource\FHIRContract;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A formal agreement between parties regarding the conduct of business, exchange of information or other matters.
 */
class FHIRContractValuedItem extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $entityCodeableConcept = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $entityReference = null;

    /**
     * Identifies a Contract Valued Item instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Indicates the time during which this Contract ValuedItem information is effective.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $effectiveTime = null;

    /**
     * Specifies the units by which the Contract Valued Item is measured or counted, and quantifies the countable or measurable Contract Valued Item instances.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public $quantity = null;

    /**
     * A Contract Valued Item unit valuation measure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $unitPrice = null;

    /**
     * A real number that represents a multiplier used in determining the overall value of the Contract Valued Item delivered. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $factor = null;

    /**
     * An amount that expresses the weighting (based on difficulty, cost and/or resource intensiveness) associated with the Contract Valued Item delivered. The concept of Points allows for assignment of point values for a Contract Valued Item, such that a monetary amount can be assigned to each point.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $points = null;

    /**
     * Expresses the product of the Contract Valued Item unitQuantity and the unitPriceAmt. For example, the formula: unit Quantity * unit Price (Cost per Point) * factor Number  * points = net Amount. Quantity, factor and points are assumed to be 1 if not supplied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $net = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Contract.ValuedItem';

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getEntityCodeableConcept()
    {
        return $this->entityCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $entityCodeableConcept
     * @return $this
     */
    public function setEntityCodeableConcept($entityCodeableConcept)
    {
        $this->entityCodeableConcept = $entityCodeableConcept;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEntityReference()
    {
        return $this->entityReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $entityReference
     * @return $this
     */
    public function setEntityReference($entityReference)
    {
        $this->entityReference = $entityReference;
        return $this;
    }

    /**
     * Identifies a Contract Valued Item instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifies a Contract Valued Item instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Indicates the time during which this Contract ValuedItem information is effective.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getEffectiveTime()
    {
        return $this->effectiveTime;
    }

    /**
     * Indicates the time during which this Contract ValuedItem information is effective.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $effectiveTime
     * @return $this
     */
    public function setEffectiveTime($effectiveTime)
    {
        $this->effectiveTime = $effectiveTime;
        return $this;
    }

    /**
     * Specifies the units by which the Contract Valued Item is measured or counted, and quantifies the countable or measurable Contract Valued Item instances.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Specifies the units by which the Contract Valued Item is measured or counted, and quantifies the countable or measurable Contract Valued Item instances.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * A Contract Valued Item unit valuation measure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * A Contract Valued Item unit valuation measure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney $unitPrice
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * A real number that represents a multiplier used in determining the overall value of the Contract Valued Item delivered. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * A real number that represents a multiplier used in determining the overall value of the Contract Valued Item delivered. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $factor
     * @return $this
     */
    public function setFactor($factor)
    {
        $this->factor = $factor;
        return $this;
    }

    /**
     * An amount that expresses the weighting (based on difficulty, cost and/or resource intensiveness) associated with the Contract Valued Item delivered. The concept of Points allows for assignment of point values for a Contract Valued Item, such that a monetary amount can be assigned to each point.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * An amount that expresses the weighting (based on difficulty, cost and/or resource intensiveness) associated with the Contract Valued Item delivered. The concept of Points allows for assignment of point values for a Contract Valued Item, such that a monetary amount can be assigned to each point.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $points
     * @return $this
     */
    public function setPoints($points)
    {
        $this->points = $points;
        return $this;
    }

    /**
     * Expresses the product of the Contract Valued Item unitQuantity and the unitPriceAmt. For example, the formula: unit Quantity * unit Price (Cost per Point) * factor Number  * points = net Amount. Quantity, factor and points are assumed to be 1 if not supplied.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getNet()
    {
        return $this->net;
    }

    /**
     * Expresses the product of the Contract Valued Item unitQuantity and the unitPriceAmt. For example, the formula: unit Quantity * unit Price (Cost per Point) * factor Number  * points = net Amount. Quantity, factor and points are assumed to be 1 if not supplied.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney $net
     * @return $this
     */
    public function setNet($net)
    {
        $this->net = $net;
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
        if (null !== $this->entityCodeableConcept) $json['entityCodeableConcept'] = $this->entityCodeableConcept;
        if (null !== $this->entityReference) $json['entityReference'] = $this->entityReference;
        if (null !== $this->identifier) $json['identifier'] = $this->identifier;
        if (null !== $this->effectiveTime) $json['effectiveTime'] = $this->effectiveTime;
        if (null !== $this->quantity) $json['quantity'] = $this->quantity;
        if (null !== $this->unitPrice) $json['unitPrice'] = $this->unitPrice;
        if (null !== $this->factor) $json['factor'] = $this->factor;
        if (null !== $this->points) $json['points'] = $this->points;
        if (null !== $this->net) $json['net'] = $this->net;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ContractValuedItem xmlns="http://hl7.org/fhir"></ContractValuedItem>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->entityCodeableConcept) $this->entityCodeableConcept->xmlSerialize(true, $sxe->addChild('entityCodeableConcept'));
        if (null !== $this->entityReference) $this->entityReference->xmlSerialize(true, $sxe->addChild('entityReference'));
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->effectiveTime) $this->effectiveTime->xmlSerialize(true, $sxe->addChild('effectiveTime'));
        if (null !== $this->quantity) $this->quantity->xmlSerialize(true, $sxe->addChild('quantity'));
        if (null !== $this->unitPrice) $this->unitPrice->xmlSerialize(true, $sxe->addChild('unitPrice'));
        if (null !== $this->factor) $this->factor->xmlSerialize(true, $sxe->addChild('factor'));
        if (null !== $this->points) $this->points->xmlSerialize(true, $sxe->addChild('points'));
        if (null !== $this->net) $this->net->xmlSerialize(true, $sxe->addChild('net'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}