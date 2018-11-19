<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;

/**
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 *
 * Class FHIRExplanationOfBenefitFinancial
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit
 */
class FHIRExplanationOfBenefitFinancial extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ExplanationOfBenefit.Financial';

    /**
     * Benefits allowed. (choose any one of allowed*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    private $allowedMoney = null;

    /**
     * Benefits allowed. (choose any one of allowed*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $allowedString = null;

    /**
     * Benefits allowed. (choose any one of allowed*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    private $allowedUnsignedInt = null;

    /**
     * Deductable, visits, benefit amount.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

    /**
     * Benefits used. (choose any one of used*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    private $usedMoney = null;

    /**
     * Benefits used. (choose any one of used*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    private $usedUnsignedInt = null;

    /**
     * FHIRExplanationOfBenefitFinancial Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['allowedMoney'])) {
                $value = $data['allowedMoney'];
                if (is_array($value)) {
                    $value = new FHIRMoney($value);
                } 
                if (!($value instanceof FHIRMoney)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial::__construct - Property \"allowedMoney\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney or data to construct type, saw ".gettype($value));
                }
                $this->setAllowedMoney($value);
            }
            if (isset($data['allowedString'])) {
                $value = $data['allowedString'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial::__construct - Property \"allowedString\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setAllowedString($value);
            }
            if (isset($data['allowedUnsignedInt'])) {
                $value = $data['allowedUnsignedInt'];
                if (is_array($value)) {
                    $value = new FHIRUnsignedInt($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUnsignedInt($value);
                }
                if (!($value instanceof FHIRUnsignedInt)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial::__construct - Property \"allowedUnsignedInt\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or data to construct type, saw ".gettype($value));
                }
                $this->setAllowedUnsignedInt($value);
            }
            if (isset($data['type'])) {
                $value = $data['type'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial::__construct - Property \"type\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setType($value);
            }
            if (isset($data['usedMoney'])) {
                $value = $data['usedMoney'];
                if (is_array($value)) {
                    $value = new FHIRMoney($value);
                } 
                if (!($value instanceof FHIRMoney)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial::__construct - Property \"usedMoney\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney or data to construct type, saw ".gettype($value));
                }
                $this->setUsedMoney($value);
            }
            if (isset($data['usedUnsignedInt'])) {
                $value = $data['usedUnsignedInt'];
                if (is_array($value)) {
                    $value = new FHIRUnsignedInt($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUnsignedInt($value);
                }
                if (!($value instanceof FHIRUnsignedInt)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial::__construct - Property \"usedUnsignedInt\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or data to construct type, saw ".gettype($value));
                }
                $this->setUsedUnsignedInt($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Benefits allowed. (choose any one of allowed*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     * @return $this
     */
    public function setAllowedMoney(FHIRMoney $allowedMoney = null)
    {
        if (null === $allowedMoney) {
            return $this; 
        }
        $this->allowedMoney = $allowedMoney;
        return $this;
    }

    /**
     * Benefits allowed. (choose any one of allowed*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getAllowedMoney()
    {
        return $this->allowedMoney;
    }

    /**
     * Benefits allowed. (choose any one of allowed*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAllowedString($allowedString)
    {
        if (null === $allowedString) {
            return $this; 
        }
        if (is_scalar($allowedString)) {
            $allowedString = new FHIRString($allowedString);
        }
        if (!($allowedString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExplanationOfBenefitFinancial::setAllowedString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($allowedString)
            ));
        }
        $this->allowedString = $allowedString;
        return $this;
    }

    /**
     * Benefits allowed. (choose any one of allowed*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAllowedString()
    {
        return $this->allowedString;
    }

    /**
     * Benefits allowed. (choose any one of allowed*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setAllowedUnsignedInt($allowedUnsignedInt)
    {
        if (null === $allowedUnsignedInt) {
            return $this; 
        }
        if (is_scalar($allowedUnsignedInt)) {
            $allowedUnsignedInt = new FHIRUnsignedInt($allowedUnsignedInt);
        }
        if (!($allowedUnsignedInt instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExplanationOfBenefitFinancial::setAllowedUnsignedInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($allowedUnsignedInt)
            ));
        }
        $this->allowedUnsignedInt = $allowedUnsignedInt;
        return $this;
    }

    /**
     * Benefits allowed. (choose any one of allowed*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getAllowedUnsignedInt()
    {
        return $this->allowedUnsignedInt;
    }

    /**
     * Deductable, visits, benefit amount.
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
     * Deductable, visits, benefit amount.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Benefits used. (choose any one of used*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     * @return $this
     */
    public function setUsedMoney(FHIRMoney $usedMoney = null)
    {
        if (null === $usedMoney) {
            return $this; 
        }
        $this->usedMoney = $usedMoney;
        return $this;
    }

    /**
     * Benefits used. (choose any one of used*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getUsedMoney()
    {
        return $this->usedMoney;
    }

    /**
     * Benefits used. (choose any one of used*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setUsedUnsignedInt($usedUnsignedInt)
    {
        if (null === $usedUnsignedInt) {
            return $this; 
        }
        if (is_scalar($usedUnsignedInt)) {
            $usedUnsignedInt = new FHIRUnsignedInt($usedUnsignedInt);
        }
        if (!($usedUnsignedInt instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExplanationOfBenefitFinancial::setUsedUnsignedInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($usedUnsignedInt)
            ));
        }
        $this->usedUnsignedInt = $usedUnsignedInt;
        return $this;
    }

    /**
     * Benefits used. (choose any one of used*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getUsedUnsignedInt()
    {
        return $this->usedUnsignedInt;
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
        if (null !== ($v = $this->getAllowedMoney())) {
            $a['allowedMoney'] = $v;
        }
        if (null !== ($v = $this->getAllowedString())) {
            $a['allowedString'] = $v;
        }
        if (null !== ($v = $this->getAllowedUnsignedInt())) {
            $a['allowedUnsignedInt'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getUsedMoney())) {
            $a['usedMoney'] = $v;
        }
        if (null !== ($v = $this->getUsedUnsignedInt())) {
            $a['usedUnsignedInt'] = $v;
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
            $sxe = new \SimpleXMLElement('<ExplanationOfBenefitFinancial xmlns="http://hl7.org/fhir"></ExplanationOfBenefitFinancial>');
        }
        if (null !== ($v = $this->getAllowedMoney())) {
            $v->xmlSerialize(true, $sxe->addChild('allowedMoney'));
        }
        if (null !== ($v = $this->getAllowedString())) {
            $v->xmlSerialize(true, $sxe->addChild('allowedString'));
        }
        if (null !== ($v = $this->getAllowedUnsignedInt())) {
            $v->xmlSerialize(true, $sxe->addChild('allowedUnsignedInt'));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize(true, $sxe->addChild('type'));
        }
        if (null !== ($v = $this->getUsedMoney())) {
            $v->xmlSerialize(true, $sxe->addChild('usedMoney'));
        }
        if (null !== ($v = $this->getUsedUnsignedInt())) {
            $v->xmlSerialize(true, $sxe->addChild('usedUnsignedInt'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}