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
 * A formal computable definition of an operation (on the RESTful interface) or a named query (using the search interaction).
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIROperationDefinition extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * An absolute URL that is used to identify this operation definition when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this operation definition is (or will be) published.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * The identifier that is used to identify this version of the profile when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the profile author manually and the value should be a timestamp.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A free text natural language name identifying the operation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The status of the profile.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $status = null;

    /**
     * Whether this is an operation or a named query.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROperationKind
     */
    public $kind = null;

    /**
     * This profile was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The name of the individual or organization that published the operation definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionContact[]
     */
    public $contact = array();

    /**
     * The date this version of the operation definition was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the Operation Definition changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * A free text natural language description of the profile and its use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Explains why this operation definition is needed and why it's been constrained as it has.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $requirements = null;

    /**
     * Operations that are idempotent (see [HTTP specification definition of idempotent](http://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html)) may be invoked by performing an HTTP GET operation instead of a POST.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $idempotent = null;

    /**
     * The name used to invoke the operation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $code = null;

    /**
     * Additional information about how to use this operation or named query.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $notes = null;

    /**
     * Indicates that this operation definition is a constraining profile on the base.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $base = null;

    /**
     * Indicates whether this operation or named query can be invoked at the system level (e.g. without needing to choose a resource type for the context).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $system = null;

    /**
     * Indicates whether this operation or named query can be invoked at the resource type level for any given resource type level (e.g. without needing to choose a resource type for the context).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public $type = array();

    /**
     * Indicates whether this operation can be invoked on a particular instance of one of the given types.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $instance = null;

    /**
     * The parameters for the operation/query.
     * @var \PHPFHIRGenerated\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionParameter[]
     */
    public $parameter = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'OperationDefinition';

    /**
     * An absolute URL that is used to identify this operation definition when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this operation definition is (or will be) published.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * An absolute URL that is used to identify this operation definition when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this operation definition is (or will be) published.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the profile when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the profile author manually and the value should be a timestamp.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The identifier that is used to identify this version of the profile when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the profile author manually and the value should be a timestamp.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * A free text natural language name identifying the operation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A free text natural language name identifying the operation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The status of the profile.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the profile.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Whether this is an operation or a named query.
     * @return \PHPFHIRGenerated\FHIRElement\FHIROperationKind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Whether this is an operation or a named query.
     * @param \PHPFHIRGenerated\FHIRElement\FHIROperationKind $kind
     * @return $this
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * This profile was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * This profile was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $experimental
     * @return $this
     */
    public function setExperimental($experimental)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * The name of the individual or organization that published the operation definition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * The name of the individual or organization that published the operation definition.
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
     * @return \PHPFHIRGenerated\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @param \PHPFHIRGenerated\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionContact $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * The date this version of the operation definition was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the Operation Definition changes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date this version of the operation definition was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the Operation Definition changes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * A free text natural language description of the profile and its use.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A free text natural language description of the profile and its use.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Explains why this operation definition is needed and why it's been constrained as it has.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * Explains why this operation definition is needed and why it's been constrained as it has.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $requirements
     * @return $this
     */
    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * Operations that are idempotent (see [HTTP specification definition of idempotent](http://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html)) may be invoked by performing an HTTP GET operation instead of a POST.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIdempotent()
    {
        return $this->idempotent;
    }

    /**
     * Operations that are idempotent (see [HTTP specification definition of idempotent](http://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html)) may be invoked by performing an HTTP GET operation instead of a POST.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $idempotent
     * @return $this
     */
    public function setIdempotent($idempotent)
    {
        $this->idempotent = $idempotent;
        return $this;
    }

    /**
     * The name used to invoke the operation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * The name used to invoke the operation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Additional information about how to use this operation or named query.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Additional information about how to use this operation or named query.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $notes
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * Indicates that this operation definition is a constraining profile on the base.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Indicates that this operation definition is a constraining profile on the base.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $base
     * @return $this
     */
    public function setBase($base)
    {
        $this->base = $base;
        return $this;
    }

    /**
     * Indicates whether this operation or named query can be invoked at the system level (e.g. without needing to choose a resource type for the context).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Indicates whether this operation or named query can be invoked at the system level (e.g. without needing to choose a resource type for the context).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $system
     * @return $this
     */
    public function setSystem($system)
    {
        $this->system = $system;
        return $this;
    }

    /**
     * Indicates whether this operation or named query can be invoked at the resource type level for any given resource type level (e.g. without needing to choose a resource type for the context).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Indicates whether this operation or named query can be invoked at the resource type level for any given resource type level (e.g. without needing to choose a resource type for the context).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $type
     * @return $this
     */
    public function addType($type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * Indicates whether this operation can be invoked on a particular instance of one of the given types.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Indicates whether this operation can be invoked on a particular instance of one of the given types.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $instance
     * @return $this
     */
    public function setInstance($instance)
    {
        $this->instance = $instance;
        return $this;
    }

    /**
     * The parameters for the operation/query.
     * @return \PHPFHIRGenerated\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionParameter[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * The parameters for the operation/query.
     * @param \PHPFHIRGenerated\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionParameter $parameter
     * @return $this
     */
    public function addParameter($parameter)
    {
        $this->parameter[] = $parameter;
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
        if (null !== $this->version) $json['version'] = json_encode($this->version);
        if (null !== $this->name) $json['name'] = json_encode($this->name);
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->kind) $json['kind'] = json_encode($this->kind);
        if (null !== $this->experimental) $json['experimental'] = json_encode($this->experimental);
        if (null !== $this->publisher) $json['publisher'] = json_encode($this->publisher);
        if (0 < count($this->contact)) {
            $json['contact'] = [];
            foreach($this->contact as $contact) {
                $json['contact'][] = json_encode($contact);
            }
        }
        if (null !== $this->date) $json['date'] = json_encode($this->date);
        if (null !== $this->description) $json['description'] = json_encode($this->description);
        if (null !== $this->requirements) $json['requirements'] = json_encode($this->requirements);
        if (null !== $this->idempotent) $json['idempotent'] = json_encode($this->idempotent);
        if (null !== $this->code) $json['code'] = json_encode($this->code);
        if (null !== $this->notes) $json['notes'] = json_encode($this->notes);
        if (null !== $this->base) $json['base'] = json_encode($this->base);
        if (null !== $this->system) $json['system'] = json_encode($this->system);
        if (0 < count($this->type)) {
            $json['type'] = [];
            foreach($this->type as $type) {
                $json['type'][] = json_encode($type);
            }
        }
        if (null !== $this->instance) $json['instance'] = json_encode($this->instance);
        if (0 < count($this->parameter)) {
            $json['parameter'] = [];
            foreach($this->parameter as $parameter) {
                $json['parameter'][] = json_encode($parameter);
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<OperationDefinition xmlns="http://hl7.org/fhir"></OperationDefinition>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->url) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (null !== $this->version) $this->version->xmlSerialize(true, $sxe->addChild('version'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->kind) $this->kind->xmlSerialize(true, $sxe->addChild('kind'));
        if (null !== $this->experimental) $this->experimental->xmlSerialize(true, $sxe->addChild('experimental'));
        if (null !== $this->publisher) $this->publisher->xmlSerialize(true, $sxe->addChild('publisher'));
        if (0 < count($this->contact)) {
            foreach($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->requirements) $this->requirements->xmlSerialize(true, $sxe->addChild('requirements'));
        if (null !== $this->idempotent) $this->idempotent->xmlSerialize(true, $sxe->addChild('idempotent'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->notes) $this->notes->xmlSerialize(true, $sxe->addChild('notes'));
        if (null !== $this->base) $this->base->xmlSerialize(true, $sxe->addChild('base'));
        if (null !== $this->system) $this->system->xmlSerialize(true, $sxe->addChild('system'));
        if (0 < count($this->type)) {
            foreach($this->type as $type) {
                $type->xmlSerialize(true, $sxe->addChild('type'));
            }
        }
        if (null !== $this->instance) $this->instance->xmlSerialize(true, $sxe->addChild('instance'));
        if (0 < count($this->parameter)) {
            foreach($this->parameter as $parameter) {
                $parameter->xmlSerialize(true, $sxe->addChild('parameter'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}