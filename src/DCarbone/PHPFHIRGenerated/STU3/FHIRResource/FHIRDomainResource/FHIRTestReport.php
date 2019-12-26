<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportParticipant;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportSetup;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTeardown;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTest;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTestReportResult;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTestReportStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A summary of information based on the results of executing a TestScript.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRTestReport
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRTestReport extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TEST_REPORT;
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_ISSUED = 'issued';
    const FIELD_ISSUED_EXT = '_issued';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_PARTICIPANT = 'participant';
    const FIELD_RESULT = 'result';
    const FIELD_RESULT_EXT = '_result';
    const FIELD_SCORE = 'score';
    const FIELD_SCORE_EXT = '_score';
    const FIELD_SETUP = 'setup';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_TEARDOWN = 'teardown';
    const FIELD_TEST = 'test';
    const FIELD_TEST_SCRIPT = 'testScript';
    const FIELD_TESTER = 'tester';
    const FIELD_TESTER_EXT = '_tester';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier for the TestScript assigned for external purposes outside the context
     * of FHIR.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    protected $identifier = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the TestScript was executed and this TestReport was generated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $issued = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language name identifying the executed TestScript.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $name = null;

    /**
     * A summary of information based on the results of executing a TestScript.
     *
     * A participant in the test execution, either the execution engine, a client, or a
     * server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportParticipant[]
     */
    protected $participant = [];

    /**
     * The reported execution result.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The overall result from the execution of the TestScript.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTestReportResult
     */
    protected $result = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The final score (percentage of tests passed) resulting from the execution of the
     * TestScript.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected $score = null;

    /**
     * A summary of information based on the results of executing a TestScript.
     *
     * The results of the series of required setup operations before the tests were
     * executed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportSetup
     */
    protected $setup = null;

    /**
     * The current status of the test report.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of this test report.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTestReportStatus
     */
    protected $status = null;

    /**
     * A summary of information based on the results of executing a TestScript.
     *
     * The results of the series of operations required to clean up after the all the
     * tests were executed (successfully or otherwise).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTeardown
     */
    protected $teardown = null;

    /**
     * A summary of information based on the results of executing a TestScript.
     *
     * A test executed from the test script.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTest[]
     */
    protected $test = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ideally this is an absolute URL that is used to identify the version-specific
     * TestScript that was executed, matching the `TestScript.url`.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $testScript = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name of the tester producing this report (Organization or individual).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $tester = null;

    /**
     * Validation map for fields in type TestReport
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRTestReport Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestReport::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_ISSUED]) || isset($data[self::FIELD_ISSUED_EXT])) {
            if (isset($data[self::FIELD_ISSUED])) {
                $value = $data[self::FIELD_ISSUED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ISSUED_EXT]) && is_array($data[self::FIELD_ISSUED_EXT])) {
                $ext = $data[self::FIELD_ISSUED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setIssued($value);
                } else if (is_array($value)) {
                    $this->setIssued(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setIssued(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setIssued(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_NAME]) || isset($data[self::FIELD_NAME_EXT])) {
            if (isset($data[self::FIELD_NAME])) {
                $value = $data[self::FIELD_NAME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) {
                $ext = $data[self::FIELD_NAME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setName(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT])) {
            if (is_array($data[self::FIELD_PARTICIPANT])) {
                foreach($data[self::FIELD_PARTICIPANT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRTestReportParticipant) {
                        $this->addParticipant($v);
                    } else {
                        $this->addParticipant(new FHIRTestReportParticipant($v));
                    }
                }
            } else if ($data[self::FIELD_PARTICIPANT] instanceof FHIRTestReportParticipant) {
                $this->addParticipant($data[self::FIELD_PARTICIPANT]);
            } else {
                $this->addParticipant(new FHIRTestReportParticipant($data[self::FIELD_PARTICIPANT]));
            }
        }
        if (isset($data[self::FIELD_RESULT]) || isset($data[self::FIELD_RESULT_EXT])) {
            if (isset($data[self::FIELD_RESULT])) {
                $value = $data[self::FIELD_RESULT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_RESULT_EXT]) && is_array($data[self::FIELD_RESULT_EXT])) {
                $ext = $data[self::FIELD_RESULT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRTestReportResult) {
                    $this->setResult($value);
                } else if (is_array($value)) {
                    $this->setResult(new FHIRTestReportResult(array_merge($ext, $value)));
                } else {
                    $this->setResult(new FHIRTestReportResult([FHIRTestReportResult::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setResult(new FHIRTestReportResult($ext));
            }
        }
        if (isset($data[self::FIELD_SCORE]) || isset($data[self::FIELD_SCORE_EXT])) {
            if (isset($data[self::FIELD_SCORE])) {
                $value = $data[self::FIELD_SCORE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SCORE_EXT]) && is_array($data[self::FIELD_SCORE_EXT])) {
                $ext = $data[self::FIELD_SCORE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setScore($value);
                } else if (is_array($value)) {
                    $this->setScore(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setScore(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setScore(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_SETUP])) {
            if ($data[self::FIELD_SETUP] instanceof FHIRTestReportSetup) {
                $this->setSetup($data[self::FIELD_SETUP]);
            } else {
                $this->setSetup(new FHIRTestReportSetup($data[self::FIELD_SETUP]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRTestReportStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRTestReportStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRTestReportStatus([FHIRTestReportStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRTestReportStatus($ext));
            }
        }
        if (isset($data[self::FIELD_TEARDOWN])) {
            if ($data[self::FIELD_TEARDOWN] instanceof FHIRTestReportTeardown) {
                $this->setTeardown($data[self::FIELD_TEARDOWN]);
            } else {
                $this->setTeardown(new FHIRTestReportTeardown($data[self::FIELD_TEARDOWN]));
            }
        }
        if (isset($data[self::FIELD_TEST])) {
            if (is_array($data[self::FIELD_TEST])) {
                foreach($data[self::FIELD_TEST] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRTestReportTest) {
                        $this->addTest($v);
                    } else {
                        $this->addTest(new FHIRTestReportTest($v));
                    }
                }
            } else if ($data[self::FIELD_TEST] instanceof FHIRTestReportTest) {
                $this->addTest($data[self::FIELD_TEST]);
            } else {
                $this->addTest(new FHIRTestReportTest($data[self::FIELD_TEST]));
            }
        }
        if (isset($data[self::FIELD_TEST_SCRIPT])) {
            if ($data[self::FIELD_TEST_SCRIPT] instanceof FHIRReference) {
                $this->setTestScript($data[self::FIELD_TEST_SCRIPT]);
            } else {
                $this->setTestScript(new FHIRReference($data[self::FIELD_TEST_SCRIPT]));
            }
        }
        if (isset($data[self::FIELD_TESTER]) || isset($data[self::FIELD_TESTER_EXT])) {
            if (isset($data[self::FIELD_TESTER])) {
                $value = $data[self::FIELD_TESTER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TESTER_EXT]) && is_array($data[self::FIELD_TESTER_EXT])) {
                $ext = $data[self::FIELD_TESTER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTester($value);
                } else if (is_array($value)) {
                    $this->setTester(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTester(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTester(new FHIRString($ext));
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
        return "<TestReport{$xmlns}></TestReport>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier for the TestScript assigned for external purposes outside the context
     * of FHIR.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier for the TestScript assigned for external purposes outside the context
     * of FHIR.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the TestScript was executed and this TestReport was generated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the TestScript was executed and this TestReport was generated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $issued
     * @return static
     */
    public function setIssued($issued = null)
    {
        if (null === $issued) {
            $this->issued = null;
            return $this;
        }
        if ($issued instanceof FHIRDateTime) {
            $this->issued = $issued;
            return $this;
        }
        $this->issued = new FHIRDateTime($issued);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language name identifying the executed TestScript.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language name identifying the executed TestScript.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $name
     * @return static
     */
    public function setName($name = null)
    {
        if (null === $name) {
            $this->name = null;
            return $this;
        }
        if ($name instanceof FHIRString) {
            $this->name = $name;
            return $this;
        }
        $this->name = new FHIRString($name);
        return $this;
    }

    /**
     * A summary of information based on the results of executing a TestScript.
     *
     * A participant in the test execution, either the execution engine, a client, or a
     * server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * A summary of information based on the results of executing a TestScript.
     *
     * A participant in the test execution, either the execution engine, a client, or a
     * server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportParticipant $participant
     * @return static
     */
    public function addParticipant(FHIRTestReportParticipant $participant = null)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * A summary of information based on the results of executing a TestScript.
     *
     * A participant in the test execution, either the execution engine, a client, or a
     * server.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportParticipant[] $participant
     * @return static
     */
    public function setParticipant(array $participant = [])
    {
        $this->participant = [];
        if ([] === $participant) {
            return $this;
        }
        foreach($participant as $v) {
            if ($v instanceof FHIRTestReportParticipant) {
                $this->addParticipant($v);
            } else {
                $this->addParticipant(new FHIRTestReportParticipant($v));
            }
        }
        return $this;
    }

    /**
     * The reported execution result.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The overall result from the execution of the TestScript.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTestReportResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * The reported execution result.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The overall result from the execution of the TestScript.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTestReportResult $result
     * @return static
     */
    public function setResult(FHIRTestReportResult $result = null)
    {
        $this->result = $result;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The final score (percentage of tests passed) resulting from the execution of the
     * TestScript.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The final score (percentage of tests passed) resulting from the execution of the
     * TestScript.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $score
     * @return static
     */
    public function setScore($score = null)
    {
        if (null === $score) {
            $this->score = null;
            return $this;
        }
        if ($score instanceof FHIRDecimal) {
            $this->score = $score;
            return $this;
        }
        $this->score = new FHIRDecimal($score);
        return $this;
    }

    /**
     * A summary of information based on the results of executing a TestScript.
     *
     * The results of the series of required setup operations before the tests were
     * executed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportSetup
     */
    public function getSetup()
    {
        return $this->setup;
    }

    /**
     * A summary of information based on the results of executing a TestScript.
     *
     * The results of the series of required setup operations before the tests were
     * executed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportSetup $setup
     * @return static
     */
    public function setSetup(FHIRTestReportSetup $setup = null)
    {
        $this->setup = $setup;
        return $this;
    }

    /**
     * The current status of the test report.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of this test report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTestReportStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The current status of the test report.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of this test report.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTestReportStatus $status
     * @return static
     */
    public function setStatus(FHIRTestReportStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A summary of information based on the results of executing a TestScript.
     *
     * The results of the series of operations required to clean up after the all the
     * tests were executed (successfully or otherwise).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTeardown
     */
    public function getTeardown()
    {
        return $this->teardown;
    }

    /**
     * A summary of information based on the results of executing a TestScript.
     *
     * The results of the series of operations required to clean up after the all the
     * tests were executed (successfully or otherwise).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTeardown $teardown
     * @return static
     */
    public function setTeardown(FHIRTestReportTeardown $teardown = null)
    {
        $this->teardown = $teardown;
        return $this;
    }

    /**
     * A summary of information based on the results of executing a TestScript.
     *
     * A test executed from the test script.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTest[]
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * A summary of information based on the results of executing a TestScript.
     *
     * A test executed from the test script.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTest $test
     * @return static
     */
    public function addTest(FHIRTestReportTest $test = null)
    {
        $this->test[] = $test;
        return $this;
    }

    /**
     * A summary of information based on the results of executing a TestScript.
     *
     * A test executed from the test script.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTest[] $test
     * @return static
     */
    public function setTest(array $test = [])
    {
        $this->test = [];
        if ([] === $test) {
            return $this;
        }
        foreach($test as $v) {
            if ($v instanceof FHIRTestReportTest) {
                $this->addTest($v);
            } else {
                $this->addTest(new FHIRTestReportTest($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ideally this is an absolute URL that is used to identify the version-specific
     * TestScript that was executed, matching the `TestScript.url`.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getTestScript()
    {
        return $this->testScript;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ideally this is an absolute URL that is used to identify the version-specific
     * TestScript that was executed, matching the `TestScript.url`.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $testScript
     * @return static
     */
    public function setTestScript(FHIRReference $testScript = null)
    {
        $this->testScript = $testScript;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name of the tester producing this report (Organization or individual).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getTester()
    {
        return $this->tester;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name of the tester producing this report (Organization or individual).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $tester
     * @return static
     */
    public function setTester($tester = null)
    {
        if (null === $tester) {
            $this->tester = null;
            return $this;
        }
        if ($tester instanceof FHIRString) {
            $this->tester = $tester;
            return $this;
        }
        $this->tester = new FHIRString($tester);
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
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIssued())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ISSUED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getParticipant())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARTICIPANT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getResult())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESULT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getScore())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SCORE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSetup())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SETUP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTeardown())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEARDOWN] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getTest())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TEST, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getTestScript())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEST_SCRIPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTester())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TESTER] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_REPORT, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ISSUED])) {
            $v = $this->getIssued();
            foreach($validationRules[self::FIELD_ISSUED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_REPORT, self::FIELD_ISSUED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ISSUED])) {
                        $errs[self::FIELD_ISSUED] = [];
                    }
                    $errs[self::FIELD_ISSUED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_REPORT, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARTICIPANT])) {
            $v = $this->getParticipant();
            foreach($validationRules[self::FIELD_PARTICIPANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_REPORT, self::FIELD_PARTICIPANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTICIPANT])) {
                        $errs[self::FIELD_PARTICIPANT] = [];
                    }
                    $errs[self::FIELD_PARTICIPANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESULT])) {
            $v = $this->getResult();
            foreach($validationRules[self::FIELD_RESULT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_REPORT, self::FIELD_RESULT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESULT])) {
                        $errs[self::FIELD_RESULT] = [];
                    }
                    $errs[self::FIELD_RESULT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SCORE])) {
            $v = $this->getScore();
            foreach($validationRules[self::FIELD_SCORE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_REPORT, self::FIELD_SCORE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SCORE])) {
                        $errs[self::FIELD_SCORE] = [];
                    }
                    $errs[self::FIELD_SCORE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SETUP])) {
            $v = $this->getSetup();
            foreach($validationRules[self::FIELD_SETUP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_REPORT, self::FIELD_SETUP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SETUP])) {
                        $errs[self::FIELD_SETUP] = [];
                    }
                    $errs[self::FIELD_SETUP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_REPORT, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEARDOWN])) {
            $v = $this->getTeardown();
            foreach($validationRules[self::FIELD_TEARDOWN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_REPORT, self::FIELD_TEARDOWN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEARDOWN])) {
                        $errs[self::FIELD_TEARDOWN] = [];
                    }
                    $errs[self::FIELD_TEARDOWN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEST])) {
            $v = $this->getTest();
            foreach($validationRules[self::FIELD_TEST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_REPORT, self::FIELD_TEST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEST])) {
                        $errs[self::FIELD_TEST] = [];
                    }
                    $errs[self::FIELD_TEST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEST_SCRIPT])) {
            $v = $this->getTestScript();
            foreach($validationRules[self::FIELD_TEST_SCRIPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_REPORT, self::FIELD_TEST_SCRIPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEST_SCRIPT])) {
                        $errs[self::FIELD_TEST_SCRIPT] = [];
                    }
                    $errs[self::FIELD_TEST_SCRIPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TESTER])) {
            $v = $this->getTester();
            foreach($validationRules[self::FIELD_TESTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_REPORT, self::FIELD_TESTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TESTER])) {
                        $errs[self::FIELD_TESTER] = [];
                    }
                    $errs[self::FIELD_TESTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTestReport $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTestReport
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
                throw new \DomainException(sprintf('FHIRTestReport::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRTestReport::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRTestReport;
        } elseif (!is_object($type) || !($type instanceof FHIRTestReport)) {
            throw new \RuntimeException(sprintf(
                'FHIRTestReport::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTestReport or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($children->issued)) {
            $type->setIssued(FHIRDateTime::xmlUnserialize($children->issued));
        }
        if (isset($attributes->issued)) {
            $pt = $type->getIssued();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->issued);
            } else {
                $type->setIssued((string)$attributes->issued);
            }
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($attributes->name)) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->name);
            } else {
                $type->setName((string)$attributes->name);
            }
        }
        if (isset($children->participant)) {
            foreach($children->participant as $child) {
                $type->addParticipant(FHIRTestReportParticipant::xmlUnserialize($child));
            }
        }
        if (isset($children->result)) {
            $type->setResult(FHIRTestReportResult::xmlUnserialize($children->result));
        }
        if (isset($children->score)) {
            $type->setScore(FHIRDecimal::xmlUnserialize($children->score));
        }
        if (isset($attributes->score)) {
            $pt = $type->getScore();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->score);
            } else {
                $type->setScore((string)$attributes->score);
            }
        }
        if (isset($children->setup)) {
            $type->setSetup(FHIRTestReportSetup::xmlUnserialize($children->setup));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRTestReportStatus::xmlUnserialize($children->status));
        }
        if (isset($children->teardown)) {
            $type->setTeardown(FHIRTestReportTeardown::xmlUnserialize($children->teardown));
        }
        if (isset($children->test)) {
            foreach($children->test as $child) {
                $type->addTest(FHIRTestReportTest::xmlUnserialize($child));
            }
        }
        if (isset($children->testScript)) {
            $type->setTestScript(FHIRReference::xmlUnserialize($children->testScript));
        }
        if (isset($children->tester)) {
            $type->setTester(FHIRString::xmlUnserialize($children->tester));
        }
        if (isset($attributes->tester)) {
            $pt = $type->getTester();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->tester);
            } else {
                $type->setTester((string)$attributes->tester);
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
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIssued())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ISSUED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getParticipant())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getResult())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESULT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getScore())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SCORE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSetup())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SETUP, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTeardown())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TEARDOWN, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getTest())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TEST, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getTestScript())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TEST_SCRIPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTester())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TESTER, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getIssued())) {
            $a[self::FIELD_ISSUED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_ISSUED_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_NAME_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getParticipant())) {
            $a[self::FIELD_PARTICIPANT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PARTICIPANT][] = $v;
            }
        }
        if (null !== ($v = $this->getResult())) {
            $a[self::FIELD_RESULT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRTestReportResult::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRTestReportResult::FIELD_VALUE]);
                $a[self::FIELD_RESULT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getScore())) {
            $a[self::FIELD_SCORE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_SCORE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSetup())) {
            $a[self::FIELD_SETUP] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRTestReportStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRTestReportStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getTeardown())) {
            $a[self::FIELD_TEARDOWN] = $v;
        }
        if ([] !== ($vs = $this->getTest())) {
            $a[self::FIELD_TEST] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TEST][] = $v;
            }
        }
        if (null !== ($v = $this->getTestScript())) {
            $a[self::FIELD_TEST_SCRIPT] = $v;
        }
        if (null !== ($v = $this->getTester())) {
            $a[self::FIELD_TESTER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_TESTER_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}