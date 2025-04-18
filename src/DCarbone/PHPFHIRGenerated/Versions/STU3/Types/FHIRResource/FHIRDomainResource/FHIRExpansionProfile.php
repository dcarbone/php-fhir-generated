<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\FHIRVersion;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRPublicationStatusList;
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
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRExpansionProfile extends FHIRDomainResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_EXPANSION_PROFILE;

    /* class_default.php:56 */
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

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_URL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VERSION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXPERIMENTAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PUBLISHER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_INCLUDE_DESIGNATIONS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_INCLUDE_DEFINITION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ACTIVE_ONLY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXCLUDE_NESTED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXCLUDE_NOT_FOR_UI => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXCLUDE_POST_COORDINATED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DISPLAY_LANGUAGE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LIMITED_EXPANSION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
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
    #[FHIRUri]
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
    #[FHIRIdentifier]
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
    #[FHIRString]
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
    #[FHIRString]
    protected FHIRString $name;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this expansion profile. Enables tracking the life-cycle of the
     * content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPublicationStatus 
     */
    #[FHIRPublicationStatus]
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
    #[FHIRBoolean]
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
    #[FHIRDateTime]
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
    #[FHIRString]
    protected FHIRString $publisher;
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactDetail> 
     */
    #[FHIRContactDetail]
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
    #[FHIRMarkdown]
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
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUsageContext> 
     */
    #[FHIRUsageContext]
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
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $jurisdiction;
    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * Fix use of a particular code system to a particular version.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion> 
     */
    #[FHIRExpansionProfileFixedVersion]
    protected array $fixedVersion;
    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * Code system, or a particular version of a code system to be excluded from value
     * set expansions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileExcludedSystem 
     */
    #[FHIRExpansionProfileExcludedSystem]
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
    #[FHIRBoolean]
    protected FHIRBoolean $includeDesignations;
    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * A set of criteria that provide the constraints imposed on the value set
     * expansion by including or excluding designations.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileDesignation 
     */
    #[FHIRExpansionProfileDesignation]
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
    #[FHIRBoolean]
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
    #[FHIRBoolean]
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
    #[FHIRBoolean]
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
    #[FHIRBoolean]
    protected FHIRBoolean $excludeNotForUI;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls whether or not the value set expansion includes post coordinated codes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    #[FHIRBoolean]
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
    #[FHIRCode]
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
    #[FHIRBoolean]
    protected FHIRBoolean $limitedExpansion;

    /* constructor.php:61 */
    /**
     * FHIRExpansionProfile Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative $text
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer>|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface> $contained
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension> $extension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $url
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $version
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $name
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRPublicationStatusList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPublicationStatus $status
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $experimental
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $date
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $publisher
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactDetail> $contact
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $description
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUsageContext> $useContext
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept> $jurisdiction
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion> $fixedVersion
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
                                null|string|FHIRPublicationStatusList|FHIRPublicationStatus $status = null,
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

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRPublicationStatusList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPublicationStatus $status
     * @return static
     */
    public function setStatus(null|string|FHIRPublicationStatusList|FHIRPublicationStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRPublicationStatus)) {
            $status = new FHIRPublicationStatus(value: $status);
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactDetail>
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
        if (!isset($this->contact)) {
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
        if ([] === $contact) {
            unset($this->contact);
            return $this;
        }
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUsageContext>
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
        if (!isset($this->useContext)) {
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
        if ([] === $useContext) {
            unset($this->useContext);
            return $this;
        }
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
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
        if (!isset($this->jurisdiction)) {
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
        if ([] === $jurisdiction) {
            unset($this->jurisdiction);
            return $this;
        }
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     *
     * Fix use of a particular code system to a particular version.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion>
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
        if (!isset($this->fixedVersion)) {
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
        if ([] === $fixedVersion) {
            unset($this->fixedVersion);
            return $this;
        }
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

    /* class_default.php:201 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRExpansionProfile $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRExpansionProfile
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_ID === $cen) {
                $type->setId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_META === $cen) {
                $type->setMeta(FHIRMeta::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $cen) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::mustGetContainedTypeClassnameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_URL === $cen) {
                $type->setUrl(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->setIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VERSION === $cen) {
                $type->setVersion(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NAME === $cen) {
                $type->setName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRPublicationStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXPERIMENTAL === $cen) {
                $type->setExperimental(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE === $cen) {
                $type->setDate(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PUBLISHER === $cen) {
                $type->setPublisher(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTACT === $cen) {
                $type->addContact(FHIRContactDetail::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_USE_CONTEXT === $cen) {
                $type->addUseContext(FHIRUsageContext::xmlUnserialize($ce, $config));
            } else if (self::FIELD_JURISDICTION === $cen) {
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIXED_VERSION === $cen) {
                $type->addFixedVersion(FHIRExpansionProfileFixedVersion::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXCLUDED_SYSTEM === $cen) {
                $type->setExcludedSystem(FHIRExpansionProfileExcludedSystem::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INCLUDE_DESIGNATIONS === $cen) {
                $type->setIncludeDesignations(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESIGNATION === $cen) {
                $type->setDesignation(FHIRExpansionProfileDesignation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INCLUDE_DEFINITION === $cen) {
                $type->setIncludeDefinition(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACTIVE_ONLY === $cen) {
                $type->setActiveOnly(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXCLUDE_NESTED === $cen) {
                $type->setExcludeNested(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXCLUDE_NOT_FOR_UI === $cen) {
                $type->setExcludeNotForUI(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXCLUDE_POST_COORDINATED === $cen) {
                $type->setExcludePostCoordinated(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DISPLAY_LANGUAGE === $cen) {
                $type->setDisplayLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LIMITED_EXPANSION === $cen) {
                $type->setLimitedExpansion(FHIRBoolean::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_IMPLICIT_RULES, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LANGUAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_URL])) {
            if (isset($type->url)) {
                $type->url->setValue((string)$attributes[self::FIELD_URL]);
            } else {
                $type->setUrl((string)$attributes[self::FIELD_URL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_URL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VERSION])) {
            if (isset($type->version)) {
                $type->version->setValue((string)$attributes[self::FIELD_VERSION]);
            } else {
                $type->setVersion((string)$attributes[self::FIELD_VERSION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VERSION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_NAME])) {
            if (isset($type->name)) {
                $type->name->setValue((string)$attributes[self::FIELD_NAME]);
            } else {
                $type->setName((string)$attributes[self::FIELD_NAME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_NAME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_STATUS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXPERIMENTAL])) {
            if (isset($type->experimental)) {
                $type->experimental->setValue((string)$attributes[self::FIELD_EXPERIMENTAL]);
            } else {
                $type->setExperimental((string)$attributes[self::FIELD_EXPERIMENTAL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EXPERIMENTAL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATE])) {
            if (isset($type->date)) {
                $type->date->setValue((string)$attributes[self::FIELD_DATE]);
            } else {
                $type->setDate((string)$attributes[self::FIELD_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PUBLISHER])) {
            if (isset($type->publisher)) {
                $type->publisher->setValue((string)$attributes[self::FIELD_PUBLISHER]);
            } else {
                $type->setPublisher((string)$attributes[self::FIELD_PUBLISHER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PUBLISHER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DESCRIPTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_INCLUDE_DESIGNATIONS])) {
            if (isset($type->includeDesignations)) {
                $type->includeDesignations->setValue((string)$attributes[self::FIELD_INCLUDE_DESIGNATIONS]);
            } else {
                $type->setIncludeDesignations((string)$attributes[self::FIELD_INCLUDE_DESIGNATIONS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_INCLUDE_DESIGNATIONS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_INCLUDE_DEFINITION])) {
            if (isset($type->includeDefinition)) {
                $type->includeDefinition->setValue((string)$attributes[self::FIELD_INCLUDE_DEFINITION]);
            } else {
                $type->setIncludeDefinition((string)$attributes[self::FIELD_INCLUDE_DEFINITION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_INCLUDE_DEFINITION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ACTIVE_ONLY])) {
            if (isset($type->activeOnly)) {
                $type->activeOnly->setValue((string)$attributes[self::FIELD_ACTIVE_ONLY]);
            } else {
                $type->setActiveOnly((string)$attributes[self::FIELD_ACTIVE_ONLY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ACTIVE_ONLY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXCLUDE_NESTED])) {
            if (isset($type->excludeNested)) {
                $type->excludeNested->setValue((string)$attributes[self::FIELD_EXCLUDE_NESTED]);
            } else {
                $type->setExcludeNested((string)$attributes[self::FIELD_EXCLUDE_NESTED]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EXCLUDE_NESTED, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXCLUDE_NOT_FOR_UI])) {
            if (isset($type->excludeNotForUI)) {
                $type->excludeNotForUI->setValue((string)$attributes[self::FIELD_EXCLUDE_NOT_FOR_UI]);
            } else {
                $type->setExcludeNotForUI((string)$attributes[self::FIELD_EXCLUDE_NOT_FOR_UI]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EXCLUDE_NOT_FOR_UI, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXCLUDE_POST_COORDINATED])) {
            if (isset($type->excludePostCoordinated)) {
                $type->excludePostCoordinated->setValue((string)$attributes[self::FIELD_EXCLUDE_POST_COORDINATED]);
            } else {
                $type->setExcludePostCoordinated((string)$attributes[self::FIELD_EXCLUDE_POST_COORDINATED]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EXCLUDE_POST_COORDINATED, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DISPLAY_LANGUAGE])) {
            if (isset($type->displayLanguage)) {
                $type->displayLanguage->setValue((string)$attributes[self::FIELD_DISPLAY_LANGUAGE]);
            } else {
                $type->setDisplayLanguage((string)$attributes[self::FIELD_DISPLAY_LANGUAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DISPLAY_LANGUAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LIMITED_EXPANSION])) {
            if (isset($type->limitedExpansion)) {
                $type->limitedExpansion->setValue((string)$attributes[self::FIELD_LIMITED_EXPANSION]);
            } else {
                $type->setLimitedExpansion((string)$attributes[self::FIELD_LIMITED_EXPANSION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LIMITED_EXPANSION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
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
        if (isset($this->url) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_URL]) {
            $xw->writeAttribute(self::FIELD_URL, $this->url->_getValueAsString());
        }
        if (isset($this->version) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VERSION]) {
            $xw->writeAttribute(self::FIELD_VERSION, $this->version->_getValueAsString());
        }
        if (isset($this->name) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NAME]) {
            $xw->writeAttribute(self::FIELD_NAME, $this->name->_getValueAsString());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getValueAsString());
        }
        if (isset($this->experimental) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXPERIMENTAL]) {
            $xw->writeAttribute(self::FIELD_EXPERIMENTAL, $this->experimental->_getValueAsString());
        }
        if (isset($this->date) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATE]) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->_getValueAsString());
        }
        if (isset($this->publisher) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PUBLISHER]) {
            $xw->writeAttribute(self::FIELD_PUBLISHER, $this->publisher->_getValueAsString());
        }
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getValueAsString());
        }
        if (isset($this->includeDesignations) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_INCLUDE_DESIGNATIONS]) {
            $xw->writeAttribute(self::FIELD_INCLUDE_DESIGNATIONS, $this->includeDesignations->_getValueAsString());
        }
        if (isset($this->includeDefinition) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_INCLUDE_DEFINITION]) {
            $xw->writeAttribute(self::FIELD_INCLUDE_DEFINITION, $this->includeDefinition->_getValueAsString());
        }
        if (isset($this->activeOnly) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ACTIVE_ONLY]) {
            $xw->writeAttribute(self::FIELD_ACTIVE_ONLY, $this->activeOnly->_getValueAsString());
        }
        if (isset($this->excludeNested) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXCLUDE_NESTED]) {
            $xw->writeAttribute(self::FIELD_EXCLUDE_NESTED, $this->excludeNested->_getValueAsString());
        }
        if (isset($this->excludeNotForUI) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXCLUDE_NOT_FOR_UI]) {
            $xw->writeAttribute(self::FIELD_EXCLUDE_NOT_FOR_UI, $this->excludeNotForUI->_getValueAsString());
        }
        if (isset($this->excludePostCoordinated) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXCLUDE_POST_COORDINATED]) {
            $xw->writeAttribute(self::FIELD_EXCLUDE_POST_COORDINATED, $this->excludePostCoordinated->_getValueAsString());
        }
        if (isset($this->displayLanguage) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DISPLAY_LANGUAGE]) {
            $xw->writeAttribute(self::FIELD_DISPLAY_LANGUAGE, $this->displayLanguage->_getValueAsString());
        }
        if (isset($this->limitedExpansion) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LIMITED_EXPANSION]) {
            $xw->writeAttribute(self::FIELD_LIMITED_EXPANSION, $this->limitedExpansion->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->url)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_URL]
                || $this->url->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_URL);
            $this->url->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_URL]);
            $xw->endElement();
        }
        if (isset($this->identifier)) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $this->identifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->version)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VERSION]
                || $this->version->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VERSION);
            $this->version->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VERSION]);
            $xw->endElement();
        }
        if (isset($this->name)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NAME]
                || $this->name->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NAME]);
            $xw->endElement();
        }
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->experimental)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXPERIMENTAL]
                || $this->experimental->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXPERIMENTAL);
            $this->experimental->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXPERIMENTAL]);
            $xw->endElement();
        }
        if (isset($this->date)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATE]
                || $this->date->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATE);
            $this->date->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATE]);
            $xw->endElement();
        }
        if (isset($this->publisher)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PUBLISHER]
                || $this->publisher->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PUBLISHER);
            $this->publisher->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PUBLISHER]);
            $xw->endElement();
        }
        if (isset($this->contact)) {
            foreach ($this->contact as $v) {
                $xw->startElement(self::FIELD_CONTACT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
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
        if (isset($this->includeDesignations)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_INCLUDE_DESIGNATIONS]
                || $this->includeDesignations->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_INCLUDE_DESIGNATIONS);
            $this->includeDesignations->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_INCLUDE_DESIGNATIONS]);
            $xw->endElement();
        }
        if (isset($this->designation)) {
            $xw->startElement(self::FIELD_DESIGNATION);
            $this->designation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->includeDefinition)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_INCLUDE_DEFINITION]
                || $this->includeDefinition->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_INCLUDE_DEFINITION);
            $this->includeDefinition->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_INCLUDE_DEFINITION]);
            $xw->endElement();
        }
        if (isset($this->activeOnly)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ACTIVE_ONLY]
                || $this->activeOnly->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ACTIVE_ONLY);
            $this->activeOnly->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ACTIVE_ONLY]);
            $xw->endElement();
        }
        if (isset($this->excludeNested)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXCLUDE_NESTED]
                || $this->excludeNested->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXCLUDE_NESTED);
            $this->excludeNested->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXCLUDE_NESTED]);
            $xw->endElement();
        }
        if (isset($this->excludeNotForUI)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXCLUDE_NOT_FOR_UI]
                || $this->excludeNotForUI->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXCLUDE_NOT_FOR_UI);
            $this->excludeNotForUI->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXCLUDE_NOT_FOR_UI]);
            $xw->endElement();
        }
        if (isset($this->excludePostCoordinated)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXCLUDE_POST_COORDINATED]
                || $this->excludePostCoordinated->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXCLUDE_POST_COORDINATED);
            $this->excludePostCoordinated->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXCLUDE_POST_COORDINATED]);
            $xw->endElement();
        }
        if (isset($this->displayLanguage)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DISPLAY_LANGUAGE]
                || $this->displayLanguage->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DISPLAY_LANGUAGE);
            $this->displayLanguage->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DISPLAY_LANGUAGE]);
            $xw->endElement();
        }
        if (isset($this->limitedExpansion)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LIMITED_EXPANSION]
                || $this->limitedExpansion->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LIMITED_EXPANSION);
            $this->limitedExpansion->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LIMITED_EXPANSION]);
            $xw->endElement();
        }
        if ($rootOpened ?? false) {
            $xw->endElement();
        }
        if ($docStarted ?? false) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass $decoded
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRExpansionProfile $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRExpansionProfile
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $decoded,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
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
        if (is_string($decoded)) {
            $decoded = json_decode(json: $decoded,
                                associative: false,
                                depth: $config->getJSONDecodeMaxDepth(),
                                flags: $config->getJSONDecodeOpts());
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->url)
            || isset($decoded->_url)
            || property_exists($decoded, self::FIELD_URL)
            || property_exists($decoded, self::FIELD_URL_EXT)) {
            $v = $decoded->_url ?? new \stdClass();
            $v->value = $decoded->url ?? null;
            $type->setUrl(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($decoded->identifier) || property_exists($decoded, self::FIELD_IDENTIFIER)) {
            if (is_array($decoded->identifier)) {
                $type->setIdentifier(FHIRIdentifier::jsonUnserialize(reset($decoded->identifier), $config));
            } else {
                $type->setIdentifier(FHIRIdentifier::jsonUnserialize($decoded->identifier, $config));
            }
        }
        if (isset($decoded->version)
            || isset($decoded->_version)
            || property_exists($decoded, self::FIELD_VERSION)
            || property_exists($decoded, self::FIELD_VERSION_EXT)) {
            $v = $decoded->_version ?? new \stdClass();
            $v->value = $decoded->version ?? null;
            $type->setVersion(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->name)
            || isset($decoded->_name)
            || property_exists($decoded, self::FIELD_NAME)
            || property_exists($decoded, self::FIELD_NAME_EXT)) {
            $v = $decoded->_name ?? new \stdClass();
            $v->value = $decoded->name ?? null;
            $type->setName(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->status)
            || isset($decoded->_status)
            || property_exists($decoded, self::FIELD_STATUS)
            || property_exists($decoded, self::FIELD_STATUS_EXT)) {
            $v = $decoded->_status ?? new \stdClass();
            $v->value = $decoded->status ?? null;
            $type->setStatus(FHIRPublicationStatus::jsonUnserialize($v, $config));
        }
        if (isset($decoded->experimental)
            || isset($decoded->_experimental)
            || property_exists($decoded, self::FIELD_EXPERIMENTAL)
            || property_exists($decoded, self::FIELD_EXPERIMENTAL_EXT)) {
            $v = $decoded->_experimental ?? new \stdClass();
            $v->value = $decoded->experimental ?? null;
            $type->setExperimental(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->date)
            || isset($decoded->_date)
            || property_exists($decoded, self::FIELD_DATE)
            || property_exists($decoded, self::FIELD_DATE_EXT)) {
            $v = $decoded->_date ?? new \stdClass();
            $v->value = $decoded->date ?? null;
            $type->setDate(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->publisher)
            || isset($decoded->_publisher)
            || property_exists($decoded, self::FIELD_PUBLISHER)
            || property_exists($decoded, self::FIELD_PUBLISHER_EXT)) {
            $v = $decoded->_publisher ?? new \stdClass();
            $v->value = $decoded->publisher ?? null;
            $type->setPublisher(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->contact) || property_exists($decoded, self::FIELD_CONTACT)) {
            if (is_object($decoded->contact)) {
                $vals = [$decoded->contact];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONTACT, true);
            } else {
                $vals = $decoded->contact;
            }
            foreach($vals as $v) {
                $type->addContact(FHIRContactDetail::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->description)
            || isset($decoded->_description)
            || property_exists($decoded, self::FIELD_DESCRIPTION)
            || property_exists($decoded, self::FIELD_DESCRIPTION_EXT)) {
            $v = $decoded->_description ?? new \stdClass();
            $v->value = $decoded->description ?? null;
            $type->setDescription(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($decoded->useContext) || property_exists($decoded, self::FIELD_USE_CONTEXT)) {
            if (is_object($decoded->useContext)) {
                $vals = [$decoded->useContext];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_USE_CONTEXT, true);
            } else {
                $vals = $decoded->useContext;
            }
            foreach($vals as $v) {
                $type->addUseContext(FHIRUsageContext::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->jurisdiction) || property_exists($decoded, self::FIELD_JURISDICTION)) {
            if (is_object($decoded->jurisdiction)) {
                $vals = [$decoded->jurisdiction];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_JURISDICTION, true);
            } else {
                $vals = $decoded->jurisdiction;
            }
            foreach($vals as $v) {
                $type->addJurisdiction(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->fixedVersion) || property_exists($decoded, self::FIELD_FIXED_VERSION)) {
            if (is_object($decoded->fixedVersion)) {
                $vals = [$decoded->fixedVersion];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_FIXED_VERSION, true);
            } else {
                $vals = $decoded->fixedVersion;
            }
            foreach($vals as $v) {
                $type->addFixedVersion(FHIRExpansionProfileFixedVersion::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->excludedSystem) || property_exists($decoded, self::FIELD_EXCLUDED_SYSTEM)) {
            if (is_array($decoded->excludedSystem)) {
                $type->setExcludedSystem(FHIRExpansionProfileExcludedSystem::jsonUnserialize(reset($decoded->excludedSystem), $config));
            } else {
                $type->setExcludedSystem(FHIRExpansionProfileExcludedSystem::jsonUnserialize($decoded->excludedSystem, $config));
            }
        }
        if (isset($decoded->includeDesignations)
            || isset($decoded->_includeDesignations)
            || property_exists($decoded, self::FIELD_INCLUDE_DESIGNATIONS)
            || property_exists($decoded, self::FIELD_INCLUDE_DESIGNATIONS_EXT)) {
            $v = $decoded->_includeDesignations ?? new \stdClass();
            $v->value = $decoded->includeDesignations ?? null;
            $type->setIncludeDesignations(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->designation) || property_exists($decoded, self::FIELD_DESIGNATION)) {
            if (is_array($decoded->designation)) {
                $type->setDesignation(FHIRExpansionProfileDesignation::jsonUnserialize(reset($decoded->designation), $config));
            } else {
                $type->setDesignation(FHIRExpansionProfileDesignation::jsonUnserialize($decoded->designation, $config));
            }
        }
        if (isset($decoded->includeDefinition)
            || isset($decoded->_includeDefinition)
            || property_exists($decoded, self::FIELD_INCLUDE_DEFINITION)
            || property_exists($decoded, self::FIELD_INCLUDE_DEFINITION_EXT)) {
            $v = $decoded->_includeDefinition ?? new \stdClass();
            $v->value = $decoded->includeDefinition ?? null;
            $type->setIncludeDefinition(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->activeOnly)
            || isset($decoded->_activeOnly)
            || property_exists($decoded, self::FIELD_ACTIVE_ONLY)
            || property_exists($decoded, self::FIELD_ACTIVE_ONLY_EXT)) {
            $v = $decoded->_activeOnly ?? new \stdClass();
            $v->value = $decoded->activeOnly ?? null;
            $type->setActiveOnly(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->excludeNested)
            || isset($decoded->_excludeNested)
            || property_exists($decoded, self::FIELD_EXCLUDE_NESTED)
            || property_exists($decoded, self::FIELD_EXCLUDE_NESTED_EXT)) {
            $v = $decoded->_excludeNested ?? new \stdClass();
            $v->value = $decoded->excludeNested ?? null;
            $type->setExcludeNested(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->excludeNotForUI)
            || isset($decoded->_excludeNotForUI)
            || property_exists($decoded, self::FIELD_EXCLUDE_NOT_FOR_UI)
            || property_exists($decoded, self::FIELD_EXCLUDE_NOT_FOR_UI_EXT)) {
            $v = $decoded->_excludeNotForUI ?? new \stdClass();
            $v->value = $decoded->excludeNotForUI ?? null;
            $type->setExcludeNotForUI(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->excludePostCoordinated)
            || isset($decoded->_excludePostCoordinated)
            || property_exists($decoded, self::FIELD_EXCLUDE_POST_COORDINATED)
            || property_exists($decoded, self::FIELD_EXCLUDE_POST_COORDINATED_EXT)) {
            $v = $decoded->_excludePostCoordinated ?? new \stdClass();
            $v->value = $decoded->excludePostCoordinated ?? null;
            $type->setExcludePostCoordinated(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->displayLanguage)
            || isset($decoded->_displayLanguage)
            || property_exists($decoded, self::FIELD_DISPLAY_LANGUAGE)
            || property_exists($decoded, self::FIELD_DISPLAY_LANGUAGE_EXT)) {
            $v = $decoded->_displayLanguage ?? new \stdClass();
            $v->value = $decoded->displayLanguage ?? null;
            $type->setDisplayLanguage(FHIRCode::jsonUnserialize($v, $config));
        }
        if (isset($decoded->limitedExpansion)
            || isset($decoded->_limitedExpansion)
            || property_exists($decoded, self::FIELD_LIMITED_EXPANSION)
            || property_exists($decoded, self::FIELD_LIMITED_EXPANSION_EXT)) {
            $v = $decoded->_limitedExpansion ?? new \stdClass();
            $v->value = $decoded->limitedExpansion ?? null;
            $type->setLimitedExpansion(FHIRBoolean::jsonUnserialize($v, $config));
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
            if ($this->url->_nonValueFieldDefined()) {
                $ext = $this->url->jsonSerialize();
                unset($ext->value);
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
            if ($this->version->_nonValueFieldDefined()) {
                $ext = $this->version->jsonSerialize();
                unset($ext->value);
                $out->_version = $ext;
            }
        }
        if (isset($this->name)) {
            if (null !== ($val = $this->name->getValue())) {
                $out->name = $val;
            }
            if ($this->name->_nonValueFieldDefined()) {
                $ext = $this->name->jsonSerialize();
                unset($ext->value);
                $out->_name = $ext;
            }
        }
        if (isset($this->status)) {
            if (null !== ($val = $this->status->getValue())) {
                $out->status = $val;
            }
            if ($this->status->_nonValueFieldDefined()) {
                $ext = $this->status->jsonSerialize();
                unset($ext->value);
                $out->_status = $ext;
            }
        }
        if (isset($this->experimental)) {
            if (null !== ($val = $this->experimental->getValue())) {
                $out->experimental = $val;
            }
            if ($this->experimental->_nonValueFieldDefined()) {
                $ext = $this->experimental->jsonSerialize();
                unset($ext->value);
                $out->_experimental = $ext;
            }
        }
        if (isset($this->date)) {
            if (null !== ($val = $this->date->getValue())) {
                $out->date = $val;
            }
            if ($this->date->_nonValueFieldDefined()) {
                $ext = $this->date->jsonSerialize();
                unset($ext->value);
                $out->_date = $ext;
            }
        }
        if (isset($this->publisher)) {
            if (null !== ($val = $this->publisher->getValue())) {
                $out->publisher = $val;
            }
            if ($this->publisher->_nonValueFieldDefined()) {
                $ext = $this->publisher->jsonSerialize();
                unset($ext->value);
                $out->_publisher = $ext;
            }
        }
        if (isset($this->contact) && [] !== $this->contact) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONTACT) && 1 === count($this->contact)) {
                $out->contact = $this->contact[0];
            } else {
                $out->contact = $this->contact;
            }
        }
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            if ($this->description->_nonValueFieldDefined()) {
                $ext = $this->description->jsonSerialize();
                unset($ext->value);
                $out->_description = $ext;
            }
        }
        if (isset($this->useContext) && [] !== $this->useContext) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_USE_CONTEXT) && 1 === count($this->useContext)) {
                $out->useContext = $this->useContext[0];
            } else {
                $out->useContext = $this->useContext;
            }
        }
        if (isset($this->jurisdiction) && [] !== $this->jurisdiction) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_JURISDICTION) && 1 === count($this->jurisdiction)) {
                $out->jurisdiction = $this->jurisdiction[0];
            } else {
                $out->jurisdiction = $this->jurisdiction;
            }
        }
        if (isset($this->fixedVersion) && [] !== $this->fixedVersion) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_FIXED_VERSION) && 1 === count($this->fixedVersion)) {
                $out->fixedVersion = $this->fixedVersion[0];
            } else {
                $out->fixedVersion = $this->fixedVersion;
            }
        }
        if (isset($this->excludedSystem)) {
            $out->excludedSystem = $this->excludedSystem;
        }
        if (isset($this->includeDesignations)) {
            if (null !== ($val = $this->includeDesignations->getValue())) {
                $out->includeDesignations = $val;
            }
            if ($this->includeDesignations->_nonValueFieldDefined()) {
                $ext = $this->includeDesignations->jsonSerialize();
                unset($ext->value);
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
            if ($this->includeDefinition->_nonValueFieldDefined()) {
                $ext = $this->includeDefinition->jsonSerialize();
                unset($ext->value);
                $out->_includeDefinition = $ext;
            }
        }
        if (isset($this->activeOnly)) {
            if (null !== ($val = $this->activeOnly->getValue())) {
                $out->activeOnly = $val;
            }
            if ($this->activeOnly->_nonValueFieldDefined()) {
                $ext = $this->activeOnly->jsonSerialize();
                unset($ext->value);
                $out->_activeOnly = $ext;
            }
        }
        if (isset($this->excludeNested)) {
            if (null !== ($val = $this->excludeNested->getValue())) {
                $out->excludeNested = $val;
            }
            if ($this->excludeNested->_nonValueFieldDefined()) {
                $ext = $this->excludeNested->jsonSerialize();
                unset($ext->value);
                $out->_excludeNested = $ext;
            }
        }
        if (isset($this->excludeNotForUI)) {
            if (null !== ($val = $this->excludeNotForUI->getValue())) {
                $out->excludeNotForUI = $val;
            }
            if ($this->excludeNotForUI->_nonValueFieldDefined()) {
                $ext = $this->excludeNotForUI->jsonSerialize();
                unset($ext->value);
                $out->_excludeNotForUI = $ext;
            }
        }
        if (isset($this->excludePostCoordinated)) {
            if (null !== ($val = $this->excludePostCoordinated->getValue())) {
                $out->excludePostCoordinated = $val;
            }
            if ($this->excludePostCoordinated->_nonValueFieldDefined()) {
                $ext = $this->excludePostCoordinated->jsonSerialize();
                unset($ext->value);
                $out->_excludePostCoordinated = $ext;
            }
        }
        if (isset($this->displayLanguage)) {
            if (null !== ($val = $this->displayLanguage->getValue())) {
                $out->displayLanguage = $val;
            }
            if ($this->displayLanguage->_nonValueFieldDefined()) {
                $ext = $this->displayLanguage->jsonSerialize();
                unset($ext->value);
                $out->_displayLanguage = $ext;
            }
        }
        if (isset($this->limitedExpansion)) {
            if (null !== ($val = $this->limitedExpansion->getValue())) {
                $out->limitedExpansion = $val;
            }
            if ($this->limitedExpansion->_nonValueFieldDefined()) {
                $ext = $this->limitedExpansion->jsonSerialize();
                unset($ext->value);
                $out->_limitedExpansion = $ext;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}