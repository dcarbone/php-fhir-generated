<?php namespace PHPFHIRGenerated\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Actual or  potential/avoided event causing unintended physical injury resulting from or contributed to by medical care, a research study or other healthcare setting factors that requires additional monitoring, treatment, or hospitalization, or that results in death.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRAdverseEvent extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The identifier(s) of this adverse event that are assigned by business processes and/or used to refer to it when a direct URL reference to the resource itsefl is not appropriate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The type of event which is important to characterize what occurred and caused harm to the subject, or had the potential to cause harm to the subject.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAdverseEventCategory
     */
    public $category = null;

    /**
     * This element defines the specific type of event that occurred or that was prevented from occurring.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * This subject or group impacted by the event.  With a prospective adverse event, there will be no subject as the adverse event was prevented.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The date (and perhaps time) when the adverse event occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Includes information about the reaction that occurred as a result of exposure to a substance (for example, a drug or a chemical).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $reaction = array();

    /**
     * The information about where the adverse event occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * Describes the seriousness or severity of the adverse event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $seriousness = null;

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
     * Parties that may or should contribute or have contributed information to the Act. Such information includes information leading to the decision to perform the Act and how to perform the Act (e.g. consultant), information that the Act itself seeks to reveal (e.g. informant of clinical history), or information about what Act was performed (e.g. informant witness).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $eventParticipant = null;

    /**
     * Describes the adverse event in text.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Describes the entity that is suspected to have caused the adverse event.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity[]
     */
    public $suspectEntity = array();

    /**
     * AdverseEvent.subjectMedicalHistory.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $subjectMedicalHistory = array();

    /**
     * AdverseEvent.referenceDocument.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $referenceDocument = array();

    /**
     * AdverseEvent.study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $study = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'AdverseEvent';

    /**
     * The identifier(s) of this adverse event that are assigned by business processes and/or used to refer to it when a direct URL reference to the resource itsefl is not appropriate.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * The identifier(s) of this adverse event that are assigned by business processes and/or used to refer to it when a direct URL reference to the resource itsefl is not appropriate.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The type of event which is important to characterize what occurred and caused harm to the subject, or had the potential to cause harm to the subject.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAdverseEventCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * The type of event which is important to characterize what occurred and caused harm to the subject, or had the potential to cause harm to the subject.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAdverseEventCategory $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * This element defines the specific type of event that occurred or that was prevented from occurring.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * This element defines the specific type of event that occurred or that was prevented from occurring.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * This subject or group impacted by the event.  With a prospective adverse event, there will be no subject as the adverse event was prevented.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * This subject or group impacted by the event.  With a prospective adverse event, there will be no subject as the adverse event was prevented.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The date (and perhaps time) when the adverse event occurred.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date (and perhaps time) when the adverse event occurred.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Includes information about the reaction that occurred as a result of exposure to a substance (for example, a drug or a chemical).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReaction()
    {
        return $this->reaction;
    }

    /**
     * Includes information about the reaction that occurred as a result of exposure to a substance (for example, a drug or a chemical).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $reaction
     * @return $this
     */
    public function addReaction($reaction)
    {
        $this->reaction[] = $reaction;
        return $this;
    }

    /**
     * The information about where the adverse event occurred.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The information about where the adverse event occurred.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Describes the seriousness or severity of the adverse event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSeriousness()
    {
        return $this->seriousness;
    }

    /**
     * Describes the seriousness or severity of the adverse event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $seriousness
     * @return $this
     */
    public function setSeriousness($seriousness)
    {
        $this->seriousness = $seriousness;
        return $this;
    }

    /**
     * Describes the type of outcome from the adverse event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Describes the type of outcome from the adverse event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $outcome
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Information on who recorded the adverse event.  May be the patient or a practitioner.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRecorder()
    {
        return $this->recorder;
    }

    /**
     * Information on who recorded the adverse event.  May be the patient or a practitioner.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $recorder
     * @return $this
     */
    public function setRecorder($recorder)
    {
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * Parties that may or should contribute or have contributed information to the Act. Such information includes information leading to the decision to perform the Act and how to perform the Act (e.g. consultant), information that the Act itself seeks to reveal (e.g. informant of clinical history), or information about what Act was performed (e.g. informant witness).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEventParticipant()
    {
        return $this->eventParticipant;
    }

    /**
     * Parties that may or should contribute or have contributed information to the Act. Such information includes information leading to the decision to perform the Act and how to perform the Act (e.g. consultant), information that the Act itself seeks to reveal (e.g. informant of clinical history), or information about what Act was performed (e.g. informant witness).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $eventParticipant
     * @return $this
     */
    public function setEventParticipant($eventParticipant)
    {
        $this->eventParticipant = $eventParticipant;
        return $this;
    }

    /**
     * Describes the adverse event in text.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Describes the adverse event in text.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Describes the entity that is suspected to have caused the adverse event.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity[]
     */
    public function getSuspectEntity()
    {
        return $this->suspectEntity;
    }

    /**
     * Describes the entity that is suspected to have caused the adverse event.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity $suspectEntity
     * @return $this
     */
    public function addSuspectEntity($suspectEntity)
    {
        $this->suspectEntity[] = $suspectEntity;
        return $this;
    }

    /**
     * AdverseEvent.subjectMedicalHistory.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSubjectMedicalHistory()
    {
        return $this->subjectMedicalHistory;
    }

    /**
     * AdverseEvent.subjectMedicalHistory.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subjectMedicalHistory
     * @return $this
     */
    public function addSubjectMedicalHistory($subjectMedicalHistory)
    {
        $this->subjectMedicalHistory[] = $subjectMedicalHistory;
        return $this;
    }

    /**
     * AdverseEvent.referenceDocument.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReferenceDocument()
    {
        return $this->referenceDocument;
    }

    /**
     * AdverseEvent.referenceDocument.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $referenceDocument
     * @return $this
     */
    public function addReferenceDocument($referenceDocument)
    {
        $this->referenceDocument[] = $referenceDocument;
        return $this;
    }

    /**
     * AdverseEvent.study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getStudy()
    {
        return $this->study;
    }

    /**
     * AdverseEvent.study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $study
     * @return $this
     */
    public function addStudy($study)
    {
        $this->study[] = $study;
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
        if (null !== $this->identifier) $json['identifier'] = json_encode($this->identifier);
        if (null !== $this->category) $json['category'] = json_encode($this->category);
        if (null !== $this->type) $json['type'] = json_encode($this->type);
        if (null !== $this->subject) $json['subject'] = json_encode($this->subject);
        if (null !== $this->date) $json['date'] = json_encode($this->date);
        if (0 < count($this->reaction)) {
            $json['reaction'] = [];
            foreach($this->reaction as $reaction) {
                $json['reaction'][] = json_encode($reaction);
            }
        }
        if (null !== $this->location) $json['location'] = json_encode($this->location);
        if (null !== $this->seriousness) $json['seriousness'] = json_encode($this->seriousness);
        if (null !== $this->outcome) $json['outcome'] = json_encode($this->outcome);
        if (null !== $this->recorder) $json['recorder'] = json_encode($this->recorder);
        if (null !== $this->eventParticipant) $json['eventParticipant'] = json_encode($this->eventParticipant);
        if (null !== $this->description) $json['description'] = json_encode($this->description);
        if (0 < count($this->suspectEntity)) {
            $json['suspectEntity'] = [];
            foreach($this->suspectEntity as $suspectEntity) {
                $json['suspectEntity'][] = json_encode($suspectEntity);
            }
        }
        if (0 < count($this->subjectMedicalHistory)) {
            $json['subjectMedicalHistory'] = [];
            foreach($this->subjectMedicalHistory as $subjectMedicalHistory) {
                $json['subjectMedicalHistory'][] = json_encode($subjectMedicalHistory);
            }
        }
        if (0 < count($this->referenceDocument)) {
            $json['referenceDocument'] = [];
            foreach($this->referenceDocument as $referenceDocument) {
                $json['referenceDocument'][] = json_encode($referenceDocument);
            }
        }
        if (0 < count($this->study)) {
            $json['study'] = [];
            foreach($this->study as $study) {
                $json['study'][] = json_encode($study);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<AdverseEvent xmlns="http://hl7.org/fhir"></AdverseEvent>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->category) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (0 < count($this->reaction)) {
            foreach($this->reaction as $reaction) {
                $reaction->xmlSerialize(true, $sxe->addChild('reaction'));
            }
        }
        if (null !== $this->location) $this->location->xmlSerialize(true, $sxe->addChild('location'));
        if (null !== $this->seriousness) $this->seriousness->xmlSerialize(true, $sxe->addChild('seriousness'));
        if (null !== $this->outcome) $this->outcome->xmlSerialize(true, $sxe->addChild('outcome'));
        if (null !== $this->recorder) $this->recorder->xmlSerialize(true, $sxe->addChild('recorder'));
        if (null !== $this->eventParticipant) $this->eventParticipant->xmlSerialize(true, $sxe->addChild('eventParticipant'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
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