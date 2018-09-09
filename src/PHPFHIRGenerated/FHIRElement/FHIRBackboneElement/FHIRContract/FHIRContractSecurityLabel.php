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
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;

/**
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 *
 * Class FHIRContractSecurityLabel
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract
 */
class FHIRContractSecurityLabel extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Contract.SecurityLabel';

    /**
     * Security label privacy tag that species the applicable privacy and security policies governing this term and/or term elements.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $category = null;

    /**
     * Security label privacy tag that species the level of confidentiality protection required for this term and/or term elements.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $classification = null;

    /**
     * Security label privacy tag that species the manner in which term and/or term elements are to be protected.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $control = null;

    /**
     * Number used to link this term or term element to the applicable Security Label.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $number = null;

    /**
     * FHIRContractSecurityLabel Constructor
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
            if (isset($data['classification'])) {
                $this->setClassification($data['classification']);
            }
            if (isset($data['control'])) {
                $this->setControl($data['control']);
            }
            if (isset($data['number'])) {
                $this->setNumber($data['number']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSecurityLabel::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Security label privacy tag that species the applicable privacy and security policies governing this term and/or term elements.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setCategory(FHIRCoding $category = null)
    {
        if (null === $category) {
            return $this; 
        }
        $this->category = $category;
        return $this;
    }

    /**
     * Security label privacy tag that species the applicable privacy and security policies governing this term and/or term elements.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * Security label privacy tag that species the level of confidentiality protection required for this term and/or term elements.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setClassification(FHIRCoding $classification = null)
    {
        if (null === $classification) {
            return $this; 
        }
        $this->classification = $classification;
        return $this;
    }

    /**
     * Security label privacy tag that species the level of confidentiality protection required for this term and/or term elements.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getClassification()
    {
        return $this->classification;
    }


    /**
     * Security label privacy tag that species the manner in which term and/or term elements are to be protected.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setControl(FHIRCoding $control = null)
    {
        if (null === $control) {
            return $this; 
        }
        $this->control = $control;
        return $this;
    }

    /**
     * Security label privacy tag that species the manner in which term and/or term elements are to be protected.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getControl()
    {
        return $this->control;
    }


    /**
     * Number used to link this term or term element to the applicable Security Label.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setNumber($number)
    {
        if (null === $number) {
            return $this; 
        }
        if (is_scalar($number)) {
            $number = new FHIRUnsignedInt($number);
        }
        if (!($number instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractSecurityLabel::setNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($number)
            ));
        }
        $this->number = $number;
        return $this;
    }

    /**
     * Number used to link this term or term element to the applicable Security Label.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getNumber()
    {
        return $this->number;
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
        if (null !== ($v = $this->getClassification())) {
            $a['classification'] = $v;
        }
        if (null !== ($v = $this->getControl())) {
            $a['control'] = $v;
        }
        if (null !== ($v = $this->getNumber())) {
            $a['number'] = $v;
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
            $sxe = new \SimpleXMLElement('<ContractSecurityLabel xmlns="http://hl7.org/fhir"></ContractSecurityLabel>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}