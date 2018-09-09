<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport;

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

/**
 * A summary of information based on the results of executing a TestScript.
 *
 * Class FHIRTestReportAction
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport
 */
class FHIRTestReportAction extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'TestReport.Action';

    /**
     * The results of the assertion performed on the previous operations.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAssert
     */
    public $assert = null;

    /**
     * The operation performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportOperation
     */
    public $operation = null;

    /**
     * FHIRTestReportAction Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['assert'])) {
                $this->setAssert($data['assert']);
            }
            if (isset($data['operation'])) {
                $this->setOperation($data['operation']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAction::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The results of the assertion performed on the previous operations.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAssert
     * @return $this
     */
    public function setAssert(FHIRTestReportAssert $assert = null)
    {
        if (null === $assert) {
            return $this; 
        }
        $this->assert = $assert;
        return $this;
    }

    /**
     * The results of the assertion performed on the previous operations.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAssert
     */
    public function getAssert()
    {
        return $this->assert;
    }


    /**
     * The operation performed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportOperation
     * @return $this
     */
    public function setOperation(FHIRTestReportOperation $operation = null)
    {
        if (null === $operation) {
            return $this; 
        }
        $this->operation = $operation;
        return $this;
    }

    /**
     * The operation performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportOperation
     */
    public function getOperation()
    {
        return $this->operation;
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
        if (null !== ($v = $this->getAssert())) {
            $a['assert'] = $v;
        }
        if (null !== ($v = $this->getOperation())) {
            $a['operation'] = $v;
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
            $sxe = new \SimpleXMLElement('<TestReportAction xmlns="http://hl7.org/fhir"></TestReportAction>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}