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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterClassHistory;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterDiagnosis;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIREncounterStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * An interaction between a patient and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIREncounter
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIREncounter extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Encounter';

    /**
     * The set of accounts that may be used for billing for this Encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $account = null;

    /**
     * The appointment that scheduled this encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $appointment = null;

    /**
     * The request this encounter satisfies (e.g. incoming referral or procedure request).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $basedOn = null;

    /**
     * Concepts representing classification of patient encounter such as ambulatory (outpatient), inpatient, emergency, home health or others due to local variations.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $class = null;

    /**
     * The class history permits the tracking of the encounters transitions without needing to go  through the resource history.  This would be used for a case where an admission starts of as an emergency encounter, then transisions into an inpatient scenario. Doing this and not restarting a new encounter ensures that any lab/diagnostic results can more easily follow the patient and not require re-processing and not get lost or cancelled during a kindof discharge from emergency to inpatient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterClassHistory
     */
    public $classHistory = null;

    /**
     * The list of diagnosis relevant to this encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterDiagnosis
     */
    public $diagnosis = null;

    /**
     * Where a specific encounter should be classified as a part of a specific episode(s) of care this field should be used. This association can facilitate grouping of related encounters together for a specific purpose, such as government reporting, issue tracking, association via a common problem.  The association is recorded on the encounter as these are typically created after the episode of care, and grouped on entry rather than editing the episode of care to append another encounter to it (the episode of care could span years).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $episodeOfCare = null;

    /**
     * Details about the admission to a healthcare service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public $hospitalization = null;

    /**
     * Identifier(s) by which this encounter is known.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Quantity of time the encounter lasted. This excludes the time during leaves of absence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $length = null;

    /**
     * List of locations where  the patient has been during this encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation
     */
    public $location = null;

    /**
     * Another Encounter of which this encounter is a part of (administratively or in time).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $partOf = null;

    /**
     * The list of people responsible for providing the service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant
     */
    public $participant = null;

    /**
     * The start and end time of the encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Indicates the urgency of the encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $priority = null;

    /**
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reason = null;

    /**
     * The organization that is primarily responsible for this Encounter's services. This MAY be the same as the organization on the Patient record, however it could be different, such as if the actor performing the services was from an external organization (which may be billed seperately) for an external consultation.  Refer to the example bundle showing an abbreviated set of Encounters for a colonoscopy.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $serviceProvider = null;

    /**
     * Broad categorization of the service that is to be provided (e.g. cardiology).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $serviceType = null;

    /**
     * planned | arrived | triaged | in-progress | onleave | finished | cancelled +.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREncounterStatus
     */
    public $status = null;

    /**
     * The status history permits the encounter resource to contain the status history without needing to read through the historical versions of the resource, or even have the server store them.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory
     */
    public $statusHistory = null;

    /**
     * The patient or group present at the encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIREncounter Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['account'])) {
                $this->setAccount($data['account']);
            }
            if (isset($data['appointment'])) {
                $this->setAppointment($data['appointment']);
            }
            if (isset($data['basedOn'])) {
                $this->setBasedOn($data['basedOn']);
            }
            if (isset($data['class'])) {
                $this->setClass($data['class']);
            }
            if (isset($data['classHistory'])) {
                $this->setClassHistory($data['classHistory']);
            }
            if (isset($data['diagnosis'])) {
                $this->setDiagnosis($data['diagnosis']);
            }
            if (isset($data['episodeOfCare'])) {
                $this->setEpisodeOfCare($data['episodeOfCare']);
            }
            if (isset($data['hospitalization'])) {
                $this->setHospitalization($data['hospitalization']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['length'])) {
                $this->setLength($data['length']);
            }
            if (isset($data['location'])) {
                $this->setLocation($data['location']);
            }
            if (isset($data['partOf'])) {
                $this->setPartOf($data['partOf']);
            }
            if (isset($data['participant'])) {
                $this->setParticipant($data['participant']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['priority'])) {
                $this->setPriority($data['priority']);
            }
            if (isset($data['reason'])) {
                $this->setReason($data['reason']);
            }
            if (isset($data['serviceProvider'])) {
                $this->setServiceProvider($data['serviceProvider']);
            }
            if (isset($data['serviceType'])) {
                $this->setServiceType($data['serviceType']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['statusHistory'])) {
                $this->setStatusHistory($data['statusHistory']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREncounter::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The set of accounts that may be used for billing for this Encounter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAccount(FHIRReference $account = null)
    {
        if (null === $account) {
            return $this; 
        }
        $this->account = $account;
        return $this;
    }

    /**
     * The set of accounts that may be used for billing for this Encounter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAccount()
    {
        return $this->account;
    }


    /**
     * The appointment that scheduled this encounter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAppointment(FHIRReference $appointment = null)
    {
        if (null === $appointment) {
            return $this; 
        }
        $this->appointment = $appointment;
        return $this;
    }

    /**
     * The appointment that scheduled this encounter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAppointment()
    {
        return $this->appointment;
    }


    /**
     * The request this encounter satisfies (e.g. incoming referral or procedure request).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setBasedOn(FHIRReference $basedOn = null)
    {
        if (null === $basedOn) {
            return $this; 
        }
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * The request this encounter satisfies (e.g. incoming referral or procedure request).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }


    /**
     * Concepts representing classification of patient encounter such as ambulatory (outpatient), inpatient, emergency, home health or others due to local variations.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setClass(FHIRCoding $class = null)
    {
        if (null === $class) {
            return $this; 
        }
        $this->class = $class;
        return $this;
    }

    /**
     * Concepts representing classification of patient encounter such as ambulatory (outpatient), inpatient, emergency, home health or others due to local variations.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getClass()
    {
        return $this->class;
    }


    /**
     * The class history permits the tracking of the encounters transitions without needing to go  through the resource history.  This would be used for a case where an admission starts of as an emergency encounter, then transisions into an inpatient scenario. Doing this and not restarting a new encounter ensures that any lab/diagnostic results can more easily follow the patient and not require re-processing and not get lost or cancelled during a kindof discharge from emergency to inpatient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterClassHistory
     * @return $this
     */
    public function setClassHistory(FHIREncounterClassHistory $classHistory = null)
    {
        if (null === $classHistory) {
            return $this; 
        }
        $this->classHistory = $classHistory;
        return $this;
    }

    /**
     * The class history permits the tracking of the encounters transitions without needing to go  through the resource history.  This would be used for a case where an admission starts of as an emergency encounter, then transisions into an inpatient scenario. Doing this and not restarting a new encounter ensures that any lab/diagnostic results can more easily follow the patient and not require re-processing and not get lost or cancelled during a kindof discharge from emergency to inpatient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterClassHistory
     */
    public function getClassHistory()
    {
        return $this->classHistory;
    }


    /**
     * The list of diagnosis relevant to this encounter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterDiagnosis
     * @return $this
     */
    public function setDiagnosis(FHIREncounterDiagnosis $diagnosis = null)
    {
        if (null === $diagnosis) {
            return $this; 
        }
        $this->diagnosis = $diagnosis;
        return $this;
    }

    /**
     * The list of diagnosis relevant to this encounter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterDiagnosis
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }


    /**
     * Where a specific encounter should be classified as a part of a specific episode(s) of care this field should be used. This association can facilitate grouping of related encounters together for a specific purpose, such as government reporting, issue tracking, association via a common problem.  The association is recorded on the encounter as these are typically created after the episode of care, and grouped on entry rather than editing the episode of care to append another encounter to it (the episode of care could span years).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEpisodeOfCare(FHIRReference $episodeOfCare = null)
    {
        if (null === $episodeOfCare) {
            return $this; 
        }
        $this->episodeOfCare = $episodeOfCare;
        return $this;
    }

    /**
     * Where a specific encounter should be classified as a part of a specific episode(s) of care this field should be used. This association can facilitate grouping of related encounters together for a specific purpose, such as government reporting, issue tracking, association via a common problem.  The association is recorded on the encounter as these are typically created after the episode of care, and grouped on entry rather than editing the episode of care to append another encounter to it (the episode of care could span years).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEpisodeOfCare()
    {
        return $this->episodeOfCare;
    }


    /**
     * Details about the admission to a healthcare service.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     * @return $this
     */
    public function setHospitalization(FHIREncounterHospitalization $hospitalization = null)
    {
        if (null === $hospitalization) {
            return $this; 
        }
        $this->hospitalization = $hospitalization;
        return $this;
    }

    /**
     * Details about the admission to a healthcare service.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function getHospitalization()
    {
        return $this->hospitalization;
    }


    /**
     * Identifier(s) by which this encounter is known.
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
     * Identifier(s) by which this encounter is known.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Quantity of time the encounter lasted. This excludes the time during leaves of absence.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     * @return $this
     */
    public function setLength(FHIRDuration $length = null)
    {
        if (null === $length) {
            return $this; 
        }
        $this->length = $length;
        return $this;
    }

    /**
     * Quantity of time the encounter lasted. This excludes the time during leaves of absence.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getLength()
    {
        return $this->length;
    }


    /**
     * List of locations where  the patient has been during this encounter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation
     * @return $this
     */
    public function setLocation(FHIREncounterLocation $location = null)
    {
        if (null === $location) {
            return $this; 
        }
        $this->location = $location;
        return $this;
    }

    /**
     * List of locations where  the patient has been during this encounter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation
     */
    public function getLocation()
    {
        return $this->location;
    }


    /**
     * Another Encounter of which this encounter is a part of (administratively or in time).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPartOf(FHIRReference $partOf = null)
    {
        if (null === $partOf) {
            return $this; 
        }
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Another Encounter of which this encounter is a part of (administratively or in time).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }


    /**
     * The list of people responsible for providing the service.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant
     * @return $this
     */
    public function setParticipant(FHIREncounterParticipant $participant = null)
    {
        if (null === $participant) {
            return $this; 
        }
        $this->participant = $participant;
        return $this;
    }

    /**
     * The list of people responsible for providing the service.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant
     */
    public function getParticipant()
    {
        return $this->participant;
    }


    /**
     * The start and end time of the encounter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        if (null === $period) {
            return $this; 
        }
        $this->period = $period;
        return $this;
    }

    /**
     * The start and end time of the encounter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }


    /**
     * Indicates the urgency of the encounter.
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
     * Indicates the urgency of the encounter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPriority()
    {
        return $this->priority;
    }


    /**
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
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
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReason()
    {
        return $this->reason;
    }


    /**
     * The organization that is primarily responsible for this Encounter's services. This MAY be the same as the organization on the Patient record, however it could be different, such as if the actor performing the services was from an external organization (which may be billed seperately) for an external consultation.  Refer to the example bundle showing an abbreviated set of Encounters for a colonoscopy.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setServiceProvider(FHIRReference $serviceProvider = null)
    {
        if (null === $serviceProvider) {
            return $this; 
        }
        $this->serviceProvider = $serviceProvider;
        return $this;
    }

    /**
     * The organization that is primarily responsible for this Encounter's services. This MAY be the same as the organization on the Patient record, however it could be different, such as if the actor performing the services was from an external organization (which may be billed seperately) for an external consultation.  Refer to the example bundle showing an abbreviated set of Encounters for a colonoscopy.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }


    /**
     * Broad categorization of the service that is to be provided (e.g. cardiology).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setServiceType(FHIRCodeableConcept $serviceType = null)
    {
        if (null === $serviceType) {
            return $this; 
        }
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * Broad categorization of the service that is to be provided (e.g. cardiology).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }


    /**
     * planned | arrived | triaged | in-progress | onleave | finished | cancelled +.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIREncounterStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIREncounterStatus($status);
        }
        if (!($status instanceof FHIREncounterStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIREncounter::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIREncounterStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * planned | arrived | triaged | in-progress | onleave | finished | cancelled +.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIREncounterStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * The status history permits the encounter resource to contain the status history without needing to read through the historical versions of the resource, or even have the server store them.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory
     * @return $this
     */
    public function setStatusHistory(FHIREncounterStatusHistory $statusHistory = null)
    {
        if (null === $statusHistory) {
            return $this; 
        }
        $this->statusHistory = $statusHistory;
        return $this;
    }

    /**
     * The status history permits the encounter resource to contain the status history without needing to read through the historical versions of the resource, or even have the server store them.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory
     */
    public function getStatusHistory()
    {
        return $this->statusHistory;
    }


    /**
     * The patient or group present at the encounter.
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
     * The patient or group present at the encounter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
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
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getAccount())) {
            $a['account'] = $v;
        }
        if (null !== ($v = $this->getAppointment())) {
            $a['appointment'] = $v;
        }
        if (null !== ($v = $this->getBasedOn())) {
            $a['basedOn'] = $v;
        }
        if (null !== ($v = $this->getClass())) {
            $a['class'] = $v;
        }
        if (null !== ($v = $this->getClassHistory())) {
            $a['classHistory'] = $v;
        }
        if (null !== ($v = $this->getDiagnosis())) {
            $a['diagnosis'] = $v;
        }
        if (null !== ($v = $this->getEpisodeOfCare())) {
            $a['episodeOfCare'] = $v;
        }
        if (null !== ($v = $this->getHospitalization())) {
            $a['hospitalization'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getLength())) {
            $a['length'] = $v;
        }
        if (null !== ($v = $this->getLocation())) {
            $a['location'] = $v;
        }
        if (null !== ($v = $this->getPartOf())) {
            $a['partOf'] = $v;
        }
        if (null !== ($v = $this->getParticipant())) {
            $a['participant'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getPriority())) {
            $a['priority'] = $v;
        }
        if (null !== ($v = $this->getReason())) {
            $a['reason'] = $v;
        }
        if (null !== ($v = $this->getServiceProvider())) {
            $a['serviceProvider'] = $v;
        }
        if (null !== ($v = $this->getServiceType())) {
            $a['serviceType'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getStatusHistory())) {
            $a['statusHistory'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
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
            $sxe = new \SimpleXMLElement('<Encounter xmlns="http://hl7.org/fhir"></Encounter>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}