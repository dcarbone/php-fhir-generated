<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 7th, 2024 20:38+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\R4\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter;

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

    const FIELD_PROCESS = 'process';
    const FIELD_PAUSE = 'pause';
    const FIELD_PAUSE_EXT = '_pause';
    const FIELD_OPERATION = 'operation';
    const FIELD_ALTERNATIVE = 'alternative';

    /**
     * Example of workflow instance.
     *
     * Nested process.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess[]
     */
    protected null|array $process = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If there is a pause in the flow.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $pause = null;
    /**
     * Example of workflow instance.
     *
     * Each interaction or action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
     */
    protected null|FHIRExampleScenarioOperation $operation = null;
    /**
     * Example of workflow instance.
     *
     * Indicates an alternative step that can be taken instead of the operations on the
     * base step in exceptional/atypical circumstances.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative[]
     */
    protected null|array $alternative = [];

    /**
     * Validation map for fields in type ExampleScenario.Step
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRExampleScenarioStep Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_PROCESS, $data)) {
            if (is_array($data[self::FIELD_PROCESS])) {
                foreach($data[self::FIELD_PROCESS] as $v) {
                    if ($v instanceof FHIRExampleScenarioProcess) {
                        $this->addProcess($v);
                    } else {
                        $this->addProcess(new FHIRExampleScenarioProcess($v));
                    }
                }
            } elseif ($data[self::FIELD_PROCESS] instanceof FHIRExampleScenarioProcess) {
                $this->addProcess($data[self::FIELD_PROCESS]);
            } else {
                $this->addProcess(new FHIRExampleScenarioProcess($data[self::FIELD_PROCESS]));
            }
        }
        if (array_key_exists(self::FIELD_PAUSE, $data) || array_key_exists(self::FIELD_PAUSE_EXT, $data)) {
            $value = $data[self::FIELD_PAUSE] ?? null;
            $ext = (isset($data[self::FIELD_PAUSE_EXT]) && is_array($data[self::FIELD_PAUSE_EXT])) ? $data[self::FIELD_PAUSE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setPause($value);
                } else if (is_array($value)) {
                    $this->setPause(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setPause(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPause(new FHIRBoolean($ext));
            } else {
                $this->setPause(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_OPERATION, $data)) {
            if ($data[self::FIELD_OPERATION] instanceof FHIRExampleScenarioOperation) {
                $this->setOperation($data[self::FIELD_OPERATION]);
            } else {
                $this->setOperation(new FHIRExampleScenarioOperation($data[self::FIELD_OPERATION]));
            }
        }
        if (array_key_exists(self::FIELD_ALTERNATIVE, $data)) {
            if (is_array($data[self::FIELD_ALTERNATIVE])) {
                foreach($data[self::FIELD_ALTERNATIVE] as $v) {
                    if ($v instanceof FHIRExampleScenarioAlternative) {
                        $this->addAlternative($v);
                    } else {
                        $this->addAlternative(new FHIRExampleScenarioAlternative($v));
                    }
                }
            } elseif ($data[self::FIELD_ALTERNATIVE] instanceof FHIRExampleScenarioAlternative) {
                $this->addAlternative($data[self::FIELD_ALTERNATIVE]);
            } else {
                $this->addAlternative(new FHIRExampleScenarioAlternative($data[self::FIELD_ALTERNATIVE]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * Example of workflow instance.
     *
     * Nested process.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess[]
     */
    public function getProcess(): null|array
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
    public function addProcess(null|FHIRExampleScenarioProcess $process = null): self
    {
        if (null === $process) {
            $process = new FHIRExampleScenarioProcess();
        }
        $this->_trackValueAdded();
        $this->process[] = $process;
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
    public function getPause(): null|FHIRBoolean
    {
        return $this->pause;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If there is a pause in the flow.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R4\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $pause
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPause(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $pause = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $pause && !($pause instanceof FHIRBoolean)) {
            $pause = new FHIRBoolean($pause);
        }
        $this->_trackValueSet($this->pause, $pause);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PAUSE])) {
            $this->_primitiveXmlLocations[self::FIELD_PAUSE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PAUSE][0] = $xmlLocation;
        $this->pause = $pause;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Each interaction or action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
     */
    public function getOperation(): null|FHIRExampleScenarioOperation
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
    public function setOperation(null|FHIRExampleScenarioOperation $operation = null): self
    {
        if (null === $operation) {
            $operation = new FHIRExampleScenarioOperation();
        }
        $this->_trackValueSet($this->operation, $operation);
        $this->operation = $operation;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Indicates an alternative step that can be taken instead of the operations on the
     * base step in exceptional/atypical circumstances.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative[]
     */
    public function getAlternative(): null|array
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
    public function addAlternative(null|FHIRExampleScenarioAlternative $alternative = null): self
    {
        if (null === $alternative) {
            $alternative = new FHIRExampleScenarioAlternative();
        }
        $this->_trackValueAdded();
        $this->alternative[] = $alternative;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if ([] !== ($vs = $this->getProcess())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROCESS, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPause())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PAUSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOperation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OPERATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAlternative())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ALTERNATIVE, $i)] = $fieldErrs;
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRExampleScenarioStep)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_PROCESS === $childName) {
                $type->addProcess(FHIRExampleScenarioProcess::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PAUSE === $childName) {
                $type->setPause(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_OPERATION === $childName) {
                $type->setOperation(FHIRExampleScenarioOperation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ALTERNATIVE === $childName) {
                $type->addAlternative(FHIRExampleScenarioAlternative::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_PAUSE])) {
            $pt = $type->getPause();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PAUSE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPause((string)$attributes[self::FIELD_PAUSE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'ExampleScenarioStep', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PAUSE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPause())) {
            $xw->writeAttribute(self::FIELD_PAUSE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getProcess() as $v) {
            $xw->startElement(self::FIELD_PROCESS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PAUSE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPause())) {
            $xw->startElement(self::FIELD_PAUSE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOperation())) {
            $xw->startElement(self::FIELD_OPERATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAlternative() as $v) {
            $xw->startElement(self::FIELD_ALTERNATIVE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if ([] !== ($vs = $this->getProcess())) {
            $out->{self::FIELD_PROCESS} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PROCESS}[] = $v;
            }
        }
        if (null !== ($v = $this->getPause())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PAUSE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PAUSE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOperation())) {
            $out->{self::FIELD_OPERATION} = $v;
        }
        if ([] !== ($vs = $this->getAlternative())) {
            $out->{self::FIELD_ALTERNATIVE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_ALTERNATIVE}[] = $v;
            }
        }

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}