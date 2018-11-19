<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRElement\FHIRActionCardinalityBehavior;
use PHPFHIRGenerated\FHIRElement\FHIRActionGroupingBehavior;
use PHPFHIRGenerated\FHIRElement\FHIRActionPrecheckBehavior;
use PHPFHIRGenerated\FHIRElement\FHIRActionRequiredBehavior;
use PHPFHIRGenerated\FHIRElement\FHIRActionSelectionBehavior;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRDataRequirement;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRTiming;
use PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition;

/**
 * This resource allows for the definition of various types of plans as a sharable, consumable, and executable artifact. The resource is general enough to support the description of a broad range of clinical artifacts such as clinical decision support rules, order sets and protocols.
 *
 * Class FHIRPlanDefinitionAction
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition
 */
class FHIRPlanDefinitionAction extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'PlanDefinition.Action';

    /**
     * Sub actions that are contained within the action. The behavior of this action determines the functionality of the sub-actions. For example, a selection behavior of at-most-one indicates that of the sub-actions, at most one may be chosen as part of realizing the action definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction[]
     */
    private $action = [];

    /**
     * Defines whether the action can be selected multiple times.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRActionCardinalityBehavior
     */
    private $cardinalityBehavior = null;

    /**
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for a the section of a documentation template.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $code = [];

    /**
     * An expression that describes applicability criteria, or start/stop conditions for the action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition[]
     */
    private $condition = [];

    /**
     * A reference to an ActivityDefinition that describes the action to be taken in detail, or a PlanDefinition that describes a series of actions to be taken.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $definition = null;

    /**
     * A short description of the action used to provide a summary to display to the user.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $description = null;

    /**
     * Didactic or other informational resources associated with the action that can be provided to the CDS recipient. Information resources can include inline text commentary and links to web resources.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact[]
     */
    private $documentation = [];

    /**
     * Customizations that should be applied to the statically defined resource. For example, if the dosage of a medication must be computed based on the patient's weight, a customization would be used to specify an expression that calculated the weight, and the path on the resource that would contain the result.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue[]
     */
    private $dynamicValue = [];

    /**
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId[]
     */
    private $goalId = [];

    /**
     * Defines the grouping behavior for the action and its children.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRActionGroupingBehavior
     */
    private $groupingBehavior = null;

    /**
     * Defines input data requirements for the action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement[]
     */
    private $input = [];

    /**
     * A user-visible label for the action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $label = null;

    /**
     * Defines the outputs of the action, if any.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement[]
     */
    private $output = [];

    /**
     * Indicates who should participate in performing the action described.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant[]
     */
    private $participant = [];

    /**
     * Defines whether the action should usually be preselected.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRActionPrecheckBehavior
     */
    private $precheckBehavior = null;

    /**
     * A description of why this action is necessary or appropriate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $reason = [];

    /**
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction[]
     */
    private $relatedAction = [];

    /**
     * Defines the requiredness behavior for the action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRActionRequiredBehavior
     */
    private $requiredBehavior = null;

    /**
     * Defines the selection behavior for the action and its children.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRActionSelectionBehavior
     */
    private $selectionBehavior = null;

    /**
     * A text equivalent of the action to be performed. This provides a human-interpretable description of the action when the definition is consumed by a system that may not be capable of interpreting it dynamically.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $textEquivalent = null;

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $timingDateTime = null;

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $timingDuration = null;

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $timingPeriod = null;

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    private $timingRange = null;

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    private $timingTiming = null;

    /**
     * The title of the action displayed to a user.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $title = null;

    /**
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $transform = null;

    /**
     * A description of when the action should be triggered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition[]
     */
    private $triggerDefinition = [];

    /**
     * The type of action to perform (create, update, remove).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    private $type = null;

    /**
     * FHIRPlanDefinitionAction Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['action'])) {
                $value = $data['action'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRPlanDefinitionAction($v);
                        } 
                        if (!($v instanceof FHIRPlanDefinitionAction)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Collection field \"action\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addAction($v);
                    }
                }
            }
            if (isset($data['cardinalityBehavior'])) {
                $value = $data['cardinalityBehavior'];
                if (is_array($value)) {
                    $value = new FHIRActionCardinalityBehavior($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRActionCardinalityBehavior($value);
                }
                if (!($value instanceof FHIRActionCardinalityBehavior)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Property \"cardinalityBehavior\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRActionCardinalityBehavior or data to construct type, saw ".gettype($value)); 
                }
                $this->setCardinalityBehavior($value);
            }
            if (isset($data['code'])) {
                $value = $data['code'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Collection field \"code\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addCode($v);
                    }
                }
            }
            if (isset($data['condition'])) {
                $value = $data['condition'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRPlanDefinitionCondition($v);
                        } 
                        if (!($v instanceof FHIRPlanDefinitionCondition)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Collection field \"condition\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addCondition($v);
                    }
                }
            }
            if (isset($data['definition'])) {
                $value = $data['definition'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Property \"definition\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setDefinition($value);
            }
            if (isset($data['description'])) {
                $value = $data['description'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Property \"description\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setDescription($value);
            }
            if (isset($data['documentation'])) {
                $value = $data['documentation'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRRelatedArtifact($v);
                        } 
                        if (!($v instanceof FHIRRelatedArtifact)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Collection field \"documentation\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addDocumentation($v);
                    }
                }
            }
            if (isset($data['dynamicValue'])) {
                $value = $data['dynamicValue'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRPlanDefinitionDynamicValue($v);
                        } 
                        if (!($v instanceof FHIRPlanDefinitionDynamicValue)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Collection field \"dynamicValue\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addDynamicValue($v);
                    }
                }
            }
            if (isset($data['goalId'])) {
                $value = $data['goalId'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRId($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRId($v);
                        }
                        if (!($v instanceof FHIRId)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Collection field \"goalId\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addGoalId($v);
                    }
                }
            }
            if (isset($data['groupingBehavior'])) {
                $value = $data['groupingBehavior'];
                if (is_array($value)) {
                    $value = new FHIRActionGroupingBehavior($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRActionGroupingBehavior($value);
                }
                if (!($value instanceof FHIRActionGroupingBehavior)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Property \"groupingBehavior\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRActionGroupingBehavior or data to construct type, saw ".gettype($value)); 
                }
                $this->setGroupingBehavior($value);
            }
            if (isset($data['input'])) {
                $value = $data['input'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRDataRequirement($v);
                        } 
                        if (!($v instanceof FHIRDataRequirement)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Collection field \"input\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addInput($v);
                    }
                }
            }
            if (isset($data['label'])) {
                $value = $data['label'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Property \"label\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setLabel($value);
            }
            if (isset($data['output'])) {
                $value = $data['output'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRDataRequirement($v);
                        } 
                        if (!($v instanceof FHIRDataRequirement)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Collection field \"output\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addOutput($v);
                    }
                }
            }
            if (isset($data['participant'])) {
                $value = $data['participant'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRPlanDefinitionParticipant($v);
                        } 
                        if (!($v instanceof FHIRPlanDefinitionParticipant)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Collection field \"participant\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addParticipant($v);
                    }
                }
            }
            if (isset($data['precheckBehavior'])) {
                $value = $data['precheckBehavior'];
                if (is_array($value)) {
                    $value = new FHIRActionPrecheckBehavior($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRActionPrecheckBehavior($value);
                }
                if (!($value instanceof FHIRActionPrecheckBehavior)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Property \"precheckBehavior\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRActionPrecheckBehavior or data to construct type, saw ".gettype($value)); 
                }
                $this->setPrecheckBehavior($value);
            }
            if (isset($data['reason'])) {
                $value = $data['reason'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Collection field \"reason\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addReason($v);
                    }
                }
            }
            if (isset($data['relatedAction'])) {
                $value = $data['relatedAction'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRPlanDefinitionRelatedAction($v);
                        } 
                        if (!($v instanceof FHIRPlanDefinitionRelatedAction)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Collection field \"relatedAction\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addRelatedAction($v);
                    }
                }
            }
            if (isset($data['requiredBehavior'])) {
                $value = $data['requiredBehavior'];
                if (is_array($value)) {
                    $value = new FHIRActionRequiredBehavior($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRActionRequiredBehavior($value);
                }
                if (!($value instanceof FHIRActionRequiredBehavior)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Property \"requiredBehavior\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRActionRequiredBehavior or data to construct type, saw ".gettype($value)); 
                }
                $this->setRequiredBehavior($value);
            }
            if (isset($data['selectionBehavior'])) {
                $value = $data['selectionBehavior'];
                if (is_array($value)) {
                    $value = new FHIRActionSelectionBehavior($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRActionSelectionBehavior($value);
                }
                if (!($value instanceof FHIRActionSelectionBehavior)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Property \"selectionBehavior\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRActionSelectionBehavior or data to construct type, saw ".gettype($value)); 
                }
                $this->setSelectionBehavior($value);
            }
            if (isset($data['textEquivalent'])) {
                $value = $data['textEquivalent'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Property \"textEquivalent\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setTextEquivalent($value);
            }
            if (isset($data['timingDateTime'])) {
                $value = $data['timingDateTime'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Property \"timingDateTime\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value)); 
                }
                $this->setTimingDateTime($value);
            }
            if (isset($data['timingDuration'])) {
                $value = $data['timingDuration'];
                if (is_array($value)) {
                    $value = new FHIRDuration($value);
                } 
                if (!($value instanceof FHIRDuration)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Property \"timingDuration\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration or data to construct type, saw ".gettype($value)); 
                }
                $this->setTimingDuration($value);
            }
            if (isset($data['timingPeriod'])) {
                $value = $data['timingPeriod'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Property \"timingPeriod\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value)); 
                }
                $this->setTimingPeriod($value);
            }
            if (isset($data['timingRange'])) {
                $value = $data['timingRange'];
                if (is_array($value)) {
                    $value = new FHIRRange($value);
                } 
                if (!($value instanceof FHIRRange)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Property \"timingRange\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRRange or data to construct type, saw ".gettype($value)); 
                }
                $this->setTimingRange($value);
            }
            if (isset($data['timingTiming'])) {
                $value = $data['timingTiming'];
                if (is_array($value)) {
                    $value = new FHIRTiming($value);
                } 
                if (!($value instanceof FHIRTiming)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Property \"timingTiming\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRTiming or data to construct type, saw ".gettype($value)); 
                }
                $this->setTimingTiming($value);
            }
            if (isset($data['title'])) {
                $value = $data['title'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Property \"title\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setTitle($value);
            }
            if (isset($data['transform'])) {
                $value = $data['transform'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Property \"transform\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setTransform($value);
            }
            if (isset($data['triggerDefinition'])) {
                $value = $data['triggerDefinition'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRTriggerDefinition($v);
                        } 
                        if (!($v instanceof FHIRTriggerDefinition)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Collection field \"triggerDefinition\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addTriggerDefinition($v);
                    }
                }
            }
            if (isset($data['type'])) {
                $value = $data['type'];
                if (is_array($value)) {
                    $value = new FHIRCoding($value);
                } 
                if (!($value instanceof FHIRCoding)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Property \"type\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCoding or data to construct type, saw ".gettype($value)); 
                }
                $this->setType($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Sub actions that are contained within the action. The behavior of this action determines the functionality of the sub-actions. For example, a selection behavior of at-most-one indicates that of the sub-actions, at most one may be chosen as part of realizing the action definition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     * @return $this
     */
    public function addAction(FHIRPlanDefinitionAction $action = null)
    {
        if (null === $action) {
            return $this; 
        }
        $this->action[] = $action;
        return $this;
    }

    /**
     * Sub actions that are contained within the action. The behavior of this action determines the functionality of the sub-actions. For example, a selection behavior of at-most-one indicates that of the sub-actions, at most one may be chosen as part of realizing the action definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Defines whether the action can be selected multiple times.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRActionCardinalityBehavior
     * @return $this
     */
    public function setCardinalityBehavior($cardinalityBehavior)
    {
        if (null === $cardinalityBehavior) {
            return $this; 
        }
        if (is_scalar($cardinalityBehavior)) {
            $cardinalityBehavior = new FHIRActionCardinalityBehavior($cardinalityBehavior);
        }
        if (!($cardinalityBehavior instanceof FHIRActionCardinalityBehavior)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPlanDefinitionAction::setCardinalityBehavior - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRActionCardinalityBehavior or appropriate scalar value, %s seen.',
                gettype($cardinalityBehavior)
            ));
        }
        $this->cardinalityBehavior = $cardinalityBehavior;
        return $this;
    }

    /**
     * Defines whether the action can be selected multiple times.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRActionCardinalityBehavior
     */
    public function getCardinalityBehavior()
    {
        return $this->cardinalityBehavior;
    }

    /**
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for a the section of a documentation template.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function addCode(FHIRCodeableConcept $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code[] = $code;
        return $this;
    }

    /**
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for a the section of a documentation template.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * An expression that describes applicability criteria, or start/stop conditions for the action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition
     * @return $this
     */
    public function addCondition(FHIRPlanDefinitionCondition $condition = null)
    {
        if (null === $condition) {
            return $this; 
        }
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * An expression that describes applicability criteria, or start/stop conditions for the action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * A reference to an ActivityDefinition that describes the action to be taken in detail, or a PlanDefinition that describes a series of actions to be taken.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDefinition(FHIRReference $definition = null)
    {
        if (null === $definition) {
            return $this; 
        }
        $this->definition = $definition;
        return $this;
    }

    /**
     * A reference to an ActivityDefinition that describes the action to be taken in detail, or a PlanDefinition that describes a series of actions to be taken.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * A short description of the action used to provide a summary to display to the user.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRString($description);
        }
        if (!($description instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPlanDefinitionAction::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A short description of the action used to provide a summary to display to the user.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Didactic or other informational resources associated with the action that can be provided to the CDS recipient. Information resources can include inline text commentary and links to web resources.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     * @return $this
     */
    public function addDocumentation(FHIRRelatedArtifact $documentation = null)
    {
        if (null === $documentation) {
            return $this; 
        }
        $this->documentation[] = $documentation;
        return $this;
    }

    /**
     * Didactic or other informational resources associated with the action that can be provided to the CDS recipient. Information resources can include inline text commentary and links to web resources.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact[]
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Customizations that should be applied to the statically defined resource. For example, if the dosage of a medication must be computed based on the patient's weight, a customization would be used to specify an expression that calculated the weight, and the path on the resource that would contain the result.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue
     * @return $this
     */
    public function addDynamicValue(FHIRPlanDefinitionDynamicValue $dynamicValue = null)
    {
        if (null === $dynamicValue) {
            return $this; 
        }
        $this->dynamicValue[] = $dynamicValue;
        return $this;
    }

    /**
     * Customizations that should be applied to the statically defined resource. For example, if the dosage of a medication must be computed based on the patient's weight, a customization would be used to specify an expression that calculated the weight, and the path on the resource that would contain the result.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue[]
     */
    public function getDynamicValue()
    {
        return $this->dynamicValue;
    }

    /**
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function addGoalId($goalId)
    {
        if (null === $goalId) {
            return $this; 
        }
        if (is_scalar($goalId)) {
            $goalId = new FHIRId($goalId);
        }
        if (!($goalId instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPlanDefinitionAction::addGoalId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($goalId)
            ));
        }
        $this->goalId[] = $goalId;
        return $this;
    }

    /**
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId[]
     */
    public function getGoalId()
    {
        return $this->goalId;
    }

    /**
     * Defines the grouping behavior for the action and its children.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRActionGroupingBehavior
     * @return $this
     */
    public function setGroupingBehavior($groupingBehavior)
    {
        if (null === $groupingBehavior) {
            return $this; 
        }
        if (is_scalar($groupingBehavior)) {
            $groupingBehavior = new FHIRActionGroupingBehavior($groupingBehavior);
        }
        if (!($groupingBehavior instanceof FHIRActionGroupingBehavior)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPlanDefinitionAction::setGroupingBehavior - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRActionGroupingBehavior or appropriate scalar value, %s seen.',
                gettype($groupingBehavior)
            ));
        }
        $this->groupingBehavior = $groupingBehavior;
        return $this;
    }

    /**
     * Defines the grouping behavior for the action and its children.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRActionGroupingBehavior
     */
    public function getGroupingBehavior()
    {
        return $this->groupingBehavior;
    }

    /**
     * Defines input data requirements for the action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     * @return $this
     */
    public function addInput(FHIRDataRequirement $input = null)
    {
        if (null === $input) {
            return $this; 
        }
        $this->input[] = $input;
        return $this;
    }

    /**
     * Defines input data requirements for the action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement[]
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * A user-visible label for the action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setLabel($label)
    {
        if (null === $label) {
            return $this; 
        }
        if (is_scalar($label)) {
            $label = new FHIRString($label);
        }
        if (!($label instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPlanDefinitionAction::setLabel - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($label)
            ));
        }
        $this->label = $label;
        return $this;
    }

    /**
     * A user-visible label for the action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Defines the outputs of the action, if any.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     * @return $this
     */
    public function addOutput(FHIRDataRequirement $output = null)
    {
        if (null === $output) {
            return $this; 
        }
        $this->output[] = $output;
        return $this;
    }

    /**
     * Defines the outputs of the action, if any.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement[]
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Indicates who should participate in performing the action described.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant
     * @return $this
     */
    public function addParticipant(FHIRPlanDefinitionParticipant $participant = null)
    {
        if (null === $participant) {
            return $this; 
        }
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * Indicates who should participate in performing the action described.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Defines whether the action should usually be preselected.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRActionPrecheckBehavior
     * @return $this
     */
    public function setPrecheckBehavior($precheckBehavior)
    {
        if (null === $precheckBehavior) {
            return $this; 
        }
        if (is_scalar($precheckBehavior)) {
            $precheckBehavior = new FHIRActionPrecheckBehavior($precheckBehavior);
        }
        if (!($precheckBehavior instanceof FHIRActionPrecheckBehavior)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPlanDefinitionAction::setPrecheckBehavior - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRActionPrecheckBehavior or appropriate scalar value, %s seen.',
                gettype($precheckBehavior)
            ));
        }
        $this->precheckBehavior = $precheckBehavior;
        return $this;
    }

    /**
     * Defines whether the action should usually be preselected.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRActionPrecheckBehavior
     */
    public function getPrecheckBehavior()
    {
        return $this->precheckBehavior;
    }

    /**
     * A description of why this action is necessary or appropriate.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function addReason(FHIRCodeableConcept $reason = null)
    {
        if (null === $reason) {
            return $this; 
        }
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * A description of why this action is necessary or appropriate.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction
     * @return $this
     */
    public function addRelatedAction(FHIRPlanDefinitionRelatedAction $relatedAction = null)
    {
        if (null === $relatedAction) {
            return $this; 
        }
        $this->relatedAction[] = $relatedAction;
        return $this;
    }

    /**
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction[]
     */
    public function getRelatedAction()
    {
        return $this->relatedAction;
    }

    /**
     * Defines the requiredness behavior for the action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRActionRequiredBehavior
     * @return $this
     */
    public function setRequiredBehavior($requiredBehavior)
    {
        if (null === $requiredBehavior) {
            return $this; 
        }
        if (is_scalar($requiredBehavior)) {
            $requiredBehavior = new FHIRActionRequiredBehavior($requiredBehavior);
        }
        if (!($requiredBehavior instanceof FHIRActionRequiredBehavior)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPlanDefinitionAction::setRequiredBehavior - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRActionRequiredBehavior or appropriate scalar value, %s seen.',
                gettype($requiredBehavior)
            ));
        }
        $this->requiredBehavior = $requiredBehavior;
        return $this;
    }

    /**
     * Defines the requiredness behavior for the action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRActionRequiredBehavior
     */
    public function getRequiredBehavior()
    {
        return $this->requiredBehavior;
    }

    /**
     * Defines the selection behavior for the action and its children.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRActionSelectionBehavior
     * @return $this
     */
    public function setSelectionBehavior($selectionBehavior)
    {
        if (null === $selectionBehavior) {
            return $this; 
        }
        if (is_scalar($selectionBehavior)) {
            $selectionBehavior = new FHIRActionSelectionBehavior($selectionBehavior);
        }
        if (!($selectionBehavior instanceof FHIRActionSelectionBehavior)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPlanDefinitionAction::setSelectionBehavior - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRActionSelectionBehavior or appropriate scalar value, %s seen.',
                gettype($selectionBehavior)
            ));
        }
        $this->selectionBehavior = $selectionBehavior;
        return $this;
    }

    /**
     * Defines the selection behavior for the action and its children.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRActionSelectionBehavior
     */
    public function getSelectionBehavior()
    {
        return $this->selectionBehavior;
    }

    /**
     * A text equivalent of the action to be performed. This provides a human-interpretable description of the action when the definition is consumed by a system that may not be capable of interpreting it dynamically.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setTextEquivalent($textEquivalent)
    {
        if (null === $textEquivalent) {
            return $this; 
        }
        if (is_scalar($textEquivalent)) {
            $textEquivalent = new FHIRString($textEquivalent);
        }
        if (!($textEquivalent instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPlanDefinitionAction::setTextEquivalent - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($textEquivalent)
            ));
        }
        $this->textEquivalent = $textEquivalent;
        return $this;
    }

    /**
     * A text equivalent of the action to be performed. This provides a human-interpretable description of the action when the definition is consumed by a system that may not be capable of interpreting it dynamically.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTextEquivalent()
    {
        return $this->textEquivalent;
    }

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setTimingDateTime($timingDateTime)
    {
        if (null === $timingDateTime) {
            return $this; 
        }
        if (is_scalar($timingDateTime)) {
            $timingDateTime = new FHIRDateTime($timingDateTime);
        }
        if (!($timingDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPlanDefinitionAction::setTimingDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($timingDateTime)
            ));
        }
        $this->timingDateTime = $timingDateTime;
        return $this;
    }

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getTimingDateTime()
    {
        return $this->timingDateTime;
    }

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     * @return $this
     */
    public function setTimingDuration(FHIRDuration $timingDuration = null)
    {
        if (null === $timingDuration) {
            return $this; 
        }
        $this->timingDuration = $timingDuration;
        return $this;
    }

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getTimingDuration()
    {
        return $this->timingDuration;
    }

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setTimingPeriod(FHIRPeriod $timingPeriod = null)
    {
        if (null === $timingPeriod) {
            return $this; 
        }
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setTimingRange(FHIRRange $timingRange = null)
    {
        if (null === $timingRange) {
            return $this; 
        }
        $this->timingRange = $timingRange;
        return $this;
    }

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getTimingRange()
    {
        return $this->timingRange;
    }

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTiming
     * @return $this
     */
    public function setTimingTiming(FHIRTiming $timingTiming = null)
    {
        if (null === $timingTiming) {
            return $this; 
        }
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getTimingTiming()
    {
        return $this->timingTiming;
    }

    /**
     * The title of the action displayed to a user.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setTitle($title)
    {
        if (null === $title) {
            return $this; 
        }
        if (is_scalar($title)) {
            $title = new FHIRString($title);
        }
        if (!($title instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPlanDefinitionAction::setTitle - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($title)
            ));
        }
        $this->title = $title;
        return $this;
    }

    /**
     * The title of the action displayed to a user.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setTransform(FHIRReference $transform = null)
    {
        if (null === $transform) {
            return $this; 
        }
        $this->transform = $transform;
        return $this;
    }

    /**
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTransform()
    {
        return $this->transform;
    }

    /**
     * A description of when the action should be triggered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     * @return $this
     */
    public function addTriggerDefinition(FHIRTriggerDefinition $triggerDefinition = null)
    {
        if (null === $triggerDefinition) {
            return $this; 
        }
        $this->triggerDefinition[] = $triggerDefinition;
        return $this;
    }

    /**
     * A description of when the action should be triggered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition[]
     */
    public function getTriggerDefinition()
    {
        return $this->triggerDefinition;
    }

    /**
     * The type of action to perform (create, update, remove).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setType(FHIRCoding $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The type of action to perform (create, update, remove).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (0 < count($values = $this->getAction())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['action'] = $vs;
            }
        }
        if (null !== ($v = $this->getCardinalityBehavior())) {
            $a['cardinalityBehavior'] = $v;
        }
        if (0 < count($values = $this->getCode())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['code'] = $vs;
            }
        }
        if (0 < count($values = $this->getCondition())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['condition'] = $vs;
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            $a['definition'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (0 < count($values = $this->getDocumentation())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['documentation'] = $vs;
            }
        }
        if (0 < count($values = $this->getDynamicValue())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['dynamicValue'] = $vs;
            }
        }
        if (0 < count($values = $this->getGoalId())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['goalId'] = $vs;
            }
        }
        if (null !== ($v = $this->getGroupingBehavior())) {
            $a['groupingBehavior'] = $v;
        }
        if (0 < count($values = $this->getInput())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['input'] = $vs;
            }
        }
        if (null !== ($v = $this->getLabel())) {
            $a['label'] = $v;
        }
        if (0 < count($values = $this->getOutput())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['output'] = $vs;
            }
        }
        if (0 < count($values = $this->getParticipant())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['participant'] = $vs;
            }
        }
        if (null !== ($v = $this->getPrecheckBehavior())) {
            $a['precheckBehavior'] = $v;
        }
        if (0 < count($values = $this->getReason())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['reason'] = $vs;
            }
        }
        if (0 < count($values = $this->getRelatedAction())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['relatedAction'] = $vs;
            }
        }
        if (null !== ($v = $this->getRequiredBehavior())) {
            $a['requiredBehavior'] = $v;
        }
        if (null !== ($v = $this->getSelectionBehavior())) {
            $a['selectionBehavior'] = $v;
        }
        if (null !== ($v = $this->getTextEquivalent())) {
            $a['textEquivalent'] = $v;
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            $a['timingDateTime'] = $v;
        }
        if (null !== ($v = $this->getTimingDuration())) {
            $a['timingDuration'] = $v;
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            $a['timingPeriod'] = $v;
        }
        if (null !== ($v = $this->getTimingRange())) {
            $a['timingRange'] = $v;
        }
        if (null !== ($v = $this->getTimingTiming())) {
            $a['timingTiming'] = $v;
        }
        if (null !== ($v = $this->getTitle())) {
            $a['title'] = $v;
        }
        if (null !== ($v = $this->getTransform())) {
            $a['transform'] = $v;
        }
        if (0 < count($values = $this->getTriggerDefinition())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['triggerDefinition'] = $vs;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<PlanDefinitionAction xmlns="http://hl7.org/fhir"></PlanDefinitionAction>');
        }
        if (0 < count($values = $this->getAction())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('action'));
                }
            }
        }
        if (null !== ($v = $this->getCardinalityBehavior())) {
            $v->xmlSerialize(true, $sxe->addChild('cardinalityBehavior'));
        }
        if (0 < count($values = $this->getCode())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('code'));
                }
            }
        }
        if (0 < count($values = $this->getCondition())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('condition'));
                }
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            $v->xmlSerialize(true, $sxe->addChild('definition'));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize(true, $sxe->addChild('description'));
        }
        if (0 < count($values = $this->getDocumentation())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('documentation'));
                }
            }
        }
        if (0 < count($values = $this->getDynamicValue())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('dynamicValue'));
                }
            }
        }
        if (0 < count($values = $this->getGoalId())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('goalId'));
                }
            }
        }
        if (null !== ($v = $this->getGroupingBehavior())) {
            $v->xmlSerialize(true, $sxe->addChild('groupingBehavior'));
        }
        if (0 < count($values = $this->getInput())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('input'));
                }
            }
        }
        if (null !== ($v = $this->getLabel())) {
            $v->xmlSerialize(true, $sxe->addChild('label'));
        }
        if (0 < count($values = $this->getOutput())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('output'));
                }
            }
        }
        if (0 < count($values = $this->getParticipant())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('participant'));
                }
            }
        }
        if (null !== ($v = $this->getPrecheckBehavior())) {
            $v->xmlSerialize(true, $sxe->addChild('precheckBehavior'));
        }
        if (0 < count($values = $this->getReason())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('reason'));
                }
            }
        }
        if (0 < count($values = $this->getRelatedAction())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('relatedAction'));
                }
            }
        }
        if (null !== ($v = $this->getRequiredBehavior())) {
            $v->xmlSerialize(true, $sxe->addChild('requiredBehavior'));
        }
        if (null !== ($v = $this->getSelectionBehavior())) {
            $v->xmlSerialize(true, $sxe->addChild('selectionBehavior'));
        }
        if (null !== ($v = $this->getTextEquivalent())) {
            $v->xmlSerialize(true, $sxe->addChild('textEquivalent'));
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            $v->xmlSerialize(true, $sxe->addChild('timingDateTime'));
        }
        if (null !== ($v = $this->getTimingDuration())) {
            $v->xmlSerialize(true, $sxe->addChild('timingDuration'));
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            $v->xmlSerialize(true, $sxe->addChild('timingPeriod'));
        }
        if (null !== ($v = $this->getTimingRange())) {
            $v->xmlSerialize(true, $sxe->addChild('timingRange'));
        }
        if (null !== ($v = $this->getTimingTiming())) {
            $v->xmlSerialize(true, $sxe->addChild('timingTiming'));
        }
        if (null !== ($v = $this->getTitle())) {
            $v->xmlSerialize(true, $sxe->addChild('title'));
        }
        if (null !== ($v = $this->getTransform())) {
            $v->xmlSerialize(true, $sxe->addChild('transform'));
        }
        if (0 < count($values = $this->getTriggerDefinition())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('triggerDefinition'));
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize(true, $sxe->addChild('type'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}