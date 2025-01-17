<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition;

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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionCardinalityBehavior;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionGroupingBehavior;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionPrecheckBehavior;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionRequiredBehavior;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionSelectionBehavior;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRelatedArtifact;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRequestPriority;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTriggerDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * This resource allows for the definition of various types of plans as a sharable,
 * consumable, and executable artifact. The resource is general enough to support
 * the description of a broad range of clinical and non-clinical artifacts such as
 * clinical decision support rules, order sets, protocols, and drug quality
 * specifications.
 */
class FHIRPlanDefinitionAction extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION;


    public const FIELD_PREFIX = 'prefix';
    public const FIELD_PREFIX_EXT = '_prefix';
    public const FIELD_TITLE = 'title';
    public const FIELD_TITLE_EXT = '_title';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_TEXT_EQUIVALENT = 'textEquivalent';
    public const FIELD_TEXT_EQUIVALENT_EXT = '_textEquivalent';
    public const FIELD_PRIORITY = 'priority';
    public const FIELD_PRIORITY_EXT = '_priority';
    public const FIELD_CODE = 'code';
    public const FIELD_REASON = 'reason';
    public const FIELD_DOCUMENTATION = 'documentation';
    public const FIELD_GOAL_ID = 'goalId';
    public const FIELD_GOAL_ID_EXT = '_goalId';
    public const FIELD_SUBJECT_CODEABLE_CONCEPT = 'subjectCodeableConcept';
    public const FIELD_SUBJECT_REFERENCE = 'subjectReference';
    public const FIELD_SUBJECT_CANONICAL = 'subjectCanonical';
    public const FIELD_SUBJECT_CANONICAL_EXT = '_subjectCanonical';
    public const FIELD_TRIGGER = 'trigger';
    public const FIELD_CONDITION = 'condition';
    public const FIELD_INPUT = 'input';
    public const FIELD_OUTPUT = 'output';
    public const FIELD_RELATED_ACTION = 'relatedAction';
    public const FIELD_TIMING_DATE_TIME = 'timingDateTime';
    public const FIELD_TIMING_DATE_TIME_EXT = '_timingDateTime';
    public const FIELD_TIMING_AGE = 'timingAge';
    public const FIELD_TIMING_PERIOD = 'timingPeriod';
    public const FIELD_TIMING_DURATION = 'timingDuration';
    public const FIELD_TIMING_RANGE = 'timingRange';
    public const FIELD_TIMING_TIMING = 'timingTiming';
    public const FIELD_PARTICIPANT = 'participant';
    public const FIELD_TYPE = 'type';
    public const FIELD_GROUPING_BEHAVIOR = 'groupingBehavior';
    public const FIELD_GROUPING_BEHAVIOR_EXT = '_groupingBehavior';
    public const FIELD_SELECTION_BEHAVIOR = 'selectionBehavior';
    public const FIELD_SELECTION_BEHAVIOR_EXT = '_selectionBehavior';
    public const FIELD_REQUIRED_BEHAVIOR = 'requiredBehavior';
    public const FIELD_REQUIRED_BEHAVIOR_EXT = '_requiredBehavior';
    public const FIELD_PRECHECK_BEHAVIOR = 'precheckBehavior';
    public const FIELD_PRECHECK_BEHAVIOR_EXT = '_precheckBehavior';
    public const FIELD_CARDINALITY_BEHAVIOR = 'cardinalityBehavior';
    public const FIELD_CARDINALITY_BEHAVIOR_EXT = '_cardinalityBehavior';
    public const FIELD_DEFINITION_CANONICAL = 'definitionCanonical';
    public const FIELD_DEFINITION_CANONICAL_EXT = '_definitionCanonical';
    public const FIELD_DEFINITION_URI = 'definitionUri';
    public const FIELD_DEFINITION_URI_EXT = '_definitionUri';
    public const FIELD_TRANSFORM = 'transform';
    public const FIELD_TRANSFORM_EXT = '_transform';
    public const FIELD_DYNAMIC_VALUE = 'dynamicValue';
    public const FIELD_ACTION = 'action';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A user-visible prefix for the action.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $prefix;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The textual description of the action displayed to a user. For example, when the
     * action is a test to be performed, the title would be the title of the test such
     * as Assay by HPLC.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $title;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A brief description of the action used to provide a summary to display to the
     * user.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $description;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A text equivalent of the action to be performed. This provides a
     * human-interpretable description of the action when the definition is consumed by
     * a system that might not be capable of interpreting it dynamically.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $textEquivalent;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the action should be addressed with respect to other
     * actions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRequestPriority 
     */
    protected FHIRRequestPriority $priority;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that provides a meaning, grouping, or classification for the action or
     * action group. For example, a section may have a LOINC code for the section of a
     * documentation template. In pharmaceutical quality, an action (Test) such as pH
     * could be classified as a physical property.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $code;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of why this action is necessary or appropriate.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $reason;
    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Didactic or other informational resources associated with the action that can be
     * provided to the CDS recipient. Information resources can include inline text
     * commentary and links to web resources.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRelatedArtifact[] 
     */
    protected array $documentation;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies goals that this action supports. The reference must be to a goal
     * element defined within this plan definition. In pharmaceutical quality, a goal
     * represents acceptance criteria (Goal) for a given action (Test), so the goalId
     * would be the unique id of a defined goal element establishing the acceptance
     * criteria for the action.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId[] 
     */
    protected array $goalId;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code, group definition, or canonical reference that describes the intended
     * subject of the action and its children, if any. Canonical references are allowed
     * to support the definition of protocols for drug and substance quality
     * specifications, and is allowed to reference a MedicinalProductDefinition,
     * SubstanceDefinition, AdministrableProductDefinition, ManufacturedItemDefinition,
     * or PackagedProductDefinition resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $subjectCodeableConcept;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code, group definition, or canonical reference that describes the intended
     * subject of the action and its children, if any. Canonical references are allowed
     * to support the definition of protocols for drug and substance quality
     * specifications, and is allowed to reference a MedicinalProductDefinition,
     * SubstanceDefinition, AdministrableProductDefinition, ManufacturedItemDefinition,
     * or PackagedProductDefinition resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $subjectReference;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A code, group definition, or canonical reference that describes the intended
     * subject of the action and its children, if any. Canonical references are allowed
     * to support the definition of protocols for drug and substance quality
     * specifications, and is allowed to reference a MedicinalProductDefinition,
     * SubstanceDefinition, AdministrableProductDefinition, ManufacturedItemDefinition,
     * or PackagedProductDefinition resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical 
     */
    protected FHIRCanonical $subjectCanonical;
    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of when the action should be triggered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTriggerDefinition[] 
     */
    protected array $trigger;
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * An expression that describes applicability criteria or start/stop conditions for
     * the action.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition[] 
     */
    protected array $condition;
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines input data requirements for the action.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement[] 
     */
    protected array $input;
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the outputs of the action, if any.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement[] 
     */
    protected array $output;
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction[] 
     */
    protected array $relatedAction;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $timingDateTime;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRAge 
     */
    protected FHIRAge $timingAge;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $timingPeriod;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $timingDuration;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $timingRange;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming 
     */
    protected FHIRTiming $timingTiming;
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Indicates who should participate in performing the action described.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant[] 
     */
    protected array $participant;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of action to perform (create, update, remove).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionGroupingBehavior 
     */
    protected FHIRActionGroupingBehavior $groupingBehavior;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionSelectionBehavior 
     */
    protected FHIRActionSelectionBehavior $selectionBehavior;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the required behavior for the action.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionRequiredBehavior 
     */
    protected FHIRActionRequiredBehavior $requiredBehavior;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action should usually be preselected.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionPrecheckBehavior 
     */
    protected FHIRActionPrecheckBehavior $precheckBehavior;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionCardinalityBehavior 
     */
    protected FHIRActionCardinalityBehavior $cardinalityBehavior;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, or a PlanDefinition that describes a series of actions to be taken.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical 
     */
    protected FHIRCanonical $definitionCanonical;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, or a PlanDefinition that describes a series of actions to be taken.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $definitionUri;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a StructureMap resource that defines a transform that can be
     * executed to produce the intent resource using the ActivityDefinition instance as
     * the input.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical 
     */
    protected FHIRCanonical $transform;
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Customizations that should be applied to the statically defined resource. For
     * example, if the dosage of a medication must be computed based on the patient's
     * weight, a customization would be used to specify an expression that calculated
     * the weight, and the path on the resource that would contain the result.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue[] 
     */
    protected array $dynamicValue;
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Sub actions that are contained within the action. The behavior of this action
     * determines the functionality of the sub-actions. For example, a selection
     * behavior of at-most-one indicates that of the sub-actions, at most one may be
     * chosen as part of realizing the action definition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction[] 
     */
    protected array $action;

    /** Default validation map for fields in type PlanDefinition.Action */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRPlanDefinitionAction Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $prefix
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $title
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $description
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $textEquivalent
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRequestPriority $priority
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $reason
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRelatedArtifact[] $documentation
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIdPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId[] $goalId
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $subjectCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $subjectReference
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical $subjectCanonical
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTriggerDefinition[] $trigger
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition[] $condition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement[] $input
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement[] $output
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction[] $relatedAction
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $timingDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRAge $timingAge
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod $timingPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration $timingDuration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange $timingRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming $timingTiming
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant[] $participant
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionGroupingBehavior $groupingBehavior
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionSelectionBehavior $selectionBehavior
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionRequiredBehavior $requiredBehavior
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionPrecheckBehavior $precheckBehavior
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionCardinalityBehavior $cardinalityBehavior
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical $definitionCanonical
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $definitionUri
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical $transform
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue[] $dynamicValue
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction[] $action
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $prefix = null,
                                null|string|FHIRStringPrimitive|FHIRString $title = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|string|FHIRStringPrimitive|FHIRString $textEquivalent = null,
                                null|FHIRRequestPriority $priority = null,
                                null|iterable $code = null,
                                null|iterable $reason = null,
                                null|iterable $documentation = null,
                                null|iterable $goalId = null,
                                null|FHIRCodeableConcept $subjectCodeableConcept = null,
                                null|FHIRReference $subjectReference = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $subjectCanonical = null,
                                null|iterable $trigger = null,
                                null|iterable $condition = null,
                                null|iterable $input = null,
                                null|iterable $output = null,
                                null|iterable $relatedAction = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $timingDateTime = null,
                                null|FHIRAge $timingAge = null,
                                null|FHIRPeriod $timingPeriod = null,
                                null|FHIRDuration $timingDuration = null,
                                null|FHIRRange $timingRange = null,
                                null|FHIRTiming $timingTiming = null,
                                null|iterable $participant = null,
                                null|FHIRCodeableConcept $type = null,
                                null|FHIRActionGroupingBehavior $groupingBehavior = null,
                                null|FHIRActionSelectionBehavior $selectionBehavior = null,
                                null|FHIRActionRequiredBehavior $requiredBehavior = null,
                                null|FHIRActionPrecheckBehavior $precheckBehavior = null,
                                null|FHIRActionCardinalityBehavior $cardinalityBehavior = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $definitionCanonical = null,
                                null|string|FHIRUriPrimitive|FHIRUri $definitionUri = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $transform = null,
                                null|iterable $dynamicValue = null,
                                null|iterable $action = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $prefix) {
            $this->setPrefix($prefix);
        }
        if (null !== $title) {
            $this->setTitle($title);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $textEquivalent) {
            $this->setTextEquivalent($textEquivalent);
        }
        if (null !== $priority) {
            $this->setPriority($priority);
        }
        if (null !== $code) {
            $this->setCode(...$code);
        }
        if (null !== $reason) {
            $this->setReason(...$reason);
        }
        if (null !== $documentation) {
            $this->setDocumentation(...$documentation);
        }
        if (null !== $goalId) {
            $this->setGoalId(...$goalId);
        }
        if (null !== $subjectCodeableConcept) {
            $this->setSubjectCodeableConcept($subjectCodeableConcept);
        }
        if (null !== $subjectReference) {
            $this->setSubjectReference($subjectReference);
        }
        if (null !== $subjectCanonical) {
            $this->setSubjectCanonical($subjectCanonical);
        }
        if (null !== $trigger) {
            $this->setTrigger(...$trigger);
        }
        if (null !== $condition) {
            $this->setCondition(...$condition);
        }
        if (null !== $input) {
            $this->setInput(...$input);
        }
        if (null !== $output) {
            $this->setOutput(...$output);
        }
        if (null !== $relatedAction) {
            $this->setRelatedAction(...$relatedAction);
        }
        if (null !== $timingDateTime) {
            $this->setTimingDateTime($timingDateTime);
        }
        if (null !== $timingAge) {
            $this->setTimingAge($timingAge);
        }
        if (null !== $timingPeriod) {
            $this->setTimingPeriod($timingPeriod);
        }
        if (null !== $timingDuration) {
            $this->setTimingDuration($timingDuration);
        }
        if (null !== $timingRange) {
            $this->setTimingRange($timingRange);
        }
        if (null !== $timingTiming) {
            $this->setTimingTiming($timingTiming);
        }
        if (null !== $participant) {
            $this->setParticipant(...$participant);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $groupingBehavior) {
            $this->setGroupingBehavior($groupingBehavior);
        }
        if (null !== $selectionBehavior) {
            $this->setSelectionBehavior($selectionBehavior);
        }
        if (null !== $requiredBehavior) {
            $this->setRequiredBehavior($requiredBehavior);
        }
        if (null !== $precheckBehavior) {
            $this->setPrecheckBehavior($precheckBehavior);
        }
        if (null !== $cardinalityBehavior) {
            $this->setCardinalityBehavior($cardinalityBehavior);
        }
        if (null !== $definitionCanonical) {
            $this->setDefinitionCanonical($definitionCanonical);
        }
        if (null !== $definitionUri) {
            $this->setDefinitionUri($definitionUri);
        }
        if (null !== $transform) {
            $this->setTransform($transform);
        }
        if (null !== $dynamicValue) {
            $this->setDynamicValue(...$dynamicValue);
        }
        if (null !== $action) {
            $this->setAction(...$action);
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A user-visible prefix for the action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getPrefix(): null|FHIRString
    {
        return $this->prefix ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A user-visible prefix for the action.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $prefix
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPrefix(null|string|FHIRStringPrimitive|FHIRString $prefix,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $prefix) {
            unset($this->prefix);
            return $this;
        }
        if (!($prefix instanceof FHIRString)) {
            $prefix = new FHIRString(value: $prefix);
        }
        if (null !== $valueXMLLocation) {
            $prefix->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $prefix->_getValueXMLLocation()) {
            $prefix->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The textual description of the action displayed to a user. For example, when the
     * action is a test to be performed, the title would be the title of the test such
     * as Assay by HPLC.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getTitle(): null|FHIRString
    {
        return $this->title ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The textual description of the action displayed to a user. For example, when the
     * action is a test to be performed, the title would be the title of the test such
     * as Assay by HPLC.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $title
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A brief description of the action used to provide a summary to display to the
     * user.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A brief description of the action used to provide a summary to display to the
     * user.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $description
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRString)) {
            $description = new FHIRString(value: $description);
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A text equivalent of the action to be performed. This provides a
     * human-interpretable description of the action when the definition is consumed by
     * a system that might not be capable of interpreting it dynamically.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getTextEquivalent(): null|FHIRString
    {
        return $this->textEquivalent ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A text equivalent of the action to be performed. This provides a
     * human-interpretable description of the action when the definition is consumed by
     * a system that might not be capable of interpreting it dynamically.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $textEquivalent
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTextEquivalent(null|string|FHIRStringPrimitive|FHIRString $textEquivalent,
                                      null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $textEquivalent) {
            unset($this->textEquivalent);
            return $this;
        }
        if (!($textEquivalent instanceof FHIRString)) {
            $textEquivalent = new FHIRString(value: $textEquivalent);
        }
        if (null !== $valueXMLLocation) {
            $textEquivalent->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $textEquivalent->_getValueXMLLocation()) {
            $textEquivalent->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->textEquivalent = $textEquivalent;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the action should be addressed with respect to other
     * actions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRequestPriority
     */
    public function getPriority(): null|FHIRRequestPriority
    {
        return $this->priority ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the action should be addressed with respect to other
     * actions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRequestPriority $priority
     * @return static
     */
    public function setPriority(null|FHIRRequestPriority $priority): self
    {
        if (null === $priority) {
            unset($this->priority);
            return $this;
        }
        $this->priority = $priority;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that provides a meaning, grouping, or classification for the action or
     * action group. For example, a section may have a LOINC code for the section of a
     * documentation template. In pharmaceutical quality, an action (Test) such as pH
     * could be classified as a physical property.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCode(): array
    {
        return $this->code ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getCodeIterator(): iterable
    {
        if (!isset($this->code) || [] === $this->code) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->code);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that provides a meaning, grouping, or classification for the action or
     * action group. For example, a section may have a LOINC code for the section of a
     * documentation template. In pharmaceutical quality, an action (Test) such as pH
     * could be classified as a physical property.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function addCode(FHIRCodeableConcept $code): self
    {
        if (!isset($this->code)) {
            $this->code = [];
        }
        $this->code[] = $code;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that provides a meaning, grouping, or classification for the action or
     * action group. For example, a section may have a LOINC code for the section of a
     * documentation template. In pharmaceutical quality, an action (Test) such as pH
     * could be classified as a physical property.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$code
     * @return static
     */
    public function setCode(FHIRCodeableConcept ...$code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of why this action is necessary or appropriate.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason(): array
    {
        return $this->reason ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getReasonIterator(): iterable
    {
        if (!isset($this->reason) || [] === $this->reason) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->reason);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of why this action is necessary or appropriate.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $reason
     * @return static
     */
    public function addReason(FHIRCodeableConcept $reason): self
    {
        if (!isset($this->reason)) {
            $this->reason = [];
        }
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of why this action is necessary or appropriate.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$reason
     * @return static
     */
    public function setReason(FHIRCodeableConcept ...$reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Didactic or other informational resources associated with the action that can be
     * provided to the CDS recipient. Information resources can include inline text
     * commentary and links to web resources.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRelatedArtifact[]
     */
    public function getDocumentation(): array
    {
        return $this->documentation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRelatedArtifact>
     */
    public function getDocumentationIterator(): iterable
    {
        if (!isset($this->documentation) || [] === $this->documentation) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->documentation);
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Didactic or other informational resources associated with the action that can be
     * provided to the CDS recipient. Information resources can include inline text
     * commentary and links to web resources.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRelatedArtifact $documentation
     * @return static
     */
    public function addDocumentation(FHIRRelatedArtifact $documentation): self
    {
        if (!isset($this->documentation)) {
            $this->documentation = [];
        }
        $this->documentation[] = $documentation;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Didactic or other informational resources associated with the action that can be
     * provided to the CDS recipient. Information resources can include inline text
     * commentary and links to web resources.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRelatedArtifact ...$documentation
     * @return static
     */
    public function setDocumentation(FHIRRelatedArtifact ...$documentation): self
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies goals that this action supports. The reference must be to a goal
     * element defined within this plan definition. In pharmaceutical quality, a goal
     * represents acceptance criteria (Goal) for a given action (Test), so the goalId
     * would be the unique id of a defined goal element establishing the acceptance
     * criteria for the action.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId[]
     */
    public function getGoalId(): array
    {
        return $this->goalId ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId>
     */
    public function getGoalIdIterator(): iterable
    {
        if (!isset($this->goalId) || [] === $this->goalId) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->goalId);
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies goals that this action supports. The reference must be to a goal
     * element defined within this plan definition. In pharmaceutical quality, a goal
     * represents acceptance criteria (Goal) for a given action (Test), so the goalId
     * would be the unique id of a defined goal element establishing the acceptance
     * criteria for the action.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId $goalId
     * @return static
     */
    public function addGoalId(string|FHIRIdPrimitive|FHIRId $goalId): self
    {
        if (!($goalId instanceof FHIRId)) {
            $goalId = new FHIRId(value: $goalId);
        }
        if (!isset($this->goalId)) {
            $this->goalId = [];
        }
        $this->goalId[] = $goalId;
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies goals that this action supports. The reference must be to a goal
     * element defined within this plan definition. In pharmaceutical quality, a goal
     * represents acceptance criteria (Goal) for a given action (Test), so the goalId
     * would be the unique id of a defined goal element establishing the acceptance
     * criteria for the action.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId ...$goalId
     * @return static
     */
    public function setGoalId(string|FHIRIdPrimitive|FHIRId ...$goalId): self
    {
        $this->goalId = [];
        foreach($goalId as $v) {
            if ($v instanceof FHIRId) {
                $this->goalId[] = $v;
            } else {
                $this->goalId[] = new FHIRId(value: $v);
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
     * A code, group definition, or canonical reference that describes the intended
     * subject of the action and its children, if any. Canonical references are allowed
     * to support the definition of protocols for drug and substance quality
     * specifications, and is allowed to reference a MedicinalProductDefinition,
     * SubstanceDefinition, AdministrableProductDefinition, ManufacturedItemDefinition,
     * or PackagedProductDefinition resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getSubjectCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->subjectCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code, group definition, or canonical reference that describes the intended
     * subject of the action and its children, if any. Canonical references are allowed
     * to support the definition of protocols for drug and substance quality
     * specifications, and is allowed to reference a MedicinalProductDefinition,
     * SubstanceDefinition, AdministrableProductDefinition, ManufacturedItemDefinition,
     * or PackagedProductDefinition resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $subjectCodeableConcept
     * @return static
     */
    public function setSubjectCodeableConcept(null|FHIRCodeableConcept $subjectCodeableConcept): self
    {
        if (null === $subjectCodeableConcept) {
            unset($this->subjectCodeableConcept);
            return $this;
        }
        $this->subjectCodeableConcept = $subjectCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code, group definition, or canonical reference that describes the intended
     * subject of the action and its children, if any. Canonical references are allowed
     * to support the definition of protocols for drug and substance quality
     * specifications, and is allowed to reference a MedicinalProductDefinition,
     * SubstanceDefinition, AdministrableProductDefinition, ManufacturedItemDefinition,
     * or PackagedProductDefinition resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
     */
    public function getSubjectReference(): null|FHIRReference
    {
        return $this->subjectReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code, group definition, or canonical reference that describes the intended
     * subject of the action and its children, if any. Canonical references are allowed
     * to support the definition of protocols for drug and substance quality
     * specifications, and is allowed to reference a MedicinalProductDefinition,
     * SubstanceDefinition, AdministrableProductDefinition, ManufacturedItemDefinition,
     * or PackagedProductDefinition resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $subjectReference
     * @return static
     */
    public function setSubjectReference(null|FHIRReference $subjectReference): self
    {
        if (null === $subjectReference) {
            unset($this->subjectReference);
            return $this;
        }
        $this->subjectReference = $subjectReference;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A code, group definition, or canonical reference that describes the intended
     * subject of the action and its children, if any. Canonical references are allowed
     * to support the definition of protocols for drug and substance quality
     * specifications, and is allowed to reference a MedicinalProductDefinition,
     * SubstanceDefinition, AdministrableProductDefinition, ManufacturedItemDefinition,
     * or PackagedProductDefinition resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical
     */
    public function getSubjectCanonical(): null|FHIRCanonical
    {
        return $this->subjectCanonical ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A code, group definition, or canonical reference that describes the intended
     * subject of the action and its children, if any. Canonical references are allowed
     * to support the definition of protocols for drug and substance quality
     * specifications, and is allowed to reference a MedicinalProductDefinition,
     * SubstanceDefinition, AdministrableProductDefinition, ManufacturedItemDefinition,
     * or PackagedProductDefinition resource.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical $subjectCanonical
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSubjectCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $subjectCanonical,
                                        null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $subjectCanonical) {
            unset($this->subjectCanonical);
            return $this;
        }
        if (!($subjectCanonical instanceof FHIRCanonical)) {
            $subjectCanonical = new FHIRCanonical(value: $subjectCanonical);
        }
        if (null !== $valueXMLLocation) {
            $subjectCanonical->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $subjectCanonical->_getValueXMLLocation()) {
            $subjectCanonical->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->subjectCanonical = $subjectCanonical;
        return $this;
    }

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of when the action should be triggered.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTriggerDefinition[]
     */
    public function getTrigger(): array
    {
        return $this->trigger ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTriggerDefinition>
     */
    public function getTriggerIterator(): iterable
    {
        if (!isset($this->trigger) || [] === $this->trigger) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->trigger);
    }

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of when the action should be triggered.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTriggerDefinition $trigger
     * @return static
     */
    public function addTrigger(FHIRTriggerDefinition $trigger): self
    {
        if (!isset($this->trigger)) {
            $this->trigger = [];
        }
        $this->trigger[] = $trigger;
        return $this;
    }

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of when the action should be triggered.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTriggerDefinition ...$trigger
     * @return static
     */
    public function setTrigger(FHIRTriggerDefinition ...$trigger): self
    {
        $this->trigger = $trigger;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * An expression that describes applicability criteria or start/stop conditions for
     * the action.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition[]
     */
    public function getCondition(): array
    {
        return $this->condition ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition>
     */
    public function getConditionIterator(): iterable
    {
        if (!isset($this->condition) || [] === $this->condition) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->condition);
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * An expression that describes applicability criteria or start/stop conditions for
     * the action.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition $condition
     * @return static
     */
    public function addCondition(FHIRPlanDefinitionCondition $condition): self
    {
        if (!isset($this->condition)) {
            $this->condition = [];
        }
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * An expression that describes applicability criteria or start/stop conditions for
     * the action.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition ...$condition
     * @return static
     */
    public function setCondition(FHIRPlanDefinitionCondition ...$condition): self
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines input data requirements for the action.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement[]
     */
    public function getInput(): array
    {
        return $this->input ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement>
     */
    public function getInputIterator(): iterable
    {
        if (!isset($this->input) || [] === $this->input) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->input);
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines input data requirements for the action.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement $input
     * @return static
     */
    public function addInput(FHIRDataRequirement $input): self
    {
        if (!isset($this->input)) {
            $this->input = [];
        }
        $this->input[] = $input;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines input data requirements for the action.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement ...$input
     * @return static
     */
    public function setInput(FHIRDataRequirement ...$input): self
    {
        $this->input = $input;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the outputs of the action, if any.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement[]
     */
    public function getOutput(): array
    {
        return $this->output ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement>
     */
    public function getOutputIterator(): iterable
    {
        if (!isset($this->output) || [] === $this->output) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->output);
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the outputs of the action, if any.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement $output
     * @return static
     */
    public function addOutput(FHIRDataRequirement $output): self
    {
        if (!isset($this->output)) {
            $this->output = [];
        }
        $this->output[] = $output;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the outputs of the action, if any.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement ...$output
     * @return static
     */
    public function setOutput(FHIRDataRequirement ...$output): self
    {
        $this->output = $output;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction[]
     */
    public function getRelatedAction(): array
    {
        return $this->relatedAction ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction>
     */
    public function getRelatedActionIterator(): iterable
    {
        if (!isset($this->relatedAction) || [] === $this->relatedAction) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->relatedAction);
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction $relatedAction
     * @return static
     */
    public function addRelatedAction(FHIRPlanDefinitionRelatedAction $relatedAction): self
    {
        if (!isset($this->relatedAction)) {
            $this->relatedAction = [];
        }
        $this->relatedAction[] = $relatedAction;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction ...$relatedAction
     * @return static
     */
    public function setRelatedAction(FHIRPlanDefinitionRelatedAction ...$relatedAction): self
    {
        $this->relatedAction = $relatedAction;
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
     * An optional value describing when the action should be performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime
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
     * An optional value describing when the action should be performed.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $timingDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTimingDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $timingDateTime,
                                      null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $timingDateTime) {
            unset($this->timingDateTime);
            return $this;
        }
        if (!($timingDateTime instanceof FHIRDateTime)) {
            $timingDateTime = new FHIRDateTime(value: $timingDateTime);
        }
        if (null !== $valueXMLLocation) {
            $timingDateTime->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $timingDateTime->_getValueXMLLocation()) {
            $timingDateTime->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->timingDateTime = $timingDateTime;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getTimingAge(): null|FHIRAge
    {
        return $this->timingAge ?? null;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRAge $timingAge
     * @return static
     */
    public function setTimingAge(null|FHIRAge $timingAge): self
    {
        if (null === $timingAge) {
            unset($this->timingAge);
            return $this;
        }
        $this->timingAge = $timingAge;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod
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
     * An optional value describing when the action should be performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod $timingPeriod
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
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getTimingDuration(): null|FHIRDuration
    {
        return $this->timingDuration ?? null;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration $timingDuration
     * @return static
     */
    public function setTimingDuration(null|FHIRDuration $timingDuration): self
    {
        if (null === $timingDuration) {
            unset($this->timingDuration);
            return $this;
        }
        $this->timingDuration = $timingDuration;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange
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
     * An optional value describing when the action should be performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange $timingRange
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
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming
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
     * An optional value describing when the action should be performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming $timingTiming
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
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Indicates who should participate in performing the action described.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant[]
     */
    public function getParticipant(): array
    {
        return $this->participant ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant>
     */
    public function getParticipantIterator(): iterable
    {
        if (!isset($this->participant) || [] === $this->participant) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->participant);
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Indicates who should participate in performing the action described.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant $participant
     * @return static
     */
    public function addParticipant(FHIRPlanDefinitionParticipant $participant): self
    {
        if (!isset($this->participant)) {
            $this->participant = [];
        }
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Indicates who should participate in performing the action described.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant ...$participant
     * @return static
     */
    public function setParticipant(FHIRPlanDefinitionParticipant ...$participant): self
    {
        $this->participant = $participant;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of action to perform (create, update, remove).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of action to perform (create, update, remove).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionGroupingBehavior
     */
    public function getGroupingBehavior(): null|FHIRActionGroupingBehavior
    {
        return $this->groupingBehavior ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionGroupingBehavior $groupingBehavior
     * @return static
     */
    public function setGroupingBehavior(null|FHIRActionGroupingBehavior $groupingBehavior): self
    {
        if (null === $groupingBehavior) {
            unset($this->groupingBehavior);
            return $this;
        }
        $this->groupingBehavior = $groupingBehavior;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionSelectionBehavior
     */
    public function getSelectionBehavior(): null|FHIRActionSelectionBehavior
    {
        return $this->selectionBehavior ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionSelectionBehavior $selectionBehavior
     * @return static
     */
    public function setSelectionBehavior(null|FHIRActionSelectionBehavior $selectionBehavior): self
    {
        if (null === $selectionBehavior) {
            unset($this->selectionBehavior);
            return $this;
        }
        $this->selectionBehavior = $selectionBehavior;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the required behavior for the action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionRequiredBehavior
     */
    public function getRequiredBehavior(): null|FHIRActionRequiredBehavior
    {
        return $this->requiredBehavior ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the required behavior for the action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionRequiredBehavior $requiredBehavior
     * @return static
     */
    public function setRequiredBehavior(null|FHIRActionRequiredBehavior $requiredBehavior): self
    {
        if (null === $requiredBehavior) {
            unset($this->requiredBehavior);
            return $this;
        }
        $this->requiredBehavior = $requiredBehavior;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action should usually be preselected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionPrecheckBehavior
     */
    public function getPrecheckBehavior(): null|FHIRActionPrecheckBehavior
    {
        return $this->precheckBehavior ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action should usually be preselected.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionPrecheckBehavior $precheckBehavior
     * @return static
     */
    public function setPrecheckBehavior(null|FHIRActionPrecheckBehavior $precheckBehavior): self
    {
        if (null === $precheckBehavior) {
            unset($this->precheckBehavior);
            return $this;
        }
        $this->precheckBehavior = $precheckBehavior;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionCardinalityBehavior
     */
    public function getCardinalityBehavior(): null|FHIRActionCardinalityBehavior
    {
        return $this->cardinalityBehavior ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionCardinalityBehavior $cardinalityBehavior
     * @return static
     */
    public function setCardinalityBehavior(null|FHIRActionCardinalityBehavior $cardinalityBehavior): self
    {
        if (null === $cardinalityBehavior) {
            unset($this->cardinalityBehavior);
            return $this;
        }
        $this->cardinalityBehavior = $cardinalityBehavior;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, or a PlanDefinition that describes a series of actions to be taken.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical
     */
    public function getDefinitionCanonical(): null|FHIRCanonical
    {
        return $this->definitionCanonical ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, or a PlanDefinition that describes a series of actions to be taken.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical $definitionCanonical
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefinitionCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $definitionCanonical,
                                           null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $definitionCanonical) {
            unset($this->definitionCanonical);
            return $this;
        }
        if (!($definitionCanonical instanceof FHIRCanonical)) {
            $definitionCanonical = new FHIRCanonical(value: $definitionCanonical);
        }
        if (null !== $valueXMLLocation) {
            $definitionCanonical->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $definitionCanonical->_getValueXMLLocation()) {
            $definitionCanonical->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->definitionCanonical = $definitionCanonical;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, or a PlanDefinition that describes a series of actions to be taken.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri
     */
    public function getDefinitionUri(): null|FHIRUri
    {
        return $this->definitionUri ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, or a PlanDefinition that describes a series of actions to be taken.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $definitionUri
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefinitionUri(null|string|FHIRUriPrimitive|FHIRUri $definitionUri,
                                     null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $definitionUri) {
            unset($this->definitionUri);
            return $this;
        }
        if (!($definitionUri instanceof FHIRUri)) {
            $definitionUri = new FHIRUri(value: $definitionUri);
        }
        if (null !== $valueXMLLocation) {
            $definitionUri->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $definitionUri->_getValueXMLLocation()) {
            $definitionUri->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->definitionUri = $definitionUri;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a StructureMap resource that defines a transform that can be
     * executed to produce the intent resource using the ActivityDefinition instance as
     * the input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical
     */
    public function getTransform(): null|FHIRCanonical
    {
        return $this->transform ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a StructureMap resource that defines a transform that can be
     * executed to produce the intent resource using the ActivityDefinition instance as
     * the input.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical $transform
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTransform(null|string|FHIRCanonicalPrimitive|FHIRCanonical $transform,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $transform) {
            unset($this->transform);
            return $this;
        }
        if (!($transform instanceof FHIRCanonical)) {
            $transform = new FHIRCanonical(value: $transform);
        }
        if (null !== $valueXMLLocation) {
            $transform->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $transform->_getValueXMLLocation()) {
            $transform->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->transform = $transform;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Customizations that should be applied to the statically defined resource. For
     * example, if the dosage of a medication must be computed based on the patient's
     * weight, a customization would be used to specify an expression that calculated
     * the weight, and the path on the resource that would contain the result.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue[]
     */
    public function getDynamicValue(): array
    {
        return $this->dynamicValue ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue>
     */
    public function getDynamicValueIterator(): iterable
    {
        if (!isset($this->dynamicValue) || [] === $this->dynamicValue) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->dynamicValue);
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Customizations that should be applied to the statically defined resource. For
     * example, if the dosage of a medication must be computed based on the patient's
     * weight, a customization would be used to specify an expression that calculated
     * the weight, and the path on the resource that would contain the result.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue $dynamicValue
     * @return static
     */
    public function addDynamicValue(FHIRPlanDefinitionDynamicValue $dynamicValue): self
    {
        if (!isset($this->dynamicValue)) {
            $this->dynamicValue = [];
        }
        $this->dynamicValue[] = $dynamicValue;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Customizations that should be applied to the statically defined resource. For
     * example, if the dosage of a medication must be computed based on the patient's
     * weight, a customization would be used to specify an expression that calculated
     * the weight, and the path on the resource that would contain the result.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue ...$dynamicValue
     * @return static
     */
    public function setDynamicValue(FHIRPlanDefinitionDynamicValue ...$dynamicValue): self
    {
        $this->dynamicValue = $dynamicValue;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Sub actions that are contained within the action. The behavior of this action
     * determines the functionality of the sub-actions. For example, a selection
     * behavior of at-most-one indicates that of the sub-actions, at most one may be
     * chosen as part of realizing the action definition.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction[]
     */
    public function getAction(): array
    {
        return $this->action ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction>
     */
    public function getActionIterator(): iterable
    {
        if (!isset($this->action) || [] === $this->action) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->action);
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Sub actions that are contained within the action. The behavior of this action
     * determines the functionality of the sub-actions. For example, a selection
     * behavior of at-most-one indicates that of the sub-actions, at most one may be
     * chosen as part of realizing the action definition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction $action
     * @return static
     */
    public function addAction(FHIRPlanDefinitionAction $action): self
    {
        if (!isset($this->action)) {
            $this->action = [];
        }
        $this->action[] = $action;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Sub actions that are contained within the action. The behavior of this action
     * determines the functionality of the sub-actions. For example, a selection
     * behavior of at-most-one indicates that of the sub-actions, at most one may be
     * chosen as part of realizing the action definition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction ...$action
     * @return static
     */
    public function setAction(FHIRPlanDefinitionAction ...$action): self
    {
        $this->action = $action;
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
        if (isset($validationRules[self::FIELD_PREFIX])) {
            $v = $this->getPrefix();
            foreach($validationRules[self::FIELD_PREFIX] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PREFIX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PREFIX])) {
                        $errs[self::FIELD_PREFIX] = [];
                    }
                    $errs[self::FIELD_PREFIX][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_TEXT_EQUIVALENT])) {
            $v = $this->getTextEquivalent();
            foreach($validationRules[self::FIELD_TEXT_EQUIVALENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT_EQUIVALENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT_EQUIVALENT])) {
                        $errs[self::FIELD_TEXT_EQUIVALENT] = [];
                    }
                    $errs[self::FIELD_TEXT_EQUIVALENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIORITY])) {
            $v = $this->getPriority();
            foreach($validationRules[self::FIELD_PRIORITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRIORITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIORITY])) {
                        $errs[self::FIELD_PRIORITY] = [];
                    }
                    $errs[self::FIELD_PRIORITY][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_REASON])) {
            $v = $this->getReason();
            foreach($validationRules[self::FIELD_REASON] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON])) {
                        $errs[self::FIELD_REASON] = [];
                    }
                    $errs[self::FIELD_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOCUMENTATION])) {
            $v = $this->getDocumentation();
            foreach($validationRules[self::FIELD_DOCUMENTATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DOCUMENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOCUMENTATION])) {
                        $errs[self::FIELD_DOCUMENTATION] = [];
                    }
                    $errs[self::FIELD_DOCUMENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GOAL_ID])) {
            $v = $this->getGoalId();
            foreach($validationRules[self::FIELD_GOAL_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GOAL_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GOAL_ID])) {
                        $errs[self::FIELD_GOAL_ID] = [];
                    }
                    $errs[self::FIELD_GOAL_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT_CODEABLE_CONCEPT])) {
            $v = $this->getSubjectCodeableConcept();
            foreach($validationRules[self::FIELD_SUBJECT_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUBJECT_CODEABLE_CONCEPT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUBJECT_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT_REFERENCE])) {
                        $errs[self::FIELD_SUBJECT_REFERENCE] = [];
                    }
                    $errs[self::FIELD_SUBJECT_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT_CANONICAL])) {
            $v = $this->getSubjectCanonical();
            foreach($validationRules[self::FIELD_SUBJECT_CANONICAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUBJECT_CANONICAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT_CANONICAL])) {
                        $errs[self::FIELD_SUBJECT_CANONICAL] = [];
                    }
                    $errs[self::FIELD_SUBJECT_CANONICAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TRIGGER])) {
            $v = $this->getTrigger();
            foreach($validationRules[self::FIELD_TRIGGER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TRIGGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TRIGGER])) {
                        $errs[self::FIELD_TRIGGER] = [];
                    }
                    $errs[self::FIELD_TRIGGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITION])) {
            $v = $this->getCondition();
            foreach($validationRules[self::FIELD_CONDITION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONDITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITION])) {
                        $errs[self::FIELD_CONDITION] = [];
                    }
                    $errs[self::FIELD_CONDITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INPUT])) {
            $v = $this->getInput();
            foreach($validationRules[self::FIELD_INPUT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INPUT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INPUT])) {
                        $errs[self::FIELD_INPUT] = [];
                    }
                    $errs[self::FIELD_INPUT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTPUT])) {
            $v = $this->getOutput();
            foreach($validationRules[self::FIELD_OUTPUT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OUTPUT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTPUT])) {
                        $errs[self::FIELD_OUTPUT] = [];
                    }
                    $errs[self::FIELD_OUTPUT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATED_ACTION])) {
            $v = $this->getRelatedAction();
            foreach($validationRules[self::FIELD_RELATED_ACTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RELATED_ACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED_ACTION])) {
                        $errs[self::FIELD_RELATED_ACTION] = [];
                    }
                    $errs[self::FIELD_RELATED_ACTION][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_TIMING_AGE])) {
            $v = $this->getTimingAge();
            foreach($validationRules[self::FIELD_TIMING_AGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TIMING_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING_AGE])) {
                        $errs[self::FIELD_TIMING_AGE] = [];
                    }
                    $errs[self::FIELD_TIMING_AGE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_TIMING_DURATION])) {
            $v = $this->getTimingDuration();
            foreach($validationRules[self::FIELD_TIMING_DURATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TIMING_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING_DURATION])) {
                        $errs[self::FIELD_TIMING_DURATION] = [];
                    }
                    $errs[self::FIELD_TIMING_DURATION][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_GROUPING_BEHAVIOR])) {
            $v = $this->getGroupingBehavior();
            foreach($validationRules[self::FIELD_GROUPING_BEHAVIOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GROUPING_BEHAVIOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUPING_BEHAVIOR])) {
                        $errs[self::FIELD_GROUPING_BEHAVIOR] = [];
                    }
                    $errs[self::FIELD_GROUPING_BEHAVIOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SELECTION_BEHAVIOR])) {
            $v = $this->getSelectionBehavior();
            foreach($validationRules[self::FIELD_SELECTION_BEHAVIOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SELECTION_BEHAVIOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SELECTION_BEHAVIOR])) {
                        $errs[self::FIELD_SELECTION_BEHAVIOR] = [];
                    }
                    $errs[self::FIELD_SELECTION_BEHAVIOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUIRED_BEHAVIOR])) {
            $v = $this->getRequiredBehavior();
            foreach($validationRules[self::FIELD_REQUIRED_BEHAVIOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REQUIRED_BEHAVIOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUIRED_BEHAVIOR])) {
                        $errs[self::FIELD_REQUIRED_BEHAVIOR] = [];
                    }
                    $errs[self::FIELD_REQUIRED_BEHAVIOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRECHECK_BEHAVIOR])) {
            $v = $this->getPrecheckBehavior();
            foreach($validationRules[self::FIELD_PRECHECK_BEHAVIOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRECHECK_BEHAVIOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRECHECK_BEHAVIOR])) {
                        $errs[self::FIELD_PRECHECK_BEHAVIOR] = [];
                    }
                    $errs[self::FIELD_PRECHECK_BEHAVIOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CARDINALITY_BEHAVIOR])) {
            $v = $this->getCardinalityBehavior();
            foreach($validationRules[self::FIELD_CARDINALITY_BEHAVIOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CARDINALITY_BEHAVIOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CARDINALITY_BEHAVIOR])) {
                        $errs[self::FIELD_CARDINALITY_BEHAVIOR] = [];
                    }
                    $errs[self::FIELD_CARDINALITY_BEHAVIOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_CANONICAL])) {
            $v = $this->getDefinitionCanonical();
            foreach($validationRules[self::FIELD_DEFINITION_CANONICAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION_CANONICAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_CANONICAL])) {
                        $errs[self::FIELD_DEFINITION_CANONICAL] = [];
                    }
                    $errs[self::FIELD_DEFINITION_CANONICAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_URI])) {
            $v = $this->getDefinitionUri();
            foreach($validationRules[self::FIELD_DEFINITION_URI] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_URI])) {
                        $errs[self::FIELD_DEFINITION_URI] = [];
                    }
                    $errs[self::FIELD_DEFINITION_URI][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_ACTION])) {
            $v = $this->getAction();
            foreach($validationRules[self::FIELD_ACTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTION])) {
                        $errs[self::FIELD_ACTION] = [];
                    }
                    $errs[self::FIELD_ACTION][$rule] = $err;
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
        return $errs;
    }

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPlanDefinitionAction)) {
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
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PREFIX === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPrefix(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TITLE === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setTitle(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DESCRIPTION === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDescription(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT_EQUIVALENT === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setTextEquivalent(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRIORITY === $childName) {
                $v = new FHIRRequestPriority(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPriority(FHIRRequestPriority::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CODE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addCode(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REASON === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addReason(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DOCUMENTATION === $childName) {
                $v = new FHIRRelatedArtifact();
                $type->addDocumentation(FHIRRelatedArtifact::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_GOAL_ID === $childName) {
                $v = new FHIRId(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addGoalId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUBJECT_CODEABLE_CONCEPT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setSubjectCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUBJECT_REFERENCE === $childName) {
                $v = new FHIRReference();
                $type->setSubjectReference(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUBJECT_CANONICAL === $childName) {
                $v = new FHIRCanonical(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSubjectCanonical(FHIRCanonical::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TRIGGER === $childName) {
                $v = new FHIRTriggerDefinition();
                $type->addTrigger(FHIRTriggerDefinition::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONDITION === $childName) {
                $v = new FHIRPlanDefinitionCondition();
                $type->addCondition(FHIRPlanDefinitionCondition::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INPUT === $childName) {
                $v = new FHIRDataRequirement();
                $type->addInput(FHIRDataRequirement::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OUTPUT === $childName) {
                $v = new FHIRDataRequirement();
                $type->addOutput(FHIRDataRequirement::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RELATED_ACTION === $childName) {
                $v = new FHIRPlanDefinitionRelatedAction();
                $type->addRelatedAction(FHIRPlanDefinitionRelatedAction::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TIMING_DATE_TIME === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setTimingDateTime(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TIMING_AGE === $childName) {
                $v = new FHIRAge();
                $type->setTimingAge(FHIRAge::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TIMING_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setTimingPeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TIMING_DURATION === $childName) {
                $v = new FHIRDuration();
                $type->setTimingDuration(FHIRDuration::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TIMING_RANGE === $childName) {
                $v = new FHIRRange();
                $type->setTimingRange(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TIMING_TIMING === $childName) {
                $v = new FHIRTiming();
                $type->setTimingTiming(FHIRTiming::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PARTICIPANT === $childName) {
                $v = new FHIRPlanDefinitionParticipant();
                $type->addParticipant(FHIRPlanDefinitionParticipant::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_GROUPING_BEHAVIOR === $childName) {
                $v = new FHIRActionGroupingBehavior(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setGroupingBehavior(FHIRActionGroupingBehavior::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SELECTION_BEHAVIOR === $childName) {
                $v = new FHIRActionSelectionBehavior(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSelectionBehavior(FHIRActionSelectionBehavior::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REQUIRED_BEHAVIOR === $childName) {
                $v = new FHIRActionRequiredBehavior(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setRequiredBehavior(FHIRActionRequiredBehavior::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRECHECK_BEHAVIOR === $childName) {
                $v = new FHIRActionPrecheckBehavior(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPrecheckBehavior(FHIRActionPrecheckBehavior::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CARDINALITY_BEHAVIOR === $childName) {
                $v = new FHIRActionCardinalityBehavior(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setCardinalityBehavior(FHIRActionCardinalityBehavior::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFINITION_CANONICAL === $childName) {
                $v = new FHIRCanonical(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDefinitionCanonical(FHIRCanonical::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFINITION_URI === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDefinitionUri(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TRANSFORM === $childName) {
                $v = new FHIRCanonical(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setTransform(FHIRCanonical::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DYNAMIC_VALUE === $childName) {
                $v = new FHIRPlanDefinitionDynamicValue();
                $type->addDynamicValue(FHIRPlanDefinitionDynamicValue::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ACTION === $childName) {
                $v = new FHIRPlanDefinitionAction();
                $type->addAction(FHIRPlanDefinitionAction::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PREFIX])) {
            $pt = $type->getPrefix();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PREFIX]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPrefix(new FHIRString(
                    value: (string)$attributes[self::FIELD_PREFIX],
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
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DESCRIPTION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription(new FHIRString(
                    value: (string)$attributes[self::FIELD_DESCRIPTION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TEXT_EQUIVALENT])) {
            $pt = $type->getTextEquivalent();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_TEXT_EQUIVALENT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setTextEquivalent(new FHIRString(
                    value: (string)$attributes[self::FIELD_TEXT_EQUIVALENT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_GOAL_ID])) {
            $v = new FHIRId(value: (string)$attributes[self::FIELD_GOAL_ID],
                                                       valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE);
            $type->addGoalId($v);
        }
        if (isset($attributes[self::FIELD_SUBJECT_CANONICAL])) {
            $pt = $type->getSubjectCanonical();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SUBJECT_CANONICAL]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSubjectCanonical(new FHIRCanonical(
                    value: (string)$attributes[self::FIELD_SUBJECT_CANONICAL],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TIMING_DATE_TIME])) {
            $pt = $type->getTimingDateTime();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_TIMING_DATE_TIME]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setTimingDateTime(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_TIMING_DATE_TIME],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFINITION_CANONICAL])) {
            $pt = $type->getDefinitionCanonical();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DEFINITION_CANONICAL]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefinitionCanonical(new FHIRCanonical(
                    value: (string)$attributes[self::FIELD_DEFINITION_CANONICAL],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFINITION_URI])) {
            $pt = $type->getDefinitionUri();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DEFINITION_URI]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefinitionUri(new FHIRUri(
                    value: (string)$attributes[self::FIELD_DEFINITION_URI],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TRANSFORM])) {
            $pt = $type->getTransform();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_TRANSFORM]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setTransform(new FHIRCanonical(
                    value: (string)$attributes[self::FIELD_TRANSFORM],
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
            $xw->openRootNode('PlanDefinitionAction', $this->_getSourceXMLNS());
        }
        if (isset($this->prefix) && $this->prefix->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PREFIX, $this->prefix->getValue()?->_getFormattedValue());
        }
        if (isset($this->title) && $this->title->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TITLE, $this->title->getValue()?->_getFormattedValue());
        }
        if (isset($this->description) && $this->description->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->getValue()?->_getFormattedValue());
        }
        if (isset($this->textEquivalent) && $this->textEquivalent->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TEXT_EQUIVALENT, $this->textEquivalent->getValue()?->_getFormattedValue());
        }
        if (isset($this->goalId)) {
           foreach($this->goalId as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_GOAL_ID, $v->getValue()?->_getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->subjectCanonical) && $this->subjectCanonical->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SUBJECT_CANONICAL, $this->subjectCanonical->getValue()?->_getFormattedValue());
        }
        if (isset($this->timingDateTime) && $this->timingDateTime->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TIMING_DATE_TIME, $this->timingDateTime->getValue()?->_getFormattedValue());
        }
        if (isset($this->definitionCanonical) && $this->definitionCanonical->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFINITION_CANONICAL, $this->definitionCanonical->getValue()?->_getFormattedValue());
        }
        if (isset($this->definitionUri) && $this->definitionUri->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFINITION_URI, $this->definitionUri->getValue()?->_getFormattedValue());
        }
        if (isset($this->transform) && $this->transform->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TRANSFORM, $this->transform->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->prefix) && $this->prefix->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PREFIX);
            $this->prefix->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->title) && $this->title->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TITLE);
            $this->title->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->description) && $this->description->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->textEquivalent) && $this->textEquivalent->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TEXT_EQUIVALENT);
            $this->textEquivalent->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->priority)) {
            $xw->startElement(self::FIELD_PRIORITY);
            $this->priority->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->code)) {
            foreach ($this->code as $v) {
                $xw->startElement(self::FIELD_CODE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->reason)) {
            foreach ($this->reason as $v) {
                $xw->startElement(self::FIELD_REASON);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->documentation)) {
            foreach ($this->documentation as $v) {
                $xw->startElement(self::FIELD_DOCUMENTATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->goalId)) {
            foreach($this->goalId as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_GOAL_ID);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->subjectCodeableConcept)) {
            $xw->startElement(self::FIELD_SUBJECT_CODEABLE_CONCEPT);
            $this->subjectCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subjectReference)) {
            $xw->startElement(self::FIELD_SUBJECT_REFERENCE);
            $this->subjectReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subjectCanonical) && $this->subjectCanonical->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SUBJECT_CANONICAL);
            $this->subjectCanonical->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->trigger)) {
            foreach ($this->trigger as $v) {
                $xw->startElement(self::FIELD_TRIGGER);
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
        if (isset($this->input)) {
            foreach ($this->input as $v) {
                $xw->startElement(self::FIELD_INPUT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->output)) {
            foreach ($this->output as $v) {
                $xw->startElement(self::FIELD_OUTPUT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->relatedAction)) {
            foreach ($this->relatedAction as $v) {
                $xw->startElement(self::FIELD_RELATED_ACTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->timingDateTime) && $this->timingDateTime->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TIMING_DATE_TIME);
            $this->timingDateTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->timingAge)) {
            $xw->startElement(self::FIELD_TIMING_AGE);
            $this->timingAge->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->timingPeriod)) {
            $xw->startElement(self::FIELD_TIMING_PERIOD);
            $this->timingPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->timingDuration)) {
            $xw->startElement(self::FIELD_TIMING_DURATION);
            $this->timingDuration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->timingRange)) {
            $xw->startElement(self::FIELD_TIMING_RANGE);
            $this->timingRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->timingTiming)) {
            $xw->startElement(self::FIELD_TIMING_TIMING);
            $this->timingTiming->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->participant)) {
            foreach ($this->participant as $v) {
                $xw->startElement(self::FIELD_PARTICIPANT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->groupingBehavior)) {
            $xw->startElement(self::FIELD_GROUPING_BEHAVIOR);
            $this->groupingBehavior->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->selectionBehavior)) {
            $xw->startElement(self::FIELD_SELECTION_BEHAVIOR);
            $this->selectionBehavior->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->requiredBehavior)) {
            $xw->startElement(self::FIELD_REQUIRED_BEHAVIOR);
            $this->requiredBehavior->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->precheckBehavior)) {
            $xw->startElement(self::FIELD_PRECHECK_BEHAVIOR);
            $this->precheckBehavior->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->cardinalityBehavior)) {
            $xw->startElement(self::FIELD_CARDINALITY_BEHAVIOR);
            $this->cardinalityBehavior->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->definitionCanonical) && $this->definitionCanonical->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFINITION_CANONICAL);
            $this->definitionCanonical->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->definitionUri) && $this->definitionUri->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFINITION_URI);
            $this->definitionUri->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->transform) && $this->transform->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
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
        if (isset($this->action)) {
            foreach ($this->action as $v) {
                $xw->startElement(self::FIELD_ACTION);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPlanDefinitionAction)) {
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
        if (isset($json[self::FIELD_PREFIX]) || isset($json[self::FIELD_PREFIX_EXT]) || array_key_exists(self::FIELD_PREFIX, $json) || array_key_exists(self::FIELD_PREFIX_EXT, $json)) {
            $value = $json[self::FIELD_PREFIX] ?? null;
            $ext = (isset($json[self::FIELD_PREFIX_EXT]) && is_array($json[self::FIELD_PREFIX_EXT])) ? $json[self::FIELD_PREFIX_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setPrefix($value);
                } else if (is_array($value)) {
                    $type->setPrefix(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setPrefix(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPrefix(new FHIRString($ext));
            } else {
                $type->setPrefix(new FHIRString(null));
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
        if (isset($json[self::FIELD_DESCRIPTION]) || isset($json[self::FIELD_DESCRIPTION_EXT]) || array_key_exists(self::FIELD_DESCRIPTION, $json) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($json[self::FIELD_DESCRIPTION_EXT]) && is_array($json[self::FIELD_DESCRIPTION_EXT])) ? $json[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDescription($value);
                } else if (is_array($value)) {
                    $type->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDescription(new FHIRString($ext));
            } else {
                $type->setDescription(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_TEXT_EQUIVALENT]) || isset($json[self::FIELD_TEXT_EQUIVALENT_EXT]) || array_key_exists(self::FIELD_TEXT_EQUIVALENT, $json) || array_key_exists(self::FIELD_TEXT_EQUIVALENT_EXT, $json)) {
            $value = $json[self::FIELD_TEXT_EQUIVALENT] ?? null;
            $ext = (isset($json[self::FIELD_TEXT_EQUIVALENT_EXT]) && is_array($json[self::FIELD_TEXT_EQUIVALENT_EXT])) ? $json[self::FIELD_TEXT_EQUIVALENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setTextEquivalent($value);
                } else if (is_array($value)) {
                    $type->setTextEquivalent(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setTextEquivalent(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setTextEquivalent(new FHIRString($ext));
            } else {
                $type->setTextEquivalent(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_PRIORITY]) || isset($json[self::FIELD_PRIORITY_EXT]) || array_key_exists(self::FIELD_PRIORITY, $json) || array_key_exists(self::FIELD_PRIORITY_EXT, $json)) {
            $value = $json[self::FIELD_PRIORITY] ?? null;
            $ext = (isset($json[self::FIELD_PRIORITY_EXT]) && is_array($json[self::FIELD_PRIORITY_EXT])) ? $json[self::FIELD_PRIORITY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRRequestPriority) {
                    $type->setPriority($value);
                } else if (is_array($value)) {
                    $type->setPriority(new FHIRRequestPriority(array_merge($ext, $value)));
                } else {
                    $type->setPriority(new FHIRRequestPriority([FHIRRequestPriority::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPriority(new FHIRRequestPriority($ext));
            } else {
                $type->setPriority(new FHIRRequestPriority(null));
            }
        }
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            if (is_array($json[self::FIELD_CODE])) {
                foreach($json[self::FIELD_CODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addCode($v);
                    } else {
                        $type->addCode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $type->addCode($json[self::FIELD_CODE]);
            } else {
                $type->addCode(new FHIRCodeableConcept($json[self::FIELD_CODE]));
            }
        }
        if (isset($json[self::FIELD_REASON]) || array_key_exists(self::FIELD_REASON, $json)) {
            if (is_array($json[self::FIELD_REASON])) {
                foreach($json[self::FIELD_REASON] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addReason($v);
                    } else {
                        $type->addReason(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_REASON] instanceof FHIRCodeableConcept) {
                $type->addReason($json[self::FIELD_REASON]);
            } else {
                $type->addReason(new FHIRCodeableConcept($json[self::FIELD_REASON]));
            }
        }
        if (isset($json[self::FIELD_DOCUMENTATION]) || array_key_exists(self::FIELD_DOCUMENTATION, $json)) {
            if (is_array($json[self::FIELD_DOCUMENTATION])) {
                foreach($json[self::FIELD_DOCUMENTATION] as $v) {
                    if ($v instanceof FHIRRelatedArtifact) {
                        $type->addDocumentation($v);
                    } else {
                        $type->addDocumentation(new FHIRRelatedArtifact($v));
                    }
                }
            } elseif ($json[self::FIELD_DOCUMENTATION] instanceof FHIRRelatedArtifact) {
                $type->addDocumentation($json[self::FIELD_DOCUMENTATION]);
            } else {
                $type->addDocumentation(new FHIRRelatedArtifact($json[self::FIELD_DOCUMENTATION]));
            }
        }
        if (isset($json[self::FIELD_GOAL_ID]) || isset($json[self::FIELD_GOAL_ID_EXT]) || array_key_exists(self::FIELD_GOAL_ID, $json) || array_key_exists(self::FIELD_GOAL_ID_EXT, $json)) {
            $value = $json[self::FIELD_GOAL_ID] ?? null;
            $ext = (isset($json[self::FIELD_GOAL_ID_EXT]) && is_array($json[self::FIELD_GOAL_ID_EXT])) ? $json[self::FIELD_GOAL_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $type->addGoalId($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRId) {
                            $type->addGoalId($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addGoalId(new FHIRId(array_merge($v, $iext)));
                            } else {
                                $type->addGoalId(new FHIRId([FHIRId::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addGoalId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $type->addGoalId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addGoalId(new FHIRId($iext));
                }
            } else {
                $type->addGoalId(new FHIRId(null));
            }
        }
        if (isset($json[self::FIELD_SUBJECT_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_SUBJECT_CODEABLE_CONCEPT, $json)) {
            if ($json[self::FIELD_SUBJECT_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $type->setSubjectCodeableConcept($json[self::FIELD_SUBJECT_CODEABLE_CONCEPT]);
            } else {
                $type->setSubjectCodeableConcept(new FHIRCodeableConcept($json[self::FIELD_SUBJECT_CODEABLE_CONCEPT]));
            }
        }
        if (isset($json[self::FIELD_SUBJECT_REFERENCE]) || array_key_exists(self::FIELD_SUBJECT_REFERENCE, $json)) {
            if ($json[self::FIELD_SUBJECT_REFERENCE] instanceof FHIRReference) {
                $type->setSubjectReference($json[self::FIELD_SUBJECT_REFERENCE]);
            } else {
                $type->setSubjectReference(new FHIRReference($json[self::FIELD_SUBJECT_REFERENCE]));
            }
        }
        if (isset($json[self::FIELD_SUBJECT_CANONICAL]) || isset($json[self::FIELD_SUBJECT_CANONICAL_EXT]) || array_key_exists(self::FIELD_SUBJECT_CANONICAL, $json) || array_key_exists(self::FIELD_SUBJECT_CANONICAL_EXT, $json)) {
            $value = $json[self::FIELD_SUBJECT_CANONICAL] ?? null;
            $ext = (isset($json[self::FIELD_SUBJECT_CANONICAL_EXT]) && is_array($json[self::FIELD_SUBJECT_CANONICAL_EXT])) ? $json[self::FIELD_SUBJECT_CANONICAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $type->setSubjectCanonical($value);
                } else if (is_array($value)) {
                    $type->setSubjectCanonical(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $type->setSubjectCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSubjectCanonical(new FHIRCanonical($ext));
            } else {
                $type->setSubjectCanonical(new FHIRCanonical(null));
            }
        }
        if (isset($json[self::FIELD_TRIGGER]) || array_key_exists(self::FIELD_TRIGGER, $json)) {
            if (is_array($json[self::FIELD_TRIGGER])) {
                foreach($json[self::FIELD_TRIGGER] as $v) {
                    if ($v instanceof FHIRTriggerDefinition) {
                        $type->addTrigger($v);
                    } else {
                        $type->addTrigger(new FHIRTriggerDefinition($v));
                    }
                }
            } elseif ($json[self::FIELD_TRIGGER] instanceof FHIRTriggerDefinition) {
                $type->addTrigger($json[self::FIELD_TRIGGER]);
            } else {
                $type->addTrigger(new FHIRTriggerDefinition($json[self::FIELD_TRIGGER]));
            }
        }
        if (isset($json[self::FIELD_CONDITION]) || array_key_exists(self::FIELD_CONDITION, $json)) {
            if (is_array($json[self::FIELD_CONDITION])) {
                foreach($json[self::FIELD_CONDITION] as $v) {
                    if ($v instanceof FHIRPlanDefinitionCondition) {
                        $type->addCondition($v);
                    } else {
                        $type->addCondition(new FHIRPlanDefinitionCondition($v));
                    }
                }
            } elseif ($json[self::FIELD_CONDITION] instanceof FHIRPlanDefinitionCondition) {
                $type->addCondition($json[self::FIELD_CONDITION]);
            } else {
                $type->addCondition(new FHIRPlanDefinitionCondition($json[self::FIELD_CONDITION]));
            }
        }
        if (isset($json[self::FIELD_INPUT]) || array_key_exists(self::FIELD_INPUT, $json)) {
            if (is_array($json[self::FIELD_INPUT])) {
                foreach($json[self::FIELD_INPUT] as $v) {
                    if ($v instanceof FHIRDataRequirement) {
                        $type->addInput($v);
                    } else {
                        $type->addInput(new FHIRDataRequirement($v));
                    }
                }
            } elseif ($json[self::FIELD_INPUT] instanceof FHIRDataRequirement) {
                $type->addInput($json[self::FIELD_INPUT]);
            } else {
                $type->addInput(new FHIRDataRequirement($json[self::FIELD_INPUT]));
            }
        }
        if (isset($json[self::FIELD_OUTPUT]) || array_key_exists(self::FIELD_OUTPUT, $json)) {
            if (is_array($json[self::FIELD_OUTPUT])) {
                foreach($json[self::FIELD_OUTPUT] as $v) {
                    if ($v instanceof FHIRDataRequirement) {
                        $type->addOutput($v);
                    } else {
                        $type->addOutput(new FHIRDataRequirement($v));
                    }
                }
            } elseif ($json[self::FIELD_OUTPUT] instanceof FHIRDataRequirement) {
                $type->addOutput($json[self::FIELD_OUTPUT]);
            } else {
                $type->addOutput(new FHIRDataRequirement($json[self::FIELD_OUTPUT]));
            }
        }
        if (isset($json[self::FIELD_RELATED_ACTION]) || array_key_exists(self::FIELD_RELATED_ACTION, $json)) {
            if (is_array($json[self::FIELD_RELATED_ACTION])) {
                foreach($json[self::FIELD_RELATED_ACTION] as $v) {
                    if ($v instanceof FHIRPlanDefinitionRelatedAction) {
                        $type->addRelatedAction($v);
                    } else {
                        $type->addRelatedAction(new FHIRPlanDefinitionRelatedAction($v));
                    }
                }
            } elseif ($json[self::FIELD_RELATED_ACTION] instanceof FHIRPlanDefinitionRelatedAction) {
                $type->addRelatedAction($json[self::FIELD_RELATED_ACTION]);
            } else {
                $type->addRelatedAction(new FHIRPlanDefinitionRelatedAction($json[self::FIELD_RELATED_ACTION]));
            }
        }
        if (isset($json[self::FIELD_TIMING_DATE_TIME]) || isset($json[self::FIELD_TIMING_DATE_TIME_EXT]) || array_key_exists(self::FIELD_TIMING_DATE_TIME, $json) || array_key_exists(self::FIELD_TIMING_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_TIMING_DATE_TIME] ?? null;
            $ext = (isset($json[self::FIELD_TIMING_DATE_TIME_EXT]) && is_array($json[self::FIELD_TIMING_DATE_TIME_EXT])) ? $json[self::FIELD_TIMING_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setTimingDateTime($value);
                } else if (is_array($value)) {
                    $type->setTimingDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setTimingDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setTimingDateTime(new FHIRDateTime($ext));
            } else {
                $type->setTimingDateTime(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_TIMING_AGE]) || array_key_exists(self::FIELD_TIMING_AGE, $json)) {
            if ($json[self::FIELD_TIMING_AGE] instanceof FHIRAge) {
                $type->setTimingAge($json[self::FIELD_TIMING_AGE]);
            } else {
                $type->setTimingAge(new FHIRAge($json[self::FIELD_TIMING_AGE]));
            }
        }
        if (isset($json[self::FIELD_TIMING_PERIOD]) || array_key_exists(self::FIELD_TIMING_PERIOD, $json)) {
            if ($json[self::FIELD_TIMING_PERIOD] instanceof FHIRPeriod) {
                $type->setTimingPeriod($json[self::FIELD_TIMING_PERIOD]);
            } else {
                $type->setTimingPeriod(new FHIRPeriod($json[self::FIELD_TIMING_PERIOD]));
            }
        }
        if (isset($json[self::FIELD_TIMING_DURATION]) || array_key_exists(self::FIELD_TIMING_DURATION, $json)) {
            if ($json[self::FIELD_TIMING_DURATION] instanceof FHIRDuration) {
                $type->setTimingDuration($json[self::FIELD_TIMING_DURATION]);
            } else {
                $type->setTimingDuration(new FHIRDuration($json[self::FIELD_TIMING_DURATION]));
            }
        }
        if (isset($json[self::FIELD_TIMING_RANGE]) || array_key_exists(self::FIELD_TIMING_RANGE, $json)) {
            if ($json[self::FIELD_TIMING_RANGE] instanceof FHIRRange) {
                $type->setTimingRange($json[self::FIELD_TIMING_RANGE]);
            } else {
                $type->setTimingRange(new FHIRRange($json[self::FIELD_TIMING_RANGE]));
            }
        }
        if (isset($json[self::FIELD_TIMING_TIMING]) || array_key_exists(self::FIELD_TIMING_TIMING, $json)) {
            if ($json[self::FIELD_TIMING_TIMING] instanceof FHIRTiming) {
                $type->setTimingTiming($json[self::FIELD_TIMING_TIMING]);
            } else {
                $type->setTimingTiming(new FHIRTiming($json[self::FIELD_TIMING_TIMING]));
            }
        }
        if (isset($json[self::FIELD_PARTICIPANT]) || array_key_exists(self::FIELD_PARTICIPANT, $json)) {
            if (is_array($json[self::FIELD_PARTICIPANT])) {
                foreach($json[self::FIELD_PARTICIPANT] as $v) {
                    if ($v instanceof FHIRPlanDefinitionParticipant) {
                        $type->addParticipant($v);
                    } else {
                        $type->addParticipant(new FHIRPlanDefinitionParticipant($v));
                    }
                }
            } elseif ($json[self::FIELD_PARTICIPANT] instanceof FHIRPlanDefinitionParticipant) {
                $type->addParticipant($json[self::FIELD_PARTICIPANT]);
            } else {
                $type->addParticipant(new FHIRPlanDefinitionParticipant($json[self::FIELD_PARTICIPANT]));
            }
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            if ($json[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $type->setType($json[self::FIELD_TYPE]);
            } else {
                $type->setType(new FHIRCodeableConcept($json[self::FIELD_TYPE]));
            }
        }
        if (isset($json[self::FIELD_GROUPING_BEHAVIOR]) || isset($json[self::FIELD_GROUPING_BEHAVIOR_EXT]) || array_key_exists(self::FIELD_GROUPING_BEHAVIOR, $json) || array_key_exists(self::FIELD_GROUPING_BEHAVIOR_EXT, $json)) {
            $value = $json[self::FIELD_GROUPING_BEHAVIOR] ?? null;
            $ext = (isset($json[self::FIELD_GROUPING_BEHAVIOR_EXT]) && is_array($json[self::FIELD_GROUPING_BEHAVIOR_EXT])) ? $json[self::FIELD_GROUPING_BEHAVIOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRActionGroupingBehavior) {
                    $type->setGroupingBehavior($value);
                } else if (is_array($value)) {
                    $type->setGroupingBehavior(new FHIRActionGroupingBehavior(array_merge($ext, $value)));
                } else {
                    $type->setGroupingBehavior(new FHIRActionGroupingBehavior([FHIRActionGroupingBehavior::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setGroupingBehavior(new FHIRActionGroupingBehavior($ext));
            } else {
                $type->setGroupingBehavior(new FHIRActionGroupingBehavior(null));
            }
        }
        if (isset($json[self::FIELD_SELECTION_BEHAVIOR]) || isset($json[self::FIELD_SELECTION_BEHAVIOR_EXT]) || array_key_exists(self::FIELD_SELECTION_BEHAVIOR, $json) || array_key_exists(self::FIELD_SELECTION_BEHAVIOR_EXT, $json)) {
            $value = $json[self::FIELD_SELECTION_BEHAVIOR] ?? null;
            $ext = (isset($json[self::FIELD_SELECTION_BEHAVIOR_EXT]) && is_array($json[self::FIELD_SELECTION_BEHAVIOR_EXT])) ? $json[self::FIELD_SELECTION_BEHAVIOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRActionSelectionBehavior) {
                    $type->setSelectionBehavior($value);
                } else if (is_array($value)) {
                    $type->setSelectionBehavior(new FHIRActionSelectionBehavior(array_merge($ext, $value)));
                } else {
                    $type->setSelectionBehavior(new FHIRActionSelectionBehavior([FHIRActionSelectionBehavior::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSelectionBehavior(new FHIRActionSelectionBehavior($ext));
            } else {
                $type->setSelectionBehavior(new FHIRActionSelectionBehavior(null));
            }
        }
        if (isset($json[self::FIELD_REQUIRED_BEHAVIOR]) || isset($json[self::FIELD_REQUIRED_BEHAVIOR_EXT]) || array_key_exists(self::FIELD_REQUIRED_BEHAVIOR, $json) || array_key_exists(self::FIELD_REQUIRED_BEHAVIOR_EXT, $json)) {
            $value = $json[self::FIELD_REQUIRED_BEHAVIOR] ?? null;
            $ext = (isset($json[self::FIELD_REQUIRED_BEHAVIOR_EXT]) && is_array($json[self::FIELD_REQUIRED_BEHAVIOR_EXT])) ? $json[self::FIELD_REQUIRED_BEHAVIOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRActionRequiredBehavior) {
                    $type->setRequiredBehavior($value);
                } else if (is_array($value)) {
                    $type->setRequiredBehavior(new FHIRActionRequiredBehavior(array_merge($ext, $value)));
                } else {
                    $type->setRequiredBehavior(new FHIRActionRequiredBehavior([FHIRActionRequiredBehavior::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setRequiredBehavior(new FHIRActionRequiredBehavior($ext));
            } else {
                $type->setRequiredBehavior(new FHIRActionRequiredBehavior(null));
            }
        }
        if (isset($json[self::FIELD_PRECHECK_BEHAVIOR]) || isset($json[self::FIELD_PRECHECK_BEHAVIOR_EXT]) || array_key_exists(self::FIELD_PRECHECK_BEHAVIOR, $json) || array_key_exists(self::FIELD_PRECHECK_BEHAVIOR_EXT, $json)) {
            $value = $json[self::FIELD_PRECHECK_BEHAVIOR] ?? null;
            $ext = (isset($json[self::FIELD_PRECHECK_BEHAVIOR_EXT]) && is_array($json[self::FIELD_PRECHECK_BEHAVIOR_EXT])) ? $json[self::FIELD_PRECHECK_BEHAVIOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRActionPrecheckBehavior) {
                    $type->setPrecheckBehavior($value);
                } else if (is_array($value)) {
                    $type->setPrecheckBehavior(new FHIRActionPrecheckBehavior(array_merge($ext, $value)));
                } else {
                    $type->setPrecheckBehavior(new FHIRActionPrecheckBehavior([FHIRActionPrecheckBehavior::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPrecheckBehavior(new FHIRActionPrecheckBehavior($ext));
            } else {
                $type->setPrecheckBehavior(new FHIRActionPrecheckBehavior(null));
            }
        }
        if (isset($json[self::FIELD_CARDINALITY_BEHAVIOR]) || isset($json[self::FIELD_CARDINALITY_BEHAVIOR_EXT]) || array_key_exists(self::FIELD_CARDINALITY_BEHAVIOR, $json) || array_key_exists(self::FIELD_CARDINALITY_BEHAVIOR_EXT, $json)) {
            $value = $json[self::FIELD_CARDINALITY_BEHAVIOR] ?? null;
            $ext = (isset($json[self::FIELD_CARDINALITY_BEHAVIOR_EXT]) && is_array($json[self::FIELD_CARDINALITY_BEHAVIOR_EXT])) ? $json[self::FIELD_CARDINALITY_BEHAVIOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRActionCardinalityBehavior) {
                    $type->setCardinalityBehavior($value);
                } else if (is_array($value)) {
                    $type->setCardinalityBehavior(new FHIRActionCardinalityBehavior(array_merge($ext, $value)));
                } else {
                    $type->setCardinalityBehavior(new FHIRActionCardinalityBehavior([FHIRActionCardinalityBehavior::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCardinalityBehavior(new FHIRActionCardinalityBehavior($ext));
            } else {
                $type->setCardinalityBehavior(new FHIRActionCardinalityBehavior(null));
            }
        }
        if (isset($json[self::FIELD_DEFINITION_CANONICAL]) || isset($json[self::FIELD_DEFINITION_CANONICAL_EXT]) || array_key_exists(self::FIELD_DEFINITION_CANONICAL, $json) || array_key_exists(self::FIELD_DEFINITION_CANONICAL_EXT, $json)) {
            $value = $json[self::FIELD_DEFINITION_CANONICAL] ?? null;
            $ext = (isset($json[self::FIELD_DEFINITION_CANONICAL_EXT]) && is_array($json[self::FIELD_DEFINITION_CANONICAL_EXT])) ? $json[self::FIELD_DEFINITION_CANONICAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $type->setDefinitionCanonical($value);
                } else if (is_array($value)) {
                    $type->setDefinitionCanonical(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $type->setDefinitionCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefinitionCanonical(new FHIRCanonical($ext));
            } else {
                $type->setDefinitionCanonical(new FHIRCanonical(null));
            }
        }
        if (isset($json[self::FIELD_DEFINITION_URI]) || isset($json[self::FIELD_DEFINITION_URI_EXT]) || array_key_exists(self::FIELD_DEFINITION_URI, $json) || array_key_exists(self::FIELD_DEFINITION_URI_EXT, $json)) {
            $value = $json[self::FIELD_DEFINITION_URI] ?? null;
            $ext = (isset($json[self::FIELD_DEFINITION_URI_EXT]) && is_array($json[self::FIELD_DEFINITION_URI_EXT])) ? $json[self::FIELD_DEFINITION_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setDefinitionUri($value);
                } else if (is_array($value)) {
                    $type->setDefinitionUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setDefinitionUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefinitionUri(new FHIRUri($ext));
            } else {
                $type->setDefinitionUri(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_TRANSFORM]) || isset($json[self::FIELD_TRANSFORM_EXT]) || array_key_exists(self::FIELD_TRANSFORM, $json) || array_key_exists(self::FIELD_TRANSFORM_EXT, $json)) {
            $value = $json[self::FIELD_TRANSFORM] ?? null;
            $ext = (isset($json[self::FIELD_TRANSFORM_EXT]) && is_array($json[self::FIELD_TRANSFORM_EXT])) ? $json[self::FIELD_TRANSFORM_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $type->setTransform($value);
                } else if (is_array($value)) {
                    $type->setTransform(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $type->setTransform(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setTransform(new FHIRCanonical($ext));
            } else {
                $type->setTransform(new FHIRCanonical(null));
            }
        }
        if (isset($json[self::FIELD_DYNAMIC_VALUE]) || array_key_exists(self::FIELD_DYNAMIC_VALUE, $json)) {
            if (is_array($json[self::FIELD_DYNAMIC_VALUE])) {
                foreach($json[self::FIELD_DYNAMIC_VALUE] as $v) {
                    if ($v instanceof FHIRPlanDefinitionDynamicValue) {
                        $type->addDynamicValue($v);
                    } else {
                        $type->addDynamicValue(new FHIRPlanDefinitionDynamicValue($v));
                    }
                }
            } elseif ($json[self::FIELD_DYNAMIC_VALUE] instanceof FHIRPlanDefinitionDynamicValue) {
                $type->addDynamicValue($json[self::FIELD_DYNAMIC_VALUE]);
            } else {
                $type->addDynamicValue(new FHIRPlanDefinitionDynamicValue($json[self::FIELD_DYNAMIC_VALUE]));
            }
        }
        if (isset($json[self::FIELD_ACTION]) || array_key_exists(self::FIELD_ACTION, $json)) {
            if (is_array($json[self::FIELD_ACTION])) {
                foreach($json[self::FIELD_ACTION] as $v) {
                    if ($v instanceof FHIRPlanDefinitionAction) {
                        $type->addAction($v);
                    } else {
                        $type->addAction(new FHIRPlanDefinitionAction($v));
                    }
                }
            } elseif ($json[self::FIELD_ACTION] instanceof FHIRPlanDefinitionAction) {
                $type->addAction($json[self::FIELD_ACTION]);
            } else {
                $type->addAction(new FHIRPlanDefinitionAction($json[self::FIELD_ACTION]));
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
        if (isset($this->prefix)) {
            if (null !== ($val = $this->prefix->getValue())) {
                $out->prefix = $val;
            }
            $ext = $this->prefix->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_prefix = $ext;
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
        if (isset($this->textEquivalent)) {
            if (null !== ($val = $this->textEquivalent->getValue())) {
                $out->textEquivalent = $val;
            }
            $ext = $this->textEquivalent->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_textEquivalent = $ext;
            }
        }
        if (isset($this->priority)) {
            if (null !== ($val = $this->priority->getValue())) {
                $out->priority = $val;
            }
            $ext = $this->priority->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_priority = $ext;
            }
        }
        if (isset($this->code) && [] !== $this->code) {
            $out->code = $this->code;
        }
        if (isset($this->reason) && [] !== $this->reason) {
            $out->reason = $this->reason;
        }
        if (isset($this->documentation) && [] !== $this->documentation) {
            $out->documentation = $this->documentation;
        }
        if (isset($this->goalId) && [] !== $this->goalId) {
            $vals = [];
            $exts = [];
            foreach ($this->goalId as $v) {
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
                $out->goalId = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_goalId = $exts;
            }
        }
        if (isset($this->subjectCodeableConcept)) {
            $out->subjectCodeableConcept = $this->subjectCodeableConcept;
        }
        if (isset($this->subjectReference)) {
            $out->subjectReference = $this->subjectReference;
        }
        if (isset($this->subjectCanonical)) {
            if (null !== ($val = $this->subjectCanonical->getValue())) {
                $out->subjectCanonical = $val;
            }
            $ext = $this->subjectCanonical->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_subjectCanonical = $ext;
            }
        }
        if (isset($this->trigger) && [] !== $this->trigger) {
            $out->trigger = $this->trigger;
        }
        if (isset($this->condition) && [] !== $this->condition) {
            $out->condition = $this->condition;
        }
        if (isset($this->input) && [] !== $this->input) {
            $out->input = $this->input;
        }
        if (isset($this->output) && [] !== $this->output) {
            $out->output = $this->output;
        }
        if (isset($this->relatedAction) && [] !== $this->relatedAction) {
            $out->relatedAction = $this->relatedAction;
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
        if (isset($this->timingAge)) {
            $out->timingAge = $this->timingAge;
        }
        if (isset($this->timingPeriod)) {
            $out->timingPeriod = $this->timingPeriod;
        }
        if (isset($this->timingDuration)) {
            $out->timingDuration = $this->timingDuration;
        }
        if (isset($this->timingRange)) {
            $out->timingRange = $this->timingRange;
        }
        if (isset($this->timingTiming)) {
            $out->timingTiming = $this->timingTiming;
        }
        if (isset($this->participant) && [] !== $this->participant) {
            $out->participant = $this->participant;
        }
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->groupingBehavior)) {
            if (null !== ($val = $this->groupingBehavior->getValue())) {
                $out->groupingBehavior = $val;
            }
            $ext = $this->groupingBehavior->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_groupingBehavior = $ext;
            }
        }
        if (isset($this->selectionBehavior)) {
            if (null !== ($val = $this->selectionBehavior->getValue())) {
                $out->selectionBehavior = $val;
            }
            $ext = $this->selectionBehavior->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_selectionBehavior = $ext;
            }
        }
        if (isset($this->requiredBehavior)) {
            if (null !== ($val = $this->requiredBehavior->getValue())) {
                $out->requiredBehavior = $val;
            }
            $ext = $this->requiredBehavior->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_requiredBehavior = $ext;
            }
        }
        if (isset($this->precheckBehavior)) {
            if (null !== ($val = $this->precheckBehavior->getValue())) {
                $out->precheckBehavior = $val;
            }
            $ext = $this->precheckBehavior->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_precheckBehavior = $ext;
            }
        }
        if (isset($this->cardinalityBehavior)) {
            if (null !== ($val = $this->cardinalityBehavior->getValue())) {
                $out->cardinalityBehavior = $val;
            }
            $ext = $this->cardinalityBehavior->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_cardinalityBehavior = $ext;
            }
        }
        if (isset($this->definitionCanonical)) {
            if (null !== ($val = $this->definitionCanonical->getValue())) {
                $out->definitionCanonical = $val;
            }
            $ext = $this->definitionCanonical->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_definitionCanonical = $ext;
            }
        }
        if (isset($this->definitionUri)) {
            if (null !== ($val = $this->definitionUri->getValue())) {
                $out->definitionUri = $val;
            }
            $ext = $this->definitionUri->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_definitionUri = $ext;
            }
        }
        if (isset($this->transform)) {
            if (null !== ($val = $this->transform->getValue())) {
                $out->transform = $val;
            }
            $ext = $this->transform->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_transform = $ext;
            }
        }
        if (isset($this->dynamicValue) && [] !== $this->dynamicValue) {
            $out->dynamicValue = $this->dynamicValue;
        }
        if (isset($this->action) && [] !== $this->action) {
            $out->action = $this->action;
        }
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