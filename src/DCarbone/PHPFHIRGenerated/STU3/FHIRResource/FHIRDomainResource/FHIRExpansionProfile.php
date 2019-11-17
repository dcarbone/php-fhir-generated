<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 17th, 2019 04:38+0000
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileDesignation;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileExcludedSystem;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Resource to define constraints on the Expansion of a FHIR ValueSet.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRExpansionProfile
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRExpansionProfile extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EXPANSION_PROFILE;
    const FIELD_ACTIVE_ONLY = 'activeOnly';
    const FIELD_ACTIVE_ONLY_EXT = '_activeOnly';
    const FIELD_CONTACT = 'contact';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DESIGNATION = 'designation';
    const FIELD_DISPLAY_LANGUAGE = 'displayLanguage';
    const FIELD_DISPLAY_LANGUAGE_EXT = '_displayLanguage';
    const FIELD_EXCLUDE_NESTED = 'excludeNested';
    const FIELD_EXCLUDE_NESTED_EXT = '_excludeNested';
    const FIELD_EXCLUDE_NOT_FOR_UI = 'excludeNotForUI';
    const FIELD_EXCLUDE_NOT_FOR_UI_EXT = '_excludeNotForUI';
    const FIELD_EXCLUDE_POST_COORDINATED = 'excludePostCoordinated';
    const FIELD_EXCLUDE_POST_COORDINATED_EXT = '_excludePostCoordinated';
    const FIELD_EXCLUDED_SYSTEM = 'excludedSystem';
    const FIELD_EXPERIMENTAL = 'experimental';
    const FIELD_EXPERIMENTAL_EXT = '_experimental';
    const FIELD_FIXED_VERSION = 'fixedVersion';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_INCLUDE_DEFINITION = 'includeDefinition';
    const FIELD_INCLUDE_DEFINITION_EXT = '_includeDefinition';
    const FIELD_INCLUDE_DESIGNATIONS = 'includeDesignations';
    const FIELD_INCLUDE_DESIGNATIONS_EXT = '_includeDesignations';
    const FIELD_JURISDICTION = 'jurisdiction';
    const FIELD_LIMITED_EXPANSION = 'limitedExpansion';
    const FIELD_LIMITED_EXPANSION_EXT = '_limitedExpansion';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_PUBLISHER = 'publisher';
    const FIELD_PUBLISHER_EXT = '_publisher';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_USE_CONTEXT = 'useContext';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether inactive concepts are included or excluded in value set
     * expansions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $activeOnly = null;

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail[]
     */
    protected $contact = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the expansion profile was published. The
     * date must change if and when the business version changes and it must change if
     * the status code changes. In addition, it should change when the substantive
     * content of the expansion profile changes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $date = null;

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
     * A free text natural language description of the expansion profile from a
     * consumer's perspective.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected $description = null;

    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * A set of criteria that provide the constraints imposed on the value set
     * expansion by including or excluding designations.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileDesignation
     */
    protected $designation = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies the language to be used for description in the expansions i.e. the
     * language to be used for ValueSet.expansion.contains.display.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    protected $displayLanguage = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether or not the value set expansion nests codes or not (i.e.
     * ValueSet.expansion.contains.contains).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $excludeNested = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether or not the value set expansion includes codes which cannot be
     * displayed in user interfaces.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $excludeNotForUI = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether or not the value set expansion includes post coordinated codes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $excludePostCoordinated = null;

    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * Code system, or a particular version of a code system to be excluded from value
     * set expansions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileExcludedSystem
     */
    protected $excludedSystem = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A boolean value to indicate that this expansion profile is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
     * genuine usage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $experimental = null;

    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * Fix use of a particular code system to a particular version.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion[]
     */
    protected $fixedVersion = [];

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this expansion profile when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    protected $identifier = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether the value set definition is included or excluded in value set
     * expansions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $includeDefinition = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether concept designations are to be included or excluded in value
     * set expansions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $includeDesignations = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the expansion profile is intended to be
     * used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $jurisdiction = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the value set being expanded is incomplete (because it is too big to expand),
     * return a limited expansion (a subset) with an indicator that expansion is
     * incomplete, using the extension
     * [http://hl7.org/fhir/StructureDefinition/valueset-toocostly](extension-valueset-toocostly.html).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $limitedExpansion = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the expansion profile. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $name = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the expansion profile.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $publisher = null;

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this expansion profile. Enables tracking the life-cycle of the
     * content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus
     */
    protected $status = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this expansion profile when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this expansion
     * profile is (or will be) published. The URL SHOULD include the major version of
     * the expansion profile. For more information see [Technical and Business
     * Versions](resource.html#versions).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $url = null;

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
     * for appropriate expansion profile instances.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext[]
     */
    protected $useContext = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the expansion profile
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the expansion profile author and is not expected to
     * be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $version = null;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * FHIRExpansionProfile Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExpansionProfile::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTIVE_ONLY])) {
            $ext = (isset($data[self::FIELD_ACTIVE_ONLY_EXT]) && is_array($data[self::FIELD_ACTIVE_ONLY_EXT]))
                ? $data[self::FIELD_ACTIVE_ONLY_EXT]
                : null;
            if ($data[self::FIELD_ACTIVE_ONLY] instanceof FHIRBoolean) {
                $this->setActiveOnly($data[self::FIELD_ACTIVE_ONLY]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_ACTIVE_ONLY])) {
                    $this->setActiveOnly(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_ACTIVE_ONLY]] + $ext));
                } else if (is_array($data[self::FIELD_ACTIVE_ONLY])) {
                    $this->setActiveOnly(new FHIRBoolean(array_merge($ext, $data[self::FIELD_ACTIVE_ONLY])));
                }
            } else {
                $this->setActiveOnly(new FHIRBoolean($data[self::FIELD_ACTIVE_ONLY]));
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
        if (isset($data[self::FIELD_DATE])) {
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT]))
                ? $data[self::FIELD_DATE_EXT]
                : null;
            if ($data[self::FIELD_DATE] instanceof FHIRDateTime) {
                $this->setDate($data[self::FIELD_DATE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DATE])) {
                    $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_DATE]] + $ext));
                } else if (is_array($data[self::FIELD_DATE])) {
                    $this->setDate(new FHIRDateTime(array_merge($ext, $data[self::FIELD_DATE])));
                }
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
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DESCRIPTION])) {
                    $this->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
                } else if (is_array($data[self::FIELD_DESCRIPTION])) {
                    $this->setDescription(new FHIRMarkdown(array_merge($ext, $data[self::FIELD_DESCRIPTION])));
                }
            } else {
                $this->setDescription(new FHIRMarkdown($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_DESIGNATION])) {
            if ($data[self::FIELD_DESIGNATION] instanceof FHIRExpansionProfileDesignation) {
                $this->setDesignation($data[self::FIELD_DESIGNATION]);
            } else {
                $this->setDesignation(new FHIRExpansionProfileDesignation($data[self::FIELD_DESIGNATION]));
            }
        }
        if (isset($data[self::FIELD_DISPLAY_LANGUAGE])) {
            $ext = (isset($data[self::FIELD_DISPLAY_LANGUAGE_EXT]) && is_array($data[self::FIELD_DISPLAY_LANGUAGE_EXT]))
                ? $data[self::FIELD_DISPLAY_LANGUAGE_EXT]
                : null;
            if ($data[self::FIELD_DISPLAY_LANGUAGE] instanceof FHIRCode) {
                $this->setDisplayLanguage($data[self::FIELD_DISPLAY_LANGUAGE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DISPLAY_LANGUAGE])) {
                    $this->setDisplayLanguage(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_DISPLAY_LANGUAGE]] + $ext));
                } else if (is_array($data[self::FIELD_DISPLAY_LANGUAGE])) {
                    $this->setDisplayLanguage(new FHIRCode(array_merge($ext, $data[self::FIELD_DISPLAY_LANGUAGE])));
                }
            } else {
                $this->setDisplayLanguage(new FHIRCode($data[self::FIELD_DISPLAY_LANGUAGE]));
            }
        }
        if (isset($data[self::FIELD_EXCLUDE_NESTED])) {
            $ext = (isset($data[self::FIELD_EXCLUDE_NESTED_EXT]) && is_array($data[self::FIELD_EXCLUDE_NESTED_EXT]))
                ? $data[self::FIELD_EXCLUDE_NESTED_EXT]
                : null;
            if ($data[self::FIELD_EXCLUDE_NESTED] instanceof FHIRBoolean) {
                $this->setExcludeNested($data[self::FIELD_EXCLUDE_NESTED]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_EXCLUDE_NESTED])) {
                    $this->setExcludeNested(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_EXCLUDE_NESTED]] + $ext));
                } else if (is_array($data[self::FIELD_EXCLUDE_NESTED])) {
                    $this->setExcludeNested(new FHIRBoolean(array_merge($ext, $data[self::FIELD_EXCLUDE_NESTED])));
                }
            } else {
                $this->setExcludeNested(new FHIRBoolean($data[self::FIELD_EXCLUDE_NESTED]));
            }
        }
        if (isset($data[self::FIELD_EXCLUDE_NOT_FOR_UI])) {
            $ext = (isset($data[self::FIELD_EXCLUDE_NOT_FOR_UI_EXT]) && is_array($data[self::FIELD_EXCLUDE_NOT_FOR_UI_EXT]))
                ? $data[self::FIELD_EXCLUDE_NOT_FOR_UI_EXT]
                : null;
            if ($data[self::FIELD_EXCLUDE_NOT_FOR_UI] instanceof FHIRBoolean) {
                $this->setExcludeNotForUI($data[self::FIELD_EXCLUDE_NOT_FOR_UI]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_EXCLUDE_NOT_FOR_UI])) {
                    $this->setExcludeNotForUI(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_EXCLUDE_NOT_FOR_UI]] + $ext));
                } else if (is_array($data[self::FIELD_EXCLUDE_NOT_FOR_UI])) {
                    $this->setExcludeNotForUI(new FHIRBoolean(array_merge($ext, $data[self::FIELD_EXCLUDE_NOT_FOR_UI])));
                }
            } else {
                $this->setExcludeNotForUI(new FHIRBoolean($data[self::FIELD_EXCLUDE_NOT_FOR_UI]));
            }
        }
        if (isset($data[self::FIELD_EXCLUDE_POST_COORDINATED])) {
            $ext = (isset($data[self::FIELD_EXCLUDE_POST_COORDINATED_EXT]) && is_array($data[self::FIELD_EXCLUDE_POST_COORDINATED_EXT]))
                ? $data[self::FIELD_EXCLUDE_POST_COORDINATED_EXT]
                : null;
            if ($data[self::FIELD_EXCLUDE_POST_COORDINATED] instanceof FHIRBoolean) {
                $this->setExcludePostCoordinated($data[self::FIELD_EXCLUDE_POST_COORDINATED]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_EXCLUDE_POST_COORDINATED])) {
                    $this->setExcludePostCoordinated(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_EXCLUDE_POST_COORDINATED]] + $ext));
                } else if (is_array($data[self::FIELD_EXCLUDE_POST_COORDINATED])) {
                    $this->setExcludePostCoordinated(new FHIRBoolean(array_merge($ext, $data[self::FIELD_EXCLUDE_POST_COORDINATED])));
                }
            } else {
                $this->setExcludePostCoordinated(new FHIRBoolean($data[self::FIELD_EXCLUDE_POST_COORDINATED]));
            }
        }
        if (isset($data[self::FIELD_EXCLUDED_SYSTEM])) {
            if ($data[self::FIELD_EXCLUDED_SYSTEM] instanceof FHIRExpansionProfileExcludedSystem) {
                $this->setExcludedSystem($data[self::FIELD_EXCLUDED_SYSTEM]);
            } else {
                $this->setExcludedSystem(new FHIRExpansionProfileExcludedSystem($data[self::FIELD_EXCLUDED_SYSTEM]));
            }
        }
        if (isset($data[self::FIELD_EXPERIMENTAL])) {
            $ext = (isset($data[self::FIELD_EXPERIMENTAL_EXT]) && is_array($data[self::FIELD_EXPERIMENTAL_EXT]))
                ? $data[self::FIELD_EXPERIMENTAL_EXT]
                : null;
            if ($data[self::FIELD_EXPERIMENTAL] instanceof FHIRBoolean) {
                $this->setExperimental($data[self::FIELD_EXPERIMENTAL]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_EXPERIMENTAL])) {
                    $this->setExperimental(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_EXPERIMENTAL]] + $ext));
                } else if (is_array($data[self::FIELD_EXPERIMENTAL])) {
                    $this->setExperimental(new FHIRBoolean(array_merge($ext, $data[self::FIELD_EXPERIMENTAL])));
                }
            } else {
                $this->setExperimental(new FHIRBoolean($data[self::FIELD_EXPERIMENTAL]));
            }
        }
        if (isset($data[self::FIELD_FIXED_VERSION])) {
            if (is_array($data[self::FIELD_FIXED_VERSION])) {
                foreach($data[self::FIELD_FIXED_VERSION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRExpansionProfileFixedVersion) {
                        $this->addFixedVersion($v);
                    } else {
                        $this->addFixedVersion(new FHIRExpansionProfileFixedVersion($v));
                    }
                }
            } else if ($data[self::FIELD_FIXED_VERSION] instanceof FHIRExpansionProfileFixedVersion) {
                $this->addFixedVersion($data[self::FIELD_FIXED_VERSION]);
            } else {
                $this->addFixedVersion(new FHIRExpansionProfileFixedVersion($data[self::FIELD_FIXED_VERSION]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_IDENTIFIER])) {
                    $this->setIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
                } else if (is_array($data[self::FIELD_IDENTIFIER])) {
                    $this->setIdentifier(new FHIRIdentifier(array_merge($ext, $data[self::FIELD_IDENTIFIER])));
                }
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_INCLUDE_DEFINITION])) {
            $ext = (isset($data[self::FIELD_INCLUDE_DEFINITION_EXT]) && is_array($data[self::FIELD_INCLUDE_DEFINITION_EXT]))
                ? $data[self::FIELD_INCLUDE_DEFINITION_EXT]
                : null;
            if ($data[self::FIELD_INCLUDE_DEFINITION] instanceof FHIRBoolean) {
                $this->setIncludeDefinition($data[self::FIELD_INCLUDE_DEFINITION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_INCLUDE_DEFINITION])) {
                    $this->setIncludeDefinition(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_INCLUDE_DEFINITION]] + $ext));
                } else if (is_array($data[self::FIELD_INCLUDE_DEFINITION])) {
                    $this->setIncludeDefinition(new FHIRBoolean(array_merge($ext, $data[self::FIELD_INCLUDE_DEFINITION])));
                }
            } else {
                $this->setIncludeDefinition(new FHIRBoolean($data[self::FIELD_INCLUDE_DEFINITION]));
            }
        }
        if (isset($data[self::FIELD_INCLUDE_DESIGNATIONS])) {
            $ext = (isset($data[self::FIELD_INCLUDE_DESIGNATIONS_EXT]) && is_array($data[self::FIELD_INCLUDE_DESIGNATIONS_EXT]))
                ? $data[self::FIELD_INCLUDE_DESIGNATIONS_EXT]
                : null;
            if ($data[self::FIELD_INCLUDE_DESIGNATIONS] instanceof FHIRBoolean) {
                $this->setIncludeDesignations($data[self::FIELD_INCLUDE_DESIGNATIONS]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_INCLUDE_DESIGNATIONS])) {
                    $this->setIncludeDesignations(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_INCLUDE_DESIGNATIONS]] + $ext));
                } else if (is_array($data[self::FIELD_INCLUDE_DESIGNATIONS])) {
                    $this->setIncludeDesignations(new FHIRBoolean(array_merge($ext, $data[self::FIELD_INCLUDE_DESIGNATIONS])));
                }
            } else {
                $this->setIncludeDesignations(new FHIRBoolean($data[self::FIELD_INCLUDE_DESIGNATIONS]));
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
        if (isset($data[self::FIELD_LIMITED_EXPANSION])) {
            $ext = (isset($data[self::FIELD_LIMITED_EXPANSION_EXT]) && is_array($data[self::FIELD_LIMITED_EXPANSION_EXT]))
                ? $data[self::FIELD_LIMITED_EXPANSION_EXT]
                : null;
            if ($data[self::FIELD_LIMITED_EXPANSION] instanceof FHIRBoolean) {
                $this->setLimitedExpansion($data[self::FIELD_LIMITED_EXPANSION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_LIMITED_EXPANSION])) {
                    $this->setLimitedExpansion(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_LIMITED_EXPANSION]] + $ext));
                } else if (is_array($data[self::FIELD_LIMITED_EXPANSION])) {
                    $this->setLimitedExpansion(new FHIRBoolean(array_merge($ext, $data[self::FIELD_LIMITED_EXPANSION])));
                }
            } else {
                $this->setLimitedExpansion(new FHIRBoolean($data[self::FIELD_LIMITED_EXPANSION]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT]))
                ? $data[self::FIELD_NAME_EXT]
                : null;
            if ($data[self::FIELD_NAME] instanceof FHIRString) {
                $this->setName($data[self::FIELD_NAME]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_NAME])) {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NAME]] + $ext));
                } else if (is_array($data[self::FIELD_NAME])) {
                    $this->setName(new FHIRString(array_merge($ext, $data[self::FIELD_NAME])));
                }
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
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PUBLISHER])) {
                    $this->setPublisher(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PUBLISHER]] + $ext));
                } else if (is_array($data[self::FIELD_PUBLISHER])) {
                    $this->setPublisher(new FHIRString(array_merge($ext, $data[self::FIELD_PUBLISHER])));
                }
            } else {
                $this->setPublisher(new FHIRString($data[self::FIELD_PUBLISHER]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRPublicationStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_STATUS])) {
                    $this->setStatus(new FHIRPublicationStatus([FHIRPublicationStatus::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
                } else if (is_array($data[self::FIELD_STATUS])) {
                    $this->setStatus(new FHIRPublicationStatus(array_merge($ext, $data[self::FIELD_STATUS])));
                }
            } else {
                $this->setStatus(new FHIRPublicationStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_URL])) {
            $ext = (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT]))
                ? $data[self::FIELD_URL_EXT]
                : null;
            if ($data[self::FIELD_URL] instanceof FHIRUri) {
                $this->setUrl($data[self::FIELD_URL]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_URL])) {
                    $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_URL]] + $ext));
                } else if (is_array($data[self::FIELD_URL])) {
                    $this->setUrl(new FHIRUri(array_merge($ext, $data[self::FIELD_URL])));
                }
            } else {
                $this->setUrl(new FHIRUri($data[self::FIELD_URL]));
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
        if (isset($data[self::FIELD_VERSION])) {
            $ext = (isset($data[self::FIELD_VERSION_EXT]) && is_array($data[self::FIELD_VERSION_EXT]))
                ? $data[self::FIELD_VERSION_EXT]
                : null;
            if ($data[self::FIELD_VERSION] instanceof FHIRString) {
                $this->setVersion($data[self::FIELD_VERSION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VERSION])) {
                    $this->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_VERSION]] + $ext));
                } else if (is_array($data[self::FIELD_VERSION])) {
                    $this->setVersion(new FHIRString(array_merge($ext, $data[self::FIELD_VERSION])));
                }
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
     * @return static
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
        return "<ExpansionProfile{$xmlns}></ExpansionProfile>";
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether inactive concepts are included or excluded in value set
     * expansions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getActiveOnly()
    {
        return $this->activeOnly;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether inactive concepts are included or excluded in value set
     * expansions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $activeOnly
     * @return static
     */
    public function setActiveOnly($activeOnly = null)
    {
        if (null === $activeOnly) {
            $this->activeOnly = null;
            return $this;
        }
        if ($activeOnly instanceof FHIRBoolean) {
            $this->activeOnly = $activeOnly;
            return $this;
        }
        $this->activeOnly = new FHIRBoolean($activeOnly);
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail $contact
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail[] $contact
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the expansion profile was published. The
     * date must change if and when the business version changes and it must change if
     * the status code changes. In addition, it should change when the substantive
     * content of the expansion profile changes.
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the expansion profile was published. The
     * date must change if and when the business version changes and it must change if
     * the status code changes. In addition, it should change when the substantive
     * content of the expansion profile changes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $date
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
     * A free text natural language description of the expansion profile from a
     * consumer's perspective.
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the expansion profile from a
     * consumer's perspective.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $description
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
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * A set of criteria that provide the constraints imposed on the value set
     * expansion by including or excluding designations.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileDesignation
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * A set of criteria that provide the constraints imposed on the value set
     * expansion by including or excluding designations.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileDesignation $designation
     * @return static
     */
    public function setDesignation(FHIRExpansionProfileDesignation $designation = null)
    {
        $this->designation = $designation;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies the language to be used for description in the expansions i.e. the
     * language to be used for ValueSet.expansion.contains.display.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    public function getDisplayLanguage()
    {
        return $this->displayLanguage;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies the language to be used for description in the expansions i.e. the
     * language to be used for ValueSet.expansion.contains.display.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode $displayLanguage
     * @return static
     */
    public function setDisplayLanguage($displayLanguage = null)
    {
        if (null === $displayLanguage) {
            $this->displayLanguage = null;
            return $this;
        }
        if ($displayLanguage instanceof FHIRCode) {
            $this->displayLanguage = $displayLanguage;
            return $this;
        }
        $this->displayLanguage = new FHIRCode($displayLanguage);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether or not the value set expansion nests codes or not (i.e.
     * ValueSet.expansion.contains.contains).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getExcludeNested()
    {
        return $this->excludeNested;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether or not the value set expansion nests codes or not (i.e.
     * ValueSet.expansion.contains.contains).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $excludeNested
     * @return static
     */
    public function setExcludeNested($excludeNested = null)
    {
        if (null === $excludeNested) {
            $this->excludeNested = null;
            return $this;
        }
        if ($excludeNested instanceof FHIRBoolean) {
            $this->excludeNested = $excludeNested;
            return $this;
        }
        $this->excludeNested = new FHIRBoolean($excludeNested);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether or not the value set expansion includes codes which cannot be
     * displayed in user interfaces.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getExcludeNotForUI()
    {
        return $this->excludeNotForUI;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether or not the value set expansion includes codes which cannot be
     * displayed in user interfaces.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $excludeNotForUI
     * @return static
     */
    public function setExcludeNotForUI($excludeNotForUI = null)
    {
        if (null === $excludeNotForUI) {
            $this->excludeNotForUI = null;
            return $this;
        }
        if ($excludeNotForUI instanceof FHIRBoolean) {
            $this->excludeNotForUI = $excludeNotForUI;
            return $this;
        }
        $this->excludeNotForUI = new FHIRBoolean($excludeNotForUI);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether or not the value set expansion includes post coordinated codes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getExcludePostCoordinated()
    {
        return $this->excludePostCoordinated;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether or not the value set expansion includes post coordinated codes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $excludePostCoordinated
     * @return static
     */
    public function setExcludePostCoordinated($excludePostCoordinated = null)
    {
        if (null === $excludePostCoordinated) {
            $this->excludePostCoordinated = null;
            return $this;
        }
        if ($excludePostCoordinated instanceof FHIRBoolean) {
            $this->excludePostCoordinated = $excludePostCoordinated;
            return $this;
        }
        $this->excludePostCoordinated = new FHIRBoolean($excludePostCoordinated);
        return $this;
    }

    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * Code system, or a particular version of a code system to be excluded from value
     * set expansions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileExcludedSystem
     */
    public function getExcludedSystem()
    {
        return $this->excludedSystem;
    }

    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * Code system, or a particular version of a code system to be excluded from value
     * set expansions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileExcludedSystem $excludedSystem
     * @return static
     */
    public function setExcludedSystem(FHIRExpansionProfileExcludedSystem $excludedSystem = null)
    {
        $this->excludedSystem = $excludedSystem;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A boolean value to indicate that this expansion profile is authored for testing
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A boolean value to indicate that this expansion profile is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
     * genuine usage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $experimental
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
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * Fix use of a particular code system to a particular version.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion[]
     */
    public function getFixedVersion()
    {
        return $this->fixedVersion;
    }

    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * Fix use of a particular code system to a particular version.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion $fixedVersion
     * @return static
     */
    public function addFixedVersion(FHIRExpansionProfileFixedVersion $fixedVersion = null)
    {
        $this->fixedVersion[] = $fixedVersion;
        return $this;
    }

    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * Fix use of a particular code system to a particular version.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion[] $fixedVersion
     * @return static
     */
    public function setFixedVersion(array $fixedVersion = [])
    {
        $this->fixedVersion = [];
        if ([] === $fixedVersion) {
            return $this;
        }
        foreach($fixedVersion as $v) {
            if ($v instanceof FHIRExpansionProfileFixedVersion) {
                $this->addFixedVersion($v);
            } else {
                $this->addFixedVersion(new FHIRExpansionProfileFixedVersion($v));
            }
        }
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this expansion profile when it is
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this expansion profile when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether the value set definition is included or excluded in value set
     * expansions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getIncludeDefinition()
    {
        return $this->includeDefinition;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether the value set definition is included or excluded in value set
     * expansions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $includeDefinition
     * @return static
     */
    public function setIncludeDefinition($includeDefinition = null)
    {
        if (null === $includeDefinition) {
            $this->includeDefinition = null;
            return $this;
        }
        if ($includeDefinition instanceof FHIRBoolean) {
            $this->includeDefinition = $includeDefinition;
            return $this;
        }
        $this->includeDefinition = new FHIRBoolean($includeDefinition);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether concept designations are to be included or excluded in value
     * set expansions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getIncludeDesignations()
    {
        return $this->includeDesignations;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether concept designations are to be included or excluded in value
     * set expansions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $includeDesignations
     * @return static
     */
    public function setIncludeDesignations($includeDesignations = null)
    {
        if (null === $includeDesignations) {
            $this->includeDesignations = null;
            return $this;
        }
        if ($includeDesignations instanceof FHIRBoolean) {
            $this->includeDesignations = $includeDesignations;
            return $this;
        }
        $this->includeDesignations = new FHIRBoolean($includeDesignations);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the expansion profile is intended to be
     * used.
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the expansion profile is intended to be
     * used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $jurisdiction
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
     * A legal or geographic region in which the expansion profile is intended to be
     * used.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $jurisdiction
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the value set being expanded is incomplete (because it is too big to expand),
     * return a limited expansion (a subset) with an indicator that expansion is
     * incomplete, using the extension
     * [http://hl7.org/fhir/StructureDefinition/valueset-toocostly](extension-valueset-toocostly.html).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getLimitedExpansion()
    {
        return $this->limitedExpansion;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the value set being expanded is incomplete (because it is too big to expand),
     * return a limited expansion (a subset) with an indicator that expansion is
     * incomplete, using the extension
     * [http://hl7.org/fhir/StructureDefinition/valueset-toocostly](extension-valueset-toocostly.html).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $limitedExpansion
     * @return static
     */
    public function setLimitedExpansion($limitedExpansion = null)
    {
        if (null === $limitedExpansion) {
            $this->limitedExpansion = null;
            return $this;
        }
        if ($limitedExpansion instanceof FHIRBoolean) {
            $this->limitedExpansion = $limitedExpansion;
            return $this;
        }
        $this->limitedExpansion = new FHIRBoolean($limitedExpansion);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the expansion profile. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the expansion profile. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $name
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the expansion profile.
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the expansion profile.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $publisher
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this expansion profile. Enables tracking the life-cycle of the
     * content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this expansion profile. Enables tracking the life-cycle of the
     * content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus $status
     * @return static
     */
    public function setStatus(FHIRPublicationStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this expansion profile when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this expansion
     * profile is (or will be) published. The URL SHOULD include the major version of
     * the expansion profile. For more information see [Technical and Business
     * Versions](resource.html#versions).
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this expansion profile when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this expansion
     * profile is (or will be) published. The URL SHOULD include the major version of
     * the expansion profile. For more information see [Technical and Business
     * Versions](resource.html#versions).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $url
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
     * Specifies clinical/business/etc metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * for appropriate expansion profile instances.
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * for appropriate expansion profile instances.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext $useContext
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * for appropriate expansion profile instances.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext[] $useContext
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the expansion profile
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the expansion profile author and is not expected to
     * be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence.
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the expansion profile
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the expansion profile author and is not expected to
     * be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $version
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRExpansionProfile $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRExpansionProfile
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
                throw new \DomainException(sprintf('FHIRExpansionProfile::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRExpansionProfile::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRExpansionProfile;
        } elseif (!is_object($type) || !($type instanceof FHIRExpansionProfile)) {
            throw new \RuntimeException(sprintf(
                'FHIRExpansionProfile::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRExpansionProfile or null, %s seen.',
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
        if (isset($attributes->activeOnly)) {
            $type->setActiveOnly((string)$attributes->activeOnly);
        }
        if (isset($children->activeOnly)) {
            $type->setActiveOnly(FHIRBoolean::xmlUnserialize($children->activeOnly));
        }
        if (isset($children->contact)) {
            foreach($children->contact as $child) {
                $type->addContact(FHIRContactDetail::xmlUnserialize($child));
            }
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
        if (isset($children->designation)) {
            $type->setDesignation(FHIRExpansionProfileDesignation::xmlUnserialize($children->designation));
        }
        if (isset($attributes->displayLanguage)) {
            $type->setDisplayLanguage((string)$attributes->displayLanguage);
        }
        if (isset($children->displayLanguage)) {
            $type->setDisplayLanguage(FHIRCode::xmlUnserialize($children->displayLanguage));
        }
        if (isset($attributes->excludeNested)) {
            $type->setExcludeNested((string)$attributes->excludeNested);
        }
        if (isset($children->excludeNested)) {
            $type->setExcludeNested(FHIRBoolean::xmlUnserialize($children->excludeNested));
        }
        if (isset($attributes->excludeNotForUI)) {
            $type->setExcludeNotForUI((string)$attributes->excludeNotForUI);
        }
        if (isset($children->excludeNotForUI)) {
            $type->setExcludeNotForUI(FHIRBoolean::xmlUnserialize($children->excludeNotForUI));
        }
        if (isset($attributes->excludePostCoordinated)) {
            $type->setExcludePostCoordinated((string)$attributes->excludePostCoordinated);
        }
        if (isset($children->excludePostCoordinated)) {
            $type->setExcludePostCoordinated(FHIRBoolean::xmlUnserialize($children->excludePostCoordinated));
        }
        if (isset($children->excludedSystem)) {
            $type->setExcludedSystem(FHIRExpansionProfileExcludedSystem::xmlUnserialize($children->excludedSystem));
        }
        if (isset($attributes->experimental)) {
            $type->setExperimental((string)$attributes->experimental);
        }
        if (isset($children->experimental)) {
            $type->setExperimental(FHIRBoolean::xmlUnserialize($children->experimental));
        }
        if (isset($children->fixedVersion)) {
            foreach($children->fixedVersion as $child) {
                $type->addFixedVersion(FHIRExpansionProfileFixedVersion::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($attributes->includeDefinition)) {
            $type->setIncludeDefinition((string)$attributes->includeDefinition);
        }
        if (isset($children->includeDefinition)) {
            $type->setIncludeDefinition(FHIRBoolean::xmlUnserialize($children->includeDefinition));
        }
        if (isset($attributes->includeDesignations)) {
            $type->setIncludeDesignations((string)$attributes->includeDesignations);
        }
        if (isset($children->includeDesignations)) {
            $type->setIncludeDesignations(FHIRBoolean::xmlUnserialize($children->includeDesignations));
        }
        if (isset($children->jurisdiction)) {
            foreach($children->jurisdiction as $child) {
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($attributes->limitedExpansion)) {
            $type->setLimitedExpansion((string)$attributes->limitedExpansion);
        }
        if (isset($children->limitedExpansion)) {
            $type->setLimitedExpansion(FHIRBoolean::xmlUnserialize($children->limitedExpansion));
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
        if (isset($children->status)) {
            $type->setStatus(FHIRPublicationStatus::xmlUnserialize($children->status));
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

        if (null !== ($v = $this->getActiveOnly())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACTIVE_ONLY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTACT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDesignation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESIGNATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDisplayLanguage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISPLAY_LANGUAGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExcludeNested())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXCLUDE_NESTED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExcludeNotForUI())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXCLUDE_NOT_FOR_UI, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExcludePostCoordinated())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXCLUDE_POST_COORDINATED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExcludedSystem())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXCLUDED_SYSTEM, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExperimental())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPERIMENTAL, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getFixedVersion())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_VERSION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIncludeDefinition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INCLUDE_DEFINITION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIncludeDesignations())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INCLUDE_DESIGNATIONS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_JURISDICTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getLimitedExpansion())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LIMITED_EXPANSION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPublisher())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PUBLISHER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getActiveOnly())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_ACTIVE_ONLY] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_ACTIVE_ONLY_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_ACTIVE_ONLY] = $v;
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            $a[self::FIELD_CONTACT] = $vs;
        }
        if (null !== ($v = $this->getDate())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DATE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DATE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DATE] = $v;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DESCRIPTION] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DESCRIPTION_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DESCRIPTION] = $v;
            }
        }
        if (null !== ($v = $this->getDesignation())) {
            $a[self::FIELD_DESIGNATION] = $v;
        }
        if (null !== ($v = $this->getDisplayLanguage())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DISPLAY_LANGUAGE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DISPLAY_LANGUAGE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DISPLAY_LANGUAGE] = $v;
            }
        }
        if (null !== ($v = $this->getExcludeNested())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_EXCLUDE_NESTED] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_EXCLUDE_NESTED_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_EXCLUDE_NESTED] = $v;
            }
        }
        if (null !== ($v = $this->getExcludeNotForUI())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_EXCLUDE_NOT_FOR_UI] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_EXCLUDE_NOT_FOR_UI_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_EXCLUDE_NOT_FOR_UI] = $v;
            }
        }
        if (null !== ($v = $this->getExcludePostCoordinated())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_EXCLUDE_POST_COORDINATED] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_EXCLUDE_POST_COORDINATED_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_EXCLUDE_POST_COORDINATED] = $v;
            }
        }
        if (null !== ($v = $this->getExcludedSystem())) {
            $a[self::FIELD_EXCLUDED_SYSTEM] = $v;
        }
        if (null !== ($v = $this->getExperimental())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_EXPERIMENTAL] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_EXPERIMENTAL_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_EXPERIMENTAL] = $v;
            }
        }
        if ([] !== ($vs = $this->getFixedVersion())) {
            $a[self::FIELD_FIXED_VERSION] = $vs;
        }
        if (null !== ($v = $this->getIdentifier())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_IDENTIFIER] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_IDENTIFIER_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_IDENTIFIER] = $v;
            }
        }
        if (null !== ($v = $this->getIncludeDefinition())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_INCLUDE_DEFINITION] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_INCLUDE_DEFINITION_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_INCLUDE_DEFINITION] = $v;
            }
        }
        if (null !== ($v = $this->getIncludeDesignations())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_INCLUDE_DESIGNATIONS] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_INCLUDE_DESIGNATIONS_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_INCLUDE_DESIGNATIONS] = $v;
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            $a[self::FIELD_JURISDICTION] = $vs;
        }
        if (null !== ($v = $this->getLimitedExpansion())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_LIMITED_EXPANSION] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_LIMITED_EXPANSION_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_LIMITED_EXPANSION] = $v;
            }
        }
        if (null !== ($v = $this->getName())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_NAME] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_NAME_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_NAME] = $v;
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PUBLISHER] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PUBLISHER_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PUBLISHER] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_STATUS] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_STATUS_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_STATUS] = $v;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_URL] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_URL_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_URL] = $v;
            }
        }
        if ([] !== ($vs = $this->getUseContext())) {
            $a[self::FIELD_USE_CONTEXT] = $vs;
        }
        if (null !== ($v = $this->getVersion())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VERSION] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VERSION_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VERSION] = $v;
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