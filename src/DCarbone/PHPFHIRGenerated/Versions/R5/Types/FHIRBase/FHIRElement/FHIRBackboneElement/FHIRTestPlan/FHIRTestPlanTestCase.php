<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 22nd, 2025 18:56+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A plan for executing testing on an artifact or specifications.
 */
class FHIRTestPlanTestCase extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_TEST_PLAN_DOT_TEST_CASE;

    /* class_default.php:56 */
    public const FIELD_SEQUENCE = 'sequence';
    public const FIELD_SEQUENCE_EXT = '_sequence';
    public const FIELD_SCOPE = 'scope';
    public const FIELD_DEPENDENCY = 'dependency';
    public const FIELD_TEST_RUN = 'testRun';
    public const FIELD_TEST_DATA = 'testData';
    public const FIELD_ASSERTION = 'assertion';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_SEQUENCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sequence of test case - an ordinal number that indicates the order for the
     * present test case in the test plan.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $sequence;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The scope or artifact covered by the case, when the individual test case is
     * associated with a testable artifact.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $scope;
    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The required criteria to execute the test case - e.g. preconditions, previous
     * tests.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanDependency1[] 
     */
    protected array $dependency;
    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The actual test to be executed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestRun[] 
     */
    protected array $testRun;
    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test data used in the test case.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestData[] 
     */
    protected array $testData;
    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test assertions - the expectations of test results from the execution of the
     * test case.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanAssertion[] 
     */
    protected array $assertion;

    /* constructor.php:61 */
    /**
     * FHIRTestPlanTestCase Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $sequence
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $scope
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanDependency1[] $dependency
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestRun[] $testRun
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestData[] $testData
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanAssertion[] $assertion
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $sequence = null,
                                null|iterable $scope = null,
                                null|iterable $dependency = null,
                                null|iterable $testRun = null,
                                null|iterable $testData = null,
                                null|iterable $assertion = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $sequence) {
            $this->setSequence($sequence);
        }
        if (null !== $scope) {
            $this->setScope(...$scope);
        }
        if (null !== $dependency) {
            $this->setDependency(...$dependency);
        }
        if (null !== $testRun) {
            $this->setTestRun(...$testRun);
        }
        if (null !== $testData) {
            $this->setTestData(...$testData);
        }
        if (null !== $assertion) {
            $this->setAssertion(...$assertion);
        }
    }

    /* class_default.php:144 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:173 */
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sequence of test case - an ordinal number that indicates the order for the
     * present test case in the test plan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger
     */
    public function getSequence(): null|FHIRInteger
    {
        return $this->sequence ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sequence of test case - an ordinal number that indicates the order for the
     * present test case in the test plan.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $sequence
     * @return static
     */
    public function setSequence(null|string|float|FHIRIntegerPrimitive|FHIRInteger $sequence): self
    {
        if (null === $sequence) {
            unset($this->sequence);
            return $this;
        }
        if (!($sequence instanceof FHIRInteger)) {
            $sequence = new FHIRInteger(value: $sequence);
        }
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The scope or artifact covered by the case, when the individual test case is
     * associated with a testable artifact.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getScope(): array
    {
        return $this->scope ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getScopeIterator(): iterable
    {
        if (!isset($this->scope)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->scope);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The scope or artifact covered by the case, when the individual test case is
     * associated with a testable artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $scope
     * @return static
     */
    public function addScope(FHIRReference $scope): self
    {
        if (!isset($this->scope)) {
            $this->scope = [];
        }
        $this->scope[] = $scope;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The scope or artifact covered by the case, when the individual test case is
     * associated with a testable artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$scope
     * @return static
     */
    public function setScope(FHIRReference ...$scope): self
    {
        if ([] === $scope) {
            unset($this->scope);
            return $this;
        }
        $this->scope = $scope;
        return $this;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The required criteria to execute the test case - e.g. preconditions, previous
     * tests.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanDependency1[]
     */
    public function getDependency(): array
    {
        return $this->dependency ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanDependency1>
     */
    public function getDependencyIterator(): iterable
    {
        if (!isset($this->dependency)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->dependency);
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The required criteria to execute the test case - e.g. preconditions, previous
     * tests.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanDependency1 $dependency
     * @return static
     */
    public function addDependency(FHIRTestPlanDependency1 $dependency): self
    {
        if (!isset($this->dependency)) {
            $this->dependency = [];
        }
        $this->dependency[] = $dependency;
        return $this;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The required criteria to execute the test case - e.g. preconditions, previous
     * tests.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanDependency1 ...$dependency
     * @return static
     */
    public function setDependency(FHIRTestPlanDependency1 ...$dependency): self
    {
        if ([] === $dependency) {
            unset($this->dependency);
            return $this;
        }
        $this->dependency = $dependency;
        return $this;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The actual test to be executed.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestRun[]
     */
    public function getTestRun(): array
    {
        return $this->testRun ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestRun>
     */
    public function getTestRunIterator(): iterable
    {
        if (!isset($this->testRun)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->testRun);
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The actual test to be executed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestRun $testRun
     * @return static
     */
    public function addTestRun(FHIRTestPlanTestRun $testRun): self
    {
        if (!isset($this->testRun)) {
            $this->testRun = [];
        }
        $this->testRun[] = $testRun;
        return $this;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The actual test to be executed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestRun ...$testRun
     * @return static
     */
    public function setTestRun(FHIRTestPlanTestRun ...$testRun): self
    {
        if ([] === $testRun) {
            unset($this->testRun);
            return $this;
        }
        $this->testRun = $testRun;
        return $this;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test data used in the test case.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestData[]
     */
    public function getTestData(): array
    {
        return $this->testData ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestData>
     */
    public function getTestDataIterator(): iterable
    {
        if (!isset($this->testData)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->testData);
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test data used in the test case.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestData $testData
     * @return static
     */
    public function addTestData(FHIRTestPlanTestData $testData): self
    {
        if (!isset($this->testData)) {
            $this->testData = [];
        }
        $this->testData[] = $testData;
        return $this;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test data used in the test case.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestData ...$testData
     * @return static
     */
    public function setTestData(FHIRTestPlanTestData ...$testData): self
    {
        if ([] === $testData) {
            unset($this->testData);
            return $this;
        }
        $this->testData = $testData;
        return $this;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test assertions - the expectations of test results from the execution of the
     * test case.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanAssertion[]
     */
    public function getAssertion(): array
    {
        return $this->assertion ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanAssertion>
     */
    public function getAssertionIterator(): iterable
    {
        if (!isset($this->assertion)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->assertion);
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test assertions - the expectations of test results from the execution of the
     * test case.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanAssertion $assertion
     * @return static
     */
    public function addAssertion(FHIRTestPlanAssertion $assertion): self
    {
        if (!isset($this->assertion)) {
            $this->assertion = [];
        }
        $this->assertion[] = $assertion;
        return $this;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test assertions - the expectations of test results from the execution of the
     * test case.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanAssertion ...$assertion
     * @return static
     */
    public function setAssertion(FHIRTestPlanAssertion ...$assertion): self
    {
        if ([] === $assertion) {
            unset($this->assertion);
            return $this;
        }
        $this->assertion = $assertion;
        return $this;
    }

    /* class_default.php:200 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestCase $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestCase
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRTestPlanTestCase)) {
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
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SEQUENCE === $cen) {
                $type->setSequence(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SCOPE === $cen) {
                $type->addScope(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEPENDENCY === $cen) {
                $type->addDependency(FHIRTestPlanDependency1::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEST_RUN === $cen) {
                $type->addTestRun(FHIRTestPlanTestRun::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEST_DATA === $cen) {
                $type->addTestData(FHIRTestPlanTestData::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ASSERTION === $cen) {
                $type->addAssertion(FHIRTestPlanAssertion::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SEQUENCE])) {
            if (isset($type->sequence)) {
                $type->sequence->setValue((string)$attributes[self::FIELD_SEQUENCE]);
            } else {
                $type->setSequence((string)$attributes[self::FIELD_SEQUENCE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SEQUENCE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->sequence) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SEQUENCE]) {
            $xw->writeAttribute(self::FIELD_SEQUENCE, $this->sequence->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->sequence)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SEQUENCE]
                || $this->sequence->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SEQUENCE);
            $this->sequence->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SEQUENCE]);
            $xw->endElement();
        }
        if (isset($this->scope)) {
            foreach ($this->scope as $v) {
                $xw->startElement(self::FIELD_SCOPE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->dependency)) {
            foreach ($this->dependency as $v) {
                $xw->startElement(self::FIELD_DEPENDENCY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->testRun)) {
            foreach ($this->testRun as $v) {
                $xw->startElement(self::FIELD_TEST_RUN);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->testData)) {
            foreach ($this->testData as $v) {
                $xw->startElement(self::FIELD_TEST_DATA);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->assertion)) {
            foreach ($this->assertion as $v) {
                $xw->startElement(self::FIELD_ASSERTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestCase $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestCase
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRTestPlanTestCase)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->sequence)
            || isset($json->_sequence)
            || property_exists($json, self::FIELD_SEQUENCE)
            || property_exists($json, self::FIELD_SEQUENCE_EXT)) {
            $v = $json->_sequence ?? new \stdClass();
            $v->value = $json->sequence ?? null;
            $type->setSequence(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($json->scope) || property_exists($json, self::FIELD_SCOPE)) {
            if (is_object($json->scope)) {
                $vals = [$json->scope];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SCOPE, true);
            } else {
                $vals = $json->scope;
            }
            foreach($vals as $v) {
                $type->addScope(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->dependency) || property_exists($json, self::FIELD_DEPENDENCY)) {
            if (is_object($json->dependency)) {
                $vals = [$json->dependency];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DEPENDENCY, true);
            } else {
                $vals = $json->dependency;
            }
            foreach($vals as $v) {
                $type->addDependency(FHIRTestPlanDependency1::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->testRun) || property_exists($json, self::FIELD_TEST_RUN)) {
            if (is_object($json->testRun)) {
                $vals = [$json->testRun];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_TEST_RUN, true);
            } else {
                $vals = $json->testRun;
            }
            foreach($vals as $v) {
                $type->addTestRun(FHIRTestPlanTestRun::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->testData) || property_exists($json, self::FIELD_TEST_DATA)) {
            if (is_object($json->testData)) {
                $vals = [$json->testData];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_TEST_DATA, true);
            } else {
                $vals = $json->testData;
            }
            foreach($vals as $v) {
                $type->addTestData(FHIRTestPlanTestData::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->assertion) || property_exists($json, self::FIELD_ASSERTION)) {
            if (is_object($json->assertion)) {
                $vals = [$json->assertion];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ASSERTION, true);
            } else {
                $vals = $json->assertion;
            }
            foreach($vals as $v) {
                $type->addAssertion(FHIRTestPlanAssertion::jsonUnserialize($v, $config));
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
        if (isset($this->sequence)) {
            if (null !== ($val = $this->sequence->getValue())) {
                $out->sequence = $val;
            }
            if ($this->sequence->_nonValueFieldDefined()) {
                $ext = $this->sequence->jsonSerialize();
                unset($ext->value);
                $out->_sequence = $ext;
            }
        }
        if (isset($this->scope) && [] !== $this->scope) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SCOPE) && 1 === count($this->scope)) {
                $out->scope = $this->scope[0];
            } else {
                $out->scope = $this->scope;
            }
        }
        if (isset($this->dependency) && [] !== $this->dependency) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DEPENDENCY) && 1 === count($this->dependency)) {
                $out->dependency = $this->dependency[0];
            } else {
                $out->dependency = $this->dependency;
            }
        }
        if (isset($this->testRun) && [] !== $this->testRun) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_TEST_RUN) && 1 === count($this->testRun)) {
                $out->testRun = $this->testRun[0];
            } else {
                $out->testRun = $this->testRun;
            }
        }
        if (isset($this->testData) && [] !== $this->testData) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_TEST_DATA) && 1 === count($this->testData)) {
                $out->testData = $this->testData[0];
            } else {
                $out->testData = $this->testData;
            }
        }
        if (isset($this->assertion) && [] !== $this->assertion) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ASSERTION) && 1 === count($this->assertion)) {
                $out->assertion = $this->assertion[0];
            } else {
                $out->assertion = $this->assertion;
            }
        }
        return $out;
    }
}