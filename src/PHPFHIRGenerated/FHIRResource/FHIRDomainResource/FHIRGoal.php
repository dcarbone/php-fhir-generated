<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRGoalStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Describes the intended objective(s) for a patient, group or organization care, for example, weight loss, restoring an activity of daily living, obtaining herd immunity via immunization, meeting a process improvement objective, etc.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRGoal
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRGoal extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Goal';

    /**
     * The identified conditions and other health record elements that are intended to be addressed by the goal.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $addresses = null;

    /**
     * Indicates a category the goal falls within.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * Human-readable and/or coded description of a specific desired objective of care, such as "control blood pressure" or "negotiate an obstacle course" or "dance with child at wedding".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $description = null;

    /**
     * Indicates whose goal this is - patient goal, practitioner goal, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $expressedBy = null;

    /**
     * Business identifiers assigned to this goal by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Any comments related to the goal.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * Identifies the change (or lack of change) at the point when the status of the goal is assessed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $outcomeCode = null;

    /**
     * Details of what's changed (or not changed).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $outcomeReference = null;

    /**
     * Identifies the mutually agreed level of importance associated with reaching/sustaining the goal.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $priority = null;

    /**
     * The date or event after which the goal should begin being pursued.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $startCodeableConcept = null;

    /**
     * The date or event after which the goal should begin being pursued.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $startDate = null;

    /**
     * Indicates whether the goal has been reached and is still considered relevant.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRGoalStatus
     */
    public $status = null;

    /**
     * Identifies when the current status.  I.e. When initially created, when achieved, when cancelled, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $statusDate = null;

    /**
     * Captures the reason for the current status.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $statusReason = null;

    /**
     * Identifies the patient, group or organization for whom the goal is being established.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Indicates what should be done by when.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget
     */
    public $target = null;

    /**
     * FHIRGoal Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['addresses'])) {
                $this->setAddresses($data['addresses']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['expressedBy'])) {
                $this->setExpressedBy($data['expressedBy']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['outcomeCode'])) {
                $this->setOutcomeCode($data['outcomeCode']);
            }
            if (isset($data['outcomeReference'])) {
                $this->setOutcomeReference($data['outcomeReference']);
            }
            if (isset($data['priority'])) {
                $this->setPriority($data['priority']);
            }
            if (isset($data['startCodeableConcept'])) {
                $this->setStartCodeableConcept($data['startCodeableConcept']);
            }
            if (isset($data['startDate'])) {
                $this->setStartDate($data['startDate']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['statusDate'])) {
                $this->setStatusDate($data['statusDate']);
            }
            if (isset($data['statusReason'])) {
                $this->setStatusReason($data['statusReason']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['target'])) {
                $this->setTarget($data['target']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRGoal::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The identified conditions and other health record elements that are intended to be addressed by the goal.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAddresses(FHIRReference $addresses = null)
    {
        if (null === $addresses) {
            return $this; 
        }
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * The identified conditions and other health record elements that are intended to be addressed by the goal.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAddresses()
    {
        return $this->addresses;
    }


    /**
     * Indicates a category the goal falls within.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        if (null === $category) {
            return $this; 
        }
        $this->category = $category;
        return $this;
    }

    /**
     * Indicates a category the goal falls within.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * Human-readable and/or coded description of a specific desired objective of care, such as "control blood pressure" or "negotiate an obstacle course" or "dance with child at wedding".
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setDescription(FHIRCodeableConcept $description = null)
    {
        if (null === $description) {
            return $this; 
        }
        $this->description = $description;
        return $this;
    }

    /**
     * Human-readable and/or coded description of a specific desired objective of care, such as "control blood pressure" or "negotiate an obstacle course" or "dance with child at wedding".
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Indicates whose goal this is - patient goal, practitioner goal, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setExpressedBy(FHIRReference $expressedBy = null)
    {
        if (null === $expressedBy) {
            return $this; 
        }
        $this->expressedBy = $expressedBy;
        return $this;
    }

    /**
     * Indicates whose goal this is - patient goal, practitioner goal, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getExpressedBy()
    {
        return $this->expressedBy;
    }


    /**
     * Business identifiers assigned to this goal by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Business identifiers assigned to this goal by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Any comments related to the goal.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note = $note;
        return $this;
    }

    /**
     * Any comments related to the goal.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * Identifies the change (or lack of change) at the point when the status of the goal is assessed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setOutcomeCode(FHIRCodeableConcept $outcomeCode = null)
    {
        if (null === $outcomeCode) {
            return $this; 
        }
        $this->outcomeCode = $outcomeCode;
        return $this;
    }

    /**
     * Identifies the change (or lack of change) at the point when the status of the goal is assessed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcomeCode()
    {
        return $this->outcomeCode;
    }


    /**
     * Details of what's changed (or not changed).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setOutcomeReference(FHIRReference $outcomeReference = null)
    {
        if (null === $outcomeReference) {
            return $this; 
        }
        $this->outcomeReference = $outcomeReference;
        return $this;
    }

    /**
     * Details of what's changed (or not changed).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOutcomeReference()
    {
        return $this->outcomeReference;
    }


    /**
     * Identifies the mutually agreed level of importance associated with reaching/sustaining the goal.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setPriority(FHIRCodeableConcept $priority = null)
    {
        if (null === $priority) {
            return $this; 
        }
        $this->priority = $priority;
        return $this;
    }

    /**
     * Identifies the mutually agreed level of importance associated with reaching/sustaining the goal.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPriority()
    {
        return $this->priority;
    }


    /**
     * The date or event after which the goal should begin being pursued.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setStartCodeableConcept(FHIRCodeableConcept $startCodeableConcept = null)
    {
        if (null === $startCodeableConcept) {
            return $this; 
        }
        $this->startCodeableConcept = $startCodeableConcept;
        return $this;
    }

    /**
     * The date or event after which the goal should begin being pursued.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStartCodeableConcept()
    {
        return $this->startCodeableConcept;
    }


    /**
     * The date or event after which the goal should begin being pursued.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        if (null === $startDate) {
            return $this; 
        }
        if (is_scalar($startDate)) {
            $startDate = new FHIRDate($startDate);
        }
        if (!($startDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGoal::setStartDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($startDate)
            ));
        }
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * The date or event after which the goal should begin being pursued.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getStartDate()
    {
        return $this->startDate;
    }


    /**
     * Indicates whether the goal has been reached and is still considered relevant.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRGoalStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRGoalStatus($status);
        }
        if (!($status instanceof FHIRGoalStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGoal::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRGoalStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Indicates whether the goal has been reached and is still considered relevant.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRGoalStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Identifies when the current status.  I.e. When initially created, when achieved, when cancelled, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setStatusDate($statusDate)
    {
        if (null === $statusDate) {
            return $this; 
        }
        if (is_scalar($statusDate)) {
            $statusDate = new FHIRDate($statusDate);
        }
        if (!($statusDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGoal::setStatusDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($statusDate)
            ));
        }
        $this->statusDate = $statusDate;
        return $this;
    }

    /**
     * Identifies when the current status.  I.e. When initially created, when achieved, when cancelled, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }


    /**
     * Captures the reason for the current status.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setStatusReason($statusReason)
    {
        if (null === $statusReason) {
            return $this; 
        }
        if (is_scalar($statusReason)) {
            $statusReason = new FHIRString($statusReason);
        }
        if (!($statusReason instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGoal::setStatusReason - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($statusReason)
            ));
        }
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Captures the reason for the current status.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }


    /**
     * Identifies the patient, group or organization for whom the goal is being established.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubject(FHIRReference $subject = null)
    {
        if (null === $subject) {
            return $this; 
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * Identifies the patient, group or organization for whom the goal is being established.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * Indicates what should be done by when.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget
     * @return $this
     */
    public function setTarget(FHIRGoalTarget $target = null)
    {
        if (null === $target) {
            return $this; 
        }
        $this->target = $target;
        return $this;
    }

    /**
     * Indicates what should be done by when.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget
     */
    public function getTarget()
    {
        return $this->target;
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getAddresses())) {
            $a['addresses'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getExpressedBy())) {
            $a['expressedBy'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getOutcomeCode())) {
            $a['outcomeCode'] = $v;
        }
        if (null !== ($v = $this->getOutcomeReference())) {
            $a['outcomeReference'] = $v;
        }
        if (null !== ($v = $this->getPriority())) {
            $a['priority'] = $v;
        }
        if (null !== ($v = $this->getStartCodeableConcept())) {
            $a['startCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getStartDate())) {
            $a['startDate'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getStatusDate())) {
            $a['statusDate'] = $v;
        }
        if (null !== ($v = $this->getStatusReason())) {
            $a['statusReason'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getTarget())) {
            $a['target'] = $v;
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
            $sxe = new \SimpleXMLElement('<Goal xmlns="http://hl7.org/fhir"></Goal>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}