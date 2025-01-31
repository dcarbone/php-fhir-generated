<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 02:55+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRPublicationStatusList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRResourceTypeList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContributor;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDosage;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRelatedArtifact;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRResourceType;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming;
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
 * This resource allows for the definition of some activity to be performed,
 * independent of a particular patient, practitioner, or other performance context.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRActivityDefinition extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_ACTIVITY_DEFINITION;

    /* class_default.php:48 */
    public const FIELD_URL = 'url';
    public const FIELD_URL_EXT = '_url';
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_IDENTIFIER_EXT = '_identifier';
    public const FIELD_VERSION = 'version';
    public const FIELD_VERSION_EXT = '_version';
    public const FIELD_NAME = 'name';
    public const FIELD_NAME_EXT = '_name';
    public const FIELD_TITLE = 'title';
    public const FIELD_TITLE_EXT = '_title';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_EXPERIMENTAL = 'experimental';
    public const FIELD_EXPERIMENTAL_EXT = '_experimental';
    public const FIELD_DATE = 'date';
    public const FIELD_DATE_EXT = '_date';
    public const FIELD_PUBLISHER = 'publisher';
    public const FIELD_PUBLISHER_EXT = '_publisher';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_PURPOSE = 'purpose';
    public const FIELD_PURPOSE_EXT = '_purpose';
    public const FIELD_USAGE = 'usage';
    public const FIELD_USAGE_EXT = '_usage';
    public const FIELD_APPROVAL_DATE = 'approvalDate';
    public const FIELD_APPROVAL_DATE_EXT = '_approvalDate';
    public const FIELD_LAST_REVIEW_DATE = 'lastReviewDate';
    public const FIELD_LAST_REVIEW_DATE_EXT = '_lastReviewDate';
    public const FIELD_EFFECTIVE_PERIOD = 'effectivePeriod';
    public const FIELD_USE_CONTEXT = 'useContext';
    public const FIELD_JURISDICTION = 'jurisdiction';
    public const FIELD_TOPIC = 'topic';
    public const FIELD_CONTRIBUTOR = 'contributor';
    public const FIELD_CONTACT = 'contact';
    public const FIELD_COPYRIGHT = 'copyright';
    public const FIELD_COPYRIGHT_EXT = '_copyright';
    public const FIELD_RELATED_ARTIFACT = 'relatedArtifact';
    public const FIELD_LIBRARY = 'library';
    public const FIELD_KIND = 'kind';
    public const FIELD_KIND_EXT = '_kind';
    public const FIELD_CODE = 'code';
    public const FIELD_TIMING_TIMING = 'timingTiming';
    public const FIELD_TIMING_DATE_TIME = 'timingDateTime';
    public const FIELD_TIMING_DATE_TIME_EXT = '_timingDateTime';
    public const FIELD_TIMING_PERIOD = 'timingPeriod';
    public const FIELD_TIMING_RANGE = 'timingRange';
    public const FIELD_LOCATION = 'location';
    public const FIELD_PARTICIPANT = 'participant';
    public const FIELD_PRODUCT_REFERENCE = 'productReference';
    public const FIELD_PRODUCT_CODEABLE_CONCEPT = 'productCodeableConcept';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_DOSAGE = 'dosage';
    public const FIELD_BODY_SITE = 'bodySite';
    public const FIELD_TRANSFORM = 'transform';
    public const FIELD_DYNAMIC_VALUE = 'dynamicValue';

    /* class_default.php:67 */
    private static array $_validationRules = [
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_URL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VERSION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TITLE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXPERIMENTAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PUBLISHER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PURPOSE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_USAGE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_APPROVAL_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LAST_REVIEW_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COPYRIGHT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_KIND => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TIMING_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this activity definition when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this activity
     * definition is (or will be) published. The URL SHOULD include the major version
     * of the activity definition. For more information see [Technical and Business
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
     * A formal identifier that is used to identify this activity definition when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the activity definition
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the activity definition author and is not expected to
     * be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence. To provide a version consistent with
     * the Decision Support Service specification, use the format Major.Minor.Revision
     * (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the
     * Decision Support Service specification. Note that a version is required for
     * non-experimental active assets.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $version;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the activity definition. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $name;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the activity definition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $title;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this activity definition. Enables tracking the life-cycle of the
     * content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPublicationStatus 
     */
    protected FHIRPublicationStatus $status;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A boolean value to indicate that this activity definition is authored for
     * testing purposes (or education/evaluation/marketing), and is not intended to be
     * used for genuine usage.
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
     * The date (and optionally time) when the activity definition was published. The
     * date must change if and when the business version changes and it must change if
     * the status code changes. In addition, it should change when the substantive
     * content of the activity definition changes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $date;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the activity
     * definition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $publisher;
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
     * A free text natural language description of the activity definition from a
     * consumer's perspective.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $description;
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
     * Explaination of why this activity definition is needed and why it has been
     * designed as it has.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $purpose;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A detailed description of how the asset is used from a clinical perspective.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $usage;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $approvalDate;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval, but doesn't change the original approval date.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $lastReviewDate;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the activity definition content was or is planned to be
     * in active use.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $effectivePeriod;
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
     * for appropriate activity definition instances.
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
     * A legal or geographic region in which the activity definition is intended to be
     * used.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $jurisdiction;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive topics related to the content of the activity. Topics provide a
     * high-level categorization of the activity that can be useful for filtering and
     * searching.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $topic;
    /**
     * A contributor to the content of a knowledge asset, including authors, editors,
     * reviewers, and endorsers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A contributor to the content of the asset, including authors, editors,
     * reviewers, and endorsers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContributor[] 
     */
    protected array $contributor;
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
     * A copyright statement relating to the activity definition and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the activity definition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $copyright;
    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRelatedArtifact[] 
     */
    protected array $relatedArtifact;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a Library resource containing any formal logic used by the asset.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] 
     */
    protected array $library;
    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the kind of resource the activity definition is representing.
     * For example, a MedicationRequest, a ProcedureRequest, or a CommunicationRequest.
     * Typically, but not always, this is a Request resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRResourceType 
     */
    protected FHIRResourceType $kind;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed description of the type of activity; e.g. What lab test, what
     * procedure, what kind of encounter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming 
     */
    protected FHIRTiming $timingTiming;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $timingDateTime;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $timingPeriod;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $timingRange;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the facility where the activity will occur; e.g. home, hospital,
     * specific clinic, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $location;
    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     *
     * Indicates who should participate in performing the action described.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant[] 
     */
    protected array $participant;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product being consumed or supplied in the
     * activity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $productReference;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product being consumed or supplied in the
     * activity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $productCodeableConcept;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be consumed at once (per dose, per meal,
     * etc.).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $quantity;
    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides detailed dosage instructions in the same way that they are described
     * for MedicationRequest resources.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDosage[] 
     */
    protected array $dosage;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the sites on the subject's body where the procedure should be
     * performed (I.e. the target sites).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $bodySite;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a StructureMap resource that defines a transform that can be
     * executed to produce the intent resource using the ActivityDefinition instance as
     * the input.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $transform;
    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     *
     * Dynamic values that will be evaluated to produce values for elements of the
     * resulting resource. For example, if the dosage of a medication must be computed
     * based on the patient's weight, a dynamic value would be used to specify an
     * expression that calculated the weight, and the path on the intent resource that
     * would contain the result.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue[] 
     */
    protected array $dynamicValue;

    /* constructor.php:63 */
    /**
     * FHIRActivityDefinition Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $url
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $version
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $name
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $title
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRPublicationStatusList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPublicationStatus $status
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $experimental
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $date
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $publisher
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $description
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $purpose
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $usage
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $approvalDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $lastReviewDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $effectivePeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUsageContext[] $useContext
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] $jurisdiction
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] $topic
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContributor[] $contributor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactDetail[] $contact
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $copyright
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRelatedArtifact[] $relatedArtifact
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] $library
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRResourceTypeList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRResourceType $kind
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming $timingTiming
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $timingDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $timingPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange $timingRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $location
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant[] $participant
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $productReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $productCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $quantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDosage[] $dosage
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] $bodySite
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $transform
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue[] $dynamicValue
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
                                null|iterable $identifier = null,
                                null|string|FHIRStringPrimitive|FHIRString $version = null,
                                null|string|FHIRStringPrimitive|FHIRString $name = null,
                                null|string|FHIRStringPrimitive|FHIRString $title = null,
                                null|string|FHIRPublicationStatusList|FHIRPublicationStatus $status = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $experimental = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date = null,
                                null|string|FHIRStringPrimitive|FHIRString $publisher = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $purpose = null,
                                null|string|FHIRStringPrimitive|FHIRString $usage = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $approvalDate = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $lastReviewDate = null,
                                null|FHIRPeriod $effectivePeriod = null,
                                null|iterable $useContext = null,
                                null|iterable $jurisdiction = null,
                                null|iterable $topic = null,
                                null|iterable $contributor = null,
                                null|iterable $contact = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $copyright = null,
                                null|iterable $relatedArtifact = null,
                                null|iterable $library = null,
                                null|string|FHIRResourceTypeList|FHIRResourceType $kind = null,
                                null|FHIRCodeableConcept $code = null,
                                null|FHIRTiming $timingTiming = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $timingDateTime = null,
                                null|FHIRPeriod $timingPeriod = null,
                                null|FHIRRange $timingRange = null,
                                null|FHIRReference $location = null,
                                null|iterable $participant = null,
                                null|FHIRReference $productReference = null,
                                null|FHIRCodeableConcept $productCodeableConcept = null,
                                null|FHIRQuantity $quantity = null,
                                null|iterable $dosage = null,
                                null|iterable $bodySite = null,
                                null|FHIRReference $transform = null,
                                null|iterable $dynamicValue = null,
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
            $this->setIdentifier(...$identifier);
        }
        if (null !== $version) {
            $this->setVersion($version);
        }
        if (null !== $name) {
            $this->setName($name);
        }
        if (null !== $title) {
            $this->setTitle($title);
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
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $purpose) {
            $this->setPurpose($purpose);
        }
        if (null !== $usage) {
            $this->setUsage($usage);
        }
        if (null !== $approvalDate) {
            $this->setApprovalDate($approvalDate);
        }
        if (null !== $lastReviewDate) {
            $this->setLastReviewDate($lastReviewDate);
        }
        if (null !== $effectivePeriod) {
            $this->setEffectivePeriod($effectivePeriod);
        }
        if (null !== $useContext) {
            $this->setUseContext(...$useContext);
        }
        if (null !== $jurisdiction) {
            $this->setJurisdiction(...$jurisdiction);
        }
        if (null !== $topic) {
            $this->setTopic(...$topic);
        }
        if (null !== $contributor) {
            $this->setContributor(...$contributor);
        }
        if (null !== $contact) {
            $this->setContact(...$contact);
        }
        if (null !== $copyright) {
            $this->setCopyright($copyright);
        }
        if (null !== $relatedArtifact) {
            $this->setRelatedArtifact(...$relatedArtifact);
        }
        if (null !== $library) {
            $this->setLibrary(...$library);
        }
        if (null !== $kind) {
            $this->setKind($kind);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $timingTiming) {
            $this->setTimingTiming($timingTiming);
        }
        if (null !== $timingDateTime) {
            $this->setTimingDateTime($timingDateTime);
        }
        if (null !== $timingPeriod) {
            $this->setTimingPeriod($timingPeriod);
        }
        if (null !== $timingRange) {
            $this->setTimingRange($timingRange);
        }
        if (null !== $location) {
            $this->setLocation($location);
        }
        if (null !== $participant) {
            $this->setParticipant(...$participant);
        }
        if (null !== $productReference) {
            $this->setProductReference($productReference);
        }
        if (null !== $productCodeableConcept) {
            $this->setProductCodeableConcept($productCodeableConcept);
        }
        if (null !== $quantity) {
            $this->setQuantity($quantity);
        }
        if (null !== $dosage) {
            $this->setDosage(...$dosage);
        }
        if (null !== $bodySite) {
            $this->setBodySite(...$bodySite);
        }
        if (null !== $transform) {
            $this->setTransform($transform);
        }
        if (null !== $dynamicValue) {
            $this->setDynamicValue(...$dynamicValue);
        }
    }

    /* class_default.php:137 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:149 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this activity definition when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this activity
     * definition is (or will be) published. The URL SHOULD include the major version
     * of the activity definition. For more information see [Technical and Business
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
     * An absolute URI that is used to identify this activity definition when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this activity
     * definition is (or will be) published. The URL SHOULD include the major version
     * of the activity definition. For more information see [Technical and Business
     * Versions](resource.html#versions).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $url
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setUrl(null|string|FHIRUriPrimitive|FHIRUri $url,
                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $url) {
            unset($this->url);
            return $this;
        }
        if (!($url instanceof FHIRUri)) {
            $url = new FHIRUri(value: $url);
        }
        $this->url = $url;
        if ($this->_valueXMLLocations[self::FIELD_URL] !== $valueXMLLocation) {
            $this->_setUrlValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the url element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getUrlValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_URL];
    }

    /**
     * Set the location the "value" field of the url element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setUrlValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_URL] = $valueXMLLocation;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this activity definition when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this activity definition when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRString|FHIRIdentifier $identifier): self
    {
        if (!($identifier instanceof FHIRIdentifier)) {
            $identifier = new FHIRIdentifier(value: $identifier);
        }
        if (!isset($this->identifier)) {
            $this->identifier = [];
        }
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this activity definition when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRString|FHIRIdentifier ...$identifier): self
    {
        if ([] === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = [];
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->identifier[] = $v;
            } else {
                $this->identifier[] = new FHIRIdentifier(value: $v);
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the activity definition
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the activity definition author and is not expected to
     * be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence. To provide a version consistent with
     * the Decision Support Service specification, use the format Major.Minor.Revision
     * (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the
     * Decision Support Service specification. Note that a version is required for
     * non-experimental active assets.
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
     * The identifier that is used to identify this version of the activity definition
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the activity definition author and is not expected to
     * be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence. To provide a version consistent with
     * the Decision Support Service specification, use the format Major.Minor.Revision
     * (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the
     * Decision Support Service specification. Note that a version is required for
     * non-experimental active assets.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $version
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setVersion(null|string|FHIRStringPrimitive|FHIRString $version,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $version) {
            unset($this->version);
            return $this;
        }
        if (!($version instanceof FHIRString)) {
            $version = new FHIRString(value: $version);
        }
        $this->version = $version;
        if ($this->_valueXMLLocations[self::FIELD_VERSION] !== $valueXMLLocation) {
            $this->_setVersionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the version element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getVersionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VERSION];
    }

    /**
     * Set the location the "value" field of the version element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setVersionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VERSION] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the activity definition. This name should be
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
     * A natural language name identifying the activity definition. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $name
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $name) {
            unset($this->name);
            return $this;
        }
        if (!($name instanceof FHIRString)) {
            $name = new FHIRString(value: $name);
        }
        $this->name = $name;
        if ($this->_valueXMLLocations[self::FIELD_NAME] !== $valueXMLLocation) {
            $this->_setNameValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the name element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getNameValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_NAME];
    }

    /**
     * Set the location the "value" field of the name element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setNameValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_NAME] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the activity definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getTitle(): null|FHIRString
    {
        return $this->title ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the activity definition.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $title
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTitle(null|string|FHIRStringPrimitive|FHIRString $title,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $title) {
            unset($this->title);
            return $this;
        }
        if (!($title instanceof FHIRString)) {
            $title = new FHIRString(value: $title);
        }
        $this->title = $title;
        if ($this->_valueXMLLocations[self::FIELD_TITLE] !== $valueXMLLocation) {
            $this->_setTitleValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the title element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTitleValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TITLE];
    }

    /**
     * Set the location the "value" field of the title element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTitleValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TITLE] = $valueXMLLocation;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this activity definition. Enables tracking the life-cycle of the
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
     * The status of this activity definition. Enables tracking the life-cycle of the
     * content.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRPublicationStatusList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPublicationStatus $status
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStatus(null|string|FHIRPublicationStatusList|FHIRPublicationStatus $status,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRPublicationStatus)) {
            $status = new FHIRPublicationStatus(value: $status);
        }
        $this->status = $status;
        if ($this->_valueXMLLocations[self::FIELD_STATUS] !== $valueXMLLocation) {
            $this->_setStatusValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the status element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getStatusValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_STATUS];
    }

    /**
     * Set the location the "value" field of the status element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setStatusValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_STATUS] = $valueXMLLocation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A boolean value to indicate that this activity definition is authored for
     * testing purposes (or education/evaluation/marketing), and is not intended to be
     * used for genuine usage.
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
     * A boolean value to indicate that this activity definition is authored for
     * testing purposes (or education/evaluation/marketing), and is not intended to be
     * used for genuine usage.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $experimental
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExperimental(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $experimental,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $experimental) {
            unset($this->experimental);
            return $this;
        }
        if (!($experimental instanceof FHIRBoolean)) {
            $experimental = new FHIRBoolean(value: $experimental);
        }
        $this->experimental = $experimental;
        if ($this->_valueXMLLocations[self::FIELD_EXPERIMENTAL] !== $valueXMLLocation) {
            $this->_setExperimentalValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the experimental element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExperimentalValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXPERIMENTAL];
    }

    /**
     * Set the location the "value" field of the experimental element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExperimentalValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXPERIMENTAL] = $valueXMLLocation;
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
     * The date (and optionally time) when the activity definition was published. The
     * date must change if and when the business version changes and it must change if
     * the status code changes. In addition, it should change when the substantive
     * content of the activity definition changes.
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
     * The date (and optionally time) when the activity definition was published. The
     * date must change if and when the business version changes and it must change if
     * the status code changes. In addition, it should change when the substantive
     * content of the activity definition changes.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $date
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $date) {
            unset($this->date);
            return $this;
        }
        if (!($date instanceof FHIRDateTime)) {
            $date = new FHIRDateTime(value: $date);
        }
        $this->date = $date;
        if ($this->_valueXMLLocations[self::FIELD_DATE] !== $valueXMLLocation) {
            $this->_setDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the date element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DATE];
    }

    /**
     * Set the location the "value" field of the date element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DATE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the activity
     * definition.
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
     * The name of the individual or organization that published the activity
     * definition.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $publisher
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPublisher(null|string|FHIRStringPrimitive|FHIRString $publisher,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $publisher) {
            unset($this->publisher);
            return $this;
        }
        if (!($publisher instanceof FHIRString)) {
            $publisher = new FHIRString(value: $publisher);
        }
        $this->publisher = $publisher;
        if ($this->_valueXMLLocations[self::FIELD_PUBLISHER] !== $valueXMLLocation) {
            $this->_setPublisherValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the publisher element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPublisherValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PUBLISHER];
    }

    /**
     * Set the location the "value" field of the publisher element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPublisherValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PUBLISHER] = $valueXMLLocation;
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
     * A free text natural language description of the activity definition from a
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
     * A free text natural language description of the activity definition from a
     * consumer's perspective.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $description
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown(value: $description);
        }
        $this->description = $description;
        if ($this->_valueXMLLocations[self::FIELD_DESCRIPTION] !== $valueXMLLocation) {
            $this->_setDescriptionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the description element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDescriptionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DESCRIPTION];
    }

    /**
     * Set the location the "value" field of the description element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDescriptionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DESCRIPTION] = $valueXMLLocation;
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
     * Explaination of why this activity definition is needed and why it has been
     * designed as it has.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown
     */
    public function getPurpose(): null|FHIRMarkdown
    {
        return $this->purpose ?? null;
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
     * Explaination of why this activity definition is needed and why it has been
     * designed as it has.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $purpose
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPurpose(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $purpose,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $purpose) {
            unset($this->purpose);
            return $this;
        }
        if (!($purpose instanceof FHIRMarkdown)) {
            $purpose = new FHIRMarkdown(value: $purpose);
        }
        $this->purpose = $purpose;
        if ($this->_valueXMLLocations[self::FIELD_PURPOSE] !== $valueXMLLocation) {
            $this->_setPurposeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the purpose element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPurposeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PURPOSE];
    }

    /**
     * Set the location the "value" field of the purpose element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPurposeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PURPOSE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A detailed description of how the asset is used from a clinical perspective.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getUsage(): null|FHIRString
    {
        return $this->usage ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A detailed description of how the asset is used from a clinical perspective.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $usage
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setUsage(null|string|FHIRStringPrimitive|FHIRString $usage,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $usage) {
            unset($this->usage);
            return $this;
        }
        if (!($usage instanceof FHIRString)) {
            $usage = new FHIRString(value: $usage);
        }
        $this->usage = $usage;
        if ($this->_valueXMLLocations[self::FIELD_USAGE] !== $valueXMLLocation) {
            $this->_setUsageValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the usage element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getUsageValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_USAGE];
    }

    /**
     * Set the location the "value" field of the usage element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setUsageValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_USAGE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate
     */
    public function getApprovalDate(): null|FHIRDate
    {
        return $this->approvalDate ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $approvalDate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setApprovalDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $approvalDate,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $approvalDate) {
            unset($this->approvalDate);
            return $this;
        }
        if (!($approvalDate instanceof FHIRDate)) {
            $approvalDate = new FHIRDate(value: $approvalDate);
        }
        $this->approvalDate = $approvalDate;
        if ($this->_valueXMLLocations[self::FIELD_APPROVAL_DATE] !== $valueXMLLocation) {
            $this->_setApprovalDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the approvalDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getApprovalDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_APPROVAL_DATE];
    }

    /**
     * Set the location the "value" field of the approvalDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setApprovalDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_APPROVAL_DATE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval, but doesn't change the original approval date.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate
     */
    public function getLastReviewDate(): null|FHIRDate
    {
        return $this->lastReviewDate ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval, but doesn't change the original approval date.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $lastReviewDate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLastReviewDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $lastReviewDate,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $lastReviewDate) {
            unset($this->lastReviewDate);
            return $this;
        }
        if (!($lastReviewDate instanceof FHIRDate)) {
            $lastReviewDate = new FHIRDate(value: $lastReviewDate);
        }
        $this->lastReviewDate = $lastReviewDate;
        if ($this->_valueXMLLocations[self::FIELD_LAST_REVIEW_DATE] !== $valueXMLLocation) {
            $this->_setLastReviewDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the lastReviewDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getLastReviewDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_LAST_REVIEW_DATE];
    }

    /**
     * Set the location the "value" field of the lastReviewDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setLastReviewDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_LAST_REVIEW_DATE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the activity definition content was or is planned to be
     * in active use.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod(): null|FHIRPeriod
    {
        return $this->effectivePeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the activity definition content was or is planned to be
     * in active use.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $effectivePeriod
     * @return static
     */
    public function setEffectivePeriod(null|FHIRPeriod $effectivePeriod): self
    {
        if (null === $effectivePeriod) {
            unset($this->effectivePeriod);
            return $this;
        }
        $this->effectivePeriod = $effectivePeriod;
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
     * for appropriate activity definition instances.
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
     * for appropriate activity definition instances.
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
     * for appropriate activity definition instances.
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
     * A legal or geographic region in which the activity definition is intended to be
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
     * A legal or geographic region in which the activity definition is intended to be
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
     * A legal or geographic region in which the activity definition is intended to be
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive topics related to the content of the activity. Topics provide a
     * high-level categorization of the activity that can be useful for filtering and
     * searching.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getTopic(): array
    {
        return $this->topic ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getTopicIterator(): iterable
    {
        if (!isset($this->topic)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->topic);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive topics related to the content of the activity. Topics provide a
     * high-level categorization of the activity that can be useful for filtering and
     * searching.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $topic
     * @return static
     */
    public function addTopic(FHIRCodeableConcept $topic): self
    {
        if (!isset($this->topic)) {
            $this->topic = [];
        }
        $this->topic[] = $topic;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive topics related to the content of the activity. Topics provide a
     * high-level categorization of the activity that can be useful for filtering and
     * searching.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept ...$topic
     * @return static
     */
    public function setTopic(FHIRCodeableConcept ...$topic): self
    {
        if ([] === $topic) {
            unset($this->topic);
            return $this;
        }
        $this->topic = $topic;
        return $this;
    }

    /**
     * A contributor to the content of a knowledge asset, including authors, editors,
     * reviewers, and endorsers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A contributor to the content of the asset, including authors, editors,
     * reviewers, and endorsers.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContributor[]
     */
    public function getContributor(): array
    {
        return $this->contributor ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContributor>
     */
    public function getContributorIterator(): iterable
    {
        if (!isset($this->contributor)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->contributor);
    }

    /**
     * A contributor to the content of a knowledge asset, including authors, editors,
     * reviewers, and endorsers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A contributor to the content of the asset, including authors, editors,
     * reviewers, and endorsers.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContributor $contributor
     * @return static
     */
    public function addContributor(FHIRContributor $contributor): self
    {
        if (!isset($this->contributor)) {
            $this->contributor = [];
        }
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * A contributor to the content of a knowledge asset, including authors, editors,
     * reviewers, and endorsers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A contributor to the content of the asset, including authors, editors,
     * reviewers, and endorsers.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContributor ...$contributor
     * @return static
     */
    public function setContributor(FHIRContributor ...$contributor): self
    {
        if ([] === $contributor) {
            unset($this->contributor);
            return $this;
        }
        $this->contributor = $contributor;
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
     * A copyright statement relating to the activity definition and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the activity definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown
     */
    public function getCopyright(): null|FHIRMarkdown
    {
        return $this->copyright ?? null;
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
     * A copyright statement relating to the activity definition and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the activity definition.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $copyright
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCopyright(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $copyright,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $copyright) {
            unset($this->copyright);
            return $this;
        }
        if (!($copyright instanceof FHIRMarkdown)) {
            $copyright = new FHIRMarkdown(value: $copyright);
        }
        $this->copyright = $copyright;
        if ($this->_valueXMLLocations[self::FIELD_COPYRIGHT] !== $valueXMLLocation) {
            $this->_setCopyrightValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the copyright element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCopyrightValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_COPYRIGHT];
    }

    /**
     * Set the location the "value" field of the copyright element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCopyrightValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_COPYRIGHT] = $valueXMLLocation;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRelatedArtifact[]
     */
    public function getRelatedArtifact(): array
    {
        return $this->relatedArtifact ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRelatedArtifact>
     */
    public function getRelatedArtifactIterator(): iterable
    {
        if (!isset($this->relatedArtifact)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->relatedArtifact);
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRelatedArtifact $relatedArtifact
     * @return static
     */
    public function addRelatedArtifact(FHIRRelatedArtifact $relatedArtifact): self
    {
        if (!isset($this->relatedArtifact)) {
            $this->relatedArtifact = [];
        }
        $this->relatedArtifact[] = $relatedArtifact;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRelatedArtifact ...$relatedArtifact
     * @return static
     */
    public function setRelatedArtifact(FHIRRelatedArtifact ...$relatedArtifact): self
    {
        if ([] === $relatedArtifact) {
            unset($this->relatedArtifact);
            return $this;
        }
        $this->relatedArtifact = $relatedArtifact;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a Library resource containing any formal logic used by the asset.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[]
     */
    public function getLibrary(): array
    {
        return $this->library ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference>
     */
    public function getLibraryIterator(): iterable
    {
        if (!isset($this->library)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->library);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a Library resource containing any formal logic used by the asset.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $library
     * @return static
     */
    public function addLibrary(FHIRReference $library): self
    {
        if (!isset($this->library)) {
            $this->library = [];
        }
        $this->library[] = $library;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a Library resource containing any formal logic used by the asset.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference ...$library
     * @return static
     */
    public function setLibrary(FHIRReference ...$library): self
    {
        if ([] === $library) {
            unset($this->library);
            return $this;
        }
        $this->library = $library;
        return $this;
    }

    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the kind of resource the activity definition is representing.
     * For example, a MedicationRequest, a ProcedureRequest, or a CommunicationRequest.
     * Typically, but not always, this is a Request resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRResourceType
     */
    public function getKind(): null|FHIRResourceType
    {
        return $this->kind ?? null;
    }

    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the kind of resource the activity definition is representing.
     * For example, a MedicationRequest, a ProcedureRequest, or a CommunicationRequest.
     * Typically, but not always, this is a Request resource.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRResourceTypeList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRResourceType $kind
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setKind(null|string|FHIRResourceTypeList|FHIRResourceType $kind,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $kind) {
            unset($this->kind);
            return $this;
        }
        if (!($kind instanceof FHIRResourceType)) {
            $kind = new FHIRResourceType(value: $kind);
        }
        $this->kind = $kind;
        if ($this->_valueXMLLocations[self::FIELD_KIND] !== $valueXMLLocation) {
            $this->_setKindValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the kind element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getKindValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_KIND];
    }

    /**
     * Set the location the "value" field of the kind element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setKindValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        if (ValueXMLLocationEnum::CONTAINER_ATTRIBUTE === $valueXMLLocation) {
            throw new \InvalidArgumentException(sprintf(
                'Cannot set "%s" as value XML serialize location for primitive property "kind" on type "ActivityDefinition"',
                $valueXMLLocation->name,
            ));
        }
        $this->_valueXMLLocations[self::FIELD_KIND] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed description of the type of activity; e.g. What lab test, what
     * procedure, what kind of encounter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed description of the type of activity; e.g. What lab test, what
     * procedure, what kind of encounter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        $this->code = $code;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming
     */
    public function getTimingTiming(): null|FHIRTiming
    {
        return $this->timingTiming ?? null;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming $timingTiming
     * @return static
     */
    public function setTimingTiming(null|FHIRTiming $timingTiming): self
    {
        if (null === $timingTiming) {
            unset($this->timingTiming);
            return $this;
        }
        $this->timingTiming = $timingTiming;
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
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime
     */
    public function getTimingDateTime(): null|FHIRDateTime
    {
        return $this->timingDateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $timingDateTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTimingDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $timingDateTime,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $timingDateTime) {
            unset($this->timingDateTime);
            return $this;
        }
        if (!($timingDateTime instanceof FHIRDateTime)) {
            $timingDateTime = new FHIRDateTime(value: $timingDateTime);
        }
        $this->timingDateTime = $timingDateTime;
        if ($this->_valueXMLLocations[self::FIELD_TIMING_DATE_TIME] !== $valueXMLLocation) {
            $this->_setTimingDateTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the timingDateTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTimingDateTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TIMING_DATE_TIME];
    }

    /**
     * Set the location the "value" field of the timingDateTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTimingDateTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TIMING_DATE_TIME] = $valueXMLLocation;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod(): null|FHIRPeriod
    {
        return $this->timingPeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $timingPeriod
     * @return static
     */
    public function setTimingPeriod(null|FHIRPeriod $timingPeriod): self
    {
        if (null === $timingPeriod) {
            unset($this->timingPeriod);
            return $this;
        }
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange
     */
    public function getTimingRange(): null|FHIRRange
    {
        return $this->timingRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange $timingRange
     * @return static
     */
    public function setTimingRange(null|FHIRRange $timingRange): self
    {
        if (null === $timingRange) {
            unset($this->timingRange);
            return $this;
        }
        $this->timingRange = $timingRange;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the facility where the activity will occur; e.g. home, hospital,
     * specific clinic, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getLocation(): null|FHIRReference
    {
        return $this->location ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the facility where the activity will occur; e.g. home, hospital,
     * specific clinic, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $location
     * @return static
     */
    public function setLocation(null|FHIRReference $location): self
    {
        if (null === $location) {
            unset($this->location);
            return $this;
        }
        $this->location = $location;
        return $this;
    }

    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     *
     * Indicates who should participate in performing the action described.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant[]
     */
    public function getParticipant(): array
    {
        return $this->participant ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant>
     */
    public function getParticipantIterator(): iterable
    {
        if (!isset($this->participant)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->participant);
    }

    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     *
     * Indicates who should participate in performing the action described.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant $participant
     * @return static
     */
    public function addParticipant(FHIRActivityDefinitionParticipant $participant): self
    {
        if (!isset($this->participant)) {
            $this->participant = [];
        }
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     *
     * Indicates who should participate in performing the action described.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant ...$participant
     * @return static
     */
    public function setParticipant(FHIRActivityDefinitionParticipant ...$participant): self
    {
        if ([] === $participant) {
            unset($this->participant);
            return $this;
        }
        $this->participant = $participant;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product being consumed or supplied in the
     * activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getProductReference(): null|FHIRReference
    {
        return $this->productReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product being consumed or supplied in the
     * activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $productReference
     * @return static
     */
    public function setProductReference(null|FHIRReference $productReference): self
    {
        if (null === $productReference) {
            unset($this->productReference);
            return $this;
        }
        $this->productReference = $productReference;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product being consumed or supplied in the
     * activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getProductCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->productCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product being consumed or supplied in the
     * activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $productCodeableConcept
     * @return static
     */
    public function setProductCodeableConcept(null|FHIRCodeableConcept $productCodeableConcept): self
    {
        if (null === $productCodeableConcept) {
            unset($this->productCodeableConcept);
            return $this;
        }
        $this->productCodeableConcept = $productCodeableConcept;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be consumed at once (per dose, per meal,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity
     */
    public function getQuantity(): null|FHIRQuantity
    {
        return $this->quantity ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be consumed at once (per dose, per meal,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $quantity
     * @return static
     */
    public function setQuantity(null|FHIRQuantity $quantity): self
    {
        if (null === $quantity) {
            unset($this->quantity);
            return $this;
        }
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides detailed dosage instructions in the same way that they are described
     * for MedicationRequest resources.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDosage[]
     */
    public function getDosage(): array
    {
        return $this->dosage ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDosage>
     */
    public function getDosageIterator(): iterable
    {
        if (!isset($this->dosage)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->dosage);
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides detailed dosage instructions in the same way that they are described
     * for MedicationRequest resources.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDosage $dosage
     * @return static
     */
    public function addDosage(FHIRDosage $dosage): self
    {
        if (!isset($this->dosage)) {
            $this->dosage = [];
        }
        $this->dosage[] = $dosage;
        return $this;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides detailed dosage instructions in the same way that they are described
     * for MedicationRequest resources.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDosage ...$dosage
     * @return static
     */
    public function setDosage(FHIRDosage ...$dosage): self
    {
        if ([] === $dosage) {
            unset($this->dosage);
            return $this;
        }
        $this->dosage = $dosage;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the sites on the subject's body where the procedure should be
     * performed (I.e. the target sites).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getBodySite(): array
    {
        return $this->bodySite ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getBodySiteIterator(): iterable
    {
        if (!isset($this->bodySite)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->bodySite);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the sites on the subject's body where the procedure should be
     * performed (I.e. the target sites).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $bodySite
     * @return static
     */
    public function addBodySite(FHIRCodeableConcept $bodySite): self
    {
        if (!isset($this->bodySite)) {
            $this->bodySite = [];
        }
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the sites on the subject's body where the procedure should be
     * performed (I.e. the target sites).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept ...$bodySite
     * @return static
     */
    public function setBodySite(FHIRCodeableConcept ...$bodySite): self
    {
        if ([] === $bodySite) {
            unset($this->bodySite);
            return $this;
        }
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a StructureMap resource that defines a transform that can be
     * executed to produce the intent resource using the ActivityDefinition instance as
     * the input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getTransform(): null|FHIRReference
    {
        return $this->transform ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a StructureMap resource that defines a transform that can be
     * executed to produce the intent resource using the ActivityDefinition instance as
     * the input.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $transform
     * @return static
     */
    public function setTransform(null|FHIRReference $transform): self
    {
        if (null === $transform) {
            unset($this->transform);
            return $this;
        }
        $this->transform = $transform;
        return $this;
    }

    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     *
     * Dynamic values that will be evaluated to produce values for elements of the
     * resulting resource. For example, if the dosage of a medication must be computed
     * based on the patient's weight, a dynamic value would be used to specify an
     * expression that calculated the weight, and the path on the intent resource that
     * would contain the result.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue[]
     */
    public function getDynamicValue(): array
    {
        return $this->dynamicValue ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue>
     */
    public function getDynamicValueIterator(): iterable
    {
        if (!isset($this->dynamicValue)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->dynamicValue);
    }

    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     *
     * Dynamic values that will be evaluated to produce values for elements of the
     * resulting resource. For example, if the dosage of a medication must be computed
     * based on the patient's weight, a dynamic value would be used to specify an
     * expression that calculated the weight, and the path on the intent resource that
     * would contain the result.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue $dynamicValue
     * @return static
     */
    public function addDynamicValue(FHIRActivityDefinitionDynamicValue $dynamicValue): self
    {
        if (!isset($this->dynamicValue)) {
            $this->dynamicValue = [];
        }
        $this->dynamicValue[] = $dynamicValue;
        return $this;
    }

    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     *
     * Dynamic values that will be evaluated to produce values for elements of the
     * resulting resource. For example, if the dosage of a medication must be computed
     * based on the patient's weight, a dynamic value would be used to specify an
     * expression that calculated the weight, and the path on the intent resource that
     * would contain the result.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue ...$dynamicValue
     * @return static
     */
    public function setDynamicValue(FHIRActivityDefinitionDynamicValue ...$dynamicValue): self
    {
        if ([] === $dynamicValue) {
            unset($this->dynamicValue);
            return $this;
        }
        $this->dynamicValue = $dynamicValue;
        return $this;
    }

    /* class_default.php:189 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
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
        if (isset($validationRules[self::FIELD_TITLE])) {
            $v = $this->getTitle();
            foreach($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_PURPOSE])) {
            $v = $this->getPurpose();
            foreach($validationRules[self::FIELD_PURPOSE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PURPOSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PURPOSE])) {
                        $errs[self::FIELD_PURPOSE] = [];
                    }
                    $errs[self::FIELD_PURPOSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USAGE])) {
            $v = $this->getUsage();
            foreach($validationRules[self::FIELD_USAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_USAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USAGE])) {
                        $errs[self::FIELD_USAGE] = [];
                    }
                    $errs[self::FIELD_USAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_APPROVAL_DATE])) {
            $v = $this->getApprovalDate();
            foreach($validationRules[self::FIELD_APPROVAL_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_APPROVAL_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPROVAL_DATE])) {
                        $errs[self::FIELD_APPROVAL_DATE] = [];
                    }
                    $errs[self::FIELD_APPROVAL_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_REVIEW_DATE])) {
            $v = $this->getLastReviewDate();
            foreach($validationRules[self::FIELD_LAST_REVIEW_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LAST_REVIEW_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_REVIEW_DATE])) {
                        $errs[self::FIELD_LAST_REVIEW_DATE] = [];
                    }
                    $errs[self::FIELD_LAST_REVIEW_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EFFECTIVE_PERIOD])) {
            $v = $this->getEffectivePeriod();
            foreach($validationRules[self::FIELD_EFFECTIVE_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EFFECTIVE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EFFECTIVE_PERIOD])) {
                        $errs[self::FIELD_EFFECTIVE_PERIOD] = [];
                    }
                    $errs[self::FIELD_EFFECTIVE_PERIOD][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_TOPIC])) {
            $v = $this->getTopic();
            foreach($validationRules[self::FIELD_TOPIC] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TOPIC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TOPIC])) {
                        $errs[self::FIELD_TOPIC] = [];
                    }
                    $errs[self::FIELD_TOPIC][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRIBUTOR])) {
            $v = $this->getContributor();
            foreach($validationRules[self::FIELD_CONTRIBUTOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTRIBUTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRIBUTOR])) {
                        $errs[self::FIELD_CONTRIBUTOR] = [];
                    }
                    $errs[self::FIELD_CONTRIBUTOR][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_COPYRIGHT])) {
            $v = $this->getCopyright();
            foreach($validationRules[self::FIELD_COPYRIGHT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COPYRIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COPYRIGHT])) {
                        $errs[self::FIELD_COPYRIGHT] = [];
                    }
                    $errs[self::FIELD_COPYRIGHT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATED_ARTIFACT])) {
            $v = $this->getRelatedArtifact();
            foreach($validationRules[self::FIELD_RELATED_ARTIFACT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RELATED_ARTIFACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED_ARTIFACT])) {
                        $errs[self::FIELD_RELATED_ARTIFACT] = [];
                    }
                    $errs[self::FIELD_RELATED_ARTIFACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LIBRARY])) {
            $v = $this->getLibrary();
            foreach($validationRules[self::FIELD_LIBRARY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LIBRARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LIBRARY])) {
                        $errs[self::FIELD_LIBRARY] = [];
                    }
                    $errs[self::FIELD_LIBRARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_KIND])) {
            $v = $this->getKind();
            foreach($validationRules[self::FIELD_KIND] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_KIND, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_KIND])) {
                        $errs[self::FIELD_KIND] = [];
                    }
                    $errs[self::FIELD_KIND][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMING_TIMING])) {
            $v = $this->getTimingTiming();
            foreach($validationRules[self::FIELD_TIMING_TIMING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TIMING_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING_TIMING])) {
                        $errs[self::FIELD_TIMING_TIMING] = [];
                    }
                    $errs[self::FIELD_TIMING_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMING_DATE_TIME])) {
            $v = $this->getTimingDateTime();
            foreach($validationRules[self::FIELD_TIMING_DATE_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TIMING_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING_DATE_TIME])) {
                        $errs[self::FIELD_TIMING_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_TIMING_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMING_PERIOD])) {
            $v = $this->getTimingPeriod();
            foreach($validationRules[self::FIELD_TIMING_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TIMING_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING_PERIOD])) {
                        $errs[self::FIELD_TIMING_PERIOD] = [];
                    }
                    $errs[self::FIELD_TIMING_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMING_RANGE])) {
            $v = $this->getTimingRange();
            foreach($validationRules[self::FIELD_TIMING_RANGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TIMING_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING_RANGE])) {
                        $errs[self::FIELD_TIMING_RANGE] = [];
                    }
                    $errs[self::FIELD_TIMING_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARTICIPANT])) {
            $v = $this->getParticipant();
            foreach($validationRules[self::FIELD_PARTICIPANT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PARTICIPANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTICIPANT])) {
                        $errs[self::FIELD_PARTICIPANT] = [];
                    }
                    $errs[self::FIELD_PARTICIPANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT_REFERENCE])) {
            $v = $this->getProductReference();
            foreach($validationRules[self::FIELD_PRODUCT_REFERENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRODUCT_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT_REFERENCE])) {
                        $errs[self::FIELD_PRODUCT_REFERENCE] = [];
                    }
                    $errs[self::FIELD_PRODUCT_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT_CODEABLE_CONCEPT])) {
            $v = $this->getProductCodeableConcept();
            foreach($validationRules[self::FIELD_PRODUCT_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRODUCT_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_PRODUCT_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_PRODUCT_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUANTITY])) {
            $v = $this->getQuantity();
            foreach($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITY])) {
                        $errs[self::FIELD_QUANTITY] = [];
                    }
                    $errs[self::FIELD_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSAGE])) {
            $v = $this->getDosage();
            foreach($validationRules[self::FIELD_DOSAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DOSAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSAGE])) {
                        $errs[self::FIELD_DOSAGE] = [];
                    }
                    $errs[self::FIELD_DOSAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BODY_SITE])) {
            $v = $this->getBodySite();
            foreach($validationRules[self::FIELD_BODY_SITE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BODY_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BODY_SITE])) {
                        $errs[self::FIELD_BODY_SITE] = [];
                    }
                    $errs[self::FIELD_BODY_SITE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TRANSFORM])) {
            $v = $this->getTransform();
            foreach($validationRules[self::FIELD_TRANSFORM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TRANSFORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TRANSFORM])) {
                        $errs[self::FIELD_TRANSFORM] = [];
                    }
                    $errs[self::FIELD_TRANSFORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DYNAMIC_VALUE])) {
            $v = $this->getDynamicValue();
            foreach($validationRules[self::FIELD_DYNAMIC_VALUE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DYNAMIC_VALUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DYNAMIC_VALUE])) {
                        $errs[self::FIELD_DYNAMIC_VALUE] = [];
                    }
                    $errs[self::FIELD_DYNAMIC_VALUE][$rule] = $err;
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

    /* class_default.php:213 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRActivityDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRActivityDefinition
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRActivityDefinition)) {
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
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_URL === $cen) {
                $type->setUrl(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VERSION === $cen) {
                $type->setVersion(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NAME === $cen) {
                $type->setName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TITLE === $cen) {
                $type->setTitle(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRPublicationStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXPERIMENTAL === $cen) {
                $type->setExperimental(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE === $cen) {
                $type->setDate(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PUBLISHER === $cen) {
                $type->setPublisher(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PURPOSE === $cen) {
                $type->setPurpose(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_USAGE === $cen) {
                $type->setUsage(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_APPROVAL_DATE === $cen) {
                $type->setApprovalDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LAST_REVIEW_DATE === $cen) {
                $type->setLastReviewDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EFFECTIVE_PERIOD === $cen) {
                $type->setEffectivePeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_USE_CONTEXT === $cen) {
                $type->addUseContext(FHIRUsageContext::xmlUnserialize($ce, $config));
            } else if (self::FIELD_JURISDICTION === $cen) {
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TOPIC === $cen) {
                $type->addTopic(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTRIBUTOR === $cen) {
                $type->addContributor(FHIRContributor::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTACT === $cen) {
                $type->addContact(FHIRContactDetail::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COPYRIGHT === $cen) {
                $type->setCopyright(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RELATED_ARTIFACT === $cen) {
                $type->addRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LIBRARY === $cen) {
                $type->addLibrary(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_KIND === $cen) {
                $type->setKind(FHIRResourceType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING_TIMING === $cen) {
                $type->setTimingTiming(FHIRTiming::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING_DATE_TIME === $cen) {
                $type->setTimingDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING_PERIOD === $cen) {
                $type->setTimingPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING_RANGE === $cen) {
                $type->setTimingRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LOCATION === $cen) {
                $type->setLocation(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARTICIPANT === $cen) {
                $type->addParticipant(FHIRActivityDefinitionParticipant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRODUCT_REFERENCE === $cen) {
                $type->setProductReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRODUCT_CODEABLE_CONCEPT === $cen) {
                $type->setProductCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUANTITY === $cen) {
                $type->setQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOSAGE === $cen) {
                $type->addDosage(FHIRDosage::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BODY_SITE === $cen) {
                $type->addBodySite(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TRANSFORM === $cen) {
                $type->setTransform(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DYNAMIC_VALUE === $cen) {
                $type->addDynamicValue(FHIRActivityDefinitionDynamicValue::xmlUnserialize($ce, $config));
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
                $type->_setIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $type->_setImplicitRulesValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $type->_setLanguageValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_URL])) {
            if (isset($type->url)) {
                $type->url->setValue((string)$attributes[self::FIELD_URL]);
                $type->_setUrlValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setUrl((string)$attributes[self::FIELD_URL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VERSION])) {
            if (isset($type->version)) {
                $type->version->setValue((string)$attributes[self::FIELD_VERSION]);
                $type->_setVersionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setVersion((string)$attributes[self::FIELD_VERSION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NAME])) {
            if (isset($type->name)) {
                $type->name->setValue((string)$attributes[self::FIELD_NAME]);
                $type->_setNameValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setName((string)$attributes[self::FIELD_NAME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TITLE])) {
            if (isset($type->title)) {
                $type->title->setValue((string)$attributes[self::FIELD_TITLE]);
                $type->_setTitleValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setTitle((string)$attributes[self::FIELD_TITLE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
                $type->_setStatusValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXPERIMENTAL])) {
            if (isset($type->experimental)) {
                $type->experimental->setValue((string)$attributes[self::FIELD_EXPERIMENTAL]);
                $type->_setExperimentalValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExperimental((string)$attributes[self::FIELD_EXPERIMENTAL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATE])) {
            if (isset($type->date)) {
                $type->date->setValue((string)$attributes[self::FIELD_DATE]);
                $type->_setDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDate((string)$attributes[self::FIELD_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PUBLISHER])) {
            if (isset($type->publisher)) {
                $type->publisher->setValue((string)$attributes[self::FIELD_PUBLISHER]);
                $type->_setPublisherValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPublisher((string)$attributes[self::FIELD_PUBLISHER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
                $type->_setDescriptionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PURPOSE])) {
            if (isset($type->purpose)) {
                $type->purpose->setValue((string)$attributes[self::FIELD_PURPOSE]);
                $type->_setPurposeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPurpose((string)$attributes[self::FIELD_PURPOSE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_USAGE])) {
            if (isset($type->usage)) {
                $type->usage->setValue((string)$attributes[self::FIELD_USAGE]);
                $type->_setUsageValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setUsage((string)$attributes[self::FIELD_USAGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_APPROVAL_DATE])) {
            if (isset($type->approvalDate)) {
                $type->approvalDate->setValue((string)$attributes[self::FIELD_APPROVAL_DATE]);
                $type->_setApprovalDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setApprovalDate((string)$attributes[self::FIELD_APPROVAL_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LAST_REVIEW_DATE])) {
            if (isset($type->lastReviewDate)) {
                $type->lastReviewDate->setValue((string)$attributes[self::FIELD_LAST_REVIEW_DATE]);
                $type->_setLastReviewDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLastReviewDate((string)$attributes[self::FIELD_LAST_REVIEW_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_COPYRIGHT])) {
            if (isset($type->copyright)) {
                $type->copyright->setValue((string)$attributes[self::FIELD_COPYRIGHT]);
                $type->_setCopyrightValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCopyright((string)$attributes[self::FIELD_COPYRIGHT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_KIND])) {
            if (isset($type->kind)) {
                $type->kind->setValue((string)$attributes[self::FIELD_KIND]);
                $type->_setKindValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setKind((string)$attributes[self::FIELD_KIND], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TIMING_DATE_TIME])) {
            if (isset($type->timingDateTime)) {
                $type->timingDateTime->setValue((string)$attributes[self::FIELD_TIMING_DATE_TIME]);
                $type->_setTimingDateTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setTimingDateTime((string)$attributes[self::FIELD_TIMING_DATE_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
            $xw->openRootNode('ActivityDefinition', $this->_getSourceXMLNS());
        }
        if (isset($this->url) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_URL]) {
            $xw->writeAttribute(self::FIELD_URL, $this->url->_getFormattedValue());
        }
        if (isset($this->version) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VERSION]) {
            $xw->writeAttribute(self::FIELD_VERSION, $this->version->_getFormattedValue());
        }
        if (isset($this->name) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NAME]) {
            $xw->writeAttribute(self::FIELD_NAME, $this->name->_getFormattedValue());
        }
        if (isset($this->title) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TITLE]) {
            $xw->writeAttribute(self::FIELD_TITLE, $this->title->_getFormattedValue());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getFormattedValue());
        }
        if (isset($this->experimental) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXPERIMENTAL]) {
            $xw->writeAttribute(self::FIELD_EXPERIMENTAL, $this->experimental->_getFormattedValue());
        }
        if (isset($this->date) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATE]) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->_getFormattedValue());
        }
        if (isset($this->publisher) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PUBLISHER]) {
            $xw->writeAttribute(self::FIELD_PUBLISHER, $this->publisher->_getFormattedValue());
        }
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getFormattedValue());
        }
        if (isset($this->purpose) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PURPOSE]) {
            $xw->writeAttribute(self::FIELD_PURPOSE, $this->purpose->_getFormattedValue());
        }
        if (isset($this->usage) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_USAGE]) {
            $xw->writeAttribute(self::FIELD_USAGE, $this->usage->_getFormattedValue());
        }
        if (isset($this->approvalDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_APPROVAL_DATE]) {
            $xw->writeAttribute(self::FIELD_APPROVAL_DATE, $this->approvalDate->_getFormattedValue());
        }
        if (isset($this->lastReviewDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LAST_REVIEW_DATE]) {
            $xw->writeAttribute(self::FIELD_LAST_REVIEW_DATE, $this->lastReviewDate->_getFormattedValue());
        }
        if (isset($this->copyright) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COPYRIGHT]) {
            $xw->writeAttribute(self::FIELD_COPYRIGHT, $this->copyright->_getFormattedValue());
        }
        if (isset($this->kind) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_KIND]) {
            $xw->writeAttribute(self::FIELD_KIND, $this->kind->_getFormattedValue());
        }
        if (isset($this->timingDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TIMING_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_TIMING_DATE_TIME, $this->timingDateTime->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->url)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_URL]
                || $this->url->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_URL);
            $this->url->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_URL]);
            $xw->endElement();
        }
        if (isset($this->identifier) && [] !== $this->identifier) {
            foreach($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
        if (isset($this->title)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TITLE]
                || $this->title->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TITLE);
            $this->title->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TITLE]);
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
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->purpose)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PURPOSE]
                || $this->purpose->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PURPOSE);
            $this->purpose->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PURPOSE]);
            $xw->endElement();
        }
        if (isset($this->usage)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_USAGE]
                || $this->usage->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_USAGE);
            $this->usage->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_USAGE]);
            $xw->endElement();
        }
        if (isset($this->approvalDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_APPROVAL_DATE]
                || $this->approvalDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_APPROVAL_DATE);
            $this->approvalDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_APPROVAL_DATE]);
            $xw->endElement();
        }
        if (isset($this->lastReviewDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LAST_REVIEW_DATE]
                || $this->lastReviewDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LAST_REVIEW_DATE);
            $this->lastReviewDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LAST_REVIEW_DATE]);
            $xw->endElement();
        }
        if (isset($this->effectivePeriod)) {
            $xw->startElement(self::FIELD_EFFECTIVE_PERIOD);
            $this->effectivePeriod->xmlSerialize($xw, $config);
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
        if (isset($this->topic)) {
            foreach ($this->topic as $v) {
                $xw->startElement(self::FIELD_TOPIC);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->contributor)) {
            foreach ($this->contributor as $v) {
                $xw->startElement(self::FIELD_CONTRIBUTOR);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->contact)) {
            foreach ($this->contact as $v) {
                $xw->startElement(self::FIELD_CONTACT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->copyright)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COPYRIGHT]
                || $this->copyright->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COPYRIGHT);
            $this->copyright->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COPYRIGHT]);
            $xw->endElement();
        }
        if (isset($this->relatedArtifact)) {
            foreach ($this->relatedArtifact as $v) {
                $xw->startElement(self::FIELD_RELATED_ARTIFACT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->library)) {
            foreach ($this->library as $v) {
                $xw->startElement(self::FIELD_LIBRARY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->kind)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_KIND]
                || $this->kind->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_KIND);
            $this->kind->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_KIND]);
            $xw->endElement();
        }
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->timingTiming)) {
            $xw->startElement(self::FIELD_TIMING_TIMING);
            $this->timingTiming->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->timingDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TIMING_DATE_TIME]
                || $this->timingDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TIMING_DATE_TIME);
            $this->timingDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TIMING_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->timingPeriod)) {
            $xw->startElement(self::FIELD_TIMING_PERIOD);
            $this->timingPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->timingRange)) {
            $xw->startElement(self::FIELD_TIMING_RANGE);
            $this->timingRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->location)) {
            $xw->startElement(self::FIELD_LOCATION);
            $this->location->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->participant)) {
            foreach ($this->participant as $v) {
                $xw->startElement(self::FIELD_PARTICIPANT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->productReference)) {
            $xw->startElement(self::FIELD_PRODUCT_REFERENCE);
            $this->productReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->productCodeableConcept)) {
            $xw->startElement(self::FIELD_PRODUCT_CODEABLE_CONCEPT);
            $this->productCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->quantity)) {
            $xw->startElement(self::FIELD_QUANTITY);
            $this->quantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dosage)) {
            foreach ($this->dosage as $v) {
                $xw->startElement(self::FIELD_DOSAGE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->bodySite)) {
            foreach ($this->bodySite as $v) {
                $xw->startElement(self::FIELD_BODY_SITE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->transform)) {
            $xw->startElement(self::FIELD_TRANSFORM);
            $this->transform->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dynamicValue)) {
            foreach ($this->dynamicValue as $v) {
                $xw->startElement(self::FIELD_DYNAMIC_VALUE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
     * @param string|\stdClass|array $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRActivityDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRActivityDefinition
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRActivityDefinition)) {
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_URL])
            || isset($json[self::FIELD_URL_EXT])
            || array_key_exists(self::FIELD_URL, $json)
            || array_key_exists(self::FIELD_URL_EXT, $json)) {
            $value = $json[self::FIELD_URL] ?? null;
            $type->setUrl(FHIRUri::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUri::FIELD_VALUE => $value]) + ($json[self::FIELD_URL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_IDENTIFIER])
            || isset($json[self::FIELD_IDENTIFIER_EXT])
            || array_key_exists(self::FIELD_IDENTIFIER, $json)
            || array_key_exists(self::FIELD_IDENTIFIER_EXT, $json)) {
            $value = (array)($json[self::FIELD_IDENTIFIER] ?? []);
            $ext = (array)($json[self::FIELD_IDENTIFIER_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize(
                    [FHIRIdentifier::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_VERSION])
            || isset($json[self::FIELD_VERSION_EXT])
            || array_key_exists(self::FIELD_VERSION, $json)
            || array_key_exists(self::FIELD_VERSION_EXT, $json)) {
            $value = $json[self::FIELD_VERSION] ?? null;
            $type->setVersion(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_VERSION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_NAME])
            || isset($json[self::FIELD_NAME_EXT])
            || array_key_exists(self::FIELD_NAME, $json)
            || array_key_exists(self::FIELD_NAME_EXT, $json)) {
            $value = $json[self::FIELD_NAME] ?? null;
            $type->setName(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_NAME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_TITLE])
            || isset($json[self::FIELD_TITLE_EXT])
            || array_key_exists(self::FIELD_TITLE, $json)
            || array_key_exists(self::FIELD_TITLE_EXT, $json)) {
            $value = $json[self::FIELD_TITLE] ?? null;
            $type->setTitle(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_TITLE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_STATUS])
            || isset($json[self::FIELD_STATUS_EXT])
            || array_key_exists(self::FIELD_STATUS, $json)
            || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $type->setStatus(FHIRPublicationStatus::jsonUnserialize(
                (is_array($value) ? $value : [FHIRPublicationStatus::FIELD_VALUE => $value]) + ($json[self::FIELD_STATUS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EXPERIMENTAL])
            || isset($json[self::FIELD_EXPERIMENTAL_EXT])
            || array_key_exists(self::FIELD_EXPERIMENTAL, $json)
            || array_key_exists(self::FIELD_EXPERIMENTAL_EXT, $json)) {
            $value = $json[self::FIELD_EXPERIMENTAL] ?? null;
            $type->setExperimental(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_EXPERIMENTAL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DATE])
            || isset($json[self::FIELD_DATE_EXT])
            || array_key_exists(self::FIELD_DATE, $json)
            || array_key_exists(self::FIELD_DATE_EXT, $json)) {
            $value = $json[self::FIELD_DATE] ?? null;
            $type->setDate(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PUBLISHER])
            || isset($json[self::FIELD_PUBLISHER_EXT])
            || array_key_exists(self::FIELD_PUBLISHER, $json)
            || array_key_exists(self::FIELD_PUBLISHER_EXT, $json)) {
            $value = $json[self::FIELD_PUBLISHER] ?? null;
            $type->setPublisher(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_PUBLISHER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DESCRIPTION])
            || isset($json[self::FIELD_DESCRIPTION_EXT])
            || array_key_exists(self::FIELD_DESCRIPTION, $json)
            || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $type->setDescription(FHIRMarkdown::jsonUnserialize(
                (is_array($value) ? $value : [FHIRMarkdown::FIELD_VALUE => $value]) + ($json[self::FIELD_DESCRIPTION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PURPOSE])
            || isset($json[self::FIELD_PURPOSE_EXT])
            || array_key_exists(self::FIELD_PURPOSE, $json)
            || array_key_exists(self::FIELD_PURPOSE_EXT, $json)) {
            $value = $json[self::FIELD_PURPOSE] ?? null;
            $type->setPurpose(FHIRMarkdown::jsonUnserialize(
                (is_array($value) ? $value : [FHIRMarkdown::FIELD_VALUE => $value]) + ($json[self::FIELD_PURPOSE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_USAGE])
            || isset($json[self::FIELD_USAGE_EXT])
            || array_key_exists(self::FIELD_USAGE, $json)
            || array_key_exists(self::FIELD_USAGE_EXT, $json)) {
            $value = $json[self::FIELD_USAGE] ?? null;
            $type->setUsage(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_USAGE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_APPROVAL_DATE])
            || isset($json[self::FIELD_APPROVAL_DATE_EXT])
            || array_key_exists(self::FIELD_APPROVAL_DATE, $json)
            || array_key_exists(self::FIELD_APPROVAL_DATE_EXT, $json)) {
            $value = $json[self::FIELD_APPROVAL_DATE] ?? null;
            $type->setApprovalDate(FHIRDate::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDate::FIELD_VALUE => $value]) + ($json[self::FIELD_APPROVAL_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_LAST_REVIEW_DATE])
            || isset($json[self::FIELD_LAST_REVIEW_DATE_EXT])
            || array_key_exists(self::FIELD_LAST_REVIEW_DATE, $json)
            || array_key_exists(self::FIELD_LAST_REVIEW_DATE_EXT, $json)) {
            $value = $json[self::FIELD_LAST_REVIEW_DATE] ?? null;
            $type->setLastReviewDate(FHIRDate::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDate::FIELD_VALUE => $value]) + ($json[self::FIELD_LAST_REVIEW_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EFFECTIVE_PERIOD]) || array_key_exists(self::FIELD_EFFECTIVE_PERIOD, $json)) {
            $type->setEffectivePeriod(FHIRPeriod::jsonUnserialize($json[self::FIELD_EFFECTIVE_PERIOD], $config));
        }
        if (isset($json[self::FIELD_USE_CONTEXT]) || array_key_exists(self::FIELD_USE_CONTEXT, $json)) {
            $vs = $json[self::FIELD_USE_CONTEXT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addUseContext(FHIRUsageContext::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_JURISDICTION]) || array_key_exists(self::FIELD_JURISDICTION, $json)) {
            $vs = $json[self::FIELD_JURISDICTION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addJurisdiction(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_TOPIC]) || array_key_exists(self::FIELD_TOPIC, $json)) {
            $vs = $json[self::FIELD_TOPIC];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addTopic(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_CONTRIBUTOR]) || array_key_exists(self::FIELD_CONTRIBUTOR, $json)) {
            $vs = $json[self::FIELD_CONTRIBUTOR];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addContributor(FHIRContributor::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_CONTACT]) || array_key_exists(self::FIELD_CONTACT, $json)) {
            $vs = $json[self::FIELD_CONTACT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addContact(FHIRContactDetail::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_COPYRIGHT])
            || isset($json[self::FIELD_COPYRIGHT_EXT])
            || array_key_exists(self::FIELD_COPYRIGHT, $json)
            || array_key_exists(self::FIELD_COPYRIGHT_EXT, $json)) {
            $value = $json[self::FIELD_COPYRIGHT] ?? null;
            $type->setCopyright(FHIRMarkdown::jsonUnserialize(
                (is_array($value) ? $value : [FHIRMarkdown::FIELD_VALUE => $value]) + ($json[self::FIELD_COPYRIGHT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_RELATED_ARTIFACT]) || array_key_exists(self::FIELD_RELATED_ARTIFACT, $json)) {
            $vs = $json[self::FIELD_RELATED_ARTIFACT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addRelatedArtifact(FHIRRelatedArtifact::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_LIBRARY]) || array_key_exists(self::FIELD_LIBRARY, $json)) {
            $vs = $json[self::FIELD_LIBRARY];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addLibrary(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_KIND])
            || isset($json[self::FIELD_KIND_EXT])
            || array_key_exists(self::FIELD_KIND, $json)
            || array_key_exists(self::FIELD_KIND_EXT, $json)) {
            $value = $json[self::FIELD_KIND] ?? null;
            $type->setKind(FHIRResourceType::jsonUnserialize(
                (is_array($value) ? $value : [FHIRResourceType::FIELD_VALUE => $value]) + ($json[self::FIELD_KIND_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            $type->setCode(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_CODE], $config));
        }
        if (isset($json[self::FIELD_TIMING_TIMING]) || array_key_exists(self::FIELD_TIMING_TIMING, $json)) {
            $type->setTimingTiming(FHIRTiming::jsonUnserialize($json[self::FIELD_TIMING_TIMING], $config));
        }
        if (isset($json[self::FIELD_TIMING_DATE_TIME])
            || isset($json[self::FIELD_TIMING_DATE_TIME_EXT])
            || array_key_exists(self::FIELD_TIMING_DATE_TIME, $json)
            || array_key_exists(self::FIELD_TIMING_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_TIMING_DATE_TIME] ?? null;
            $type->setTimingDateTime(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_TIMING_DATE_TIME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_TIMING_PERIOD]) || array_key_exists(self::FIELD_TIMING_PERIOD, $json)) {
            $type->setTimingPeriod(FHIRPeriod::jsonUnserialize($json[self::FIELD_TIMING_PERIOD], $config));
        }
        if (isset($json[self::FIELD_TIMING_RANGE]) || array_key_exists(self::FIELD_TIMING_RANGE, $json)) {
            $type->setTimingRange(FHIRRange::jsonUnserialize($json[self::FIELD_TIMING_RANGE], $config));
        }
        if (isset($json[self::FIELD_LOCATION]) || array_key_exists(self::FIELD_LOCATION, $json)) {
            $type->setLocation(FHIRReference::jsonUnserialize($json[self::FIELD_LOCATION], $config));
        }
        if (isset($json[self::FIELD_PARTICIPANT]) || array_key_exists(self::FIELD_PARTICIPANT, $json)) {
            $vs = $json[self::FIELD_PARTICIPANT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addParticipant(FHIRActivityDefinitionParticipant::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PRODUCT_REFERENCE]) || array_key_exists(self::FIELD_PRODUCT_REFERENCE, $json)) {
            $type->setProductReference(FHIRReference::jsonUnserialize($json[self::FIELD_PRODUCT_REFERENCE], $config));
        }
        if (isset($json[self::FIELD_PRODUCT_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_PRODUCT_CODEABLE_CONCEPT, $json)) {
            $type->setProductCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_PRODUCT_CODEABLE_CONCEPT], $config));
        }
        if (isset($json[self::FIELD_QUANTITY]) || array_key_exists(self::FIELD_QUANTITY, $json)) {
            $type->setQuantity(FHIRQuantity::jsonUnserialize($json[self::FIELD_QUANTITY], $config));
        }
        if (isset($json[self::FIELD_DOSAGE]) || array_key_exists(self::FIELD_DOSAGE, $json)) {
            $vs = $json[self::FIELD_DOSAGE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addDosage(FHIRDosage::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_BODY_SITE]) || array_key_exists(self::FIELD_BODY_SITE, $json)) {
            $vs = $json[self::FIELD_BODY_SITE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addBodySite(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_TRANSFORM]) || array_key_exists(self::FIELD_TRANSFORM, $json)) {
            $type->setTransform(FHIRReference::jsonUnserialize($json[self::FIELD_TRANSFORM], $config));
        }
        if (isset($json[self::FIELD_DYNAMIC_VALUE]) || array_key_exists(self::FIELD_DYNAMIC_VALUE, $json)) {
            $vs = $json[self::FIELD_DYNAMIC_VALUE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addDynamicValue(FHIRActivityDefinitionDynamicValue::jsonUnserialize($v, $config));
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
        if (isset($this->identifier) && [] !== $this->identifier) {
            $vals = [];
            $exts = [];
            foreach ($this->identifier as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->identifier = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_identifier = $exts;
            }
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
        if (isset($this->title)) {
            if (null !== ($val = $this->title->getValue())) {
                $out->title = $val;
            }
            $ext = $this->title->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_title = $ext;
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
        if (isset($this->purpose)) {
            if (null !== ($val = $this->purpose->getValue())) {
                $out->purpose = $val;
            }
            $ext = $this->purpose->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_purpose = $ext;
            }
        }
        if (isset($this->usage)) {
            if (null !== ($val = $this->usage->getValue())) {
                $out->usage = $val;
            }
            $ext = $this->usage->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_usage = $ext;
            }
        }
        if (isset($this->approvalDate)) {
            if (null !== ($val = $this->approvalDate->getValue())) {
                $out->approvalDate = $val;
            }
            $ext = $this->approvalDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_approvalDate = $ext;
            }
        }
        if (isset($this->lastReviewDate)) {
            if (null !== ($val = $this->lastReviewDate->getValue())) {
                $out->lastReviewDate = $val;
            }
            $ext = $this->lastReviewDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_lastReviewDate = $ext;
            }
        }
        if (isset($this->effectivePeriod)) {
            $out->effectivePeriod = $this->effectivePeriod;
        }
        if (isset($this->useContext) && [] !== $this->useContext) {
            $out->useContext = $this->useContext;
        }
        if (isset($this->jurisdiction) && [] !== $this->jurisdiction) {
            $out->jurisdiction = $this->jurisdiction;
        }
        if (isset($this->topic) && [] !== $this->topic) {
            $out->topic = $this->topic;
        }
        if (isset($this->contributor) && [] !== $this->contributor) {
            $out->contributor = $this->contributor;
        }
        if (isset($this->contact) && [] !== $this->contact) {
            $out->contact = $this->contact;
        }
        if (isset($this->copyright)) {
            if (null !== ($val = $this->copyright->getValue())) {
                $out->copyright = $val;
            }
            $ext = $this->copyright->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_copyright = $ext;
            }
        }
        if (isset($this->relatedArtifact) && [] !== $this->relatedArtifact) {
            $out->relatedArtifact = $this->relatedArtifact;
        }
        if (isset($this->library) && [] !== $this->library) {
            $out->library = $this->library;
        }
        if (isset($this->kind)) {
            if (null !== ($val = $this->kind->getValue())) {
                $out->kind = $val;
            }
            $ext = $this->kind->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_kind = $ext;
            }
        }
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->timingTiming)) {
            $out->timingTiming = $this->timingTiming;
        }
        if (isset($this->timingDateTime)) {
            if (null !== ($val = $this->timingDateTime->getValue())) {
                $out->timingDateTime = $val;
            }
            $ext = $this->timingDateTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_timingDateTime = $ext;
            }
        }
        if (isset($this->timingPeriod)) {
            $out->timingPeriod = $this->timingPeriod;
        }
        if (isset($this->timingRange)) {
            $out->timingRange = $this->timingRange;
        }
        if (isset($this->location)) {
            $out->location = $this->location;
        }
        if (isset($this->participant) && [] !== $this->participant) {
            $out->participant = $this->participant;
        }
        if (isset($this->productReference)) {
            $out->productReference = $this->productReference;
        }
        if (isset($this->productCodeableConcept)) {
            $out->productCodeableConcept = $this->productCodeableConcept;
        }
        if (isset($this->quantity)) {
            $out->quantity = $this->quantity;
        }
        if (isset($this->dosage) && [] !== $this->dosage) {
            $out->dosage = $this->dosage;
        }
        if (isset($this->bodySite) && [] !== $this->bodySite) {
            $out->bodySite = $this->bodySite;
        }
        if (isset($this->transform)) {
            $out->transform = $this->transform;
        }
        if (isset($this->dynamicValue) && [] !== $this->dynamicValue) {
            $out->dynamicValue = $this->dynamicValue;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
    /* class_default.php:238 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}