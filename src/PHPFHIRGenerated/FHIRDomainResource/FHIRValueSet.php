<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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

/**
 * A value set specifies a set of codes drawn from one or more code systems.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRValueSet extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * An absolute URL that is used to identify this value set when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this value set is (or will be) published.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * Formal identifier that is used to identify this value set when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Used to identify this version of the value set when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the profile author manually and the value should be a timestamp.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A free text natural language name describing the value set.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The status of the value set.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $status = null;

    /**
     * This valueset was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The name of the individual or organization that published the value set.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetContact[]
     */
    public $contact = array();

    /**
     * The date that the value set status was last changed. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the implementation guide changes (e.g. the 'content logical definition').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * If a locked date is defined, then the Content Logical Definition must be evaluated using the current version of all referenced code system(s) and value set instances as of the locked date.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $lockedDate = null;

    /**
     * A free text natural language description of the use of the value set - reason for definition, "the semantic space" to be included in the value set, conditions of use, etc. The description may include a list of expected usages for the value set and can also describe the approach taken to build the value set.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of value set definitions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $useContext = array();

    /**
     * If this is set to 'true', then no new versions of the content logical definition can be created.  Note: Other metadata might still change.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $immutable = null;

    /**
     * Explains why this value set is needed and why it has been constrained as it has.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $requirements = null;

    /**
     * A copyright statement relating to the value set and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the value set.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $copyright = null;

    /**
     * Whether this is intended to be used with an extensible binding or not.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $extensible = null;

    /**
     * A definition of a code system, inlined into the value set (as a packaging convenience). Note that the inline code system may be used from other value sets by referring to its (codeSystem.system) directly.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetCodeSystem
     */
    public $codeSystem = null;

    /**
     * A set of criteria that provide the content logical definition of the value set by including or excluding codes from outside this value set.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetCompose
     */
    public $compose = null;

    /**
     * A value set can also be "expanded", where the value set is turned into a simple collection of enumerated codes. This element holds the expansion, if it has been performed.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetExpansion
     */
    public $expansion = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ValueSet';

    /**
     * An absolute URL that is used to identify this value set when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this value set is (or will be) published.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * An absolute URL that is used to identify this value set when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this value set is (or will be) published.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Formal identifier that is used to identify this value set when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Formal identifier that is used to identify this value set when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Used to identify this version of the value set when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the profile author manually and the value should be a timestamp.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Used to identify this version of the value set when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the profile author manually and the value should be a timestamp.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * A free text natural language name describing the value set.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A free text natural language name describing the value set.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The status of the value set.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the value set.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * This valueset was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * This valueset was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $experimental
     * @return $this
     */
    public function setExperimental($experimental)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * The name of the individual or organization that published the value set.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * The name of the individual or organization that published the value set.
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
     * @return \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetContact $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * The date that the value set status was last changed. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the implementation guide changes (e.g. the 'content logical definition').
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date that the value set status was last changed. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the implementation guide changes (e.g. the 'content logical definition').
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * If a locked date is defined, then the Content Logical Definition must be evaluated using the current version of all referenced code system(s) and value set instances as of the locked date.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getLockedDate()
    {
        return $this->lockedDate;
    }

    /**
     * If a locked date is defined, then the Content Logical Definition must be evaluated using the current version of all referenced code system(s) and value set instances as of the locked date.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $lockedDate
     * @return $this
     */
    public function setLockedDate($lockedDate)
    {
        $this->lockedDate = $lockedDate;
        return $this;
    }

    /**
     * A free text natural language description of the use of the value set - reason for definition, "the semantic space" to be included in the value set, conditions of use, etc. The description may include a list of expected usages for the value set and can also describe the approach taken to build the value set.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A free text natural language description of the use of the value set - reason for definition, "the semantic space" to be included in the value set, conditions of use, etc. The description may include a list of expected usages for the value set and can also describe the approach taken to build the value set.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of value set definitions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of value set definitions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $useContext
     * @return $this
     */
    public function addUseContext($useContext)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * If this is set to 'true', then no new versions of the content logical definition can be created.  Note: Other metadata might still change.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getImmutable()
    {
        return $this->immutable;
    }

    /**
     * If this is set to 'true', then no new versions of the content logical definition can be created.  Note: Other metadata might still change.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $immutable
     * @return $this
     */
    public function setImmutable($immutable)
    {
        $this->immutable = $immutable;
        return $this;
    }

    /**
     * Explains why this value set is needed and why it has been constrained as it has.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * Explains why this value set is needed and why it has been constrained as it has.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $requirements
     * @return $this
     */
    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * A copyright statement relating to the value set and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the value set.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * A copyright statement relating to the value set and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the value set.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $copyright
     * @return $this
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * Whether this is intended to be used with an extensible binding or not.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExtensible()
    {
        return $this->extensible;
    }

    /**
     * Whether this is intended to be used with an extensible binding or not.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $extensible
     * @return $this
     */
    public function setExtensible($extensible)
    {
        $this->extensible = $extensible;
        return $this;
    }

    /**
     * A definition of a code system, inlined into the value set (as a packaging convenience). Note that the inline code system may be used from other value sets by referring to its (codeSystem.system) directly.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetCodeSystem
     */
    public function getCodeSystem()
    {
        return $this->codeSystem;
    }

    /**
     * A definition of a code system, inlined into the value set (as a packaging convenience). Note that the inline code system may be used from other value sets by referring to its (codeSystem.system) directly.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetCodeSystem $codeSystem
     * @return $this
     */
    public function setCodeSystem($codeSystem)
    {
        $this->codeSystem = $codeSystem;
        return $this;
    }

    /**
     * A set of criteria that provide the content logical definition of the value set by including or excluding codes from outside this value set.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetCompose
     */
    public function getCompose()
    {
        return $this->compose;
    }

    /**
     * A set of criteria that provide the content logical definition of the value set by including or excluding codes from outside this value set.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetCompose $compose
     * @return $this
     */
    public function setCompose($compose)
    {
        $this->compose = $compose;
        return $this;
    }

    /**
     * A value set can also be "expanded", where the value set is turned into a simple collection of enumerated codes. This element holds the expansion, if it has been performed.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetExpansion
     */
    public function getExpansion()
    {
        return $this->expansion;
    }

    /**
     * A value set can also be "expanded", where the value set is turned into a simple collection of enumerated codes. This element holds the expansion, if it has been performed.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetExpansion $expansion
     * @return $this
     */
    public function setExpansion($expansion)
    {
        $this->expansion = $expansion;
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
        if (null !== $this->url) $json['url'] = json_encode($this->url);
        if (null !== $this->identifier) $json['identifier'] = json_encode($this->identifier);
        if (null !== $this->version) $json['version'] = json_encode($this->version);
        if (null !== $this->name) $json['name'] = json_encode($this->name);
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->experimental) $json['experimental'] = json_encode($this->experimental);
        if (null !== $this->publisher) $json['publisher'] = json_encode($this->publisher);
        if (0 < count($this->contact)) {
            $json['contact'] = [];
            foreach($this->contact as $contact) {
                $json['contact'][] = json_encode($contact);
            }
        }
        if (null !== $this->date) $json['date'] = json_encode($this->date);
        if (null !== $this->lockedDate) $json['lockedDate'] = json_encode($this->lockedDate);
        if (null !== $this->description) $json['description'] = json_encode($this->description);
        if (0 < count($this->useContext)) {
            $json['useContext'] = [];
            foreach($this->useContext as $useContext) {
                $json['useContext'][] = json_encode($useContext);
            }
        }
        if (null !== $this->immutable) $json['immutable'] = json_encode($this->immutable);
        if (null !== $this->requirements) $json['requirements'] = json_encode($this->requirements);
        if (null !== $this->copyright) $json['copyright'] = json_encode($this->copyright);
        if (null !== $this->extensible) $json['extensible'] = json_encode($this->extensible);
        if (null !== $this->codeSystem) $json['codeSystem'] = json_encode($this->codeSystem);
        if (null !== $this->compose) $json['compose'] = json_encode($this->compose);
        if (null !== $this->expansion) $json['expansion'] = json_encode($this->expansion);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ValueSet xmlns="http://hl7.org/fhir"></ValueSet>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->url) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->version) $this->version->xmlSerialize(true, $sxe->addChild('version'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->experimental) $this->experimental->xmlSerialize(true, $sxe->addChild('experimental'));
        if (null !== $this->publisher) $this->publisher->xmlSerialize(true, $sxe->addChild('publisher'));
        if (0 < count($this->contact)) {
            foreach($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->lockedDate) $this->lockedDate->xmlSerialize(true, $sxe->addChild('lockedDate'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->useContext)) {
            foreach($this->useContext as $useContext) {
                $useContext->xmlSerialize(true, $sxe->addChild('useContext'));
            }
        }
        if (null !== $this->immutable) $this->immutable->xmlSerialize(true, $sxe->addChild('immutable'));
        if (null !== $this->requirements) $this->requirements->xmlSerialize(true, $sxe->addChild('requirements'));
        if (null !== $this->copyright) $this->copyright->xmlSerialize(true, $sxe->addChild('copyright'));
        if (null !== $this->extensible) $this->extensible->xmlSerialize(true, $sxe->addChild('extensible'));
        if (null !== $this->codeSystem) $this->codeSystem->xmlSerialize(true, $sxe->addChild('codeSystem'));
        if (null !== $this->compose) $this->compose->xmlSerialize(true, $sxe->addChild('compose'));
        if (null !== $this->expansion) $this->expansion->xmlSerialize(true, $sxe->addChild('expansion'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}