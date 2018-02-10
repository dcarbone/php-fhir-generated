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
 * Actual or  potential/avoided event causing unintended physical injury resulting from or contributed to by medical care, a research study or other healthcare setting factors that requires additional monitoring, treatment, or hospitalization, or that results in death.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRAdverseEvent extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The identifier(s) of this adverse event that are assigned by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Whether the event actually happened, or just had the potential to. Note that this is independent of whether anyone was affected or harmed or how severely.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAdverseEventActuality
     */
    public $actuality = null;

    /**
     * The overall type of event, intended for search and filtering purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $category = [];

    /**
     * This element defines the specific type of event that occurred or that was prevented from occurring.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $event = null;

    /**
     * This subject or group impacted by the event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The encounter or episode of care that establishes the context for this AdverseEvent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * The date (and perhaps time) when the adverse event occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Includes information about the reaction that occurred as a result of exposure to a substance (for example, a drug or a chemical).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $resultingCondition = [];

    /**
     * The information about where the adverse event occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * Assessment whether this event was of real importance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $seriousness = null;

    /**
     * Describes the severity of the adverse event, in relation to the subject. Contrast to AdverseEvent.serious - a severe rash might not be serious, but a mild heart problem is.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $severity = null;

    /**
     * Describes the type of outcome from the adverse event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $outcome = null;

    /**
     * Information on who recorded the adverse event.  May be the patient or a practitioner.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $recorder = null;

    /**
     * Parties that may or should contribute or have contributed information to the adverse event, which can consist of one or more activities.  Such information includes information leading to the decision to perform the activity and how to perform the activity (e.g. consultant), information that the activity itself seeks to reveal (e.g. informant of clinical history), or information about what activity was performed (e.g. informant witness).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $contributor = [];

    /**
     * Describes the entity that is suspected to have caused the adverse event.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity[]
     */
    public $suspectEntity = [];

    /**
     * AdverseEvent.subjectMedicalHistory.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $subjectMedicalHistory = [];

    /**
     * AdverseEvent.referenceDocument.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $referenceDocument = [];

    /**
     * AdverseEvent.study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $study = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'AdverseEvent';

    /**
     * The identifier(s) of this adverse event that are assigned by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * The identifier(s) of this adverse event that are assigned by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Whether the event actually happened, or just had the potential to. Note that this is independent of whether anyone was affected or harmed or how severely.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAdverseEventActuality
     */
    public function getActuality() {
        return $this->actuality;
    }

    /**
     * Whether the event actually happened, or just had the potential to. Note that this is independent of whether anyone was affected or harmed or how severely.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAdverseEventActuality $actuality
     * @return $this
     */
    public function setActuality($actuality) {
        $this->actuality = $actuality;
        return $this;
    }

    /**
     * The overall type of event, intended for search and filtering purposes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * The overall type of event, intended for search and filtering purposes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function addCategory($category) {
        $this->category[] = $category;
        return $this;
    }

    /**
     * This element defines the specific type of event that occurred or that was prevented from occurring.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getEvent() {
        return $this->event;
    }

    /**
     * This element defines the specific type of event that occurred or that was prevented from occurring.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $event
     * @return $this
     */
    public function setEvent($event) {
        $this->event = $event;
        return $this;
    }

    /**
     * This subject or group impacted by the event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * This subject or group impacted by the event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The encounter or episode of care that establishes the context for this AdverseEvent.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext() {
        return $this->context;
    }

    /**
     * The encounter or episode of care that establishes the context for this AdverseEvent.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context) {
        $this->context = $context;
        return $this;
    }

    /**
     * The date (and perhaps time) when the adverse event occurred.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * The date (and perhaps time) when the adverse event occurred.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    /**
     * Includes information about the reaction that occurred as a result of exposure to a substance (for example, a drug or a chemical).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getResultingCondition() {
        return $this->resultingCondition;
    }

    /**
     * Includes information about the reaction that occurred as a result of exposure to a substance (for example, a drug or a chemical).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $resultingCondition
     * @return $this
     */
    public function addResultingCondition($resultingCondition) {
        $this->resultingCondition[] = $resultingCondition;
        return $this;
    }

    /**
     * The information about where the adverse event occurred.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * The information about where the adverse event occurred.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $location
     * @return $this
     */
    public function setLocation($location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Assessment whether this event was of real importance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSeriousness() {
        return $this->seriousness;
    }

    /**
     * Assessment whether this event was of real importance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $seriousness
     * @return $this
     */
    public function setSeriousness($seriousness) {
        $this->seriousness = $seriousness;
        return $this;
    }

    /**
     * Describes the severity of the adverse event, in relation to the subject. Contrast to AdverseEvent.serious - a severe rash might not be serious, but a mild heart problem is.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSeverity() {
        return $this->severity;
    }

    /**
     * Describes the severity of the adverse event, in relation to the subject. Contrast to AdverseEvent.serious - a severe rash might not be serious, but a mild heart problem is.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $severity
     * @return $this
     */
    public function setSeverity($severity) {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Describes the type of outcome from the adverse event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome() {
        return $this->outcome;
    }

    /**
     * Describes the type of outcome from the adverse event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $outcome
     * @return $this
     */
    public function setOutcome($outcome) {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Information on who recorded the adverse event.  May be the patient or a practitioner.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRecorder() {
        return $this->recorder;
    }

    /**
     * Information on who recorded the adverse event.  May be the patient or a practitioner.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $recorder
     * @return $this
     */
    public function setRecorder($recorder) {
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * Parties that may or should contribute or have contributed information to the adverse event, which can consist of one or more activities.  Such information includes information leading to the decision to perform the activity and how to perform the activity (e.g. consultant), information that the activity itself seeks to reveal (e.g. informant of clinical history), or information about what activity was performed (e.g. informant witness).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getContributor() {
        return $this->contributor;
    }

    /**
     * Parties that may or should contribute or have contributed information to the adverse event, which can consist of one or more activities.  Such information includes information leading to the decision to perform the activity and how to perform the activity (e.g. consultant), information that the activity itself seeks to reveal (e.g. informant of clinical history), or information about what activity was performed (e.g. informant witness).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $contributor
     * @return $this
     */
    public function addContributor($contributor) {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * Describes the entity that is suspected to have caused the adverse event.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity[]
     */
    public function getSuspectEntity() {
        return $this->suspectEntity;
    }

    /**
     * Describes the entity that is suspected to have caused the adverse event.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity $suspectEntity
     * @return $this
     */
    public function addSuspectEntity($suspectEntity) {
        $this->suspectEntity[] = $suspectEntity;
        return $this;
    }

    /**
     * AdverseEvent.subjectMedicalHistory.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSubjectMedicalHistory() {
        return $this->subjectMedicalHistory;
    }

    /**
     * AdverseEvent.subjectMedicalHistory.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subjectMedicalHistory
     * @return $this
     */
    public function addSubjectMedicalHistory($subjectMedicalHistory) {
        $this->subjectMedicalHistory[] = $subjectMedicalHistory;
        return $this;
    }

    /**
     * AdverseEvent.referenceDocument.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReferenceDocument() {
        return $this->referenceDocument;
    }

    /**
     * AdverseEvent.referenceDocument.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $referenceDocument
     * @return $this
     */
    public function addReferenceDocument($referenceDocument) {
        $this->referenceDocument[] = $referenceDocument;
        return $this;
    }

    /**
     * AdverseEvent.study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getStudy() {
        return $this->study;
    }

    /**
     * AdverseEvent.study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $study
     * @return $this
     */
    public function addStudy($study) {
        $this->study[] = $study;
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
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['actuality'])) {
                $this->setActuality($data['actuality']);
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
            if (isset($data['event'])) {
                $this->setEvent($data['event']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['resultingCondition'])) {
                if (is_array($data['resultingCondition'])) {
                    foreach($data['resultingCondition'] as $d) {
                        $this->addResultingCondition($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"resultingCondition" must be array of objects or null, '.gettype($data['resultingCondition']).' seen.');
                }
            }
            if (isset($data['location'])) {
                $this->setLocation($data['location']);
            }
            if (isset($data['seriousness'])) {
                $this->setSeriousness($data['seriousness']);
            }
            if (isset($data['severity'])) {
                $this->setSeverity($data['severity']);
            }
            if (isset($data['outcome'])) {
                $this->setOutcome($data['outcome']);
            }
            if (isset($data['recorder'])) {
                $this->setRecorder($data['recorder']);
            }
            if (isset($data['contributor'])) {
                if (is_array($data['contributor'])) {
                    foreach($data['contributor'] as $d) {
                        $this->addContributor($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"contributor" must be array of objects or null, '.gettype($data['contributor']).' seen.');
                }
            }
            if (isset($data['suspectEntity'])) {
                if (is_array($data['suspectEntity'])) {
                    foreach($data['suspectEntity'] as $d) {
                        $this->addSuspectEntity($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"suspectEntity" must be array of objects or null, '.gettype($data['suspectEntity']).' seen.');
                }
            }
            if (isset($data['subjectMedicalHistory'])) {
                if (is_array($data['subjectMedicalHistory'])) {
                    foreach($data['subjectMedicalHistory'] as $d) {
                        $this->addSubjectMedicalHistory($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"subjectMedicalHistory" must be array of objects or null, '.gettype($data['subjectMedicalHistory']).' seen.');
                }
            }
            if (isset($data['referenceDocument'])) {
                if (is_array($data['referenceDocument'])) {
                    foreach($data['referenceDocument'] as $d) {
                        $this->addReferenceDocument($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"referenceDocument" must be array of objects or null, '.gettype($data['referenceDocument']).' seen.');
                }
            }
            if (isset($data['study'])) {
                if (is_array($data['study'])) {
                    foreach($data['study'] as $d) {
                        $this->addStudy($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"study" must be array of objects or null, '.gettype($data['study']).' seen.');
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
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
        if (isset($this->actuality)) $json['actuality'] = $this->actuality;
        if (0 < count($this->category)) {
            $json['category'] = [];
            foreach($this->category as $category) {
                if (null !== $category) $json['category'][] = $category;
            }
        }
        if (isset($this->event)) $json['event'] = $this->event;
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->context)) $json['context'] = $this->context;
        if (isset($this->date)) $json['date'] = $this->date;
        if (0 < count($this->resultingCondition)) {
            $json['resultingCondition'] = [];
            foreach($this->resultingCondition as $resultingCondition) {
                if (null !== $resultingCondition) $json['resultingCondition'][] = $resultingCondition;
            }
        }
        if (isset($this->location)) $json['location'] = $this->location;
        if (isset($this->seriousness)) $json['seriousness'] = $this->seriousness;
        if (isset($this->severity)) $json['severity'] = $this->severity;
        if (isset($this->outcome)) $json['outcome'] = $this->outcome;
        if (isset($this->recorder)) $json['recorder'] = $this->recorder;
        if (0 < count($this->contributor)) {
            $json['contributor'] = [];
            foreach($this->contributor as $contributor) {
                if (null !== $contributor) $json['contributor'][] = $contributor;
            }
        }
        if (0 < count($this->suspectEntity)) {
            $json['suspectEntity'] = [];
            foreach($this->suspectEntity as $suspectEntity) {
                if (null !== $suspectEntity) $json['suspectEntity'][] = $suspectEntity;
            }
        }
        if (0 < count($this->subjectMedicalHistory)) {
            $json['subjectMedicalHistory'] = [];
            foreach($this->subjectMedicalHistory as $subjectMedicalHistory) {
                if (null !== $subjectMedicalHistory) $json['subjectMedicalHistory'][] = $subjectMedicalHistory;
            }
        }
        if (0 < count($this->referenceDocument)) {
            $json['referenceDocument'] = [];
            foreach($this->referenceDocument as $referenceDocument) {
                if (null !== $referenceDocument) $json['referenceDocument'][] = $referenceDocument;
            }
        }
        if (0 < count($this->study)) {
            $json['study'] = [];
            foreach($this->study as $study) {
                if (null !== $study) $json['study'][] = $study;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<AdverseEvent xmlns="http://hl7.org/fhir"></AdverseEvent>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->actuality)) $this->actuality->xmlSerialize(true, $sxe->addChild('actuality'));
        if (0 < count($this->category)) {
            foreach($this->category as $category) {
                $category->xmlSerialize(true, $sxe->addChild('category'));
            }
        }
        if (isset($this->event)) $this->event->xmlSerialize(true, $sxe->addChild('event'));
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->context)) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (isset($this->date)) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (0 < count($this->resultingCondition)) {
            foreach($this->resultingCondition as $resultingCondition) {
                $resultingCondition->xmlSerialize(true, $sxe->addChild('resultingCondition'));
            }
        }
        if (isset($this->location)) $this->location->xmlSerialize(true, $sxe->addChild('location'));
        if (isset($this->seriousness)) $this->seriousness->xmlSerialize(true, $sxe->addChild('seriousness'));
        if (isset($this->severity)) $this->severity->xmlSerialize(true, $sxe->addChild('severity'));
        if (isset($this->outcome)) $this->outcome->xmlSerialize(true, $sxe->addChild('outcome'));
        if (isset($this->recorder)) $this->recorder->xmlSerialize(true, $sxe->addChild('recorder'));
        if (0 < count($this->contributor)) {
            foreach($this->contributor as $contributor) {
                $contributor->xmlSerialize(true, $sxe->addChild('contributor'));
            }
        }
        if (0 < count($this->suspectEntity)) {
            foreach($this->suspectEntity as $suspectEntity) {
                $suspectEntity->xmlSerialize(true, $sxe->addChild('suspectEntity'));
            }
        }
        if (0 < count($this->subjectMedicalHistory)) {
            foreach($this->subjectMedicalHistory as $subjectMedicalHistory) {
                $subjectMedicalHistory->xmlSerialize(true, $sxe->addChild('subjectMedicalHistory'));
            }
        }
        if (0 < count($this->referenceDocument)) {
            foreach($this->referenceDocument as $referenceDocument) {
                $referenceDocument->xmlSerialize(true, $sxe->addChild('referenceDocument'));
            }
        }
        if (0 < count($this->study)) {
            foreach($this->study as $study) {
                $study->xmlSerialize(true, $sxe->addChild('study'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}