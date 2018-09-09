<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct;

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
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * Detailed definition of a medicinal product, typically for uses other than direct patient care (e.g. regulatory use).
 *
 * Class FHIRMedicinalProductName
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct
 */
class FHIRMedicinalProductName extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MedicinalProduct.Name';

    /**
     * Country where the name applies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductCountryLanguage
     */
    public $countryLanguage = null;

    /**
     * Coding words or phrases of the name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductNamePart
     */
    public $namePart = null;

    /**
     * The full product name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $productName = null;

    /**
     * FHIRMedicinalProductName Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['countryLanguage'])) {
                $this->setCountryLanguage($data['countryLanguage']);
            }
            if (isset($data['namePart'])) {
                $this->setNamePart($data['namePart']);
            }
            if (isset($data['productName'])) {
                $this->setProductName($data['productName']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductName::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Country where the name applies.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductCountryLanguage
     * @return $this
     */
    public function setCountryLanguage(FHIRMedicinalProductCountryLanguage $countryLanguage = null)
    {
        if (null === $countryLanguage) {
            return $this; 
        }
        $this->countryLanguage = $countryLanguage;
        return $this;
    }

    /**
     * Country where the name applies.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductCountryLanguage
     */
    public function getCountryLanguage()
    {
        return $this->countryLanguage;
    }


    /**
     * Coding words or phrases of the name.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductNamePart
     * @return $this
     */
    public function setNamePart(FHIRMedicinalProductNamePart $namePart = null)
    {
        if (null === $namePart) {
            return $this; 
        }
        $this->namePart = $namePart;
        return $this;
    }

    /**
     * Coding words or phrases of the name.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductNamePart
     */
    public function getNamePart()
    {
        return $this->namePart;
    }


    /**
     * The full product name.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setProductName($productName)
    {
        if (null === $productName) {
            return $this; 
        }
        if (is_scalar($productName)) {
            $productName = new FHIRString($productName);
        }
        if (!($productName instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductName::setProductName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($productName)
            ));
        }
        $this->productName = $productName;
        return $this;
    }

    /**
     * The full product name.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getProductName()
    {
        return $this->productName;
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
        if (null !== ($v = $this->getCountryLanguage())) {
            $a['countryLanguage'] = $v;
        }
        if (null !== ($v = $this->getNamePart())) {
            $a['namePart'] = $v;
        }
        if (null !== ($v = $this->getProductName())) {
            $a['productName'] = $v;
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
            $sxe = new \SimpleXMLElement('<MedicinalProductName xmlns="http://hl7.org/fhir"></MedicinalProductName>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}