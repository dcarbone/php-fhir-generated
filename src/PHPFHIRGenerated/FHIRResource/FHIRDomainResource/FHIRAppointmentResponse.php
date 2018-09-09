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

use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRParticipationStatus;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A reply to an appointment request for a patient and/or practitioner(s), such as a confirmation or rejection.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRAppointmentResponse
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRAppointmentResponse extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'AppointmentResponse';

    /**
     * A Person, Location, HealthcareService, or Device that is participating in the appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $actor = null;

    /**
     * Appointment that this response is replying to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $appointment = null;

    /**
     * Additional comments about the appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * This may be either the same as the appointment request to confirm the details of the appointment, or alternately a new time to request a re-negotiation of the end time.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $end = null;

    /**
     * This records identifiers associated with this appointment response concern that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Participation status of the participant. When the status is declined or tentative if the start/end times are different to the appointment, then these times should be interpreted as a requested time change. When the status is accepted, the times can either be the time of the appointment (as a confirmation of the time) or can be empty.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRParticipationStatus
     */
    public $participantStatus = null;

    /**
     * Role of participant in the appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $participantType = null;

    /**
     * Date/Time that the appointment is to take place, or requested new start time.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $start = null;

    /**
     * FHIRAppointmentResponse Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['actor'])) {
                $this->setActor($data['actor']);
            }
            if (isset($data['appointment'])) {
                $this->setAppointment($data['appointment']);
            }
            if (isset($data['comment'])) {
                $this->setComment($data['comment']);
            }
            if (isset($data['end'])) {
                $this->setEnd($data['end']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['participantStatus'])) {
                $this->setParticipantStatus($data['participantStatus']);
            }
            if (isset($data['participantType'])) {
                $this->setParticipantType($data['participantType']);
            }
            if (isset($data['start'])) {
                $this->setStart($data['start']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A Person, Location, HealthcareService, or Device that is participating in the appointment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setActor(FHIRReference $actor = null)
    {
        if (null === $actor) {
            return $this; 
        }
        $this->actor = $actor;
        return $this;
    }

    /**
     * A Person, Location, HealthcareService, or Device that is participating in the appointment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getActor()
    {
        return $this->actor;
    }


    /**
     * Appointment that this response is replying to.
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
     * Appointment that this response is replying to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAppointment()
    {
        return $this->appointment;
    }


    /**
     * Additional comments about the appointment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setComment($comment)
    {
        if (null === $comment) {
            return $this; 
        }
        if (is_scalar($comment)) {
            $comment = new FHIRString($comment);
        }
        if (!($comment instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAppointmentResponse::setComment - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($comment)
            ));
        }
        $this->comment = $comment;
        return $this;
    }

    /**
     * Additional comments about the appointment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }


    /**
     * This may be either the same as the appointment request to confirm the details of the appointment, or alternately a new time to request a re-negotiation of the end time.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setEnd($end)
    {
        if (null === $end) {
            return $this; 
        }
        if (is_scalar($end)) {
            $end = new FHIRInstant($end);
        }
        if (!($end instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAppointmentResponse::setEnd - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($end)
            ));
        }
        $this->end = $end;
        return $this;
    }

    /**
     * This may be either the same as the appointment request to confirm the details of the appointment, or alternately a new time to request a re-negotiation of the end time.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getEnd()
    {
        return $this->end;
    }


    /**
     * This records identifiers associated with this appointment response concern that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate.
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
     * This records identifiers associated with this appointment response concern that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Participation status of the participant. When the status is declined or tentative if the start/end times are different to the appointment, then these times should be interpreted as a requested time change. When the status is accepted, the times can either be the time of the appointment (as a confirmation of the time) or can be empty.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRParticipationStatus
     * @return $this
     */
    public function setParticipantStatus($participantStatus)
    {
        if (null === $participantStatus) {
            return $this; 
        }
        if (is_scalar($participantStatus)) {
            $participantStatus = new FHIRParticipationStatus($participantStatus);
        }
        if (!($participantStatus instanceof FHIRParticipationStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAppointmentResponse::setParticipantStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRParticipationStatus or appropriate scalar value, %s seen.',
                gettype($participantStatus)
            ));
        }
        $this->participantStatus = $participantStatus;
        return $this;
    }

    /**
     * Participation status of the participant. When the status is declined or tentative if the start/end times are different to the appointment, then these times should be interpreted as a requested time change. When the status is accepted, the times can either be the time of the appointment (as a confirmation of the time) or can be empty.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRParticipationStatus
     */
    public function getParticipantStatus()
    {
        return $this->participantStatus;
    }


    /**
     * Role of participant in the appointment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setParticipantType(FHIRCodeableConcept $participantType = null)
    {
        if (null === $participantType) {
            return $this; 
        }
        $this->participantType = $participantType;
        return $this;
    }

    /**
     * Role of participant in the appointment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getParticipantType()
    {
        return $this->participantType;
    }


    /**
     * Date/Time that the appointment is to take place, or requested new start time.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setStart($start)
    {
        if (null === $start) {
            return $this; 
        }
        if (is_scalar($start)) {
            $start = new FHIRInstant($start);
        }
        if (!($start instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAppointmentResponse::setStart - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($start)
            ));
        }
        $this->start = $start;
        return $this;
    }

    /**
     * Date/Time that the appointment is to take place, or requested new start time.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getStart()
    {
        return $this->start;
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
        if (null !== ($v = $this->getActor())) {
            $a['actor'] = $v;
        }
        if (null !== ($v = $this->getAppointment())) {
            $a['appointment'] = $v;
        }
        if (null !== ($v = $this->getComment())) {
            $a['comment'] = $v;
        }
        if (null !== ($v = $this->getEnd())) {
            $a['end'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getParticipantStatus())) {
            $a['participantStatus'] = $v;
        }
        if (null !== ($v = $this->getParticipantType())) {
            $a['participantType'] = $v;
        }
        if (null !== ($v = $this->getStart())) {
            $a['start'] = $v;
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
            $sxe = new \SimpleXMLElement('<AppointmentResponse xmlns="http://hl7.org/fhir"></AppointmentResponse>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}