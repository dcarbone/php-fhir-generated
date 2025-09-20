<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 20th, 2025 13:35+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyAssociatedParty;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyComparisonGroup;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyLabel;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyObjective;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyOutcomeMeasure;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyProgressStatus;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyRecruitment;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRPublicationStatusEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionTypeMap;

/**
 * A scientific study of nature that sometimes includes processes involved in
 * health and disease. For example, clinical trials are research studies that
 * involve people. These studies may be related to new ways to screen, prevent,
 * diagnose, and treat disease. They may also study certain outcomes and certain
 * groups of people by looking at data collected in the past or future.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRResearchStudy extends FHIRDomainResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_RESEARCH_STUDY;

    /* class_default.php:56 */
    public const FIELD_URL = 'url';
    public const FIELD_URL_EXT = '_url';
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_VERSION = 'version';
    public const FIELD_VERSION_EXT = '_version';
    public const FIELD_NAME = 'name';
    public const FIELD_NAME_EXT = '_name';
    public const FIELD_TITLE = 'title';
    public const FIELD_TITLE_EXT = '_title';
    public const FIELD_LABEL = 'label';
    public const FIELD_PROTOCOL = 'protocol';
    public const FIELD_PART_OF = 'partOf';
    public const FIELD_RELATED_ARTIFACT = 'relatedArtifact';
    public const FIELD_DATE = 'date';
    public const FIELD_DATE_EXT = '_date';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_PRIMARY_PURPOSE_TYPE = 'primaryPurposeType';
    public const FIELD_PHASE = 'phase';
    public const FIELD_STUDY_DESIGN = 'studyDesign';
    public const FIELD_FOCUS = 'focus';
    public const FIELD_CONDITION = 'condition';
    public const FIELD_KEYWORD = 'keyword';
    public const FIELD_REGION = 'region';
    public const FIELD_DESCRIPTION_SUMMARY = 'descriptionSummary';
    public const FIELD_DESCRIPTION_SUMMARY_EXT = '_descriptionSummary';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_PERIOD = 'period';
    public const FIELD_SITE = 'site';
    public const FIELD_NOTE = 'note';
    public const FIELD_CLASSIFIER = 'classifier';
    public const FIELD_ASSOCIATED_PARTY = 'associatedParty';
    public const FIELD_PROGRESS_STATUS = 'progressStatus';
    public const FIELD_WHY_STOPPED = 'whyStopped';
    public const FIELD_RECRUITMENT = 'recruitment';
    public const FIELD_COMPARISON_GROUP = 'comparisonGroup';
    public const FIELD_OBJECTIVE = 'objective';
    public const FIELD_OUTCOME_MEASURE = 'outcomeMeasure';
    public const FIELD_RESULT = 'result';

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
        self::FIELD_TITLE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION_SUMMARY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Canonical identifier for this study resource, represented as a globally unique
     * URI.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri 
     */
    #[FHIRUri]
    protected FHIRUri $url;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this research study by the sponsor or other systems.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier> 
     */
    #[FHIRIdentifier]
    protected array $identifier;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The business version for the study record.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $version;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name for this study (computer friendly).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $name;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The human readable name of the research study.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $title;
    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Additional names for the study.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyLabel> 
     */
    #[FHIRResearchStudyLabel]
    protected array $label;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of steps expected to be performed as part of the execution of the study.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> 
     */
    #[FHIRReference]
    protected array $protocol;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger research study of which this particular study is a component or step.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> 
     */
    #[FHIRReference]
    protected array $partOf;
    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Citations, references, URLs and other related documents. When using
     * relatedArtifact to share URLs, the relatedArtifact.type will often be set to one
     * of "documentation" or "supported-with" and the URL value will often be in
     * relatedArtifact.document.url but another possible location is
     * relatedArtifact.resource when it is a canonical URL.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact> 
     */
    #[FHIRRelatedArtifact]
    protected array $relatedArtifact;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the ResearchStudy Resource was last
     * significantly changed. The date must change when the business version changes
     * and it must change if the status code changes. In addition, it should change
     * when the substantive content of the ResearchStudy Resource changes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    #[FHIRDateTime]
    protected FHIRDateTime $date;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The publication state of the resource (not of the study).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPublicationStatus 
     */
    #[FHIRPublicationStatus]
    protected FHIRPublicationStatus $status;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of study based upon the intent of the study activities. A
     * classification of the intent of the study.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $primaryPurposeType;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The stage in the progression of a therapy from initial experimental use in
     * humans in clinical trials to post-market evaluation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $phase;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes categorizing the type of study such as investigational vs. observational,
     * type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $studyDesign;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or
     * interventions that the study is seeking to gain more information about.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference> 
     */
    #[FHIRCodeableReference]
    protected array $focus;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The condition that is the focus of the study. For example, In a study to examine
     * risk factors for Lupus, might have as an inclusion criterion "healthy
     * volunteer", but the target condition code would be a Lupus SNOMED code.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $condition;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Key terms to aid in searching for or filtering the study.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $keyword;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A country, state or other area where the study is taking place rather than its
     * precise geographic location or address.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $region;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A brief text for explaining the study.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    #[FHIRMarkdown]
    protected FHIRMarkdown $descriptionSummary;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A detailed and human-readable narrative of the study. E.g., study abstract.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    #[FHIRMarkdown]
    protected FHIRMarkdown $description;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the start date and the expected (or actual, depending on status) end
     * date for the study.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod 
     */
    #[FHIRPeriod]
    protected FHIRPeriod $period;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A facility in which study activities are conducted.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> 
     */
    #[FHIRReference]
    protected array $site;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the study by the performer, subject or other participants.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation> 
     */
    #[FHIRAnnotation]
    protected array $note;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional grouping mechanism or categorization of a research study. Example:
     * FDA regulated device, FDA regulated drug, MPG Paragraph 23b (a German legal
     * requirement), IRB-exempt, etc. Implementation Note: do not use the classifier
     * element to support existing semantics that are already supported thru explicit
     * elements in the resource.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $classifier;
    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Sponsors, collaborators, and other parties.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyAssociatedParty> 
     */
    #[FHIRResearchStudyAssociatedParty]
    protected array $associatedParty;
    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Status of study with time for that status.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyProgressStatus> 
     */
    #[FHIRResearchStudyProgressStatus]
    protected array $progressStatus;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description and/or code explaining the premature termination of the study.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $whyStopped;
    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Target or actual group of participants enrolled in study.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyRecruitment 
     */
    #[FHIRResearchStudyRecruitment]
    protected FHIRResearchStudyRecruitment $recruitment;
    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Describes an expected event or sequence of events for one of the subjects of a
     * study. E.g. for a living subject: exposure to drug A, wash-out, exposure to drug
     * B, wash-out, follow-up. E.g. for a stability study: {store sample from lot A at
     * 25 degrees for 1 month}, {store sample from lot A at 40 degrees for 1 month}.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyComparisonGroup> 
     */
    #[FHIRResearchStudyComparisonGroup]
    protected array $comparisonGroup;
    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * A goal that the study is aiming to achieve in terms of a scientific question to
     * be answered by the analysis of data collected during the study.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyObjective> 
     */
    #[FHIRResearchStudyObjective]
    protected array $objective;
    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * An "outcome measure", "endpoint", "effect measure" or "measure of effect" is a
     * specific measurement or observation used to quantify the effect of experimental
     * variables on the participants in a study, or for observational studies, to
     * describe patterns of diseases or traits or associations with exposures, risk
     * factors or treatment.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyOutcomeMeasure> 
     */
    #[FHIRResearchStudyOutcomeMeasure]
    protected array $outcomeMeasure;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Link to one or more sets of results generated by the study. Could also link to a
     * research registry holding the results such as ClinicalTrials.gov.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> 
     */
    #[FHIRReference]
    protected array $result;

    /* constructor.php:61 */
    /**
     * FHIRResearchStudy Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface> $contained
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $url
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier> $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $version
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $name
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $title
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyLabel> $label
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> $protocol
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> $partOf
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact> $relatedArtifact
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $date
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRPublicationStatusEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPublicationStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $primaryPurposeType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $phase
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $studyDesign
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference> $focus
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $condition
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $keyword
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $region
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $descriptionSummary
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $period
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> $site
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation> $note
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $classifier
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyAssociatedParty> $associatedParty
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyProgressStatus> $progressStatus
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $whyStopped
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyRecruitment $recruitment
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyComparisonGroup> $comparisonGroup
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyObjective> $objective
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyOutcomeMeasure> $outcomeMeasure
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> $result
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
                                null|iterable $label = null,
                                null|iterable $protocol = null,
                                null|iterable $partOf = null,
                                null|iterable $relatedArtifact = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date = null,
                                null|string|FHIRPublicationStatusEnum|FHIRPublicationStatus $status = null,
                                null|FHIRCodeableConcept $primaryPurposeType = null,
                                null|FHIRCodeableConcept $phase = null,
                                null|iterable $studyDesign = null,
                                null|iterable $focus = null,
                                null|iterable $condition = null,
                                null|iterable $keyword = null,
                                null|iterable $region = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $descriptionSummary = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null,
                                null|FHIRPeriod $period = null,
                                null|iterable $site = null,
                                null|iterable $note = null,
                                null|iterable $classifier = null,
                                null|iterable $associatedParty = null,
                                null|iterable $progressStatus = null,
                                null|FHIRCodeableConcept $whyStopped = null,
                                null|FHIRResearchStudyRecruitment $recruitment = null,
                                null|iterable $comparisonGroup = null,
                                null|iterable $objective = null,
                                null|iterable $outcomeMeasure = null,
                                null|iterable $result = null,
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
        if (null !== $label) {
            $this->setLabel(...$label);
        }
        if (null !== $protocol) {
            $this->setProtocol(...$protocol);
        }
        if (null !== $partOf) {
            $this->setPartOf(...$partOf);
        }
        if (null !== $relatedArtifact) {
            $this->setRelatedArtifact(...$relatedArtifact);
        }
        if (null !== $date) {
            $this->setDate($date);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $primaryPurposeType) {
            $this->setPrimaryPurposeType($primaryPurposeType);
        }
        if (null !== $phase) {
            $this->setPhase($phase);
        }
        if (null !== $studyDesign) {
            $this->setStudyDesign(...$studyDesign);
        }
        if (null !== $focus) {
            $this->setFocus(...$focus);
        }
        if (null !== $condition) {
            $this->setCondition(...$condition);
        }
        if (null !== $keyword) {
            $this->setKeyword(...$keyword);
        }
        if (null !== $region) {
            $this->setRegion(...$region);
        }
        if (null !== $descriptionSummary) {
            $this->setDescriptionSummary($descriptionSummary);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $period) {
            $this->setPeriod($period);
        }
        if (null !== $site) {
            $this->setSite(...$site);
        }
        if (null !== $note) {
            $this->setNote(...$note);
        }
        if (null !== $classifier) {
            $this->setClassifier(...$classifier);
        }
        if (null !== $associatedParty) {
            $this->setAssociatedParty(...$associatedParty);
        }
        if (null !== $progressStatus) {
            $this->setProgressStatus(...$progressStatus);
        }
        if (null !== $whyStopped) {
            $this->setWhyStopped($whyStopped);
        }
        if (null !== $recruitment) {
            $this->setRecruitment($recruitment);
        }
        if (null !== $comparisonGroup) {
            $this->setComparisonGroup(...$comparisonGroup);
        }
        if (null !== $objective) {
            $this->setObjective(...$objective);
        }
        if (null !== $outcomeMeasure) {
            $this->setOutcomeMeasure(...$outcomeMeasure);
        }
        if (null !== $result) {
            $this->setResult(...$result);
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
     * Canonical identifier for this study resource, represented as a globally unique
     * URI.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri
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
     * Canonical identifier for this study resource, represented as a globally unique
     * URI.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $url
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this research study by the sponsor or other systems.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier>
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this research study by the sponsor or other systems.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this research study by the sponsor or other systems.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The business version for the study record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getVersion(): null|FHIRString
    {
        return $this->version ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The business version for the study record.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $version
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
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name for this study (computer friendly).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name for this study (computer friendly).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $name
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The human readable name of the research study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getTitle(): null|FHIRString
    {
        return $this->title ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The human readable name of the research study.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $title
     * @return static
     */
    public function setTitle(null|string|FHIRStringPrimitive|FHIRString $title): self
    {
        if (null === $title) {
            unset($this->title);
            return $this;
        }
        if (!($title instanceof FHIRString)) {
            $title = new FHIRString(value: $title);
        }
        $this->title = $title;
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Additional names for the study.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyLabel>
     */
    public function getLabel(): array
    {
        return $this->label ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyLabel>
     */
    public function getLabelIterator(): iterable
    {
        if (!isset($this->label)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->label);
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Additional names for the study.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyLabel $label
     * @return static
     */
    public function addLabel(FHIRResearchStudyLabel $label): self
    {
        if (!isset($this->label)) {
            $this->label = [];
        }
        $this->label[] = $label;
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Additional names for the study.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyLabel ...$label
     * @return static
     */
    public function setLabel(FHIRResearchStudyLabel ...$label): self
    {
        if ([] === $label) {
            unset($this->label);
            return $this;
        }
        $this->label = $label;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of steps expected to be performed as part of the execution of the study.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getProtocol(): array
    {
        return $this->protocol ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getProtocolIterator(): iterable
    {
        if (!isset($this->protocol)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->protocol);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of steps expected to be performed as part of the execution of the study.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $protocol
     * @return static
     */
    public function addProtocol(FHIRReference $protocol): self
    {
        if (!isset($this->protocol)) {
            $this->protocol = [];
        }
        $this->protocol[] = $protocol;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of steps expected to be performed as part of the execution of the study.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$protocol
     * @return static
     */
    public function setProtocol(FHIRReference ...$protocol): self
    {
        if ([] === $protocol) {
            unset($this->protocol);
            return $this;
        }
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger research study of which this particular study is a component or step.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getPartOf(): array
    {
        return $this->partOf ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getPartOfIterator(): iterable
    {
        if (!isset($this->partOf)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->partOf);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger research study of which this particular study is a component or step.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $partOf
     * @return static
     */
    public function addPartOf(FHIRReference $partOf): self
    {
        if (!isset($this->partOf)) {
            $this->partOf = [];
        }
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger research study of which this particular study is a component or step.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$partOf
     * @return static
     */
    public function setPartOf(FHIRReference ...$partOf): self
    {
        if ([] === $partOf) {
            unset($this->partOf);
            return $this;
        }
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Citations, references, URLs and other related documents. When using
     * relatedArtifact to share URLs, the relatedArtifact.type will often be set to one
     * of "documentation" or "supported-with" and the URL value will often be in
     * relatedArtifact.document.url but another possible location is
     * relatedArtifact.resource when it is a canonical URL.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact>
     */
    public function getRelatedArtifact(): array
    {
        return $this->relatedArtifact ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact>
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
     * Citations, references, URLs and other related documents. When using
     * relatedArtifact to share URLs, the relatedArtifact.type will often be set to one
     * of "documentation" or "supported-with" and the URL value will often be in
     * relatedArtifact.document.url but another possible location is
     * relatedArtifact.resource when it is a canonical URL.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact $relatedArtifact
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
     * Citations, references, URLs and other related documents. When using
     * relatedArtifact to share URLs, the relatedArtifact.type will often be set to one
     * of "documentation" or "supported-with" and the URL value will often be in
     * relatedArtifact.document.url but another possible location is
     * relatedArtifact.resource when it is a canonical URL.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact ...$relatedArtifact
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the ResearchStudy Resource was last
     * significantly changed. The date must change when the business version changes
     * and it must change if the status code changes. In addition, it should change
     * when the substantive content of the ResearchStudy Resource changes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getDate(): null|FHIRDateTime
    {
        return $this->date ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the ResearchStudy Resource was last
     * significantly changed. The date must change when the business version changes
     * and it must change if the status code changes. In addition, it should change
     * when the substantive content of the ResearchStudy Resource changes.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $date
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The publication state of the resource (not of the study).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus(): null|FHIRPublicationStatus
    {
        return $this->status ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The publication state of the resource (not of the study).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRPublicationStatusEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPublicationStatus $status
     * @return static
     */
    public function setStatus(null|string|FHIRPublicationStatusEnum|FHIRPublicationStatus $status): self
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of study based upon the intent of the study activities. A
     * classification of the intent of the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getPrimaryPurposeType(): null|FHIRCodeableConcept
    {
        return $this->primaryPurposeType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of study based upon the intent of the study activities. A
     * classification of the intent of the study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $primaryPurposeType
     * @return static
     */
    public function setPrimaryPurposeType(null|FHIRCodeableConcept $primaryPurposeType): self
    {
        if (null === $primaryPurposeType) {
            unset($this->primaryPurposeType);
            return $this;
        }
        $this->primaryPurposeType = $primaryPurposeType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The stage in the progression of a therapy from initial experimental use in
     * humans in clinical trials to post-market evaluation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getPhase(): null|FHIRCodeableConcept
    {
        return $this->phase ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The stage in the progression of a therapy from initial experimental use in
     * humans in clinical trials to post-market evaluation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $phase
     * @return static
     */
    public function setPhase(null|FHIRCodeableConcept $phase): self
    {
        if (null === $phase) {
            unset($this->phase);
            return $this;
        }
        $this->phase = $phase;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes categorizing the type of study such as investigational vs. observational,
     * type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getStudyDesign(): array
    {
        return $this->studyDesign ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getStudyDesignIterator(): iterable
    {
        if (!isset($this->studyDesign)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->studyDesign);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes categorizing the type of study such as investigational vs. observational,
     * type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $studyDesign
     * @return static
     */
    public function addStudyDesign(FHIRCodeableConcept $studyDesign): self
    {
        if (!isset($this->studyDesign)) {
            $this->studyDesign = [];
        }
        $this->studyDesign[] = $studyDesign;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes categorizing the type of study such as investigational vs. observational,
     * type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$studyDesign
     * @return static
     */
    public function setStudyDesign(FHIRCodeableConcept ...$studyDesign): self
    {
        if ([] === $studyDesign) {
            unset($this->studyDesign);
            return $this;
        }
        $this->studyDesign = $studyDesign;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or
     * interventions that the study is seeking to gain more information about.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference>
     */
    public function getFocus(): array
    {
        return $this->focus ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference>
     */
    public function getFocusIterator(): iterable
    {
        if (!isset($this->focus)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->focus);
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or
     * interventions that the study is seeking to gain more information about.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $focus
     * @return static
     */
    public function addFocus(FHIRCodeableReference $focus): self
    {
        if (!isset($this->focus)) {
            $this->focus = [];
        }
        $this->focus[] = $focus;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or
     * interventions that the study is seeking to gain more information about.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference ...$focus
     * @return static
     */
    public function setFocus(FHIRCodeableReference ...$focus): self
    {
        if ([] === $focus) {
            unset($this->focus);
            return $this;
        }
        $this->focus = $focus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The condition that is the focus of the study. For example, In a study to examine
     * risk factors for Lupus, might have as an inclusion criterion "healthy
     * volunteer", but the target condition code would be a Lupus SNOMED code.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getCondition(): array
    {
        return $this->condition ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getConditionIterator(): iterable
    {
        if (!isset($this->condition)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->condition);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The condition that is the focus of the study. For example, In a study to examine
     * risk factors for Lupus, might have as an inclusion criterion "healthy
     * volunteer", but the target condition code would be a Lupus SNOMED code.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $condition
     * @return static
     */
    public function addCondition(FHIRCodeableConcept $condition): self
    {
        if (!isset($this->condition)) {
            $this->condition = [];
        }
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The condition that is the focus of the study. For example, In a study to examine
     * risk factors for Lupus, might have as an inclusion criterion "healthy
     * volunteer", but the target condition code would be a Lupus SNOMED code.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$condition
     * @return static
     */
    public function setCondition(FHIRCodeableConcept ...$condition): self
    {
        if ([] === $condition) {
            unset($this->condition);
            return $this;
        }
        $this->condition = $condition;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Key terms to aid in searching for or filtering the study.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getKeyword(): array
    {
        return $this->keyword ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getKeywordIterator(): iterable
    {
        if (!isset($this->keyword)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->keyword);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Key terms to aid in searching for or filtering the study.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $keyword
     * @return static
     */
    public function addKeyword(FHIRCodeableConcept $keyword): self
    {
        if (!isset($this->keyword)) {
            $this->keyword = [];
        }
        $this->keyword[] = $keyword;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Key terms to aid in searching for or filtering the study.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$keyword
     * @return static
     */
    public function setKeyword(FHIRCodeableConcept ...$keyword): self
    {
        if ([] === $keyword) {
            unset($this->keyword);
            return $this;
        }
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A country, state or other area where the study is taking place rather than its
     * precise geographic location or address.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getRegion(): array
    {
        return $this->region ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getRegionIterator(): iterable
    {
        if (!isset($this->region)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->region);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A country, state or other area where the study is taking place rather than its
     * precise geographic location or address.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $region
     * @return static
     */
    public function addRegion(FHIRCodeableConcept $region): self
    {
        if (!isset($this->region)) {
            $this->region = [];
        }
        $this->region[] = $region;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A country, state or other area where the study is taking place rather than its
     * precise geographic location or address.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$region
     * @return static
     */
    public function setRegion(FHIRCodeableConcept ...$region): self
    {
        if ([] === $region) {
            unset($this->region);
            return $this;
        }
        $this->region = $region;
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
     * A brief text for explaining the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getDescriptionSummary(): null|FHIRMarkdown
    {
        return $this->descriptionSummary ?? null;
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
     * A brief text for explaining the study.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $descriptionSummary
     * @return static
     */
    public function setDescriptionSummary(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $descriptionSummary): self
    {
        if (null === $descriptionSummary) {
            unset($this->descriptionSummary);
            return $this;
        }
        if (!($descriptionSummary instanceof FHIRMarkdown)) {
            $descriptionSummary = new FHIRMarkdown(value: $descriptionSummary);
        }
        $this->descriptionSummary = $descriptionSummary;
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
     * A detailed and human-readable narrative of the study. E.g., study abstract.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getDescription(): null|FHIRMarkdown
    {
        return $this->description ?? null;
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
     * A detailed and human-readable narrative of the study. E.g., study abstract.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
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
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the start date and the expected (or actual, depending on status) end
     * date for the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getPeriod(): null|FHIRPeriod
    {
        return $this->period ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the start date and the expected (or actual, depending on status) end
     * date for the study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(null|FHIRPeriod $period): self
    {
        if (null === $period) {
            unset($this->period);
            return $this;
        }
        $this->period = $period;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A facility in which study activities are conducted.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getSite(): array
    {
        return $this->site ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getSiteIterator(): iterable
    {
        if (!isset($this->site)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->site);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A facility in which study activities are conducted.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $site
     * @return static
     */
    public function addSite(FHIRReference $site): self
    {
        if (!isset($this->site)) {
            $this->site = [];
        }
        $this->site[] = $site;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A facility in which study activities are conducted.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$site
     * @return static
     */
    public function setSite(FHIRReference ...$site): self
    {
        if ([] === $site) {
            unset($this->site);
            return $this;
        }
        $this->site = $site;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the study by the performer, subject or other participants.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation>
     */
    public function getNote(): array
    {
        return $this->note ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation>
     */
    public function getNoteIterator(): iterable
    {
        if (!isset($this->note)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->note);
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the study by the performer, subject or other participants.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation $note
     * @return static
     */
    public function addNote(FHIRAnnotation $note): self
    {
        if (!isset($this->note)) {
            $this->note = [];
        }
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the study by the performer, subject or other participants.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        if ([] === $note) {
            unset($this->note);
            return $this;
        }
        $this->note = $note;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional grouping mechanism or categorization of a research study. Example:
     * FDA regulated device, FDA regulated drug, MPG Paragraph 23b (a German legal
     * requirement), IRB-exempt, etc. Implementation Note: do not use the classifier
     * element to support existing semantics that are already supported thru explicit
     * elements in the resource.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getClassifier(): array
    {
        return $this->classifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getClassifierIterator(): iterable
    {
        if (!isset($this->classifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->classifier);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional grouping mechanism or categorization of a research study. Example:
     * FDA regulated device, FDA regulated drug, MPG Paragraph 23b (a German legal
     * requirement), IRB-exempt, etc. Implementation Note: do not use the classifier
     * element to support existing semantics that are already supported thru explicit
     * elements in the resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $classifier
     * @return static
     */
    public function addClassifier(FHIRCodeableConcept $classifier): self
    {
        if (!isset($this->classifier)) {
            $this->classifier = [];
        }
        $this->classifier[] = $classifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional grouping mechanism or categorization of a research study. Example:
     * FDA regulated device, FDA regulated drug, MPG Paragraph 23b (a German legal
     * requirement), IRB-exempt, etc. Implementation Note: do not use the classifier
     * element to support existing semantics that are already supported thru explicit
     * elements in the resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$classifier
     * @return static
     */
    public function setClassifier(FHIRCodeableConcept ...$classifier): self
    {
        if ([] === $classifier) {
            unset($this->classifier);
            return $this;
        }
        $this->classifier = $classifier;
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Sponsors, collaborators, and other parties.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyAssociatedParty>
     */
    public function getAssociatedParty(): array
    {
        return $this->associatedParty ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyAssociatedParty>
     */
    public function getAssociatedPartyIterator(): iterable
    {
        if (!isset($this->associatedParty)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->associatedParty);
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Sponsors, collaborators, and other parties.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyAssociatedParty $associatedParty
     * @return static
     */
    public function addAssociatedParty(FHIRResearchStudyAssociatedParty $associatedParty): self
    {
        if (!isset($this->associatedParty)) {
            $this->associatedParty = [];
        }
        $this->associatedParty[] = $associatedParty;
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Sponsors, collaborators, and other parties.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyAssociatedParty ...$associatedParty
     * @return static
     */
    public function setAssociatedParty(FHIRResearchStudyAssociatedParty ...$associatedParty): self
    {
        if ([] === $associatedParty) {
            unset($this->associatedParty);
            return $this;
        }
        $this->associatedParty = $associatedParty;
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Status of study with time for that status.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyProgressStatus>
     */
    public function getProgressStatus(): array
    {
        return $this->progressStatus ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyProgressStatus>
     */
    public function getProgressStatusIterator(): iterable
    {
        if (!isset($this->progressStatus)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->progressStatus);
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Status of study with time for that status.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyProgressStatus $progressStatus
     * @return static
     */
    public function addProgressStatus(FHIRResearchStudyProgressStatus $progressStatus): self
    {
        if (!isset($this->progressStatus)) {
            $this->progressStatus = [];
        }
        $this->progressStatus[] = $progressStatus;
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Status of study with time for that status.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyProgressStatus ...$progressStatus
     * @return static
     */
    public function setProgressStatus(FHIRResearchStudyProgressStatus ...$progressStatus): self
    {
        if ([] === $progressStatus) {
            unset($this->progressStatus);
            return $this;
        }
        $this->progressStatus = $progressStatus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description and/or code explaining the premature termination of the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getWhyStopped(): null|FHIRCodeableConcept
    {
        return $this->whyStopped ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description and/or code explaining the premature termination of the study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $whyStopped
     * @return static
     */
    public function setWhyStopped(null|FHIRCodeableConcept $whyStopped): self
    {
        if (null === $whyStopped) {
            unset($this->whyStopped);
            return $this;
        }
        $this->whyStopped = $whyStopped;
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Target or actual group of participants enrolled in study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyRecruitment
     */
    public function getRecruitment(): null|FHIRResearchStudyRecruitment
    {
        return $this->recruitment ?? null;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Target or actual group of participants enrolled in study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyRecruitment $recruitment
     * @return static
     */
    public function setRecruitment(null|FHIRResearchStudyRecruitment $recruitment): self
    {
        if (null === $recruitment) {
            unset($this->recruitment);
            return $this;
        }
        $this->recruitment = $recruitment;
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Describes an expected event or sequence of events for one of the subjects of a
     * study. E.g. for a living subject: exposure to drug A, wash-out, exposure to drug
     * B, wash-out, follow-up. E.g. for a stability study: {store sample from lot A at
     * 25 degrees for 1 month}, {store sample from lot A at 40 degrees for 1 month}.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyComparisonGroup>
     */
    public function getComparisonGroup(): array
    {
        return $this->comparisonGroup ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyComparisonGroup>
     */
    public function getComparisonGroupIterator(): iterable
    {
        if (!isset($this->comparisonGroup)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->comparisonGroup);
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Describes an expected event or sequence of events for one of the subjects of a
     * study. E.g. for a living subject: exposure to drug A, wash-out, exposure to drug
     * B, wash-out, follow-up. E.g. for a stability study: {store sample from lot A at
     * 25 degrees for 1 month}, {store sample from lot A at 40 degrees for 1 month}.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyComparisonGroup $comparisonGroup
     * @return static
     */
    public function addComparisonGroup(FHIRResearchStudyComparisonGroup $comparisonGroup): self
    {
        if (!isset($this->comparisonGroup)) {
            $this->comparisonGroup = [];
        }
        $this->comparisonGroup[] = $comparisonGroup;
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Describes an expected event or sequence of events for one of the subjects of a
     * study. E.g. for a living subject: exposure to drug A, wash-out, exposure to drug
     * B, wash-out, follow-up. E.g. for a stability study: {store sample from lot A at
     * 25 degrees for 1 month}, {store sample from lot A at 40 degrees for 1 month}.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyComparisonGroup ...$comparisonGroup
     * @return static
     */
    public function setComparisonGroup(FHIRResearchStudyComparisonGroup ...$comparisonGroup): self
    {
        if ([] === $comparisonGroup) {
            unset($this->comparisonGroup);
            return $this;
        }
        $this->comparisonGroup = $comparisonGroup;
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * A goal that the study is aiming to achieve in terms of a scientific question to
     * be answered by the analysis of data collected during the study.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyObjective>
     */
    public function getObjective(): array
    {
        return $this->objective ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyObjective>
     */
    public function getObjectiveIterator(): iterable
    {
        if (!isset($this->objective)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->objective);
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * A goal that the study is aiming to achieve in terms of a scientific question to
     * be answered by the analysis of data collected during the study.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyObjective $objective
     * @return static
     */
    public function addObjective(FHIRResearchStudyObjective $objective): self
    {
        if (!isset($this->objective)) {
            $this->objective = [];
        }
        $this->objective[] = $objective;
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * A goal that the study is aiming to achieve in terms of a scientific question to
     * be answered by the analysis of data collected during the study.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyObjective ...$objective
     * @return static
     */
    public function setObjective(FHIRResearchStudyObjective ...$objective): self
    {
        if ([] === $objective) {
            unset($this->objective);
            return $this;
        }
        $this->objective = $objective;
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * An "outcome measure", "endpoint", "effect measure" or "measure of effect" is a
     * specific measurement or observation used to quantify the effect of experimental
     * variables on the participants in a study, or for observational studies, to
     * describe patterns of diseases or traits or associations with exposures, risk
     * factors or treatment.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyOutcomeMeasure>
     */
    public function getOutcomeMeasure(): array
    {
        return $this->outcomeMeasure ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyOutcomeMeasure>
     */
    public function getOutcomeMeasureIterator(): iterable
    {
        if (!isset($this->outcomeMeasure)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->outcomeMeasure);
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * An "outcome measure", "endpoint", "effect measure" or "measure of effect" is a
     * specific measurement or observation used to quantify the effect of experimental
     * variables on the participants in a study, or for observational studies, to
     * describe patterns of diseases or traits or associations with exposures, risk
     * factors or treatment.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyOutcomeMeasure $outcomeMeasure
     * @return static
     */
    public function addOutcomeMeasure(FHIRResearchStudyOutcomeMeasure $outcomeMeasure): self
    {
        if (!isset($this->outcomeMeasure)) {
            $this->outcomeMeasure = [];
        }
        $this->outcomeMeasure[] = $outcomeMeasure;
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * An "outcome measure", "endpoint", "effect measure" or "measure of effect" is a
     * specific measurement or observation used to quantify the effect of experimental
     * variables on the participants in a study, or for observational studies, to
     * describe patterns of diseases or traits or associations with exposures, risk
     * factors or treatment.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyOutcomeMeasure ...$outcomeMeasure
     * @return static
     */
    public function setOutcomeMeasure(FHIRResearchStudyOutcomeMeasure ...$outcomeMeasure): self
    {
        if ([] === $outcomeMeasure) {
            unset($this->outcomeMeasure);
            return $this;
        }
        $this->outcomeMeasure = $outcomeMeasure;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Link to one or more sets of results generated by the study. Could also link to a
     * research registry holding the results such as ClinicalTrials.gov.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getResult(): array
    {
        return $this->result ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getResultIterator(): iterable
    {
        if (!isset($this->result)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->result);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Link to one or more sets of results generated by the study. Could also link to a
     * research registry holding the results such as ClinicalTrials.gov.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $result
     * @return static
     */
    public function addResult(FHIRReference $result): self
    {
        if (!isset($this->result)) {
            $this->result = [];
        }
        $this->result[] = $result;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Link to one or more sets of results generated by the study. Could also link to a
     * research registry holding the results such as ClinicalTrials.gov.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$result
     * @return static
     */
    public function setResult(FHIRReference ...$result): self
    {
        if ([] === $result) {
            unset($this->result);
            return $this;
        }
        $this->result = $result;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRResearchStudy $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRResearchStudy)) {
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
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface $cn */
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
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VERSION === $cen) {
                $type->setVersion(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NAME === $cen) {
                $type->setName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TITLE === $cen) {
                $type->setTitle(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LABEL === $cen) {
                $type->addLabel(FHIRResearchStudyLabel::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROTOCOL === $cen) {
                $type->addProtocol(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PART_OF === $cen) {
                $type->addPartOf(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RELATED_ARTIFACT === $cen) {
                $type->addRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE === $cen) {
                $type->setDate(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRPublicationStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRIMARY_PURPOSE_TYPE === $cen) {
                $type->setPrimaryPurposeType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PHASE === $cen) {
                $type->setPhase(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STUDY_DESIGN === $cen) {
                $type->addStudyDesign(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FOCUS === $cen) {
                $type->addFocus(FHIRCodeableReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONDITION === $cen) {
                $type->addCondition(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_KEYWORD === $cen) {
                $type->addKeyword(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REGION === $cen) {
                $type->addRegion(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION_SUMMARY === $cen) {
                $type->setDescriptionSummary(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERIOD === $cen) {
                $type->setPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SITE === $cen) {
                $type->addSite(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOTE === $cen) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CLASSIFIER === $cen) {
                $type->addClassifier(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ASSOCIATED_PARTY === $cen) {
                $type->addAssociatedParty(FHIRResearchStudyAssociatedParty::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROGRESS_STATUS === $cen) {
                $type->addProgressStatus(FHIRResearchStudyProgressStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_WHY_STOPPED === $cen) {
                $type->setWhyStopped(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RECRUITMENT === $cen) {
                $type->setRecruitment(FHIRResearchStudyRecruitment::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMPARISON_GROUP === $cen) {
                $type->addComparisonGroup(FHIRResearchStudyComparisonGroup::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OBJECTIVE === $cen) {
                $type->addObjective(FHIRResearchStudyObjective::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OUTCOME_MEASURE === $cen) {
                $type->addOutcomeMeasure(FHIRResearchStudyOutcomeMeasure::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RESULT === $cen) {
                $type->addResult(FHIRReference::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_TITLE])) {
            if (isset($type->title)) {
                $type->title->setValue((string)$attributes[self::FIELD_TITLE]);
            } else {
                $type->setTitle((string)$attributes[self::FIELD_TITLE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TITLE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATE])) {
            if (isset($type->date)) {
                $type->date->setValue((string)$attributes[self::FIELD_DATE]);
            } else {
                $type->setDate((string)$attributes[self::FIELD_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_STATUS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DESCRIPTION_SUMMARY])) {
            if (isset($type->descriptionSummary)) {
                $type->descriptionSummary->setValue((string)$attributes[self::FIELD_DESCRIPTION_SUMMARY]);
            } else {
                $type->setDescriptionSummary((string)$attributes[self::FIELD_DESCRIPTION_SUMMARY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DESCRIPTION_SUMMARY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DESCRIPTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('ResearchStudy', $this->_getSourceXMLNS());
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
        if (isset($this->title) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TITLE]) {
            $xw->writeAttribute(self::FIELD_TITLE, $this->title->_getValueAsString());
        }
        if (isset($this->date) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATE]) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->_getValueAsString());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getValueAsString());
        }
        if (isset($this->descriptionSummary) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION_SUMMARY]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION_SUMMARY, $this->descriptionSummary->_getValueAsString());
        }
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getValueAsString());
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
            foreach ($this->identifier as $v) {
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
        if (isset($this->label)) {
            foreach ($this->label as $v) {
                $xw->startElement(self::FIELD_LABEL);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->protocol)) {
            foreach ($this->protocol as $v) {
                $xw->startElement(self::FIELD_PROTOCOL);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->partOf)) {
            foreach ($this->partOf as $v) {
                $xw->startElement(self::FIELD_PART_OF);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->relatedArtifact)) {
            foreach ($this->relatedArtifact as $v) {
                $xw->startElement(self::FIELD_RELATED_ARTIFACT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->date)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATE]
                || $this->date->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATE);
            $this->date->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATE]);
            $xw->endElement();
        }
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->primaryPurposeType)) {
            $xw->startElement(self::FIELD_PRIMARY_PURPOSE_TYPE);
            $this->primaryPurposeType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->phase)) {
            $xw->startElement(self::FIELD_PHASE);
            $this->phase->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->studyDesign)) {
            foreach ($this->studyDesign as $v) {
                $xw->startElement(self::FIELD_STUDY_DESIGN);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->focus)) {
            foreach ($this->focus as $v) {
                $xw->startElement(self::FIELD_FOCUS);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->condition)) {
            foreach ($this->condition as $v) {
                $xw->startElement(self::FIELD_CONDITION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->keyword)) {
            foreach ($this->keyword as $v) {
                $xw->startElement(self::FIELD_KEYWORD);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->region)) {
            foreach ($this->region as $v) {
                $xw->startElement(self::FIELD_REGION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->descriptionSummary)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION_SUMMARY]
                || $this->descriptionSummary->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION_SUMMARY);
            $this->descriptionSummary->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION_SUMMARY]);
            $xw->endElement();
        }
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->period)) {
            $xw->startElement(self::FIELD_PERIOD);
            $this->period->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->site)) {
            foreach ($this->site as $v) {
                $xw->startElement(self::FIELD_SITE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->note)) {
            foreach ($this->note as $v) {
                $xw->startElement(self::FIELD_NOTE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->classifier)) {
            foreach ($this->classifier as $v) {
                $xw->startElement(self::FIELD_CLASSIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->associatedParty)) {
            foreach ($this->associatedParty as $v) {
                $xw->startElement(self::FIELD_ASSOCIATED_PARTY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->progressStatus)) {
            foreach ($this->progressStatus as $v) {
                $xw->startElement(self::FIELD_PROGRESS_STATUS);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->whyStopped)) {
            $xw->startElement(self::FIELD_WHY_STOPPED);
            $this->whyStopped->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->recruitment)) {
            $xw->startElement(self::FIELD_RECRUITMENT);
            $this->recruitment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->comparisonGroup)) {
            foreach ($this->comparisonGroup as $v) {
                $xw->startElement(self::FIELD_COMPARISON_GROUP);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->objective)) {
            foreach ($this->objective as $v) {
                $xw->startElement(self::FIELD_OBJECTIVE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->outcomeMeasure)) {
            foreach ($this->outcomeMeasure as $v) {
                $xw->startElement(self::FIELD_OUTCOME_MEASURE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->result)) {
            foreach ($this->result as $v) {
                $xw->startElement(self::FIELD_RESULT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRResearchStudy $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $decoded,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRResearchStudy)) {
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
            if (is_object($decoded->identifier)) {
                $vals = [$decoded->identifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER, true);
            } else {
                $vals = $decoded->identifier;
            }
            foreach($vals as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
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
        if (isset($decoded->title)
            || isset($decoded->_title)
            || property_exists($decoded, self::FIELD_TITLE)
            || property_exists($decoded, self::FIELD_TITLE_EXT)) {
            $v = $decoded->_title ?? new \stdClass();
            $v->value = $decoded->title ?? null;
            $type->setTitle(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->label) || property_exists($decoded, self::FIELD_LABEL)) {
            if (is_object($decoded->label)) {
                $vals = [$decoded->label];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_LABEL, true);
            } else {
                $vals = $decoded->label;
            }
            foreach($vals as $v) {
                $type->addLabel(FHIRResearchStudyLabel::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->protocol) || property_exists($decoded, self::FIELD_PROTOCOL)) {
            if (is_object($decoded->protocol)) {
                $vals = [$decoded->protocol];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PROTOCOL, true);
            } else {
                $vals = $decoded->protocol;
            }
            foreach($vals as $v) {
                $type->addProtocol(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->partOf) || property_exists($decoded, self::FIELD_PART_OF)) {
            if (is_object($decoded->partOf)) {
                $vals = [$decoded->partOf];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PART_OF, true);
            } else {
                $vals = $decoded->partOf;
            }
            foreach($vals as $v) {
                $type->addPartOf(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->relatedArtifact) || property_exists($decoded, self::FIELD_RELATED_ARTIFACT)) {
            if (is_object($decoded->relatedArtifact)) {
                $vals = [$decoded->relatedArtifact];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_RELATED_ARTIFACT, true);
            } else {
                $vals = $decoded->relatedArtifact;
            }
            foreach($vals as $v) {
                $type->addRelatedArtifact(FHIRRelatedArtifact::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->date)
            || isset($decoded->_date)
            || property_exists($decoded, self::FIELD_DATE)
            || property_exists($decoded, self::FIELD_DATE_EXT)) {
            $v = $decoded->_date ?? new \stdClass();
            $v->value = $decoded->date ?? null;
            $type->setDate(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->status)
            || isset($decoded->_status)
            || property_exists($decoded, self::FIELD_STATUS)
            || property_exists($decoded, self::FIELD_STATUS_EXT)) {
            $v = $decoded->_status ?? new \stdClass();
            $v->value = $decoded->status ?? null;
            $type->setStatus(FHIRPublicationStatus::jsonUnserialize($v, $config));
        }
        if (isset($decoded->primaryPurposeType) || property_exists($decoded, self::FIELD_PRIMARY_PURPOSE_TYPE)) {
            if (is_array($decoded->primaryPurposeType)) {
                $type->setPrimaryPurposeType(FHIRCodeableConcept::jsonUnserialize(reset($decoded->primaryPurposeType), $config));
            } else {
                $type->setPrimaryPurposeType(FHIRCodeableConcept::jsonUnserialize($decoded->primaryPurposeType, $config));
            }
        }
        if (isset($decoded->phase) || property_exists($decoded, self::FIELD_PHASE)) {
            if (is_array($decoded->phase)) {
                $type->setPhase(FHIRCodeableConcept::jsonUnserialize(reset($decoded->phase), $config));
            } else {
                $type->setPhase(FHIRCodeableConcept::jsonUnserialize($decoded->phase, $config));
            }
        }
        if (isset($decoded->studyDesign) || property_exists($decoded, self::FIELD_STUDY_DESIGN)) {
            if (is_object($decoded->studyDesign)) {
                $vals = [$decoded->studyDesign];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_STUDY_DESIGN, true);
            } else {
                $vals = $decoded->studyDesign;
            }
            foreach($vals as $v) {
                $type->addStudyDesign(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->focus) || property_exists($decoded, self::FIELD_FOCUS)) {
            if (is_object($decoded->focus)) {
                $vals = [$decoded->focus];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_FOCUS, true);
            } else {
                $vals = $decoded->focus;
            }
            foreach($vals as $v) {
                $type->addFocus(FHIRCodeableReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->condition) || property_exists($decoded, self::FIELD_CONDITION)) {
            if (is_object($decoded->condition)) {
                $vals = [$decoded->condition];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONDITION, true);
            } else {
                $vals = $decoded->condition;
            }
            foreach($vals as $v) {
                $type->addCondition(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->keyword) || property_exists($decoded, self::FIELD_KEYWORD)) {
            if (is_object($decoded->keyword)) {
                $vals = [$decoded->keyword];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_KEYWORD, true);
            } else {
                $vals = $decoded->keyword;
            }
            foreach($vals as $v) {
                $type->addKeyword(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->region) || property_exists($decoded, self::FIELD_REGION)) {
            if (is_object($decoded->region)) {
                $vals = [$decoded->region];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_REGION, true);
            } else {
                $vals = $decoded->region;
            }
            foreach($vals as $v) {
                $type->addRegion(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->descriptionSummary)
            || isset($decoded->_descriptionSummary)
            || property_exists($decoded, self::FIELD_DESCRIPTION_SUMMARY)
            || property_exists($decoded, self::FIELD_DESCRIPTION_SUMMARY_EXT)) {
            $v = $decoded->_descriptionSummary ?? new \stdClass();
            $v->value = $decoded->descriptionSummary ?? null;
            $type->setDescriptionSummary(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($decoded->description)
            || isset($decoded->_description)
            || property_exists($decoded, self::FIELD_DESCRIPTION)
            || property_exists($decoded, self::FIELD_DESCRIPTION_EXT)) {
            $v = $decoded->_description ?? new \stdClass();
            $v->value = $decoded->description ?? null;
            $type->setDescription(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($decoded->period) || property_exists($decoded, self::FIELD_PERIOD)) {
            if (is_array($decoded->period)) {
                $type->setPeriod(FHIRPeriod::jsonUnserialize(reset($decoded->period), $config));
            } else {
                $type->setPeriod(FHIRPeriod::jsonUnserialize($decoded->period, $config));
            }
        }
        if (isset($decoded->site) || property_exists($decoded, self::FIELD_SITE)) {
            if (is_object($decoded->site)) {
                $vals = [$decoded->site];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SITE, true);
            } else {
                $vals = $decoded->site;
            }
            foreach($vals as $v) {
                $type->addSite(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->note) || property_exists($decoded, self::FIELD_NOTE)) {
            if (is_object($decoded->note)) {
                $vals = [$decoded->note];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_NOTE, true);
            } else {
                $vals = $decoded->note;
            }
            foreach($vals as $v) {
                $type->addNote(FHIRAnnotation::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->classifier) || property_exists($decoded, self::FIELD_CLASSIFIER)) {
            if (is_object($decoded->classifier)) {
                $vals = [$decoded->classifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CLASSIFIER, true);
            } else {
                $vals = $decoded->classifier;
            }
            foreach($vals as $v) {
                $type->addClassifier(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->associatedParty) || property_exists($decoded, self::FIELD_ASSOCIATED_PARTY)) {
            if (is_object($decoded->associatedParty)) {
                $vals = [$decoded->associatedParty];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ASSOCIATED_PARTY, true);
            } else {
                $vals = $decoded->associatedParty;
            }
            foreach($vals as $v) {
                $type->addAssociatedParty(FHIRResearchStudyAssociatedParty::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->progressStatus) || property_exists($decoded, self::FIELD_PROGRESS_STATUS)) {
            if (is_object($decoded->progressStatus)) {
                $vals = [$decoded->progressStatus];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PROGRESS_STATUS, true);
            } else {
                $vals = $decoded->progressStatus;
            }
            foreach($vals as $v) {
                $type->addProgressStatus(FHIRResearchStudyProgressStatus::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->whyStopped) || property_exists($decoded, self::FIELD_WHY_STOPPED)) {
            if (is_array($decoded->whyStopped)) {
                $type->setWhyStopped(FHIRCodeableConcept::jsonUnserialize(reset($decoded->whyStopped), $config));
            } else {
                $type->setWhyStopped(FHIRCodeableConcept::jsonUnserialize($decoded->whyStopped, $config));
            }
        }
        if (isset($decoded->recruitment) || property_exists($decoded, self::FIELD_RECRUITMENT)) {
            if (is_array($decoded->recruitment)) {
                $type->setRecruitment(FHIRResearchStudyRecruitment::jsonUnserialize(reset($decoded->recruitment), $config));
            } else {
                $type->setRecruitment(FHIRResearchStudyRecruitment::jsonUnserialize($decoded->recruitment, $config));
            }
        }
        if (isset($decoded->comparisonGroup) || property_exists($decoded, self::FIELD_COMPARISON_GROUP)) {
            if (is_object($decoded->comparisonGroup)) {
                $vals = [$decoded->comparisonGroup];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_COMPARISON_GROUP, true);
            } else {
                $vals = $decoded->comparisonGroup;
            }
            foreach($vals as $v) {
                $type->addComparisonGroup(FHIRResearchStudyComparisonGroup::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->objective) || property_exists($decoded, self::FIELD_OBJECTIVE)) {
            if (is_object($decoded->objective)) {
                $vals = [$decoded->objective];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_OBJECTIVE, true);
            } else {
                $vals = $decoded->objective;
            }
            foreach($vals as $v) {
                $type->addObjective(FHIRResearchStudyObjective::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->outcomeMeasure) || property_exists($decoded, self::FIELD_OUTCOME_MEASURE)) {
            if (is_object($decoded->outcomeMeasure)) {
                $vals = [$decoded->outcomeMeasure];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_OUTCOME_MEASURE, true);
            } else {
                $vals = $decoded->outcomeMeasure;
            }
            foreach($vals as $v) {
                $type->addOutcomeMeasure(FHIRResearchStudyOutcomeMeasure::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->result) || property_exists($decoded, self::FIELD_RESULT)) {
            if (is_object($decoded->result)) {
                $vals = [$decoded->result];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_RESULT, true);
            } else {
                $vals = $decoded->result;
            }
            foreach($vals as $v) {
                $type->addResult(FHIRReference::jsonUnserialize($v, $config));
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
            if ($this->url->_nonValueFieldDefined()) {
                $ext = $this->url->jsonSerialize();
                unset($ext->value);
                $out->_url = $ext;
            }
        }
        if (isset($this->identifier) && [] !== $this->identifier) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER) && 1 === count($this->identifier)) {
                $out->identifier = $this->identifier[0];
            } else {
                $out->identifier = $this->identifier;
            }
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
        if (isset($this->title)) {
            if (null !== ($val = $this->title->getValue())) {
                $out->title = $val;
            }
            if ($this->title->_nonValueFieldDefined()) {
                $ext = $this->title->jsonSerialize();
                unset($ext->value);
                $out->_title = $ext;
            }
        }
        if (isset($this->label) && [] !== $this->label) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_LABEL) && 1 === count($this->label)) {
                $out->label = $this->label[0];
            } else {
                $out->label = $this->label;
            }
        }
        if (isset($this->protocol) && [] !== $this->protocol) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PROTOCOL) && 1 === count($this->protocol)) {
                $out->protocol = $this->protocol[0];
            } else {
                $out->protocol = $this->protocol;
            }
        }
        if (isset($this->partOf) && [] !== $this->partOf) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PART_OF) && 1 === count($this->partOf)) {
                $out->partOf = $this->partOf[0];
            } else {
                $out->partOf = $this->partOf;
            }
        }
        if (isset($this->relatedArtifact) && [] !== $this->relatedArtifact) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_RELATED_ARTIFACT) && 1 === count($this->relatedArtifact)) {
                $out->relatedArtifact = $this->relatedArtifact[0];
            } else {
                $out->relatedArtifact = $this->relatedArtifact;
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
        if (isset($this->primaryPurposeType)) {
            $out->primaryPurposeType = $this->primaryPurposeType;
        }
        if (isset($this->phase)) {
            $out->phase = $this->phase;
        }
        if (isset($this->studyDesign) && [] !== $this->studyDesign) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_STUDY_DESIGN) && 1 === count($this->studyDesign)) {
                $out->studyDesign = $this->studyDesign[0];
            } else {
                $out->studyDesign = $this->studyDesign;
            }
        }
        if (isset($this->focus) && [] !== $this->focus) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_FOCUS) && 1 === count($this->focus)) {
                $out->focus = $this->focus[0];
            } else {
                $out->focus = $this->focus;
            }
        }
        if (isset($this->condition) && [] !== $this->condition) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONDITION) && 1 === count($this->condition)) {
                $out->condition = $this->condition[0];
            } else {
                $out->condition = $this->condition;
            }
        }
        if (isset($this->keyword) && [] !== $this->keyword) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_KEYWORD) && 1 === count($this->keyword)) {
                $out->keyword = $this->keyword[0];
            } else {
                $out->keyword = $this->keyword;
            }
        }
        if (isset($this->region) && [] !== $this->region) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_REGION) && 1 === count($this->region)) {
                $out->region = $this->region[0];
            } else {
                $out->region = $this->region;
            }
        }
        if (isset($this->descriptionSummary)) {
            if (null !== ($val = $this->descriptionSummary->getValue())) {
                $out->descriptionSummary = $val;
            }
            if ($this->descriptionSummary->_nonValueFieldDefined()) {
                $ext = $this->descriptionSummary->jsonSerialize();
                unset($ext->value);
                $out->_descriptionSummary = $ext;
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
        if (isset($this->period)) {
            $out->period = $this->period;
        }
        if (isset($this->site) && [] !== $this->site) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SITE) && 1 === count($this->site)) {
                $out->site = $this->site[0];
            } else {
                $out->site = $this->site;
            }
        }
        if (isset($this->note) && [] !== $this->note) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_NOTE) && 1 === count($this->note)) {
                $out->note = $this->note[0];
            } else {
                $out->note = $this->note;
            }
        }
        if (isset($this->classifier) && [] !== $this->classifier) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CLASSIFIER) && 1 === count($this->classifier)) {
                $out->classifier = $this->classifier[0];
            } else {
                $out->classifier = $this->classifier;
            }
        }
        if (isset($this->associatedParty) && [] !== $this->associatedParty) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ASSOCIATED_PARTY) && 1 === count($this->associatedParty)) {
                $out->associatedParty = $this->associatedParty[0];
            } else {
                $out->associatedParty = $this->associatedParty;
            }
        }
        if (isset($this->progressStatus) && [] !== $this->progressStatus) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PROGRESS_STATUS) && 1 === count($this->progressStatus)) {
                $out->progressStatus = $this->progressStatus[0];
            } else {
                $out->progressStatus = $this->progressStatus;
            }
        }
        if (isset($this->whyStopped)) {
            $out->whyStopped = $this->whyStopped;
        }
        if (isset($this->recruitment)) {
            $out->recruitment = $this->recruitment;
        }
        if (isset($this->comparisonGroup) && [] !== $this->comparisonGroup) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_COMPARISON_GROUP) && 1 === count($this->comparisonGroup)) {
                $out->comparisonGroup = $this->comparisonGroup[0];
            } else {
                $out->comparisonGroup = $this->comparisonGroup;
            }
        }
        if (isset($this->objective) && [] !== $this->objective) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_OBJECTIVE) && 1 === count($this->objective)) {
                $out->objective = $this->objective[0];
            } else {
                $out->objective = $this->objective;
            }
        }
        if (isset($this->outcomeMeasure) && [] !== $this->outcomeMeasure) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_OUTCOME_MEASURE) && 1 === count($this->outcomeMeasure)) {
                $out->outcomeMeasure = $this->outcomeMeasure[0];
            } else {
                $out->outcomeMeasure = $this->outcomeMeasure;
            }
        }
        if (isset($this->result) && [] !== $this->result) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_RESULT) && 1 === count($this->result)) {
                $out->result = $this->result[0];
            } else {
                $out->result = $this->result;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}