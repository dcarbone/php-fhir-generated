<?php namespace PHPFHIRGenerated\FHIRResource\FHIRExampleScenario;

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
 * Example of workflow instance.
 */
class FHIRExampleScenarioOption extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A human-readable description of each option.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * What happens in each alternative option.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRExampleScenario\FHIRExampleScenarioStep[]
     */
    public $step = [];

    /**
     * If there is a pause in the flow.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean[]
     */
    public $pause = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'ExampleScenario.Option';

    /**
     * A human-readable description of each option.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * A human-readable description of each option.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * What happens in each alternative option.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRExampleScenario\FHIRExampleScenarioStep[]
     */
    public function getStep() {
        return $this->step;
    }

    /**
     * What happens in each alternative option.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRExampleScenario\FHIRExampleScenarioStep $step
     * @return $this
     */
    public function addStep($step) {
        $this->step[] = $step;
        return $this;
    }

    /**
     * If there is a pause in the flow.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean[]
     */
    public function getPause() {
        return $this->pause;
    }

    /**
     * If there is a pause in the flow.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $pause
     * @return $this
     */
    public function addPause($pause) {
        $this->pause[] = $pause;
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
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['step'])) {
                if (is_array($data['step'])) {
                    foreach($data['step'] as $d) {
                        $this->addStep($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"step" must be array of objects or null, '.gettype($data['step']).' seen.');
                }
            }
            if (isset($data['pause'])) {
                if (is_array($data['pause'])) {
                    foreach($data['pause'] as $d) {
                        $this->addPause($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"pause" must be array of objects or null, '.gettype($data['pause']).' seen.');
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
        if (isset($this->description)) $json['description'] = $this->description;
        if (0 < count($this->step)) {
            $json['step'] = [];
            foreach($this->step as $step) {
                if (null !== $step) $json['step'][] = $step;
            }
        }
        if (0 < count($this->pause)) {
            $json['pause'] = [];
            foreach($this->pause as $pause) {
                if (null !== $pause) $json['pause'][] = $pause;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ExampleScenarioOption xmlns="http://hl7.org/fhir"></ExampleScenarioOption>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->step)) {
            foreach($this->step as $step) {
                $step->xmlSerialize(true, $sxe->addChild('step'));
            }
        }
        if (0 < count($this->pause)) {
            foreach($this->pause as $pause) {
                $pause->xmlSerialize(true, $sxe->addChild('pause'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}