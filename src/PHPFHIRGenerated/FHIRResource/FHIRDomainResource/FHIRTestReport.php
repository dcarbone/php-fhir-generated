<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
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
    public $identifier = null;

    /**
     * When the TestScript was executed and this TestReport was generated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $issued = null;

    /**
     * A free text natural language name identifying the executed TestScript.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * A participant in the test execution, either the execution engine, a client, or a server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportParticipant
     */
    public $participant = null;

    /**
     * The overall result from the execution of the TestScript.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTestReportResult
     */
    public $result = null;

    /**
     * The final score (percentage of tests passed) resulting from the execution of the TestScript.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $score = null;

    /**
     * The results of the series of required setup operations before the tests were executed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportSetup
     */
    public $setup = null;

    /**
     * The current state of this test report.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTestReportStatus
     */
    public $status = null;

    /**
     * The results of the series of operations required to clean up after all the tests were executed (successfully or otherwise).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTeardown
     */
    public $teardown = null;

    /**
     * A test executed from the test script.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTest
     */
    public $test = null;

    /**
     * Ideally this is an absolute URL that is used to identify the version-specific TestScript that was executed, matching the `TestScript.url`.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $testScript = null;

    /**
     * Name of the tester producing this report (Organization or individual).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $tester = null;

    /**
     * FHIRTestReport Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['issued'])) {
                $this->setIssued($data['issued']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['participant'])) {
                $this->setParticipant($data['participant']);
            }
            if (isset($data['result'])) {
                $this->setResult($data['result']);
            }
            if (isset($data['score'])) {
                $this->setScore($data['score']);
            }
            if (isset($data['setup'])) {
                $this->setSetup($data['setup']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['teardown'])) {
                $this->setTeardown($data['teardown']);
            }
            if (isset($data['test'])) {
                $this->setTest($data['test']);
            }
            if (isset($data['testScript'])) {
                $this->setTestScript($data['testScript']);
            }
            if (isset($data['tester'])) {
                $this->setTester($data['tester']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestReport::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
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
    public function setParticipant(FHIRTestReportParticipant $participant = null)
    {
        if (null === $participant) {
            return $this; 
        }
        $this->participant = $participant;
        return $this;
    }

    /**
     * A participant in the test execution, either the execution engine, a client, or a server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportParticipant
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
     * The results of the series of operations required to clean up after all the tests were executed (successfully or otherwise).
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
     * The results of the series of operations required to clean up after all the tests were executed (successfully or otherwise).
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
    public function setTest(FHIRTestReportTest $test = null)
    {
        if (null === $test) {
            return $this; 
        }
        $this->test = $test;
        return $this;
    }

    /**
     * A test executed from the test script.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTest
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
        if (null !== ($v = $this->getParticipant())) {
            $a['participant'] = $v;
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
        if (null !== ($v = $this->getTest())) {
            $a['test'] = $v;
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
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}