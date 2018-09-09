<?php

namespace PHPFHIRGenerated\FHIRElement;

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

use PHPFHIRGenerated\FHIRElement;

/**
 * A measured amount (or an amount that can potentially be measured). Note that measured amounts include amounts that are not precisely quantified, including amounts involving arbitrary units and floating currencies.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRQuantity
 * @package PHPFHIRGenerated\FHIRElement
 */
class FHIRQuantity extends FHIRElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Quantity';

    /**
     * A computer processable form of the unit in some unit representation system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $code = null;

    /**
     * How the value should be understood and represented - whether the actual value is greater or less than the stated value due to measurement issues; e.g. if the comparator is "<" , then the real value is < stated value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantityComparator
     */
    public $comparator = null;

    /**
     * The identification of the system that provides the coded form of the unit.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $system = null;

    /**
     * A human-readable form of the unit.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $unit = null;

    /**
     * The value of the measured amount. The value includes an implicit precision in the presentation of the value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $value = null;

    /**
     * FHIRQuantity Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['comparator'])) {
                $this->setComparator($data['comparator']);
            }
            if (isset($data['system'])) {
                $this->setSystem($data['system']);
            }
            if (isset($data['unit'])) {
                $this->setUnit($data['unit']);
            }
            if (isset($data['value'])) {
                $this->setValue($data['value']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRQuantity::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A computer processable form of the unit in some unit representation system.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setCode($code)
    {
        if (null === $code) {
            return $this; 
        }
        if (is_scalar($code)) {
            $code = new FHIRCode($code);
        }
        if (!($code instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuantity::setCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($code)
            ));
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A computer processable form of the unit in some unit representation system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * How the value should be understood and represented - whether the actual value is greater or less than the stated value due to measurement issues; e.g. if the comparator is "<" , then the real value is < stated value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantityComparator
     * @return $this
     */
    public function setComparator($comparator)
    {
        if (null === $comparator) {
            return $this; 
        }
        if (is_scalar($comparator)) {
            $comparator = new FHIRQuantityComparator($comparator);
        }
        if (!($comparator instanceof FHIRQuantityComparator)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuantity::setComparator - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantityComparator or appropriate scalar value, %s seen.',
                gettype($comparator)
            ));
        }
        $this->comparator = $comparator;
        return $this;
    }

    /**
     * How the value should be understood and represented - whether the actual value is greater or less than the stated value due to measurement issues; e.g. if the comparator is "<" , then the real value is < stated value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantityComparator
     */
    public function getComparator()
    {
        return $this->comparator;
    }


    /**
     * The identification of the system that provides the coded form of the unit.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setSystem($system)
    {
        if (null === $system) {
            return $this; 
        }
        if (is_scalar($system)) {
            $system = new FHIRUri($system);
        }
        if (!($system instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuantity::setSystem - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($system)
            ));
        }
        $this->system = $system;
        return $this;
    }

    /**
     * The identification of the system that provides the coded form of the unit.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getSystem()
    {
        return $this->system;
    }


    /**
     * A human-readable form of the unit.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setUnit($unit)
    {
        if (null === $unit) {
            return $this; 
        }
        if (is_scalar($unit)) {
            $unit = new FHIRString($unit);
        }
        if (!($unit instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuantity::setUnit - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($unit)
            ));
        }
        $this->unit = $unit;
        return $this;
    }

    /**
     * A human-readable form of the unit.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getUnit()
    {
        return $this->unit;
    }


    /**
     * The value of the measured amount. The value includes an implicit precision in the presentation of the value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setValue($value)
    {
        if (null === $value) {
            return $this; 
        }
        if (is_scalar($value)) {
            $value = new FHIRDecimal($value);
        }
        if (!($value instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuantity::setValue - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($value)
            ));
        }
        $this->value = $value;
        return $this;
    }

    /**
     * The value of the measured amount. The value includes an implicit precision in the presentation of the value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getValue()
    {
        return $this->value;
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
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getComparator())) {
            $a['comparator'] = $v;
        }
        if (null !== ($v = $this->getSystem())) {
            $a['system'] = $v;
        }
        if (null !== ($v = $this->getUnit())) {
            $a['unit'] = $v;
        }
        if (null !== ($v = $this->getValue())) {
            $a['value'] = $v;
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
            $sxe = new \SimpleXMLElement('<Quantity xmlns="http://hl7.org/fhir"></Quantity>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}