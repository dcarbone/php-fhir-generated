<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 22nd, 2025 19:32+0000
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
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A plan for executing testing on an artifact or specifications.
 */
class FHIRTestPlanTestCase extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_TEST_PLAN_DOT_TEST_CASE;


    public const FIELD_SEQUENCE = 'sequence';
    public const FIELD_SEQUENCE_EXT = '_sequence';
    public const FIELD_SCOPE = 'scope';
    public const FIELD_DEPENDENCY = 'dependency';
    public const FIELD_TEST_RUN = 'testRun';
    public const FIELD_TEST_DATA = 'testData';
    public const FIELD_ASSERTION = 'assertion';

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

    /** Default validation map for fields in type TestPlan.TestCase */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRTestPlanTestCase Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $sequence
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
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $sequence = null,
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

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $sequence
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSequence(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $sequence,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $sequence) {
            unset($this->sequence);
            return $this;
        }
        if (!($sequence instanceof FHIRInteger)) {
            $sequence = new FHIRInteger(value: $sequence);
        }
        if (null !== $valueXMLLocation) {
            $sequence->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $sequence->_getValueXMLLocation()) {
            $sequence->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
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
        if (!isset($this->scope) || [] === $this->scope) {
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
        if (!isset($this->dependency) || [] === $this->dependency) {
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
        if (!isset($this->testRun) || [] === $this->testRun) {
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
        if (!isset($this->testData) || [] === $this->testData) {
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
        if (!isset($this->assertion) || [] === $this->assertion) {
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
        $this->assertion = $assertion;
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
        if (isset($validationRules[self::FIELD_SEQUENCE])) {
            $v = $this->getSequence();
            foreach($validationRules[self::FIELD_SEQUENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE])) {
                        $errs[self::FIELD_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SCOPE])) {
            $v = $this->getScope();
            foreach($validationRules[self::FIELD_SCOPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SCOPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SCOPE])) {
                        $errs[self::FIELD_SCOPE] = [];
                    }
                    $errs[self::FIELD_SCOPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEPENDENCY])) {
            $v = $this->getDependency();
            foreach($validationRules[self::FIELD_DEPENDENCY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEPENDENCY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEPENDENCY])) {
                        $errs[self::FIELD_DEPENDENCY] = [];
                    }
                    $errs[self::FIELD_DEPENDENCY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEST_RUN])) {
            $v = $this->getTestRun();
            foreach($validationRules[self::FIELD_TEST_RUN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEST_RUN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEST_RUN])) {
                        $errs[self::FIELD_TEST_RUN] = [];
                    }
                    $errs[self::FIELD_TEST_RUN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEST_DATA])) {
            $v = $this->getTestData();
            foreach($validationRules[self::FIELD_TEST_DATA] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEST_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEST_DATA])) {
                        $errs[self::FIELD_TEST_DATA] = [];
                    }
                    $errs[self::FIELD_TEST_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ASSERTION])) {
            $v = $this->getAssertion();
            foreach($validationRules[self::FIELD_ASSERTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ASSERTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ASSERTION])) {
                        $errs[self::FIELD_ASSERTION] = [];
                    }
                    $errs[self::FIELD_ASSERTION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestCase $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestCase
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
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
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SEQUENCE === $childName) {
                $v = new FHIRInteger(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSequence(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SCOPE === $childName) {
                $v = new FHIRReference();
                $type->addScope(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEPENDENCY === $childName) {
                $v = new FHIRTestPlanDependency1();
                $type->addDependency(FHIRTestPlanDependency1::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEST_RUN === $childName) {
                $v = new FHIRTestPlanTestRun();
                $type->addTestRun(FHIRTestPlanTestRun::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEST_DATA === $childName) {
                $v = new FHIRTestPlanTestData();
                $type->addTestData(FHIRTestPlanTestData::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ASSERTION === $childName) {
                $v = new FHIRTestPlanAssertion();
                $type->addAssertion(FHIRTestPlanAssertion::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SEQUENCE])) {
            $pt = $type->getSequence();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SEQUENCE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSequence(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_SEQUENCE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('TestPlanTestCase', $this->_getSourceXMLNS());
        }
        if (isset($this->sequence) && $this->sequence->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SEQUENCE, $this->sequence->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->sequence) && $this->sequence->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SEQUENCE);
            $this->sequence->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestCase $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestCase
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
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
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_SEQUENCE]) || isset($json[self::FIELD_SEQUENCE_EXT]) || array_key_exists(self::FIELD_SEQUENCE, $json) || array_key_exists(self::FIELD_SEQUENCE_EXT, $json)) {
            $value = $json[self::FIELD_SEQUENCE] ?? null;
            $ext = (array)($json[self::FIELD_SEQUENCE_EXT] ?? []);
            $type->setSequence(FHIRInteger::jsonUnserialize(
                json: [FHIRInteger::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_SCOPE]) || array_key_exists(self::FIELD_SCOPE, $json)) {
            $vs = $json[self::FIELD_SCOPE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addScope(FHIRReference::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_DEPENDENCY]) || array_key_exists(self::FIELD_DEPENDENCY, $json)) {
            $vs = $json[self::FIELD_DEPENDENCY];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addDependency(FHIRTestPlanDependency1::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_TEST_RUN]) || array_key_exists(self::FIELD_TEST_RUN, $json)) {
            $vs = $json[self::FIELD_TEST_RUN];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addTestRun(FHIRTestPlanTestRun::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_TEST_DATA]) || array_key_exists(self::FIELD_TEST_DATA, $json)) {
            $vs = $json[self::FIELD_TEST_DATA];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addTestData(FHIRTestPlanTestData::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_ASSERTION]) || array_key_exists(self::FIELD_ASSERTION, $json)) {
            $vs = $json[self::FIELD_ASSERTION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addAssertion(FHIRTestPlanAssertion::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
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
            $ext = $this->sequence->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_sequence = $ext;
            }
        }
        if (isset($this->scope) && [] !== $this->scope) {
            $out->scope = $this->scope;
        }
        if (isset($this->dependency) && [] !== $this->dependency) {
            $out->dependency = $this->dependency;
        }
        if (isset($this->testRun) && [] !== $this->testRun) {
            $out->testRun = $this->testRun;
        }
        if (isset($this->testData) && [] !== $this->testData) {
            $out->testData = $this->testData;
        }
        if (isset($this->assertion) && [] !== $this->assertion) {
            $out->assertion = $this->assertion;
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