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
 * Resource to define constraints on the Expansion of a FHIR ValueSet.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRExpansionProfile extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * An absolute URI that is used to identify this expansion profile when it is referenced in a specification, model, design or an instance. This SHOULD be globally unique, and SHOULD be a literal address at which this expansion profile is (or will be) published.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * A formal identifier that is used to identify this expansion profile when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The identifier that is used to identify this version of the expansion profile when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the expansion profile author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A natural language name identifying the expansion profile. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The status of this expansion profile. Enables tracking the life-cycle of the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * A boolean value to indicate that this expansion profile is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The date  (and optionally time) when the expansion profile was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the expansion profile changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * The name of the individual or organization that published the expansion profile.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail[]
     */
    public $contact = [];

    /**
     * A free text natural language description of the expansion profile from a consumer's perspective.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate expansion profile instances.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUsageContext[]
     */
    public $useContext = [];

    /**
     * A legal or geographic region in which the expansion profile is intended to be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $jurisdiction = [];

    /**
     * Fix use of a particular code system to a particular version.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion[]
     */
    public $fixedVersion = [];

    /**
     * Code system, or a particular version of a code system to be excluded from value set expansions.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRExpansionProfile\FHIRExpansionProfileExcludedSystem
     */
    public $excludedSystem = null;

    /**
     * Controls whether concept designations are to be included or excluded in value set expansions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $includeDesignations = null;

    /**
     * A set of criteria that provide the constraints imposed on the value set expansion by including or excluding designations.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRExpansionProfile\FHIRExpansionProfileDesignation
     */
    public $designation = null;

    /**
     * Controls whether the value set definition is included or excluded in value set expansions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $includeDefinition = null;

    /**
     * Controls whether inactive concepts are included or excluded in value set expansions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $activeOnly = null;

    /**
     * Controls whether or not the value set expansion nests codes or not (i.e. ValueSet.expansion.contains.contains).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $excludeNested = null;

    /**
     * Controls whether or not the value set expansion includes codes which cannot be displayed in user interfaces.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $excludeNotForUI = null;

    /**
     * Controls whether or not the value set expansion includes post coordinated codes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $excludePostCoordinated = null;

    /**
     * Specifies the language to be used for description in the expansions i.e. the language to be used for ValueSet.expansion.contains.display.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $displayLanguage = null;

    /**
     * If the value set being expanded is incomplete (because it is too big to expand), return a limited expansion (a subset) with an indicator that expansion is incomplete, using the extension [http://hl7.org/fhir/StructureDefinition/valueset-toocostly](extension-valueset-toocostly.html).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $limitedExpansion = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ExpansionProfile';

    /**
     * An absolute URI that is used to identify this expansion profile when it is referenced in a specification, model, design or an instance. This SHOULD be globally unique, and SHOULD be a literal address at which this expansion profile is (or will be) published.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * An absolute URI that is used to identify this expansion profile when it is referenced in a specification, model, design or an instance. This SHOULD be globally unique, and SHOULD be a literal address at which this expansion profile is (or will be) published.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    /**
     * A formal identifier that is used to identify this expansion profile when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * A formal identifier that is used to identify this expansion profile when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the expansion profile when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the expansion profile author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion() {
        return $this->version;
    }

    /**
     * The identifier that is used to identify this version of the expansion profile when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the expansion profile author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version) {
        $this->version = $version;
        return $this;
    }

    /**
     * A natural language name identifying the expansion profile. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName() {
        return $this->name;
    }

    /**
     * A natural language name identifying the expansion profile. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * The status of this expansion profile. Enables tracking the life-cycle of the content.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The status of this expansion profile. Enables tracking the life-cycle of the content.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * A boolean value to indicate that this expansion profile is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental() {
        return $this->experimental;
    }

    /**
     * A boolean value to indicate that this expansion profile is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $experimental
     * @return $this
     */
    public function setExperimental($experimental) {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * The date  (and optionally time) when the expansion profile was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the expansion profile changes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * The date  (and optionally time) when the expansion profile was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the expansion profile changes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    /**
     * The name of the individual or organization that published the expansion profile.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher() {
        return $this->publisher;
    }

    /**
     * The name of the individual or organization that published the expansion profile.
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
     * A free text natural language description of the expansion profile from a consumer's perspective.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * A free text natural language description of the expansion profile from a consumer's perspective.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate expansion profile instances.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUsageContext[]
     */
    public function getUseContext() {
        return $this->useContext;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate expansion profile instances.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUsageContext $useContext
     * @return $this
     */
    public function addUseContext($useContext) {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * A legal or geographic region in which the expansion profile is intended to be used.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction() {
        return $this->jurisdiction;
    }

    /**
     * A legal or geographic region in which the expansion profile is intended to be used.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return $this
     */
    public function addJurisdiction($jurisdiction) {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * Fix use of a particular code system to a particular version.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion[]
     */
    public function getFixedVersion() {
        return $this->fixedVersion;
    }

    /**
     * Fix use of a particular code system to a particular version.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion $fixedVersion
     * @return $this
     */
    public function addFixedVersion($fixedVersion) {
        $this->fixedVersion[] = $fixedVersion;
        return $this;
    }

    /**
     * Code system, or a particular version of a code system to be excluded from value set expansions.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRExpansionProfile\FHIRExpansionProfileExcludedSystem
     */
    public function getExcludedSystem() {
        return $this->excludedSystem;
    }

    /**
     * Code system, or a particular version of a code system to be excluded from value set expansions.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRExpansionProfile\FHIRExpansionProfileExcludedSystem $excludedSystem
     * @return $this
     */
    public function setExcludedSystem($excludedSystem) {
        $this->excludedSystem = $excludedSystem;
        return $this;
    }

    /**
     * Controls whether concept designations are to be included or excluded in value set expansions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIncludeDesignations() {
        return $this->includeDesignations;
    }

    /**
     * Controls whether concept designations are to be included or excluded in value set expansions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $includeDesignations
     * @return $this
     */
    public function setIncludeDesignations($includeDesignations) {
        $this->includeDesignations = $includeDesignations;
        return $this;
    }

    /**
     * A set of criteria that provide the constraints imposed on the value set expansion by including or excluding designations.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRExpansionProfile\FHIRExpansionProfileDesignation
     */
    public function getDesignation() {
        return $this->designation;
    }

    /**
     * A set of criteria that provide the constraints imposed on the value set expansion by including or excluding designations.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRExpansionProfile\FHIRExpansionProfileDesignation $designation
     * @return $this
     */
    public function setDesignation($designation) {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Controls whether the value set definition is included or excluded in value set expansions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIncludeDefinition() {
        return $this->includeDefinition;
    }

    /**
     * Controls whether the value set definition is included or excluded in value set expansions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $includeDefinition
     * @return $this
     */
    public function setIncludeDefinition($includeDefinition) {
        $this->includeDefinition = $includeDefinition;
        return $this;
    }

    /**
     * Controls whether inactive concepts are included or excluded in value set expansions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getActiveOnly() {
        return $this->activeOnly;
    }

    /**
     * Controls whether inactive concepts are included or excluded in value set expansions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $activeOnly
     * @return $this
     */
    public function setActiveOnly($activeOnly) {
        $this->activeOnly = $activeOnly;
        return $this;
    }

    /**
     * Controls whether or not the value set expansion nests codes or not (i.e. ValueSet.expansion.contains.contains).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExcludeNested() {
        return $this->excludeNested;
    }

    /**
     * Controls whether or not the value set expansion nests codes or not (i.e. ValueSet.expansion.contains.contains).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $excludeNested
     * @return $this
     */
    public function setExcludeNested($excludeNested) {
        $this->excludeNested = $excludeNested;
        return $this;
    }

    /**
     * Controls whether or not the value set expansion includes codes which cannot be displayed in user interfaces.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExcludeNotForUI() {
        return $this->excludeNotForUI;
    }

    /**
     * Controls whether or not the value set expansion includes codes which cannot be displayed in user interfaces.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $excludeNotForUI
     * @return $this
     */
    public function setExcludeNotForUI($excludeNotForUI) {
        $this->excludeNotForUI = $excludeNotForUI;
        return $this;
    }

    /**
     * Controls whether or not the value set expansion includes post coordinated codes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExcludePostCoordinated() {
        return $this->excludePostCoordinated;
    }

    /**
     * Controls whether or not the value set expansion includes post coordinated codes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $excludePostCoordinated
     * @return $this
     */
    public function setExcludePostCoordinated($excludePostCoordinated) {
        $this->excludePostCoordinated = $excludePostCoordinated;
        return $this;
    }

    /**
     * Specifies the language to be used for description in the expansions i.e. the language to be used for ValueSet.expansion.contains.display.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getDisplayLanguage() {
        return $this->displayLanguage;
    }

    /**
     * Specifies the language to be used for description in the expansions i.e. the language to be used for ValueSet.expansion.contains.display.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $displayLanguage
     * @return $this
     */
    public function setDisplayLanguage($displayLanguage) {
        $this->displayLanguage = $displayLanguage;
        return $this;
    }

    /**
     * If the value set being expanded is incomplete (because it is too big to expand), return a limited expansion (a subset) with an indicator that expansion is incomplete, using the extension [http://hl7.org/fhir/StructureDefinition/valueset-toocostly](extension-valueset-toocostly.html).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getLimitedExpansion() {
        return $this->limitedExpansion;
    }

    /**
     * If the value set being expanded is incomplete (because it is too big to expand), return a limited expansion (a subset) with an indicator that expansion is incomplete, using the extension [http://hl7.org/fhir/StructureDefinition/valueset-toocostly](extension-valueset-toocostly.html).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $limitedExpansion
     * @return $this
     */
    public function setLimitedExpansion($limitedExpansion) {
        $this->limitedExpansion = $limitedExpansion;
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
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['version'])) {
                $this->setVersion($data['version']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
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
            if (isset($data['fixedVersion'])) {
                if (is_array($data['fixedVersion'])) {
                    foreach($data['fixedVersion'] as $d) {
                        $this->addFixedVersion($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"fixedVersion" must be array of objects or null, '.gettype($data['fixedVersion']).' seen.');
                }
            }
            if (isset($data['excludedSystem'])) {
                $this->setExcludedSystem($data['excludedSystem']);
            }
            if (isset($data['includeDesignations'])) {
                $this->setIncludeDesignations($data['includeDesignations']);
            }
            if (isset($data['designation'])) {
                $this->setDesignation($data['designation']);
            }
            if (isset($data['includeDefinition'])) {
                $this->setIncludeDefinition($data['includeDefinition']);
            }
            if (isset($data['activeOnly'])) {
                $this->setActiveOnly($data['activeOnly']);
            }
            if (isset($data['excludeNested'])) {
                $this->setExcludeNested($data['excludeNested']);
            }
            if (isset($data['excludeNotForUI'])) {
                $this->setExcludeNotForUI($data['excludeNotForUI']);
            }
            if (isset($data['excludePostCoordinated'])) {
                $this->setExcludePostCoordinated($data['excludePostCoordinated']);
            }
            if (isset($data['displayLanguage'])) {
                $this->setDisplayLanguage($data['displayLanguage']);
            }
            if (isset($data['limitedExpansion'])) {
                $this->setLimitedExpansion($data['limitedExpansion']);
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
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
        if (isset($this->version)) $json['version'] = $this->version;
        if (isset($this->name)) $json['name'] = $this->name;
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
        if (0 < count($this->fixedVersion)) {
            $json['fixedVersion'] = [];
            foreach($this->fixedVersion as $fixedVersion) {
                if (null !== $fixedVersion) $json['fixedVersion'][] = $fixedVersion;
            }
        }
        if (isset($this->excludedSystem)) $json['excludedSystem'] = $this->excludedSystem;
        if (isset($this->includeDesignations)) $json['includeDesignations'] = $this->includeDesignations;
        if (isset($this->designation)) $json['designation'] = $this->designation;
        if (isset($this->includeDefinition)) $json['includeDefinition'] = $this->includeDefinition;
        if (isset($this->activeOnly)) $json['activeOnly'] = $this->activeOnly;
        if (isset($this->excludeNested)) $json['excludeNested'] = $this->excludeNested;
        if (isset($this->excludeNotForUI)) $json['excludeNotForUI'] = $this->excludeNotForUI;
        if (isset($this->excludePostCoordinated)) $json['excludePostCoordinated'] = $this->excludePostCoordinated;
        if (isset($this->displayLanguage)) $json['displayLanguage'] = $this->displayLanguage;
        if (isset($this->limitedExpansion)) $json['limitedExpansion'] = $this->limitedExpansion;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ExpansionProfile xmlns="http://hl7.org/fhir"></ExpansionProfile>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->url)) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->version)) $this->version->xmlSerialize(true, $sxe->addChild('version'));
        if (isset($this->name)) $this->name->xmlSerialize(true, $sxe->addChild('name'));
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
        if (0 < count($this->fixedVersion)) {
            foreach($this->fixedVersion as $fixedVersion) {
                $fixedVersion->xmlSerialize(true, $sxe->addChild('fixedVersion'));
            }
        }
        if (isset($this->excludedSystem)) $this->excludedSystem->xmlSerialize(true, $sxe->addChild('excludedSystem'));
        if (isset($this->includeDesignations)) $this->includeDesignations->xmlSerialize(true, $sxe->addChild('includeDesignations'));
        if (isset($this->designation)) $this->designation->xmlSerialize(true, $sxe->addChild('designation'));
        if (isset($this->includeDefinition)) $this->includeDefinition->xmlSerialize(true, $sxe->addChild('includeDefinition'));
        if (isset($this->activeOnly)) $this->activeOnly->xmlSerialize(true, $sxe->addChild('activeOnly'));
        if (isset($this->excludeNested)) $this->excludeNested->xmlSerialize(true, $sxe->addChild('excludeNested'));
        if (isset($this->excludeNotForUI)) $this->excludeNotForUI->xmlSerialize(true, $sxe->addChild('excludeNotForUI'));
        if (isset($this->excludePostCoordinated)) $this->excludePostCoordinated->xmlSerialize(true, $sxe->addChild('excludePostCoordinated'));
        if (isset($this->displayLanguage)) $this->displayLanguage->xmlSerialize(true, $sxe->addChild('displayLanguage'));
        if (isset($this->limitedExpansion)) $this->limitedExpansion->xmlSerialize(true, $sxe->addChild('limitedExpansion'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}