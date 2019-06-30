<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario;

include_once __DIR__.'/../../../constants.php';

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 30th, 2019 14:05+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean;

/**
 * Example of workflow instance.
 *
 * Class FHIRExampleScenarioStep
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario
 */
class FHIRExampleScenarioStep extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = FHIR_TYPE_NAME_EXAMPLE_SCENARIO_DOT_STEP;

    const FIELD_ALTERNATIVE = 'alternative';
    const FIELD_OPERATION = 'operation';
    const FIELD_PAUSE = 'pause';
    const FIELD_PAUSE_EXT = '_pause';
    const FIELD_PROCESS = 'process';

    /**
     * Example of workflow instance.
     *
     * Indicates an alternative step that can be taken instead of the operations on the
     * base step in exceptional/atypical circumstances.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative[]
     */
    private $alternative = [];

    /**
     * Example of workflow instance.
     *
     * Each interaction or action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
     */
    private $operation = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If there is a pause in the flow.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $pause = null;

    /**
     * Example of workflow instance.
     *
     * Nested process.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess[]
     */
    private $process = [];

    /**
     * FHIRExampleScenarioStep Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExampleScenarioStep::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ALTERNATIVE])) {
            if (is_array($data[self::FIELD_ALTERNATIVE])) {
                foreach($data[self::FIELD_ALTERNATIVE] as $v) {
                    if ($v instanceof FHIRExampleScenarioAlternative) {
                        $this->addAlternative($v);
                    } else {
                        $this->addAlternative(new FHIRExampleScenarioAlternative($v));
                    }
                }
            } else if ($data[self::FIELD_ALTERNATIVE] instanceof FHIRExampleScenarioAlternative) {
                $this->addAlternative($data[self::FIELD_ALTERNATIVE]);
            } else {
                $this->addAlternative(new FHIRExampleScenarioAlternative($data[self::FIELD_ALTERNATIVE]));
            }
        }
        if (isset($data[self::FIELD_OPERATION])) {
            if ($data[self::FIELD_OPERATION] instanceof FHIRExampleScenarioOperation) {
                $this->setOperation($data[self::FIELD_OPERATION]);
            } else {
                $this->setOperation(new FHIRExampleScenarioOperation($data[self::FIELD_OPERATION]));
            }
        }
        if (isset($data[self::FIELD_PAUSE])) {
            $ext = (isset($data[self::FIELD_PAUSE_EXT]) && is_array($data[self::FIELD_PAUSE_EXT]))
                ? $data[self::FIELD_PAUSE_EXT]
                : null;
            if ($data[self::FIELD_PAUSE] instanceof FHIRBoolean) {
                $this->setPause($data[self::FIELD_PAUSE]);
            } elseif ($ext && is_scalar($data[self::FIELD_PAUSE])) {
                $this->setPause(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_PAUSE]] + $ext));
            } else {
                $this->setPause(new FHIRBoolean($data[self::FIELD_PAUSE]));
            }
        }
        if (isset($data[self::FIELD_PROCESS])) {
            if (is_array($data[self::FIELD_PROCESS])) {
                foreach($data[self::FIELD_PROCESS] as $v) {
                    if ($v instanceof FHIRExampleScenarioProcess) {
                        $this->addProcess($v);
                    } else {
                        $this->addProcess(new FHIRExampleScenarioProcess($v));
                    }
                }
            } else if ($data[self::FIELD_PROCESS] instanceof FHIRExampleScenarioProcess) {
                $this->addProcess($data[self::FIELD_PROCESS]);
            } else {
                $this->addProcess(new FHIRExampleScenarioProcess($data[self::FIELD_PROCESS]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * Example of workflow instance.
     *
     * Indicates an alternative step that can be taken instead of the operations on the
     * base step in exceptional/atypical circumstances.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative[]
     */
    public function getAlternative()
    {
        return $this->alternative;
    }

    /**
     * Example of workflow instance.
     *
     * Indicates an alternative step that can be taken instead of the operations on the
     * base step in exceptional/atypical circumstances.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative $alternative
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep
     */
    public function addAlternative(FHIRExampleScenarioAlternative $alternative = null)
    {
        $this->alternative[] = $alternative;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Indicates an alternative step that can be taken instead of the operations on the
     * base step in exceptional/atypical circumstances.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative[] $alternative
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep
     */
    public function setAlternative(array $alternative = [])
    {
        $this->alternative = [];
        if ([] === $alternative) {
            return $this;
        }
        foreach($alternative as $v) {
            if ($v instanceof FHIRExampleScenarioAlternative) {
                $this->addAlternative($v);
            } else {
                $this->addAlternative(new FHIRExampleScenarioAlternative($v));
            }
        }
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Each interaction or action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Example of workflow instance.
     *
     * Each interaction or action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation $operation
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep
     */
    public function setOperation(FHIRExampleScenarioOperation $operation = null)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If there is a pause in the flow.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getPause()
    {
        return $this->pause;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If there is a pause in the flow.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean $pause
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep
     */
    public function setPause($pause = null)
    {
        if (null === $pause) {
            $this->pause = null;
            return $this;
        }
        if ($pause instanceof FHIRBoolean) {
            $this->pause = $pause;
            return $this;
        }
        $this->pause = new FHIRBoolean($pause);
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Nested process.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess[]
     */
    public function getProcess()
    {
        return $this->process;
    }

    /**
     * Example of workflow instance.
     *
     * Nested process.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess $process
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep
     */
    public function addProcess(FHIRExampleScenarioProcess $process = null)
    {
        $this->process[] = $process;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Nested process.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess[] $process
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep
     */
    public function setProcess(array $process = [])
    {
        $this->process = [];
        if ([] === $process) {
            return $this;
        }
        foreach($process as $v) {
            if ($v instanceof FHIRExampleScenarioProcess) {
                $this->addProcess($v);
            } else {
                $this->addProcess(new FHIRExampleScenarioProcess($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep
     */
    public static function xmlUnserialize($sxe = null, $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRExampleScenarioStep::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRExampleScenarioStep::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRExampleScenarioStep);
        } elseif (!is_object($type) || !($type instanceof FHIRExampleScenarioStep)) {
            throw new \RuntimeException(sprintf(
                'FHIRExampleScenarioStep::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->alternative)) {
            foreach($children->alternative as $child) {
                $type->addAlternative(FHIRExampleScenarioAlternative::xmlUnserialize($child));
            }
        }
        if (isset($children->operation)) {
            $type->setOperation(FHIRExampleScenarioOperation::xmlUnserialize($children->operation));
        }
        if (isset($attributes->pause)) {
            $type->setPause((string)$attributes->pause);
        }
        if (isset($children->pause)) {
            $type->setPause(FHIRBoolean::xmlUnserialize($children->pause));
        }
        if (isset($children->process)) {
            foreach($children->process as $child) {
                $type->addProcess(FHIRExampleScenarioProcess::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ExampleScenarioStep xmlns="http://hl7.org/fhir"></ExampleScenarioStep>');
        }
        if ([] !== ($vs = $this->getAlternative())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ALTERNATIVE));
            }
        }
        if (null !== ($v = $this->getOperation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OPERATION));
        }
        if (null !== ($v = $this->getPause())) {
            $sxe->addAttribute(self::FIELD_PAUSE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PAUSE));
            }
        }
        if ([] !== ($vs = $this->getProcess())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROCESS));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getAlternative())) {
            $a[self::FIELD_ALTERNATIVE] = $vs;
        }
        if (null !== ($v = $this->getOperation())) {
            $a[self::FIELD_OPERATION] = $v;
        }
        if (null !== ($v = $this->getPause())) {
            $a[self::FIELD_PAUSE] = (string)$v;
            $a[self::FIELD_PAUSE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getProcess())) {
            $a[self::FIELD_PROCESS] = $vs;
        }
        return [FHIR_JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}