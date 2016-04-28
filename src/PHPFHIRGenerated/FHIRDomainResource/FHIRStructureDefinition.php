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
 * A definition of a FHIR structure. This resource is used to describe the underlying resources, data types defined in FHIR, and also for describing extensions, and constraints on resources and data types.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRStructureDefinition extends FHIRDomainResource implements JsonSerializable
{
    /**
     * An absolute URL that is used to identify this structure definition when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this structure definition is (or will be) published.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * Formal identifier that is used to identify this StructureDefinition when it is represented in other formats, or referenced in a specification, model, design or an instance  (should be globally unique OID, UUID, or URI), (if it's not possible to use the literal URI).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The identifier that is used to identify this version of the StructureDefinition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the StructureDefinition author manually.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A free text natural language name identifying the StructureDefinition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Defined so that applications can use this name when displaying the value of the extension to the user.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $display = null;

    /**
     * The status of the StructureDefinition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $status = null;

    /**
     * This StructureDefinition was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The name of the individual or organization that published the structure definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRStructureDefinition\FHIRStructureDefinitionContact[]
     */
    public $contact = array();

    /**
     * The date this version of the structure definition was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the structure definition changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * A free text natural language description of the StructureDefinition and its use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of structure definitions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $useContext = array();

    /**
     * Explains why this structure definition is needed and why it's been constrained as it has.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $requirements = null;

    /**
     * A copyright statement relating to the structure definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the details of the constraints and mappings.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $copyright = null;

    /**
     * A set of terms from external terminologies that may be used to assist with indexing and searching of templates.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $code = array();

    /**
     * The version of the FHIR specification on which this StructureDefinition is based - this is the formal version of the specification, without the revision number, e.g. [publication].[major].[minor], which is 1.0.2 for this version.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $fhirVersion = null;

    /**
     * An external specification that the content is mapped to.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRStructureDefinition\FHIRStructureDefinitionMapping[]
     */
    public $mapping = array();

    /**
     * Defines the kind of structure that this definition is describing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRStructureDefinitionKind
     */
    public $kind = null;

    /**
     * The type of type that is being constrained - a data type, an extension, a resource, including abstract ones. If this field is present, it indicates that the structure definition is a constraint. If it is not present, then the structure definition is the definition of a base structure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $constrainedType = null;

    /**
     * Whether structure this definition describes is abstract or not  - that is, whether an actual exchanged item can ever be of this type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $abstract = null;

    /**
     * If this is an extension, Identifies the context within FHIR resources where the extension can be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExtensionContext
     */
    public $contextType = null;

    /**
     * Identifies the types of resource or data type elements to which the extension can be applied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $context = array();

    /**
     * An absolute URI that is the base structure from which this set of constraints is derived.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $base = null;

    /**
     * A snapshot view is expressed in a stand alone form that can be used and interpreted without considering the base StructureDefinition.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot
     */
    public $snapshot = null;

    /**
     * A differential view is expressed relative to the base StructureDefinition - a statement of differences that it applies.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRStructureDefinition\FHIRStructureDefinitionDifferential
     */
    public $differential = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'StructureDefinition';

    /**
     * An absolute URL that is used to identify this structure definition when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this structure definition is (or will be) published.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * An absolute URL that is used to identify this structure definition when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this structure definition is (or will be) published.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Formal identifier that is used to identify this StructureDefinition when it is represented in other formats, or referenced in a specification, model, design or an instance  (should be globally unique OID, UUID, or URI), (if it's not possible to use the literal URI).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Formal identifier that is used to identify this StructureDefinition when it is represented in other formats, or referenced in a specification, model, design or an instance  (should be globally unique OID, UUID, or URI), (if it's not possible to use the literal URI).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the StructureDefinition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the StructureDefinition author manually.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The identifier that is used to identify this version of the StructureDefinition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the StructureDefinition author manually.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * A free text natural language name identifying the StructureDefinition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A free text natural language name identifying the StructureDefinition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Defined so that applications can use this name when displaying the value of the extension to the user.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Defined so that applications can use this name when displaying the value of the extension to the user.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $display
     * @return $this
     */
    public function setDisplay($display)
    {
        $this->display = $display;
        return $this;
    }

    /**
     * The status of the StructureDefinition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the StructureDefinition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * This StructureDefinition was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * This StructureDefinition was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $experimental
     * @return $this
     */
    public function setExperimental($experimental)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * The name of the individual or organization that published the structure definition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * The name of the individual or organization that published the structure definition.
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
     * @return \PHPFHIRGenerated\FHIRResource\FHIRStructureDefinition\FHIRStructureDefinitionContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRStructureDefinition\FHIRStructureDefinitionContact[] $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * The date this version of the structure definition was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the structure definition changes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date this version of the structure definition was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the structure definition changes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * A free text natural language description of the StructureDefinition and its use.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A free text natural language description of the StructureDefinition and its use.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of structure definitions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of structure definitions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $useContext
     * @return $this
     */
    public function addUseContext($useContext)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * Explains why this structure definition is needed and why it's been constrained as it has.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * Explains why this structure definition is needed and why it's been constrained as it has.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $requirements
     * @return $this
     */
    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * A copyright statement relating to the structure definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the details of the constraints and mappings.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * A copyright statement relating to the structure definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the details of the constraints and mappings.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $copyright
     * @return $this
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * A set of terms from external terminologies that may be used to assist with indexing and searching of templates.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A set of terms from external terminologies that may be used to assist with indexing and searching of templates.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding[] $code
     * @return $this
     */
    public function addCode($code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * The version of the FHIR specification on which this StructureDefinition is based - this is the formal version of the specification, without the revision number, e.g. [publication].[major].[minor], which is 1.0.2 for this version.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getFhirVersion()
    {
        return $this->fhirVersion;
    }

    /**
     * The version of the FHIR specification on which this StructureDefinition is based - this is the formal version of the specification, without the revision number, e.g. [publication].[major].[minor], which is 1.0.2 for this version.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $fhirVersion
     * @return $this
     */
    public function setFhirVersion($fhirVersion)
    {
        $this->fhirVersion = $fhirVersion;
        return $this;
    }

    /**
     * An external specification that the content is mapped to.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRStructureDefinition\FHIRStructureDefinitionMapping[]
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    /**
     * An external specification that the content is mapped to.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRStructureDefinition\FHIRStructureDefinitionMapping[] $mapping
     * @return $this
     */
    public function addMapping($mapping)
    {
        $this->mapping[] = $mapping;
        return $this;
    }

    /**
     * Defines the kind of structure that this definition is describing.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRStructureDefinitionKind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Defines the kind of structure that this definition is describing.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRStructureDefinitionKind $kind
     * @return $this
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * The type of type that is being constrained - a data type, an extension, a resource, including abstract ones. If this field is present, it indicates that the structure definition is a constraint. If it is not present, then the structure definition is the definition of a base structure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getConstrainedType()
    {
        return $this->constrainedType;
    }

    /**
     * The type of type that is being constrained - a data type, an extension, a resource, including abstract ones. If this field is present, it indicates that the structure definition is a constraint. If it is not present, then the structure definition is the definition of a base structure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $constrainedType
     * @return $this
     */
    public function setConstrainedType($constrainedType)
    {
        $this->constrainedType = $constrainedType;
        return $this;
    }

    /**
     * Whether structure this definition describes is abstract or not  - that is, whether an actual exchanged item can ever be of this type.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * Whether structure this definition describes is abstract or not  - that is, whether an actual exchanged item can ever be of this type.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $abstract
     * @return $this
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;
        return $this;
    }

    /**
     * If this is an extension, Identifies the context within FHIR resources where the extension can be used.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRExtensionContext
     */
    public function getContextType()
    {
        return $this->contextType;
    }

    /**
     * If this is an extension, Identifies the context within FHIR resources where the extension can be used.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRExtensionContext $contextType
     * @return $this
     */
    public function setContextType($contextType)
    {
        $this->contextType = $contextType;
        return $this;
    }

    /**
     * Identifies the types of resource or data type elements to which the extension can be applied.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Identifies the types of resource or data type elements to which the extension can be applied.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString[] $context
     * @return $this
     */
    public function addContext($context)
    {
        $this->context[] = $context;
        return $this;
    }

    /**
     * An absolute URI that is the base structure from which this set of constraints is derived.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * An absolute URI that is the base structure from which this set of constraints is derived.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $base
     * @return $this
     */
    public function setBase($base)
    {
        $this->base = $base;
        return $this;
    }

    /**
     * A snapshot view is expressed in a stand alone form that can be used and interpreted without considering the base StructureDefinition.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot
     */
    public function getSnapshot()
    {
        return $this->snapshot;
    }

    /**
     * A snapshot view is expressed in a stand alone form that can be used and interpreted without considering the base StructureDefinition.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot $snapshot
     * @return $this
     */
    public function setSnapshot($snapshot)
    {
        $this->snapshot = $snapshot;
        return $this;
    }

    /**
     * A differential view is expressed relative to the base StructureDefinition - a statement of differences that it applies.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRStructureDefinition\FHIRStructureDefinitionDifferential
     */
    public function getDifferential()
    {
        return $this->differential;
    }

    /**
     * A differential view is expressed relative to the base StructureDefinition - a statement of differences that it applies.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRStructureDefinition\FHIRStructureDefinitionDifferential $differential
     * @return $this
     */
    public function setDifferential($differential)
    {
        $this->differential = $differential;
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
        if (0 < count($this->identifier)) {
            $json['identifier'] = array();
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier->jsonSerialize();
            }
        }
        if (null !== $this->version) $json['version'] = $this->version->jsonSerialize();
        if (null !== $this->name) $json['name'] = $this->name->jsonSerialize();
        if (null !== $this->display) $json['display'] = $this->display->jsonSerialize();
        if (null !== $this->status) $json['status'] = $this->status->jsonSerialize();
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
        if (0 < count($this->code)) {
            $json['code'] = array();
            foreach($this->code as $code) {
                $json['code'][] = $code->jsonSerialize();
            }
        }
        if (null !== $this->fhirVersion) $json['fhirVersion'] = $this->fhirVersion->jsonSerialize();
        if (0 < count($this->mapping)) {
            $json['mapping'] = array();
            foreach($this->mapping as $mapping) {
                $json['mapping'][] = $mapping->jsonSerialize();
            }
        }
        if (null !== $this->kind) $json['kind'] = $this->kind->jsonSerialize();
        if (null !== $this->constrainedType) $json['constrainedType'] = $this->constrainedType->jsonSerialize();
        if (null !== $this->abstract) $json['abstract'] = $this->abstract->jsonSerialize();
        if (null !== $this->contextType) $json['contextType'] = $this->contextType->jsonSerialize();
        if (0 < count($this->context)) {
            $json['context'] = array();
            foreach($this->context as $context) {
                $json['context'][] = $context->jsonSerialize();
            }
        }
        if (null !== $this->base) $json['base'] = $this->base->jsonSerialize();
        if (null !== $this->snapshot) $json['snapshot'] = $this->snapshot->jsonSerialize();
        if (null !== $this->differential) $json['differential'] = $this->differential->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<StructureDefinition xmlns="http://hl7.org/fhir"></StructureDefinition>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->url) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->version) $this->version->xmlSerialize(true, $sxe->addChild('version'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->display) $this->display->xmlSerialize(true, $sxe->addChild('display'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
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
        if (0 < count($this->code)) {
            foreach($this->code as $code) {
                $code->xmlSerialize(true, $sxe->addChild('code'));
            }
        }
        if (null !== $this->fhirVersion) $this->fhirVersion->xmlSerialize(true, $sxe->addChild('fhirVersion'));
        if (0 < count($this->mapping)) {
            foreach($this->mapping as $mapping) {
                $mapping->xmlSerialize(true, $sxe->addChild('mapping'));
            }
        }
        if (null !== $this->kind) $this->kind->xmlSerialize(true, $sxe->addChild('kind'));
        if (null !== $this->constrainedType) $this->constrainedType->xmlSerialize(true, $sxe->addChild('constrainedType'));
        if (null !== $this->abstract) $this->abstract->xmlSerialize(true, $sxe->addChild('abstract'));
        if (null !== $this->contextType) $this->contextType->xmlSerialize(true, $sxe->addChild('contextType'));
        if (0 < count($this->context)) {
            foreach($this->context as $context) {
                $context->xmlSerialize(true, $sxe->addChild('context'));
            }
        }
        if (null !== $this->base) $this->base->xmlSerialize(true, $sxe->addChild('base'));
        if (null !== $this->snapshot) $this->snapshot->xmlSerialize(true, $sxe->addChild('snapshot'));
        if (null !== $this->differential) $this->differential->xmlSerialize(true, $sxe->addChild('differential'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}