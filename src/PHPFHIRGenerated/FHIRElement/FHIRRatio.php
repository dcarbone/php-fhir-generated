<?php

namespace PHPFHIRGenerated\FHIRElement;

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

use PHPFHIRGenerated\FHIRElement;

/**
 * A relationship of two Quantity values - expressed as a numerator and a denominator.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRRatio
 * @package PHPFHIRGenerated\FHIRElement
 */
class FHIRRatio extends FHIRElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Ratio';

    /**
     * The value of the denominator.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $denominator = null;

    /**
     * The value of the numerator.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $numerator = null;

    /**
     * FHIRRatio Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['denominator'])) {
                $value = $data['denominator'];
                if (is_array($value)) {
                    $value = new FHIRQuantity($value);
                } 
                if (!($value instanceof FHIRQuantity)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRRatio::__construct - Property \"denominator\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity or data to construct type, saw ".gettype($value));
                }
                $this->setDenominator($value);
            }
            if (isset($data['numerator'])) {
                $value = $data['numerator'];
                if (is_array($value)) {
                    $value = new FHIRQuantity($value);
                } 
                if (!($value instanceof FHIRQuantity)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRRatio::__construct - Property \"numerator\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity or data to construct type, saw ".gettype($value));
                }
                $this->setNumerator($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRRatio::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The value of the denominator.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setDenominator(FHIRQuantity $denominator = null)
    {
        if (null === $denominator) {
            return $this; 
        }
        $this->denominator = $denominator;
        return $this;
    }

    /**
     * The value of the denominator.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDenominator()
    {
        return $this->denominator;
    }

    /**
     * The value of the numerator.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setNumerator(FHIRQuantity $numerator = null)
    {
        if (null === $numerator) {
            return $this; 
        }
        $this->numerator = $numerator;
        return $this;
    }

    /**
     * The value of the numerator.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getNumerator()
    {
        return $this->numerator;
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
        if (null !== ($v = $this->getDenominator())) {
            $a['denominator'] = $v;
        }
        if (null !== ($v = $this->getNumerator())) {
            $a['numerator'] = $v;
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
            $sxe = new \SimpleXMLElement('<Ratio xmlns="http://hl7.org/fhir"></Ratio>');
        }
        if (null !== ($v = $this->getDenominator())) {
            $v->xmlSerialize(true, $sxe->addChild('denominator'));
        }
        if (null !== ($v = $this->getNumerator())) {
            $v->xmlSerialize(true, $sxe->addChild('numerator'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}