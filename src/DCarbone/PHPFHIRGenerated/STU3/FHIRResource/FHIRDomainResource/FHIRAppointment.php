<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 5th, 2019 12:57+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAppointmentStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A booking of a healthcare event among patient(s), practitioner(s), related
 * person(s) and/or device(s) for a specific date/time. This may result in one or
 * more Encounter(s).
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRAppointment
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRAppointment extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_APPOINTMENT;

    const FIELD_APPOINTMENT_TYPE = 'appointmentType';
    const FIELD_COMMENT = 'comment';
    const FIELD_COMMENT_EXT = '_comment';
    const FIELD_CREATED = 'created';
    const FIELD_CREATED_EXT = '_created';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_END = 'end';
    const FIELD_END_EXT = '_end';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INCOMING_REFERRAL = 'incomingReferral';
    const FIELD_INDICATION = 'indication';
    const FIELD_MINUTES_DURATION = 'minutesDuration';
    const FIELD_MINUTES_DURATION_EXT = '_minutesDuration';
    const FIELD_PARTICIPANT = 'participant';
    const FIELD_PRIORITY = 'priority';
    const FIELD_PRIORITY_EXT = '_priority';
    const FIELD_REASON = 'reason';
    const FIELD_REQUESTED_PERIOD = 'requestedPeriod';
    const FIELD_SERVICE_CATEGORY = 'serviceCategory';
    const FIELD_SERVICE_TYPE = 'serviceType';
    const FIELD_SLOT = 'slot';
    const FIELD_SPECIALTY = 'specialty';
    const FIELD_START = 'start';
    const FIELD_START_EXT = '_start';
    const FIELD_STATUS = 'status';
    const FIELD_SUPPORTING_INFORMATION = 'supportingInformation';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The style of appointment or patient that has been booked in the slot (not
     * service type).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $appointmentType = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Additional comments about the appointment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $comment = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date that this appointment was initially created. This could be different to
     * the meta.lastModified value on the initial entry, as this could have been before
     * the resource was created on the FHIR server, and should remain unchanged over
     * the lifespan of the appointment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    private $created = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The brief description of the appointment as would be shown on a subject line in
     * a meeting request, or appointment list. Detailed or expanded information should
     * be put in the comment field.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $description = null;

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date/Time that the appointment is to conclude.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    private $end = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this appointment concern that are
     * defined by business processes and/or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The referral request this appointment is allocated to assess (incoming
     * referral).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    private $incomingReferral = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reason the appointment has been scheduled to take place, as specified using
     * information from another resource. When the patient arrives and the encounter
     * begins it may be used as the admission diagnosis. The indication will typically
     * be a Condition (with other resources referenced in the evidence.detail), or a
     * Procedure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    private $indication = [];

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Number of minutes that the appointment is to take. This can be less than the
     * duration between the start and end times (where actual time of appointment is
     * only an estimate or is a planned appointment request).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    private $minutesDuration = null;

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * List of participants involved in the appointment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant[]
     */
    private $participant = [];

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The priority of the appointment. Can be used to make informed decisions if
     * needing to re-prioritize appointments. (The iCal Standard specifies as
     * undefined, 1 as highest, 9 as lowest priority).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    private $priority = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The reason that this appointment is being scheduled. This is more clinical than
     * administrative.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    private $reason = [];

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A set of date ranges (potentially including times) that the appointment is
     * preferred to be scheduled within. When using these values, the minutes duration
     * should be provided to indicate the length of the appointment to fill and
     * populate the start/end times for the actual allocated time.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod[]
     */
    private $requestedPeriod = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A broad categorisation of the service that is to be performed during this
     * appointment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $serviceCategory = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specific service that is to be performed during this appointment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    private $serviceType = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The slots from the participants' schedules that will be filled by the
     * appointment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    private $slot = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specialty of a practitioner that would be required to perform the service
     * requested in this appointment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    private $specialty = [];

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date/Time that the appointment is to take place.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    private $start = null;

    /**
     * The free/busy status of an appointment.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The overall status of the Appointment. Each of the participants has their own
     * participation status which indicates their involvement in the process, however
     * this status indicates the shared status.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAppointmentStatus
     */
    private $status = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Additional information to support the appointment provided when making the
     * appointment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    private $supportingInformation = [];

    /**
     * FHIRAppointment Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAppointment::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_APPOINTMENT_TYPE])) {
            if ($data[self::FIELD_APPOINTMENT_TYPE] instanceof FHIRCodeableConcept) {
                $this->setAppointmentType($data[self::FIELD_APPOINTMENT_TYPE]);
            } else {
                $this->setAppointmentType(new FHIRCodeableConcept($data[self::FIELD_APPOINTMENT_TYPE]));
            }
        }
        if (isset($data[self::FIELD_COMMENT])) {
            $ext = (isset($data[self::FIELD_COMMENT_EXT]) && is_array($data[self::FIELD_COMMENT_EXT]))
                ? $data[self::FIELD_COMMENT_EXT]
                : null;
            if ($data[self::FIELD_COMMENT] instanceof FHIRString) {
                $this->setComment($data[self::FIELD_COMMENT]);
            } elseif ($ext && is_scalar($data[self::FIELD_COMMENT])) {
                $this->setComment(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_COMMENT]] + $ext));
            } else {
                $this->setComment(new FHIRString($data[self::FIELD_COMMENT]));
            }
        }
        if (isset($data[self::FIELD_CREATED])) {
            $ext = (isset($data[self::FIELD_CREATED_EXT]) && is_array($data[self::FIELD_CREATED_EXT]))
                ? $data[self::FIELD_CREATED_EXT]
                : null;
            if ($data[self::FIELD_CREATED] instanceof FHIRDateTime) {
                $this->setCreated($data[self::FIELD_CREATED]);
            } elseif ($ext && is_scalar($data[self::FIELD_CREATED])) {
                $this->setCreated(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_CREATED]] + $ext));
            } else {
                $this->setCreated(new FHIRDateTime($data[self::FIELD_CREATED]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESCRIPTION])) {
                $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_END])) {
            $ext = (isset($data[self::FIELD_END_EXT]) && is_array($data[self::FIELD_END_EXT]))
                ? $data[self::FIELD_END_EXT]
                : null;
            if ($data[self::FIELD_END] instanceof FHIRInstant) {
                $this->setEnd($data[self::FIELD_END]);
            } elseif ($ext && is_scalar($data[self::FIELD_END])) {
                $this->setEnd(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_END]] + $ext));
            } else {
                $this->setEnd(new FHIRInstant($data[self::FIELD_END]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_INCOMING_REFERRAL])) {
            if (is_array($data[self::FIELD_INCOMING_REFERRAL])) {
                foreach($data[self::FIELD_INCOMING_REFERRAL] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addIncomingReferral($v);
                    } else {
                        $this->addIncomingReferral(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_INCOMING_REFERRAL] instanceof FHIRReference) {
                $this->addIncomingReferral($data[self::FIELD_INCOMING_REFERRAL]);
            } else {
                $this->addIncomingReferral(new FHIRReference($data[self::FIELD_INCOMING_REFERRAL]));
            }
        }
        if (isset($data[self::FIELD_INDICATION])) {
            if (is_array($data[self::FIELD_INDICATION])) {
                foreach($data[self::FIELD_INDICATION] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addIndication($v);
                    } else {
                        $this->addIndication(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_INDICATION] instanceof FHIRReference) {
                $this->addIndication($data[self::FIELD_INDICATION]);
            } else {
                $this->addIndication(new FHIRReference($data[self::FIELD_INDICATION]));
            }
        }
        if (isset($data[self::FIELD_MINUTES_DURATION])) {
            $ext = (isset($data[self::FIELD_MINUTES_DURATION_EXT]) && is_array($data[self::FIELD_MINUTES_DURATION_EXT]))
                ? $data[self::FIELD_MINUTES_DURATION_EXT]
                : null;
            if ($data[self::FIELD_MINUTES_DURATION] instanceof FHIRPositiveInt) {
                $this->setMinutesDuration($data[self::FIELD_MINUTES_DURATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_MINUTES_DURATION])) {
                $this->setMinutesDuration(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_MINUTES_DURATION]] + $ext));
            } else {
                $this->setMinutesDuration(new FHIRPositiveInt($data[self::FIELD_MINUTES_DURATION]));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT])) {
            if (is_array($data[self::FIELD_PARTICIPANT])) {
                foreach($data[self::FIELD_PARTICIPANT] as $v) {
                    if ($v instanceof FHIRAppointmentParticipant) {
                        $this->addParticipant($v);
                    } else {
                        $this->addParticipant(new FHIRAppointmentParticipant($v));
                    }
                }
            } else if ($data[self::FIELD_PARTICIPANT] instanceof FHIRAppointmentParticipant) {
                $this->addParticipant($data[self::FIELD_PARTICIPANT]);
            } else {
                $this->addParticipant(new FHIRAppointmentParticipant($data[self::FIELD_PARTICIPANT]));
            }
        }
        if (isset($data[self::FIELD_PRIORITY])) {
            $ext = (isset($data[self::FIELD_PRIORITY_EXT]) && is_array($data[self::FIELD_PRIORITY_EXT]))
                ? $data[self::FIELD_PRIORITY_EXT]
                : null;
            if ($data[self::FIELD_PRIORITY] instanceof FHIRUnsignedInt) {
                $this->setPriority($data[self::FIELD_PRIORITY]);
            } elseif ($ext && is_scalar($data[self::FIELD_PRIORITY])) {
                $this->setPriority(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $data[self::FIELD_PRIORITY]] + $ext));
            } else {
                $this->setPriority(new FHIRUnsignedInt($data[self::FIELD_PRIORITY]));
            }
        }
        if (isset($data[self::FIELD_REASON])) {
            if (is_array($data[self::FIELD_REASON])) {
                foreach($data[self::FIELD_REASON] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReason($v);
                    } else {
                        $this->addReason(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_REASON] instanceof FHIRCodeableConcept) {
                $this->addReason($data[self::FIELD_REASON]);
            } else {
                $this->addReason(new FHIRCodeableConcept($data[self::FIELD_REASON]));
            }
        }
        if (isset($data[self::FIELD_REQUESTED_PERIOD])) {
            if (is_array($data[self::FIELD_REQUESTED_PERIOD])) {
                foreach($data[self::FIELD_REQUESTED_PERIOD] as $v) {
                    if ($v instanceof FHIRPeriod) {
                        $this->addRequestedPeriod($v);
                    } else {
                        $this->addRequestedPeriod(new FHIRPeriod($v));
                    }
                }
            } else if ($data[self::FIELD_REQUESTED_PERIOD] instanceof FHIRPeriod) {
                $this->addRequestedPeriod($data[self::FIELD_REQUESTED_PERIOD]);
            } else {
                $this->addRequestedPeriod(new FHIRPeriod($data[self::FIELD_REQUESTED_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_SERVICE_CATEGORY])) {
            if ($data[self::FIELD_SERVICE_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->setServiceCategory($data[self::FIELD_SERVICE_CATEGORY]);
            } else {
                $this->setServiceCategory(new FHIRCodeableConcept($data[self::FIELD_SERVICE_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_SERVICE_TYPE])) {
            if (is_array($data[self::FIELD_SERVICE_TYPE])) {
                foreach($data[self::FIELD_SERVICE_TYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addServiceType($v);
                    } else {
                        $this->addServiceType(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_SERVICE_TYPE] instanceof FHIRCodeableConcept) {
                $this->addServiceType($data[self::FIELD_SERVICE_TYPE]);
            } else {
                $this->addServiceType(new FHIRCodeableConcept($data[self::FIELD_SERVICE_TYPE]));
            }
        }
        if (isset($data[self::FIELD_SLOT])) {
            if (is_array($data[self::FIELD_SLOT])) {
                foreach($data[self::FIELD_SLOT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addSlot($v);
                    } else {
                        $this->addSlot(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SLOT] instanceof FHIRReference) {
                $this->addSlot($data[self::FIELD_SLOT]);
            } else {
                $this->addSlot(new FHIRReference($data[self::FIELD_SLOT]));
            }
        }
        if (isset($data[self::FIELD_SPECIALTY])) {
            if (is_array($data[self::FIELD_SPECIALTY])) {
                foreach($data[self::FIELD_SPECIALTY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSpecialty($v);
                    } else {
                        $this->addSpecialty(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_SPECIALTY] instanceof FHIRCodeableConcept) {
                $this->addSpecialty($data[self::FIELD_SPECIALTY]);
            } else {
                $this->addSpecialty(new FHIRCodeableConcept($data[self::FIELD_SPECIALTY]));
            }
        }
        if (isset($data[self::FIELD_START])) {
            $ext = (isset($data[self::FIELD_START_EXT]) && is_array($data[self::FIELD_START_EXT]))
                ? $data[self::FIELD_START_EXT]
                : null;
            if ($data[self::FIELD_START] instanceof FHIRInstant) {
                $this->setStart($data[self::FIELD_START]);
            } elseif ($ext && is_scalar($data[self::FIELD_START])) {
                $this->setStart(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_START]] + $ext));
            } else {
                $this->setStart(new FHIRInstant($data[self::FIELD_START]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRAppointmentStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRAppointmentStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_SUPPORTING_INFORMATION])) {
            if (is_array($data[self::FIELD_SUPPORTING_INFORMATION])) {
                foreach($data[self::FIELD_SUPPORTING_INFORMATION] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addSupportingInformation($v);
                    } else {
                        $this->addSupportingInformation(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SUPPORTING_INFORMATION] instanceof FHIRReference) {
                $this->addSupportingInformation($data[self::FIELD_SUPPORTING_INFORMATION]);
            } else {
                $this->addSupportingInformation(new FHIRReference($data[self::FIELD_SUPPORTING_INFORMATION]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The style of appointment or patient that has been booked in the slot (not
     * service type).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getAppointmentType()
    {
        return $this->appointmentType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The style of appointment or patient that has been booked in the slot (not
     * service type).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $appointmentType
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function setAppointmentType(FHIRCodeableConcept $appointmentType = null)
    {
        $this->appointmentType = $appointmentType;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Additional comments about the appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Additional comments about the appointment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $comment
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function setComment($comment = null)
    {
        if (null === $comment) {
            $this->comment = null;
            return $this;
        }
        if ($comment instanceof FHIRString) {
            $this->comment = $comment;
            return $this;
        }
        $this->comment = new FHIRString($comment);
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date that this appointment was initially created. This could be different to
     * the meta.lastModified value on the initial entry, as this could have been before
     * the resource was created on the FHIR server, and should remain unchanged over
     * the lifespan of the appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date that this appointment was initially created. This could be different to
     * the meta.lastModified value on the initial entry, as this could have been before
     * the resource was created on the FHIR server, and should remain unchanged over
     * the lifespan of the appointment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $created
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function setCreated($created = null)
    {
        if (null === $created) {
            $this->created = null;
            return $this;
        }
        if ($created instanceof FHIRDateTime) {
            $this->created = $created;
            return $this;
        }
        $this->created = new FHIRDateTime($created);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The brief description of the appointment as would be shown on a subject line in
     * a meeting request, or appointment list. Detailed or expanded information should
     * be put in the comment field.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The brief description of the appointment as would be shown on a subject line in
     * a meeting request, or appointment list. Detailed or expanded information should
     * be put in the comment field.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $description
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date/Time that the appointment is to conclude.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date/Time that the appointment is to conclude.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant $end
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function setEnd($end = null)
    {
        if (null === $end) {
            $this->end = null;
            return $this;
        }
        if ($end instanceof FHIRInstant) {
            $this->end = $end;
            return $this;
        }
        $this->end = new FHIRInstant($end);
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this appointment concern that are
     * defined by business processes and/or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this appointment concern that are
     * defined by business processes and/or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this appointment concern that are
     * defined by business processes and/or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The referral request this appointment is allocated to assess (incoming
     * referral).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getIncomingReferral()
    {
        return $this->incomingReferral;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The referral request this appointment is allocated to assess (incoming
     * referral).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $incomingReferral
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function addIncomingReferral(FHIRReference $incomingReferral = null)
    {
        $this->incomingReferral[] = $incomingReferral;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The referral request this appointment is allocated to assess (incoming
     * referral).
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $incomingReferral
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function setIncomingReferral(array $incomingReferral = [])
    {
        $this->incomingReferral = [];
        if ([] === $incomingReferral) {
            return $this;
        }
        foreach($incomingReferral as $v) {
            if ($v instanceof FHIRReference) {
                $this->addIncomingReferral($v);
            } else {
                $this->addIncomingReferral(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reason the appointment has been scheduled to take place, as specified using
     * information from another resource. When the patient arrives and the encounter
     * begins it may be used as the admission diagnosis. The indication will typically
     * be a Condition (with other resources referenced in the evidence.detail), or a
     * Procedure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reason the appointment has been scheduled to take place, as specified using
     * information from another resource. When the patient arrives and the encounter
     * begins it may be used as the admission diagnosis. The indication will typically
     * be a Condition (with other resources referenced in the evidence.detail), or a
     * Procedure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $indication
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function addIndication(FHIRReference $indication = null)
    {
        $this->indication[] = $indication;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reason the appointment has been scheduled to take place, as specified using
     * information from another resource. When the patient arrives and the encounter
     * begins it may be used as the admission diagnosis. The indication will typically
     * be a Condition (with other resources referenced in the evidence.detail), or a
     * Procedure.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $indication
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function setIndication(array $indication = [])
    {
        $this->indication = [];
        if ([] === $indication) {
            return $this;
        }
        foreach($indication as $v) {
            if ($v instanceof FHIRReference) {
                $this->addIndication($v);
            } else {
                $this->addIndication(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Number of minutes that the appointment is to take. This can be less than the
     * duration between the start and end times (where actual time of appointment is
     * only an estimate or is a planned appointment request).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    public function getMinutesDuration()
    {
        return $this->minutesDuration;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Number of minutes that the appointment is to take. This can be less than the
     * duration between the start and end times (where actual time of appointment is
     * only an estimate or is a planned appointment request).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt $minutesDuration
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function setMinutesDuration($minutesDuration = null)
    {
        if (null === $minutesDuration) {
            $this->minutesDuration = null;
            return $this;
        }
        if ($minutesDuration instanceof FHIRPositiveInt) {
            $this->minutesDuration = $minutesDuration;
            return $this;
        }
        $this->minutesDuration = new FHIRPositiveInt($minutesDuration);
        return $this;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * List of participants involved in the appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * List of participants involved in the appointment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant $participant
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function addParticipant(FHIRAppointmentParticipant $participant = null)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * List of participants involved in the appointment.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant[] $participant
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function setParticipant(array $participant = [])
    {
        $this->participant = [];
        if ([] === $participant) {
            return $this;
        }
        foreach($participant as $v) {
            if ($v instanceof FHIRAppointmentParticipant) {
                $this->addParticipant($v);
            } else {
                $this->addParticipant(new FHIRAppointmentParticipant($v));
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The priority of the appointment. Can be used to make informed decisions if
     * needing to re-prioritize appointments. (The iCal Standard specifies as
     * undefined, 1 as highest, 9 as lowest priority).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The priority of the appointment. Can be used to make informed decisions if
     * needing to re-prioritize appointments. (The iCal Standard specifies as
     * undefined, 1 as highest, 9 as lowest priority).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $priority
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function setPriority($priority = null)
    {
        if (null === $priority) {
            $this->priority = null;
            return $this;
        }
        if ($priority instanceof FHIRUnsignedInt) {
            $this->priority = $priority;
            return $this;
        }
        $this->priority = new FHIRUnsignedInt($priority);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The reason that this appointment is being scheduled. This is more clinical than
     * administrative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The reason that this appointment is being scheduled. This is more clinical than
     * administrative.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $reason
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function addReason(FHIRCodeableConcept $reason = null)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The reason that this appointment is being scheduled. This is more clinical than
     * administrative.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $reason
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function setReason(array $reason = [])
    {
        $this->reason = [];
        if ([] === $reason) {
            return $this;
        }
        foreach($reason as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReason($v);
            } else {
                $this->addReason(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A set of date ranges (potentially including times) that the appointment is
     * preferred to be scheduled within. When using these values, the minutes duration
     * should be provided to indicate the length of the appointment to fill and
     * populate the start/end times for the actual allocated time.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod[]
     */
    public function getRequestedPeriod()
    {
        return $this->requestedPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A set of date ranges (potentially including times) that the appointment is
     * preferred to be scheduled within. When using these values, the minutes duration
     * should be provided to indicate the length of the appointment to fill and
     * populate the start/end times for the actual allocated time.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $requestedPeriod
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function addRequestedPeriod(FHIRPeriod $requestedPeriod = null)
    {
        $this->requestedPeriod[] = $requestedPeriod;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A set of date ranges (potentially including times) that the appointment is
     * preferred to be scheduled within. When using these values, the minutes duration
     * should be provided to indicate the length of the appointment to fill and
     * populate the start/end times for the actual allocated time.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod[] $requestedPeriod
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function setRequestedPeriod(array $requestedPeriod = [])
    {
        $this->requestedPeriod = [];
        if ([] === $requestedPeriod) {
            return $this;
        }
        foreach($requestedPeriod as $v) {
            if ($v instanceof FHIRPeriod) {
                $this->addRequestedPeriod($v);
            } else {
                $this->addRequestedPeriod(new FHIRPeriod($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A broad categorisation of the service that is to be performed during this
     * appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getServiceCategory()
    {
        return $this->serviceCategory;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A broad categorisation of the service that is to be performed during this
     * appointment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $serviceCategory
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function setServiceCategory(FHIRCodeableConcept $serviceCategory = null)
    {
        $this->serviceCategory = $serviceCategory;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specific service that is to be performed during this appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specific service that is to be performed during this appointment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $serviceType
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function addServiceType(FHIRCodeableConcept $serviceType = null)
    {
        $this->serviceType[] = $serviceType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specific service that is to be performed during this appointment.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $serviceType
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function setServiceType(array $serviceType = [])
    {
        $this->serviceType = [];
        if ([] === $serviceType) {
            return $this;
        }
        foreach($serviceType as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addServiceType($v);
            } else {
                $this->addServiceType(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The slots from the participants' schedules that will be filled by the
     * appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The slots from the participants' schedules that will be filled by the
     * appointment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $slot
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function addSlot(FHIRReference $slot = null)
    {
        $this->slot[] = $slot;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The slots from the participants' schedules that will be filled by the
     * appointment.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $slot
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function setSlot(array $slot = [])
    {
        $this->slot = [];
        if ([] === $slot) {
            return $this;
        }
        foreach($slot as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSlot($v);
            } else {
                $this->addSlot(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specialty of a practitioner that would be required to perform the service
     * requested in this appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specialty of a practitioner that would be required to perform the service
     * requested in this appointment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $specialty
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function addSpecialty(FHIRCodeableConcept $specialty = null)
    {
        $this->specialty[] = $specialty;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specialty of a practitioner that would be required to perform the service
     * requested in this appointment.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $specialty
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function setSpecialty(array $specialty = [])
    {
        $this->specialty = [];
        if ([] === $specialty) {
            return $this;
        }
        foreach($specialty as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addSpecialty($v);
            } else {
                $this->addSpecialty(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date/Time that the appointment is to take place.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date/Time that the appointment is to take place.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant $start
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function setStart($start = null)
    {
        if (null === $start) {
            $this->start = null;
            return $this;
        }
        if ($start instanceof FHIRInstant) {
            $this->start = $start;
            return $this;
        }
        $this->start = new FHIRInstant($start);
        return $this;
    }

    /**
     * The free/busy status of an appointment.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The overall status of the Appointment. Each of the participants has their own
     * participation status which indicates their involvement in the process, however
     * this status indicates the shared status.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAppointmentStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The free/busy status of an appointment.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The overall status of the Appointment. Each of the participants has their own
     * participation status which indicates their involvement in the process, however
     * this status indicates the shared status.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAppointmentStatus $status
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function setStatus(FHIRAppointmentStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Additional information to support the appointment provided when making the
     * appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Additional information to support the appointment provided when making the
     * appointment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $supportingInformation
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function addSupportingInformation(FHIRReference $supportingInformation = null)
    {
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Additional information to support the appointment provided when making the
     * appointment.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $supportingInformation
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function setSupportingInformation(array $supportingInformation = [])
    {
        $this->supportingInformation = [];
        if ([] === $supportingInformation) {
            return $this;
        }
        foreach($supportingInformation as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSupportingInformation($v);
            } else {
                $this->addSupportingInformation(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment $type
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRAppointment::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRAppointment::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRAppointment);
        } elseif (!is_object($type) || !($type instanceof FHIRAppointment)) {
            throw new \RuntimeException(sprintf(
                'FHIRAppointment::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->appointmentType)) {
            $type->setAppointmentType(FHIRCodeableConcept::xmlUnserialize($children->appointmentType));
        }
        if (isset($attributes->comment)) {
            $type->setComment((string)$attributes->comment);
        }
        if (isset($children->comment)) {
            $type->setComment(FHIRString::xmlUnserialize($children->comment));
        }
        if (isset($attributes->created)) {
            $type->setCreated((string)$attributes->created);
        }
        if (isset($children->created)) {
            $type->setCreated(FHIRDateTime::xmlUnserialize($children->created));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->end)) {
            $type->setEnd((string)$attributes->end);
        }
        if (isset($children->end)) {
            $type->setEnd(FHIRInstant::xmlUnserialize($children->end));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->incomingReferral)) {
            foreach($children->incomingReferral as $child) {
                $type->addIncomingReferral(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->indication)) {
            foreach($children->indication as $child) {
                $type->addIndication(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($attributes->minutesDuration)) {
            $type->setMinutesDuration((string)$attributes->minutesDuration);
        }
        if (isset($children->minutesDuration)) {
            $type->setMinutesDuration(FHIRPositiveInt::xmlUnserialize($children->minutesDuration));
        }
        if (isset($children->participant)) {
            foreach($children->participant as $child) {
                $type->addParticipant(FHIRAppointmentParticipant::xmlUnserialize($child));
            }
        }
        if (isset($attributes->priority)) {
            $type->setPriority((string)$attributes->priority);
        }
        if (isset($children->priority)) {
            $type->setPriority(FHIRUnsignedInt::xmlUnserialize($children->priority));
        }
        if (isset($children->reason)) {
            foreach($children->reason as $child) {
                $type->addReason(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->requestedPeriod)) {
            foreach($children->requestedPeriod as $child) {
                $type->addRequestedPeriod(FHIRPeriod::xmlUnserialize($child));
            }
        }
        if (isset($children->serviceCategory)) {
            $type->setServiceCategory(FHIRCodeableConcept::xmlUnserialize($children->serviceCategory));
        }
        if (isset($children->serviceType)) {
            foreach($children->serviceType as $child) {
                $type->addServiceType(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->slot)) {
            foreach($children->slot as $child) {
                $type->addSlot(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->specialty)) {
            foreach($children->specialty as $child) {
                $type->addSpecialty(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($attributes->start)) {
            $type->setStart((string)$attributes->start);
        }
        if (isset($children->start)) {
            $type->setStart(FHIRInstant::xmlUnserialize($children->start));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRAppointmentStatus::xmlUnserialize($children->status));
        }
        if (isset($children->supportingInformation)) {
            foreach($children->supportingInformation as $child) {
                $type->addSupportingInformation(FHIRReference::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<Appointment xmlns="http://hl7.org/fhir"></Appointment>');
        }
    parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getAppointmentType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_APPOINTMENT_TYPE));
        }
        if (null !== ($v = $this->getComment())) {
            $sxe->addAttribute(self::FIELD_COMMENT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_COMMENT));
            }
        }
        if (null !== ($v = $this->getCreated())) {
            $sxe->addAttribute(self::FIELD_CREATED, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_CREATED));
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $sxe->addAttribute(self::FIELD_DESCRIPTION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION));
            }
        }
        if (null !== ($v = $this->getEnd())) {
            $sxe->addAttribute(self::FIELD_END, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_END));
            }
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }

        if ([] !== ($vs = $this->getIncomingReferral())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INCOMING_REFERRAL));
            }
        }

        if ([] !== ($vs = $this->getIndication())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INDICATION));
            }
        }
        if (null !== ($v = $this->getMinutesDuration())) {
            $sxe->addAttribute(self::FIELD_MINUTES_DURATION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_MINUTES_DURATION));
            }
        }

        if ([] !== ($vs = $this->getParticipant())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT));
            }
        }
        if (null !== ($v = $this->getPriority())) {
            $sxe->addAttribute(self::FIELD_PRIORITY, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRIORITY));
            }
        }

        if ([] !== ($vs = $this->getReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON));
            }
        }

        if ([] !== ($vs = $this->getRequestedPeriod())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REQUESTED_PERIOD));
            }
        }

        if (null !== ($v = $this->getServiceCategory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SERVICE_CATEGORY));
        }

        if ([] !== ($vs = $this->getServiceType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SERVICE_TYPE));
            }
        }

        if ([] !== ($vs = $this->getSlot())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SLOT));
            }
        }

        if ([] !== ($vs = $this->getSpecialty())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIALTY));
            }
        }
        if (null !== ($v = $this->getStart())) {
            $sxe->addAttribute(self::FIELD_START, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_START));
            }
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
        }

        if ([] !== ($vs = $this->getSupportingInformation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUPPORTING_INFORMATION));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAppointmentType())) {
            $a[self::FIELD_APPOINTMENT_TYPE] = $v;
        }
        if (null !== ($v = $this->getComment())) {
            $a[self::FIELD_COMMENT] = (string)$v;
            $a[self::FIELD_COMMENT_EXT] = $v;
        }
        if (null !== ($v = $this->getCreated())) {
            $a[self::FIELD_CREATED] = (string)$v;
            $a[self::FIELD_CREATED_EXT] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = (string)$v;
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if (null !== ($v = $this->getEnd())) {
            $a[self::FIELD_END] = (string)$v;
            $a[self::FIELD_END_EXT] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getIncomingReferral())) {
            $a[self::FIELD_INCOMING_REFERRAL] = $vs;
        }
        if ([] !== ($vs = $this->getIndication())) {
            $a[self::FIELD_INDICATION] = $vs;
        }
        if (null !== ($v = $this->getMinutesDuration())) {
            $a[self::FIELD_MINUTES_DURATION] = (string)$v;
            $a[self::FIELD_MINUTES_DURATION_EXT] = $v;
        }
        if ([] !== ($vs = $this->getParticipant())) {
            $a[self::FIELD_PARTICIPANT] = $vs;
        }
        if (null !== ($v = $this->getPriority())) {
            $a[self::FIELD_PRIORITY] = (string)$v;
            $a[self::FIELD_PRIORITY_EXT] = $v;
        }
        if ([] !== ($vs = $this->getReason())) {
            $a[self::FIELD_REASON] = $vs;
        }
        if ([] !== ($vs = $this->getRequestedPeriod())) {
            $a[self::FIELD_REQUESTED_PERIOD] = $vs;
        }
        if (null !== ($v = $this->getServiceCategory())) {
            $a[self::FIELD_SERVICE_CATEGORY] = $v;
        }
        if ([] !== ($vs = $this->getServiceType())) {
            $a[self::FIELD_SERVICE_TYPE] = $vs;
        }
        if ([] !== ($vs = $this->getSlot())) {
            $a[self::FIELD_SLOT] = $vs;
        }
        if ([] !== ($vs = $this->getSpecialty())) {
            $a[self::FIELD_SPECIALTY] = $vs;
        }
        if (null !== ($v = $this->getStart())) {
            $a[self::FIELD_START] = (string)$v;
            $a[self::FIELD_START_EXT] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if ([] !== ($vs = $this->getSupportingInformation())) {
            $a[self::FIELD_SUPPORTING_INFORMATION] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}