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
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 *
 * Class FHIRExplanationOfBenefitBenefitBalance
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit
 */
class FHIRExplanationOfBenefitBenefitBalance extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ExplanationOfBenefit.BenefitBalance';

    /**
     * Dental, Vision, Medical, Pharmacy, Rehab etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * A richer description of the benefit, for example 'DENT2 covers 100% of basic, 50% of major but exclused Ortho, Implants and Costmetic services'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * True if the indicated class of service is excluded from the plan, missing or False indicated the service is included in the coverage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $excluded = null;

    /**
     * Benefits Used to date.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial
     */
    public $financial = null;

    /**
     * A short name or tag for the benefit, for example MED01, or DENT2.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Network designation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $network = null;

    /**
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum annual vistis'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $term = null;

    /**
     * Unit designation: individual or family.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $unit = null;

    /**
     * FHIRExplanationOfBenefitBenefitBalance Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['excluded'])) {
                $this->setExcluded($data['excluded']);
            }
            if (isset($data['financial'])) {
                $this->setFinancial($data['financial']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['network'])) {
                $this->setNetwork($data['network']);
            }
            if (isset($data['term'])) {
                $this->setTerm($data['term']);
            }
            if (isset($data['unit'])) {
                $this->setUnit($data['unit']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Dental, Vision, Medical, Pharmacy, Rehab etc.
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
     * Dental, Vision, Medical, Pharmacy, Rehab etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * A richer description of the benefit, for example 'DENT2 covers 100% of basic, 50% of major but exclused Ortho, Implants and Costmetic services'.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRString($description);
        }
        if (!($description instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExplanationOfBenefitBenefitBalance::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A richer description of the benefit, for example 'DENT2 covers 100% of basic, 50% of major but exclused Ortho, Implants and Costmetic services'.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * True if the indicated class of service is excluded from the plan, missing or False indicated the service is included in the coverage.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setExcluded($excluded)
    {
        if (null === $excluded) {
            return $this; 
        }
        if (is_scalar($excluded)) {
            $excluded = new FHIRBoolean($excluded);
        }
        if (!($excluded instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExplanationOfBenefitBenefitBalance::setExcluded - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($excluded)
            ));
        }
        $this->excluded = $excluded;
        return $this;
    }

    /**
     * True if the indicated class of service is excluded from the plan, missing or False indicated the service is included in the coverage.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExcluded()
    {
        return $this->excluded;
    }


    /**
     * Benefits Used to date.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial
     * @return $this
     */
    public function setFinancial(FHIRExplanationOfBenefitFinancial $financial = null)
    {
        if (null === $financial) {
            return $this; 
        }
        $this->financial = $financial;
        return $this;
    }

    /**
     * Benefits Used to date.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial
     */
    public function getFinancial()
    {
        return $this->financial;
    }


    /**
     * A short name or tag for the benefit, for example MED01, or DENT2.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setName($name)
    {
        if (null === $name) {
            return $this; 
        }
        if (is_scalar($name)) {
            $name = new FHIRString($name);
        }
        if (!($name instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExplanationOfBenefitBenefitBalance::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A short name or tag for the benefit, for example MED01, or DENT2.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Network designation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setNetwork(FHIRCodeableConcept $network = null)
    {
        if (null === $network) {
            return $this; 
        }
        $this->network = $network;
        return $this;
    }

    /**
     * Network designation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getNetwork()
    {
        return $this->network;
    }


    /**
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum annual vistis'.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setTerm(FHIRCodeableConcept $term = null)
    {
        if (null === $term) {
            return $this; 
        }
        $this->term = $term;
        return $this;
    }

    /**
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum annual vistis'.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getTerm()
    {
        return $this->term;
    }


    /**
     * Unit designation: individual or family.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setUnit(FHIRCodeableConcept $unit = null)
    {
        if (null === $unit) {
            return $this; 
        }
        $this->unit = $unit;
        return $this;
    }

    /**
     * Unit designation: individual or family.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getUnit()
    {
        return $this->unit;
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
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getExcluded())) {
            $a['excluded'] = $v;
        }
        if (null !== ($v = $this->getFinancial())) {
            $a['financial'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getNetwork())) {
            $a['network'] = $v;
        }
        if (null !== ($v = $this->getTerm())) {
            $a['term'] = $v;
        }
        if (null !== ($v = $this->getUnit())) {
            $a['unit'] = $v;
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
            $sxe = new \SimpleXMLElement('<ExplanationOfBenefitBenefitBalance xmlns="http://hl7.org/fhir"></ExplanationOfBenefitBenefitBalance>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}