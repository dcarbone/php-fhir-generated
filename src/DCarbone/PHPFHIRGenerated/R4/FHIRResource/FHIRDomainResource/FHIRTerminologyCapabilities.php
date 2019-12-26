<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesClosure;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesCodeSystem;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesImplementation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesSoftware;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesTranslation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesValidateCode;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCapabilityStatementKind;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeSearchSupport;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
 * of a FHIR Terminology Server that may be used as a statement of actual server
 * functionality or a statement of required or desired server implementation.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRTerminologyCapabilities
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRTerminologyCapabilities extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES;
    const FIELD_CLOSURE = 'closure';
    const FIELD_CODE_SEARCH = 'codeSearch';
    const FIELD_CODE_SEARCH_EXT = '_codeSearch';
    const FIELD_CODE_SYSTEM = 'codeSystem';
    const FIELD_CONTACT = 'contact';
    const FIELD_COPYRIGHT = 'copyright';
    const FIELD_COPYRIGHT_EXT = '_copyright';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_EXPANSION = 'expansion';
    const FIELD_EXPERIMENTAL = 'experimental';
    const FIELD_EXPERIMENTAL_EXT = '_experimental';
    const FIELD_IMPLEMENTATION = 'implementation';
    const FIELD_JURISDICTION = 'jurisdiction';
    const FIELD_KIND = 'kind';
    const FIELD_KIND_EXT = '_kind';
    const FIELD_LOCKED_DATE = 'lockedDate';
    const FIELD_LOCKED_DATE_EXT = '_lockedDate';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_PUBLISHER = 'publisher';
    const FIELD_PUBLISHER_EXT = '_publisher';
    const FIELD_PURPOSE = 'purpose';
    const FIELD_PURPOSE_EXT = '_purpose';
    const FIELD_SOFTWARE = 'software';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';
    const FIELD_TRANSLATION = 'translation';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_USE_CONTEXT = 'useContext';
    const FIELD_VALIDATE_CODE = 'validateCode';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Whether the $closure operation is supported.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesClosure
     */
    protected $closure = null;

    /**
     * The degree to which the server supports the code search parameter on ValueSet,
     * if it is supported.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The degree to which the server supports the code search parameter on ValueSet,
     * if it is supported.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeSearchSupport
     */
    protected $codeSearch = null;

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Identifies a code system that is supported by the server. If there is a no code
     * system URL, then this declares the general assumptions a client can make about
     * support for any CodeSystem resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesCodeSystem[]
     */
    protected $codeSystem = [];

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[]
     */
    protected $contact = [];

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the terminology capabilities and/or its
     * contents. Copyright statements are generally legal restrictions on the use and
     * publishing of the terminology capabilities.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
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
     * The date (and optionally time) when the terminology capabilities was published.
     * The date must change when the business version changes and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the terminology capabilities changes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $date = null;

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the terminology capabilities from a
     * consumer's perspective. Typically, this is used when the capability statement
     * describes a desired rather than an actual solution, for example as a formal
     * expression of requirements as part of an RFP.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    protected $description = null;

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Information about the [ValueSet/$expand](valueset-operation-expand.html)
     * operation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion
     */
    protected $expansion = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A Boolean value to indicate that this terminology capabilities is authored for
     * testing purposes (or education/evaluation/marketing) and is not intended to be
     * used for genuine usage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $experimental = null;

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Identifies a specific implementation instance that is described by the
     * terminology capability statement - i.e. a particular installation, rather than
     * the capabilities of a software program.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesImplementation
     */
    protected $implementation = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the terminology capabilities is intended
     * to be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $jurisdiction = [];

    /**
     * How a capability statement is intended to be used.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The way that this statement is intended to be used, to describe an actual
     * running instance of software, a particular product (kind, not instance of
     * software) or a class of implementation (e.g. a desired purchase).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCapabilityStatementKind
     */
    protected $kind = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the server supports lockedDate.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $lockedDate = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the terminology capabilities. This name
     * should be usable as an identifier for the module by machine processing
     * applications such as code generation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $name = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual that published the terminology
     * capabilities.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $publisher = null;

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Explanation of why this terminology capabilities is needed and why it has been
     * designed as it has.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    protected $purpose = null;

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Software that is covered by this terminology capability statement. It is used
     * when the statement describes the capabilities of a particular software version,
     * independent of an installation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesSoftware
     */
    protected $software = null;

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this terminology capabilities. Enables tracking the life-cycle of
     * the content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus
     */
    protected $status = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the terminology capabilities.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $title = null;

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Information about the
     * [ConceptMap/$translate](conceptmap-operation-translate.html) operation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesTranslation
     */
    protected $translation = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this terminology capabilities when it
     * is referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which at which an authoritative instance of this terminology
     * capabilities is (or will be) published. This URL can be the target of a
     * canonical reference. It SHALL remain the same when the terminology capabilities
     * is stored on different servers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    protected $url = null;

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate terminology
     * capabilities instances.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext[]
     */
    protected $useContext = [];

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Information about the
     * [ValueSet/$validate-code](valueset-operation-validate-code.html) operation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesValidateCode
     */
    protected $validateCode = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the terminology
     * capabilities when it is referenced in a specification, model, design or
     * instance. This is an arbitrary value managed by the terminology capabilities
     * author and is not expected to be globally unique. For example, it might be a
     * timestamp (e.g. yyyymmdd) if a managed version is not available. There is also
     * no expectation that versions can be placed in a lexicographical sequence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $version = null;

    /**
     * Validation map for fields in type TerminologyCapabilities
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRTerminologyCapabilities Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTerminologyCapabilities::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CLOSURE])) {
            if ($data[self::FIELD_CLOSURE] instanceof FHIRTerminologyCapabilitiesClosure) {
                $this->setClosure($data[self::FIELD_CLOSURE]);
            } else {
                $this->setClosure(new FHIRTerminologyCapabilitiesClosure($data[self::FIELD_CLOSURE]));
            }
        }
        if (isset($data[self::FIELD_CODE_SEARCH]) || isset($data[self::FIELD_CODE_SEARCH_EXT])) {
            if (isset($data[self::FIELD_CODE_SEARCH])) {
                $value = $data[self::FIELD_CODE_SEARCH];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CODE_SEARCH_EXT]) && is_array($data[self::FIELD_CODE_SEARCH_EXT])) {
                $ext = $data[self::FIELD_CODE_SEARCH_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCodeSearchSupport) {
                    $this->setCodeSearch($value);
                } else if (is_array($value)) {
                    $this->setCodeSearch(new FHIRCodeSearchSupport(array_merge($ext, $value)));
                } else {
                    $this->setCodeSearch(new FHIRCodeSearchSupport([FHIRCodeSearchSupport::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCodeSearch(new FHIRCodeSearchSupport($ext));
            }
        }
        if (isset($data[self::FIELD_CODE_SYSTEM])) {
            if (is_array($data[self::FIELD_CODE_SYSTEM])) {
                foreach($data[self::FIELD_CODE_SYSTEM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRTerminologyCapabilitiesCodeSystem) {
                        $this->addCodeSystem($v);
                    } else {
                        $this->addCodeSystem(new FHIRTerminologyCapabilitiesCodeSystem($v));
                    }
                }
            } else if ($data[self::FIELD_CODE_SYSTEM] instanceof FHIRTerminologyCapabilitiesCodeSystem) {
                $this->addCodeSystem($data[self::FIELD_CODE_SYSTEM]);
            } else {
                $this->addCodeSystem(new FHIRTerminologyCapabilitiesCodeSystem($data[self::FIELD_CODE_SYSTEM]));
            }
        }
        if (isset($data[self::FIELD_CONTACT])) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_COPYRIGHT]) || isset($data[self::FIELD_COPYRIGHT_EXT])) {
            if (isset($data[self::FIELD_COPYRIGHT])) {
                $value = $data[self::FIELD_COPYRIGHT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_COPYRIGHT_EXT]) && is_array($data[self::FIELD_COPYRIGHT_EXT])) {
                $ext = $data[self::FIELD_COPYRIGHT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setCopyright($value);
                } else if (is_array($value)) {
                    $this->setCopyright(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setCopyright(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCopyright(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_DATE]) || isset($data[self::FIELD_DATE_EXT])) {
            if (isset($data[self::FIELD_DATE])) {
                $value = $data[self::FIELD_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT])) {
                $ext = $data[self::FIELD_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDate($value);
                } else if (is_array($value)) {
                    $this->setDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            if (isset($data[self::FIELD_DESCRIPTION])) {
                $value = $data[self::FIELD_DESCRIPTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) {
                $ext = $data[self::FIELD_DESCRIPTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDescription(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_EXPANSION])) {
            if ($data[self::FIELD_EXPANSION] instanceof FHIRTerminologyCapabilitiesExpansion) {
                $this->setExpansion($data[self::FIELD_EXPANSION]);
            } else {
                $this->setExpansion(new FHIRTerminologyCapabilitiesExpansion($data[self::FIELD_EXPANSION]));
            }
        }
        if (isset($data[self::FIELD_EXPERIMENTAL]) || isset($data[self::FIELD_EXPERIMENTAL_EXT])) {
            if (isset($data[self::FIELD_EXPERIMENTAL])) {
                $value = $data[self::FIELD_EXPERIMENTAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EXPERIMENTAL_EXT]) && is_array($data[self::FIELD_EXPERIMENTAL_EXT])) {
                $ext = $data[self::FIELD_EXPERIMENTAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setExperimental($value);
                } else if (is_array($value)) {
                    $this->setExperimental(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setExperimental(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setExperimental(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_IMPLEMENTATION])) {
            if ($data[self::FIELD_IMPLEMENTATION] instanceof FHIRTerminologyCapabilitiesImplementation) {
                $this->setImplementation($data[self::FIELD_IMPLEMENTATION]);
            } else {
                $this->setImplementation(new FHIRTerminologyCapabilitiesImplementation($data[self::FIELD_IMPLEMENTATION]));
            }
        }
        if (isset($data[self::FIELD_JURISDICTION])) {
            if (is_array($data[self::FIELD_JURISDICTION])) {
                foreach($data[self::FIELD_JURISDICTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_KIND]) || isset($data[self::FIELD_KIND_EXT])) {
            if (isset($data[self::FIELD_KIND])) {
                $value = $data[self::FIELD_KIND];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_KIND_EXT]) && is_array($data[self::FIELD_KIND_EXT])) {
                $ext = $data[self::FIELD_KIND_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCapabilityStatementKind) {
                    $this->setKind($value);
                } else if (is_array($value)) {
                    $this->setKind(new FHIRCapabilityStatementKind(array_merge($ext, $value)));
                } else {
                    $this->setKind(new FHIRCapabilityStatementKind([FHIRCapabilityStatementKind::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setKind(new FHIRCapabilityStatementKind($ext));
            }
        }
        if (isset($data[self::FIELD_LOCKED_DATE]) || isset($data[self::FIELD_LOCKED_DATE_EXT])) {
            if (isset($data[self::FIELD_LOCKED_DATE])) {
                $value = $data[self::FIELD_LOCKED_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LOCKED_DATE_EXT]) && is_array($data[self::FIELD_LOCKED_DATE_EXT])) {
                $ext = $data[self::FIELD_LOCKED_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setLockedDate($value);
                } else if (is_array($value)) {
                    $this->setLockedDate(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setLockedDate(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLockedDate(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_NAME]) || isset($data[self::FIELD_NAME_EXT])) {
            if (isset($data[self::FIELD_NAME])) {
                $value = $data[self::FIELD_NAME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) {
                $ext = $data[self::FIELD_NAME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setName(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PUBLISHER]) || isset($data[self::FIELD_PUBLISHER_EXT])) {
            if (isset($data[self::FIELD_PUBLISHER])) {
                $value = $data[self::FIELD_PUBLISHER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PUBLISHER_EXT]) && is_array($data[self::FIELD_PUBLISHER_EXT])) {
                $ext = $data[self::FIELD_PUBLISHER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPublisher($value);
                } else if (is_array($value)) {
                    $this->setPublisher(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPublisher(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPublisher(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PURPOSE]) || isset($data[self::FIELD_PURPOSE_EXT])) {
            if (isset($data[self::FIELD_PURPOSE])) {
                $value = $data[self::FIELD_PURPOSE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PURPOSE_EXT]) && is_array($data[self::FIELD_PURPOSE_EXT])) {
                $ext = $data[self::FIELD_PURPOSE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setPurpose($value);
                } else if (is_array($value)) {
                    $this->setPurpose(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setPurpose(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPurpose(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_SOFTWARE])) {
            if ($data[self::FIELD_SOFTWARE] instanceof FHIRTerminologyCapabilitiesSoftware) {
                $this->setSoftware($data[self::FIELD_SOFTWARE]);
            } else {
                $this->setSoftware(new FHIRTerminologyCapabilitiesSoftware($data[self::FIELD_SOFTWARE]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPublicationStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRPublicationStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRPublicationStatus([FHIRPublicationStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRPublicationStatus($ext));
            }
        }
        if (isset($data[self::FIELD_TITLE]) || isset($data[self::FIELD_TITLE_EXT])) {
            if (isset($data[self::FIELD_TITLE])) {
                $value = $data[self::FIELD_TITLE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TITLE_EXT]) && is_array($data[self::FIELD_TITLE_EXT])) {
                $ext = $data[self::FIELD_TITLE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTitle($value);
                } else if (is_array($value)) {
                    $this->setTitle(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTitle(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_TRANSLATION])) {
            if ($data[self::FIELD_TRANSLATION] instanceof FHIRTerminologyCapabilitiesTranslation) {
                $this->setTranslation($data[self::FIELD_TRANSLATION]);
            } else {
                $this->setTranslation(new FHIRTerminologyCapabilitiesTranslation($data[self::FIELD_TRANSLATION]));
            }
        }
        if (isset($data[self::FIELD_URL]) || isset($data[self::FIELD_URL_EXT])) {
            if (isset($data[self::FIELD_URL])) {
                $value = $data[self::FIELD_URL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT])) {
                $ext = $data[self::FIELD_URL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setUrl($value);
                } else if (is_array($value)) {
                    $this->setUrl(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setUrl(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_USE_CONTEXT])) {
            if (is_array($data[self::FIELD_USE_CONTEXT])) {
                foreach($data[self::FIELD_USE_CONTEXT] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_VALIDATE_CODE])) {
            if ($data[self::FIELD_VALIDATE_CODE] instanceof FHIRTerminologyCapabilitiesValidateCode) {
                $this->setValidateCode($data[self::FIELD_VALIDATE_CODE]);
            } else {
                $this->setValidateCode(new FHIRTerminologyCapabilitiesValidateCode($data[self::FIELD_VALIDATE_CODE]));
            }
        }
        if (isset($data[self::FIELD_VERSION]) || isset($data[self::FIELD_VERSION_EXT])) {
            if (isset($data[self::FIELD_VERSION])) {
                $value = $data[self::FIELD_VERSION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VERSION_EXT]) && is_array($data[self::FIELD_VERSION_EXT])) {
                $ext = $data[self::FIELD_VERSION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setVersion($value);
                } else if (is_array($value)) {
                    $this->setVersion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setVersion(new FHIRString($ext));
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
        return "<TerminologyCapabilities{$xmlns}></TerminologyCapabilities>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Whether the $closure operation is supported.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesClosure
     */
    public function getClosure()
    {
        return $this->closure;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Whether the $closure operation is supported.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesClosure $closure
     * @return static
     */
    public function setClosure(FHIRTerminologyCapabilitiesClosure $closure = null)
    {
        $this->closure = $closure;
        return $this;
    }

    /**
     * The degree to which the server supports the code search parameter on ValueSet,
     * if it is supported.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The degree to which the server supports the code search parameter on ValueSet,
     * if it is supported.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeSearchSupport
     */
    public function getCodeSearch()
    {
        return $this->codeSearch;
    }

    /**
     * The degree to which the server supports the code search parameter on ValueSet,
     * if it is supported.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The degree to which the server supports the code search parameter on ValueSet,
     * if it is supported.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeSearchSupport $codeSearch
     * @return static
     */
    public function setCodeSearch(FHIRCodeSearchSupport $codeSearch = null)
    {
        $this->codeSearch = $codeSearch;
        return $this;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Identifies a code system that is supported by the server. If there is a no code
     * system URL, then this declares the general assumptions a client can make about
     * support for any CodeSystem resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesCodeSystem[]
     */
    public function getCodeSystem()
    {
        return $this->codeSystem;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Identifies a code system that is supported by the server. If there is a no code
     * system URL, then this declares the general assumptions a client can make about
     * support for any CodeSystem resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesCodeSystem $codeSystem
     * @return static
     */
    public function addCodeSystem(FHIRTerminologyCapabilitiesCodeSystem $codeSystem = null)
    {
        $this->codeSystem[] = $codeSystem;
        return $this;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Identifies a code system that is supported by the server. If there is a no code
     * system URL, then this declares the general assumptions a client can make about
     * support for any CodeSystem resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesCodeSystem[] $codeSystem
     * @return static
     */
    public function setCodeSystem(array $codeSystem = [])
    {
        $this->codeSystem = [];
        if ([] === $codeSystem) {
            return $this;
        }
        foreach($codeSystem as $v) {
            if ($v instanceof FHIRTerminologyCapabilitiesCodeSystem) {
                $this->addCodeSystem($v);
            } else {
                $this->addCodeSystem(new FHIRTerminologyCapabilitiesCodeSystem($v));
            }
        }
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail $contact
     * @return static
     */
    public function addContact(FHIRContactDetail $contact = null)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[] $contact
     * @return static
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
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the terminology capabilities and/or its
     * contents. Copyright statements are generally legal restrictions on the use and
     * publishing of the terminology capabilities.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the terminology capabilities and/or its
     * contents. Copyright statements are generally legal restrictions on the use and
     * publishing of the terminology capabilities.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $copyright
     * @return static
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the terminology capabilities was published.
     * The date must change when the business version changes and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the terminology capabilities changes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
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
     * The date (and optionally time) when the terminology capabilities was published.
     * The date must change when the business version changes and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the terminology capabilities changes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $date
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
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the terminology capabilities from a
     * consumer's perspective. Typically, this is used when the capability statement
     * describes a desired rather than an actual solution, for example as a formal
     * expression of requirements as part of an RFP.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the terminology capabilities from a
     * consumer's perspective. Typically, this is used when the capability statement
     * describes a desired rather than an actual solution, for example as a formal
     * expression of requirements as part of an RFP.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $description
     * @return static
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
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Information about the [ValueSet/$expand](valueset-operation-expand.html)
     * operation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion
     */
    public function getExpansion()
    {
        return $this->expansion;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Information about the [ValueSet/$expand](valueset-operation-expand.html)
     * operation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion $expansion
     * @return static
     */
    public function setExpansion(FHIRTerminologyCapabilitiesExpansion $expansion = null)
    {
        $this->expansion = $expansion;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A Boolean value to indicate that this terminology capabilities is authored for
     * testing purposes (or education/evaluation/marketing) and is not intended to be
     * used for genuine usage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A Boolean value to indicate that this terminology capabilities is authored for
     * testing purposes (or education/evaluation/marketing) and is not intended to be
     * used for genuine usage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $experimental
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
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Identifies a specific implementation instance that is described by the
     * terminology capability statement - i.e. a particular installation, rather than
     * the capabilities of a software program.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesImplementation
     */
    public function getImplementation()
    {
        return $this->implementation;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Identifies a specific implementation instance that is described by the
     * terminology capability statement - i.e. a particular installation, rather than
     * the capabilities of a software program.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesImplementation $implementation
     * @return static
     */
    public function setImplementation(FHIRTerminologyCapabilitiesImplementation $implementation = null)
    {
        $this->implementation = $implementation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the terminology capabilities is intended
     * to be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the terminology capabilities is intended
     * to be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the terminology capabilities is intended
     * to be used.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $jurisdiction
     * @return static
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
     * How a capability statement is intended to be used.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The way that this statement is intended to be used, to describe an actual
     * running instance of software, a particular product (kind, not instance of
     * software) or a class of implementation (e.g. a desired purchase).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCapabilityStatementKind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * How a capability statement is intended to be used.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The way that this statement is intended to be used, to describe an actual
     * running instance of software, a particular product (kind, not instance of
     * software) or a class of implementation (e.g. a desired purchase).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCapabilityStatementKind $kind
     * @return static
     */
    public function setKind(FHIRCapabilityStatementKind $kind = null)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the server supports lockedDate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getLockedDate()
    {
        return $this->lockedDate;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the server supports lockedDate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $lockedDate
     * @return static
     */
    public function setLockedDate($lockedDate = null)
    {
        if (null === $lockedDate) {
            $this->lockedDate = null;
            return $this;
        }
        if ($lockedDate instanceof FHIRBoolean) {
            $this->lockedDate = $lockedDate;
            return $this;
        }
        $this->lockedDate = new FHIRBoolean($lockedDate);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the terminology capabilities. This name
     * should be usable as an identifier for the module by machine processing
     * applications such as code generation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the terminology capabilities. This name
     * should be usable as an identifier for the module by machine processing
     * applications such as code generation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $name
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual that published the terminology
     * capabilities.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual that published the terminology
     * capabilities.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $publisher
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
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Explanation of why this terminology capabilities is needed and why it has been
     * designed as it has.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Explanation of why this terminology capabilities is needed and why it has been
     * designed as it has.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $purpose
     * @return static
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
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Software that is covered by this terminology capability statement. It is used
     * when the statement describes the capabilities of a particular software version,
     * independent of an installation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesSoftware
     */
    public function getSoftware()
    {
        return $this->software;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Software that is covered by this terminology capability statement. It is used
     * when the statement describes the capabilities of a particular software version,
     * independent of an installation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesSoftware $software
     * @return static
     */
    public function setSoftware(FHIRTerminologyCapabilitiesSoftware $software = null)
    {
        $this->software = $software;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this terminology capabilities. Enables tracking the life-cycle of
     * the content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this terminology capabilities. Enables tracking the life-cycle of
     * the content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus $status
     * @return static
     */
    public function setStatus(FHIRPublicationStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the terminology capabilities.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the terminology capabilities.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $title
     * @return static
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
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Information about the
     * [ConceptMap/$translate](conceptmap-operation-translate.html) operation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesTranslation
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Information about the
     * [ConceptMap/$translate](conceptmap-operation-translate.html) operation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesTranslation $translation
     * @return static
     */
    public function setTranslation(FHIRTerminologyCapabilitiesTranslation $translation = null)
    {
        $this->translation = $translation;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this terminology capabilities when it
     * is referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which at which an authoritative instance of this terminology
     * capabilities is (or will be) published. This URL can be the target of a
     * canonical reference. It SHALL remain the same when the terminology capabilities
     * is stored on different servers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
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
     * An absolute URI that is used to identify this terminology capabilities when it
     * is referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which at which an authoritative instance of this terminology
     * capabilities is (or will be) published. This URL can be the target of a
     * canonical reference. It SHALL remain the same when the terminology capabilities
     * is stored on different servers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $url
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
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate terminology
     * capabilities instances.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate terminology
     * capabilities instances.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext $useContext
     * @return static
     */
    public function addUseContext(FHIRUsageContext $useContext = null)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate terminology
     * capabilities instances.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext[] $useContext
     * @return static
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
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Information about the
     * [ValueSet/$validate-code](valueset-operation-validate-code.html) operation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesValidateCode
     */
    public function getValidateCode()
    {
        return $this->validateCode;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Information about the
     * [ValueSet/$validate-code](valueset-operation-validate-code.html) operation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesValidateCode $validateCode
     * @return static
     */
    public function setValidateCode(FHIRTerminologyCapabilitiesValidateCode $validateCode = null)
    {
        $this->validateCode = $validateCode;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the terminology
     * capabilities when it is referenced in a specification, model, design or
     * instance. This is an arbitrary value managed by the terminology capabilities
     * author and is not expected to be globally unique. For example, it might be a
     * timestamp (e.g. yyyymmdd) if a managed version is not available. There is also
     * no expectation that versions can be placed in a lexicographical sequence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the terminology
     * capabilities when it is referenced in a specification, model, design or
     * instance. This is an arbitrary value managed by the terminology capabilities
     * author and is not expected to be globally unique. For example, it might be a
     * timestamp (e.g. yyyymmdd) if a managed version is not available. There is also
     * no expectation that versions can be placed in a lexicographical sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $version
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
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getClosure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLOSURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCodeSearch())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE_SEARCH] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCodeSystem())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CODE_SYSTEM, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTACT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCopyright())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COPYRIGHT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExpansion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPANSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExperimental())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPERIMENTAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getImplementation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IMPLEMENTATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_JURISDICTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getKind())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_KIND] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLockedDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCKED_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PUBLISHER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPurpose())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PURPOSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSoftware())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOFTWARE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TITLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTranslation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TRANSLATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getUseContext())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_USE_CONTEXT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getValidateCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALIDATE_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVersion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CLOSURE])) {
            $v = $this->getClosure();
            foreach($validationRules[self::FIELD_CLOSURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_CLOSURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLOSURE])) {
                        $errs[self::FIELD_CLOSURE] = [];
                    }
                    $errs[self::FIELD_CLOSURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE_SEARCH])) {
            $v = $this->getCodeSearch();
            foreach($validationRules[self::FIELD_CODE_SEARCH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_CODE_SEARCH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE_SEARCH])) {
                        $errs[self::FIELD_CODE_SEARCH] = [];
                    }
                    $errs[self::FIELD_CODE_SEARCH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE_SYSTEM])) {
            $v = $this->getCodeSystem();
            foreach($validationRules[self::FIELD_CODE_SYSTEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_CODE_SYSTEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE_SYSTEM])) {
                        $errs[self::FIELD_CODE_SYSTEM] = [];
                    }
                    $errs[self::FIELD_CODE_SYSTEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTACT])) {
            $v = $this->getContact();
            foreach($validationRules[self::FIELD_CONTACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTACT])) {
                        $errs[self::FIELD_CONTACT] = [];
                    }
                    $errs[self::FIELD_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COPYRIGHT])) {
            $v = $this->getCopyright();
            foreach($validationRules[self::FIELD_COPYRIGHT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_COPYRIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COPYRIGHT])) {
                        $errs[self::FIELD_COPYRIGHT] = [];
                    }
                    $errs[self::FIELD_COPYRIGHT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPANSION])) {
            $v = $this->getExpansion();
            foreach($validationRules[self::FIELD_EXPANSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_EXPANSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPANSION])) {
                        $errs[self::FIELD_EXPANSION] = [];
                    }
                    $errs[self::FIELD_EXPANSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPERIMENTAL])) {
            $v = $this->getExperimental();
            foreach($validationRules[self::FIELD_EXPERIMENTAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_EXPERIMENTAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPERIMENTAL])) {
                        $errs[self::FIELD_EXPERIMENTAL] = [];
                    }
                    $errs[self::FIELD_EXPERIMENTAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLEMENTATION])) {
            $v = $this->getImplementation();
            foreach($validationRules[self::FIELD_IMPLEMENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_IMPLEMENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLEMENTATION])) {
                        $errs[self::FIELD_IMPLEMENTATION] = [];
                    }
                    $errs[self::FIELD_IMPLEMENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_JURISDICTION])) {
            $v = $this->getJurisdiction();
            foreach($validationRules[self::FIELD_JURISDICTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_JURISDICTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_JURISDICTION])) {
                        $errs[self::FIELD_JURISDICTION] = [];
                    }
                    $errs[self::FIELD_JURISDICTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_KIND])) {
            $v = $this->getKind();
            foreach($validationRules[self::FIELD_KIND] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_KIND, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_KIND])) {
                        $errs[self::FIELD_KIND] = [];
                    }
                    $errs[self::FIELD_KIND][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCKED_DATE])) {
            $v = $this->getLockedDate();
            foreach($validationRules[self::FIELD_LOCKED_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_LOCKED_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCKED_DATE])) {
                        $errs[self::FIELD_LOCKED_DATE] = [];
                    }
                    $errs[self::FIELD_LOCKED_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLISHER])) {
            $v = $this->getPublisher();
            foreach($validationRules[self::FIELD_PUBLISHER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_PUBLISHER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLISHER])) {
                        $errs[self::FIELD_PUBLISHER] = [];
                    }
                    $errs[self::FIELD_PUBLISHER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PURPOSE])) {
            $v = $this->getPurpose();
            foreach($validationRules[self::FIELD_PURPOSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_PURPOSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PURPOSE])) {
                        $errs[self::FIELD_PURPOSE] = [];
                    }
                    $errs[self::FIELD_PURPOSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOFTWARE])) {
            $v = $this->getSoftware();
            foreach($validationRules[self::FIELD_SOFTWARE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_SOFTWARE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOFTWARE])) {
                        $errs[self::FIELD_SOFTWARE] = [];
                    }
                    $errs[self::FIELD_SOFTWARE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TITLE])) {
            $v = $this->getTitle();
            foreach($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TRANSLATION])) {
            $v = $this->getTranslation();
            foreach($validationRules[self::FIELD_TRANSLATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_TRANSLATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TRANSLATION])) {
                        $errs[self::FIELD_TRANSLATION] = [];
                    }
                    $errs[self::FIELD_TRANSLATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_URL])) {
                        $errs[self::FIELD_URL] = [];
                    }
                    $errs[self::FIELD_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USE_CONTEXT])) {
            $v = $this->getUseContext();
            foreach($validationRules[self::FIELD_USE_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_USE_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USE_CONTEXT])) {
                        $errs[self::FIELD_USE_CONTEXT] = [];
                    }
                    $errs[self::FIELD_USE_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDATE_CODE])) {
            $v = $this->getValidateCode();
            foreach($validationRules[self::FIELD_VALIDATE_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_VALIDATE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDATE_CODE])) {
                        $errs[self::FIELD_VALIDATE_CODE] = [];
                    }
                    $errs[self::FIELD_VALIDATE_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRTerminologyCapabilities $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRTerminologyCapabilities
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
                throw new \DomainException(sprintf('FHIRTerminologyCapabilities::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRTerminologyCapabilities::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRTerminologyCapabilities;
        } elseif (!is_object($type) || !($type instanceof FHIRTerminologyCapabilities)) {
            throw new \RuntimeException(sprintf(
                'FHIRTerminologyCapabilities::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRTerminologyCapabilities or null, %s seen.',
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
        if (isset($children->closure)) {
            $type->setClosure(FHIRTerminologyCapabilitiesClosure::xmlUnserialize($children->closure));
        }
        if (isset($children->codeSearch)) {
            $type->setCodeSearch(FHIRCodeSearchSupport::xmlUnserialize($children->codeSearch));
        }
        if (isset($children->codeSystem)) {
            foreach($children->codeSystem as $child) {
                $type->addCodeSystem(FHIRTerminologyCapabilitiesCodeSystem::xmlUnserialize($child));
            }
        }
        if (isset($children->contact)) {
            foreach($children->contact as $child) {
                $type->addContact(FHIRContactDetail::xmlUnserialize($child));
            }
        }
        if (isset($children->copyright)) {
            $type->setCopyright(FHIRMarkdown::xmlUnserialize($children->copyright));
        }
        if (isset($attributes->copyright)) {
            $pt = $type->getCopyright();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->copyright);
            } else {
                $type->setCopyright((string)$attributes->copyright);
            }
        }
        if (isset($children->date)) {
            $type->setDate(FHIRDateTime::xmlUnserialize($children->date));
        }
        if (isset($attributes->date)) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->date);
            } else {
                $type->setDate((string)$attributes->date);
            }
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRMarkdown::xmlUnserialize($children->description));
        }
        if (isset($attributes->description)) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->description);
            } else {
                $type->setDescription((string)$attributes->description);
            }
        }
        if (isset($children->expansion)) {
            $type->setExpansion(FHIRTerminologyCapabilitiesExpansion::xmlUnserialize($children->expansion));
        }
        if (isset($children->experimental)) {
            $type->setExperimental(FHIRBoolean::xmlUnserialize($children->experimental));
        }
        if (isset($attributes->experimental)) {
            $pt = $type->getExperimental();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->experimental);
            } else {
                $type->setExperimental((string)$attributes->experimental);
            }
        }
        if (isset($children->implementation)) {
            $type->setImplementation(FHIRTerminologyCapabilitiesImplementation::xmlUnserialize($children->implementation));
        }
        if (isset($children->jurisdiction)) {
            foreach($children->jurisdiction as $child) {
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->kind)) {
            $type->setKind(FHIRCapabilityStatementKind::xmlUnserialize($children->kind));
        }
        if (isset($children->lockedDate)) {
            $type->setLockedDate(FHIRBoolean::xmlUnserialize($children->lockedDate));
        }
        if (isset($attributes->lockedDate)) {
            $pt = $type->getLockedDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->lockedDate);
            } else {
                $type->setLockedDate((string)$attributes->lockedDate);
            }
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($attributes->name)) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->name);
            } else {
                $type->setName((string)$attributes->name);
            }
        }
        if (isset($children->publisher)) {
            $type->setPublisher(FHIRString::xmlUnserialize($children->publisher));
        }
        if (isset($attributes->publisher)) {
            $pt = $type->getPublisher();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->publisher);
            } else {
                $type->setPublisher((string)$attributes->publisher);
            }
        }
        if (isset($children->purpose)) {
            $type->setPurpose(FHIRMarkdown::xmlUnserialize($children->purpose));
        }
        if (isset($attributes->purpose)) {
            $pt = $type->getPurpose();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->purpose);
            } else {
                $type->setPurpose((string)$attributes->purpose);
            }
        }
        if (isset($children->software)) {
            $type->setSoftware(FHIRTerminologyCapabilitiesSoftware::xmlUnserialize($children->software));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRPublicationStatus::xmlUnserialize($children->status));
        }
        if (isset($children->title)) {
            $type->setTitle(FHIRString::xmlUnserialize($children->title));
        }
        if (isset($attributes->title)) {
            $pt = $type->getTitle();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->title);
            } else {
                $type->setTitle((string)$attributes->title);
            }
        }
        if (isset($children->translation)) {
            $type->setTranslation(FHIRTerminologyCapabilitiesTranslation::xmlUnserialize($children->translation));
        }
        if (isset($children->url)) {
            $type->setUrl(FHIRUri::xmlUnserialize($children->url));
        }
        if (isset($attributes->url)) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->url);
            } else {
                $type->setUrl((string)$attributes->url);
            }
        }
        if (isset($children->useContext)) {
            foreach($children->useContext as $child) {
                $type->addUseContext(FHIRUsageContext::xmlUnserialize($child));
            }
        }
        if (isset($children->validateCode)) {
            $type->setValidateCode(FHIRTerminologyCapabilitiesValidateCode::xmlUnserialize($children->validateCode));
        }
        if (isset($children->version)) {
            $type->setVersion(FHIRString::xmlUnserialize($children->version));
        }
        if (isset($attributes->version)) {
            $pt = $type->getVersion();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->version);
            } else {
                $type->setVersion((string)$attributes->version);
            }
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
        if (null !== ($v = $this->getClosure())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CLOSURE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCodeSearch())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE_SEARCH, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getCodeSystem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CODE_SYSTEM, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getCopyright())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COPYRIGHT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExpansion())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPANSION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExperimental())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPERIMENTAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getImplementation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IMPLEMENTATION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_JURISDICTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getKind())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_KIND, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLockedDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOCKED_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPublisher())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PUBLISHER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPurpose())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PURPOSE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSoftware())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOFTWARE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTitle())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TITLE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTranslation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TRANSLATION, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getValidateCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALIDATE_CODE, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getClosure())) {
            $a[self::FIELD_CLOSURE] = $v;
        }
        if (null !== ($v = $this->getCodeSearch())) {
            $a[self::FIELD_CODE_SEARCH] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCodeSearchSupport::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCodeSearchSupport::FIELD_VALUE]);
                $a[self::FIELD_CODE_SEARCH_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getCodeSystem())) {
            $a[self::FIELD_CODE_SYSTEM] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CODE_SYSTEM][] = $v;
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            $a[self::FIELD_CONTACT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONTACT][] = $v;
            }
        }
        if (null !== ($v = $this->getCopyright())) {
            $a[self::FIELD_COPYRIGHT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_COPYRIGHT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getExpansion())) {
            $a[self::FIELD_EXPANSION] = $v;
        }
        if (null !== ($v = $this->getExperimental())) {
            $a[self::FIELD_EXPERIMENTAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_EXPERIMENTAL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getImplementation())) {
            $a[self::FIELD_IMPLEMENTATION] = $v;
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            $a[self::FIELD_JURISDICTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_JURISDICTION][] = $v;
            }
        }
        if (null !== ($v = $this->getKind())) {
            $a[self::FIELD_KIND] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCapabilityStatementKind::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCapabilityStatementKind::FIELD_VALUE]);
                $a[self::FIELD_KIND_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getLockedDate())) {
            $a[self::FIELD_LOCKED_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_LOCKED_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_NAME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            $a[self::FIELD_PUBLISHER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PUBLISHER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPurpose())) {
            $a[self::FIELD_PURPOSE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_PURPOSE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSoftware())) {
            $a[self::FIELD_SOFTWARE] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPublicationStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPublicationStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            $a[self::FIELD_TITLE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_TITLE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getTranslation())) {
            $a[self::FIELD_TRANSLATION] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_URL_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getUseContext())) {
            $a[self::FIELD_USE_CONTEXT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_USE_CONTEXT][] = $v;
            }
        }
        if (null !== ($v = $this->getValidateCode())) {
            $a[self::FIELD_VALIDATE_CODE] = $v;
        }
        if (null !== ($v = $this->getVersion())) {
            $a[self::FIELD_VERSION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_VERSION_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
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