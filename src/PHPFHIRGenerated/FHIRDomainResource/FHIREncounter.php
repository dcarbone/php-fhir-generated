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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * An interaction between a patient and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIREncounter extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifier(s) by which this encounter is known.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * planned | arrived | triaged | in-progress | onleave | finished | cancelled +.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREncounterStatus
     */
    public $status = null;

    /**
     * The status history permits the encounter resource to contain the status history without needing to read through the historical versions of the resource, or even have the server store them.
     * @var \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterStatusHistory[]
     */
    public $statusHistory = array();

    /**
     * inpatient | outpatient | ambulatory | emergency +.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $class = null;

    /**
     * The class history permits the tracking of the encounters transitions without needing to go  through the resource history.

This would be used for a case where an admission starts of as an emergency encounter, then transisions into an inpatient scenario. Doing this and not restarting a new encounter ensures that any lab/diagnostic results can more easily follow the patient and not require re-processing and not get lost or cancelled during a kindof discharge from emergency to inpatient.
     * @var \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterClassHistory[]
     */
    public $classHistory = array();

    /**
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $type = array();

    /**
     * Indicates the urgency of the encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $priority = null;

    /**
     * The patient ro group present at the encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Where a specific encounter should be classified as a part of a specific episode(s) of care this field should be used. This association can facilitate grouping of related encounters together for a specific purpose, such as government reporting, issue tracking, association via a common problem.  The association is recorded on the encounter as these are typically created after the episode of care, and grouped on entry rather than editing the episode of care to append another encounter to it (the episode of care could span years).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $episodeOfCare = array();

    /**
     * The referral request this encounter satisfies (incoming referral).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $incomingReferral = array();

    /**
     * The list of people responsible for providing the service.
     * @var \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterParticipant[]
     */
    public $participant = array();

    /**
     * The appointment that scheduled this encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $appointment = null;

    /**
     * The start and end time of the encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Quantity of time the encounter lasted. This excludes the time during leaves of absence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $length = null;

    /**
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $reason = array();

    /**
     * The list of diagnosis relevant to this encounter.
     * @var \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterDiagnosis[]
     */
    public $diagnosis = array();

    /**
     * The set of accounts that may be used for billing for this Encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $account = array();

    /**
     * Details about the admission to a healthcare service.
     * @var \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterHospitalization
     */
    public $hospitalization = null;

    /**
     * List of locations where  the patient has been during this encounter.
     * @var \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterLocation[]
     */
    public $location = array();

    /**
     * An organization that is in charge of maintaining the information of this Encounter (e.g. who maintains the report or the master service catalog item, etc.). This MAY be the same as the organization on the Patient record, however it could be different. This MAY not be not the Service Delivery Location's Organization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $serviceProvider = null;

    /**
     * Another Encounter of which this encounter is a part of (administratively or in time).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $partOf = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Encounter';

    /**
     * Identifier(s) by which this encounter is known.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifier(s) by which this encounter is known.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * planned | arrived | triaged | in-progress | onleave | finished | cancelled +.
     * @return \PHPFHIRGenerated\FHIRElement\FHIREncounterStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * planned | arrived | triaged | in-progress | onleave | finished | cancelled +.
     * @param \PHPFHIRGenerated\FHIRElement\FHIREncounterStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The status history permits the encounter resource to contain the status history without needing to read through the historical versions of the resource, or even have the server store them.
     * @return \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterStatusHistory[]
     */
    public function getStatusHistory()
    {
        return $this->statusHistory;
    }

    /**
     * The status history permits the encounter resource to contain the status history without needing to read through the historical versions of the resource, or even have the server store them.
     * @param \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterStatusHistory $statusHistory
     * @return $this
     */
    public function addStatusHistory($statusHistory)
    {
        $this->statusHistory[] = $statusHistory;
        return $this;
    }

    /**
     * inpatient | outpatient | ambulatory | emergency +.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * inpatient | outpatient | ambulatory | emergency +.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $class
     * @return $this
     */
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * The class history permits the tracking of the encounters transitions without needing to go  through the resource history.

This would be used for a case where an admission starts of as an emergency encounter, then transisions into an inpatient scenario. Doing this and not restarting a new encounter ensures that any lab/diagnostic results can more easily follow the patient and not require re-processing and not get lost or cancelled during a kindof discharge from emergency to inpatient.
     * @return \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterClassHistory[]
     */
    public function getClassHistory()
    {
        return $this->classHistory;
    }

    /**
     * The class history permits the tracking of the encounters transitions without needing to go  through the resource history.

This would be used for a case where an admission starts of as an emergency encounter, then transisions into an inpatient scenario. Doing this and not restarting a new encounter ensures that any lab/diagnostic results can more easily follow the patient and not require re-processing and not get lost or cancelled during a kindof discharge from emergency to inpatient.
     * @param \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterClassHistory $classHistory
     * @return $this
     */
    public function addClassHistory($classHistory)
    {
        $this->classHistory[] = $classHistory;
        return $this;
    }

    /**
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function addType($type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * Indicates the urgency of the encounter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Indicates the urgency of the encounter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * The patient ro group present at the encounter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The patient ro group present at the encounter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Where a specific encounter should be classified as a part of a specific episode(s) of care this field should be used. This association can facilitate grouping of related encounters together for a specific purpose, such as government reporting, issue tracking, association via a common problem.  The association is recorded on the encounter as these are typically created after the episode of care, and grouped on entry rather than editing the episode of care to append another encounter to it (the episode of care could span years).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getEpisodeOfCare()
    {
        return $this->episodeOfCare;
    }

    /**
     * Where a specific encounter should be classified as a part of a specific episode(s) of care this field should be used. This association can facilitate grouping of related encounters together for a specific purpose, such as government reporting, issue tracking, association via a common problem.  The association is recorded on the encounter as these are typically created after the episode of care, and grouped on entry rather than editing the episode of care to append another encounter to it (the episode of care could span years).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $episodeOfCare
     * @return $this
     */
    public function addEpisodeOfCare($episodeOfCare)
    {
        $this->episodeOfCare[] = $episodeOfCare;
        return $this;
    }

    /**
     * The referral request this encounter satisfies (incoming referral).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getIncomingReferral()
    {
        return $this->incomingReferral;
    }

    /**
     * The referral request this encounter satisfies (incoming referral).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $incomingReferral
     * @return $this
     */
    public function addIncomingReferral($incomingReferral)
    {
        $this->incomingReferral[] = $incomingReferral;
        return $this;
    }

    /**
     * The list of people responsible for providing the service.
     * @return \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * The list of people responsible for providing the service.
     * @param \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterParticipant $participant
     * @return $this
     */
    public function addParticipant($participant)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * The appointment that scheduled this encounter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAppointment()
    {
        return $this->appointment;
    }

    /**
     * The appointment that scheduled this encounter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $appointment
     * @return $this
     */
    public function setAppointment($appointment)
    {
        $this->appointment = $appointment;
        return $this;
    }

    /**
     * The start and end time of the encounter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * The start and end time of the encounter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Quantity of time the encounter lasted. This excludes the time during leaves of absence.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Quantity of time the encounter lasted. This excludes the time during leaves of absence.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $length
     * @return $this
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reason
     * @return $this
     */
    public function addReason($reason)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * The list of diagnosis relevant to this encounter.
     * @return \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterDiagnosis[]
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * The list of diagnosis relevant to this encounter.
     * @param \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterDiagnosis $diagnosis
     * @return $this
     */
    public function addDiagnosis($diagnosis)
    {
        $this->diagnosis[] = $diagnosis;
        return $this;
    }

    /**
     * The set of accounts that may be used for billing for this Encounter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * The set of accounts that may be used for billing for this Encounter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $account
     * @return $this
     */
    public function addAccount($account)
    {
        $this->account[] = $account;
        return $this;
    }

    /**
     * Details about the admission to a healthcare service.
     * @return \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterHospitalization
     */
    public function getHospitalization()
    {
        return $this->hospitalization;
    }

    /**
     * Details about the admission to a healthcare service.
     * @param \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterHospitalization $hospitalization
     * @return $this
     */
    public function setHospitalization($hospitalization)
    {
        $this->hospitalization = $hospitalization;
        return $this;
    }

    /**
     * List of locations where  the patient has been during this encounter.
     * @return \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterLocation[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * List of locations where  the patient has been during this encounter.
     * @param \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterLocation $location
     * @return $this
     */
    public function addLocation($location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * An organization that is in charge of maintaining the information of this Encounter (e.g. who maintains the report or the master service catalog item, etc.). This MAY be the same as the organization on the Patient record, however it could be different. This MAY not be not the Service Delivery Location's Organization.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * An organization that is in charge of maintaining the information of this Encounter (e.g. who maintains the report or the master service catalog item, etc.). This MAY be the same as the organization on the Patient record, however it could be different. This MAY not be not the Service Delivery Location's Organization.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $serviceProvider
     * @return $this
     */
    public function setServiceProvider($serviceProvider)
    {
        $this->serviceProvider = $serviceProvider;
        return $this;
    }

    /**
     * Another Encounter of which this encounter is a part of (administratively or in time).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Another Encounter of which this encounter is a part of (administratively or in time).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $partOf
     * @return $this
     */
    public function setPartOf($partOf)
    {
        $this->partOf = $partOf;
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
                $json['identifier'][] = $identifier;
            }
        }
        if (null !== $this->status) $json['status'] = $this->status;
        if (0 < count($this->statusHistory)) {
            $json['statusHistory'] = [];
            foreach($this->statusHistory as $statusHistory) {
                $json['statusHistory'][] = $statusHistory;
            }
        }
        if (null !== $this->class) $json['class'] = $this->class;
        if (0 < count($this->classHistory)) {
            $json['classHistory'] = [];
            foreach($this->classHistory as $classHistory) {
                $json['classHistory'][] = $classHistory;
            }
        }
        if (0 < count($this->type)) {
            $json['type'] = [];
            foreach($this->type as $type) {
                $json['type'][] = $type;
            }
        }
        if (null !== $this->priority) $json['priority'] = $this->priority;
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (0 < count($this->episodeOfCare)) {
            $json['episodeOfCare'] = [];
            foreach($this->episodeOfCare as $episodeOfCare) {
                $json['episodeOfCare'][] = $episodeOfCare;
            }
        }
        if (0 < count($this->incomingReferral)) {
            $json['incomingReferral'] = [];
            foreach($this->incomingReferral as $incomingReferral) {
                $json['incomingReferral'][] = $incomingReferral;
            }
        }
        if (0 < count($this->participant)) {
            $json['participant'] = [];
            foreach($this->participant as $participant) {
                $json['participant'][] = $participant;
            }
        }
        if (null !== $this->appointment) $json['appointment'] = $this->appointment;
        if (null !== $this->period) $json['period'] = $this->period;
        if (null !== $this->length) $json['length'] = $this->length;
        if (0 < count($this->reason)) {
            $json['reason'] = [];
            foreach($this->reason as $reason) {
                $json['reason'][] = $reason;
            }
        }
        if (0 < count($this->diagnosis)) {
            $json['diagnosis'] = [];
            foreach($this->diagnosis as $diagnosis) {
                $json['diagnosis'][] = $diagnosis;
            }
        }
        if (0 < count($this->account)) {
            $json['account'] = [];
            foreach($this->account as $account) {
                $json['account'][] = $account;
            }
        }
        if (null !== $this->hospitalization) $json['hospitalization'] = $this->hospitalization;
        if (0 < count($this->location)) {
            $json['location'] = [];
            foreach($this->location as $location) {
                $json['location'][] = $location;
            }
        }
        if (null !== $this->serviceProvider) $json['serviceProvider'] = $this->serviceProvider;
        if (null !== $this->partOf) $json['partOf'] = $this->partOf;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Encounter xmlns="http://hl7.org/fhir"></Encounter>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (0 < count($this->statusHistory)) {
            foreach($this->statusHistory as $statusHistory) {
                $statusHistory->xmlSerialize(true, $sxe->addChild('statusHistory'));
            }
        }
        if (null !== $this->class) $this->class->xmlSerialize(true, $sxe->addChild('class'));
        if (0 < count($this->classHistory)) {
            foreach($this->classHistory as $classHistory) {
                $classHistory->xmlSerialize(true, $sxe->addChild('classHistory'));
            }
        }
        if (0 < count($this->type)) {
            foreach($this->type as $type) {
                $type->xmlSerialize(true, $sxe->addChild('type'));
            }
        }
        if (null !== $this->priority) $this->priority->xmlSerialize(true, $sxe->addChild('priority'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (0 < count($this->episodeOfCare)) {
            foreach($this->episodeOfCare as $episodeOfCare) {
                $episodeOfCare->xmlSerialize(true, $sxe->addChild('episodeOfCare'));
            }
        }
        if (0 < count($this->incomingReferral)) {
            foreach($this->incomingReferral as $incomingReferral) {
                $incomingReferral->xmlSerialize(true, $sxe->addChild('incomingReferral'));
            }
        }
        if (0 < count($this->participant)) {
            foreach($this->participant as $participant) {
                $participant->xmlSerialize(true, $sxe->addChild('participant'));
            }
        }
        if (null !== $this->appointment) $this->appointment->xmlSerialize(true, $sxe->addChild('appointment'));
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (null !== $this->length) $this->length->xmlSerialize(true, $sxe->addChild('length'));
        if (0 < count($this->reason)) {
            foreach($this->reason as $reason) {
                $reason->xmlSerialize(true, $sxe->addChild('reason'));
            }
        }
        if (0 < count($this->diagnosis)) {
            foreach($this->diagnosis as $diagnosis) {
                $diagnosis->xmlSerialize(true, $sxe->addChild('diagnosis'));
            }
        }
        if (0 < count($this->account)) {
            foreach($this->account as $account) {
                $account->xmlSerialize(true, $sxe->addChild('account'));
            }
        }
        if (null !== $this->hospitalization) $this->hospitalization->xmlSerialize(true, $sxe->addChild('hospitalization'));
        if (0 < count($this->location)) {
            foreach($this->location as $location) {
                $location->xmlSerialize(true, $sxe->addChild('location'));
            }
        }
        if (null !== $this->serviceProvider) $this->serviceProvider->xmlSerialize(true, $sxe->addChild('serviceProvider'));
        if (null !== $this->partOf) $this->partOf->xmlSerialize(true, $sxe->addChild('partOf'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}