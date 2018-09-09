<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

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
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount\FHIRSubstanceAmountReferenceRange;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * Chemical substances are a single substance type whose primary defining element is the molecular structure. Chemical substances shall be defined on the basis of their complete covalent molecular structure; the presence of a salt (counter-ion) and/or solvates (water, alcohols) is also captured. Purity, grade, physical form or particle size are not taken into account in the definition of a chemical substance or in the assignment of a Substance ID.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRSubstanceAmount
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement
 */
class FHIRSubstanceAmount extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'SubstanceAmount';

    /**
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $amountQuantity = null;

    /**
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $amountRange = null;

    /**
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $amountString = null;

    /**
     * A textual comment on a numeric value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $amountText = null;

    /**
     * Most elements that require a quantitative value will also have a field called amount type. Amount type should always be specified because the actual value of the amount is often dependent on it. EXAMPLE: In capturing the actual relative amounts of substances or molecular fragments it is essential to indicate whether the amount refers to a mole ratio or weight ratio. For any given element an effort should be made to use same the amount type for all related definitional elements.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $amountType = null;

    /**
     * Reference range of possible or expected values.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount\FHIRSubstanceAmountReferenceRange
     */
    public $referenceRange = null;

    /**
     * FHIRSubstanceAmount Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['amountQuantity'])) {
                $this->setAmountQuantity($data['amountQuantity']);
            }
            if (isset($data['amountRange'])) {
                $this->setAmountRange($data['amountRange']);
            }
            if (isset($data['amountString'])) {
                $this->setAmountString($data['amountString']);
            }
            if (isset($data['amountText'])) {
                $this->setAmountText($data['amountText']);
            }
            if (isset($data['amountType'])) {
                $this->setAmountType($data['amountType']);
            }
            if (isset($data['referenceRange'])) {
                $this->setReferenceRange($data['referenceRange']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setAmountQuantity(FHIRQuantity $amountQuantity = null)
    {
        if (null === $amountQuantity) {
            return $this; 
        }
        $this->amountQuantity = $amountQuantity;
        return $this;
    }

    /**
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getAmountQuantity()
    {
        return $this->amountQuantity;
    }


    /**
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setAmountRange(FHIRRange $amountRange = null)
    {
        if (null === $amountRange) {
            return $this; 
        }
        $this->amountRange = $amountRange;
        return $this;
    }

    /**
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getAmountRange()
    {
        return $this->amountRange;
    }


    /**
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAmountString($amountString)
    {
        if (null === $amountString) {
            return $this; 
        }
        if (is_scalar($amountString)) {
            $amountString = new FHIRString($amountString);
        }
        if (!($amountString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceAmount::setAmountString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($amountString)
            ));
        }
        $this->amountString = $amountString;
        return $this;
    }

    /**
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAmountString()
    {
        return $this->amountString;
    }


    /**
     * A textual comment on a numeric value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAmountText($amountText)
    {
        if (null === $amountText) {
            return $this; 
        }
        if (is_scalar($amountText)) {
            $amountText = new FHIRString($amountText);
        }
        if (!($amountText instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceAmount::setAmountText - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($amountText)
            ));
        }
        $this->amountText = $amountText;
        return $this;
    }

    /**
     * A textual comment on a numeric value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAmountText()
    {
        return $this->amountText;
    }


    /**
     * Most elements that require a quantitative value will also have a field called amount type. Amount type should always be specified because the actual value of the amount is often dependent on it. EXAMPLE: In capturing the actual relative amounts of substances or molecular fragments it is essential to indicate whether the amount refers to a mole ratio or weight ratio. For any given element an effort should be made to use same the amount type for all related definitional elements.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setAmountType(FHIRCodeableConcept $amountType = null)
    {
        if (null === $amountType) {
            return $this; 
        }
        $this->amountType = $amountType;
        return $this;
    }

    /**
     * Most elements that require a quantitative value will also have a field called amount type. Amount type should always be specified because the actual value of the amount is often dependent on it. EXAMPLE: In capturing the actual relative amounts of substances or molecular fragments it is essential to indicate whether the amount refers to a mole ratio or weight ratio. For any given element an effort should be made to use same the amount type for all related definitional elements.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAmountType()
    {
        return $this->amountType;
    }


    /**
     * Reference range of possible or expected values.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount\FHIRSubstanceAmountReferenceRange
     * @return $this
     */
    public function setReferenceRange(FHIRSubstanceAmountReferenceRange $referenceRange = null)
    {
        if (null === $referenceRange) {
            return $this; 
        }
        $this->referenceRange = $referenceRange;
        return $this;
    }

    /**
     * Reference range of possible or expected values.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount\FHIRSubstanceAmountReferenceRange
     */
    public function getReferenceRange()
    {
        return $this->referenceRange;
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
        if (null !== ($v = $this->getAmountQuantity())) {
            $a['amountQuantity'] = $v;
        }
        if (null !== ($v = $this->getAmountRange())) {
            $a['amountRange'] = $v;
        }
        if (null !== ($v = $this->getAmountString())) {
            $a['amountString'] = $v;
        }
        if (null !== ($v = $this->getAmountText())) {
            $a['amountText'] = $v;
        }
        if (null !== ($v = $this->getAmountType())) {
            $a['amountType'] = $v;
        }
        if (null !== ($v = $this->getReferenceRange())) {
            $a['referenceRange'] = $v;
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
            $sxe = new \SimpleXMLElement('<SubstanceAmount xmlns="http://hl7.org/fhir"></SubstanceAmount>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}