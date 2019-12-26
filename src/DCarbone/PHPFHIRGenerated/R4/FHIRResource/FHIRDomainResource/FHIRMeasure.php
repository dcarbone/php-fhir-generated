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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The Measure resource provides the definition of a quality measure.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMeasure
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRMeasure extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEASURE;
    const FIELD_APPROVAL_DATE = 'approvalDate';
    const FIELD_APPROVAL_DATE_EXT = '_approvalDate';
    const FIELD_AUTHOR = 'author';
    const FIELD_CLINICAL_RECOMMENDATION_STATEMENT = 'clinicalRecommendationStatement';
    const FIELD_CLINICAL_RECOMMENDATION_STATEMENT_EXT = '_clinicalRecommendationStatement';
    const FIELD_COMPOSITE_SCORING = 'compositeScoring';
    const FIELD_CONTACT = 'contact';
    const FIELD_COPYRIGHT = 'copyright';
    const FIELD_COPYRIGHT_EXT = '_copyright';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DEFINITION = 'definition';
    const FIELD_DEFINITION_EXT = '_definition';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DISCLAIMER = 'disclaimer';
    const FIELD_DISCLAIMER_EXT = '_disclaimer';
    const FIELD_EDITOR = 'editor';
    const FIELD_EFFECTIVE_PERIOD = 'effectivePeriod';
    const FIELD_ENDORSER = 'endorser';
    const FIELD_EXPERIMENTAL = 'experimental';
    const FIELD_EXPERIMENTAL_EXT = '_experimental';
    const FIELD_GROUP = 'group';
    const FIELD_GUIDANCE = 'guidance';
    const FIELD_GUIDANCE_EXT = '_guidance';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IMPROVEMENT_NOTATION = 'improvementNotation';
    const FIELD_JURISDICTION = 'jurisdiction';
    const FIELD_LAST_REVIEW_DATE = 'lastReviewDate';
    const FIELD_LAST_REVIEW_DATE_EXT = '_lastReviewDate';
    const FIELD_LIBRARY = 'library';
    const FIELD_LIBRARY_EXT = '_library';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_PUBLISHER = 'publisher';
    const FIELD_PUBLISHER_EXT = '_publisher';
    const FIELD_PURPOSE = 'purpose';
    const FIELD_PURPOSE_EXT = '_purpose';
    const FIELD_RATE_AGGREGATION = 'rateAggregation';
    const FIELD_RATE_AGGREGATION_EXT = '_rateAggregation';
    const FIELD_RATIONALE = 'rationale';
    const FIELD_RATIONALE_EXT = '_rationale';
    const FIELD_RELATED_ARTIFACT = 'relatedArtifact';
    const FIELD_REVIEWER = 'reviewer';
    const FIELD_RISK_ADJUSTMENT = 'riskAdjustment';
    const FIELD_RISK_ADJUSTMENT_EXT = '_riskAdjustment';
    const FIELD_SCORING = 'scoring';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUBJECT_CODEABLE_CONCEPT = 'subjectCodeableConcept';
    const FIELD_SUBJECT_REFERENCE = 'subjectReference';
    const FIELD_SUBTITLE = 'subtitle';
    const FIELD_SUBTITLE_EXT = '_subtitle';
    const FIELD_SUPPLEMENTAL_DATA = 'supplementalData';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';
    const FIELD_TOPIC = 'topic';
    const FIELD_TYPE = 'type';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_USAGE = 'usage';
    const FIELD_USAGE_EXT = '_usage';
    const FIELD_USE_CONTEXT = 'useContext';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    protected $approvalDate = null;

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual or organization primarily involved in the creation and
     * maintenance of the content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[]
     */
    protected $author = [];

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Provides a summary of relevant clinical guidelines or other clinical
     * recommendations supporting the measure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    protected $clinicalRecommendationStatement = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this is a composite measure, the scoring method used to combine the component
     * measures to determine the composite score.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $compositeScoring = null;

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
     * A copyright statement relating to the measure and/or its contents. Copyright
     * statements are generally legal restrictions on the use and publishing of the
     * measure.
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
     * The date (and optionally time) when the measure was published. The date must
     * change when the business version changes and it must change if the status code
     * changes. In addition, it should change when the substantive content of the
     * measure changes.
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
     * Provides a description of an individual term used within the measure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown[]
     */
    protected $definition = [];

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the measure from a consumer's
     * perspective.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    protected $description = null;

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Notices and disclaimers regarding the use of the measure or related to
     * intellectual property (such as code systems) referenced by the measure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    protected $disclaimer = null;

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for internal coherence of
     * the content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[]
     */
    protected $editor = [];

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the measure content was or is planned to be in active
     * use.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $effectivePeriod = null;

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization responsible for officially endorsing the content
     * for use in some setting.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[]
     */
    protected $endorser = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A Boolean value to indicate that this measure is authored for testing purposes
     * (or education/evaluation/marketing) and is not intended to be used for genuine
     * usage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $experimental = null;

    /**
     * The Measure resource provides the definition of a quality measure.
     *
     * A group of population criteria for the measure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup[]
     */
    protected $group = [];

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Additional guidance for the measure including how it can be used in a clinical
     * context, and the intent of the measure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    protected $guidance = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this measure when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information on whether an increase or decrease in score is the preferred result
     * (e.g., a higher score indicates better quality OR a lower score indicates better
     * quality OR quality is within a range).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $improvementNotation = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the measure is intended to be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $jurisdiction = [];

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval but does not change the original approval date.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    protected $lastReviewDate = null;

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a Library resource containing the formal logic used by the
     * measure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    protected $library = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the measure. This name should be usable as
     * an identifier for the module by machine processing applications such as code
     * generation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $name = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual that published the measure.
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
     * Explanation of why this measure is needed and why it has been designed as it
     * has.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    protected $purpose = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes how to combine the information calculated, based on logic in each of
     * several populations, into one summarized result.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $rateAggregation = null;

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Provides a succinct statement of the need for the measure. Usually includes
     * statements pertaining to importance criterion: impact, gap in care, and
     * evidence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    protected $rationale = null;

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact[]
     */
    protected $relatedArtifact = [];

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for review of some aspect of
     * the content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[]
     */
    protected $reviewer = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the risk adjustment factors that may impact the resulting score
     * for the measure and how they may be accounted for when computing and reporting
     * measure results.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $riskAdjustment = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how the calculation is performed for the measure, including
     * proportion, ratio, continuous-variable, and cohort. The value set is extensible,
     * allowing additional measure scoring types to be represented.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $scoring = null;

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this measure. Enables tracking the life-cycle of the content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus
     */
    protected $status = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended subjects for the measure. If this element is not provided, a
     * Patient subject is assumed, but the subject of the measure can be anything.
     * (choose any one of subject*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $subjectCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended subjects for the measure. If this element is not provided, a
     * Patient subject is assumed, but the subject of the measure can be anything.
     * (choose any one of subject*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $subjectReference = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An explanatory or alternate title for the measure giving additional information
     * about its content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $subtitle = null;

    /**
     * The Measure resource provides the definition of a quality measure.
     *
     * The supplemental data criteria for the measure report, specified as either the
     * name of a valid CQL expression within a referenced library, or a valid FHIR
     * Resource Path.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData[]
     */
    protected $supplementalData = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the measure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $title = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive topics related to the content of the measure. Topics provide a
     * high-level categorization grouping types of measures that can be useful for
     * filtering and searching.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $topic = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates whether the measure is used to examine a process, an outcome over
     * time, a patient-reported outcome, or a structure measure such as utilization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $type = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this measure when it is referenced in a
     * specification, model, design or an instance; also called its canonical
     * identifier. This SHOULD be globally unique and SHOULD be a literal address at
     * which at which an authoritative instance of this measure is (or will be)
     * published. This URL can be the target of a canonical reference. It SHALL remain
     * the same when the measure is stored on different servers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    protected $url = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A detailed description, from a clinical perspective, of how the measure is used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $usage = null;

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
     * be used to assist with indexing and searching for appropriate measure instances.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext[]
     */
    protected $useContext = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $version = null;

    /**
     * Validation map for fields in type Measure
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRMeasure Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeasure::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_APPROVAL_DATE]) || isset($data[self::FIELD_APPROVAL_DATE_EXT])) {
            if (isset($data[self::FIELD_APPROVAL_DATE])) {
                $value = $data[self::FIELD_APPROVAL_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_APPROVAL_DATE_EXT]) && is_array($data[self::FIELD_APPROVAL_DATE_EXT])) {
                $ext = $data[self::FIELD_APPROVAL_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setApprovalDate($value);
                } else if (is_array($value)) {
                    $this->setApprovalDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setApprovalDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setApprovalDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_AUTHOR])) {
            if (is_array($data[self::FIELD_AUTHOR])) {
                foreach($data[self::FIELD_AUTHOR] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContactDetail) {
                        $this->addAuthor($v);
                    } else {
                        $this->addAuthor(new FHIRContactDetail($v));
                    }
                }
            } else if ($data[self::FIELD_AUTHOR] instanceof FHIRContactDetail) {
                $this->addAuthor($data[self::FIELD_AUTHOR]);
            } else {
                $this->addAuthor(new FHIRContactDetail($data[self::FIELD_AUTHOR]));
            }
        }
        if (isset($data[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT]) || isset($data[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT_EXT])) {
            if (isset($data[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT])) {
                $value = $data[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT_EXT]) && is_array($data[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT_EXT])) {
                $ext = $data[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setClinicalRecommendationStatement($value);
                } else if (is_array($value)) {
                    $this->setClinicalRecommendationStatement(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setClinicalRecommendationStatement(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setClinicalRecommendationStatement(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_COMPOSITE_SCORING])) {
            if ($data[self::FIELD_COMPOSITE_SCORING] instanceof FHIRCodeableConcept) {
                $this->setCompositeScoring($data[self::FIELD_COMPOSITE_SCORING]);
            } else {
                $this->setCompositeScoring(new FHIRCodeableConcept($data[self::FIELD_COMPOSITE_SCORING]));
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
        if (isset($data[self::FIELD_DEFINITION]) || isset($data[self::FIELD_DEFINITION_EXT])) {
            if (isset($data[self::FIELD_DEFINITION])) {
                $value = $data[self::FIELD_DEFINITION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEFINITION_EXT]) && is_array($data[self::FIELD_DEFINITION_EXT])) {
                $ext = $data[self::FIELD_DEFINITION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->addDefinition($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRMarkdown) {
                            $this->addDefinition($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addDefinition(new FHIRMarkdown(array_merge($v, $iext)));
                            } else {
                                $this->addDefinition(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addDefinition(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->addDefinition(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addDefinition(new FHIRMarkdown($iext));
                }
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
        if (isset($data[self::FIELD_DISCLAIMER]) || isset($data[self::FIELD_DISCLAIMER_EXT])) {
            if (isset($data[self::FIELD_DISCLAIMER])) {
                $value = $data[self::FIELD_DISCLAIMER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DISCLAIMER_EXT]) && is_array($data[self::FIELD_DISCLAIMER_EXT])) {
                $ext = $data[self::FIELD_DISCLAIMER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDisclaimer($value);
                } else if (is_array($value)) {
                    $this->setDisclaimer(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDisclaimer(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDisclaimer(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_EDITOR])) {
            if (is_array($data[self::FIELD_EDITOR])) {
                foreach($data[self::FIELD_EDITOR] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContactDetail) {
                        $this->addEditor($v);
                    } else {
                        $this->addEditor(new FHIRContactDetail($v));
                    }
                }
            } else if ($data[self::FIELD_EDITOR] instanceof FHIRContactDetail) {
                $this->addEditor($data[self::FIELD_EDITOR]);
            } else {
                $this->addEditor(new FHIRContactDetail($data[self::FIELD_EDITOR]));
            }
        }
        if (isset($data[self::FIELD_EFFECTIVE_PERIOD])) {
            if ($data[self::FIELD_EFFECTIVE_PERIOD] instanceof FHIRPeriod) {
                $this->setEffectivePeriod($data[self::FIELD_EFFECTIVE_PERIOD]);
            } else {
                $this->setEffectivePeriod(new FHIRPeriod($data[self::FIELD_EFFECTIVE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_ENDORSER])) {
            if (is_array($data[self::FIELD_ENDORSER])) {
                foreach($data[self::FIELD_ENDORSER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContactDetail) {
                        $this->addEndorser($v);
                    } else {
                        $this->addEndorser(new FHIRContactDetail($v));
                    }
                }
            } else if ($data[self::FIELD_ENDORSER] instanceof FHIRContactDetail) {
                $this->addEndorser($data[self::FIELD_ENDORSER]);
            } else {
                $this->addEndorser(new FHIRContactDetail($data[self::FIELD_ENDORSER]));
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
        if (isset($data[self::FIELD_GROUP])) {
            if (is_array($data[self::FIELD_GROUP])) {
                foreach($data[self::FIELD_GROUP] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMeasureGroup) {
                        $this->addGroup($v);
                    } else {
                        $this->addGroup(new FHIRMeasureGroup($v));
                    }
                }
            } else if ($data[self::FIELD_GROUP] instanceof FHIRMeasureGroup) {
                $this->addGroup($data[self::FIELD_GROUP]);
            } else {
                $this->addGroup(new FHIRMeasureGroup($data[self::FIELD_GROUP]));
            }
        }
        if (isset($data[self::FIELD_GUIDANCE]) || isset($data[self::FIELD_GUIDANCE_EXT])) {
            if (isset($data[self::FIELD_GUIDANCE])) {
                $value = $data[self::FIELD_GUIDANCE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_GUIDANCE_EXT]) && is_array($data[self::FIELD_GUIDANCE_EXT])) {
                $ext = $data[self::FIELD_GUIDANCE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setGuidance($value);
                } else if (is_array($value)) {
                    $this->setGuidance(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setGuidance(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setGuidance(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_IMPROVEMENT_NOTATION])) {
            if ($data[self::FIELD_IMPROVEMENT_NOTATION] instanceof FHIRCodeableConcept) {
                $this->setImprovementNotation($data[self::FIELD_IMPROVEMENT_NOTATION]);
            } else {
                $this->setImprovementNotation(new FHIRCodeableConcept($data[self::FIELD_IMPROVEMENT_NOTATION]));
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
        if (isset($data[self::FIELD_LAST_REVIEW_DATE]) || isset($data[self::FIELD_LAST_REVIEW_DATE_EXT])) {
            if (isset($data[self::FIELD_LAST_REVIEW_DATE])) {
                $value = $data[self::FIELD_LAST_REVIEW_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LAST_REVIEW_DATE_EXT]) && is_array($data[self::FIELD_LAST_REVIEW_DATE_EXT])) {
                $ext = $data[self::FIELD_LAST_REVIEW_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setLastReviewDate($value);
                } else if (is_array($value)) {
                    $this->setLastReviewDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setLastReviewDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLastReviewDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_LIBRARY]) || isset($data[self::FIELD_LIBRARY_EXT])) {
            if (isset($data[self::FIELD_LIBRARY])) {
                $value = $data[self::FIELD_LIBRARY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LIBRARY_EXT]) && is_array($data[self::FIELD_LIBRARY_EXT])) {
                $ext = $data[self::FIELD_LIBRARY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->addLibrary($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCanonical) {
                            $this->addLibrary($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addLibrary(new FHIRCanonical(array_merge($v, $iext)));
                            } else {
                                $this->addLibrary(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addLibrary(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->addLibrary(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addLibrary(new FHIRCanonical($iext));
                }
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
        if (isset($data[self::FIELD_RATE_AGGREGATION]) || isset($data[self::FIELD_RATE_AGGREGATION_EXT])) {
            if (isset($data[self::FIELD_RATE_AGGREGATION])) {
                $value = $data[self::FIELD_RATE_AGGREGATION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_RATE_AGGREGATION_EXT]) && is_array($data[self::FIELD_RATE_AGGREGATION_EXT])) {
                $ext = $data[self::FIELD_RATE_AGGREGATION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setRateAggregation($value);
                } else if (is_array($value)) {
                    $this->setRateAggregation(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setRateAggregation(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setRateAggregation(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_RATIONALE]) || isset($data[self::FIELD_RATIONALE_EXT])) {
            if (isset($data[self::FIELD_RATIONALE])) {
                $value = $data[self::FIELD_RATIONALE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_RATIONALE_EXT]) && is_array($data[self::FIELD_RATIONALE_EXT])) {
                $ext = $data[self::FIELD_RATIONALE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setRationale($value);
                } else if (is_array($value)) {
                    $this->setRationale(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setRationale(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setRationale(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_RELATED_ARTIFACT])) {
            if (is_array($data[self::FIELD_RELATED_ARTIFACT])) {
                foreach($data[self::FIELD_RELATED_ARTIFACT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRRelatedArtifact) {
                        $this->addRelatedArtifact($v);
                    } else {
                        $this->addRelatedArtifact(new FHIRRelatedArtifact($v));
                    }
                }
            } else if ($data[self::FIELD_RELATED_ARTIFACT] instanceof FHIRRelatedArtifact) {
                $this->addRelatedArtifact($data[self::FIELD_RELATED_ARTIFACT]);
            } else {
                $this->addRelatedArtifact(new FHIRRelatedArtifact($data[self::FIELD_RELATED_ARTIFACT]));
            }
        }
        if (isset($data[self::FIELD_REVIEWER])) {
            if (is_array($data[self::FIELD_REVIEWER])) {
                foreach($data[self::FIELD_REVIEWER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContactDetail) {
                        $this->addReviewer($v);
                    } else {
                        $this->addReviewer(new FHIRContactDetail($v));
                    }
                }
            } else if ($data[self::FIELD_REVIEWER] instanceof FHIRContactDetail) {
                $this->addReviewer($data[self::FIELD_REVIEWER]);
            } else {
                $this->addReviewer(new FHIRContactDetail($data[self::FIELD_REVIEWER]));
            }
        }
        if (isset($data[self::FIELD_RISK_ADJUSTMENT]) || isset($data[self::FIELD_RISK_ADJUSTMENT_EXT])) {
            if (isset($data[self::FIELD_RISK_ADJUSTMENT])) {
                $value = $data[self::FIELD_RISK_ADJUSTMENT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_RISK_ADJUSTMENT_EXT]) && is_array($data[self::FIELD_RISK_ADJUSTMENT_EXT])) {
                $ext = $data[self::FIELD_RISK_ADJUSTMENT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setRiskAdjustment($value);
                } else if (is_array($value)) {
                    $this->setRiskAdjustment(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setRiskAdjustment(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setRiskAdjustment(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SCORING])) {
            if ($data[self::FIELD_SCORING] instanceof FHIRCodeableConcept) {
                $this->setScoring($data[self::FIELD_SCORING]);
            } else {
                $this->setScoring(new FHIRCodeableConcept($data[self::FIELD_SCORING]));
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
        if (isset($data[self::FIELD_SUBJECT_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_SUBJECT_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setSubjectCodeableConcept($data[self::FIELD_SUBJECT_CODEABLE_CONCEPT]);
            } else {
                $this->setSubjectCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_SUBJECT_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT_REFERENCE])) {
            if ($data[self::FIELD_SUBJECT_REFERENCE] instanceof FHIRReference) {
                $this->setSubjectReference($data[self::FIELD_SUBJECT_REFERENCE]);
            } else {
                $this->setSubjectReference(new FHIRReference($data[self::FIELD_SUBJECT_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_SUBTITLE]) || isset($data[self::FIELD_SUBTITLE_EXT])) {
            if (isset($data[self::FIELD_SUBTITLE])) {
                $value = $data[self::FIELD_SUBTITLE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SUBTITLE_EXT]) && is_array($data[self::FIELD_SUBTITLE_EXT])) {
                $ext = $data[self::FIELD_SUBTITLE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSubtitle($value);
                } else if (is_array($value)) {
                    $this->setSubtitle(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSubtitle(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSubtitle(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SUPPLEMENTAL_DATA])) {
            if (is_array($data[self::FIELD_SUPPLEMENTAL_DATA])) {
                foreach($data[self::FIELD_SUPPLEMENTAL_DATA] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMeasureSupplementalData) {
                        $this->addSupplementalData($v);
                    } else {
                        $this->addSupplementalData(new FHIRMeasureSupplementalData($v));
                    }
                }
            } else if ($data[self::FIELD_SUPPLEMENTAL_DATA] instanceof FHIRMeasureSupplementalData) {
                $this->addSupplementalData($data[self::FIELD_SUPPLEMENTAL_DATA]);
            } else {
                $this->addSupplementalData(new FHIRMeasureSupplementalData($data[self::FIELD_SUPPLEMENTAL_DATA]));
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
        if (isset($data[self::FIELD_TOPIC])) {
            if (is_array($data[self::FIELD_TOPIC])) {
                foreach($data[self::FIELD_TOPIC] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addTopic($v);
                    } else {
                        $this->addTopic(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_TOPIC] instanceof FHIRCodeableConcept) {
                $this->addTopic($data[self::FIELD_TOPIC]);
            } else {
                $this->addTopic(new FHIRCodeableConcept($data[self::FIELD_TOPIC]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if (is_array($data[self::FIELD_TYPE])) {
                foreach($data[self::FIELD_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addType($v);
                    } else {
                        $this->addType(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->addType($data[self::FIELD_TYPE]);
            } else {
                $this->addType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
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
        if (isset($data[self::FIELD_USAGE]) || isset($data[self::FIELD_USAGE_EXT])) {
            if (isset($data[self::FIELD_USAGE])) {
                $value = $data[self::FIELD_USAGE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_USAGE_EXT]) && is_array($data[self::FIELD_USAGE_EXT])) {
                $ext = $data[self::FIELD_USAGE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setUsage($value);
                } else if (is_array($value)) {
                    $this->setUsage(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setUsage(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setUsage(new FHIRString($ext));
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
        return "<Measure{$xmlns}></Measure>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    public function getApprovalDate()
    {
        return $this->approvalDate;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate $approvalDate
     * @return static
     */
    public function setApprovalDate($approvalDate = null)
    {
        if (null === $approvalDate) {
            $this->approvalDate = null;
            return $this;
        }
        if ($approvalDate instanceof FHIRDate) {
            $this->approvalDate = $approvalDate;
            return $this;
        }
        $this->approvalDate = new FHIRDate($approvalDate);
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual or organization primarily involved in the creation and
     * maintenance of the content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual or organization primarily involved in the creation and
     * maintenance of the content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail $author
     * @return static
     */
    public function addAuthor(FHIRContactDetail $author = null)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual or organization primarily involved in the creation and
     * maintenance of the content.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[] $author
     * @return static
     */
    public function setAuthor(array $author = [])
    {
        $this->author = [];
        if ([] === $author) {
            return $this;
        }
        foreach($author as $v) {
            if ($v instanceof FHIRContactDetail) {
                $this->addAuthor($v);
            } else {
                $this->addAuthor(new FHIRContactDetail($v));
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
     * Provides a summary of relevant clinical guidelines or other clinical
     * recommendations supporting the measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    public function getClinicalRecommendationStatement()
    {
        return $this->clinicalRecommendationStatement;
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
     * Provides a summary of relevant clinical guidelines or other clinical
     * recommendations supporting the measure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $clinicalRecommendationStatement
     * @return static
     */
    public function setClinicalRecommendationStatement($clinicalRecommendationStatement = null)
    {
        if (null === $clinicalRecommendationStatement) {
            $this->clinicalRecommendationStatement = null;
            return $this;
        }
        if ($clinicalRecommendationStatement instanceof FHIRMarkdown) {
            $this->clinicalRecommendationStatement = $clinicalRecommendationStatement;
            return $this;
        }
        $this->clinicalRecommendationStatement = new FHIRMarkdown($clinicalRecommendationStatement);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getCompositeScoring()
    {
        return $this->compositeScoring;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $compositeScoring
     * @return static
     */
    public function setCompositeScoring(FHIRCodeableConcept $compositeScoring = null)
    {
        $this->compositeScoring = $compositeScoring;
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
     * A copyright statement relating to the measure and/or its contents. Copyright
     * statements are generally legal restrictions on the use and publishing of the
     * measure.
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
     * A copyright statement relating to the measure and/or its contents. Copyright
     * statements are generally legal restrictions on the use and publishing of the
     * measure.
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
     * The date (and optionally time) when the measure was published. The date must
     * change when the business version changes and it must change if the status code
     * changes. In addition, it should change when the substantive content of the
     * measure changes.
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
     * The date (and optionally time) when the measure was published. The date must
     * change when the business version changes and it must change if the status code
     * changes. In addition, it should change when the substantive content of the
     * measure changes.
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
     * Provides a description of an individual term used within the measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown[]
     */
    public function getDefinition()
    {
        return $this->definition;
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
     * Provides a description of an individual term used within the measure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $definition
     * @return static
     */
    public function addDefinition($definition = null)
    {
        if (null === $definition) {
            $this->definition = [];
            return $this;
        }
        if ($definition instanceof FHIRMarkdown) {
            $this->definition[] = $definition;
            return $this;
        }
        $this->definition[] = new FHIRMarkdown($definition);
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
     * Provides a description of an individual term used within the measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown[] $definition
     * @return static
     */
    public function setDefinition(array $definition = [])
    {
        $this->definition = [];
        if ([] === $definition) {
            return $this;
        }
        foreach($definition as $v) {
            if ($v instanceof FHIRMarkdown) {
                $this->addDefinition($v);
            } else {
                $this->addDefinition(new FHIRMarkdown($v));
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
     * A free text natural language description of the measure from a consumer's
     * perspective.
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
     * A free text natural language description of the measure from a consumer's
     * perspective.
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
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Notices and disclaimers regarding the use of the measure or related to
     * intellectual property (such as code systems) referenced by the measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    public function getDisclaimer()
    {
        return $this->disclaimer;
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
     * Notices and disclaimers regarding the use of the measure or related to
     * intellectual property (such as code systems) referenced by the measure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $disclaimer
     * @return static
     */
    public function setDisclaimer($disclaimer = null)
    {
        if (null === $disclaimer) {
            $this->disclaimer = null;
            return $this;
        }
        if ($disclaimer instanceof FHIRMarkdown) {
            $this->disclaimer = $disclaimer;
            return $this;
        }
        $this->disclaimer = new FHIRMarkdown($disclaimer);
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for internal coherence of
     * the content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[]
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for internal coherence of
     * the content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail $editor
     * @return static
     */
    public function addEditor(FHIRContactDetail $editor = null)
    {
        $this->editor[] = $editor;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for internal coherence of
     * the content.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[] $editor
     * @return static
     */
    public function setEditor(array $editor = [])
    {
        $this->editor = [];
        if ([] === $editor) {
            return $this;
        }
        foreach($editor as $v) {
            if ($v instanceof FHIRContactDetail) {
                $this->addEditor($v);
            } else {
                $this->addEditor(new FHIRContactDetail($v));
            }
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the measure content was or is planned to be in active
     * use.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $effectivePeriod
     * @return static
     */
    public function setEffectivePeriod(FHIRPeriod $effectivePeriod = null)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization responsible for officially endorsing the content
     * for use in some setting.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[]
     */
    public function getEndorser()
    {
        return $this->endorser;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization responsible for officially endorsing the content
     * for use in some setting.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail $endorser
     * @return static
     */
    public function addEndorser(FHIRContactDetail $endorser = null)
    {
        $this->endorser[] = $endorser;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization responsible for officially endorsing the content
     * for use in some setting.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[] $endorser
     * @return static
     */
    public function setEndorser(array $endorser = [])
    {
        $this->endorser = [];
        if ([] === $endorser) {
            return $this;
        }
        foreach($endorser as $v) {
            if ($v instanceof FHIRContactDetail) {
                $this->addEndorser($v);
            } else {
                $this->addEndorser(new FHIRContactDetail($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A Boolean value to indicate that this measure is authored for testing purposes
     * (or education/evaluation/marketing) and is not intended to be used for genuine
     * usage.
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
     * A Boolean value to indicate that this measure is authored for testing purposes
     * (or education/evaluation/marketing) and is not intended to be used for genuine
     * usage.
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
     * The Measure resource provides the definition of a quality measure.
     *
     * A group of population criteria for the measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * The Measure resource provides the definition of a quality measure.
     *
     * A group of population criteria for the measure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup $group
     * @return static
     */
    public function addGroup(FHIRMeasureGroup $group = null)
    {
        $this->group[] = $group;
        return $this;
    }

    /**
     * The Measure resource provides the definition of a quality measure.
     *
     * A group of population criteria for the measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup[] $group
     * @return static
     */
    public function setGroup(array $group = [])
    {
        $this->group = [];
        if ([] === $group) {
            return $this;
        }
        foreach($group as $v) {
            if ($v instanceof FHIRMeasureGroup) {
                $this->addGroup($v);
            } else {
                $this->addGroup(new FHIRMeasureGroup($v));
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
     * Additional guidance for the measure including how it can be used in a clinical
     * context, and the intent of the measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    public function getGuidance()
    {
        return $this->guidance;
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
     * Additional guidance for the measure including how it can be used in a clinical
     * context, and the intent of the measure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $guidance
     * @return static
     */
    public function setGuidance($guidance = null)
    {
        if (null === $guidance) {
            $this->guidance = null;
            return $this;
        }
        if ($guidance instanceof FHIRMarkdown) {
            $this->guidance = $guidance;
            return $this;
        }
        $this->guidance = new FHIRMarkdown($guidance);
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this measure when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this measure when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this measure when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information on whether an increase or decrease in score is the preferred result
     * (e.g., a higher score indicates better quality OR a lower score indicates better
     * quality OR quality is within a range).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getImprovementNotation()
    {
        return $this->improvementNotation;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information on whether an increase or decrease in score is the preferred result
     * (e.g., a higher score indicates better quality OR a lower score indicates better
     * quality OR quality is within a range).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $improvementNotation
     * @return static
     */
    public function setImprovementNotation(FHIRCodeableConcept $improvementNotation = null)
    {
        $this->improvementNotation = $improvementNotation;
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
     * A legal or geographic region in which the measure is intended to be used.
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
     * A legal or geographic region in which the measure is intended to be used.
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
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval but does not change the original approval date.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    public function getLastReviewDate()
    {
        return $this->lastReviewDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval but does not change the original approval date.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate $lastReviewDate
     * @return static
     */
    public function setLastReviewDate($lastReviewDate = null)
    {
        if (null === $lastReviewDate) {
            $this->lastReviewDate = null;
            return $this;
        }
        if ($lastReviewDate instanceof FHIRDate) {
            $this->lastReviewDate = $lastReviewDate;
            return $this;
        }
        $this->lastReviewDate = new FHIRDate($lastReviewDate);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a Library resource containing the formal logic used by the
     * measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    public function getLibrary()
    {
        return $this->library;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a Library resource containing the formal logic used by the
     * measure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $library
     * @return static
     */
    public function addLibrary($library = null)
    {
        if (null === $library) {
            $this->library = [];
            return $this;
        }
        if ($library instanceof FHIRCanonical) {
            $this->library[] = $library;
            return $this;
        }
        $this->library[] = new FHIRCanonical($library);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a Library resource containing the formal logic used by the
     * measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[] $library
     * @return static
     */
    public function setLibrary(array $library = [])
    {
        $this->library = [];
        if ([] === $library) {
            return $this;
        }
        foreach($library as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->addLibrary($v);
            } else {
                $this->addLibrary(new FHIRCanonical($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the measure. This name should be usable as
     * an identifier for the module by machine processing applications such as code
     * generation.
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
     * A natural language name identifying the measure. This name should be usable as
     * an identifier for the module by machine processing applications such as code
     * generation.
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
     * The name of the organization or individual that published the measure.
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
     * The name of the organization or individual that published the measure.
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
     * Explanation of why this measure is needed and why it has been designed as it
     * has.
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
     * Explanation of why this measure is needed and why it has been designed as it
     * has.
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes how to combine the information calculated, based on logic in each of
     * several populations, into one summarized result.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getRateAggregation()
    {
        return $this->rateAggregation;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes how to combine the information calculated, based on logic in each of
     * several populations, into one summarized result.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $rateAggregation
     * @return static
     */
    public function setRateAggregation($rateAggregation = null)
    {
        if (null === $rateAggregation) {
            $this->rateAggregation = null;
            return $this;
        }
        if ($rateAggregation instanceof FHIRString) {
            $this->rateAggregation = $rateAggregation;
            return $this;
        }
        $this->rateAggregation = new FHIRString($rateAggregation);
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
     * Provides a succinct statement of the need for the measure. Usually includes
     * statements pertaining to importance criterion: impact, gap in care, and
     * evidence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    public function getRationale()
    {
        return $this->rationale;
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
     * Provides a succinct statement of the need for the measure. Usually includes
     * statements pertaining to importance criterion: impact, gap in care, and
     * evidence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $rationale
     * @return static
     */
    public function setRationale($rationale = null)
    {
        if (null === $rationale) {
            $this->rationale = null;
            return $this;
        }
        if ($rationale instanceof FHIRMarkdown) {
            $this->rationale = $rationale;
            return $this;
        }
        $this->rationale = new FHIRMarkdown($rationale);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact[]
     */
    public function getRelatedArtifact()
    {
        return $this->relatedArtifact;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact $relatedArtifact
     * @return static
     */
    public function addRelatedArtifact(FHIRRelatedArtifact $relatedArtifact = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact[] $relatedArtifact
     * @return static
     */
    public function setRelatedArtifact(array $relatedArtifact = [])
    {
        $this->relatedArtifact = [];
        if ([] === $relatedArtifact) {
            return $this;
        }
        foreach($relatedArtifact as $v) {
            if ($v instanceof FHIRRelatedArtifact) {
                $this->addRelatedArtifact($v);
            } else {
                $this->addRelatedArtifact(new FHIRRelatedArtifact($v));
            }
        }
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for review of some aspect of
     * the content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[]
     */
    public function getReviewer()
    {
        return $this->reviewer;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for review of some aspect of
     * the content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail $reviewer
     * @return static
     */
    public function addReviewer(FHIRContactDetail $reviewer = null)
    {
        $this->reviewer[] = $reviewer;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for review of some aspect of
     * the content.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[] $reviewer
     * @return static
     */
    public function setReviewer(array $reviewer = [])
    {
        $this->reviewer = [];
        if ([] === $reviewer) {
            return $this;
        }
        foreach($reviewer as $v) {
            if ($v instanceof FHIRContactDetail) {
                $this->addReviewer($v);
            } else {
                $this->addReviewer(new FHIRContactDetail($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the risk adjustment factors that may impact the resulting score
     * for the measure and how they may be accounted for when computing and reporting
     * measure results.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getRiskAdjustment()
    {
        return $this->riskAdjustment;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the risk adjustment factors that may impact the resulting score
     * for the measure and how they may be accounted for when computing and reporting
     * measure results.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $riskAdjustment
     * @return static
     */
    public function setRiskAdjustment($riskAdjustment = null)
    {
        if (null === $riskAdjustment) {
            $this->riskAdjustment = null;
            return $this;
        }
        if ($riskAdjustment instanceof FHIRString) {
            $this->riskAdjustment = $riskAdjustment;
            return $this;
        }
        $this->riskAdjustment = new FHIRString($riskAdjustment);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how the calculation is performed for the measure, including
     * proportion, ratio, continuous-variable, and cohort. The value set is extensible,
     * allowing additional measure scoring types to be represented.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getScoring()
    {
        return $this->scoring;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how the calculation is performed for the measure, including
     * proportion, ratio, continuous-variable, and cohort. The value set is extensible,
     * allowing additional measure scoring types to be represented.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $scoring
     * @return static
     */
    public function setScoring(FHIRCodeableConcept $scoring = null)
    {
        $this->scoring = $scoring;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this measure. Enables tracking the life-cycle of the content.
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
     * The status of this measure. Enables tracking the life-cycle of the content.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended subjects for the measure. If this element is not provided, a
     * Patient subject is assumed, but the subject of the measure can be anything.
     * (choose any one of subject*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getSubjectCodeableConcept()
    {
        return $this->subjectCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended subjects for the measure. If this element is not provided, a
     * Patient subject is assumed, but the subject of the measure can be anything.
     * (choose any one of subject*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $subjectCodeableConcept
     * @return static
     */
    public function setSubjectCodeableConcept(FHIRCodeableConcept $subjectCodeableConcept = null)
    {
        $this->subjectCodeableConcept = $subjectCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended subjects for the measure. If this element is not provided, a
     * Patient subject is assumed, but the subject of the measure can be anything.
     * (choose any one of subject*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getSubjectReference()
    {
        return $this->subjectReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended subjects for the measure. If this element is not provided, a
     * Patient subject is assumed, but the subject of the measure can be anything.
     * (choose any one of subject*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $subjectReference
     * @return static
     */
    public function setSubjectReference(FHIRReference $subjectReference = null)
    {
        $this->subjectReference = $subjectReference;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An explanatory or alternate title for the measure giving additional information
     * about its content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An explanatory or alternate title for the measure giving additional information
     * about its content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $subtitle
     * @return static
     */
    public function setSubtitle($subtitle = null)
    {
        if (null === $subtitle) {
            $this->subtitle = null;
            return $this;
        }
        if ($subtitle instanceof FHIRString) {
            $this->subtitle = $subtitle;
            return $this;
        }
        $this->subtitle = new FHIRString($subtitle);
        return $this;
    }

    /**
     * The Measure resource provides the definition of a quality measure.
     *
     * The supplemental data criteria for the measure report, specified as either the
     * name of a valid CQL expression within a referenced library, or a valid FHIR
     * Resource Path.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData[]
     */
    public function getSupplementalData()
    {
        return $this->supplementalData;
    }

    /**
     * The Measure resource provides the definition of a quality measure.
     *
     * The supplemental data criteria for the measure report, specified as either the
     * name of a valid CQL expression within a referenced library, or a valid FHIR
     * Resource Path.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData $supplementalData
     * @return static
     */
    public function addSupplementalData(FHIRMeasureSupplementalData $supplementalData = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData[] $supplementalData
     * @return static
     */
    public function setSupplementalData(array $supplementalData = [])
    {
        $this->supplementalData = [];
        if ([] === $supplementalData) {
            return $this;
        }
        foreach($supplementalData as $v) {
            if ($v instanceof FHIRMeasureSupplementalData) {
                $this->addSupplementalData($v);
            } else {
                $this->addSupplementalData(new FHIRMeasureSupplementalData($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the measure.
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
     * A short, descriptive, user-friendly title for the measure.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive topics related to the content of the measure. Topics provide a
     * high-level categorization grouping types of measures that can be useful for
     * filtering and searching.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive topics related to the content of the measure. Topics provide a
     * high-level categorization grouping types of measures that can be useful for
     * filtering and searching.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $topic
     * @return static
     */
    public function addTopic(FHIRCodeableConcept $topic = null)
    {
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
     * high-level categorization grouping types of measures that can be useful for
     * filtering and searching.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $topic
     * @return static
     */
    public function setTopic(array $topic = [])
    {
        $this->topic = [];
        if ([] === $topic) {
            return $this;
        }
        foreach($topic as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addTopic($v);
            } else {
                $this->addTopic(new FHIRCodeableConcept($v));
            }
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType()
    {
        return $this->type;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function addType(FHIRCodeableConcept $type = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $type
     * @return static
     */
    public function setType(array $type = [])
    {
        $this->type = [];
        if ([] === $type) {
            return $this;
        }
        foreach($type as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addType($v);
            } else {
                $this->addType(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this measure when it is referenced in a
     * specification, model, design or an instance; also called its canonical
     * identifier. This SHOULD be globally unique and SHOULD be a literal address at
     * which at which an authoritative instance of this measure is (or will be)
     * published. This URL can be the target of a canonical reference. It SHALL remain
     * the same when the measure is stored on different servers.
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
     * An absolute URI that is used to identify this measure when it is referenced in a
     * specification, model, design or an instance; also called its canonical
     * identifier. This SHOULD be globally unique and SHOULD be a literal address at
     * which at which an authoritative instance of this measure is (or will be)
     * published. This URL can be the target of a canonical reference. It SHALL remain
     * the same when the measure is stored on different servers.
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A detailed description, from a clinical perspective, of how the measure is used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A detailed description, from a clinical perspective, of how the measure is used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $usage
     * @return static
     */
    public function setUsage($usage = null)
    {
        if (null === $usage) {
            $this->usage = null;
            return $this;
        }
        if ($usage instanceof FHIRString) {
            $this->usage = $usage;
            return $this;
        }
        $this->usage = new FHIRString($usage);
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
     * be used to assist with indexing and searching for appropriate measure instances.
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
     * be used to assist with indexing and searching for appropriate measure instances.
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
     * be used to assist with indexing and searching for appropriate measure instances.
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
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
        if (null !== ($v = $this->getApprovalDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_APPROVAL_DATE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAuthor())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AUTHOR, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getClinicalRecommendationStatement())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCompositeScoring())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMPOSITE_SCORING] = $fieldErrs;
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
        if ([] !== ($vs = $this->getDefinition())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DEFINITION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDisclaimer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISCLAIMER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getEditor())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EDITOR, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EFFECTIVE_PERIOD] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getEndorser())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ENDORSER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getExperimental())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPERIMENTAL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getGroup())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_GROUP, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getGuidance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GUIDANCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getImprovementNotation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IMPROVEMENT_NOTATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_JURISDICTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getLastReviewDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LAST_REVIEW_DATE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getLibrary())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LIBRARY, $i)] = $fieldErrs;
                }
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
        if (null !== ($v = $this->getRateAggregation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RATE_AGGREGATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRationale())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RATIONALE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRelatedArtifact())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATED_ARTIFACT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReviewer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REVIEWER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRiskAdjustment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RISK_ADJUSTMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getScoring())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SCORING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubjectCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubjectReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubtitle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBTITLE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSupplementalData())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUPPLEMENTAL_DATA, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TITLE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getTopic())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TOPIC, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUsage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_USAGE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getUseContext())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_USE_CONTEXT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getVersion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_APPROVAL_DATE])) {
            $v = $this->getApprovalDate();
            foreach($validationRules[self::FIELD_APPROVAL_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_APPROVAL_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPROVAL_DATE])) {
                        $errs[self::FIELD_APPROVAL_DATE] = [];
                    }
                    $errs[self::FIELD_APPROVAL_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHOR])) {
            $v = $this->getAuthor();
            foreach($validationRules[self::FIELD_AUTHOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_AUTHOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHOR])) {
                        $errs[self::FIELD_AUTHOR] = [];
                    }
                    $errs[self::FIELD_AUTHOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT])) {
            $v = $this->getClinicalRecommendationStatement();
            foreach($validationRules[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT])) {
                        $errs[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT] = [];
                    }
                    $errs[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPOSITE_SCORING])) {
            $v = $this->getCompositeScoring();
            foreach($validationRules[self::FIELD_COMPOSITE_SCORING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_COMPOSITE_SCORING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPOSITE_SCORING])) {
                        $errs[self::FIELD_COMPOSITE_SCORING] = [];
                    }
                    $errs[self::FIELD_COMPOSITE_SCORING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTACT])) {
            $v = $this->getContact();
            foreach($validationRules[self::FIELD_CONTACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_CONTACT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_COPYRIGHT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION])) {
            $v = $this->getDefinition();
            foreach($validationRules[self::FIELD_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION])) {
                        $errs[self::FIELD_DEFINITION] = [];
                    }
                    $errs[self::FIELD_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISCLAIMER])) {
            $v = $this->getDisclaimer();
            foreach($validationRules[self::FIELD_DISCLAIMER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_DISCLAIMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISCLAIMER])) {
                        $errs[self::FIELD_DISCLAIMER] = [];
                    }
                    $errs[self::FIELD_DISCLAIMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EDITOR])) {
            $v = $this->getEditor();
            foreach($validationRules[self::FIELD_EDITOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_EDITOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EDITOR])) {
                        $errs[self::FIELD_EDITOR] = [];
                    }
                    $errs[self::FIELD_EDITOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EFFECTIVE_PERIOD])) {
            $v = $this->getEffectivePeriod();
            foreach($validationRules[self::FIELD_EFFECTIVE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_EFFECTIVE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EFFECTIVE_PERIOD])) {
                        $errs[self::FIELD_EFFECTIVE_PERIOD] = [];
                    }
                    $errs[self::FIELD_EFFECTIVE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENDORSER])) {
            $v = $this->getEndorser();
            foreach($validationRules[self::FIELD_ENDORSER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_ENDORSER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENDORSER])) {
                        $errs[self::FIELD_ENDORSER] = [];
                    }
                    $errs[self::FIELD_ENDORSER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPERIMENTAL])) {
            $v = $this->getExperimental();
            foreach($validationRules[self::FIELD_EXPERIMENTAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_EXPERIMENTAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPERIMENTAL])) {
                        $errs[self::FIELD_EXPERIMENTAL] = [];
                    }
                    $errs[self::FIELD_EXPERIMENTAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GROUP])) {
            $v = $this->getGroup();
            foreach($validationRules[self::FIELD_GROUP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_GROUP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUP])) {
                        $errs[self::FIELD_GROUP] = [];
                    }
                    $errs[self::FIELD_GROUP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GUIDANCE])) {
            $v = $this->getGuidance();
            foreach($validationRules[self::FIELD_GUIDANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_GUIDANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GUIDANCE])) {
                        $errs[self::FIELD_GUIDANCE] = [];
                    }
                    $errs[self::FIELD_GUIDANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPROVEMENT_NOTATION])) {
            $v = $this->getImprovementNotation();
            foreach($validationRules[self::FIELD_IMPROVEMENT_NOTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_IMPROVEMENT_NOTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPROVEMENT_NOTATION])) {
                        $errs[self::FIELD_IMPROVEMENT_NOTATION] = [];
                    }
                    $errs[self::FIELD_IMPROVEMENT_NOTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_JURISDICTION])) {
            $v = $this->getJurisdiction();
            foreach($validationRules[self::FIELD_JURISDICTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_JURISDICTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_JURISDICTION])) {
                        $errs[self::FIELD_JURISDICTION] = [];
                    }
                    $errs[self::FIELD_JURISDICTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_REVIEW_DATE])) {
            $v = $this->getLastReviewDate();
            foreach($validationRules[self::FIELD_LAST_REVIEW_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_LAST_REVIEW_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_REVIEW_DATE])) {
                        $errs[self::FIELD_LAST_REVIEW_DATE] = [];
                    }
                    $errs[self::FIELD_LAST_REVIEW_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LIBRARY])) {
            $v = $this->getLibrary();
            foreach($validationRules[self::FIELD_LIBRARY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_LIBRARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LIBRARY])) {
                        $errs[self::FIELD_LIBRARY] = [];
                    }
                    $errs[self::FIELD_LIBRARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_NAME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_PUBLISHER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_PURPOSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PURPOSE])) {
                        $errs[self::FIELD_PURPOSE] = [];
                    }
                    $errs[self::FIELD_PURPOSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RATE_AGGREGATION])) {
            $v = $this->getRateAggregation();
            foreach($validationRules[self::FIELD_RATE_AGGREGATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_RATE_AGGREGATION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_RATIONALE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RATIONALE])) {
                        $errs[self::FIELD_RATIONALE] = [];
                    }
                    $errs[self::FIELD_RATIONALE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATED_ARTIFACT])) {
            $v = $this->getRelatedArtifact();
            foreach($validationRules[self::FIELD_RELATED_ARTIFACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_RELATED_ARTIFACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED_ARTIFACT])) {
                        $errs[self::FIELD_RELATED_ARTIFACT] = [];
                    }
                    $errs[self::FIELD_RELATED_ARTIFACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REVIEWER])) {
            $v = $this->getReviewer();
            foreach($validationRules[self::FIELD_REVIEWER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_REVIEWER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REVIEWER])) {
                        $errs[self::FIELD_REVIEWER] = [];
                    }
                    $errs[self::FIELD_REVIEWER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RISK_ADJUSTMENT])) {
            $v = $this->getRiskAdjustment();
            foreach($validationRules[self::FIELD_RISK_ADJUSTMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_RISK_ADJUSTMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RISK_ADJUSTMENT])) {
                        $errs[self::FIELD_RISK_ADJUSTMENT] = [];
                    }
                    $errs[self::FIELD_RISK_ADJUSTMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SCORING])) {
            $v = $this->getScoring();
            foreach($validationRules[self::FIELD_SCORING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_SCORING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SCORING])) {
                        $errs[self::FIELD_SCORING] = [];
                    }
                    $errs[self::FIELD_SCORING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT_CODEABLE_CONCEPT])) {
            $v = $this->getSubjectCodeableConcept();
            foreach($validationRules[self::FIELD_SUBJECT_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_SUBJECT_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_SUBJECT_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_SUBJECT_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT_REFERENCE])) {
            $v = $this->getSubjectReference();
            foreach($validationRules[self::FIELD_SUBJECT_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_SUBJECT_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT_REFERENCE])) {
                        $errs[self::FIELD_SUBJECT_REFERENCE] = [];
                    }
                    $errs[self::FIELD_SUBJECT_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBTITLE])) {
            $v = $this->getSubtitle();
            foreach($validationRules[self::FIELD_SUBTITLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_SUBTITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBTITLE])) {
                        $errs[self::FIELD_SUBTITLE] = [];
                    }
                    $errs[self::FIELD_SUBTITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPLEMENTAL_DATA])) {
            $v = $this->getSupplementalData();
            foreach($validationRules[self::FIELD_SUPPLEMENTAL_DATA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_SUPPLEMENTAL_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPLEMENTAL_DATA])) {
                        $errs[self::FIELD_SUPPLEMENTAL_DATA] = [];
                    }
                    $errs[self::FIELD_SUPPLEMENTAL_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TITLE])) {
            $v = $this->getTitle();
            foreach($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TOPIC])) {
            $v = $this->getTopic();
            foreach($validationRules[self::FIELD_TOPIC] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_TOPIC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TOPIC])) {
                        $errs[self::FIELD_TOPIC] = [];
                    }
                    $errs[self::FIELD_TOPIC][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_URL])) {
                        $errs[self::FIELD_URL] = [];
                    }
                    $errs[self::FIELD_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USAGE])) {
            $v = $this->getUsage();
            foreach($validationRules[self::FIELD_USAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_USAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USAGE])) {
                        $errs[self::FIELD_USAGE] = [];
                    }
                    $errs[self::FIELD_USAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USE_CONTEXT])) {
            $v = $this->getUseContext();
            foreach($validationRules[self::FIELD_USE_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_USE_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USE_CONTEXT])) {
                        $errs[self::FIELD_USE_CONTEXT] = [];
                    }
                    $errs[self::FIELD_USE_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE, self::FIELD_VERSION, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMeasure $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMeasure
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
                throw new \DomainException(sprintf('FHIRMeasure::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMeasure::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMeasure;
        } elseif (!is_object($type) || !($type instanceof FHIRMeasure)) {
            throw new \RuntimeException(sprintf(
                'FHIRMeasure::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMeasure or null, %s seen.',
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
        if (isset($children->approvalDate)) {
            $type->setApprovalDate(FHIRDate::xmlUnserialize($children->approvalDate));
        }
        if (isset($attributes->approvalDate)) {
            $pt = $type->getApprovalDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->approvalDate);
            } else {
                $type->setApprovalDate((string)$attributes->approvalDate);
            }
        }
        if (isset($children->author)) {
            foreach($children->author as $child) {
                $type->addAuthor(FHIRContactDetail::xmlUnserialize($child));
            }
        }
        if (isset($children->clinicalRecommendationStatement)) {
            $type->setClinicalRecommendationStatement(FHIRMarkdown::xmlUnserialize($children->clinicalRecommendationStatement));
        }
        if (isset($attributes->clinicalRecommendationStatement)) {
            $pt = $type->getClinicalRecommendationStatement();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->clinicalRecommendationStatement);
            } else {
                $type->setClinicalRecommendationStatement((string)$attributes->clinicalRecommendationStatement);
            }
        }
        if (isset($children->compositeScoring)) {
            $type->setCompositeScoring(FHIRCodeableConcept::xmlUnserialize($children->compositeScoring));
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
        if (isset($children->definition)) {
            foreach($children->definition as $child) {
                $type->addDefinition(FHIRMarkdown::xmlUnserialize($child));
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
        if (isset($children->disclaimer)) {
            $type->setDisclaimer(FHIRMarkdown::xmlUnserialize($children->disclaimer));
        }
        if (isset($attributes->disclaimer)) {
            $pt = $type->getDisclaimer();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->disclaimer);
            } else {
                $type->setDisclaimer((string)$attributes->disclaimer);
            }
        }
        if (isset($children->editor)) {
            foreach($children->editor as $child) {
                $type->addEditor(FHIRContactDetail::xmlUnserialize($child));
            }
        }
        if (isset($children->effectivePeriod)) {
            $type->setEffectivePeriod(FHIRPeriod::xmlUnserialize($children->effectivePeriod));
        }
        if (isset($children->endorser)) {
            foreach($children->endorser as $child) {
                $type->addEndorser(FHIRContactDetail::xmlUnserialize($child));
            }
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
        if (isset($children->group)) {
            foreach($children->group as $child) {
                $type->addGroup(FHIRMeasureGroup::xmlUnserialize($child));
            }
        }
        if (isset($children->guidance)) {
            $type->setGuidance(FHIRMarkdown::xmlUnserialize($children->guidance));
        }
        if (isset($attributes->guidance)) {
            $pt = $type->getGuidance();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->guidance);
            } else {
                $type->setGuidance((string)$attributes->guidance);
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->improvementNotation)) {
            $type->setImprovementNotation(FHIRCodeableConcept::xmlUnserialize($children->improvementNotation));
        }
        if (isset($children->jurisdiction)) {
            foreach($children->jurisdiction as $child) {
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->lastReviewDate)) {
            $type->setLastReviewDate(FHIRDate::xmlUnserialize($children->lastReviewDate));
        }
        if (isset($attributes->lastReviewDate)) {
            $pt = $type->getLastReviewDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->lastReviewDate);
            } else {
                $type->setLastReviewDate((string)$attributes->lastReviewDate);
            }
        }
        if (isset($children->library)) {
            foreach($children->library as $child) {
                $type->addLibrary(FHIRCanonical::xmlUnserialize($child));
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
        if (isset($children->rateAggregation)) {
            $type->setRateAggregation(FHIRString::xmlUnserialize($children->rateAggregation));
        }
        if (isset($attributes->rateAggregation)) {
            $pt = $type->getRateAggregation();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->rateAggregation);
            } else {
                $type->setRateAggregation((string)$attributes->rateAggregation);
            }
        }
        if (isset($children->rationale)) {
            $type->setRationale(FHIRMarkdown::xmlUnserialize($children->rationale));
        }
        if (isset($attributes->rationale)) {
            $pt = $type->getRationale();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->rationale);
            } else {
                $type->setRationale((string)$attributes->rationale);
            }
        }
        if (isset($children->relatedArtifact)) {
            foreach($children->relatedArtifact as $child) {
                $type->addRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($child));
            }
        }
        if (isset($children->reviewer)) {
            foreach($children->reviewer as $child) {
                $type->addReviewer(FHIRContactDetail::xmlUnserialize($child));
            }
        }
        if (isset($children->riskAdjustment)) {
            $type->setRiskAdjustment(FHIRString::xmlUnserialize($children->riskAdjustment));
        }
        if (isset($attributes->riskAdjustment)) {
            $pt = $type->getRiskAdjustment();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->riskAdjustment);
            } else {
                $type->setRiskAdjustment((string)$attributes->riskAdjustment);
            }
        }
        if (isset($children->scoring)) {
            $type->setScoring(FHIRCodeableConcept::xmlUnserialize($children->scoring));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRPublicationStatus::xmlUnserialize($children->status));
        }
        if (isset($children->subjectCodeableConcept)) {
            $type->setSubjectCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->subjectCodeableConcept));
        }
        if (isset($children->subjectReference)) {
            $type->setSubjectReference(FHIRReference::xmlUnserialize($children->subjectReference));
        }
        if (isset($children->subtitle)) {
            $type->setSubtitle(FHIRString::xmlUnserialize($children->subtitle));
        }
        if (isset($attributes->subtitle)) {
            $pt = $type->getSubtitle();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->subtitle);
            } else {
                $type->setSubtitle((string)$attributes->subtitle);
            }
        }
        if (isset($children->supplementalData)) {
            foreach($children->supplementalData as $child) {
                $type->addSupplementalData(FHIRMeasureSupplementalData::xmlUnserialize($child));
            }
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
        if (isset($children->topic)) {
            foreach($children->topic as $child) {
                $type->addTopic(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            foreach($children->type as $child) {
                $type->addType(FHIRCodeableConcept::xmlUnserialize($child));
            }
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
        if (isset($children->usage)) {
            $type->setUsage(FHIRString::xmlUnserialize($children->usage));
        }
        if (isset($attributes->usage)) {
            $pt = $type->getUsage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->usage);
            } else {
                $type->setUsage((string)$attributes->usage);
            }
        }
        if (isset($children->useContext)) {
            foreach($children->useContext as $child) {
                $type->addUseContext(FHIRUsageContext::xmlUnserialize($child));
            }
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
        if (null !== ($v = $this->getApprovalDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_APPROVAL_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getAuthor())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHOR, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getClinicalRecommendationStatement())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCompositeScoring())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COMPOSITE_SCORING, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getDefinition())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDisclaimer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISCLAIMER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getEditor())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_EDITOR, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EFFECTIVE_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getEndorser())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ENDORSER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getExperimental())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPERIMENTAL, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getGroup())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_GROUP, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getGuidance())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GUIDANCE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getImprovementNotation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IMPROVEMENT_NOTATION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_JURISDICTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getLastReviewDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LAST_REVIEW_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getLibrary())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LIBRARY, null, $v->_getFHIRXMLNamespace()));
            }
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
        if (null !== ($v = $this->getRateAggregation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RATE_AGGREGATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRationale())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RATIONALE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getRelatedArtifact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELATED_ARTIFACT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getReviewer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REVIEWER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getRiskAdjustment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RISK_ADJUSTMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getScoring())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SCORING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubjectCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubjectReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubtitle())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBTITLE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSupplementalData())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUPPLEMENTAL_DATA, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getTitle())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TITLE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getTopic())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TOPIC, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getUrl())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_URL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUsage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_USAGE, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getApprovalDate())) {
            $a[self::FIELD_APPROVAL_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_APPROVAL_DATE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getAuthor())) {
            $a[self::FIELD_AUTHOR] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_AUTHOR][] = $v;
            }
        }
        if (null !== ($v = $this->getClinicalRecommendationStatement())) {
            $a[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getCompositeScoring())) {
            $a[self::FIELD_COMPOSITE_SCORING] = $v;
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
        if ([] !== ($vs = $this->getDefinition())) {
            $a[self::FIELD_DEFINITION] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DEFINITION][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRMarkdown::FIELD_VALUE]) || array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRMarkdown::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_DEFINITION_EXT] = $encs;
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
        if (null !== ($v = $this->getDisclaimer())) {
            $a[self::FIELD_DISCLAIMER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_DISCLAIMER_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getEditor())) {
            $a[self::FIELD_EDITOR] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_EDITOR][] = $v;
            }
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $a[self::FIELD_EFFECTIVE_PERIOD] = $v;
        }
        if ([] !== ($vs = $this->getEndorser())) {
            $a[self::FIELD_ENDORSER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ENDORSER][] = $v;
            }
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
        if ([] !== ($vs = $this->getGroup())) {
            $a[self::FIELD_GROUP] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_GROUP][] = $v;
            }
        }
        if (null !== ($v = $this->getGuidance())) {
            $a[self::FIELD_GUIDANCE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_GUIDANCE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if (null !== ($v = $this->getImprovementNotation())) {
            $a[self::FIELD_IMPROVEMENT_NOTATION] = $v;
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
        if (null !== ($v = $this->getLastReviewDate())) {
            $a[self::FIELD_LAST_REVIEW_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_LAST_REVIEW_DATE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getLibrary())) {
            $a[self::FIELD_LIBRARY] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LIBRARY][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRCanonical::FIELD_VALUE]) || array_key_exists(FHIRCanonical::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRCanonical::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_LIBRARY_EXT] = $encs;
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
        if (null !== ($v = $this->getRateAggregation())) {
            $a[self::FIELD_RATE_AGGREGATION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_RATE_AGGREGATION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getRationale())) {
            $a[self::FIELD_RATIONALE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_RATIONALE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getRelatedArtifact())) {
            $a[self::FIELD_RELATED_ARTIFACT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_RELATED_ARTIFACT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getReviewer())) {
            $a[self::FIELD_REVIEWER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REVIEWER][] = $v;
            }
        }
        if (null !== ($v = $this->getRiskAdjustment())) {
            $a[self::FIELD_RISK_ADJUSTMENT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_RISK_ADJUSTMENT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getScoring())) {
            $a[self::FIELD_SCORING] = $v;
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
        if (null !== ($v = $this->getSubjectCodeableConcept())) {
            $a[self::FIELD_SUBJECT_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getSubjectReference())) {
            $a[self::FIELD_SUBJECT_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getSubtitle())) {
            $a[self::FIELD_SUBTITLE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_SUBTITLE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getSupplementalData())) {
            $a[self::FIELD_SUPPLEMENTAL_DATA] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUPPLEMENTAL_DATA][] = $v;
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
        if ([] !== ($vs = $this->getTopic())) {
            $a[self::FIELD_TOPIC] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TOPIC][] = $v;
            }
        }
        if ([] !== ($vs = $this->getType())) {
            $a[self::FIELD_TYPE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TYPE][] = $v;
            }
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
        if (null !== ($v = $this->getUsage())) {
            $a[self::FIELD_USAGE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_USAGE_EXT] = $enc;
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