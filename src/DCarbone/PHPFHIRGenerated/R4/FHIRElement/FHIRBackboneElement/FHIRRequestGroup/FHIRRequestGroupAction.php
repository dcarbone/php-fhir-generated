<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:23+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\R4\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionCardinalityBehavior;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionGroupingBehavior;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionPrecheckBehavior;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionRequiredBehavior;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionSelectionBehavior;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestPriority;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter;

/**
 * A group of related requests that can be used to capture intended activities that
 * have inter-dependencies such as "give this medication after that one".
 *
 * Class FHIRRequestGroupAction
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup
 */
class FHIRRequestGroupAction extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION;

    const FIELD_PREFIX = 'prefix';
    const FIELD_PREFIX_EXT = '_prefix';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_TEXT_EQUIVALENT = 'textEquivalent';
    const FIELD_TEXT_EQUIVALENT_EXT = '_textEquivalent';
    const FIELD_PRIORITY = 'priority';
    const FIELD_PRIORITY_EXT = '_priority';
    const FIELD_CODE = 'code';
    const FIELD_DOCUMENTATION = 'documentation';
    const FIELD_CONDITION = 'condition';
    const FIELD_RELATED_ACTION = 'relatedAction';
    const FIELD_TIMING_DATE_TIME = 'timingDateTime';
    const FIELD_TIMING_DATE_TIME_EXT = '_timingDateTime';
    const FIELD_TIMING_AGE = 'timingAge';
    const FIELD_TIMING_PERIOD = 'timingPeriod';
    const FIELD_TIMING_DURATION = 'timingDuration';
    const FIELD_TIMING_RANGE = 'timingRange';
    const FIELD_TIMING_TIMING = 'timingTiming';
    const FIELD_PARTICIPANT = 'participant';
    const FIELD_TYPE = 'type';
    const FIELD_GROUPING_BEHAVIOR = 'groupingBehavior';
    const FIELD_GROUPING_BEHAVIOR_EXT = '_groupingBehavior';
    const FIELD_SELECTION_BEHAVIOR = 'selectionBehavior';
    const FIELD_SELECTION_BEHAVIOR_EXT = '_selectionBehavior';
    const FIELD_REQUIRED_BEHAVIOR = 'requiredBehavior';
    const FIELD_REQUIRED_BEHAVIOR_EXT = '_requiredBehavior';
    const FIELD_PRECHECK_BEHAVIOR = 'precheckBehavior';
    const FIELD_PRECHECK_BEHAVIOR_EXT = '_precheckBehavior';
    const FIELD_CARDINALITY_BEHAVIOR = 'cardinalityBehavior';
    const FIELD_CARDINALITY_BEHAVIOR_EXT = '_cardinalityBehavior';
    const FIELD_RESOURCE = 'resource';
    const FIELD_ACTION = 'action';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A user-visible prefix for the action.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $prefix = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The title of the action displayed to a user.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $title = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description of the action used to provide a summary to display to the
     * user.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $description = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A text equivalent of the action to be performed. This provides a
     * human-interpretable description of the action when the definition is consumed by
     * a system that might not be capable of interpreting it dynamically.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $textEquivalent = null;
    /**
     * Identifies the level of importance to be assigned to actioning the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the action should be addressed with respect to other
     * actions.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestPriority
     */
    protected null|FHIRRequestPriority $priority = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that provides meaning for the action or action group. For example, a
     * section may have a LOINC code for a section of a documentation template.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $code = [];
    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Didactic or other informational resources associated with the action that can be
     * provided to the CDS recipient. Information resources can include inline text
     * commentary and links to web resources.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact[]
     */
    protected null|array $documentation = [];
    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * An expression that describes applicability criteria, or start/stop conditions
     * for the action.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupCondition[]
     */
    protected null|array $condition = [];
    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction[]
     */
    protected null|array $relatedAction = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An optional value describing when the action should be performed.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $timingDateTime = null;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected null|FHIRAge $timingAge = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $timingPeriod = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $timingDuration = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    protected null|FHIRRange $timingRange = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    protected null|FHIRTiming $timingTiming = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The participant that should perform or be responsible for this action.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $participant = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of action to perform (create, update, remove).
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $type = null;
    /**
     * Defines organization behavior of a group.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionGroupingBehavior
     */
    protected null|FHIRActionGroupingBehavior $groupingBehavior = null;
    /**
     * Defines selection behavior of a group.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionSelectionBehavior
     */
    protected null|FHIRActionSelectionBehavior $selectionBehavior = null;
    /**
     * Defines expectations around whether an action or action group is required.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines expectations around whether an action is required.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionRequiredBehavior
     */
    protected null|FHIRActionRequiredBehavior $requiredBehavior = null;
    /**
     * Defines selection frequency behavior for an action or group.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action should usually be preselected.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionPrecheckBehavior
     */
    protected null|FHIRActionPrecheckBehavior $precheckBehavior = null;
    /**
     * Defines behavior for an action or a group for how many times that item may be
     * repeated.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionCardinalityBehavior
     */
    protected null|FHIRActionCardinalityBehavior $cardinalityBehavior = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The resource that is the target of the action (e.g. CommunicationRequest).
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $resource = null;
    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * Sub actions.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction[]
     */
    protected null|array $action = [];

    /**
     * Validation map for fields in type RequestGroup.Action
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRRequestGroupAction Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_PREFIX, $data) || array_key_exists(self::FIELD_PREFIX_EXT, $data)) {
            $value = $data[self::FIELD_PREFIX] ?? null;
            $ext = (isset($data[self::FIELD_PREFIX_EXT]) && is_array($data[self::FIELD_PREFIX_EXT])) ? $data[self::FIELD_PREFIX_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPrefix($value);
                } else if (is_array($value)) {
                    $this->setPrefix(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPrefix(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPrefix(new FHIRString($ext));
            } else {
                $this->setPrefix(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_TITLE, $data) || array_key_exists(self::FIELD_TITLE_EXT, $data)) {
            $value = $data[self::FIELD_TITLE] ?? null;
            $ext = (isset($data[self::FIELD_TITLE_EXT]) && is_array($data[self::FIELD_TITLE_EXT])) ? $data[self::FIELD_TITLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTitle($value);
                } else if (is_array($value)) {
                    $this->setTitle(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTitle(new FHIRString($ext));
            } else {
                $this->setTitle(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DESCRIPTION, $data) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $data)) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            } else {
                $this->setDescription(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_TEXT_EQUIVALENT, $data) || array_key_exists(self::FIELD_TEXT_EQUIVALENT_EXT, $data)) {
            $value = $data[self::FIELD_TEXT_EQUIVALENT] ?? null;
            $ext = (isset($data[self::FIELD_TEXT_EQUIVALENT_EXT]) && is_array($data[self::FIELD_TEXT_EQUIVALENT_EXT])) ? $data[self::FIELD_TEXT_EQUIVALENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTextEquivalent($value);
                } else if (is_array($value)) {
                    $this->setTextEquivalent(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTextEquivalent(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTextEquivalent(new FHIRString($ext));
            } else {
                $this->setTextEquivalent(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_PRIORITY, $data) || array_key_exists(self::FIELD_PRIORITY_EXT, $data)) {
            $value = $data[self::FIELD_PRIORITY] ?? null;
            $ext = (isset($data[self::FIELD_PRIORITY_EXT]) && is_array($data[self::FIELD_PRIORITY_EXT])) ? $data[self::FIELD_PRIORITY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRRequestPriority) {
                    $this->setPriority($value);
                } else if (is_array($value)) {
                    $this->setPriority(new FHIRRequestPriority(array_merge($ext, $value)));
                } else {
                    $this->setPriority(new FHIRRequestPriority([FHIRRequestPriority::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPriority(new FHIRRequestPriority($ext));
            } else {
                $this->setPriority(new FHIRRequestPriority(null));
            }
        }
        if (array_key_exists(self::FIELD_CODE, $data)) {
            if (is_array($data[self::FIELD_CODE])) {
                foreach($data[self::FIELD_CODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCode($v);
                    } else {
                        $this->addCode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->addCode($data[self::FIELD_CODE]);
            } else {
                $this->addCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (array_key_exists(self::FIELD_DOCUMENTATION, $data)) {
            if (is_array($data[self::FIELD_DOCUMENTATION])) {
                foreach($data[self::FIELD_DOCUMENTATION] as $v) {
                    if ($v instanceof FHIRRelatedArtifact) {
                        $this->addDocumentation($v);
                    } else {
                        $this->addDocumentation(new FHIRRelatedArtifact($v));
                    }
                }
            } elseif ($data[self::FIELD_DOCUMENTATION] instanceof FHIRRelatedArtifact) {
                $this->addDocumentation($data[self::FIELD_DOCUMENTATION]);
            } else {
                $this->addDocumentation(new FHIRRelatedArtifact($data[self::FIELD_DOCUMENTATION]));
            }
        }
        if (array_key_exists(self::FIELD_CONDITION, $data)) {
            if (is_array($data[self::FIELD_CONDITION])) {
                foreach($data[self::FIELD_CONDITION] as $v) {
                    if ($v instanceof FHIRRequestGroupCondition) {
                        $this->addCondition($v);
                    } else {
                        $this->addCondition(new FHIRRequestGroupCondition($v));
                    }
                }
            } elseif ($data[self::FIELD_CONDITION] instanceof FHIRRequestGroupCondition) {
                $this->addCondition($data[self::FIELD_CONDITION]);
            } else {
                $this->addCondition(new FHIRRequestGroupCondition($data[self::FIELD_CONDITION]));
            }
        }
        if (array_key_exists(self::FIELD_RELATED_ACTION, $data)) {
            if (is_array($data[self::FIELD_RELATED_ACTION])) {
                foreach($data[self::FIELD_RELATED_ACTION] as $v) {
                    if ($v instanceof FHIRRequestGroupRelatedAction) {
                        $this->addRelatedAction($v);
                    } else {
                        $this->addRelatedAction(new FHIRRequestGroupRelatedAction($v));
                    }
                }
            } elseif ($data[self::FIELD_RELATED_ACTION] instanceof FHIRRequestGroupRelatedAction) {
                $this->addRelatedAction($data[self::FIELD_RELATED_ACTION]);
            } else {
                $this->addRelatedAction(new FHIRRequestGroupRelatedAction($data[self::FIELD_RELATED_ACTION]));
            }
        }
        if (array_key_exists(self::FIELD_TIMING_DATE_TIME, $data) || array_key_exists(self::FIELD_TIMING_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_TIMING_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_TIMING_DATE_TIME_EXT]) && is_array($data[self::FIELD_TIMING_DATE_TIME_EXT])) ? $data[self::FIELD_TIMING_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setTimingDateTime($value);
                } else if (is_array($value)) {
                    $this->setTimingDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setTimingDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTimingDateTime(new FHIRDateTime($ext));
            } else {
                $this->setTimingDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_TIMING_AGE, $data)) {
            if ($data[self::FIELD_TIMING_AGE] instanceof FHIRAge) {
                $this->setTimingAge($data[self::FIELD_TIMING_AGE]);
            } else {
                $this->setTimingAge(new FHIRAge($data[self::FIELD_TIMING_AGE]));
            }
        }
        if (array_key_exists(self::FIELD_TIMING_PERIOD, $data)) {
            if ($data[self::FIELD_TIMING_PERIOD] instanceof FHIRPeriod) {
                $this->setTimingPeriod($data[self::FIELD_TIMING_PERIOD]);
            } else {
                $this->setTimingPeriod(new FHIRPeriod($data[self::FIELD_TIMING_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_TIMING_DURATION, $data)) {
            if ($data[self::FIELD_TIMING_DURATION] instanceof FHIRDuration) {
                $this->setTimingDuration($data[self::FIELD_TIMING_DURATION]);
            } else {
                $this->setTimingDuration(new FHIRDuration($data[self::FIELD_TIMING_DURATION]));
            }
        }
        if (array_key_exists(self::FIELD_TIMING_RANGE, $data)) {
            if ($data[self::FIELD_TIMING_RANGE] instanceof FHIRRange) {
                $this->setTimingRange($data[self::FIELD_TIMING_RANGE]);
            } else {
                $this->setTimingRange(new FHIRRange($data[self::FIELD_TIMING_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_TIMING_TIMING, $data)) {
            if ($data[self::FIELD_TIMING_TIMING] instanceof FHIRTiming) {
                $this->setTimingTiming($data[self::FIELD_TIMING_TIMING]);
            } else {
                $this->setTimingTiming(new FHIRTiming($data[self::FIELD_TIMING_TIMING]));
            }
        }
        if (array_key_exists(self::FIELD_PARTICIPANT, $data)) {
            if (is_array($data[self::FIELD_PARTICIPANT])) {
                foreach($data[self::FIELD_PARTICIPANT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addParticipant($v);
                    } else {
                        $this->addParticipant(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_PARTICIPANT] instanceof FHIRReference) {
                $this->addParticipant($data[self::FIELD_PARTICIPANT]);
            } else {
                $this->addParticipant(new FHIRReference($data[self::FIELD_PARTICIPANT]));
            }
        }
        if (array_key_exists(self::FIELD_TYPE, $data)) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_GROUPING_BEHAVIOR, $data) || array_key_exists(self::FIELD_GROUPING_BEHAVIOR_EXT, $data)) {
            $value = $data[self::FIELD_GROUPING_BEHAVIOR] ?? null;
            $ext = (isset($data[self::FIELD_GROUPING_BEHAVIOR_EXT]) && is_array($data[self::FIELD_GROUPING_BEHAVIOR_EXT])) ? $data[self::FIELD_GROUPING_BEHAVIOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRActionGroupingBehavior) {
                    $this->setGroupingBehavior($value);
                } else if (is_array($value)) {
                    $this->setGroupingBehavior(new FHIRActionGroupingBehavior(array_merge($ext, $value)));
                } else {
                    $this->setGroupingBehavior(new FHIRActionGroupingBehavior([FHIRActionGroupingBehavior::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setGroupingBehavior(new FHIRActionGroupingBehavior($ext));
            } else {
                $this->setGroupingBehavior(new FHIRActionGroupingBehavior(null));
            }
        }
        if (array_key_exists(self::FIELD_SELECTION_BEHAVIOR, $data) || array_key_exists(self::FIELD_SELECTION_BEHAVIOR_EXT, $data)) {
            $value = $data[self::FIELD_SELECTION_BEHAVIOR] ?? null;
            $ext = (isset($data[self::FIELD_SELECTION_BEHAVIOR_EXT]) && is_array($data[self::FIELD_SELECTION_BEHAVIOR_EXT])) ? $data[self::FIELD_SELECTION_BEHAVIOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRActionSelectionBehavior) {
                    $this->setSelectionBehavior($value);
                } else if (is_array($value)) {
                    $this->setSelectionBehavior(new FHIRActionSelectionBehavior(array_merge($ext, $value)));
                } else {
                    $this->setSelectionBehavior(new FHIRActionSelectionBehavior([FHIRActionSelectionBehavior::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSelectionBehavior(new FHIRActionSelectionBehavior($ext));
            } else {
                $this->setSelectionBehavior(new FHIRActionSelectionBehavior(null));
            }
        }
        if (array_key_exists(self::FIELD_REQUIRED_BEHAVIOR, $data) || array_key_exists(self::FIELD_REQUIRED_BEHAVIOR_EXT, $data)) {
            $value = $data[self::FIELD_REQUIRED_BEHAVIOR] ?? null;
            $ext = (isset($data[self::FIELD_REQUIRED_BEHAVIOR_EXT]) && is_array($data[self::FIELD_REQUIRED_BEHAVIOR_EXT])) ? $data[self::FIELD_REQUIRED_BEHAVIOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRActionRequiredBehavior) {
                    $this->setRequiredBehavior($value);
                } else if (is_array($value)) {
                    $this->setRequiredBehavior(new FHIRActionRequiredBehavior(array_merge($ext, $value)));
                } else {
                    $this->setRequiredBehavior(new FHIRActionRequiredBehavior([FHIRActionRequiredBehavior::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRequiredBehavior(new FHIRActionRequiredBehavior($ext));
            } else {
                $this->setRequiredBehavior(new FHIRActionRequiredBehavior(null));
            }
        }
        if (array_key_exists(self::FIELD_PRECHECK_BEHAVIOR, $data) || array_key_exists(self::FIELD_PRECHECK_BEHAVIOR_EXT, $data)) {
            $value = $data[self::FIELD_PRECHECK_BEHAVIOR] ?? null;
            $ext = (isset($data[self::FIELD_PRECHECK_BEHAVIOR_EXT]) && is_array($data[self::FIELD_PRECHECK_BEHAVIOR_EXT])) ? $data[self::FIELD_PRECHECK_BEHAVIOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRActionPrecheckBehavior) {
                    $this->setPrecheckBehavior($value);
                } else if (is_array($value)) {
                    $this->setPrecheckBehavior(new FHIRActionPrecheckBehavior(array_merge($ext, $value)));
                } else {
                    $this->setPrecheckBehavior(new FHIRActionPrecheckBehavior([FHIRActionPrecheckBehavior::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPrecheckBehavior(new FHIRActionPrecheckBehavior($ext));
            } else {
                $this->setPrecheckBehavior(new FHIRActionPrecheckBehavior(null));
            }
        }
        if (array_key_exists(self::FIELD_CARDINALITY_BEHAVIOR, $data) || array_key_exists(self::FIELD_CARDINALITY_BEHAVIOR_EXT, $data)) {
            $value = $data[self::FIELD_CARDINALITY_BEHAVIOR] ?? null;
            $ext = (isset($data[self::FIELD_CARDINALITY_BEHAVIOR_EXT]) && is_array($data[self::FIELD_CARDINALITY_BEHAVIOR_EXT])) ? $data[self::FIELD_CARDINALITY_BEHAVIOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRActionCardinalityBehavior) {
                    $this->setCardinalityBehavior($value);
                } else if (is_array($value)) {
                    $this->setCardinalityBehavior(new FHIRActionCardinalityBehavior(array_merge($ext, $value)));
                } else {
                    $this->setCardinalityBehavior(new FHIRActionCardinalityBehavior([FHIRActionCardinalityBehavior::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCardinalityBehavior(new FHIRActionCardinalityBehavior($ext));
            } else {
                $this->setCardinalityBehavior(new FHIRActionCardinalityBehavior(null));
            }
        }
        if (array_key_exists(self::FIELD_RESOURCE, $data)) {
            if ($data[self::FIELD_RESOURCE] instanceof FHIRReference) {
                $this->setResource($data[self::FIELD_RESOURCE]);
            } else {
                $this->setResource(new FHIRReference($data[self::FIELD_RESOURCE]));
            }
        }
        if (array_key_exists(self::FIELD_ACTION, $data)) {
            if (is_array($data[self::FIELD_ACTION])) {
                foreach($data[self::FIELD_ACTION] as $v) {
                    if ($v instanceof FHIRRequestGroupAction) {
                        $this->addAction($v);
                    } else {
                        $this->addAction(new FHIRRequestGroupAction($v));
                    }
                }
            } elseif ($data[self::FIELD_ACTION] instanceof FHIRRequestGroupAction) {
                $this->addAction($data[self::FIELD_ACTION]);
            } else {
                $this->addAction(new FHIRRequestGroupAction($data[self::FIELD_ACTION]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getPrefix(): null|FHIRString
    {
        return $this->prefix;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A user-visible prefix for the action.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $prefix
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPrefix(null|string|FHIRStringPrimitive|FHIRString $prefix = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $prefix && !($prefix instanceof FHIRString)) {
            $prefix = new FHIRString($prefix);
        }
        $this->_trackValueSet($this->prefix, $prefix);
        if (!isset($this->_xmlLocations[self::FIELD_PREFIX])) {
            $this->_xmlLocations[self::FIELD_PREFIX] = [];
        }
        $this->_xmlLocations[self::FIELD_PREFIX][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getTitle(): null|FHIRString
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The title of the action displayed to a user.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $title
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setTitle(null|string|FHIRStringPrimitive|FHIRString $title = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $title && !($title instanceof FHIRString)) {
            $title = new FHIRString($title);
        }
        $this->_trackValueSet($this->title, $title);
        if (!isset($this->_xmlLocations[self::FIELD_TITLE])) {
            $this->_xmlLocations[self::FIELD_TITLE] = [];
        }
        $this->_xmlLocations[self::FIELD_TITLE][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description of the action used to provide a summary to display to the
     * user.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $description
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $description && !($description instanceof FHIRString)) {
            $description = new FHIRString($description);
        }
        $this->_trackValueSet($this->description, $description);
        if (!isset($this->_xmlLocations[self::FIELD_DESCRIPTION])) {
            $this->_xmlLocations[self::FIELD_DESCRIPTION] = [];
        }
        $this->_xmlLocations[self::FIELD_DESCRIPTION][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getTextEquivalent(): null|FHIRString
    {
        return $this->textEquivalent;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $textEquivalent
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setTextEquivalent(null|string|FHIRStringPrimitive|FHIRString $textEquivalent = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $textEquivalent && !($textEquivalent instanceof FHIRString)) {
            $textEquivalent = new FHIRString($textEquivalent);
        }
        $this->_trackValueSet($this->textEquivalent, $textEquivalent);
        if (!isset($this->_xmlLocations[self::FIELD_TEXT_EQUIVALENT])) {
            $this->_xmlLocations[self::FIELD_TEXT_EQUIVALENT] = [];
        }
        $this->_xmlLocations[self::FIELD_TEXT_EQUIVALENT][0] = $xmlLocation;
        $this->textEquivalent = $textEquivalent;
        return $this;
    }

    /**
     * Identifies the level of importance to be assigned to actioning the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the action should be addressed with respect to other
     * actions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestPriority
     */
    public function getPriority(): null|FHIRRequestPriority
    {
        return $this->priority;
    }

    /**
     * Identifies the level of importance to be assigned to actioning the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the action should be addressed with respect to other
     * actions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestPriority $priority
     * @return static
     */
    public function setPriority(null|FHIRRequestPriority $priority = null): self
    {
        if (null === $priority) {
            $priority = new FHIRRequestPriority();
        }
        $this->_trackValueSet($this->priority, $priority);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCode(): null|array
    {
        return $this->code;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function addCode(null|FHIRCodeableConcept $code = null): self
    {
        if (null === $code) {
            $code = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept ...$code
     * @return static
     */
    public function setCode(FHIRCodeableConcept ...$code): self
    {
        if ([] !== $this->code) {
            $this->_trackValuesRemoved(count($this->code));
            $this->code = [];
        }
        if ([] === $code) {
            return $this;
        }
        foreach($code as $v) {
            $this->addCode($v);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact[]
     */
    public function getDocumentation(): null|array
    {
        return $this->documentation;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact $documentation
     * @return static
     */
    public function addDocumentation(null|FHIRRelatedArtifact $documentation = null): self
    {
        if (null === $documentation) {
            $documentation = new FHIRRelatedArtifact();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact ...$documentation
     * @return static
     */
    public function setDocumentation(FHIRRelatedArtifact ...$documentation): self
    {
        if ([] !== $this->documentation) {
            $this->_trackValuesRemoved(count($this->documentation));
            $this->documentation = [];
        }
        if ([] === $documentation) {
            return $this;
        }
        foreach($documentation as $v) {
            $this->addDocumentation($v);
        }
        return $this;
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * An expression that describes applicability criteria, or start/stop conditions
     * for the action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupCondition[]
     */
    public function getCondition(): null|array
    {
        return $this->condition;
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * An expression that describes applicability criteria, or start/stop conditions
     * for the action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupCondition $condition
     * @return static
     */
    public function addCondition(null|FHIRRequestGroupCondition $condition = null): self
    {
        if (null === $condition) {
            $condition = new FHIRRequestGroupCondition();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupCondition ...$condition
     * @return static
     */
    public function setCondition(FHIRRequestGroupCondition ...$condition): self
    {
        if ([] !== $this->condition) {
            $this->_trackValuesRemoved(count($this->condition));
            $this->condition = [];
        }
        if ([] === $condition) {
            return $this;
        }
        foreach($condition as $v) {
            $this->addCondition($v);
        }
        return $this;
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction[]
     */
    public function getRelatedAction(): null|array
    {
        return $this->relatedAction;
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction $relatedAction
     * @return static
     */
    public function addRelatedAction(null|FHIRRequestGroupRelatedAction $relatedAction = null): self
    {
        if (null === $relatedAction) {
            $relatedAction = new FHIRRequestGroupRelatedAction();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction ...$relatedAction
     * @return static
     */
    public function setRelatedAction(FHIRRequestGroupRelatedAction ...$relatedAction): self
    {
        if ([] !== $this->relatedAction) {
            $this->_trackValuesRemoved(count($this->relatedAction));
            $this->relatedAction = [];
        }
        if ([] === $relatedAction) {
            return $this;
        }
        foreach($relatedAction as $v) {
            $this->addRelatedAction($v);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getTimingDateTime(): null|FHIRDateTime
    {
        return $this->timingDateTime;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R4\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $timingDateTime
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setTimingDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $timingDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $timingDateTime && !($timingDateTime instanceof FHIRDateTime)) {
            $timingDateTime = new FHIRDateTime($timingDateTime);
        }
        $this->_trackValueSet($this->timingDateTime, $timingDateTime);
        if (!isset($this->_xmlLocations[self::FIELD_TIMING_DATE_TIME])) {
            $this->_xmlLocations[self::FIELD_TIMING_DATE_TIME] = [];
        }
        $this->_xmlLocations[self::FIELD_TIMING_DATE_TIME][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getTimingAge(): null|FHIRAge
    {
        return $this->timingAge;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge $timingAge
     * @return static
     */
    public function setTimingAge(null|FHIRAge $timingAge = null): self
    {
        if (null === $timingAge) {
            $timingAge = new FHIRAge();
        }
        $this->_trackValueSet($this->timingAge, $timingAge);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod(): null|FHIRPeriod
    {
        return $this->timingPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $timingPeriod
     * @return static
     */
    public function setTimingPeriod(null|FHIRPeriod $timingPeriod = null): self
    {
        if (null === $timingPeriod) {
            $timingPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->timingPeriod, $timingPeriod);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getTimingDuration(): null|FHIRDuration
    {
        return $this->timingDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $timingDuration
     * @return static
     */
    public function setTimingDuration(null|FHIRDuration $timingDuration = null): self
    {
        if (null === $timingDuration) {
            $timingDuration = new FHIRDuration();
        }
        $this->_trackValueSet($this->timingDuration, $timingDuration);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    public function getTimingRange(): null|FHIRRange
    {
        return $this->timingRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $timingRange
     * @return static
     */
    public function setTimingRange(null|FHIRRange $timingRange = null): self
    {
        if (null === $timingRange) {
            $timingRange = new FHIRRange();
        }
        $this->_trackValueSet($this->timingRange, $timingRange);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getTimingTiming(): null|FHIRTiming
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming $timingTiming
     * @return static
     */
    public function setTimingTiming(null|FHIRTiming $timingTiming = null): self
    {
        if (null === $timingTiming) {
            $timingTiming = new FHIRTiming();
        }
        $this->_trackValueSet($this->timingTiming, $timingTiming);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getParticipant(): null|array
    {
        return $this->participant;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The participant that should perform or be responsible for this action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $participant
     * @return static
     */
    public function addParticipant(null|FHIRReference $participant = null): self
    {
        if (null === $participant) {
            $participant = new FHIRReference();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference ...$participant
     * @return static
     */
    public function setParticipant(FHIRReference ...$participant): self
    {
        if ([] !== $this->participant) {
            $this->_trackValuesRemoved(count($this->participant));
            $this->participant = [];
        }
        if ([] === $participant) {
            return $this;
        }
        foreach($participant as $v) {
            $this->addParticipant($v);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of action to perform (create, update, remove).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type = null): self
    {
        if (null === $type) {
            $type = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * Defines organization behavior of a group.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionGroupingBehavior
     */
    public function getGroupingBehavior(): null|FHIRActionGroupingBehavior
    {
        return $this->groupingBehavior;
    }

    /**
     * Defines organization behavior of a group.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionGroupingBehavior $groupingBehavior
     * @return static
     */
    public function setGroupingBehavior(null|FHIRActionGroupingBehavior $groupingBehavior = null): self
    {
        if (null === $groupingBehavior) {
            $groupingBehavior = new FHIRActionGroupingBehavior();
        }
        $this->_trackValueSet($this->groupingBehavior, $groupingBehavior);
        $this->groupingBehavior = $groupingBehavior;
        return $this;
    }

    /**
     * Defines selection behavior of a group.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionSelectionBehavior
     */
    public function getSelectionBehavior(): null|FHIRActionSelectionBehavior
    {
        return $this->selectionBehavior;
    }

    /**
     * Defines selection behavior of a group.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionSelectionBehavior $selectionBehavior
     * @return static
     */
    public function setSelectionBehavior(null|FHIRActionSelectionBehavior $selectionBehavior = null): self
    {
        if (null === $selectionBehavior) {
            $selectionBehavior = new FHIRActionSelectionBehavior();
        }
        $this->_trackValueSet($this->selectionBehavior, $selectionBehavior);
        $this->selectionBehavior = $selectionBehavior;
        return $this;
    }

    /**
     * Defines expectations around whether an action or action group is required.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines expectations around whether an action is required.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionRequiredBehavior
     */
    public function getRequiredBehavior(): null|FHIRActionRequiredBehavior
    {
        return $this->requiredBehavior;
    }

    /**
     * Defines expectations around whether an action or action group is required.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines expectations around whether an action is required.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionRequiredBehavior $requiredBehavior
     * @return static
     */
    public function setRequiredBehavior(null|FHIRActionRequiredBehavior $requiredBehavior = null): self
    {
        if (null === $requiredBehavior) {
            $requiredBehavior = new FHIRActionRequiredBehavior();
        }
        $this->_trackValueSet($this->requiredBehavior, $requiredBehavior);
        $this->requiredBehavior = $requiredBehavior;
        return $this;
    }

    /**
     * Defines selection frequency behavior for an action or group.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action should usually be preselected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionPrecheckBehavior
     */
    public function getPrecheckBehavior(): null|FHIRActionPrecheckBehavior
    {
        return $this->precheckBehavior;
    }

    /**
     * Defines selection frequency behavior for an action or group.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action should usually be preselected.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionPrecheckBehavior $precheckBehavior
     * @return static
     */
    public function setPrecheckBehavior(null|FHIRActionPrecheckBehavior $precheckBehavior = null): self
    {
        if (null === $precheckBehavior) {
            $precheckBehavior = new FHIRActionPrecheckBehavior();
        }
        $this->_trackValueSet($this->precheckBehavior, $precheckBehavior);
        $this->precheckBehavior = $precheckBehavior;
        return $this;
    }

    /**
     * Defines behavior for an action or a group for how many times that item may be
     * repeated.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionCardinalityBehavior
     */
    public function getCardinalityBehavior(): null|FHIRActionCardinalityBehavior
    {
        return $this->cardinalityBehavior;
    }

    /**
     * Defines behavior for an action or a group for how many times that item may be
     * repeated.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionCardinalityBehavior $cardinalityBehavior
     * @return static
     */
    public function setCardinalityBehavior(null|FHIRActionCardinalityBehavior $cardinalityBehavior = null): self
    {
        if (null === $cardinalityBehavior) {
            $cardinalityBehavior = new FHIRActionCardinalityBehavior();
        }
        $this->_trackValueSet($this->cardinalityBehavior, $cardinalityBehavior);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getResource(): null|FHIRReference
    {
        return $this->resource;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The resource that is the target of the action (e.g. CommunicationRequest).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $resource
     * @return static
     */
    public function setResource(null|FHIRReference $resource = null): self
    {
        if (null === $resource) {
            $resource = new FHIRReference();
        }
        $this->_trackValueSet($this->resource, $resource);
        $this->resource = $resource;
        return $this;
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * Sub actions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction[]
     */
    public function getAction(): null|array
    {
        return $this->action;
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * Sub actions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction $action
     * @return static
     */
    public function addAction(null|FHIRRequestGroupAction $action = null): self
    {
        if (null === $action) {
            $action = new FHIRRequestGroupAction();
        }
        $this->_trackValueAdded();
        $this->action[] = $action;
        return $this;
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * Sub actions.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction ...$action
     * @return static
     */
    public function setAction(FHIRRequestGroupAction ...$action): self
    {
        if ([] !== $this->action) {
            $this->_trackValuesRemoved(count($this->action));
            $this->action = [];
        }
        if ([] === $action) {
            return $this;
        }
        foreach($action as $v) {
            $this->addAction($v);
        }
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
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getPrefix())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PREFIX] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TITLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTextEquivalent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT_EQUIVALENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPriority())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIORITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDocumentation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DOCUMENTATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONDITION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRelatedAction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATED_ACTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingAge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_AGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_TIMING] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getParticipant())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARTICIPANT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGroupingBehavior())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GROUPING_BEHAVIOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSelectionBehavior())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SELECTION_BEHAVIOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequiredBehavior())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUIRED_BEHAVIOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPrecheckBehavior())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRECHECK_BEHAVIOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCardinalityBehavior())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CARDINALITY_BEHAVIOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESOURCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ACTION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PREFIX])) {
            $v = $this->getPrefix();
            foreach($validationRules[self::FIELD_PREFIX] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_PREFIX, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_TITLE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_TEXT_EQUIVALENT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_PRIORITY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_CODE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_DOCUMENTATION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_CONDITION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_RELATED_ACTION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_TIMING_DATE_TIME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_TIMING_AGE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_TIMING_PERIOD, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_TIMING_DURATION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_TIMING_RANGE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_TIMING_TIMING, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_PARTICIPANT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_TYPE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_GROUPING_BEHAVIOR, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_SELECTION_BEHAVIOR, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_REQUIRED_BEHAVIOR, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_PRECHECK_BEHAVIOR, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_CARDINALITY_BEHAVIOR, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_RESOURCE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION, self::FIELD_ACTION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRRequestGroupAction)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_PREFIX === $childName) {
                $type->setPrefix(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TITLE === $childName) {
                $type->setTitle(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TEXT_EQUIVALENT === $childName) {
                $type->setTextEquivalent(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PRIORITY === $childName) {
                $type->setPriority(FHIRRequestPriority::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CODE === $childName) {
                $type->addCode(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DOCUMENTATION === $childName) {
                $type->addDocumentation(FHIRRelatedArtifact::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONDITION === $childName) {
                $type->addCondition(FHIRRequestGroupCondition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RELATED_ACTION === $childName) {
                $type->addRelatedAction(FHIRRequestGroupRelatedAction::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TIMING_DATE_TIME === $childName) {
                $type->setTimingDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TIMING_AGE === $childName) {
                $type->setTimingAge(FHIRAge::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TIMING_PERIOD === $childName) {
                $type->setTimingPeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TIMING_DURATION === $childName) {
                $type->setTimingDuration(FHIRDuration::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TIMING_RANGE === $childName) {
                $type->setTimingRange(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TIMING_TIMING === $childName) {
                $type->setTimingTiming(FHIRTiming::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PARTICIPANT === $childName) {
                $type->addParticipant(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_GROUPING_BEHAVIOR === $childName) {
                $type->setGroupingBehavior(FHIRActionGroupingBehavior::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SELECTION_BEHAVIOR === $childName) {
                $type->setSelectionBehavior(FHIRActionSelectionBehavior::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REQUIRED_BEHAVIOR === $childName) {
                $type->setRequiredBehavior(FHIRActionRequiredBehavior::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PRECHECK_BEHAVIOR === $childName) {
                $type->setPrecheckBehavior(FHIRActionPrecheckBehavior::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CARDINALITY_BEHAVIOR === $childName) {
                $type->setCardinalityBehavior(FHIRActionCardinalityBehavior::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RESOURCE === $childName) {
                $type->setResource(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ACTION === $childName) {
                $type->addAction(FHIRRequestGroupAction::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_PREFIX])) {
            $pt = $type->getPrefix();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PREFIX], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPrefix((string)$attributes[self::FIELD_PREFIX], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TITLE])) {
            $pt = $type->getTitle();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TITLE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setTitle((string)$attributes[self::FIELD_TITLE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TEXT_EQUIVALENT])) {
            $pt = $type->getTextEquivalent();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TEXT_EQUIVALENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setTextEquivalent((string)$attributes[self::FIELD_TEXT_EQUIVALENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TIMING_DATE_TIME])) {
            $pt = $type->getTimingDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TIMING_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setTimingDateTime((string)$attributes[self::FIELD_TIMING_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'RequestGroupAction', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_PREFIX] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPrefix())) {
            $xw->writeAttribute(self::FIELD_PREFIX, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_TITLE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getTitle())) {
            $xw->writeAttribute(self::FIELD_TITLE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_TEXT_EQUIVALENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getTextEquivalent())) {
            $xw->writeAttribute(self::FIELD_TEXT_EQUIVALENT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_TIMING_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getTimingDateTime())) {
            $xw->writeAttribute(self::FIELD_TIMING_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_PREFIX] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPrefix())) {
            $xw->startElement(self::FIELD_PREFIX);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_TITLE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getTitle())) {
            $xw->startElement(self::FIELD_TITLE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_TEXT_EQUIVALENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getTextEquivalent())) {
            $xw->startElement(self::FIELD_TEXT_EQUIVALENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPriority())) {
            $xw->startElement(self::FIELD_PRIORITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getCode() as $v) {
            $xw->startElement(self::FIELD_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getDocumentation() as $v) {
            $xw->startElement(self::FIELD_DOCUMENTATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getCondition() as $v) {
            $xw->startElement(self::FIELD_CONDITION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getRelatedAction() as $v) {
            $xw->startElement(self::FIELD_RELATED_ACTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_TIMING_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getTimingDateTime())) {
            $xw->startElement(self::FIELD_TIMING_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getTimingAge())) {
            $xw->startElement(self::FIELD_TIMING_AGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            $xw->startElement(self::FIELD_TIMING_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getTimingDuration())) {
            $xw->startElement(self::FIELD_TIMING_DURATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getTimingRange())) {
            $xw->startElement(self::FIELD_TIMING_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getTimingTiming())) {
            $xw->startElement(self::FIELD_TIMING_TIMING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getParticipant() as $v) {
            $xw->startElement(self::FIELD_PARTICIPANT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getGroupingBehavior())) {
            $xw->startElement(self::FIELD_GROUPING_BEHAVIOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSelectionBehavior())) {
            $xw->startElement(self::FIELD_SELECTION_BEHAVIOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRequiredBehavior())) {
            $xw->startElement(self::FIELD_REQUIRED_BEHAVIOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPrecheckBehavior())) {
            $xw->startElement(self::FIELD_PRECHECK_BEHAVIOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCardinalityBehavior())) {
            $xw->startElement(self::FIELD_CARDINALITY_BEHAVIOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getResource())) {
            $xw->startElement(self::FIELD_RESOURCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAction() as $v) {
            $xw->startElement(self::FIELD_ACTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getPrefix())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PREFIX} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PREFIX_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TITLE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TITLE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTextEquivalent())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TEXT_EQUIVALENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TEXT_EQUIVALENT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPriority())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PRIORITY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRRequestPriority::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PRIORITY_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            $out->{self::FIELD_CODE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CODE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getDocumentation())) {
            $out->{self::FIELD_DOCUMENTATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_DOCUMENTATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            $out->{self::FIELD_CONDITION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CONDITION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getRelatedAction())) {
            $out->{self::FIELD_RELATED_ACTION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_RELATED_ACTION}[] = $v;
            }
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TIMING_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TIMING_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTimingAge())) {
            $out->{self::FIELD_TIMING_AGE} = $v;
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            $out->{self::FIELD_TIMING_PERIOD} = $v;
        }
        if (null !== ($v = $this->getTimingDuration())) {
            $out->{self::FIELD_TIMING_DURATION} = $v;
        }
        if (null !== ($v = $this->getTimingRange())) {
            $out->{self::FIELD_TIMING_RANGE} = $v;
        }
        if (null !== ($v = $this->getTimingTiming())) {
            $out->{self::FIELD_TIMING_TIMING} = $v;
        }
        if ([] !== ($vs = $this->getParticipant())) {
            $out->{self::FIELD_PARTICIPANT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PARTICIPANT}[] = $v;
            }
        }
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getGroupingBehavior())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_GROUPING_BEHAVIOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRActionGroupingBehavior::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_GROUPING_BEHAVIOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSelectionBehavior())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SELECTION_BEHAVIOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRActionSelectionBehavior::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SELECTION_BEHAVIOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRequiredBehavior())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REQUIRED_BEHAVIOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRActionRequiredBehavior::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REQUIRED_BEHAVIOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPrecheckBehavior())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PRECHECK_BEHAVIOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRActionPrecheckBehavior::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PRECHECK_BEHAVIOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCardinalityBehavior())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CARDINALITY_BEHAVIOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRActionCardinalityBehavior::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CARDINALITY_BEHAVIOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getResource())) {
            $out->{self::FIELD_RESOURCE} = $v;
        }
        if ([] !== ($vs = $this->getAction())) {
            $out->{self::FIELD_ACTION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_ACTION}[] = $v;
            }
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