<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Example of workflow instance.
 */
class FHIRExampleScenarioStep extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_STEP;


    public const FIELD_NUMBER = 'number';
    public const FIELD_NUMBER_EXT = '_number';
    public const FIELD_PROCESS = 'process';
    public const FIELD_WORKFLOW = 'workflow';
    public const FIELD_WORKFLOW_EXT = '_workflow';
    public const FIELD_OPERATION = 'operation';
    public const FIELD_ALTERNATIVE = 'alternative';
    public const FIELD_PAUSE = 'pause';
    public const FIELD_PAUSE_EXT = '_pause';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The sequential number of the step, e.g. 1.2.5.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $number;
    /**
     * Example of workflow instance.
     *
     * Indicates that the step is a complex sub-process with its own steps.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess 
     */
    protected FHIRExampleScenarioProcess $process;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that the step is defined by a seaparate scenario instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical 
     */
    protected FHIRCanonical $workflow;
    /**
     * Example of workflow instance.
     *
     * The step represents a single operation invoked on receiver by sender.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation 
     */
    protected FHIRExampleScenarioOperation $operation;
    /**
     * Example of workflow instance.
     *
     * Indicates an alternative step that can be taken instead of the sub-process,
     * scenario or operation. E.g. to represent non-happy-path/exceptional/atypical
     * circumstances.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative[] 
     */
    protected array $alternative;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that, following this step, there is a pause in the flow and
     * the subsequent step will occur at some later time (triggered by some event).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $pause;

    /** Default validation map for fields in type ExampleScenario.Step */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRExampleScenarioStep Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $number
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess $process
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $workflow
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation $operation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative[] $alternative
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $pause
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $number = null,
                                null|FHIRExampleScenarioProcess $process = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $workflow = null,
                                null|FHIRExampleScenarioOperation $operation = null,
                                null|iterable $alternative = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $pause = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $number) {
            $this->setNumber($number);
        }
        if (null !== $process) {
            $this->setProcess($process);
        }
        if (null !== $workflow) {
            $this->setWorkflow($workflow);
        }
        if (null !== $operation) {
            $this->setOperation($operation);
        }
        if (null !== $alternative) {
            $this->setAlternative(...$alternative);
        }
        if (null !== $pause) {
            $this->setPause($pause);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The sequential number of the step, e.g. 1.2.5.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getNumber(): null|FHIRString
    {
        return $this->number ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The sequential number of the step, e.g. 1.2.5.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $number
     * @return static
     */
    public function setNumber(null|string|FHIRStringPrimitive|FHIRString $number): self
    {
        if (null === $number) {
            unset($this->number);
            return $this;
        }
        if (!($number instanceof FHIRString)) {
            $number = new FHIRString(value: $number);
        }
        $this->number = $number;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Indicates that the step is a complex sub-process with its own steps.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess
     */
    public function getProcess(): null|FHIRExampleScenarioProcess
    {
        return $this->process ?? null;
    }

    /**
     * Example of workflow instance.
     *
     * Indicates that the step is a complex sub-process with its own steps.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess $process
     * @return static
     */
    public function setProcess(null|FHIRExampleScenarioProcess $process): self
    {
        if (null === $process) {
            unset($this->process);
            return $this;
        }
        $this->process = $process;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that the step is defined by a seaparate scenario instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getWorkflow(): null|FHIRCanonical
    {
        return $this->workflow ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that the step is defined by a seaparate scenario instance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $workflow
     * @return static
     */
    public function setWorkflow(null|string|FHIRCanonicalPrimitive|FHIRCanonical $workflow): self
    {
        if (null === $workflow) {
            unset($this->workflow);
            return $this;
        }
        if (!($workflow instanceof FHIRCanonical)) {
            $workflow = new FHIRCanonical(value: $workflow);
        }
        $this->workflow = $workflow;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * The step represents a single operation invoked on receiver by sender.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
     */
    public function getOperation(): null|FHIRExampleScenarioOperation
    {
        return $this->operation ?? null;
    }

    /**
     * Example of workflow instance.
     *
     * The step represents a single operation invoked on receiver by sender.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation $operation
     * @return static
     */
    public function setOperation(null|FHIRExampleScenarioOperation $operation): self
    {
        if (null === $operation) {
            unset($this->operation);
            return $this;
        }
        $this->operation = $operation;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Indicates an alternative step that can be taken instead of the sub-process,
     * scenario or operation. E.g. to represent non-happy-path/exceptional/atypical
     * circumstances.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative[]
     */
    public function getAlternative(): array
    {
        return $this->alternative ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative>
     */
    public function getAlternativeIterator(): iterable
    {
        if (!isset($this->alternative) || [] === $this->alternative) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->alternative);
    }

    /**
     * Example of workflow instance.
     *
     * Indicates an alternative step that can be taken instead of the sub-process,
     * scenario or operation. E.g. to represent non-happy-path/exceptional/atypical
     * circumstances.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative $alternative
     * @return static
     */
    public function addAlternative(FHIRExampleScenarioAlternative $alternative): self
    {
        if (!isset($this->alternative)) {
            $this->alternative = [];
        }
        $this->alternative[] = $alternative;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Indicates an alternative step that can be taken instead of the sub-process,
     * scenario or operation. E.g. to represent non-happy-path/exceptional/atypical
     * circumstances.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative ...$alternative
     * @return static
     */
    public function setAlternative(FHIRExampleScenarioAlternative ...$alternative): self
    {
        $this->alternative = $alternative;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that, following this step, there is a pause in the flow and
     * the subsequent step will occur at some later time (triggered by some event).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getPause(): null|FHIRBoolean
    {
        return $this->pause ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that, following this step, there is a pause in the flow and
     * the subsequent step will occur at some later time (triggered by some event).
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $pause
     * @return static
     */
    public function setPause(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $pause): self
    {
        if (null === $pause) {
            unset($this->pause);
            return $this;
        }
        if (!($pause instanceof FHIRBoolean)) {
            $pause = new FHIRBoolean(value: $pause);
        }
        $this->pause = $pause;
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
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (isset($validationRules[self::FIELD_NUMBER])) {
            $v = $this->getNumber();
            foreach($validationRules[self::FIELD_NUMBER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER])) {
                        $errs[self::FIELD_NUMBER] = [];
                    }
                    $errs[self::FIELD_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROCESS])) {
            $v = $this->getProcess();
            foreach($validationRules[self::FIELD_PROCESS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROCESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROCESS])) {
                        $errs[self::FIELD_PROCESS] = [];
                    }
                    $errs[self::FIELD_PROCESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WORKFLOW])) {
            $v = $this->getWorkflow();
            foreach($validationRules[self::FIELD_WORKFLOW] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_WORKFLOW, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WORKFLOW])) {
                        $errs[self::FIELD_WORKFLOW] = [];
                    }
                    $errs[self::FIELD_WORKFLOW][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPERATION])) {
            $v = $this->getOperation();
            foreach($validationRules[self::FIELD_OPERATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OPERATION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ALTERNATIVE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALTERNATIVE])) {
                        $errs[self::FIELD_ALTERNATIVE] = [];
                    }
                    $errs[self::FIELD_ALTERNATIVE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAUSE])) {
            $v = $this->getPause();
            foreach($validationRules[self::FIELD_PAUSE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PAUSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAUSE])) {
                        $errs[self::FIELD_PAUSE] = [];
                    }
                    $errs[self::FIELD_PAUSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRExampleScenarioStep)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $v = new FHIRStringPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NUMBER === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setNumber(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PROCESS === $childName) {
                $v = new FHIRExampleScenarioProcess();
                $type->setProcess(FHIRExampleScenarioProcess::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_WORKFLOW === $childName) {
                $v = new FHIRCanonical(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setWorkflow(FHIRCanonical::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OPERATION === $childName) {
                $v = new FHIRExampleScenarioOperation();
                $type->setOperation(FHIRExampleScenarioOperation::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ALTERNATIVE === $childName) {
                $v = new FHIRExampleScenarioAlternative();
                $type->addAlternative(FHIRExampleScenarioAlternative::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PAUSE === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPause(FHIRBoolean::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_NUMBER])) {
            $pt = $type->getNumber();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NUMBER]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setNumber(new FHIRString(
                    value: (string)$attributes[self::FIELD_NUMBER],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_WORKFLOW])) {
            $pt = $type->getWorkflow();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_WORKFLOW]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setWorkflow(new FHIRCanonical(
                    value: (string)$attributes[self::FIELD_WORKFLOW],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PAUSE])) {
            $pt = $type->getPause();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PAUSE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPause(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_PAUSE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('ExampleScenarioStep', $this->_getSourceXMLNS());
        }
        if (isset($this->number) && $this->number->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NUMBER, $this->number->getValue()?->getFormattedValue());
        }
        if (isset($this->workflow) && $this->workflow->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_WORKFLOW, $this->workflow->getValue()?->getFormattedValue());
        }
        if (isset($this->pause) && $this->pause->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PAUSE, $this->pause->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->number) && $this->number->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NUMBER);
            $this->number->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->process)) {
            $xw->startElement(self::FIELD_PROCESS);
            $this->process->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->workflow) && $this->workflow->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_WORKFLOW);
            $this->workflow->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->operation)) {
            $xw->startElement(self::FIELD_OPERATION);
            $this->operation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->alternative)) {
            foreach ($this->alternative as $v) {
                $xw->startElement(self::FIELD_ALTERNATIVE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->pause) && $this->pause->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PAUSE);
            $this->pause->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRExampleScenarioStep)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_NUMBER]) || isset($json[self::FIELD_NUMBER_EXT]) || array_key_exists(self::FIELD_NUMBER, $json) || array_key_exists(self::FIELD_NUMBER_EXT, $json)) {
            $value = $json[self::FIELD_NUMBER] ?? null;
            $ext = (isset($json[self::FIELD_NUMBER_EXT]) && is_array($json[self::FIELD_NUMBER_EXT])) ? $json[self::FIELD_NUMBER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setNumber($value);
                } else if (is_array($value)) {
                    $type->setNumber(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setNumber(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setNumber(new FHIRString($ext));
            } else {
                $type->setNumber(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_PROCESS]) || array_key_exists(self::FIELD_PROCESS, $json)) {
            if ($json[self::FIELD_PROCESS] instanceof FHIRExampleScenarioProcess) {
                $type->setProcess($json[self::FIELD_PROCESS]);
            } else {
                $type->setProcess(new FHIRExampleScenarioProcess($json[self::FIELD_PROCESS]));
            }
        }
        if (isset($json[self::FIELD_WORKFLOW]) || isset($json[self::FIELD_WORKFLOW_EXT]) || array_key_exists(self::FIELD_WORKFLOW, $json) || array_key_exists(self::FIELD_WORKFLOW_EXT, $json)) {
            $value = $json[self::FIELD_WORKFLOW] ?? null;
            $ext = (isset($json[self::FIELD_WORKFLOW_EXT]) && is_array($json[self::FIELD_WORKFLOW_EXT])) ? $json[self::FIELD_WORKFLOW_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $type->setWorkflow($value);
                } else if (is_array($value)) {
                    $type->setWorkflow(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $type->setWorkflow(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setWorkflow(new FHIRCanonical($ext));
            } else {
                $type->setWorkflow(new FHIRCanonical(null));
            }
        }
        if (isset($json[self::FIELD_OPERATION]) || array_key_exists(self::FIELD_OPERATION, $json)) {
            if ($json[self::FIELD_OPERATION] instanceof FHIRExampleScenarioOperation) {
                $type->setOperation($json[self::FIELD_OPERATION]);
            } else {
                $type->setOperation(new FHIRExampleScenarioOperation($json[self::FIELD_OPERATION]));
            }
        }
        if (isset($json[self::FIELD_ALTERNATIVE]) || array_key_exists(self::FIELD_ALTERNATIVE, $json)) {
            if (is_array($json[self::FIELD_ALTERNATIVE])) {
                foreach($json[self::FIELD_ALTERNATIVE] as $v) {
                    if ($v instanceof FHIRExampleScenarioAlternative) {
                        $type->addAlternative($v);
                    } else {
                        $type->addAlternative(new FHIRExampleScenarioAlternative($v));
                    }
                }
            } elseif ($json[self::FIELD_ALTERNATIVE] instanceof FHIRExampleScenarioAlternative) {
                $type->addAlternative($json[self::FIELD_ALTERNATIVE]);
            } else {
                $type->addAlternative(new FHIRExampleScenarioAlternative($json[self::FIELD_ALTERNATIVE]));
            }
        }
        if (isset($json[self::FIELD_PAUSE]) || isset($json[self::FIELD_PAUSE_EXT]) || array_key_exists(self::FIELD_PAUSE, $json) || array_key_exists(self::FIELD_PAUSE_EXT, $json)) {
            $value = $json[self::FIELD_PAUSE] ?? null;
            $ext = (isset($json[self::FIELD_PAUSE_EXT]) && is_array($json[self::FIELD_PAUSE_EXT])) ? $json[self::FIELD_PAUSE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setPause($value);
                } else if (is_array($value)) {
                    $type->setPause(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setPause(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPause(new FHIRBoolean($ext));
            } else {
                $type->setPause(new FHIRBoolean(null));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->number)) {
            if (null !== ($val = $this->number->getValue())) {
                $out->number = $val;
            }
            $ext = $this->number->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_number = $ext;
            }
        }
        if (isset($this->process)) {
            $out->process = $this->process;
        }
        if (isset($this->workflow)) {
            if (null !== ($val = $this->workflow->getValue())) {
                $out->workflow = $val;
            }
            $ext = $this->workflow->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_workflow = $ext;
            }
        }
        if (isset($this->operation)) {
            $out->operation = $this->operation;
        }
        if (isset($this->alternative) && [] !== $this->alternative) {
            $out->alternative = $this->alternative;
        }
        if (isset($this->pause)) {
            if (null !== ($val = $this->pause->getValue())) {
                $out->pause = $val;
            }
            $ext = $this->pause->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_pause = $ext;
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