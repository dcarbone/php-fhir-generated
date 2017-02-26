<?php namespace PHPFHIRGenerated\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Describes the intended objective(s) for a patient, group or organization care, for example, weight loss, restoring an activity of daily living, obtaining herd immunity via immunization, meeting a process improvement objective, etc.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRGoal extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * This records identifiers associated with this care plan that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Indicates whether the goal has been reached and is still considered relevant.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRGoalStatus
     */
    public $status = null;

    /**
     * Indicates a category the goal falls within.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $category = array();

    /**
     * Identifies the mutually agreed level of importance associated with reaching/sustaining the goal.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $priority = null;

    /**
     * Code and/or human-readable description of a specific desired objective of care.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $description = null;

    /**
     * Identifies the patient, group or organization for whom the goal is being established.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The date or event after which the goal should begin being pursued. (choose any one of start*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $startDate = null;

    /**
     * The date or event after which the goal should begin being pursued. (choose any one of start*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $startCodeableConcept = null;

    /**
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of target*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $targetDate = null;

    /**
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of target*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $targetDuration = null;

    /**
     * Identifies when the current status.  I.e. When initially created, when achieved, when cancelled, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $statusDate = null;

    /**
     * Captures the reason for the current status.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $statusReason = array();

    /**
     * Indicates whose goal this is - patient goal, practitioner goal, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $expressedBy = null;

    /**
     * The identified conditions and other health record elements that are intended to be addressed by the goal.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $addresses = array();

    /**
     * Any comments related to the goal.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * Identifies the change (or lack of change) at the point where the goal was deemed to be cancelled or achieved.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRGoal\FHIRGoalOutcome[]
     */
    public $outcome = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Goal';

    /**
     * This records identifiers associated with this care plan that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this care plan that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Indicates whether the goal has been reached and is still considered relevant.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRGoalStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates whether the goal has been reached and is still considered relevant.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRGoalStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Indicates a category the goal falls within.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Indicates a category the goal falls within.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function addCategory($category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * Identifies the mutually agreed level of importance associated with reaching/sustaining the goal.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Identifies the mutually agreed level of importance associated with reaching/sustaining the goal.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Code and/or human-readable description of a specific desired objective of care.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Code and/or human-readable description of a specific desired objective of care.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Identifies the patient, group or organization for whom the goal is being established.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Identifies the patient, group or organization for whom the goal is being established.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The date or event after which the goal should begin being pursued. (choose any one of start*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * The date or event after which the goal should begin being pursued. (choose any one of start*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * The date or event after which the goal should begin being pursued. (choose any one of start*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStartCodeableConcept()
    {
        return $this->startCodeableConcept;
    }

    /**
     * The date or event after which the goal should begin being pursued. (choose any one of start*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $startCodeableConcept
     * @return $this
     */
    public function setStartCodeableConcept($startCodeableConcept)
    {
        $this->startCodeableConcept = $startCodeableConcept;
        return $this;
    }

    /**
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of target*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getTargetDate()
    {
        return $this->targetDate;
    }

    /**
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of target*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $targetDate
     * @return $this
     */
    public function setTargetDate($targetDate)
    {
        $this->targetDate = $targetDate;
        return $this;
    }

    /**
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of target*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getTargetDuration()
    {
        return $this->targetDuration;
    }

    /**
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of target*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $targetDuration
     * @return $this
     */
    public function setTargetDuration($targetDuration)
    {
        $this->targetDuration = $targetDuration;
        return $this;
    }

    /**
     * Identifies when the current status.  I.e. When initially created, when achieved, when cancelled, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }

    /**
     * Identifies when the current status.  I.e. When initially created, when achieved, when cancelled, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $statusDate
     * @return $this
     */
    public function setStatusDate($statusDate)
    {
        $this->statusDate = $statusDate;
        return $this;
    }

    /**
     * Captures the reason for the current status.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * Captures the reason for the current status.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $statusReason
     * @return $this
     */
    public function addStatusReason($statusReason)
    {
        $this->statusReason[] = $statusReason;
        return $this;
    }

    /**
     * Indicates whose goal this is - patient goal, practitioner goal, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getExpressedBy()
    {
        return $this->expressedBy;
    }

    /**
     * Indicates whose goal this is - patient goal, practitioner goal, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $expressedBy
     * @return $this
     */
    public function setExpressedBy($expressedBy)
    {
        $this->expressedBy = $expressedBy;
        return $this;
    }

    /**
     * The identified conditions and other health record elements that are intended to be addressed by the goal.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * The identified conditions and other health record elements that are intended to be addressed by the goal.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $addresses
     * @return $this
     */
    public function addAddresses($addresses)
    {
        $this->addresses[] = $addresses;
        return $this;
    }

    /**
     * Any comments related to the goal.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Any comments related to the goal.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Identifies the change (or lack of change) at the point where the goal was deemed to be cancelled or achieved.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRGoal\FHIRGoalOutcome[]
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Identifies the change (or lack of change) at the point where the goal was deemed to be cancelled or achieved.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRGoal\FHIRGoalOutcome $outcome
     * @return $this
     */
    public function addOutcome($outcome)
    {
        $this->outcome[] = $outcome;
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
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = json_encode($identifier);
            }
        }
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (0 < count($this->category)) {
            $json['category'] = [];
            foreach($this->category as $category) {
                $json['category'][] = json_encode($category);
            }
        }
        if (null !== $this->priority) $json['priority'] = json_encode($this->priority);
        if (null !== $this->description) $json['description'] = json_encode($this->description);
        if (null !== $this->subject) $json['subject'] = json_encode($this->subject);
        if (null !== $this->startDate) $json['startDate'] = json_encode($this->startDate);
        if (null !== $this->startCodeableConcept) $json['startCodeableConcept'] = json_encode($this->startCodeableConcept);
        if (null !== $this->targetDate) $json['targetDate'] = json_encode($this->targetDate);
        if (null !== $this->targetDuration) $json['targetDuration'] = json_encode($this->targetDuration);
        if (null !== $this->statusDate) $json['statusDate'] = json_encode($this->statusDate);
        if (0 < count($this->statusReason)) {
            $json['statusReason'] = [];
            foreach($this->statusReason as $statusReason) {
                $json['statusReason'][] = json_encode($statusReason);
            }
        }
        if (null !== $this->expressedBy) $json['expressedBy'] = json_encode($this->expressedBy);
        if (0 < count($this->addresses)) {
            $json['addresses'] = [];
            foreach($this->addresses as $addresses) {
                $json['addresses'][] = json_encode($addresses);
            }
        }
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                $json['note'][] = json_encode($note);
            }
        }
        if (0 < count($this->outcome)) {
            $json['outcome'] = [];
            foreach($this->outcome as $outcome) {
                $json['outcome'][] = json_encode($outcome);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Goal xmlns="http://hl7.org/fhir"></Goal>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (0 < count($this->category)) {
            foreach($this->category as $category) {
                $category->xmlSerialize(true, $sxe->addChild('category'));
            }
        }
        if (null !== $this->priority) $this->priority->xmlSerialize(true, $sxe->addChild('priority'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->startDate) $this->startDate->xmlSerialize(true, $sxe->addChild('startDate'));
        if (null !== $this->startCodeableConcept) $this->startCodeableConcept->xmlSerialize(true, $sxe->addChild('startCodeableConcept'));
        if (null !== $this->targetDate) $this->targetDate->xmlSerialize(true, $sxe->addChild('targetDate'));
        if (null !== $this->targetDuration) $this->targetDuration->xmlSerialize(true, $sxe->addChild('targetDuration'));
        if (null !== $this->statusDate) $this->statusDate->xmlSerialize(true, $sxe->addChild('statusDate'));
        if (0 < count($this->statusReason)) {
            foreach($this->statusReason as $statusReason) {
                $statusReason->xmlSerialize(true, $sxe->addChild('statusReason'));
            }
        }
        if (null !== $this->expressedBy) $this->expressedBy->xmlSerialize(true, $sxe->addChild('expressedBy'));
        if (0 < count($this->addresses)) {
            foreach($this->addresses as $addresses) {
                $addresses->xmlSerialize(true, $sxe->addChild('addresses'));
            }
        }
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (0 < count($this->outcome)) {
            foreach($this->outcome as $outcome) {
                $outcome->xmlSerialize(true, $sxe->addChild('outcome'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}