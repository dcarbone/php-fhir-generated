<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileDesignation;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileExcludedSystem;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionTypeMap;

/**
 * Resource to define constraints on the Expansion of a FHIR ValueSet.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRExpansionProfile extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_EXPANSION_PROFILE;


    public const FIELD_URL = 'url';
    public const FIELD_URL_EXT = '_url';
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_VERSION = 'version';
    public const FIELD_VERSION_EXT = '_version';
    public const FIELD_NAME = 'name';
    public const FIELD_NAME_EXT = '_name';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_EXPERIMENTAL = 'experimental';
    public const FIELD_EXPERIMENTAL_EXT = '_experimental';
    public const FIELD_DATE = 'date';
    public const FIELD_DATE_EXT = '_date';
    public const FIELD_PUBLISHER = 'publisher';
    public const FIELD_PUBLISHER_EXT = '_publisher';
    public const FIELD_CONTACT = 'contact';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_USE_CONTEXT = 'useContext';
    public const FIELD_JURISDICTION = 'jurisdiction';
    public const FIELD_FIXED_VERSION = 'fixedVersion';
    public const FIELD_EXCLUDED_SYSTEM = 'excludedSystem';
    public const FIELD_INCLUDE_DESIGNATIONS = 'includeDesignations';
    public const FIELD_INCLUDE_DESIGNATIONS_EXT = '_includeDesignations';
    public const FIELD_DESIGNATION = 'designation';
    public const FIELD_INCLUDE_DEFINITION = 'includeDefinition';
    public const FIELD_INCLUDE_DEFINITION_EXT = '_includeDefinition';
    public const FIELD_ACTIVE_ONLY = 'activeOnly';
    public const FIELD_ACTIVE_ONLY_EXT = '_activeOnly';
    public const FIELD_EXCLUDE_NESTED = 'excludeNested';
    public const FIELD_EXCLUDE_NESTED_EXT = '_excludeNested';
    public const FIELD_EXCLUDE_NOT_FOR_UI = 'excludeNotForUI';
    public const FIELD_EXCLUDE_NOT_FOR_UI_EXT = '_excludeNotForUI';
    public const FIELD_EXCLUDE_POST_COORDINATED = 'excludePostCoordinated';
    public const FIELD_EXCLUDE_POST_COORDINATED_EXT = '_excludePostCoordinated';
    public const FIELD_DISPLAY_LANGUAGE = 'displayLanguage';
    public const FIELD_DISPLAY_LANGUAGE_EXT = '_displayLanguage';
    public const FIELD_LIMITED_EXPANSION = 'limitedExpansion';
    public const FIELD_LIMITED_EXPANSION_EXT = '_limitedExpansion';

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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $url;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this expansion profile when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $identifier;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $version;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the expansion profile. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $name;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this expansion profile. Enables tracking the life-cycle of the
     * content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPublicationStatus 
     */
    protected FHIRPublicationStatus $status;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A boolean value to indicate that this expansion profile is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
     * genuine usage.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $experimental;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $date;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the expansion profile.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $publisher;
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactDetail[] 
     */
    protected array $contact;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $description;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUsageContext[] 
     */
    protected array $useContext;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the expansion profile is intended to be
     * used.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $jurisdiction;
    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * Fix use of a particular code system to a particular version.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion[] 
     */
    protected array $fixedVersion;
    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * Code system, or a particular version of a code system to be excluded from value
     * set expansions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileExcludedSystem 
     */
    protected FHIRExpansionProfileExcludedSystem $excludedSystem;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether concept designations are to be included or excluded in value
     * set expansions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $includeDesignations;
    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * A set of criteria that provide the constraints imposed on the value set
     * expansion by including or excluding designations.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileDesignation 
     */
    protected FHIRExpansionProfileDesignation $designation;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether the value set definition is included or excluded in value set
     * expansions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $includeDefinition;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether inactive concepts are included or excluded in value set
     * expansions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $activeOnly;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether or not the value set expansion nests codes or not (i.e.
     * ValueSet.expansion.contains.contains).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $excludeNested;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether or not the value set expansion includes codes which cannot be
     * displayed in user interfaces.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $excludeNotForUI;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether or not the value set expansion includes post coordinated codes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $excludePostCoordinated;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies the language to be used for description in the expansions i.e. the
     * language to be used for ValueSet.expansion.contains.display.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $displayLanguage;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the value set being expanded is incomplete (because it is too big to expand),
     * return a limited expansion (a subset) with an indicator that expansion is
     * incomplete, using the extension
     * [http://hl7.org/fhir/StructureDefinition/valueset-toocostly](extension-valueset-toocostly.html).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $limitedExpansion;

    /** Default validation map for fields in type ExpansionProfile */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRExpansionProfile Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $url
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $version
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $name
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPublicationStatus $status
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $experimental
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $date
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $publisher
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactDetail[] $contact
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUsageContext[] $useContext
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] $jurisdiction
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion[] $fixedVersion
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileExcludedSystem $excludedSystem
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $includeDesignations
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileDesignation $designation
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $includeDefinition
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $activeOnly
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $excludeNested
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $excludeNotForUI
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $excludePostCoordinated
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $displayLanguage
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $limitedExpansion
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRUriPrimitive|FHIRUri $url = null,
                                null|FHIRIdentifier $identifier = null,
                                null|string|FHIRStringPrimitive|FHIRString $version = null,
                                null|string|FHIRStringPrimitive|FHIRString $name = null,
                                null|FHIRPublicationStatus $status = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $experimental = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date = null,
                                null|string|FHIRStringPrimitive|FHIRString $publisher = null,
                                null|iterable $contact = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null,
                                null|iterable $useContext = null,
                                null|iterable $jurisdiction = null,
                                null|iterable $fixedVersion = null,
                                null|FHIRExpansionProfileExcludedSystem $excludedSystem = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $includeDesignations = null,
                                null|FHIRExpansionProfileDesignation $designation = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $includeDefinition = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $activeOnly = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $excludeNested = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $excludeNotForUI = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $excludePostCoordinated = null,
                                null|string|FHIRCodePrimitive|FHIRCode $displayLanguage = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $limitedExpansion = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(id: $id,
                            meta: $meta,
                            implicitRules: $implicitRules,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $url) {
            $this->setUrl($url);
        }
        if (null !== $identifier) {
            $this->setIdentifier($identifier);
        }
        if (null !== $version) {
            $this->setVersion($version);
        }
        if (null !== $name) {
            $this->setName($name);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $experimental) {
            $this->setExperimental($experimental);
        }
        if (null !== $date) {
            $this->setDate($date);
        }
        if (null !== $publisher) {
            $this->setPublisher($publisher);
        }
        if (null !== $contact) {
            $this->setContact(...$contact);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $useContext) {
            $this->setUseContext(...$useContext);
        }
        if (null !== $jurisdiction) {
            $this->setJurisdiction(...$jurisdiction);
        }
        if (null !== $fixedVersion) {
            $this->setFixedVersion(...$fixedVersion);
        }
        if (null !== $excludedSystem) {
            $this->setExcludedSystem($excludedSystem);
        }
        if (null !== $includeDesignations) {
            $this->setIncludeDesignations($includeDesignations);
        }
        if (null !== $designation) {
            $this->setDesignation($designation);
        }
        if (null !== $includeDefinition) {
            $this->setIncludeDefinition($includeDefinition);
        }
        if (null !== $activeOnly) {
            $this->setActiveOnly($activeOnly);
        }
        if (null !== $excludeNested) {
            $this->setExcludeNested($excludeNested);
        }
        if (null !== $excludeNotForUI) {
            $this->setExcludeNotForUI($excludeNotForUI);
        }
        if (null !== $excludePostCoordinated) {
            $this->setExcludePostCoordinated($excludePostCoordinated);
        }
        if (null !== $displayLanguage) {
            $this->setDisplayLanguage($displayLanguage);
        }
        if (null !== $limitedExpansion) {
            $this->setLimitedExpansion($limitedExpansion);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
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
     * An absolute URI that is used to identify this expansion profile when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this expansion
     * profile is (or will be) published. The URL SHOULD include the major version of
     * the expansion profile. For more information see [Technical and Business
     * Versions](resource.html#versions).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri
     */
    public function getUrl(): null|FHIRUri
    {
        return $this->url ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $url
     * @return static
     */
    public function setUrl(null|string|FHIRUriPrimitive|FHIRUri $url): self
    {
        if (null === $url) {
            unset($this->url);
            return $this;
        }
        if (!($url instanceof FHIRUri)) {
            $url = new FHIRUri(value: $url);
        }
        $this->url = $url;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier(): null|FHIRIdentifier
    {
        return $this->identifier ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(null|FHIRIdentifier $identifier): self
    {
        if (null === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = $identifier;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getVersion(): null|FHIRString
    {
        return $this->version ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $version
     * @return static
     */
    public function setVersion(null|string|FHIRStringPrimitive|FHIRString $version): self
    {
        if (null === $version) {
            unset($this->version);
            return $this;
        }
        if (!($version instanceof FHIRString)) {
            $version = new FHIRString(value: $version);
        }
        $this->version = $version;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $name
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name): self
    {
        if (null === $name) {
            unset($this->name);
            return $this;
        }
        if (!($name instanceof FHIRString)) {
            $name = new FHIRString(value: $name);
        }
        $this->name = $name;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this expansion profile. Enables tracking the life-cycle of the
     * content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus(): null|FHIRPublicationStatus
    {
        return $this->status ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this expansion profile. Enables tracking the life-cycle of the
     * content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPublicationStatus $status
     * @return static
     */
    public function setStatus(null|FHIRPublicationStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        $this->status = $status;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getExperimental(): null|FHIRBoolean
    {
        return $this->experimental ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A boolean value to indicate that this expansion profile is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
     * genuine usage.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $experimental
     * @return static
     */
    public function setExperimental(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $experimental): self
    {
        if (null === $experimental) {
            unset($this->experimental);
            return $this;
        }
        if (!($experimental instanceof FHIRBoolean)) {
            $experimental = new FHIRBoolean(value: $experimental);
        }
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
     * The date (and optionally time) when the expansion profile was published. The
     * date must change if and when the business version changes and it must change if
     * the status code changes. In addition, it should change when the substantive
     * content of the expansion profile changes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime
     */
    public function getDate(): null|FHIRDateTime
    {
        return $this->date ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $date
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date): self
    {
        if (null === $date) {
            unset($this->date);
            return $this;
        }
        if (!($date instanceof FHIRDateTime)) {
            $date = new FHIRDateTime(value: $date);
        }
        $this->date = $date;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the expansion profile.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getPublisher(): null|FHIRString
    {
        return $this->publisher ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the expansion profile.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $publisher
     * @return static
     */
    public function setPublisher(null|string|FHIRStringPrimitive|FHIRString $publisher): self
    {
        if (null === $publisher) {
            unset($this->publisher);
            return $this;
        }
        if (!($publisher instanceof FHIRString)) {
            $publisher = new FHIRString(value: $publisher);
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactDetail[]
     */
    public function getContact(): array
    {
        return $this->contact ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactDetail>
     */
    public function getContactIterator(): iterable
    {
        if (!isset($this->contact) || [] === $this->contact) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->contact);
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactDetail $contact
     * @return static
     */
    public function addContact(FHIRContactDetail $contact): self
    {
        if (!isset($this->contact)) {
            $this->contact = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactDetail ...$contact
     * @return static
     */
    public function setContact(FHIRContactDetail ...$contact): self
    {
        $this->contact = $contact;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown
     */
    public function getDescription(): null|FHIRMarkdown
    {
        return $this->description ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $description
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown(value: $description);
        }
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
     * for appropriate expansion profile instances.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUsageContext[]
     */
    public function getUseContext(): array
    {
        return $this->useContext ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUsageContext>
     */
    public function getUseContextIterator(): iterable
    {
        if (!isset($this->useContext) || [] === $this->useContext) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->useContext);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUsageContext $useContext
     * @return static
     */
    public function addUseContext(FHIRUsageContext $useContext): self
    {
        if (!isset($this->useContext)) {
            $this->useContext = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUsageContext ...$useContext
     * @return static
     */
    public function setUseContext(FHIRUsageContext ...$useContext): self
    {
        $this->useContext = $useContext;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction(): array
    {
        return $this->jurisdiction ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getJurisdictionIterator(): iterable
    {
        if (!isset($this->jurisdiction) || [] === $this->jurisdiction) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->jurisdiction);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return static
     */
    public function addJurisdiction(FHIRCodeableConcept $jurisdiction): self
    {
        if (!isset($this->jurisdiction)) {
            $this->jurisdiction = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept ...$jurisdiction
     * @return static
     */
    public function setJurisdiction(FHIRCodeableConcept ...$jurisdiction): self
    {
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * Fix use of a particular code system to a particular version.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion[]
     */
    public function getFixedVersion(): array
    {
        return $this->fixedVersion ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion>
     */
    public function getFixedVersionIterator(): iterable
    {
        if (!isset($this->fixedVersion) || [] === $this->fixedVersion) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->fixedVersion);
    }

    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * Fix use of a particular code system to a particular version.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion $fixedVersion
     * @return static
     */
    public function addFixedVersion(FHIRExpansionProfileFixedVersion $fixedVersion): self
    {
        if (!isset($this->fixedVersion)) {
            $this->fixedVersion = [];
        }
        $this->fixedVersion[] = $fixedVersion;
        return $this;
    }

    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * Fix use of a particular code system to a particular version.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion ...$fixedVersion
     * @return static
     */
    public function setFixedVersion(FHIRExpansionProfileFixedVersion ...$fixedVersion): self
    {
        $this->fixedVersion = $fixedVersion;
        return $this;
    }

    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * Code system, or a particular version of a code system to be excluded from value
     * set expansions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileExcludedSystem
     */
    public function getExcludedSystem(): null|FHIRExpansionProfileExcludedSystem
    {
        return $this->excludedSystem ?? null;
    }

    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * Code system, or a particular version of a code system to be excluded from value
     * set expansions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileExcludedSystem $excludedSystem
     * @return static
     */
    public function setExcludedSystem(null|FHIRExpansionProfileExcludedSystem $excludedSystem): self
    {
        if (null === $excludedSystem) {
            unset($this->excludedSystem);
            return $this;
        }
        $this->excludedSystem = $excludedSystem;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether concept designations are to be included or excluded in value
     * set expansions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getIncludeDesignations(): null|FHIRBoolean
    {
        return $this->includeDesignations ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether concept designations are to be included or excluded in value
     * set expansions.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $includeDesignations
     * @return static
     */
    public function setIncludeDesignations(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $includeDesignations): self
    {
        if (null === $includeDesignations) {
            unset($this->includeDesignations);
            return $this;
        }
        if (!($includeDesignations instanceof FHIRBoolean)) {
            $includeDesignations = new FHIRBoolean(value: $includeDesignations);
        }
        $this->includeDesignations = $includeDesignations;
        return $this;
    }

    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * A set of criteria that provide the constraints imposed on the value set
     * expansion by including or excluding designations.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileDesignation
     */
    public function getDesignation(): null|FHIRExpansionProfileDesignation
    {
        return $this->designation ?? null;
    }

    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * A set of criteria that provide the constraints imposed on the value set
     * expansion by including or excluding designations.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileDesignation $designation
     * @return static
     */
    public function setDesignation(null|FHIRExpansionProfileDesignation $designation): self
    {
        if (null === $designation) {
            unset($this->designation);
            return $this;
        }
        $this->designation = $designation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether the value set definition is included or excluded in value set
     * expansions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getIncludeDefinition(): null|FHIRBoolean
    {
        return $this->includeDefinition ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether the value set definition is included or excluded in value set
     * expansions.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $includeDefinition
     * @return static
     */
    public function setIncludeDefinition(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $includeDefinition): self
    {
        if (null === $includeDefinition) {
            unset($this->includeDefinition);
            return $this;
        }
        if (!($includeDefinition instanceof FHIRBoolean)) {
            $includeDefinition = new FHIRBoolean(value: $includeDefinition);
        }
        $this->includeDefinition = $includeDefinition;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether inactive concepts are included or excluded in value set
     * expansions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getActiveOnly(): null|FHIRBoolean
    {
        return $this->activeOnly ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether inactive concepts are included or excluded in value set
     * expansions.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $activeOnly
     * @return static
     */
    public function setActiveOnly(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $activeOnly): self
    {
        if (null === $activeOnly) {
            unset($this->activeOnly);
            return $this;
        }
        if (!($activeOnly instanceof FHIRBoolean)) {
            $activeOnly = new FHIRBoolean(value: $activeOnly);
        }
        $this->activeOnly = $activeOnly;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether or not the value set expansion nests codes or not (i.e.
     * ValueSet.expansion.contains.contains).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getExcludeNested(): null|FHIRBoolean
    {
        return $this->excludeNested ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether or not the value set expansion nests codes or not (i.e.
     * ValueSet.expansion.contains.contains).
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $excludeNested
     * @return static
     */
    public function setExcludeNested(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $excludeNested): self
    {
        if (null === $excludeNested) {
            unset($this->excludeNested);
            return $this;
        }
        if (!($excludeNested instanceof FHIRBoolean)) {
            $excludeNested = new FHIRBoolean(value: $excludeNested);
        }
        $this->excludeNested = $excludeNested;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether or not the value set expansion includes codes which cannot be
     * displayed in user interfaces.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getExcludeNotForUI(): null|FHIRBoolean
    {
        return $this->excludeNotForUI ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether or not the value set expansion includes codes which cannot be
     * displayed in user interfaces.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $excludeNotForUI
     * @return static
     */
    public function setExcludeNotForUI(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $excludeNotForUI): self
    {
        if (null === $excludeNotForUI) {
            unset($this->excludeNotForUI);
            return $this;
        }
        if (!($excludeNotForUI instanceof FHIRBoolean)) {
            $excludeNotForUI = new FHIRBoolean(value: $excludeNotForUI);
        }
        $this->excludeNotForUI = $excludeNotForUI;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether or not the value set expansion includes post coordinated codes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getExcludePostCoordinated(): null|FHIRBoolean
    {
        return $this->excludePostCoordinated ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether or not the value set expansion includes post coordinated codes.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $excludePostCoordinated
     * @return static
     */
    public function setExcludePostCoordinated(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $excludePostCoordinated): self
    {
        if (null === $excludePostCoordinated) {
            unset($this->excludePostCoordinated);
            return $this;
        }
        if (!($excludePostCoordinated instanceof FHIRBoolean)) {
            $excludePostCoordinated = new FHIRBoolean(value: $excludePostCoordinated);
        }
        $this->excludePostCoordinated = $excludePostCoordinated;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode
     */
    public function getDisplayLanguage(): null|FHIRCode
    {
        return $this->displayLanguage ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $displayLanguage
     * @return static
     */
    public function setDisplayLanguage(null|string|FHIRCodePrimitive|FHIRCode $displayLanguage): self
    {
        if (null === $displayLanguage) {
            unset($this->displayLanguage);
            return $this;
        }
        if (!($displayLanguage instanceof FHIRCode)) {
            $displayLanguage = new FHIRCode(value: $displayLanguage);
        }
        $this->displayLanguage = $displayLanguage;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getLimitedExpansion(): null|FHIRBoolean
    {
        return $this->limitedExpansion ?? null;
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $limitedExpansion
     * @return static
     */
    public function setLimitedExpansion(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $limitedExpansion): self
    {
        if (null === $limitedExpansion) {
            unset($this->limitedExpansion);
            return $this;
        }
        if (!($limitedExpansion instanceof FHIRBoolean)) {
            $limitedExpansion = new FHIRBoolean(value: $limitedExpansion);
        }
        $this->limitedExpansion = $limitedExpansion;
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
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_URL])) {
                        $errs[self::FIELD_URL] = [];
                    }
                    $errs[self::FIELD_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VERSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NAME, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STATUS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXPERIMENTAL, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PUBLISHER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTACT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_USE_CONTEXT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_JURISDICTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_JURISDICTION])) {
                        $errs[self::FIELD_JURISDICTION] = [];
                    }
                    $errs[self::FIELD_JURISDICTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_VERSION])) {
            $v = $this->getFixedVersion();
            foreach($validationRules[self::FIELD_FIXED_VERSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIXED_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_VERSION])) {
                        $errs[self::FIELD_FIXED_VERSION] = [];
                    }
                    $errs[self::FIELD_FIXED_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXCLUDED_SYSTEM])) {
            $v = $this->getExcludedSystem();
            foreach($validationRules[self::FIELD_EXCLUDED_SYSTEM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXCLUDED_SYSTEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXCLUDED_SYSTEM])) {
                        $errs[self::FIELD_EXCLUDED_SYSTEM] = [];
                    }
                    $errs[self::FIELD_EXCLUDED_SYSTEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INCLUDE_DESIGNATIONS])) {
            $v = $this->getIncludeDesignations();
            foreach($validationRules[self::FIELD_INCLUDE_DESIGNATIONS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INCLUDE_DESIGNATIONS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INCLUDE_DESIGNATIONS])) {
                        $errs[self::FIELD_INCLUDE_DESIGNATIONS] = [];
                    }
                    $errs[self::FIELD_INCLUDE_DESIGNATIONS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESIGNATION])) {
            $v = $this->getDesignation();
            foreach($validationRules[self::FIELD_DESIGNATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DESIGNATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESIGNATION])) {
                        $errs[self::FIELD_DESIGNATION] = [];
                    }
                    $errs[self::FIELD_DESIGNATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INCLUDE_DEFINITION])) {
            $v = $this->getIncludeDefinition();
            foreach($validationRules[self::FIELD_INCLUDE_DEFINITION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INCLUDE_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INCLUDE_DEFINITION])) {
                        $errs[self::FIELD_INCLUDE_DEFINITION] = [];
                    }
                    $errs[self::FIELD_INCLUDE_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTIVE_ONLY])) {
            $v = $this->getActiveOnly();
            foreach($validationRules[self::FIELD_ACTIVE_ONLY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ACTIVE_ONLY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTIVE_ONLY])) {
                        $errs[self::FIELD_ACTIVE_ONLY] = [];
                    }
                    $errs[self::FIELD_ACTIVE_ONLY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXCLUDE_NESTED])) {
            $v = $this->getExcludeNested();
            foreach($validationRules[self::FIELD_EXCLUDE_NESTED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXCLUDE_NESTED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXCLUDE_NESTED])) {
                        $errs[self::FIELD_EXCLUDE_NESTED] = [];
                    }
                    $errs[self::FIELD_EXCLUDE_NESTED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXCLUDE_NOT_FOR_UI])) {
            $v = $this->getExcludeNotForUI();
            foreach($validationRules[self::FIELD_EXCLUDE_NOT_FOR_UI] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXCLUDE_NOT_FOR_UI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXCLUDE_NOT_FOR_UI])) {
                        $errs[self::FIELD_EXCLUDE_NOT_FOR_UI] = [];
                    }
                    $errs[self::FIELD_EXCLUDE_NOT_FOR_UI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXCLUDE_POST_COORDINATED])) {
            $v = $this->getExcludePostCoordinated();
            foreach($validationRules[self::FIELD_EXCLUDE_POST_COORDINATED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXCLUDE_POST_COORDINATED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXCLUDE_POST_COORDINATED])) {
                        $errs[self::FIELD_EXCLUDE_POST_COORDINATED] = [];
                    }
                    $errs[self::FIELD_EXCLUDE_POST_COORDINATED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISPLAY_LANGUAGE])) {
            $v = $this->getDisplayLanguage();
            foreach($validationRules[self::FIELD_DISPLAY_LANGUAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DISPLAY_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISPLAY_LANGUAGE])) {
                        $errs[self::FIELD_DISPLAY_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_DISPLAY_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LIMITED_EXPANSION])) {
            $v = $this->getLimitedExpansion();
            foreach($validationRules[self::FIELD_LIMITED_EXPANSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LIMITED_EXPANSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LIMITED_EXPANSION])) {
                        $errs[self::FIELD_LIMITED_EXPANSION] = [];
                    }
                    $errs[self::FIELD_LIMITED_EXPANSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTAINED, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_META, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LANGUAGE, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRExpansionProfile $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRExpansionProfile
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRExpansionProfile)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_ID === $childName) {
                $v = new FHIRId(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_META === $childName) {
                $v = new FHIRMeta();
                $type->setMeta(FHIRMeta::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LANGUAGE === $childName) {
                $v = new FHIRCode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setLanguage(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT === $childName) {
                $v = new FHIRNarrative();
                $type->setText(FHIRNarrative::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($nn);
                    $type->addContained($cn::xmlUnserialize($nn, null, $config));
                }
            } else if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_URL === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setUrl(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->setIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VERSION === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setVersion(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NAME === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setName(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATUS === $childName) {
                $v = new FHIRPublicationStatus(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setStatus(FHIRPublicationStatus::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXPERIMENTAL === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setExperimental(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATE === $childName) {
                $v = new FHIRDateTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDate(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PUBLISHER === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPublisher(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTACT === $childName) {
                $v = new FHIRContactDetail();
                $type->addContact(FHIRContactDetail::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DESCRIPTION === $childName) {
                $v = new FHIRMarkdown(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_USE_CONTEXT === $childName) {
                $v = new FHIRUsageContext();
                $type->addUseContext(FHIRUsageContext::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_JURISDICTION === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIXED_VERSION === $childName) {
                $v = new FHIRExpansionProfileFixedVersion();
                $type->addFixedVersion(FHIRExpansionProfileFixedVersion::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXCLUDED_SYSTEM === $childName) {
                $v = new FHIRExpansionProfileExcludedSystem();
                $type->setExcludedSystem(FHIRExpansionProfileExcludedSystem::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INCLUDE_DESIGNATIONS === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setIncludeDesignations(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DESIGNATION === $childName) {
                $v = new FHIRExpansionProfileDesignation();
                $type->setDesignation(FHIRExpansionProfileDesignation::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INCLUDE_DEFINITION === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setIncludeDefinition(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ACTIVE_ONLY === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setActiveOnly(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXCLUDE_NESTED === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setExcludeNested(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXCLUDE_NOT_FOR_UI === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setExcludeNotForUI(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXCLUDE_POST_COORDINATED === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setExcludePostCoordinated(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DISPLAY_LANGUAGE === $childName) {
                $v = new FHIRCode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDisplayLanguage(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LIMITED_EXPANSION === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setLimitedExpansion(FHIRBoolean::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRId(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules(new FHIRUri(
                    value: (string)$attributes[self::FIELD_IMPLICIT_RULES],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage(new FHIRCode(
                    value: (string)$attributes[self::FIELD_LANGUAGE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_URL])) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_URL]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setUrl(new FHIRUri(
                    value: (string)$attributes[self::FIELD_URL],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VERSION])) {
            $pt = $type->getVersion();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VERSION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setVersion(new FHIRString(
                    value: (string)$attributes[self::FIELD_VERSION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_NAME])) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NAME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setName(new FHIRString(
                    value: (string)$attributes[self::FIELD_NAME],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXPERIMENTAL])) {
            $pt = $type->getExperimental();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_EXPERIMENTAL]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExperimental(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_EXPERIMENTAL],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATE])) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDate(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_DATE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PUBLISHER])) {
            $pt = $type->getPublisher();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PUBLISHER]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPublisher(new FHIRString(
                    value: (string)$attributes[self::FIELD_PUBLISHER],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_DESCRIPTION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_INCLUDE_DESIGNATIONS])) {
            $pt = $type->getIncludeDesignations();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_INCLUDE_DESIGNATIONS]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setIncludeDesignations(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_INCLUDE_DESIGNATIONS],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_INCLUDE_DEFINITION])) {
            $pt = $type->getIncludeDefinition();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_INCLUDE_DEFINITION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setIncludeDefinition(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_INCLUDE_DEFINITION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ACTIVE_ONLY])) {
            $pt = $type->getActiveOnly();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ACTIVE_ONLY]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setActiveOnly(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_ACTIVE_ONLY],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXCLUDE_NESTED])) {
            $pt = $type->getExcludeNested();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_EXCLUDE_NESTED]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExcludeNested(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_EXCLUDE_NESTED],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXCLUDE_NOT_FOR_UI])) {
            $pt = $type->getExcludeNotForUI();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_EXCLUDE_NOT_FOR_UI]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExcludeNotForUI(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_EXCLUDE_NOT_FOR_UI],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXCLUDE_POST_COORDINATED])) {
            $pt = $type->getExcludePostCoordinated();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_EXCLUDE_POST_COORDINATED]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExcludePostCoordinated(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_EXCLUDE_POST_COORDINATED],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DISPLAY_LANGUAGE])) {
            $pt = $type->getDisplayLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DISPLAY_LANGUAGE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDisplayLanguage(new FHIRCode(
                    value: (string)$attributes[self::FIELD_DISPLAY_LANGUAGE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LIMITED_EXPANSION])) {
            $pt = $type->getLimitedExpansion();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LIMITED_EXPANSION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLimitedExpansion(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_LIMITED_EXPANSION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('ExpansionProfile', $this->_getSourceXMLNS());
        }
        if (isset($this->url) && $this->url->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_URL, $this->url->getValue()?->getFormattedValue());
        }
        if (isset($this->version) && $this->version->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VERSION, $this->version->getValue()?->getFormattedValue());
        }
        if (isset($this->name) && $this->name->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NAME, $this->name->getValue()?->getFormattedValue());
        }
        if (isset($this->experimental) && $this->experimental->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXPERIMENTAL, $this->experimental->getValue()?->getFormattedValue());
        }
        if (isset($this->date) && $this->date->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->getValue()?->getFormattedValue());
        }
        if (isset($this->publisher) && $this->publisher->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PUBLISHER, $this->publisher->getValue()?->getFormattedValue());
        }
        if (isset($this->description) && $this->description->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->getValue()?->getFormattedValue());
        }
        if (isset($this->includeDesignations) && $this->includeDesignations->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_INCLUDE_DESIGNATIONS, $this->includeDesignations->getValue()?->getFormattedValue());
        }
        if (isset($this->includeDefinition) && $this->includeDefinition->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_INCLUDE_DEFINITION, $this->includeDefinition->getValue()?->getFormattedValue());
        }
        if (isset($this->activeOnly) && $this->activeOnly->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ACTIVE_ONLY, $this->activeOnly->getValue()?->getFormattedValue());
        }
        if (isset($this->excludeNested) && $this->excludeNested->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXCLUDE_NESTED, $this->excludeNested->getValue()?->getFormattedValue());
        }
        if (isset($this->excludeNotForUI) && $this->excludeNotForUI->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXCLUDE_NOT_FOR_UI, $this->excludeNotForUI->getValue()?->getFormattedValue());
        }
        if (isset($this->excludePostCoordinated) && $this->excludePostCoordinated->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXCLUDE_POST_COORDINATED, $this->excludePostCoordinated->getValue()?->getFormattedValue());
        }
        if (isset($this->displayLanguage) && $this->displayLanguage->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DISPLAY_LANGUAGE, $this->displayLanguage->getValue()?->getFormattedValue());
        }
        if (isset($this->limitedExpansion) && $this->limitedExpansion->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_LIMITED_EXPANSION, $this->limitedExpansion->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->url) && $this->url->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_URL);
            $this->url->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->identifier)) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $this->identifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->version) && $this->version->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VERSION);
            $this->version->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->name) && $this->name->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->status)) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->experimental) && $this->experimental->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXPERIMENTAL);
            $this->experimental->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->date) && $this->date->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATE);
            $this->date->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->publisher) && $this->publisher->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PUBLISHER);
            $this->publisher->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->contact)) {
            foreach ($this->contact as $v) {
                $xw->startElement(self::FIELD_CONTACT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->description) && $this->description->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->useContext)) {
            foreach ($this->useContext as $v) {
                $xw->startElement(self::FIELD_USE_CONTEXT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->jurisdiction)) {
            foreach ($this->jurisdiction as $v) {
                $xw->startElement(self::FIELD_JURISDICTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->fixedVersion)) {
            foreach ($this->fixedVersion as $v) {
                $xw->startElement(self::FIELD_FIXED_VERSION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->excludedSystem)) {
            $xw->startElement(self::FIELD_EXCLUDED_SYSTEM);
            $this->excludedSystem->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->includeDesignations) && $this->includeDesignations->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_INCLUDE_DESIGNATIONS);
            $this->includeDesignations->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->designation)) {
            $xw->startElement(self::FIELD_DESIGNATION);
            $this->designation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->includeDefinition) && $this->includeDefinition->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_INCLUDE_DEFINITION);
            $this->includeDefinition->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->activeOnly) && $this->activeOnly->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ACTIVE_ONLY);
            $this->activeOnly->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->excludeNested) && $this->excludeNested->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXCLUDE_NESTED);
            $this->excludeNested->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->excludeNotForUI) && $this->excludeNotForUI->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXCLUDE_NOT_FOR_UI);
            $this->excludeNotForUI->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->excludePostCoordinated) && $this->excludePostCoordinated->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXCLUDE_POST_COORDINATED);
            $this->excludePostCoordinated->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->displayLanguage) && $this->displayLanguage->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DISPLAY_LANGUAGE);
            $this->displayLanguage->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->limitedExpansion) && $this->limitedExpansion->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_LIMITED_EXPANSION);
            $this->limitedExpansion->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRExpansionProfile $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRExpansionProfile
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRExpansionProfile)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_URL]) || isset($json[self::FIELD_URL_EXT]) || array_key_exists(self::FIELD_URL, $json) || array_key_exists(self::FIELD_URL_EXT, $json)) {
            $value = $json[self::FIELD_URL] ?? null;
            $ext = (isset($json[self::FIELD_URL_EXT]) && is_array($json[self::FIELD_URL_EXT])) ? $json[self::FIELD_URL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setUrl($value);
                } else if (is_array($value)) {
                    $type->setUrl(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setUrl(new FHIRUri($ext));
            } else {
                $type->setUrl(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            if ($json[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->setIdentifier($json[self::FIELD_IDENTIFIER]);
            } else {
                $type->setIdentifier(new FHIRIdentifier($json[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_VERSION]) || isset($json[self::FIELD_VERSION_EXT]) || array_key_exists(self::FIELD_VERSION, $json) || array_key_exists(self::FIELD_VERSION_EXT, $json)) {
            $value = $json[self::FIELD_VERSION] ?? null;
            $ext = (isset($json[self::FIELD_VERSION_EXT]) && is_array($json[self::FIELD_VERSION_EXT])) ? $json[self::FIELD_VERSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setVersion($value);
                } else if (is_array($value)) {
                    $type->setVersion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setVersion(new FHIRString($ext));
            } else {
                $type->setVersion(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_NAME]) || isset($json[self::FIELD_NAME_EXT]) || array_key_exists(self::FIELD_NAME, $json) || array_key_exists(self::FIELD_NAME_EXT, $json)) {
            $value = $json[self::FIELD_NAME] ?? null;
            $ext = (isset($json[self::FIELD_NAME_EXT]) && is_array($json[self::FIELD_NAME_EXT])) ? $json[self::FIELD_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setName($value);
                } else if (is_array($value)) {
                    $type->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setName(new FHIRString($ext));
            } else {
                $type->setName(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_STATUS]) || isset($json[self::FIELD_STATUS_EXT]) || array_key_exists(self::FIELD_STATUS, $json) || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $ext = (isset($json[self::FIELD_STATUS_EXT]) && is_array($json[self::FIELD_STATUS_EXT])) ? $json[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPublicationStatus) {
                    $type->setStatus($value);
                } else if (is_array($value)) {
                    $type->setStatus(new FHIRPublicationStatus(array_merge($ext, $value)));
                } else {
                    $type->setStatus(new FHIRPublicationStatus([FHIRPublicationStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setStatus(new FHIRPublicationStatus($ext));
            } else {
                $type->setStatus(new FHIRPublicationStatus(null));
            }
        }
        if (isset($json[self::FIELD_EXPERIMENTAL]) || isset($json[self::FIELD_EXPERIMENTAL_EXT]) || array_key_exists(self::FIELD_EXPERIMENTAL, $json) || array_key_exists(self::FIELD_EXPERIMENTAL_EXT, $json)) {
            $value = $json[self::FIELD_EXPERIMENTAL] ?? null;
            $ext = (isset($json[self::FIELD_EXPERIMENTAL_EXT]) && is_array($json[self::FIELD_EXPERIMENTAL_EXT])) ? $json[self::FIELD_EXPERIMENTAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setExperimental($value);
                } else if (is_array($value)) {
                    $type->setExperimental(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setExperimental(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setExperimental(new FHIRBoolean($ext));
            } else {
                $type->setExperimental(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_DATE]) || isset($json[self::FIELD_DATE_EXT]) || array_key_exists(self::FIELD_DATE, $json) || array_key_exists(self::FIELD_DATE_EXT, $json)) {
            $value = $json[self::FIELD_DATE] ?? null;
            $ext = (isset($json[self::FIELD_DATE_EXT]) && is_array($json[self::FIELD_DATE_EXT])) ? $json[self::FIELD_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setDate($value);
                } else if (is_array($value)) {
                    $type->setDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDate(new FHIRDateTime($ext));
            } else {
                $type->setDate(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_PUBLISHER]) || isset($json[self::FIELD_PUBLISHER_EXT]) || array_key_exists(self::FIELD_PUBLISHER, $json) || array_key_exists(self::FIELD_PUBLISHER_EXT, $json)) {
            $value = $json[self::FIELD_PUBLISHER] ?? null;
            $ext = (isset($json[self::FIELD_PUBLISHER_EXT]) && is_array($json[self::FIELD_PUBLISHER_EXT])) ? $json[self::FIELD_PUBLISHER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setPublisher($value);
                } else if (is_array($value)) {
                    $type->setPublisher(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setPublisher(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPublisher(new FHIRString($ext));
            } else {
                $type->setPublisher(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_CONTACT]) || array_key_exists(self::FIELD_CONTACT, $json)) {
            if (is_array($json[self::FIELD_CONTACT])) {
                foreach($json[self::FIELD_CONTACT] as $v) {
                    if ($v instanceof FHIRContactDetail) {
                        $type->addContact($v);
                    } else {
                        $type->addContact(new FHIRContactDetail($v));
                    }
                }
            } elseif ($json[self::FIELD_CONTACT] instanceof FHIRContactDetail) {
                $type->addContact($json[self::FIELD_CONTACT]);
            } else {
                $type->addContact(new FHIRContactDetail($json[self::FIELD_CONTACT]));
            }
        }
        if (isset($json[self::FIELD_DESCRIPTION]) || isset($json[self::FIELD_DESCRIPTION_EXT]) || array_key_exists(self::FIELD_DESCRIPTION, $json) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($json[self::FIELD_DESCRIPTION_EXT]) && is_array($json[self::FIELD_DESCRIPTION_EXT])) ? $json[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setDescription($value);
                } else if (is_array($value)) {
                    $type->setDescription(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDescription(new FHIRMarkdown($ext));
            } else {
                $type->setDescription(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_USE_CONTEXT]) || array_key_exists(self::FIELD_USE_CONTEXT, $json)) {
            if (is_array($json[self::FIELD_USE_CONTEXT])) {
                foreach($json[self::FIELD_USE_CONTEXT] as $v) {
                    if ($v instanceof FHIRUsageContext) {
                        $type->addUseContext($v);
                    } else {
                        $type->addUseContext(new FHIRUsageContext($v));
                    }
                }
            } elseif ($json[self::FIELD_USE_CONTEXT] instanceof FHIRUsageContext) {
                $type->addUseContext($json[self::FIELD_USE_CONTEXT]);
            } else {
                $type->addUseContext(new FHIRUsageContext($json[self::FIELD_USE_CONTEXT]));
            }
        }
        if (isset($json[self::FIELD_JURISDICTION]) || array_key_exists(self::FIELD_JURISDICTION, $json)) {
            if (is_array($json[self::FIELD_JURISDICTION])) {
                foreach($json[self::FIELD_JURISDICTION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addJurisdiction($v);
                    } else {
                        $type->addJurisdiction(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_JURISDICTION] instanceof FHIRCodeableConcept) {
                $type->addJurisdiction($json[self::FIELD_JURISDICTION]);
            } else {
                $type->addJurisdiction(new FHIRCodeableConcept($json[self::FIELD_JURISDICTION]));
            }
        }
        if (isset($json[self::FIELD_FIXED_VERSION]) || array_key_exists(self::FIELD_FIXED_VERSION, $json)) {
            if (is_array($json[self::FIELD_FIXED_VERSION])) {
                foreach($json[self::FIELD_FIXED_VERSION] as $v) {
                    if ($v instanceof FHIRExpansionProfileFixedVersion) {
                        $type->addFixedVersion($v);
                    } else {
                        $type->addFixedVersion(new FHIRExpansionProfileFixedVersion($v));
                    }
                }
            } elseif ($json[self::FIELD_FIXED_VERSION] instanceof FHIRExpansionProfileFixedVersion) {
                $type->addFixedVersion($json[self::FIELD_FIXED_VERSION]);
            } else {
                $type->addFixedVersion(new FHIRExpansionProfileFixedVersion($json[self::FIELD_FIXED_VERSION]));
            }
        }
        if (isset($json[self::FIELD_EXCLUDED_SYSTEM]) || array_key_exists(self::FIELD_EXCLUDED_SYSTEM, $json)) {
            if ($json[self::FIELD_EXCLUDED_SYSTEM] instanceof FHIRExpansionProfileExcludedSystem) {
                $type->setExcludedSystem($json[self::FIELD_EXCLUDED_SYSTEM]);
            } else {
                $type->setExcludedSystem(new FHIRExpansionProfileExcludedSystem($json[self::FIELD_EXCLUDED_SYSTEM]));
            }
        }
        if (isset($json[self::FIELD_INCLUDE_DESIGNATIONS]) || isset($json[self::FIELD_INCLUDE_DESIGNATIONS_EXT]) || array_key_exists(self::FIELD_INCLUDE_DESIGNATIONS, $json) || array_key_exists(self::FIELD_INCLUDE_DESIGNATIONS_EXT, $json)) {
            $value = $json[self::FIELD_INCLUDE_DESIGNATIONS] ?? null;
            $ext = (isset($json[self::FIELD_INCLUDE_DESIGNATIONS_EXT]) && is_array($json[self::FIELD_INCLUDE_DESIGNATIONS_EXT])) ? $json[self::FIELD_INCLUDE_DESIGNATIONS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setIncludeDesignations($value);
                } else if (is_array($value)) {
                    $type->setIncludeDesignations(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setIncludeDesignations(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setIncludeDesignations(new FHIRBoolean($ext));
            } else {
                $type->setIncludeDesignations(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_DESIGNATION]) || array_key_exists(self::FIELD_DESIGNATION, $json)) {
            if ($json[self::FIELD_DESIGNATION] instanceof FHIRExpansionProfileDesignation) {
                $type->setDesignation($json[self::FIELD_DESIGNATION]);
            } else {
                $type->setDesignation(new FHIRExpansionProfileDesignation($json[self::FIELD_DESIGNATION]));
            }
        }
        if (isset($json[self::FIELD_INCLUDE_DEFINITION]) || isset($json[self::FIELD_INCLUDE_DEFINITION_EXT]) || array_key_exists(self::FIELD_INCLUDE_DEFINITION, $json) || array_key_exists(self::FIELD_INCLUDE_DEFINITION_EXT, $json)) {
            $value = $json[self::FIELD_INCLUDE_DEFINITION] ?? null;
            $ext = (isset($json[self::FIELD_INCLUDE_DEFINITION_EXT]) && is_array($json[self::FIELD_INCLUDE_DEFINITION_EXT])) ? $json[self::FIELD_INCLUDE_DEFINITION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setIncludeDefinition($value);
                } else if (is_array($value)) {
                    $type->setIncludeDefinition(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setIncludeDefinition(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setIncludeDefinition(new FHIRBoolean($ext));
            } else {
                $type->setIncludeDefinition(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_ACTIVE_ONLY]) || isset($json[self::FIELD_ACTIVE_ONLY_EXT]) || array_key_exists(self::FIELD_ACTIVE_ONLY, $json) || array_key_exists(self::FIELD_ACTIVE_ONLY_EXT, $json)) {
            $value = $json[self::FIELD_ACTIVE_ONLY] ?? null;
            $ext = (isset($json[self::FIELD_ACTIVE_ONLY_EXT]) && is_array($json[self::FIELD_ACTIVE_ONLY_EXT])) ? $json[self::FIELD_ACTIVE_ONLY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setActiveOnly($value);
                } else if (is_array($value)) {
                    $type->setActiveOnly(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setActiveOnly(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setActiveOnly(new FHIRBoolean($ext));
            } else {
                $type->setActiveOnly(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_EXCLUDE_NESTED]) || isset($json[self::FIELD_EXCLUDE_NESTED_EXT]) || array_key_exists(self::FIELD_EXCLUDE_NESTED, $json) || array_key_exists(self::FIELD_EXCLUDE_NESTED_EXT, $json)) {
            $value = $json[self::FIELD_EXCLUDE_NESTED] ?? null;
            $ext = (isset($json[self::FIELD_EXCLUDE_NESTED_EXT]) && is_array($json[self::FIELD_EXCLUDE_NESTED_EXT])) ? $json[self::FIELD_EXCLUDE_NESTED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setExcludeNested($value);
                } else if (is_array($value)) {
                    $type->setExcludeNested(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setExcludeNested(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setExcludeNested(new FHIRBoolean($ext));
            } else {
                $type->setExcludeNested(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_EXCLUDE_NOT_FOR_UI]) || isset($json[self::FIELD_EXCLUDE_NOT_FOR_UI_EXT]) || array_key_exists(self::FIELD_EXCLUDE_NOT_FOR_UI, $json) || array_key_exists(self::FIELD_EXCLUDE_NOT_FOR_UI_EXT, $json)) {
            $value = $json[self::FIELD_EXCLUDE_NOT_FOR_UI] ?? null;
            $ext = (isset($json[self::FIELD_EXCLUDE_NOT_FOR_UI_EXT]) && is_array($json[self::FIELD_EXCLUDE_NOT_FOR_UI_EXT])) ? $json[self::FIELD_EXCLUDE_NOT_FOR_UI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setExcludeNotForUI($value);
                } else if (is_array($value)) {
                    $type->setExcludeNotForUI(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setExcludeNotForUI(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setExcludeNotForUI(new FHIRBoolean($ext));
            } else {
                $type->setExcludeNotForUI(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_EXCLUDE_POST_COORDINATED]) || isset($json[self::FIELD_EXCLUDE_POST_COORDINATED_EXT]) || array_key_exists(self::FIELD_EXCLUDE_POST_COORDINATED, $json) || array_key_exists(self::FIELD_EXCLUDE_POST_COORDINATED_EXT, $json)) {
            $value = $json[self::FIELD_EXCLUDE_POST_COORDINATED] ?? null;
            $ext = (isset($json[self::FIELD_EXCLUDE_POST_COORDINATED_EXT]) && is_array($json[self::FIELD_EXCLUDE_POST_COORDINATED_EXT])) ? $json[self::FIELD_EXCLUDE_POST_COORDINATED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setExcludePostCoordinated($value);
                } else if (is_array($value)) {
                    $type->setExcludePostCoordinated(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setExcludePostCoordinated(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setExcludePostCoordinated(new FHIRBoolean($ext));
            } else {
                $type->setExcludePostCoordinated(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_DISPLAY_LANGUAGE]) || isset($json[self::FIELD_DISPLAY_LANGUAGE_EXT]) || array_key_exists(self::FIELD_DISPLAY_LANGUAGE, $json) || array_key_exists(self::FIELD_DISPLAY_LANGUAGE_EXT, $json)) {
            $value = $json[self::FIELD_DISPLAY_LANGUAGE] ?? null;
            $ext = (isset($json[self::FIELD_DISPLAY_LANGUAGE_EXT]) && is_array($json[self::FIELD_DISPLAY_LANGUAGE_EXT])) ? $json[self::FIELD_DISPLAY_LANGUAGE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $type->setDisplayLanguage($value);
                } else if (is_array($value)) {
                    $type->setDisplayLanguage(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $type->setDisplayLanguage(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDisplayLanguage(new FHIRCode($ext));
            } else {
                $type->setDisplayLanguage(new FHIRCode(null));
            }
        }
        if (isset($json[self::FIELD_LIMITED_EXPANSION]) || isset($json[self::FIELD_LIMITED_EXPANSION_EXT]) || array_key_exists(self::FIELD_LIMITED_EXPANSION, $json) || array_key_exists(self::FIELD_LIMITED_EXPANSION_EXT, $json)) {
            $value = $json[self::FIELD_LIMITED_EXPANSION] ?? null;
            $ext = (isset($json[self::FIELD_LIMITED_EXPANSION_EXT]) && is_array($json[self::FIELD_LIMITED_EXPANSION_EXT])) ? $json[self::FIELD_LIMITED_EXPANSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setLimitedExpansion($value);
                } else if (is_array($value)) {
                    $type->setLimitedExpansion(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setLimitedExpansion(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setLimitedExpansion(new FHIRBoolean($ext));
            } else {
                $type->setLimitedExpansion(new FHIRBoolean(null));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->url)) {
            if (null !== ($val = $this->url->getValue())) {
                $out->url = $val;
            }
            $ext = $this->url->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_url = $ext;
            }
        }
        if (isset($this->identifier)) {
            $out->identifier = $this->identifier;
        }
        if (isset($this->version)) {
            if (null !== ($val = $this->version->getValue())) {
                $out->version = $val;
            }
            $ext = $this->version->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_version = $ext;
            }
        }
        if (isset($this->name)) {
            if (null !== ($val = $this->name->getValue())) {
                $out->name = $val;
            }
            $ext = $this->name->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_name = $ext;
            }
        }
        if (isset($this->status)) {
            if (null !== ($val = $this->status->getValue())) {
                $out->status = $val;
            }
            $ext = $this->status->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_status = $ext;
            }
        }
        if (isset($this->experimental)) {
            if (null !== ($val = $this->experimental->getValue())) {
                $out->experimental = $val;
            }
            $ext = $this->experimental->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_experimental = $ext;
            }
        }
        if (isset($this->date)) {
            if (null !== ($val = $this->date->getValue())) {
                $out->date = $val;
            }
            $ext = $this->date->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_date = $ext;
            }
        }
        if (isset($this->publisher)) {
            if (null !== ($val = $this->publisher->getValue())) {
                $out->publisher = $val;
            }
            $ext = $this->publisher->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_publisher = $ext;
            }
        }
        if (isset($this->contact) && [] !== $this->contact) {
            $out->contact = $this->contact;
        }
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            $ext = $this->description->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_description = $ext;
            }
        }
        if (isset($this->useContext) && [] !== $this->useContext) {
            $out->useContext = $this->useContext;
        }
        if (isset($this->jurisdiction) && [] !== $this->jurisdiction) {
            $out->jurisdiction = $this->jurisdiction;
        }
        if (isset($this->fixedVersion) && [] !== $this->fixedVersion) {
            $out->fixedVersion = $this->fixedVersion;
        }
        if (isset($this->excludedSystem)) {
            $out->excludedSystem = $this->excludedSystem;
        }
        if (isset($this->includeDesignations)) {
            if (null !== ($val = $this->includeDesignations->getValue())) {
                $out->includeDesignations = $val;
            }
            $ext = $this->includeDesignations->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_includeDesignations = $ext;
            }
        }
        if (isset($this->designation)) {
            $out->designation = $this->designation;
        }
        if (isset($this->includeDefinition)) {
            if (null !== ($val = $this->includeDefinition->getValue())) {
                $out->includeDefinition = $val;
            }
            $ext = $this->includeDefinition->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_includeDefinition = $ext;
            }
        }
        if (isset($this->activeOnly)) {
            if (null !== ($val = $this->activeOnly->getValue())) {
                $out->activeOnly = $val;
            }
            $ext = $this->activeOnly->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_activeOnly = $ext;
            }
        }
        if (isset($this->excludeNested)) {
            if (null !== ($val = $this->excludeNested->getValue())) {
                $out->excludeNested = $val;
            }
            $ext = $this->excludeNested->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_excludeNested = $ext;
            }
        }
        if (isset($this->excludeNotForUI)) {
            if (null !== ($val = $this->excludeNotForUI->getValue())) {
                $out->excludeNotForUI = $val;
            }
            $ext = $this->excludeNotForUI->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_excludeNotForUI = $ext;
            }
        }
        if (isset($this->excludePostCoordinated)) {
            if (null !== ($val = $this->excludePostCoordinated->getValue())) {
                $out->excludePostCoordinated = $val;
            }
            $ext = $this->excludePostCoordinated->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_excludePostCoordinated = $ext;
            }
        }
        if (isset($this->displayLanguage)) {
            if (null !== ($val = $this->displayLanguage->getValue())) {
                $out->displayLanguage = $val;
            }
            $ext = $this->displayLanguage->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_displayLanguage = $ext;
            }
        }
        if (isset($this->limitedExpansion)) {
            if (null !== ($val = $this->limitedExpansion->getValue())) {
                $out->limitedExpansion = $val;
            }
            $ext = $this->limitedExpansion->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_limitedExpansion = $ext;
            }
        }
        $out->resourceType = $this->_getResourceType();
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