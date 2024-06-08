<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 8th, 2024 03:16+0000
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

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R5\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * A plan for executing testing on an artifact or specifications.
 *
 * Class FHIRTestPlanTestCase
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan
 */
class FHIRTestPlanTestCase extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TEST_PLAN_DOT_TEST_CASE;

    const FIELD_SEQUENCE = 'sequence';
    const FIELD_SEQUENCE_EXT = '_sequence';
    const FIELD_SCOPE = 'scope';
    const FIELD_DEPENDENCY = 'dependency';
    const FIELD_TEST_RUN = 'testRun';
    const FIELD_TEST_DATA = 'testData';
    const FIELD_ASSERTION = 'assertion';

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sequence of test case - an ordinal number that indicates the order for the
     * present test case in the test plan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $sequence = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The scope or artifact covered by the case, when the individual test case is
     * associated with a testable artifact.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $scope = [];
    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The required criteria to execute the test case - e.g. preconditions, previous
     * tests.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanDependency1[]
     */
    protected null|array $dependency = [];
    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The actual test to be executed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestRun[]
     */
    protected null|array $testRun = [];
    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test data used in the test case.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestData[]
     */
    protected null|array $testData = [];
    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test assertions - the expectations of test results from the execution of the
     * test case.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanAssertion[]
     */
    protected null|array $assertion = [];

    /**
     * Validation map for fields in type TestPlan.TestCase
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRTestPlanTestCase Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_SEQUENCE, $data) || array_key_exists(self::FIELD_SEQUENCE_EXT, $data)) {
            $value = $data[self::FIELD_SEQUENCE] ?? null;
            $ext = (isset($data[self::FIELD_SEQUENCE_EXT]) && is_array($data[self::FIELD_SEQUENCE_EXT])) ? $data[self::FIELD_SEQUENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setSequence($value);
                } else if (is_array($value)) {
                    $this->setSequence(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setSequence(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSequence(new FHIRInteger($ext));
            } else {
                $this->setSequence(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_SCOPE, $data)) {
            if (is_array($data[self::FIELD_SCOPE])) {
                foreach($data[self::FIELD_SCOPE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addScope($v);
                    } else {
                        $this->addScope(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SCOPE] instanceof FHIRReference) {
                $this->addScope($data[self::FIELD_SCOPE]);
            } else {
                $this->addScope(new FHIRReference($data[self::FIELD_SCOPE]));
            }
        }
        if (array_key_exists(self::FIELD_DEPENDENCY, $data)) {
            if (is_array($data[self::FIELD_DEPENDENCY])) {
                foreach($data[self::FIELD_DEPENDENCY] as $v) {
                    if ($v instanceof FHIRTestPlanDependency1) {
                        $this->addDependency($v);
                    } else {
                        $this->addDependency(new FHIRTestPlanDependency1($v));
                    }
                }
            } elseif ($data[self::FIELD_DEPENDENCY] instanceof FHIRTestPlanDependency1) {
                $this->addDependency($data[self::FIELD_DEPENDENCY]);
            } else {
                $this->addDependency(new FHIRTestPlanDependency1($data[self::FIELD_DEPENDENCY]));
            }
        }
        if (array_key_exists(self::FIELD_TEST_RUN, $data)) {
            if (is_array($data[self::FIELD_TEST_RUN])) {
                foreach($data[self::FIELD_TEST_RUN] as $v) {
                    if ($v instanceof FHIRTestPlanTestRun) {
                        $this->addTestRun($v);
                    } else {
                        $this->addTestRun(new FHIRTestPlanTestRun($v));
                    }
                }
            } elseif ($data[self::FIELD_TEST_RUN] instanceof FHIRTestPlanTestRun) {
                $this->addTestRun($data[self::FIELD_TEST_RUN]);
            } else {
                $this->addTestRun(new FHIRTestPlanTestRun($data[self::FIELD_TEST_RUN]));
            }
        }
        if (array_key_exists(self::FIELD_TEST_DATA, $data)) {
            if (is_array($data[self::FIELD_TEST_DATA])) {
                foreach($data[self::FIELD_TEST_DATA] as $v) {
                    if ($v instanceof FHIRTestPlanTestData) {
                        $this->addTestData($v);
                    } else {
                        $this->addTestData(new FHIRTestPlanTestData($v));
                    }
                }
            } elseif ($data[self::FIELD_TEST_DATA] instanceof FHIRTestPlanTestData) {
                $this->addTestData($data[self::FIELD_TEST_DATA]);
            } else {
                $this->addTestData(new FHIRTestPlanTestData($data[self::FIELD_TEST_DATA]));
            }
        }
        if (array_key_exists(self::FIELD_ASSERTION, $data)) {
            if (is_array($data[self::FIELD_ASSERTION])) {
                foreach($data[self::FIELD_ASSERTION] as $v) {
                    if ($v instanceof FHIRTestPlanAssertion) {
                        $this->addAssertion($v);
                    } else {
                        $this->addAssertion(new FHIRTestPlanAssertion($v));
                    }
                }
            } elseif ($data[self::FIELD_ASSERTION] instanceof FHIRTestPlanAssertion) {
                $this->addAssertion($data[self::FIELD_ASSERTION]);
            } else {
                $this->addAssertion(new FHIRTestPlanAssertion($data[self::FIELD_ASSERTION]));
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
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sequence of test case - an ordinal number that indicates the order for the
     * present test case in the test plan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    public function getSequence(): null|FHIRInteger
    {
        return $this->sequence;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sequence of test case - an ordinal number that indicates the order for the
     * present test case in the test plan.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger $sequence
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSequence(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $sequence = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $sequence && !($sequence instanceof FHIRInteger)) {
            $sequence = new FHIRInteger($sequence);
        }
        $this->_trackValueSet($this->sequence, $sequence);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_SEQUENCE])) {
            $this->_primitiveXmlLocations[self::FIELD_SEQUENCE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_SEQUENCE][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getScope(): null|array
    {
        return $this->scope;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The scope or artifact covered by the case, when the individual test case is
     * associated with a testable artifact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $scope
     * @return static
     */
    public function addScope(null|FHIRReference $scope = null): self
    {
        if (null === $scope) {
            $scope = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->scope[] = $scope;
        return $this;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The required criteria to execute the test case - e.g. preconditions, previous
     * tests.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanDependency1[]
     */
    public function getDependency(): null|array
    {
        return $this->dependency;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The required criteria to execute the test case - e.g. preconditions, previous
     * tests.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanDependency1 $dependency
     * @return static
     */
    public function addDependency(null|FHIRTestPlanDependency1 $dependency = null): self
    {
        if (null === $dependency) {
            $dependency = new FHIRTestPlanDependency1();
        }
        $this->_trackValueAdded();
        $this->dependency[] = $dependency;
        return $this;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The actual test to be executed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestRun[]
     */
    public function getTestRun(): null|array
    {
        return $this->testRun;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The actual test to be executed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestRun $testRun
     * @return static
     */
    public function addTestRun(null|FHIRTestPlanTestRun $testRun = null): self
    {
        if (null === $testRun) {
            $testRun = new FHIRTestPlanTestRun();
        }
        $this->_trackValueAdded();
        $this->testRun[] = $testRun;
        return $this;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test data used in the test case.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestData[]
     */
    public function getTestData(): null|array
    {
        return $this->testData;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test data used in the test case.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestData $testData
     * @return static
     */
    public function addTestData(null|FHIRTestPlanTestData $testData = null): self
    {
        if (null === $testData) {
            $testData = new FHIRTestPlanTestData();
        }
        $this->_trackValueAdded();
        $this->testData[] = $testData;
        return $this;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test assertions - the expectations of test results from the execution of the
     * test case.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanAssertion[]
     */
    public function getAssertion(): null|array
    {
        return $this->assertion;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test assertions - the expectations of test results from the execution of the
     * test case.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanAssertion $assertion
     * @return static
     */
    public function addAssertion(null|FHIRTestPlanAssertion $assertion = null): self
    {
        if (null === $assertion) {
            $assertion = new FHIRTestPlanAssertion();
        }
        $this->_trackValueAdded();
        $this->assertion[] = $assertion;
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
        if (null !== ($v = $this->getSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getScope())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SCOPE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDependency())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DEPENDENCY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTestRun())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TEST_RUN, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTestData())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TEST_DATA, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAssertion())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ASSERTION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE])) {
            $v = $this->getSequence();
            foreach($validationRules[self::FIELD_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_PLAN_DOT_TEST_CASE, self::FIELD_SEQUENCE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_PLAN_DOT_TEST_CASE, self::FIELD_SCOPE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_PLAN_DOT_TEST_CASE, self::FIELD_DEPENDENCY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_PLAN_DOT_TEST_CASE, self::FIELD_TEST_RUN, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_PLAN_DOT_TEST_CASE, self::FIELD_TEST_DATA, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_PLAN_DOT_TEST_CASE, self::FIELD_ASSERTION, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestCase $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestCase
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
        } else if (!($type instanceof FHIRTestPlanTestCase)) {
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
            if (self::FIELD_SEQUENCE === $childName) {
                $type->setSequence(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SCOPE === $childName) {
                $type->addScope(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEPENDENCY === $childName) {
                $type->addDependency(FHIRTestPlanDependency1::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEST_RUN === $childName) {
                $type->addTestRun(FHIRTestPlanTestRun::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEST_DATA === $childName) {
                $type->addTestData(FHIRTestPlanTestData::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ASSERTION === $childName) {
                $type->addAssertion(FHIRTestPlanAssertion::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_SEQUENCE])) {
            $pt = $type->getSequence();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SEQUENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSequence((string)$attributes[self::FIELD_SEQUENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'TestPlanTestCase', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SEQUENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSequence())) {
            $xw->writeAttribute(self::FIELD_SEQUENCE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_SEQUENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSequence())) {
            $xw->startElement(self::FIELD_SEQUENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getScope() as $v) {
            $xw->startElement(self::FIELD_SCOPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getDependency() as $v) {
            $xw->startElement(self::FIELD_DEPENDENCY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getTestRun() as $v) {
            $xw->startElement(self::FIELD_TEST_RUN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getTestData() as $v) {
            $xw->startElement(self::FIELD_TEST_DATA);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAssertion() as $v) {
            $xw->startElement(self::FIELD_ASSERTION);
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
        if (null !== ($v = $this->getSequence())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SEQUENCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SEQUENCE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getScope())) {
            $out->{self::FIELD_SCOPE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SCOPE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getDependency())) {
            $out->{self::FIELD_DEPENDENCY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_DEPENDENCY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getTestRun())) {
            $out->{self::FIELD_TEST_RUN} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_TEST_RUN}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getTestData())) {
            $out->{self::FIELD_TEST_DATA} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_TEST_DATA}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAssertion())) {
            $out->{self::FIELD_ASSERTION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_ASSERTION}[] = $v;
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