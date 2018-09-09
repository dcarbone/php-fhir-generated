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

use PHPFHIRGenerated\FHIRElement\FHIRAppointmentStatus;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A booking of a healthcare event among patient(s), practitioner(s), related person(s) and/or device(s) for a specific date/time. This may result in one or more Encounter(s).
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRAppointment
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRAppointment extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Appointment';

    /**
     * The style of appointment or patient that has been booked in the slot (not service type).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $appointmentType = null;

    /**
     * The service request this appointment is allocated to assess (e.g. incoming referral or procedure request).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $basedOn = null;

    /**
     * Additional comments about the appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * The date that this appointment was initially created. This could be different to the meta.lastModified value on the initial entry, as this could have been before the resource was created on the FHIR server, and should remain unchanged over the lifespan of the appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * The brief description of the appointment as would be shown on a subject line in a meeting request, or appointment list. Detailed or expanded information should be put in the comment field.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Date/Time that the appointment is to conclude.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $end = null;

    /**
     * This records identifiers associated with this appointment concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Reason the appointment has been scheduled to take place, as specified using information from another resource. When the patient arrives and the encounter begins it may be used as the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $indication = null;

    /**
     * Number of minutes that the appointment is to take. This can be less than the duration between the start and end times.  For example, where the actual time of appointment is only an estimate or if a 30 minute appointment is being requested, but any time would work.  Also, if there is, for example, a planned 15 minute break in the middle of a long appointment, the duration may be 15 minutes less than the difference between the start and end.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $minutesDuration = null;

    /**
     * List of participants involved in the appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant
     */
    public $participant = null;

    /**
     * While Appointment.comment contains information for internal use, Appointment.patientInstructions is used to capture patient facing information about the Appointment (e.g. please bring your referral or fast from 8pm night before).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $patientInstruction = null;

    /**
     * The priority of the appointment. Can be used to make informed decisions if needing to re-prioritize appointments. (The iCal Standard specifies 0 as undefined, 1 as highest, 9 as lowest priority).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $priority = null;

    /**
     * The reason that this appointment is being scheduled. This is more clinical than administrative.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reason = null;

    /**
     * A set of date ranges (potentially including times) that the appointment is preferred to be scheduled within. When using these values, the duration (usually in minutes) should be provided to indicate the length of the appointment to fill and populate the start/end times for the actual allocated time.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $requestedPeriod = null;

    /**
     * A broad categorization of the service that is to be performed during this appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $serviceCategory = null;

    /**
     * The specific service that is to be performed during this appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $serviceType = null;

    /**
     * The slots from the participants' schedules that will be filled by the appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $slot = null;

    /**
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $specialty = null;

    /**
     * Date/Time that the appointment is to take place.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $start = null;

    /**
     * The overall status of the Appointment. Each of the participants has their own participation status which indicates their involvement in the process, however this status indicates the shared status.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAppointmentStatus
     */
    public $status = null;

    /**
     * Additional information to support the appointment provided when making the appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $supportingInformation = null;

    /**
     * FHIRAppointment Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['appointmentType'])) {
                $this->setAppointmentType($data['appointmentType']);
            }
            if (isset($data['basedOn'])) {
                $this->setBasedOn($data['basedOn']);
            }
            if (isset($data['comment'])) {
                $this->setComment($data['comment']);
            }
            if (isset($data['created'])) {
                $this->setCreated($data['created']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['end'])) {
                $this->setEnd($data['end']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['indication'])) {
                $this->setIndication($data['indication']);
            }
            if (isset($data['minutesDuration'])) {
                $this->setMinutesDuration($data['minutesDuration']);
            }
            if (isset($data['participant'])) {
                $this->setParticipant($data['participant']);
            }
            if (isset($data['patientInstruction'])) {
                $this->setPatientInstruction($data['patientInstruction']);
            }
            if (isset($data['priority'])) {
                $this->setPriority($data['priority']);
            }
            if (isset($data['reason'])) {
                $this->setReason($data['reason']);
            }
            if (isset($data['requestedPeriod'])) {
                $this->setRequestedPeriod($data['requestedPeriod']);
            }
            if (isset($data['serviceCategory'])) {
                $this->setServiceCategory($data['serviceCategory']);
            }
            if (isset($data['serviceType'])) {
                $this->setServiceType($data['serviceType']);
            }
            if (isset($data['slot'])) {
                $this->setSlot($data['slot']);
            }
            if (isset($data['specialty'])) {
                $this->setSpecialty($data['specialty']);
            }
            if (isset($data['start'])) {
                $this->setStart($data['start']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['supportingInformation'])) {
                $this->setSupportingInformation($data['supportingInformation']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAppointment::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The style of appointment or patient that has been booked in the slot (not service type).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setAppointmentType(FHIRCodeableConcept $appointmentType = null)
    {
        if (null === $appointmentType) {
            return $this; 
        }
        $this->appointmentType = $appointmentType;
        return $this;
    }

    /**
     * The style of appointment or patient that has been booked in the slot (not service type).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAppointmentType()
    {
        return $this->appointmentType;
    }


    /**
     * The service request this appointment is allocated to assess (e.g. incoming referral or procedure request).
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
     * The service request this appointment is allocated to assess (e.g. incoming referral or procedure request).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getBasedOn()
    {
        return $this->basedOn;
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
                'FHIRAppointment::setComment - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
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
     * The date that this appointment was initially created. This could be different to the meta.lastModified value on the initial entry, as this could have been before the resource was created on the FHIR server, and should remain unchanged over the lifespan of the appointment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setCreated($created)
    {
        if (null === $created) {
            return $this; 
        }
        if (is_scalar($created)) {
            $created = new FHIRDateTime($created);
        }
        if (!($created instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAppointment::setCreated - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($created)
            ));
        }
        $this->created = $created;
        return $this;
    }

    /**
     * The date that this appointment was initially created. This could be different to the meta.lastModified value on the initial entry, as this could have been before the resource was created on the FHIR server, and should remain unchanged over the lifespan of the appointment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }


    /**
     * The brief description of the appointment as would be shown on a subject line in a meeting request, or appointment list. Detailed or expanded information should be put in the comment field.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRString($description);
        }
        if (!($description instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAppointment::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * The brief description of the appointment as would be shown on a subject line in a meeting request, or appointment list. Detailed or expanded information should be put in the comment field.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Date/Time that the appointment is to conclude.
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
                'FHIRAppointment::setEnd - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($end)
            ));
        }
        $this->end = $end;
        return $this;
    }

    /**
     * Date/Time that the appointment is to conclude.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getEnd()
    {
        return $this->end;
    }


    /**
     * This records identifiers associated with this appointment concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
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
     * This records identifiers associated with this appointment concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Reason the appointment has been scheduled to take place, as specified using information from another resource. When the patient arrives and the encounter begins it may be used as the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setIndication(FHIRReference $indication = null)
    {
        if (null === $indication) {
            return $this; 
        }
        $this->indication = $indication;
        return $this;
    }

    /**
     * Reason the appointment has been scheduled to take place, as specified using information from another resource. When the patient arrives and the encounter begins it may be used as the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getIndication()
    {
        return $this->indication;
    }


    /**
     * Number of minutes that the appointment is to take. This can be less than the duration between the start and end times.  For example, where the actual time of appointment is only an estimate or if a 30 minute appointment is being requested, but any time would work.  Also, if there is, for example, a planned 15 minute break in the middle of a long appointment, the duration may be 15 minutes less than the difference between the start and end.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setMinutesDuration($minutesDuration)
    {
        if (null === $minutesDuration) {
            return $this; 
        }
        if (is_scalar($minutesDuration)) {
            $minutesDuration = new FHIRPositiveInt($minutesDuration);
        }
        if (!($minutesDuration instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAppointment::setMinutesDuration - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($minutesDuration)
            ));
        }
        $this->minutesDuration = $minutesDuration;
        return $this;
    }

    /**
     * Number of minutes that the appointment is to take. This can be less than the duration between the start and end times.  For example, where the actual time of appointment is only an estimate or if a 30 minute appointment is being requested, but any time would work.  Also, if there is, for example, a planned 15 minute break in the middle of a long appointment, the duration may be 15 minutes less than the difference between the start and end.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getMinutesDuration()
    {
        return $this->minutesDuration;
    }


    /**
     * List of participants involved in the appointment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant
     * @return $this
     */
    public function setParticipant(FHIRAppointmentParticipant $participant = null)
    {
        if (null === $participant) {
            return $this; 
        }
        $this->participant = $participant;
        return $this;
    }

    /**
     * List of participants involved in the appointment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant
     */
    public function getParticipant()
    {
        return $this->participant;
    }


    /**
     * While Appointment.comment contains information for internal use, Appointment.patientInstructions is used to capture patient facing information about the Appointment (e.g. please bring your referral or fast from 8pm night before).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPatientInstruction($patientInstruction)
    {
        if (null === $patientInstruction) {
            return $this; 
        }
        if (is_scalar($patientInstruction)) {
            $patientInstruction = new FHIRString($patientInstruction);
        }
        if (!($patientInstruction instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAppointment::setPatientInstruction - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($patientInstruction)
            ));
        }
        $this->patientInstruction = $patientInstruction;
        return $this;
    }

    /**
     * While Appointment.comment contains information for internal use, Appointment.patientInstructions is used to capture patient facing information about the Appointment (e.g. please bring your referral or fast from 8pm night before).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPatientInstruction()
    {
        return $this->patientInstruction;
    }


    /**
     * The priority of the appointment. Can be used to make informed decisions if needing to re-prioritize appointments. (The iCal Standard specifies 0 as undefined, 1 as highest, 9 as lowest priority).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setPriority($priority)
    {
        if (null === $priority) {
            return $this; 
        }
        if (is_scalar($priority)) {
            $priority = new FHIRUnsignedInt($priority);
        }
        if (!($priority instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAppointment::setPriority - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($priority)
            ));
        }
        $this->priority = $priority;
        return $this;
    }

    /**
     * The priority of the appointment. Can be used to make informed decisions if needing to re-prioritize appointments. (The iCal Standard specifies 0 as undefined, 1 as highest, 9 as lowest priority).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getPriority()
    {
        return $this->priority;
    }


    /**
     * The reason that this appointment is being scheduled. This is more clinical than administrative.
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
     * The reason that this appointment is being scheduled. This is more clinical than administrative.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReason()
    {
        return $this->reason;
    }


    /**
     * A set of date ranges (potentially including times) that the appointment is preferred to be scheduled within. When using these values, the duration (usually in minutes) should be provided to indicate the length of the appointment to fill and populate the start/end times for the actual allocated time.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setRequestedPeriod(FHIRPeriod $requestedPeriod = null)
    {
        if (null === $requestedPeriod) {
            return $this; 
        }
        $this->requestedPeriod = $requestedPeriod;
        return $this;
    }

    /**
     * A set of date ranges (potentially including times) that the appointment is preferred to be scheduled within. When using these values, the duration (usually in minutes) should be provided to indicate the length of the appointment to fill and populate the start/end times for the actual allocated time.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getRequestedPeriod()
    {
        return $this->requestedPeriod;
    }


    /**
     * A broad categorization of the service that is to be performed during this appointment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setServiceCategory(FHIRCodeableConcept $serviceCategory = null)
    {
        if (null === $serviceCategory) {
            return $this; 
        }
        $this->serviceCategory = $serviceCategory;
        return $this;
    }

    /**
     * A broad categorization of the service that is to be performed during this appointment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getServiceCategory()
    {
        return $this->serviceCategory;
    }


    /**
     * The specific service that is to be performed during this appointment.
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
     * The specific service that is to be performed during this appointment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }


    /**
     * The slots from the participants' schedules that will be filled by the appointment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSlot(FHIRReference $slot = null)
    {
        if (null === $slot) {
            return $this; 
        }
        $this->slot = $slot;
        return $this;
    }

    /**
     * The slots from the participants' schedules that will be filled by the appointment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSlot()
    {
        return $this->slot;
    }


    /**
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSpecialty(FHIRCodeableConcept $specialty = null)
    {
        if (null === $specialty) {
            return $this; 
        }
        $this->specialty = $specialty;
        return $this;
    }

    /**
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }


    /**
     * Date/Time that the appointment is to take place.
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
                'FHIRAppointment::setStart - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($start)
            ));
        }
        $this->start = $start;
        return $this;
    }

    /**
     * Date/Time that the appointment is to take place.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getStart()
    {
        return $this->start;
    }


    /**
     * The overall status of the Appointment. Each of the participants has their own participation status which indicates their involvement in the process, however this status indicates the shared status.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAppointmentStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRAppointmentStatus($status);
        }
        if (!($status instanceof FHIRAppointmentStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAppointment::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAppointmentStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The overall status of the Appointment. Each of the participants has their own participation status which indicates their involvement in the process, however this status indicates the shared status.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAppointmentStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Additional information to support the appointment provided when making the appointment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSupportingInformation(FHIRReference $supportingInformation = null)
    {
        if (null === $supportingInformation) {
            return $this; 
        }
        $this->supportingInformation = $supportingInformation;
        return $this;
    }

    /**
     * Additional information to support the appointment provided when making the appointment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
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
        if (null !== ($v = $this->getAppointmentType())) {
            $a['appointmentType'] = $v;
        }
        if (null !== ($v = $this->getBasedOn())) {
            $a['basedOn'] = $v;
        }
        if (null !== ($v = $this->getComment())) {
            $a['comment'] = $v;
        }
        if (null !== ($v = $this->getCreated())) {
            $a['created'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getEnd())) {
            $a['end'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getIndication())) {
            $a['indication'] = $v;
        }
        if (null !== ($v = $this->getMinutesDuration())) {
            $a['minutesDuration'] = $v;
        }
        if (null !== ($v = $this->getParticipant())) {
            $a['participant'] = $v;
        }
        if (null !== ($v = $this->getPatientInstruction())) {
            $a['patientInstruction'] = $v;
        }
        if (null !== ($v = $this->getPriority())) {
            $a['priority'] = $v;
        }
        if (null !== ($v = $this->getReason())) {
            $a['reason'] = $v;
        }
        if (null !== ($v = $this->getRequestedPeriod())) {
            $a['requestedPeriod'] = $v;
        }
        if (null !== ($v = $this->getServiceCategory())) {
            $a['serviceCategory'] = $v;
        }
        if (null !== ($v = $this->getServiceType())) {
            $a['serviceType'] = $v;
        }
        if (null !== ($v = $this->getSlot())) {
            $a['slot'] = $v;
        }
        if (null !== ($v = $this->getSpecialty())) {
            $a['specialty'] = $v;
        }
        if (null !== ($v = $this->getStart())) {
            $a['start'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSupportingInformation())) {
            $a['supportingInformation'] = $v;
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
            $sxe = new \SimpleXMLElement('<Appointment xmlns="http://hl7.org/fhir"></Appointment>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}