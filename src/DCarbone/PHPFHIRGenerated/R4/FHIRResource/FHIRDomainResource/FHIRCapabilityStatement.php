<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:05+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementDocument;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementImplementation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementMessaging;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSoftware;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCapabilityStatementKind;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFHIRVersion;
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
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
 * Server for a particular version of FHIR that may be used as a statement of
 * actual server functionality or a statement of required or desired server
 * implementation.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRCapabilityStatement
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRCapabilityStatement extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CONTACT = 'contact';
    const FIELD_COPYRIGHT = 'copyright';
    const FIELD_COPYRIGHT_EXT = '_copyright';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DOCUMENT = 'document';
    const FIELD_EXPERIMENTAL = 'experimental';
    const FIELD_EXPERIMENTAL_EXT = '_experimental';
    const FIELD_FHIR_VERSION = 'fhirVersion';
    const FIELD_FHIR_VERSION_EXT = '_fhirVersion';
    const FIELD_FORMAT = 'format';
    const FIELD_FORMAT_EXT = '_format';
    const FIELD_IMPLEMENTATION = 'implementation';
    const FIELD_IMPLEMENTATION_GUIDE = 'implementationGuide';
    const FIELD_IMPLEMENTATION_GUIDE_EXT = '_implementationGuide';
    const FIELD_IMPORTS = 'imports';
    const FIELD_IMPORTS_EXT = '_imports';
    const FIELD_INSTANTIATES = 'instantiates';
    const FIELD_INSTANTIATES_EXT = '_instantiates';
    const FIELD_JURISDICTION = 'jurisdiction';
    const FIELD_KIND = 'kind';
    const FIELD_KIND_EXT = '_kind';
    const FIELD_MESSAGING = 'messaging';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_PATCH_FORMAT = 'patchFormat';
    const FIELD_PATCH_FORMAT_EXT = '_patchFormat';
    const FIELD_PUBLISHER = 'publisher';
    const FIELD_PUBLISHER_EXT = '_publisher';
    const FIELD_PURPOSE = 'purpose';
    const FIELD_PURPOSE_EXT = '_purpose';
    const FIELD_REST = 'rest';
    const FIELD_SOFTWARE = 'software';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_USE_CONTEXT = 'useContext';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[]
     */
    private $contact = [];
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the capability statement and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the capability statement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    private $copyright = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date (and optionally time) when the capability statement was published. The
     * date must change when the business version changes and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the capability statement changes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    private $date = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the capability statement from a
     * consumer's perspective. Typically, this is used when the capability statement
     * describes a desired rather than an actual solution, for example as a formal
     * expression of requirements as part of an RFP.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    private $description = null;
    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * A document definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementDocument[]
     */
    private $document = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A Boolean value to indicate that this capability statement is authored for
     * testing purposes (or education/evaluation/marketing) and is not intended to be
     * used for genuine usage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    private $experimental = null;
    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The version of the FHIR specification that this CapabilityStatement describes
     * (which SHALL be the same as the FHIR version of the CapabilityStatement itself).
     * There is no default value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFHIRVersion
     */
    private $fhirVersion = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A list of the formats supported by this implementation using their content
     * types.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode[]
     */
    private $format = [];
    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * Identifies a specific implementation instance that is described by the
     * capability statement - i.e. a particular installation, rather than the
     * capabilities of a software program.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementImplementation
     */
    private $implementation = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A list of implementation guides that the server does (or should) support in
     * their entirety.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    private $implementationGuide = [];
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Reference to a canonical URL of another CapabilityStatement that this software
     * adds to. The capability statement automatically includes everything in the other
     * statement, and it is not duplicated, though the server may repeat the same
     * resources, interactions and operations to add additional details to them.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    private $imports = [];
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Reference to a canonical URL of another CapabilityStatement that this software
     * implements. This capability statement is a published API description that
     * corresponds to a business service. The server may actually implement a subset of
     * the capability statement it claims to implement, so the capability statement
     * must specify the full capability details.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    private $instantiates = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the capability statement is intended to be
     * used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $jurisdiction = [];
    /**
     * How a capability statement is intended to be used.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The way that this statement is intended to be used, to describe an actual
     * running instance of software, a particular product (kind, not instance of
     * software) or a class of implementation (e.g. a desired purchase).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCapabilityStatementKind
     */
    private $kind = null;
    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * A description of the messaging capabilities of the solution.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementMessaging[]
     */
    private $messaging = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A natural language name identifying the capability statement. This name should
     * be usable as an identifier for the module by machine processing applications
     * such as code generation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $name = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A list of the patch formats supported by this implementation using their content
     * types.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode[]
     */
    private $patchFormat = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the organization or individual that published the capability
     * statement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $publisher = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Explanation of why this capability statement is needed and why it has been
     * designed as it has.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    private $purpose = null;
    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * A definition of the restful capabilities of the solution, if any.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest[]
     */
    private $rest = [];
    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * Software that is covered by this capability statement. It is used when the
     * capability statement describes the capabilities of a particular software
     * version, independent of an installation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSoftware
     */
    private $software = null;
    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of this capability statement. Enables tracking the life-cycle of the
     * content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus
     */
    private $status = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short, descriptive, user-friendly title for the capability statement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $title = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An absolute URI that is used to identify this capability statement when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which at which an authoritative instance of this capability statement
     * is (or will be) published. This URL can be the target of a canonical reference.
     * It SHALL remain the same when the capability statement is stored on different
     * servers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    private $url = null;
    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate capability
     * statement instances.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext[]
     */
    private $useContext = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The identifier that is used to identify this version of the capability statement
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the capability statement author and is not expected
     * to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $version = null;

    /**
     * FHIRCapabilityStatement Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatement::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
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
        if (isset($data[self::FIELD_DOCUMENT])) {
            if (is_array($data[self::FIELD_DOCUMENT])) {
                foreach($data[self::FIELD_DOCUMENT] as $v) {
                    if ($v instanceof FHIRCapabilityStatementDocument) {
                        $this->addDocument($v);
                    } else {
                        $this->addDocument(new FHIRCapabilityStatementDocument($v));
                    }
                }
            } else if ($data[self::FIELD_DOCUMENT] instanceof FHIRCapabilityStatementDocument) {
                $this->addDocument($data[self::FIELD_DOCUMENT]);
            } else {
                $this->addDocument(new FHIRCapabilityStatementDocument($data[self::FIELD_DOCUMENT]));
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
        if (isset($data[self::FIELD_FHIR_VERSION])) {
            $ext = (isset($data[self::FIELD_FHIR_VERSION_EXT]) && is_array($data[self::FIELD_FHIR_VERSION_EXT]))
                ? $data[self::FIELD_FHIR_VERSION_EXT]
                : null;
            if ($data[self::FIELD_FHIR_VERSION] instanceof FHIRFHIRVersion) {
                $this->setFhirVersion($data[self::FIELD_FHIR_VERSION]);
            } elseif ($ext && is_scalar($data[self::FIELD_FHIR_VERSION])) {
                $this->setFhirVersion(new FHIRFHIRVersion([FHIRFHIRVersion::FIELD_VALUE => $data[self::FIELD_FHIR_VERSION]] + $ext));
            } else {
                $this->setFhirVersion(new FHIRFHIRVersion($data[self::FIELD_FHIR_VERSION]));
            }
        }
        if (isset($data[self::FIELD_FORMAT])) {
            $ext = (isset($data[self::FIELD_FORMAT_EXT]) && is_array($data[self::FIELD_FORMAT_EXT]))
                ? $data[self::FIELD_FORMAT_EXT]
                : null;
            if (is_array($data[self::FIELD_FORMAT])) {
                foreach($data[self::FIELD_FORMAT] as $i => $v) {
                    if ($v instanceof FHIRCode) {
                        $this->addFormat($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addFormat(new FHIRCode([FHIRCode::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addFormat(new FHIRCode($v));
                    }
                }
            } elseif ($data[self::FIELD_FORMAT] instanceof FHIRCode) {
                $this->addFormat($data[self::FIELD_FORMAT]);
            } elseif ($ext && is_scalar($data[self::FIELD_FORMAT])) {
                $this->addFormat(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_FORMAT]] + $ext));
            } else {
                $this->addFormat(new FHIRCode($data[self::FIELD_FORMAT]));
            }
        }
        if (isset($data[self::FIELD_IMPLEMENTATION])) {
            if ($data[self::FIELD_IMPLEMENTATION] instanceof FHIRCapabilityStatementImplementation) {
                $this->setImplementation($data[self::FIELD_IMPLEMENTATION]);
            } else {
                $this->setImplementation(new FHIRCapabilityStatementImplementation($data[self::FIELD_IMPLEMENTATION]));
            }
        }
        if (isset($data[self::FIELD_IMPLEMENTATION_GUIDE])) {
            $ext = (isset($data[self::FIELD_IMPLEMENTATION_GUIDE_EXT]) && is_array($data[self::FIELD_IMPLEMENTATION_GUIDE_EXT]))
                ? $data[self::FIELD_IMPLEMENTATION_GUIDE_EXT]
                : null;
            if (is_array($data[self::FIELD_IMPLEMENTATION_GUIDE])) {
                foreach($data[self::FIELD_IMPLEMENTATION_GUIDE] as $i => $v) {
                    if ($v instanceof FHIRCanonical) {
                        $this->addImplementationGuide($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addImplementationGuide(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addImplementationGuide(new FHIRCanonical($v));
                    }
                }
            } elseif ($data[self::FIELD_IMPLEMENTATION_GUIDE] instanceof FHIRCanonical) {
                $this->addImplementationGuide($data[self::FIELD_IMPLEMENTATION_GUIDE]);
            } elseif ($ext && is_scalar($data[self::FIELD_IMPLEMENTATION_GUIDE])) {
                $this->addImplementationGuide(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_IMPLEMENTATION_GUIDE]] + $ext));
            } else {
                $this->addImplementationGuide(new FHIRCanonical($data[self::FIELD_IMPLEMENTATION_GUIDE]));
            }
        }
        if (isset($data[self::FIELD_IMPORTS])) {
            $ext = (isset($data[self::FIELD_IMPORTS_EXT]) && is_array($data[self::FIELD_IMPORTS_EXT]))
                ? $data[self::FIELD_IMPORTS_EXT]
                : null;
            if (is_array($data[self::FIELD_IMPORTS])) {
                foreach($data[self::FIELD_IMPORTS] as $i => $v) {
                    if ($v instanceof FHIRCanonical) {
                        $this->addImports($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addImports(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addImports(new FHIRCanonical($v));
                    }
                }
            } elseif ($data[self::FIELD_IMPORTS] instanceof FHIRCanonical) {
                $this->addImports($data[self::FIELD_IMPORTS]);
            } elseif ($ext && is_scalar($data[self::FIELD_IMPORTS])) {
                $this->addImports(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_IMPORTS]] + $ext));
            } else {
                $this->addImports(new FHIRCanonical($data[self::FIELD_IMPORTS]));
            }
        }
        if (isset($data[self::FIELD_INSTANTIATES])) {
            $ext = (isset($data[self::FIELD_INSTANTIATES_EXT]) && is_array($data[self::FIELD_INSTANTIATES_EXT]))
                ? $data[self::FIELD_INSTANTIATES_EXT]
                : null;
            if (is_array($data[self::FIELD_INSTANTIATES])) {
                foreach($data[self::FIELD_INSTANTIATES] as $i => $v) {
                    if ($v instanceof FHIRCanonical) {
                        $this->addInstantiates($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addInstantiates(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addInstantiates(new FHIRCanonical($v));
                    }
                }
            } elseif ($data[self::FIELD_INSTANTIATES] instanceof FHIRCanonical) {
                $this->addInstantiates($data[self::FIELD_INSTANTIATES]);
            } elseif ($ext && is_scalar($data[self::FIELD_INSTANTIATES])) {
                $this->addInstantiates(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_INSTANTIATES]] + $ext));
            } else {
                $this->addInstantiates(new FHIRCanonical($data[self::FIELD_INSTANTIATES]));
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
        if (isset($data[self::FIELD_KIND])) {
            $ext = (isset($data[self::FIELD_KIND_EXT]) && is_array($data[self::FIELD_KIND_EXT]))
                ? $data[self::FIELD_KIND_EXT]
                : null;
            if ($data[self::FIELD_KIND] instanceof FHIRCapabilityStatementKind) {
                $this->setKind($data[self::FIELD_KIND]);
            } elseif ($ext && is_scalar($data[self::FIELD_KIND])) {
                $this->setKind(new FHIRCapabilityStatementKind([FHIRCapabilityStatementKind::FIELD_VALUE => $data[self::FIELD_KIND]] + $ext));
            } else {
                $this->setKind(new FHIRCapabilityStatementKind($data[self::FIELD_KIND]));
            }
        }
        if (isset($data[self::FIELD_MESSAGING])) {
            if (is_array($data[self::FIELD_MESSAGING])) {
                foreach($data[self::FIELD_MESSAGING] as $v) {
                    if ($v instanceof FHIRCapabilityStatementMessaging) {
                        $this->addMessaging($v);
                    } else {
                        $this->addMessaging(new FHIRCapabilityStatementMessaging($v));
                    }
                }
            } else if ($data[self::FIELD_MESSAGING] instanceof FHIRCapabilityStatementMessaging) {
                $this->addMessaging($data[self::FIELD_MESSAGING]);
            } else {
                $this->addMessaging(new FHIRCapabilityStatementMessaging($data[self::FIELD_MESSAGING]));
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
        if (isset($data[self::FIELD_PATCH_FORMAT])) {
            $ext = (isset($data[self::FIELD_PATCH_FORMAT_EXT]) && is_array($data[self::FIELD_PATCH_FORMAT_EXT]))
                ? $data[self::FIELD_PATCH_FORMAT_EXT]
                : null;
            if (is_array($data[self::FIELD_PATCH_FORMAT])) {
                foreach($data[self::FIELD_PATCH_FORMAT] as $i => $v) {
                    if ($v instanceof FHIRCode) {
                        $this->addPatchFormat($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addPatchFormat(new FHIRCode([FHIRCode::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addPatchFormat(new FHIRCode($v));
                    }
                }
            } elseif ($data[self::FIELD_PATCH_FORMAT] instanceof FHIRCode) {
                $this->addPatchFormat($data[self::FIELD_PATCH_FORMAT]);
            } elseif ($ext && is_scalar($data[self::FIELD_PATCH_FORMAT])) {
                $this->addPatchFormat(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_PATCH_FORMAT]] + $ext));
            } else {
                $this->addPatchFormat(new FHIRCode($data[self::FIELD_PATCH_FORMAT]));
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
        if (isset($data[self::FIELD_REST])) {
            if (is_array($data[self::FIELD_REST])) {
                foreach($data[self::FIELD_REST] as $v) {
                    if ($v instanceof FHIRCapabilityStatementRest) {
                        $this->addRest($v);
                    } else {
                        $this->addRest(new FHIRCapabilityStatementRest($v));
                    }
                }
            } else if ($data[self::FIELD_REST] instanceof FHIRCapabilityStatementRest) {
                $this->addRest($data[self::FIELD_REST]);
            } else {
                $this->addRest(new FHIRCapabilityStatementRest($data[self::FIELD_REST]));
            }
        }
        if (isset($data[self::FIELD_SOFTWARE])) {
            if ($data[self::FIELD_SOFTWARE] instanceof FHIRCapabilityStatementSoftware) {
                $this->setSoftware($data[self::FIELD_SOFTWARE]);
            } else {
                $this->setSoftware(new FHIRCapabilityStatementSoftware($data[self::FIELD_SOFTWARE]));
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
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
        return "<CapabilityStatement{$xmlns}></CapabilityStatement>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail $contact
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[] $contact
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the capability statement and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the capability statement.
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the capability statement and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the capability statement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $copyright
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date (and optionally time) when the capability statement was published. The
     * date must change when the business version changes and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the capability statement changes.
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date (and optionally time) when the capability statement was published. The
     * date must change when the business version changes and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the capability statement changes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $date
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the capability statement from a
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the capability statement from a
     * consumer's perspective. Typically, this is used when the capability statement
     * describes a desired rather than an actual solution, for example as a formal
     * expression of requirements as part of an RFP.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $description
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
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
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * A document definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementDocument[]
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * A document definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementDocument $document
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function addDocument(FHIRCapabilityStatementDocument $document = null)
    {
        $this->document[] = $document;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * A document definition.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementDocument[] $document
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function setDocument(array $document = [])
    {
        $this->document = [];
        if ([] === $document) {
            return $this;
        }
        foreach($document as $v) {
            if ($v instanceof FHIRCapabilityStatementDocument) {
                $this->addDocument($v);
            } else {
                $this->addDocument(new FHIRCapabilityStatementDocument($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A Boolean value to indicate that this capability statement is authored for
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A Boolean value to indicate that this capability statement is authored for
     * testing purposes (or education/evaluation/marketing) and is not intended to be
     * used for genuine usage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $experimental
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The version of the FHIR specification that this CapabilityStatement describes
     * (which SHALL be the same as the FHIR version of the CapabilityStatement itself).
     * There is no default value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFHIRVersion
     */
    public function getFhirVersion()
    {
        return $this->fhirVersion;
    }

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The version of the FHIR specification that this CapabilityStatement describes
     * (which SHALL be the same as the FHIR version of the CapabilityStatement itself).
     * There is no default value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFHIRVersion $fhirVersion
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function setFhirVersion(FHIRFHIRVersion $fhirVersion = null)
    {
        $this->fhirVersion = $fhirVersion;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A list of the formats supported by this implementation using their content
     * types.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode[]
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A list of the formats supported by this implementation using their content
     * types.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $format
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function addFormat($format = null)
    {
        if (null === $format) {
            $this->format = [];
            return $this;
        }
        if ($format instanceof FHIRCode) {
            $this->format[] = $format;
            return $this;
        }
        $this->format[] = new FHIRCode($format);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A list of the formats supported by this implementation using their content
     * types.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode[] $format
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function setFormat(array $format = [])
    {
        $this->format = [];
        if ([] === $format) {
            return $this;
        }
        foreach($format as $v) {
            if ($v instanceof FHIRCode) {
                $this->addFormat($v);
            } else {
                $this->addFormat(new FHIRCode($v));
            }
        }
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * Identifies a specific implementation instance that is described by the
     * capability statement - i.e. a particular installation, rather than the
     * capabilities of a software program.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementImplementation
     */
    public function getImplementation()
    {
        return $this->implementation;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * Identifies a specific implementation instance that is described by the
     * capability statement - i.e. a particular installation, rather than the
     * capabilities of a software program.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementImplementation $implementation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function setImplementation(FHIRCapabilityStatementImplementation $implementation = null)
    {
        $this->implementation = $implementation;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A list of implementation guides that the server does (or should) support in
     * their entirety.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    public function getImplementationGuide()
    {
        return $this->implementationGuide;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A list of implementation guides that the server does (or should) support in
     * their entirety.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $implementationGuide
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function addImplementationGuide($implementationGuide = null)
    {
        if (null === $implementationGuide) {
            $this->implementationGuide = [];
            return $this;
        }
        if ($implementationGuide instanceof FHIRCanonical) {
            $this->implementationGuide[] = $implementationGuide;
            return $this;
        }
        $this->implementationGuide[] = new FHIRCanonical($implementationGuide);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A list of implementation guides that the server does (or should) support in
     * their entirety.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[] $implementationGuide
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function setImplementationGuide(array $implementationGuide = [])
    {
        $this->implementationGuide = [];
        if ([] === $implementationGuide) {
            return $this;
        }
        foreach($implementationGuide as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->addImplementationGuide($v);
            } else {
                $this->addImplementationGuide(new FHIRCanonical($v));
            }
        }
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Reference to a canonical URL of another CapabilityStatement that this software
     * adds to. The capability statement automatically includes everything in the other
     * statement, and it is not duplicated, though the server may repeat the same
     * resources, interactions and operations to add additional details to them.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    public function getImports()
    {
        return $this->imports;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Reference to a canonical URL of another CapabilityStatement that this software
     * adds to. The capability statement automatically includes everything in the other
     * statement, and it is not duplicated, though the server may repeat the same
     * resources, interactions and operations to add additional details to them.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $imports
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function addImports($imports = null)
    {
        if (null === $imports) {
            $this->imports = [];
            return $this;
        }
        if ($imports instanceof FHIRCanonical) {
            $this->imports[] = $imports;
            return $this;
        }
        $this->imports[] = new FHIRCanonical($imports);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Reference to a canonical URL of another CapabilityStatement that this software
     * adds to. The capability statement automatically includes everything in the other
     * statement, and it is not duplicated, though the server may repeat the same
     * resources, interactions and operations to add additional details to them.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[] $imports
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function setImports(array $imports = [])
    {
        $this->imports = [];
        if ([] === $imports) {
            return $this;
        }
        foreach($imports as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->addImports($v);
            } else {
                $this->addImports(new FHIRCanonical($v));
            }
        }
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Reference to a canonical URL of another CapabilityStatement that this software
     * implements. This capability statement is a published API description that
     * corresponds to a business service. The server may actually implement a subset of
     * the capability statement it claims to implement, so the capability statement
     * must specify the full capability details.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    public function getInstantiates()
    {
        return $this->instantiates;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Reference to a canonical URL of another CapabilityStatement that this software
     * implements. This capability statement is a published API description that
     * corresponds to a business service. The server may actually implement a subset of
     * the capability statement it claims to implement, so the capability statement
     * must specify the full capability details.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $instantiates
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function addInstantiates($instantiates = null)
    {
        if (null === $instantiates) {
            $this->instantiates = [];
            return $this;
        }
        if ($instantiates instanceof FHIRCanonical) {
            $this->instantiates[] = $instantiates;
            return $this;
        }
        $this->instantiates[] = new FHIRCanonical($instantiates);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Reference to a canonical URL of another CapabilityStatement that this software
     * implements. This capability statement is a published API description that
     * corresponds to a business service. The server may actually implement a subset of
     * the capability statement it claims to implement, so the capability statement
     * must specify the full capability details.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[] $instantiates
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function setInstantiates(array $instantiates = [])
    {
        $this->instantiates = [];
        if ([] === $instantiates) {
            return $this;
        }
        foreach($instantiates as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->addInstantiates($v);
            } else {
                $this->addInstantiates(new FHIRCanonical($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the capability statement is intended to be
     * used.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the capability statement is intended to be
     * used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
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
     * A legal or geographic region in which the capability statement is intended to be
     * used.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $jurisdiction
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
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
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The way that this statement is intended to be used, to describe an actual
     * running instance of software, a particular product (kind, not instance of
     * software) or a class of implementation (e.g. a desired purchase).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCapabilityStatementKind $kind
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function setKind(FHIRCapabilityStatementKind $kind = null)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * A description of the messaging capabilities of the solution.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementMessaging[]
     */
    public function getMessaging()
    {
        return $this->messaging;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * A description of the messaging capabilities of the solution.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementMessaging $messaging
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function addMessaging(FHIRCapabilityStatementMessaging $messaging = null)
    {
        $this->messaging[] = $messaging;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * A description of the messaging capabilities of the solution.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementMessaging[] $messaging
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function setMessaging(array $messaging = [])
    {
        $this->messaging = [];
        if ([] === $messaging) {
            return $this;
        }
        foreach($messaging as $v) {
            if ($v instanceof FHIRCapabilityStatementMessaging) {
                $this->addMessaging($v);
            } else {
                $this->addMessaging(new FHIRCapabilityStatementMessaging($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A natural language name identifying the capability statement. This name should
     * be usable as an identifier for the module by machine processing applications
     * such as code generation.
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A natural language name identifying the capability statement. This name should
     * be usable as an identifier for the module by machine processing applications
     * such as code generation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $name
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
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
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A list of the patch formats supported by this implementation using their content
     * types.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode[]
     */
    public function getPatchFormat()
    {
        return $this->patchFormat;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A list of the patch formats supported by this implementation using their content
     * types.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $patchFormat
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function addPatchFormat($patchFormat = null)
    {
        if (null === $patchFormat) {
            $this->patchFormat = [];
            return $this;
        }
        if ($patchFormat instanceof FHIRCode) {
            $this->patchFormat[] = $patchFormat;
            return $this;
        }
        $this->patchFormat[] = new FHIRCode($patchFormat);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A list of the patch formats supported by this implementation using their content
     * types.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode[] $patchFormat
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function setPatchFormat(array $patchFormat = [])
    {
        $this->patchFormat = [];
        if ([] === $patchFormat) {
            return $this;
        }
        foreach($patchFormat as $v) {
            if ($v instanceof FHIRCode) {
                $this->addPatchFormat($v);
            } else {
                $this->addPatchFormat(new FHIRCode($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the organization or individual that published the capability
     * statement.
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the organization or individual that published the capability
     * statement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $publisher
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Explanation of why this capability statement is needed and why it has been
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Explanation of why this capability statement is needed and why it has been
     * designed as it has.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $purpose
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
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
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * A definition of the restful capabilities of the solution, if any.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest[]
     */
    public function getRest()
    {
        return $this->rest;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * A definition of the restful capabilities of the solution, if any.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest $rest
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function addRest(FHIRCapabilityStatementRest $rest = null)
    {
        $this->rest[] = $rest;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * A definition of the restful capabilities of the solution, if any.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest[] $rest
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function setRest(array $rest = [])
    {
        $this->rest = [];
        if ([] === $rest) {
            return $this;
        }
        foreach($rest as $v) {
            if ($v instanceof FHIRCapabilityStatementRest) {
                $this->addRest($v);
            } else {
                $this->addRest(new FHIRCapabilityStatementRest($v));
            }
        }
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * Software that is covered by this capability statement. It is used when the
     * capability statement describes the capabilities of a particular software
     * version, independent of an installation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSoftware
     */
    public function getSoftware()
    {
        return $this->software;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * Software that is covered by this capability statement. It is used when the
     * capability statement describes the capabilities of a particular software
     * version, independent of an installation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSoftware $software
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function setSoftware(FHIRCapabilityStatementSoftware $software = null)
    {
        $this->software = $software;
        return $this;
    }

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of this capability statement. Enables tracking the life-cycle of the
     * content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of this capability statement. Enables tracking the life-cycle of the
     * content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus $status
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function setStatus(FHIRPublicationStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short, descriptive, user-friendly title for the capability statement.
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short, descriptive, user-friendly title for the capability statement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $title
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
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
     * An absolute URI that is used to identify this capability statement when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which at which an authoritative instance of this capability statement
     * is (or will be) published. This URL can be the target of a canonical reference.
     * It SHALL remain the same when the capability statement is stored on different
     * servers.
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An absolute URI that is used to identify this capability statement when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which at which an authoritative instance of this capability statement
     * is (or will be) published. This URL can be the target of a canonical reference.
     * It SHALL remain the same when the capability statement is stored on different
     * servers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $url
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate capability
     * statement instances.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate capability
     * statement instances.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext $useContext
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate capability
     * statement instances.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext[] $useContext
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The identifier that is used to identify this version of the capability statement
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the capability statement author and is not expected
     * to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence.
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The identifier that is used to identify this version of the capability statement
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the capability statement author and is not expected
     * to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $version
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
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
                throw new \DomainException(sprintf('FHIRCapabilityStatement::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCapabilityStatement::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCapabilityStatement;
        } elseif (!is_object($type) || !($type instanceof FHIRCapabilityStatement)) {
            throw new \RuntimeException(sprintf(
                'FHIRCapabilityStatement::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement or null, %s seen.',
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
        if (isset($children->contact)) {
            foreach($children->contact as $child) {
                $type->addContact(FHIRContactDetail::xmlUnserialize($child));
            }
        }
        if (isset($attributes->copyright)) {
            $type->setCopyright((string)$attributes->copyright);
        }
        if (isset($children->copyright)) {
            $type->setCopyright(FHIRMarkdown::xmlUnserialize($children->copyright));
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
        if (isset($children->document)) {
            foreach($children->document as $child) {
                $type->addDocument(FHIRCapabilityStatementDocument::xmlUnserialize($child));
            }
        }
        if (isset($attributes->experimental)) {
            $type->setExperimental((string)$attributes->experimental);
        }
        if (isset($children->experimental)) {
            $type->setExperimental(FHIRBoolean::xmlUnserialize($children->experimental));
        }
        if (isset($children->fhirVersion)) {
            $type->setFhirVersion(FHIRFHIRVersion::xmlUnserialize($children->fhirVersion));
        }
        if (isset($attributes->format)) {
            $type->addFormat((string)$attributes->format);
        }
        if (isset($children->format)) {
            foreach($children->format as $child) {
                $type->addFormat(FHIRCode::xmlUnserialize($child));
            }
        }
        if (isset($children->implementation)) {
            $type->setImplementation(FHIRCapabilityStatementImplementation::xmlUnserialize($children->implementation));
        }
        if (isset($attributes->implementationGuide)) {
            $type->addImplementationGuide((string)$attributes->implementationGuide);
        }
        if (isset($children->implementationGuide)) {
            foreach($children->implementationGuide as $child) {
                $type->addImplementationGuide(FHIRCanonical::xmlUnserialize($child));
            }
        }
        if (isset($attributes->imports)) {
            $type->addImports((string)$attributes->imports);
        }
        if (isset($children->imports)) {
            foreach($children->imports as $child) {
                $type->addImports(FHIRCanonical::xmlUnserialize($child));
            }
        }
        if (isset($attributes->instantiates)) {
            $type->addInstantiates((string)$attributes->instantiates);
        }
        if (isset($children->instantiates)) {
            foreach($children->instantiates as $child) {
                $type->addInstantiates(FHIRCanonical::xmlUnserialize($child));
            }
        }
        if (isset($children->jurisdiction)) {
            foreach($children->jurisdiction as $child) {
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->kind)) {
            $type->setKind(FHIRCapabilityStatementKind::xmlUnserialize($children->kind));
        }
        if (isset($children->messaging)) {
            foreach($children->messaging as $child) {
                $type->addMessaging(FHIRCapabilityStatementMessaging::xmlUnserialize($child));
            }
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($attributes->patchFormat)) {
            $type->addPatchFormat((string)$attributes->patchFormat);
        }
        if (isset($children->patchFormat)) {
            foreach($children->patchFormat as $child) {
                $type->addPatchFormat(FHIRCode::xmlUnserialize($child));
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
        if (isset($children->rest)) {
            foreach($children->rest as $child) {
                $type->addRest(FHIRCapabilityStatementRest::xmlUnserialize($child));
            }
        }
        if (isset($children->software)) {
            $type->setSoftware(FHIRCapabilityStatementSoftware::xmlUnserialize($children->software));
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
        if (isset($attributes->version)) {
            $type->setVersion((string)$attributes->version);
        }
        if (isset($children->version)) {
            $type->setVersion(FHIRString::xmlUnserialize($children->version));
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

        if ([] !== ($vs = $this->getDocument())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DOCUMENT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getExperimental())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPERIMENTAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFhirVersion())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FHIR_VERSION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getFormat())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FORMAT, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getImplementation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IMPLEMENTATION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getImplementationGuide())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IMPLEMENTATION_GUIDE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getImports())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IMPORTS, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getInstantiates())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INSTANTIATES, null, $v->_getFHIRXMLNamespace()));
            }
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

        if ([] !== ($vs = $this->getMessaging())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MESSAGING, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPatchFormat())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PATCH_FORMAT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PUBLISHER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPurpose())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PURPOSE, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getRest())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REST, null, $v->_getFHIRXMLNamespace()));
            }
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
        if ([] !== ($vs = $this->getContact())) {
            $a[self::FIELD_CONTACT] = $vs;
        }
        if (null !== ($v = $this->getCopyright())) {
            $a[self::FIELD_COPYRIGHT] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_COPYRIGHT_EXT] = $v;
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
        if ([] !== ($vs = $this->getDocument())) {
            $a[self::FIELD_DOCUMENT] = $vs;
        }
        if (null !== ($v = $this->getExperimental())) {
            $a[self::FIELD_EXPERIMENTAL] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_EXPERIMENTAL_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getFhirVersion())) {
            $a[self::FIELD_FHIR_VERSION] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_FHIR_VERSION_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getFormat())) {
            $a[self::FIELD_FORMAT] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_FORMAT][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_FORMAT_EXT])) {
                        $a[self::FIELD_FORMAT_EXT] = [];
                    }
                    $a[self::FIELD_FORMAT_EXT][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getImplementation())) {
            $a[self::FIELD_IMPLEMENTATION] = $v;
        }
        if ([] !== ($vs = $this->getImplementationGuide())) {
            $a[self::FIELD_IMPLEMENTATION_GUIDE] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IMPLEMENTATION_GUIDE][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_IMPLEMENTATION_GUIDE_EXT])) {
                        $a[self::FIELD_IMPLEMENTATION_GUIDE_EXT] = [];
                    }
                    $a[self::FIELD_IMPLEMENTATION_GUIDE_EXT][] = $v;
                }
            }
        }
        if ([] !== ($vs = $this->getImports())) {
            $a[self::FIELD_IMPORTS] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IMPORTS][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_IMPORTS_EXT])) {
                        $a[self::FIELD_IMPORTS_EXT] = [];
                    }
                    $a[self::FIELD_IMPORTS_EXT][] = $v;
                }
            }
        }
        if ([] !== ($vs = $this->getInstantiates())) {
            $a[self::FIELD_INSTANTIATES] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_INSTANTIATES][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_INSTANTIATES_EXT])) {
                        $a[self::FIELD_INSTANTIATES_EXT] = [];
                    }
                    $a[self::FIELD_INSTANTIATES_EXT][] = $v;
                }
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            $a[self::FIELD_JURISDICTION] = $vs;
        }
        if (null !== ($v = $this->getKind())) {
            $a[self::FIELD_KIND] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_KIND_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getMessaging())) {
            $a[self::FIELD_MESSAGING] = $vs;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_NAME_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getPatchFormat())) {
            $a[self::FIELD_PATCH_FORMAT] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PATCH_FORMAT][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_PATCH_FORMAT_EXT])) {
                        $a[self::FIELD_PATCH_FORMAT_EXT] = [];
                    }
                    $a[self::FIELD_PATCH_FORMAT_EXT][] = $v;
                }
            }
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
        if ([] !== ($vs = $this->getRest())) {
            $a[self::FIELD_REST] = $vs;
        }
        if (null !== ($v = $this->getSoftware())) {
            $a[self::FIELD_SOFTWARE] = $v;
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
        if (null !== ($v = $this->getVersion())) {
            $a[self::FIELD_VERSION] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_VERSION_EXT] = $v;
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