<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup;

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
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionCardinalityBehavior;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionGroupingBehavior;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionPrecheckBehavior;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionRequiredBehavior;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionSelectionBehavior;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRelatedArtifact;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRequestPriority;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * A group of related requests that can be used to capture intended activities that
 * have inter-dependencies such as "give this medication after that one".
 */
class FHIRRequestGroupAction extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION;


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
    public const FIELD_DOCUMENTATION = 'documentation';
    public const FIELD_CONDITION = 'condition';
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
    public const FIELD_RESOURCE = 'resource';
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
     * The title of the action displayed to a user.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $title;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description of the action used to provide a summary to display to the
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
     * A code that provides meaning for the action or action group. For example, a
     * section may have a LOINC code for a section of a documentation template.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $code;
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
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * An expression that describes applicability criteria, or start/stop conditions
     * for the action.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupCondition[] 
     */
    protected array $condition;
    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction[] 
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The participant that should perform or be responsible for this action.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] 
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
     * Defines expectations around whether an action is required.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The resource that is the target of the action (e.g. CommunicationRequest).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $resource;
    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * Sub actions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction[] 
     */
    protected array $action;

    /** Default validation map for fields in type RequestGroup.Action */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRRequestGroupAction Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $prefix
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $title
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $description
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $textEquivalent
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRequestPriority $priority
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRelatedArtifact[] $documentation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupCondition[] $condition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction[] $relatedAction
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $timingDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRAge $timingAge
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod $timingPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration $timingDuration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange $timingRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming $timingTiming
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] $participant
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionGroupingBehavior $groupingBehavior
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionSelectionBehavior $selectionBehavior
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionRequiredBehavior $requiredBehavior
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionPrecheckBehavior $precheckBehavior
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionCardinalityBehavior $cardinalityBehavior
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $resource
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction[] $action
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
                                null|iterable $documentation = null,
                                null|iterable $condition = null,
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
                                null|FHIRReference $resource = null,
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
        if (null !== $documentation) {
            $this->setDocumentation(...$documentation);
        }
        if (null !== $condition) {
            $this->setCondition(...$condition);
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
        if (null !== $resource) {
            $this->setResource($resource);
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
     * The title of the action displayed to a user.
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
     * The title of the action displayed to a user.
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
     * A short description of the action used to provide a summary to display to the
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
     * A short description of the action used to provide a summary to display to the
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
     * A code that provides meaning for the action or action group. For example, a
     * section may have a LOINC code for a section of a documentation template.
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
     * A code that provides meaning for the action or action group. For example, a
     * section may have a LOINC code for a section of a documentation template.
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
     * A code that provides meaning for the action or action group. For example, a
     * section may have a LOINC code for a section of a documentation template.
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
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * An expression that describes applicability criteria, or start/stop conditions
     * for the action.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupCondition[]
     */
    public function getCondition(): array
    {
        return $this->condition ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupCondition>
     */
    public function getConditionIterator(): iterable
    {
        if (!isset($this->condition) || [] === $this->condition) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->condition);
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * An expression that describes applicability criteria, or start/stop conditions
     * for the action.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupCondition $condition
     * @return static
     */
    public function addCondition(FHIRRequestGroupCondition $condition): self
    {
        if (!isset($this->condition)) {
            $this->condition = [];
        }
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * An expression that describes applicability criteria, or start/stop conditions
     * for the action.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupCondition ...$condition
     * @return static
     */
    public function setCondition(FHIRRequestGroupCondition ...$condition): self
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction[]
     */
    public function getRelatedAction(): array
    {
        return $this->relatedAction ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction>
     */
    public function getRelatedActionIterator(): iterable
    {
        if (!isset($this->relatedAction) || [] === $this->relatedAction) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->relatedAction);
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction $relatedAction
     * @return static
     */
    public function addRelatedAction(FHIRRequestGroupRelatedAction $relatedAction): self
    {
        if (!isset($this->relatedAction)) {
            $this->relatedAction = [];
        }
        $this->relatedAction[] = $relatedAction;
        return $this;
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction ...$relatedAction
     * @return static
     */
    public function setRelatedAction(FHIRRequestGroupRelatedAction ...$relatedAction): self
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The participant that should perform or be responsible for this action.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[]
     */
    public function getParticipant(): array
    {
        return $this->participant ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference>
     */
    public function getParticipantIterator(): iterable
    {
        if (!isset($this->participant) || [] === $this->participant) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->participant);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The participant that should perform or be responsible for this action.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $participant
     * @return static
     */
    public function addParticipant(FHIRReference $participant): self
    {
        if (!isset($this->participant)) {
            $this->participant = [];
        }
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The participant that should perform or be responsible for this action.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference ...$participant
     * @return static
     */
    public function setParticipant(FHIRReference ...$participant): self
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
     * Defines expectations around whether an action is required.
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
     * Defines expectations around whether an action is required.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The resource that is the target of the action (e.g. CommunicationRequest).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
     */
    public function getResource(): null|FHIRReference
    {
        return $this->resource ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The resource that is the target of the action (e.g. CommunicationRequest).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $resource
     * @return static
     */
    public function setResource(null|FHIRReference $resource): self
    {
        if (null === $resource) {
            unset($this->resource);
            return $this;
        }
        $this->resource = $resource;
        return $this;
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * Sub actions.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction[]
     */
    public function getAction(): array
    {
        return $this->action ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction>
     */
    public function getActionIterator(): iterable
    {
        if (!isset($this->action) || [] === $this->action) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->action);
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * Sub actions.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction $action
     * @return static
     */
    public function addAction(FHIRRequestGroupAction $action): self
    {
        if (!isset($this->action)) {
            $this->action = [];
        }
        $this->action[] = $action;
        return $this;
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * Sub actions.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction ...$action
     * @return static
     */
    public function setAction(FHIRRequestGroupAction ...$action): self
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
        if (isset($validationRules[self::FIELD_RESOURCE])) {
            $v = $this->getResource();
            foreach($validationRules[self::FIELD_RESOURCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE])) {
                        $errs[self::FIELD_RESOURCE] = [];
                    }
                    $errs[self::FIELD_RESOURCE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRRequestGroupAction)) {
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
            } else if (self::FIELD_DOCUMENTATION === $childName) {
                $v = new FHIRRelatedArtifact();
                $type->addDocumentation(FHIRRelatedArtifact::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONDITION === $childName) {
                $v = new FHIRRequestGroupCondition();
                $type->addCondition(FHIRRequestGroupCondition::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RELATED_ACTION === $childName) {
                $v = new FHIRRequestGroupRelatedAction();
                $type->addRelatedAction(FHIRRequestGroupRelatedAction::xmlUnserialize($n, $v, $config));
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
                $v = new FHIRReference();
                $type->addParticipant(FHIRReference::xmlUnserialize($n, $v, $config));
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
            } else if (self::FIELD_RESOURCE === $childName) {
                $v = new FHIRReference();
                $type->setResource(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ACTION === $childName) {
                $v = new FHIRRequestGroupAction();
                $type->addAction(FHIRRequestGroupAction::xmlUnserialize($n, $v, $config));
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
            $xw->openRootNode('RequestGroupAction', $this->_getSourceXMLNS());
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
        if (isset($this->timingDateTime) && $this->timingDateTime->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TIMING_DATE_TIME, $this->timingDateTime->getValue()?->_getFormattedValue());
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
        if (isset($this->documentation)) {
            foreach ($this->documentation as $v) {
                $xw->startElement(self::FIELD_DOCUMENTATION);
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
        if (isset($this->resource)) {
            $xw->startElement(self::FIELD_RESOURCE);
            $this->resource->xmlSerialize($xw, $config);
            $xw->endElement();
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRRequestGroupAction)) {
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
        if (isset($json[self::FIELD_CONDITION]) || array_key_exists(self::FIELD_CONDITION, $json)) {
            if (is_array($json[self::FIELD_CONDITION])) {
                foreach($json[self::FIELD_CONDITION] as $v) {
                    if ($v instanceof FHIRRequestGroupCondition) {
                        $type->addCondition($v);
                    } else {
                        $type->addCondition(new FHIRRequestGroupCondition($v));
                    }
                }
            } elseif ($json[self::FIELD_CONDITION] instanceof FHIRRequestGroupCondition) {
                $type->addCondition($json[self::FIELD_CONDITION]);
            } else {
                $type->addCondition(new FHIRRequestGroupCondition($json[self::FIELD_CONDITION]));
            }
        }
        if (isset($json[self::FIELD_RELATED_ACTION]) || array_key_exists(self::FIELD_RELATED_ACTION, $json)) {
            if (is_array($json[self::FIELD_RELATED_ACTION])) {
                foreach($json[self::FIELD_RELATED_ACTION] as $v) {
                    if ($v instanceof FHIRRequestGroupRelatedAction) {
                        $type->addRelatedAction($v);
                    } else {
                        $type->addRelatedAction(new FHIRRequestGroupRelatedAction($v));
                    }
                }
            } elseif ($json[self::FIELD_RELATED_ACTION] instanceof FHIRRequestGroupRelatedAction) {
                $type->addRelatedAction($json[self::FIELD_RELATED_ACTION]);
            } else {
                $type->addRelatedAction(new FHIRRequestGroupRelatedAction($json[self::FIELD_RELATED_ACTION]));
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
                    if ($v instanceof FHIRReference) {
                        $type->addParticipant($v);
                    } else {
                        $type->addParticipant(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_PARTICIPANT] instanceof FHIRReference) {
                $type->addParticipant($json[self::FIELD_PARTICIPANT]);
            } else {
                $type->addParticipant(new FHIRReference($json[self::FIELD_PARTICIPANT]));
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
        if (isset($json[self::FIELD_RESOURCE]) || array_key_exists(self::FIELD_RESOURCE, $json)) {
            if ($json[self::FIELD_RESOURCE] instanceof FHIRReference) {
                $type->setResource($json[self::FIELD_RESOURCE]);
            } else {
                $type->setResource(new FHIRReference($json[self::FIELD_RESOURCE]));
            }
        }
        if (isset($json[self::FIELD_ACTION]) || array_key_exists(self::FIELD_ACTION, $json)) {
            if (is_array($json[self::FIELD_ACTION])) {
                foreach($json[self::FIELD_ACTION] as $v) {
                    if ($v instanceof FHIRRequestGroupAction) {
                        $type->addAction($v);
                    } else {
                        $type->addAction(new FHIRRequestGroupAction($v));
                    }
                }
            } elseif ($json[self::FIELD_ACTION] instanceof FHIRRequestGroupAction) {
                $type->addAction($json[self::FIELD_ACTION]);
            } else {
                $type->addAction(new FHIRRequestGroupAction($json[self::FIELD_ACTION]));
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
        if (isset($this->documentation) && [] !== $this->documentation) {
            $out->documentation = $this->documentation;
        }
        if (isset($this->condition) && [] !== $this->condition) {
            $out->condition = $this->condition;
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
        if (isset($this->resource)) {
            $out->resource = $this->resource;
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