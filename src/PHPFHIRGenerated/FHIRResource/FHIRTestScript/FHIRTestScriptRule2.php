<?php namespace PHPFHIRGenerated\FHIRResource\FHIRTestScript;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.
 */
class FHIRTestScriptRule2 extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The TestScript.rule id value this assert will evaluate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $ruleId = null;

    /**
     * Each rule template can take one or more parameters for rule evaluation.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptParam2[]
     */
    public $param = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'TestScript.Rule2';

    /**
     * The TestScript.rule id value this assert will evaluate.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getRuleId() {
        return $this->ruleId;
    }

    /**
     * The TestScript.rule id value this assert will evaluate.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $ruleId
     * @return $this
     */
    public function setRuleId($ruleId) {
        $this->ruleId = $ruleId;
        return $this;
    }

    /**
     * Each rule template can take one or more parameters for rule evaluation.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptParam2[]
     */
    public function getParam() {
        return $this->param;
    }

    /**
     * Each rule template can take one or more parameters for rule evaluation.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptParam2 $param
     * @return $this
     */
    public function addParam($param) {
        $this->param[] = $param;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['ruleId'])) {
                $this->setRuleId($data['ruleId']);
            }
            if (isset($data['param'])) {
                if (is_array($data['param'])) {
                    foreach($data['param'] as $d) {
                        $this->addParam($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"param" must be array of objects or null, '.gettype($data['param']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        if (isset($this->ruleId)) $json['ruleId'] = $this->ruleId;
        if (0 < count($this->param)) {
            $json['param'] = [];
            foreach($this->param as $param) {
                if (null !== $param) $json['param'][] = $param;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<TestScriptRule2 xmlns="http://hl7.org/fhir"></TestScriptRule2>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->ruleId)) $this->ruleId->xmlSerialize(true, $sxe->addChild('ruleId'));
        if (0 < count($this->param)) {
            foreach($this->param as $param) {
                $param->xmlSerialize(true, $sxe->addChild('param'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}