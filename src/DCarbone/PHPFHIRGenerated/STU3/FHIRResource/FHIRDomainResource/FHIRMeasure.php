<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 10th, 2019 18:12+0000
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContributor;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRelatedArtifact;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * The Measure resource provides the definition of a quality measure.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMeasure
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRMeasure extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEASURE;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_APPROVAL_DATE = 'approvalDate';
    const FIELD_APPROVAL_DATE_EXT = '_approvalDate';
    const FIELD_CLINICAL_RECOMMENDATION_STATEMENT = 'clinicalRecommendationStatement';
    const FIELD_CLINICAL_RECOMMENDATION_STATEMENT_EXT = '_clinicalRecommendationStatement';
    const FIELD_COMPOSITE_SCORING = 'compositeScoring';
    const FIELD_CONTACT = 'contact';
    const FIELD_CONTRIBUTOR = 'contributor';
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
    const FIELD_EFFECTIVE_PERIOD = 'effectivePeriod';
    const FIELD_EXPERIMENTAL = 'experimental';
    const FIELD_EXPERIMENTAL_EXT = '_experimental';
    const FIELD_GROUP = 'group';
    const FIELD_GUIDANCE = 'guidance';
    const FIELD_GUIDANCE_EXT = '_guidance';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_IMPROVEMENT_NOTATION = 'improvementNotation';
    const FIELD_IMPROVEMENT_NOTATION_EXT = '_improvementNotation';
    const FIELD_JURISDICTION = 'jurisdiction';
    const FIELD_LAST_REVIEW_DATE = 'lastReviewDate';
    const FIELD_LAST_REVIEW_DATE_EXT = '_lastReviewDate';
    const FIELD_LIBRARY = 'library';
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
    const FIELD_RISK_ADJUSTMENT = 'riskAdjustment';
    const FIELD_RISK_ADJUSTMENT_EXT = '_riskAdjustment';
    const FIELD_SCORING = 'scoring';
    const FIELD_SET = 'set';
    const FIELD_SET_EXT = '_set';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
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

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    protected $approvalDate = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail[]
     */
    protected $contact = [];

    /**
     * A contributor to the content of a knowledge asset, including authors, editors,
     * reviewers, and endorsers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A contributor to the content of the measure, including authors, editors,
     * reviewers, and endorsers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContributor[]
     */
    protected $contributor = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
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
     * change if and when the business version changes and it must change if the status
     * code changes. In addition, it should change when the substantive content of the
     * measure changes.
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
     * Provides a description of an individual term used within the measure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown[]
     */
    protected $definition = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected $description = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected $disclaimer = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the measure content was or is planned to be in active
     * use.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected $effectivePeriod = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A boolean value to indicate that this measure is authored for testing purposes
     * (or education/evaluation/marketing), and is not intended to be used for genuine
     * usage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $experimental = null;

    /**
     * The Measure resource provides the definition of a quality measure.
     *
     * A group of population criteria for the measure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup[]
     */
    protected $group = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected $guidance = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this measure when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Information on whether an increase or decrease in score is the preferred result
     * (e.g., a higher score indicates better quality OR a lower score indicates better
     * quality OR quality is whthin a range).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $jurisdiction = [];

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval, but doesn't change the original approval date.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    protected $lastReviewDate = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a Library resource containing the formal logic used by the
     * measure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $library = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the measure. This name should be usable as
     * an identifier for the module by machine processing applications such as code
     * generation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $name = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the measure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $publisher = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected $purpose = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes how to combine the information calculated, based on logic in each of
     * several populations, into one summarized result.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $rateAggregation = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRelatedArtifact[]
     */
    protected $relatedArtifact = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the risk adjustment factors that may impact the resulting score
     * for the measure and how they may be accounted for when computing and reporting
     * measure results.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $riskAdjustment = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $scoring = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The measure set, e.g. Preventive Care and Screening.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $set = null;

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this measure. Enables tracking the life-cycle of the content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus
     */
    protected $status = null;

    /**
     * The Measure resource provides the definition of a quality measure.
     *
     * The supplemental data criteria for the measure report, specified as either the
     * name of a valid CQL expression within a referenced library, or a valid FHIR
     * Resource Path.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData[]
     */
    protected $supplementalData = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the measure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $title = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $type = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $url = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A detailed description of how the measure is used from a clinical perspective.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $usage = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext[]
     */
    protected $useContext = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $version = null;

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
        if (isset($data[self::FIELD_APPROVAL_DATE])) {
            $ext = (isset($data[self::FIELD_APPROVAL_DATE_EXT]) && is_array($data[self::FIELD_APPROVAL_DATE_EXT]))
                ? $data[self::FIELD_APPROVAL_DATE_EXT]
                : null;
            if ($data[self::FIELD_APPROVAL_DATE] instanceof FHIRDate) {
                $this->setApprovalDate($data[self::FIELD_APPROVAL_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_APPROVAL_DATE])) {
                $this->setApprovalDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_APPROVAL_DATE]] + $ext));
            } else {
                $this->setApprovalDate(new FHIRDate($data[self::FIELD_APPROVAL_DATE]));
            }
        }
        if (isset($data[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT])) {
            $ext = (isset($data[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT_EXT]) && is_array($data[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT_EXT]))
                ? $data[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT_EXT]
                : null;
            if ($data[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT] instanceof FHIRMarkdown) {
                $this->setClinicalRecommendationStatement($data[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT]);
            } elseif ($ext && is_scalar($data[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT])) {
                $this->setClinicalRecommendationStatement(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT]] + $ext));
            } else {
                $this->setClinicalRecommendationStatement(new FHIRMarkdown($data[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT]));
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
        if (isset($data[self::FIELD_CONTRIBUTOR])) {
            if (is_array($data[self::FIELD_CONTRIBUTOR])) {
                foreach($data[self::FIELD_CONTRIBUTOR] as $v) {
                    if ($v instanceof FHIRContributor) {
                        $this->addContributor($v);
                    } else {
                        $this->addContributor(new FHIRContributor($v));
                    }
                }
            } else if ($data[self::FIELD_CONTRIBUTOR] instanceof FHIRContributor) {
                $this->addContributor($data[self::FIELD_CONTRIBUTOR]);
            } else {
                $this->addContributor(new FHIRContributor($data[self::FIELD_CONTRIBUTOR]));
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
        if (isset($data[self::FIELD_DEFINITION])) {
            $ext = (isset($data[self::FIELD_DEFINITION_EXT]) && is_array($data[self::FIELD_DEFINITION_EXT]))
                ? $data[self::FIELD_DEFINITION_EXT]
                : null;
            if (is_array($data[self::FIELD_DEFINITION])) {
                foreach($data[self::FIELD_DEFINITION] as $i => $v) {
                    if ($v instanceof FHIRMarkdown) {
                        $this->addDefinition($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addDefinition(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addDefinition(new FHIRMarkdown($v));
                    }
                }
            } elseif ($data[self::FIELD_DEFINITION] instanceof FHIRMarkdown) {
                $this->addDefinition($data[self::FIELD_DEFINITION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFINITION])) {
                $this->addDefinition(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_DEFINITION]] + $ext));
            } else {
                $this->addDefinition(new FHIRMarkdown($data[self::FIELD_DEFINITION]));
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
        if (isset($data[self::FIELD_DISCLAIMER])) {
            $ext = (isset($data[self::FIELD_DISCLAIMER_EXT]) && is_array($data[self::FIELD_DISCLAIMER_EXT]))
                ? $data[self::FIELD_DISCLAIMER_EXT]
                : null;
            if ($data[self::FIELD_DISCLAIMER] instanceof FHIRMarkdown) {
                $this->setDisclaimer($data[self::FIELD_DISCLAIMER]);
            } elseif ($ext && is_scalar($data[self::FIELD_DISCLAIMER])) {
                $this->setDisclaimer(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_DISCLAIMER]] + $ext));
            } else {
                $this->setDisclaimer(new FHIRMarkdown($data[self::FIELD_DISCLAIMER]));
            }
        }
        if (isset($data[self::FIELD_EFFECTIVE_PERIOD])) {
            if ($data[self::FIELD_EFFECTIVE_PERIOD] instanceof FHIRPeriod) {
                $this->setEffectivePeriod($data[self::FIELD_EFFECTIVE_PERIOD]);
            } else {
                $this->setEffectivePeriod(new FHIRPeriod($data[self::FIELD_EFFECTIVE_PERIOD]));
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
        if (isset($data[self::FIELD_GUIDANCE])) {
            $ext = (isset($data[self::FIELD_GUIDANCE_EXT]) && is_array($data[self::FIELD_GUIDANCE_EXT]))
                ? $data[self::FIELD_GUIDANCE_EXT]
                : null;
            if ($data[self::FIELD_GUIDANCE] instanceof FHIRMarkdown) {
                $this->setGuidance($data[self::FIELD_GUIDANCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_GUIDANCE])) {
                $this->setGuidance(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_GUIDANCE]] + $ext));
            } else {
                $this->setGuidance(new FHIRMarkdown($data[self::FIELD_GUIDANCE]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $i => $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_IMPROVEMENT_NOTATION])) {
            $ext = (isset($data[self::FIELD_IMPROVEMENT_NOTATION_EXT]) && is_array($data[self::FIELD_IMPROVEMENT_NOTATION_EXT]))
                ? $data[self::FIELD_IMPROVEMENT_NOTATION_EXT]
                : null;
            if ($data[self::FIELD_IMPROVEMENT_NOTATION] instanceof FHIRString) {
                $this->setImprovementNotation($data[self::FIELD_IMPROVEMENT_NOTATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_IMPROVEMENT_NOTATION])) {
                $this->setImprovementNotation(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_IMPROVEMENT_NOTATION]] + $ext));
            } else {
                $this->setImprovementNotation(new FHIRString($data[self::FIELD_IMPROVEMENT_NOTATION]));
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
        if (isset($data[self::FIELD_LAST_REVIEW_DATE])) {
            $ext = (isset($data[self::FIELD_LAST_REVIEW_DATE_EXT]) && is_array($data[self::FIELD_LAST_REVIEW_DATE_EXT]))
                ? $data[self::FIELD_LAST_REVIEW_DATE_EXT]
                : null;
            if ($data[self::FIELD_LAST_REVIEW_DATE] instanceof FHIRDate) {
                $this->setLastReviewDate($data[self::FIELD_LAST_REVIEW_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_LAST_REVIEW_DATE])) {
                $this->setLastReviewDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_LAST_REVIEW_DATE]] + $ext));
            } else {
                $this->setLastReviewDate(new FHIRDate($data[self::FIELD_LAST_REVIEW_DATE]));
            }
        }
        if (isset($data[self::FIELD_LIBRARY])) {
            if (is_array($data[self::FIELD_LIBRARY])) {
                foreach($data[self::FIELD_LIBRARY] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addLibrary($v);
                    } else {
                        $this->addLibrary(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_LIBRARY] instanceof FHIRReference) {
                $this->addLibrary($data[self::FIELD_LIBRARY]);
            } else {
                $this->addLibrary(new FHIRReference($data[self::FIELD_LIBRARY]));
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
        if (isset($data[self::FIELD_RATE_AGGREGATION])) {
            $ext = (isset($data[self::FIELD_RATE_AGGREGATION_EXT]) && is_array($data[self::FIELD_RATE_AGGREGATION_EXT]))
                ? $data[self::FIELD_RATE_AGGREGATION_EXT]
                : null;
            if ($data[self::FIELD_RATE_AGGREGATION] instanceof FHIRString) {
                $this->setRateAggregation($data[self::FIELD_RATE_AGGREGATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_RATE_AGGREGATION])) {
                $this->setRateAggregation(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_RATE_AGGREGATION]] + $ext));
            } else {
                $this->setRateAggregation(new FHIRString($data[self::FIELD_RATE_AGGREGATION]));
            }
        }
        if (isset($data[self::FIELD_RATIONALE])) {
            $ext = (isset($data[self::FIELD_RATIONALE_EXT]) && is_array($data[self::FIELD_RATIONALE_EXT]))
                ? $data[self::FIELD_RATIONALE_EXT]
                : null;
            if ($data[self::FIELD_RATIONALE] instanceof FHIRMarkdown) {
                $this->setRationale($data[self::FIELD_RATIONALE]);
            } elseif ($ext && is_scalar($data[self::FIELD_RATIONALE])) {
                $this->setRationale(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_RATIONALE]] + $ext));
            } else {
                $this->setRationale(new FHIRMarkdown($data[self::FIELD_RATIONALE]));
            }
        }
        if (isset($data[self::FIELD_RELATED_ARTIFACT])) {
            if (is_array($data[self::FIELD_RELATED_ARTIFACT])) {
                foreach($data[self::FIELD_RELATED_ARTIFACT] as $v) {
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
        if (isset($data[self::FIELD_RISK_ADJUSTMENT])) {
            $ext = (isset($data[self::FIELD_RISK_ADJUSTMENT_EXT]) && is_array($data[self::FIELD_RISK_ADJUSTMENT_EXT]))
                ? $data[self::FIELD_RISK_ADJUSTMENT_EXT]
                : null;
            if ($data[self::FIELD_RISK_ADJUSTMENT] instanceof FHIRString) {
                $this->setRiskAdjustment($data[self::FIELD_RISK_ADJUSTMENT]);
            } elseif ($ext && is_scalar($data[self::FIELD_RISK_ADJUSTMENT])) {
                $this->setRiskAdjustment(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_RISK_ADJUSTMENT]] + $ext));
            } else {
                $this->setRiskAdjustment(new FHIRString($data[self::FIELD_RISK_ADJUSTMENT]));
            }
        }
        if (isset($data[self::FIELD_SCORING])) {
            if ($data[self::FIELD_SCORING] instanceof FHIRCodeableConcept) {
                $this->setScoring($data[self::FIELD_SCORING]);
            } else {
                $this->setScoring(new FHIRCodeableConcept($data[self::FIELD_SCORING]));
            }
        }
        if (isset($data[self::FIELD_SET])) {
            $ext = (isset($data[self::FIELD_SET_EXT]) && is_array($data[self::FIELD_SET_EXT]))
                ? $data[self::FIELD_SET_EXT]
                : null;
            if ($data[self::FIELD_SET] instanceof FHIRString) {
                $this->setSet($data[self::FIELD_SET]);
            } elseif ($ext && is_scalar($data[self::FIELD_SET])) {
                $this->setSet(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SET]] + $ext));
            } else {
                $this->setSet(new FHIRString($data[self::FIELD_SET]));
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
        if (isset($data[self::FIELD_SUPPLEMENTAL_DATA])) {
            if (is_array($data[self::FIELD_SUPPLEMENTAL_DATA])) {
                foreach($data[self::FIELD_SUPPLEMENTAL_DATA] as $v) {
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
        if (isset($data[self::FIELD_TOPIC])) {
            if (is_array($data[self::FIELD_TOPIC])) {
                foreach($data[self::FIELD_TOPIC] as $v) {
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
        if (isset($data[self::FIELD_USAGE])) {
            $ext = (isset($data[self::FIELD_USAGE_EXT]) && is_array($data[self::FIELD_USAGE_EXT]))
                ? $data[self::FIELD_USAGE_EXT]
                : null;
            if ($data[self::FIELD_USAGE] instanceof FHIRString) {
                $this->setUsage($data[self::FIELD_USAGE]);
            } elseif ($ext && is_scalar($data[self::FIELD_USAGE])) {
                $this->setUsage(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_USAGE]] + $ext));
            } else {
                $this->setUsage(new FHIRString($data[self::FIELD_USAGE]));
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate $approvalDate
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getClinicalRecommendationStatement()
    {
        return $this->clinicalRecommendationStatement;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $clinicalRecommendationStatement
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $compositeScoring
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
     * A contributor to the content of a knowledge asset, including authors, editors,
     * reviewers, and endorsers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A contributor to the content of the measure, including authors, editors,
     * reviewers, and endorsers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContributor[]
     */
    public function getContributor()
    {
        return $this->contributor;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContributor $contributor
     * @return static
     */
    public function addContributor(FHIRContributor $contributor = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContributor[] $contributor
     * @return static
     */
    public function setContributor(array $contributor = [])
    {
        $this->contributor = [];
        if ([] === $contributor) {
            return $this;
        }
        foreach($contributor as $v) {
            if ($v instanceof FHIRContributor) {
                $this->addContributor($v);
            } else {
                $this->addContributor(new FHIRContributor($v));
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
     * A copyright statement relating to the measure and/or its contents. Copyright
     * statements are generally legal restrictions on the use and publishing of the
     * measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getCopyright()
    {
        return $this->copyright;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $copyright
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
     * change if and when the business version changes and it must change if the status
     * code changes. In addition, it should change when the substantive content of the
     * measure changes.
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
     * The date (and optionally time) when the measure was published. The date must
     * change if and when the business version changes and it must change if the status
     * code changes. In addition, it should change when the substantive content of the
     * measure changes.
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
     * Provides a description of an individual term used within the measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown[]
     */
    public function getDefinition()
    {
        return $this->definition;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $definition
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown[] $definition
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
     * A free text natural language description of the measure from a consumer's
     * perspective.
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getDisclaimer()
    {
        return $this->disclaimer;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $disclaimer
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
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the measure content was or is planned to be in active
     * use.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $effectivePeriod
     * @return static
     */
    public function setEffectivePeriod(FHIRPeriod $effectivePeriod = null)
    {
        $this->effectivePeriod = $effectivePeriod;
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
     * A boolean value to indicate that this measure is authored for testing purposes
     * (or education/evaluation/marketing), and is not intended to be used for genuine
     * usage.
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
     * The Measure resource provides the definition of a quality measure.
     *
     * A group of population criteria for the measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup $group
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup[] $group
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getGuidance()
    {
        return $this->guidance;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $guidance
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this measure when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
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
     * A formal identifier that is used to identify this measure when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[] $identifier
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Information on whether an increase or decrease in score is the preferred result
     * (e.g., a higher score indicates better quality OR a lower score indicates better
     * quality OR quality is whthin a range).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getImprovementNotation()
    {
        return $this->improvementNotation;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $improvementNotation
     * @return static
     */
    public function setImprovementNotation($improvementNotation = null)
    {
        if (null === $improvementNotation) {
            $this->improvementNotation = null;
            return $this;
        }
        if ($improvementNotation instanceof FHIRString) {
            $this->improvementNotation = $improvementNotation;
            return $this;
        }
        $this->improvementNotation = new FHIRString($improvementNotation);
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
     * A legal or geographic region in which the measure is intended to be used.
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
     * A legal or geographic region in which the measure is intended to be used.
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
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval, but doesn't change the original approval date.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
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
     * periodically after approval, but doesn't change the original approval date.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate $lastReviewDate
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a Library resource containing the formal logic used by the
     * measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getLibrary()
    {
        return $this->library;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a Library resource containing the formal logic used by the
     * measure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $library
     * @return static
     */
    public function addLibrary(FHIRReference $library = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $library
     * @return static
     */
    public function setLibrary(array $library = [])
    {
        $this->library = [];
        if ([] === $library) {
            return $this;
        }
        foreach($library as $v) {
            if ($v instanceof FHIRReference) {
                $this->addLibrary($v);
            } else {
                $this->addLibrary(new FHIRReference($v));
            }
        }
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
     * A natural language name identifying the measure. This name should be usable as
     * an identifier for the module by machine processing applications such as code
     * generation.
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
     * The name of the individual or organization that published the measure.
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
     * The name of the individual or organization that published the measure.
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getPurpose()
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
     * Explaination of why this measure is needed and why it has been designed as it
     * has.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $purpose
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes how to combine the information calculated, based on logic in each of
     * several populations, into one summarized result.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getRateAggregation()
    {
        return $this->rateAggregation;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes how to combine the information calculated, based on logic in each of
     * several populations, into one summarized result.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $rateAggregation
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getRationale()
    {
        return $this->rationale;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $rationale
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRelatedArtifact[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRelatedArtifact $relatedArtifact
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRelatedArtifact[] $relatedArtifact
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the risk adjustment factors that may impact the resulting score
     * for the measure and how they may be accounted for when computing and reporting
     * measure results.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getRiskAdjustment()
    {
        return $this->riskAdjustment;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $riskAdjustment
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
     * proportion, ratio, continuous variable, and cohort. The value set is extensible,
     * allowing additional measure scoring types to be represented.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
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
     * proportion, ratio, continuous variable, and cohort. The value set is extensible,
     * allowing additional measure scoring types to be represented.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $scoring
     * @return static
     */
    public function setScoring(FHIRCodeableConcept $scoring = null)
    {
        $this->scoring = $scoring;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The measure set, e.g. Preventive Care and Screening.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getSet()
    {
        return $this->set;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The measure set, e.g. Preventive Care and Screening.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $set
     * @return static
     */
    public function setSet($set = null)
    {
        if (null === $set) {
            $this->set = null;
            return $this;
        }
        if ($set instanceof FHIRString) {
            $this->set = $set;
            return $this;
        }
        $this->set = new FHIRString($set);
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this measure. Enables tracking the life-cycle of the content.
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
     * The status of this measure. Enables tracking the life-cycle of the content.
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
     * The Measure resource provides the definition of a quality measure.
     *
     * The supplemental data criteria for the measure report, specified as either the
     * name of a valid CQL expression within a referenced library, or a valid FHIR
     * Resource Path.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData $supplementalData
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData[] $supplementalData
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the measure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $title
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
     * high-level categorization of the type of the measure that can be useful for
     * filtering and searching.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
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
     * high-level categorization of the type of the measure that can be useful for
     * filtering and searching.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $topic
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
     * high-level categorization of the type of the measure that can be useful for
     * filtering and searching.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $topic
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $type
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $type
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
     * specification, model, design or an instance. This SHALL be a URL, SHOULD be
     * globally unique, and SHOULD be an address at which this measure is (or will be)
     * published. The URL SHOULD include the major version of the measure. For more
     * information see [Technical and Business Versions](resource.html#versions).
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
     * An absolute URI that is used to identify this measure when it is referenced in a
     * specification, model, design or an instance. This SHALL be a URL, SHOULD be
     * globally unique, and SHOULD be an address at which this measure is (or will be)
     * published. The URL SHOULD include the major version of the measure. For more
     * information see [Technical and Business Versions](resource.html#versions).
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A detailed description of how the measure is used from a clinical perspective.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A detailed description of how the measure is used from a clinical perspective.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $usage
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
     * for appropriate measure instances.
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
     * for appropriate measure instances.
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMeasure $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMeasure
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
                'FHIRMeasure::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMeasure or null, %s seen.',
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
        if (isset($attributes->approvalDate)) {
            $type->setApprovalDate((string)$attributes->approvalDate);
        }
        if (isset($children->approvalDate)) {
            $type->setApprovalDate(FHIRDate::xmlUnserialize($children->approvalDate));
        }
        if (isset($attributes->clinicalRecommendationStatement)) {
            $type->setClinicalRecommendationStatement((string)$attributes->clinicalRecommendationStatement);
        }
        if (isset($children->clinicalRecommendationStatement)) {
            $type->setClinicalRecommendationStatement(FHIRMarkdown::xmlUnserialize($children->clinicalRecommendationStatement));
        }
        if (isset($children->compositeScoring)) {
            $type->setCompositeScoring(FHIRCodeableConcept::xmlUnserialize($children->compositeScoring));
        }
        if (isset($children->contact)) {
            foreach($children->contact as $child) {
                $type->addContact(FHIRContactDetail::xmlUnserialize($child));
            }
        }
        if (isset($children->contributor)) {
            foreach($children->contributor as $child) {
                $type->addContributor(FHIRContributor::xmlUnserialize($child));
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
        if (isset($attributes->definition)) {
            $type->addDefinition((string)$attributes->definition);
        }
        if (isset($children->definition)) {
            foreach($children->definition as $child) {
                $type->addDefinition(FHIRMarkdown::xmlUnserialize($child));
            }
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRMarkdown::xmlUnserialize($children->description));
        }
        if (isset($attributes->disclaimer)) {
            $type->setDisclaimer((string)$attributes->disclaimer);
        }
        if (isset($children->disclaimer)) {
            $type->setDisclaimer(FHIRMarkdown::xmlUnserialize($children->disclaimer));
        }
        if (isset($children->effectivePeriod)) {
            $type->setEffectivePeriod(FHIRPeriod::xmlUnserialize($children->effectivePeriod));
        }
        if (isset($attributes->experimental)) {
            $type->setExperimental((string)$attributes->experimental);
        }
        if (isset($children->experimental)) {
            $type->setExperimental(FHIRBoolean::xmlUnserialize($children->experimental));
        }
        if (isset($children->group)) {
            foreach($children->group as $child) {
                $type->addGroup(FHIRMeasureGroup::xmlUnserialize($child));
            }
        }
        if (isset($attributes->guidance)) {
            $type->setGuidance((string)$attributes->guidance);
        }
        if (isset($children->guidance)) {
            $type->setGuidance(FHIRMarkdown::xmlUnserialize($children->guidance));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($attributes->improvementNotation)) {
            $type->setImprovementNotation((string)$attributes->improvementNotation);
        }
        if (isset($children->improvementNotation)) {
            $type->setImprovementNotation(FHIRString::xmlUnserialize($children->improvementNotation));
        }
        if (isset($children->jurisdiction)) {
            foreach($children->jurisdiction as $child) {
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($attributes->lastReviewDate)) {
            $type->setLastReviewDate((string)$attributes->lastReviewDate);
        }
        if (isset($children->lastReviewDate)) {
            $type->setLastReviewDate(FHIRDate::xmlUnserialize($children->lastReviewDate));
        }
        if (isset($children->library)) {
            foreach($children->library as $child) {
                $type->addLibrary(FHIRReference::xmlUnserialize($child));
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
        if (isset($attributes->rateAggregation)) {
            $type->setRateAggregation((string)$attributes->rateAggregation);
        }
        if (isset($children->rateAggregation)) {
            $type->setRateAggregation(FHIRString::xmlUnserialize($children->rateAggregation));
        }
        if (isset($attributes->rationale)) {
            $type->setRationale((string)$attributes->rationale);
        }
        if (isset($children->rationale)) {
            $type->setRationale(FHIRMarkdown::xmlUnserialize($children->rationale));
        }
        if (isset($children->relatedArtifact)) {
            foreach($children->relatedArtifact as $child) {
                $type->addRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($child));
            }
        }
        if (isset($attributes->riskAdjustment)) {
            $type->setRiskAdjustment((string)$attributes->riskAdjustment);
        }
        if (isset($children->riskAdjustment)) {
            $type->setRiskAdjustment(FHIRString::xmlUnserialize($children->riskAdjustment));
        }
        if (isset($children->scoring)) {
            $type->setScoring(FHIRCodeableConcept::xmlUnserialize($children->scoring));
        }
        if (isset($attributes->set)) {
            $type->setSet((string)$attributes->set);
        }
        if (isset($children->set)) {
            $type->setSet(FHIRString::xmlUnserialize($children->set));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRPublicationStatus::xmlUnserialize($children->status));
        }
        if (isset($children->supplementalData)) {
            foreach($children->supplementalData as $child) {
                $type->addSupplementalData(FHIRMeasureSupplementalData::xmlUnserialize($child));
            }
        }
        if (isset($attributes->title)) {
            $type->setTitle((string)$attributes->title);
        }
        if (isset($children->title)) {
            $type->setTitle(FHIRString::xmlUnserialize($children->title));
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
        if (isset($attributes->url)) {
            $type->setUrl((string)$attributes->url);
        }
        if (isset($children->url)) {
            $type->setUrl(FHIRUri::xmlUnserialize($children->url));
        }
        if (isset($attributes->usage)) {
            $type->setUsage((string)$attributes->usage);
        }
        if (isset($children->usage)) {
            $type->setUsage(FHIRString::xmlUnserialize($children->usage));
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
        if (null !== ($v = $this->getApprovalDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_APPROVAL_DATE, null, $v->_getFHIRXMLNamespace()));
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

        if ([] !== ($vs = $this->getContributor())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTRIBUTOR, null, $v->_getFHIRXMLNamespace()));
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

        if (null !== ($v = $this->getEffectivePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EFFECTIVE_PERIOD, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getRiskAdjustment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RISK_ADJUSTMENT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getScoring())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SCORING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSet())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SET, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_APPROVAL_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getClinicalRecommendationStatement())) {
            $a[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT] = $v->getValue();
            $a[self::FIELD_CLINICAL_RECOMMENDATION_STATEMENT_EXT] = $v;
        }
        if (null !== ($v = $this->getCompositeScoring())) {
            $a[self::FIELD_COMPOSITE_SCORING] = $v;
        }
        if ([] !== ($vs = $this->getContact())) {
            $a[self::FIELD_CONTACT] = $vs;
        }
        if ([] !== ($vs = $this->getContributor())) {
            $a[self::FIELD_CONTRIBUTOR] = $vs;
        }
        if (null !== ($v = $this->getCopyright())) {
            $a[self::FIELD_COPYRIGHT] = $v->getValue();
            $a[self::FIELD_COPYRIGHT_EXT] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = $v->getValue();
            $a[self::FIELD_DATE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getDefinition())) {
            $a[self::FIELD_DEFINITION] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DEFINITION][] = $v->getValue();
                $a[self::FIELD_DEFINITION_EXT][] = $v;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if (null !== ($v = $this->getDisclaimer())) {
            $a[self::FIELD_DISCLAIMER] = $v->getValue();
            $a[self::FIELD_DISCLAIMER_EXT] = $v;
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $a[self::FIELD_EFFECTIVE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getExperimental())) {
            $a[self::FIELD_EXPERIMENTAL] = $v->getValue();
            $a[self::FIELD_EXPERIMENTAL_EXT] = $v;
        }
        if ([] !== ($vs = $this->getGroup())) {
            $a[self::FIELD_GROUP] = $vs;
        }
        if (null !== ($v = $this->getGuidance())) {
            $a[self::FIELD_GUIDANCE] = $v->getValue();
            $a[self::FIELD_GUIDANCE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getImprovementNotation())) {
            $a[self::FIELD_IMPROVEMENT_NOTATION] = $v->getValue();
            $a[self::FIELD_IMPROVEMENT_NOTATION_EXT] = $v;
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            $a[self::FIELD_JURISDICTION] = $vs;
        }
        if (null !== ($v = $this->getLastReviewDate())) {
            $a[self::FIELD_LAST_REVIEW_DATE] = $v->getValue();
            $a[self::FIELD_LAST_REVIEW_DATE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getLibrary())) {
            $a[self::FIELD_LIBRARY] = $vs;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            $a[self::FIELD_NAME_EXT] = $v;
        }
        if (null !== ($v = $this->getPublisher())) {
            $a[self::FIELD_PUBLISHER] = $v->getValue();
            $a[self::FIELD_PUBLISHER_EXT] = $v;
        }
        if (null !== ($v = $this->getPurpose())) {
            $a[self::FIELD_PURPOSE] = $v->getValue();
            $a[self::FIELD_PURPOSE_EXT] = $v;
        }
        if (null !== ($v = $this->getRateAggregation())) {
            $a[self::FIELD_RATE_AGGREGATION] = $v->getValue();
            $a[self::FIELD_RATE_AGGREGATION_EXT] = $v;
        }
        if (null !== ($v = $this->getRationale())) {
            $a[self::FIELD_RATIONALE] = $v->getValue();
            $a[self::FIELD_RATIONALE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getRelatedArtifact())) {
            $a[self::FIELD_RELATED_ARTIFACT] = $vs;
        }
        if (null !== ($v = $this->getRiskAdjustment())) {
            $a[self::FIELD_RISK_ADJUSTMENT] = $v->getValue();
            $a[self::FIELD_RISK_ADJUSTMENT_EXT] = $v;
        }
        if (null !== ($v = $this->getScoring())) {
            $a[self::FIELD_SCORING] = $v;
        }
        if (null !== ($v = $this->getSet())) {
            $a[self::FIELD_SET] = $v->getValue();
            $a[self::FIELD_SET_EXT] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if ([] !== ($vs = $this->getSupplementalData())) {
            $a[self::FIELD_SUPPLEMENTAL_DATA] = $vs;
        }
        if (null !== ($v = $this->getTitle())) {
            $a[self::FIELD_TITLE] = $v->getValue();
            $a[self::FIELD_TITLE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getTopic())) {
            $a[self::FIELD_TOPIC] = $vs;
        }
        if ([] !== ($vs = $this->getType())) {
            $a[self::FIELD_TYPE] = $vs;
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = $v->getValue();
            $a[self::FIELD_URL_EXT] = $v;
        }
        if (null !== ($v = $this->getUsage())) {
            $a[self::FIELD_USAGE] = $v->getValue();
            $a[self::FIELD_USAGE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getUseContext())) {
            $a[self::FIELD_USE_CONTEXT] = $vs;
        }
        if (null !== ($v = $this->getVersion())) {
            $a[self::FIELD_VERSION] = $v->getValue();
            $a[self::FIELD_VERSION_EXT] = $v;
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