<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Example of workflow instance.
 *
 * Class FHIRExampleScenarioStep
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario
 */
class FHIRExampleScenarioStep extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_STEP;
    const FIELD_ALTERNATIVE = 'alternative';
    const FIELD_OPERATION = 'operation';
    const FIELD_PAUSE = 'pause';
    const FIELD_PAUSE_EXT = '_pause';
    const FIELD_PROCESS = 'process';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Example of workflow instance.
     *
     * Indicates an alternative step that can be taken instead of the operations on the
     * base step in exceptional/atypical circumstances.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative[]
     */
    protected $alternative = [];

    /**
     * Example of workflow instance.
     *
     * Each interaction or action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
     */
    protected $operation = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If there is a pause in the flow.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $pause = null;

    /**
     * Example of workflow instance.
     *
     * Nested process.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess[]
     */
    protected $process = [];

    /**
     * Validation map for fields in type ExampleScenario.Step
     * @var array
     */
    private static $_validationRules = [    ];

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
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_PAUSE]) || isset($data[self::FIELD_PAUSE_EXT])) {
            if (isset($data[self::FIELD_PAUSE])) {
                $value = $data[self::FIELD_PAUSE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PAUSE_EXT]) && is_array($data[self::FIELD_PAUSE_EXT])) {
                $ext = $data[self::FIELD_PAUSE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setPause($value);
                } else if (is_array($value)) {
                    $this->setPause(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setPause(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPause(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_PROCESS])) {
            if (is_array($data[self::FIELD_PROCESS])) {
                foreach($data[self::FIELD_PROCESS] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ExampleScenarioStep{$xmlns}></ExampleScenarioStep>";
    }

    /**
     * Example of workflow instance.
     *
     * Indicates an alternative step that can be taken instead of the operations on the
     * base step in exceptional/atypical circumstances.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative $alternative
     * @return static
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative[] $alternative
     * @return static
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation $operation
     * @return static
     */
    public function setOperation(FHIRExampleScenarioOperation $operation = null)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If there is a pause in the flow.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getPause()
    {
        return $this->pause;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If there is a pause in the flow.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $pause
     * @return static
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess $process
     * @return static
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess[] $process
     * @return static
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
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if ([] !== ($vs = $this->getAlternative())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ALTERNATIVE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getOperation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OPERATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPause())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PAUSE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProcess())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROCESS, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALTERNATIVE])) {
            $v = $this->getAlternative();
            foreach($validationRules[self::FIELD_ALTERNATIVE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_STEP, self::FIELD_ALTERNATIVE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALTERNATIVE])) {
                        $errs[self::FIELD_ALTERNATIVE] = [];
                    }
                    $errs[self::FIELD_ALTERNATIVE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPERATION])) {
            $v = $this->getOperation();
            foreach($validationRules[self::FIELD_OPERATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_STEP, self::FIELD_OPERATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPERATION])) {
                        $errs[self::FIELD_OPERATION] = [];
                    }
                    $errs[self::FIELD_OPERATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAUSE])) {
            $v = $this->getPause();
            foreach($validationRules[self::FIELD_PAUSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_STEP, self::FIELD_PAUSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAUSE])) {
                        $errs[self::FIELD_PAUSE] = [];
                    }
                    $errs[self::FIELD_PAUSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROCESS])) {
            $v = $this->getProcess();
            foreach($validationRules[self::FIELD_PROCESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_STEP, self::FIELD_PROCESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROCESS])) {
                        $errs[self::FIELD_PROCESS] = [];
                    }
                    $errs[self::FIELD_PROCESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRExampleScenarioStep::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRExampleScenarioStep::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRExampleScenarioStep;
        } elseif (!is_object($type) || !($type instanceof FHIRExampleScenarioStep)) {
            throw new \RuntimeException(sprintf(
                'FHIRExampleScenarioStep::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
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
        if (isset($children->pause)) {
            $type->setPause(FHIRBoolean::xmlUnserialize($children->pause));
        }
        if (isset($attributes->pause)) {
            $pt = $type->getPause();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->pause);
            } else {
                $type->setPause((string)$attributes->pause);
            }
        }
        if (isset($children->process)) {
            foreach($children->process as $child) {
                $type->addProcess(FHIRExampleScenarioProcess::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if ([] !== ($vs = $this->getAlternative())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ALTERNATIVE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getOperation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OPERATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPause())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PAUSE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getProcess())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROCESS, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_ALTERNATIVE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ALTERNATIVE][] = $v;
            }
        }
        if (null !== ($v = $this->getOperation())) {
            $a[self::FIELD_OPERATION] = $v;
        }
        if (null !== ($v = $this->getPause())) {
            $a[self::FIELD_PAUSE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_PAUSE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getProcess())) {
            $a[self::FIELD_PROCESS] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PROCESS][] = $v;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}