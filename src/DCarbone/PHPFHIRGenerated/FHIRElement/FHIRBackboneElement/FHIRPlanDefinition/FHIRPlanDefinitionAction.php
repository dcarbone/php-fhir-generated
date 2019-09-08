<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 8th, 2019 00:59+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRActionCardinalityBehavior;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRActionGroupingBehavior;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRActionPrecheckBehavior;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRActionRequiredBehavior;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRActionSelectionBehavior;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRequestPriority;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * This resource allows for the definition of various types of plans as a sharable,
 * consumable, and executable artifact. The resource is general enough to support
 * the description of a broad range of clinical artifacts such as clinical decision
 * support rules, order sets and protocols.
 *
 * Class FHIRPlanDefinitionAction
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition
 */
class FHIRPlanDefinitionAction extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION;

    const FIELD_ACTION = 'action';
    const FIELD_CARDINALITY_BEHAVIOR = 'cardinalityBehavior';
    const FIELD_CODE = 'code';
    const FIELD_CONDITION = 'condition';
    const FIELD_DEFINITION_CANONICAL = 'definitionCanonical';
    const FIELD_DEFINITION_CANONICAL_EXT = '_definitionCanonical';
    const FIELD_DEFINITION_URI = 'definitionUri';
    const FIELD_DEFINITION_URI_EXT = '_definitionUri';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DOCUMENTATION = 'documentation';
    const FIELD_DYNAMIC_VALUE = 'dynamicValue';
    const FIELD_GOAL_ID = 'goalId';
    const FIELD_GOAL_ID_EXT = '_goalId';
    const FIELD_GROUPING_BEHAVIOR = 'groupingBehavior';
    const FIELD_INPUT = 'input';
    const FIELD_OUTPUT = 'output';
    const FIELD_PARTICIPANT = 'participant';
    const FIELD_PRECHECK_BEHAVIOR = 'precheckBehavior';
    const FIELD_PREFIX = 'prefix';
    const FIELD_PREFIX_EXT = '_prefix';
    const FIELD_PRIORITY = 'priority';
    const FIELD_REASON = 'reason';
    const FIELD_RELATED_ACTION = 'relatedAction';
    const FIELD_REQUIRED_BEHAVIOR = 'requiredBehavior';
    const FIELD_SELECTION_BEHAVIOR = 'selectionBehavior';
    const FIELD_SUBJECT_CODEABLE_CONCEPT = 'subjectCodeableConcept';
    const FIELD_SUBJECT_REFERENCE = 'subjectReference';
    const FIELD_TEXT_EQUIVALENT = 'textEquivalent';
    const FIELD_TEXT_EQUIVALENT_EXT = '_textEquivalent';
    const FIELD_TIMING_AGE = 'timingAge';
    const FIELD_TIMING_DATE_TIME = 'timingDateTime';
    const FIELD_TIMING_DATE_TIME_EXT = '_timingDateTime';
    const FIELD_TIMING_DURATION = 'timingDuration';
    const FIELD_TIMING_PERIOD = 'timingPeriod';
    const FIELD_TIMING_RANGE = 'timingRange';
    const FIELD_TIMING_TIMING = 'timingTiming';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';
    const FIELD_TRANSFORM = 'transform';
    const FIELD_TRANSFORM_EXT = '_transform';
    const FIELD_TRIGGER = 'trigger';
    const FIELD_TYPE = 'type';

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Sub actions that are contained within the action. The behavior of this action
     * determines the functionality of the sub-actions. For example, a selection
     * behavior of at-most-one indicates that of the sub-actions, at most one may be
     * chosen as part of realizing the action definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction[]
     */
    private $action = [];

    /**
     * Defines behavior for an action or a group for how many times that item may be
     * repeated.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRActionCardinalityBehavior
     */
    private $cardinalityBehavior = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code that provides meaning for the action or action group. For example, a
     * section may have a LOINC code for the section of a documentation template.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $code = [];

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * An expression that describes applicability criteria or start/stop conditions for
     * the action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition[]
     */
    private $condition = [];

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, or a PlanDefinition that describes a series of actions to be taken.
     * (choose any one of definition*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    private $definitionCanonical = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, or a PlanDefinition that describes a series of actions to be taken.
     * (choose any one of definition*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $definitionUri = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A brief description of the action used to provide a summary to display to the
     * user.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $description = null;

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Didactic or other informational resources associated with the action that can be
     * provided to the CDS recipient. Information resources can include inline text
     * commentary and links to web resources.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact[]
     */
    private $documentation = [];

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Customizations that should be applied to the statically defined resource. For
     * example, if the dosage of a medication must be computed based on the patient's
     * weight, a customization would be used to specify an expression that calculated
     * the weight, and the path on the resource that would contain the result.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue[]
     */
    private $dynamicValue = [];

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Identifies goals that this action supports. The reference must be to a goal
     * element defined within this plan definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRId[]
     */
    private $goalId = [];

    /**
     * Defines organization behavior of a group.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRActionGroupingBehavior
     */
    private $groupingBehavior = null;

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Defines input data requirements for the action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement[]
     */
    private $input = [];

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Defines the outputs of the action, if any.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement[]
     */
    private $output = [];

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Indicates who should participate in performing the action described.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant[]
     */
    private $participant = [];

    /**
     * Defines selection frequency behavior for an action or group.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines whether the action should usually be preselected.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRActionPrecheckBehavior
     */
    private $precheckBehavior = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A user-visible prefix for the action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $prefix = null;

    /**
     * Identifies the level of importance to be assigned to actioning the request.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates how quickly the action should be addressed with respect to other
     * actions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    private $priority = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A description of why this action is necessary or appropriate.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $reason = [];

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction[]
     */
    private $relatedAction = [];

    /**
     * Defines expectations around whether an action or action group is required.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines the required behavior for the action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRActionRequiredBehavior
     */
    private $requiredBehavior = null;

    /**
     * Defines selection behavior of a group.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRActionSelectionBehavior
     */
    private $selectionBehavior = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code or group definition that describes the intended subject of the action and
     * its children, if any. (choose any one of subject*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $subjectCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code or group definition that describes the intended subject of the action and
     * its children, if any. (choose any one of subject*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $subjectReference = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A text equivalent of the action to be performed. This provides a
     * human-interpretable description of the action when the definition is consumed by
     * a system that might not be capable of interpreting it dynamically.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $textEquivalent = null;

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    private $timingAge = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $timingDateTime = null;

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $timingDuration = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $timingPeriod = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    private $timingRange = null;

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    private $timingTiming = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The title of the action displayed to a user.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $title = null;

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A reference to a StructureMap resource that defines a transform that can be
     * executed to produce the intent resource using the ActivityDefinition instance as
     * the input.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    private $transform = null;

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A description of when the action should be triggered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition[]
     */
    private $trigger = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of action to perform (create, update, remove).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

    /**
     * FHIRPlanDefinitionAction Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPlanDefinitionAction::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTION])) {
            if (is_array($data[self::FIELD_ACTION])) {
                foreach($data[self::FIELD_ACTION] as $v) {
                    if ($v instanceof FHIRPlanDefinitionAction1) {
                        $this->addAction($v);
                    } else {
                        $this->addAction(new FHIRPlanDefinitionAction1($v));
                    }
                }
            } else if ($data[self::FIELD_ACTION] instanceof FHIRPlanDefinitionAction1) {
                $this->addAction($data[self::FIELD_ACTION]);
            } else {
                $this->addAction(new FHIRPlanDefinitionAction1($data[self::FIELD_ACTION]));
            }
        }
        if (isset($data[self::FIELD_CARDINALITY_BEHAVIOR])) {
            if ($data[self::FIELD_CARDINALITY_BEHAVIOR] instanceof FHIRActionCardinalityBehavior) {
                $this->setCardinalityBehavior($data[self::FIELD_CARDINALITY_BEHAVIOR]);
            } else {
                $this->setCardinalityBehavior(new FHIRActionCardinalityBehavior($data[self::FIELD_CARDINALITY_BEHAVIOR]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if (is_array($data[self::FIELD_CODE])) {
                foreach($data[self::FIELD_CODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCode($v);
                    } else {
                        $this->addCode(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->addCode($data[self::FIELD_CODE]);
            } else {
                $this->addCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_CONDITION])) {
            if (is_array($data[self::FIELD_CONDITION])) {
                foreach($data[self::FIELD_CONDITION] as $v) {
                    if ($v instanceof FHIRPlanDefinitionCondition) {
                        $this->addCondition($v);
                    } else {
                        $this->addCondition(new FHIRPlanDefinitionCondition($v));
                    }
                }
            } else if ($data[self::FIELD_CONDITION] instanceof FHIRPlanDefinitionCondition) {
                $this->addCondition($data[self::FIELD_CONDITION]);
            } else {
                $this->addCondition(new FHIRPlanDefinitionCondition($data[self::FIELD_CONDITION]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION_CANONICAL])) {
            $ext = (isset($data[self::FIELD_DEFINITION_CANONICAL_EXT]) && is_array($data[self::FIELD_DEFINITION_CANONICAL_EXT]))
                ? $data[self::FIELD_DEFINITION_CANONICAL_EXT]
                : null;
            if ($data[self::FIELD_DEFINITION_CANONICAL] instanceof FHIRCanonical) {
                $this->setDefinitionCanonical($data[self::FIELD_DEFINITION_CANONICAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFINITION_CANONICAL])) {
                $this->setDefinitionCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_DEFINITION_CANONICAL]] + $ext));
            } else {
                $this->setDefinitionCanonical(new FHIRCanonical($data[self::FIELD_DEFINITION_CANONICAL]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION_URI])) {
            $ext = (isset($data[self::FIELD_DEFINITION_URI_EXT]) && is_array($data[self::FIELD_DEFINITION_URI_EXT]))
                ? $data[self::FIELD_DEFINITION_URI_EXT]
                : null;
            if ($data[self::FIELD_DEFINITION_URI] instanceof FHIRUri) {
                $this->setDefinitionUri($data[self::FIELD_DEFINITION_URI]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFINITION_URI])) {
                $this->setDefinitionUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_DEFINITION_URI]] + $ext));
            } else {
                $this->setDefinitionUri(new FHIRUri($data[self::FIELD_DEFINITION_URI]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESCRIPTION])) {
                $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_DOCUMENTATION])) {
            if (is_array($data[self::FIELD_DOCUMENTATION])) {
                foreach($data[self::FIELD_DOCUMENTATION] as $v) {
                    if ($v instanceof FHIRRelatedArtifact) {
                        $this->addDocumentation($v);
                    } else {
                        $this->addDocumentation(new FHIRRelatedArtifact($v));
                    }
                }
            } else if ($data[self::FIELD_DOCUMENTATION] instanceof FHIRRelatedArtifact) {
                $this->addDocumentation($data[self::FIELD_DOCUMENTATION]);
            } else {
                $this->addDocumentation(new FHIRRelatedArtifact($data[self::FIELD_DOCUMENTATION]));
            }
        }
        if (isset($data[self::FIELD_DYNAMIC_VALUE])) {
            if (is_array($data[self::FIELD_DYNAMIC_VALUE])) {
                foreach($data[self::FIELD_DYNAMIC_VALUE] as $v) {
                    if ($v instanceof FHIRPlanDefinitionDynamicValue) {
                        $this->addDynamicValue($v);
                    } else {
                        $this->addDynamicValue(new FHIRPlanDefinitionDynamicValue($v));
                    }
                }
            } else if ($data[self::FIELD_DYNAMIC_VALUE] instanceof FHIRPlanDefinitionDynamicValue) {
                $this->addDynamicValue($data[self::FIELD_DYNAMIC_VALUE]);
            } else {
                $this->addDynamicValue(new FHIRPlanDefinitionDynamicValue($data[self::FIELD_DYNAMIC_VALUE]));
            }
        }
        if (isset($data[self::FIELD_GOAL_ID])) {
            $ext = (isset($data[self::FIELD_GOAL_ID_EXT]) && is_array($data[self::FIELD_GOAL_ID_EXT]))
                ? $data[self::FIELD_GOAL_ID_EXT]
                : null;
            if (is_array($data[self::FIELD_GOAL_ID])) {
                foreach($data[self::FIELD_GOAL_ID] as $i => $v) {
                    if ($v instanceof FHIRId) {
                        $this->addGoalId($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addGoalId(new FHIRId([FHIRId::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addGoalId(new FHIRId($v));
                    }
                }
            } elseif ($data[self::FIELD_GOAL_ID] instanceof FHIRId) {
                $this->addGoalId($data[self::FIELD_GOAL_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_GOAL_ID])) {
                $this->addGoalId(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_GOAL_ID]] + $ext));
            } else {
                $this->addGoalId(new FHIRId($data[self::FIELD_GOAL_ID]));
            }
        }
        if (isset($data[self::FIELD_GROUPING_BEHAVIOR])) {
            if ($data[self::FIELD_GROUPING_BEHAVIOR] instanceof FHIRActionGroupingBehavior) {
                $this->setGroupingBehavior($data[self::FIELD_GROUPING_BEHAVIOR]);
            } else {
                $this->setGroupingBehavior(new FHIRActionGroupingBehavior($data[self::FIELD_GROUPING_BEHAVIOR]));
            }
        }
        if (isset($data[self::FIELD_INPUT])) {
            if (is_array($data[self::FIELD_INPUT])) {
                foreach($data[self::FIELD_INPUT] as $v) {
                    if ($v instanceof FHIRDataRequirement) {
                        $this->addInput($v);
                    } else {
                        $this->addInput(new FHIRDataRequirement($v));
                    }
                }
            } else if ($data[self::FIELD_INPUT] instanceof FHIRDataRequirement) {
                $this->addInput($data[self::FIELD_INPUT]);
            } else {
                $this->addInput(new FHIRDataRequirement($data[self::FIELD_INPUT]));
            }
        }
        if (isset($data[self::FIELD_OUTPUT])) {
            if (is_array($data[self::FIELD_OUTPUT])) {
                foreach($data[self::FIELD_OUTPUT] as $v) {
                    if ($v instanceof FHIRDataRequirement) {
                        $this->addOutput($v);
                    } else {
                        $this->addOutput(new FHIRDataRequirement($v));
                    }
                }
            } else if ($data[self::FIELD_OUTPUT] instanceof FHIRDataRequirement) {
                $this->addOutput($data[self::FIELD_OUTPUT]);
            } else {
                $this->addOutput(new FHIRDataRequirement($data[self::FIELD_OUTPUT]));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT])) {
            if (is_array($data[self::FIELD_PARTICIPANT])) {
                foreach($data[self::FIELD_PARTICIPANT] as $v) {
                    if ($v instanceof FHIRPlanDefinitionParticipant) {
                        $this->addParticipant($v);
                    } else {
                        $this->addParticipant(new FHIRPlanDefinitionParticipant($v));
                    }
                }
            } else if ($data[self::FIELD_PARTICIPANT] instanceof FHIRPlanDefinitionParticipant) {
                $this->addParticipant($data[self::FIELD_PARTICIPANT]);
            } else {
                $this->addParticipant(new FHIRPlanDefinitionParticipant($data[self::FIELD_PARTICIPANT]));
            }
        }
        if (isset($data[self::FIELD_PRECHECK_BEHAVIOR])) {
            if ($data[self::FIELD_PRECHECK_BEHAVIOR] instanceof FHIRActionPrecheckBehavior) {
                $this->setPrecheckBehavior($data[self::FIELD_PRECHECK_BEHAVIOR]);
            } else {
                $this->setPrecheckBehavior(new FHIRActionPrecheckBehavior($data[self::FIELD_PRECHECK_BEHAVIOR]));
            }
        }
        if (isset($data[self::FIELD_PREFIX])) {
            $ext = (isset($data[self::FIELD_PREFIX_EXT]) && is_array($data[self::FIELD_PREFIX_EXT]))
                ? $data[self::FIELD_PREFIX_EXT]
                : null;
            if ($data[self::FIELD_PREFIX] instanceof FHIRString) {
                $this->setPrefix($data[self::FIELD_PREFIX]);
            } elseif ($ext && is_scalar($data[self::FIELD_PREFIX])) {
                $this->setPrefix(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PREFIX]] + $ext));
            } else {
                $this->setPrefix(new FHIRString($data[self::FIELD_PREFIX]));
            }
        }
        if (isset($data[self::FIELD_PRIORITY])) {
            if ($data[self::FIELD_PRIORITY] instanceof FHIRRequestPriority) {
                $this->setPriority($data[self::FIELD_PRIORITY]);
            } else {
                $this->setPriority(new FHIRRequestPriority($data[self::FIELD_PRIORITY]));
            }
        }
        if (isset($data[self::FIELD_REASON])) {
            if (is_array($data[self::FIELD_REASON])) {
                foreach($data[self::FIELD_REASON] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReason($v);
                    } else {
                        $this->addReason(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_REASON] instanceof FHIRCodeableConcept) {
                $this->addReason($data[self::FIELD_REASON]);
            } else {
                $this->addReason(new FHIRCodeableConcept($data[self::FIELD_REASON]));
            }
        }
        if (isset($data[self::FIELD_RELATED_ACTION])) {
            if (is_array($data[self::FIELD_RELATED_ACTION])) {
                foreach($data[self::FIELD_RELATED_ACTION] as $v) {
                    if ($v instanceof FHIRPlanDefinitionRelatedAction) {
                        $this->addRelatedAction($v);
                    } else {
                        $this->addRelatedAction(new FHIRPlanDefinitionRelatedAction($v));
                    }
                }
            } else if ($data[self::FIELD_RELATED_ACTION] instanceof FHIRPlanDefinitionRelatedAction) {
                $this->addRelatedAction($data[self::FIELD_RELATED_ACTION]);
            } else {
                $this->addRelatedAction(new FHIRPlanDefinitionRelatedAction($data[self::FIELD_RELATED_ACTION]));
            }
        }
        if (isset($data[self::FIELD_REQUIRED_BEHAVIOR])) {
            if ($data[self::FIELD_REQUIRED_BEHAVIOR] instanceof FHIRActionRequiredBehavior) {
                $this->setRequiredBehavior($data[self::FIELD_REQUIRED_BEHAVIOR]);
            } else {
                $this->setRequiredBehavior(new FHIRActionRequiredBehavior($data[self::FIELD_REQUIRED_BEHAVIOR]));
            }
        }
        if (isset($data[self::FIELD_SELECTION_BEHAVIOR])) {
            if ($data[self::FIELD_SELECTION_BEHAVIOR] instanceof FHIRActionSelectionBehavior) {
                $this->setSelectionBehavior($data[self::FIELD_SELECTION_BEHAVIOR]);
            } else {
                $this->setSelectionBehavior(new FHIRActionSelectionBehavior($data[self::FIELD_SELECTION_BEHAVIOR]));
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
        if (isset($data[self::FIELD_TEXT_EQUIVALENT])) {
            $ext = (isset($data[self::FIELD_TEXT_EQUIVALENT_EXT]) && is_array($data[self::FIELD_TEXT_EQUIVALENT_EXT]))
                ? $data[self::FIELD_TEXT_EQUIVALENT_EXT]
                : null;
            if ($data[self::FIELD_TEXT_EQUIVALENT] instanceof FHIRString) {
                $this->setTextEquivalent($data[self::FIELD_TEXT_EQUIVALENT]);
            } elseif ($ext && is_scalar($data[self::FIELD_TEXT_EQUIVALENT])) {
                $this->setTextEquivalent(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_TEXT_EQUIVALENT]] + $ext));
            } else {
                $this->setTextEquivalent(new FHIRString($data[self::FIELD_TEXT_EQUIVALENT]));
            }
        }
        if (isset($data[self::FIELD_TIMING_AGE])) {
            if ($data[self::FIELD_TIMING_AGE] instanceof FHIRAge) {
                $this->setTimingAge($data[self::FIELD_TIMING_AGE]);
            } else {
                $this->setTimingAge(new FHIRAge($data[self::FIELD_TIMING_AGE]));
            }
        }
        if (isset($data[self::FIELD_TIMING_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_TIMING_DATE_TIME_EXT]) && is_array($data[self::FIELD_TIMING_DATE_TIME_EXT]))
                ? $data[self::FIELD_TIMING_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_TIMING_DATE_TIME] instanceof FHIRDateTime) {
                $this->setTimingDateTime($data[self::FIELD_TIMING_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_TIMING_DATE_TIME])) {
                $this->setTimingDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_TIMING_DATE_TIME]] + $ext));
            } else {
                $this->setTimingDateTime(new FHIRDateTime($data[self::FIELD_TIMING_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_TIMING_DURATION])) {
            if ($data[self::FIELD_TIMING_DURATION] instanceof FHIRDuration) {
                $this->setTimingDuration($data[self::FIELD_TIMING_DURATION]);
            } else {
                $this->setTimingDuration(new FHIRDuration($data[self::FIELD_TIMING_DURATION]));
            }
        }
        if (isset($data[self::FIELD_TIMING_PERIOD])) {
            if ($data[self::FIELD_TIMING_PERIOD] instanceof FHIRPeriod) {
                $this->setTimingPeriod($data[self::FIELD_TIMING_PERIOD]);
            } else {
                $this->setTimingPeriod(new FHIRPeriod($data[self::FIELD_TIMING_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_TIMING_RANGE])) {
            if ($data[self::FIELD_TIMING_RANGE] instanceof FHIRRange) {
                $this->setTimingRange($data[self::FIELD_TIMING_RANGE]);
            } else {
                $this->setTimingRange(new FHIRRange($data[self::FIELD_TIMING_RANGE]));
            }
        }
        if (isset($data[self::FIELD_TIMING_TIMING])) {
            if ($data[self::FIELD_TIMING_TIMING] instanceof FHIRTiming) {
                $this->setTimingTiming($data[self::FIELD_TIMING_TIMING]);
            } else {
                $this->setTimingTiming(new FHIRTiming($data[self::FIELD_TIMING_TIMING]));
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
        if (isset($data[self::FIELD_TRANSFORM])) {
            $ext = (isset($data[self::FIELD_TRANSFORM_EXT]) && is_array($data[self::FIELD_TRANSFORM_EXT]))
                ? $data[self::FIELD_TRANSFORM_EXT]
                : null;
            if ($data[self::FIELD_TRANSFORM] instanceof FHIRCanonical) {
                $this->setTransform($data[self::FIELD_TRANSFORM]);
            } elseif ($ext && is_scalar($data[self::FIELD_TRANSFORM])) {
                $this->setTransform(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_TRANSFORM]] + $ext));
            } else {
                $this->setTransform(new FHIRCanonical($data[self::FIELD_TRANSFORM]));
            }
        }
        if (isset($data[self::FIELD_TRIGGER])) {
            if (is_array($data[self::FIELD_TRIGGER])) {
                foreach($data[self::FIELD_TRIGGER] as $v) {
                    if ($v instanceof FHIRTriggerDefinition) {
                        $this->addTrigger($v);
                    } else {
                        $this->addTrigger(new FHIRTriggerDefinition($v));
                    }
                }
            } else if ($data[self::FIELD_TRIGGER] instanceof FHIRTriggerDefinition) {
                $this->addTrigger($data[self::FIELD_TRIGGER]);
            } else {
                $this->addTrigger(new FHIRTriggerDefinition($data[self::FIELD_TRIGGER]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Sub actions that are contained within the action. The behavior of this action
     * determines the functionality of the sub-actions. For example, a selection
     * behavior of at-most-one indicates that of the sub-actions, at most one may be
     * chosen as part of realizing the action definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction[]
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
     * Sub actions that are contained within the action. The behavior of this action
     * determines the functionality of the sub-actions. For example, a selection
     * behavior of at-most-one indicates that of the sub-actions, at most one may be
     * chosen as part of realizing the action definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction $action
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function addAction(FHIRPlanDefinitionAction1 $action = null)
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
     * Sub actions that are contained within the action. The behavior of this action
     * determines the functionality of the sub-actions. For example, a selection
     * behavior of at-most-one indicates that of the sub-actions, at most one may be
     * chosen as part of realizing the action definition.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction[] $action
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setAction(array $action = [])
    {
        $this->action = [];
        if ([] === $action) {
            return $this;
        }
        foreach($action as $v) {
            if ($v instanceof FHIRPlanDefinitionAction1) {
                $this->addAction($v);
            } else {
                $this->addAction(new FHIRPlanDefinitionAction1($v));
            }
        }
        return $this;
    }

    /**
     * Defines behavior for an action or a group for how many times that item may be
     * repeated.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRActionCardinalityBehavior
     */
    public function getCardinalityBehavior()
    {
        return $this->cardinalityBehavior;
    }

    /**
     * Defines behavior for an action or a group for how many times that item may be
     * repeated.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRActionCardinalityBehavior $cardinalityBehavior
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setCardinalityBehavior(FHIRActionCardinalityBehavior $cardinalityBehavior = null)
    {
        $this->cardinalityBehavior = $cardinalityBehavior;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code that provides meaning for the action or action group. For example, a
     * section may have a LOINC code for the section of a documentation template.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code that provides meaning for the action or action group. For example, a
     * section may have a LOINC code for the section of a documentation template.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function addCode(FHIRCodeableConcept $code = null)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code that provides meaning for the action or action group. For example, a
     * section may have a LOINC code for the section of a documentation template.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $code
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setCode(array $code = [])
    {
        $this->code = [];
        if ([] === $code) {
            return $this;
        }
        foreach($code as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCode($v);
            } else {
                $this->addCode(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * An expression that describes applicability criteria or start/stop conditions for
     * the action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * An expression that describes applicability criteria or start/stop conditions for
     * the action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition $condition
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function addCondition(FHIRPlanDefinitionCondition $condition = null)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * An expression that describes applicability criteria or start/stop conditions for
     * the action.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition[] $condition
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setCondition(array $condition = [])
    {
        $this->condition = [];
        if ([] === $condition) {
            return $this;
        }
        foreach($condition as $v) {
            if ($v instanceof FHIRPlanDefinitionCondition) {
                $this->addCondition($v);
            } else {
                $this->addCondition(new FHIRPlanDefinitionCondition($v));
            }
        }
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, or a PlanDefinition that describes a series of actions to be taken.
     * (choose any one of definition*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getDefinitionCanonical()
    {
        return $this->definitionCanonical;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, or a PlanDefinition that describes a series of actions to be taken.
     * (choose any one of definition*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical $definitionCanonical
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setDefinitionCanonical($definitionCanonical = null)
    {
        if (null === $definitionCanonical) {
            $this->definitionCanonical = null;
            return $this;
        }
        if ($definitionCanonical instanceof FHIRCanonical) {
            $this->definitionCanonical = $definitionCanonical;
            return $this;
        }
        $this->definitionCanonical = new FHIRCanonical($definitionCanonical);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, or a PlanDefinition that describes a series of actions to be taken.
     * (choose any one of definition*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getDefinitionUri()
    {
        return $this->definitionUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, or a PlanDefinition that describes a series of actions to be taken.
     * (choose any one of definition*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri $definitionUri
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setDefinitionUri($definitionUri = null)
    {
        if (null === $definitionUri) {
            $this->definitionUri = null;
            return $this;
        }
        if ($definitionUri instanceof FHIRUri) {
            $this->definitionUri = $definitionUri;
            return $this;
        }
        $this->definitionUri = new FHIRUri($definitionUri);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A brief description of the action used to provide a summary to display to the
     * user.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A brief description of the action used to provide a summary to display to the
     * user.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Didactic or other informational resources associated with the action that can be
     * provided to the CDS recipient. Information resources can include inline text
     * commentary and links to web resources.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact[]
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Didactic or other informational resources associated with the action that can be
     * provided to the CDS recipient. Information resources can include inline text
     * commentary and links to web resources.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact $documentation
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function addDocumentation(FHIRRelatedArtifact $documentation = null)
    {
        $this->documentation[] = $documentation;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Didactic or other informational resources associated with the action that can be
     * provided to the CDS recipient. Information resources can include inline text
     * commentary and links to web resources.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact[] $documentation
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setDocumentation(array $documentation = [])
    {
        $this->documentation = [];
        if ([] === $documentation) {
            return $this;
        }
        foreach($documentation as $v) {
            if ($v instanceof FHIRRelatedArtifact) {
                $this->addDocumentation($v);
            } else {
                $this->addDocumentation(new FHIRRelatedArtifact($v));
            }
        }
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Customizations that should be applied to the statically defined resource. For
     * example, if the dosage of a medication must be computed based on the patient's
     * weight, a customization would be used to specify an expression that calculated
     * the weight, and the path on the resource that would contain the result.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue[]
     */
    public function getDynamicValue()
    {
        return $this->dynamicValue;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Customizations that should be applied to the statically defined resource. For
     * example, if the dosage of a medication must be computed based on the patient's
     * weight, a customization would be used to specify an expression that calculated
     * the weight, and the path on the resource that would contain the result.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue $dynamicValue
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function addDynamicValue(FHIRPlanDefinitionDynamicValue $dynamicValue = null)
    {
        $this->dynamicValue[] = $dynamicValue;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Customizations that should be applied to the statically defined resource. For
     * example, if the dosage of a medication must be computed based on the patient's
     * weight, a customization would be used to specify an expression that calculated
     * the weight, and the path on the resource that would contain the result.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue[] $dynamicValue
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setDynamicValue(array $dynamicValue = [])
    {
        $this->dynamicValue = [];
        if ([] === $dynamicValue) {
            return $this;
        }
        foreach($dynamicValue as $v) {
            if ($v instanceof FHIRPlanDefinitionDynamicValue) {
                $this->addDynamicValue($v);
            } else {
                $this->addDynamicValue(new FHIRPlanDefinitionDynamicValue($v));
            }
        }
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Identifies goals that this action supports. The reference must be to a goal
     * element defined within this plan definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRId[]
     */
    public function getGoalId()
    {
        return $this->goalId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Identifies goals that this action supports. The reference must be to a goal
     * element defined within this plan definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRId $goalId
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function addGoalId($goalId = null)
    {
        if (null === $goalId) {
            $this->goalId = null;
            return $this;
        }
        if ($goalId instanceof FHIRId) {
            $this->goalId = $goalId;
            return $this;
        }
        $this->goalId = new FHIRId($goalId);
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Identifies goals that this action supports. The reference must be to a goal
     * element defined within this plan definition.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRId[] $goalId
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setGoalId(array $goalId = [])
    {
        $this->goalId = [];
        if ([] === $goalId) {
            return $this;
        }
        foreach($goalId as $v) {
            if ($v instanceof FHIRId) {
                $this->addGoalId($v);
            } else {
                $this->addGoalId(new FHIRId($v));
            }
        }
        return $this;
    }

    /**
     * Defines organization behavior of a group.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRActionGroupingBehavior
     */
    public function getGroupingBehavior()
    {
        return $this->groupingBehavior;
    }

    /**
     * Defines organization behavior of a group.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRActionGroupingBehavior $groupingBehavior
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setGroupingBehavior(FHIRActionGroupingBehavior $groupingBehavior = null)
    {
        $this->groupingBehavior = $groupingBehavior;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Defines input data requirements for the action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement[]
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Defines input data requirements for the action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement $input
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function addInput(FHIRDataRequirement $input = null)
    {
        $this->input[] = $input;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Defines input data requirements for the action.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement[] $input
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setInput(array $input = [])
    {
        $this->input = [];
        if ([] === $input) {
            return $this;
        }
        foreach($input as $v) {
            if ($v instanceof FHIRDataRequirement) {
                $this->addInput($v);
            } else {
                $this->addInput(new FHIRDataRequirement($v));
            }
        }
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Defines the outputs of the action, if any.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement[]
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Defines the outputs of the action, if any.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement $output
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function addOutput(FHIRDataRequirement $output = null)
    {
        $this->output[] = $output;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Defines the outputs of the action, if any.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement[] $output
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setOutput(array $output = [])
    {
        $this->output = [];
        if ([] === $output) {
            return $this;
        }
        foreach($output as $v) {
            if ($v instanceof FHIRDataRequirement) {
                $this->addOutput($v);
            } else {
                $this->addOutput(new FHIRDataRequirement($v));
            }
        }
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Indicates who should participate in performing the action described.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Indicates who should participate in performing the action described.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant $participant
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function addParticipant(FHIRPlanDefinitionParticipant $participant = null)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Indicates who should participate in performing the action described.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant[] $participant
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setParticipant(array $participant = [])
    {
        $this->participant = [];
        if ([] === $participant) {
            return $this;
        }
        foreach($participant as $v) {
            if ($v instanceof FHIRPlanDefinitionParticipant) {
                $this->addParticipant($v);
            } else {
                $this->addParticipant(new FHIRPlanDefinitionParticipant($v));
            }
        }
        return $this;
    }

    /**
     * Defines selection frequency behavior for an action or group.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines whether the action should usually be preselected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRActionPrecheckBehavior
     */
    public function getPrecheckBehavior()
    {
        return $this->precheckBehavior;
    }

    /**
     * Defines selection frequency behavior for an action or group.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines whether the action should usually be preselected.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRActionPrecheckBehavior $precheckBehavior
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setPrecheckBehavior(FHIRActionPrecheckBehavior $precheckBehavior = null)
    {
        $this->precheckBehavior = $precheckBehavior;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A user-visible prefix for the action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A user-visible prefix for the action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $prefix
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setPrefix($prefix = null)
    {
        if (null === $prefix) {
            $this->prefix = null;
            return $this;
        }
        if ($prefix instanceof FHIRString) {
            $this->prefix = $prefix;
            return $this;
        }
        $this->prefix = new FHIRString($prefix);
        return $this;
    }

    /**
     * Identifies the level of importance to be assigned to actioning the request.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates how quickly the action should be addressed with respect to other
     * actions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Identifies the level of importance to be assigned to actioning the request.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates how quickly the action should be addressed with respect to other
     * actions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRequestPriority $priority
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setPriority(FHIRRequestPriority $priority = null)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A description of why this action is necessary or appropriate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A description of why this action is necessary or appropriate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reason
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function addReason(FHIRCodeableConcept $reason = null)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A description of why this action is necessary or appropriate.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $reason
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setReason(array $reason = [])
    {
        $this->reason = [];
        if ([] === $reason) {
            return $this;
        }
        foreach($reason as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReason($v);
            } else {
                $this->addReason(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction[]
     */
    public function getRelatedAction()
    {
        return $this->relatedAction;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction $relatedAction
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function addRelatedAction(FHIRPlanDefinitionRelatedAction $relatedAction = null)
    {
        $this->relatedAction[] = $relatedAction;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction[] $relatedAction
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setRelatedAction(array $relatedAction = [])
    {
        $this->relatedAction = [];
        if ([] === $relatedAction) {
            return $this;
        }
        foreach($relatedAction as $v) {
            if ($v instanceof FHIRPlanDefinitionRelatedAction) {
                $this->addRelatedAction($v);
            } else {
                $this->addRelatedAction(new FHIRPlanDefinitionRelatedAction($v));
            }
        }
        return $this;
    }

    /**
     * Defines expectations around whether an action or action group is required.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines the required behavior for the action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRActionRequiredBehavior
     */
    public function getRequiredBehavior()
    {
        return $this->requiredBehavior;
    }

    /**
     * Defines expectations around whether an action or action group is required.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines the required behavior for the action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRActionRequiredBehavior $requiredBehavior
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setRequiredBehavior(FHIRActionRequiredBehavior $requiredBehavior = null)
    {
        $this->requiredBehavior = $requiredBehavior;
        return $this;
    }

    /**
     * Defines selection behavior of a group.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRActionSelectionBehavior
     */
    public function getSelectionBehavior()
    {
        return $this->selectionBehavior;
    }

    /**
     * Defines selection behavior of a group.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRActionSelectionBehavior $selectionBehavior
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setSelectionBehavior(FHIRActionSelectionBehavior $selectionBehavior = null)
    {
        $this->selectionBehavior = $selectionBehavior;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code or group definition that describes the intended subject of the action and
     * its children, if any. (choose any one of subject*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
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
     * A code or group definition that describes the intended subject of the action and
     * its children, if any. (choose any one of subject*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $subjectCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
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
     * A code or group definition that describes the intended subject of the action and
     * its children, if any. (choose any one of subject*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
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
     * A code or group definition that describes the intended subject of the action and
     * its children, if any. (choose any one of subject*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $subjectReference
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
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
     * A text equivalent of the action to be performed. This provides a
     * human-interpretable description of the action when the definition is consumed by
     * a system that might not be capable of interpreting it dynamically.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTextEquivalent()
    {
        return $this->textEquivalent;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A text equivalent of the action to be performed. This provides a
     * human-interpretable description of the action when the definition is consumed by
     * a system that might not be capable of interpreting it dynamically.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $textEquivalent
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setTextEquivalent($textEquivalent = null)
    {
        if (null === $textEquivalent) {
            $this->textEquivalent = null;
            return $this;
        }
        if ($textEquivalent instanceof FHIRString) {
            $this->textEquivalent = $textEquivalent;
            return $this;
        }
        $this->textEquivalent = new FHIRString($textEquivalent);
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getTimingAge()
    {
        return $this->timingAge;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge $timingAge
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setTimingAge(FHIRAge $timingAge = null)
    {
        $this->timingAge = $timingAge;
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
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getTimingDateTime()
    {
        return $this->timingDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $timingDateTime
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setTimingDateTime($timingDateTime = null)
    {
        if (null === $timingDateTime) {
            $this->timingDateTime = null;
            return $this;
        }
        if ($timingDateTime instanceof FHIRDateTime) {
            $this->timingDateTime = $timingDateTime;
            return $this;
        }
        $this->timingDateTime = new FHIRDateTime($timingDateTime);
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getTimingDuration()
    {
        return $this->timingDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $timingDuration
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setTimingDuration(FHIRDuration $timingDuration = null)
    {
        $this->timingDuration = $timingDuration;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod $timingPeriod
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setTimingPeriod(FHIRPeriod $timingPeriod = null)
    {
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getTimingRange()
    {
        return $this->timingRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRange $timingRange
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setTimingRange(FHIRRange $timingRange = null)
    {
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getTimingTiming()
    {
        return $this->timingTiming;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming $timingTiming
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setTimingTiming(FHIRTiming $timingTiming = null)
    {
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The title of the action displayed to a user.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
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
     * The title of the action displayed to a user.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $title
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
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
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A reference to a StructureMap resource that defines a transform that can be
     * executed to produce the intent resource using the ActivityDefinition instance as
     * the input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getTransform()
    {
        return $this->transform;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A reference to a StructureMap resource that defines a transform that can be
     * executed to produce the intent resource using the ActivityDefinition instance as
     * the input.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical $transform
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setTransform($transform = null)
    {
        if (null === $transform) {
            $this->transform = null;
            return $this;
        }
        if ($transform instanceof FHIRCanonical) {
            $this->transform = $transform;
            return $this;
        }
        $this->transform = new FHIRCanonical($transform);
        return $this;
    }

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A description of when the action should be triggered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition[]
     */
    public function getTrigger()
    {
        return $this->trigger;
    }

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A description of when the action should be triggered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition $trigger
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function addTrigger(FHIRTriggerDefinition $trigger = null)
    {
        $this->trigger[] = $trigger;
        return $this;
    }

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A description of when the action should be triggered.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition[] $trigger
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setTrigger(array $trigger = [])
    {
        $this->trigger = [];
        if ([] === $trigger) {
            return $this;
        }
        foreach($trigger as $v) {
            if ($v instanceof FHIRTriggerDefinition) {
                $this->addTrigger($v);
            } else {
                $this->addTrigger(new FHIRTriggerDefinition($v));
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
     * The type of action to perform (create, update, remove).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
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
     * The type of action to perform (create, update, remove).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRPlanDefinitionAction::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRPlanDefinitionAction::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRPlanDefinitionAction);
        } elseif (!is_object($type) || !($type instanceof FHIRPlanDefinitionAction)) {
            throw new \RuntimeException(sprintf(
                'FHIRPlanDefinitionAction::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->action)) {
            foreach($children->action as $child) {
                $type->addAction(FHIRPlanDefinitionAction1::xmlUnserialize($child));
            }
        }
        if (isset($children->cardinalityBehavior)) {
            $type->setCardinalityBehavior(FHIRActionCardinalityBehavior::xmlUnserialize($children->cardinalityBehavior));
        }
        if (isset($children->code)) {
            foreach($children->code as $child) {
                $type->addCode(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->condition)) {
            foreach($children->condition as $child) {
                $type->addCondition(FHIRPlanDefinitionCondition::xmlUnserialize($child));
            }
        }
        if (isset($attributes->definitionCanonical)) {
            $type->setDefinitionCanonical((string)$attributes->definitionCanonical);
        }
        if (isset($children->definitionCanonical)) {
            $type->setDefinitionCanonical(FHIRCanonical::xmlUnserialize($children->definitionCanonical));
        }
        if (isset($attributes->definitionUri)) {
            $type->setDefinitionUri((string)$attributes->definitionUri);
        }
        if (isset($children->definitionUri)) {
            $type->setDefinitionUri(FHIRUri::xmlUnserialize($children->definitionUri));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($children->documentation)) {
            foreach($children->documentation as $child) {
                $type->addDocumentation(FHIRRelatedArtifact::xmlUnserialize($child));
            }
        }
        if (isset($children->dynamicValue)) {
            foreach($children->dynamicValue as $child) {
                $type->addDynamicValue(FHIRPlanDefinitionDynamicValue::xmlUnserialize($child));
            }
        }
        if (isset($attributes->goalId)) {
            $type->addGoalId((string)$attributes->goalId);
        }
        if (isset($children->goalId)) {
            foreach($children->goalId as $child) {
                $type->addGoalId(FHIRId::xmlUnserialize($child));
            }
        }
        if (isset($children->groupingBehavior)) {
            $type->setGroupingBehavior(FHIRActionGroupingBehavior::xmlUnserialize($children->groupingBehavior));
        }
        if (isset($children->input)) {
            foreach($children->input as $child) {
                $type->addInput(FHIRDataRequirement::xmlUnserialize($child));
            }
        }
        if (isset($children->output)) {
            foreach($children->output as $child) {
                $type->addOutput(FHIRDataRequirement::xmlUnserialize($child));
            }
        }
        if (isset($children->participant)) {
            foreach($children->participant as $child) {
                $type->addParticipant(FHIRPlanDefinitionParticipant::xmlUnserialize($child));
            }
        }
        if (isset($children->precheckBehavior)) {
            $type->setPrecheckBehavior(FHIRActionPrecheckBehavior::xmlUnserialize($children->precheckBehavior));
        }
        if (isset($attributes->prefix)) {
            $type->setPrefix((string)$attributes->prefix);
        }
        if (isset($children->prefix)) {
            $type->setPrefix(FHIRString::xmlUnserialize($children->prefix));
        }
        if (isset($children->priority)) {
            $type->setPriority(FHIRRequestPriority::xmlUnserialize($children->priority));
        }
        if (isset($children->reason)) {
            foreach($children->reason as $child) {
                $type->addReason(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->relatedAction)) {
            foreach($children->relatedAction as $child) {
                $type->addRelatedAction(FHIRPlanDefinitionRelatedAction::xmlUnserialize($child));
            }
        }
        if (isset($children->requiredBehavior)) {
            $type->setRequiredBehavior(FHIRActionRequiredBehavior::xmlUnserialize($children->requiredBehavior));
        }
        if (isset($children->selectionBehavior)) {
            $type->setSelectionBehavior(FHIRActionSelectionBehavior::xmlUnserialize($children->selectionBehavior));
        }
        if (isset($children->subjectCodeableConcept)) {
            $type->setSubjectCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->subjectCodeableConcept));
        }
        if (isset($children->subjectReference)) {
            $type->setSubjectReference(FHIRReference::xmlUnserialize($children->subjectReference));
        }
        if (isset($attributes->textEquivalent)) {
            $type->setTextEquivalent((string)$attributes->textEquivalent);
        }
        if (isset($children->textEquivalent)) {
            $type->setTextEquivalent(FHIRString::xmlUnserialize($children->textEquivalent));
        }
        if (isset($children->timingAge)) {
            $type->setTimingAge(FHIRAge::xmlUnserialize($children->timingAge));
        }
        if (isset($attributes->timingDateTime)) {
            $type->setTimingDateTime((string)$attributes->timingDateTime);
        }
        if (isset($children->timingDateTime)) {
            $type->setTimingDateTime(FHIRDateTime::xmlUnserialize($children->timingDateTime));
        }
        if (isset($children->timingDuration)) {
            $type->setTimingDuration(FHIRDuration::xmlUnserialize($children->timingDuration));
        }
        if (isset($children->timingPeriod)) {
            $type->setTimingPeriod(FHIRPeriod::xmlUnserialize($children->timingPeriod));
        }
        if (isset($children->timingRange)) {
            $type->setTimingRange(FHIRRange::xmlUnserialize($children->timingRange));
        }
        if (isset($children->timingTiming)) {
            $type->setTimingTiming(FHIRTiming::xmlUnserialize($children->timingTiming));
        }
        if (isset($attributes->title)) {
            $type->setTitle((string)$attributes->title);
        }
        if (isset($children->title)) {
            $type->setTitle(FHIRString::xmlUnserialize($children->title));
        }
        if (isset($attributes->transform)) {
            $type->setTransform((string)$attributes->transform);
        }
        if (isset($children->transform)) {
            $type->setTransform(FHIRCanonical::xmlUnserialize($children->transform));
        }
        if (isset($children->trigger)) {
            foreach($children->trigger as $child) {
                $type->addTrigger(FHIRTriggerDefinition::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<PlanDefinitionAction xmlns="http://hl7.org/fhir"></PlanDefinitionAction>');
        }
        if ([] !== ($vs = $this->getAction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ACTION));
            }
        }
        if (null !== ($v = $this->getCardinalityBehavior())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CARDINALITY_BEHAVIOR));
        }
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CODE));
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONDITION));
            }
        }
        if (null !== ($v = $this->getDefinitionCanonical())) {
            $sxe->addAttribute(self::FIELD_DEFINITION_CANONICAL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION_CANONICAL));
            }
        }
        if (null !== ($v = $this->getDefinitionUri())) {
            $sxe->addAttribute(self::FIELD_DEFINITION_URI, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION_URI));
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $sxe->addAttribute(self::FIELD_DESCRIPTION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION));
            }
        }
        if ([] !== ($vs = $this->getDocumentation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DOCUMENTATION));
            }
        }
        if ([] !== ($vs = $this->getDynamicValue())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DYNAMIC_VALUE));
            }
        }
        if ([] !== ($vs = $this->getGoalId())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_GOAL_ID, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_GOAL_ID));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_GOAL_ID));
                }
            }
        }
        if (null !== ($v = $this->getGroupingBehavior())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GROUPING_BEHAVIOR));
        }
        if ([] !== ($vs = $this->getInput())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INPUT));
            }
        }
        if ([] !== ($vs = $this->getOutput())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_OUTPUT));
            }
        }
        if ([] !== ($vs = $this->getParticipant())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT));
            }
        }
        if (null !== ($v = $this->getPrecheckBehavior())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRECHECK_BEHAVIOR));
        }
        if (null !== ($v = $this->getPrefix())) {
            $sxe->addAttribute(self::FIELD_PREFIX, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PREFIX));
            }
        }
        if (null !== ($v = $this->getPriority())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRIORITY));
        }
        if ([] !== ($vs = $this->getReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON));
            }
        }
        if ([] !== ($vs = $this->getRelatedAction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELATED_ACTION));
            }
        }
        if (null !== ($v = $this->getRequiredBehavior())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUIRED_BEHAVIOR));
        }
        if (null !== ($v = $this->getSelectionBehavior())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SELECTION_BEHAVIOR));
        }
        if (null !== ($v = $this->getSubjectCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT_CODEABLE_CONCEPT));
        }
        if (null !== ($v = $this->getSubjectReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT_REFERENCE));
        }
        if (null !== ($v = $this->getTextEquivalent())) {
            $sxe->addAttribute(self::FIELD_TEXT_EQUIVALENT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TEXT_EQUIVALENT));
            }
        }
        if (null !== ($v = $this->getTimingAge())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_AGE));
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            $sxe->addAttribute(self::FIELD_TIMING_DATE_TIME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_DATE_TIME));
            }
        }
        if (null !== ($v = $this->getTimingDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_DURATION));
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_PERIOD));
        }
        if (null !== ($v = $this->getTimingRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_RANGE));
        }
        if (null !== ($v = $this->getTimingTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_TIMING));
        }
        if (null !== ($v = $this->getTitle())) {
            $sxe->addAttribute(self::FIELD_TITLE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TITLE));
            }
        }
        if (null !== ($v = $this->getTransform())) {
            $sxe->addAttribute(self::FIELD_TRANSFORM, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TRANSFORM));
            }
        }
        if ([] !== ($vs = $this->getTrigger())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TRIGGER));
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
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
        if (null !== ($v = $this->getCardinalityBehavior())) {
            $a[self::FIELD_CARDINALITY_BEHAVIOR] = $v;
        }
        if ([] !== ($vs = $this->getCode())) {
            $a[self::FIELD_CODE] = $vs;
        }
        if ([] !== ($vs = $this->getCondition())) {
            $a[self::FIELD_CONDITION] = $vs;
        }
        if (null !== ($v = $this->getDefinitionCanonical())) {
            $a[self::FIELD_DEFINITION_CANONICAL] = (string)$v;
            $a[self::FIELD_DEFINITION_CANONICAL_EXT] = $v;
        }
        if (null !== ($v = $this->getDefinitionUri())) {
            $a[self::FIELD_DEFINITION_URI] = (string)$v;
            $a[self::FIELD_DEFINITION_URI_EXT] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = (string)$v;
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if ([] !== ($vs = $this->getDocumentation())) {
            $a[self::FIELD_DOCUMENTATION] = $vs;
        }
        if ([] !== ($vs = $this->getDynamicValue())) {
            $a[self::FIELD_DYNAMIC_VALUE] = $vs;
        }
        if ([] !== ($vs = $this->getGoalId())) {
            $a[self::FIELD_GOAL_ID] = [];
            $a[self::FIELD_GOAL_ID_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_GOAL_ID][] = (string)$v;
                $a[self::FIELD_GOAL_ID_EXT][] = $v;
            }
        }
        if (null !== ($v = $this->getGroupingBehavior())) {
            $a[self::FIELD_GROUPING_BEHAVIOR] = $v;
        }
        if ([] !== ($vs = $this->getInput())) {
            $a[self::FIELD_INPUT] = $vs;
        }
        if ([] !== ($vs = $this->getOutput())) {
            $a[self::FIELD_OUTPUT] = $vs;
        }
        if ([] !== ($vs = $this->getParticipant())) {
            $a[self::FIELD_PARTICIPANT] = $vs;
        }
        if (null !== ($v = $this->getPrecheckBehavior())) {
            $a[self::FIELD_PRECHECK_BEHAVIOR] = $v;
        }
        if (null !== ($v = $this->getPrefix())) {
            $a[self::FIELD_PREFIX] = (string)$v;
            $a[self::FIELD_PREFIX_EXT] = $v;
        }
        if (null !== ($v = $this->getPriority())) {
            $a[self::FIELD_PRIORITY] = $v;
        }
        if ([] !== ($vs = $this->getReason())) {
            $a[self::FIELD_REASON] = $vs;
        }
        if ([] !== ($vs = $this->getRelatedAction())) {
            $a[self::FIELD_RELATED_ACTION] = $vs;
        }
        if (null !== ($v = $this->getRequiredBehavior())) {
            $a[self::FIELD_REQUIRED_BEHAVIOR] = $v;
        }
        if (null !== ($v = $this->getSelectionBehavior())) {
            $a[self::FIELD_SELECTION_BEHAVIOR] = $v;
        }
        if (null !== ($v = $this->getSubjectCodeableConcept())) {
            $a[self::FIELD_SUBJECT_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getSubjectReference())) {
            $a[self::FIELD_SUBJECT_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getTextEquivalent())) {
            $a[self::FIELD_TEXT_EQUIVALENT] = (string)$v;
            $a[self::FIELD_TEXT_EQUIVALENT_EXT] = $v;
        }
        if (null !== ($v = $this->getTimingAge())) {
            $a[self::FIELD_TIMING_AGE] = $v;
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            $a[self::FIELD_TIMING_DATE_TIME] = (string)$v;
            $a[self::FIELD_TIMING_DATE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getTimingDuration())) {
            $a[self::FIELD_TIMING_DURATION] = $v;
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            $a[self::FIELD_TIMING_PERIOD] = $v;
        }
        if (null !== ($v = $this->getTimingRange())) {
            $a[self::FIELD_TIMING_RANGE] = $v;
        }
        if (null !== ($v = $this->getTimingTiming())) {
            $a[self::FIELD_TIMING_TIMING] = $v;
        }
        if (null !== ($v = $this->getTitle())) {
            $a[self::FIELD_TITLE] = (string)$v;
            $a[self::FIELD_TITLE_EXT] = $v;
        }
        if (null !== ($v = $this->getTransform())) {
            $a[self::FIELD_TRANSFORM] = (string)$v;
            $a[self::FIELD_TRANSFORM_EXT] = $v;
        }
        if ([] !== ($vs = $this->getTrigger())) {
            $a[self::FIELD_TRIGGER] = $vs;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}