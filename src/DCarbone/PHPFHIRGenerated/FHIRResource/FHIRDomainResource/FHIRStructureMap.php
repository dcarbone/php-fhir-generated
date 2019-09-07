<?php

namespace DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 7th, 2019 20:23+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapGroup;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapStructure;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * A Map of relationships between 2 structures that can be used to transform data.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRStructureMap
 * @package \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRStructureMap extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP;

    const FIELD_CONTACT = 'contact';
    const FIELD_COPYRIGHT = 'copyright';
    const FIELD_COPYRIGHT_EXT = '_copyright';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_EXPERIMENTAL = 'experimental';
    const FIELD_EXPERIMENTAL_EXT = '_experimental';
    const FIELD_GROUP = 'group';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IMPORT = 'import';
    const FIELD_IMPORT_EXT = '_import';
    const FIELD_JURISDICTION = 'jurisdiction';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_PUBLISHER = 'publisher';
    const FIELD_PUBLISHER_EXT = '_publisher';
    const FIELD_PURPOSE = 'purpose';
    const FIELD_PURPOSE_EXT = '_purpose';
    const FIELD_STATUS = 'status';
    const FIELD_STRUCTURE = 'structure';
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
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactDetail[]
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
     * A copyright statement relating to the structure map and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the structure map.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
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
     * The date (and optionally time) when the structure map was published. The date
     * must change when the business version changes and it must change if the status
     * code changes. In addition, it should change when the substantive content of the
     * structure map changes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
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
     * A free text natural language description of the structure map from a consumer's
     * perspective.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    private $description = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A Boolean value to indicate that this structure map is authored for testing
     * purposes (or education/evaluation/marketing) and is not intended to be used for
     * genuine usage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $experimental = null;

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Organizes the mapping into manageable chunks for human review/ease of
     * maintenance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapGroup[]
     */
    private $group = [];

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this structure map when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Other maps used by this map (canonical URLs).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical[]
     */
    private $import = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the structure map is intended to be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $jurisdiction = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A natural language name identifying the structure map. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $name = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the organization or individual that published the structure map.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
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
     * Explanation of why this structure map is needed and why it has been designed as
     * it has.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    private $purpose = null;

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of this structure map. Enables tracking the life-cycle of the
     * content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    private $status = null;

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * A structure definition used by this map. The structure definition may describe
     * instances that are converted, or the instances that are produced.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapStructure[]
     */
    private $structure = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short, descriptive, user-friendly title for the structure map.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $title = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An absolute URI that is used to identify this structure map when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which at which an authoritative instance of this structure map is (or
     * will be) published. This URL can be the target of a canonical reference. It
     * SHALL remain the same when the structure map is stored on different servers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri
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
     * be used to assist with indexing and searching for appropriate structure map
     * instances.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUsageContext[]
     */
    private $useContext = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The identifier that is used to identify this version of the structure map when
     * it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the structure map author and is not expected to be
     * globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $version = null;

    /**
     * FHIRStructureMap Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMap::_construct - $data expected to be null or array, %s seen',
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
        if (isset($data[self::FIELD_GROUP])) {
            if (is_array($data[self::FIELD_GROUP])) {
                foreach($data[self::FIELD_GROUP] as $v) {
                    if ($v instanceof FHIRStructureMapGroup) {
                        $this->addGroup($v);
                    } else {
                        $this->addGroup(new FHIRStructureMapGroup($v));
                    }
                }
            } else if ($data[self::FIELD_GROUP] instanceof FHIRStructureMapGroup) {
                $this->addGroup($data[self::FIELD_GROUP]);
            } else {
                $this->addGroup(new FHIRStructureMapGroup($data[self::FIELD_GROUP]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_IMPORT])) {
            $ext = (isset($data[self::FIELD_IMPORT_EXT]) && is_array($data[self::FIELD_IMPORT_EXT]))
                ? $data[self::FIELD_IMPORT_EXT]
                : null;
            if (is_array($data[self::FIELD_IMPORT])) {
                foreach($data[self::FIELD_IMPORT] as $i => $v) {
                    if ($v instanceof FHIRCanonical) {
                        $this->addImport($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addImport(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addImport(new FHIRCanonical($v));
                    }
                }
            } elseif ($data[self::FIELD_IMPORT] instanceof FHIRCanonical) {
                $this->addImport($data[self::FIELD_IMPORT]);
            } elseif ($ext && is_scalar($data[self::FIELD_IMPORT])) {
                $this->addImport(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_IMPORT]] + $ext));
            } else {
                $this->addImport(new FHIRCanonical($data[self::FIELD_IMPORT]));
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
            if ($data[self::FIELD_STATUS] instanceof FHIRPublicationStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRPublicationStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_STRUCTURE])) {
            if (is_array($data[self::FIELD_STRUCTURE])) {
                foreach($data[self::FIELD_STRUCTURE] as $v) {
                    if ($v instanceof FHIRStructureMapStructure) {
                        $this->addStructure($v);
                    } else {
                        $this->addStructure(new FHIRStructureMapStructure($v));
                    }
                }
            } else if ($data[self::FIELD_STRUCTURE] instanceof FHIRStructureMapStructure) {
                $this->addStructure($data[self::FIELD_STRUCTURE]);
            } else {
                $this->addStructure(new FHIRStructureMapStructure($data[self::FIELD_STRUCTURE]));
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
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactDetail[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactDetail $contact
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
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
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactDetail[] $contact
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
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
     * A copyright statement relating to the structure map and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the structure map.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
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
     * A copyright statement relating to the structure map and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the structure map.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown $copyright
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
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
     * The date (and optionally time) when the structure map was published. The date
     * must change when the business version changes and it must change if the status
     * code changes. In addition, it should change when the substantive content of the
     * structure map changes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
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
     * The date (and optionally time) when the structure map was published. The date
     * must change when the business version changes and it must change if the status
     * code changes. In addition, it should change when the substantive content of the
     * structure map changes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
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
     * A free text natural language description of the structure map from a consumer's
     * perspective.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
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
     * A free text natural language description of the structure map from a consumer's
     * perspective.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown $description
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
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
     * A Boolean value to indicate that this structure map is authored for testing
     * purposes (or education/evaluation/marketing) and is not intended to be used for
     * genuine usage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A Boolean value to indicate that this structure map is authored for testing
     * purposes (or education/evaluation/marketing) and is not intended to be used for
     * genuine usage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean $experimental
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
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
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Organizes the mapping into manageable chunks for human review/ease of
     * maintenance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapGroup[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Organizes the mapping into manageable chunks for human review/ease of
     * maintenance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapGroup $group
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
     */
    public function addGroup(FHIRStructureMapGroup $group = null)
    {
        $this->group[] = $group;
        return $this;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Organizes the mapping into manageable chunks for human review/ease of
     * maintenance.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapGroup[] $group
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
     */
    public function setGroup(array $group = [])
    {
        $this->group = [];
        if ([] === $group) {
            return $this;
        }
        foreach($group as $v) {
            if ($v instanceof FHIRStructureMapGroup) {
                $this->addGroup($v);
            } else {
                $this->addGroup(new FHIRStructureMapGroup($v));
            }
        }
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this structure map when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this structure map when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this structure map when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
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
     * Other maps used by this map (canonical URLs).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical[]
     */
    public function getImport()
    {
        return $this->import;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Other maps used by this map (canonical URLs).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical $import
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
     */
    public function addImport($import = null)
    {
        if (null === $import) {
            $this->import = null;
            return $this;
        }
        if ($import instanceof FHIRCanonical) {
            $this->import = $import;
            return $this;
        }
        $this->import = new FHIRCanonical($import);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Other maps used by this map (canonical URLs).
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical[] $import
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
     */
    public function setImport(array $import = [])
    {
        $this->import = [];
        if ([] === $import) {
            return $this;
        }
        foreach($import as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->addImport($v);
            } else {
                $this->addImport(new FHIRCanonical($v));
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
     * A legal or geographic region in which the structure map is intended to be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
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
     * A legal or geographic region in which the structure map is intended to be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
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
     * A legal or geographic region in which the structure map is intended to be used.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $jurisdiction
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
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
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A natural language name identifying the structure map. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
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
     * A natural language name identifying the structure map. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the organization or individual that published the structure map.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
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
     * The name of the organization or individual that published the structure map.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $publisher
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
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
     * Explanation of why this structure map is needed and why it has been designed as
     * it has.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
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
     * Explanation of why this structure map is needed and why it has been designed as
     * it has.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown $purpose
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
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
     * The status of this structure map. Enables tracking the life-cycle of the
     * content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of this structure map. Enables tracking the life-cycle of the
     * content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus $status
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
     */
    public function setStatus(FHIRPublicationStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * A structure definition used by this map. The structure definition may describe
     * instances that are converted, or the instances that are produced.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapStructure[]
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * A structure definition used by this map. The structure definition may describe
     * instances that are converted, or the instances that are produced.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapStructure $structure
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
     */
    public function addStructure(FHIRStructureMapStructure $structure = null)
    {
        $this->structure[] = $structure;
        return $this;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * A structure definition used by this map. The structure definition may describe
     * instances that are converted, or the instances that are produced.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapStructure[] $structure
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
     */
    public function setStructure(array $structure = [])
    {
        $this->structure = [];
        if ([] === $structure) {
            return $this;
        }
        foreach($structure as $v) {
            if ($v instanceof FHIRStructureMapStructure) {
                $this->addStructure($v);
            } else {
                $this->addStructure(new FHIRStructureMapStructure($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short, descriptive, user-friendly title for the structure map.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
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
     * A short, descriptive, user-friendly title for the structure map.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $title
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
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
     * An absolute URI that is used to identify this structure map when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which at which an authoritative instance of this structure map is (or
     * will be) published. This URL can be the target of a canonical reference. It
     * SHALL remain the same when the structure map is stored on different servers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri
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
     * An absolute URI that is used to identify this structure map when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which at which an authoritative instance of this structure map is (or
     * will be) published. This URL can be the target of a canonical reference. It
     * SHALL remain the same when the structure map is stored on different servers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri $url
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
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
     * be used to assist with indexing and searching for appropriate structure map
     * instances.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUsageContext[]
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
     * be used to assist with indexing and searching for appropriate structure map
     * instances.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUsageContext $useContext
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
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
     * be used to assist with indexing and searching for appropriate structure map
     * instances.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUsageContext[] $useContext
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
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
     * The identifier that is used to identify this version of the structure map when
     * it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the structure map author and is not expected to be
     * globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
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
     * The identifier that is used to identify this version of the structure map when
     * it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the structure map author and is not expected to be
     * globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $version
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRStructureMap::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRStructureMap::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRStructureMap);
        } elseif (!is_object($type) || !($type instanceof FHIRStructureMap)) {
            throw new \RuntimeException(sprintf(
                'FHIRStructureMap::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
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
        if (isset($attributes->experimental)) {
            $type->setExperimental((string)$attributes->experimental);
        }
        if (isset($children->experimental)) {
            $type->setExperimental(FHIRBoolean::xmlUnserialize($children->experimental));
        }
        if (isset($children->group)) {
            foreach($children->group as $child) {
                $type->addGroup(FHIRStructureMapGroup::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($attributes->import)) {
            $type->addImport((string)$attributes->import);
        }
        if (isset($children->import)) {
            foreach($children->import as $child) {
                $type->addImport(FHIRCanonical::xmlUnserialize($child));
            }
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
        if (isset($children->structure)) {
            foreach($children->structure as $child) {
                $type->addStructure(FHIRStructureMapStructure::xmlUnserialize($child));
            }
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
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<StructureMap xmlns="http://hl7.org/fhir"></StructureMap>');
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTACT));
            }
        }
        if (null !== ($v = $this->getCopyright())) {
            $sxe->addAttribute(self::FIELD_COPYRIGHT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_COPYRIGHT));
            }
        }
        if (null !== ($v = $this->getDate())) {
            $sxe->addAttribute(self::FIELD_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DATE));
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $sxe->addAttribute(self::FIELD_DESCRIPTION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION));
            }
        }
        if (null !== ($v = $this->getExperimental())) {
            $sxe->addAttribute(self::FIELD_EXPERIMENTAL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXPERIMENTAL));
            }
        }
        if ([] !== ($vs = $this->getGroup())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_GROUP));
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }
        if ([] !== ($vs = $this->getImport())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_IMPORT, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_IMPORT));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_IMPORT));
                }
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_JURISDICTION));
            }
        }
        if (null !== ($v = $this->getName())) {
            $sxe->addAttribute(self::FIELD_NAME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_NAME));
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            $sxe->addAttribute(self::FIELD_PUBLISHER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PUBLISHER));
            }
        }
        if (null !== ($v = $this->getPurpose())) {
            $sxe->addAttribute(self::FIELD_PURPOSE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PURPOSE));
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
        }
        if ([] !== ($vs = $this->getStructure())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_STRUCTURE));
            }
        }
        if (null !== ($v = $this->getTitle())) {
            $sxe->addAttribute(self::FIELD_TITLE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TITLE));
            }
        }
        if (null !== ($v = $this->getUrl())) {
            $sxe->addAttribute(self::FIELD_URL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_URL));
            }
        }
        if ([] !== ($vs = $this->getUseContext())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_USE_CONTEXT));
            }
        }
        if (null !== ($v = $this->getVersion())) {
            $sxe->addAttribute(self::FIELD_VERSION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_VERSION));
            }
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
            $a[self::FIELD_COPYRIGHT] = (string)$v;
            $a[self::FIELD_COPYRIGHT_EXT] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = (string)$v;
            $a[self::FIELD_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = (string)$v;
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if (null !== ($v = $this->getExperimental())) {
            $a[self::FIELD_EXPERIMENTAL] = (string)$v;
            $a[self::FIELD_EXPERIMENTAL_EXT] = $v;
        }
        if ([] !== ($vs = $this->getGroup())) {
            $a[self::FIELD_GROUP] = $vs;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getImport())) {
            $a[self::FIELD_IMPORT] = [];
            $a[self::FIELD_IMPORT_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_IMPORT][] = (string)$v;
                $a[self::FIELD_IMPORT_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            $a[self::FIELD_JURISDICTION] = $vs;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = (string)$v;
            $a[self::FIELD_NAME_EXT] = $v;
        }
        if (null !== ($v = $this->getPublisher())) {
            $a[self::FIELD_PUBLISHER] = (string)$v;
            $a[self::FIELD_PUBLISHER_EXT] = $v;
        }
        if (null !== ($v = $this->getPurpose())) {
            $a[self::FIELD_PURPOSE] = (string)$v;
            $a[self::FIELD_PURPOSE_EXT] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if ([] !== ($vs = $this->getStructure())) {
            $a[self::FIELD_STRUCTURE] = $vs;
        }
        if (null !== ($v = $this->getTitle())) {
            $a[self::FIELD_TITLE] = (string)$v;
            $a[self::FIELD_TITLE_EXT] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = (string)$v;
            $a[self::FIELD_URL_EXT] = $v;
        }
        if ([] !== ($vs = $this->getUseContext())) {
            $a[self::FIELD_USE_CONTEXT] = $vs;
        }
        if (null !== ($v = $this->getVersion())) {
            $a[self::FIELD_VERSION] = (string)$v;
            $a[self::FIELD_VERSION_EXT] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}