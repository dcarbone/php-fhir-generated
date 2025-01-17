<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAppointmentStatus;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionTypeMap;

/**
 * A booking of a healthcare event among patient(s), practitioner(s), related
 * person(s) and/or device(s) for a specific date/time. This may result in one or
 * more Encounter(s).
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRAppointment extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_APPOINTMENT;


    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_CANCELATION_REASON = 'cancelationReason';
    public const FIELD_SERVICE_CATEGORY = 'serviceCategory';
    public const FIELD_SERVICE_TYPE = 'serviceType';
    public const FIELD_SPECIALTY = 'specialty';
    public const FIELD_APPOINTMENT_TYPE = 'appointmentType';
    public const FIELD_REASON_CODE = 'reasonCode';
    public const FIELD_REASON_REFERENCE = 'reasonReference';
    public const FIELD_PRIORITY = 'priority';
    public const FIELD_PRIORITY_EXT = '_priority';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_SUPPORTING_INFORMATION = 'supportingInformation';
    public const FIELD_START = 'start';
    public const FIELD_START_EXT = '_start';
    public const FIELD_END = 'end';
    public const FIELD_END_EXT = '_end';
    public const FIELD_MINUTES_DURATION = 'minutesDuration';
    public const FIELD_MINUTES_DURATION_EXT = '_minutesDuration';
    public const FIELD_SLOT = 'slot';
    public const FIELD_CREATED = 'created';
    public const FIELD_CREATED_EXT = '_created';
    public const FIELD_COMMENT = 'comment';
    public const FIELD_COMMENT_EXT = '_comment';
    public const FIELD_PATIENT_INSTRUCTION = 'patientInstruction';
    public const FIELD_PATIENT_INSTRUCTION_EXT = '_patientInstruction';
    public const FIELD_BASED_ON = 'basedOn';
    public const FIELD_PARTICIPANT = 'participant';
    public const FIELD_REQUESTED_PERIOD = 'requestedPeriod';

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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The overall status of the Appointment. Each of the participants has their own
     * participation status which indicates their involvement in the process, however
     * this status indicates the shared status.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAppointmentStatus 
     */
    protected FHIRAppointmentStatus $status;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $cancelationReason;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A broad categorization of the service that is to be performed during this
     * appointment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $serviceCategory;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specific service that is to be performed during this appointment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $serviceType;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specialty of a practitioner that would be required to perform the service
     * requested in this appointment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $specialty;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The style of appointment or patient that has been booked in the slot (not
     * service type).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $appointmentType;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The coded reason that this appointment is being scheduled. This is more clinical
     * than administrative.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $reasonCode;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] 
     */
    protected array $reasonReference;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The priority of the appointment. Can be used to make informed decisions if
     * needing to re-prioritize appointments. (The iCal Standard specifies as
     * undefined, 1 as highest, 9 as lowest priority).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $priority;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The brief description of the appointment as would be shown on a subject line in
     * a meeting request, or appointment list. Detailed or expanded information should
     * be put in the comment field.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $description;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information to support the appointment provided when making the
     * appointment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] 
     */
    protected array $supportingInformation;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $start;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $end;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $minutesDuration;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The slots from the participants' schedules that will be filled by the
     * appointment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] 
     */
    protected array $slot;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $created;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional comments about the appointment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $comment;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $patientInstruction;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service request this appointment is allocated to assess (e.g. incoming
     * referral or procedure request).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] 
     */
    protected array $basedOn;
    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * List of participants involved in the appointment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant[] 
     */
    protected array $participant;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod[] 
     */
    protected array $requestedPeriod;

    /** Default validation map for fields in type Appointment */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_PARTICIPANT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRAppointment Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAppointmentStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $cancelationReason
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $serviceCategory
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $serviceType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $specialty
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $appointmentType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $reasonCode
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] $reasonReference
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt $priority
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] $supportingInformation
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInstant $start
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInstant $end
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt $minutesDuration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] $slot
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $created
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $comment
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $patientInstruction
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] $basedOn
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant[] $participant
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod[] $requestedPeriod
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRStringPrimitive|FHIRString $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $identifier = null,
                                null|FHIRAppointmentStatus $status = null,
                                null|FHIRCodeableConcept $cancelationReason = null,
                                null|iterable $serviceCategory = null,
                                null|iterable $serviceType = null,
                                null|iterable $specialty = null,
                                null|FHIRCodeableConcept $appointmentType = null,
                                null|iterable $reasonCode = null,
                                null|iterable $reasonReference = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $priority = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|iterable $supportingInformation = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $start = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $end = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $minutesDuration = null,
                                null|iterable $slot = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $created = null,
                                null|string|FHIRStringPrimitive|FHIRString $comment = null,
                                null|string|FHIRStringPrimitive|FHIRString $patientInstruction = null,
                                null|iterable $basedOn = null,
                                null|iterable $participant = null,
                                null|iterable $requestedPeriod = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(id: $id,
                            meta: $meta,
                            implicitRules: $implicitRules,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $cancelationReason) {
            $this->setCancelationReason($cancelationReason);
        }
        if (null !== $serviceCategory) {
            $this->setServiceCategory(...$serviceCategory);
        }
        if (null !== $serviceType) {
            $this->setServiceType(...$serviceType);
        }
        if (null !== $specialty) {
            $this->setSpecialty(...$specialty);
        }
        if (null !== $appointmentType) {
            $this->setAppointmentType($appointmentType);
        }
        if (null !== $reasonCode) {
            $this->setReasonCode(...$reasonCode);
        }
        if (null !== $reasonReference) {
            $this->setReasonReference(...$reasonReference);
        }
        if (null !== $priority) {
            $this->setPriority($priority);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $supportingInformation) {
            $this->setSupportingInformation(...$supportingInformation);
        }
        if (null !== $start) {
            $this->setStart($start);
        }
        if (null !== $end) {
            $this->setEnd($end);
        }
        if (null !== $minutesDuration) {
            $this->setMinutesDuration($minutesDuration);
        }
        if (null !== $slot) {
            $this->setSlot(...$slot);
        }
        if (null !== $created) {
            $this->setCreated($created);
        }
        if (null !== $comment) {
            $this->setComment($comment);
        }
        if (null !== $patientInstruction) {
            $this->setPatientInstruction($patientInstruction);
        }
        if (null !== $basedOn) {
            $this->setBasedOn(...$basedOn);
        }
        if (null !== $participant) {
            $this->setParticipant(...$participant);
        }
        if (null !== $requestedPeriod) {
            $this->setRequestedPeriod(...$requestedPeriod);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier) || [] === $this->identifier) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier): self
    {
        if (!isset($this->identifier)) {
            $this->identifier = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The overall status of the Appointment. Each of the participants has their own
     * participation status which indicates their involvement in the process, however
     * this status indicates the shared status.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAppointmentStatus
     */
    public function getStatus(): null|FHIRAppointmentStatus
    {
        return $this->status ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The overall status of the Appointment. Each of the participants has their own
     * participation status which indicates their involvement in the process, however
     * this status indicates the shared status.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAppointmentStatus $status
     * @return static
     */
    public function setStatus(null|FHIRAppointmentStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCancelationReason(): null|FHIRCodeableConcept
    {
        return $this->cancelationReason ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $cancelationReason
     * @return static
     */
    public function setCancelationReason(null|FHIRCodeableConcept $cancelationReason): self
    {
        if (null === $cancelationReason) {
            unset($this->cancelationReason);
            return $this;
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getServiceCategory(): array
    {
        return $this->serviceCategory ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getServiceCategoryIterator(): iterable
    {
        if (!isset($this->serviceCategory) || [] === $this->serviceCategory) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->serviceCategory);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $serviceCategory
     * @return static
     */
    public function addServiceCategory(FHIRCodeableConcept $serviceCategory): self
    {
        if (!isset($this->serviceCategory)) {
            $this->serviceCategory = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$serviceCategory
     * @return static
     */
    public function setServiceCategory(FHIRCodeableConcept ...$serviceCategory): self
    {
        $this->serviceCategory = $serviceCategory;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getServiceType(): array
    {
        return $this->serviceType ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getServiceTypeIterator(): iterable
    {
        if (!isset($this->serviceType) || [] === $this->serviceType) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->serviceType);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specific service that is to be performed during this appointment.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $serviceType
     * @return static
     */
    public function addServiceType(FHIRCodeableConcept $serviceType): self
    {
        if (!isset($this->serviceType)) {
            $this->serviceType = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$serviceType
     * @return static
     */
    public function setServiceType(FHIRCodeableConcept ...$serviceType): self
    {
        $this->serviceType = $serviceType;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialty(): array
    {
        return $this->specialty ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getSpecialtyIterator(): iterable
    {
        if (!isset($this->specialty) || [] === $this->specialty) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->specialty);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $specialty
     * @return static
     */
    public function addSpecialty(FHIRCodeableConcept $specialty): self
    {
        if (!isset($this->specialty)) {
            $this->specialty = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$specialty
     * @return static
     */
    public function setSpecialty(FHIRCodeableConcept ...$specialty): self
    {
        $this->specialty = $specialty;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getAppointmentType(): null|FHIRCodeableConcept
    {
        return $this->appointmentType ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $appointmentType
     * @return static
     */
    public function setAppointmentType(null|FHIRCodeableConcept $appointmentType): self
    {
        if (null === $appointmentType) {
            unset($this->appointmentType);
            return $this;
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode(): array
    {
        return $this->reasonCode ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getReasonCodeIterator(): iterable
    {
        if (!isset($this->reasonCode) || [] === $this->reasonCode) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->reasonCode);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return static
     */
    public function addReasonCode(FHIRCodeableConcept $reasonCode): self
    {
        if (!isset($this->reasonCode)) {
            $this->reasonCode = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$reasonCode
     * @return static
     */
    public function setReasonCode(FHIRCodeableConcept ...$reasonCode): self
    {
        $this->reasonCode = $reasonCode;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[]
     */
    public function getReasonReference(): array
    {
        return $this->reasonReference ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference>
     */
    public function getReasonReferenceIterator(): iterable
    {
        if (!isset($this->reasonReference) || [] === $this->reasonReference) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->reasonReference);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $reasonReference
     * @return static
     */
    public function addReasonReference(FHIRReference $reasonReference): self
    {
        if (!isset($this->reasonReference)) {
            $this->reasonReference = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference ...$reasonReference
     * @return static
     */
    public function setReasonReference(FHIRReference ...$reasonReference): self
    {
        $this->reasonReference = $reasonReference;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt
     */
    public function getPriority(): null|FHIRUnsignedInt
    {
        return $this->priority ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt $priority
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPriority(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $priority,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $priority) {
            unset($this->priority);
            return $this;
        }
        if (!($priority instanceof FHIRUnsignedInt)) {
            $priority = new FHIRUnsignedInt(value: $priority);
        }
        if (null !== $valueXMLLocation) {
            $priority->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $priority->_getValueXMLLocation()) {
            $priority->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $description
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRString)) {
            $description = new FHIRString(value: $description);
        }
        if (null !== $valueXMLLocation) {
            $description->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $description->_getValueXMLLocation()) {
            $description->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[]
     */
    public function getSupportingInformation(): array
    {
        return $this->supportingInformation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference>
     */
    public function getSupportingInformationIterator(): iterable
    {
        if (!isset($this->supportingInformation) || [] === $this->supportingInformation) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->supportingInformation);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information to support the appointment provided when making the
     * appointment.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $supportingInformation
     * @return static
     */
    public function addSupportingInformation(FHIRReference $supportingInformation): self
    {
        if (!isset($this->supportingInformation)) {
            $this->supportingInformation = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference ...$supportingInformation
     * @return static
     */
    public function setSupportingInformation(FHIRReference ...$supportingInformation): self
    {
        $this->supportingInformation = $supportingInformation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInstant
     */
    public function getStart(): null|FHIRInstant
    {
        return $this->start ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInstant $start
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStart(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $start,
                             null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $start) {
            unset($this->start);
            return $this;
        }
        if (!($start instanceof FHIRInstant)) {
            $start = new FHIRInstant(value: $start);
        }
        if (null !== $valueXMLLocation) {
            $start->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $start->_getValueXMLLocation()) {
            $start->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInstant
     */
    public function getEnd(): null|FHIRInstant
    {
        return $this->end ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInstant $end
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setEnd(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $end,
                           null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $end) {
            unset($this->end);
            return $this;
        }
        if (!($end instanceof FHIRInstant)) {
            $end = new FHIRInstant(value: $end);
        }
        if (null !== $valueXMLLocation) {
            $end->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $end->_getValueXMLLocation()) {
            $end->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt
     */
    public function getMinutesDuration(): null|FHIRPositiveInt
    {
        return $this->minutesDuration ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt $minutesDuration
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMinutesDuration(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $minutesDuration,
                                       null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $minutesDuration) {
            unset($this->minutesDuration);
            return $this;
        }
        if (!($minutesDuration instanceof FHIRPositiveInt)) {
            $minutesDuration = new FHIRPositiveInt(value: $minutesDuration);
        }
        if (null !== $valueXMLLocation) {
            $minutesDuration->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $minutesDuration->_getValueXMLLocation()) {
            $minutesDuration->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[]
     */
    public function getSlot(): array
    {
        return $this->slot ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference>
     */
    public function getSlotIterator(): iterable
    {
        if (!isset($this->slot) || [] === $this->slot) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->slot);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The slots from the participants' schedules that will be filled by the
     * appointment.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $slot
     * @return static
     */
    public function addSlot(FHIRReference $slot): self
    {
        if (!isset($this->slot)) {
            $this->slot = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference ...$slot
     * @return static
     */
    public function setSlot(FHIRReference ...$slot): self
    {
        $this->slot = $slot;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime
     */
    public function getCreated(): null|FHIRDateTime
    {
        return $this->created ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $created
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCreated(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $created,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $created) {
            unset($this->created);
            return $this;
        }
        if (!($created instanceof FHIRDateTime)) {
            $created = new FHIRDateTime(value: $created);
        }
        if (null !== $valueXMLLocation) {
            $created->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $created->_getValueXMLLocation()) {
            $created->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getComment(): null|FHIRString
    {
        return $this->comment ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional comments about the appointment.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $comment
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setComment(null|string|FHIRStringPrimitive|FHIRString $comment,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $comment) {
            unset($this->comment);
            return $this;
        }
        if (!($comment instanceof FHIRString)) {
            $comment = new FHIRString(value: $comment);
        }
        if (null !== $valueXMLLocation) {
            $comment->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $comment->_getValueXMLLocation()) {
            $comment->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getPatientInstruction(): null|FHIRString
    {
        return $this->patientInstruction ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $patientInstruction
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPatientInstruction(null|string|FHIRStringPrimitive|FHIRString $patientInstruction,
                                          null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $patientInstruction) {
            unset($this->patientInstruction);
            return $this;
        }
        if (!($patientInstruction instanceof FHIRString)) {
            $patientInstruction = new FHIRString(value: $patientInstruction);
        }
        if (null !== $valueXMLLocation) {
            $patientInstruction->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $patientInstruction->_getValueXMLLocation()) {
            $patientInstruction->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[]
     */
    public function getBasedOn(): array
    {
        return $this->basedOn ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference>
     */
    public function getBasedOnIterator(): iterable
    {
        if (!isset($this->basedOn) || [] === $this->basedOn) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->basedOn);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service request this appointment is allocated to assess (e.g. incoming
     * referral or procedure request).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $basedOn
     * @return static
     */
    public function addBasedOn(FHIRReference $basedOn): self
    {
        if (!isset($this->basedOn)) {
            $this->basedOn = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference ...$basedOn
     * @return static
     */
    public function setBasedOn(FHIRReference ...$basedOn): self
    {
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * List of participants involved in the appointment.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant[]
     */
    public function getParticipant(): array
    {
        return $this->participant ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant>
     */
    public function getParticipantIterator(): iterable
    {
        if (!isset($this->participant) || [] === $this->participant) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->participant);
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * List of participants involved in the appointment.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant $participant
     * @return static
     */
    public function addParticipant(FHIRAppointmentParticipant $participant): self
    {
        if (!isset($this->participant)) {
            $this->participant = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant ...$participant
     * @return static
     */
    public function setParticipant(FHIRAppointmentParticipant ...$participant): self
    {
        $this->participant = $participant;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod[]
     */
    public function getRequestedPeriod(): array
    {
        return $this->requestedPeriod ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod>
     */
    public function getRequestedPeriodIterator(): iterable
    {
        if (!isset($this->requestedPeriod) || [] === $this->requestedPeriod) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->requestedPeriod);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod $requestedPeriod
     * @return static
     */
    public function addRequestedPeriod(FHIRPeriod $requestedPeriod): self
    {
        if (!isset($this->requestedPeriod)) {
            $this->requestedPeriod = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod ...$requestedPeriod
     * @return static
     */
    public function setRequestedPeriod(FHIRPeriod ...$requestedPeriod): self
    {
        $this->requestedPeriod = $requestedPeriod;
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
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getParticipant())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARTICIPANT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STATUS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CANCELATION_REASON, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SERVICE_CATEGORY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SERVICE_TYPE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SPECIALTY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_APPOINTMENT_TYPE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REASON_CODE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REASON_REFERENCE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRIORITY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUPPORTING_INFORMATION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_START, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_END, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MINUTES_DURATION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SLOT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CREATED, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COMMENT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATIENT_INSTRUCTION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BASED_ON, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PARTICIPANT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REQUESTED_PERIOD, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTAINED, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_META, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LANGUAGE, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRAppointment $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRAppointment
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAppointment)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_ID === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setId(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_META === $childName) {
                $v = new FHIRMeta();
                $type->setMeta(FHIRMeta::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LANGUAGE === $childName) {
                $v = new FHIRCode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setLanguage(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT === $childName) {
                $v = new FHIRNarrative();
                $type->setText(FHIRNarrative::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($nn);
                    $type->addContained($cn::xmlUnserialize($nn, null, $config));
                }
            } else if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATUS === $childName) {
                $v = new FHIRAppointmentStatus(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setStatus(FHIRAppointmentStatus::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CANCELATION_REASON === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setCancelationReason(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SERVICE_CATEGORY === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addServiceCategory(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SERVICE_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addServiceType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SPECIALTY === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addSpecialty(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_APPOINTMENT_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setAppointmentType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REASON_CODE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addReasonCode(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REASON_REFERENCE === $childName) {
                $v = new FHIRReference();
                $type->addReasonReference(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRIORITY === $childName) {
                $v = new FHIRUnsignedInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPriority(FHIRUnsignedInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DESCRIPTION === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDescription(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUPPORTING_INFORMATION === $childName) {
                $v = new FHIRReference();
                $type->addSupportingInformation(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_START === $childName) {
                $v = new FHIRInstant(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setStart(FHIRInstant::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_END === $childName) {
                $v = new FHIRInstant(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setEnd(FHIRInstant::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MINUTES_DURATION === $childName) {
                $v = new FHIRPositiveInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setMinutesDuration(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SLOT === $childName) {
                $v = new FHIRReference();
                $type->addSlot(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CREATED === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setCreated(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COMMENT === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setComment(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATIENT_INSTRUCTION === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPatientInstruction(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BASED_ON === $childName) {
                $v = new FHIRReference();
                $type->addBasedOn(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PARTICIPANT === $childName) {
                $v = new FHIRAppointmentParticipant();
                $type->addParticipant(FHIRAppointmentParticipant::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REQUESTED_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->addRequestedPeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRString(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules(new FHIRUri(
                    value: (string)$attributes[self::FIELD_IMPLICIT_RULES],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_LANGUAGE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage(new FHIRCode(
                    value: (string)$attributes[self::FIELD_LANGUAGE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PRIORITY])) {
            $pt = $type->getPriority();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PRIORITY]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPriority(new FHIRUnsignedInt(
                    value: (string)$attributes[self::FIELD_PRIORITY],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DESCRIPTION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription(new FHIRString(
                    value: (string)$attributes[self::FIELD_DESCRIPTION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_START])) {
            $pt = $type->getStart();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_START]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setStart(new FHIRInstant(
                    value: (string)$attributes[self::FIELD_START],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_END])) {
            $pt = $type->getEnd();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_END]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setEnd(new FHIRInstant(
                    value: (string)$attributes[self::FIELD_END],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MINUTES_DURATION])) {
            $pt = $type->getMinutesDuration();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_MINUTES_DURATION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMinutesDuration(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_MINUTES_DURATION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CREATED])) {
            $pt = $type->getCreated();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_CREATED]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCreated(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_CREATED],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_COMMENT])) {
            $pt = $type->getComment();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_COMMENT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setComment(new FHIRString(
                    value: (string)$attributes[self::FIELD_COMMENT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PATIENT_INSTRUCTION])) {
            $pt = $type->getPatientInstruction();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PATIENT_INSTRUCTION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatientInstruction(new FHIRString(
                    value: (string)$attributes[self::FIELD_PATIENT_INSTRUCTION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('Appointment', $this->_getSourceXMLNS());
        }
        if (isset($this->priority) && $this->priority->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PRIORITY, $this->priority->getValue()?->_getFormattedValue());
        }
        if (isset($this->description) && $this->description->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->getValue()?->_getFormattedValue());
        }
        if (isset($this->start) && $this->start->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_START, $this->start->getValue()?->_getFormattedValue());
        }
        if (isset($this->end) && $this->end->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_END, $this->end->getValue()?->_getFormattedValue());
        }
        if (isset($this->minutesDuration) && $this->minutesDuration->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MINUTES_DURATION, $this->minutesDuration->getValue()?->_getFormattedValue());
        }
        if (isset($this->created) && $this->created->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CREATED, $this->created->getValue()?->_getFormattedValue());
        }
        if (isset($this->comment) && $this->comment->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_COMMENT, $this->comment->getValue()?->_getFormattedValue());
        }
        if (isset($this->patientInstruction) && $this->patientInstruction->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATIENT_INSTRUCTION, $this->patientInstruction->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->status)) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->cancelationReason)) {
            $xw->startElement(self::FIELD_CANCELATION_REASON);
            $this->cancelationReason->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->serviceCategory)) {
            foreach ($this->serviceCategory as $v) {
                $xw->startElement(self::FIELD_SERVICE_CATEGORY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->serviceType)) {
            foreach ($this->serviceType as $v) {
                $xw->startElement(self::FIELD_SERVICE_TYPE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->specialty)) {
            foreach ($this->specialty as $v) {
                $xw->startElement(self::FIELD_SPECIALTY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->appointmentType)) {
            $xw->startElement(self::FIELD_APPOINTMENT_TYPE);
            $this->appointmentType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->reasonCode)) {
            foreach ($this->reasonCode as $v) {
                $xw->startElement(self::FIELD_REASON_CODE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->reasonReference)) {
            foreach ($this->reasonReference as $v) {
                $xw->startElement(self::FIELD_REASON_REFERENCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->priority) && $this->priority->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PRIORITY);
            $this->priority->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->description) && $this->description->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->supportingInformation)) {
            foreach ($this->supportingInformation as $v) {
                $xw->startElement(self::FIELD_SUPPORTING_INFORMATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->start) && $this->start->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_START);
            $this->start->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->end) && $this->end->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_END);
            $this->end->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->minutesDuration) && $this->minutesDuration->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MINUTES_DURATION);
            $this->minutesDuration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->slot)) {
            foreach ($this->slot as $v) {
                $xw->startElement(self::FIELD_SLOT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->created) && $this->created->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CREATED);
            $this->created->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->comment) && $this->comment->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_COMMENT);
            $this->comment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patientInstruction) && $this->patientInstruction->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATIENT_INSTRUCTION);
            $this->patientInstruction->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->basedOn)) {
            foreach ($this->basedOn as $v) {
                $xw->startElement(self::FIELD_BASED_ON);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->participant)) {
            foreach ($this->participant as $v) {
                $xw->startElement(self::FIELD_PARTICIPANT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->requestedPeriod)) {
            foreach ($this->requestedPeriod as $v) {
                $xw->startElement(self::FIELD_REQUESTED_PERIOD);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRAppointment $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRAppointment
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAppointment)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            if (is_array($json[self::FIELD_IDENTIFIER])) {
                foreach($json[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $type->addIdentifier($v);
                    } else {
                        $type->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($json[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->addIdentifier($json[self::FIELD_IDENTIFIER]);
            } else {
                $type->addIdentifier(new FHIRIdentifier($json[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_STATUS]) || isset($json[self::FIELD_STATUS_EXT]) || array_key_exists(self::FIELD_STATUS, $json) || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $ext = (isset($json[self::FIELD_STATUS_EXT]) && is_array($json[self::FIELD_STATUS_EXT])) ? $json[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAppointmentStatus) {
                    $type->setStatus($value);
                } else if (is_array($value)) {
                    $type->setStatus(new FHIRAppointmentStatus(array_merge($ext, $value)));
                } else {
                    $type->setStatus(new FHIRAppointmentStatus([FHIRAppointmentStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setStatus(new FHIRAppointmentStatus($ext));
            } else {
                $type->setStatus(new FHIRAppointmentStatus(null));
            }
        }
        if (isset($json[self::FIELD_CANCELATION_REASON]) || array_key_exists(self::FIELD_CANCELATION_REASON, $json)) {
            if ($json[self::FIELD_CANCELATION_REASON] instanceof FHIRCodeableConcept) {
                $type->setCancelationReason($json[self::FIELD_CANCELATION_REASON]);
            } else {
                $type->setCancelationReason(new FHIRCodeableConcept($json[self::FIELD_CANCELATION_REASON]));
            }
        }
        if (isset($json[self::FIELD_SERVICE_CATEGORY]) || array_key_exists(self::FIELD_SERVICE_CATEGORY, $json)) {
            if (is_array($json[self::FIELD_SERVICE_CATEGORY])) {
                foreach($json[self::FIELD_SERVICE_CATEGORY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addServiceCategory($v);
                    } else {
                        $type->addServiceCategory(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_SERVICE_CATEGORY] instanceof FHIRCodeableConcept) {
                $type->addServiceCategory($json[self::FIELD_SERVICE_CATEGORY]);
            } else {
                $type->addServiceCategory(new FHIRCodeableConcept($json[self::FIELD_SERVICE_CATEGORY]));
            }
        }
        if (isset($json[self::FIELD_SERVICE_TYPE]) || array_key_exists(self::FIELD_SERVICE_TYPE, $json)) {
            if (is_array($json[self::FIELD_SERVICE_TYPE])) {
                foreach($json[self::FIELD_SERVICE_TYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addServiceType($v);
                    } else {
                        $type->addServiceType(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_SERVICE_TYPE] instanceof FHIRCodeableConcept) {
                $type->addServiceType($json[self::FIELD_SERVICE_TYPE]);
            } else {
                $type->addServiceType(new FHIRCodeableConcept($json[self::FIELD_SERVICE_TYPE]));
            }
        }
        if (isset($json[self::FIELD_SPECIALTY]) || array_key_exists(self::FIELD_SPECIALTY, $json)) {
            if (is_array($json[self::FIELD_SPECIALTY])) {
                foreach($json[self::FIELD_SPECIALTY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addSpecialty($v);
                    } else {
                        $type->addSpecialty(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_SPECIALTY] instanceof FHIRCodeableConcept) {
                $type->addSpecialty($json[self::FIELD_SPECIALTY]);
            } else {
                $type->addSpecialty(new FHIRCodeableConcept($json[self::FIELD_SPECIALTY]));
            }
        }
        if (isset($json[self::FIELD_APPOINTMENT_TYPE]) || array_key_exists(self::FIELD_APPOINTMENT_TYPE, $json)) {
            if ($json[self::FIELD_APPOINTMENT_TYPE] instanceof FHIRCodeableConcept) {
                $type->setAppointmentType($json[self::FIELD_APPOINTMENT_TYPE]);
            } else {
                $type->setAppointmentType(new FHIRCodeableConcept($json[self::FIELD_APPOINTMENT_TYPE]));
            }
        }
        if (isset($json[self::FIELD_REASON_CODE]) || array_key_exists(self::FIELD_REASON_CODE, $json)) {
            if (is_array($json[self::FIELD_REASON_CODE])) {
                foreach($json[self::FIELD_REASON_CODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addReasonCode($v);
                    } else {
                        $type->addReasonCode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_REASON_CODE] instanceof FHIRCodeableConcept) {
                $type->addReasonCode($json[self::FIELD_REASON_CODE]);
            } else {
                $type->addReasonCode(new FHIRCodeableConcept($json[self::FIELD_REASON_CODE]));
            }
        }
        if (isset($json[self::FIELD_REASON_REFERENCE]) || array_key_exists(self::FIELD_REASON_REFERENCE, $json)) {
            if (is_array($json[self::FIELD_REASON_REFERENCE])) {
                foreach($json[self::FIELD_REASON_REFERENCE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addReasonReference($v);
                    } else {
                        $type->addReasonReference(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_REASON_REFERENCE] instanceof FHIRReference) {
                $type->addReasonReference($json[self::FIELD_REASON_REFERENCE]);
            } else {
                $type->addReasonReference(new FHIRReference($json[self::FIELD_REASON_REFERENCE]));
            }
        }
        if (isset($json[self::FIELD_PRIORITY]) || isset($json[self::FIELD_PRIORITY_EXT]) || array_key_exists(self::FIELD_PRIORITY, $json) || array_key_exists(self::FIELD_PRIORITY_EXT, $json)) {
            $value = $json[self::FIELD_PRIORITY] ?? null;
            $ext = (isset($json[self::FIELD_PRIORITY_EXT]) && is_array($json[self::FIELD_PRIORITY_EXT])) ? $json[self::FIELD_PRIORITY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $type->setPriority($value);
                } else if (is_array($value)) {
                    $type->setPriority(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $type->setPriority(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPriority(new FHIRUnsignedInt($ext));
            } else {
                $type->setPriority(new FHIRUnsignedInt(null));
            }
        }
        if (isset($json[self::FIELD_DESCRIPTION]) || isset($json[self::FIELD_DESCRIPTION_EXT]) || array_key_exists(self::FIELD_DESCRIPTION, $json) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($json[self::FIELD_DESCRIPTION_EXT]) && is_array($json[self::FIELD_DESCRIPTION_EXT])) ? $json[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDescription($value);
                } else if (is_array($value)) {
                    $type->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDescription(new FHIRString($ext));
            } else {
                $type->setDescription(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_SUPPORTING_INFORMATION]) || array_key_exists(self::FIELD_SUPPORTING_INFORMATION, $json)) {
            if (is_array($json[self::FIELD_SUPPORTING_INFORMATION])) {
                foreach($json[self::FIELD_SUPPORTING_INFORMATION] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addSupportingInformation($v);
                    } else {
                        $type->addSupportingInformation(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_SUPPORTING_INFORMATION] instanceof FHIRReference) {
                $type->addSupportingInformation($json[self::FIELD_SUPPORTING_INFORMATION]);
            } else {
                $type->addSupportingInformation(new FHIRReference($json[self::FIELD_SUPPORTING_INFORMATION]));
            }
        }
        if (isset($json[self::FIELD_START]) || isset($json[self::FIELD_START_EXT]) || array_key_exists(self::FIELD_START, $json) || array_key_exists(self::FIELD_START_EXT, $json)) {
            $value = $json[self::FIELD_START] ?? null;
            $ext = (isset($json[self::FIELD_START_EXT]) && is_array($json[self::FIELD_START_EXT])) ? $json[self::FIELD_START_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $type->setStart($value);
                } else if (is_array($value)) {
                    $type->setStart(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $type->setStart(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setStart(new FHIRInstant($ext));
            } else {
                $type->setStart(new FHIRInstant(null));
            }
        }
        if (isset($json[self::FIELD_END]) || isset($json[self::FIELD_END_EXT]) || array_key_exists(self::FIELD_END, $json) || array_key_exists(self::FIELD_END_EXT, $json)) {
            $value = $json[self::FIELD_END] ?? null;
            $ext = (isset($json[self::FIELD_END_EXT]) && is_array($json[self::FIELD_END_EXT])) ? $json[self::FIELD_END_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $type->setEnd($value);
                } else if (is_array($value)) {
                    $type->setEnd(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $type->setEnd(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setEnd(new FHIRInstant($ext));
            } else {
                $type->setEnd(new FHIRInstant(null));
            }
        }
        if (isset($json[self::FIELD_MINUTES_DURATION]) || isset($json[self::FIELD_MINUTES_DURATION_EXT]) || array_key_exists(self::FIELD_MINUTES_DURATION, $json) || array_key_exists(self::FIELD_MINUTES_DURATION_EXT, $json)) {
            $value = $json[self::FIELD_MINUTES_DURATION] ?? null;
            $ext = (isset($json[self::FIELD_MINUTES_DURATION_EXT]) && is_array($json[self::FIELD_MINUTES_DURATION_EXT])) ? $json[self::FIELD_MINUTES_DURATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setMinutesDuration($value);
                } else if (is_array($value)) {
                    $type->setMinutesDuration(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setMinutesDuration(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMinutesDuration(new FHIRPositiveInt($ext));
            } else {
                $type->setMinutesDuration(new FHIRPositiveInt(null));
            }
        }
        if (isset($json[self::FIELD_SLOT]) || array_key_exists(self::FIELD_SLOT, $json)) {
            if (is_array($json[self::FIELD_SLOT])) {
                foreach($json[self::FIELD_SLOT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addSlot($v);
                    } else {
                        $type->addSlot(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_SLOT] instanceof FHIRReference) {
                $type->addSlot($json[self::FIELD_SLOT]);
            } else {
                $type->addSlot(new FHIRReference($json[self::FIELD_SLOT]));
            }
        }
        if (isset($json[self::FIELD_CREATED]) || isset($json[self::FIELD_CREATED_EXT]) || array_key_exists(self::FIELD_CREATED, $json) || array_key_exists(self::FIELD_CREATED_EXT, $json)) {
            $value = $json[self::FIELD_CREATED] ?? null;
            $ext = (isset($json[self::FIELD_CREATED_EXT]) && is_array($json[self::FIELD_CREATED_EXT])) ? $json[self::FIELD_CREATED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setCreated($value);
                } else if (is_array($value)) {
                    $type->setCreated(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setCreated(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCreated(new FHIRDateTime($ext));
            } else {
                $type->setCreated(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_COMMENT]) || isset($json[self::FIELD_COMMENT_EXT]) || array_key_exists(self::FIELD_COMMENT, $json) || array_key_exists(self::FIELD_COMMENT_EXT, $json)) {
            $value = $json[self::FIELD_COMMENT] ?? null;
            $ext = (isset($json[self::FIELD_COMMENT_EXT]) && is_array($json[self::FIELD_COMMENT_EXT])) ? $json[self::FIELD_COMMENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setComment($value);
                } else if (is_array($value)) {
                    $type->setComment(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setComment(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setComment(new FHIRString($ext));
            } else {
                $type->setComment(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_PATIENT_INSTRUCTION]) || isset($json[self::FIELD_PATIENT_INSTRUCTION_EXT]) || array_key_exists(self::FIELD_PATIENT_INSTRUCTION, $json) || array_key_exists(self::FIELD_PATIENT_INSTRUCTION_EXT, $json)) {
            $value = $json[self::FIELD_PATIENT_INSTRUCTION] ?? null;
            $ext = (isset($json[self::FIELD_PATIENT_INSTRUCTION_EXT]) && is_array($json[self::FIELD_PATIENT_INSTRUCTION_EXT])) ? $json[self::FIELD_PATIENT_INSTRUCTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setPatientInstruction($value);
                } else if (is_array($value)) {
                    $type->setPatientInstruction(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setPatientInstruction(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPatientInstruction(new FHIRString($ext));
            } else {
                $type->setPatientInstruction(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_BASED_ON]) || array_key_exists(self::FIELD_BASED_ON, $json)) {
            if (is_array($json[self::FIELD_BASED_ON])) {
                foreach($json[self::FIELD_BASED_ON] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addBasedOn($v);
                    } else {
                        $type->addBasedOn(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_BASED_ON] instanceof FHIRReference) {
                $type->addBasedOn($json[self::FIELD_BASED_ON]);
            } else {
                $type->addBasedOn(new FHIRReference($json[self::FIELD_BASED_ON]));
            }
        }
        if (isset($json[self::FIELD_PARTICIPANT]) || array_key_exists(self::FIELD_PARTICIPANT, $json)) {
            if (is_array($json[self::FIELD_PARTICIPANT])) {
                foreach($json[self::FIELD_PARTICIPANT] as $v) {
                    if ($v instanceof FHIRAppointmentParticipant) {
                        $type->addParticipant($v);
                    } else {
                        $type->addParticipant(new FHIRAppointmentParticipant($v));
                    }
                }
            } elseif ($json[self::FIELD_PARTICIPANT] instanceof FHIRAppointmentParticipant) {
                $type->addParticipant($json[self::FIELD_PARTICIPANT]);
            } else {
                $type->addParticipant(new FHIRAppointmentParticipant($json[self::FIELD_PARTICIPANT]));
            }
        }
        if (isset($json[self::FIELD_REQUESTED_PERIOD]) || array_key_exists(self::FIELD_REQUESTED_PERIOD, $json)) {
            if (is_array($json[self::FIELD_REQUESTED_PERIOD])) {
                foreach($json[self::FIELD_REQUESTED_PERIOD] as $v) {
                    if ($v instanceof FHIRPeriod) {
                        $type->addRequestedPeriod($v);
                    } else {
                        $type->addRequestedPeriod(new FHIRPeriod($v));
                    }
                }
            } elseif ($json[self::FIELD_REQUESTED_PERIOD] instanceof FHIRPeriod) {
                $type->addRequestedPeriod($json[self::FIELD_REQUESTED_PERIOD]);
            } else {
                $type->addRequestedPeriod(new FHIRPeriod($json[self::FIELD_REQUESTED_PERIOD]));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->identifier) && [] !== $this->identifier) {
            $out->identifier = $this->identifier;
        }
        if (isset($this->status)) {
            if (null !== ($val = $this->status->getValue())) {
                $out->status = $val;
            }
            $ext = $this->status->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_status = $ext;
            }
        }
        if (isset($this->cancelationReason)) {
            $out->cancelationReason = $this->cancelationReason;
        }
        if (isset($this->serviceCategory) && [] !== $this->serviceCategory) {
            $out->serviceCategory = $this->serviceCategory;
        }
        if (isset($this->serviceType) && [] !== $this->serviceType) {
            $out->serviceType = $this->serviceType;
        }
        if (isset($this->specialty) && [] !== $this->specialty) {
            $out->specialty = $this->specialty;
        }
        if (isset($this->appointmentType)) {
            $out->appointmentType = $this->appointmentType;
        }
        if (isset($this->reasonCode) && [] !== $this->reasonCode) {
            $out->reasonCode = $this->reasonCode;
        }
        if (isset($this->reasonReference) && [] !== $this->reasonReference) {
            $out->reasonReference = $this->reasonReference;
        }
        if (isset($this->priority)) {
            if (null !== ($val = $this->priority->getValue())) {
                $out->priority = $val;
            }
            $ext = $this->priority->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_priority = $ext;
            }
        }
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            $ext = $this->description->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_description = $ext;
            }
        }
        if (isset($this->supportingInformation) && [] !== $this->supportingInformation) {
            $out->supportingInformation = $this->supportingInformation;
        }
        if (isset($this->start)) {
            if (null !== ($val = $this->start->getValue())) {
                $out->start = $val;
            }
            $ext = $this->start->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_start = $ext;
            }
        }
        if (isset($this->end)) {
            if (null !== ($val = $this->end->getValue())) {
                $out->end = $val;
            }
            $ext = $this->end->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_end = $ext;
            }
        }
        if (isset($this->minutesDuration)) {
            if (null !== ($val = $this->minutesDuration->getValue())) {
                $out->minutesDuration = $val;
            }
            $ext = $this->minutesDuration->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_minutesDuration = $ext;
            }
        }
        if (isset($this->slot) && [] !== $this->slot) {
            $out->slot = $this->slot;
        }
        if (isset($this->created)) {
            if (null !== ($val = $this->created->getValue())) {
                $out->created = $val;
            }
            $ext = $this->created->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_created = $ext;
            }
        }
        if (isset($this->comment)) {
            if (null !== ($val = $this->comment->getValue())) {
                $out->comment = $val;
            }
            $ext = $this->comment->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_comment = $ext;
            }
        }
        if (isset($this->patientInstruction)) {
            if (null !== ($val = $this->patientInstruction->getValue())) {
                $out->patientInstruction = $val;
            }
            $ext = $this->patientInstruction->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_patientInstruction = $ext;
            }
        }
        if (isset($this->basedOn) && [] !== $this->basedOn) {
            $out->basedOn = $this->basedOn;
        }
        if (isset($this->participant) && [] !== $this->participant) {
            $out->participant = $this->participant;
        }
        if (isset($this->requestedPeriod) && [] !== $this->requestedPeriod) {
            $out->requestedPeriod = $this->requestedPeriod;
        }
        $out->resourceType = $this->_getResourceType();
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