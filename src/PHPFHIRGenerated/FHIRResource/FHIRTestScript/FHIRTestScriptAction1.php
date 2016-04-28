<?php namespace PHPFHIRGenerated\FHIRResource\FHIRTestScript;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\JsonSerializable;

/**
 * TestScript is a resource that specifies a suite of tests against a FHIR server implementation to determine compliance against the FHIR specification.
 */
class FHIRTestScriptAction1 extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * An operation would involve a REST request to a server.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptOperation
     */
    public $operation = null;

    /**
     * Evaluates the results of previous operations to determine if the server under test behaves appropriately.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptAssert
     */
    public $assert = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'TestScript.Action1';

    /**
     * An operation would involve a REST request to a server.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptOperation
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * An operation would involve a REST request to a server.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptOperation $operation
     * @return $this
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Evaluates the results of previous operations to determine if the server under test behaves appropriately.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptAssert
     */
    public function getAssert()
    {
        return $this->assert;
    }

    /**
     * Evaluates the results of previous operations to determine if the server under test behaves appropriately.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptAssert $assert
     * @return $this
     */
    public function setAssert($assert)
    {
        $this->assert = $assert;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->operation) $json['operation'] = $this->operation->jsonSerialize();
        if (null !== $this->assert) $json['assert'] = $this->assert->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<TestScriptAction1 xmlns="http://hl7.org/fhir"></TestScriptAction1>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->operation) $this->operation->xmlSerialize(true, $sxe->addChild('operation'));
        if (null !== $this->assert) $this->assert->xmlSerialize(true, $sxe->addChild('assert'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}