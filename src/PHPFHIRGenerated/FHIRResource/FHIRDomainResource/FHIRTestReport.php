<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportParticipant;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportSetup;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTeardown;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTest;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRTestReportResult;
use PHPFHIRGenerated\FHIRElement\FHIRTestReportStatus;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A summary of information based on the results of executing a TestScript.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRTestReport
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRTestReport extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'TestReport';

    /**
     * Identifier for the TestScript assigned for external purposes outside the context of FHIR.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    private $identifier = null;

    /**
     * When the TestScript was executed and this TestReport was generated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $issued = null;

    /**
     * A free text natural language name identifying the executed TestScript.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $name = null;

    /**
     * A participant in the test execution, either the execution engine, a client, or a server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportParticipant[]
     */
    private $participant = [];

    /**
     * The overall result from the execution of the TestScript.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTestReportResult
     */
    private $result = null;

    /**
     * The final score (percentage of tests passed) resulting from the execution of the TestScript.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $score = null;

    /**
     * The results of the series of required setup operations before the tests were executed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportSetup
     */
    private $setup = null;

    /**
     * The current state of this test report.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTestReportStatus
     */
    private $status = null;

    /**
     * The results of the series of operations required to clean up after the all the tests were executed (successfully or otherwise).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTeardown
     */
    private $teardown = null;

    /**
     * A test executed from the test script.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTest[]
     */
    private $test = [];

    /**
     * Ideally this is an absolute URL that is used to identify the version-specific TestScript that was executed, matching the `TestScript.url`.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $testScript = null;

    /**
     * Name of the tester producing this report (Organization or individual).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $tester = null;

    /**
     * FHIRTestReport Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                $value = $data['identifier'];
                if (is_array($value)) {
                    $value = new FHIRIdentifier($value);
                } 
                if (!($value instanceof FHIRIdentifier)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestReport::__construct - Property \"identifier\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($value));
                }
                $this->setIdentifier($value);
            }
            if (isset($data['issued'])) {
                $value = $data['issued'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestReport::__construct - Property \"issued\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setIssued($value);
            }
            if (isset($data['name'])) {
                $value = $data['name'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestReport::__construct - Property \"name\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setName($value);
            }
            if (isset($data['participant'])) {
                $value = $data['participant'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRTestReportParticipant($v);
                        } 
                        if (!($v instanceof FHIRTestReportParticipant)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestReport::__construct - Collection field \"participant\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportParticipant or data to construct type, saw ".gettype($v));
                        }
                        $this->addParticipant($v);
                    }
                }
            }
            if (isset($data['result'])) {
                $value = $data['result'];
                if (is_array($value)) {
                    $value = new FHIRTestReportResult($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRTestReportResult($value);
                }
                if (!($value instanceof FHIRTestReportResult)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestReport::__construct - Property \"result\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRTestReportResult or data to construct type, saw ".gettype($value));
                }
                $this->setResult($value);
            }
            if (isset($data['score'])) {
                $value = $data['score'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestReport::__construct - Property \"score\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value));
                }
                $this->setScore($value);
            }
            if (isset($data['setup'])) {
                $value = $data['setup'];
                if (is_array($value)) {
                    $value = new FHIRTestReportSetup($value);
                } 
                if (!($value instanceof FHIRTestReportSetup)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestReport::__construct - Property \"setup\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportSetup or data to construct type, saw ".gettype($value));
                }
                $this->setSetup($value);
            }
            if (isset($data['status'])) {
                $value = $data['status'];
                if (is_array($value)) {
                    $value = new FHIRTestReportStatus($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRTestReportStatus($value);
                }
                if (!($value instanceof FHIRTestReportStatus)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestReport::__construct - Property \"status\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRTestReportStatus or data to construct type, saw ".gettype($value));
                }
                $this->setStatus($value);
            }
            if (isset($data['teardown'])) {
                $value = $data['teardown'];
                if (is_array($value)) {
                    $value = new FHIRTestReportTeardown($value);
                } 
                if (!($value instanceof FHIRTestReportTeardown)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestReport::__construct - Property \"teardown\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTeardown or data to construct type, saw ".gettype($value));
                }
                $this->setTeardown($value);
            }
            if (isset($data['test'])) {
                $value = $data['test'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRTestReportTest($v);
                        } 
                        if (!($v instanceof FHIRTestReportTest)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestReport::__construct - Collection field \"test\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTest or data to construct type, saw ".gettype($v));
                        }
                        $this->addTest($v);
                    }
                }
            }
            if (isset($data['testScript'])) {
                $value = $data['testScript'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestReport::__construct - Property \"testScript\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setTestScript($value);
            }
            if (isset($data['tester'])) {
                $value = $data['tester'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestReport::__construct - Property \"tester\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setTester($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestReport::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Identifier for the TestScript assigned for external purposes outside the context of FHIR.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Identifier for the TestScript assigned for external purposes outside the context of FHIR.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * When the TestScript was executed and this TestReport was generated.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setIssued($issued)
    {
        if (null === $issued) {
            return $this; 
        }
        if (is_scalar($issued)) {
            $issued = new FHIRDateTime($issued);
        }
        if (!($issued instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestReport::setIssued - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($issued)
            ));
        }
        $this->issued = $issued;
        return $this;
    }

    /**
     * When the TestScript was executed and this TestReport was generated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * A free text natural language name identifying the executed TestScript.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setName($name)
    {
        if (null === $name) {
            return $this; 
        }
        if (is_scalar($name)) {
            $name = new FHIRString($name);
        }
        if (!($name instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestReport::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A free text natural language name identifying the executed TestScript.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A participant in the test execution, either the execution engine, a client, or a server.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportParticipant
     * @return $this
     */
    public function addParticipant(FHIRTestReportParticipant $participant = null)
    {
        if (null === $participant) {
            return $this; 
        }
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * A participant in the test execution, either the execution engine, a client, or a server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * The overall result from the execution of the TestScript.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTestReportResult
     * @return $this
     */
    public function setResult($result)
    {
        if (null === $result) {
            return $this; 
        }
        if (is_scalar($result)) {
            $result = new FHIRTestReportResult($result);
        }
        if (!($result instanceof FHIRTestReportResult)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestReport::setResult - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTestReportResult or appropriate scalar value, %s seen.',
                gettype($result)
            ));
        }
        $this->result = $result;
        return $this;
    }

    /**
     * The overall result from the execution of the TestScript.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTestReportResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * The final score (percentage of tests passed) resulting from the execution of the TestScript.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setScore($score)
    {
        if (null === $score) {
            return $this; 
        }
        if (is_scalar($score)) {
            $score = new FHIRDecimal($score);
        }
        if (!($score instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestReport::setScore - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($score)
            ));
        }
        $this->score = $score;
        return $this;
    }

    /**
     * The final score (percentage of tests passed) resulting from the execution of the TestScript.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * The results of the series of required setup operations before the tests were executed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportSetup
     * @return $this
     */
    public function setSetup(FHIRTestReportSetup $setup = null)
    {
        if (null === $setup) {
            return $this; 
        }
        $this->setup = $setup;
        return $this;
    }

    /**
     * The results of the series of required setup operations before the tests were executed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportSetup
     */
    public function getSetup()
    {
        return $this->setup;
    }

    /**
     * The current state of this test report.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTestReportStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRTestReportStatus($status);
        }
        if (!($status instanceof FHIRTestReportStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestReport::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTestReportStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The current state of this test report.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTestReportStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The results of the series of operations required to clean up after the all the tests were executed (successfully or otherwise).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTeardown
     * @return $this
     */
    public function setTeardown(FHIRTestReportTeardown $teardown = null)
    {
        if (null === $teardown) {
            return $this; 
        }
        $this->teardown = $teardown;
        return $this;
    }

    /**
     * The results of the series of operations required to clean up after the all the tests were executed (successfully or otherwise).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTeardown
     */
    public function getTeardown()
    {
        return $this->teardown;
    }

    /**
     * A test executed from the test script.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTest
     * @return $this
     */
    public function addTest(FHIRTestReportTest $test = null)
    {
        if (null === $test) {
            return $this; 
        }
        $this->test[] = $test;
        return $this;
    }

    /**
     * A test executed from the test script.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTest[]
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Ideally this is an absolute URL that is used to identify the version-specific TestScript that was executed, matching the `TestScript.url`.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setTestScript(FHIRReference $testScript = null)
    {
        if (null === $testScript) {
            return $this; 
        }
        $this->testScript = $testScript;
        return $this;
    }

    /**
     * Ideally this is an absolute URL that is used to identify the version-specific TestScript that was executed, matching the `TestScript.url`.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTestScript()
    {
        return $this->testScript;
    }

    /**
     * Name of the tester producing this report (Organization or individual).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setTester($tester)
    {
        if (null === $tester) {
            return $this; 
        }
        if (is_scalar($tester)) {
            $tester = new FHIRString($tester);
        }
        if (!($tester instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestReport::setTester - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($tester)
            ));
        }
        $this->tester = $tester;
        return $this;
    }

    /**
     * Name of the tester producing this report (Organization or individual).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTester()
    {
        return $this->tester;
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getIssued())) {
            $a['issued'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (0 < count($values = $this->getParticipant())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['participant'] = $vs;
            }
        }
        if (null !== ($v = $this->getResult())) {
            $a['result'] = $v;
        }
        if (null !== ($v = $this->getScore())) {
            $a['score'] = $v;
        }
        if (null !== ($v = $this->getSetup())) {
            $a['setup'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getTeardown())) {
            $a['teardown'] = $v;
        }
        if (0 < count($values = $this->getTest())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['test'] = $vs;
            }
        }
        if (null !== ($v = $this->getTestScript())) {
            $a['testScript'] = $v;
        }
        if (null !== ($v = $this->getTester())) {
            $a['tester'] = $v;
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
            $sxe = new \SimpleXMLElement('<TestReport xmlns="http://hl7.org/fhir"></TestReport>');
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize(true, $sxe->addChild('identifier'));
        }
        if (null !== ($v = $this->getIssued())) {
            $v->xmlSerialize(true, $sxe->addChild('issued'));
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize(true, $sxe->addChild('name'));
        }
        if (0 < count($values = $this->getParticipant())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('participant'));
                }
            }
        }
        if (null !== ($v = $this->getResult())) {
            $v->xmlSerialize(true, $sxe->addChild('result'));
        }
        if (null !== ($v = $this->getScore())) {
            $v->xmlSerialize(true, $sxe->addChild('score'));
        }
        if (null !== ($v = $this->getSetup())) {
            $v->xmlSerialize(true, $sxe->addChild('setup'));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('status'));
        }
        if (null !== ($v = $this->getTeardown())) {
            $v->xmlSerialize(true, $sxe->addChild('teardown'));
        }
        if (0 < count($values = $this->getTest())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('test'));
                }
            }
        }
        if (null !== ($v = $this->getTestScript())) {
            $v->xmlSerialize(true, $sxe->addChild('testScript'));
        }
        if (null !== ($v = $this->getTester())) {
            $v->xmlSerialize(true, $sxe->addChild('tester'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}