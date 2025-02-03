<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 3rd, 2025 17:37+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Example of workflow instance.
 */
class FHIRExampleScenarioStep extends FHIRBackboneElement
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_STEP;

    /* class_default.php:47 */
    public const FIELD_NUMBER = 'number';
    public const FIELD_NUMBER_EXT = '_number';
    public const FIELD_PROCESS = 'process';
    public const FIELD_WORKFLOW = 'workflow';
    public const FIELD_WORKFLOW_EXT = '_workflow';
    public const FIELD_OPERATION = 'operation';
    public const FIELD_ALTERNATIVE = 'alternative';
    public const FIELD_PAUSE = 'pause';
    public const FIELD_PAUSE_EXT = '_pause';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_NUMBER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_WORKFLOW => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PAUSE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
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

    /* constructor.php:62 */
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

    /* class_default.php:143 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:169 */
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setNumber(null|string|FHIRStringPrimitive|FHIRString $number,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $number) {
            unset($this->number);
            return $this;
        }
        if (!($number instanceof FHIRString)) {
            $number = new FHIRString(value: $number);
        }
        $this->number = $number;
        if ($this->_valueXMLLocations[self::FIELD_NUMBER] !== $valueXMLLocation) {
            $this->_setNumberValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the number element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getNumberValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_NUMBER];
    }

    /**
     * Set the location the "value" field of the number element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setNumberValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_NUMBER] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setWorkflow(null|string|FHIRCanonicalPrimitive|FHIRCanonical $workflow,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $workflow) {
            unset($this->workflow);
            return $this;
        }
        if (!($workflow instanceof FHIRCanonical)) {
            $workflow = new FHIRCanonical(value: $workflow);
        }
        $this->workflow = $workflow;
        if ($this->_valueXMLLocations[self::FIELD_WORKFLOW] !== $valueXMLLocation) {
            $this->_setWorkflowValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the workflow element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getWorkflowValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_WORKFLOW];
    }

    /**
     * Set the location the "value" field of the workflow element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setWorkflowValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_WORKFLOW] = $valueXMLLocation;
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
        if (!isset($this->alternative)) {
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
        if ([] === $alternative) {
            unset($this->alternative);
            return $this;
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPause(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $pause,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $pause) {
            unset($this->pause);
            return $this;
        }
        if (!($pause instanceof FHIRBoolean)) {
            $pause = new FHIRBoolean(value: $pause);
        }
        $this->pause = $pause;
        if ($this->_valueXMLLocations[self::FIELD_PAUSE] !== $valueXMLLocation) {
            $this->_setPauseValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the pause element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPauseValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PAUSE];
    }

    /**
     * Set the location the "value" field of the pause element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPauseValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PAUSE] = $valueXMLLocation;
        return $this;
    }

    /* class_default.php:208 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NUMBER === $cen) {
                $type->setNumber(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROCESS === $cen) {
                $type->setProcess(FHIRExampleScenarioProcess::xmlUnserialize($ce, $config));
            } else if (self::FIELD_WORKFLOW === $cen) {
                $type->setWorkflow(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OPERATION === $cen) {
                $type->setOperation(FHIRExampleScenarioOperation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ALTERNATIVE === $cen) {
                $type->addAlternative(FHIRExampleScenarioAlternative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PAUSE === $cen) {
                $type->setPause(FHIRBoolean::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_NUMBER])) {
            if (isset($type->number)) {
                $type->number->setValue((string)$attributes[self::FIELD_NUMBER]);
                $type->_setNumberValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setNumber((string)$attributes[self::FIELD_NUMBER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_WORKFLOW])) {
            if (isset($type->workflow)) {
                $type->workflow->setValue((string)$attributes[self::FIELD_WORKFLOW]);
                $type->_setWorkflowValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setWorkflow((string)$attributes[self::FIELD_WORKFLOW], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PAUSE])) {
            if (isset($type->pause)) {
                $type->pause->setValue((string)$attributes[self::FIELD_PAUSE]);
                $type->_setPauseValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPause((string)$attributes[self::FIELD_PAUSE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->number) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NUMBER]) {
            $xw->writeAttribute(self::FIELD_NUMBER, $this->number->_getFormattedValue());
        }
        if (isset($this->workflow) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_WORKFLOW]) {
            $xw->writeAttribute(self::FIELD_WORKFLOW, $this->workflow->_getFormattedValue());
        }
        if (isset($this->pause) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PAUSE]) {
            $xw->writeAttribute(self::FIELD_PAUSE, $this->pause->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->number)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NUMBER]
                || $this->number->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NUMBER);
            $this->number->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NUMBER]);
            $xw->endElement();
        }
        if (isset($this->process)) {
            $xw->startElement(self::FIELD_PROCESS);
            $this->process->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->workflow)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_WORKFLOW]
                || $this->workflow->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_WORKFLOW);
            $this->workflow->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_WORKFLOW]);
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
        if (isset($this->pause)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PAUSE]
                || $this->pause->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PAUSE);
            $this->pause->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PAUSE]);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_NUMBER])
            || isset($json[self::FIELD_NUMBER_EXT])
            || array_key_exists(self::FIELD_NUMBER, $json)
            || array_key_exists(self::FIELD_NUMBER_EXT, $json)) {
            $value = $json[self::FIELD_NUMBER] ?? null;
            $type->setNumber(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_NUMBER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PROCESS]) || array_key_exists(self::FIELD_PROCESS, $json)) {
            $type->setProcess(FHIRExampleScenarioProcess::jsonUnserialize($json[self::FIELD_PROCESS], $config));
        }
        if (isset($json[self::FIELD_WORKFLOW])
            || isset($json[self::FIELD_WORKFLOW_EXT])
            || array_key_exists(self::FIELD_WORKFLOW, $json)
            || array_key_exists(self::FIELD_WORKFLOW_EXT, $json)) {
            $value = $json[self::FIELD_WORKFLOW] ?? null;
            $type->setWorkflow(FHIRCanonical::jsonUnserialize(
                (is_array($value) ? $value : [FHIRCanonical::FIELD_VALUE => $value]) + ($json[self::FIELD_WORKFLOW_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_OPERATION]) || array_key_exists(self::FIELD_OPERATION, $json)) {
            $type->setOperation(FHIRExampleScenarioOperation::jsonUnserialize($json[self::FIELD_OPERATION], $config));
        }
        if (isset($json[self::FIELD_ALTERNATIVE]) || array_key_exists(self::FIELD_ALTERNATIVE, $json)) {
            $vs = $json[self::FIELD_ALTERNATIVE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addAlternative(FHIRExampleScenarioAlternative::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PAUSE])
            || isset($json[self::FIELD_PAUSE_EXT])
            || array_key_exists(self::FIELD_PAUSE, $json)
            || array_key_exists(self::FIELD_PAUSE_EXT, $json)) {
            $value = $json[self::FIELD_PAUSE] ?? null;
            $type->setPause(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_PAUSE_EXT] ?? []),
                $config,
            ));
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
            if ($this->number->_nonValueFieldDefined()) {
                $ext = $this->number->jsonSerialize();
                unset($ext->value);
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
            if ($this->workflow->_nonValueFieldDefined()) {
                $ext = $this->workflow->jsonSerialize();
                unset($ext->value);
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
            if ($this->pause->_nonValueFieldDefined()) {
                $ext = $this->pause->jsonSerialize();
                unset($ext->value);
                $out->_pause = $ext;
            }
        }
        return $out;
    }
}