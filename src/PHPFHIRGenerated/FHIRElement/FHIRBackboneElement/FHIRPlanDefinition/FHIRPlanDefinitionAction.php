<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
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
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDataRequirement;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact;
use PHPFHIRGenerated\FHIRElement\FHIRRequestPriority;
use PHPFHIRGenerated\FHIRElement\FHIRString;
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
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public $action = null;

    /**
     * Defines whether the action can be selected multiple times.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRActionCardinalityBehavior
     */
    public $cardinalityBehavior = null;

    /**
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for the section of a documentation template.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * An expression that describes applicability criteria or start/stop conditions for the action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition
     */
    public $condition = null;

    /**
     * A reference to an ActivityDefinition that describes the action to be taken in detail, or a PlanDefinition that describes a series of actions to be taken.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $definition = null;

    /**
     * A brief description of the action used to provide a summary to display to the user.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Didactic or other informational resources associated with the action that can be provided to the CDS recipient. Information resources can include inline text commentary and links to web resources.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public $documentation = null;

    /**
     * Customizations that should be applied to the statically defined resource. For example, if the dosage of a medication must be computed based on the patient's weight, a customization would be used to specify an expression that calculated the weight, and the path on the resource that would contain the result.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue
     */
    public $dynamicValue = null;

    /**
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $goalId = null;

    /**
     * Defines the grouping behavior for the action and its children.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRActionGroupingBehavior
     */
    public $groupingBehavior = null;

    /**
     * Defines input data requirements for the action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public $input = null;

    /**
     * Defines the outputs of the action, if any.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public $output = null;

    /**
     * Indicates who should participate in performing the action described.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant
     */
    public $participant = null;

    /**
     * Defines whether the action should usually be preselected.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRActionPrecheckBehavior
     */
    public $precheckBehavior = null;

    /**
     * A user-visible prefix for the action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $prefix = null;

    /**
     * Indicates how quickly the action should be addressed with respect to other actions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public $priority = null;

    /**
     * A description of why this action is necessary or appropriate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reason = null;

    /**
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction
     */
    public $relatedAction = null;

    /**
     * Defines the required behavior for the action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRActionRequiredBehavior
     */
    public $requiredBehavior = null;

    /**
     * Defines the selection behavior for the action and its children.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRActionSelectionBehavior
     */
    public $selectionBehavior = null;

    /**
     * A text equivalent of the action to be performed. This provides a human-interpretable description of the action when the definition is consumed by a system that might not be capable of interpreting it dynamically.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $textEquivalent = null;

    /**
     * An optional value describing when the action should be performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $timingAge = null;

    /**
     * An optional value describing when the action should be performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $timingDateTime = null;

    /**
     * An optional value describing when the action should be performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $timingDuration = null;

    /**
     * An optional value describing when the action should be performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $timingPeriod = null;

    /**
     * An optional value describing when the action should be performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $timingRange = null;

    /**
     * An optional value describing when the action should be performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public $timingTiming = null;

    /**
     * The title of the action displayed to a user.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $transform = null;

    /**
     * A description of when the action should be triggered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     */
    public $trigger = null;

    /**
     * The type of action to perform (create, update, remove).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRPlanDefinitionAction Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['action'])) {
                $this->setAction($data['action']);
            }
            if (isset($data['cardinalityBehavior'])) {
                $this->setCardinalityBehavior($data['cardinalityBehavior']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['condition'])) {
                $this->setCondition($data['condition']);
            }
            if (isset($data['definition'])) {
                $this->setDefinition($data['definition']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['documentation'])) {
                $this->setDocumentation($data['documentation']);
            }
            if (isset($data['dynamicValue'])) {
                $this->setDynamicValue($data['dynamicValue']);
            }
            if (isset($data['goalId'])) {
                $this->setGoalId($data['goalId']);
            }
            if (isset($data['groupingBehavior'])) {
                $this->setGroupingBehavior($data['groupingBehavior']);
            }
            if (isset($data['input'])) {
                $this->setInput($data['input']);
            }
            if (isset($data['output'])) {
                $this->setOutput($data['output']);
            }
            if (isset($data['participant'])) {
                $this->setParticipant($data['participant']);
            }
            if (isset($data['precheckBehavior'])) {
                $this->setPrecheckBehavior($data['precheckBehavior']);
            }
            if (isset($data['prefix'])) {
                $this->setPrefix($data['prefix']);
            }
            if (isset($data['priority'])) {
                $this->setPriority($data['priority']);
            }
            if (isset($data['reason'])) {
                $this->setReason($data['reason']);
            }
            if (isset($data['relatedAction'])) {
                $this->setRelatedAction($data['relatedAction']);
            }
            if (isset($data['requiredBehavior'])) {
                $this->setRequiredBehavior($data['requiredBehavior']);
            }
            if (isset($data['selectionBehavior'])) {
                $this->setSelectionBehavior($data['selectionBehavior']);
            }
            if (isset($data['textEquivalent'])) {
                $this->setTextEquivalent($data['textEquivalent']);
            }
            if (isset($data['timingAge'])) {
                $this->setTimingAge($data['timingAge']);
            }
            if (isset($data['timingDateTime'])) {
                $this->setTimingDateTime($data['timingDateTime']);
            }
            if (isset($data['timingDuration'])) {
                $this->setTimingDuration($data['timingDuration']);
            }
            if (isset($data['timingPeriod'])) {
                $this->setTimingPeriod($data['timingPeriod']);
            }
            if (isset($data['timingRange'])) {
                $this->setTimingRange($data['timingRange']);
            }
            if (isset($data['timingTiming'])) {
                $this->setTimingTiming($data['timingTiming']);
            }
            if (isset($data['title'])) {
                $this->setTitle($data['title']);
            }
            if (isset($data['transform'])) {
                $this->setTransform($data['transform']);
            }
            if (isset($data['trigger'])) {
                $this->setTrigger($data['trigger']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Sub actions that are contained within the action. The behavior of this action determines the functionality of the sub-actions. For example, a selection behavior of at-most-one indicates that of the sub-actions, at most one may be chosen as part of realizing the action definition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     * @return $this
     */
    public function setAction(FHIRPlanDefinitionAction $action = null)
    {
        if (null === $action) {
            return $this; 
        }
        $this->action = $action;
        return $this;
    }

    /**
     * Sub actions that are contained within the action. The behavior of this action determines the functionality of the sub-actions. For example, a selection behavior of at-most-one indicates that of the sub-actions, at most one may be chosen as part of realizing the action definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
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
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for the section of a documentation template.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for the section of a documentation template.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * An expression that describes applicability criteria or start/stop conditions for the action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition
     * @return $this
     */
    public function setCondition(FHIRPlanDefinitionCondition $condition = null)
    {
        if (null === $condition) {
            return $this; 
        }
        $this->condition = $condition;
        return $this;
    }

    /**
     * An expression that describes applicability criteria or start/stop conditions for the action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition
     */
    public function getCondition()
    {
        return $this->condition;
    }


    /**
     * A reference to an ActivityDefinition that describes the action to be taken in detail, or a PlanDefinition that describes a series of actions to be taken.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setDefinition($definition)
    {
        if (null === $definition) {
            return $this; 
        }
        if (is_scalar($definition)) {
            $definition = new FHIRCanonical($definition);
        }
        if (!($definition instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPlanDefinitionAction::setDefinition - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($definition)
            ));
        }
        $this->definition = $definition;
        return $this;
    }

    /**
     * A reference to an ActivityDefinition that describes the action to be taken in detail, or a PlanDefinition that describes a series of actions to be taken.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getDefinition()
    {
        return $this->definition;
    }


    /**
     * A brief description of the action used to provide a summary to display to the user.
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
     * A brief description of the action used to provide a summary to display to the user.
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
    public function setDocumentation(FHIRRelatedArtifact $documentation = null)
    {
        if (null === $documentation) {
            return $this; 
        }
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Didactic or other informational resources associated with the action that can be provided to the CDS recipient. Information resources can include inline text commentary and links to web resources.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
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
    public function setDynamicValue(FHIRPlanDefinitionDynamicValue $dynamicValue = null)
    {
        if (null === $dynamicValue) {
            return $this; 
        }
        $this->dynamicValue = $dynamicValue;
        return $this;
    }

    /**
     * Customizations that should be applied to the statically defined resource. For example, if the dosage of a medication must be computed based on the patient's weight, a customization would be used to specify an expression that calculated the weight, and the path on the resource that would contain the result.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue
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
    public function setGoalId($goalId)
    {
        if (null === $goalId) {
            return $this; 
        }
        if (is_scalar($goalId)) {
            $goalId = new FHIRId($goalId);
        }
        if (!($goalId instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPlanDefinitionAction::setGoalId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($goalId)
            ));
        }
        $this->goalId = $goalId;
        return $this;
    }

    /**
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
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
    public function setInput(FHIRDataRequirement $input = null)
    {
        if (null === $input) {
            return $this; 
        }
        $this->input = $input;
        return $this;
    }

    /**
     * Defines input data requirements for the action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function getInput()
    {
        return $this->input;
    }


    /**
     * Defines the outputs of the action, if any.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     * @return $this
     */
    public function setOutput(FHIRDataRequirement $output = null)
    {
        if (null === $output) {
            return $this; 
        }
        $this->output = $output;
        return $this;
    }

    /**
     * Defines the outputs of the action, if any.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
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
    public function setParticipant(FHIRPlanDefinitionParticipant $participant = null)
    {
        if (null === $participant) {
            return $this; 
        }
        $this->participant = $participant;
        return $this;
    }

    /**
     * Indicates who should participate in performing the action described.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant
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
     * A user-visible prefix for the action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPrefix($prefix)
    {
        if (null === $prefix) {
            return $this; 
        }
        if (is_scalar($prefix)) {
            $prefix = new FHIRString($prefix);
        }
        if (!($prefix instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPlanDefinitionAction::setPrefix - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($prefix)
            ));
        }
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * A user-visible prefix for the action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPrefix()
    {
        return $this->prefix;
    }


    /**
     * Indicates how quickly the action should be addressed with respect to other actions.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     * @return $this
     */
    public function setPriority($priority)
    {
        if (null === $priority) {
            return $this; 
        }
        if (is_scalar($priority)) {
            $priority = new FHIRRequestPriority($priority);
        }
        if (!($priority instanceof FHIRRequestPriority)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPlanDefinitionAction::setPriority - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority or appropriate scalar value, %s seen.',
                gettype($priority)
            ));
        }
        $this->priority = $priority;
        return $this;
    }

    /**
     * Indicates how quickly the action should be addressed with respect to other actions.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }


    /**
     * A description of why this action is necessary or appropriate.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setReason(FHIRCodeableConcept $reason = null)
    {
        if (null === $reason) {
            return $this; 
        }
        $this->reason = $reason;
        return $this;
    }

    /**
     * A description of why this action is necessary or appropriate.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
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
    public function setRelatedAction(FHIRPlanDefinitionRelatedAction $relatedAction = null)
    {
        if (null === $relatedAction) {
            return $this; 
        }
        $this->relatedAction = $relatedAction;
        return $this;
    }

    /**
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction
     */
    public function getRelatedAction()
    {
        return $this->relatedAction;
    }


    /**
     * Defines the required behavior for the action.
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
     * Defines the required behavior for the action.
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
     * A text equivalent of the action to be performed. This provides a human-interpretable description of the action when the definition is consumed by a system that might not be capable of interpreting it dynamically.
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
     * A text equivalent of the action to be performed. This provides a human-interpretable description of the action when the definition is consumed by a system that might not be capable of interpreting it dynamically.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTextEquivalent()
    {
        return $this->textEquivalent;
    }


    /**
     * An optional value describing when the action should be performed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     * @return $this
     */
    public function setTimingAge(FHIRAge $timingAge = null)
    {
        if (null === $timingAge) {
            return $this; 
        }
        $this->timingAge = $timingAge;
        return $this;
    }

    /**
     * An optional value describing when the action should be performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getTimingAge()
    {
        return $this->timingAge;
    }


    /**
     * An optional value describing when the action should be performed.
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
     * An optional value describing when the action should be performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getTimingDateTime()
    {
        return $this->timingDateTime;
    }


    /**
     * An optional value describing when the action should be performed.
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
     * An optional value describing when the action should be performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getTimingDuration()
    {
        return $this->timingDuration;
    }


    /**
     * An optional value describing when the action should be performed.
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
     * An optional value describing when the action should be performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }


    /**
     * An optional value describing when the action should be performed.
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
     * An optional value describing when the action should be performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getTimingRange()
    {
        return $this->timingRange;
    }


    /**
     * An optional value describing when the action should be performed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
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
     * An optional value describing when the action should be performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
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
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setTransform($transform)
    {
        if (null === $transform) {
            return $this; 
        }
        if (is_scalar($transform)) {
            $transform = new FHIRCanonical($transform);
        }
        if (!($transform instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPlanDefinitionAction::setTransform - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($transform)
            ));
        }
        $this->transform = $transform;
        return $this;
    }

    /**
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
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
    public function setTrigger(FHIRTriggerDefinition $trigger = null)
    {
        if (null === $trigger) {
            return $this; 
        }
        $this->trigger = $trigger;
        return $this;
    }

    /**
     * A description of when the action should be triggered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     */
    public function getTrigger()
    {
        return $this->trigger;
    }


    /**
     * The type of action to perform (create, update, remove).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The type of action to perform (create, update, remove).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
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
        if (null !== ($v = $this->getAction())) {
            $a['action'] = $v;
        }
        if (null !== ($v = $this->getCardinalityBehavior())) {
            $a['cardinalityBehavior'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getCondition())) {
            $a['condition'] = $v;
        }
        if (null !== ($v = $this->getDefinition())) {
            $a['definition'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getDocumentation())) {
            $a['documentation'] = $v;
        }
        if (null !== ($v = $this->getDynamicValue())) {
            $a['dynamicValue'] = $v;
        }
        if (null !== ($v = $this->getGoalId())) {
            $a['goalId'] = $v;
        }
        if (null !== ($v = $this->getGroupingBehavior())) {
            $a['groupingBehavior'] = $v;
        }
        if (null !== ($v = $this->getInput())) {
            $a['input'] = $v;
        }
        if (null !== ($v = $this->getOutput())) {
            $a['output'] = $v;
        }
        if (null !== ($v = $this->getParticipant())) {
            $a['participant'] = $v;
        }
        if (null !== ($v = $this->getPrecheckBehavior())) {
            $a['precheckBehavior'] = $v;
        }
        if (null !== ($v = $this->getPrefix())) {
            $a['prefix'] = $v;
        }
        if (null !== ($v = $this->getPriority())) {
            $a['priority'] = $v;
        }
        if (null !== ($v = $this->getReason())) {
            $a['reason'] = $v;
        }
        if (null !== ($v = $this->getRelatedAction())) {
            $a['relatedAction'] = $v;
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
        if (null !== ($v = $this->getTimingAge())) {
            $a['timingAge'] = $v;
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
        if (null !== ($v = $this->getTrigger())) {
            $a['trigger'] = $v;
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
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}