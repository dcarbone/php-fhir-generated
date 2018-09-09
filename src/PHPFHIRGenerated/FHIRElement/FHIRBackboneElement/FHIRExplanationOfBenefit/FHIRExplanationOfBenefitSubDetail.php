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
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIRMoney;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 *
 * Class FHIRExplanationOfBenefitSubDetail
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit
 */
class FHIRExplanationOfBenefitSubDetail extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ExplanationOfBenefit.SubDetail';

    /**
     * The adjudication results.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication
     */
    public $adjudication = null;

    /**
     * A code to indicate the Professional Service or Product supplied (e.g. CTP, HCPCS,USCLS,ICD10, NCPDP,DIN,ACHI,CCI).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $billcode = null;

    /**
     * Health Care Service Type Codes to identify the classification of service or benefits.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $factor = null;

    /**
     * Item typification or modifiers codes, e.g. for Oral whether the treatment is cosmetic or associated with TMJ, or for medical whether the treatment was outside the clinic or out of office hours.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $modifier = null;

    /**
     * The quantity times the unit price for an additional service or product or charge. For example, the formula: unit Quantity * unit Price (Cost per Point) * factor Number  * points = net Amount. Quantity, factor and points are assumed to be 1 if not supplied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public $net = null;

    /**
     * A list of note references to the notes provided below.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $noteNumber = null;

    /**
     * For programs which require reson codes for the inclusion, covering, of this billed item under the program or sub-program.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $programCode = null;

    /**
     * The number of repetitions of a service or product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * The type of revenue or cost center providing the product and/or service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $revenue = null;

    /**
     * A service line number.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $sequence = null;

    /**
     * List of Unique Device Identifiers associated with this line item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $udi = null;

    /**
     * The fee for an addittional service or product or charge.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public $unitPrice = null;

    /**
     * FHIRExplanationOfBenefitSubDetail Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['adjudication'])) {
                $this->setAdjudication($data['adjudication']);
            }
            if (isset($data['billcode'])) {
                $this->setBillcode($data['billcode']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['factor'])) {
                $this->setFactor($data['factor']);
            }
            if (isset($data['modifier'])) {
                $this->setModifier($data['modifier']);
            }
            if (isset($data['net'])) {
                $this->setNet($data['net']);
            }
            if (isset($data['noteNumber'])) {
                $this->setNoteNumber($data['noteNumber']);
            }
            if (isset($data['programCode'])) {
                $this->setProgramCode($data['programCode']);
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['revenue'])) {
                $this->setRevenue($data['revenue']);
            }
            if (isset($data['sequence'])) {
                $this->setSequence($data['sequence']);
            }
            if (isset($data['udi'])) {
                $this->setUdi($data['udi']);
            }
            if (isset($data['unitPrice'])) {
                $this->setUnitPrice($data['unitPrice']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSubDetail::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The adjudication results.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication
     * @return $this
     */
    public function setAdjudication(FHIRExplanationOfBenefitAdjudication $adjudication = null)
    {
        if (null === $adjudication) {
            return $this; 
        }
        $this->adjudication = $adjudication;
        return $this;
    }

    /**
     * The adjudication results.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication
     */
    public function getAdjudication()
    {
        return $this->adjudication;
    }


    /**
     * A code to indicate the Professional Service or Product supplied (e.g. CTP, HCPCS,USCLS,ICD10, NCPDP,DIN,ACHI,CCI).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setBillcode(FHIRCodeableConcept $billcode = null)
    {
        if (null === $billcode) {
            return $this; 
        }
        $this->billcode = $billcode;
        return $this;
    }

    /**
     * A code to indicate the Professional Service or Product supplied (e.g. CTP, HCPCS,USCLS,ICD10, NCPDP,DIN,ACHI,CCI).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBillcode()
    {
        return $this->billcode;
    }


    /**
     * Health Care Service Type Codes to identify the classification of service or benefits.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        if (null === $category) {
            return $this; 
        }
        $this->category = $category;
        return $this;
    }

    /**
     * Health Care Service Type Codes to identify the classification of service or benefits.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
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
                'FHIRExplanationOfBenefitSubDetail::setFactor - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($factor)
            ));
        }
        $this->factor = $factor;
        return $this;
    }

    /**
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getFactor()
    {
        return $this->factor;
    }


    /**
     * Item typification or modifiers codes, e.g. for Oral whether the treatment is cosmetic or associated with TMJ, or for medical whether the treatment was outside the clinic or out of office hours.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setModifier(FHIRCodeableConcept $modifier = null)
    {
        if (null === $modifier) {
            return $this; 
        }
        $this->modifier = $modifier;
        return $this;
    }

    /**
     * Item typification or modifiers codes, e.g. for Oral whether the treatment is cosmetic or associated with TMJ, or for medical whether the treatment was outside the clinic or out of office hours.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getModifier()
    {
        return $this->modifier;
    }


    /**
     * The quantity times the unit price for an additional service or product or charge. For example, the formula: unit Quantity * unit Price (Cost per Point) * factor Number  * points = net Amount. Quantity, factor and points are assumed to be 1 if not supplied.
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
     * The quantity times the unit price for an additional service or product or charge. For example, the formula: unit Quantity * unit Price (Cost per Point) * factor Number  * points = net Amount. Quantity, factor and points are assumed to be 1 if not supplied.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public function getNet()
    {
        return $this->net;
    }


    /**
     * A list of note references to the notes provided below.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setNoteNumber($noteNumber)
    {
        if (null === $noteNumber) {
            return $this; 
        }
        if (is_scalar($noteNumber)) {
            $noteNumber = new FHIRPositiveInt($noteNumber);
        }
        if (!($noteNumber instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExplanationOfBenefitSubDetail::setNoteNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($noteNumber)
            ));
        }
        $this->noteNumber = $noteNumber;
        return $this;
    }

    /**
     * A list of note references to the notes provided below.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getNoteNumber()
    {
        return $this->noteNumber;
    }


    /**
     * For programs which require reson codes for the inclusion, covering, of this billed item under the program or sub-program.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setProgramCode(FHIRCodeableConcept $programCode = null)
    {
        if (null === $programCode) {
            return $this; 
        }
        $this->programCode = $programCode;
        return $this;
    }

    /**
     * For programs which require reson codes for the inclusion, covering, of this billed item under the program or sub-program.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getProgramCode()
    {
        return $this->programCode;
    }


    /**
     * The number of repetitions of a service or product.
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
     * The number of repetitions of a service or product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }


    /**
     * The type of revenue or cost center providing the product and/or service.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setRevenue(FHIRCodeableConcept $revenue = null)
    {
        if (null === $revenue) {
            return $this; 
        }
        $this->revenue = $revenue;
        return $this;
    }

    /**
     * The type of revenue or cost center providing the product and/or service.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRevenue()
    {
        return $this->revenue;
    }


    /**
     * A service line number.
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
                'FHIRExplanationOfBenefitSubDetail::setSequence - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($sequence)
            ));
        }
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * A service line number.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getSequence()
    {
        return $this->sequence;
    }


    /**
     * List of Unique Device Identifiers associated with this line item.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setUdi(FHIRReference $udi = null)
    {
        if (null === $udi) {
            return $this; 
        }
        $this->udi = $udi;
        return $this;
    }

    /**
     * List of Unique Device Identifiers associated with this line item.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getUdi()
    {
        return $this->udi;
    }


    /**
     * The fee for an addittional service or product or charge.
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
     * The fee for an addittional service or product or charge.
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
        if (null !== ($v = $this->getAdjudication())) {
            $a['adjudication'] = $v;
        }
        if (null !== ($v = $this->getBillcode())) {
            $a['billcode'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getFactor())) {
            $a['factor'] = $v;
        }
        if (null !== ($v = $this->getModifier())) {
            $a['modifier'] = $v;
        }
        if (null !== ($v = $this->getNet())) {
            $a['net'] = $v;
        }
        if (null !== ($v = $this->getNoteNumber())) {
            $a['noteNumber'] = $v;
        }
        if (null !== ($v = $this->getProgramCode())) {
            $a['programCode'] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a['quantity'] = $v;
        }
        if (null !== ($v = $this->getRevenue())) {
            $a['revenue'] = $v;
        }
        if (null !== ($v = $this->getSequence())) {
            $a['sequence'] = $v;
        }
        if (null !== ($v = $this->getUdi())) {
            $a['udi'] = $v;
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
            $sxe = new \SimpleXMLElement('<ExplanationOfBenefitSubDetail xmlns="http://hl7.org/fhir"></ExplanationOfBenefitSubDetail>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}