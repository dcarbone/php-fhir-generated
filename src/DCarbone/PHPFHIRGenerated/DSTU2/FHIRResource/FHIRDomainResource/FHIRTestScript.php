<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 29th, 2019 23:10+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptContact;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptFixture;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptMetadata;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptSetup;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTeardown;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTest;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptVariable;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * TestScript is a resource that specifies a suite of tests against a FHIR server
 * implementation to determine compliance against the FHIR specification.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRTestScript
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRTestScript extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT;
    const FIELD_CONTACT = 'contact';
    const FIELD_COPYRIGHT = 'copyright';
    const FIELD_COPYRIGHT_EXT = '_copyright';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_EXPERIMENTAL = 'experimental';
    const FIELD_EXPERIMENTAL_EXT = '_experimental';
    const FIELD_FIXTURE = 'fixture';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_METADATA = 'metadata';
    const FIELD_MULTISERVER = 'multiserver';
    const FIELD_MULTISERVER_EXT = '_multiserver';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_PROFILE = 'profile';
    const FIELD_PUBLISHER = 'publisher';
    const FIELD_PUBLISHER_EXT = '_publisher';
    const FIELD_REQUIREMENTS = 'requirements';
    const FIELD_REQUIREMENTS_EXT = '_requirements';
    const FIELD_SETUP = 'setup';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_TEARDOWN = 'teardown';
    const FIELD_TEST = 'test';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_USE_CONTEXT = 'useContext';
    const FIELD_VARIABLE = 'variable';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * Contacts to assist a user in finding and communicating with the publisher.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptContact[]
     */
    protected $contact = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A copyright statement relating to the Test Script and/or its contents. Copyright
     * statements are generally legal restrictions on the use and publishing of the
     * details of the constraints and mappings.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $copyright = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date this version of the test tcript was published. The date must change
     * when the business version changes, if it does, and it must change if the status
     * code changes. In addition, it should change when the substantive content of the
     * test cases change.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $date = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language description of the TestScript and its use.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This TestScript was authored for testing purposes (or
     * education/evaluation/marketing), and is not intended to be used for genuine
     * usage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $experimental = null;

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * Fixture in the test script - by reference (uri). All fixtures are required for
     * the test script to execute.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptFixture[]
     */
    protected $fixture = [];

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier for the TestScript assigned for external purposes outside the context
     * of FHIR.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    protected $identifier = null;

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * The required capability must exist and are assumed to function correctly on the
     * FHIR server being tested.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptMetadata
     */
    protected $metadata = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the tests apply to more than one FHIR server (e.g. cross-server
     * interoperability tests) then multiserver=true. Defaults to false if value is
     * unspecified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $multiserver = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language name identifying the TestScript.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $name = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the profile to be used for validation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    protected $profile = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the Test Script.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $publisher = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Explains why this Test Script is needed and why it's been constrained as it has.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $requirements = null;

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * A series of required setup operations before tests are executed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptSetup
     */
    protected $setup = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The status of the TestScript.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    protected $status = null;

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * A series of operations required to clean up after the all the tests are executed
     * (successfully or otherwise).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTeardown
     */
    protected $teardown = null;

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * A test in this script.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTest[]
     */
    protected $test = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URL that is used to identify this Test Script. This SHALL be a URL,
     * SHOULD be globally unique, and SHOULD be an address at which this Test Script is
     * (or will be) published.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    protected $url = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * of Test Scripts.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected $useContext = [];

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * Variable is set based either on element value in response body or on header
     * field value in the response headers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptVariable[]
     */
    protected $variable = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the TestScript. This is
     * an arbitrary value managed by the TestScript author manually.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $version = null;

    /**
     * Validation map for fields in type TestScript
     * @var array
     */
    private static $_fieldValidation = [    ];

    /**
     * FHIRTestScript Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScript::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CONTACT])) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRTestScriptContact) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIRTestScriptContact($v));
                    }
                }
            } else if ($data[self::FIELD_CONTACT] instanceof FHIRTestScriptContact) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIRTestScriptContact($data[self::FIELD_CONTACT]));
            }
        }
        if (isset($data[self::FIELD_COPYRIGHT])) {
            $ext = (isset($data[self::FIELD_COPYRIGHT_EXT]) && is_array($data[self::FIELD_COPYRIGHT_EXT]))
                ? $data[self::FIELD_COPYRIGHT_EXT]
                : null;
            if ($data[self::FIELD_COPYRIGHT] instanceof FHIRString) {
                $this->setCopyright($data[self::FIELD_COPYRIGHT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_COPYRIGHT])) {
                    $this->setCopyright(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_COPYRIGHT]] + $ext));
                } else if (is_array($data[self::FIELD_COPYRIGHT])) {
                    $this->setCopyright(new FHIRString(array_merge($ext, $data[self::FIELD_COPYRIGHT])));
                }
            } else {
                $this->setCopyright(new FHIRString($data[self::FIELD_COPYRIGHT]));
            }
        }
        if (isset($data[self::FIELD_DATE])) {
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT]))
                ? $data[self::FIELD_DATE_EXT]
                : null;
            if ($data[self::FIELD_DATE] instanceof FHIRDateTime) {
                $this->setDate($data[self::FIELD_DATE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DATE])) {
                    $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_DATE]] + $ext));
                } else if (is_array($data[self::FIELD_DATE])) {
                    $this->setDate(new FHIRDateTime(array_merge($ext, $data[self::FIELD_DATE])));
                }
            } else {
                $this->setDate(new FHIRDateTime($data[self::FIELD_DATE]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DESCRIPTION])) {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
                } else if (is_array($data[self::FIELD_DESCRIPTION])) {
                    $this->setDescription(new FHIRString(array_merge($ext, $data[self::FIELD_DESCRIPTION])));
                }
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_EXPERIMENTAL])) {
            $ext = (isset($data[self::FIELD_EXPERIMENTAL_EXT]) && is_array($data[self::FIELD_EXPERIMENTAL_EXT]))
                ? $data[self::FIELD_EXPERIMENTAL_EXT]
                : null;
            if ($data[self::FIELD_EXPERIMENTAL] instanceof FHIRBoolean) {
                $this->setExperimental($data[self::FIELD_EXPERIMENTAL]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_EXPERIMENTAL])) {
                    $this->setExperimental(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_EXPERIMENTAL]] + $ext));
                } else if (is_array($data[self::FIELD_EXPERIMENTAL])) {
                    $this->setExperimental(new FHIRBoolean(array_merge($ext, $data[self::FIELD_EXPERIMENTAL])));
                }
            } else {
                $this->setExperimental(new FHIRBoolean($data[self::FIELD_EXPERIMENTAL]));
            }
        }
        if (isset($data[self::FIELD_FIXTURE])) {
            if (is_array($data[self::FIELD_FIXTURE])) {
                foreach($data[self::FIELD_FIXTURE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRTestScriptFixture) {
                        $this->addFixture($v);
                    } else {
                        $this->addFixture(new FHIRTestScriptFixture($v));
                    }
                }
            } else if ($data[self::FIELD_FIXTURE] instanceof FHIRTestScriptFixture) {
                $this->addFixture($data[self::FIELD_FIXTURE]);
            } else {
                $this->addFixture(new FHIRTestScriptFixture($data[self::FIELD_FIXTURE]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_METADATA])) {
            if ($data[self::FIELD_METADATA] instanceof FHIRTestScriptMetadata) {
                $this->setMetadata($data[self::FIELD_METADATA]);
            } else {
                $this->setMetadata(new FHIRTestScriptMetadata($data[self::FIELD_METADATA]));
            }
        }
        if (isset($data[self::FIELD_MULTISERVER])) {
            $ext = (isset($data[self::FIELD_MULTISERVER_EXT]) && is_array($data[self::FIELD_MULTISERVER_EXT]))
                ? $data[self::FIELD_MULTISERVER_EXT]
                : null;
            if ($data[self::FIELD_MULTISERVER] instanceof FHIRBoolean) {
                $this->setMultiserver($data[self::FIELD_MULTISERVER]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MULTISERVER])) {
                    $this->setMultiserver(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_MULTISERVER]] + $ext));
                } else if (is_array($data[self::FIELD_MULTISERVER])) {
                    $this->setMultiserver(new FHIRBoolean(array_merge($ext, $data[self::FIELD_MULTISERVER])));
                }
            } else {
                $this->setMultiserver(new FHIRBoolean($data[self::FIELD_MULTISERVER]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT]))
                ? $data[self::FIELD_NAME_EXT]
                : null;
            if ($data[self::FIELD_NAME] instanceof FHIRString) {
                $this->setName($data[self::FIELD_NAME]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_NAME])) {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NAME]] + $ext));
                } else if (is_array($data[self::FIELD_NAME])) {
                    $this->setName(new FHIRString(array_merge($ext, $data[self::FIELD_NAME])));
                }
            } else {
                $this->setName(new FHIRString($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_PROFILE])) {
            if (is_array($data[self::FIELD_PROFILE])) {
                foreach($data[self::FIELD_PROFILE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addProfile($v);
                    } else {
                        $this->addProfile(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_PROFILE] instanceof FHIRReference) {
                $this->addProfile($data[self::FIELD_PROFILE]);
            } else {
                $this->addProfile(new FHIRReference($data[self::FIELD_PROFILE]));
            }
        }
        if (isset($data[self::FIELD_PUBLISHER])) {
            $ext = (isset($data[self::FIELD_PUBLISHER_EXT]) && is_array($data[self::FIELD_PUBLISHER_EXT]))
                ? $data[self::FIELD_PUBLISHER_EXT]
                : null;
            if ($data[self::FIELD_PUBLISHER] instanceof FHIRString) {
                $this->setPublisher($data[self::FIELD_PUBLISHER]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PUBLISHER])) {
                    $this->setPublisher(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PUBLISHER]] + $ext));
                } else if (is_array($data[self::FIELD_PUBLISHER])) {
                    $this->setPublisher(new FHIRString(array_merge($ext, $data[self::FIELD_PUBLISHER])));
                }
            } else {
                $this->setPublisher(new FHIRString($data[self::FIELD_PUBLISHER]));
            }
        }
        if (isset($data[self::FIELD_REQUIREMENTS])) {
            $ext = (isset($data[self::FIELD_REQUIREMENTS_EXT]) && is_array($data[self::FIELD_REQUIREMENTS_EXT]))
                ? $data[self::FIELD_REQUIREMENTS_EXT]
                : null;
            if ($data[self::FIELD_REQUIREMENTS] instanceof FHIRString) {
                $this->setRequirements($data[self::FIELD_REQUIREMENTS]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_REQUIREMENTS])) {
                    $this->setRequirements(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_REQUIREMENTS]] + $ext));
                } else if (is_array($data[self::FIELD_REQUIREMENTS])) {
                    $this->setRequirements(new FHIRString(array_merge($ext, $data[self::FIELD_REQUIREMENTS])));
                }
            } else {
                $this->setRequirements(new FHIRString($data[self::FIELD_REQUIREMENTS]));
            }
        }
        if (isset($data[self::FIELD_SETUP])) {
            if ($data[self::FIELD_SETUP] instanceof FHIRTestScriptSetup) {
                $this->setSetup($data[self::FIELD_SETUP]);
            } else {
                $this->setSetup(new FHIRTestScriptSetup($data[self::FIELD_SETUP]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRCode) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_STATUS])) {
                    $this->setStatus(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
                } else if (is_array($data[self::FIELD_STATUS])) {
                    $this->setStatus(new FHIRCode(array_merge($ext, $data[self::FIELD_STATUS])));
                }
            } else {
                $this->setStatus(new FHIRCode($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_TEARDOWN])) {
            if ($data[self::FIELD_TEARDOWN] instanceof FHIRTestScriptTeardown) {
                $this->setTeardown($data[self::FIELD_TEARDOWN]);
            } else {
                $this->setTeardown(new FHIRTestScriptTeardown($data[self::FIELD_TEARDOWN]));
            }
        }
        if (isset($data[self::FIELD_TEST])) {
            if (is_array($data[self::FIELD_TEST])) {
                foreach($data[self::FIELD_TEST] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRTestScriptTest) {
                        $this->addTest($v);
                    } else {
                        $this->addTest(new FHIRTestScriptTest($v));
                    }
                }
            } else if ($data[self::FIELD_TEST] instanceof FHIRTestScriptTest) {
                $this->addTest($data[self::FIELD_TEST]);
            } else {
                $this->addTest(new FHIRTestScriptTest($data[self::FIELD_TEST]));
            }
        }
        if (isset($data[self::FIELD_URL])) {
            $ext = (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT]))
                ? $data[self::FIELD_URL_EXT]
                : null;
            if ($data[self::FIELD_URL] instanceof FHIRUri) {
                $this->setUrl($data[self::FIELD_URL]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_URL])) {
                    $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_URL]] + $ext));
                } else if (is_array($data[self::FIELD_URL])) {
                    $this->setUrl(new FHIRUri(array_merge($ext, $data[self::FIELD_URL])));
                }
            } else {
                $this->setUrl(new FHIRUri($data[self::FIELD_URL]));
            }
        }
        if (isset($data[self::FIELD_USE_CONTEXT])) {
            if (is_array($data[self::FIELD_USE_CONTEXT])) {
                foreach($data[self::FIELD_USE_CONTEXT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addUseContext($v);
                    } else {
                        $this->addUseContext(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_USE_CONTEXT] instanceof FHIRCodeableConcept) {
                $this->addUseContext($data[self::FIELD_USE_CONTEXT]);
            } else {
                $this->addUseContext(new FHIRCodeableConcept($data[self::FIELD_USE_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_VARIABLE])) {
            if (is_array($data[self::FIELD_VARIABLE])) {
                foreach($data[self::FIELD_VARIABLE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRTestScriptVariable) {
                        $this->addVariable($v);
                    } else {
                        $this->addVariable(new FHIRTestScriptVariable($v));
                    }
                }
            } else if ($data[self::FIELD_VARIABLE] instanceof FHIRTestScriptVariable) {
                $this->addVariable($data[self::FIELD_VARIABLE]);
            } else {
                $this->addVariable(new FHIRTestScriptVariable($data[self::FIELD_VARIABLE]));
            }
        }
        if (isset($data[self::FIELD_VERSION])) {
            $ext = (isset($data[self::FIELD_VERSION_EXT]) && is_array($data[self::FIELD_VERSION_EXT]))
                ? $data[self::FIELD_VERSION_EXT]
                : null;
            if ($data[self::FIELD_VERSION] instanceof FHIRString) {
                $this->setVersion($data[self::FIELD_VERSION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VERSION])) {
                    $this->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_VERSION]] + $ext));
                } else if (is_array($data[self::FIELD_VERSION])) {
                    $this->setVersion(new FHIRString(array_merge($ext, $data[self::FIELD_VERSION])));
                }
            } else {
                $this->setVersion(new FHIRString($data[self::FIELD_VERSION]));
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
        return "<TestScript{$xmlns}></TestScript>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * Contacts to assist a user in finding and communicating with the publisher.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * Contacts to assist a user in finding and communicating with the publisher.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptContact $contact
     * @return static
     */
    public function addContact(FHIRTestScriptContact $contact = null)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * Contacts to assist a user in finding and communicating with the publisher.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptContact[] $contact
     * @return static
     */
    public function setContact(array $contact = [])
    {
        $this->contact = [];
        if ([] === $contact) {
            return $this;
        }
        foreach($contact as $v) {
            if ($v instanceof FHIRTestScriptContact) {
                $this->addContact($v);
            } else {
                $this->addContact(new FHIRTestScriptContact($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A copyright statement relating to the Test Script and/or its contents. Copyright
     * statements are generally legal restrictions on the use and publishing of the
     * details of the constraints and mappings.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A copyright statement relating to the Test Script and/or its contents. Copyright
     * statements are generally legal restrictions on the use and publishing of the
     * details of the constraints and mappings.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $copyright
     * @return static
     */
    public function setCopyright($copyright = null)
    {
        if (null === $copyright) {
            $this->copyright = null;
            return $this;
        }
        if ($copyright instanceof FHIRString) {
            $this->copyright = $copyright;
            return $this;
        }
        $this->copyright = new FHIRString($copyright);
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
     * The date this version of the test tcript was published. The date must change
     * when the business version changes, if it does, and it must change if the status
     * code changes. In addition, it should change when the substantive content of the
     * test cases change.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date this version of the test tcript was published. The date must change
     * when the business version changes, if it does, and it must change if the status
     * code changes. In addition, it should change when the substantive content of the
     * test cases change.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $date
     * @return static
     */
    public function setDate($date = null)
    {
        if (null === $date) {
            $this->date = null;
            return $this;
        }
        if ($date instanceof FHIRDateTime) {
            $this->date = $date;
            return $this;
        }
        $this->date = new FHIRDateTime($date);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language description of the TestScript and its use.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language description of the TestScript and its use.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This TestScript was authored for testing purposes (or
     * education/evaluation/marketing), and is not intended to be used for genuine
     * usage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This TestScript was authored for testing purposes (or
     * education/evaluation/marketing), and is not intended to be used for genuine
     * usage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $experimental
     * @return static
     */
    public function setExperimental($experimental = null)
    {
        if (null === $experimental) {
            $this->experimental = null;
            return $this;
        }
        if ($experimental instanceof FHIRBoolean) {
            $this->experimental = $experimental;
            return $this;
        }
        $this->experimental = new FHIRBoolean($experimental);
        return $this;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * Fixture in the test script - by reference (uri). All fixtures are required for
     * the test script to execute.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptFixture[]
     */
    public function getFixture()
    {
        return $this->fixture;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * Fixture in the test script - by reference (uri). All fixtures are required for
     * the test script to execute.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptFixture $fixture
     * @return static
     */
    public function addFixture(FHIRTestScriptFixture $fixture = null)
    {
        $this->fixture[] = $fixture;
        return $this;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * Fixture in the test script - by reference (uri). All fixtures are required for
     * the test script to execute.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptFixture[] $fixture
     * @return static
     */
    public function setFixture(array $fixture = [])
    {
        $this->fixture = [];
        if ([] === $fixture) {
            return $this;
        }
        foreach($fixture as $v) {
            if ($v instanceof FHIRTestScriptFixture) {
                $this->addFixture($v);
            } else {
                $this->addFixture(new FHIRTestScriptFixture($v));
            }
        }
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier for the TestScript assigned for external purposes outside the context
     * of FHIR.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * The required capability must exist and are assumed to function correctly on the
     * FHIR server being tested.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptMetadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * The required capability must exist and are assumed to function correctly on the
     * FHIR server being tested.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptMetadata $metadata
     * @return static
     */
    public function setMetadata(FHIRTestScriptMetadata $metadata = null)
    {
        $this->metadata = $metadata;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the tests apply to more than one FHIR server (e.g. cross-server
     * interoperability tests) then multiserver=true. Defaults to false if value is
     * unspecified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getMultiserver()
    {
        return $this->multiserver;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the tests apply to more than one FHIR server (e.g. cross-server
     * interoperability tests) then multiserver=true. Defaults to false if value is
     * unspecified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $multiserver
     * @return static
     */
    public function setMultiserver($multiserver = null)
    {
        if (null === $multiserver) {
            $this->multiserver = null;
            return $this;
        }
        if ($multiserver instanceof FHIRBoolean) {
            $this->multiserver = $multiserver;
            return $this;
        }
        $this->multiserver = new FHIRBoolean($multiserver);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language name identifying the TestScript.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
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
     * A free text natural language name identifying the TestScript.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $name
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the profile to be used for validation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the profile to be used for validation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $profile
     * @return static
     */
    public function addProfile(FHIRReference $profile = null)
    {
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the profile to be used for validation.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[] $profile
     * @return static
     */
    public function setProfile(array $profile = [])
    {
        $this->profile = [];
        if ([] === $profile) {
            return $this;
        }
        foreach($profile as $v) {
            if ($v instanceof FHIRReference) {
                $this->addProfile($v);
            } else {
                $this->addProfile(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the Test Script.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the Test Script.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $publisher
     * @return static
     */
    public function setPublisher($publisher = null)
    {
        if (null === $publisher) {
            $this->publisher = null;
            return $this;
        }
        if ($publisher instanceof FHIRString) {
            $this->publisher = $publisher;
            return $this;
        }
        $this->publisher = new FHIRString($publisher);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Explains why this Test Script is needed and why it's been constrained as it has.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Explains why this Test Script is needed and why it's been constrained as it has.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $requirements
     * @return static
     */
    public function setRequirements($requirements = null)
    {
        if (null === $requirements) {
            $this->requirements = null;
            return $this;
        }
        if ($requirements instanceof FHIRString) {
            $this->requirements = $requirements;
            return $this;
        }
        $this->requirements = new FHIRString($requirements);
        return $this;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * A series of required setup operations before tests are executed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptSetup
     */
    public function getSetup()
    {
        return $this->setup;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * A series of required setup operations before tests are executed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptSetup $setup
     * @return static
     */
    public function setSetup(FHIRTestScriptSetup $setup = null)
    {
        $this->setup = $setup;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The status of the TestScript.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The status of the TestScript.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $status
     * @return static
     */
    public function setStatus($status = null)
    {
        if (null === $status) {
            $this->status = null;
            return $this;
        }
        if ($status instanceof FHIRCode) {
            $this->status = $status;
            return $this;
        }
        $this->status = new FHIRCode($status);
        return $this;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * A series of operations required to clean up after the all the tests are executed
     * (successfully or otherwise).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTeardown
     */
    public function getTeardown()
    {
        return $this->teardown;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * A series of operations required to clean up after the all the tests are executed
     * (successfully or otherwise).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTeardown $teardown
     * @return static
     */
    public function setTeardown(FHIRTestScriptTeardown $teardown = null)
    {
        $this->teardown = $teardown;
        return $this;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * A test in this script.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTest[]
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * A test in this script.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTest $test
     * @return static
     */
    public function addTest(FHIRTestScriptTest $test = null)
    {
        $this->test[] = $test;
        return $this;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * A test in this script.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTest[] $test
     * @return static
     */
    public function setTest(array $test = [])
    {
        $this->test = [];
        if ([] === $test) {
            return $this;
        }
        foreach($test as $v) {
            if ($v instanceof FHIRTestScriptTest) {
                $this->addTest($v);
            } else {
                $this->addTest(new FHIRTestScriptTest($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URL that is used to identify this Test Script. This SHALL be a URL,
     * SHOULD be globally unique, and SHOULD be an address at which this Test Script is
     * (or will be) published.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URL that is used to identify this Test Script. This SHALL be a URL,
     * SHOULD be globally unique, and SHOULD be an address at which this Test Script is
     * (or will be) published.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri $url
     * @return static
     */
    public function setUrl($url = null)
    {
        if (null === $url) {
            $this->url = null;
            return $this;
        }
        if ($url instanceof FHIRUri) {
            $this->url = $url;
            return $this;
        }
        $this->url = new FHIRUri($url);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * of Test Scripts.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * of Test Scripts.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $useContext
     * @return static
     */
    public function addUseContext(FHIRCodeableConcept $useContext = null)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * of Test Scripts.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $useContext
     * @return static
     */
    public function setUseContext(array $useContext = [])
    {
        $this->useContext = [];
        if ([] === $useContext) {
            return $this;
        }
        foreach($useContext as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addUseContext($v);
            } else {
                $this->addUseContext(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * Variable is set based either on element value in response body or on header
     * field value in the response headers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptVariable[]
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * Variable is set based either on element value in response body or on header
     * field value in the response headers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptVariable $variable
     * @return static
     */
    public function addVariable(FHIRTestScriptVariable $variable = null)
    {
        $this->variable[] = $variable;
        return $this;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * Variable is set based either on element value in response body or on header
     * field value in the response headers.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptVariable[] $variable
     * @return static
     */
    public function setVariable(array $variable = [])
    {
        $this->variable = [];
        if ([] === $variable) {
            return $this;
        }
        foreach($variable as $v) {
            if ($v instanceof FHIRTestScriptVariable) {
                $this->addVariable($v);
            } else {
                $this->addVariable(new FHIRTestScriptVariable($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the TestScript. This is
     * an arbitrary value managed by the TestScript author manually.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the TestScript. This is
     * an arbitrary value managed by the TestScript author manually.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $version
     * @return static
     */
    public function setVersion($version = null)
    {
        if (null === $version) {
            $this->version = null;
            return $this;
        }
        if ($version instanceof FHIRString) {
            $this->version = $version;
            return $this;
        }
        $this->version = new FHIRString($version);
        return $this;
    }

    /**
     * @return array
     */
    public function _validationErrors()
    {
        // TODO: implement validation
        return [];
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRTestScript $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRTestScript
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
                throw new \DomainException(sprintf('FHIRTestScript::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRTestScript::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRTestScript;
        } elseif (!is_object($type) || !($type instanceof FHIRTestScript)) {
            throw new \RuntimeException(sprintf(
                'FHIRTestScript::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRTestScript or null, %s seen.',
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
        if (isset($children->contact)) {
            foreach($children->contact as $child) {
                $type->addContact(FHIRTestScriptContact::xmlUnserialize($child));
            }
        }
        if (isset($attributes->copyright)) {
            $type->setCopyright((string)$attributes->copyright);
        }
        if (isset($children->copyright)) {
            $type->setCopyright(FHIRString::xmlUnserialize($children->copyright));
        }
        if (isset($attributes->date)) {
            $type->setDate((string)$attributes->date);
        }
        if (isset($children->date)) {
            $type->setDate(FHIRDateTime::xmlUnserialize($children->date));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->experimental)) {
            $type->setExperimental((string)$attributes->experimental);
        }
        if (isset($children->experimental)) {
            $type->setExperimental(FHIRBoolean::xmlUnserialize($children->experimental));
        }
        if (isset($children->fixture)) {
            foreach($children->fixture as $child) {
                $type->addFixture(FHIRTestScriptFixture::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($children->metadata)) {
            $type->setMetadata(FHIRTestScriptMetadata::xmlUnserialize($children->metadata));
        }
        if (isset($attributes->multiserver)) {
            $type->setMultiserver((string)$attributes->multiserver);
        }
        if (isset($children->multiserver)) {
            $type->setMultiserver(FHIRBoolean::xmlUnserialize($children->multiserver));
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($children->profile)) {
            foreach($children->profile as $child) {
                $type->addProfile(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($attributes->publisher)) {
            $type->setPublisher((string)$attributes->publisher);
        }
        if (isset($children->publisher)) {
            $type->setPublisher(FHIRString::xmlUnserialize($children->publisher));
        }
        if (isset($attributes->requirements)) {
            $type->setRequirements((string)$attributes->requirements);
        }
        if (isset($children->requirements)) {
            $type->setRequirements(FHIRString::xmlUnserialize($children->requirements));
        }
        if (isset($children->setup)) {
            $type->setSetup(FHIRTestScriptSetup::xmlUnserialize($children->setup));
        }
        if (isset($attributes->status)) {
            $type->setStatus((string)$attributes->status);
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRCode::xmlUnserialize($children->status));
        }
        if (isset($children->teardown)) {
            $type->setTeardown(FHIRTestScriptTeardown::xmlUnserialize($children->teardown));
        }
        if (isset($children->test)) {
            foreach($children->test as $child) {
                $type->addTest(FHIRTestScriptTest::xmlUnserialize($child));
            }
        }
        if (isset($attributes->url)) {
            $type->setUrl((string)$attributes->url);
        }
        if (isset($children->url)) {
            $type->setUrl(FHIRUri::xmlUnserialize($children->url));
        }
        if (isset($children->useContext)) {
            foreach($children->useContext as $child) {
                $type->addUseContext(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->variable)) {
            foreach($children->variable as $child) {
                $type->addVariable(FHIRTestScriptVariable::xmlUnserialize($child));
            }
        }
        if (isset($attributes->version)) {
            $type->setVersion((string)$attributes->version);
        }
        if (isset($children->version)) {
            $type->setVersion(FHIRString::xmlUnserialize($children->version));
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

        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTACT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getCopyright())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COPYRIGHT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExperimental())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPERIMENTAL, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getFixture())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FIXTURE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMetadata())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_METADATA, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMultiserver())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MULTISERVER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getProfile())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROFILE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PUBLISHER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRequirements())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUIREMENTS, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getUrl())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_URL, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getUseContext())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_USE_CONTEXT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getVariable())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_VARIABLE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getVersion())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VERSION, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getContact())) {
            $a[self::FIELD_CONTACT] = $vs;
        }
        if (null !== ($v = $this->getCopyright())) {
            $a[self::FIELD_COPYRIGHT] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_COPYRIGHT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getExperimental())) {
            $a[self::FIELD_EXPERIMENTAL] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_EXPERIMENTAL_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getFixture())) {
            $a[self::FIELD_FIXTURE] = $vs;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getMetadata())) {
            $a[self::FIELD_METADATA] = $v;
        }
        if (null !== ($v = $this->getMultiserver())) {
            $a[self::FIELD_MULTISERVER] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_MULTISERVER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_NAME_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getProfile())) {
            $a[self::FIELD_PROFILE] = $vs;
        }
        if (null !== ($v = $this->getPublisher())) {
            $a[self::FIELD_PUBLISHER] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_PUBLISHER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getRequirements())) {
            $a[self::FIELD_REQUIREMENTS] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_REQUIREMENTS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSetup())) {
            $a[self::FIELD_SETUP] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getTeardown())) {
            $a[self::FIELD_TEARDOWN] = $v;
        }
        if ([] !== ($vs = $this->getTest())) {
            $a[self::FIELD_TEST] = $vs;
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_URL_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getUseContext())) {
            $a[self::FIELD_USE_CONTEXT] = $vs;
        }
        if ([] !== ($vs = $this->getVariable())) {
            $a[self::FIELD_VARIABLE] = $vs;
        }
        if (null !== ($v = $this->getVersion())) {
            $a[self::FIELD_VERSION] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_VERSION_EXT] = $enc;
            }
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