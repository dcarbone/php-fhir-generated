<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;
use PHPFHIRGenerated\JsonSerializable;

/**
 * TestScript is a resource that specifies a suite of tests against a FHIR server implementation to determine compliance against the FHIR specification.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRTestScript extends FHIRDomainResource implements JsonSerializable
{
    /**
     * An absolute URL that is used to identify this Test Script. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this Test Script is (or will be) published.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * The identifier that is used to identify this version of the TestScript. This is an arbitrary value managed by the TestScript author manually.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A free text natural language name identifying the TestScript.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The status of the TestScript.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $status = null;

    /**
     * Identifier for the TestScript assigned for external purposes outside the context of FHIR.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * This TestScript was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The name of the individual or organization that published the Test Script.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptContact[]
     */
    public $contact = array();

    /**
     * The date this version of the test tcript was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the test cases change.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * A free text natural language description of the TestScript and its use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of Test Scripts.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $useContext = array();

    /**
     * Explains why this Test Script is needed and why it's been constrained as it has.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $requirements = null;

    /**
     * A copyright statement relating to the Test Script and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the details of the constraints and mappings.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $copyright = null;

    /**
     * The required capability must exist and are assumed to function correctly on the FHIR server being tested.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptMetadata
     */
    public $metadata = null;

    /**
     * If the tests apply to more than one FHIR server (e.g. cross-server interoperability tests) then multiserver=true. Defaults to false if value is unspecified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $multiserver = null;

    /**
     * Fixture in the test script - by reference (uri). All fixtures are required for the test script to execute.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptFixture[]
     */
    public $fixture = array();

    /**
     * Reference to the profile to be used for validation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $profile = array();

    /**
     * Variable is set based either on element value in response body or on header field value in the response headers.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptVariable[]
     */
    public $variable = array();

    /**
     * A series of required setup operations before tests are executed.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptSetup
     */
    public $setup = null;

    /**
     * A test in this script.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptTest[]
     */
    public $test = array();

    /**
     * A series of operations required to clean up after the all the tests are executed (successfully or otherwise).
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptTeardown
     */
    public $teardown = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'TestScript';

    /**
     * An absolute URL that is used to identify this Test Script. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this Test Script is (or will be) published.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * An absolute URL that is used to identify this Test Script. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this Test Script is (or will be) published.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the TestScript. This is an arbitrary value managed by the TestScript author manually.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The identifier that is used to identify this version of the TestScript. This is an arbitrary value managed by the TestScript author manually.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * A free text natural language name identifying the TestScript.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A free text natural language name identifying the TestScript.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The status of the TestScript.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the TestScript.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Identifier for the TestScript assigned for external purposes outside the context of FHIR.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifier for the TestScript assigned for external purposes outside the context of FHIR.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * This TestScript was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * This TestScript was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $experimental
     * @return $this
     */
    public function setExperimental($experimental)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * The name of the individual or organization that published the Test Script.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * The name of the individual or organization that published the Test Script.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $publisher
     * @return $this
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptContact[] $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * The date this version of the test tcript was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the test cases change.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date this version of the test tcript was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the test cases change.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * A free text natural language description of the TestScript and its use.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A free text natural language description of the TestScript and its use.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of Test Scripts.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of Test Scripts.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $useContext
     * @return $this
     */
    public function addUseContext($useContext)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * Explains why this Test Script is needed and why it's been constrained as it has.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * Explains why this Test Script is needed and why it's been constrained as it has.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $requirements
     * @return $this
     */
    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * A copyright statement relating to the Test Script and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the details of the constraints and mappings.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * A copyright statement relating to the Test Script and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the details of the constraints and mappings.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $copyright
     * @return $this
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * The required capability must exist and are assumed to function correctly on the FHIR server being tested.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptMetadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * The required capability must exist and are assumed to function correctly on the FHIR server being tested.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptMetadata $metadata
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
        return $this;
    }

    /**
     * If the tests apply to more than one FHIR server (e.g. cross-server interoperability tests) then multiserver=true. Defaults to false if value is unspecified.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getMultiserver()
    {
        return $this->multiserver;
    }

    /**
     * If the tests apply to more than one FHIR server (e.g. cross-server interoperability tests) then multiserver=true. Defaults to false if value is unspecified.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $multiserver
     * @return $this
     */
    public function setMultiserver($multiserver)
    {
        $this->multiserver = $multiserver;
        return $this;
    }

    /**
     * Fixture in the test script - by reference (uri). All fixtures are required for the test script to execute.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptFixture[]
     */
    public function getFixture()
    {
        return $this->fixture;
    }

    /**
     * Fixture in the test script - by reference (uri). All fixtures are required for the test script to execute.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptFixture[] $fixture
     * @return $this
     */
    public function addFixture($fixture)
    {
        $this->fixture[] = $fixture;
        return $this;
    }

    /**
     * Reference to the profile to be used for validation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Reference to the profile to be used for validation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $profile
     * @return $this
     */
    public function addProfile($profile)
    {
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * Variable is set based either on element value in response body or on header field value in the response headers.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptVariable[]
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * Variable is set based either on element value in response body or on header field value in the response headers.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptVariable[] $variable
     * @return $this
     */
    public function addVariable($variable)
    {
        $this->variable[] = $variable;
        return $this;
    }

    /**
     * A series of required setup operations before tests are executed.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptSetup
     */
    public function getSetup()
    {
        return $this->setup;
    }

    /**
     * A series of required setup operations before tests are executed.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptSetup $setup
     * @return $this
     */
    public function setSetup($setup)
    {
        $this->setup = $setup;
        return $this;
    }

    /**
     * A test in this script.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptTest[]
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * A test in this script.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptTest[] $test
     * @return $this
     */
    public function addTest($test)
    {
        $this->test[] = $test;
        return $this;
    }

    /**
     * A series of operations required to clean up after the all the tests are executed (successfully or otherwise).
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptTeardown
     */
    public function getTeardown()
    {
        return $this->teardown;
    }

    /**
     * A series of operations required to clean up after the all the tests are executed (successfully or otherwise).
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptTeardown $teardown
     * @return $this
     */
    public function setTeardown($teardown)
    {
        $this->teardown = $teardown;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (null !== $this->url) $json['url'] = $this->url->jsonSerialize();
        if (null !== $this->version) $json['version'] = $this->version->jsonSerialize();
        if (null !== $this->name) $json['name'] = $this->name->jsonSerialize();
        if (null !== $this->status) $json['status'] = $this->status->jsonSerialize();
        if (null !== $this->identifier) $json['identifier'] = $this->identifier->jsonSerialize();
        if (null !== $this->experimental) $json['experimental'] = $this->experimental->jsonSerialize();
        if (null !== $this->publisher) $json['publisher'] = $this->publisher->jsonSerialize();
        if (0 < count($this->contact)) {
            $json['contact'] = array();
            foreach($this->contact as $contact) {
                $json['contact'][] = $contact->jsonSerialize();
            }
        }
        if (null !== $this->date) $json['date'] = $this->date->jsonSerialize();
        if (null !== $this->description) $json['description'] = $this->description->jsonSerialize();
        if (0 < count($this->useContext)) {
            $json['useContext'] = array();
            foreach($this->useContext as $useContext) {
                $json['useContext'][] = $useContext->jsonSerialize();
            }
        }
        if (null !== $this->requirements) $json['requirements'] = $this->requirements->jsonSerialize();
        if (null !== $this->copyright) $json['copyright'] = $this->copyright->jsonSerialize();
        if (null !== $this->metadata) $json['metadata'] = $this->metadata->jsonSerialize();
        if (null !== $this->multiserver) $json['multiserver'] = $this->multiserver->jsonSerialize();
        if (0 < count($this->fixture)) {
            $json['fixture'] = array();
            foreach($this->fixture as $fixture) {
                $json['fixture'][] = $fixture->jsonSerialize();
            }
        }
        if (0 < count($this->profile)) {
            $json['profile'] = array();
            foreach($this->profile as $profile) {
                $json['profile'][] = $profile->jsonSerialize();
            }
        }
        if (0 < count($this->variable)) {
            $json['variable'] = array();
            foreach($this->variable as $variable) {
                $json['variable'][] = $variable->jsonSerialize();
            }
        }
        if (null !== $this->setup) $json['setup'] = $this->setup->jsonSerialize();
        if (0 < count($this->test)) {
            $json['test'] = array();
            foreach($this->test as $test) {
                $json['test'][] = $test->jsonSerialize();
            }
        }
        if (null !== $this->teardown) $json['teardown'] = $this->teardown->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<TestScript xmlns="http://hl7.org/fhir"></TestScript>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->url) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (null !== $this->version) $this->version->xmlSerialize(true, $sxe->addChild('version'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->experimental) $this->experimental->xmlSerialize(true, $sxe->addChild('experimental'));
        if (null !== $this->publisher) $this->publisher->xmlSerialize(true, $sxe->addChild('publisher'));
        if (0 < count($this->contact)) {
            foreach($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->useContext)) {
            foreach($this->useContext as $useContext) {
                $useContext->xmlSerialize(true, $sxe->addChild('useContext'));
            }
        }
        if (null !== $this->requirements) $this->requirements->xmlSerialize(true, $sxe->addChild('requirements'));
        if (null !== $this->copyright) $this->copyright->xmlSerialize(true, $sxe->addChild('copyright'));
        if (null !== $this->metadata) $this->metadata->xmlSerialize(true, $sxe->addChild('metadata'));
        if (null !== $this->multiserver) $this->multiserver->xmlSerialize(true, $sxe->addChild('multiserver'));
        if (0 < count($this->fixture)) {
            foreach($this->fixture as $fixture) {
                $fixture->xmlSerialize(true, $sxe->addChild('fixture'));
            }
        }
        if (0 < count($this->profile)) {
            foreach($this->profile as $profile) {
                $profile->xmlSerialize(true, $sxe->addChild('profile'));
            }
        }
        if (0 < count($this->variable)) {
            foreach($this->variable as $variable) {
                $variable->xmlSerialize(true, $sxe->addChild('variable'));
            }
        }
        if (null !== $this->setup) $this->setup->xmlSerialize(true, $sxe->addChild('setup'));
        if (0 < count($this->test)) {
            foreach($this->test as $test) {
                $test->xmlSerialize(true, $sxe->addChild('test'));
            }
        }
        if (null !== $this->teardown) $this->teardown->xmlSerialize(true, $sxe->addChild('teardown'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}