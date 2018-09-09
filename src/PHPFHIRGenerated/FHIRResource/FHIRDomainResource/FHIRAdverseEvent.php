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

use PHPFHIRGenerated\FHIRElement\FHIRAdverseEventActuality;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Actual or  potential/avoided event causing unintended physical injury resulting from or contributed to by medical care, a research study or other healthcare setting factors that requires additional monitoring, treatment, or hospitalization, or that results in death.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRAdverseEvent
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRAdverseEvent extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'AdverseEvent';

    /**
     * Whether the event actually happened, or just had the potential to. Note that this is independent of whether anyone was affected or harmed or how severely.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAdverseEventActuality
     */
    public $actuality = null;

    /**
     * The overall type of event, intended for search and filtering purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * The encounter or episode of care that establishes the context for this AdverseEvent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * Parties that may or should contribute or have contributed information to the adverse event, which can consist of one or more activities.  Such information includes information leading to the decision to perform the activity and how to perform the activity (e.g. consultant), information that the activity itself seeks to reveal (e.g. informant of clinical history), or information about what activity was performed (e.g. informant witness).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $contributor = null;

    /**
     * The date (and perhaps time) when the adverse event occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Estimated or actual date the AdverseEvent began, in the opinion of the reporter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $detected = null;

    /**
     * This element defines the specific type of event that occurred or that was prevented from occurring.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $event = null;

    /**
     * Business identifiers assigned to this adverse event by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The information about where the adverse event occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * Describes the type of outcome from the adverse event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $outcome = null;

    /**
     * The date on which the existence of the AdverseEvent was first recorded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $recordedDate = null;

    /**
     * Information on who recorded the adverse event.  May be the patient or a practitioner.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $recorder = null;

    /**
     * AdverseEvent.referenceDocument.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $referenceDocument = null;

    /**
     * Includes information about the reaction that occurred as a result of exposure to a substance (for example, a drug or a chemical).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $resultingCondition = null;

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
     * AdverseEvent.study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $study = null;

    /**
     * This subject or group impacted by the event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * AdverseEvent.subjectMedicalHistory.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subjectMedicalHistory = null;

    /**
     * Describes the entity that is suspected to have caused the adverse event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity
     */
    public $suspectEntity = null;

    /**
     * FHIRAdverseEvent Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['actuality'])) {
                $this->setActuality($data['actuality']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['contributor'])) {
                $this->setContributor($data['contributor']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['detected'])) {
                $this->setDetected($data['detected']);
            }
            if (isset($data['event'])) {
                $this->setEvent($data['event']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['location'])) {
                $this->setLocation($data['location']);
            }
            if (isset($data['outcome'])) {
                $this->setOutcome($data['outcome']);
            }
            if (isset($data['recordedDate'])) {
                $this->setRecordedDate($data['recordedDate']);
            }
            if (isset($data['recorder'])) {
                $this->setRecorder($data['recorder']);
            }
            if (isset($data['referenceDocument'])) {
                $this->setReferenceDocument($data['referenceDocument']);
            }
            if (isset($data['resultingCondition'])) {
                $this->setResultingCondition($data['resultingCondition']);
            }
            if (isset($data['seriousness'])) {
                $this->setSeriousness($data['seriousness']);
            }
            if (isset($data['severity'])) {
                $this->setSeverity($data['severity']);
            }
            if (isset($data['study'])) {
                $this->setStudy($data['study']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['subjectMedicalHistory'])) {
                $this->setSubjectMedicalHistory($data['subjectMedicalHistory']);
            }
            if (isset($data['suspectEntity'])) {
                $this->setSuspectEntity($data['suspectEntity']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAdverseEvent::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Whether the event actually happened, or just had the potential to. Note that this is independent of whether anyone was affected or harmed or how severely.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAdverseEventActuality
     * @return $this
     */
    public function setActuality($actuality)
    {
        if (null === $actuality) {
            return $this; 
        }
        if (is_scalar($actuality)) {
            $actuality = new FHIRAdverseEventActuality($actuality);
        }
        if (!($actuality instanceof FHIRAdverseEventActuality)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAdverseEvent::setActuality - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAdverseEventActuality or appropriate scalar value, %s seen.',
                gettype($actuality)
            ));
        }
        $this->actuality = $actuality;
        return $this;
    }

    /**
     * Whether the event actually happened, or just had the potential to. Note that this is independent of whether anyone was affected or harmed or how severely.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAdverseEventActuality
     */
    public function getActuality()
    {
        return $this->actuality;
    }


    /**
     * The overall type of event, intended for search and filtering purposes.
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
     * The overall type of event, intended for search and filtering purposes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * The encounter or episode of care that establishes the context for this AdverseEvent.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setContext(FHIRReference $context = null)
    {
        if (null === $context) {
            return $this; 
        }
        $this->context = $context;
        return $this;
    }

    /**
     * The encounter or episode of care that establishes the context for this AdverseEvent.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * Parties that may or should contribute or have contributed information to the adverse event, which can consist of one or more activities.  Such information includes information leading to the decision to perform the activity and how to perform the activity (e.g. consultant), information that the activity itself seeks to reveal (e.g. informant of clinical history), or information about what activity was performed (e.g. informant witness).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setContributor(FHIRReference $contributor = null)
    {
        if (null === $contributor) {
            return $this; 
        }
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * Parties that may or should contribute or have contributed information to the adverse event, which can consist of one or more activities.  Such information includes information leading to the decision to perform the activity and how to perform the activity (e.g. consultant), information that the activity itself seeks to reveal (e.g. informant of clinical history), or information about what activity was performed (e.g. informant witness).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContributor()
    {
        return $this->contributor;
    }


    /**
     * The date (and perhaps time) when the adverse event occurred.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDate($date)
    {
        if (null === $date) {
            return $this; 
        }
        if (is_scalar($date)) {
            $date = new FHIRDateTime($date);
        }
        if (!($date instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAdverseEvent::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * The date (and perhaps time) when the adverse event occurred.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * Estimated or actual date the AdverseEvent began, in the opinion of the reporter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDetected($detected)
    {
        if (null === $detected) {
            return $this; 
        }
        if (is_scalar($detected)) {
            $detected = new FHIRDateTime($detected);
        }
        if (!($detected instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAdverseEvent::setDetected - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($detected)
            ));
        }
        $this->detected = $detected;
        return $this;
    }

    /**
     * Estimated or actual date the AdverseEvent began, in the opinion of the reporter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDetected()
    {
        return $this->detected;
    }


    /**
     * This element defines the specific type of event that occurred or that was prevented from occurring.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setEvent(FHIRCodeableConcept $event = null)
    {
        if (null === $event) {
            return $this; 
        }
        $this->event = $event;
        return $this;
    }

    /**
     * This element defines the specific type of event that occurred or that was prevented from occurring.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getEvent()
    {
        return $this->event;
    }


    /**
     * Business identifiers assigned to this adverse event by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this adverse event by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The information about where the adverse event occurred.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setLocation(FHIRReference $location = null)
    {
        if (null === $location) {
            return $this; 
        }
        $this->location = $location;
        return $this;
    }

    /**
     * The information about where the adverse event occurred.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }


    /**
     * Describes the type of outcome from the adverse event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setOutcome(FHIRCodeableConcept $outcome = null)
    {
        if (null === $outcome) {
            return $this; 
        }
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Describes the type of outcome from the adverse event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome()
    {
        return $this->outcome;
    }


    /**
     * The date on which the existence of the AdverseEvent was first recorded.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setRecordedDate($recordedDate)
    {
        if (null === $recordedDate) {
            return $this; 
        }
        if (is_scalar($recordedDate)) {
            $recordedDate = new FHIRDateTime($recordedDate);
        }
        if (!($recordedDate instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAdverseEvent::setRecordedDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($recordedDate)
            ));
        }
        $this->recordedDate = $recordedDate;
        return $this;
    }

    /**
     * The date on which the existence of the AdverseEvent was first recorded.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getRecordedDate()
    {
        return $this->recordedDate;
    }


    /**
     * Information on who recorded the adverse event.  May be the patient or a practitioner.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRecorder(FHIRReference $recorder = null)
    {
        if (null === $recorder) {
            return $this; 
        }
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * Information on who recorded the adverse event.  May be the patient or a practitioner.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRecorder()
    {
        return $this->recorder;
    }


    /**
     * AdverseEvent.referenceDocument.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReferenceDocument(FHIRReference $referenceDocument = null)
    {
        if (null === $referenceDocument) {
            return $this; 
        }
        $this->referenceDocument = $referenceDocument;
        return $this;
    }

    /**
     * AdverseEvent.referenceDocument.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReferenceDocument()
    {
        return $this->referenceDocument;
    }


    /**
     * Includes information about the reaction that occurred as a result of exposure to a substance (for example, a drug or a chemical).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setResultingCondition(FHIRReference $resultingCondition = null)
    {
        if (null === $resultingCondition) {
            return $this; 
        }
        $this->resultingCondition = $resultingCondition;
        return $this;
    }

    /**
     * Includes information about the reaction that occurred as a result of exposure to a substance (for example, a drug or a chemical).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getResultingCondition()
    {
        return $this->resultingCondition;
    }


    /**
     * Assessment whether this event was of real importance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSeriousness(FHIRCodeableConcept $seriousness = null)
    {
        if (null === $seriousness) {
            return $this; 
        }
        $this->seriousness = $seriousness;
        return $this;
    }

    /**
     * Assessment whether this event was of real importance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSeriousness()
    {
        return $this->seriousness;
    }


    /**
     * Describes the severity of the adverse event, in relation to the subject. Contrast to AdverseEvent.serious - a severe rash might not be serious, but a mild heart problem is.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSeverity(FHIRCodeableConcept $severity = null)
    {
        if (null === $severity) {
            return $this; 
        }
        $this->severity = $severity;
        return $this;
    }

    /**
     * Describes the severity of the adverse event, in relation to the subject. Contrast to AdverseEvent.serious - a severe rash might not be serious, but a mild heart problem is.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSeverity()
    {
        return $this->severity;
    }


    /**
     * AdverseEvent.study.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setStudy(FHIRReference $study = null)
    {
        if (null === $study) {
            return $this; 
        }
        $this->study = $study;
        return $this;
    }

    /**
     * AdverseEvent.study.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getStudy()
    {
        return $this->study;
    }


    /**
     * This subject or group impacted by the event.
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
     * This subject or group impacted by the event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * AdverseEvent.subjectMedicalHistory.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubjectMedicalHistory(FHIRReference $subjectMedicalHistory = null)
    {
        if (null === $subjectMedicalHistory) {
            return $this; 
        }
        $this->subjectMedicalHistory = $subjectMedicalHistory;
        return $this;
    }

    /**
     * AdverseEvent.subjectMedicalHistory.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubjectMedicalHistory()
    {
        return $this->subjectMedicalHistory;
    }


    /**
     * Describes the entity that is suspected to have caused the adverse event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity
     * @return $this
     */
    public function setSuspectEntity(FHIRAdverseEventSuspectEntity $suspectEntity = null)
    {
        if (null === $suspectEntity) {
            return $this; 
        }
        $this->suspectEntity = $suspectEntity;
        return $this;
    }

    /**
     * Describes the entity that is suspected to have caused the adverse event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity
     */
    public function getSuspectEntity()
    {
        return $this->suspectEntity;
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
        if (null !== ($v = $this->getActuality())) {
            $a['actuality'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getContributor())) {
            $a['contributor'] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a['date'] = $v;
        }
        if (null !== ($v = $this->getDetected())) {
            $a['detected'] = $v;
        }
        if (null !== ($v = $this->getEvent())) {
            $a['event'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getLocation())) {
            $a['location'] = $v;
        }
        if (null !== ($v = $this->getOutcome())) {
            $a['outcome'] = $v;
        }
        if (null !== ($v = $this->getRecordedDate())) {
            $a['recordedDate'] = $v;
        }
        if (null !== ($v = $this->getRecorder())) {
            $a['recorder'] = $v;
        }
        if (null !== ($v = $this->getReferenceDocument())) {
            $a['referenceDocument'] = $v;
        }
        if (null !== ($v = $this->getResultingCondition())) {
            $a['resultingCondition'] = $v;
        }
        if (null !== ($v = $this->getSeriousness())) {
            $a['seriousness'] = $v;
        }
        if (null !== ($v = $this->getSeverity())) {
            $a['severity'] = $v;
        }
        if (null !== ($v = $this->getStudy())) {
            $a['study'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getSubjectMedicalHistory())) {
            $a['subjectMedicalHistory'] = $v;
        }
        if (null !== ($v = $this->getSuspectEntity())) {
            $a['suspectEntity'] = $v;
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
            $sxe = new \SimpleXMLElement('<AdverseEvent xmlns="http://hl7.org/fhir"></AdverseEvent>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}