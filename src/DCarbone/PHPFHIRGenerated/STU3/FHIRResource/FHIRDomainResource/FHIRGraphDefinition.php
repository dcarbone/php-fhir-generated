<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 22nd, 2024 02:47+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionLink;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResourceType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter;

/**
 * A formal computable definition of a graph of resources - that is, a coherent set
 * of resources that form a graph by following references. The Graph Definition
 * resource defines a set and makes rules about the set.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRGraphDefinition
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRGraphDefinition extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_GRAPH_DEFINITION;

    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_EXPERIMENTAL = 'experimental';
    const FIELD_EXPERIMENTAL_EXT = '_experimental';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_PUBLISHER = 'publisher';
    const FIELD_PUBLISHER_EXT = '_publisher';
    const FIELD_CONTACT = 'contact';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_USE_CONTEXT = 'useContext';
    const FIELD_JURISDICTION = 'jurisdiction';
    const FIELD_PURPOSE = 'purpose';
    const FIELD_PURPOSE_EXT = '_purpose';
    const FIELD_START = 'start';
    const FIELD_PROFILE = 'profile';
    const FIELD_PROFILE_EXT = '_profile';
    const FIELD_LINK = 'link';

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this graph definition when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this graph
     * definition is (or will be) published. The URL SHOULD include the major version
     * of the graph definition. For more information see [Technical and Business
     * Versions](resource.html#versions).
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $url = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the graph definition
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the graph definition author and is not expected to be
     * globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $version = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the graph definition. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $name = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this graph definition. Enables tracking the life-cycle of the
     * content.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus
     */
    protected null|FHIRPublicationStatus $status = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A boolean value to indicate that this graph definition is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
     * genuine usage.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $experimental = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the graph definition was published. The date
     * must change if and when the business version changes and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the graph definition changes.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $date = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the graph definition.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $publisher = null;
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail[]
     */
    protected null|array $contact = [];
    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the graph definition from a
     * consumer's perspective.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $description = null;
    /**
     * Specifies clinical/business/etc metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * for appropriate graph definition instances.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext[]
     */
    protected null|array $useContext = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the graph definition is intended to be
     * used.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $jurisdiction = [];
    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Explaination of why this graph definition is needed and why it has been designed
     * as it has.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $purpose = null;
    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of FHIR resource at which instances of this graph start.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResourceType
     */
    protected null|FHIRResourceType $start = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The profile that describes the use of the base resource.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $profile = null;
    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     *
     * Links this graph makes rules about.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionLink[]
     */
    protected null|array $link = [];

    /**
     * Validation map for fields in type GraphDefinition
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_NAME => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_START => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_STATUS => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRGraphDefinition Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_URL, $data) || array_key_exists(self::FIELD_URL_EXT, $data)) {
            $value = $data[self::FIELD_URL] ?? null;
            $ext = (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT])) ? $data[self::FIELD_URL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setUrl($value);
                } else if (is_array($value)) {
                    $this->setUrl(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUrl(new FHIRUri($ext));
            } else {
                $this->setUrl(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_VERSION, $data) || array_key_exists(self::FIELD_VERSION_EXT, $data)) {
            $value = $data[self::FIELD_VERSION] ?? null;
            $ext = (isset($data[self::FIELD_VERSION_EXT]) && is_array($data[self::FIELD_VERSION_EXT])) ? $data[self::FIELD_VERSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setVersion($value);
                } else if (is_array($value)) {
                    $this->setVersion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setVersion(new FHIRString($ext));
            } else {
                $this->setVersion(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_NAME, $data) || array_key_exists(self::FIELD_NAME_EXT, $data)) {
            $value = $data[self::FIELD_NAME] ?? null;
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) ? $data[self::FIELD_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setName(new FHIRString($ext));
            } else {
                $this->setName(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_STATUS, $data) || array_key_exists(self::FIELD_STATUS_EXT, $data)) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPublicationStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRPublicationStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRPublicationStatus([FHIRPublicationStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRPublicationStatus($ext));
            } else {
                $this->setStatus(new FHIRPublicationStatus(null));
            }
        }
        if (array_key_exists(self::FIELD_EXPERIMENTAL, $data) || array_key_exists(self::FIELD_EXPERIMENTAL_EXT, $data)) {
            $value = $data[self::FIELD_EXPERIMENTAL] ?? null;
            $ext = (isset($data[self::FIELD_EXPERIMENTAL_EXT]) && is_array($data[self::FIELD_EXPERIMENTAL_EXT])) ? $data[self::FIELD_EXPERIMENTAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setExperimental($value);
                } else if (is_array($value)) {
                    $this->setExperimental(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setExperimental(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExperimental(new FHIRBoolean($ext));
            } else {
                $this->setExperimental(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_DATE, $data) || array_key_exists(self::FIELD_DATE_EXT, $data)) {
            $value = $data[self::FIELD_DATE] ?? null;
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT])) ? $data[self::FIELD_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDate($value);
                } else if (is_array($value)) {
                    $this->setDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDate(new FHIRDateTime($ext));
            } else {
                $this->setDate(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_PUBLISHER, $data) || array_key_exists(self::FIELD_PUBLISHER_EXT, $data)) {
            $value = $data[self::FIELD_PUBLISHER] ?? null;
            $ext = (isset($data[self::FIELD_PUBLISHER_EXT]) && is_array($data[self::FIELD_PUBLISHER_EXT])) ? $data[self::FIELD_PUBLISHER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPublisher($value);
                } else if (is_array($value)) {
                    $this->setPublisher(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPublisher(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPublisher(new FHIRString($ext));
            } else {
                $this->setPublisher(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_CONTACT, $data)) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if ($v instanceof FHIRContactDetail) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIRContactDetail($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTACT] instanceof FHIRContactDetail) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIRContactDetail($data[self::FIELD_CONTACT]));
            }
        }
        if (array_key_exists(self::FIELD_DESCRIPTION, $data) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $data)) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRMarkdown($ext));
            } else {
                $this->setDescription(new FHIRMarkdown(null));
            }
        }
        if (array_key_exists(self::FIELD_USE_CONTEXT, $data)) {
            if (is_array($data[self::FIELD_USE_CONTEXT])) {
                foreach($data[self::FIELD_USE_CONTEXT] as $v) {
                    if ($v instanceof FHIRUsageContext) {
                        $this->addUseContext($v);
                    } else {
                        $this->addUseContext(new FHIRUsageContext($v));
                    }
                }
            } elseif ($data[self::FIELD_USE_CONTEXT] instanceof FHIRUsageContext) {
                $this->addUseContext($data[self::FIELD_USE_CONTEXT]);
            } else {
                $this->addUseContext(new FHIRUsageContext($data[self::FIELD_USE_CONTEXT]));
            }
        }
        if (array_key_exists(self::FIELD_JURISDICTION, $data)) {
            if (is_array($data[self::FIELD_JURISDICTION])) {
                foreach($data[self::FIELD_JURISDICTION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addJurisdiction($v);
                    } else {
                        $this->addJurisdiction(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_JURISDICTION] instanceof FHIRCodeableConcept) {
                $this->addJurisdiction($data[self::FIELD_JURISDICTION]);
            } else {
                $this->addJurisdiction(new FHIRCodeableConcept($data[self::FIELD_JURISDICTION]));
            }
        }
        if (array_key_exists(self::FIELD_PURPOSE, $data) || array_key_exists(self::FIELD_PURPOSE_EXT, $data)) {
            $value = $data[self::FIELD_PURPOSE] ?? null;
            $ext = (isset($data[self::FIELD_PURPOSE_EXT]) && is_array($data[self::FIELD_PURPOSE_EXT])) ? $data[self::FIELD_PURPOSE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setPurpose($value);
                } else if (is_array($value)) {
                    $this->setPurpose(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setPurpose(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPurpose(new FHIRMarkdown($ext));
            } else {
                $this->setPurpose(new FHIRMarkdown(null));
            }
        }
        if (array_key_exists(self::FIELD_START, $data)) {
            if ($data[self::FIELD_START] instanceof FHIRResourceType) {
                $this->setStart($data[self::FIELD_START]);
            } else {
                $this->setStart(new FHIRResourceType($data[self::FIELD_START]));
            }
        }
        if (array_key_exists(self::FIELD_PROFILE, $data) || array_key_exists(self::FIELD_PROFILE_EXT, $data)) {
            $value = $data[self::FIELD_PROFILE] ?? null;
            $ext = (isset($data[self::FIELD_PROFILE_EXT]) && is_array($data[self::FIELD_PROFILE_EXT])) ? $data[self::FIELD_PROFILE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setProfile($value);
                } else if (is_array($value)) {
                    $this->setProfile(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setProfile(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setProfile(new FHIRUri($ext));
            } else {
                $this->setProfile(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_LINK, $data)) {
            if (is_array($data[self::FIELD_LINK])) {
                foreach($data[self::FIELD_LINK] as $v) {
                    if ($v instanceof FHIRGraphDefinitionLink) {
                        $this->addLink($v);
                    } else {
                        $this->addLink(new FHIRGraphDefinitionLink($v));
                    }
                }
            } elseif ($data[self::FIELD_LINK] instanceof FHIRGraphDefinitionLink) {
                $this->addLink($data[self::FIELD_LINK]);
            } else {
                $this->addLink(new FHIRGraphDefinitionLink($data[self::FIELD_LINK]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this graph definition when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this graph
     * definition is (or will be) published. The URL SHOULD include the major version
     * of the graph definition. For more information see [Technical and Business
     * Versions](resource.html#versions).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getUrl(): null|FHIRUri
    {
        return $this->url;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this graph definition when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this graph
     * definition is (or will be) published. The URL SHOULD include the major version
     * of the graph definition. For more information see [Technical and Business
     * Versions](resource.html#versions).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $url
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setUrl(null|string|FHIRUriPrimitive|FHIRUri $url = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $url && !($url instanceof FHIRUri)) {
            $url = new FHIRUri($url);
        }
        $this->_trackValueSet($this->url, $url);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_URL])) {
            $this->_primitiveXmlLocations[self::FIELD_URL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_URL][0] = $xmlLocation;
        $this->url = $url;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the graph definition
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the graph definition author and is not expected to be
     * globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getVersion(): null|FHIRString
    {
        return $this->version;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the graph definition
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the graph definition author and is not expected to be
     * globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $version
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setVersion(null|string|FHIRStringPrimitive|FHIRString $version = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $version && !($version instanceof FHIRString)) {
            $version = new FHIRString($version);
        }
        $this->_trackValueSet($this->version, $version);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VERSION])) {
            $this->_primitiveXmlLocations[self::FIELD_VERSION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VERSION][0] = $xmlLocation;
        $this->version = $version;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the graph definition. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the graph definition. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $name
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $name && !($name instanceof FHIRString)) {
            $name = new FHIRString($name);
        }
        $this->_trackValueSet($this->name, $name);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_NAME])) {
            $this->_primitiveXmlLocations[self::FIELD_NAME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_NAME][0] = $xmlLocation;
        $this->name = $name;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this graph definition. Enables tracking the life-cycle of the
     * content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus(): null|FHIRPublicationStatus
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this graph definition. Enables tracking the life-cycle of the
     * content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus $status
     * @return static
     */
    public function setStatus(null|FHIRPublicationStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRPublicationStatus();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A boolean value to indicate that this graph definition is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
     * genuine usage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getExperimental(): null|FHIRBoolean
    {
        return $this->experimental;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A boolean value to indicate that this graph definition is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
     * genuine usage.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\STU3\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $experimental
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setExperimental(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $experimental = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $experimental && !($experimental instanceof FHIRBoolean)) {
            $experimental = new FHIRBoolean($experimental);
        }
        $this->_trackValueSet($this->experimental, $experimental);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_EXPERIMENTAL])) {
            $this->_primitiveXmlLocations[self::FIELD_EXPERIMENTAL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_EXPERIMENTAL][0] = $xmlLocation;
        $this->experimental = $experimental;
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
     * The date (and optionally time) when the graph definition was published. The date
     * must change if and when the business version changes and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the graph definition changes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getDate(): null|FHIRDateTime
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
     * The date (and optionally time) when the graph definition was published. The date
     * must change if and when the business version changes and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the graph definition changes.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $date
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $date && !($date instanceof FHIRDateTime)) {
            $date = new FHIRDateTime($date);
        }
        $this->_trackValueSet($this->date, $date);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DATE])) {
            $this->_primitiveXmlLocations[self::FIELD_DATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DATE][0] = $xmlLocation;
        $this->date = $date;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the graph definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getPublisher(): null|FHIRString
    {
        return $this->publisher;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the graph definition.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $publisher
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPublisher(null|string|FHIRStringPrimitive|FHIRString $publisher = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $publisher && !($publisher instanceof FHIRString)) {
            $publisher = new FHIRString($publisher);
        }
        $this->_trackValueSet($this->publisher, $publisher);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PUBLISHER])) {
            $this->_primitiveXmlLocations[self::FIELD_PUBLISHER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PUBLISHER][0] = $xmlLocation;
        $this->publisher = $publisher;
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail[]
     */
    public function getContact(): null|array
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail $contact
     * @return static
     */
    public function addContact(null|FHIRContactDetail $contact = null): self
    {
        if (null === $contact) {
            $contact = new FHIRContactDetail();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail ...$contact
     * @return static
     */
    public function setContact(FHIRContactDetail ...$contact): self
    {
        if ([] !== $this->contact) {
            $this->_trackValuesRemoved(count($this->contact));
            $this->contact = [];
        }
        if ([] === $contact) {
            return $this;
        }
        foreach($contact as $v) {
            $this->addContact($v);
        }
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the graph definition from a
     * consumer's perspective.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getDescription(): null|FHIRMarkdown
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the graph definition from a
     * consumer's perspective.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $description
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $description && !($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown($description);
        }
        $this->_trackValueSet($this->description, $description);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DESCRIPTION])) {
            $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION][0] = $xmlLocation;
        $this->description = $description;
        return $this;
    }

    /**
     * Specifies clinical/business/etc metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * for appropriate graph definition instances.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext[]
     */
    public function getUseContext(): null|array
    {
        return $this->useContext;
    }

    /**
     * Specifies clinical/business/etc metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * for appropriate graph definition instances.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext $useContext
     * @return static
     */
    public function addUseContext(null|FHIRUsageContext $useContext = null): self
    {
        if (null === $useContext) {
            $useContext = new FHIRUsageContext();
        }
        $this->_trackValueAdded();
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * Specifies clinical/business/etc metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * for appropriate graph definition instances.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext ...$useContext
     * @return static
     */
    public function setUseContext(FHIRUsageContext ...$useContext): self
    {
        if ([] !== $this->useContext) {
            $this->_trackValuesRemoved(count($this->useContext));
            $this->useContext = [];
        }
        if ([] === $useContext) {
            return $this;
        }
        foreach($useContext as $v) {
            $this->addUseContext($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the graph definition is intended to be
     * used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction(): null|array
    {
        return $this->jurisdiction;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the graph definition is intended to be
     * used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return static
     */
    public function addJurisdiction(null|FHIRCodeableConcept $jurisdiction = null): self
    {
        if (null === $jurisdiction) {
            $jurisdiction = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the graph definition is intended to be
     * used.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept ...$jurisdiction
     * @return static
     */
    public function setJurisdiction(FHIRCodeableConcept ...$jurisdiction): self
    {
        if ([] !== $this->jurisdiction) {
            $this->_trackValuesRemoved(count($this->jurisdiction));
            $this->jurisdiction = [];
        }
        if ([] === $jurisdiction) {
            return $this;
        }
        foreach($jurisdiction as $v) {
            $this->addJurisdiction($v);
        }
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Explaination of why this graph definition is needed and why it has been designed
     * as it has.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getPurpose(): null|FHIRMarkdown
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Explaination of why this graph definition is needed and why it has been designed
     * as it has.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $purpose
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPurpose(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $purpose = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $purpose && !($purpose instanceof FHIRMarkdown)) {
            $purpose = new FHIRMarkdown($purpose);
        }
        $this->_trackValueSet($this->purpose, $purpose);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PURPOSE])) {
            $this->_primitiveXmlLocations[self::FIELD_PURPOSE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PURPOSE][0] = $xmlLocation;
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of FHIR resource at which instances of this graph start.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResourceType
     */
    public function getStart(): null|FHIRResourceType
    {
        return $this->start;
    }

    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of FHIR resource at which instances of this graph start.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResourceType $start
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setStart(null|string|FHIRResourceType $start = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $start && !($start instanceof FHIRResourceType)) {
            $start = new FHIRResourceType($start);
        }
        $this->_trackValueSet($this->start, $start);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_START])) {
            $this->_primitiveXmlLocations[self::FIELD_START] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_START][0] = $xmlLocation;
        $this->start = $start;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The profile that describes the use of the base resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getProfile(): null|FHIRUri
    {
        return $this->profile;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The profile that describes the use of the base resource.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $profile
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setProfile(null|string|FHIRUriPrimitive|FHIRUri $profile = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $profile && !($profile instanceof FHIRUri)) {
            $profile = new FHIRUri($profile);
        }
        $this->_trackValueSet($this->profile, $profile);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PROFILE])) {
            $this->_primitiveXmlLocations[self::FIELD_PROFILE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PROFILE][0] = $xmlLocation;
        $this->profile = $profile;
        return $this;
    }

    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     *
     * Links this graph makes rules about.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionLink[]
     */
    public function getLink(): null|array
    {
        return $this->link;
    }

    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     *
     * Links this graph makes rules about.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionLink $link
     * @return static
     */
    public function addLink(null|FHIRGraphDefinitionLink $link = null): self
    {
        if (null === $link) {
            $link = new FHIRGraphDefinitionLink();
        }
        $this->_trackValueAdded();
        $this->link[] = $link;
        return $this;
    }

    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     *
     * Links this graph makes rules about.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionLink ...$link
     * @return static
     */
    public function setLink(FHIRGraphDefinitionLink ...$link): self
    {
        if ([] !== $this->link) {
            $this->_trackValuesRemoved(count($this->link));
            $this->link = [];
        }
        if ([] === $link) {
            return $this;
        }
        foreach($link as $v) {
            $this->addLink($v);
        }
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVersion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExperimental())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPERIMENTAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PUBLISHER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTACT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getUseContext())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_USE_CONTEXT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_JURISDICTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPurpose())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PURPOSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStart())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_START] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProfile())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROFILE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getLink())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LINK, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GRAPH_DEFINITION, self::FIELD_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_URL])) {
                        $errs[self::FIELD_URL] = [];
                    }
                    $errs[self::FIELD_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GRAPH_DEFINITION, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GRAPH_DEFINITION, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GRAPH_DEFINITION, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPERIMENTAL])) {
            $v = $this->getExperimental();
            foreach($validationRules[self::FIELD_EXPERIMENTAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GRAPH_DEFINITION, self::FIELD_EXPERIMENTAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPERIMENTAL])) {
                        $errs[self::FIELD_EXPERIMENTAL] = [];
                    }
                    $errs[self::FIELD_EXPERIMENTAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GRAPH_DEFINITION, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLISHER])) {
            $v = $this->getPublisher();
            foreach($validationRules[self::FIELD_PUBLISHER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GRAPH_DEFINITION, self::FIELD_PUBLISHER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLISHER])) {
                        $errs[self::FIELD_PUBLISHER] = [];
                    }
                    $errs[self::FIELD_PUBLISHER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTACT])) {
            $v = $this->getContact();
            foreach($validationRules[self::FIELD_CONTACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GRAPH_DEFINITION, self::FIELD_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTACT])) {
                        $errs[self::FIELD_CONTACT] = [];
                    }
                    $errs[self::FIELD_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GRAPH_DEFINITION, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USE_CONTEXT])) {
            $v = $this->getUseContext();
            foreach($validationRules[self::FIELD_USE_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GRAPH_DEFINITION, self::FIELD_USE_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USE_CONTEXT])) {
                        $errs[self::FIELD_USE_CONTEXT] = [];
                    }
                    $errs[self::FIELD_USE_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_JURISDICTION])) {
            $v = $this->getJurisdiction();
            foreach($validationRules[self::FIELD_JURISDICTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GRAPH_DEFINITION, self::FIELD_JURISDICTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_JURISDICTION])) {
                        $errs[self::FIELD_JURISDICTION] = [];
                    }
                    $errs[self::FIELD_JURISDICTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PURPOSE])) {
            $v = $this->getPurpose();
            foreach($validationRules[self::FIELD_PURPOSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GRAPH_DEFINITION, self::FIELD_PURPOSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PURPOSE])) {
                        $errs[self::FIELD_PURPOSE] = [];
                    }
                    $errs[self::FIELD_PURPOSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_START])) {
            $v = $this->getStart();
            foreach($validationRules[self::FIELD_START] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GRAPH_DEFINITION, self::FIELD_START, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_START])) {
                        $errs[self::FIELD_START] = [];
                    }
                    $errs[self::FIELD_START][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROFILE])) {
            $v = $this->getProfile();
            foreach($validationRules[self::FIELD_PROFILE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GRAPH_DEFINITION, self::FIELD_PROFILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROFILE])) {
                        $errs[self::FIELD_PROFILE] = [];
                    }
                    $errs[self::FIELD_PROFILE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LINK])) {
            $v = $this->getLink();
            foreach($validationRules[self::FIELD_LINK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GRAPH_DEFINITION, self::FIELD_LINK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINK])) {
                        $errs[self::FIELD_LINK] = [];
                    }
                    $errs[self::FIELD_LINK][$rule] = $err;
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
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGraphDefinition $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGraphDefinition
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRGraphDefinition)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_URL === $childName) {
                $type->setUrl(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VERSION === $childName) {
                $type->setVersion(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_NAME === $childName) {
                $type->setName(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_STATUS === $childName) {
                $type->setStatus(FHIRPublicationStatus::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXPERIMENTAL === $childName) {
                $type->setExperimental(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DATE === $childName) {
                $type->setDate(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PUBLISHER === $childName) {
                $type->setPublisher(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CONTACT === $childName) {
                $type->addContact(FHIRContactDetail::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_USE_CONTEXT === $childName) {
                $type->addUseContext(FHIRUsageContext::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_JURISDICTION === $childName) {
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PURPOSE === $childName) {
                $type->setPurpose(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_START === $childName) {
                $type->setStart(FHIRResourceType::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PROFILE === $childName) {
                $type->setProfile(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LINK === $childName) {
                $type->addLink(FHIRGraphDefinitionLink::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn, $config));
                }
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_META === $childName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMPLICIT_RULES === $childName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_URL])) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_URL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setUrl((string)$attributes[self::FIELD_URL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VERSION])) {
            $pt = $type->getVersion();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VERSION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setVersion((string)$attributes[self::FIELD_VERSION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NAME])) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setName((string)$attributes[self::FIELD_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXPERIMENTAL])) {
            $pt = $type->getExperimental();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_EXPERIMENTAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setExperimental((string)$attributes[self::FIELD_EXPERIMENTAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATE])) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDate((string)$attributes[self::FIELD_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PUBLISHER])) {
            $pt = $type->getPublisher();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PUBLISHER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPublisher((string)$attributes[self::FIELD_PUBLISHER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PURPOSE])) {
            $pt = $type->getPurpose();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PURPOSE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPurpose((string)$attributes[self::FIELD_PURPOSE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_START])) {
            $pt = $type->getStart();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_START], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setStart((string)$attributes[self::FIELD_START], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PROFILE])) {
            $pt = $type->getProfile();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PROFILE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setProfile((string)$attributes[self::FIELD_PROFILE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'GraphDefinition', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_URL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getUrl())) {
            $xw->writeAttribute(self::FIELD_URL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VERSION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getVersion())) {
            $xw->writeAttribute(self::FIELD_VERSION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getName())) {
            $xw->writeAttribute(self::FIELD_NAME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXPERIMENTAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getExperimental())) {
            $xw->writeAttribute(self::FIELD_EXPERIMENTAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDate())) {
            $xw->writeAttribute(self::FIELD_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PUBLISHER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPublisher())) {
            $xw->writeAttribute(self::FIELD_PUBLISHER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PURPOSE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPurpose())) {
            $xw->writeAttribute(self::FIELD_PURPOSE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_START] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getStart())) {
            $xw->writeAttribute(self::FIELD_START, $v->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PROFILE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getProfile())) {
            $xw->writeAttribute(self::FIELD_PROFILE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_URL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getUrl())) {
            $xw->startElement(self::FIELD_URL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VERSION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getVersion())) {
            $xw->startElement(self::FIELD_VERSION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getName())) {
            $xw->startElement(self::FIELD_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStatus())) {
            $xw->startElement(self::FIELD_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXPERIMENTAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getExperimental())) {
            $xw->startElement(self::FIELD_EXPERIMENTAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDate())) {
            $xw->startElement(self::FIELD_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PUBLISHER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPublisher())) {
            $xw->startElement(self::FIELD_PUBLISHER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getContact() as $v) {
            $xw->startElement(self::FIELD_CONTACT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getUseContext() as $v) {
            $xw->startElement(self::FIELD_USE_CONTEXT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getJurisdiction() as $v) {
            $xw->startElement(self::FIELD_JURISDICTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PURPOSE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPurpose())) {
            $xw->startElement(self::FIELD_PURPOSE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_START] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getStart())) {
            $xw->startElement(self::FIELD_START);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PROFILE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getProfile())) {
            $xw->startElement(self::FIELD_PROFILE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getLink() as $v) {
            $xw->startElement(self::FIELD_LINK);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getUrl())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_URL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_URL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getVersion())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VERSION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VERSION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NAME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPublicationStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getExperimental())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EXPERIMENTAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXPERIMENTAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PUBLISHER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PUBLISHER_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            $out->{self::FIELD_CONTACT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CONTACT}[] = $v;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getUseContext())) {
            $out->{self::FIELD_USE_CONTEXT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_USE_CONTEXT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            $out->{self::FIELD_JURISDICTION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_JURISDICTION}[] = $v;
            }
        }
        if (null !== ($v = $this->getPurpose())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PURPOSE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PURPOSE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStart())) {
            $out->{self::FIELD_START} = $v;
        }
        if (null !== ($v = $this->getProfile())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PROFILE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PROFILE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getLink())) {
            $out->{self::FIELD_LINK} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_LINK}[] = $v;
            }
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}