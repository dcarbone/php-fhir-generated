<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:04+0000
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionCardinalityBehavior;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionGroupingBehavior;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionPrecheckBehavior;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionRequiredBehavior;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionSelectionBehavior;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRelatedArtifact;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A group of related requests that can be used to capture intended activities that
 * have inter-dependencies such as "give this medication after that one".
 *
 * Class FHIRRequestGroupAction
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup
 */
class FHIRRequestGroupAction extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

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
    const FIELD_LABEL = 'label';
    const FIELD_LABEL_EXT = '_label';
    const FIELD_PARTICIPANT = 'participant';
    const FIELD_PRECHECK_BEHAVIOR = 'precheckBehavior';
    const FIELD_PRECHECK_BEHAVIOR_EXT = '_precheckBehavior';
    const FIELD_RELATED_ACTION = 'relatedAction';
    const FIELD_REQUIRED_BEHAVIOR = 'requiredBehavior';
    const FIELD_REQUIRED_BEHAVIOR_EXT = '_requiredBehavior';
    const FIELD_RESOURCE = 'resource';
    const FIELD_SELECTION_BEHAVIOR = 'selectionBehavior';
    const FIELD_SELECTION_BEHAVIOR_EXT = '_selectionBehavior';
    const FIELD_TEXT_EQUIVALENT = 'textEquivalent';
    const FIELD_TEXT_EQUIVALENT_EXT = '_textEquivalent';
    const FIELD_TIMING_DATE_TIME = 'timingDateTime';
    const FIELD_TIMING_DATE_TIME_EXT = '_timingDateTime';
    const FIELD_TIMING_DURATION = 'timingDuration';
    const FIELD_TIMING_PERIOD = 'timingPeriod';
    const FIELD_TIMING_RANGE = 'timingRange';
    const FIELD_TIMING_TIMING = 'timingTiming';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';
    const FIELD_TYPE = 'type';

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * Sub actions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction[]
     */
    private $action = [];
    /**
     * Defines behavior for an action or a group for how many times that item may be
     * repeated
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionCardinalityBehavior
     */
    private $cardinalityBehavior = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code that provides meaning for the action or action group. For example, a
     * section may have a LOINC code for a the section of a documentation template.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    private $code = [];
    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * An expression that describes applicability criteria, or start/stop conditions
     * for the action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupCondition[]
     */
    private $condition = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short description of the action used to provide a summary to display to the
     * user.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRelatedArtifact[]
     */
    private $documentation = [];
    /**
     * Defines organization behavior of a group
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionGroupingBehavior
     */
    private $groupingBehavior = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A user-visible label for the action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $label = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The participant that should perform or be responsible for this action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    private $participant = [];
    /**
     * Defines selection frequency behavior for an action or group
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines whether the action should usually be preselected.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionPrecheckBehavior
     */
    private $precheckBehavior = null;
    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction[]
     */
    private $relatedAction = [];
    /**
     * Defines requiredness behavior for selecting an action or an action group
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines the requiredness behavior for the action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionRequiredBehavior
     */
    private $requiredBehavior = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The resource that is the target of the action (e.g. CommunicationRequest).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $resource = null;
    /**
     * Defines selection behavior of a group
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionSelectionBehavior
     */
    private $selectionBehavior = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A text equivalent of the action to be performed. This provides a
     * human-interpretable description of the action when the definition is consumed by
     * a system that may not be capable of interpreting it dynamically.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $textEquivalent = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    private $timingDateTime = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $timingDuration = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    private $timingPeriod = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
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
     * An optional value describing when the action should be performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
     */
    private $timingTiming = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The title of the action displayed to a user.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $title = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of action to perform (create, update, remove).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    private $type = null;

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
        if (isset($data[self::FIELD_CARDINALITY_BEHAVIOR])) {
            $ext = (isset($data[self::FIELD_CARDINALITY_BEHAVIOR_EXT]) && is_array($data[self::FIELD_CARDINALITY_BEHAVIOR_EXT]))
                ? $data[self::FIELD_CARDINALITY_BEHAVIOR_EXT]
                : null;
            if ($data[self::FIELD_CARDINALITY_BEHAVIOR] instanceof FHIRActionCardinalityBehavior) {
                $this->setCardinalityBehavior($data[self::FIELD_CARDINALITY_BEHAVIOR]);
            } elseif ($ext && is_scalar($data[self::FIELD_CARDINALITY_BEHAVIOR])) {
                $this->setCardinalityBehavior(new FHIRActionCardinalityBehavior([FHIRActionCardinalityBehavior::FIELD_VALUE => $data[self::FIELD_CARDINALITY_BEHAVIOR]] + $ext));
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
        if (isset($data[self::FIELD_GROUPING_BEHAVIOR])) {
            $ext = (isset($data[self::FIELD_GROUPING_BEHAVIOR_EXT]) && is_array($data[self::FIELD_GROUPING_BEHAVIOR_EXT]))
                ? $data[self::FIELD_GROUPING_BEHAVIOR_EXT]
                : null;
            if ($data[self::FIELD_GROUPING_BEHAVIOR] instanceof FHIRActionGroupingBehavior) {
                $this->setGroupingBehavior($data[self::FIELD_GROUPING_BEHAVIOR]);
            } elseif ($ext && is_scalar($data[self::FIELD_GROUPING_BEHAVIOR])) {
                $this->setGroupingBehavior(new FHIRActionGroupingBehavior([FHIRActionGroupingBehavior::FIELD_VALUE => $data[self::FIELD_GROUPING_BEHAVIOR]] + $ext));
            } else {
                $this->setGroupingBehavior(new FHIRActionGroupingBehavior($data[self::FIELD_GROUPING_BEHAVIOR]));
            }
        }
        if (isset($data[self::FIELD_LABEL])) {
            $ext = (isset($data[self::FIELD_LABEL_EXT]) && is_array($data[self::FIELD_LABEL_EXT]))
                ? $data[self::FIELD_LABEL_EXT]
                : null;
            if ($data[self::FIELD_LABEL] instanceof FHIRString) {
                $this->setLabel($data[self::FIELD_LABEL]);
            } elseif ($ext && is_scalar($data[self::FIELD_LABEL])) {
                $this->setLabel(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_LABEL]] + $ext));
            } else {
                $this->setLabel(new FHIRString($data[self::FIELD_LABEL]));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT])) {
            if (is_array($data[self::FIELD_PARTICIPANT])) {
                foreach($data[self::FIELD_PARTICIPANT] as $v) {
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
        if (isset($data[self::FIELD_PRECHECK_BEHAVIOR])) {
            $ext = (isset($data[self::FIELD_PRECHECK_BEHAVIOR_EXT]) && is_array($data[self::FIELD_PRECHECK_BEHAVIOR_EXT]))
                ? $data[self::FIELD_PRECHECK_BEHAVIOR_EXT]
                : null;
            if ($data[self::FIELD_PRECHECK_BEHAVIOR] instanceof FHIRActionPrecheckBehavior) {
                $this->setPrecheckBehavior($data[self::FIELD_PRECHECK_BEHAVIOR]);
            } elseif ($ext && is_scalar($data[self::FIELD_PRECHECK_BEHAVIOR])) {
                $this->setPrecheckBehavior(new FHIRActionPrecheckBehavior([FHIRActionPrecheckBehavior::FIELD_VALUE => $data[self::FIELD_PRECHECK_BEHAVIOR]] + $ext));
            } else {
                $this->setPrecheckBehavior(new FHIRActionPrecheckBehavior($data[self::FIELD_PRECHECK_BEHAVIOR]));
            }
        }
        if (isset($data[self::FIELD_RELATED_ACTION])) {
            if (is_array($data[self::FIELD_RELATED_ACTION])) {
                foreach($data[self::FIELD_RELATED_ACTION] as $v) {
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
        if (isset($data[self::FIELD_REQUIRED_BEHAVIOR])) {
            $ext = (isset($data[self::FIELD_REQUIRED_BEHAVIOR_EXT]) && is_array($data[self::FIELD_REQUIRED_BEHAVIOR_EXT]))
                ? $data[self::FIELD_REQUIRED_BEHAVIOR_EXT]
                : null;
            if ($data[self::FIELD_REQUIRED_BEHAVIOR] instanceof FHIRActionRequiredBehavior) {
                $this->setRequiredBehavior($data[self::FIELD_REQUIRED_BEHAVIOR]);
            } elseif ($ext && is_scalar($data[self::FIELD_REQUIRED_BEHAVIOR])) {
                $this->setRequiredBehavior(new FHIRActionRequiredBehavior([FHIRActionRequiredBehavior::FIELD_VALUE => $data[self::FIELD_REQUIRED_BEHAVIOR]] + $ext));
            } else {
                $this->setRequiredBehavior(new FHIRActionRequiredBehavior($data[self::FIELD_REQUIRED_BEHAVIOR]));
            }
        }
        if (isset($data[self::FIELD_RESOURCE])) {
            if ($data[self::FIELD_RESOURCE] instanceof FHIRReference) {
                $this->setResource($data[self::FIELD_RESOURCE]);
            } else {
                $this->setResource(new FHIRReference($data[self::FIELD_RESOURCE]));
            }
        }
        if (isset($data[self::FIELD_SELECTION_BEHAVIOR])) {
            $ext = (isset($data[self::FIELD_SELECTION_BEHAVIOR_EXT]) && is_array($data[self::FIELD_SELECTION_BEHAVIOR_EXT]))
                ? $data[self::FIELD_SELECTION_BEHAVIOR_EXT]
                : null;
            if ($data[self::FIELD_SELECTION_BEHAVIOR] instanceof FHIRActionSelectionBehavior) {
                $this->setSelectionBehavior($data[self::FIELD_SELECTION_BEHAVIOR]);
            } elseif ($ext && is_scalar($data[self::FIELD_SELECTION_BEHAVIOR])) {
                $this->setSelectionBehavior(new FHIRActionSelectionBehavior([FHIRActionSelectionBehavior::FIELD_VALUE => $data[self::FIELD_SELECTION_BEHAVIOR]] + $ext));
            } else {
                $this->setSelectionBehavior(new FHIRActionSelectionBehavior($data[self::FIELD_SELECTION_BEHAVIOR]));
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
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCoding) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCoding($data[self::FIELD_TYPE]));
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
        return "<RequestGroupAction{$xmlns}></RequestGroupAction>";
    }


    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * Sub actions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction $action
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction[] $action
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
     * repeated
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionCardinalityBehavior
     */
    public function getCardinalityBehavior()
    {
        return $this->cardinalityBehavior;
    }

    /**
     * Defines behavior for an action or a group for how many times that item may be
     * repeated
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionCardinalityBehavior $cardinalityBehavior
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
     * section may have a LOINC code for a the section of a documentation template.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
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
     * section may have a LOINC code for a the section of a documentation template.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $code
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
     * section may have a LOINC code for a the section of a documentation template.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $code
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupCondition[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupCondition $condition
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupCondition[] $condition
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short description of the action used to provide a summary to display to the
     * user.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short description of the action used to provide a summary to display to the
     * user.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $description
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRelatedArtifact[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRelatedArtifact $documentation
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRelatedArtifact[] $documentation
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
     * Defines organization behavior of a group
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionGroupingBehavior
     */
    public function getGroupingBehavior()
    {
        return $this->groupingBehavior;
    }

    /**
     * Defines organization behavior of a group
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionGroupingBehavior $groupingBehavior
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
     */
    public function setGroupingBehavior(FHIRActionGroupingBehavior $groupingBehavior = null)
    {
        $this->groupingBehavior = $groupingBehavior;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A user-visible label for the action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A user-visible label for the action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $label
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
     */
    public function setLabel($label = null)
    {
        if (null === $label) {
            $this->label = null;
            return $this;
        }
        if ($label instanceof FHIRString) {
            $this->label = $label;
            return $this;
        }
        $this->label = new FHIRString($label);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The participant that should perform or be responsible for this action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The participant that should perform or be responsible for this action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $participant
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
     */
    public function addParticipant(FHIRReference $participant = null)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The participant that should perform or be responsible for this action.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $participant
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
     * Defines selection frequency behavior for an action or group
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines whether the action should usually be preselected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionPrecheckBehavior
     */
    public function getPrecheckBehavior()
    {
        return $this->precheckBehavior;
    }

    /**
     * Defines selection frequency behavior for an action or group
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines whether the action should usually be preselected.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionPrecheckBehavior $precheckBehavior
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
     */
    public function setPrecheckBehavior(FHIRActionPrecheckBehavior $precheckBehavior = null)
    {
        $this->precheckBehavior = $precheckBehavior;
        return $this;
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction $relatedAction
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction[] $relatedAction
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
     * Defines requiredness behavior for selecting an action or an action group
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines the requiredness behavior for the action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionRequiredBehavior
     */
    public function getRequiredBehavior()
    {
        return $this->requiredBehavior;
    }

    /**
     * Defines requiredness behavior for selecting an action or an action group
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines the requiredness behavior for the action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionRequiredBehavior $requiredBehavior
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
     */
    public function setRequiredBehavior(FHIRActionRequiredBehavior $requiredBehavior = null)
    {
        $this->requiredBehavior = $requiredBehavior;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The resource that is the target of the action (e.g. CommunicationRequest).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The resource that is the target of the action (e.g. CommunicationRequest).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $resource
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
     */
    public function setResource(FHIRReference $resource = null)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Defines selection behavior of a group
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionSelectionBehavior
     */
    public function getSelectionBehavior()
    {
        return $this->selectionBehavior;
    }

    /**
     * Defines selection behavior of a group
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionSelectionBehavior $selectionBehavior
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
     */
    public function setSelectionBehavior(FHIRActionSelectionBehavior $selectionBehavior = null)
    {
        $this->selectionBehavior = $selectionBehavior;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A text equivalent of the action to be performed. This provides a
     * human-interpretable description of the action when the definition is consumed by
     * a system that may not be capable of interpreting it dynamically.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getTextEquivalent()
    {
        return $this->textEquivalent;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A text equivalent of the action to be performed. This provides a
     * human-interpretable description of the action when the definition is consumed by
     * a system that may not be capable of interpreting it dynamically.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $textEquivalent
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
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
     * An optional value describing when the action should be performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $timingDateTime
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
     * An optional value describing when the action should be performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration
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
     * An optional value describing when the action should be performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration $timingDuration
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
     * An optional value describing when the action should be performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
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
     * An optional value describing when the action should be performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $timingPeriod
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
     * An optional value describing when the action should be performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
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
     * An optional value describing when the action should be performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange $timingRange
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
     * An optional value describing when the action should be performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
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
     * An optional value describing when the action should be performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming $timingTiming
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
     */
    public function setTimingTiming(FHIRTiming $timingTiming = null)
    {
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The title of the action displayed to a user.
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The title of the action displayed to a user.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $title
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of action to perform (create, update, remove).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of action to perform (create, update, remove).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $type
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
     */
    public function setType(FHIRCoding $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
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
                'FHIRRequestGroupAction::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction or null, %s seen.',
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
        if (isset($children->groupingBehavior)) {
            $type->setGroupingBehavior(FHIRActionGroupingBehavior::xmlUnserialize($children->groupingBehavior));
        }
        if (isset($attributes->label)) {
            $type->setLabel((string)$attributes->label);
        }
        if (isset($children->label)) {
            $type->setLabel(FHIRString::xmlUnserialize($children->label));
        }
        if (isset($children->participant)) {
            foreach($children->participant as $child) {
                $type->addParticipant(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->precheckBehavior)) {
            $type->setPrecheckBehavior(FHIRActionPrecheckBehavior::xmlUnserialize($children->precheckBehavior));
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
        if (isset($attributes->textEquivalent)) {
            $type->setTextEquivalent((string)$attributes->textEquivalent);
        }
        if (isset($children->textEquivalent)) {
            $type->setTextEquivalent(FHIRString::xmlUnserialize($children->textEquivalent));
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
        if (isset($children->type)) {
            $type->setType(FHIRCoding::xmlUnserialize($children->type));
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
        if (null !== ($v = $this->getLabel())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LABEL, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_ACTION] = $vs;
        }
        if (null !== ($v = $this->getCardinalityBehavior())) {
            $a[self::FIELD_CARDINALITY_BEHAVIOR] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_CARDINALITY_BEHAVIOR_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            $a[self::FIELD_CODE] = $vs;
        }
        if ([] !== ($vs = $this->getCondition())) {
            $a[self::FIELD_CONDITION] = $vs;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_DESCRIPTION_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getDocumentation())) {
            $a[self::FIELD_DOCUMENTATION] = $vs;
        }
        if (null !== ($v = $this->getGroupingBehavior())) {
            $a[self::FIELD_GROUPING_BEHAVIOR] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_GROUPING_BEHAVIOR_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getLabel())) {
            $a[self::FIELD_LABEL] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_LABEL_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getParticipant())) {
            $a[self::FIELD_PARTICIPANT] = $vs;
        }
        if (null !== ($v = $this->getPrecheckBehavior())) {
            $a[self::FIELD_PRECHECK_BEHAVIOR] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_PRECHECK_BEHAVIOR_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getRelatedAction())) {
            $a[self::FIELD_RELATED_ACTION] = $vs;
        }
        if (null !== ($v = $this->getRequiredBehavior())) {
            $a[self::FIELD_REQUIRED_BEHAVIOR] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_REQUIRED_BEHAVIOR_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getResource())) {
            $a[self::FIELD_RESOURCE] = $v;
        }
        if (null !== ($v = $this->getSelectionBehavior())) {
            $a[self::FIELD_SELECTION_BEHAVIOR] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_SELECTION_BEHAVIOR_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getTextEquivalent())) {
            $a[self::FIELD_TEXT_EQUIVALENT] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_TEXT_EQUIVALENT_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            $a[self::FIELD_TIMING_DATE_TIME] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_TIMING_DATE_TIME_EXT] = $v;
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
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_TITLE_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
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