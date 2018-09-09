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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemFilter;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRCodeSystemContentMode;
use PHPFHIRGenerated\FHIRElement\FHIRCodeSystemHierarchyMeaning;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRContactDetail;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRElement\FHIRUsageContext;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The CodeSystem resource is used to declare the existence of and describe a code system or code system supplement and its key properties, and optionally define a part or all of its content.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRCodeSystem
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRCodeSystem extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'CodeSystem';

    /**
     * If code comparison is case sensitive when codes within this system are compared to each other.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $caseSensitive = null;

    /**
     * The code system defines a compositional (post-coordination) grammar.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $compositional = null;

    /**
     * Concepts that are in the code system. The concept definitions are inherently hierarchical, but the definitions must be consulted to determine what the meaning of the hierarchical relationships are.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept
     */
    public $concept = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public $contact = null;

    /**
     * The extent of the content of the code system (the concepts and codes it defines) are represented in this resource instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeSystemContentMode
     */
    public $content = null;

    /**
     * A copyright statement relating to the code system and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the code system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $copyright = null;

    /**
     * The total number of concepts defined by the code system. Where the code system has a compositional grammar, the basis of this count is defined by the system steward.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $count = null;

    /**
     * The date  (and optionally time) when the code system was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the code system changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * A free text natural language description of the code system from a consumer's perspective.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * A Boolean value to indicate that this code system is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * A filter that can be used in a value set compose statement when selecting concepts using a filter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemFilter
     */
    public $filter = null;

    /**
     * The meaning of the hierarchy of concepts as represnted in this resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeSystemHierarchyMeaning
     */
    public $hierarchyMeaning = null;

    /**
     * A formal identifier that is used to identify this code system when it is represented in other formats, or referenced in a specification, model, design or an instance. (business identifier).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * A legal or geographic region in which the code system is intended to be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $jurisdiction = null;

    /**
     * A natural language name identifying the code system. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * A property defines an additional slot through which additional information can be provided about a concept.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty
     */
    public $property = null;

    /**
     * The name of the organization or individual that published the code system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Explanation of why this code system is needed and why it has been designed as it has.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $purpose = null;

    /**
     * The status of this code system. Enables tracking the life-cycle of the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * References the code system that this code system supplement is adding designations and properties to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $supplements = null;

    /**
     * A short, descriptive, user-friendly title for the code system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * An absolute URI that is used to identify this code system when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this code system is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the code system is stored on different servers. This is used in [Coding](datatypes.html#Coding).system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate code system instances.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public $useContext = null;

    /**
     * Canonical URL of value set that contains the entire code system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $valueSet = null;

    /**
     * The identifier that is used to identify this version of the code system when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the code system author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. This is used in [Coding](datatypes.html#Coding).version.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * This flag is used to signify that the code system does not commit to concept permanence across versions. If true, a version must be specified when referencing this code system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $versionNeeded = null;

    /**
     * FHIRCodeSystem Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['caseSensitive'])) {
                $this->setCaseSensitive($data['caseSensitive']);
            }
            if (isset($data['compositional'])) {
                $this->setCompositional($data['compositional']);
            }
            if (isset($data['concept'])) {
                $this->setConcept($data['concept']);
            }
            if (isset($data['contact'])) {
                $this->setContact($data['contact']);
            }
            if (isset($data['content'])) {
                $this->setContent($data['content']);
            }
            if (isset($data['copyright'])) {
                $this->setCopyright($data['copyright']);
            }
            if (isset($data['count'])) {
                $this->setCount($data['count']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['experimental'])) {
                $this->setExperimental($data['experimental']);
            }
            if (isset($data['filter'])) {
                $this->setFilter($data['filter']);
            }
            if (isset($data['hierarchyMeaning'])) {
                $this->setHierarchyMeaning($data['hierarchyMeaning']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['jurisdiction'])) {
                $this->setJurisdiction($data['jurisdiction']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['property'])) {
                $this->setProperty($data['property']);
            }
            if (isset($data['publisher'])) {
                $this->setPublisher($data['publisher']);
            }
            if (isset($data['purpose'])) {
                $this->setPurpose($data['purpose']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['supplements'])) {
                $this->setSupplements($data['supplements']);
            }
            if (isset($data['title'])) {
                $this->setTitle($data['title']);
            }
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
            if (isset($data['useContext'])) {
                $this->setUseContext($data['useContext']);
            }
            if (isset($data['valueSet'])) {
                $this->setValueSet($data['valueSet']);
            }
            if (isset($data['version'])) {
                $this->setVersion($data['version']);
            }
            if (isset($data['versionNeeded'])) {
                $this->setVersionNeeded($data['versionNeeded']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCodeSystem::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * If code comparison is case sensitive when codes within this system are compared to each other.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setCaseSensitive($caseSensitive)
    {
        if (null === $caseSensitive) {
            return $this; 
        }
        if (is_scalar($caseSensitive)) {
            $caseSensitive = new FHIRBoolean($caseSensitive);
        }
        if (!($caseSensitive instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCodeSystem::setCaseSensitive - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($caseSensitive)
            ));
        }
        $this->caseSensitive = $caseSensitive;
        return $this;
    }

    /**
     * If code comparison is case sensitive when codes within this system are compared to each other.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getCaseSensitive()
    {
        return $this->caseSensitive;
    }


    /**
     * The code system defines a compositional (post-coordination) grammar.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setCompositional($compositional)
    {
        if (null === $compositional) {
            return $this; 
        }
        if (is_scalar($compositional)) {
            $compositional = new FHIRBoolean($compositional);
        }
        if (!($compositional instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCodeSystem::setCompositional - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($compositional)
            ));
        }
        $this->compositional = $compositional;
        return $this;
    }

    /**
     * The code system defines a compositional (post-coordination) grammar.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getCompositional()
    {
        return $this->compositional;
    }


    /**
     * Concepts that are in the code system. The concept definitions are inherently hierarchical, but the definitions must be consulted to determine what the meaning of the hierarchical relationships are.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept
     * @return $this
     */
    public function setConcept(FHIRCodeSystemConcept $concept = null)
    {
        if (null === $concept) {
            return $this; 
        }
        $this->concept = $concept;
        return $this;
    }

    /**
     * Concepts that are in the code system. The concept definitions are inherently hierarchical, but the definitions must be consulted to determine what the meaning of the hierarchical relationships are.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept
     */
    public function getConcept()
    {
        return $this->concept;
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
     * The extent of the content of the code system (the concepts and codes it defines) are represented in this resource instance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeSystemContentMode
     * @return $this
     */
    public function setContent($content)
    {
        if (null === $content) {
            return $this; 
        }
        if (is_scalar($content)) {
            $content = new FHIRCodeSystemContentMode($content);
        }
        if (!($content instanceof FHIRCodeSystemContentMode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCodeSystem::setContent - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeSystemContentMode or appropriate scalar value, %s seen.',
                gettype($content)
            ));
        }
        $this->content = $content;
        return $this;
    }

    /**
     * The extent of the content of the code system (the concepts and codes it defines) are represented in this resource instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeSystemContentMode
     */
    public function getContent()
    {
        return $this->content;
    }


    /**
     * A copyright statement relating to the code system and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the code system.
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
                'FHIRCodeSystem::setCopyright - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($copyright)
            ));
        }
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * A copyright statement relating to the code system and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the code system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getCopyright()
    {
        return $this->copyright;
    }


    /**
     * The total number of concepts defined by the code system. Where the code system has a compositional grammar, the basis of this count is defined by the system steward.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setCount($count)
    {
        if (null === $count) {
            return $this; 
        }
        if (is_scalar($count)) {
            $count = new FHIRUnsignedInt($count);
        }
        if (!($count instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCodeSystem::setCount - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($count)
            ));
        }
        $this->count = $count;
        return $this;
    }

    /**
     * The total number of concepts defined by the code system. Where the code system has a compositional grammar, the basis of this count is defined by the system steward.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getCount()
    {
        return $this->count;
    }


    /**
     * The date  (and optionally time) when the code system was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the code system changes.
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
                'FHIRCodeSystem::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * The date  (and optionally time) when the code system was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the code system changes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * A free text natural language description of the code system from a consumer's perspective.
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
                'FHIRCodeSystem::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A free text natural language description of the code system from a consumer's perspective.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * A Boolean value to indicate that this code system is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
                'FHIRCodeSystem::setExperimental - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($experimental)
            ));
        }
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * A Boolean value to indicate that this code system is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }


    /**
     * A filter that can be used in a value set compose statement when selecting concepts using a filter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemFilter
     * @return $this
     */
    public function setFilter(FHIRCodeSystemFilter $filter = null)
    {
        if (null === $filter) {
            return $this; 
        }
        $this->filter = $filter;
        return $this;
    }

    /**
     * A filter that can be used in a value set compose statement when selecting concepts using a filter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemFilter
     */
    public function getFilter()
    {
        return $this->filter;
    }


    /**
     * The meaning of the hierarchy of concepts as represnted in this resource.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeSystemHierarchyMeaning
     * @return $this
     */
    public function setHierarchyMeaning($hierarchyMeaning)
    {
        if (null === $hierarchyMeaning) {
            return $this; 
        }
        if (is_scalar($hierarchyMeaning)) {
            $hierarchyMeaning = new FHIRCodeSystemHierarchyMeaning($hierarchyMeaning);
        }
        if (!($hierarchyMeaning instanceof FHIRCodeSystemHierarchyMeaning)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCodeSystem::setHierarchyMeaning - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeSystemHierarchyMeaning or appropriate scalar value, %s seen.',
                gettype($hierarchyMeaning)
            ));
        }
        $this->hierarchyMeaning = $hierarchyMeaning;
        return $this;
    }

    /**
     * The meaning of the hierarchy of concepts as represnted in this resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeSystemHierarchyMeaning
     */
    public function getHierarchyMeaning()
    {
        return $this->hierarchyMeaning;
    }


    /**
     * A formal identifier that is used to identify this code system when it is represented in other formats, or referenced in a specification, model, design or an instance. (business identifier).
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
     * A formal identifier that is used to identify this code system when it is represented in other formats, or referenced in a specification, model, design or an instance. (business identifier).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * A legal or geographic region in which the code system is intended to be used.
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
     * A legal or geographic region in which the code system is intended to be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }


    /**
     * A natural language name identifying the code system. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
                'FHIRCodeSystem::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A natural language name identifying the code system. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * A property defines an additional slot through which additional information can be provided about a concept.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty
     * @return $this
     */
    public function setProperty(FHIRCodeSystemProperty $property = null)
    {
        if (null === $property) {
            return $this; 
        }
        $this->property = $property;
        return $this;
    }

    /**
     * A property defines an additional slot through which additional information can be provided about a concept.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty
     */
    public function getProperty()
    {
        return $this->property;
    }


    /**
     * The name of the organization or individual that published the code system.
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
                'FHIRCodeSystem::setPublisher - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($publisher)
            ));
        }
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * The name of the organization or individual that published the code system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }


    /**
     * Explanation of why this code system is needed and why it has been designed as it has.
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
                'FHIRCodeSystem::setPurpose - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($purpose)
            ));
        }
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Explanation of why this code system is needed and why it has been designed as it has.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getPurpose()
    {
        return $this->purpose;
    }


    /**
     * The status of this code system. Enables tracking the life-cycle of the content.
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
                'FHIRCodeSystem::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of this code system. Enables tracking the life-cycle of the content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * References the code system that this code system supplement is adding designations and properties to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setSupplements($supplements)
    {
        if (null === $supplements) {
            return $this; 
        }
        if (is_scalar($supplements)) {
            $supplements = new FHIRCanonical($supplements);
        }
        if (!($supplements instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCodeSystem::setSupplements - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($supplements)
            ));
        }
        $this->supplements = $supplements;
        return $this;
    }

    /**
     * References the code system that this code system supplement is adding designations and properties to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getSupplements()
    {
        return $this->supplements;
    }


    /**
     * A short, descriptive, user-friendly title for the code system.
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
                'FHIRCodeSystem::setTitle - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($title)
            ));
        }
        $this->title = $title;
        return $this;
    }

    /**
     * A short, descriptive, user-friendly title for the code system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * An absolute URI that is used to identify this code system when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this code system is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the code system is stored on different servers. This is used in [Coding](datatypes.html#Coding).system.
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
                'FHIRCodeSystem::setUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($url)
            ));
        }
        $this->url = $url;
        return $this;
    }

    /**
     * An absolute URI that is used to identify this code system when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this code system is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the code system is stored on different servers. This is used in [Coding](datatypes.html#Coding).system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }


    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate code system instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate code system instances.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public function getUseContext()
    {
        return $this->useContext;
    }


    /**
     * Canonical URL of value set that contains the entire code system.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setValueSet($valueSet)
    {
        if (null === $valueSet) {
            return $this; 
        }
        if (is_scalar($valueSet)) {
            $valueSet = new FHIRCanonical($valueSet);
        }
        if (!($valueSet instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCodeSystem::setValueSet - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($valueSet)
            ));
        }
        $this->valueSet = $valueSet;
        return $this;
    }

    /**
     * Canonical URL of value set that contains the entire code system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getValueSet()
    {
        return $this->valueSet;
    }


    /**
     * The identifier that is used to identify this version of the code system when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the code system author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. This is used in [Coding](datatypes.html#Coding).version.
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
                'FHIRCodeSystem::setVersion - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($version)
            ));
        }
        $this->version = $version;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the code system when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the code system author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. This is used in [Coding](datatypes.html#Coding).version.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }


    /**
     * This flag is used to signify that the code system does not commit to concept permanence across versions. If true, a version must be specified when referencing this code system.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setVersionNeeded($versionNeeded)
    {
        if (null === $versionNeeded) {
            return $this; 
        }
        if (is_scalar($versionNeeded)) {
            $versionNeeded = new FHIRBoolean($versionNeeded);
        }
        if (!($versionNeeded instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCodeSystem::setVersionNeeded - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($versionNeeded)
            ));
        }
        $this->versionNeeded = $versionNeeded;
        return $this;
    }

    /**
     * This flag is used to signify that the code system does not commit to concept permanence across versions. If true, a version must be specified when referencing this code system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getVersionNeeded()
    {
        return $this->versionNeeded;
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
        if (null !== ($v = $this->getCaseSensitive())) {
            $a['caseSensitive'] = $v;
        }
        if (null !== ($v = $this->getCompositional())) {
            $a['compositional'] = $v;
        }
        if (null !== ($v = $this->getConcept())) {
            $a['concept'] = $v;
        }
        if (null !== ($v = $this->getContact())) {
            $a['contact'] = $v;
        }
        if (null !== ($v = $this->getContent())) {
            $a['content'] = $v;
        }
        if (null !== ($v = $this->getCopyright())) {
            $a['copyright'] = $v;
        }
        if (null !== ($v = $this->getCount())) {
            $a['count'] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a['date'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getExperimental())) {
            $a['experimental'] = $v;
        }
        if (null !== ($v = $this->getFilter())) {
            $a['filter'] = $v;
        }
        if (null !== ($v = $this->getHierarchyMeaning())) {
            $a['hierarchyMeaning'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getJurisdiction())) {
            $a['jurisdiction'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getProperty())) {
            $a['property'] = $v;
        }
        if (null !== ($v = $this->getPublisher())) {
            $a['publisher'] = $v;
        }
        if (null !== ($v = $this->getPurpose())) {
            $a['purpose'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSupplements())) {
            $a['supplements'] = $v;
        }
        if (null !== ($v = $this->getTitle())) {
            $a['title'] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a['url'] = $v;
        }
        if (null !== ($v = $this->getUseContext())) {
            $a['useContext'] = $v;
        }
        if (null !== ($v = $this->getValueSet())) {
            $a['valueSet'] = $v;
        }
        if (null !== ($v = $this->getVersion())) {
            $a['version'] = $v;
        }
        if (null !== ($v = $this->getVersionNeeded())) {
            $a['versionNeeded'] = $v;
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
            $sxe = new \SimpleXMLElement('<CodeSystem xmlns="http://hl7.org/fhir"></CodeSystem>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}