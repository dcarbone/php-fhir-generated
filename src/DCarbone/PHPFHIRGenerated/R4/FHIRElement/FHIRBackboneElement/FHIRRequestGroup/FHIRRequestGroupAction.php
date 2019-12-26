<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionCardinalityBehavior;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionGroupingBehavior;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionPrecheckBehavior;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionRequiredBehavior;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionSelectionBehavior;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestPriority;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

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
    const FIELD_ACTION = 'action';
    const FIELD_CARDINALITY_BEHAVIOR = 'cardinalityBehavior';
    const FIELD_CARDINALITY_BEHAVIOR_EXT = '_cardinalityBehavior';
    const FIELD_CODE = 'code';
    const FIELD_CONDITION = 'condition';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DOCUMENTATION = 'documentation';
    const FIELD_GROUPING_BEHAVIOR = 'groupingBehavior';
    const FIELD_GROUPING_BEHAVIOR_EXT = '_groupingBehavior';
    const FIELD_PARTICIPANT = 'participant';
    const FIELD_PRECHECK_BEHAVIOR = 'precheckBehavior';
    const FIELD_PRECHECK_BEHAVIOR_EXT = '_precheckBehavior';
    const FIELD_PREFIX = 'prefix';
    const FIELD_PREFIX_EXT = '_prefix';
    const FIELD_PRIORITY = 'priority';
    const FIELD_PRIORITY_EXT = '_priority';
    const FIELD_RELATED_ACTION = 'relatedAction';
    const FIELD_REQUIRED_BEHAVIOR = 'requiredBehavior';
    const FIELD_REQUIRED_BEHAVIOR_EXT = '_requiredBehavior';
    const FIELD_RESOURCE = 'resource';
    const FIELD_SELECTION_BEHAVIOR = 'selectionBehavior';
    const FIELD_SELECTION_BEHAVIOR_EXT = '_selectionBehavior';
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
    const FIELD_TYPE = 'type';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * Sub actions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction[]
     */
    protected $action = [];

    /**
     * Defines behavior for an action or a group for how many times that item may be
     * repeated.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionCardinalityBehavior
     */
    protected $cardinalityBehavior = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that provides meaning for the action or action group. For example, a
     * section may have a LOINC code for a section of a documentation template.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $code = [];

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * An expression that describes applicability criteria, or start/stop conditions
     * for the action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupCondition[]
     */
    protected $condition = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description of the action used to provide a summary to display to the
     * user.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $description = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact[]
     */
    protected $documentation = [];

    /**
     * Defines organization behavior of a group.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionGroupingBehavior
     */
    protected $groupingBehavior = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The participant that should perform or be responsible for this action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $participant = [];

    /**
     * Defines selection frequency behavior for an action or group.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action should usually be preselected.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionPrecheckBehavior
     */
    protected $precheckBehavior = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A user-visible prefix for the action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $prefix = null;

    /**
     * Identifies the level of importance to be assigned to actioning the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the action should be addressed with respect to other
     * actions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestPriority
     */
    protected $priority = null;

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction[]
     */
    protected $relatedAction = [];

    /**
     * Defines expectations around whether an action or action group is required.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines expectations around whether an action is required.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionRequiredBehavior
     */
    protected $requiredBehavior = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The resource that is the target of the action (e.g. CommunicationRequest).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $resource = null;

    /**
     * Defines selection behavior of a group.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionSelectionBehavior
     */
    protected $selectionBehavior = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A text equivalent of the action to be performed. This provides a
     * human-interpretable description of the action when the definition is consumed by
     * a system that might not be capable of interpreting it dynamically.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $textEquivalent = null;

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected $timingAge = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $timingDateTime = null;

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected $timingDuration = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $timingPeriod = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    protected $timingRange = null;

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    protected $timingTiming = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The title of the action displayed to a user.
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
     * The type of action to perform (create, update, remove).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $type = null;

    /**
     * Validation map for fields in type RequestGroup.Action
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRRequestGroupAction Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRRequestGroupAction::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTION])) {
            if (is_array($data[self::FIELD_ACTION])) {
                foreach($data[self::FIELD_ACTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRRequestGroupAction) {
                        $this->addAction($v);
                    } else {
                        $this->addAction(new FHIRRequestGroupAction($v));
                    }
                }
            } else if ($data[self::FIELD_ACTION] instanceof FHIRRequestGroupAction) {
                $this->addAction($data[self::FIELD_ACTION]);
            } else {
                $this->addAction(new FHIRRequestGroupAction($data[self::FIELD_ACTION]));
            }
        }
        if (isset($data[self::FIELD_CARDINALITY_BEHAVIOR]) || isset($data[self::FIELD_CARDINALITY_BEHAVIOR_EXT])) {
            if (isset($data[self::FIELD_CARDINALITY_BEHAVIOR])) {
                $value = $data[self::FIELD_CARDINALITY_BEHAVIOR];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CARDINALITY_BEHAVIOR_EXT]) && is_array($data[self::FIELD_CARDINALITY_BEHAVIOR_EXT])) {
                $ext = $data[self::FIELD_CARDINALITY_BEHAVIOR_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRActionCardinalityBehavior) {
                    $this->setCardinalityBehavior($value);
                } else if (is_array($value)) {
                    $this->setCardinalityBehavior(new FHIRActionCardinalityBehavior(array_merge($ext, $value)));
                } else {
                    $this->setCardinalityBehavior(new FHIRActionCardinalityBehavior([FHIRActionCardinalityBehavior::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCardinalityBehavior(new FHIRActionCardinalityBehavior($ext));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if (is_array($data[self::FIELD_CODE])) {
                foreach($data[self::FIELD_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRRequestGroupCondition) {
                        $this->addCondition($v);
                    } else {
                        $this->addCondition(new FHIRRequestGroupCondition($v));
                    }
                }
            } else if ($data[self::FIELD_CONDITION] instanceof FHIRRequestGroupCondition) {
                $this->addCondition($data[self::FIELD_CONDITION]);
            } else {
                $this->addCondition(new FHIRRequestGroupCondition($data[self::FIELD_CONDITION]));
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
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DOCUMENTATION])) {
            if (is_array($data[self::FIELD_DOCUMENTATION])) {
                foreach($data[self::FIELD_DOCUMENTATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_GROUPING_BEHAVIOR]) || isset($data[self::FIELD_GROUPING_BEHAVIOR_EXT])) {
            if (isset($data[self::FIELD_GROUPING_BEHAVIOR])) {
                $value = $data[self::FIELD_GROUPING_BEHAVIOR];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_GROUPING_BEHAVIOR_EXT]) && is_array($data[self::FIELD_GROUPING_BEHAVIOR_EXT])) {
                $ext = $data[self::FIELD_GROUPING_BEHAVIOR_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRActionGroupingBehavior) {
                    $this->setGroupingBehavior($value);
                } else if (is_array($value)) {
                    $this->setGroupingBehavior(new FHIRActionGroupingBehavior(array_merge($ext, $value)));
                } else {
                    $this->setGroupingBehavior(new FHIRActionGroupingBehavior([FHIRActionGroupingBehavior::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setGroupingBehavior(new FHIRActionGroupingBehavior($ext));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT])) {
            if (is_array($data[self::FIELD_PARTICIPANT])) {
                foreach($data[self::FIELD_PARTICIPANT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addParticipant($v);
                    } else {
                        $this->addParticipant(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_PARTICIPANT] instanceof FHIRReference) {
                $this->addParticipant($data[self::FIELD_PARTICIPANT]);
            } else {
                $this->addParticipant(new FHIRReference($data[self::FIELD_PARTICIPANT]));
            }
        }
        if (isset($data[self::FIELD_PRECHECK_BEHAVIOR]) || isset($data[self::FIELD_PRECHECK_BEHAVIOR_EXT])) {
            if (isset($data[self::FIELD_PRECHECK_BEHAVIOR])) {
                $value = $data[self::FIELD_PRECHECK_BEHAVIOR];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PRECHECK_BEHAVIOR_EXT]) && is_array($data[self::FIELD_PRECHECK_BEHAVIOR_EXT])) {
                $ext = $data[self::FIELD_PRECHECK_BEHAVIOR_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRActionPrecheckBehavior) {
                    $this->setPrecheckBehavior($value);
                } else if (is_array($value)) {
                    $this->setPrecheckBehavior(new FHIRActionPrecheckBehavior(array_merge($ext, $value)));
                } else {
                    $this->setPrecheckBehavior(new FHIRActionPrecheckBehavior([FHIRActionPrecheckBehavior::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPrecheckBehavior(new FHIRActionPrecheckBehavior($ext));
            }
        }
        if (isset($data[self::FIELD_PREFIX]) || isset($data[self::FIELD_PREFIX_EXT])) {
            if (isset($data[self::FIELD_PREFIX])) {
                $value = $data[self::FIELD_PREFIX];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PREFIX_EXT]) && is_array($data[self::FIELD_PREFIX_EXT])) {
                $ext = $data[self::FIELD_PREFIX_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPrefix($value);
                } else if (is_array($value)) {
                    $this->setPrefix(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPrefix(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPrefix(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PRIORITY]) || isset($data[self::FIELD_PRIORITY_EXT])) {
            if (isset($data[self::FIELD_PRIORITY])) {
                $value = $data[self::FIELD_PRIORITY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PRIORITY_EXT]) && is_array($data[self::FIELD_PRIORITY_EXT])) {
                $ext = $data[self::FIELD_PRIORITY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRRequestPriority) {
                    $this->setPriority($value);
                } else if (is_array($value)) {
                    $this->setPriority(new FHIRRequestPriority(array_merge($ext, $value)));
                } else {
                    $this->setPriority(new FHIRRequestPriority([FHIRRequestPriority::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPriority(new FHIRRequestPriority($ext));
            }
        }
        if (isset($data[self::FIELD_RELATED_ACTION])) {
            if (is_array($data[self::FIELD_RELATED_ACTION])) {
                foreach($data[self::FIELD_RELATED_ACTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRRequestGroupRelatedAction) {
                        $this->addRelatedAction($v);
                    } else {
                        $this->addRelatedAction(new FHIRRequestGroupRelatedAction($v));
                    }
                }
            } else if ($data[self::FIELD_RELATED_ACTION] instanceof FHIRRequestGroupRelatedAction) {
                $this->addRelatedAction($data[self::FIELD_RELATED_ACTION]);
            } else {
                $this->addRelatedAction(new FHIRRequestGroupRelatedAction($data[self::FIELD_RELATED_ACTION]));
            }
        }
        if (isset($data[self::FIELD_REQUIRED_BEHAVIOR]) || isset($data[self::FIELD_REQUIRED_BEHAVIOR_EXT])) {
            if (isset($data[self::FIELD_REQUIRED_BEHAVIOR])) {
                $value = $data[self::FIELD_REQUIRED_BEHAVIOR];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_REQUIRED_BEHAVIOR_EXT]) && is_array($data[self::FIELD_REQUIRED_BEHAVIOR_EXT])) {
                $ext = $data[self::FIELD_REQUIRED_BEHAVIOR_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRActionRequiredBehavior) {
                    $this->setRequiredBehavior($value);
                } else if (is_array($value)) {
                    $this->setRequiredBehavior(new FHIRActionRequiredBehavior(array_merge($ext, $value)));
                } else {
                    $this->setRequiredBehavior(new FHIRActionRequiredBehavior([FHIRActionRequiredBehavior::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setRequiredBehavior(new FHIRActionRequiredBehavior($ext));
            }
        }
        if (isset($data[self::FIELD_RESOURCE])) {
            if ($data[self::FIELD_RESOURCE] instanceof FHIRReference) {
                $this->setResource($data[self::FIELD_RESOURCE]);
            } else {
                $this->setResource(new FHIRReference($data[self::FIELD_RESOURCE]));
            }
        }
        if (isset($data[self::FIELD_SELECTION_BEHAVIOR]) || isset($data[self::FIELD_SELECTION_BEHAVIOR_EXT])) {
            if (isset($data[self::FIELD_SELECTION_BEHAVIOR])) {
                $value = $data[self::FIELD_SELECTION_BEHAVIOR];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SELECTION_BEHAVIOR_EXT]) && is_array($data[self::FIELD_SELECTION_BEHAVIOR_EXT])) {
                $ext = $data[self::FIELD_SELECTION_BEHAVIOR_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRActionSelectionBehavior) {
                    $this->setSelectionBehavior($value);
                } else if (is_array($value)) {
                    $this->setSelectionBehavior(new FHIRActionSelectionBehavior(array_merge($ext, $value)));
                } else {
                    $this->setSelectionBehavior(new FHIRActionSelectionBehavior([FHIRActionSelectionBehavior::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSelectionBehavior(new FHIRActionSelectionBehavior($ext));
            }
        }
        if (isset($data[self::FIELD_TEXT_EQUIVALENT]) || isset($data[self::FIELD_TEXT_EQUIVALENT_EXT])) {
            if (isset($data[self::FIELD_TEXT_EQUIVALENT])) {
                $value = $data[self::FIELD_TEXT_EQUIVALENT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TEXT_EQUIVALENT_EXT]) && is_array($data[self::FIELD_TEXT_EQUIVALENT_EXT])) {
                $ext = $data[self::FIELD_TEXT_EQUIVALENT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTextEquivalent($value);
                } else if (is_array($value)) {
                    $this->setTextEquivalent(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTextEquivalent(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTextEquivalent(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_TIMING_AGE])) {
            if ($data[self::FIELD_TIMING_AGE] instanceof FHIRAge) {
                $this->setTimingAge($data[self::FIELD_TIMING_AGE]);
            } else {
                $this->setTimingAge(new FHIRAge($data[self::FIELD_TIMING_AGE]));
            }
        }
        if (isset($data[self::FIELD_TIMING_DATE_TIME]) || isset($data[self::FIELD_TIMING_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_TIMING_DATE_TIME])) {
                $value = $data[self::FIELD_TIMING_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TIMING_DATE_TIME_EXT]) && is_array($data[self::FIELD_TIMING_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_TIMING_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setTimingDateTime($value);
                } else if (is_array($value)) {
                    $this->setTimingDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setTimingDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTimingDateTime(new FHIRDateTime($ext));
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
        return "<RequestGroupAction{$xmlns}></RequestGroupAction>";
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * Sub actions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction[]
     */
    public function getAction()
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
    public function addAction(FHIRRequestGroupAction $action = null)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * Sub actions.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction[] $action
     * @return static
     */
    public function setAction(array $action = [])
    {
        $this->action = [];
        if ([] === $action) {
            return $this;
        }
        foreach($action as $v) {
            if ($v instanceof FHIRRequestGroupAction) {
                $this->addAction($v);
            } else {
                $this->addAction(new FHIRRequestGroupAction($v));
            }
        }
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
    public function getCardinalityBehavior()
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
    public function setCardinalityBehavior(FHIRActionCardinalityBehavior $cardinalityBehavior = null)
    {
        $this->cardinalityBehavior = $cardinalityBehavior;
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
    public function getCode()
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
    public function addCode(FHIRCodeableConcept $code = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $code
     * @return static
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
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * An expression that describes applicability criteria, or start/stop conditions
     * for the action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupCondition[]
     */
    public function getCondition()
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
    public function addCondition(FHIRRequestGroupCondition $condition = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupCondition[] $condition
     * @return static
     */
    public function setCondition(array $condition = [])
    {
        $this->condition = [];
        if ([] === $condition) {
            return $this;
        }
        foreach($condition as $v) {
            if ($v instanceof FHIRRequestGroupCondition) {
                $this->addCondition($v);
            } else {
                $this->addCondition(new FHIRRequestGroupCondition($v));
            }
        }
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
    public function getDescription()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $description
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Didactic or other informational resources associated with the action that can be
     * provided to the CDS recipient. Information resources can include inline text
     * commentary and links to web resources.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact[]
     */
    public function getDocumentation()
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
    public function addDocumentation(FHIRRelatedArtifact $documentation = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact[] $documentation
     * @return static
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
     * Defines organization behavior of a group.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionGroupingBehavior
     */
    public function getGroupingBehavior()
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
    public function setGroupingBehavior(FHIRActionGroupingBehavior $groupingBehavior = null)
    {
        $this->groupingBehavior = $groupingBehavior;
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
    public function getParticipant()
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
    public function addParticipant(FHIRReference $participant = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $participant
     * @return static
     */
    public function setParticipant(array $participant = [])
    {
        $this->participant = [];
        if ([] === $participant) {
            return $this;
        }
        foreach($participant as $v) {
            if ($v instanceof FHIRReference) {
                $this->addParticipant($v);
            } else {
                $this->addParticipant(new FHIRReference($v));
            }
        }
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
    public function getPrecheckBehavior()
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
    public function setPrecheckBehavior(FHIRActionPrecheckBehavior $precheckBehavior = null)
    {
        $this->precheckBehavior = $precheckBehavior;
        return $this;
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
    public function getPrefix()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $prefix
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the action should be addressed with respect to other
     * actions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestPriority
     */
    public function getPriority()
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
    public function setPriority(FHIRRequestPriority $priority = null)
    {
        $this->priority = $priority;
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
    public function getRelatedAction()
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
    public function addRelatedAction(FHIRRequestGroupRelatedAction $relatedAction = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction[] $relatedAction
     * @return static
     */
    public function setRelatedAction(array $relatedAction = [])
    {
        $this->relatedAction = [];
        if ([] === $relatedAction) {
            return $this;
        }
        foreach($relatedAction as $v) {
            if ($v instanceof FHIRRequestGroupRelatedAction) {
                $this->addRelatedAction($v);
            } else {
                $this->addRelatedAction(new FHIRRequestGroupRelatedAction($v));
            }
        }
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
    public function getRequiredBehavior()
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
    public function setRequiredBehavior(FHIRActionRequiredBehavior $requiredBehavior = null)
    {
        $this->requiredBehavior = $requiredBehavior;
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
    public function getResource()
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
    public function setResource(FHIRReference $resource = null)
    {
        $this->resource = $resource;
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
    public function getSelectionBehavior()
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
    public function setSelectionBehavior(FHIRActionSelectionBehavior $selectionBehavior = null)
    {
        $this->selectionBehavior = $selectionBehavior;
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
    public function getTextEquivalent()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $textEquivalent
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getTimingAge()
    {
        return $this->timingAge;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge $timingAge
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $timingDateTime
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getTimingDuration()
    {
        return $this->timingDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $timingDuration
     * @return static
     */
    public function setTimingDuration(FHIRDuration $timingDuration = null)
    {
        $this->timingDuration = $timingDuration;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $timingPeriod
     * @return static
     */
    public function setTimingPeriod(FHIRPeriod $timingPeriod = null)
    {
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    public function getTimingRange()
    {
        return $this->timingRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $timingRange
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming $timingTiming
     * @return static
     */
    public function setTimingTiming(FHIRTiming $timingTiming = null)
    {
        $this->timingTiming = $timingTiming;
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
    public function getTitle()
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
     * The type of action to perform (create, update, remove).
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of action to perform (create, update, remove).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
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
        if ([] !== ($vs = $this->getAction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ACTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCardinalityBehavior())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CARDINALITY_BEHAVIOR] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CODE, $i)] = $fieldErrs;
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
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDocumentation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DOCUMENTATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getGroupingBehavior())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GROUPING_BEHAVIOR] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getParticipant())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARTICIPANT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPrecheckBehavior())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRECHECK_BEHAVIOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPrefix())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PREFIX] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPriority())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIORITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRelatedAction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATED_ACTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRequiredBehavior())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUIRED_BEHAVIOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSelectionBehavior())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SELECTION_BEHAVIOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTextEquivalent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT_EQUIVALENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingAge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_AGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_PERIOD] = $fieldErrs;
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
        if (null !== ($v = $this->getTitle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TITLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
                throw new \DomainException(sprintf('FHIRRequestGroupAction::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRRequestGroupAction::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRRequestGroupAction;
        } elseif (!is_object($type) || !($type instanceof FHIRRequestGroupAction)) {
            throw new \RuntimeException(sprintf(
                'FHIRRequestGroupAction::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
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
                $type->addAction(FHIRRequestGroupAction::xmlUnserialize($child));
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
                $type->addCondition(FHIRRequestGroupCondition::xmlUnserialize($child));
            }
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->description)) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->description);
            } else {
                $type->setDescription((string)$attributes->description);
            }
        }
        if (isset($children->documentation)) {
            foreach($children->documentation as $child) {
                $type->addDocumentation(FHIRRelatedArtifact::xmlUnserialize($child));
            }
        }
        if (isset($children->groupingBehavior)) {
            $type->setGroupingBehavior(FHIRActionGroupingBehavior::xmlUnserialize($children->groupingBehavior));
        }
        if (isset($children->participant)) {
            foreach($children->participant as $child) {
                $type->addParticipant(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->precheckBehavior)) {
            $type->setPrecheckBehavior(FHIRActionPrecheckBehavior::xmlUnserialize($children->precheckBehavior));
        }
        if (isset($children->prefix)) {
            $type->setPrefix(FHIRString::xmlUnserialize($children->prefix));
        }
        if (isset($attributes->prefix)) {
            $pt = $type->getPrefix();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->prefix);
            } else {
                $type->setPrefix((string)$attributes->prefix);
            }
        }
        if (isset($children->priority)) {
            $type->setPriority(FHIRRequestPriority::xmlUnserialize($children->priority));
        }
        if (isset($children->relatedAction)) {
            foreach($children->relatedAction as $child) {
                $type->addRelatedAction(FHIRRequestGroupRelatedAction::xmlUnserialize($child));
            }
        }
        if (isset($children->requiredBehavior)) {
            $type->setRequiredBehavior(FHIRActionRequiredBehavior::xmlUnserialize($children->requiredBehavior));
        }
        if (isset($children->resource)) {
            $type->setResource(FHIRReference::xmlUnserialize($children->resource));
        }
        if (isset($children->selectionBehavior)) {
            $type->setSelectionBehavior(FHIRActionSelectionBehavior::xmlUnserialize($children->selectionBehavior));
        }
        if (isset($children->textEquivalent)) {
            $type->setTextEquivalent(FHIRString::xmlUnserialize($children->textEquivalent));
        }
        if (isset($attributes->textEquivalent)) {
            $pt = $type->getTextEquivalent();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->textEquivalent);
            } else {
                $type->setTextEquivalent((string)$attributes->textEquivalent);
            }
        }
        if (isset($children->timingAge)) {
            $type->setTimingAge(FHIRAge::xmlUnserialize($children->timingAge));
        }
        if (isset($children->timingDateTime)) {
            $type->setTimingDateTime(FHIRDateTime::xmlUnserialize($children->timingDateTime));
        }
        if (isset($attributes->timingDateTime)) {
            $pt = $type->getTimingDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->timingDateTime);
            } else {
                $type->setTimingDateTime((string)$attributes->timingDateTime);
            }
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
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
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
        if (null !== ($v = $this->getCardinalityBehavior())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CARDINALITY_BEHAVIOR, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONDITION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getDocumentation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DOCUMENTATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getGroupingBehavior())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GROUPING_BEHAVIOR, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getParticipant())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPrecheckBehavior())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRECHECK_BEHAVIOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPrefix())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PREFIX, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPriority())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRIORITY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getRelatedAction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELATED_ACTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getRequiredBehavior())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUIRED_BEHAVIOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getResource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESOURCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSelectionBehavior())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SELECTION_BEHAVIOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTextEquivalent())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TEXT_EQUIVALENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTimingAge())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_AGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTimingDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_DURATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTimingRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTimingTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_TIMING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTitle())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TITLE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_ACTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ACTION][] = $v;
            }
        }
        if (null !== ($v = $this->getCardinalityBehavior())) {
            $a[self::FIELD_CARDINALITY_BEHAVIOR] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRActionCardinalityBehavior::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRActionCardinalityBehavior::FIELD_VALUE]);
                $a[self::FIELD_CARDINALITY_BEHAVIOR_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            $a[self::FIELD_CODE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CODE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            $a[self::FIELD_CONDITION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONDITION][] = $v;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getDocumentation())) {
            $a[self::FIELD_DOCUMENTATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DOCUMENTATION][] = $v;
            }
        }
        if (null !== ($v = $this->getGroupingBehavior())) {
            $a[self::FIELD_GROUPING_BEHAVIOR] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRActionGroupingBehavior::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRActionGroupingBehavior::FIELD_VALUE]);
                $a[self::FIELD_GROUPING_BEHAVIOR_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getParticipant())) {
            $a[self::FIELD_PARTICIPANT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PARTICIPANT][] = $v;
            }
        }
        if (null !== ($v = $this->getPrecheckBehavior())) {
            $a[self::FIELD_PRECHECK_BEHAVIOR] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRActionPrecheckBehavior::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRActionPrecheckBehavior::FIELD_VALUE]);
                $a[self::FIELD_PRECHECK_BEHAVIOR_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPrefix())) {
            $a[self::FIELD_PREFIX] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PREFIX_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPriority())) {
            $a[self::FIELD_PRIORITY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRRequestPriority::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRRequestPriority::FIELD_VALUE]);
                $a[self::FIELD_PRIORITY_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getRelatedAction())) {
            $a[self::FIELD_RELATED_ACTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_RELATED_ACTION][] = $v;
            }
        }
        if (null !== ($v = $this->getRequiredBehavior())) {
            $a[self::FIELD_REQUIRED_BEHAVIOR] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRActionRequiredBehavior::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRActionRequiredBehavior::FIELD_VALUE]);
                $a[self::FIELD_REQUIRED_BEHAVIOR_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getResource())) {
            $a[self::FIELD_RESOURCE] = $v;
        }
        if (null !== ($v = $this->getSelectionBehavior())) {
            $a[self::FIELD_SELECTION_BEHAVIOR] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRActionSelectionBehavior::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRActionSelectionBehavior::FIELD_VALUE]);
                $a[self::FIELD_SELECTION_BEHAVIOR_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getTextEquivalent())) {
            $a[self::FIELD_TEXT_EQUIVALENT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_TEXT_EQUIVALENT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getTimingAge())) {
            $a[self::FIELD_TIMING_AGE] = $v;
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            $a[self::FIELD_TIMING_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_TIMING_DATE_TIME_EXT] = $enc;
            }
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
            $a[self::FIELD_TITLE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_TITLE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}