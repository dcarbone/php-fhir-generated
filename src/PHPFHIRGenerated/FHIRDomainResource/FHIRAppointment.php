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
 * A booking of a healthcare event among patient(s), practitioner(s), related person(s) and/or device(s) for a specific date/time. This may result in one or more Encounter(s).
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRAppointment extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * This records identifiers associated with this appointment concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * The overall status of the Appointment. Each of the participants has their own participation status which indicates their involvement in the process, however this status indicates the shared status.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAppointmentStatus
     */
    public $status = null;

    /**
     * A broad categorisation of the service that is to be performed during this appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $serviceCategory = null;

    /**
     * The specific service that is to be performed during this appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $serviceType = [];

    /**
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $specialty = [];

    /**
     * The style of appointment or patient that has been booked in the slot (not service type).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $appointmentType = null;

    /**
     * The reason that this appointment is being scheduled. This is more clinical than administrative.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $reason = [];

    /**
     * Reason the appointment has been scheduled to take place, as specified using information from another resource. When the patient arrives and the encounter begins it may be used as the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $indication = [];

    /**
     * The priority of the appointment. Can be used to make informed decisions if needing to re-prioritize appointments. (The iCal Standard specifies 0 as undefined, 1 as highest, 9 as lowest priority).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $priority = null;

    /**
     * The brief description of the appointment as would be shown on a subject line in a meeting request, or appointment list. Detailed or expanded information should be put in the comment field.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Additional information to support the appointment provided when making the appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $supportingInformation = [];

    /**
     * Date/Time that the appointment is to take place.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $start = null;

    /**
     * Date/Time that the appointment is to conclude.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $end = null;

    /**
     * Number of minutes that the appointment is to take. This can be less than the duration between the start and end times (where actual time of appointment is only an estimate or is a planned appointment request).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $minutesDuration = null;

    /**
     * The slots from the participants' schedules that will be filled by the appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $slot = [];

    /**
     * The date that this appointment was initially created. This could be different to the meta.lastModified value on the initial entry, as this could have been before the resource was created on the FHIR server, and should remain unchanged over the lifespan of the appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * Additional comments about the appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * While Appointment.comment contains information for internal use, Appointment.patientInstructions is used to capture patient facing information about the Appointment (e.g. please bring your referral or fast from 8pm night before).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $patientInstruction = null;

    /**
     * The referral request this appointment is allocated to assess (incoming referral).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $incomingReferral = [];

    /**
     * List of participants involved in the appointment.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRAppointment\FHIRAppointmentParticipant[]
     */
    public $participant = [];

    /**
     * A set of date ranges (potentially including times) that the appointment is preferred to be scheduled within. When using these values, the minutes duration should be provided to indicate the length of the appointment to fill and populate the start/end times for the actual allocated time.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod[]
     */
    public $requestedPeriod = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Appointment';

    /**
     * This records identifiers associated with this appointment concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this appointment concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The overall status of the Appointment. Each of the participants has their own participation status which indicates their involvement in the process, however this status indicates the shared status.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAppointmentStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The overall status of the Appointment. Each of the participants has their own participation status which indicates their involvement in the process, however this status indicates the shared status.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAppointmentStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * A broad categorisation of the service that is to be performed during this appointment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getServiceCategory() {
        return $this->serviceCategory;
    }

    /**
     * A broad categorisation of the service that is to be performed during this appointment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $serviceCategory
     * @return $this
     */
    public function setServiceCategory($serviceCategory) {
        $this->serviceCategory = $serviceCategory;
        return $this;
    }

    /**
     * The specific service that is to be performed during this appointment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getServiceType() {
        return $this->serviceType;
    }

    /**
     * The specific service that is to be performed during this appointment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $serviceType
     * @return $this
     */
    public function addServiceType($serviceType) {
        $this->serviceType[] = $serviceType;
        return $this;
    }

    /**
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialty() {
        return $this->specialty;
    }

    /**
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $specialty
     * @return $this
     */
    public function addSpecialty($specialty) {
        $this->specialty[] = $specialty;
        return $this;
    }

    /**
     * The style of appointment or patient that has been booked in the slot (not service type).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAppointmentType() {
        return $this->appointmentType;
    }

    /**
     * The style of appointment or patient that has been booked in the slot (not service type).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $appointmentType
     * @return $this
     */
    public function setAppointmentType($appointmentType) {
        $this->appointmentType = $appointmentType;
        return $this;
    }

    /**
     * The reason that this appointment is being scheduled. This is more clinical than administrative.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason() {
        return $this->reason;
    }

    /**
     * The reason that this appointment is being scheduled. This is more clinical than administrative.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reason
     * @return $this
     */
    public function addReason($reason) {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * Reason the appointment has been scheduled to take place, as specified using information from another resource. When the patient arrives and the encounter begins it may be used as the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getIndication() {
        return $this->indication;
    }

    /**
     * Reason the appointment has been scheduled to take place, as specified using information from another resource. When the patient arrives and the encounter begins it may be used as the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $indication
     * @return $this
     */
    public function addIndication($indication) {
        $this->indication[] = $indication;
        return $this;
    }

    /**
     * The priority of the appointment. Can be used to make informed decisions if needing to re-prioritize appointments. (The iCal Standard specifies 0 as undefined, 1 as highest, 9 as lowest priority).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getPriority() {
        return $this->priority;
    }

    /**
     * The priority of the appointment. Can be used to make informed decisions if needing to re-prioritize appointments. (The iCal Standard specifies 0 as undefined, 1 as highest, 9 as lowest priority).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $priority
     * @return $this
     */
    public function setPriority($priority) {
        $this->priority = $priority;
        return $this;
    }

    /**
     * The brief description of the appointment as would be shown on a subject line in a meeting request, or appointment list. Detailed or expanded information should be put in the comment field.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * The brief description of the appointment as would be shown on a subject line in a meeting request, or appointment list. Detailed or expanded information should be put in the comment field.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Additional information to support the appointment provided when making the appointment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSupportingInformation() {
        return $this->supportingInformation;
    }

    /**
     * Additional information to support the appointment provided when making the appointment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $supportingInformation
     * @return $this
     */
    public function addSupportingInformation($supportingInformation) {
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * Date/Time that the appointment is to take place.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getStart() {
        return $this->start;
    }

    /**
     * Date/Time that the appointment is to take place.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $start
     * @return $this
     */
    public function setStart($start) {
        $this->start = $start;
        return $this;
    }

    /**
     * Date/Time that the appointment is to conclude.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getEnd() {
        return $this->end;
    }

    /**
     * Date/Time that the appointment is to conclude.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $end
     * @return $this
     */
    public function setEnd($end) {
        $this->end = $end;
        return $this;
    }

    /**
     * Number of minutes that the appointment is to take. This can be less than the duration between the start and end times (where actual time of appointment is only an estimate or is a planned appointment request).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getMinutesDuration() {
        return $this->minutesDuration;
    }

    /**
     * Number of minutes that the appointment is to take. This can be less than the duration between the start and end times (where actual time of appointment is only an estimate or is a planned appointment request).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $minutesDuration
     * @return $this
     */
    public function setMinutesDuration($minutesDuration) {
        $this->minutesDuration = $minutesDuration;
        return $this;
    }

    /**
     * The slots from the participants' schedules that will be filled by the appointment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSlot() {
        return $this->slot;
    }

    /**
     * The slots from the participants' schedules that will be filled by the appointment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $slot
     * @return $this
     */
    public function addSlot($slot) {
        $this->slot[] = $slot;
        return $this;
    }

    /**
     * The date that this appointment was initially created. This could be different to the meta.lastModified value on the initial entry, as this could have been before the resource was created on the FHIR server, and should remain unchanged over the lifespan of the appointment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * The date that this appointment was initially created. This could be different to the meta.lastModified value on the initial entry, as this could have been before the resource was created on the FHIR server, and should remain unchanged over the lifespan of the appointment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $created
     * @return $this
     */
    public function setCreated($created) {
        $this->created = $created;
        return $this;
    }

    /**
     * Additional comments about the appointment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComment() {
        return $this->comment;
    }

    /**
     * Additional comments about the appointment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $comment
     * @return $this
     */
    public function setComment($comment) {
        $this->comment = $comment;
        return $this;
    }

    /**
     * While Appointment.comment contains information for internal use, Appointment.patientInstructions is used to capture patient facing information about the Appointment (e.g. please bring your referral or fast from 8pm night before).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPatientInstruction() {
        return $this->patientInstruction;
    }

    /**
     * While Appointment.comment contains information for internal use, Appointment.patientInstructions is used to capture patient facing information about the Appointment (e.g. please bring your referral or fast from 8pm night before).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $patientInstruction
     * @return $this
     */
    public function setPatientInstruction($patientInstruction) {
        $this->patientInstruction = $patientInstruction;
        return $this;
    }

    /**
     * The referral request this appointment is allocated to assess (incoming referral).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getIncomingReferral() {
        return $this->incomingReferral;
    }

    /**
     * The referral request this appointment is allocated to assess (incoming referral).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $incomingReferral
     * @return $this
     */
    public function addIncomingReferral($incomingReferral) {
        $this->incomingReferral[] = $incomingReferral;
        return $this;
    }

    /**
     * List of participants involved in the appointment.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRAppointment\FHIRAppointmentParticipant[]
     */
    public function getParticipant() {
        return $this->participant;
    }

    /**
     * List of participants involved in the appointment.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRAppointment\FHIRAppointmentParticipant $participant
     * @return $this
     */
    public function addParticipant($participant) {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * A set of date ranges (potentially including times) that the appointment is preferred to be scheduled within. When using these values, the minutes duration should be provided to indicate the length of the appointment to fill and populate the start/end times for the actual allocated time.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod[]
     */
    public function getRequestedPeriod() {
        return $this->requestedPeriod;
    }

    /**
     * A set of date ranges (potentially including times) that the appointment is preferred to be scheduled within. When using these values, the minutes duration should be provided to indicate the length of the appointment to fill and populate the start/end times for the actual allocated time.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $requestedPeriod
     * @return $this
     */
    public function addRequestedPeriod($requestedPeriod) {
        $this->requestedPeriod[] = $requestedPeriod;
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
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['serviceCategory'])) {
                $this->setServiceCategory($data['serviceCategory']);
            }
            if (isset($data['serviceType'])) {
                if (is_array($data['serviceType'])) {
                    foreach($data['serviceType'] as $d) {
                        $this->addServiceType($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"serviceType" must be array of objects or null, '.gettype($data['serviceType']).' seen.');
                }
            }
            if (isset($data['specialty'])) {
                if (is_array($data['specialty'])) {
                    foreach($data['specialty'] as $d) {
                        $this->addSpecialty($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"specialty" must be array of objects or null, '.gettype($data['specialty']).' seen.');
                }
            }
            if (isset($data['appointmentType'])) {
                $this->setAppointmentType($data['appointmentType']);
            }
            if (isset($data['reason'])) {
                if (is_array($data['reason'])) {
                    foreach($data['reason'] as $d) {
                        $this->addReason($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"reason" must be array of objects or null, '.gettype($data['reason']).' seen.');
                }
            }
            if (isset($data['indication'])) {
                if (is_array($data['indication'])) {
                    foreach($data['indication'] as $d) {
                        $this->addIndication($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"indication" must be array of objects or null, '.gettype($data['indication']).' seen.');
                }
            }
            if (isset($data['priority'])) {
                $this->setPriority($data['priority']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['supportingInformation'])) {
                if (is_array($data['supportingInformation'])) {
                    foreach($data['supportingInformation'] as $d) {
                        $this->addSupportingInformation($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"supportingInformation" must be array of objects or null, '.gettype($data['supportingInformation']).' seen.');
                }
            }
            if (isset($data['start'])) {
                $this->setStart($data['start']);
            }
            if (isset($data['end'])) {
                $this->setEnd($data['end']);
            }
            if (isset($data['minutesDuration'])) {
                $this->setMinutesDuration($data['minutesDuration']);
            }
            if (isset($data['slot'])) {
                if (is_array($data['slot'])) {
                    foreach($data['slot'] as $d) {
                        $this->addSlot($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"slot" must be array of objects or null, '.gettype($data['slot']).' seen.');
                }
            }
            if (isset($data['created'])) {
                $this->setCreated($data['created']);
            }
            if (isset($data['comment'])) {
                $this->setComment($data['comment']);
            }
            if (isset($data['patientInstruction'])) {
                $this->setPatientInstruction($data['patientInstruction']);
            }
            if (isset($data['incomingReferral'])) {
                if (is_array($data['incomingReferral'])) {
                    foreach($data['incomingReferral'] as $d) {
                        $this->addIncomingReferral($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"incomingReferral" must be array of objects or null, '.gettype($data['incomingReferral']).' seen.');
                }
            }
            if (isset($data['participant'])) {
                if (is_array($data['participant'])) {
                    foreach($data['participant'] as $d) {
                        $this->addParticipant($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"participant" must be array of objects or null, '.gettype($data['participant']).' seen.');
                }
            }
            if (isset($data['requestedPeriod'])) {
                if (is_array($data['requestedPeriod'])) {
                    foreach($data['requestedPeriod'] as $d) {
                        $this->addRequestedPeriod($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"requestedPeriod" must be array of objects or null, '.gettype($data['requestedPeriod']).' seen.');
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
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->serviceCategory)) $json['serviceCategory'] = $this->serviceCategory;
        if (0 < count($this->serviceType)) {
            $json['serviceType'] = [];
            foreach($this->serviceType as $serviceType) {
                if (null !== $serviceType) $json['serviceType'][] = $serviceType;
            }
        }
        if (0 < count($this->specialty)) {
            $json['specialty'] = [];
            foreach($this->specialty as $specialty) {
                if (null !== $specialty) $json['specialty'][] = $specialty;
            }
        }
        if (isset($this->appointmentType)) $json['appointmentType'] = $this->appointmentType;
        if (0 < count($this->reason)) {
            $json['reason'] = [];
            foreach($this->reason as $reason) {
                if (null !== $reason) $json['reason'][] = $reason;
            }
        }
        if (0 < count($this->indication)) {
            $json['indication'] = [];
            foreach($this->indication as $indication) {
                if (null !== $indication) $json['indication'][] = $indication;
            }
        }
        if (isset($this->priority)) $json['priority'] = $this->priority;
        if (isset($this->description)) $json['description'] = $this->description;
        if (0 < count($this->supportingInformation)) {
            $json['supportingInformation'] = [];
            foreach($this->supportingInformation as $supportingInformation) {
                if (null !== $supportingInformation) $json['supportingInformation'][] = $supportingInformation;
            }
        }
        if (isset($this->start)) $json['start'] = $this->start;
        if (isset($this->end)) $json['end'] = $this->end;
        if (isset($this->minutesDuration)) $json['minutesDuration'] = $this->minutesDuration;
        if (0 < count($this->slot)) {
            $json['slot'] = [];
            foreach($this->slot as $slot) {
                if (null !== $slot) $json['slot'][] = $slot;
            }
        }
        if (isset($this->created)) $json['created'] = $this->created;
        if (isset($this->comment)) $json['comment'] = $this->comment;
        if (isset($this->patientInstruction)) $json['patientInstruction'] = $this->patientInstruction;
        if (0 < count($this->incomingReferral)) {
            $json['incomingReferral'] = [];
            foreach($this->incomingReferral as $incomingReferral) {
                if (null !== $incomingReferral) $json['incomingReferral'][] = $incomingReferral;
            }
        }
        if (0 < count($this->participant)) {
            $json['participant'] = [];
            foreach($this->participant as $participant) {
                if (null !== $participant) $json['participant'][] = $participant;
            }
        }
        if (0 < count($this->requestedPeriod)) {
            $json['requestedPeriod'] = [];
            foreach($this->requestedPeriod as $requestedPeriod) {
                if (null !== $requestedPeriod) $json['requestedPeriod'][] = $requestedPeriod;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Appointment xmlns="http://hl7.org/fhir"></Appointment>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->serviceCategory)) $this->serviceCategory->xmlSerialize(true, $sxe->addChild('serviceCategory'));
        if (0 < count($this->serviceType)) {
            foreach($this->serviceType as $serviceType) {
                $serviceType->xmlSerialize(true, $sxe->addChild('serviceType'));
            }
        }
        if (0 < count($this->specialty)) {
            foreach($this->specialty as $specialty) {
                $specialty->xmlSerialize(true, $sxe->addChild('specialty'));
            }
        }
        if (isset($this->appointmentType)) $this->appointmentType->xmlSerialize(true, $sxe->addChild('appointmentType'));
        if (0 < count($this->reason)) {
            foreach($this->reason as $reason) {
                $reason->xmlSerialize(true, $sxe->addChild('reason'));
            }
        }
        if (0 < count($this->indication)) {
            foreach($this->indication as $indication) {
                $indication->xmlSerialize(true, $sxe->addChild('indication'));
            }
        }
        if (isset($this->priority)) $this->priority->xmlSerialize(true, $sxe->addChild('priority'));
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->supportingInformation)) {
            foreach($this->supportingInformation as $supportingInformation) {
                $supportingInformation->xmlSerialize(true, $sxe->addChild('supportingInformation'));
            }
        }
        if (isset($this->start)) $this->start->xmlSerialize(true, $sxe->addChild('start'));
        if (isset($this->end)) $this->end->xmlSerialize(true, $sxe->addChild('end'));
        if (isset($this->minutesDuration)) $this->minutesDuration->xmlSerialize(true, $sxe->addChild('minutesDuration'));
        if (0 < count($this->slot)) {
            foreach($this->slot as $slot) {
                $slot->xmlSerialize(true, $sxe->addChild('slot'));
            }
        }
        if (isset($this->created)) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if (isset($this->comment)) $this->comment->xmlSerialize(true, $sxe->addChild('comment'));
        if (isset($this->patientInstruction)) $this->patientInstruction->xmlSerialize(true, $sxe->addChild('patientInstruction'));
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
        if (0 < count($this->requestedPeriod)) {
            foreach($this->requestedPeriod as $requestedPeriod) {
                $requestedPeriod->xmlSerialize(true, $sxe->addChild('requestedPeriod'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}