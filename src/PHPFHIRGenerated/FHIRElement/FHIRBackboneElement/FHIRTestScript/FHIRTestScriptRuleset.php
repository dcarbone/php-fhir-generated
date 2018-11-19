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
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * A structured set of tests against a FHIR server implementation to determine compliance against the FHIR specification.
 *
 * Class FHIRTestScriptRuleset
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript
 */
class FHIRTestScriptRuleset extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'TestScript.Ruleset';

    /**
     * Reference to the resource (containing the contents of the ruleset needed for assertions).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $resource = null;

    /**
     * The referenced rule within the external ruleset template.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRule1[]
     */
    private $rule = [];

    /**
     * FHIRTestScriptRuleset Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['resource'])) {
                $value = $data['resource'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRuleset::__construct - Property \"resource\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setResource($value);
            }
            if (isset($data['rule'])) {
                $value = $data['rule'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRTestScriptRule1($v);
                        } 
                        if (!($v instanceof FHIRTestScriptRule1)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRuleset::__construct - Collection field \"rule\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRule1 or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addRule($v);
                    }
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRuleset::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Reference to the resource (containing the contents of the ruleset needed for assertions).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setResource(FHIRReference $resource = null)
    {
        if (null === $resource) {
            return $this; 
        }
        $this->resource = $resource;
        return $this;
    }

    /**
     * Reference to the resource (containing the contents of the ruleset needed for assertions).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * The referenced rule within the external ruleset template.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRule1
     * @return $this
     */
    public function addRule(FHIRTestScriptRule1 $rule = null)
    {
        if (null === $rule) {
            return $this; 
        }
        $this->rule[] = $rule;
        return $this;
    }

    /**
     * The referenced rule within the external ruleset template.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRule1[]
     */
    public function getRule()
    {
        return $this->rule;
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
        if (null !== ($v = $this->getResource())) {
            $a['resource'] = $v;
        }
        if (0 < count($values = $this->getRule())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['rule'] = $vs;
            }
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
            $sxe = new \SimpleXMLElement('<TestScriptRuleset xmlns="http://hl7.org/fhir"></TestScriptRuleset>');
        }
        if (null !== ($v = $this->getResource())) {
            $v->xmlSerialize(true, $sxe->addChild('resource'));
        }
        if (0 < count($values = $this->getRule())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('rule'));
                }
            }
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}