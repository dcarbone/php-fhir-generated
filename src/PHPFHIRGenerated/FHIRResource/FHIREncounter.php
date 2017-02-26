<?php namespace PHPFHIRGenerated\FHIRResource;

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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use PHPFHIRGenerated\FHIRResource\FHIRResource;

/**
 * An interaction between a patient and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIREncounter extends FHIRResource implements \JsonSerializable
{
    /**
     * Identifier(s) by which this encounter is known.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * planned | in progress | onleave | finished | cancelled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREncounterState
     */
    public $status = null;

    /**
     * inpatient | outpatient | ambulatory | emergency +.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREncounterClass
     */
    public $class = null;

    /**
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $type = array();

    /**
     * The patient present at the encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $subject = null;

    /**
     * The main practitioner responsible for providing the service.
     * @var \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterParticipant[]
     */
    public $participant = array();

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
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reason = null;

    /**
     * Reason the encounter takes place, as specified using information from another resource. For admissions, this is the admission diagnosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $indication = null;

    /**
     * Indicates the urgency of the encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $priority = null;

    /**
     * Details about an admission to a clinic.
     * @var \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterHospitalization
     */
    public $hospitalization = null;

    /**
     * List of locations at which the patient has been.
     * @var \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterLocation[]
     */
    public $location = array();

    /**
     * Department or team providing care.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $serviceProvider = null;

    /**
     * Another Encounter of which this encounter is a part of (administratively or in time).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
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
     * planned | in progress | onleave | finished | cancelled.
     * @return \PHPFHIRGenerated\FHIRElement\FHIREncounterState
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * planned | in progress | onleave | finished | cancelled.
     * @param \PHPFHIRGenerated\FHIRElement\FHIREncounterState $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * inpatient | outpatient | ambulatory | emergency +.
     * @return \PHPFHIRGenerated\FHIRElement\FHIREncounterClass
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * inpatient | outpatient | ambulatory | emergency +.
     * @param \PHPFHIRGenerated\FHIRElement\FHIREncounterClass $class
     * @return $this
     */
    public function setClass($class)
    {
        $this->class = $class;
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
     * The patient present at the encounter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The patient present at the encounter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The main practitioner responsible for providing the service.
     * @return \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * The main practitioner responsible for providing the service.
     * @param \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterParticipant $participant
     * @return $this
     */
    public function addParticipant($participant)
    {
        $this->participant[] = $participant;
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
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
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
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Reason the encounter takes place, as specified using information from another resource. For admissions, this is the admission diagnosis.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * Reason the encounter takes place, as specified using information from another resource. For admissions, this is the admission diagnosis.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $indication
     * @return $this
     */
    public function setIndication($indication)
    {
        $this->indication = $indication;
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
     * Details about an admission to a clinic.
     * @return \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterHospitalization
     */
    public function getHospitalization()
    {
        return $this->hospitalization;
    }

    /**
     * Details about an admission to a clinic.
     * @param \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterHospitalization $hospitalization
     * @return $this
     */
    public function setHospitalization($hospitalization)
    {
        $this->hospitalization = $hospitalization;
        return $this;
    }

    /**
     * List of locations at which the patient has been.
     * @return \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterLocation[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * List of locations at which the patient has been.
     * @param \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterLocation $location
     * @return $this
     */
    public function addLocation($location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * Department or team providing care.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * Department or team providing care.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $serviceProvider
     * @return $this
     */
    public function setServiceProvider($serviceProvider)
    {
        $this->serviceProvider = $serviceProvider;
        return $this;
    }

    /**
     * Another Encounter of which this encounter is a part of (administratively or in time).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Another Encounter of which this encounter is a part of (administratively or in time).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $partOf
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
                $json['identifier'][] = json_encode($identifier);
            }
        }
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->class) $json['class'] = json_encode($this->class);
        if (0 < count($this->type)) {
            $json['type'] = [];
            foreach($this->type as $type) {
                $json['type'][] = json_encode($type);
            }
        }
        if (null !== $this->subject) $json['subject'] = json_encode($this->subject);
        if (0 < count($this->participant)) {
            $json['participant'] = [];
            foreach($this->participant as $participant) {
                $json['participant'][] = json_encode($participant);
            }
        }
        if (null !== $this->period) $json['period'] = json_encode($this->period);
        if (null !== $this->length) $json['length'] = json_encode($this->length);
        if (null !== $this->reason) $json['reason'] = json_encode($this->reason);
        if (null !== $this->indication) $json['indication'] = json_encode($this->indication);
        if (null !== $this->priority) $json['priority'] = json_encode($this->priority);
        if (null !== $this->hospitalization) $json['hospitalization'] = json_encode($this->hospitalization);
        if (0 < count($this->location)) {
            $json['location'] = [];
            foreach($this->location as $location) {
                $json['location'][] = json_encode($location);
            }
        }
        if (null !== $this->serviceProvider) $json['serviceProvider'] = json_encode($this->serviceProvider);
        if (null !== $this->partOf) $json['partOf'] = json_encode($this->partOf);
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
        if (null !== $this->class) $this->class->xmlSerialize(true, $sxe->addChild('class'));
        if (0 < count($this->type)) {
            foreach($this->type as $type) {
                $type->xmlSerialize(true, $sxe->addChild('type'));
            }
        }
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (0 < count($this->participant)) {
            foreach($this->participant as $participant) {
                $participant->xmlSerialize(true, $sxe->addChild('participant'));
            }
        }
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (null !== $this->length) $this->length->xmlSerialize(true, $sxe->addChild('length'));
        if (null !== $this->reason) $this->reason->xmlSerialize(true, $sxe->addChild('reason'));
        if (null !== $this->indication) $this->indication->xmlSerialize(true, $sxe->addChild('indication'));
        if (null !== $this->priority) $this->priority->xmlSerialize(true, $sxe->addChild('priority'));
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