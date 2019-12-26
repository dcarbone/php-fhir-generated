<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParticipationStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A reply to an appointment request for a patient and/or practitioner(s), such as
 * a confirmation or rejection.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRAppointmentResponse
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRAppointmentResponse extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_APPOINTMENT_RESPONSE;
    const FIELD_ACTOR = 'actor';
    const FIELD_APPOINTMENT = 'appointment';
    const FIELD_COMMENT = 'comment';
    const FIELD_COMMENT_EXT = '_comment';
    const FIELD_END = 'end';
    const FIELD_END_EXT = '_end';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_PARTICIPANT_STATUS = 'participantStatus';
    const FIELD_PARTICIPANT_STATUS_EXT = '_participantStatus';
    const FIELD_PARTICIPANT_TYPE = 'participantType';
    const FIELD_START = 'start';
    const FIELD_START_EXT = '_start';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Person, Location, HealthcareService, or Device that is participating in the
     * appointment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $actor = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Appointment that this response is replying to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $appointment = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional comments about the appointment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $comment = null;

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This may be either the same as the appointment request to confirm the details of
     * the appointment, or alternately a new time to request a re-negotiation of the
     * end time.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    protected $end = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this appointment response concern that
     * are defined by business processes and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * The Participation status of an appointment.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Participation status of the participant. When the status is declined or
     * tentative if the start/end times are different to the appointment, then these
     * times should be interpreted as a requested time change. When the status is
     * accepted, the times can either be the time of the appointment (as a confirmation
     * of the time) or can be empty.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParticipationStatus
     */
    protected $participantStatus = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Role of participant in the appointment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $participantType = [];

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date/Time that the appointment is to take place, or requested new start time.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    protected $start = null;

    /**
     * Validation map for fields in type AppointmentResponse
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRAppointmentResponse Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAppointmentResponse::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTOR])) {
            if ($data[self::FIELD_ACTOR] instanceof FHIRReference) {
                $this->setActor($data[self::FIELD_ACTOR]);
            } else {
                $this->setActor(new FHIRReference($data[self::FIELD_ACTOR]));
            }
        }
        if (isset($data[self::FIELD_APPOINTMENT])) {
            if ($data[self::FIELD_APPOINTMENT] instanceof FHIRReference) {
                $this->setAppointment($data[self::FIELD_APPOINTMENT]);
            } else {
                $this->setAppointment(new FHIRReference($data[self::FIELD_APPOINTMENT]));
            }
        }
        if (isset($data[self::FIELD_COMMENT]) || isset($data[self::FIELD_COMMENT_EXT])) {
            if (isset($data[self::FIELD_COMMENT])) {
                $value = $data[self::FIELD_COMMENT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_COMMENT_EXT]) && is_array($data[self::FIELD_COMMENT_EXT])) {
                $ext = $data[self::FIELD_COMMENT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setComment($value);
                } else if (is_array($value)) {
                    $this->setComment(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setComment(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setComment(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_END]) || isset($data[self::FIELD_END_EXT])) {
            if (isset($data[self::FIELD_END])) {
                $value = $data[self::FIELD_END];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_END_EXT]) && is_array($data[self::FIELD_END_EXT])) {
                $ext = $data[self::FIELD_END_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setEnd($value);
                } else if (is_array($value)) {
                    $this->setEnd(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setEnd(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setEnd(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_PARTICIPANT_STATUS]) || isset($data[self::FIELD_PARTICIPANT_STATUS_EXT])) {
            if (isset($data[self::FIELD_PARTICIPANT_STATUS])) {
                $value = $data[self::FIELD_PARTICIPANT_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PARTICIPANT_STATUS_EXT]) && is_array($data[self::FIELD_PARTICIPANT_STATUS_EXT])) {
                $ext = $data[self::FIELD_PARTICIPANT_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRParticipationStatus) {
                    $this->setParticipantStatus($value);
                } else if (is_array($value)) {
                    $this->setParticipantStatus(new FHIRParticipationStatus(array_merge($ext, $value)));
                } else {
                    $this->setParticipantStatus(new FHIRParticipationStatus([FHIRParticipationStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setParticipantStatus(new FHIRParticipationStatus($ext));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT_TYPE])) {
            if (is_array($data[self::FIELD_PARTICIPANT_TYPE])) {
                foreach($data[self::FIELD_PARTICIPANT_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addParticipantType($v);
                    } else {
                        $this->addParticipantType(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_PARTICIPANT_TYPE] instanceof FHIRCodeableConcept) {
                $this->addParticipantType($data[self::FIELD_PARTICIPANT_TYPE]);
            } else {
                $this->addParticipantType(new FHIRCodeableConcept($data[self::FIELD_PARTICIPANT_TYPE]));
            }
        }
        if (isset($data[self::FIELD_START]) || isset($data[self::FIELD_START_EXT])) {
            if (isset($data[self::FIELD_START])) {
                $value = $data[self::FIELD_START];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_START_EXT]) && is_array($data[self::FIELD_START_EXT])) {
                $ext = $data[self::FIELD_START_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setStart($value);
                } else if (is_array($value)) {
                    $this->setStart(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setStart(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStart(new FHIRInstant($ext));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<AppointmentResponse{$xmlns}></AppointmentResponse>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Person, Location, HealthcareService, or Device that is participating in the
     * appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Person, Location, HealthcareService, or Device that is participating in the
     * appointment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $actor
     * @return static
     */
    public function setActor(FHIRReference $actor = null)
    {
        $this->actor = $actor;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Appointment that this response is replying to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getAppointment()
    {
        return $this->appointment;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Appointment that this response is replying to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $appointment
     * @return static
     */
    public function setAppointment(FHIRReference $appointment = null)
    {
        $this->appointment = $appointment;
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
    public function getComment()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $comment
     * @return static
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
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This may be either the same as the appointment request to confirm the details of
     * the appointment, or alternately a new time to request a re-negotiation of the
     * end time.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    public function getEnd()
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
     * This may be either the same as the appointment request to confirm the details of
     * the appointment, or alternately a new time to request a re-negotiation of the
     * end time.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant $end
     * @return static
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this appointment response concern that
     * are defined by business processes and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this appointment response concern that
     * are defined by business processes and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this appointment response concern that
     * are defined by business processes and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
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
     * The Participation status of an appointment.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Participation status of the participant. When the status is declined or
     * tentative if the start/end times are different to the appointment, then these
     * times should be interpreted as a requested time change. When the status is
     * accepted, the times can either be the time of the appointment (as a confirmation
     * of the time) or can be empty.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParticipationStatus
     */
    public function getParticipantStatus()
    {
        return $this->participantStatus;
    }

    /**
     * The Participation status of an appointment.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Participation status of the participant. When the status is declined or
     * tentative if the start/end times are different to the appointment, then these
     * times should be interpreted as a requested time change. When the status is
     * accepted, the times can either be the time of the appointment (as a confirmation
     * of the time) or can be empty.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParticipationStatus $participantStatus
     * @return static
     */
    public function setParticipantStatus(FHIRParticipationStatus $participantStatus = null)
    {
        $this->participantStatus = $participantStatus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Role of participant in the appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getParticipantType()
    {
        return $this->participantType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Role of participant in the appointment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $participantType
     * @return static
     */
    public function addParticipantType(FHIRCodeableConcept $participantType = null)
    {
        $this->participantType[] = $participantType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Role of participant in the appointment.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $participantType
     * @return static
     */
    public function setParticipantType(array $participantType = [])
    {
        $this->participantType = [];
        if ([] === $participantType) {
            return $this;
        }
        foreach($participantType as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addParticipantType($v);
            } else {
                $this->addParticipantType(new FHIRCodeableConcept($v));
            }
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
     * Date/Time that the appointment is to take place, or requested new start time.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    public function getStart()
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
     * Date/Time that the appointment is to take place, or requested new start time.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant $start
     * @return static
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
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getActor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACTOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAppointment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_APPOINTMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getComment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEnd())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_END] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getParticipantStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARTICIPANT_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getParticipantType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARTICIPANT_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStart())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_START] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ACTOR])) {
            $v = $this->getActor();
            foreach($validationRules[self::FIELD_ACTOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_RESPONSE, self::FIELD_ACTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTOR])) {
                        $errs[self::FIELD_ACTOR] = [];
                    }
                    $errs[self::FIELD_ACTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_APPOINTMENT])) {
            $v = $this->getAppointment();
            foreach($validationRules[self::FIELD_APPOINTMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_RESPONSE, self::FIELD_APPOINTMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPOINTMENT])) {
                        $errs[self::FIELD_APPOINTMENT] = [];
                    }
                    $errs[self::FIELD_APPOINTMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMMENT])) {
            $v = $this->getComment();
            foreach($validationRules[self::FIELD_COMMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_RESPONSE, self::FIELD_COMMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMMENT])) {
                        $errs[self::FIELD_COMMENT] = [];
                    }
                    $errs[self::FIELD_COMMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_END])) {
            $v = $this->getEnd();
            foreach($validationRules[self::FIELD_END] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_RESPONSE, self::FIELD_END, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_END])) {
                        $errs[self::FIELD_END] = [];
                    }
                    $errs[self::FIELD_END][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_RESPONSE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARTICIPANT_STATUS])) {
            $v = $this->getParticipantStatus();
            foreach($validationRules[self::FIELD_PARTICIPANT_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_RESPONSE, self::FIELD_PARTICIPANT_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTICIPANT_STATUS])) {
                        $errs[self::FIELD_PARTICIPANT_STATUS] = [];
                    }
                    $errs[self::FIELD_PARTICIPANT_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARTICIPANT_TYPE])) {
            $v = $this->getParticipantType();
            foreach($validationRules[self::FIELD_PARTICIPANT_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_RESPONSE, self::FIELD_PARTICIPANT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTICIPANT_TYPE])) {
                        $errs[self::FIELD_PARTICIPANT_TYPE] = [];
                    }
                    $errs[self::FIELD_PARTICIPANT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_START])) {
            $v = $this->getStart();
            foreach($validationRules[self::FIELD_START] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_RESPONSE, self::FIELD_START, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_START])) {
                        $errs[self::FIELD_START] = [];
                    }
                    $errs[self::FIELD_START][$rule] = $err;
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
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRAppointmentResponse::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRAppointmentResponse::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRAppointmentResponse;
        } elseif (!is_object($type) || !($type instanceof FHIRAppointmentResponse)) {
            throw new \RuntimeException(sprintf(
                'FHIRAppointmentResponse::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->actor)) {
            $type->setActor(FHIRReference::xmlUnserialize($children->actor));
        }
        if (isset($children->appointment)) {
            $type->setAppointment(FHIRReference::xmlUnserialize($children->appointment));
        }
        if (isset($children->comment)) {
            $type->setComment(FHIRString::xmlUnserialize($children->comment));
        }
        if (isset($attributes->comment)) {
            $pt = $type->getComment();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->comment);
            } else {
                $type->setComment((string)$attributes->comment);
            }
        }
        if (isset($children->end)) {
            $type->setEnd(FHIRInstant::xmlUnserialize($children->end));
        }
        if (isset($attributes->end)) {
            $pt = $type->getEnd();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->end);
            } else {
                $type->setEnd((string)$attributes->end);
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->participantStatus)) {
            $type->setParticipantStatus(FHIRParticipationStatus::xmlUnserialize($children->participantStatus));
        }
        if (isset($children->participantType)) {
            foreach($children->participantType as $child) {
                $type->addParticipantType(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->start)) {
            $type->setStart(FHIRInstant::xmlUnserialize($children->start));
        }
        if (isset($attributes->start)) {
            $pt = $type->getStart();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->start);
            } else {
                $type->setStart((string)$attributes->start);
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getActor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACTOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAppointment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_APPOINTMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getComment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COMMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEnd())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_END, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getParticipantStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getParticipantType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT_TYPE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getStart())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_START, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getActor())) {
            $a[self::FIELD_ACTOR] = $v;
        }
        if (null !== ($v = $this->getAppointment())) {
            $a[self::FIELD_APPOINTMENT] = $v;
        }
        if (null !== ($v = $this->getComment())) {
            $a[self::FIELD_COMMENT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_COMMENT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getEnd())) {
            $a[self::FIELD_END] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInstant::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInstant::FIELD_VALUE]);
                $a[self::FIELD_END_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if (null !== ($v = $this->getParticipantStatus())) {
            $a[self::FIELD_PARTICIPANT_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRParticipationStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRParticipationStatus::FIELD_VALUE]);
                $a[self::FIELD_PARTICIPANT_STATUS_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getParticipantType())) {
            $a[self::FIELD_PARTICIPANT_TYPE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PARTICIPANT_TYPE][] = $v;
            }
        }
        if (null !== ($v = $this->getStart())) {
            $a[self::FIELD_START] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInstant::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInstant::FIELD_VALUE]);
                $a[self::FIELD_START_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}