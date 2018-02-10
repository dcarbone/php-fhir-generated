<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
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
    public $identifier = [];

    /**
     * Identifies the protocol, questionnaire, guideline or other specification the care plan should be conducted in accordance with.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public $instantiates = [];

    /**
     * A care plan that is fulfilled in whole or in part by this care plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $basedOn = [];

    /**
     * Completed or terminated care plan whose function is taken by this new care plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $replaces = [];

    /**
     * A larger care plan of which this particular care plan is a component or step.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $partOf = [];

    /**
     * Indicates whether the plan is currently being acted upon, represents future intentions or is now a historical record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCarePlanStatus
     */
    public $status = null;

    /**
     * Indicates the level of authority/intentionality associated with the care plan and where the care plan fits into the workflow chain.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCarePlanIntent
     */
    public $intent = null;

    /**
     * Identifies what "kind" of plan this is to support differentiation between multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma", "disease management", "wellness plan", etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $category = [];

    /**
     * Human-friendly name for the CarePlan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * A description of the scope and nature of the plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Identifies the patient or group whose intended care is described by the plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Identifies the original context in which this particular CarePlan was created.
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
    public $author = [];

    /**
     * Identifies all people and organizations who are expected to be involved in the care envisioned by this plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $careTeam = [];

    /**
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management and/or mitigation are handled by this plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $addresses = [];

    /**
     * Identifies portions of the patient's record that specifically influenced the formation of the plan.  These might include co-morbidities, recent procedures, limitations, recent assessments, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $supportingInfo = [];

    /**
     * Describes the intended objective(s) of carrying out the care plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $goal = [];

    /**
     * Identifies a planned action to occur as part of the plan.  For example, a medication to be used, lab tests to perform, self-monitoring, education, etc.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanActivity[]
     */
    public $activity = [];

    /**
     * General notes about the care plan not covered elsewhere.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $note = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'CarePlan';

    /**
     * This records identifiers associated with this care plan that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this care plan that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Identifies the protocol, questionnaire, guideline or other specification the care plan should be conducted in accordance with.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public function getInstantiates() {
        return $this->instantiates;
    }

    /**
     * Identifies the protocol, questionnaire, guideline or other specification the care plan should be conducted in accordance with.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $instantiates
     * @return $this
     */
    public function addInstantiates($instantiates) {
        $this->instantiates[] = $instantiates;
        return $this;
    }

    /**
     * A care plan that is fulfilled in whole or in part by this care plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getBasedOn() {
        return $this->basedOn;
    }

    /**
     * A care plan that is fulfilled in whole or in part by this care plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $basedOn
     * @return $this
     */
    public function addBasedOn($basedOn) {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * Completed or terminated care plan whose function is taken by this new care plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReplaces() {
        return $this->replaces;
    }

    /**
     * Completed or terminated care plan whose function is taken by this new care plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $replaces
     * @return $this
     */
    public function addReplaces($replaces) {
        $this->replaces[] = $replaces;
        return $this;
    }

    /**
     * A larger care plan of which this particular care plan is a component or step.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPartOf() {
        return $this->partOf;
    }

    /**
     * A larger care plan of which this particular care plan is a component or step.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $partOf
     * @return $this
     */
    public function addPartOf($partOf) {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * Indicates whether the plan is currently being acted upon, represents future intentions or is now a historical record.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCarePlanStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Indicates whether the plan is currently being acted upon, represents future intentions or is now a historical record.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCarePlanStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Indicates the level of authority/intentionality associated with the care plan and where the care plan fits into the workflow chain.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCarePlanIntent
     */
    public function getIntent() {
        return $this->intent;
    }

    /**
     * Indicates the level of authority/intentionality associated with the care plan and where the care plan fits into the workflow chain.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCarePlanIntent $intent
     * @return $this
     */
    public function setIntent($intent) {
        $this->intent = $intent;
        return $this;
    }

    /**
     * Identifies what "kind" of plan this is to support differentiation between multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma", "disease management", "wellness plan", etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Identifies what "kind" of plan this is to support differentiation between multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma", "disease management", "wellness plan", etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function addCategory($category) {
        $this->category[] = $category;
        return $this;
    }

    /**
     * Human-friendly name for the CarePlan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Human-friendly name for the CarePlan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * A description of the scope and nature of the plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * A description of the scope and nature of the plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Identifies the patient or group whose intended care is described by the plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * Identifies the patient or group whose intended care is described by the plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Identifies the original context in which this particular CarePlan was created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext() {
        return $this->context;
    }

    /**
     * Identifies the original context in which this particular CarePlan was created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context) {
        $this->context = $context;
        return $this;
    }

    /**
     * Indicates when the plan did (or is intended to) come into effect and end.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod() {
        return $this->period;
    }

    /**
     * Indicates when the plan did (or is intended to) come into effect and end.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period) {
        $this->period = $period;
        return $this;
    }

    /**
     * Identifies the individual(s) or ogranization who is responsible for the content of the care plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * Identifies the individual(s) or ogranization who is responsible for the content of the care plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $author
     * @return $this
     */
    public function addAuthor($author) {
        $this->author[] = $author;
        return $this;
    }

    /**
     * Identifies all people and organizations who are expected to be involved in the care envisioned by this plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getCareTeam() {
        return $this->careTeam;
    }

    /**
     * Identifies all people and organizations who are expected to be involved in the care envisioned by this plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $careTeam
     * @return $this
     */
    public function addCareTeam($careTeam) {
        $this->careTeam[] = $careTeam;
        return $this;
    }

    /**
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management and/or mitigation are handled by this plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAddresses() {
        return $this->addresses;
    }

    /**
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management and/or mitigation are handled by this plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $addresses
     * @return $this
     */
    public function addAddresses($addresses) {
        $this->addresses[] = $addresses;
        return $this;
    }

    /**
     * Identifies portions of the patient's record that specifically influenced the formation of the plan.  These might include co-morbidities, recent procedures, limitations, recent assessments, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSupportingInfo() {
        return $this->supportingInfo;
    }

    /**
     * Identifies portions of the patient's record that specifically influenced the formation of the plan.  These might include co-morbidities, recent procedures, limitations, recent assessments, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $supportingInfo
     * @return $this
     */
    public function addSupportingInfo($supportingInfo) {
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * Describes the intended objective(s) of carrying out the care plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getGoal() {
        return $this->goal;
    }

    /**
     * Describes the intended objective(s) of carrying out the care plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $goal
     * @return $this
     */
    public function addGoal($goal) {
        $this->goal[] = $goal;
        return $this;
    }

    /**
     * Identifies a planned action to occur as part of the plan.  For example, a medication to be used, lab tests to perform, self-monitoring, education, etc.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanActivity[]
     */
    public function getActivity() {
        return $this->activity;
    }

    /**
     * Identifies a planned action to occur as part of the plan.  For example, a medication to be used, lab tests to perform, self-monitoring, education, etc.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanActivity $activity
     * @return $this
     */
    public function addActivity($activity) {
        $this->activity[] = $activity;
        return $this;
    }

    /**
     * General notes about the care plan not covered elsewhere.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * General notes about the care plan not covered elsewhere.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note) {
        $this->note[] = $note;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addIdentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.');
                }
            }
            if (isset($data['instantiates'])) {
                if (is_array($data['instantiates'])) {
                    foreach($data['instantiates'] as $d) {
                        $this->addInstantiates($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"instantiates" must be array of objects or null, '.gettype($data['instantiates']).' seen.');
                }
            }
            if (isset($data['basedOn'])) {
                if (is_array($data['basedOn'])) {
                    foreach($data['basedOn'] as $d) {
                        $this->addBasedOn($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"basedOn" must be array of objects or null, '.gettype($data['basedOn']).' seen.');
                }
            }
            if (isset($data['replaces'])) {
                if (is_array($data['replaces'])) {
                    foreach($data['replaces'] as $d) {
                        $this->addReplaces($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"replaces" must be array of objects or null, '.gettype($data['replaces']).' seen.');
                }
            }
            if (isset($data['partOf'])) {
                if (is_array($data['partOf'])) {
                    foreach($data['partOf'] as $d) {
                        $this->addPartOf($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"partOf" must be array of objects or null, '.gettype($data['partOf']).' seen.');
                }
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['intent'])) {
                $this->setIntent($data['intent']);
            }
            if (isset($data['category'])) {
                if (is_array($data['category'])) {
                    foreach($data['category'] as $d) {
                        $this->addCategory($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"category" must be array of objects or null, '.gettype($data['category']).' seen.');
                }
            }
            if (isset($data['title'])) {
                $this->setTitle($data['title']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['author'])) {
                if (is_array($data['author'])) {
                    foreach($data['author'] as $d) {
                        $this->addAuthor($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"author" must be array of objects or null, '.gettype($data['author']).' seen.');
                }
            }
            if (isset($data['careTeam'])) {
                if (is_array($data['careTeam'])) {
                    foreach($data['careTeam'] as $d) {
                        $this->addCareTeam($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"careTeam" must be array of objects or null, '.gettype($data['careTeam']).' seen.');
                }
            }
            if (isset($data['addresses'])) {
                if (is_array($data['addresses'])) {
                    foreach($data['addresses'] as $d) {
                        $this->addAddresses($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"addresses" must be array of objects or null, '.gettype($data['addresses']).' seen.');
                }
            }
            if (isset($data['supportingInfo'])) {
                if (is_array($data['supportingInfo'])) {
                    foreach($data['supportingInfo'] as $d) {
                        $this->addSupportingInfo($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"supportingInfo" must be array of objects or null, '.gettype($data['supportingInfo']).' seen.');
                }
            }
            if (isset($data['goal'])) {
                if (is_array($data['goal'])) {
                    foreach($data['goal'] as $d) {
                        $this->addGoal($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"goal" must be array of objects or null, '.gettype($data['goal']).' seen.');
                }
            }
            if (isset($data['activity'])) {
                if (is_array($data['activity'])) {
                    foreach($data['activity'] as $d) {
                        $this->addActivity($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"activity" must be array of objects or null, '.gettype($data['activity']).' seen.');
                }
            }
            if (isset($data['note'])) {
                if (is_array($data['note'])) {
                    foreach($data['note'] as $d) {
                        $this->addNote($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"note" must be array of objects or null, '.gettype($data['note']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (0 < count($this->instantiates)) {
            $json['instantiates'] = [];
            foreach($this->instantiates as $instantiates) {
                if (null !== $instantiates) $json['instantiates'][] = $instantiates;
            }
        }
        if (0 < count($this->basedOn)) {
            $json['basedOn'] = [];
            foreach($this->basedOn as $basedOn) {
                if (null !== $basedOn) $json['basedOn'][] = $basedOn;
            }
        }
        if (0 < count($this->replaces)) {
            $json['replaces'] = [];
            foreach($this->replaces as $replaces) {
                if (null !== $replaces) $json['replaces'][] = $replaces;
            }
        }
        if (0 < count($this->partOf)) {
            $json['partOf'] = [];
            foreach($this->partOf as $partOf) {
                if (null !== $partOf) $json['partOf'][] = $partOf;
            }
        }
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->intent)) $json['intent'] = $this->intent;
        if (0 < count($this->category)) {
            $json['category'] = [];
            foreach($this->category as $category) {
                if (null !== $category) $json['category'][] = $category;
            }
        }
        if (isset($this->title)) $json['title'] = $this->title;
        if (isset($this->description)) $json['description'] = $this->description;
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->context)) $json['context'] = $this->context;
        if (isset($this->period)) $json['period'] = $this->period;
        if (0 < count($this->author)) {
            $json['author'] = [];
            foreach($this->author as $author) {
                if (null !== $author) $json['author'][] = $author;
            }
        }
        if (0 < count($this->careTeam)) {
            $json['careTeam'] = [];
            foreach($this->careTeam as $careTeam) {
                if (null !== $careTeam) $json['careTeam'][] = $careTeam;
            }
        }
        if (0 < count($this->addresses)) {
            $json['addresses'] = [];
            foreach($this->addresses as $addresses) {
                if (null !== $addresses) $json['addresses'][] = $addresses;
            }
        }
        if (0 < count($this->supportingInfo)) {
            $json['supportingInfo'] = [];
            foreach($this->supportingInfo as $supportingInfo) {
                if (null !== $supportingInfo) $json['supportingInfo'][] = $supportingInfo;
            }
        }
        if (0 < count($this->goal)) {
            $json['goal'] = [];
            foreach($this->goal as $goal) {
                if (null !== $goal) $json['goal'][] = $goal;
            }
        }
        if (0 < count($this->activity)) {
            $json['activity'] = [];
            foreach($this->activity as $activity) {
                if (null !== $activity) $json['activity'][] = $activity;
            }
        }
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                if (null !== $note) $json['note'][] = $note;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CarePlan xmlns="http://hl7.org/fhir"></CarePlan>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->instantiates)) {
            foreach($this->instantiates as $instantiates) {
                $instantiates->xmlSerialize(true, $sxe->addChild('instantiates'));
            }
        }
        if (0 < count($this->basedOn)) {
            foreach($this->basedOn as $basedOn) {
                $basedOn->xmlSerialize(true, $sxe->addChild('basedOn'));
            }
        }
        if (0 < count($this->replaces)) {
            foreach($this->replaces as $replaces) {
                $replaces->xmlSerialize(true, $sxe->addChild('replaces'));
            }
        }
        if (0 < count($this->partOf)) {
            foreach($this->partOf as $partOf) {
                $partOf->xmlSerialize(true, $sxe->addChild('partOf'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->intent)) $this->intent->xmlSerialize(true, $sxe->addChild('intent'));
        if (0 < count($this->category)) {
            foreach($this->category as $category) {
                $category->xmlSerialize(true, $sxe->addChild('category'));
            }
        }
        if (isset($this->title)) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->context)) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (isset($this->period)) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (0 < count($this->author)) {
            foreach($this->author as $author) {
                $author->xmlSerialize(true, $sxe->addChild('author'));
            }
        }
        if (0 < count($this->careTeam)) {
            foreach($this->careTeam as $careTeam) {
                $careTeam->xmlSerialize(true, $sxe->addChild('careTeam'));
            }
        }
        if (0 < count($this->addresses)) {
            foreach($this->addresses as $addresses) {
                $addresses->xmlSerialize(true, $sxe->addChild('addresses'));
            }
        }
        if (0 < count($this->supportingInfo)) {
            foreach($this->supportingInfo as $supportingInfo) {
                $supportingInfo->xmlSerialize(true, $sxe->addChild('supportingInfo'));
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
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}