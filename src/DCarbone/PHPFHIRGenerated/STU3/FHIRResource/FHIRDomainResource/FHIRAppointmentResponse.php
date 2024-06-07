<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 7th, 2024 20:38+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRParticipationStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter;

/**
 * A reply to an appointment request for a patient and/or practitioner(s), such as
 * a confirmation or rejection.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRAppointmentResponse
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRAppointmentResponse extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_APPOINTMENT_RESPONSE;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_APPOINTMENT = 'appointment';
    const FIELD_START = 'start';
    const FIELD_START_EXT = '_start';
    const FIELD_END = 'end';
    const FIELD_END_EXT = '_end';
    const FIELD_PARTICIPANT_TYPE = 'participantType';
    const FIELD_ACTOR = 'actor';
    const FIELD_PARTICIPANT_STATUS = 'participantStatus';
    const FIELD_PARTICIPANT_STATUS_EXT = '_participantStatus';
    const FIELD_COMMENT = 'comment';
    const FIELD_COMMENT_EXT = '_comment';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this appointment response concern that
     * are defined by business processes and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Appointment that this response is replying to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $appointment = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date/Time that the appointment is to take place, or requested new start time.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $start = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This may be either the same as the appointment request to confirm the details of
     * the appointment, or alternately a new time to request a re-negotiation of the
     * end time.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $end = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Role of participant in the appointment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $participantType = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Person, Location/HealthcareService or Device that is participating in the
     * appointment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $actor = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRParticipationStatus
     */
    protected null|FHIRParticipationStatus $participantStatus = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional comments about the appointment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $comment = null;

    /**
     * Validation map for fields in type AppointmentResponse
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRAppointmentResponse Constructor
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
        if (array_key_exists(self::FIELD_APPOINTMENT, $data)) {
            if ($data[self::FIELD_APPOINTMENT] instanceof FHIRReference) {
                $this->setAppointment($data[self::FIELD_APPOINTMENT]);
            } else {
                $this->setAppointment(new FHIRReference($data[self::FIELD_APPOINTMENT]));
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
        if (array_key_exists(self::FIELD_PARTICIPANT_TYPE, $data)) {
            if (is_array($data[self::FIELD_PARTICIPANT_TYPE])) {
                foreach($data[self::FIELD_PARTICIPANT_TYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addParticipantType($v);
                    } else {
                        $this->addParticipantType(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_PARTICIPANT_TYPE] instanceof FHIRCodeableConcept) {
                $this->addParticipantType($data[self::FIELD_PARTICIPANT_TYPE]);
            } else {
                $this->addParticipantType(new FHIRCodeableConcept($data[self::FIELD_PARTICIPANT_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_ACTOR, $data)) {
            if ($data[self::FIELD_ACTOR] instanceof FHIRReference) {
                $this->setActor($data[self::FIELD_ACTOR]);
            } else {
                $this->setActor(new FHIRReference($data[self::FIELD_ACTOR]));
            }
        }
        if (array_key_exists(self::FIELD_PARTICIPANT_STATUS, $data) || array_key_exists(self::FIELD_PARTICIPANT_STATUS_EXT, $data)) {
            $value = $data[self::FIELD_PARTICIPANT_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_PARTICIPANT_STATUS_EXT]) && is_array($data[self::FIELD_PARTICIPANT_STATUS_EXT])) ? $data[self::FIELD_PARTICIPANT_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRParticipationStatus) {
                    $this->setParticipantStatus($value);
                } else if (is_array($value)) {
                    $this->setParticipantStatus(new FHIRParticipationStatus(array_merge($ext, $value)));
                } else {
                    $this->setParticipantStatus(new FHIRParticipationStatus([FHIRParticipationStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setParticipantStatus(new FHIRParticipationStatus($ext));
            } else {
                $this->setParticipantStatus(new FHIRParticipationStatus(null));
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this appointment response concern that
     * are defined by business processes and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this appointment response concern that
     * are defined by business processes and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Appointment that this response is replying to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getAppointment(): null|FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $appointment
     * @return static
     */
    public function setAppointment(null|FHIRReference $appointment = null): self
    {
        if (null === $appointment) {
            $appointment = new FHIRReference();
        }
        $this->_trackValueSet($this->appointment, $appointment);
        $this->appointment = $appointment;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date/Time that the appointment is to take place, or requested new start time.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    public function getStart(): null|FHIRInstant
    {
        return $this->start;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date/Time that the appointment is to take place, or requested new start time.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant $start
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setStart(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $start = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $start && !($start instanceof FHIRInstant)) {
            $start = new FHIRInstant($start);
        }
        $this->_trackValueSet($this->start, $start);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_START])) {
            $this->_primitiveXmlLocations[self::FIELD_START] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_START][0] = $xmlLocation;
        $this->start = $start;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This may be either the same as the appointment request to confirm the details of
     * the appointment, or alternately a new time to request a re-negotiation of the
     * end time.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    public function getEnd(): null|FHIRInstant
    {
        return $this->end;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This may be either the same as the appointment request to confirm the details of
     * the appointment, or alternately a new time to request a re-negotiation of the
     * end time.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant $end
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setEnd(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $end = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $end && !($end instanceof FHIRInstant)) {
            $end = new FHIRInstant($end);
        }
        $this->_trackValueSet($this->end, $end);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_END])) {
            $this->_primitiveXmlLocations[self::FIELD_END] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_END][0] = $xmlLocation;
        $this->end = $end;
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getParticipantType(): null|array
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $participantType
     * @return static
     */
    public function addParticipantType(null|FHIRCodeableConcept $participantType = null): self
    {
        if (null === $participantType) {
            $participantType = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->participantType[] = $participantType;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Person, Location/HealthcareService or Device that is participating in the
     * appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getActor(): null|FHIRReference
    {
        return $this->actor;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Person, Location/HealthcareService or Device that is participating in the
     * appointment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $actor
     * @return static
     */
    public function setActor(null|FHIRReference $actor = null): self
    {
        if (null === $actor) {
            $actor = new FHIRReference();
        }
        $this->_trackValueSet($this->actor, $actor);
        $this->actor = $actor;
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRParticipationStatus
     */
    public function getParticipantStatus(): null|FHIRParticipationStatus
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRParticipationStatus $participantStatus
     * @return static
     */
    public function setParticipantStatus(null|FHIRParticipationStatus $participantStatus = null): self
    {
        if (null === $participantStatus) {
            $participantStatus = new FHIRParticipationStatus();
        }
        $this->_trackValueSet($this->participantStatus, $participantStatus);
        $this->participantStatus = $participantStatus;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional comments about the appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getComment(): null|FHIRString
    {
        return $this->comment;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional comments about the appointment.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $comment
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setComment(null|string|FHIRStringPrimitive|FHIRString $comment = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $comment && !($comment instanceof FHIRString)) {
            $comment = new FHIRString($comment);
        }
        $this->_trackValueSet($this->comment, $comment);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_COMMENT])) {
            $this->_primitiveXmlLocations[self::FIELD_COMMENT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_COMMENT][0] = $xmlLocation;
        $this->comment = $comment;
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
        if (null !== ($v = $this->getAppointment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_APPOINTMENT] = $fieldErrs;
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
        if ([] !== ($vs = $this->getParticipantType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARTICIPANT_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getActor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACTOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParticipantStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARTICIPANT_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getComment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMMENT] = $fieldErrs;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse
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
        } else if (!($type instanceof FHIRAppointmentResponse)) {
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
            } elseif (self::FIELD_APPOINTMENT === $childName) {
                $type->setAppointment(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_START === $childName) {
                $type->setStart(FHIRInstant::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_END === $childName) {
                $type->setEnd(FHIRInstant::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PARTICIPANT_TYPE === $childName) {
                $type->addParticipantType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ACTOR === $childName) {
                $type->setActor(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PARTICIPANT_STATUS === $childName) {
                $type->setParticipantStatus(FHIRParticipationStatus::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_COMMENT === $childName) {
                $type->setComment(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
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
        if (isset($attributes[self::FIELD_COMMENT])) {
            $pt = $type->getComment();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_COMMENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setComment((string)$attributes[self::FIELD_COMMENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'AppointmentResponse', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_START] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getStart())) {
            $xw->writeAttribute(self::FIELD_START, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_END] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getEnd())) {
            $xw->writeAttribute(self::FIELD_END, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_COMMENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getComment())) {
            $xw->writeAttribute(self::FIELD_COMMENT, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAppointment())) {
            $xw->startElement(self::FIELD_APPOINTMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_START] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getStart())) {
            $xw->startElement(self::FIELD_START);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_END] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getEnd())) {
            $xw->startElement(self::FIELD_END);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getParticipantType() as $v) {
            $xw->startElement(self::FIELD_PARTICIPANT_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getActor())) {
            $xw->startElement(self::FIELD_ACTOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getParticipantStatus())) {
            $xw->startElement(self::FIELD_PARTICIPANT_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_COMMENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getComment())) {
            $xw->startElement(self::FIELD_COMMENT);
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
        if (null !== ($v = $this->getAppointment())) {
            $out->{self::FIELD_APPOINTMENT} = $v;
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
        if ([] !== ($vs = $this->getParticipantType())) {
            $out->{self::FIELD_PARTICIPANT_TYPE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PARTICIPANT_TYPE}[] = $v;
            }
        }
        if (null !== ($v = $this->getActor())) {
            $out->{self::FIELD_ACTOR} = $v;
        }
        if (null !== ($v = $this->getParticipantStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PARTICIPANT_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRParticipationStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PARTICIPANT_STATUS_EXT} = $ext;
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