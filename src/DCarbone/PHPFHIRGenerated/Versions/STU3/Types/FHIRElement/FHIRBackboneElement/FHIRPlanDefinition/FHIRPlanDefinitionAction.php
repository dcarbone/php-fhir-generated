<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 21:54+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionCardinalityBehaviorList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionGroupingBehaviorList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionPrecheckBehaviorList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionRequiredBehaviorList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionSelectionBehaviorList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionCardinalityBehavior;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionGroupingBehavior;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionPrecheckBehavior;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionRequiredBehavior;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionSelectionBehavior;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRelatedArtifact;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTriggerDefinition;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * This resource allows for the definition of various types of plans as a sharable,
 * consumable, and executable artifact. The resource is general enough to support
 * the description of a broad range of clinical artifacts such as clinical decision
 * support rules, order sets and protocols.
 */
class FHIRPlanDefinitionAction extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION;

    /* class_default.php:50 */
    public const FIELD_LABEL = 'label';
    public const FIELD_LABEL_EXT = '_label';
    public const FIELD_TITLE = 'title';
    public const FIELD_TITLE_EXT = '_title';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_TEXT_EQUIVALENT = 'textEquivalent';
    public const FIELD_TEXT_EQUIVALENT_EXT = '_textEquivalent';
    public const FIELD_CODE = 'code';
    public const FIELD_REASON = 'reason';
    public const FIELD_DOCUMENTATION = 'documentation';
    public const FIELD_GOAL_ID = 'goalId';
    public const FIELD_GOAL_ID_EXT = '_goalId';
    public const FIELD_TRIGGER_DEFINITION = 'triggerDefinition';
    public const FIELD_CONDITION = 'condition';
    public const FIELD_INPUT = 'input';
    public const FIELD_OUTPUT = 'output';
    public const FIELD_RELATED_ACTION = 'relatedAction';
    public const FIELD_TIMING_DATE_TIME = 'timingDateTime';
    public const FIELD_TIMING_DATE_TIME_EXT = '_timingDateTime';
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
    public const FIELD_DEFINITION = 'definition';
    public const FIELD_TRANSFORM = 'transform';
    public const FIELD_DYNAMIC_VALUE = 'dynamicValue';
    public const FIELD_ACTION = 'action';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_LABEL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TITLE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TEXT_EQUIVALENT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TIMING_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_GROUPING_BEHAVIOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SELECTION_BEHAVIOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_REQUIRED_BEHAVIOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PRECHECK_BEHAVIOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CARDINALITY_BEHAVIOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A user-visible label for the action.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $label;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The title of the action displayed to a user.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $title;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description of the action used to provide a summary to display to the
     * user.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $description;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A text equivalent of the action to be performed. This provides a
     * human-interpretable description of the action when the definition is consumed by
     * a system that may not be capable of interpreting it dynamically.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $textEquivalent;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that provides meaning for the action or action group. For example, a
     * section may have a LOINC code for a the section of a documentation template.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRelatedArtifact[] 
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
     * element defined within this plan definition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId[] 
     */
    protected array $goalId;
    /**
     * A description of a triggering event.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of when the action should be triggered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTriggerDefinition[] 
     */
    protected array $triggerDefinition;
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * An expression that describes applicability criteria, or start/stop conditions
     * for the action.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition[] 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement[] 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement[] 
     */
    protected array $output;
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction[] 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $timingDateTime;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $timingPeriod;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $timingDuration;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming 
     */
    protected FHIRTiming $timingTiming;
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Indicates who should participate in performing the action described.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant[] 
     */
    protected array $participant;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of action to perform (create, update, remove).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $type;
    /**
     * Defines organization behavior of a group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionGroupingBehavior 
     */
    protected FHIRActionGroupingBehavior $groupingBehavior;
    /**
     * Defines selection behavior of a group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionSelectionBehavior 
     */
    protected FHIRActionSelectionBehavior $selectionBehavior;
    /**
     * Defines requiredness behavior for selecting an action or an action group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the requiredness behavior for the action.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionRequiredBehavior 
     */
    protected FHIRActionRequiredBehavior $requiredBehavior;
    /**
     * Defines selection frequency behavior for an action or group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action should usually be preselected.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionPrecheckBehavior 
     */
    protected FHIRActionPrecheckBehavior $precheckBehavior;
    /**
     * Defines behavior for an action or a group for how many times that item may be
     * repeated
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionCardinalityBehavior 
     */
    protected FHIRActionCardinalityBehavior $cardinalityBehavior;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, or a PlanDefinition that describes a series of actions to be taken.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $definition;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue[] 
     */
    protected array $dynamicValue;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction[] 
     */
    protected array $action;

    /* constructor.php:61 */
    /**
     * FHIRPlanDefinitionAction Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $label
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $title
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $description
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $textEquivalent
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] $reason
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRelatedArtifact[] $documentation
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId[] $goalId
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTriggerDefinition[] $triggerDefinition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition[] $condition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement[] $input
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement[] $output
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction[] $relatedAction
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $timingDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $timingPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration $timingDuration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange $timingRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming $timingTiming
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant[] $participant
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionGroupingBehaviorList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionGroupingBehavior $groupingBehavior
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionSelectionBehaviorList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionSelectionBehavior $selectionBehavior
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionRequiredBehaviorList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionRequiredBehavior $requiredBehavior
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionPrecheckBehaviorList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionPrecheckBehavior $precheckBehavior
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionCardinalityBehaviorList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionCardinalityBehavior $cardinalityBehavior
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $definition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $transform
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue[] $dynamicValue
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction[] $action
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $label = null,
                                null|string|FHIRStringPrimitive|FHIRString $title = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|string|FHIRStringPrimitive|FHIRString $textEquivalent = null,
                                null|iterable $code = null,
                                null|iterable $reason = null,
                                null|iterable $documentation = null,
                                null|iterable $goalId = null,
                                null|iterable $triggerDefinition = null,
                                null|iterable $condition = null,
                                null|iterable $input = null,
                                null|iterable $output = null,
                                null|iterable $relatedAction = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $timingDateTime = null,
                                null|FHIRPeriod $timingPeriod = null,
                                null|FHIRDuration $timingDuration = null,
                                null|FHIRRange $timingRange = null,
                                null|FHIRTiming $timingTiming = null,
                                null|iterable $participant = null,
                                null|FHIRCoding $type = null,
                                null|string|FHIRActionGroupingBehaviorList|FHIRActionGroupingBehavior $groupingBehavior = null,
                                null|string|FHIRActionSelectionBehaviorList|FHIRActionSelectionBehavior $selectionBehavior = null,
                                null|string|FHIRActionRequiredBehaviorList|FHIRActionRequiredBehavior $requiredBehavior = null,
                                null|string|FHIRActionPrecheckBehaviorList|FHIRActionPrecheckBehavior $precheckBehavior = null,
                                null|string|FHIRActionCardinalityBehaviorList|FHIRActionCardinalityBehavior $cardinalityBehavior = null,
                                null|FHIRReference $definition = null,
                                null|FHIRReference $transform = null,
                                null|iterable $dynamicValue = null,
                                null|iterable $action = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $label) {
            $this->setLabel($label);
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
        if (null !== $triggerDefinition) {
            $this->setTriggerDefinition(...$triggerDefinition);
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
        if (null !== $definition) {
            $this->setDefinition($definition);
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

    /* class_default.php:139 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:165 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A user-visible label for the action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getLabel(): null|FHIRString
    {
        return $this->label ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A user-visible label for the action.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $label
     * @return static
     */
    public function setLabel(null|string|FHIRStringPrimitive|FHIRString $label): self
    {
        if (null === $label) {
            unset($this->label);
            return $this;
        }
        if (!($label instanceof FHIRString)) {
            $label = new FHIRString(value: $label);
        }
        $this->label = $label;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The title of the action displayed to a user.
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
     * The title of the action displayed to a user.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $title
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description of the action used to provide a summary to display to the
     * user.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description of the action used to provide a summary to display to the
     * user.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRString)) {
            $description = new FHIRString(value: $description);
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A text equivalent of the action to be performed. This provides a
     * human-interpretable description of the action when the definition is consumed by
     * a system that may not be capable of interpreting it dynamically.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getTextEquivalent(): null|FHIRString
    {
        return $this->textEquivalent ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A text equivalent of the action to be performed. This provides a
     * human-interpretable description of the action when the definition is consumed by
     * a system that may not be capable of interpreting it dynamically.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $textEquivalent
     * @return static
     */
    public function setTextEquivalent(null|string|FHIRStringPrimitive|FHIRString $textEquivalent): self
    {
        if (null === $textEquivalent) {
            unset($this->textEquivalent);
            return $this;
        }
        if (!($textEquivalent instanceof FHIRString)) {
            $textEquivalent = new FHIRString(value: $textEquivalent);
        }
        $this->textEquivalent = $textEquivalent;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that provides meaning for the action or action group. For example, a
     * section may have a LOINC code for a the section of a documentation template.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCode(): array
    {
        return $this->code ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getCodeIterator(): iterable
    {
        if (!isset($this->code)) {
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
     * A code that provides meaning for the action or action group. For example, a
     * section may have a LOINC code for a the section of a documentation template.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $code
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
     * A code that provides meaning for the action or action group. For example, a
     * section may have a LOINC code for a the section of a documentation template.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept ...$code
     * @return static
     */
    public function setCode(FHIRCodeableConcept ...$code): self
    {
        if ([] === $code) {
            unset($this->code);
            return $this;
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason(): array
    {
        return $this->reason ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getReasonIterator(): iterable
    {
        if (!isset($this->reason)) {
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $reason
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept ...$reason
     * @return static
     */
    public function setReason(FHIRCodeableConcept ...$reason): self
    {
        if ([] === $reason) {
            unset($this->reason);
            return $this;
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRelatedArtifact[]
     */
    public function getDocumentation(): array
    {
        return $this->documentation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRelatedArtifact>
     */
    public function getDocumentationIterator(): iterable
    {
        if (!isset($this->documentation)) {
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRelatedArtifact $documentation
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRelatedArtifact ...$documentation
     * @return static
     */
    public function setDocumentation(FHIRRelatedArtifact ...$documentation): self
    {
        if ([] === $documentation) {
            unset($this->documentation);
            return $this;
        }
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
     * element defined within this plan definition.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId[]
     */
    public function getGoalId(): array
    {
        return $this->goalId ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId>
     */
    public function getGoalIdIterator(): iterable
    {
        if (!isset($this->goalId)) {
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
     * element defined within this plan definition.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $goalId
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
     * element defined within this plan definition.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId ...$goalId
     * @return static
     */
    public function setGoalId(string|FHIRIdPrimitive|FHIRId ...$goalId): self
    {
        if ([] === $goalId) {
            unset($this->goalId);
            return $this;
        }
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
     * A description of a triggering event.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of when the action should be triggered.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTriggerDefinition[]
     */
    public function getTriggerDefinition(): array
    {
        return $this->triggerDefinition ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTriggerDefinition>
     */
    public function getTriggerDefinitionIterator(): iterable
    {
        if (!isset($this->triggerDefinition)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->triggerDefinition);
    }

    /**
     * A description of a triggering event.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of when the action should be triggered.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTriggerDefinition $triggerDefinition
     * @return static
     */
    public function addTriggerDefinition(FHIRTriggerDefinition $triggerDefinition): self
    {
        if (!isset($this->triggerDefinition)) {
            $this->triggerDefinition = [];
        }
        $this->triggerDefinition[] = $triggerDefinition;
        return $this;
    }

    /**
     * A description of a triggering event.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of when the action should be triggered.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTriggerDefinition ...$triggerDefinition
     * @return static
     */
    public function setTriggerDefinition(FHIRTriggerDefinition ...$triggerDefinition): self
    {
        if ([] === $triggerDefinition) {
            unset($this->triggerDefinition);
            return $this;
        }
        $this->triggerDefinition = $triggerDefinition;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * An expression that describes applicability criteria, or start/stop conditions
     * for the action.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition[]
     */
    public function getCondition(): array
    {
        return $this->condition ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition>
     */
    public function getConditionIterator(): iterable
    {
        if (!isset($this->condition)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->condition);
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * An expression that describes applicability criteria, or start/stop conditions
     * for the action.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition $condition
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
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * An expression that describes applicability criteria, or start/stop conditions
     * for the action.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition ...$condition
     * @return static
     */
    public function setCondition(FHIRPlanDefinitionCondition ...$condition): self
    {
        if ([] === $condition) {
            unset($this->condition);
            return $this;
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement[]
     */
    public function getInput(): array
    {
        return $this->input ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement>
     */
    public function getInputIterator(): iterable
    {
        if (!isset($this->input)) {
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement $input
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement ...$input
     * @return static
     */
    public function setInput(FHIRDataRequirement ...$input): self
    {
        if ([] === $input) {
            unset($this->input);
            return $this;
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement[]
     */
    public function getOutput(): array
    {
        return $this->output ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement>
     */
    public function getOutputIterator(): iterable
    {
        if (!isset($this->output)) {
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement $output
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement ...$output
     * @return static
     */
    public function setOutput(FHIRDataRequirement ...$output): self
    {
        if ([] === $output) {
            unset($this->output);
            return $this;
        }
        $this->output = $output;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction[]
     */
    public function getRelatedAction(): array
    {
        return $this->relatedAction ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction>
     */
    public function getRelatedActionIterator(): iterable
    {
        if (!isset($this->relatedAction)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->relatedAction);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction $relatedAction
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
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction ...$relatedAction
     * @return static
     */
    public function setRelatedAction(FHIRPlanDefinitionRelatedAction ...$relatedAction): self
    {
        if ([] === $relatedAction) {
            unset($this->relatedAction);
            return $this;
        }
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
     * An optional value describing when the action should be performed.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $timingDateTime
     * @return static
     */
    public function setTimingDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $timingDateTime): self
    {
        if (null === $timingDateTime) {
            unset($this->timingDateTime);
            return $this;
        }
        if (!($timingDateTime instanceof FHIRDateTime)) {
            $timingDateTime = new FHIRDateTime(value: $timingDateTime);
        }
        $this->timingDateTime = $timingDateTime;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
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
     * An optional value describing when the action should be performed.
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
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration $timingDuration
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
     * An optional value describing when the action should be performed.
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
     * An optional value describing when the action should be performed.
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
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Indicates who should participate in performing the action described.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant[]
     */
    public function getParticipant(): array
    {
        return $this->participant ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant>
     */
    public function getParticipantIterator(): iterable
    {
        if (!isset($this->participant)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->participant);
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Indicates who should participate in performing the action described.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant $participant
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
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Indicates who should participate in performing the action described.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant ...$participant
     * @return static
     */
    public function setParticipant(FHIRPlanDefinitionParticipant ...$participant): self
    {
        if ([] === $participant) {
            unset($this->participant);
            return $this;
        }
        $this->participant = $participant;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of action to perform (create, update, remove).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding
     */
    public function getType(): null|FHIRCoding
    {
        return $this->type ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of action to perform (create, update, remove).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding $type
     * @return static
     */
    public function setType(null|FHIRCoding $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Defines organization behavior of a group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionGroupingBehavior
     */
    public function getGroupingBehavior(): null|FHIRActionGroupingBehavior
    {
        return $this->groupingBehavior ?? null;
    }

    /**
     * Defines organization behavior of a group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionGroupingBehaviorList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionGroupingBehavior $groupingBehavior
     * @return static
     */
    public function setGroupingBehavior(null|string|FHIRActionGroupingBehaviorList|FHIRActionGroupingBehavior $groupingBehavior): self
    {
        if (null === $groupingBehavior) {
            unset($this->groupingBehavior);
            return $this;
        }
        if (!($groupingBehavior instanceof FHIRActionGroupingBehavior)) {
            $groupingBehavior = new FHIRActionGroupingBehavior(value: $groupingBehavior);
        }
        $this->groupingBehavior = $groupingBehavior;
        return $this;
    }

    /**
     * Defines selection behavior of a group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionSelectionBehavior
     */
    public function getSelectionBehavior(): null|FHIRActionSelectionBehavior
    {
        return $this->selectionBehavior ?? null;
    }

    /**
     * Defines selection behavior of a group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionSelectionBehaviorList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionSelectionBehavior $selectionBehavior
     * @return static
     */
    public function setSelectionBehavior(null|string|FHIRActionSelectionBehaviorList|FHIRActionSelectionBehavior $selectionBehavior): self
    {
        if (null === $selectionBehavior) {
            unset($this->selectionBehavior);
            return $this;
        }
        if (!($selectionBehavior instanceof FHIRActionSelectionBehavior)) {
            $selectionBehavior = new FHIRActionSelectionBehavior(value: $selectionBehavior);
        }
        $this->selectionBehavior = $selectionBehavior;
        return $this;
    }

    /**
     * Defines requiredness behavior for selecting an action or an action group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the requiredness behavior for the action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionRequiredBehavior
     */
    public function getRequiredBehavior(): null|FHIRActionRequiredBehavior
    {
        return $this->requiredBehavior ?? null;
    }

    /**
     * Defines requiredness behavior for selecting an action or an action group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the requiredness behavior for the action.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionRequiredBehaviorList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionRequiredBehavior $requiredBehavior
     * @return static
     */
    public function setRequiredBehavior(null|string|FHIRActionRequiredBehaviorList|FHIRActionRequiredBehavior $requiredBehavior): self
    {
        if (null === $requiredBehavior) {
            unset($this->requiredBehavior);
            return $this;
        }
        if (!($requiredBehavior instanceof FHIRActionRequiredBehavior)) {
            $requiredBehavior = new FHIRActionRequiredBehavior(value: $requiredBehavior);
        }
        $this->requiredBehavior = $requiredBehavior;
        return $this;
    }

    /**
     * Defines selection frequency behavior for an action or group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action should usually be preselected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionPrecheckBehavior
     */
    public function getPrecheckBehavior(): null|FHIRActionPrecheckBehavior
    {
        return $this->precheckBehavior ?? null;
    }

    /**
     * Defines selection frequency behavior for an action or group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action should usually be preselected.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionPrecheckBehaviorList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionPrecheckBehavior $precheckBehavior
     * @return static
     */
    public function setPrecheckBehavior(null|string|FHIRActionPrecheckBehaviorList|FHIRActionPrecheckBehavior $precheckBehavior): self
    {
        if (null === $precheckBehavior) {
            unset($this->precheckBehavior);
            return $this;
        }
        if (!($precheckBehavior instanceof FHIRActionPrecheckBehavior)) {
            $precheckBehavior = new FHIRActionPrecheckBehavior(value: $precheckBehavior);
        }
        $this->precheckBehavior = $precheckBehavior;
        return $this;
    }

    /**
     * Defines behavior for an action or a group for how many times that item may be
     * repeated
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionCardinalityBehavior
     */
    public function getCardinalityBehavior(): null|FHIRActionCardinalityBehavior
    {
        return $this->cardinalityBehavior ?? null;
    }

    /**
     * Defines behavior for an action or a group for how many times that item may be
     * repeated
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionCardinalityBehaviorList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionCardinalityBehavior $cardinalityBehavior
     * @return static
     */
    public function setCardinalityBehavior(null|string|FHIRActionCardinalityBehaviorList|FHIRActionCardinalityBehavior $cardinalityBehavior): self
    {
        if (null === $cardinalityBehavior) {
            unset($this->cardinalityBehavior);
            return $this;
        }
        if (!($cardinalityBehavior instanceof FHIRActionCardinalityBehavior)) {
            $cardinalityBehavior = new FHIRActionCardinalityBehavior(value: $cardinalityBehavior);
        }
        $this->cardinalityBehavior = $cardinalityBehavior;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, or a PlanDefinition that describes a series of actions to be taken.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getDefinition(): null|FHIRReference
    {
        return $this->definition ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, or a PlanDefinition that describes a series of actions to be taken.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $definition
     * @return static
     */
    public function setDefinition(null|FHIRReference $definition): self
    {
        if (null === $definition) {
            unset($this->definition);
            return $this;
        }
        $this->definition = $definition;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue[]
     */
    public function getDynamicValue(): array
    {
        return $this->dynamicValue ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue>
     */
    public function getDynamicValueIterator(): iterable
    {
        if (!isset($this->dynamicValue)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->dynamicValue);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue $dynamicValue
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
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Customizations that should be applied to the statically defined resource. For
     * example, if the dosage of a medication must be computed based on the patient's
     * weight, a customization would be used to specify an expression that calculated
     * the weight, and the path on the resource that would contain the result.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue ...$dynamicValue
     * @return static
     */
    public function setDynamicValue(FHIRPlanDefinitionDynamicValue ...$dynamicValue): self
    {
        if ([] === $dynamicValue) {
            unset($this->dynamicValue);
            return $this;
        }
        $this->dynamicValue = $dynamicValue;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction[]
     */
    public function getAction(): array
    {
        return $this->action ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction>
     */
    public function getActionIterator(): iterable
    {
        if (!isset($this->action)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->action);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction $action
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
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Sub actions that are contained within the action. The behavior of this action
     * determines the functionality of the sub-actions. For example, a selection
     * behavior of at-most-one indicates that of the sub-actions, at most one may be
     * chosen as part of realizing the action definition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction ...$action
     * @return static
     */
    public function setAction(FHIRPlanDefinitionAction ...$action): self
    {
        if ([] === $action) {
            unset($this->action);
            return $this;
        }
        $this->action = $action;
        return $this;
    }

    /* class_default.php:192 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LABEL === $cen) {
                $type->setLabel(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TITLE === $cen) {
                $type->setTitle(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT_EQUIVALENT === $cen) {
                $type->setTextEquivalent(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->addCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REASON === $cen) {
                $type->addReason(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOCUMENTATION === $cen) {
                $type->addDocumentation(FHIRRelatedArtifact::xmlUnserialize($ce, $config));
            } else if (self::FIELD_GOAL_ID === $cen) {
                $type->addGoalId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TRIGGER_DEFINITION === $cen) {
                $type->addTriggerDefinition(FHIRTriggerDefinition::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONDITION === $cen) {
                $type->addCondition(FHIRPlanDefinitionCondition::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INPUT === $cen) {
                $type->addInput(FHIRDataRequirement::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OUTPUT === $cen) {
                $type->addOutput(FHIRDataRequirement::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RELATED_ACTION === $cen) {
                $type->addRelatedAction(FHIRPlanDefinitionRelatedAction::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING_DATE_TIME === $cen) {
                $type->setTimingDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING_PERIOD === $cen) {
                $type->setTimingPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING_DURATION === $cen) {
                $type->setTimingDuration(FHIRDuration::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING_RANGE === $cen) {
                $type->setTimingRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING_TIMING === $cen) {
                $type->setTimingTiming(FHIRTiming::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARTICIPANT === $cen) {
                $type->addParticipant(FHIRPlanDefinitionParticipant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_GROUPING_BEHAVIOR === $cen) {
                $type->setGroupingBehavior(FHIRActionGroupingBehavior::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SELECTION_BEHAVIOR === $cen) {
                $type->setSelectionBehavior(FHIRActionSelectionBehavior::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REQUIRED_BEHAVIOR === $cen) {
                $type->setRequiredBehavior(FHIRActionRequiredBehavior::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRECHECK_BEHAVIOR === $cen) {
                $type->setPrecheckBehavior(FHIRActionPrecheckBehavior::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CARDINALITY_BEHAVIOR === $cen) {
                $type->setCardinalityBehavior(FHIRActionCardinalityBehavior::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITION === $cen) {
                $type->setDefinition(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TRANSFORM === $cen) {
                $type->setTransform(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DYNAMIC_VALUE === $cen) {
                $type->addDynamicValue(FHIRPlanDefinitionDynamicValue::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACTION === $cen) {
                $type->addAction(FHIRPlanDefinitionAction::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LABEL])) {
            if (isset($type->label)) {
                $type->label->setValue((string)$attributes[self::FIELD_LABEL]);
            } else {
                $type->setLabel((string)$attributes[self::FIELD_LABEL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LABEL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TITLE])) {
            if (isset($type->title)) {
                $type->title->setValue((string)$attributes[self::FIELD_TITLE]);
            } else {
                $type->setTitle((string)$attributes[self::FIELD_TITLE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TITLE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DESCRIPTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TEXT_EQUIVALENT])) {
            if (isset($type->textEquivalent)) {
                $type->textEquivalent->setValue((string)$attributes[self::FIELD_TEXT_EQUIVALENT]);
            } else {
                $type->setTextEquivalent((string)$attributes[self::FIELD_TEXT_EQUIVALENT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TEXT_EQUIVALENT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TIMING_DATE_TIME])) {
            if (isset($type->timingDateTime)) {
                $type->timingDateTime->setValue((string)$attributes[self::FIELD_TIMING_DATE_TIME]);
            } else {
                $type->setTimingDateTime((string)$attributes[self::FIELD_TIMING_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TIMING_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_GROUPING_BEHAVIOR])) {
            if (isset($type->groupingBehavior)) {
                $type->groupingBehavior->setValue((string)$attributes[self::FIELD_GROUPING_BEHAVIOR]);
            } else {
                $type->setGroupingBehavior((string)$attributes[self::FIELD_GROUPING_BEHAVIOR]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_GROUPING_BEHAVIOR, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SELECTION_BEHAVIOR])) {
            if (isset($type->selectionBehavior)) {
                $type->selectionBehavior->setValue((string)$attributes[self::FIELD_SELECTION_BEHAVIOR]);
            } else {
                $type->setSelectionBehavior((string)$attributes[self::FIELD_SELECTION_BEHAVIOR]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SELECTION_BEHAVIOR, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_REQUIRED_BEHAVIOR])) {
            if (isset($type->requiredBehavior)) {
                $type->requiredBehavior->setValue((string)$attributes[self::FIELD_REQUIRED_BEHAVIOR]);
            } else {
                $type->setRequiredBehavior((string)$attributes[self::FIELD_REQUIRED_BEHAVIOR]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_REQUIRED_BEHAVIOR, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PRECHECK_BEHAVIOR])) {
            if (isset($type->precheckBehavior)) {
                $type->precheckBehavior->setValue((string)$attributes[self::FIELD_PRECHECK_BEHAVIOR]);
            } else {
                $type->setPrecheckBehavior((string)$attributes[self::FIELD_PRECHECK_BEHAVIOR]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PRECHECK_BEHAVIOR, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CARDINALITY_BEHAVIOR])) {
            if (isset($type->cardinalityBehavior)) {
                $type->cardinalityBehavior->setValue((string)$attributes[self::FIELD_CARDINALITY_BEHAVIOR]);
            } else {
                $type->setCardinalityBehavior((string)$attributes[self::FIELD_CARDINALITY_BEHAVIOR]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CARDINALITY_BEHAVIOR, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->label) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LABEL]) {
            $xw->writeAttribute(self::FIELD_LABEL, $this->label->_getValueAsString());
        }
        if (isset($this->title) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TITLE]) {
            $xw->writeAttribute(self::FIELD_TITLE, $this->title->_getValueAsString());
        }
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getValueAsString());
        }
        if (isset($this->textEquivalent) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TEXT_EQUIVALENT]) {
            $xw->writeAttribute(self::FIELD_TEXT_EQUIVALENT, $this->textEquivalent->_getValueAsString());
        }
        if (isset($this->timingDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TIMING_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_TIMING_DATE_TIME, $this->timingDateTime->_getValueAsString());
        }
        if (isset($this->groupingBehavior) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_GROUPING_BEHAVIOR]) {
            $xw->writeAttribute(self::FIELD_GROUPING_BEHAVIOR, $this->groupingBehavior->_getValueAsString());
        }
        if (isset($this->selectionBehavior) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SELECTION_BEHAVIOR]) {
            $xw->writeAttribute(self::FIELD_SELECTION_BEHAVIOR, $this->selectionBehavior->_getValueAsString());
        }
        if (isset($this->requiredBehavior) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_REQUIRED_BEHAVIOR]) {
            $xw->writeAttribute(self::FIELD_REQUIRED_BEHAVIOR, $this->requiredBehavior->_getValueAsString());
        }
        if (isset($this->precheckBehavior) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PRECHECK_BEHAVIOR]) {
            $xw->writeAttribute(self::FIELD_PRECHECK_BEHAVIOR, $this->precheckBehavior->_getValueAsString());
        }
        if (isset($this->cardinalityBehavior) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CARDINALITY_BEHAVIOR]) {
            $xw->writeAttribute(self::FIELD_CARDINALITY_BEHAVIOR, $this->cardinalityBehavior->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->label)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LABEL]
                || $this->label->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LABEL);
            $this->label->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LABEL]);
            $xw->endElement();
        }
        if (isset($this->title)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TITLE]
                || $this->title->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TITLE);
            $this->title->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TITLE]);
            $xw->endElement();
        }
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->textEquivalent)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TEXT_EQUIVALENT]
                || $this->textEquivalent->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TEXT_EQUIVALENT);
            $this->textEquivalent->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TEXT_EQUIVALENT]);
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
        if (isset($this->goalId) && [] !== $this->goalId) {
            foreach($this->goalId as $v) {
                $xw->startElement(self::FIELD_GOAL_ID);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->triggerDefinition)) {
            foreach ($this->triggerDefinition as $v) {
                $xw->startElement(self::FIELD_TRIGGER_DEFINITION);
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
        if (isset($this->groupingBehavior)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_GROUPING_BEHAVIOR]
                || $this->groupingBehavior->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_GROUPING_BEHAVIOR);
            $this->groupingBehavior->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_GROUPING_BEHAVIOR]);
            $xw->endElement();
        }
        if (isset($this->selectionBehavior)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SELECTION_BEHAVIOR]
                || $this->selectionBehavior->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SELECTION_BEHAVIOR);
            $this->selectionBehavior->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SELECTION_BEHAVIOR]);
            $xw->endElement();
        }
        if (isset($this->requiredBehavior)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_REQUIRED_BEHAVIOR]
                || $this->requiredBehavior->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_REQUIRED_BEHAVIOR);
            $this->requiredBehavior->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_REQUIRED_BEHAVIOR]);
            $xw->endElement();
        }
        if (isset($this->precheckBehavior)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PRECHECK_BEHAVIOR]
                || $this->precheckBehavior->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PRECHECK_BEHAVIOR);
            $this->precheckBehavior->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PRECHECK_BEHAVIOR]);
            $xw->endElement();
        }
        if (isset($this->cardinalityBehavior)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CARDINALITY_BEHAVIOR]
                || $this->cardinalityBehavior->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CARDINALITY_BEHAVIOR);
            $this->cardinalityBehavior->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CARDINALITY_BEHAVIOR]);
            $xw->endElement();
        }
        if (isset($this->definition)) {
            $xw->startElement(self::FIELD_DEFINITION);
            $this->definition->xmlSerialize($xw, $config);
            $xw->endElement();
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
        if (isset($this->action)) {
            foreach ($this->action as $v) {
                $xw->startElement(self::FIELD_ACTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->label)
            || isset($json->_label)
            || property_exists($json, self::FIELD_LABEL)
            || property_exists($json, self::FIELD_LABEL_EXT)) {
            $v = $json->_label ?? new \stdClass();
            $v->value = $json->label ?? null;
            $type->setLabel(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->title)
            || isset($json->_title)
            || property_exists($json, self::FIELD_TITLE)
            || property_exists($json, self::FIELD_TITLE_EXT)) {
            $v = $json->_title ?? new \stdClass();
            $v->value = $json->title ?? null;
            $type->setTitle(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->description)
            || isset($json->_description)
            || property_exists($json, self::FIELD_DESCRIPTION)
            || property_exists($json, self::FIELD_DESCRIPTION_EXT)) {
            $v = $json->_description ?? new \stdClass();
            $v->value = $json->description ?? null;
            $type->setDescription(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->textEquivalent)
            || isset($json->_textEquivalent)
            || property_exists($json, self::FIELD_TEXT_EQUIVALENT)
            || property_exists($json, self::FIELD_TEXT_EQUIVALENT_EXT)) {
            $v = $json->_textEquivalent ?? new \stdClass();
            $v->value = $json->textEquivalent ?? null;
            $type->setTextEquivalent(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->code) || property_exists($json, self::FIELD_CODE)) {
            if (is_object($json->code)) {
                $vals = [$json->code];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CODE, true);
            } else {
                $vals = $json->code;
            }
            foreach($vals as $v) {
                $type->addCode(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->reason) || property_exists($json, self::FIELD_REASON)) {
            if (is_object($json->reason)) {
                $vals = [$json->reason];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_REASON, true);
            } else {
                $vals = $json->reason;
            }
            foreach($vals as $v) {
                $type->addReason(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->documentation) || property_exists($json, self::FIELD_DOCUMENTATION)) {
            if (is_object($json->documentation)) {
                $vals = [$json->documentation];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DOCUMENTATION, true);
            } else {
                $vals = $json->documentation;
            }
            foreach($vals as $v) {
                $type->addDocumentation(FHIRRelatedArtifact::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->goalId)
            || isset($json->_goalId)
            || property_exists($json, self::FIELD_GOAL_ID)
            || property_exists($json, self::FIELD_GOAL_ID_EXT)) {
            $vals = (array)($json->goalId ?? []);
            $exts = (array)($json->FIELD_GOAL_ID_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addGoalId(FHIRId::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->triggerDefinition) || property_exists($json, self::FIELD_TRIGGER_DEFINITION)) {
            if (is_object($json->triggerDefinition)) {
                $vals = [$json->triggerDefinition];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_TRIGGER_DEFINITION, true);
            } else {
                $vals = $json->triggerDefinition;
            }
            foreach($vals as $v) {
                $type->addTriggerDefinition(FHIRTriggerDefinition::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->condition) || property_exists($json, self::FIELD_CONDITION)) {
            if (is_object($json->condition)) {
                $vals = [$json->condition];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONDITION, true);
            } else {
                $vals = $json->condition;
            }
            foreach($vals as $v) {
                $type->addCondition(FHIRPlanDefinitionCondition::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->input) || property_exists($json, self::FIELD_INPUT)) {
            if (is_object($json->input)) {
                $vals = [$json->input];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_INPUT, true);
            } else {
                $vals = $json->input;
            }
            foreach($vals as $v) {
                $type->addInput(FHIRDataRequirement::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->output) || property_exists($json, self::FIELD_OUTPUT)) {
            if (is_object($json->output)) {
                $vals = [$json->output];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_OUTPUT, true);
            } else {
                $vals = $json->output;
            }
            foreach($vals as $v) {
                $type->addOutput(FHIRDataRequirement::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->relatedAction) || property_exists($json, self::FIELD_RELATED_ACTION)) {
            if (is_object($json->relatedAction)) {
                $vals = [$json->relatedAction];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_RELATED_ACTION, true);
            } else {
                $vals = $json->relatedAction;
            }
            foreach($vals as $v) {
                $type->addRelatedAction(FHIRPlanDefinitionRelatedAction::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->timingDateTime)
            || isset($json->_timingDateTime)
            || property_exists($json, self::FIELD_TIMING_DATE_TIME)
            || property_exists($json, self::FIELD_TIMING_DATE_TIME_EXT)) {
            $v = $json->_timingDateTime ?? new \stdClass();
            $v->value = $json->timingDateTime ?? null;
            $type->setTimingDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($json->timingPeriod) || property_exists($json, self::FIELD_TIMING_PERIOD)) {
            if (is_array($json->timingPeriod)) {
                $type->setTimingPeriod(FHIRPeriod::jsonUnserialize(reset($json->timingPeriod), $config));
            } else {
                $type->setTimingPeriod(FHIRPeriod::jsonUnserialize($json->timingPeriod, $config));
            }
        }
        if (isset($json->timingDuration) || property_exists($json, self::FIELD_TIMING_DURATION)) {
            if (is_array($json->timingDuration)) {
                $type->setTimingDuration(FHIRDuration::jsonUnserialize(reset($json->timingDuration), $config));
            } else {
                $type->setTimingDuration(FHIRDuration::jsonUnserialize($json->timingDuration, $config));
            }
        }
        if (isset($json->timingRange) || property_exists($json, self::FIELD_TIMING_RANGE)) {
            if (is_array($json->timingRange)) {
                $type->setTimingRange(FHIRRange::jsonUnserialize(reset($json->timingRange), $config));
            } else {
                $type->setTimingRange(FHIRRange::jsonUnserialize($json->timingRange, $config));
            }
        }
        if (isset($json->timingTiming) || property_exists($json, self::FIELD_TIMING_TIMING)) {
            if (is_array($json->timingTiming)) {
                $type->setTimingTiming(FHIRTiming::jsonUnserialize(reset($json->timingTiming), $config));
            } else {
                $type->setTimingTiming(FHIRTiming::jsonUnserialize($json->timingTiming, $config));
            }
        }
        if (isset($json->participant) || property_exists($json, self::FIELD_PARTICIPANT)) {
            if (is_object($json->participant)) {
                $vals = [$json->participant];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PARTICIPANT, true);
            } else {
                $vals = $json->participant;
            }
            foreach($vals as $v) {
                $type->addParticipant(FHIRPlanDefinitionParticipant::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->type) || property_exists($json, self::FIELD_TYPE)) {
            if (is_array($json->type)) {
                $type->setType(FHIRCoding::jsonUnserialize(reset($json->type), $config));
            } else {
                $type->setType(FHIRCoding::jsonUnserialize($json->type, $config));
            }
        }
        if (isset($json->groupingBehavior)
            || isset($json->_groupingBehavior)
            || property_exists($json, self::FIELD_GROUPING_BEHAVIOR)
            || property_exists($json, self::FIELD_GROUPING_BEHAVIOR_EXT)) {
            $v = $json->_groupingBehavior ?? new \stdClass();
            $v->value = $json->groupingBehavior ?? null;
            $type->setGroupingBehavior(FHIRActionGroupingBehavior::jsonUnserialize($v, $config));
        }
        if (isset($json->selectionBehavior)
            || isset($json->_selectionBehavior)
            || property_exists($json, self::FIELD_SELECTION_BEHAVIOR)
            || property_exists($json, self::FIELD_SELECTION_BEHAVIOR_EXT)) {
            $v = $json->_selectionBehavior ?? new \stdClass();
            $v->value = $json->selectionBehavior ?? null;
            $type->setSelectionBehavior(FHIRActionSelectionBehavior::jsonUnserialize($v, $config));
        }
        if (isset($json->requiredBehavior)
            || isset($json->_requiredBehavior)
            || property_exists($json, self::FIELD_REQUIRED_BEHAVIOR)
            || property_exists($json, self::FIELD_REQUIRED_BEHAVIOR_EXT)) {
            $v = $json->_requiredBehavior ?? new \stdClass();
            $v->value = $json->requiredBehavior ?? null;
            $type->setRequiredBehavior(FHIRActionRequiredBehavior::jsonUnserialize($v, $config));
        }
        if (isset($json->precheckBehavior)
            || isset($json->_precheckBehavior)
            || property_exists($json, self::FIELD_PRECHECK_BEHAVIOR)
            || property_exists($json, self::FIELD_PRECHECK_BEHAVIOR_EXT)) {
            $v = $json->_precheckBehavior ?? new \stdClass();
            $v->value = $json->precheckBehavior ?? null;
            $type->setPrecheckBehavior(FHIRActionPrecheckBehavior::jsonUnserialize($v, $config));
        }
        if (isset($json->cardinalityBehavior)
            || isset($json->_cardinalityBehavior)
            || property_exists($json, self::FIELD_CARDINALITY_BEHAVIOR)
            || property_exists($json, self::FIELD_CARDINALITY_BEHAVIOR_EXT)) {
            $v = $json->_cardinalityBehavior ?? new \stdClass();
            $v->value = $json->cardinalityBehavior ?? null;
            $type->setCardinalityBehavior(FHIRActionCardinalityBehavior::jsonUnserialize($v, $config));
        }
        if (isset($json->definition) || property_exists($json, self::FIELD_DEFINITION)) {
            if (is_array($json->definition)) {
                $type->setDefinition(FHIRReference::jsonUnserialize(reset($json->definition), $config));
            } else {
                $type->setDefinition(FHIRReference::jsonUnserialize($json->definition, $config));
            }
        }
        if (isset($json->transform) || property_exists($json, self::FIELD_TRANSFORM)) {
            if (is_array($json->transform)) {
                $type->setTransform(FHIRReference::jsonUnserialize(reset($json->transform), $config));
            } else {
                $type->setTransform(FHIRReference::jsonUnserialize($json->transform, $config));
            }
        }
        if (isset($json->dynamicValue) || property_exists($json, self::FIELD_DYNAMIC_VALUE)) {
            if (is_object($json->dynamicValue)) {
                $vals = [$json->dynamicValue];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DYNAMIC_VALUE, true);
            } else {
                $vals = $json->dynamicValue;
            }
            foreach($vals as $v) {
                $type->addDynamicValue(FHIRPlanDefinitionDynamicValue::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->action) || property_exists($json, self::FIELD_ACTION)) {
            if (is_object($json->action)) {
                $vals = [$json->action];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ACTION, true);
            } else {
                $vals = $json->action;
            }
            foreach($vals as $v) {
                $type->addAction(FHIRPlanDefinitionAction::jsonUnserialize($v, $config));
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
        if (isset($this->label)) {
            if (null !== ($val = $this->label->getValue())) {
                $out->label = $val;
            }
            if ($this->label->_nonValueFieldDefined()) {
                $ext = $this->label->jsonSerialize();
                unset($ext->value);
                $out->_label = $ext;
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
        if (isset($this->textEquivalent)) {
            if (null !== ($val = $this->textEquivalent->getValue())) {
                $out->textEquivalent = $val;
            }
            if ($this->textEquivalent->_nonValueFieldDefined()) {
                $ext = $this->textEquivalent->jsonSerialize();
                unset($ext->value);
                $out->_textEquivalent = $ext;
            }
        }
        if (isset($this->code) && [] !== $this->code) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CODE) && 1 === count($this->code)) {
                $out->code = $this->code[0];
            } else {
                $out->code = $this->code;
            }
        }
        if (isset($this->reason) && [] !== $this->reason) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_REASON) && 1 === count($this->reason)) {
                $out->reason = $this->reason[0];
            } else {
                $out->reason = $this->reason;
            }
        }
        if (isset($this->documentation) && [] !== $this->documentation) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DOCUMENTATION) && 1 === count($this->documentation)) {
                $out->documentation = $this->documentation[0];
            } else {
                $out->documentation = $this->documentation;
            }
        }
        if (isset($this->goalId) && [] !== $this->goalId) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->goalId as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->goalId = $vals;
            }
            if ($hasExts) {
                $out->_goalId = $exts;
            }
        }
        if (isset($this->triggerDefinition) && [] !== $this->triggerDefinition) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_TRIGGER_DEFINITION) && 1 === count($this->triggerDefinition)) {
                $out->triggerDefinition = $this->triggerDefinition[0];
            } else {
                $out->triggerDefinition = $this->triggerDefinition;
            }
        }
        if (isset($this->condition) && [] !== $this->condition) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONDITION) && 1 === count($this->condition)) {
                $out->condition = $this->condition[0];
            } else {
                $out->condition = $this->condition;
            }
        }
        if (isset($this->input) && [] !== $this->input) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_INPUT) && 1 === count($this->input)) {
                $out->input = $this->input[0];
            } else {
                $out->input = $this->input;
            }
        }
        if (isset($this->output) && [] !== $this->output) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_OUTPUT) && 1 === count($this->output)) {
                $out->output = $this->output[0];
            } else {
                $out->output = $this->output;
            }
        }
        if (isset($this->relatedAction) && [] !== $this->relatedAction) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_RELATED_ACTION) && 1 === count($this->relatedAction)) {
                $out->relatedAction = $this->relatedAction[0];
            } else {
                $out->relatedAction = $this->relatedAction;
            }
        }
        if (isset($this->timingDateTime)) {
            if (null !== ($val = $this->timingDateTime->getValue())) {
                $out->timingDateTime = $val;
            }
            if ($this->timingDateTime->_nonValueFieldDefined()) {
                $ext = $this->timingDateTime->jsonSerialize();
                unset($ext->value);
                $out->_timingDateTime = $ext;
            }
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
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PARTICIPANT) && 1 === count($this->participant)) {
                $out->participant = $this->participant[0];
            } else {
                $out->participant = $this->participant;
            }
        }
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->groupingBehavior)) {
            if (null !== ($val = $this->groupingBehavior->getValue())) {
                $out->groupingBehavior = $val;
            }
            if ($this->groupingBehavior->_nonValueFieldDefined()) {
                $ext = $this->groupingBehavior->jsonSerialize();
                unset($ext->value);
                $out->_groupingBehavior = $ext;
            }
        }
        if (isset($this->selectionBehavior)) {
            if (null !== ($val = $this->selectionBehavior->getValue())) {
                $out->selectionBehavior = $val;
            }
            if ($this->selectionBehavior->_nonValueFieldDefined()) {
                $ext = $this->selectionBehavior->jsonSerialize();
                unset($ext->value);
                $out->_selectionBehavior = $ext;
            }
        }
        if (isset($this->requiredBehavior)) {
            if (null !== ($val = $this->requiredBehavior->getValue())) {
                $out->requiredBehavior = $val;
            }
            if ($this->requiredBehavior->_nonValueFieldDefined()) {
                $ext = $this->requiredBehavior->jsonSerialize();
                unset($ext->value);
                $out->_requiredBehavior = $ext;
            }
        }
        if (isset($this->precheckBehavior)) {
            if (null !== ($val = $this->precheckBehavior->getValue())) {
                $out->precheckBehavior = $val;
            }
            if ($this->precheckBehavior->_nonValueFieldDefined()) {
                $ext = $this->precheckBehavior->jsonSerialize();
                unset($ext->value);
                $out->_precheckBehavior = $ext;
            }
        }
        if (isset($this->cardinalityBehavior)) {
            if (null !== ($val = $this->cardinalityBehavior->getValue())) {
                $out->cardinalityBehavior = $val;
            }
            if ($this->cardinalityBehavior->_nonValueFieldDefined()) {
                $ext = $this->cardinalityBehavior->jsonSerialize();
                unset($ext->value);
                $out->_cardinalityBehavior = $ext;
            }
        }
        if (isset($this->definition)) {
            $out->definition = $this->definition;
        }
        if (isset($this->transform)) {
            $out->transform = $this->transform;
        }
        if (isset($this->dynamicValue) && [] !== $this->dynamicValue) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DYNAMIC_VALUE) && 1 === count($this->dynamicValue)) {
                $out->dynamicValue = $this->dynamicValue[0];
            } else {
                $out->dynamicValue = $this->dynamicValue;
            }
        }
        if (isset($this->action) && [] !== $this->action) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ACTION) && 1 === count($this->action)) {
                $out->action = $this->action[0];
            } else {
                $out->action = $this->action;
            }
        }
        return $out;
    }
}