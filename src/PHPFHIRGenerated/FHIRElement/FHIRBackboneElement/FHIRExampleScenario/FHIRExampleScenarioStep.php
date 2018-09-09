<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario;

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
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;

/**
 * Example of workflow instance.
 *
 * Class FHIRExampleScenarioStep
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario
 */
class FHIRExampleScenarioStep extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ExampleScenario.Step';

    /**
     * Each interaction in the workflow.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative
     */
    public $alternative = null;

    /**
     * Each interaction or action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
     */
    public $operation = null;

    /**
     * If there is a pause in the flow.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $pause = null;

    /**
     * Nested process.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess
     */
    public $process = null;

    /**
     * FHIRExampleScenarioStep Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['alternative'])) {
                $this->setAlternative($data['alternative']);
            }
            if (isset($data['operation'])) {
                $this->setOperation($data['operation']);
            }
            if (isset($data['pause'])) {
                $this->setPause($data['pause']);
            }
            if (isset($data['process'])) {
                $this->setProcess($data['process']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Each interaction in the workflow.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative
     * @return $this
     */
    public function setAlternative(FHIRExampleScenarioAlternative $alternative = null)
    {
        if (null === $alternative) {
            return $this; 
        }
        $this->alternative = $alternative;
        return $this;
    }

    /**
     * Each interaction in the workflow.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative
     */
    public function getAlternative()
    {
        return $this->alternative;
    }


    /**
     * Each interaction or action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
     * @return $this
     */
    public function setOperation(FHIRExampleScenarioOperation $operation = null)
    {
        if (null === $operation) {
            return $this; 
        }
        $this->operation = $operation;
        return $this;
    }

    /**
     * Each interaction or action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
     */
    public function getOperation()
    {
        return $this->operation;
    }


    /**
     * If there is a pause in the flow.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setPause($pause)
    {
        if (null === $pause) {
            return $this; 
        }
        if (is_scalar($pause)) {
            $pause = new FHIRBoolean($pause);
        }
        if (!($pause instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExampleScenarioStep::setPause - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($pause)
            ));
        }
        $this->pause = $pause;
        return $this;
    }

    /**
     * If there is a pause in the flow.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getPause()
    {
        return $this->pause;
    }


    /**
     * Nested process.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess
     * @return $this
     */
    public function setProcess(FHIRExampleScenarioProcess $process = null)
    {
        if (null === $process) {
            return $this; 
        }
        $this->process = $process;
        return $this;
    }

    /**
     * Nested process.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess
     */
    public function getProcess()
    {
        return $this->process;
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
        if (null !== ($v = $this->getAlternative())) {
            $a['alternative'] = $v;
        }
        if (null !== ($v = $this->getOperation())) {
            $a['operation'] = $v;
        }
        if (null !== ($v = $this->getPause())) {
            $a['pause'] = $v;
        }
        if (null !== ($v = $this->getProcess())) {
            $a['process'] = $v;
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
            $sxe = new \SimpleXMLElement('<ExampleScenarioStep xmlns="http://hl7.org/fhir"></ExampleScenarioStep>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}