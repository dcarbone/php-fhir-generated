<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript;

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
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A structured set of tests against a FHIR server implementation to determine compliance against the FHIR specification.
 *
 * Class FHIRTestScriptParam2
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript
 */
class FHIRTestScriptParam2 extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'TestScript.Param2';

    /**
     * Descriptive name for this parameter that matches the external assert rule parameter name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $name = null;

    /**
     * The value for the parameter that will be passed on to the external rule template.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $value = null;

    /**
     * FHIRTestScriptParam2 Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['name'])) {
                $value = $data['name'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptParam2::__construct - Property \"name\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setName($value);
            }
            if (isset($data['value'])) {
                $value = $data['value'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptParam2::__construct - Property \"value\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setValue($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptParam2::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Descriptive name for this parameter that matches the external assert rule parameter name.
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
                'FHIRTestScriptParam2::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * Descriptive name for this parameter that matches the external assert rule parameter name.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The value for the parameter that will be passed on to the external rule template.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setValue($value)
    {
        if (null === $value) {
            return $this; 
        }
        if (is_scalar($value)) {
            $value = new FHIRString($value);
        }
        if (!($value instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptParam2::setValue - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($value)
            ));
        }
        $this->value = $value;
        return $this;
    }

    /**
     * The value for the parameter that will be passed on to the external rule template.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
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
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
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
            $sxe = new \SimpleXMLElement('<TestScriptParam2 xmlns="http://hl7.org/fhir"></TestScriptParam2>');
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize(true, $sxe->addChild('name'));
        }
        if (null !== ($v = $this->getValue())) {
            $v->xmlSerialize(true, $sxe->addChild('value'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}