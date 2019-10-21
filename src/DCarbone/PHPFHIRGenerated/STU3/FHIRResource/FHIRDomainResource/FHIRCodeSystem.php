<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:04+0000
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemFilter;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeSystemContentMode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeSystemHierarchyMeaning;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A code system resource specifies a set of codes drawn from one or more code
 * systems.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRCodeSystem
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRCodeSystem extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CASE_SENSITIVE = 'caseSensitive';
    const FIELD_CASE_SENSITIVE_EXT = '_caseSensitive';
    const FIELD_COMPOSITIONAL = 'compositional';
    const FIELD_COMPOSITIONAL_EXT = '_compositional';
    const FIELD_CONCEPT = 'concept';
    const FIELD_CONTACT = 'contact';
    const FIELD_CONTENT = 'content';
    const FIELD_CONTENT_EXT = '_content';
    const FIELD_COPYRIGHT = 'copyright';
    const FIELD_COPYRIGHT_EXT = '_copyright';
    const FIELD_COUNT = 'count';
    const FIELD_COUNT_EXT = '_count';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_EXPERIMENTAL = 'experimental';
    const FIELD_EXPERIMENTAL_EXT = '_experimental';
    const FIELD_FILTER = 'filter';
    const FIELD_FILTER_EXT = '_filter';
    const FIELD_HIERARCHY_MEANING = 'hierarchyMeaning';
    const FIELD_HIERARCHY_MEANING_EXT = '_hierarchyMeaning';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_JURISDICTION = 'jurisdiction';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_PROPERTY = 'property';
    const FIELD_PUBLISHER = 'publisher';
    const FIELD_PUBLISHER_EXT = '_publisher';
    const FIELD_PURPOSE = 'purpose';
    const FIELD_PURPOSE_EXT = '_purpose';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_USE_CONTEXT = 'useContext';
    const FIELD_VALUE_SET = 'valueSet';
    const FIELD_VALUE_SET_EXT = '_valueSet';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';
    const FIELD_VERSION_NEEDED = 'versionNeeded';
    const FIELD_VERSION_NEEDED_EXT = '_versionNeeded';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If code comparison is case sensitive when codes within this system are compared
     * to each other.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    private $caseSensitive = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * True If code system defines a post-composition grammar.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    private $compositional = null;
    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * Concepts that are in the code system. The concept definitions are inherently
     * hierarchical, but the definitions must be consulted to determine what the
     * meaning of the hierarchical relationships are.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept[]
     */
    private $concept = [];
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail[]
     */
    private $contact = [];
    /**
     * How much of the content of the code system - the concepts and codes it defines -
     * are represented in a code system resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How much of the content of the code system - the concepts and codes it defines -
     * are represented in this resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeSystemContentMode
     */
    private $content = null;
    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the code system and/or its contents. Copyright
     * statements are generally legal restrictions on the use and publishing of the
     * code system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    private $copyright = null;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The total number of concepts defined by the code system. Where the code system
     * has a compositional grammar, the count refers to the number of base (primitive)
     * concepts.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    private $count = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date (and optionally time) when the code system was published. The date must
     * change if and when the business version changes and it must change if the status
     * code changes. In addition, it should change when the substantive content of the
     * code system changes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    private $date = null;
    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the code system from a consumer's
     * perspective.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    private $description = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A boolean value to indicate that this code system is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
     * genuine usage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    private $experimental = null;
    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * A filter that can be used in a value set compose statement when selecting
     * concepts using a filter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemFilter[]
     */
    private $filter = [];
    /**
     * The meaning of the hierarchy of concepts in a code system
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The meaning of the hierarchy of concepts.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeSystemHierarchyMeaning
     */
    private $hierarchyMeaning = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this code system when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    private $identifier = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the code system is intended to be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    private $jurisdiction = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A natural language name identifying the code system. This name should be usable
     * as an identifier for the module by machine processing applications such as code
     * generation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $name = null;
    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * A property defines an additional slot through which additional information can
     * be provided about a concept.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty[]
     */
    private $property = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the individual or organization that published the code system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $publisher = null;
    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Explaination of why this code system is needed and why it has been designed as
     * it has.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    private $purpose = null;
    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of this code system. Enables tracking the life-cycle of the content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus
     */
    private $status = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short, descriptive, user-friendly title for the code system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $title = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An absolute URI that is used to identify this code system when it is referenced
     * in a specification, model, design or an instance. This SHALL be a URL, SHOULD be
     * globally unique, and SHOULD be an address at which this code system is (or will
     * be) published. The URL SHOULD include the major version of the code system. For
     * more information see [Technical and Business Versions](resource.html#versions).
     * This is used in [Coding]{datatypes.html#Coding}.system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    private $url = null;
    /**
     * Specifies clinical/business/etc metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * for appropriate code system instances.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext[]
     */
    private $useContext = [];
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Canonical URL of value set that contains the entire code system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    private $valueSet = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The identifier that is used to identify this version of the code system when it
     * is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the code system author and is not expected to be
     * globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence. This is used in
     * [Coding]{datatypes.html#Coding}.version.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $version = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * This flag is used to signify that the code system has not (or does not) maintain
     * the definitions, and a version must be specified when referencing this code
     * system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    private $versionNeeded = null;

    /**
     * FHIRCodeSystem Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCodeSystem::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CASE_SENSITIVE])) {
            $ext = (isset($data[self::FIELD_CASE_SENSITIVE_EXT]) && is_array($data[self::FIELD_CASE_SENSITIVE_EXT]))
                ? $data[self::FIELD_CASE_SENSITIVE_EXT]
                : null;
            if ($data[self::FIELD_CASE_SENSITIVE] instanceof FHIRBoolean) {
                $this->setCaseSensitive($data[self::FIELD_CASE_SENSITIVE]);
            } elseif ($ext && is_scalar($data[self::FIELD_CASE_SENSITIVE])) {
                $this->setCaseSensitive(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_CASE_SENSITIVE]] + $ext));
            } else {
                $this->setCaseSensitive(new FHIRBoolean($data[self::FIELD_CASE_SENSITIVE]));
            }
        }
        if (isset($data[self::FIELD_COMPOSITIONAL])) {
            $ext = (isset($data[self::FIELD_COMPOSITIONAL_EXT]) && is_array($data[self::FIELD_COMPOSITIONAL_EXT]))
                ? $data[self::FIELD_COMPOSITIONAL_EXT]
                : null;
            if ($data[self::FIELD_COMPOSITIONAL] instanceof FHIRBoolean) {
                $this->setCompositional($data[self::FIELD_COMPOSITIONAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_COMPOSITIONAL])) {
                $this->setCompositional(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_COMPOSITIONAL]] + $ext));
            } else {
                $this->setCompositional(new FHIRBoolean($data[self::FIELD_COMPOSITIONAL]));
            }
        }
        if (isset($data[self::FIELD_CONCEPT])) {
            if (is_array($data[self::FIELD_CONCEPT])) {
                foreach($data[self::FIELD_CONCEPT] as $v) {
                    if ($v instanceof FHIRCodeSystemConcept) {
                        $this->addConcept($v);
                    } else {
                        $this->addConcept(new FHIRCodeSystemConcept($v));
                    }
                }
            } else if ($data[self::FIELD_CONCEPT] instanceof FHIRCodeSystemConcept) {
                $this->addConcept($data[self::FIELD_CONCEPT]);
            } else {
                $this->addConcept(new FHIRCodeSystemConcept($data[self::FIELD_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_CONTACT])) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if ($v instanceof FHIRContactDetail) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIRContactDetail($v));
                    }
                }
            } else if ($data[self::FIELD_CONTACT] instanceof FHIRContactDetail) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIRContactDetail($data[self::FIELD_CONTACT]));
            }
        }
        if (isset($data[self::FIELD_CONTENT])) {
            $ext = (isset($data[self::FIELD_CONTENT_EXT]) && is_array($data[self::FIELD_CONTENT_EXT]))
                ? $data[self::FIELD_CONTENT_EXT]
                : null;
            if ($data[self::FIELD_CONTENT] instanceof FHIRCodeSystemContentMode) {
                $this->setContent($data[self::FIELD_CONTENT]);
            } elseif ($ext && is_scalar($data[self::FIELD_CONTENT])) {
                $this->setContent(new FHIRCodeSystemContentMode([FHIRCodeSystemContentMode::FIELD_VALUE => $data[self::FIELD_CONTENT]] + $ext));
            } else {
                $this->setContent(new FHIRCodeSystemContentMode($data[self::FIELD_CONTENT]));
            }
        }
        if (isset($data[self::FIELD_COPYRIGHT])) {
            $ext = (isset($data[self::FIELD_COPYRIGHT_EXT]) && is_array($data[self::FIELD_COPYRIGHT_EXT]))
                ? $data[self::FIELD_COPYRIGHT_EXT]
                : null;
            if ($data[self::FIELD_COPYRIGHT] instanceof FHIRMarkdown) {
                $this->setCopyright($data[self::FIELD_COPYRIGHT]);
            } elseif ($ext && is_scalar($data[self::FIELD_COPYRIGHT])) {
                $this->setCopyright(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_COPYRIGHT]] + $ext));
            } else {
                $this->setCopyright(new FHIRMarkdown($data[self::FIELD_COPYRIGHT]));
            }
        }
        if (isset($data[self::FIELD_COUNT])) {
            $ext = (isset($data[self::FIELD_COUNT_EXT]) && is_array($data[self::FIELD_COUNT_EXT]))
                ? $data[self::FIELD_COUNT_EXT]
                : null;
            if ($data[self::FIELD_COUNT] instanceof FHIRUnsignedInt) {
                $this->setCount($data[self::FIELD_COUNT]);
            } elseif ($ext && is_scalar($data[self::FIELD_COUNT])) {
                $this->setCount(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $data[self::FIELD_COUNT]] + $ext));
            } else {
                $this->setCount(new FHIRUnsignedInt($data[self::FIELD_COUNT]));
            }
        }
        if (isset($data[self::FIELD_DATE])) {
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT]))
                ? $data[self::FIELD_DATE_EXT]
                : null;
            if ($data[self::FIELD_DATE] instanceof FHIRDateTime) {
                $this->setDate($data[self::FIELD_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_DATE])) {
                $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_DATE]] + $ext));
            } else {
                $this->setDate(new FHIRDateTime($data[self::FIELD_DATE]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRMarkdown) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESCRIPTION])) {
                $this->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
            } else {
                $this->setDescription(new FHIRMarkdown($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_EXPERIMENTAL])) {
            $ext = (isset($data[self::FIELD_EXPERIMENTAL_EXT]) && is_array($data[self::FIELD_EXPERIMENTAL_EXT]))
                ? $data[self::FIELD_EXPERIMENTAL_EXT]
                : null;
            if ($data[self::FIELD_EXPERIMENTAL] instanceof FHIRBoolean) {
                $this->setExperimental($data[self::FIELD_EXPERIMENTAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXPERIMENTAL])) {
                $this->setExperimental(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_EXPERIMENTAL]] + $ext));
            } else {
                $this->setExperimental(new FHIRBoolean($data[self::FIELD_EXPERIMENTAL]));
            }
        }
        if (isset($data[self::FIELD_FILTER])) {
            $ext = (isset($data[self::FIELD_FILTER_EXT]) && is_array($data[self::FIELD_FILTER_EXT]))
                ? $data[self::FIELD_FILTER_EXT]
                : null;
            if (is_array($data[self::FIELD_FILTER])) {
                foreach($data[self::FIELD_FILTER] as $i => $v) {
                    if ($v instanceof FHIRCodeSystemFilter) {
                        $this->addFilter($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addFilter(new FHIRCodeSystemFilter([FHIRCodeSystemFilter::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addFilter(new FHIRCodeSystemFilter($v));
                    }
                }
            } elseif ($data[self::FIELD_FILTER] instanceof FHIRCodeSystemFilter) {
                $this->addFilter($data[self::FIELD_FILTER]);
            } elseif ($ext && is_scalar($data[self::FIELD_FILTER])) {
                $this->addFilter(new FHIRCodeSystemFilter([FHIRCodeSystemFilter::FIELD_VALUE => $data[self::FIELD_FILTER]] + $ext));
            } else {
                $this->addFilter(new FHIRCodeSystemFilter($data[self::FIELD_FILTER]));
            }
        }
        if (isset($data[self::FIELD_HIERARCHY_MEANING])) {
            $ext = (isset($data[self::FIELD_HIERARCHY_MEANING_EXT]) && is_array($data[self::FIELD_HIERARCHY_MEANING_EXT]))
                ? $data[self::FIELD_HIERARCHY_MEANING_EXT]
                : null;
            if ($data[self::FIELD_HIERARCHY_MEANING] instanceof FHIRCodeSystemHierarchyMeaning) {
                $this->setHierarchyMeaning($data[self::FIELD_HIERARCHY_MEANING]);
            } elseif ($ext && is_scalar($data[self::FIELD_HIERARCHY_MEANING])) {
                $this->setHierarchyMeaning(new FHIRCodeSystemHierarchyMeaning([FHIRCodeSystemHierarchyMeaning::FIELD_VALUE => $data[self::FIELD_HIERARCHY_MEANING]] + $ext));
            } else {
                $this->setHierarchyMeaning(new FHIRCodeSystemHierarchyMeaning($data[self::FIELD_HIERARCHY_MEANING]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->setIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_JURISDICTION])) {
            if (is_array($data[self::FIELD_JURISDICTION])) {
                foreach($data[self::FIELD_JURISDICTION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addJurisdiction($v);
                    } else {
                        $this->addJurisdiction(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_JURISDICTION] instanceof FHIRCodeableConcept) {
                $this->addJurisdiction($data[self::FIELD_JURISDICTION]);
            } else {
                $this->addJurisdiction(new FHIRCodeableConcept($data[self::FIELD_JURISDICTION]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT]))
                ? $data[self::FIELD_NAME_EXT]
                : null;
            if ($data[self::FIELD_NAME] instanceof FHIRString) {
                $this->setName($data[self::FIELD_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_NAME])) {
                $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NAME]] + $ext));
            } else {
                $this->setName(new FHIRString($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_PROPERTY])) {
            if (is_array($data[self::FIELD_PROPERTY])) {
                foreach($data[self::FIELD_PROPERTY] as $v) {
                    if ($v instanceof FHIRCodeSystemProperty) {
                        $this->addProperty($v);
                    } else {
                        $this->addProperty(new FHIRCodeSystemProperty($v));
                    }
                }
            } else if ($data[self::FIELD_PROPERTY] instanceof FHIRCodeSystemProperty) {
                $this->addProperty($data[self::FIELD_PROPERTY]);
            } else {
                $this->addProperty(new FHIRCodeSystemProperty($data[self::FIELD_PROPERTY]));
            }
        }
        if (isset($data[self::FIELD_PUBLISHER])) {
            $ext = (isset($data[self::FIELD_PUBLISHER_EXT]) && is_array($data[self::FIELD_PUBLISHER_EXT]))
                ? $data[self::FIELD_PUBLISHER_EXT]
                : null;
            if ($data[self::FIELD_PUBLISHER] instanceof FHIRString) {
                $this->setPublisher($data[self::FIELD_PUBLISHER]);
            } elseif ($ext && is_scalar($data[self::FIELD_PUBLISHER])) {
                $this->setPublisher(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PUBLISHER]] + $ext));
            } else {
                $this->setPublisher(new FHIRString($data[self::FIELD_PUBLISHER]));
            }
        }
        if (isset($data[self::FIELD_PURPOSE])) {
            $ext = (isset($data[self::FIELD_PURPOSE_EXT]) && is_array($data[self::FIELD_PURPOSE_EXT]))
                ? $data[self::FIELD_PURPOSE_EXT]
                : null;
            if ($data[self::FIELD_PURPOSE] instanceof FHIRMarkdown) {
                $this->setPurpose($data[self::FIELD_PURPOSE]);
            } elseif ($ext && is_scalar($data[self::FIELD_PURPOSE])) {
                $this->setPurpose(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_PURPOSE]] + $ext));
            } else {
                $this->setPurpose(new FHIRMarkdown($data[self::FIELD_PURPOSE]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRPublicationStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATUS])) {
                $this->setStatus(new FHIRPublicationStatus([FHIRPublicationStatus::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
            } else {
                $this->setStatus(new FHIRPublicationStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_TITLE])) {
            $ext = (isset($data[self::FIELD_TITLE_EXT]) && is_array($data[self::FIELD_TITLE_EXT]))
                ? $data[self::FIELD_TITLE_EXT]
                : null;
            if ($data[self::FIELD_TITLE] instanceof FHIRString) {
                $this->setTitle($data[self::FIELD_TITLE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TITLE])) {
                $this->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_TITLE]] + $ext));
            } else {
                $this->setTitle(new FHIRString($data[self::FIELD_TITLE]));
            }
        }
        if (isset($data[self::FIELD_URL])) {
            $ext = (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT]))
                ? $data[self::FIELD_URL_EXT]
                : null;
            if ($data[self::FIELD_URL] instanceof FHIRUri) {
                $this->setUrl($data[self::FIELD_URL]);
            } elseif ($ext && is_scalar($data[self::FIELD_URL])) {
                $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_URL]] + $ext));
            } else {
                $this->setUrl(new FHIRUri($data[self::FIELD_URL]));
            }
        }
        if (isset($data[self::FIELD_USE_CONTEXT])) {
            if (is_array($data[self::FIELD_USE_CONTEXT])) {
                foreach($data[self::FIELD_USE_CONTEXT] as $v) {
                    if ($v instanceof FHIRUsageContext) {
                        $this->addUseContext($v);
                    } else {
                        $this->addUseContext(new FHIRUsageContext($v));
                    }
                }
            } else if ($data[self::FIELD_USE_CONTEXT] instanceof FHIRUsageContext) {
                $this->addUseContext($data[self::FIELD_USE_CONTEXT]);
            } else {
                $this->addUseContext(new FHIRUsageContext($data[self::FIELD_USE_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_SET])) {
            $ext = (isset($data[self::FIELD_VALUE_SET_EXT]) && is_array($data[self::FIELD_VALUE_SET_EXT]))
                ? $data[self::FIELD_VALUE_SET_EXT]
                : null;
            if ($data[self::FIELD_VALUE_SET] instanceof FHIRUri) {
                $this->setValueSet($data[self::FIELD_VALUE_SET]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_SET])) {
                $this->setValueSet(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_VALUE_SET]] + $ext));
            } else {
                $this->setValueSet(new FHIRUri($data[self::FIELD_VALUE_SET]));
            }
        }
        if (isset($data[self::FIELD_VERSION])) {
            $ext = (isset($data[self::FIELD_VERSION_EXT]) && is_array($data[self::FIELD_VERSION_EXT]))
                ? $data[self::FIELD_VERSION_EXT]
                : null;
            if ($data[self::FIELD_VERSION] instanceof FHIRString) {
                $this->setVersion($data[self::FIELD_VERSION]);
            } elseif ($ext && is_scalar($data[self::FIELD_VERSION])) {
                $this->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_VERSION]] + $ext));
            } else {
                $this->setVersion(new FHIRString($data[self::FIELD_VERSION]));
            }
        }
        if (isset($data[self::FIELD_VERSION_NEEDED])) {
            $ext = (isset($data[self::FIELD_VERSION_NEEDED_EXT]) && is_array($data[self::FIELD_VERSION_NEEDED_EXT]))
                ? $data[self::FIELD_VERSION_NEEDED_EXT]
                : null;
            if ($data[self::FIELD_VERSION_NEEDED] instanceof FHIRBoolean) {
                $this->setVersionNeeded($data[self::FIELD_VERSION_NEEDED]);
            } elseif ($ext && is_scalar($data[self::FIELD_VERSION_NEEDED])) {
                $this->setVersionNeeded(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_VERSION_NEEDED]] + $ext));
            } else {
                $this->setVersionNeeded(new FHIRBoolean($data[self::FIELD_VERSION_NEEDED]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
        return "<CodeSystem{$xmlns}></CodeSystem>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If code comparison is case sensitive when codes within this system are compared
     * to each other.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getCaseSensitive()
    {
        return $this->caseSensitive;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If code comparison is case sensitive when codes within this system are compared
     * to each other.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $caseSensitive
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function setCaseSensitive($caseSensitive = null)
    {
        if (null === $caseSensitive) {
            $this->caseSensitive = null;
            return $this;
        }
        if ($caseSensitive instanceof FHIRBoolean) {
            $this->caseSensitive = $caseSensitive;
            return $this;
        }
        $this->caseSensitive = new FHIRBoolean($caseSensitive);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * True If code system defines a post-composition grammar.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getCompositional()
    {
        return $this->compositional;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * True If code system defines a post-composition grammar.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $compositional
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function setCompositional($compositional = null)
    {
        if (null === $compositional) {
            $this->compositional = null;
            return $this;
        }
        if ($compositional instanceof FHIRBoolean) {
            $this->compositional = $compositional;
            return $this;
        }
        $this->compositional = new FHIRBoolean($compositional);
        return $this;
    }

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * Concepts that are in the code system. The concept definitions are inherently
     * hierarchical, but the definitions must be consulted to determine what the
     * meaning of the hierarchical relationships are.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept[]
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * Concepts that are in the code system. The concept definitions are inherently
     * hierarchical, but the definitions must be consulted to determine what the
     * meaning of the hierarchical relationships are.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept $concept
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function addConcept(FHIRCodeSystemConcept $concept = null)
    {
        $this->concept[] = $concept;
        return $this;
    }

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * Concepts that are in the code system. The concept definitions are inherently
     * hierarchical, but the definitions must be consulted to determine what the
     * meaning of the hierarchical relationships are.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept[] $concept
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function setConcept(array $concept = [])
    {
        $this->concept = [];
        if ([] === $concept) {
            return $this;
        }
        foreach($concept as $v) {
            if ($v instanceof FHIRCodeSystemConcept) {
                $this->addConcept($v);
            } else {
                $this->addConcept(new FHIRCodeSystemConcept($v));
            }
        }
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail $contact
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function addContact(FHIRContactDetail $contact = null)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail[] $contact
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function setContact(array $contact = [])
    {
        $this->contact = [];
        if ([] === $contact) {
            return $this;
        }
        foreach($contact as $v) {
            if ($v instanceof FHIRContactDetail) {
                $this->addContact($v);
            } else {
                $this->addContact(new FHIRContactDetail($v));
            }
        }
        return $this;
    }

    /**
     * How much of the content of the code system - the concepts and codes it defines -
     * are represented in a code system resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How much of the content of the code system - the concepts and codes it defines -
     * are represented in this resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeSystemContentMode
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * How much of the content of the code system - the concepts and codes it defines -
     * are represented in a code system resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How much of the content of the code system - the concepts and codes it defines -
     * are represented in this resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeSystemContentMode $content
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function setContent(FHIRCodeSystemContentMode $content = null)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the code system and/or its contents. Copyright
     * statements are generally legal restrictions on the use and publishing of the
     * code system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the code system and/or its contents. Copyright
     * statements are generally legal restrictions on the use and publishing of the
     * code system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $copyright
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function setCopyright($copyright = null)
    {
        if (null === $copyright) {
            $this->copyright = null;
            return $this;
        }
        if ($copyright instanceof FHIRMarkdown) {
            $this->copyright = $copyright;
            return $this;
        }
        $this->copyright = new FHIRMarkdown($copyright);
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The total number of concepts defined by the code system. Where the code system
     * has a compositional grammar, the count refers to the number of base (primitive)
     * concepts.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The total number of concepts defined by the code system. Where the code system
     * has a compositional grammar, the count refers to the number of base (primitive)
     * concepts.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $count
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function setCount($count = null)
    {
        if (null === $count) {
            $this->count = null;
            return $this;
        }
        if ($count instanceof FHIRUnsignedInt) {
            $this->count = $count;
            return $this;
        }
        $this->count = new FHIRUnsignedInt($count);
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date (and optionally time) when the code system was published. The date must
     * change if and when the business version changes and it must change if the status
     * code changes. In addition, it should change when the substantive content of the
     * code system changes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date (and optionally time) when the code system was published. The date must
     * change if and when the business version changes and it must change if the status
     * code changes. In addition, it should change when the substantive content of the
     * code system changes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $date
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
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
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the code system from a consumer's
     * perspective.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the code system from a consumer's
     * perspective.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $description
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRMarkdown) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRMarkdown($description);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A boolean value to indicate that this code system is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
     * genuine usage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A boolean value to indicate that this code system is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
     * genuine usage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $experimental
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
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
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * A filter that can be used in a value set compose statement when selecting
     * concepts using a filter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemFilter[]
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * A filter that can be used in a value set compose statement when selecting
     * concepts using a filter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemFilter $filter
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function addFilter(FHIRCodeSystemFilter $filter = null)
    {
        $this->filter[] = $filter;
        return $this;
    }

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * A filter that can be used in a value set compose statement when selecting
     * concepts using a filter.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemFilter[] $filter
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function setFilter(array $filter = [])
    {
        $this->filter = [];
        if ([] === $filter) {
            return $this;
        }
        foreach($filter as $v) {
            if ($v instanceof FHIRCodeSystemFilter) {
                $this->addFilter($v);
            } else {
                $this->addFilter(new FHIRCodeSystemFilter($v));
            }
        }
        return $this;
    }

    /**
     * The meaning of the hierarchy of concepts in a code system
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The meaning of the hierarchy of concepts.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeSystemHierarchyMeaning
     */
    public function getHierarchyMeaning()
    {
        return $this->hierarchyMeaning;
    }

    /**
     * The meaning of the hierarchy of concepts in a code system
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The meaning of the hierarchy of concepts.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeSystemHierarchyMeaning $hierarchyMeaning
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function setHierarchyMeaning(FHIRCodeSystemHierarchyMeaning $hierarchyMeaning = null)
    {
        $this->hierarchyMeaning = $hierarchyMeaning;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this code system when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this code system when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the code system is intended to be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the code system is intended to be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function addJurisdiction(FHIRCodeableConcept $jurisdiction = null)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the code system is intended to be used.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $jurisdiction
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function setJurisdiction(array $jurisdiction = [])
    {
        $this->jurisdiction = [];
        if ([] === $jurisdiction) {
            return $this;
        }
        foreach($jurisdiction as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addJurisdiction($v);
            } else {
                $this->addJurisdiction(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A natural language name identifying the code system. This name should be usable
     * as an identifier for the module by machine processing applications such as code
     * generation.
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A natural language name identifying the code system. This name should be usable
     * as an identifier for the module by machine processing applications such as code
     * generation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $name
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
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
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * A property defines an additional slot through which additional information can
     * be provided about a concept.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * A property defines an additional slot through which additional information can
     * be provided about a concept.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty $property
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function addProperty(FHIRCodeSystemProperty $property = null)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * A property defines an additional slot through which additional information can
     * be provided about a concept.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty[] $property
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function setProperty(array $property = [])
    {
        $this->property = [];
        if ([] === $property) {
            return $this;
        }
        foreach($property as $v) {
            if ($v instanceof FHIRCodeSystemProperty) {
                $this->addProperty($v);
            } else {
                $this->addProperty(new FHIRCodeSystemProperty($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the individual or organization that published the code system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the individual or organization that published the code system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $publisher
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
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
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Explaination of why this code system is needed and why it has been designed as
     * it has.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Explaination of why this code system is needed and why it has been designed as
     * it has.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $purpose
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function setPurpose($purpose = null)
    {
        if (null === $purpose) {
            $this->purpose = null;
            return $this;
        }
        if ($purpose instanceof FHIRMarkdown) {
            $this->purpose = $purpose;
            return $this;
        }
        $this->purpose = new FHIRMarkdown($purpose);
        return $this;
    }

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of this code system. Enables tracking the life-cycle of the content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of this code system. Enables tracking the life-cycle of the content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus $status
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function setStatus(FHIRPublicationStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short, descriptive, user-friendly title for the code system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short, descriptive, user-friendly title for the code system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $title
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function setTitle($title = null)
    {
        if (null === $title) {
            $this->title = null;
            return $this;
        }
        if ($title instanceof FHIRString) {
            $this->title = $title;
            return $this;
        }
        $this->title = new FHIRString($title);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An absolute URI that is used to identify this code system when it is referenced
     * in a specification, model, design or an instance. This SHALL be a URL, SHOULD be
     * globally unique, and SHOULD be an address at which this code system is (or will
     * be) published. The URL SHOULD include the major version of the code system. For
     * more information see [Technical and Business Versions](resource.html#versions).
     * This is used in [Coding]{datatypes.html#Coding}.system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An absolute URI that is used to identify this code system when it is referenced
     * in a specification, model, design or an instance. This SHALL be a URL, SHOULD be
     * globally unique, and SHOULD be an address at which this code system is (or will
     * be) published. The URL SHOULD include the major version of the code system. For
     * more information see [Technical and Business Versions](resource.html#versions).
     * This is used in [Coding]{datatypes.html#Coding}.system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $url
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
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
     * Specifies clinical/business/etc metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * for appropriate code system instances.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * Specifies clinical/business/etc metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * for appropriate code system instances.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext $useContext
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function addUseContext(FHIRUsageContext $useContext = null)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * Specifies clinical/business/etc metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * for appropriate code system instances.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext[] $useContext
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function setUseContext(array $useContext = [])
    {
        $this->useContext = [];
        if ([] === $useContext) {
            return $this;
        }
        foreach($useContext as $v) {
            if ($v instanceof FHIRUsageContext) {
                $this->addUseContext($v);
            } else {
                $this->addUseContext(new FHIRUsageContext($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Canonical URL of value set that contains the entire code system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getValueSet()
    {
        return $this->valueSet;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Canonical URL of value set that contains the entire code system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $valueSet
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function setValueSet($valueSet = null)
    {
        if (null === $valueSet) {
            $this->valueSet = null;
            return $this;
        }
        if ($valueSet instanceof FHIRUri) {
            $this->valueSet = $valueSet;
            return $this;
        }
        $this->valueSet = new FHIRUri($valueSet);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The identifier that is used to identify this version of the code system when it
     * is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the code system author and is not expected to be
     * globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence. This is used in
     * [Coding]{datatypes.html#Coding}.version.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The identifier that is used to identify this version of the code system when it
     * is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the code system author and is not expected to be
     * globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence. This is used in
     * [Coding]{datatypes.html#Coding}.version.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $version
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
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
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * This flag is used to signify that the code system has not (or does not) maintain
     * the definitions, and a version must be specified when referencing this code
     * system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getVersionNeeded()
    {
        return $this->versionNeeded;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * This flag is used to signify that the code system has not (or does not) maintain
     * the definitions, and a version must be specified when referencing this code
     * system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $versionNeeded
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function setVersionNeeded($versionNeeded = null)
    {
        if (null === $versionNeeded) {
            $this->versionNeeded = null;
            return $this;
        }
        if ($versionNeeded instanceof FHIRBoolean) {
            $this->versionNeeded = $versionNeeded;
            return $this;
        }
        $this->versionNeeded = new FHIRBoolean($versionNeeded);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
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
                throw new \DomainException(sprintf('FHIRCodeSystem::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCodeSystem::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCodeSystem;
        } elseif (!is_object($type) || !($type instanceof FHIRCodeSystem)) {
            throw new \RuntimeException(sprintf(
                'FHIRCodeSystem::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem or null, %s seen.',
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
        if (isset($attributes->caseSensitive)) {
            $type->setCaseSensitive((string)$attributes->caseSensitive);
        }
        if (isset($children->caseSensitive)) {
            $type->setCaseSensitive(FHIRBoolean::xmlUnserialize($children->caseSensitive));
        }
        if (isset($attributes->compositional)) {
            $type->setCompositional((string)$attributes->compositional);
        }
        if (isset($children->compositional)) {
            $type->setCompositional(FHIRBoolean::xmlUnserialize($children->compositional));
        }
        if (isset($children->concept)) {
            foreach($children->concept as $child) {
                $type->addConcept(FHIRCodeSystemConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->contact)) {
            foreach($children->contact as $child) {
                $type->addContact(FHIRContactDetail::xmlUnserialize($child));
            }
        }
        if (isset($children->content)) {
            $type->setContent(FHIRCodeSystemContentMode::xmlUnserialize($children->content));
        }
        if (isset($attributes->copyright)) {
            $type->setCopyright((string)$attributes->copyright);
        }
        if (isset($children->copyright)) {
            $type->setCopyright(FHIRMarkdown::xmlUnserialize($children->copyright));
        }
        if (isset($attributes->count)) {
            $type->setCount((string)$attributes->count);
        }
        if (isset($children->count)) {
            $type->setCount(FHIRUnsignedInt::xmlUnserialize($children->count));
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
            $type->setDescription(FHIRMarkdown::xmlUnserialize($children->description));
        }
        if (isset($attributes->experimental)) {
            $type->setExperimental((string)$attributes->experimental);
        }
        if (isset($children->experimental)) {
            $type->setExperimental(FHIRBoolean::xmlUnserialize($children->experimental));
        }
        if (isset($children->filter)) {
            foreach($children->filter as $child) {
                $type->addFilter(FHIRCodeSystemFilter::xmlUnserialize($child));
            }
        }
        if (isset($children->hierarchyMeaning)) {
            $type->setHierarchyMeaning(FHIRCodeSystemHierarchyMeaning::xmlUnserialize($children->hierarchyMeaning));
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($children->jurisdiction)) {
            foreach($children->jurisdiction as $child) {
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($children->property)) {
            foreach($children->property as $child) {
                $type->addProperty(FHIRCodeSystemProperty::xmlUnserialize($child));
            }
        }
        if (isset($attributes->publisher)) {
            $type->setPublisher((string)$attributes->publisher);
        }
        if (isset($children->publisher)) {
            $type->setPublisher(FHIRString::xmlUnserialize($children->publisher));
        }
        if (isset($attributes->purpose)) {
            $type->setPurpose((string)$attributes->purpose);
        }
        if (isset($children->purpose)) {
            $type->setPurpose(FHIRMarkdown::xmlUnserialize($children->purpose));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRPublicationStatus::xmlUnserialize($children->status));
        }
        if (isset($attributes->title)) {
            $type->setTitle((string)$attributes->title);
        }
        if (isset($children->title)) {
            $type->setTitle(FHIRString::xmlUnserialize($children->title));
        }
        if (isset($attributes->url)) {
            $type->setUrl((string)$attributes->url);
        }
        if (isset($children->url)) {
            $type->setUrl(FHIRUri::xmlUnserialize($children->url));
        }
        if (isset($children->useContext)) {
            foreach($children->useContext as $child) {
                $type->addUseContext(FHIRUsageContext::xmlUnserialize($child));
            }
        }
        if (isset($attributes->valueSet)) {
            $type->setValueSet((string)$attributes->valueSet);
        }
        if (isset($children->valueSet)) {
            $type->setValueSet(FHIRUri::xmlUnserialize($children->valueSet));
        }
        if (isset($attributes->version)) {
            $type->setVersion((string)$attributes->version);
        }
        if (isset($children->version)) {
            $type->setVersion(FHIRString::xmlUnserialize($children->version));
        }
        if (isset($attributes->versionNeeded)) {
            $type->setVersionNeeded((string)$attributes->versionNeeded);
        }
        if (isset($children->versionNeeded)) {
            $type->setVersionNeeded(FHIRBoolean::xmlUnserialize($children->versionNeeded));
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
        if (null !== ($v = $this->getCaseSensitive())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CASE_SENSITIVE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCompositional())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COMPOSITIONAL, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getConcept())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONCEPT, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTACT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getContent())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCopyright())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COPYRIGHT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCount())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COUNT, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getFilter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FILTER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getHierarchyMeaning())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_HIERARCHY_MEANING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getJurisdiction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_JURISDICTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROPERTY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PUBLISHER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPurpose())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PURPOSE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTitle())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TITLE, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getValueSet())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_SET, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getVersion())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VERSION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getVersionNeeded())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VERSION_NEEDED, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCaseSensitive())) {
            $a[self::FIELD_CASE_SENSITIVE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_CASE_SENSITIVE_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getCompositional())) {
            $a[self::FIELD_COMPOSITIONAL] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_COMPOSITIONAL_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getConcept())) {
            $a[self::FIELD_CONCEPT] = $vs;
        }
        if ([] !== ($vs = $this->getContact())) {
            $a[self::FIELD_CONTACT] = $vs;
        }
        if (null !== ($v = $this->getContent())) {
            $a[self::FIELD_CONTENT] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_CONTENT_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getCopyright())) {
            $a[self::FIELD_COPYRIGHT] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_COPYRIGHT_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getCount())) {
            $a[self::FIELD_COUNT] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_COUNT_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_DATE_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_DESCRIPTION_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getExperimental())) {
            $a[self::FIELD_EXPERIMENTAL] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_EXPERIMENTAL_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getFilter())) {
            $a[self::FIELD_FILTER] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_FILTER][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_FILTER_EXT])) {
                        $a[self::FIELD_FILTER_EXT] = [];
                    }
                    $a[self::FIELD_FILTER_EXT][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getHierarchyMeaning())) {
            $a[self::FIELD_HIERARCHY_MEANING] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_HIERARCHY_MEANING_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_IDENTIFIER_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            $a[self::FIELD_JURISDICTION] = $vs;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_NAME_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            $a[self::FIELD_PROPERTY] = $vs;
        }
        if (null !== ($v = $this->getPublisher())) {
            $a[self::FIELD_PUBLISHER] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_PUBLISHER_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getPurpose())) {
            $a[self::FIELD_PURPOSE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_PURPOSE_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_STATUS_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            $a[self::FIELD_TITLE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_TITLE_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_URL_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getUseContext())) {
            $a[self::FIELD_USE_CONTEXT] = $vs;
        }
        if (null !== ($v = $this->getValueSet())) {
            $a[self::FIELD_VALUE_SET] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_VALUE_SET_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getVersion())) {
            $a[self::FIELD_VERSION] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_VERSION_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getVersionNeeded())) {
            $a[self::FIELD_VERSION_NEEDED] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_VERSION_NEEDED_EXT] = $v;
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