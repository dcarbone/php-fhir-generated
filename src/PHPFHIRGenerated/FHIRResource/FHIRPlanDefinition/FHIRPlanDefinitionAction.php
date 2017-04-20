<?php namespace PHPFHIRGenerated\FHIRResource\FHIRPlanDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * This resource allows for the definition of various types of plans as a sharable, consumable, and executable artifact. The resource is general enough to support the description of a broad range of clinical artifacts such as clinical decision support rules, order sets and protocols.
 */
class FHIRPlanDefinitionAction extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A user-visible label for the action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $label = null;

    /**
     * The title of the action displayed to a user.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * A short description of the action used to provide a summary to display to the user.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * A text equivalent of the action to be performed. This provides a human-interpretable description of the action when the definition is consumed by a system that may not be capable of interpreting it dynamically.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $textEquivalent = null;

    /**
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for a the section of a documentation template.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $code = array();

    /**
     * A description of why this action is necessary or appropriate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $reason = array();

    /**
     * Didactic or other informational resources associated with the action that can be provided to the CDS recipient. Information resources can include inline text commentary and links to web resources.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact[]
     */
    public $documentation = array();

    /**
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId[]
     */
    public $goalId = array();

    /**
     * A description of when the action should be triggered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition[]
     */
    public $triggerDefinition = array();

    /**
     * An expression that describes applicability criteria, or start/stop conditions for the action.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionCondition[]
     */
    public $condition = array();

    /**
     * Defines input data requirements for the action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement[]
     */
    public $input = array();

    /**
     * Defines the outputs of the action, if any.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement[]
     */
    public $output = array();

    /**
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     * @var \PHPFHIRGenerated\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction[]
     */
    public $relatedAction = array();

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $timingDateTime = null;

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $timingPeriod = null;

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $timingDuration = null;

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $timingRange = null;

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $timingTiming = null;

    /**
     * Indicates who should participate in performing the action described.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionParticipant[]
     */
    public $participant = array();

    /**
     * The type of action to perform (create, update, remove).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $type = null;

    /**
     * Defines the grouping behavior for the action and its children.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRActionGroupingBehavior
     */
    public $groupingBehavior = null;

    /**
     * Defines the selection behavior for the action and its children.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRActionSelectionBehavior
     */
    public $selectionBehavior = null;

    /**
     * Defines the requiredness behavior for the action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRActionRequiredBehavior
     */
    public $requiredBehavior = null;

    /**
     * Defines whether the action should usually be preselected.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRActionPrecheckBehavior
     */
    public $precheckBehavior = null;

    /**
     * Defines whether the action can be selected multiple times.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRActionCardinalityBehavior
     */
    public $cardinalityBehavior = null;

    /**
     * A reference to an ActivityDefinition that describes the action to be taken in detail, or a PlanDefinition that describes a series of actions to be taken.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $definition = null;

    /**
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $transform = null;

    /**
     * Customizations that should be applied to the statically defined resource. For example, if the dosage of a medication must be computed based on the patient's weight, a customization would be used to specify an expression that calculated the weight, and the path on the resource that would contain the result.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue[]
     */
    public $dynamicValue = array();

    /**
     * Sub actions that are contained within the action. The behavior of this action determines the functionality of the sub-actions. For example, a selection behavior of at-most-one indicates that of the sub-actions, at most one may be chosen as part of realizing the action definition.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionAction[]
     */
    public $action = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'PlanDefinition.Action';

    /**
     * A user-visible label for the action.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * A user-visible label for the action.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * The title of the action displayed to a user.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * The title of the action displayed to a user.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * A short description of the action used to provide a summary to display to the user.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A short description of the action used to provide a summary to display to the user.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * A text equivalent of the action to be performed. This provides a human-interpretable description of the action when the definition is consumed by a system that may not be capable of interpreting it dynamically.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTextEquivalent()
    {
        return $this->textEquivalent;
    }

    /**
     * A text equivalent of the action to be performed. This provides a human-interpretable description of the action when the definition is consumed by a system that may not be capable of interpreting it dynamically.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $textEquivalent
     * @return $this
     */
    public function setTextEquivalent($textEquivalent)
    {
        $this->textEquivalent = $textEquivalent;
        return $this;
    }

    /**
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for a the section of a documentation template.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for a the section of a documentation template.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function addCode($code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * A description of why this action is necessary or appropriate.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * A description of why this action is necessary or appropriate.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reason
     * @return $this
     */
    public function addReason($reason)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * Didactic or other informational resources associated with the action that can be provided to the CDS recipient. Information resources can include inline text commentary and links to web resources.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact[]
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Didactic or other informational resources associated with the action that can be provided to the CDS recipient. Information resources can include inline text commentary and links to web resources.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact $documentation
     * @return $this
     */
    public function addDocumentation($documentation)
    {
        $this->documentation[] = $documentation;
        return $this;
    }

    /**
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId[]
     */
    public function getGoalId()
    {
        return $this->goalId;
    }

    /**
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $goalId
     * @return $this
     */
    public function addGoalId($goalId)
    {
        $this->goalId[] = $goalId;
        return $this;
    }

    /**
     * A description of when the action should be triggered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition[]
     */
    public function getTriggerDefinition()
    {
        return $this->triggerDefinition;
    }

    /**
     * A description of when the action should be triggered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition $triggerDefinition
     * @return $this
     */
    public function addTriggerDefinition($triggerDefinition)
    {
        $this->triggerDefinition[] = $triggerDefinition;
        return $this;
    }

    /**
     * An expression that describes applicability criteria, or start/stop conditions for the action.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionCondition[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * An expression that describes applicability criteria, or start/stop conditions for the action.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionCondition $condition
     * @return $this
     */
    public function addCondition($condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * Defines input data requirements for the action.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement[]
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Defines input data requirements for the action.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement $input
     * @return $this
     */
    public function addInput($input)
    {
        $this->input[] = $input;
        return $this;
    }

    /**
     * Defines the outputs of the action, if any.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement[]
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Defines the outputs of the action, if any.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement $output
     * @return $this
     */
    public function addOutput($output)
    {
        $this->output[] = $output;
        return $this;
    }

    /**
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     * @return \PHPFHIRGenerated\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction[]
     */
    public function getRelatedAction()
    {
        return $this->relatedAction;
    }

    /**
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     * @param \PHPFHIRGenerated\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction $relatedAction
     * @return $this
     */
    public function addRelatedAction($relatedAction)
    {
        $this->relatedAction[] = $relatedAction;
        return $this;
    }

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getTimingDateTime()
    {
        return $this->timingDateTime;
    }

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $timingDateTime
     * @return $this
     */
    public function setTimingDateTime($timingDateTime)
    {
        $this->timingDateTime = $timingDateTime;
        return $this;
    }

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $timingPeriod
     * @return $this
     */
    public function setTimingPeriod($timingPeriod)
    {
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getTimingDuration()
    {
        return $this->timingDuration;
    }

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $timingDuration
     * @return $this
     */
    public function setTimingDuration($timingDuration)
    {
        $this->timingDuration = $timingDuration;
        return $this;
    }

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getTimingRange()
    {
        return $this->timingRange;
    }

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $timingRange
     * @return $this
     */
    public function setTimingRange($timingRange)
    {
        $this->timingRange = $timingRange;
        return $this;
    }

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getTimingTiming()
    {
        return $this->timingTiming;
    }

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $timingTiming
     * @return $this
     */
    public function setTimingTiming($timingTiming)
    {
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * Indicates who should participate in performing the action described.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Indicates who should participate in performing the action described.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionParticipant $participant
     * @return $this
     */
    public function addParticipant($participant)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * The type of action to perform (create, update, remove).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of action to perform (create, update, remove).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Defines the grouping behavior for the action and its children.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRActionGroupingBehavior
     */
    public function getGroupingBehavior()
    {
        return $this->groupingBehavior;
    }

    /**
     * Defines the grouping behavior for the action and its children.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRActionGroupingBehavior $groupingBehavior
     * @return $this
     */
    public function setGroupingBehavior($groupingBehavior)
    {
        $this->groupingBehavior = $groupingBehavior;
        return $this;
    }

    /**
     * Defines the selection behavior for the action and its children.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRActionSelectionBehavior
     */
    public function getSelectionBehavior()
    {
        return $this->selectionBehavior;
    }

    /**
     * Defines the selection behavior for the action and its children.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRActionSelectionBehavior $selectionBehavior
     * @return $this
     */
    public function setSelectionBehavior($selectionBehavior)
    {
        $this->selectionBehavior = $selectionBehavior;
        return $this;
    }

    /**
     * Defines the requiredness behavior for the action.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRActionRequiredBehavior
     */
    public function getRequiredBehavior()
    {
        return $this->requiredBehavior;
    }

    /**
     * Defines the requiredness behavior for the action.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRActionRequiredBehavior $requiredBehavior
     * @return $this
     */
    public function setRequiredBehavior($requiredBehavior)
    {
        $this->requiredBehavior = $requiredBehavior;
        return $this;
    }

    /**
     * Defines whether the action should usually be preselected.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRActionPrecheckBehavior
     */
    public function getPrecheckBehavior()
    {
        return $this->precheckBehavior;
    }

    /**
     * Defines whether the action should usually be preselected.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRActionPrecheckBehavior $precheckBehavior
     * @return $this
     */
    public function setPrecheckBehavior($precheckBehavior)
    {
        $this->precheckBehavior = $precheckBehavior;
        return $this;
    }

    /**
     * Defines whether the action can be selected multiple times.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRActionCardinalityBehavior
     */
    public function getCardinalityBehavior()
    {
        return $this->cardinalityBehavior;
    }

    /**
     * Defines whether the action can be selected multiple times.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRActionCardinalityBehavior $cardinalityBehavior
     * @return $this
     */
    public function setCardinalityBehavior($cardinalityBehavior)
    {
        $this->cardinalityBehavior = $cardinalityBehavior;
        return $this;
    }

    /**
     * A reference to an ActivityDefinition that describes the action to be taken in detail, or a PlanDefinition that describes a series of actions to be taken.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * A reference to an ActivityDefinition that describes the action to be taken in detail, or a PlanDefinition that describes a series of actions to be taken.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $definition
     * @return $this
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTransform()
    {
        return $this->transform;
    }

    /**
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $transform
     * @return $this
     */
    public function setTransform($transform)
    {
        $this->transform = $transform;
        return $this;
    }

    /**
     * Customizations that should be applied to the statically defined resource. For example, if the dosage of a medication must be computed based on the patient's weight, a customization would be used to specify an expression that calculated the weight, and the path on the resource that would contain the result.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue[]
     */
    public function getDynamicValue()
    {
        return $this->dynamicValue;
    }

    /**
     * Customizations that should be applied to the statically defined resource. For example, if the dosage of a medication must be computed based on the patient's weight, a customization would be used to specify an expression that calculated the weight, and the path on the resource that would contain the result.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue $dynamicValue
     * @return $this
     */
    public function addDynamicValue($dynamicValue)
    {
        $this->dynamicValue[] = $dynamicValue;
        return $this;
    }

    /**
     * Sub actions that are contained within the action. The behavior of this action determines the functionality of the sub-actions. For example, a selection behavior of at-most-one indicates that of the sub-actions, at most one may be chosen as part of realizing the action definition.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionAction[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sub actions that are contained within the action. The behavior of this action determines the functionality of the sub-actions. For example, a selection behavior of at-most-one indicates that of the sub-actions, at most one may be chosen as part of realizing the action definition.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionAction $action
     * @return $this
     */
    public function addAction($action)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->label) $json['label'] = json_encode($this->label);
        if (null !== $this->title) $json['title'] = json_encode($this->title);
        if (null !== $this->description) $json['description'] = json_encode($this->description);
        if (null !== $this->textEquivalent) $json['textEquivalent'] = json_encode($this->textEquivalent);
        if (0 < count($this->code)) {
            $json['code'] = [];
            foreach($this->code as $code) {
                $json['code'][] = json_encode($code);
            }
        }
        if (0 < count($this->reason)) {
            $json['reason'] = [];
            foreach($this->reason as $reason) {
                $json['reason'][] = json_encode($reason);
            }
        }
        if (0 < count($this->documentation)) {
            $json['documentation'] = [];
            foreach($this->documentation as $documentation) {
                $json['documentation'][] = json_encode($documentation);
            }
        }
        if (0 < count($this->goalId)) {
            $json['goalId'] = [];
            foreach($this->goalId as $goalId) {
                $json['goalId'][] = json_encode($goalId);
            }
        }
        if (0 < count($this->triggerDefinition)) {
            $json['triggerDefinition'] = [];
            foreach($this->triggerDefinition as $triggerDefinition) {
                $json['triggerDefinition'][] = json_encode($triggerDefinition);
            }
        }
        if (0 < count($this->condition)) {
            $json['condition'] = [];
            foreach($this->condition as $condition) {
                $json['condition'][] = json_encode($condition);
            }
        }
        if (0 < count($this->input)) {
            $json['input'] = [];
            foreach($this->input as $input) {
                $json['input'][] = json_encode($input);
            }
        }
        if (0 < count($this->output)) {
            $json['output'] = [];
            foreach($this->output as $output) {
                $json['output'][] = json_encode($output);
            }
        }
        if (0 < count($this->relatedAction)) {
            $json['relatedAction'] = [];
            foreach($this->relatedAction as $relatedAction) {
                $json['relatedAction'][] = json_encode($relatedAction);
            }
        }
        if (null !== $this->timingDateTime) $json['timingDateTime'] = json_encode($this->timingDateTime);
        if (null !== $this->timingPeriod) $json['timingPeriod'] = json_encode($this->timingPeriod);
        if (null !== $this->timingDuration) $json['timingDuration'] = json_encode($this->timingDuration);
        if (null !== $this->timingRange) $json['timingRange'] = json_encode($this->timingRange);
        if (null !== $this->timingTiming) $json['timingTiming'] = json_encode($this->timingTiming);
        if (0 < count($this->participant)) {
            $json['participant'] = [];
            foreach($this->participant as $participant) {
                $json['participant'][] = json_encode($participant);
            }
        }
        if (null !== $this->type) $json['type'] = json_encode($this->type);
        if (null !== $this->groupingBehavior) $json['groupingBehavior'] = json_encode($this->groupingBehavior);
        if (null !== $this->selectionBehavior) $json['selectionBehavior'] = json_encode($this->selectionBehavior);
        if (null !== $this->requiredBehavior) $json['requiredBehavior'] = json_encode($this->requiredBehavior);
        if (null !== $this->precheckBehavior) $json['precheckBehavior'] = json_encode($this->precheckBehavior);
        if (null !== $this->cardinalityBehavior) $json['cardinalityBehavior'] = json_encode($this->cardinalityBehavior);
        if (null !== $this->definition) $json['definition'] = json_encode($this->definition);
        if (null !== $this->transform) $json['transform'] = json_encode($this->transform);
        if (0 < count($this->dynamicValue)) {
            $json['dynamicValue'] = [];
            foreach($this->dynamicValue as $dynamicValue) {
                $json['dynamicValue'][] = json_encode($dynamicValue);
            }
        }
        if (0 < count($this->action)) {
            $json['action'] = [];
            foreach($this->action as $action) {
                $json['action'][] = json_encode($action);
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<PlanDefinitionAction xmlns="http://hl7.org/fhir"></PlanDefinitionAction>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->label) $this->label->xmlSerialize(true, $sxe->addChild('label'));
        if (null !== $this->title) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->textEquivalent) $this->textEquivalent->xmlSerialize(true, $sxe->addChild('textEquivalent'));
        if (0 < count($this->code)) {
            foreach($this->code as $code) {
                $code->xmlSerialize(true, $sxe->addChild('code'));
            }
        }
        if (0 < count($this->reason)) {
            foreach($this->reason as $reason) {
                $reason->xmlSerialize(true, $sxe->addChild('reason'));
            }
        }
        if (0 < count($this->documentation)) {
            foreach($this->documentation as $documentation) {
                $documentation->xmlSerialize(true, $sxe->addChild('documentation'));
            }
        }
        if (0 < count($this->goalId)) {
            foreach($this->goalId as $goalId) {
                $goalId->xmlSerialize(true, $sxe->addChild('goalId'));
            }
        }
        if (0 < count($this->triggerDefinition)) {
            foreach($this->triggerDefinition as $triggerDefinition) {
                $triggerDefinition->xmlSerialize(true, $sxe->addChild('triggerDefinition'));
            }
        }
        if (0 < count($this->condition)) {
            foreach($this->condition as $condition) {
                $condition->xmlSerialize(true, $sxe->addChild('condition'));
            }
        }
        if (0 < count($this->input)) {
            foreach($this->input as $input) {
                $input->xmlSerialize(true, $sxe->addChild('input'));
            }
        }
        if (0 < count($this->output)) {
            foreach($this->output as $output) {
                $output->xmlSerialize(true, $sxe->addChild('output'));
            }
        }
        if (0 < count($this->relatedAction)) {
            foreach($this->relatedAction as $relatedAction) {
                $relatedAction->xmlSerialize(true, $sxe->addChild('relatedAction'));
            }
        }
        if (null !== $this->timingDateTime) $this->timingDateTime->xmlSerialize(true, $sxe->addChild('timingDateTime'));
        if (null !== $this->timingPeriod) $this->timingPeriod->xmlSerialize(true, $sxe->addChild('timingPeriod'));
        if (null !== $this->timingDuration) $this->timingDuration->xmlSerialize(true, $sxe->addChild('timingDuration'));
        if (null !== $this->timingRange) $this->timingRange->xmlSerialize(true, $sxe->addChild('timingRange'));
        if (null !== $this->timingTiming) $this->timingTiming->xmlSerialize(true, $sxe->addChild('timingTiming'));
        if (0 < count($this->participant)) {
            foreach($this->participant as $participant) {
                $participant->xmlSerialize(true, $sxe->addChild('participant'));
            }
        }
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->groupingBehavior) $this->groupingBehavior->xmlSerialize(true, $sxe->addChild('groupingBehavior'));
        if (null !== $this->selectionBehavior) $this->selectionBehavior->xmlSerialize(true, $sxe->addChild('selectionBehavior'));
        if (null !== $this->requiredBehavior) $this->requiredBehavior->xmlSerialize(true, $sxe->addChild('requiredBehavior'));
        if (null !== $this->precheckBehavior) $this->precheckBehavior->xmlSerialize(true, $sxe->addChild('precheckBehavior'));
        if (null !== $this->cardinalityBehavior) $this->cardinalityBehavior->xmlSerialize(true, $sxe->addChild('cardinalityBehavior'));
        if (null !== $this->definition) $this->definition->xmlSerialize(true, $sxe->addChild('definition'));
        if (null !== $this->transform) $this->transform->xmlSerialize(true, $sxe->addChild('transform'));
        if (0 < count($this->dynamicValue)) {
            foreach($this->dynamicValue as $dynamicValue) {
                $dynamicValue->xmlSerialize(true, $sxe->addChild('dynamicValue'));
            }
        }
        if (0 < count($this->action)) {
            foreach($this->action as $action) {
                $action->xmlSerialize(true, $sxe->addChild('action'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}