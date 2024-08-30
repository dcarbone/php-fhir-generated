<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:23+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAppointmentStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter;

/**
 * A booking of a healthcare event among patient(s), practitioner(s), related
 * person(s) and/or device(s) for a specific date/time. This may result in one or
 * more Encounter(s).
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRAppointment
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRAppointment extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_APPOINTMENT;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_CANCELATION_REASON = 'cancelationReason';
    const FIELD_SERVICE_CATEGORY = 'serviceCategory';
    const FIELD_SERVICE_TYPE = 'serviceType';
    const FIELD_SPECIALTY = 'specialty';
    const FIELD_APPOINTMENT_TYPE = 'appointmentType';
    const FIELD_REASON_CODE = 'reasonCode';
    const FIELD_REASON_REFERENCE = 'reasonReference';
    const FIELD_PRIORITY = 'priority';
    const FIELD_PRIORITY_EXT = '_priority';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_SUPPORTING_INFORMATION = 'supportingInformation';
    const FIELD_START = 'start';
    const FIELD_START_EXT = '_start';
    const FIELD_END = 'end';
    const FIELD_END_EXT = '_end';
    const FIELD_MINUTES_DURATION = 'minutesDuration';
    const FIELD_MINUTES_DURATION_EXT = '_minutesDuration';
    const FIELD_SLOT = 'slot';
    const FIELD_CREATED = 'created';
    const FIELD_CREATED_EXT = '_created';
    const FIELD_COMMENT = 'comment';
    const FIELD_COMMENT_EXT = '_comment';
    const FIELD_PATIENT_INSTRUCTION = 'patientInstruction';
    const FIELD_PATIENT_INSTRUCTION_EXT = '_patientInstruction';
    const FIELD_BASED_ON = 'basedOn';
    const FIELD_PARTICIPANT = 'participant';
    const FIELD_REQUESTED_PERIOD = 'requestedPeriod';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this appointment concern that are
     * defined by business processes and/or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * The free/busy status of an appointment.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The overall status of the Appointment. Each of the participants has their own
     * participation status which indicates their involvement in the process, however
     * this status indicates the shared status.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAppointmentStatus
     */
    protected null|FHIRAppointmentStatus $status = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The coded reason for the appointment being cancelled. This is often used in
     * reporting/billing/futher processing to determine if further actions are
     * required, or specific fees apply.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $cancelationReason = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A broad categorization of the service that is to be performed during this
     * appointment.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $serviceCategory = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specific service that is to be performed during this appointment.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $serviceType = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specialty of a practitioner that would be required to perform the service
     * requested in this appointment.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $specialty = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The style of appointment or patient that has been booked in the slot (not
     * service type).
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $appointmentType = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The coded reason that this appointment is being scheduled. This is more clinical
     * than administrative.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $reasonCode = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason the appointment has been scheduled to take place, as specified using
     * information from another resource. When the patient arrives and the encounter
     * begins it may be used as the admission diagnosis. The indication will typically
     * be a Condition (with other resources referenced in the evidence.detail), or a
     * Procedure.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $reasonReference = [];
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The priority of the appointment. Can be used to make informed decisions if
     * needing to re-prioritize appointments. (The iCal Standard specifies as
     * undefined, 1 as highest, 9 as lowest priority).
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt
     */
    protected null|FHIRUnsignedInt $priority = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The brief description of the appointment as would be shown on a subject line in
     * a meeting request, or appointment list. Detailed or expanded information should
     * be put in the comment field.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $description = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information to support the appointment provided when making the
     * appointment.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $supportingInformation = [];
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date/Time that the appointment is to take place.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $start = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date/Time that the appointment is to conclude.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $end = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number of minutes that the appointment is to take. This can be less than the
     * duration between the start and end times. For example, where the actual time of
     * appointment is only an estimate or if a 30 minute appointment is being
     * requested, but any time would work. Also, if there is, for example, a planned 15
     * minute break in the middle of a long appointment, the duration may be 15 minutes
     * less than the difference between the start and end.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $minutesDuration = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The slots from the participants' schedules that will be filled by the
     * appointment.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $slot = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date that this appointment was initially created. This could be different to
     * the meta.lastModified value on the initial entry, as this could have been before
     * the resource was created on the FHIR server, and should remain unchanged over
     * the lifespan of the appointment.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $created = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional comments about the appointment.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $comment = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * While Appointment.comment contains information for internal use,
     * Appointment.patientInstructions is used to capture patient facing information
     * about the Appointment (e.g. please bring your referral or fast from 8pm night
     * before).
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $patientInstruction = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service request this appointment is allocated to assess (e.g. incoming
     * referral or procedure request).
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $basedOn = [];
    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * List of participants involved in the appointment.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant[]
     */
    protected null|array $participant = [];
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of date ranges (potentially including times) that the appointment is
     * preferred to be scheduled within. The duration (usually in minutes) could also
     * be provided to indicate the length of the appointment to fill and populate the
     * start/end times for the actual allocated time. However, in other situations the
     * duration may be calculated by the scheduling system.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod[]
     */
    protected null|array $requestedPeriod = [];

    /**
     * Validation map for fields in type Appointment
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_PARTICIPANT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_STATUS => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRAppointment Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_IDENTIFIER, $data)) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_STATUS, $data) || array_key_exists(self::FIELD_STATUS_EXT, $data)) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAppointmentStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRAppointmentStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRAppointmentStatus([FHIRAppointmentStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRAppointmentStatus($ext));
            } else {
                $this->setStatus(new FHIRAppointmentStatus(null));
            }
        }
        if (array_key_exists(self::FIELD_CANCELATION_REASON, $data)) {
            if ($data[self::FIELD_CANCELATION_REASON] instanceof FHIRCodeableConcept) {
                $this->setCancelationReason($data[self::FIELD_CANCELATION_REASON]);
            } else {
                $this->setCancelationReason(new FHIRCodeableConcept($data[self::FIELD_CANCELATION_REASON]));
            }
        }
        if (array_key_exists(self::FIELD_SERVICE_CATEGORY, $data)) {
            if (is_array($data[self::FIELD_SERVICE_CATEGORY])) {
                foreach($data[self::FIELD_SERVICE_CATEGORY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addServiceCategory($v);
                    } else {
                        $this->addServiceCategory(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_SERVICE_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->addServiceCategory($data[self::FIELD_SERVICE_CATEGORY]);
            } else {
                $this->addServiceCategory(new FHIRCodeableConcept($data[self::FIELD_SERVICE_CATEGORY]));
            }
        }
        if (array_key_exists(self::FIELD_SERVICE_TYPE, $data)) {
            if (is_array($data[self::FIELD_SERVICE_TYPE])) {
                foreach($data[self::FIELD_SERVICE_TYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addServiceType($v);
                    } else {
                        $this->addServiceType(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_SERVICE_TYPE] instanceof FHIRCodeableConcept) {
                $this->addServiceType($data[self::FIELD_SERVICE_TYPE]);
            } else {
                $this->addServiceType(new FHIRCodeableConcept($data[self::FIELD_SERVICE_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_SPECIALTY, $data)) {
            if (is_array($data[self::FIELD_SPECIALTY])) {
                foreach($data[self::FIELD_SPECIALTY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSpecialty($v);
                    } else {
                        $this->addSpecialty(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_SPECIALTY] instanceof FHIRCodeableConcept) {
                $this->addSpecialty($data[self::FIELD_SPECIALTY]);
            } else {
                $this->addSpecialty(new FHIRCodeableConcept($data[self::FIELD_SPECIALTY]));
            }
        }
        if (array_key_exists(self::FIELD_APPOINTMENT_TYPE, $data)) {
            if ($data[self::FIELD_APPOINTMENT_TYPE] instanceof FHIRCodeableConcept) {
                $this->setAppointmentType($data[self::FIELD_APPOINTMENT_TYPE]);
            } else {
                $this->setAppointmentType(new FHIRCodeableConcept($data[self::FIELD_APPOINTMENT_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_REASON_CODE, $data)) {
            if (is_array($data[self::FIELD_REASON_CODE])) {
                foreach($data[self::FIELD_REASON_CODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReasonCode($v);
                    } else {
                        $this->addReasonCode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_REASON_CODE] instanceof FHIRCodeableConcept) {
                $this->addReasonCode($data[self::FIELD_REASON_CODE]);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($data[self::FIELD_REASON_CODE]));
            }
        }
        if (array_key_exists(self::FIELD_REASON_REFERENCE, $data)) {
            if (is_array($data[self::FIELD_REASON_REFERENCE])) {
                foreach($data[self::FIELD_REASON_REFERENCE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addReasonReference($v);
                    } else {
                        $this->addReasonReference(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_REASON_REFERENCE] instanceof FHIRReference) {
                $this->addReasonReference($data[self::FIELD_REASON_REFERENCE]);
            } else {
                $this->addReasonReference(new FHIRReference($data[self::FIELD_REASON_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_PRIORITY, $data) || array_key_exists(self::FIELD_PRIORITY_EXT, $data)) {
            $value = $data[self::FIELD_PRIORITY] ?? null;
            $ext = (isset($data[self::FIELD_PRIORITY_EXT]) && is_array($data[self::FIELD_PRIORITY_EXT])) ? $data[self::FIELD_PRIORITY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setPriority($value);
                } else if (is_array($value)) {
                    $this->setPriority(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setPriority(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPriority(new FHIRUnsignedInt($ext));
            } else {
                $this->setPriority(new FHIRUnsignedInt(null));
            }
        }
        if (array_key_exists(self::FIELD_DESCRIPTION, $data) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $data)) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            } else {
                $this->setDescription(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_SUPPORTING_INFORMATION, $data)) {
            if (is_array($data[self::FIELD_SUPPORTING_INFORMATION])) {
                foreach($data[self::FIELD_SUPPORTING_INFORMATION] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addSupportingInformation($v);
                    } else {
                        $this->addSupportingInformation(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SUPPORTING_INFORMATION] instanceof FHIRReference) {
                $this->addSupportingInformation($data[self::FIELD_SUPPORTING_INFORMATION]);
            } else {
                $this->addSupportingInformation(new FHIRReference($data[self::FIELD_SUPPORTING_INFORMATION]));
            }
        }
        if (array_key_exists(self::FIELD_START, $data) || array_key_exists(self::FIELD_START_EXT, $data)) {
            $value = $data[self::FIELD_START] ?? null;
            $ext = (isset($data[self::FIELD_START_EXT]) && is_array($data[self::FIELD_START_EXT])) ? $data[self::FIELD_START_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setStart($value);
                } else if (is_array($value)) {
                    $this->setStart(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setStart(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStart(new FHIRInstant($ext));
            } else {
                $this->setStart(new FHIRInstant(null));
            }
        }
        if (array_key_exists(self::FIELD_END, $data) || array_key_exists(self::FIELD_END_EXT, $data)) {
            $value = $data[self::FIELD_END] ?? null;
            $ext = (isset($data[self::FIELD_END_EXT]) && is_array($data[self::FIELD_END_EXT])) ? $data[self::FIELD_END_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setEnd($value);
                } else if (is_array($value)) {
                    $this->setEnd(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setEnd(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setEnd(new FHIRInstant($ext));
            } else {
                $this->setEnd(new FHIRInstant(null));
            }
        }
        if (array_key_exists(self::FIELD_MINUTES_DURATION, $data) || array_key_exists(self::FIELD_MINUTES_DURATION_EXT, $data)) {
            $value = $data[self::FIELD_MINUTES_DURATION] ?? null;
            $ext = (isset($data[self::FIELD_MINUTES_DURATION_EXT]) && is_array($data[self::FIELD_MINUTES_DURATION_EXT])) ? $data[self::FIELD_MINUTES_DURATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setMinutesDuration($value);
                } else if (is_array($value)) {
                    $this->setMinutesDuration(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setMinutesDuration(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMinutesDuration(new FHIRPositiveInt($ext));
            } else {
                $this->setMinutesDuration(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_SLOT, $data)) {
            if (is_array($data[self::FIELD_SLOT])) {
                foreach($data[self::FIELD_SLOT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addSlot($v);
                    } else {
                        $this->addSlot(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SLOT] instanceof FHIRReference) {
                $this->addSlot($data[self::FIELD_SLOT]);
            } else {
                $this->addSlot(new FHIRReference($data[self::FIELD_SLOT]));
            }
        }
        if (array_key_exists(self::FIELD_CREATED, $data) || array_key_exists(self::FIELD_CREATED_EXT, $data)) {
            $value = $data[self::FIELD_CREATED] ?? null;
            $ext = (isset($data[self::FIELD_CREATED_EXT]) && is_array($data[self::FIELD_CREATED_EXT])) ? $data[self::FIELD_CREATED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setCreated($value);
                } else if (is_array($value)) {
                    $this->setCreated(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setCreated(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCreated(new FHIRDateTime($ext));
            } else {
                $this->setCreated(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_COMMENT, $data) || array_key_exists(self::FIELD_COMMENT_EXT, $data)) {
            $value = $data[self::FIELD_COMMENT] ?? null;
            $ext = (isset($data[self::FIELD_COMMENT_EXT]) && is_array($data[self::FIELD_COMMENT_EXT])) ? $data[self::FIELD_COMMENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setComment($value);
                } else if (is_array($value)) {
                    $this->setComment(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setComment(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setComment(new FHIRString($ext));
            } else {
                $this->setComment(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_PATIENT_INSTRUCTION, $data) || array_key_exists(self::FIELD_PATIENT_INSTRUCTION_EXT, $data)) {
            $value = $data[self::FIELD_PATIENT_INSTRUCTION] ?? null;
            $ext = (isset($data[self::FIELD_PATIENT_INSTRUCTION_EXT]) && is_array($data[self::FIELD_PATIENT_INSTRUCTION_EXT])) ? $data[self::FIELD_PATIENT_INSTRUCTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPatientInstruction($value);
                } else if (is_array($value)) {
                    $this->setPatientInstruction(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPatientInstruction(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPatientInstruction(new FHIRString($ext));
            } else {
                $this->setPatientInstruction(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_BASED_ON, $data)) {
            if (is_array($data[self::FIELD_BASED_ON])) {
                foreach($data[self::FIELD_BASED_ON] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addBasedOn($v);
                    } else {
                        $this->addBasedOn(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_BASED_ON] instanceof FHIRReference) {
                $this->addBasedOn($data[self::FIELD_BASED_ON]);
            } else {
                $this->addBasedOn(new FHIRReference($data[self::FIELD_BASED_ON]));
            }
        }
        if (array_key_exists(self::FIELD_PARTICIPANT, $data)) {
            if (is_array($data[self::FIELD_PARTICIPANT])) {
                foreach($data[self::FIELD_PARTICIPANT] as $v) {
                    if ($v instanceof FHIRAppointmentParticipant) {
                        $this->addParticipant($v);
                    } else {
                        $this->addParticipant(new FHIRAppointmentParticipant($v));
                    }
                }
            } elseif ($data[self::FIELD_PARTICIPANT] instanceof FHIRAppointmentParticipant) {
                $this->addParticipant($data[self::FIELD_PARTICIPANT]);
            } else {
                $this->addParticipant(new FHIRAppointmentParticipant($data[self::FIELD_PARTICIPANT]));
            }
        }
        if (array_key_exists(self::FIELD_REQUESTED_PERIOD, $data)) {
            if (is_array($data[self::FIELD_REQUESTED_PERIOD])) {
                foreach($data[self::FIELD_REQUESTED_PERIOD] as $v) {
                    if ($v instanceof FHIRPeriod) {
                        $this->addRequestedPeriod($v);
                    } else {
                        $this->addRequestedPeriod(new FHIRPeriod($v));
                    }
                }
            } elseif ($data[self::FIELD_REQUESTED_PERIOD] instanceof FHIRPeriod) {
                $this->addRequestedPeriod($data[self::FIELD_REQUESTED_PERIOD]);
            } else {
                $this->addRequestedPeriod(new FHIRPeriod($data[self::FIELD_REQUESTED_PERIOD]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this appointment concern that are
     * defined by business processes and/or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this appointment concern that are
     * defined by business processes and/or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this appointment concern that are
     * defined by business processes and/or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] !== $this->identifier) {
            $this->_trackValuesRemoved(count($this->identifier));
            $this->identifier = [];
        }
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            $this->addIdentifier($v);
        }
        return $this;
    }

    /**
     * The free/busy status of an appointment.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The overall status of the Appointment. Each of the participants has their own
     * participation status which indicates their involvement in the process, however
     * this status indicates the shared status.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAppointmentStatus
     */
    public function getStatus(): null|FHIRAppointmentStatus
    {
        return $this->status;
    }

    /**
     * The free/busy status of an appointment.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The overall status of the Appointment. Each of the participants has their own
     * participation status which indicates their involvement in the process, however
     * this status indicates the shared status.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAppointmentStatus $status
     * @return static
     */
    public function setStatus(null|FHIRAppointmentStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRAppointmentStatus();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The coded reason for the appointment being cancelled. This is often used in
     * reporting/billing/futher processing to determine if further actions are
     * required, or specific fees apply.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getCancelationReason(): null|FHIRCodeableConcept
    {
        return $this->cancelationReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The coded reason for the appointment being cancelled. This is often used in
     * reporting/billing/futher processing to determine if further actions are
     * required, or specific fees apply.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $cancelationReason
     * @return static
     */
    public function setCancelationReason(null|FHIRCodeableConcept $cancelationReason = null): self
    {
        if (null === $cancelationReason) {
            $cancelationReason = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->cancelationReason, $cancelationReason);
        $this->cancelationReason = $cancelationReason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A broad categorization of the service that is to be performed during this
     * appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getServiceCategory(): null|array
    {
        return $this->serviceCategory;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A broad categorization of the service that is to be performed during this
     * appointment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $serviceCategory
     * @return static
     */
    public function addServiceCategory(null|FHIRCodeableConcept $serviceCategory = null): self
    {
        if (null === $serviceCategory) {
            $serviceCategory = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->serviceCategory[] = $serviceCategory;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A broad categorization of the service that is to be performed during this
     * appointment.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept ...$serviceCategory
     * @return static
     */
    public function setServiceCategory(FHIRCodeableConcept ...$serviceCategory): self
    {
        if ([] !== $this->serviceCategory) {
            $this->_trackValuesRemoved(count($this->serviceCategory));
            $this->serviceCategory = [];
        }
        if ([] === $serviceCategory) {
            return $this;
        }
        foreach($serviceCategory as $v) {
            $this->addServiceCategory($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specific service that is to be performed during this appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getServiceType(): null|array
    {
        return $this->serviceType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specific service that is to be performed during this appointment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $serviceType
     * @return static
     */
    public function addServiceType(null|FHIRCodeableConcept $serviceType = null): self
    {
        if (null === $serviceType) {
            $serviceType = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->serviceType[] = $serviceType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specific service that is to be performed during this appointment.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept ...$serviceType
     * @return static
     */
    public function setServiceType(FHIRCodeableConcept ...$serviceType): self
    {
        if ([] !== $this->serviceType) {
            $this->_trackValuesRemoved(count($this->serviceType));
            $this->serviceType = [];
        }
        if ([] === $serviceType) {
            return $this;
        }
        foreach($serviceType as $v) {
            $this->addServiceType($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specialty of a practitioner that would be required to perform the service
     * requested in this appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialty(): null|array
    {
        return $this->specialty;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specialty of a practitioner that would be required to perform the service
     * requested in this appointment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $specialty
     * @return static
     */
    public function addSpecialty(null|FHIRCodeableConcept $specialty = null): self
    {
        if (null === $specialty) {
            $specialty = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->specialty[] = $specialty;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specialty of a practitioner that would be required to perform the service
     * requested in this appointment.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept ...$specialty
     * @return static
     */
    public function setSpecialty(FHIRCodeableConcept ...$specialty): self
    {
        if ([] !== $this->specialty) {
            $this->_trackValuesRemoved(count($this->specialty));
            $this->specialty = [];
        }
        if ([] === $specialty) {
            return $this;
        }
        foreach($specialty as $v) {
            $this->addSpecialty($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The style of appointment or patient that has been booked in the slot (not
     * service type).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getAppointmentType(): null|FHIRCodeableConcept
    {
        return $this->appointmentType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The style of appointment or patient that has been booked in the slot (not
     * service type).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $appointmentType
     * @return static
     */
    public function setAppointmentType(null|FHIRCodeableConcept $appointmentType = null): self
    {
        if (null === $appointmentType) {
            $appointmentType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->appointmentType, $appointmentType);
        $this->appointmentType = $appointmentType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The coded reason that this appointment is being scheduled. This is more clinical
     * than administrative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode(): null|array
    {
        return $this->reasonCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The coded reason that this appointment is being scheduled. This is more clinical
     * than administrative.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return static
     */
    public function addReasonCode(null|FHIRCodeableConcept $reasonCode = null): self
    {
        if (null === $reasonCode) {
            $reasonCode = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The coded reason that this appointment is being scheduled. This is more clinical
     * than administrative.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept ...$reasonCode
     * @return static
     */
    public function setReasonCode(FHIRCodeableConcept ...$reasonCode): self
    {
        if ([] !== $this->reasonCode) {
            $this->_trackValuesRemoved(count($this->reasonCode));
            $this->reasonCode = [];
        }
        if ([] === $reasonCode) {
            return $this;
        }
        foreach($reasonCode as $v) {
            $this->addReasonCode($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason the appointment has been scheduled to take place, as specified using
     * information from another resource. When the patient arrives and the encounter
     * begins it may be used as the admission diagnosis. The indication will typically
     * be a Condition (with other resources referenced in the evidence.detail), or a
     * Procedure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getReasonReference(): null|array
    {
        return $this->reasonReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason the appointment has been scheduled to take place, as specified using
     * information from another resource. When the patient arrives and the encounter
     * begins it may be used as the admission diagnosis. The indication will typically
     * be a Condition (with other resources referenced in the evidence.detail), or a
     * Procedure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $reasonReference
     * @return static
     */
    public function addReasonReference(null|FHIRReference $reasonReference = null): self
    {
        if (null === $reasonReference) {
            $reasonReference = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason the appointment has been scheduled to take place, as specified using
     * information from another resource. When the patient arrives and the encounter
     * begins it may be used as the admission diagnosis. The indication will typically
     * be a Condition (with other resources referenced in the evidence.detail), or a
     * Procedure.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference ...$reasonReference
     * @return static
     */
    public function setReasonReference(FHIRReference ...$reasonReference): self
    {
        if ([] !== $this->reasonReference) {
            $this->_trackValuesRemoved(count($this->reasonReference));
            $this->reasonReference = [];
        }
        if ([] === $reasonReference) {
            return $this;
        }
        foreach($reasonReference as $v) {
            $this->addReasonReference($v);
        }
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The priority of the appointment. Can be used to make informed decisions if
     * needing to re-prioritize appointments. (The iCal Standard specifies as
     * undefined, 1 as highest, 9 as lowest priority).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt
     */
    public function getPriority(): null|FHIRUnsignedInt
    {
        return $this->priority;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The priority of the appointment. Can be used to make informed decisions if
     * needing to re-prioritize appointments. (The iCal Standard specifies as
     * undefined, 1 as highest, 9 as lowest priority).
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R4\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt $priority
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPriority(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $priority = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $priority && !($priority instanceof FHIRUnsignedInt)) {
            $priority = new FHIRUnsignedInt($priority);
        }
        $this->_trackValueSet($this->priority, $priority);
        if (!isset($this->_xmlLocations[self::FIELD_PRIORITY])) {
            $this->_xmlLocations[self::FIELD_PRIORITY] = [];
        }
        $this->_xmlLocations[self::FIELD_PRIORITY][0] = $xmlLocation;
        $this->priority = $priority;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The brief description of the appointment as would be shown on a subject line in
     * a meeting request, or appointment list. Detailed or expanded information should
     * be put in the comment field.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The brief description of the appointment as would be shown on a subject line in
     * a meeting request, or appointment list. Detailed or expanded information should
     * be put in the comment field.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $description
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $description && !($description instanceof FHIRString)) {
            $description = new FHIRString($description);
        }
        $this->_trackValueSet($this->description, $description);
        if (!isset($this->_xmlLocations[self::FIELD_DESCRIPTION])) {
            $this->_xmlLocations[self::FIELD_DESCRIPTION] = [];
        }
        $this->_xmlLocations[self::FIELD_DESCRIPTION][0] = $xmlLocation;
        $this->description = $description;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information to support the appointment provided when making the
     * appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getSupportingInformation(): null|array
    {
        return $this->supportingInformation;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information to support the appointment provided when making the
     * appointment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $supportingInformation
     * @return static
     */
    public function addSupportingInformation(null|FHIRReference $supportingInformation = null): self
    {
        if (null === $supportingInformation) {
            $supportingInformation = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information to support the appointment provided when making the
     * appointment.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference ...$supportingInformation
     * @return static
     */
    public function setSupportingInformation(FHIRReference ...$supportingInformation): self
    {
        if ([] !== $this->supportingInformation) {
            $this->_trackValuesRemoved(count($this->supportingInformation));
            $this->supportingInformation = [];
        }
        if ([] === $supportingInformation) {
            return $this;
        }
        foreach($supportingInformation as $v) {
            $this->addSupportingInformation($v);
        }
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date/Time that the appointment is to take place.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    public function getStart(): null|FHIRInstant
    {
        return $this->start;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date/Time that the appointment is to take place.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R4\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant $start
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setStart(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $start = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $start && !($start instanceof FHIRInstant)) {
            $start = new FHIRInstant($start);
        }
        $this->_trackValueSet($this->start, $start);
        if (!isset($this->_xmlLocations[self::FIELD_START])) {
            $this->_xmlLocations[self::FIELD_START] = [];
        }
        $this->_xmlLocations[self::FIELD_START][0] = $xmlLocation;
        $this->start = $start;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date/Time that the appointment is to conclude.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    public function getEnd(): null|FHIRInstant
    {
        return $this->end;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date/Time that the appointment is to conclude.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R4\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant $end
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setEnd(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $end = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $end && !($end instanceof FHIRInstant)) {
            $end = new FHIRInstant($end);
        }
        $this->_trackValueSet($this->end, $end);
        if (!isset($this->_xmlLocations[self::FIELD_END])) {
            $this->_xmlLocations[self::FIELD_END] = [];
        }
        $this->_xmlLocations[self::FIELD_END][0] = $xmlLocation;
        $this->end = $end;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number of minutes that the appointment is to take. This can be less than the
     * duration between the start and end times. For example, where the actual time of
     * appointment is only an estimate or if a 30 minute appointment is being
     * requested, but any time would work. Also, if there is, for example, a planned 15
     * minute break in the middle of a long appointment, the duration may be 15 minutes
     * less than the difference between the start and end.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    public function getMinutesDuration(): null|FHIRPositiveInt
    {
        return $this->minutesDuration;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number of minutes that the appointment is to take. This can be less than the
     * duration between the start and end times. For example, where the actual time of
     * appointment is only an estimate or if a 30 minute appointment is being
     * requested, but any time would work. Also, if there is, for example, a planned 15
     * minute break in the middle of a long appointment, the duration may be 15 minutes
     * less than the difference between the start and end.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R4\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt $minutesDuration
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMinutesDuration(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $minutesDuration = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $minutesDuration && !($minutesDuration instanceof FHIRPositiveInt)) {
            $minutesDuration = new FHIRPositiveInt($minutesDuration);
        }
        $this->_trackValueSet($this->minutesDuration, $minutesDuration);
        if (!isset($this->_xmlLocations[self::FIELD_MINUTES_DURATION])) {
            $this->_xmlLocations[self::FIELD_MINUTES_DURATION] = [];
        }
        $this->_xmlLocations[self::FIELD_MINUTES_DURATION][0] = $xmlLocation;
        $this->minutesDuration = $minutesDuration;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The slots from the participants' schedules that will be filled by the
     * appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getSlot(): null|array
    {
        return $this->slot;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The slots from the participants' schedules that will be filled by the
     * appointment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $slot
     * @return static
     */
    public function addSlot(null|FHIRReference $slot = null): self
    {
        if (null === $slot) {
            $slot = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->slot[] = $slot;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The slots from the participants' schedules that will be filled by the
     * appointment.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference ...$slot
     * @return static
     */
    public function setSlot(FHIRReference ...$slot): self
    {
        if ([] !== $this->slot) {
            $this->_trackValuesRemoved(count($this->slot));
            $this->slot = [];
        }
        if ([] === $slot) {
            return $this;
        }
        foreach($slot as $v) {
            $this->addSlot($v);
        }
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date that this appointment was initially created. This could be different to
     * the meta.lastModified value on the initial entry, as this could have been before
     * the resource was created on the FHIR server, and should remain unchanged over
     * the lifespan of the appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getCreated(): null|FHIRDateTime
    {
        return $this->created;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date that this appointment was initially created. This could be different to
     * the meta.lastModified value on the initial entry, as this could have been before
     * the resource was created on the FHIR server, and should remain unchanged over
     * the lifespan of the appointment.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R4\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $created
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCreated(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $created = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $created && !($created instanceof FHIRDateTime)) {
            $created = new FHIRDateTime($created);
        }
        $this->_trackValueSet($this->created, $created);
        if (!isset($this->_xmlLocations[self::FIELD_CREATED])) {
            $this->_xmlLocations[self::FIELD_CREATED] = [];
        }
        $this->_xmlLocations[self::FIELD_CREATED][0] = $xmlLocation;
        $this->created = $created;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional comments about the appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getComment(): null|FHIRString
    {
        return $this->comment;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional comments about the appointment.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $comment
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setComment(null|string|FHIRStringPrimitive|FHIRString $comment = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $comment && !($comment instanceof FHIRString)) {
            $comment = new FHIRString($comment);
        }
        $this->_trackValueSet($this->comment, $comment);
        if (!isset($this->_xmlLocations[self::FIELD_COMMENT])) {
            $this->_xmlLocations[self::FIELD_COMMENT] = [];
        }
        $this->_xmlLocations[self::FIELD_COMMENT][0] = $xmlLocation;
        $this->comment = $comment;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * While Appointment.comment contains information for internal use,
     * Appointment.patientInstructions is used to capture patient facing information
     * about the Appointment (e.g. please bring your referral or fast from 8pm night
     * before).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getPatientInstruction(): null|FHIRString
    {
        return $this->patientInstruction;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * While Appointment.comment contains information for internal use,
     * Appointment.patientInstructions is used to capture patient facing information
     * about the Appointment (e.g. please bring your referral or fast from 8pm night
     * before).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $patientInstruction
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPatientInstruction(null|string|FHIRStringPrimitive|FHIRString $patientInstruction = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $patientInstruction && !($patientInstruction instanceof FHIRString)) {
            $patientInstruction = new FHIRString($patientInstruction);
        }
        $this->_trackValueSet($this->patientInstruction, $patientInstruction);
        if (!isset($this->_xmlLocations[self::FIELD_PATIENT_INSTRUCTION])) {
            $this->_xmlLocations[self::FIELD_PATIENT_INSTRUCTION] = [];
        }
        $this->_xmlLocations[self::FIELD_PATIENT_INSTRUCTION][0] = $xmlLocation;
        $this->patientInstruction = $patientInstruction;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service request this appointment is allocated to assess (e.g. incoming
     * referral or procedure request).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getBasedOn(): null|array
    {
        return $this->basedOn;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service request this appointment is allocated to assess (e.g. incoming
     * referral or procedure request).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $basedOn
     * @return static
     */
    public function addBasedOn(null|FHIRReference $basedOn = null): self
    {
        if (null === $basedOn) {
            $basedOn = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service request this appointment is allocated to assess (e.g. incoming
     * referral or procedure request).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference ...$basedOn
     * @return static
     */
    public function setBasedOn(FHIRReference ...$basedOn): self
    {
        if ([] !== $this->basedOn) {
            $this->_trackValuesRemoved(count($this->basedOn));
            $this->basedOn = [];
        }
        if ([] === $basedOn) {
            return $this;
        }
        foreach($basedOn as $v) {
            $this->addBasedOn($v);
        }
        return $this;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * List of participants involved in the appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant[]
     */
    public function getParticipant(): null|array
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant $participant
     * @return static
     */
    public function addParticipant(null|FHIRAppointmentParticipant $participant = null): self
    {
        if (null === $participant) {
            $participant = new FHIRAppointmentParticipant();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant ...$participant
     * @return static
     */
    public function setParticipant(FHIRAppointmentParticipant ...$participant): self
    {
        if ([] !== $this->participant) {
            $this->_trackValuesRemoved(count($this->participant));
            $this->participant = [];
        }
        if ([] === $participant) {
            return $this;
        }
        foreach($participant as $v) {
            $this->addParticipant($v);
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of date ranges (potentially including times) that the appointment is
     * preferred to be scheduled within. The duration (usually in minutes) could also
     * be provided to indicate the length of the appointment to fill and populate the
     * start/end times for the actual allocated time. However, in other situations the
     * duration may be calculated by the scheduling system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod[]
     */
    public function getRequestedPeriod(): null|array
    {
        return $this->requestedPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of date ranges (potentially including times) that the appointment is
     * preferred to be scheduled within. The duration (usually in minutes) could also
     * be provided to indicate the length of the appointment to fill and populate the
     * start/end times for the actual allocated time. However, in other situations the
     * duration may be calculated by the scheduling system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $requestedPeriod
     * @return static
     */
    public function addRequestedPeriod(null|FHIRPeriod $requestedPeriod = null): self
    {
        if (null === $requestedPeriod) {
            $requestedPeriod = new FHIRPeriod();
        }
        $this->_trackValueAdded();
        $this->requestedPeriod[] = $requestedPeriod;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of date ranges (potentially including times) that the appointment is
     * preferred to be scheduled within. The duration (usually in minutes) could also
     * be provided to indicate the length of the appointment to fill and populate the
     * start/end times for the actual allocated time. However, in other situations the
     * duration may be calculated by the scheduling system.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod ...$requestedPeriod
     * @return static
     */
    public function setRequestedPeriod(FHIRPeriod ...$requestedPeriod): self
    {
        if ([] !== $this->requestedPeriod) {
            $this->_trackValuesRemoved(count($this->requestedPeriod));
            $this->requestedPeriod = [];
        }
        if ([] === $requestedPeriod) {
            return $this;
        }
        foreach($requestedPeriod as $v) {
            $this->addRequestedPeriod($v);
        }
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCancelationReason())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CANCELATION_REASON] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getServiceCategory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SERVICE_CATEGORY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getServiceType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SERVICE_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSpecialty())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SPECIALTY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getAppointmentType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_APPOINTMENT_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPriority())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIORITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSupportingInformation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUPPORTING_INFORMATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStart())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_START] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEnd())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_END] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinutesDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MINUTES_DURATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSlot())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SLOT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCreated())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CREATED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getComment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatientInstruction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT_INSTRUCTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BASED_ON, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getParticipant())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARTICIPANT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRequestedPeriod())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REQUESTED_PERIOD, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CANCELATION_REASON])) {
            $v = $this->getCancelationReason();
            foreach($validationRules[self::FIELD_CANCELATION_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_CANCELATION_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CANCELATION_REASON])) {
                        $errs[self::FIELD_CANCELATION_REASON] = [];
                    }
                    $errs[self::FIELD_CANCELATION_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICE_CATEGORY])) {
            $v = $this->getServiceCategory();
            foreach($validationRules[self::FIELD_SERVICE_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_SERVICE_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICE_CATEGORY])) {
                        $errs[self::FIELD_SERVICE_CATEGORY] = [];
                    }
                    $errs[self::FIELD_SERVICE_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICE_TYPE])) {
            $v = $this->getServiceType();
            foreach($validationRules[self::FIELD_SERVICE_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_SERVICE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICE_TYPE])) {
                        $errs[self::FIELD_SERVICE_TYPE] = [];
                    }
                    $errs[self::FIELD_SERVICE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIALTY])) {
            $v = $this->getSpecialty();
            foreach($validationRules[self::FIELD_SPECIALTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_SPECIALTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIALTY])) {
                        $errs[self::FIELD_SPECIALTY] = [];
                    }
                    $errs[self::FIELD_SPECIALTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_APPOINTMENT_TYPE])) {
            $v = $this->getAppointmentType();
            foreach($validationRules[self::FIELD_APPOINTMENT_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_APPOINTMENT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPOINTMENT_TYPE])) {
                        $errs[self::FIELD_APPOINTMENT_TYPE] = [];
                    }
                    $errs[self::FIELD_APPOINTMENT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_CODE])) {
            $v = $this->getReasonCode();
            foreach($validationRules[self::FIELD_REASON_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_REASON_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_CODE])) {
                        $errs[self::FIELD_REASON_CODE] = [];
                    }
                    $errs[self::FIELD_REASON_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_REFERENCE])) {
            $v = $this->getReasonReference();
            foreach($validationRules[self::FIELD_REASON_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_REASON_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_REFERENCE])) {
                        $errs[self::FIELD_REASON_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REASON_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIORITY])) {
            $v = $this->getPriority();
            foreach($validationRules[self::FIELD_PRIORITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_PRIORITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIORITY])) {
                        $errs[self::FIELD_PRIORITY] = [];
                    }
                    $errs[self::FIELD_PRIORITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPORTING_INFORMATION])) {
            $v = $this->getSupportingInformation();
            foreach($validationRules[self::FIELD_SUPPORTING_INFORMATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_SUPPORTING_INFORMATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPORTING_INFORMATION])) {
                        $errs[self::FIELD_SUPPORTING_INFORMATION] = [];
                    }
                    $errs[self::FIELD_SUPPORTING_INFORMATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_START])) {
            $v = $this->getStart();
            foreach($validationRules[self::FIELD_START] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_START, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_START])) {
                        $errs[self::FIELD_START] = [];
                    }
                    $errs[self::FIELD_START][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_END])) {
            $v = $this->getEnd();
            foreach($validationRules[self::FIELD_END] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_END, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_END])) {
                        $errs[self::FIELD_END] = [];
                    }
                    $errs[self::FIELD_END][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MINUTES_DURATION])) {
            $v = $this->getMinutesDuration();
            foreach($validationRules[self::FIELD_MINUTES_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_MINUTES_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MINUTES_DURATION])) {
                        $errs[self::FIELD_MINUTES_DURATION] = [];
                    }
                    $errs[self::FIELD_MINUTES_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SLOT])) {
            $v = $this->getSlot();
            foreach($validationRules[self::FIELD_SLOT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_SLOT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SLOT])) {
                        $errs[self::FIELD_SLOT] = [];
                    }
                    $errs[self::FIELD_SLOT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CREATED])) {
            $v = $this->getCreated();
            foreach($validationRules[self::FIELD_CREATED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_CREATED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CREATED])) {
                        $errs[self::FIELD_CREATED] = [];
                    }
                    $errs[self::FIELD_CREATED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMMENT])) {
            $v = $this->getComment();
            foreach($validationRules[self::FIELD_COMMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_COMMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMMENT])) {
                        $errs[self::FIELD_COMMENT] = [];
                    }
                    $errs[self::FIELD_COMMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT_INSTRUCTION])) {
            $v = $this->getPatientInstruction();
            foreach($validationRules[self::FIELD_PATIENT_INSTRUCTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_PATIENT_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT_INSTRUCTION])) {
                        $errs[self::FIELD_PATIENT_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_PATIENT_INSTRUCTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASED_ON])) {
            $v = $this->getBasedOn();
            foreach($validationRules[self::FIELD_BASED_ON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_BASED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASED_ON])) {
                        $errs[self::FIELD_BASED_ON] = [];
                    }
                    $errs[self::FIELD_BASED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARTICIPANT])) {
            $v = $this->getParticipant();
            foreach($validationRules[self::FIELD_PARTICIPANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_PARTICIPANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTICIPANT])) {
                        $errs[self::FIELD_PARTICIPANT] = [];
                    }
                    $errs[self::FIELD_PARTICIPANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUESTED_PERIOD])) {
            $v = $this->getRequestedPeriod();
            foreach($validationRules[self::FIELD_REQUESTED_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT, self::FIELD_REQUESTED_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUESTED_PERIOD])) {
                        $errs[self::FIELD_REQUESTED_PERIOD] = [];
                    }
                    $errs[self::FIELD_REQUESTED_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAppointment $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRAppointment)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_IDENTIFIER === $childName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STATUS === $childName) {
                $type->setStatus(FHIRAppointmentStatus::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CANCELATION_REASON === $childName) {
                $type->setCancelationReason(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SERVICE_CATEGORY === $childName) {
                $type->addServiceCategory(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SERVICE_TYPE === $childName) {
                $type->addServiceType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SPECIALTY === $childName) {
                $type->addSpecialty(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_APPOINTMENT_TYPE === $childName) {
                $type->setAppointmentType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REASON_CODE === $childName) {
                $type->addReasonCode(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REASON_REFERENCE === $childName) {
                $type->addReasonReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PRIORITY === $childName) {
                $type->setPriority(FHIRUnsignedInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SUPPORTING_INFORMATION === $childName) {
                $type->addSupportingInformation(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_START === $childName) {
                $type->setStart(FHIRInstant::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_END === $childName) {
                $type->setEnd(FHIRInstant::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MINUTES_DURATION === $childName) {
                $type->setMinutesDuration(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SLOT === $childName) {
                $type->addSlot(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CREATED === $childName) {
                $type->setCreated(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_COMMENT === $childName) {
                $type->setComment(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PATIENT_INSTRUCTION === $childName) {
                $type->setPatientInstruction(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_BASED_ON === $childName) {
                $type->addBasedOn(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PARTICIPANT === $childName) {
                $type->addParticipant(FHIRAppointmentParticipant::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REQUESTED_PERIOD === $childName) {
                $type->addRequestedPeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn, $config));
                }
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_META === $childName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMPLICIT_RULES === $childName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_PRIORITY])) {
            $pt = $type->getPriority();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PRIORITY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPriority((string)$attributes[self::FIELD_PRIORITY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_START])) {
            $pt = $type->getStart();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_START], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setStart((string)$attributes[self::FIELD_START], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_END])) {
            $pt = $type->getEnd();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_END], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setEnd((string)$attributes[self::FIELD_END], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MINUTES_DURATION])) {
            $pt = $type->getMinutesDuration();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MINUTES_DURATION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMinutesDuration((string)$attributes[self::FIELD_MINUTES_DURATION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CREATED])) {
            $pt = $type->getCreated();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CREATED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCreated((string)$attributes[self::FIELD_CREATED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_COMMENT])) {
            $pt = $type->getComment();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_COMMENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setComment((string)$attributes[self::FIELD_COMMENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATIENT_INSTRUCTION])) {
            $pt = $type->getPatientInstruction();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATIENT_INSTRUCTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatientInstruction((string)$attributes[self::FIELD_PATIENT_INSTRUCTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'Appointment', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_PRIORITY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPriority())) {
            $xw->writeAttribute(self::FIELD_PRIORITY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_START] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getStart())) {
            $xw->writeAttribute(self::FIELD_START, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_END] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getEnd())) {
            $xw->writeAttribute(self::FIELD_END, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_MINUTES_DURATION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMinutesDuration())) {
            $xw->writeAttribute(self::FIELD_MINUTES_DURATION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_CREATED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCreated())) {
            $xw->writeAttribute(self::FIELD_CREATED, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_COMMENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getComment())) {
            $xw->writeAttribute(self::FIELD_COMMENT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_PATIENT_INSTRUCTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPatientInstruction())) {
            $xw->writeAttribute(self::FIELD_PATIENT_INSTRUCTION, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStatus())) {
            $xw->startElement(self::FIELD_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCancelationReason())) {
            $xw->startElement(self::FIELD_CANCELATION_REASON);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getServiceCategory() as $v) {
            $xw->startElement(self::FIELD_SERVICE_CATEGORY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getServiceType() as $v) {
            $xw->startElement(self::FIELD_SERVICE_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSpecialty() as $v) {
            $xw->startElement(self::FIELD_SPECIALTY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAppointmentType())) {
            $xw->startElement(self::FIELD_APPOINTMENT_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getReasonCode() as $v) {
            $xw->startElement(self::FIELD_REASON_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getReasonReference() as $v) {
            $xw->startElement(self::FIELD_REASON_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_PRIORITY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPriority())) {
            $xw->startElement(self::FIELD_PRIORITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSupportingInformation() as $v) {
            $xw->startElement(self::FIELD_SUPPORTING_INFORMATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_START] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getStart())) {
            $xw->startElement(self::FIELD_START);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_END] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getEnd())) {
            $xw->startElement(self::FIELD_END);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_MINUTES_DURATION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMinutesDuration())) {
            $xw->startElement(self::FIELD_MINUTES_DURATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSlot() as $v) {
            $xw->startElement(self::FIELD_SLOT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_CREATED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCreated())) {
            $xw->startElement(self::FIELD_CREATED);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_COMMENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getComment())) {
            $xw->startElement(self::FIELD_COMMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_PATIENT_INSTRUCTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPatientInstruction())) {
            $xw->startElement(self::FIELD_PATIENT_INSTRUCTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getBasedOn() as $v) {
            $xw->startElement(self::FIELD_BASED_ON);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getParticipant() as $v) {
            $xw->startElement(self::FIELD_PARTICIPANT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getRequestedPeriod() as $v) {
            $xw->startElement(self::FIELD_REQUESTED_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRAppointmentStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCancelationReason())) {
            $out->{self::FIELD_CANCELATION_REASON} = $v;
        }
        if ([] !== ($vs = $this->getServiceCategory())) {
            $out->{self::FIELD_SERVICE_CATEGORY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SERVICE_CATEGORY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getServiceType())) {
            $out->{self::FIELD_SERVICE_TYPE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SERVICE_TYPE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSpecialty())) {
            $out->{self::FIELD_SPECIALTY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SPECIALTY}[] = $v;
            }
        }
        if (null !== ($v = $this->getAppointmentType())) {
            $out->{self::FIELD_APPOINTMENT_TYPE} = $v;
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            $out->{self::FIELD_REASON_CODE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_REASON_CODE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            $out->{self::FIELD_REASON_REFERENCE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_REASON_REFERENCE}[] = $v;
            }
        }
        if (null !== ($v = $this->getPriority())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PRIORITY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PRIORITY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getSupportingInformation())) {
            $out->{self::FIELD_SUPPORTING_INFORMATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SUPPORTING_INFORMATION}[] = $v;
            }
        }
        if (null !== ($v = $this->getStart())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_START} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_START_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getEnd())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_END} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_END_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMinutesDuration())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MINUTES_DURATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MINUTES_DURATION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getSlot())) {
            $out->{self::FIELD_SLOT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SLOT}[] = $v;
            }
        }
        if (null !== ($v = $this->getCreated())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CREATED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CREATED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getComment())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COMMENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COMMENT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatientInstruction())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATIENT_INSTRUCTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATIENT_INSTRUCTION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            $out->{self::FIELD_BASED_ON} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_BASED_ON}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getParticipant())) {
            $out->{self::FIELD_PARTICIPANT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PARTICIPANT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getRequestedPeriod())) {
            $out->{self::FIELD_REQUESTED_PERIOD} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_REQUESTED_PERIOD}[] = $v;
            }
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}