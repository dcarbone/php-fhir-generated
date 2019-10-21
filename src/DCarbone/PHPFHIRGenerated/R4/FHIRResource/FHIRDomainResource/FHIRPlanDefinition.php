<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 23:43+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionGoal;
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
 * This resource allows for the definition of various types of plans as a sharable,
 * consumable, and executable artifact. The resource is general enough to support
 * the description of a broad range of clinical artifacts such as clinical decision
 * support rules, order sets and protocols.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRPlanDefinition
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRPlanDefinition extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ACTION = 'action';
    const FIELD_APPROVAL_DATE = 'approvalDate';
    const FIELD_APPROVAL_DATE_EXT = '_approvalDate';
    const FIELD_AUTHOR = 'author';
    const FIELD_CONTACT = 'contact';
    const FIELD_COPYRIGHT = 'copyright';
    const FIELD_COPYRIGHT_EXT = '_copyright';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_EDITOR = 'editor';
    const FIELD_EFFECTIVE_PERIOD = 'effectivePeriod';
    const FIELD_ENDORSER = 'endorser';
    const FIELD_EXPERIMENTAL = 'experimental';
    const FIELD_EXPERIMENTAL_EXT = '_experimental';
    const FIELD_GOAL = 'goal';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
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
    const FIELD_RELATED_ARTIFACT = 'relatedArtifact';
    const FIELD_REVIEWER = 'reviewer';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUBJECT_CODEABLE_CONCEPT = 'subjectCodeableConcept';
    const FIELD_SUBJECT_REFERENCE = 'subjectReference';
    const FIELD_SUBTITLE = 'subtitle';
    const FIELD_SUBTITLE_EXT = '_subtitle';
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
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * An action or group of actions to be taken as part of the plan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction[]
     */
    private $action = [];
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date on which the resource content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    private $approvalDate = null;
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An individiual or organization primarily involved in the creation and
     * maintenance of the content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[]
     */
    private $author = [];
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[]
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
     * A copyright statement relating to the plan definition and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the plan definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
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
     * The date (and optionally time) when the plan definition was published. The date
     * must change when the business version changes and it must change if the status
     * code changes. In addition, it should change when the substantive content of the
     * plan definition changes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
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
     * A free text natural language description of the plan definition from a
     * consumer's perspective.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    private $description = null;
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for internal coherence of
     * the content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[]
     */
    private $editor = [];
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The period during which the plan definition content was or is planned to be in
     * active use.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    private $effectivePeriod = null;
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An individual or organization responsible for officially endorsing the content
     * for use in some setting.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[]
     */
    private $endorser = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A Boolean value to indicate that this plan definition is authored for testing
     * purposes (or education/evaluation/marketing) and is not intended to be used for
     * genuine usage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    private $experimental = null;
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Goals that describe what the activities within the plan are intended to achieve.
     * For example, weight loss, restoring an activity of daily living, obtaining herd
     * immunity via immunization, meeting a process improvement objective, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionGoal[]
     */
    private $goal = [];
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this plan definition when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the plan definition is intended to be
     * used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $jurisdiction = [];
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval but does not change the original approval date.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    private $lastReviewDate = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A reference to a Library resource containing any formal logic used by the plan
     * definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    private $library = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A natural language name identifying the plan definition. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $name = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the organization or individual that published the plan definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
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
     * Explanation of why this plan definition is needed and why it has been designed
     * as it has.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    private $purpose = null;
    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact[]
     */
    private $relatedArtifact = [];
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for review of some aspect of
     * the content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[]
     */
    private $reviewer = [];
    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of this plan definition. Enables tracking the life-cycle of the
     * content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus
     */
    private $status = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code or group definition that describes the intended subject of the plan
     * definition. (choose any one of subject*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $subjectCodeableConcept = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code or group definition that describes the intended subject of the plan
     * definition. (choose any one of subject*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $subjectReference = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An explanatory or alternate title for the plan definition giving additional
     * information about its content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $subtitle = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short, descriptive, user-friendly title for the plan definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $title = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Descriptive topics related to the content of the plan definition. Topics provide
     * a high-level categorization of the definition that can be useful for filtering
     * and searching.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $topic = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A high-level category for the plan definition that distinguishes the kinds of
     * systems that would be interested in the plan definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An absolute URI that is used to identify this plan definition when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which at which an authoritative instance of this plan definition is
     * (or will be) published. This URL can be the target of a canonical reference. It
     * SHALL remain the same when the plan definition is stored on different servers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    private $url = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A detailed description of how the plan definition is used from a clinical
     * perspective.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $usage = null;
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
     * be used to assist with indexing and searching for appropriate plan definition
     * instances.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext[]
     */
    private $useContext = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The identifier that is used to identify this version of the plan definition when
     * it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the plan definition author and is not expected to be
     * globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence. To provide a version consistent with
     * the Decision Support Service specification, use the format Major.Minor.Revision
     * (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the
     * Decision Support Service specification. Note that a version is required for
     * non-experimental active artifacts.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $version = null;

    /**
     * FHIRPlanDefinition Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPlanDefinition::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTION])) {
            if (is_array($data[self::FIELD_ACTION])) {
                foreach($data[self::FIELD_ACTION] as $v) {
                    if ($v instanceof FHIRPlanDefinitionAction) {
                        $this->addAction($v);
                    } else {
                        $this->addAction(new FHIRPlanDefinitionAction($v));
                    }
                }
            } else if ($data[self::FIELD_ACTION] instanceof FHIRPlanDefinitionAction) {
                $this->addAction($data[self::FIELD_ACTION]);
            } else {
                $this->addAction(new FHIRPlanDefinitionAction($data[self::FIELD_ACTION]));
            }
        }
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
        if (isset($data[self::FIELD_AUTHOR])) {
            if (is_array($data[self::FIELD_AUTHOR])) {
                foreach($data[self::FIELD_AUTHOR] as $v) {
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
        if (isset($data[self::FIELD_EDITOR])) {
            if (is_array($data[self::FIELD_EDITOR])) {
                foreach($data[self::FIELD_EDITOR] as $v) {
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
        if (isset($data[self::FIELD_GOAL])) {
            if (is_array($data[self::FIELD_GOAL])) {
                foreach($data[self::FIELD_GOAL] as $v) {
                    if ($v instanceof FHIRPlanDefinitionGoal) {
                        $this->addGoal($v);
                    } else {
                        $this->addGoal(new FHIRPlanDefinitionGoal($v));
                    }
                }
            } else if ($data[self::FIELD_GOAL] instanceof FHIRPlanDefinitionGoal) {
                $this->addGoal($data[self::FIELD_GOAL]);
            } else {
                $this->addGoal(new FHIRPlanDefinitionGoal($data[self::FIELD_GOAL]));
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
            $ext = (isset($data[self::FIELD_LIBRARY_EXT]) && is_array($data[self::FIELD_LIBRARY_EXT]))
                ? $data[self::FIELD_LIBRARY_EXT]
                : null;
            if (is_array($data[self::FIELD_LIBRARY])) {
                foreach($data[self::FIELD_LIBRARY] as $i => $v) {
                    if ($v instanceof FHIRCanonical) {
                        $this->addLibrary($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addLibrary(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addLibrary(new FHIRCanonical($v));
                    }
                }
            } elseif ($data[self::FIELD_LIBRARY] instanceof FHIRCanonical) {
                $this->addLibrary($data[self::FIELD_LIBRARY]);
            } elseif ($ext && is_scalar($data[self::FIELD_LIBRARY])) {
                $this->addLibrary(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_LIBRARY]] + $ext));
            } else {
                $this->addLibrary(new FHIRCanonical($data[self::FIELD_LIBRARY]));
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
        if (isset($data[self::FIELD_REVIEWER])) {
            if (is_array($data[self::FIELD_REVIEWER])) {
                foreach($data[self::FIELD_REVIEWER] as $v) {
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
        if (isset($data[self::FIELD_SUBTITLE])) {
            $ext = (isset($data[self::FIELD_SUBTITLE_EXT]) && is_array($data[self::FIELD_SUBTITLE_EXT]))
                ? $data[self::FIELD_SUBTITLE_EXT]
                : null;
            if ($data[self::FIELD_SUBTITLE] instanceof FHIRString) {
                $this->setSubtitle($data[self::FIELD_SUBTITLE]);
            } elseif ($ext && is_scalar($data[self::FIELD_SUBTITLE])) {
                $this->setSubtitle(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SUBTITLE]] + $ext));
            } else {
                $this->setSubtitle(new FHIRString($data[self::FIELD_SUBTITLE]));
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
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
        return "<PlanDefinition{$xmlns}></PlanDefinition>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * An action or group of actions to be taken as part of the plan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * An action or group of actions to be taken as part of the plan.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction $action
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
     */
    public function addAction(FHIRPlanDefinitionAction $action = null)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * An action or group of actions to be taken as part of the plan.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction[] $action
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
     */
    public function setAction(array $action = [])
    {
        $this->action = [];
        if ([] === $action) {
            return $this;
        }
        foreach($action as $v) {
            if ($v instanceof FHIRPlanDefinitionAction) {
                $this->addAction($v);
            } else {
                $this->addAction(new FHIRPlanDefinitionAction($v));
            }
        }
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date on which the resource content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate $approvalDate
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An individiual or organization primarily involved in the creation and
     * maintenance of the content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail $author
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
     */
    public function addAuthor(FHIRContactDetail $author = null)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An individiual or organization primarily involved in the creation and
     * maintenance of the content.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[] $author
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail $contact
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[] $contact
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * A copyright statement relating to the plan definition and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the plan definition.
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the plan definition and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the plan definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $copyright
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * The date (and optionally time) when the plan definition was published. The date
     * must change when the business version changes and it must change if the status
     * code changes. In addition, it should change when the substantive content of the
     * plan definition changes.
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date (and optionally time) when the plan definition was published. The date
     * must change when the business version changes and it must change if the status
     * code changes. In addition, it should change when the substantive content of the
     * plan definition changes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $date
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * A free text natural language description of the plan definition from a
     * consumer's perspective.
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the plan definition from a
     * consumer's perspective.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $description
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for internal coherence of
     * the content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail $editor
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
     */
    public function addEditor(FHIRContactDetail $editor = null)
    {
        $this->editor[] = $editor;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for internal coherence of
     * the content.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[] $editor
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The period during which the plan definition content was or is planned to be in
     * active use.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The period during which the plan definition content was or is planned to be in
     * active use.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $effectivePeriod
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
     */
    public function setEffectivePeriod(FHIRPeriod $effectivePeriod = null)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An individual or organization responsible for officially endorsing the content
     * for use in some setting.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail $endorser
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
     */
    public function addEndorser(FHIRContactDetail $endorser = null)
    {
        $this->endorser[] = $endorser;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An individual or organization responsible for officially endorsing the content
     * for use in some setting.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[] $endorser
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A Boolean value to indicate that this plan definition is authored for testing
     * purposes (or education/evaluation/marketing) and is not intended to be used for
     * genuine usage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A Boolean value to indicate that this plan definition is authored for testing
     * purposes (or education/evaluation/marketing) and is not intended to be used for
     * genuine usage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $experimental
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Goals that describe what the activities within the plan are intended to achieve.
     * For example, weight loss, restoring an activity of daily living, obtaining herd
     * immunity via immunization, meeting a process improvement objective, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionGoal[]
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Goals that describe what the activities within the plan are intended to achieve.
     * For example, weight loss, restoring an activity of daily living, obtaining herd
     * immunity via immunization, meeting a process improvement objective, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionGoal $goal
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
     */
    public function addGoal(FHIRPlanDefinitionGoal $goal = null)
    {
        $this->goal[] = $goal;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Goals that describe what the activities within the plan are intended to achieve.
     * For example, weight loss, restoring an activity of daily living, obtaining herd
     * immunity via immunization, meeting a process improvement objective, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionGoal[] $goal
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
     */
    public function setGoal(array $goal = [])
    {
        $this->goal = [];
        if ([] === $goal) {
            return $this;
        }
        foreach($goal as $v) {
            if ($v instanceof FHIRPlanDefinitionGoal) {
                $this->addGoal($v);
            } else {
                $this->addGoal(new FHIRPlanDefinitionGoal($v));
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
     * A formal identifier that is used to identify this plan definition when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this plan definition when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * A formal identifier that is used to identify this plan definition when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the plan definition is intended to be
     * used.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the plan definition is intended to be
     * used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * A legal or geographic region in which the plan definition is intended to be
     * used.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $jurisdiction
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval but does not change the original approval date.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate $lastReviewDate
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A reference to a Library resource containing any formal logic used by the plan
     * definition.
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A reference to a Library resource containing any formal logic used by the plan
     * definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $library
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A reference to a Library resource containing any formal logic used by the plan
     * definition.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[] $library
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A natural language name identifying the plan definition. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A natural language name identifying the plan definition. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $name
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * The name of the organization or individual that published the plan definition.
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the organization or individual that published the plan definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $publisher
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * Explanation of why this plan definition is needed and why it has been designed
     * as it has.
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Explanation of why this plan definition is needed and why it has been designed
     * as it has.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $purpose
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact $relatedArtifact
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact[] $relatedArtifact
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for review of some aspect of
     * the content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail $reviewer
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
     */
    public function addReviewer(FHIRContactDetail $reviewer = null)
    {
        $this->reviewer[] = $reviewer;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for review of some aspect of
     * the content.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[] $reviewer
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of this plan definition. Enables tracking the life-cycle of the
     * content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of this plan definition. Enables tracking the life-cycle of the
     * content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus $status
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code or group definition that describes the intended subject of the plan
     * definition. (choose any one of subject*, but only one)
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code or group definition that describes the intended subject of the plan
     * definition. (choose any one of subject*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $subjectCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
     */
    public function setSubjectCodeableConcept(FHIRCodeableConcept $subjectCodeableConcept = null)
    {
        $this->subjectCodeableConcept = $subjectCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code or group definition that describes the intended subject of the plan
     * definition. (choose any one of subject*, but only one)
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code or group definition that describes the intended subject of the plan
     * definition. (choose any one of subject*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $subjectReference
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
     */
    public function setSubjectReference(FHIRReference $subjectReference = null)
    {
        $this->subjectReference = $subjectReference;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An explanatory or alternate title for the plan definition giving additional
     * information about its content.
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An explanatory or alternate title for the plan definition giving additional
     * information about its content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $subtitle
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short, descriptive, user-friendly title for the plan definition.
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short, descriptive, user-friendly title for the plan definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $title
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Descriptive topics related to the content of the plan definition. Topics provide
     * a high-level categorization of the definition that can be useful for filtering
     * and searching.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Descriptive topics related to the content of the plan definition. Topics provide
     * a high-level categorization of the definition that can be useful for filtering
     * and searching.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $topic
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Descriptive topics related to the content of the plan definition. Topics provide
     * a high-level categorization of the definition that can be useful for filtering
     * and searching.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $topic
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A high-level category for the plan definition that distinguishes the kinds of
     * systems that would be interested in the plan definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A high-level category for the plan definition that distinguishes the kinds of
     * systems that would be interested in the plan definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An absolute URI that is used to identify this plan definition when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which at which an authoritative instance of this plan definition is
     * (or will be) published. This URL can be the target of a canonical reference. It
     * SHALL remain the same when the plan definition is stored on different servers.
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An absolute URI that is used to identify this plan definition when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which at which an authoritative instance of this plan definition is
     * (or will be) published. This URL can be the target of a canonical reference. It
     * SHALL remain the same when the plan definition is stored on different servers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $url
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A detailed description of how the plan definition is used from a clinical
     * perspective.
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A detailed description of how the plan definition is used from a clinical
     * perspective.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $usage
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate plan definition
     * instances.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate plan definition
     * instances.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext $useContext
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * be used to assist with indexing and searching for appropriate plan definition
     * instances.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext[] $useContext
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * The identifier that is used to identify this version of the plan definition when
     * it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the plan definition author and is not expected to be
     * globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence. To provide a version consistent with
     * the Decision Support Service specification, use the format Major.Minor.Revision
     * (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the
     * Decision Support Service specification. Note that a version is required for
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The identifier that is used to identify this version of the plan definition when
     * it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the plan definition author and is not expected to be
     * globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence. To provide a version consistent with
     * the Decision Support Service specification, use the format Major.Minor.Revision
     * (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the
     * Decision Support Service specification. Note that a version is required for
     * non-experimental active artifacts.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $version
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
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
                throw new \DomainException(sprintf('FHIRPlanDefinition::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRPlanDefinition::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRPlanDefinition;
        } elseif (!is_object($type) || !($type instanceof FHIRPlanDefinition)) {
            throw new \RuntimeException(sprintf(
                'FHIRPlanDefinition::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition or null, %s seen.',
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
        if (isset($children->action)) {
            foreach($children->action as $child) {
                $type->addAction(FHIRPlanDefinitionAction::xmlUnserialize($child));
            }
        }
        if (isset($attributes->approvalDate)) {
            $type->setApprovalDate((string)$attributes->approvalDate);
        }
        if (isset($children->approvalDate)) {
            $type->setApprovalDate(FHIRDate::xmlUnserialize($children->approvalDate));
        }
        if (isset($children->author)) {
            foreach($children->author as $child) {
                $type->addAuthor(FHIRContactDetail::xmlUnserialize($child));
            }
        }
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
        if (isset($attributes->experimental)) {
            $type->setExperimental((string)$attributes->experimental);
        }
        if (isset($children->experimental)) {
            $type->setExperimental(FHIRBoolean::xmlUnserialize($children->experimental));
        }
        if (isset($children->goal)) {
            foreach($children->goal as $child) {
                $type->addGoal(FHIRPlanDefinitionGoal::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
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
        if (isset($attributes->library)) {
            $type->addLibrary((string)$attributes->library);
        }
        if (isset($children->library)) {
            foreach($children->library as $child) {
                $type->addLibrary(FHIRCanonical::xmlUnserialize($child));
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
        if (isset($children->status)) {
            $type->setStatus(FHIRPublicationStatus::xmlUnserialize($children->status));
        }
        if (isset($children->subjectCodeableConcept)) {
            $type->setSubjectCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->subjectCodeableConcept));
        }
        if (isset($children->subjectReference)) {
            $type->setSubjectReference(FHIRReference::xmlUnserialize($children->subjectReference));
        }
        if (isset($attributes->subtitle)) {
            $type->setSubtitle((string)$attributes->subtitle);
        }
        if (isset($children->subtitle)) {
            $type->setSubtitle(FHIRString::xmlUnserialize($children->subtitle));
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
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
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

        if ([] !== ($vs = $this->getAction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ACTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
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
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
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

        if ([] !== ($vs = $this->getGoal())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_GOAL, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
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

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getAction())) {
            $a[self::FIELD_ACTION] = $vs;
        }
        if (null !== ($v = $this->getApprovalDate())) {
            $a[self::FIELD_APPROVAL_DATE] = $v->getValue();
            $a[self::FIELD_APPROVAL_DATE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getAuthor())) {
            $a[self::FIELD_AUTHOR] = $vs;
        }
        if ([] !== ($vs = $this->getContact())) {
            $a[self::FIELD_CONTACT] = $vs;
        }
        if (null !== ($v = $this->getCopyright())) {
            $a[self::FIELD_COPYRIGHT] = $v->getValue();
            $a[self::FIELD_COPYRIGHT_EXT] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = $v->getValue();
            $a[self::FIELD_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if ([] !== ($vs = $this->getEditor())) {
            $a[self::FIELD_EDITOR] = $vs;
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $a[self::FIELD_EFFECTIVE_PERIOD] = $v;
        }
        if ([] !== ($vs = $this->getEndorser())) {
            $a[self::FIELD_ENDORSER] = $vs;
        }
        if (null !== ($v = $this->getExperimental())) {
            $a[self::FIELD_EXPERIMENTAL] = $v->getValue();
            $a[self::FIELD_EXPERIMENTAL_EXT] = $v;
        }
        if ([] !== ($vs = $this->getGoal())) {
            $a[self::FIELD_GOAL] = $vs;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            $a[self::FIELD_JURISDICTION] = $vs;
        }
        if (null !== ($v = $this->getLastReviewDate())) {
            $a[self::FIELD_LAST_REVIEW_DATE] = $v->getValue();
            $a[self::FIELD_LAST_REVIEW_DATE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getLibrary())) {
            $a[self::FIELD_LIBRARY] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LIBRARY][] = $v->getValue();
                $a[self::FIELD_LIBRARY_EXT][] = $v;
            }
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
        if ([] !== ($vs = $this->getRelatedArtifact())) {
            $a[self::FIELD_RELATED_ARTIFACT] = $vs;
        }
        if ([] !== ($vs = $this->getReviewer())) {
            $a[self::FIELD_REVIEWER] = $vs;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if (null !== ($v = $this->getSubjectCodeableConcept())) {
            $a[self::FIELD_SUBJECT_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getSubjectReference())) {
            $a[self::FIELD_SUBJECT_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getSubtitle())) {
            $a[self::FIELD_SUBTITLE] = $v->getValue();
            $a[self::FIELD_SUBTITLE_EXT] = $v;
        }
        if (null !== ($v = $this->getTitle())) {
            $a[self::FIELD_TITLE] = $v->getValue();
            $a[self::FIELD_TITLE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getTopic())) {
            $a[self::FIELD_TOPIC] = $vs;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
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