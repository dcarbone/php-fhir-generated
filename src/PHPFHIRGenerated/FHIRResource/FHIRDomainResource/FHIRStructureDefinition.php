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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionContext;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionDifferential;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRContactDetail;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRStructureDefinitionKind;
use PHPFHIRGenerated\FHIRElement\FHIRTypeDerivationRule;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRElement\FHIRUsageContext;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A definition of a FHIR structure. This resource is used to describe the underlying resources, data types defined in FHIR, and also for describing extensions and constraints on resources and data types.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRStructureDefinition
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRStructureDefinition extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'StructureDefinition';

    /**
     * Whether structure this definition describes is abstract or not  - that is, whether the structure is not intended to be instantiated. For Resources and Data types, abstract types will never be exchanged  between systems.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $abstract = null;

    /**
     * An absolute URI that is the base structure from which this type is derived, either by specialization or constraint.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $baseDefinition = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public $contact = null;

    /**
     * Identifies the types of resource or data type elements to which the extension can be applied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionContext
     */
    public $context = null;

    /**
     * A set of rules as FHIRPath Invariants about when the extension can be used (e.g. co-occurrence variants for the extension). All the rules must be true.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $contextInvariant = null;

    /**
     * A copyright statement relating to the structure definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the structure definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $copyright = null;

    /**
     * The date  (and optionally time) when the structure definition was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the structure definition changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * How the type relates to the baseDefinition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTypeDerivationRule
     */
    public $derivation = null;

    /**
     * A free text natural language description of the structure definition from a consumer's perspective.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * A differential view is expressed relative to the base StructureDefinition - a statement of differences that it applies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionDifferential
     */
    public $differential = null;

    /**
     * A Boolean value to indicate that this structure definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The version of the FHIR specification on which this StructureDefinition is based - this is the formal version of the specification, without the revision number, e.g. [publication].[major].[minor], which is 3.5.0. for this version.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $fhirVersion = null;

    /**
     * A formal identifier that is used to identify this structure definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * A legal or geographic region in which the structure definition is intended to be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $jurisdiction = null;

    /**
     * A set of key words or terms from external terminologies that may be used to assist with indexing and searching of templates nby describing the use of this structure definition, or the content it describes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $keyword = null;

    /**
     * Defines the kind of structure that this definition is describing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRStructureDefinitionKind
     */
    public $kind = null;

    /**
     * An external specification that the content is mapped to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping
     */
    public $mapping = null;

    /**
     * A natural language name identifying the structure definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The name of the organization or individual that published the structure definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Explanation of why this structure definition is needed and why it has been designed as it has.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $purpose = null;

    /**
     * A snapshot view is expressed in a standalone form that can be used and interpreted without considering the base StructureDefinition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot
     */
    public $snapshot = null;

    /**
     * The status of this structure definition. Enables tracking the life-cycle of the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * A short, descriptive, user-friendly title for the structure definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * The type this structure describes. If the derivation kind is 'specialization' then this is the master definition for a type, and there is always one of these (a data type, an extension, a resource, including abstract ones). Otherwise the structure definition is a constraint on the stated type (and in this case, the type cannot be an abstract type).  References are URLs that are relative to http://hl7.org/fhir/StructureDefinition e.g. "string" is a reference to http://hl7.org/fhir/StructureDefinition/string. Absolute URLs are only allowed in logical models.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $type = null;

    /**
     * An absolute URI that is used to identify this structure definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this structure definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the structure definition is stored on different servers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate structure definition instances.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public $useContext = null;

    /**
     * The identifier that is used to identify this version of the structure definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the structure definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * FHIRStructureDefinition Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['abstract'])) {
                $this->setAbstract($data['abstract']);
            }
            if (isset($data['baseDefinition'])) {
                $this->setBaseDefinition($data['baseDefinition']);
            }
            if (isset($data['contact'])) {
                $this->setContact($data['contact']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['contextInvariant'])) {
                $this->setContextInvariant($data['contextInvariant']);
            }
            if (isset($data['copyright'])) {
                $this->setCopyright($data['copyright']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['derivation'])) {
                $this->setDerivation($data['derivation']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['differential'])) {
                $this->setDifferential($data['differential']);
            }
            if (isset($data['experimental'])) {
                $this->setExperimental($data['experimental']);
            }
            if (isset($data['fhirVersion'])) {
                $this->setFhirVersion($data['fhirVersion']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['jurisdiction'])) {
                $this->setJurisdiction($data['jurisdiction']);
            }
            if (isset($data['keyword'])) {
                $this->setKeyword($data['keyword']);
            }
            if (isset($data['kind'])) {
                $this->setKind($data['kind']);
            }
            if (isset($data['mapping'])) {
                $this->setMapping($data['mapping']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['publisher'])) {
                $this->setPublisher($data['publisher']);
            }
            if (isset($data['purpose'])) {
                $this->setPurpose($data['purpose']);
            }
            if (isset($data['snapshot'])) {
                $this->setSnapshot($data['snapshot']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['title'])) {
                $this->setTitle($data['title']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
            if (isset($data['useContext'])) {
                $this->setUseContext($data['useContext']);
            }
            if (isset($data['version'])) {
                $this->setVersion($data['version']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureDefinition::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Whether structure this definition describes is abstract or not  - that is, whether the structure is not intended to be instantiated. For Resources and Data types, abstract types will never be exchanged  between systems.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setAbstract($abstract)
    {
        if (null === $abstract) {
            return $this; 
        }
        if (is_scalar($abstract)) {
            $abstract = new FHIRBoolean($abstract);
        }
        if (!($abstract instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureDefinition::setAbstract - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($abstract)
            ));
        }
        $this->abstract = $abstract;
        return $this;
    }

    /**
     * Whether structure this definition describes is abstract or not  - that is, whether the structure is not intended to be instantiated. For Resources and Data types, abstract types will never be exchanged  between systems.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAbstract()
    {
        return $this->abstract;
    }


    /**
     * An absolute URI that is the base structure from which this type is derived, either by specialization or constraint.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setBaseDefinition($baseDefinition)
    {
        if (null === $baseDefinition) {
            return $this; 
        }
        if (is_scalar($baseDefinition)) {
            $baseDefinition = new FHIRCanonical($baseDefinition);
        }
        if (!($baseDefinition instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureDefinition::setBaseDefinition - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($baseDefinition)
            ));
        }
        $this->baseDefinition = $baseDefinition;
        return $this;
    }

    /**
     * An absolute URI that is the base structure from which this type is derived, either by specialization or constraint.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getBaseDefinition()
    {
        return $this->baseDefinition;
    }


    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     * @return $this
     */
    public function setContact(FHIRContactDetail $contact = null)
    {
        if (null === $contact) {
            return $this; 
        }
        $this->contact = $contact;
        return $this;
    }

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public function getContact()
    {
        return $this->contact;
    }


    /**
     * Identifies the types of resource or data type elements to which the extension can be applied.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionContext
     * @return $this
     */
    public function setContext(FHIRStructureDefinitionContext $context = null)
    {
        if (null === $context) {
            return $this; 
        }
        $this->context = $context;
        return $this;
    }

    /**
     * Identifies the types of resource or data type elements to which the extension can be applied.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionContext
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * A set of rules as FHIRPath Invariants about when the extension can be used (e.g. co-occurrence variants for the extension). All the rules must be true.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setContextInvariant($contextInvariant)
    {
        if (null === $contextInvariant) {
            return $this; 
        }
        if (is_scalar($contextInvariant)) {
            $contextInvariant = new FHIRString($contextInvariant);
        }
        if (!($contextInvariant instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureDefinition::setContextInvariant - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($contextInvariant)
            ));
        }
        $this->contextInvariant = $contextInvariant;
        return $this;
    }

    /**
     * A set of rules as FHIRPath Invariants about when the extension can be used (e.g. co-occurrence variants for the extension). All the rules must be true.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getContextInvariant()
    {
        return $this->contextInvariant;
    }


    /**
     * A copyright statement relating to the structure definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the structure definition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setCopyright($copyright)
    {
        if (null === $copyright) {
            return $this; 
        }
        if (is_scalar($copyright)) {
            $copyright = new FHIRMarkdown($copyright);
        }
        if (!($copyright instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureDefinition::setCopyright - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($copyright)
            ));
        }
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * A copyright statement relating to the structure definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the structure definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getCopyright()
    {
        return $this->copyright;
    }


    /**
     * The date  (and optionally time) when the structure definition was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the structure definition changes.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDate($date)
    {
        if (null === $date) {
            return $this; 
        }
        if (is_scalar($date)) {
            $date = new FHIRDateTime($date);
        }
        if (!($date instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureDefinition::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * The date  (and optionally time) when the structure definition was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the structure definition changes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * How the type relates to the baseDefinition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTypeDerivationRule
     * @return $this
     */
    public function setDerivation($derivation)
    {
        if (null === $derivation) {
            return $this; 
        }
        if (is_scalar($derivation)) {
            $derivation = new FHIRTypeDerivationRule($derivation);
        }
        if (!($derivation instanceof FHIRTypeDerivationRule)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureDefinition::setDerivation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTypeDerivationRule or appropriate scalar value, %s seen.',
                gettype($derivation)
            ));
        }
        $this->derivation = $derivation;
        return $this;
    }

    /**
     * How the type relates to the baseDefinition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTypeDerivationRule
     */
    public function getDerivation()
    {
        return $this->derivation;
    }


    /**
     * A free text natural language description of the structure definition from a consumer's perspective.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRMarkdown($description);
        }
        if (!($description instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureDefinition::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A free text natural language description of the structure definition from a consumer's perspective.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * A differential view is expressed relative to the base StructureDefinition - a statement of differences that it applies.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionDifferential
     * @return $this
     */
    public function setDifferential(FHIRStructureDefinitionDifferential $differential = null)
    {
        if (null === $differential) {
            return $this; 
        }
        $this->differential = $differential;
        return $this;
    }

    /**
     * A differential view is expressed relative to the base StructureDefinition - a statement of differences that it applies.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionDifferential
     */
    public function getDifferential()
    {
        return $this->differential;
    }


    /**
     * A Boolean value to indicate that this structure definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setExperimental($experimental)
    {
        if (null === $experimental) {
            return $this; 
        }
        if (is_scalar($experimental)) {
            $experimental = new FHIRBoolean($experimental);
        }
        if (!($experimental instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureDefinition::setExperimental - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($experimental)
            ));
        }
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * A Boolean value to indicate that this structure definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }


    /**
     * The version of the FHIR specification on which this StructureDefinition is based - this is the formal version of the specification, without the revision number, e.g. [publication].[major].[minor], which is 3.5.0. for this version.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setFhirVersion($fhirVersion)
    {
        if (null === $fhirVersion) {
            return $this; 
        }
        if (is_scalar($fhirVersion)) {
            $fhirVersion = new FHIRId($fhirVersion);
        }
        if (!($fhirVersion instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureDefinition::setFhirVersion - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($fhirVersion)
            ));
        }
        $this->fhirVersion = $fhirVersion;
        return $this;
    }

    /**
     * The version of the FHIR specification on which this StructureDefinition is based - this is the formal version of the specification, without the revision number, e.g. [publication].[major].[minor], which is 3.5.0. for this version.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getFhirVersion()
    {
        return $this->fhirVersion;
    }


    /**
     * A formal identifier that is used to identify this structure definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this structure definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * A legal or geographic region in which the structure definition is intended to be used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setJurisdiction(FHIRCodeableConcept $jurisdiction = null)
    {
        if (null === $jurisdiction) {
            return $this; 
        }
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * A legal or geographic region in which the structure definition is intended to be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }


    /**
     * A set of key words or terms from external terminologies that may be used to assist with indexing and searching of templates nby describing the use of this structure definition, or the content it describes.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setKeyword(FHIRCoding $keyword = null)
    {
        if (null === $keyword) {
            return $this; 
        }
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * A set of key words or terms from external terminologies that may be used to assist with indexing and searching of templates nby describing the use of this structure definition, or the content it describes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getKeyword()
    {
        return $this->keyword;
    }


    /**
     * Defines the kind of structure that this definition is describing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRStructureDefinitionKind
     * @return $this
     */
    public function setKind($kind)
    {
        if (null === $kind) {
            return $this; 
        }
        if (is_scalar($kind)) {
            $kind = new FHIRStructureDefinitionKind($kind);
        }
        if (!($kind instanceof FHIRStructureDefinitionKind)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureDefinition::setKind - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRStructureDefinitionKind or appropriate scalar value, %s seen.',
                gettype($kind)
            ));
        }
        $this->kind = $kind;
        return $this;
    }

    /**
     * Defines the kind of structure that this definition is describing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRStructureDefinitionKind
     */
    public function getKind()
    {
        return $this->kind;
    }


    /**
     * An external specification that the content is mapped to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping
     * @return $this
     */
    public function setMapping(FHIRStructureDefinitionMapping $mapping = null)
    {
        if (null === $mapping) {
            return $this; 
        }
        $this->mapping = $mapping;
        return $this;
    }

    /**
     * An external specification that the content is mapped to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping
     */
    public function getMapping()
    {
        return $this->mapping;
    }


    /**
     * A natural language name identifying the structure definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
                'FHIRStructureDefinition::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A natural language name identifying the structure definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * The name of the organization or individual that published the structure definition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPublisher($publisher)
    {
        if (null === $publisher) {
            return $this; 
        }
        if (is_scalar($publisher)) {
            $publisher = new FHIRString($publisher);
        }
        if (!($publisher instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureDefinition::setPublisher - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($publisher)
            ));
        }
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * The name of the organization or individual that published the structure definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }


    /**
     * Explanation of why this structure definition is needed and why it has been designed as it has.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setPurpose($purpose)
    {
        if (null === $purpose) {
            return $this; 
        }
        if (is_scalar($purpose)) {
            $purpose = new FHIRMarkdown($purpose);
        }
        if (!($purpose instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureDefinition::setPurpose - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($purpose)
            ));
        }
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Explanation of why this structure definition is needed and why it has been designed as it has.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getPurpose()
    {
        return $this->purpose;
    }


    /**
     * A snapshot view is expressed in a standalone form that can be used and interpreted without considering the base StructureDefinition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot
     * @return $this
     */
    public function setSnapshot(FHIRStructureDefinitionSnapshot $snapshot = null)
    {
        if (null === $snapshot) {
            return $this; 
        }
        $this->snapshot = $snapshot;
        return $this;
    }

    /**
     * A snapshot view is expressed in a standalone form that can be used and interpreted without considering the base StructureDefinition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot
     */
    public function getSnapshot()
    {
        return $this->snapshot;
    }


    /**
     * The status of this structure definition. Enables tracking the life-cycle of the content.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRPublicationStatus($status);
        }
        if (!($status instanceof FHIRPublicationStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureDefinition::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of this structure definition. Enables tracking the life-cycle of the content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * A short, descriptive, user-friendly title for the structure definition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setTitle($title)
    {
        if (null === $title) {
            return $this; 
        }
        if (is_scalar($title)) {
            $title = new FHIRString($title);
        }
        if (!($title instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureDefinition::setTitle - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($title)
            ));
        }
        $this->title = $title;
        return $this;
    }

    /**
     * A short, descriptive, user-friendly title for the structure definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * The type this structure describes. If the derivation kind is 'specialization' then this is the master definition for a type, and there is always one of these (a data type, an extension, a resource, including abstract ones). Otherwise the structure definition is a constraint on the stated type (and in this case, the type cannot be an abstract type).  References are URLs that are relative to http://hl7.org/fhir/StructureDefinition e.g. "string" is a reference to http://hl7.org/fhir/StructureDefinition/string. Absolute URLs are only allowed in logical models.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRUri($type);
        }
        if (!($type instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureDefinition::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The type this structure describes. If the derivation kind is 'specialization' then this is the master definition for a type, and there is always one of these (a data type, an extension, a resource, including abstract ones). Otherwise the structure definition is a constraint on the stated type (and in this case, the type cannot be an abstract type).  References are URLs that are relative to http://hl7.org/fhir/StructureDefinition e.g. "string" is a reference to http://hl7.org/fhir/StructureDefinition/string. Absolute URLs are only allowed in logical models.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * An absolute URI that is used to identify this structure definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this structure definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the structure definition is stored on different servers.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setUrl($url)
    {
        if (null === $url) {
            return $this; 
        }
        if (is_scalar($url)) {
            $url = new FHIRUri($url);
        }
        if (!($url instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureDefinition::setUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($url)
            ));
        }
        $this->url = $url;
        return $this;
    }

    /**
     * An absolute URI that is used to identify this structure definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this structure definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the structure definition is stored on different servers.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }


    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate structure definition instances.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     * @return $this
     */
    public function setUseContext(FHIRUsageContext $useContext = null)
    {
        if (null === $useContext) {
            return $this; 
        }
        $this->useContext = $useContext;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate structure definition instances.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public function getUseContext()
    {
        return $this->useContext;
    }


    /**
     * The identifier that is used to identify this version of the structure definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the structure definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setVersion($version)
    {
        if (null === $version) {
            return $this; 
        }
        if (is_scalar($version)) {
            $version = new FHIRString($version);
        }
        if (!($version instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureDefinition::setVersion - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($version)
            ));
        }
        $this->version = $version;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the structure definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the structure definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
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
        if (null !== ($v = $this->getAbstract())) {
            $a['abstract'] = $v;
        }
        if (null !== ($v = $this->getBaseDefinition())) {
            $a['baseDefinition'] = $v;
        }
        if (null !== ($v = $this->getContact())) {
            $a['contact'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getContextInvariant())) {
            $a['contextInvariant'] = $v;
        }
        if (null !== ($v = $this->getCopyright())) {
            $a['copyright'] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a['date'] = $v;
        }
        if (null !== ($v = $this->getDerivation())) {
            $a['derivation'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getDifferential())) {
            $a['differential'] = $v;
        }
        if (null !== ($v = $this->getExperimental())) {
            $a['experimental'] = $v;
        }
        if (null !== ($v = $this->getFhirVersion())) {
            $a['fhirVersion'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getJurisdiction())) {
            $a['jurisdiction'] = $v;
        }
        if (null !== ($v = $this->getKeyword())) {
            $a['keyword'] = $v;
        }
        if (null !== ($v = $this->getKind())) {
            $a['kind'] = $v;
        }
        if (null !== ($v = $this->getMapping())) {
            $a['mapping'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getPublisher())) {
            $a['publisher'] = $v;
        }
        if (null !== ($v = $this->getPurpose())) {
            $a['purpose'] = $v;
        }
        if (null !== ($v = $this->getSnapshot())) {
            $a['snapshot'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getTitle())) {
            $a['title'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a['url'] = $v;
        }
        if (null !== ($v = $this->getUseContext())) {
            $a['useContext'] = $v;
        }
        if (null !== ($v = $this->getVersion())) {
            $a['version'] = $v;
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
            $sxe = new \SimpleXMLElement('<StructureDefinition xmlns="http://hl7.org/fhir"></StructureDefinition>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}