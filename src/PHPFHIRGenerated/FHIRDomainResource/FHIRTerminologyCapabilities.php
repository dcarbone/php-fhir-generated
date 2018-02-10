<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A Terminology Capabilities documents a set of capabilities (behaviors) of a FHIR Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRTerminologyCapabilities extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * An absolute URI that is used to identify this terminology capabilities when it is referenced in a specification, model, design or an instance. This SHOULD be globally unique, and SHOULD be a literal address at which this terminology capabilities is (or will be) published.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * The identifier that is used to identify this version of the terminology capabilities when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the terminology capabilities author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A natural language name identifying the terminology capabilities. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * A short, descriptive, user-friendly title for the terminology capabilities.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * The status of this terminology capabilities. Enables tracking the life-cycle of the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * A boolean value to indicate that this terminology capabilities is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The date  (and optionally time) when the terminology capabilities was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the terminology capabilities changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * The name of the individual or organization that published the terminology capabilities.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail[]
     */
    public $contact = [];

    /**
     * A free text natural language description of the terminology capabilities from a consumer's perspective. Typically, this is used when the capability statement describes a desired rather than an actual solution, for example as a formal expression of requirements as part of an RFP.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate terminology capabilities instances.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUsageContext[]
     */
    public $useContext = [];

    /**
     * A legal or geographic region in which the terminology capabilities is intended to be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $jurisdiction = [];

    /**
     * Explaination of why this terminology capabilities is needed and why it has been designed as it has.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $purpose = null;

    /**
     * A copyright statement relating to the terminology capabilities and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the terminology capabilities.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $copyright = null;

    /**
     * Whether the server supports lockedDate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $lockedDate = null;

    /**
     * Identifies a code system that is supported by the server. If there is a no code system URL, then this declares the general assumptions a client can make about support for any CodeSystem resource.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesCodeSystem[]
     */
    public $codeSystem = [];

    /**
     * Information about the $expansion operation.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion
     */
    public $expansion = null;

    /**
     * The degree to which the server supports the code search parameter on ValueSet, if it is supported.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeSearchSupport
     */
    public $codeSearch = null;

    /**
     * Information about the $validation operation.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesValidateCode
     */
    public $validateCode = null;

    /**
     * Information about the $translation operation.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesTranslation
     */
    public $translation = null;

    /**
     * Whether the $closure operation is supported.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesClosure
     */
    public $closure = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'TerminologyCapabilities';

    /**
     * An absolute URI that is used to identify this terminology capabilities when it is referenced in a specification, model, design or an instance. This SHOULD be globally unique, and SHOULD be a literal address at which this terminology capabilities is (or will be) published.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * An absolute URI that is used to identify this terminology capabilities when it is referenced in a specification, model, design or an instance. This SHOULD be globally unique, and SHOULD be a literal address at which this terminology capabilities is (or will be) published.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the terminology capabilities when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the terminology capabilities author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion() {
        return $this->version;
    }

    /**
     * The identifier that is used to identify this version of the terminology capabilities when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the terminology capabilities author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version) {
        $this->version = $version;
        return $this;
    }

    /**
     * A natural language name identifying the terminology capabilities. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName() {
        return $this->name;
    }

    /**
     * A natural language name identifying the terminology capabilities. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * A short, descriptive, user-friendly title for the terminology capabilities.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * A short, descriptive, user-friendly title for the terminology capabilities.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * The status of this terminology capabilities. Enables tracking the life-cycle of the content.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The status of this terminology capabilities. Enables tracking the life-cycle of the content.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * A boolean value to indicate that this terminology capabilities is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental() {
        return $this->experimental;
    }

    /**
     * A boolean value to indicate that this terminology capabilities is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $experimental
     * @return $this
     */
    public function setExperimental($experimental) {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * The date  (and optionally time) when the terminology capabilities was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the terminology capabilities changes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * The date  (and optionally time) when the terminology capabilities was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the terminology capabilities changes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    /**
     * The name of the individual or organization that published the terminology capabilities.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher() {
        return $this->publisher;
    }

    /**
     * The name of the individual or organization that published the terminology capabilities.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $publisher
     * @return $this
     */
    public function setPublisher($publisher) {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactDetail[]
     */
    public function getContact() {
        return $this->contact;
    }

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactDetail $contact
     * @return $this
     */
    public function addContact($contact) {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * A free text natural language description of the terminology capabilities from a consumer's perspective. Typically, this is used when the capability statement describes a desired rather than an actual solution, for example as a formal expression of requirements as part of an RFP.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * A free text natural language description of the terminology capabilities from a consumer's perspective. Typically, this is used when the capability statement describes a desired rather than an actual solution, for example as a formal expression of requirements as part of an RFP.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate terminology capabilities instances.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUsageContext[]
     */
    public function getUseContext() {
        return $this->useContext;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate terminology capabilities instances.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUsageContext $useContext
     * @return $this
     */
    public function addUseContext($useContext) {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * A legal or geographic region in which the terminology capabilities is intended to be used.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction() {
        return $this->jurisdiction;
    }

    /**
     * A legal or geographic region in which the terminology capabilities is intended to be used.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return $this
     */
    public function addJurisdiction($jurisdiction) {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * Explaination of why this terminology capabilities is needed and why it has been designed as it has.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getPurpose() {
        return $this->purpose;
    }

    /**
     * Explaination of why this terminology capabilities is needed and why it has been designed as it has.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $purpose
     * @return $this
     */
    public function setPurpose($purpose) {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * A copyright statement relating to the terminology capabilities and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the terminology capabilities.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getCopyright() {
        return $this->copyright;
    }

    /**
     * A copyright statement relating to the terminology capabilities and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the terminology capabilities.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $copyright
     * @return $this
     */
    public function setCopyright($copyright) {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * Whether the server supports lockedDate.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getLockedDate() {
        return $this->lockedDate;
    }

    /**
     * Whether the server supports lockedDate.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $lockedDate
     * @return $this
     */
    public function setLockedDate($lockedDate) {
        $this->lockedDate = $lockedDate;
        return $this;
    }

    /**
     * Identifies a code system that is supported by the server. If there is a no code system URL, then this declares the general assumptions a client can make about support for any CodeSystem resource.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesCodeSystem[]
     */
    public function getCodeSystem() {
        return $this->codeSystem;
    }

    /**
     * Identifies a code system that is supported by the server. If there is a no code system URL, then this declares the general assumptions a client can make about support for any CodeSystem resource.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesCodeSystem $codeSystem
     * @return $this
     */
    public function addCodeSystem($codeSystem) {
        $this->codeSystem[] = $codeSystem;
        return $this;
    }

    /**
     * Information about the $expansion operation.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion
     */
    public function getExpansion() {
        return $this->expansion;
    }

    /**
     * Information about the $expansion operation.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion $expansion
     * @return $this
     */
    public function setExpansion($expansion) {
        $this->expansion = $expansion;
        return $this;
    }

    /**
     * The degree to which the server supports the code search parameter on ValueSet, if it is supported.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeSearchSupport
     */
    public function getCodeSearch() {
        return $this->codeSearch;
    }

    /**
     * The degree to which the server supports the code search parameter on ValueSet, if it is supported.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeSearchSupport $codeSearch
     * @return $this
     */
    public function setCodeSearch($codeSearch) {
        $this->codeSearch = $codeSearch;
        return $this;
    }

    /**
     * Information about the $validation operation.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesValidateCode
     */
    public function getValidateCode() {
        return $this->validateCode;
    }

    /**
     * Information about the $validation operation.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesValidateCode $validateCode
     * @return $this
     */
    public function setValidateCode($validateCode) {
        $this->validateCode = $validateCode;
        return $this;
    }

    /**
     * Information about the $translation operation.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesTranslation
     */
    public function getTranslation() {
        return $this->translation;
    }

    /**
     * Information about the $translation operation.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesTranslation $translation
     * @return $this
     */
    public function setTranslation($translation) {
        $this->translation = $translation;
        return $this;
    }

    /**
     * Whether the $closure operation is supported.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesClosure
     */
    public function getClosure() {
        return $this->closure;
    }

    /**
     * Whether the $closure operation is supported.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesClosure $closure
     * @return $this
     */
    public function setClosure($closure) {
        $this->closure = $closure;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
            if (isset($data['version'])) {
                $this->setVersion($data['version']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['title'])) {
                $this->setTitle($data['title']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['experimental'])) {
                $this->setExperimental($data['experimental']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['publisher'])) {
                $this->setPublisher($data['publisher']);
            }
            if (isset($data['contact'])) {
                if (is_array($data['contact'])) {
                    foreach($data['contact'] as $d) {
                        $this->addContact($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"contact" must be array of objects or null, '.gettype($data['contact']).' seen.');
                }
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['useContext'])) {
                if (is_array($data['useContext'])) {
                    foreach($data['useContext'] as $d) {
                        $this->addUseContext($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"useContext" must be array of objects or null, '.gettype($data['useContext']).' seen.');
                }
            }
            if (isset($data['jurisdiction'])) {
                if (is_array($data['jurisdiction'])) {
                    foreach($data['jurisdiction'] as $d) {
                        $this->addJurisdiction($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"jurisdiction" must be array of objects or null, '.gettype($data['jurisdiction']).' seen.');
                }
            }
            if (isset($data['purpose'])) {
                $this->setPurpose($data['purpose']);
            }
            if (isset($data['copyright'])) {
                $this->setCopyright($data['copyright']);
            }
            if (isset($data['lockedDate'])) {
                $this->setLockedDate($data['lockedDate']);
            }
            if (isset($data['codeSystem'])) {
                if (is_array($data['codeSystem'])) {
                    foreach($data['codeSystem'] as $d) {
                        $this->addCodeSystem($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"codeSystem" must be array of objects or null, '.gettype($data['codeSystem']).' seen.');
                }
            }
            if (isset($data['expansion'])) {
                $this->setExpansion($data['expansion']);
            }
            if (isset($data['codeSearch'])) {
                $this->setCodeSearch($data['codeSearch']);
            }
            if (isset($data['validateCode'])) {
                $this->setValidateCode($data['validateCode']);
            }
            if (isset($data['translation'])) {
                $this->setTranslation($data['translation']);
            }
            if (isset($data['closure'])) {
                $this->setClosure($data['closure']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (isset($this->url)) $json['url'] = $this->url;
        if (isset($this->version)) $json['version'] = $this->version;
        if (isset($this->name)) $json['name'] = $this->name;
        if (isset($this->title)) $json['title'] = $this->title;
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->experimental)) $json['experimental'] = $this->experimental;
        if (isset($this->date)) $json['date'] = $this->date;
        if (isset($this->publisher)) $json['publisher'] = $this->publisher;
        if (0 < count($this->contact)) {
            $json['contact'] = [];
            foreach($this->contact as $contact) {
                if (null !== $contact) $json['contact'][] = $contact;
            }
        }
        if (isset($this->description)) $json['description'] = $this->description;
        if (0 < count($this->useContext)) {
            $json['useContext'] = [];
            foreach($this->useContext as $useContext) {
                if (null !== $useContext) $json['useContext'][] = $useContext;
            }
        }
        if (0 < count($this->jurisdiction)) {
            $json['jurisdiction'] = [];
            foreach($this->jurisdiction as $jurisdiction) {
                if (null !== $jurisdiction) $json['jurisdiction'][] = $jurisdiction;
            }
        }
        if (isset($this->purpose)) $json['purpose'] = $this->purpose;
        if (isset($this->copyright)) $json['copyright'] = $this->copyright;
        if (isset($this->lockedDate)) $json['lockedDate'] = $this->lockedDate;
        if (0 < count($this->codeSystem)) {
            $json['codeSystem'] = [];
            foreach($this->codeSystem as $codeSystem) {
                if (null !== $codeSystem) $json['codeSystem'][] = $codeSystem;
            }
        }
        if (isset($this->expansion)) $json['expansion'] = $this->expansion;
        if (isset($this->codeSearch)) $json['codeSearch'] = $this->codeSearch;
        if (isset($this->validateCode)) $json['validateCode'] = $this->validateCode;
        if (isset($this->translation)) $json['translation'] = $this->translation;
        if (isset($this->closure)) $json['closure'] = $this->closure;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<TerminologyCapabilities xmlns="http://hl7.org/fhir"></TerminologyCapabilities>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->url)) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (isset($this->version)) $this->version->xmlSerialize(true, $sxe->addChild('version'));
        if (isset($this->name)) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (isset($this->title)) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->experimental)) $this->experimental->xmlSerialize(true, $sxe->addChild('experimental'));
        if (isset($this->date)) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (isset($this->publisher)) $this->publisher->xmlSerialize(true, $sxe->addChild('publisher'));
        if (0 < count($this->contact)) {
            foreach($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->useContext)) {
            foreach($this->useContext as $useContext) {
                $useContext->xmlSerialize(true, $sxe->addChild('useContext'));
            }
        }
        if (0 < count($this->jurisdiction)) {
            foreach($this->jurisdiction as $jurisdiction) {
                $jurisdiction->xmlSerialize(true, $sxe->addChild('jurisdiction'));
            }
        }
        if (isset($this->purpose)) $this->purpose->xmlSerialize(true, $sxe->addChild('purpose'));
        if (isset($this->copyright)) $this->copyright->xmlSerialize(true, $sxe->addChild('copyright'));
        if (isset($this->lockedDate)) $this->lockedDate->xmlSerialize(true, $sxe->addChild('lockedDate'));
        if (0 < count($this->codeSystem)) {
            foreach($this->codeSystem as $codeSystem) {
                $codeSystem->xmlSerialize(true, $sxe->addChild('codeSystem'));
            }
        }
        if (isset($this->expansion)) $this->expansion->xmlSerialize(true, $sxe->addChild('expansion'));
        if (isset($this->codeSearch)) $this->codeSearch->xmlSerialize(true, $sxe->addChild('codeSearch'));
        if (isset($this->validateCode)) $this->validateCode->xmlSerialize(true, $sxe->addChild('validateCode'));
        if (isset($this->translation)) $this->translation->xmlSerialize(true, $sxe->addChild('translation'));
        if (isset($this->closure)) $this->closure->xmlSerialize(true, $sxe->addChild('closure'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}