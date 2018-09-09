<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition;

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
use PHPFHIRGenerated\FHIRElement\FHIRCompartmentType;
use PHPFHIRGenerated\FHIRElement\FHIRGraphCompartmentRule;
use PHPFHIRGenerated\FHIRElement\FHIRGraphCompartmentUse;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A formal computable definition of a graph of resources - that is, a coherent set of resources that form a graph by following references. The Graph Definition resource defines a set and makes rules about the set.
 *
 * Class FHIRGraphDefinitionCompartment
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition
 */
class FHIRGraphDefinitionCompartment extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'GraphDefinition.Compartment';

    /**
     * Identifies the compartment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCompartmentType
     */
    public $code = null;

    /**
     * Documentation for FHIRPath expression.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Custom rule, as a FHIRPath expression.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $expression = null;

    /**
     * identical | matching | different | no-rule | custom.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRGraphCompartmentRule
     */
    public $rule = null;

    /**
     * Defines how the compartment rule is used - whether it it is used to test whether resources are subject to the rule, or whether it is a rule that must be followed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRGraphCompartmentUse
     */
    public $use = null;

    /**
     * FHIRGraphDefinitionCompartment Constructor
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
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['expression'])) {
                $this->setExpression($data['expression']);
            }
            if (isset($data['rule'])) {
                $this->setRule($data['rule']);
            }
            if (isset($data['use'])) {
                $this->setUse($data['use']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionCompartment::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Identifies the compartment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCompartmentType
     * @return $this
     */
    public function setCode($code)
    {
        if (null === $code) {
            return $this; 
        }
        if (is_scalar($code)) {
            $code = new FHIRCompartmentType($code);
        }
        if (!($code instanceof FHIRCompartmentType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGraphDefinitionCompartment::setCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCompartmentType or appropriate scalar value, %s seen.',
                gettype($code)
            ));
        }
        $this->code = $code;
        return $this;
    }

    /**
     * Identifies the compartment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCompartmentType
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * Documentation for FHIRPath expression.
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
                'FHIRGraphDefinitionCompartment::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * Documentation for FHIRPath expression.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Custom rule, as a FHIRPath expression.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setExpression($expression)
    {
        if (null === $expression) {
            return $this; 
        }
        if (is_scalar($expression)) {
            $expression = new FHIRString($expression);
        }
        if (!($expression instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGraphDefinitionCompartment::setExpression - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($expression)
            ));
        }
        $this->expression = $expression;
        return $this;
    }

    /**
     * Custom rule, as a FHIRPath expression.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getExpression()
    {
        return $this->expression;
    }


    /**
     * identical | matching | different | no-rule | custom.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRGraphCompartmentRule
     * @return $this
     */
    public function setRule($rule)
    {
        if (null === $rule) {
            return $this; 
        }
        if (is_scalar($rule)) {
            $rule = new FHIRGraphCompartmentRule($rule);
        }
        if (!($rule instanceof FHIRGraphCompartmentRule)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGraphDefinitionCompartment::setRule - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRGraphCompartmentRule or appropriate scalar value, %s seen.',
                gettype($rule)
            ));
        }
        $this->rule = $rule;
        return $this;
    }

    /**
     * identical | matching | different | no-rule | custom.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRGraphCompartmentRule
     */
    public function getRule()
    {
        return $this->rule;
    }


    /**
     * Defines how the compartment rule is used - whether it it is used to test whether resources are subject to the rule, or whether it is a rule that must be followed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRGraphCompartmentUse
     * @return $this
     */
    public function setUse($use)
    {
        if (null === $use) {
            return $this; 
        }
        if (is_scalar($use)) {
            $use = new FHIRGraphCompartmentUse($use);
        }
        if (!($use instanceof FHIRGraphCompartmentUse)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGraphDefinitionCompartment::setUse - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRGraphCompartmentUse or appropriate scalar value, %s seen.',
                gettype($use)
            ));
        }
        $this->use = $use;
        return $this;
    }

    /**
     * Defines how the compartment rule is used - whether it it is used to test whether resources are subject to the rule, or whether it is a rule that must be followed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRGraphCompartmentUse
     */
    public function getUse()
    {
        return $this->use;
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
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getExpression())) {
            $a['expression'] = $v;
        }
        if (null !== ($v = $this->getRule())) {
            $a['rule'] = $v;
        }
        if (null !== ($v = $this->getUse())) {
            $a['use'] = $v;
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
            $sxe = new \SimpleXMLElement('<GraphDefinitionCompartment xmlns="http://hl7.org/fhir"></GraphDefinitionCompartment>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}