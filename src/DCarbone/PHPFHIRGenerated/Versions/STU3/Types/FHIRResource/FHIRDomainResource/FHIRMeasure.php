<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContributor;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRelatedArtifact;
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
 * The Measure resource provides the definition of a quality measure.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRMeasure extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEASURE;


    public const FIELD_URL = 'url';
    public const FIELD_URL_EXT = '_url';
    public const FIELD_IDENTIFIER = 'identifier';
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
    public const FIELD_DISCLAIMER = 'disclaimer';
    public const FIELD_DISCLAIMER_EXT = '_disclaimer';
    public const FIELD_SCORING = 'scoring';
    public const FIELD_COMPOSITE_SCORING = 'compositeScoring';
    public const FIELD_TYPE = 'type';
    public const FIELD_RISK_ADJUSTMENT = 'riskAdjustment';
    public const FIELD_RISK_ADJUSTMENT_EXT = '_riskAdjustment';
    public const FIELD_RATE_AGGREGATION = 'rateAggregation';
    public const FIELD_RATE_AGGREGATION_EXT = '_rateAggregation';
    public const FIELD_RATIONALE = 'rationale';
    public const FIELD_RATIONALE_EXT = '_rationale';
    public const FIELD_CLINICAL_RECOMMENDATION_STATEMENT = 'clinicalRecommendationStatement';
    public const FIELD_CLINICAL_RECOMMENDATION_STATEMENT_EXT = '_clinicalRecommendationStatement';
    public const FIELD_IMPROVEMENT_NOTATION = 'improvementNotation';
    public const FIELD_IMPROVEMENT_NOTATION_EXT = '_improvementNotation';
    public const FIELD_DEFINITION = 'definition';
    public const FIELD_DEFINITION_EXT = '_definition';
    public const FIELD_GUIDANCE = 'guidance';
    public const FIELD_GUIDANCE_EXT = '_guidance';
    public const FIELD_SET = 'set';
    public const FIELD_SET_EXT = '_set';
    public const FIELD_GROUP = 'group';
    public const FIELD_SUPPLEMENTAL_DATA = 'supplementalData';

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this measure when it is referenced in a
     * specification, model, design or an instance. This SHALL be a URL, SHOULD be
     * globally unique, and SHOULD be an address at which this measure is (or will be)
     * published. The URL SHOULD include the major version of the measure. For more
     * information see [Technical and Business Versions](resource.html#versions).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $url;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this measure when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the measure when it is
     * referenced in a specification, model, design or instance. This is an arbitrary
     * value managed by the measure author and is not expected to be globally unique.
     * For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not
     * available. There is also no expectation that versions can be placed in a
     * lexicographical sequence. To provide a version consistent with the Decision
     * Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0).
     * For more information on versioning knowledge assets, refer to the Decision
     * Support Service specification. Note that a version is required for
     * non-experimental active artifacts.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $version;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the measure. This name should be usable as
     * an identifier for the module by machine processing applications such as code
     * generation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $name;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the measure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $title;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this measure. Enables tracking the life-cycle of the content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPublicationStatus 
     */
    protected FHIRPublicationStatus $status;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A boolean value to indicate that this measure is authored for testing purposes
     * (or education/evaluation/marketing), and is not intended to be used for genuine
     * usage.
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
     * The date (and optionally time) when the measure was published. The date must
     * change if and when the business version changes and it must change if the status
     * code changes. In addition, it should change when the substantive content of the
     * measure changes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $date;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the measure.
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
     * A free text natural language description of the measure from a consumer's
     * perspective.
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
     * Explaination of why this measure is needed and why it has been designed as it
     * has.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $purpose;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A detailed description of how the measure is used from a clinical perspective.
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
     * The period during which the measure content was or is planned to be in active
     * use.
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
     * for appropriate measure instances.
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
     * A legal or geographic region in which the measure is intended to be used.
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
     * Descriptive topics related to the content of the measure. Topics provide a
     * high-level categorization of the type of the measure that can be useful for
     * filtering and searching.
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
     * A contributor to the content of the measure, including authors, editors,
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
     * A copyright statement relating to the measure and/or its contents. Copyright
     * statements are generally legal restrictions on the use and publishing of the
     * measure.
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
     * A reference to a Library resource containing the formal logic used by the
     * measure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] 
     */
    protected array $library;
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
     * Notices and disclaimers regarding the use of the measure, or related to
     * intellectual property (such as code systems) referenced by the measure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $disclaimer;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how the calculation is performed for the measure, including
     * proportion, ratio, continuous variable, and cohort. The value set is extensible,
     * allowing additional measure scoring types to be represented.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $scoring;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this is a composite measure, the scoring method used to combine the component
     * measures to determine the composite score.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $compositeScoring;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates whether the measure is used to examine a process, an outcome over
     * time, a patient-reported outcome, or a structure measure such as utilization.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $type;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the risk adjustment factors that may impact the resulting score
     * for the measure and how they may be accounted for when computing and reporting
     * measure results.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $riskAdjustment;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes how to combine the information calculated, based on logic in each of
     * several populations, into one summarized result.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $rateAggregation;
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
     * Provides a succint statement of the need for the measure. Usually includes
     * statements pertaining to importance criterion: impact, gap in care, and
     * evidence.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $rationale;
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
     * Provides a summary of relevant clinical guidelines or other clinical
     * recommendations supporting the measure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $clinicalRecommendationStatement;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Information on whether an increase or decrease in score is the preferred result
     * (e.g., a higher score indicates better quality OR a lower score indicates better
     * quality OR quality is whthin a range).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $improvementNotation;
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
     * Provides a description of an individual term used within the measure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown[] 
     */
    protected array $definition;
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
     * Additional guidance for the measure including how it can be used in a clinical
     * context, and the intent of the measure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $guidance;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The measure set, e.g. Preventive Care and Screening.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $set;
    /**
     * The Measure resource provides the definition of a quality measure.
     *
     * A group of population criteria for the measure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup[] 
     */
    protected array $group;
    /**
     * The Measure resource provides the definition of a quality measure.
     *
     * The supplemental data criteria for the measure report, specified as either the
     * name of a valid CQL expression within a referenced library, or a valid FHIR
     * Resource Path.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData[] 
     */
    protected array $supplementalData;

    /** Default validation map for fields in type Measure */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRMeasure Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $url
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $version
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $name
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $title
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPublicationStatus $status
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $disclaimer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $scoring
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $compositeScoring
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $riskAdjustment
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $rateAggregation
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $rationale
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $clinicalRecommendationStatement
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $improvementNotation
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown[] $definition
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $guidance
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $set
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup[] $group
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData[] $supplementalData
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
                                null|FHIRPublicationStatus $status = null,
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
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $disclaimer = null,
                                null|FHIRCodeableConcept $scoring = null,
                                null|FHIRCodeableConcept $compositeScoring = null,
                                null|iterable $type = null,
                                null|string|FHIRStringPrimitive|FHIRString $riskAdjustment = null,
                                null|string|FHIRStringPrimitive|FHIRString $rateAggregation = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $rationale = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $clinicalRecommendationStatement = null,
                                null|string|FHIRStringPrimitive|FHIRString $improvementNotation = null,
                                null|iterable $definition = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $guidance = null,
                                null|string|FHIRStringPrimitive|FHIRString $set = null,
                                null|iterable $group = null,
                                null|iterable $supplementalData = null,
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
        if (null !== $disclaimer) {
            $this->setDisclaimer($disclaimer);
        }
        if (null !== $scoring) {
            $this->setScoring($scoring);
        }
        if (null !== $compositeScoring) {
            $this->setCompositeScoring($compositeScoring);
        }
        if (null !== $type) {
            $this->setType(...$type);
        }
        if (null !== $riskAdjustment) {
            $this->setRiskAdjustment($riskAdjustment);
        }
        if (null !== $rateAggregation) {
            $this->setRateAggregation($rateAggregation);
        }
        if (null !== $rationale) {
            $this->setRationale($rationale);
        }
        if (null !== $clinicalRecommendationStatement) {
            $this->setClinicalRecommendationStatement($clinicalRecommendationStatement);
        }
        if (null !== $improvementNotation) {
            $this->setImprovementNotation($improvementNotation);
        }
        if (null !== $definition) {
            $this->setDefinition(...$definition);
        }
        if (null !== $guidance) {
            $this->setGuidance($guidance);
        }
        if (null !== $set) {
            $this->setSet($set);
        }
        if (null !== $group) {
            $this->setGroup(...$group);
        }
        if (null !== $supplementalData) {
            $this->setSupplementalData(...$supplementalData);
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
     * An absolute URI that is used to identify this measure when it is referenced in a
     * specification, model, design or an instance. This SHALL be a URL, SHOULD be
     * globally unique, and SHOULD be an address at which this measure is (or will be)
     * published. The URL SHOULD include the major version of the measure. For more
     * information see [Technical and Business Versions](resource.html#versions).
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
     * An absolute URI that is used to identify this measure when it is referenced in a
     * specification, model, design or an instance. This SHALL be a URL, SHOULD be
     * globally unique, and SHOULD be an address at which this measure is (or will be)
     * published. The URL SHOULD include the major version of the measure. For more
     * information see [Technical and Business Versions](resource.html#versions).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $url
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setUrl(null|string|FHIRUriPrimitive|FHIRUri $url,
                           null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $url) {
            unset($this->url);
            return $this;
        }
        if (!($url instanceof FHIRUri)) {
            $url = new FHIRUri(value: $url);
        }
        if (null !== $valueXMLLocation) {
            $url->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $url->_getValueXMLLocation()) {
            $url->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->url = $url;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this measure when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance.
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
        if (!isset($this->identifier) || [] === $this->identifier) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this measure when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier): self
    {
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
     * A formal identifier that is used to identify this measure when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the measure when it is
     * referenced in a specification, model, design or instance. This is an arbitrary
     * value managed by the measure author and is not expected to be globally unique.
     * For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not
     * available. There is also no expectation that versions can be placed in a
     * lexicographical sequence. To provide a version consistent with the Decision
     * Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0).
     * For more information on versioning knowledge assets, refer to the Decision
     * Support Service specification. Note that a version is required for
     * non-experimental active artifacts.
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
     * The identifier that is used to identify this version of the measure when it is
     * referenced in a specification, model, design or instance. This is an arbitrary
     * value managed by the measure author and is not expected to be globally unique.
     * For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not
     * available. There is also no expectation that versions can be placed in a
     * lexicographical sequence. To provide a version consistent with the Decision
     * Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0).
     * For more information on versioning knowledge assets, refer to the Decision
     * Support Service specification. Note that a version is required for
     * non-experimental active artifacts.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $version
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setVersion(null|string|FHIRStringPrimitive|FHIRString $version,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $version) {
            unset($this->version);
            return $this;
        }
        if (!($version instanceof FHIRString)) {
            $version = new FHIRString(value: $version);
        }
        if (null !== $valueXMLLocation) {
            $version->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $version->_getValueXMLLocation()) {
            $version->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->version = $version;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the measure. This name should be usable as
     * an identifier for the module by machine processing applications such as code
     * generation.
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
     * A natural language name identifying the measure. This name should be usable as
     * an identifier for the module by machine processing applications such as code
     * generation.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $name
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $name) {
            unset($this->name);
            return $this;
        }
        if (!($name instanceof FHIRString)) {
            $name = new FHIRString(value: $name);
        }
        if (null !== $valueXMLLocation) {
            $name->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $name->_getValueXMLLocation()) {
            $name->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the measure.
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
     * A short, descriptive, user-friendly title for the measure.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $title
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTitle(null|string|FHIRStringPrimitive|FHIRString $title,
                             null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $title) {
            unset($this->title);
            return $this;
        }
        if (!($title instanceof FHIRString)) {
            $title = new FHIRString(value: $title);
        }
        if (null !== $valueXMLLocation) {
            $title->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $title->_getValueXMLLocation()) {
            $title->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->title = $title;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this measure. Enables tracking the life-cycle of the content.
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
     * The status of this measure. Enables tracking the life-cycle of the content.
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
     * A boolean value to indicate that this measure is authored for testing purposes
     * (or education/evaluation/marketing), and is not intended to be used for genuine
     * usage.
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
     * A boolean value to indicate that this measure is authored for testing purposes
     * (or education/evaluation/marketing), and is not intended to be used for genuine
     * usage.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $experimental
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExperimental(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $experimental,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $experimental) {
            unset($this->experimental);
            return $this;
        }
        if (!($experimental instanceof FHIRBoolean)) {
            $experimental = new FHIRBoolean(value: $experimental);
        }
        if (null !== $valueXMLLocation) {
            $experimental->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $experimental->_getValueXMLLocation()) {
            $experimental->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
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
     * The date (and optionally time) when the measure was published. The date must
     * change if and when the business version changes and it must change if the status
     * code changes. In addition, it should change when the substantive content of the
     * measure changes.
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
     * The date (and optionally time) when the measure was published. The date must
     * change if and when the business version changes and it must change if the status
     * code changes. In addition, it should change when the substantive content of the
     * measure changes.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $date
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $date) {
            unset($this->date);
            return $this;
        }
        if (!($date instanceof FHIRDateTime)) {
            $date = new FHIRDateTime(value: $date);
        }
        if (null !== $valueXMLLocation) {
            $date->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $date->_getValueXMLLocation()) {
            $date->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->date = $date;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the measure.
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
     * The name of the individual or organization that published the measure.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $publisher
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPublisher(null|string|FHIRStringPrimitive|FHIRString $publisher,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $publisher) {
            unset($this->publisher);
            return $this;
        }
        if (!($publisher instanceof FHIRString)) {
            $publisher = new FHIRString(value: $publisher);
        }
        if (null !== $valueXMLLocation) {
            $publisher->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $publisher->_getValueXMLLocation()) {
            $publisher->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->publisher = $publisher;
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
     * A free text natural language description of the measure from a consumer's
     * perspective.
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
     * A free text natural language description of the measure from a consumer's
     * perspective.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $description
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown(value: $description);
        }
        if (null !== $valueXMLLocation) {
            $description->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $description->_getValueXMLLocation()) {
            $description->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->description = $description;
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
     * Explaination of why this measure is needed and why it has been designed as it
     * has.
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
     * Explaination of why this measure is needed and why it has been designed as it
     * has.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $purpose
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPurpose(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $purpose,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $purpose) {
            unset($this->purpose);
            return $this;
        }
        if (!($purpose instanceof FHIRMarkdown)) {
            $purpose = new FHIRMarkdown(value: $purpose);
        }
        if (null !== $valueXMLLocation) {
            $purpose->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $purpose->_getValueXMLLocation()) {
            $purpose->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A detailed description of how the measure is used from a clinical perspective.
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
     * A detailed description of how the measure is used from a clinical perspective.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $usage
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setUsage(null|string|FHIRStringPrimitive|FHIRString $usage,
                             null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $usage) {
            unset($this->usage);
            return $this;
        }
        if (!($usage instanceof FHIRString)) {
            $usage = new FHIRString(value: $usage);
        }
        if (null !== $valueXMLLocation) {
            $usage->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $usage->_getValueXMLLocation()) {
            $usage->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->usage = $usage;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setApprovalDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $approvalDate,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $approvalDate) {
            unset($this->approvalDate);
            return $this;
        }
        if (!($approvalDate instanceof FHIRDate)) {
            $approvalDate = new FHIRDate(value: $approvalDate);
        }
        if (null !== $valueXMLLocation) {
            $approvalDate->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $approvalDate->_getValueXMLLocation()) {
            $approvalDate->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->approvalDate = $approvalDate;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLastReviewDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $lastReviewDate,
                                      null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $lastReviewDate) {
            unset($this->lastReviewDate);
            return $this;
        }
        if (!($lastReviewDate instanceof FHIRDate)) {
            $lastReviewDate = new FHIRDate(value: $lastReviewDate);
        }
        if (null !== $valueXMLLocation) {
            $lastReviewDate->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $lastReviewDate->_getValueXMLLocation()) {
            $lastReviewDate->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->lastReviewDate = $lastReviewDate;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the measure content was or is planned to be in active
     * use.
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
     * The period during which the measure content was or is planned to be in active
     * use.
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
     * for appropriate measure instances.
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
     * for appropriate measure instances.
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
     * for appropriate measure instances.
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
     * A legal or geographic region in which the measure is intended to be used.
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
     * A legal or geographic region in which the measure is intended to be used.
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
     * A legal or geographic region in which the measure is intended to be used.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive topics related to the content of the measure. Topics provide a
     * high-level categorization of the type of the measure that can be useful for
     * filtering and searching.
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
        if (!isset($this->topic) || [] === $this->topic) {
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
     * Descriptive topics related to the content of the measure. Topics provide a
     * high-level categorization of the type of the measure that can be useful for
     * filtering and searching.
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
     * Descriptive topics related to the content of the measure. Topics provide a
     * high-level categorization of the type of the measure that can be useful for
     * filtering and searching.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept ...$topic
     * @return static
     */
    public function setTopic(FHIRCodeableConcept ...$topic): self
    {
        $this->topic = $topic;
        return $this;
    }

    /**
     * A contributor to the content of a knowledge asset, including authors, editors,
     * reviewers, and endorsers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A contributor to the content of the measure, including authors, editors,
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
        if (!isset($this->contributor) || [] === $this->contributor) {
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
     * A contributor to the content of the measure, including authors, editors,
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
     * A contributor to the content of the measure, including authors, editors,
     * reviewers, and endorsers.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContributor ...$contributor
     * @return static
     */
    public function setContributor(FHIRContributor ...$contributor): self
    {
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
     * A copyright statement relating to the measure and/or its contents. Copyright
     * statements are generally legal restrictions on the use and publishing of the
     * measure.
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
     * A copyright statement relating to the measure and/or its contents. Copyright
     * statements are generally legal restrictions on the use and publishing of the
     * measure.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $copyright
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCopyright(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $copyright,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $copyright) {
            unset($this->copyright);
            return $this;
        }
        if (!($copyright instanceof FHIRMarkdown)) {
            $copyright = new FHIRMarkdown(value: $copyright);
        }
        if (null !== $valueXMLLocation) {
            $copyright->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $copyright->_getValueXMLLocation()) {
            $copyright->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->copyright = $copyright;
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
        if (!isset($this->relatedArtifact) || [] === $this->relatedArtifact) {
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
        $this->relatedArtifact = $relatedArtifact;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a Library resource containing the formal logic used by the
     * measure.
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
        if (!isset($this->library) || [] === $this->library) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->library);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a Library resource containing the formal logic used by the
     * measure.
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
     * A reference to a Library resource containing the formal logic used by the
     * measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference ...$library
     * @return static
     */
    public function setLibrary(FHIRReference ...$library): self
    {
        $this->library = $library;
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
     * Notices and disclaimers regarding the use of the measure, or related to
     * intellectual property (such as code systems) referenced by the measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown
     */
    public function getDisclaimer(): null|FHIRMarkdown
    {
        return $this->disclaimer ?? null;
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
     * Notices and disclaimers regarding the use of the measure, or related to
     * intellectual property (such as code systems) referenced by the measure.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $disclaimer
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDisclaimer(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $disclaimer,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $disclaimer) {
            unset($this->disclaimer);
            return $this;
        }
        if (!($disclaimer instanceof FHIRMarkdown)) {
            $disclaimer = new FHIRMarkdown(value: $disclaimer);
        }
        if (null !== $valueXMLLocation) {
            $disclaimer->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $disclaimer->_getValueXMLLocation()) {
            $disclaimer->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->disclaimer = $disclaimer;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how the calculation is performed for the measure, including
     * proportion, ratio, continuous variable, and cohort. The value set is extensible,
     * allowing additional measure scoring types to be represented.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getScoring(): null|FHIRCodeableConcept
    {
        return $this->scoring ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how the calculation is performed for the measure, including
     * proportion, ratio, continuous variable, and cohort. The value set is extensible,
     * allowing additional measure scoring types to be represented.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $scoring
     * @return static
     */
    public function setScoring(null|FHIRCodeableConcept $scoring): self
    {
        if (null === $scoring) {
            unset($this->scoring);
            return $this;
        }
        $this->scoring = $scoring;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this is a composite measure, the scoring method used to combine the component
     * measures to determine the composite score.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCompositeScoring(): null|FHIRCodeableConcept
    {
        return $this->compositeScoring ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this is a composite measure, the scoring method used to combine the component
     * measures to determine the composite score.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $compositeScoring
     * @return static
     */
    public function setCompositeScoring(null|FHIRCodeableConcept $compositeScoring): self
    {
        if (null === $compositeScoring) {
            unset($this->compositeScoring);
            return $this;
        }
        $this->compositeScoring = $compositeScoring;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates whether the measure is used to examine a process, an outcome over
     * time, a patient-reported outcome, or a structure measure such as utilization.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType(): array
    {
        return $this->type ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getTypeIterator(): iterable
    {
        if (!isset($this->type) || [] === $this->type) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->type);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates whether the measure is used to examine a process, an outcome over
     * time, a patient-reported outcome, or a structure measure such as utilization.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function addType(FHIRCodeableConcept $type): self
    {
        if (!isset($this->type)) {
            $this->type = [];
        }
        $this->type[] = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates whether the measure is used to examine a process, an outcome over
     * time, a patient-reported outcome, or a structure measure such as utilization.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept ...$type
     * @return static
     */
    public function setType(FHIRCodeableConcept ...$type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the risk adjustment factors that may impact the resulting score
     * for the measure and how they may be accounted for when computing and reporting
     * measure results.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getRiskAdjustment(): null|FHIRString
    {
        return $this->riskAdjustment ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the risk adjustment factors that may impact the resulting score
     * for the measure and how they may be accounted for when computing and reporting
     * measure results.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $riskAdjustment
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRiskAdjustment(null|string|FHIRStringPrimitive|FHIRString $riskAdjustment,
                                      null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $riskAdjustment) {
            unset($this->riskAdjustment);
            return $this;
        }
        if (!($riskAdjustment instanceof FHIRString)) {
            $riskAdjustment = new FHIRString(value: $riskAdjustment);
        }
        if (null !== $valueXMLLocation) {
            $riskAdjustment->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $riskAdjustment->_getValueXMLLocation()) {
            $riskAdjustment->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->riskAdjustment = $riskAdjustment;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes how to combine the information calculated, based on logic in each of
     * several populations, into one summarized result.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getRateAggregation(): null|FHIRString
    {
        return $this->rateAggregation ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes how to combine the information calculated, based on logic in each of
     * several populations, into one summarized result.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $rateAggregation
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRateAggregation(null|string|FHIRStringPrimitive|FHIRString $rateAggregation,
                                       null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $rateAggregation) {
            unset($this->rateAggregation);
            return $this;
        }
        if (!($rateAggregation instanceof FHIRString)) {
            $rateAggregation = new FHIRString(value: $rateAggregation);
        }
        if (null !== $valueXMLLocation) {
            $rateAggregation->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $rateAggregation->_getValueXMLLocation()) {
            $rateAggregation->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->rateAggregation = $rateAggregation;
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
     * Provides a succint statement of the need for the measure. Usually includes
     * statements pertaining to importance criterion: impact, gap in care, and
     * evidence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown
     */
    public function getRationale(): null|FHIRMarkdown
    {
        return $this->rationale ?? null;
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
     * Provides a succint statement of the need for the measure. Usually includes
     * statements pertaining to importance criterion: impact, gap in care, and
     * evidence.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $rationale
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRationale(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $rationale,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $rationale) {
            unset($this->rationale);
            return $this;
        }
        if (!($rationale instanceof FHIRMarkdown)) {
            $rationale = new FHIRMarkdown(value: $rationale);
        }
        if (null !== $valueXMLLocation) {
            $rationale->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $rationale->_getValueXMLLocation()) {
            $rationale->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->rationale = $rationale;
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
     * Provides a summary of relevant clinical guidelines or other clinical
     * recommendations supporting the measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown
     */
    public function getClinicalRecommendationStatement(): null|FHIRMarkdown
    {
        return $this->clinicalRecommendationStatement ?? null;
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
     * Provides a summary of relevant clinical guidelines or other clinical
     * recommendations supporting the measure.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $clinicalRecommendationStatement
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setClinicalRecommendationStatement(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $clinicalRecommendationStatement,
                                                       null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $clinicalRecommendationStatement) {
            unset($this->clinicalRecommendationStatement);
            return $this;
        }
        if (!($clinicalRecommendationStatement instanceof FHIRMarkdown)) {
            $clinicalRecommendationStatement = new FHIRMarkdown(value: $clinicalRecommendationStatement);
        }
        if (null !== $valueXMLLocation) {
            $clinicalRecommendationStatement->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $clinicalRecommendationStatement->_getValueXMLLocation()) {
            $clinicalRecommendationStatement->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->clinicalRecommendationStatement = $clinicalRecommendationStatement;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Information on whether an increase or decrease in score is the preferred result
     * (e.g., a higher score indicates better quality OR a lower score indicates better
     * quality OR quality is whthin a range).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getImprovementNotation(): null|FHIRString
    {
        return $this->improvementNotation ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Information on whether an increase or decrease in score is the preferred result
     * (e.g., a higher score indicates better quality OR a lower score indicates better
     * quality OR quality is whthin a range).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $improvementNotation
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setImprovementNotation(null|string|FHIRStringPrimitive|FHIRString $improvementNotation,
                                           null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $improvementNotation) {
            unset($this->improvementNotation);
            return $this;
        }
        if (!($improvementNotation instanceof FHIRString)) {
            $improvementNotation = new FHIRString(value: $improvementNotation);
        }
        if (null !== $valueXMLLocation) {
            $improvementNotation->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $improvementNotation->_getValueXMLLocation()) {
            $improvementNotation->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->improvementNotation = $improvementNotation;
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
     * Provides a description of an individual term used within the measure.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown[]
     */
    public function getDefinition(): array
    {
        return $this->definition ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown>
     */
    public function getDefinitionIterator(): iterable
    {
        if (!isset($this->definition) || [] === $this->definition) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->definition);
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
     * Provides a description of an individual term used within the measure.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $definition
     * @return static
     */
    public function addDefinition(string|FHIRMarkdownPrimitive|FHIRMarkdown $definition): self
    {
        if (!($definition instanceof FHIRMarkdown)) {
            $definition = new FHIRMarkdown(value: $definition);
        }
        if (!isset($this->definition)) {
            $this->definition = [];
        }
        $this->definition[] = $definition;
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
     * Provides a description of an individual term used within the measure.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown ...$definition
     * @return static
     */
    public function setDefinition(string|FHIRMarkdownPrimitive|FHIRMarkdown ...$definition): self
    {
        $this->definition = [];
        foreach($definition as $v) {
            if ($v instanceof FHIRMarkdown) {
                $this->definition[] = $v;
            } else {
                $this->definition[] = new FHIRMarkdown(value: $v);
            }
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
     * Additional guidance for the measure including how it can be used in a clinical
     * context, and the intent of the measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown
     */
    public function getGuidance(): null|FHIRMarkdown
    {
        return $this->guidance ?? null;
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
     * Additional guidance for the measure including how it can be used in a clinical
     * context, and the intent of the measure.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $guidance
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setGuidance(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $guidance,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $guidance) {
            unset($this->guidance);
            return $this;
        }
        if (!($guidance instanceof FHIRMarkdown)) {
            $guidance = new FHIRMarkdown(value: $guidance);
        }
        if (null !== $valueXMLLocation) {
            $guidance->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $guidance->_getValueXMLLocation()) {
            $guidance->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->guidance = $guidance;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The measure set, e.g. Preventive Care and Screening.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getSet(): null|FHIRString
    {
        return $this->set ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The measure set, e.g. Preventive Care and Screening.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $set
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSet(null|string|FHIRStringPrimitive|FHIRString $set,
                           null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $set) {
            unset($this->set);
            return $this;
        }
        if (!($set instanceof FHIRString)) {
            $set = new FHIRString(value: $set);
        }
        if (null !== $valueXMLLocation) {
            $set->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $set->_getValueXMLLocation()) {
            $set->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->set = $set;
        return $this;
    }

    /**
     * The Measure resource provides the definition of a quality measure.
     *
     * A group of population criteria for the measure.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup[]
     */
    public function getGroup(): array
    {
        return $this->group ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup>
     */
    public function getGroupIterator(): iterable
    {
        if (!isset($this->group) || [] === $this->group) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->group);
    }

    /**
     * The Measure resource provides the definition of a quality measure.
     *
     * A group of population criteria for the measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup $group
     * @return static
     */
    public function addGroup(FHIRMeasureGroup $group): self
    {
        if (!isset($this->group)) {
            $this->group = [];
        }
        $this->group[] = $group;
        return $this;
    }

    /**
     * The Measure resource provides the definition of a quality measure.
     *
     * A group of population criteria for the measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup ...$group
     * @return static
     */
    public function setGroup(FHIRMeasureGroup ...$group): self
    {
        $this->group = $group;
        return $this;
    }

    /**
     * The Measure resource provides the definition of a quality measure.
     *
     * The supplemental data criteria for the measure report, specified as either the
     * name of a valid CQL expression within a referenced library, or a valid FHIR
     * Resource Path.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData[]
     */
    public function getSupplementalData(): array
    {
        return $this->supplementalData ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData>
     */
    public function getSupplementalDataIterator(): iterable
    {
        if (!isset($this->supplementalData) || [] === $this->supplementalData) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->supplementalData);
    }

    /**
     * The Measure resource provides the definition of a quality measure.
     *
     * The supplemental data criteria for the measure report, specified as either the
     * name of a valid CQL expression within a referenced library, or a valid FHIR
     * Resource Path.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData $supplementalData
     * @return static
     */
    public function addSupplementalData(FHIRMeasureSupplementalData $supplementalData): self
    {
        if (!isset($this->supplementalData)) {
            $this->supplementalData = [];
        }
        $this->supplementalData[] = $supplementalData;
        return $this;
    }

    /**
     * The Measure resource provides the definition of a quality measure.
     *
     * The supplemental data criteria for the measure report, specified as either the
     * name of a valid CQL expression within a referenced library, or a valid FHIR
     * Resource Path.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData ...$supplementalData
     * @return static
     */
    public function setSupplementalData(FHIRMeasureSupplementalData ...$supplementalData): self
    {
        $this->supplementalData = $supplementalData;
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
        if (isset($validationRules[self::FIELD_DISCLAIMER])) {
            $v = $this->getDisclaimer();
            foreach($validationRules[self::FIELD_DISCLAIMER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DISCLAIMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISCLAIMER])) {
                        $errs[self::FIELD_DISCLAIMER] = [];
                    }
                    $errs[self::FIELD_DISCLAIMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SCORING])) {
            $v = $this->getScoring();
            foreach($validationRules[self::FIELD_SCORING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SCORING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SCORING])) {
                        $errs[self::FIELD_SCORING] = [];
                    }
                    $errs[self::FIELD_SCORING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPOSITE_SCORING])) {
            $v = $this->getCompositeScoring();
            foreach($validationRules[self::FIELD_COMPOSITE_SCORING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COMPOSITE_SCORING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPOSITE_SCORING])) {
                        $errs[self::FIELD_COMPOSITE_SCORING] = [];
                    }
                    $errs[self::FIELD_COMPOSITE_SCORING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RISK_ADJUSTMENT])) {
            $v = $this->getRiskAdjustment();
            foreach($validationRules[self::FIELD_RISK_ADJUSTMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RISK_ADJUSTMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RISK_ADJUSTMENT])) {
                        $errs[self::FIELD_RISK_ADJUSTMENT] = [];
                    }
                    $errs[self::FIELD_RISK_ADJUSTMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RATE_AGGREGATION])) {
            $v = $this->getRateAggregation();
            foreach($validationRules[self::FIELD_RATE_AGGREGATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RATE_AGGREGATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RATE_AGGREGATION])) {
                        $errs[self::FIELD_RATE_AGGREGATION] = [];
                    }
                    $errs[self::FIELD_RATE_AGGREGATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RATIONALE])) {
            $v = $this->getRationale();
            foreach($validationRules[self::FIELD_RATIONALE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RATIONALE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RATIONALE])) {
                        $errs[self::FIELD_RATIONALE] = [];
                    }
                    $errs[self::FIELD_RATIONALE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT])) {
            $v = $this->getClinicalRecommendationStatement();
            foreach($validationRules[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT])) {
                        $errs[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT] = [];
                    }
                    $errs[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPROVEMENT_NOTATION])) {
            $v = $this->getImprovementNotation();
            foreach($validationRules[self::FIELD_IMPROVEMENT_NOTATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPROVEMENT_NOTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPROVEMENT_NOTATION])) {
                        $errs[self::FIELD_IMPROVEMENT_NOTATION] = [];
                    }
                    $errs[self::FIELD_IMPROVEMENT_NOTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION])) {
            $v = $this->getDefinition();
            foreach($validationRules[self::FIELD_DEFINITION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION])) {
                        $errs[self::FIELD_DEFINITION] = [];
                    }
                    $errs[self::FIELD_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GUIDANCE])) {
            $v = $this->getGuidance();
            foreach($validationRules[self::FIELD_GUIDANCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GUIDANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GUIDANCE])) {
                        $errs[self::FIELD_GUIDANCE] = [];
                    }
                    $errs[self::FIELD_GUIDANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SET])) {
            $v = $this->getSet();
            foreach($validationRules[self::FIELD_SET] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SET])) {
                        $errs[self::FIELD_SET] = [];
                    }
                    $errs[self::FIELD_SET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GROUP])) {
            $v = $this->getGroup();
            foreach($validationRules[self::FIELD_GROUP] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GROUP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUP])) {
                        $errs[self::FIELD_GROUP] = [];
                    }
                    $errs[self::FIELD_GROUP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPLEMENTAL_DATA])) {
            $v = $this->getSupplementalData();
            foreach($validationRules[self::FIELD_SUPPLEMENTAL_DATA] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUPPLEMENTAL_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPLEMENTAL_DATA])) {
                        $errs[self::FIELD_SUPPLEMENTAL_DATA] = [];
                    }
                    $errs[self::FIELD_SUPPLEMENTAL_DATA][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRMeasure $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRMeasure
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMeasure)) {
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
                $v = new FHIRId(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_META === $childName) {
                $v = new FHIRMeta();
                $type->setMeta(FHIRMeta::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LANGUAGE === $childName) {
                $v = new FHIRCode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
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
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setUrl(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VERSION === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setVersion(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NAME === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setName(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TITLE === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setTitle(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATUS === $childName) {
                $v = new FHIRPublicationStatus(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setStatus(FHIRPublicationStatus::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXPERIMENTAL === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setExperimental(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATE === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDate(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PUBLISHER === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPublisher(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DESCRIPTION === $childName) {
                $v = new FHIRMarkdown(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PURPOSE === $childName) {
                $v = new FHIRMarkdown(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPurpose(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_USAGE === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setUsage(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_APPROVAL_DATE === $childName) {
                $v = new FHIRDate(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setApprovalDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LAST_REVIEW_DATE === $childName) {
                $v = new FHIRDate(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setLastReviewDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EFFECTIVE_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setEffectivePeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_USE_CONTEXT === $childName) {
                $v = new FHIRUsageContext();
                $type->addUseContext(FHIRUsageContext::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_JURISDICTION === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TOPIC === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addTopic(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTRIBUTOR === $childName) {
                $v = new FHIRContributor();
                $type->addContributor(FHIRContributor::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTACT === $childName) {
                $v = new FHIRContactDetail();
                $type->addContact(FHIRContactDetail::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COPYRIGHT === $childName) {
                $v = new FHIRMarkdown(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setCopyright(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RELATED_ARTIFACT === $childName) {
                $v = new FHIRRelatedArtifact();
                $type->addRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LIBRARY === $childName) {
                $v = new FHIRReference();
                $type->addLibrary(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DISCLAIMER === $childName) {
                $v = new FHIRMarkdown(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDisclaimer(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SCORING === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setScoring(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COMPOSITE_SCORING === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setCompositeScoring(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RISK_ADJUSTMENT === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setRiskAdjustment(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RATE_AGGREGATION === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setRateAggregation(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RATIONALE === $childName) {
                $v = new FHIRMarkdown(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setRationale(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT === $childName) {
                $v = new FHIRMarkdown(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setClinicalRecommendationStatement(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMPROVEMENT_NOTATION === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setImprovementNotation(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFINITION === $childName) {
                $v = new FHIRMarkdown(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addDefinition(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_GUIDANCE === $childName) {
                $v = new FHIRMarkdown(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setGuidance(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SET === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSet(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_GROUP === $childName) {
                $v = new FHIRMeasureGroup();
                $type->addGroup(FHIRMeasureGroup::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUPPLEMENTAL_DATA === $childName) {
                $v = new FHIRMeasureSupplementalData();
                $type->addSupplementalData(FHIRMeasureSupplementalData::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRId(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules(new FHIRUri(
                    value: (string)$attributes[self::FIELD_IMPLICIT_RULES],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_LANGUAGE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage(new FHIRCode(
                    value: (string)$attributes[self::FIELD_LANGUAGE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_URL])) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_URL]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setUrl(new FHIRUri(
                    value: (string)$attributes[self::FIELD_URL],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VERSION])) {
            $pt = $type->getVersion();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VERSION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setVersion(new FHIRString(
                    value: (string)$attributes[self::FIELD_VERSION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_NAME])) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_NAME]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setName(new FHIRString(
                    value: (string)$attributes[self::FIELD_NAME],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TITLE])) {
            $pt = $type->getTitle();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_TITLE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setTitle(new FHIRString(
                    value: (string)$attributes[self::FIELD_TITLE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXPERIMENTAL])) {
            $pt = $type->getExperimental();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_EXPERIMENTAL]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExperimental(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_EXPERIMENTAL],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATE])) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DATE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDate(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_DATE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PUBLISHER])) {
            $pt = $type->getPublisher();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PUBLISHER]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPublisher(new FHIRString(
                    value: (string)$attributes[self::FIELD_PUBLISHER],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DESCRIPTION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_DESCRIPTION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PURPOSE])) {
            $pt = $type->getPurpose();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PURPOSE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPurpose(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_PURPOSE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_USAGE])) {
            $pt = $type->getUsage();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_USAGE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setUsage(new FHIRString(
                    value: (string)$attributes[self::FIELD_USAGE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_APPROVAL_DATE])) {
            $pt = $type->getApprovalDate();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_APPROVAL_DATE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setApprovalDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_APPROVAL_DATE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LAST_REVIEW_DATE])) {
            $pt = $type->getLastReviewDate();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_LAST_REVIEW_DATE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLastReviewDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_LAST_REVIEW_DATE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_COPYRIGHT])) {
            $pt = $type->getCopyright();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_COPYRIGHT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCopyright(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_COPYRIGHT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DISCLAIMER])) {
            $pt = $type->getDisclaimer();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DISCLAIMER]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDisclaimer(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_DISCLAIMER],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_RISK_ADJUSTMENT])) {
            $pt = $type->getRiskAdjustment();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_RISK_ADJUSTMENT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setRiskAdjustment(new FHIRString(
                    value: (string)$attributes[self::FIELD_RISK_ADJUSTMENT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_RATE_AGGREGATION])) {
            $pt = $type->getRateAggregation();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_RATE_AGGREGATION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setRateAggregation(new FHIRString(
                    value: (string)$attributes[self::FIELD_RATE_AGGREGATION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_RATIONALE])) {
            $pt = $type->getRationale();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_RATIONALE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setRationale(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_RATIONALE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT])) {
            $pt = $type->getClinicalRecommendationStatement();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setClinicalRecommendationStatement(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IMPROVEMENT_NOTATION])) {
            $pt = $type->getImprovementNotation();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_IMPROVEMENT_NOTATION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setImprovementNotation(new FHIRString(
                    value: (string)$attributes[self::FIELD_IMPROVEMENT_NOTATION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFINITION])) {
            $v = new FHIRMarkdown(value: (string)$attributes[self::FIELD_DEFINITION],
                                                       valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE);
            $type->addDefinition($v);
        }
        if (isset($attributes[self::FIELD_GUIDANCE])) {
            $pt = $type->getGuidance();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_GUIDANCE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setGuidance(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_GUIDANCE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SET])) {
            $pt = $type->getSet();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SET]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSet(new FHIRString(
                    value: (string)$attributes[self::FIELD_SET],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('Measure', $this->_getSourceXMLNS());
        }
        if (isset($this->url) && $this->url->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_URL, $this->url->getValue()?->_getFormattedValue());
        }
        if (isset($this->version) && $this->version->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VERSION, $this->version->getValue()?->_getFormattedValue());
        }
        if (isset($this->name) && $this->name->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NAME, $this->name->getValue()?->_getFormattedValue());
        }
        if (isset($this->title) && $this->title->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TITLE, $this->title->getValue()?->_getFormattedValue());
        }
        if (isset($this->experimental) && $this->experimental->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXPERIMENTAL, $this->experimental->getValue()?->_getFormattedValue());
        }
        if (isset($this->date) && $this->date->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->getValue()?->_getFormattedValue());
        }
        if (isset($this->publisher) && $this->publisher->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PUBLISHER, $this->publisher->getValue()?->_getFormattedValue());
        }
        if (isset($this->description) && $this->description->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->getValue()?->_getFormattedValue());
        }
        if (isset($this->purpose) && $this->purpose->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PURPOSE, $this->purpose->getValue()?->_getFormattedValue());
        }
        if (isset($this->usage) && $this->usage->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_USAGE, $this->usage->getValue()?->_getFormattedValue());
        }
        if (isset($this->approvalDate) && $this->approvalDate->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_APPROVAL_DATE, $this->approvalDate->getValue()?->_getFormattedValue());
        }
        if (isset($this->lastReviewDate) && $this->lastReviewDate->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_LAST_REVIEW_DATE, $this->lastReviewDate->getValue()?->_getFormattedValue());
        }
        if (isset($this->copyright) && $this->copyright->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_COPYRIGHT, $this->copyright->getValue()?->_getFormattedValue());
        }
        if (isset($this->disclaimer) && $this->disclaimer->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DISCLAIMER, $this->disclaimer->getValue()?->_getFormattedValue());
        }
        if (isset($this->riskAdjustment) && $this->riskAdjustment->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_RISK_ADJUSTMENT, $this->riskAdjustment->getValue()?->_getFormattedValue());
        }
        if (isset($this->rateAggregation) && $this->rateAggregation->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_RATE_AGGREGATION, $this->rateAggregation->getValue()?->_getFormattedValue());
        }
        if (isset($this->rationale) && $this->rationale->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_RATIONALE, $this->rationale->getValue()?->_getFormattedValue());
        }
        if (isset($this->clinicalRecommendationStatement) && $this->clinicalRecommendationStatement->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT, $this->clinicalRecommendationStatement->getValue()?->_getFormattedValue());
        }
        if (isset($this->improvementNotation) && $this->improvementNotation->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_IMPROVEMENT_NOTATION, $this->improvementNotation->getValue()?->_getFormattedValue());
        }
        if (isset($this->definition)) {
           foreach($this->definition as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_DEFINITION, $v->getValue()?->_getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->guidance) && $this->guidance->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_GUIDANCE, $this->guidance->getValue()?->_getFormattedValue());
        }
        if (isset($this->set) && $this->set->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SET, $this->set->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->url) && $this->url->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_URL);
            $this->url->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->version) && $this->version->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VERSION);
            $this->version->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->name) && $this->name->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->title) && $this->title->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TITLE);
            $this->title->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->status)) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->experimental) && $this->experimental->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXPERIMENTAL);
            $this->experimental->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->date) && $this->date->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATE);
            $this->date->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->publisher) && $this->publisher->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PUBLISHER);
            $this->publisher->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->description) && $this->description->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->purpose) && $this->purpose->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PURPOSE);
            $this->purpose->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->usage) && $this->usage->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_USAGE);
            $this->usage->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->approvalDate) && $this->approvalDate->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_APPROVAL_DATE);
            $this->approvalDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->lastReviewDate) && $this->lastReviewDate->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_LAST_REVIEW_DATE);
            $this->lastReviewDate->xmlSerialize($xw, $config);
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
        if (isset($this->copyright) && $this->copyright->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_COPYRIGHT);
            $this->copyright->xmlSerialize($xw, $config);
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
        if (isset($this->disclaimer) && $this->disclaimer->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DISCLAIMER);
            $this->disclaimer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->scoring)) {
            $xw->startElement(self::FIELD_SCORING);
            $this->scoring->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->compositeScoring)) {
            $xw->startElement(self::FIELD_COMPOSITE_SCORING);
            $this->compositeScoring->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->type)) {
            foreach ($this->type as $v) {
                $xw->startElement(self::FIELD_TYPE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->riskAdjustment) && $this->riskAdjustment->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_RISK_ADJUSTMENT);
            $this->riskAdjustment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->rateAggregation) && $this->rateAggregation->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_RATE_AGGREGATION);
            $this->rateAggregation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->rationale) && $this->rationale->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_RATIONALE);
            $this->rationale->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->clinicalRecommendationStatement) && $this->clinicalRecommendationStatement->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT);
            $this->clinicalRecommendationStatement->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->improvementNotation) && $this->improvementNotation->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_IMPROVEMENT_NOTATION);
            $this->improvementNotation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->definition)) {
            foreach($this->definition as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_DEFINITION);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->guidance) && $this->guidance->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_GUIDANCE);
            $this->guidance->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->set) && $this->set->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SET);
            $this->set->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->group)) {
            foreach ($this->group as $v) {
                $xw->startElement(self::FIELD_GROUP);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->supplementalData)) {
            foreach ($this->supplementalData as $v) {
                $xw->startElement(self::FIELD_SUPPLEMENTAL_DATA);
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
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRMeasure $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRMeasure
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMeasure)) {
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
            if (is_array($json[self::FIELD_IDENTIFIER])) {
                foreach($json[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $type->addIdentifier($v);
                    } else {
                        $type->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($json[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->addIdentifier($json[self::FIELD_IDENTIFIER]);
            } else {
                $type->addIdentifier(new FHIRIdentifier($json[self::FIELD_IDENTIFIER]));
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
        if (isset($json[self::FIELD_TITLE]) || isset($json[self::FIELD_TITLE_EXT]) || array_key_exists(self::FIELD_TITLE, $json) || array_key_exists(self::FIELD_TITLE_EXT, $json)) {
            $value = $json[self::FIELD_TITLE] ?? null;
            $ext = (isset($json[self::FIELD_TITLE_EXT]) && is_array($json[self::FIELD_TITLE_EXT])) ? $json[self::FIELD_TITLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setTitle($value);
                } else if (is_array($value)) {
                    $type->setTitle(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setTitle(new FHIRString($ext));
            } else {
                $type->setTitle(new FHIRString(null));
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
        if (isset($json[self::FIELD_PURPOSE]) || isset($json[self::FIELD_PURPOSE_EXT]) || array_key_exists(self::FIELD_PURPOSE, $json) || array_key_exists(self::FIELD_PURPOSE_EXT, $json)) {
            $value = $json[self::FIELD_PURPOSE] ?? null;
            $ext = (isset($json[self::FIELD_PURPOSE_EXT]) && is_array($json[self::FIELD_PURPOSE_EXT])) ? $json[self::FIELD_PURPOSE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setPurpose($value);
                } else if (is_array($value)) {
                    $type->setPurpose(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setPurpose(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPurpose(new FHIRMarkdown($ext));
            } else {
                $type->setPurpose(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_USAGE]) || isset($json[self::FIELD_USAGE_EXT]) || array_key_exists(self::FIELD_USAGE, $json) || array_key_exists(self::FIELD_USAGE_EXT, $json)) {
            $value = $json[self::FIELD_USAGE] ?? null;
            $ext = (isset($json[self::FIELD_USAGE_EXT]) && is_array($json[self::FIELD_USAGE_EXT])) ? $json[self::FIELD_USAGE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setUsage($value);
                } else if (is_array($value)) {
                    $type->setUsage(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setUsage(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setUsage(new FHIRString($ext));
            } else {
                $type->setUsage(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_APPROVAL_DATE]) || isset($json[self::FIELD_APPROVAL_DATE_EXT]) || array_key_exists(self::FIELD_APPROVAL_DATE, $json) || array_key_exists(self::FIELD_APPROVAL_DATE_EXT, $json)) {
            $value = $json[self::FIELD_APPROVAL_DATE] ?? null;
            $ext = (isset($json[self::FIELD_APPROVAL_DATE_EXT]) && is_array($json[self::FIELD_APPROVAL_DATE_EXT])) ? $json[self::FIELD_APPROVAL_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $type->setApprovalDate($value);
                } else if (is_array($value)) {
                    $type->setApprovalDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $type->setApprovalDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setApprovalDate(new FHIRDate($ext));
            } else {
                $type->setApprovalDate(new FHIRDate(null));
            }
        }
        if (isset($json[self::FIELD_LAST_REVIEW_DATE]) || isset($json[self::FIELD_LAST_REVIEW_DATE_EXT]) || array_key_exists(self::FIELD_LAST_REVIEW_DATE, $json) || array_key_exists(self::FIELD_LAST_REVIEW_DATE_EXT, $json)) {
            $value = $json[self::FIELD_LAST_REVIEW_DATE] ?? null;
            $ext = (isset($json[self::FIELD_LAST_REVIEW_DATE_EXT]) && is_array($json[self::FIELD_LAST_REVIEW_DATE_EXT])) ? $json[self::FIELD_LAST_REVIEW_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $type->setLastReviewDate($value);
                } else if (is_array($value)) {
                    $type->setLastReviewDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $type->setLastReviewDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setLastReviewDate(new FHIRDate($ext));
            } else {
                $type->setLastReviewDate(new FHIRDate(null));
            }
        }
        if (isset($json[self::FIELD_EFFECTIVE_PERIOD]) || array_key_exists(self::FIELD_EFFECTIVE_PERIOD, $json)) {
            if ($json[self::FIELD_EFFECTIVE_PERIOD] instanceof FHIRPeriod) {
                $type->setEffectivePeriod($json[self::FIELD_EFFECTIVE_PERIOD]);
            } else {
                $type->setEffectivePeriod(new FHIRPeriod($json[self::FIELD_EFFECTIVE_PERIOD]));
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
        if (isset($json[self::FIELD_TOPIC]) || array_key_exists(self::FIELD_TOPIC, $json)) {
            if (is_array($json[self::FIELD_TOPIC])) {
                foreach($json[self::FIELD_TOPIC] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addTopic($v);
                    } else {
                        $type->addTopic(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_TOPIC] instanceof FHIRCodeableConcept) {
                $type->addTopic($json[self::FIELD_TOPIC]);
            } else {
                $type->addTopic(new FHIRCodeableConcept($json[self::FIELD_TOPIC]));
            }
        }
        if (isset($json[self::FIELD_CONTRIBUTOR]) || array_key_exists(self::FIELD_CONTRIBUTOR, $json)) {
            if (is_array($json[self::FIELD_CONTRIBUTOR])) {
                foreach($json[self::FIELD_CONTRIBUTOR] as $v) {
                    if ($v instanceof FHIRContributor) {
                        $type->addContributor($v);
                    } else {
                        $type->addContributor(new FHIRContributor($v));
                    }
                }
            } elseif ($json[self::FIELD_CONTRIBUTOR] instanceof FHIRContributor) {
                $type->addContributor($json[self::FIELD_CONTRIBUTOR]);
            } else {
                $type->addContributor(new FHIRContributor($json[self::FIELD_CONTRIBUTOR]));
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
        if (isset($json[self::FIELD_COPYRIGHT]) || isset($json[self::FIELD_COPYRIGHT_EXT]) || array_key_exists(self::FIELD_COPYRIGHT, $json) || array_key_exists(self::FIELD_COPYRIGHT_EXT, $json)) {
            $value = $json[self::FIELD_COPYRIGHT] ?? null;
            $ext = (isset($json[self::FIELD_COPYRIGHT_EXT]) && is_array($json[self::FIELD_COPYRIGHT_EXT])) ? $json[self::FIELD_COPYRIGHT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setCopyright($value);
                } else if (is_array($value)) {
                    $type->setCopyright(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setCopyright(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCopyright(new FHIRMarkdown($ext));
            } else {
                $type->setCopyright(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_RELATED_ARTIFACT]) || array_key_exists(self::FIELD_RELATED_ARTIFACT, $json)) {
            if (is_array($json[self::FIELD_RELATED_ARTIFACT])) {
                foreach($json[self::FIELD_RELATED_ARTIFACT] as $v) {
                    if ($v instanceof FHIRRelatedArtifact) {
                        $type->addRelatedArtifact($v);
                    } else {
                        $type->addRelatedArtifact(new FHIRRelatedArtifact($v));
                    }
                }
            } elseif ($json[self::FIELD_RELATED_ARTIFACT] instanceof FHIRRelatedArtifact) {
                $type->addRelatedArtifact($json[self::FIELD_RELATED_ARTIFACT]);
            } else {
                $type->addRelatedArtifact(new FHIRRelatedArtifact($json[self::FIELD_RELATED_ARTIFACT]));
            }
        }
        if (isset($json[self::FIELD_LIBRARY]) || array_key_exists(self::FIELD_LIBRARY, $json)) {
            if (is_array($json[self::FIELD_LIBRARY])) {
                foreach($json[self::FIELD_LIBRARY] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addLibrary($v);
                    } else {
                        $type->addLibrary(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_LIBRARY] instanceof FHIRReference) {
                $type->addLibrary($json[self::FIELD_LIBRARY]);
            } else {
                $type->addLibrary(new FHIRReference($json[self::FIELD_LIBRARY]));
            }
        }
        if (isset($json[self::FIELD_DISCLAIMER]) || isset($json[self::FIELD_DISCLAIMER_EXT]) || array_key_exists(self::FIELD_DISCLAIMER, $json) || array_key_exists(self::FIELD_DISCLAIMER_EXT, $json)) {
            $value = $json[self::FIELD_DISCLAIMER] ?? null;
            $ext = (isset($json[self::FIELD_DISCLAIMER_EXT]) && is_array($json[self::FIELD_DISCLAIMER_EXT])) ? $json[self::FIELD_DISCLAIMER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setDisclaimer($value);
                } else if (is_array($value)) {
                    $type->setDisclaimer(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setDisclaimer(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDisclaimer(new FHIRMarkdown($ext));
            } else {
                $type->setDisclaimer(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_SCORING]) || array_key_exists(self::FIELD_SCORING, $json)) {
            if ($json[self::FIELD_SCORING] instanceof FHIRCodeableConcept) {
                $type->setScoring($json[self::FIELD_SCORING]);
            } else {
                $type->setScoring(new FHIRCodeableConcept($json[self::FIELD_SCORING]));
            }
        }
        if (isset($json[self::FIELD_COMPOSITE_SCORING]) || array_key_exists(self::FIELD_COMPOSITE_SCORING, $json)) {
            if ($json[self::FIELD_COMPOSITE_SCORING] instanceof FHIRCodeableConcept) {
                $type->setCompositeScoring($json[self::FIELD_COMPOSITE_SCORING]);
            } else {
                $type->setCompositeScoring(new FHIRCodeableConcept($json[self::FIELD_COMPOSITE_SCORING]));
            }
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            if (is_array($json[self::FIELD_TYPE])) {
                foreach($json[self::FIELD_TYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addType($v);
                    } else {
                        $type->addType(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $type->addType($json[self::FIELD_TYPE]);
            } else {
                $type->addType(new FHIRCodeableConcept($json[self::FIELD_TYPE]));
            }
        }
        if (isset($json[self::FIELD_RISK_ADJUSTMENT]) || isset($json[self::FIELD_RISK_ADJUSTMENT_EXT]) || array_key_exists(self::FIELD_RISK_ADJUSTMENT, $json) || array_key_exists(self::FIELD_RISK_ADJUSTMENT_EXT, $json)) {
            $value = $json[self::FIELD_RISK_ADJUSTMENT] ?? null;
            $ext = (isset($json[self::FIELD_RISK_ADJUSTMENT_EXT]) && is_array($json[self::FIELD_RISK_ADJUSTMENT_EXT])) ? $json[self::FIELD_RISK_ADJUSTMENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setRiskAdjustment($value);
                } else if (is_array($value)) {
                    $type->setRiskAdjustment(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setRiskAdjustment(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setRiskAdjustment(new FHIRString($ext));
            } else {
                $type->setRiskAdjustment(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_RATE_AGGREGATION]) || isset($json[self::FIELD_RATE_AGGREGATION_EXT]) || array_key_exists(self::FIELD_RATE_AGGREGATION, $json) || array_key_exists(self::FIELD_RATE_AGGREGATION_EXT, $json)) {
            $value = $json[self::FIELD_RATE_AGGREGATION] ?? null;
            $ext = (isset($json[self::FIELD_RATE_AGGREGATION_EXT]) && is_array($json[self::FIELD_RATE_AGGREGATION_EXT])) ? $json[self::FIELD_RATE_AGGREGATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setRateAggregation($value);
                } else if (is_array($value)) {
                    $type->setRateAggregation(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setRateAggregation(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setRateAggregation(new FHIRString($ext));
            } else {
                $type->setRateAggregation(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_RATIONALE]) || isset($json[self::FIELD_RATIONALE_EXT]) || array_key_exists(self::FIELD_RATIONALE, $json) || array_key_exists(self::FIELD_RATIONALE_EXT, $json)) {
            $value = $json[self::FIELD_RATIONALE] ?? null;
            $ext = (isset($json[self::FIELD_RATIONALE_EXT]) && is_array($json[self::FIELD_RATIONALE_EXT])) ? $json[self::FIELD_RATIONALE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setRationale($value);
                } else if (is_array($value)) {
                    $type->setRationale(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setRationale(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setRationale(new FHIRMarkdown($ext));
            } else {
                $type->setRationale(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT]) || isset($json[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT_EXT]) || array_key_exists(self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT, $json) || array_key_exists(self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT_EXT, $json)) {
            $value = $json[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT] ?? null;
            $ext = (isset($json[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT_EXT]) && is_array($json[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT_EXT])) ? $json[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setClinicalRecommendationStatement($value);
                } else if (is_array($value)) {
                    $type->setClinicalRecommendationStatement(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setClinicalRecommendationStatement(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setClinicalRecommendationStatement(new FHIRMarkdown($ext));
            } else {
                $type->setClinicalRecommendationStatement(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_IMPROVEMENT_NOTATION]) || isset($json[self::FIELD_IMPROVEMENT_NOTATION_EXT]) || array_key_exists(self::FIELD_IMPROVEMENT_NOTATION, $json) || array_key_exists(self::FIELD_IMPROVEMENT_NOTATION_EXT, $json)) {
            $value = $json[self::FIELD_IMPROVEMENT_NOTATION] ?? null;
            $ext = (isset($json[self::FIELD_IMPROVEMENT_NOTATION_EXT]) && is_array($json[self::FIELD_IMPROVEMENT_NOTATION_EXT])) ? $json[self::FIELD_IMPROVEMENT_NOTATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setImprovementNotation($value);
                } else if (is_array($value)) {
                    $type->setImprovementNotation(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setImprovementNotation(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setImprovementNotation(new FHIRString($ext));
            } else {
                $type->setImprovementNotation(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_DEFINITION]) || isset($json[self::FIELD_DEFINITION_EXT]) || array_key_exists(self::FIELD_DEFINITION, $json) || array_key_exists(self::FIELD_DEFINITION_EXT, $json)) {
            $value = $json[self::FIELD_DEFINITION] ?? null;
            $ext = (isset($json[self::FIELD_DEFINITION_EXT]) && is_array($json[self::FIELD_DEFINITION_EXT])) ? $json[self::FIELD_DEFINITION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->addDefinition($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRMarkdown) {
                            $type->addDefinition($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addDefinition(new FHIRMarkdown(array_merge($v, $iext)));
                            } else {
                                $type->addDefinition(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addDefinition(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->addDefinition(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addDefinition(new FHIRMarkdown($iext));
                }
            } else {
                $type->addDefinition(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_GUIDANCE]) || isset($json[self::FIELD_GUIDANCE_EXT]) || array_key_exists(self::FIELD_GUIDANCE, $json) || array_key_exists(self::FIELD_GUIDANCE_EXT, $json)) {
            $value = $json[self::FIELD_GUIDANCE] ?? null;
            $ext = (isset($json[self::FIELD_GUIDANCE_EXT]) && is_array($json[self::FIELD_GUIDANCE_EXT])) ? $json[self::FIELD_GUIDANCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setGuidance($value);
                } else if (is_array($value)) {
                    $type->setGuidance(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setGuidance(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setGuidance(new FHIRMarkdown($ext));
            } else {
                $type->setGuidance(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_SET]) || isset($json[self::FIELD_SET_EXT]) || array_key_exists(self::FIELD_SET, $json) || array_key_exists(self::FIELD_SET_EXT, $json)) {
            $value = $json[self::FIELD_SET] ?? null;
            $ext = (isset($json[self::FIELD_SET_EXT]) && is_array($json[self::FIELD_SET_EXT])) ? $json[self::FIELD_SET_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setSet($value);
                } else if (is_array($value)) {
                    $type->setSet(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setSet(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSet(new FHIRString($ext));
            } else {
                $type->setSet(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_GROUP]) || array_key_exists(self::FIELD_GROUP, $json)) {
            if (is_array($json[self::FIELD_GROUP])) {
                foreach($json[self::FIELD_GROUP] as $v) {
                    if ($v instanceof FHIRMeasureGroup) {
                        $type->addGroup($v);
                    } else {
                        $type->addGroup(new FHIRMeasureGroup($v));
                    }
                }
            } elseif ($json[self::FIELD_GROUP] instanceof FHIRMeasureGroup) {
                $type->addGroup($json[self::FIELD_GROUP]);
            } else {
                $type->addGroup(new FHIRMeasureGroup($json[self::FIELD_GROUP]));
            }
        }
        if (isset($json[self::FIELD_SUPPLEMENTAL_DATA]) || array_key_exists(self::FIELD_SUPPLEMENTAL_DATA, $json)) {
            if (is_array($json[self::FIELD_SUPPLEMENTAL_DATA])) {
                foreach($json[self::FIELD_SUPPLEMENTAL_DATA] as $v) {
                    if ($v instanceof FHIRMeasureSupplementalData) {
                        $type->addSupplementalData($v);
                    } else {
                        $type->addSupplementalData(new FHIRMeasureSupplementalData($v));
                    }
                }
            } elseif ($json[self::FIELD_SUPPLEMENTAL_DATA] instanceof FHIRMeasureSupplementalData) {
                $type->addSupplementalData($json[self::FIELD_SUPPLEMENTAL_DATA]);
            } else {
                $type->addSupplementalData(new FHIRMeasureSupplementalData($json[self::FIELD_SUPPLEMENTAL_DATA]));
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
        if (isset($this->disclaimer)) {
            if (null !== ($val = $this->disclaimer->getValue())) {
                $out->disclaimer = $val;
            }
            $ext = $this->disclaimer->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_disclaimer = $ext;
            }
        }
        if (isset($this->scoring)) {
            $out->scoring = $this->scoring;
        }
        if (isset($this->compositeScoring)) {
            $out->compositeScoring = $this->compositeScoring;
        }
        if (isset($this->type) && [] !== $this->type) {
            $out->type = $this->type;
        }
        if (isset($this->riskAdjustment)) {
            if (null !== ($val = $this->riskAdjustment->getValue())) {
                $out->riskAdjustment = $val;
            }
            $ext = $this->riskAdjustment->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_riskAdjustment = $ext;
            }
        }
        if (isset($this->rateAggregation)) {
            if (null !== ($val = $this->rateAggregation->getValue())) {
                $out->rateAggregation = $val;
            }
            $ext = $this->rateAggregation->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_rateAggregation = $ext;
            }
        }
        if (isset($this->rationale)) {
            if (null !== ($val = $this->rationale->getValue())) {
                $out->rationale = $val;
            }
            $ext = $this->rationale->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_rationale = $ext;
            }
        }
        if (isset($this->clinicalRecommendationStatement)) {
            if (null !== ($val = $this->clinicalRecommendationStatement->getValue())) {
                $out->clinicalRecommendationStatement = $val;
            }
            $ext = $this->clinicalRecommendationStatement->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_clinicalRecommendationStatement = $ext;
            }
        }
        if (isset($this->improvementNotation)) {
            if (null !== ($val = $this->improvementNotation->getValue())) {
                $out->improvementNotation = $val;
            }
            $ext = $this->improvementNotation->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_improvementNotation = $ext;
            }
        }
        if (isset($this->definition) && [] !== $this->definition) {
            $vals = [];
            $exts = [];
            foreach ($this->definition as $v) {
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
                $out->definition = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_definition = $exts;
            }
        }
        if (isset($this->guidance)) {
            if (null !== ($val = $this->guidance->getValue())) {
                $out->guidance = $val;
            }
            $ext = $this->guidance->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_guidance = $ext;
            }
        }
        if (isset($this->set)) {
            if (null !== ($val = $this->set->getValue())) {
                $out->set = $val;
            }
            $ext = $this->set->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_set = $ext;
            }
        }
        if (isset($this->group) && [] !== $this->group) {
            $out->group = $this->group;
        }
        if (isset($this->supplementalData) && [] !== $this->supplementalData) {
            $out->supplementalData = $this->supplementalData;
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