<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet;

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
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRFilterOperator;

/**
 * A value set specifies a set of codes drawn from one or more code systems.
 *
 * Class FHIRValueSetFilter
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet
 */
class FHIRValueSetFilter extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ValueSet.Filter';

    /**
     * The kind of operation to perform as a part of the filter criteria.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFilterOperator
     */
    private $op = null;

    /**
     * A code that identifies a property defined in the code system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    private $property = null;

    /**
     * The match value may be either a code defined by the system, or a string value, which is a regex match on the literal string of the property value when the operation is 'regex', or one of the values (true and false), when the operation is 'exists'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    private $value = null;

    /**
     * FHIRValueSetFilter Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['op'])) {
                $value = $data['op'];
                if (is_array($value)) {
                    $value = new FHIRFilterOperator($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRFilterOperator($value);
                }
                if (!($value instanceof FHIRFilterOperator)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter::__construct - Property \"op\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRFilterOperator or data to construct type, saw ".gettype($value));
                }
                $this->setOp($value);
            }
            if (isset($data['property'])) {
                $value = $data['property'];
                if (is_array($value)) {
                    $value = new FHIRCode($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRCode($value);
                }
                if (!($value instanceof FHIRCode)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter::__construct - Property \"property\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or data to construct type, saw ".gettype($value));
                }
                $this->setProperty($value);
            }
            if (isset($data['value'])) {
                $value = $data['value'];
                if (is_array($value)) {
                    $value = new FHIRCode($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRCode($value);
                }
                if (!($value instanceof FHIRCode)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter::__construct - Property \"value\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or data to construct type, saw ".gettype($value));
                }
                $this->setValue($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The kind of operation to perform as a part of the filter criteria.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRFilterOperator
     * @return $this
     */
    public function setOp($op)
    {
        if (null === $op) {
            return $this; 
        }
        if (is_scalar($op)) {
            $op = new FHIRFilterOperator($op);
        }
        if (!($op instanceof FHIRFilterOperator)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRValueSetFilter::setOp - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRFilterOperator or appropriate scalar value, %s seen.',
                gettype($op)
            ));
        }
        $this->op = $op;
        return $this;
    }

    /**
     * The kind of operation to perform as a part of the filter criteria.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRFilterOperator
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * A code that identifies a property defined in the code system.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setProperty($property)
    {
        if (null === $property) {
            return $this; 
        }
        if (is_scalar($property)) {
            $property = new FHIRCode($property);
        }
        if (!($property instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRValueSetFilter::setProperty - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($property)
            ));
        }
        $this->property = $property;
        return $this;
    }

    /**
     * A code that identifies a property defined in the code system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * The match value may be either a code defined by the system, or a string value, which is a regex match on the literal string of the property value when the operation is 'regex', or one of the values (true and false), when the operation is 'exists'.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setValue($value)
    {
        if (null === $value) {
            return $this; 
        }
        if (is_scalar($value)) {
            $value = new FHIRCode($value);
        }
        if (!($value instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRValueSetFilter::setValue - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($value)
            ));
        }
        $this->value = $value;
        return $this;
    }

    /**
     * The match value may be either a code defined by the system, or a string value, which is a regex match on the literal string of the property value when the operation is 'regex', or one of the values (true and false), when the operation is 'exists'.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
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
        if (null !== ($v = $this->getOp())) {
            $a['op'] = $v;
        }
        if (null !== ($v = $this->getProperty())) {
            $a['property'] = $v;
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
            $sxe = new \SimpleXMLElement('<ValueSetFilter xmlns="http://hl7.org/fhir"></ValueSetFilter>');
        }
        if (null !== ($v = $this->getOp())) {
            $v->xmlSerialize(true, $sxe->addChild('op'));
        }
        if (null !== ($v = $this->getProperty())) {
            $v->xmlSerialize(true, $sxe->addChild('property'));
        }
        if (null !== ($v = $this->getValue())) {
            $v->xmlSerialize(true, $sxe->addChild('value'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}