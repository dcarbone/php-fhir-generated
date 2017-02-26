<?php namespace PHPFHIRGenerated\FHIRResource\FHIRActivityGroup;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
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
 *   Generated on Tue, Dec 6, 2016 12:22+1100 for FHIR v1.8.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A guidance response is the formal response to a guidance request, including any output parameters returned by the evaluation, as well as the description of any proposed actions to be taken.
 */
class FHIRActivityGroupAction extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A unique identifier for the action. The identifier SHALL be unique within the container in which it appears, and MAY be universally unique.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $actionIdentifier = null;

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
     * The concept represented by this action or its sub-actions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $concept = array();

    /**
     * Didactic or other informational resources associated with the action that can be provided to the CDS recipient. Information resources can include inline text commentary and links to web resources.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact[]
     */
    public $documentation = array();

    /**
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     * @var \PHPFHIRGenerated\FHIRResource\FHIRActivityGroup\FHIRActivityGroupRelatedAction
     */
    public $relatedAction = null;

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
     * The participant in the action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $participant = array();

    /**
     * The type of action to perform (create, update, remove).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $type = null;

    /**
     * Defines the grouping behavior for the action and its children.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $groupingBehavior = null;

    /**
     * Defines the selection behavior for the action and its children.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $selectionBehavior = null;

    /**
     * Defines the requiredness behavior for the action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $requiredBehavior = null;

    /**
     * Defines whether the action should usually be preselected.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $precheckBehavior = null;

    /**
     * Defines whether the action can be selected multiple times.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $cardinalityBehavior = null;

    /**
     * The resource that is the target of the action (e.g. CommunicationRequest).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $resource = null;

    /**
     * Sub actions.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRActivityGroup\FHIRActivityGroupAction[]
     */
    public $action = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ActivityGroup.Action';

    /**
     * A unique identifier for the action. The identifier SHALL be unique within the container in which it appears, and MAY be universally unique.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getActionIdentifier()
    {
        return $this->actionIdentifier;
    }

    /**
     * A unique identifier for the action. The identifier SHALL be unique within the container in which it appears, and MAY be universally unique.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $actionIdentifier
     * @return $this
     */
    public function setActionIdentifier($actionIdentifier)
    {
        $this->actionIdentifier = $actionIdentifier;
        return $this;
    }

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
     * The concept represented by this action or its sub-actions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * The concept represented by this action or its sub-actions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $concept
     * @return $this
     */
    public function addConcept($concept)
    {
        $this->concept[] = $concept;
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
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     * @return \PHPFHIRGenerated\FHIRResource\FHIRActivityGroup\FHIRActivityGroupRelatedAction
     */
    public function getRelatedAction()
    {
        return $this->relatedAction;
    }

    /**
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     * @param \PHPFHIRGenerated\FHIRResource\FHIRActivityGroup\FHIRActivityGroupRelatedAction $relatedAction
     * @return $this
     */
    public function setRelatedAction($relatedAction)
    {
        $this->relatedAction = $relatedAction;
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
     * The participant in the action.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * The participant in the action.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $participant
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
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getGroupingBehavior()
    {
        return $this->groupingBehavior;
    }

    /**
     * Defines the grouping behavior for the action and its children.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $groupingBehavior
     * @return $this
     */
    public function setGroupingBehavior($groupingBehavior)
    {
        $this->groupingBehavior = $groupingBehavior;
        return $this;
    }

    /**
     * Defines the selection behavior for the action and its children.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getSelectionBehavior()
    {
        return $this->selectionBehavior;
    }

    /**
     * Defines the selection behavior for the action and its children.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $selectionBehavior
     * @return $this
     */
    public function setSelectionBehavior($selectionBehavior)
    {
        $this->selectionBehavior = $selectionBehavior;
        return $this;
    }

    /**
     * Defines the requiredness behavior for the action.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getRequiredBehavior()
    {
        return $this->requiredBehavior;
    }

    /**
     * Defines the requiredness behavior for the action.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $requiredBehavior
     * @return $this
     */
    public function setRequiredBehavior($requiredBehavior)
    {
        $this->requiredBehavior = $requiredBehavior;
        return $this;
    }

    /**
     * Defines whether the action should usually be preselected.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getPrecheckBehavior()
    {
        return $this->precheckBehavior;
    }

    /**
     * Defines whether the action should usually be preselected.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $precheckBehavior
     * @return $this
     */
    public function setPrecheckBehavior($precheckBehavior)
    {
        $this->precheckBehavior = $precheckBehavior;
        return $this;
    }

    /**
     * Defines whether the action can be selected multiple times.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getCardinalityBehavior()
    {
        return $this->cardinalityBehavior;
    }

    /**
     * Defines whether the action can be selected multiple times.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $cardinalityBehavior
     * @return $this
     */
    public function setCardinalityBehavior($cardinalityBehavior)
    {
        $this->cardinalityBehavior = $cardinalityBehavior;
        return $this;
    }

    /**
     * The resource that is the target of the action (e.g. CommunicationRequest).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * The resource that is the target of the action (e.g. CommunicationRequest).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $resource
     * @return $this
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Sub actions.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRActivityGroup\FHIRActivityGroupAction[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sub actions.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRActivityGroup\FHIRActivityGroupAction $action
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
        if (null !== $this->actionIdentifier) $json['actionIdentifier'] = json_encode($this->actionIdentifier);
        if (null !== $this->label) $json['label'] = json_encode($this->label);
        if (null !== $this->title) $json['title'] = json_encode($this->title);
        if (null !== $this->description) $json['description'] = json_encode($this->description);
        if (null !== $this->textEquivalent) $json['textEquivalent'] = json_encode($this->textEquivalent);
        if (0 < count($this->concept)) {
            $json['concept'] = [];
            foreach($this->concept as $concept) {
                $json['concept'][] = json_encode($concept);
            }
        }
        if (0 < count($this->documentation)) {
            $json['documentation'] = [];
            foreach($this->documentation as $documentation) {
                $json['documentation'][] = json_encode($documentation);
            }
        }
        if (null !== $this->relatedAction) $json['relatedAction'] = json_encode($this->relatedAction);
        if (null !== $this->timingDateTime) $json['timingDateTime'] = json_encode($this->timingDateTime);
        if (null !== $this->timingPeriod) $json['timingPeriod'] = json_encode($this->timingPeriod);
        if (null !== $this->timingDuration) $json['timingDuration'] = json_encode($this->timingDuration);
        if (null !== $this->timingRange) $json['timingRange'] = json_encode($this->timingRange);
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
        if (null !== $this->resource) $json['resource'] = json_encode($this->resource);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ActivityGroupAction xmlns="http://hl7.org/fhir"></ActivityGroupAction>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->actionIdentifier) $this->actionIdentifier->xmlSerialize(true, $sxe->addChild('actionIdentifier'));
        if (null !== $this->label) $this->label->xmlSerialize(true, $sxe->addChild('label'));
        if (null !== $this->title) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->textEquivalent) $this->textEquivalent->xmlSerialize(true, $sxe->addChild('textEquivalent'));
        if (0 < count($this->concept)) {
            foreach($this->concept as $concept) {
                $concept->xmlSerialize(true, $sxe->addChild('concept'));
            }
        }
        if (0 < count($this->documentation)) {
            foreach($this->documentation as $documentation) {
                $documentation->xmlSerialize(true, $sxe->addChild('documentation'));
            }
        }
        if (null !== $this->relatedAction) $this->relatedAction->xmlSerialize(true, $sxe->addChild('relatedAction'));
        if (null !== $this->timingDateTime) $this->timingDateTime->xmlSerialize(true, $sxe->addChild('timingDateTime'));
        if (null !== $this->timingPeriod) $this->timingPeriod->xmlSerialize(true, $sxe->addChild('timingPeriod'));
        if (null !== $this->timingDuration) $this->timingDuration->xmlSerialize(true, $sxe->addChild('timingDuration'));
        if (null !== $this->timingRange) $this->timingRange->xmlSerialize(true, $sxe->addChild('timingRange'));
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
        if (null !== $this->resource) $this->resource->xmlSerialize(true, $sxe->addChild('resource'));
        if (0 < count($this->action)) {
            foreach($this->action as $action) {
                $action->xmlSerialize(true, $sxe->addChild('action'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}