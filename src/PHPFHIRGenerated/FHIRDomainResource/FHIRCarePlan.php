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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Describes the intention of how one or more practitioners intend to deliver care for a particular patient, group or community for a period of time, possibly limited to care for a specific condition or set of conditions.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRCarePlan extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * This records identifiers associated with this care plan that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Identifies the patient or group whose intended care is described by the plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Indicates whether the plan is currently being acted upon, represents future intentions or is now a historical record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCarePlanStatus
     */
    public $status = null;

    /**
     * Identifies the context in which this particular CarePlan is defined.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * Indicates when the plan did (or is intended to) come into effect and end.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Identifies the individual(s) or ogranization who is responsible for the content of the care plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $author = array();

    /**
     * Identifies the most recent date on which the plan has been revised.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $modified = null;

    /**
     * Identifies what "kind" of plan this is to support differentiation between multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma", "disease management", "wellness plan", etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $category = array();

    /**
     * A description of the scope and nature of the plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management and/or mitigation are handled by this plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $addresses = array();

    /**
     * Identifies portions of the patient's record that specifically influenced the formation of the plan.  These might include co-morbidities, recent procedures, limitations, recent assessments, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $support = array();

    /**
     * Identifies CarePlans with some sort of formal relationship to the current plan.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanRelatedPlan[]
     */
    public $relatedPlan = array();

    /**
     * Identifies all people and organizations who are expected to be involved in the care envisioned by this plan.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanParticipant[]
     */
    public $participant = array();

    /**
     * Describes the intended objective(s) of carrying out the care plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $goal = array();

    /**
     * Identifies a planned action to occur as part of the plan.  For example, a medication to be used, lab tests to perform, self-monitoring, education, etc.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanActivity[]
     */
    public $activity = array();

    /**
     * General notes about the care plan not covered elsewhere.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'CarePlan';

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
     * Identifies the patient or group whose intended care is described by the plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Identifies the patient or group whose intended care is described by the plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Indicates whether the plan is currently being acted upon, represents future intentions or is now a historical record.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCarePlanStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates whether the plan is currently being acted upon, represents future intentions or is now a historical record.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCarePlanStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Identifies the context in which this particular CarePlan is defined.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Identifies the context in which this particular CarePlan is defined.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * Indicates when the plan did (or is intended to) come into effect and end.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Indicates when the plan did (or is intended to) come into effect and end.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Identifies the individual(s) or ogranization who is responsible for the content of the care plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Identifies the individual(s) or ogranization who is responsible for the content of the care plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $author
     * @return $this
     */
    public function addAuthor($author)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * Identifies the most recent date on which the plan has been revised.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Identifies the most recent date on which the plan has been revised.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $modified
     * @return $this
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
        return $this;
    }

    /**
     * Identifies what "kind" of plan this is to support differentiation between multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma", "disease management", "wellness plan", etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Identifies what "kind" of plan this is to support differentiation between multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma", "disease management", "wellness plan", etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function addCategory($category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * A description of the scope and nature of the plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A description of the scope and nature of the plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management and/or mitigation are handled by this plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management and/or mitigation are handled by this plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $addresses
     * @return $this
     */
    public function addAddresses($addresses)
    {
        $this->addresses[] = $addresses;
        return $this;
    }

    /**
     * Identifies portions of the patient's record that specifically influenced the formation of the plan.  These might include co-morbidities, recent procedures, limitations, recent assessments, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSupport()
    {
        return $this->support;
    }

    /**
     * Identifies portions of the patient's record that specifically influenced the formation of the plan.  These might include co-morbidities, recent procedures, limitations, recent assessments, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $support
     * @return $this
     */
    public function addSupport($support)
    {
        $this->support[] = $support;
        return $this;
    }

    /**
     * Identifies CarePlans with some sort of formal relationship to the current plan.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanRelatedPlan[]
     */
    public function getRelatedPlan()
    {
        return $this->relatedPlan;
    }

    /**
     * Identifies CarePlans with some sort of formal relationship to the current plan.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanRelatedPlan $relatedPlan
     * @return $this
     */
    public function addRelatedPlan($relatedPlan)
    {
        $this->relatedPlan[] = $relatedPlan;
        return $this;
    }

    /**
     * Identifies all people and organizations who are expected to be involved in the care envisioned by this plan.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Identifies all people and organizations who are expected to be involved in the care envisioned by this plan.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanParticipant $participant
     * @return $this
     */
    public function addParticipant($participant)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * Describes the intended objective(s) of carrying out the care plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Describes the intended objective(s) of carrying out the care plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $goal
     * @return $this
     */
    public function addGoal($goal)
    {
        $this->goal[] = $goal;
        return $this;
    }

    /**
     * Identifies a planned action to occur as part of the plan.  For example, a medication to be used, lab tests to perform, self-monitoring, education, etc.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanActivity[]
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Identifies a planned action to occur as part of the plan.  For example, a medication to be used, lab tests to perform, self-monitoring, education, etc.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanActivity $activity
     * @return $this
     */
    public function addActivity($activity)
    {
        $this->activity[] = $activity;
        return $this;
    }

    /**
     * General notes about the care plan not covered elsewhere.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * General notes about the care plan not covered elsewhere.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;
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
        if (null !== $this->subject) $json['subject'] = json_encode($this->subject);
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->context) $json['context'] = json_encode($this->context);
        if (null !== $this->period) $json['period'] = json_encode($this->period);
        if (0 < count($this->author)) {
            $json['author'] = [];
            foreach($this->author as $author) {
                $json['author'][] = json_encode($author);
            }
        }
        if (null !== $this->modified) $json['modified'] = json_encode($this->modified);
        if (0 < count($this->category)) {
            $json['category'] = [];
            foreach($this->category as $category) {
                $json['category'][] = json_encode($category);
            }
        }
        if (null !== $this->description) $json['description'] = json_encode($this->description);
        if (0 < count($this->addresses)) {
            $json['addresses'] = [];
            foreach($this->addresses as $addresses) {
                $json['addresses'][] = json_encode($addresses);
            }
        }
        if (0 < count($this->support)) {
            $json['support'] = [];
            foreach($this->support as $support) {
                $json['support'][] = json_encode($support);
            }
        }
        if (0 < count($this->relatedPlan)) {
            $json['relatedPlan'] = [];
            foreach($this->relatedPlan as $relatedPlan) {
                $json['relatedPlan'][] = json_encode($relatedPlan);
            }
        }
        if (0 < count($this->participant)) {
            $json['participant'] = [];
            foreach($this->participant as $participant) {
                $json['participant'][] = json_encode($participant);
            }
        }
        if (0 < count($this->goal)) {
            $json['goal'] = [];
            foreach($this->goal as $goal) {
                $json['goal'][] = json_encode($goal);
            }
        }
        if (0 < count($this->activity)) {
            $json['activity'] = [];
            foreach($this->activity as $activity) {
                $json['activity'][] = json_encode($activity);
            }
        }
        if (null !== $this->note) $json['note'] = json_encode($this->note);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CarePlan xmlns="http://hl7.org/fhir"></CarePlan>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->context) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (0 < count($this->author)) {
            foreach($this->author as $author) {
                $author->xmlSerialize(true, $sxe->addChild('author'));
            }
        }
        if (null !== $this->modified) $this->modified->xmlSerialize(true, $sxe->addChild('modified'));
        if (0 < count($this->category)) {
            foreach($this->category as $category) {
                $category->xmlSerialize(true, $sxe->addChild('category'));
            }
        }
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->addresses)) {
            foreach($this->addresses as $addresses) {
                $addresses->xmlSerialize(true, $sxe->addChild('addresses'));
            }
        }
        if (0 < count($this->support)) {
            foreach($this->support as $support) {
                $support->xmlSerialize(true, $sxe->addChild('support'));
            }
        }
        if (0 < count($this->relatedPlan)) {
            foreach($this->relatedPlan as $relatedPlan) {
                $relatedPlan->xmlSerialize(true, $sxe->addChild('relatedPlan'));
            }
        }
        if (0 < count($this->participant)) {
            foreach($this->participant as $participant) {
                $participant->xmlSerialize(true, $sxe->addChild('participant'));
            }
        }
        if (0 < count($this->goal)) {
            foreach($this->goal as $goal) {
                $goal->xmlSerialize(true, $sxe->addChild('goal'));
            }
        }
        if (0 < count($this->activity)) {
            foreach($this->activity as $activity) {
                $activity->xmlSerialize(true, $sxe->addChild('activity'));
            }
        }
        if (null !== $this->note) $this->note->xmlSerialize(true, $sxe->addChild('note'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}