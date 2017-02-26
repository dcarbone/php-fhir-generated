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
 * A reply to an appointment request for a patient and/or practitioner(s), such as a confirmation or rejection.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRAppointmentResponse extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * This records identifiers associated with this appointment response concern that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Appointment that this response is replying to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $appointment = null;

    /**
     * Date/Time that the appointment is to take place, or requested new start time.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $start = null;

    /**
     * This may be either the same as the appointment request to confirm the details of the appointment, or alternately a new time to request a re-negotiation of the end time.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $end = null;

    /**
     * Role of participant in the appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $participantType = array();

    /**
     * A Person, Location/HealthcareService or Device that is participating in the appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $actor = null;

    /**
     * Participation status of the participant. When the status is declined or tentative if the start/end times are different to the appointment, then these times should be interpreted as a requested time change. When the status is accepted, the times can either be the time of the appointment (as a confirmation of the time) or can be empty.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRParticipantStatus
     */
    public $participantStatus = null;

    /**
     * Additional comments about the appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'AppointmentResponse';

    /**
     * This records identifiers associated with this appointment response concern that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this appointment response concern that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Appointment that this response is replying to.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAppointment()
    {
        return $this->appointment;
    }

    /**
     * Appointment that this response is replying to.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $appointment
     * @return $this
     */
    public function setAppointment($appointment)
    {
        $this->appointment = $appointment;
        return $this;
    }

    /**
     * Date/Time that the appointment is to take place, or requested new start time.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Date/Time that the appointment is to take place, or requested new start time.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $start
     * @return $this
     */
    public function setStart($start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * This may be either the same as the appointment request to confirm the details of the appointment, or alternately a new time to request a re-negotiation of the end time.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * This may be either the same as the appointment request to confirm the details of the appointment, or alternately a new time to request a re-negotiation of the end time.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $end
     * @return $this
     */
    public function setEnd($end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Role of participant in the appointment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getParticipantType()
    {
        return $this->participantType;
    }

    /**
     * Role of participant in the appointment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $participantType
     * @return $this
     */
    public function addParticipantType($participantType)
    {
        $this->participantType[] = $participantType;
        return $this;
    }

    /**
     * A Person, Location/HealthcareService or Device that is participating in the appointment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * A Person, Location/HealthcareService or Device that is participating in the appointment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $actor
     * @return $this
     */
    public function setActor($actor)
    {
        $this->actor = $actor;
        return $this;
    }

    /**
     * Participation status of the participant. When the status is declined or tentative if the start/end times are different to the appointment, then these times should be interpreted as a requested time change. When the status is accepted, the times can either be the time of the appointment (as a confirmation of the time) or can be empty.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRParticipantStatus
     */
    public function getParticipantStatus()
    {
        return $this->participantStatus;
    }

    /**
     * Participation status of the participant. When the status is declined or tentative if the start/end times are different to the appointment, then these times should be interpreted as a requested time change. When the status is accepted, the times can either be the time of the appointment (as a confirmation of the time) or can be empty.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRParticipantStatus $participantStatus
     * @return $this
     */
    public function setParticipantStatus($participantStatus)
    {
        $this->participantStatus = $participantStatus;
        return $this;
    }

    /**
     * Additional comments about the appointment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Additional comments about the appointment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
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
        if (null !== $this->appointment) $json['appointment'] = json_encode($this->appointment);
        if (null !== $this->start) $json['start'] = json_encode($this->start);
        if (null !== $this->end) $json['end'] = json_encode($this->end);
        if (0 < count($this->participantType)) {
            $json['participantType'] = [];
            foreach($this->participantType as $participantType) {
                $json['participantType'][] = json_encode($participantType);
            }
        }
        if (null !== $this->actor) $json['actor'] = json_encode($this->actor);
        if (null !== $this->participantStatus) $json['participantStatus'] = json_encode($this->participantStatus);
        if (null !== $this->comment) $json['comment'] = json_encode($this->comment);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<AppointmentResponse xmlns="http://hl7.org/fhir"></AppointmentResponse>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->appointment) $this->appointment->xmlSerialize(true, $sxe->addChild('appointment'));
        if (null !== $this->start) $this->start->xmlSerialize(true, $sxe->addChild('start'));
        if (null !== $this->end) $this->end->xmlSerialize(true, $sxe->addChild('end'));
        if (0 < count($this->participantType)) {
            foreach($this->participantType as $participantType) {
                $participantType->xmlSerialize(true, $sxe->addChild('participantType'));
            }
        }
        if (null !== $this->actor) $this->actor->xmlSerialize(true, $sxe->addChild('actor'));
        if (null !== $this->participantStatus) $this->participantStatus->xmlSerialize(true, $sxe->addChild('participantStatus'));
        if (null !== $this->comment) $this->comment->xmlSerialize(true, $sxe->addChild('comment'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}