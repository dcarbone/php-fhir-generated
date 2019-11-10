<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 10th, 2019 18:12+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREncounterClass;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREncounterState;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * An interaction between a patient and healthcare provider(s) for the purpose of
 * providing healthcare service(s) or assessing the health status of a patient.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIREncounter
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIREncounter extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ENCOUNTER;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_APPOINTMENT = 'appointment';
    const FIELD_CLASS = 'class';
    const FIELD_CLASS_EXT = '_class';
    const FIELD_EPISODE_OF_CARE = 'episodeOfCare';
    const FIELD_HOSPITALIZATION = 'hospitalization';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_INCOMING_REFERRAL = 'incomingReferral';
    const FIELD_INDICATION = 'indication';
    const FIELD_LENGTH = 'length';
    const FIELD_LOCATION = 'location';
    const FIELD_PART_OF = 'partOf';
    const FIELD_PARTICIPANT = 'participant';
    const FIELD_PATIENT = 'patient';
    const FIELD_PERIOD = 'period';
    const FIELD_PRIORITY = 'priority';
    const FIELD_REASON = 'reason';
    const FIELD_SERVICE_PROVIDER = 'serviceProvider';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_STATUS_HISTORY = 'statusHistory';
    const FIELD_TYPE = 'type';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The appointment that scheduled this encounter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $appointment = null;

    /**
     * Classification of the encounter
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * inpatient | outpatient | ambulatory | emergency +.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREncounterClass
     */
    protected $class = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where a specific encounter should be classified as a part of a specific
     * episode(s) of care this field should be used. This association can facilitate
     * grouping of related encounters together for a specific purpose, such as
     * government reporting, issue tracking, association via a common problem. The
     * association is recorded on the encounter as these are typically created after
     * the episode of care, and grouped on entry rather than editing the episode of
     * care to append another encounter to it (the episode of care could span years).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    protected $episodeOfCare = [];

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * Details about the admission to a healthcare service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    protected $hospitalization = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier(s) by which this encounter is known.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The referral request this encounter satisfies (incoming referral).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    protected $incomingReferral = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason the encounter takes place, as specified using information from another
     * resource. For admissions, this is the admission diagnosis. The indication will
     * typically be a Condition (with other resources referenced in the
     * evidence.detail), or a Procedure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    protected $indication = [];

    /**
     * Quantity of time the encounter lasted. This excludes the time during leaves of
     * absence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected $length = null;

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * List of locations where the patient has been during this encounter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation[]
     */
    protected $location = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Another Encounter of which this encounter is a part of (administratively or in
     * time).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $partOf = null;

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * The list of people responsible for providing the service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant[]
     */
    protected $participant = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient present at the encounter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $patient = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The start and end time of the encounter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    protected $period = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the urgency of the encounter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $priority = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason the encounter takes place, expressed as a code. For admissions, this can
     * be used for a coded admission diagnosis.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected $reason = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An organization that is in charge of maintaining the information of this
     * Encounter (e.g. who maintains the report or the master service catalog item,
     * etc.). This MAY be the same as the organization on the Patient record, however
     * it could be different. This MAY not be not the Service Delivery Location's
     * Organization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $serviceProvider = null;

    /**
     * Current state of the encounter
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * planned | arrived | in-progress | onleave | finished | cancelled.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREncounterState
     */
    protected $status = null;

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * The status history permits the encounter resource to contain the status history
     * without needing to read through the historical versions of the resource, or even
     * have the server store them.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory[]
     */
    protected $statusHistory = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled
     * nursing, rehabilitation).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected $type = [];

    /**
     * FHIREncounter Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIREncounter::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_APPOINTMENT])) {
            if ($data[self::FIELD_APPOINTMENT] instanceof FHIRReference) {
                $this->setAppointment($data[self::FIELD_APPOINTMENT]);
            } else {
                $this->setAppointment(new FHIRReference($data[self::FIELD_APPOINTMENT]));
            }
        }
        if (isset($data[self::FIELD_CLASS])) {
            $ext = (isset($data[self::FIELD_CLASS_EXT]) && is_array($data[self::FIELD_CLASS_EXT]))
                ? $data[self::FIELD_CLASS_EXT]
                : null;
            if ($data[self::FIELD_CLASS] instanceof FHIREncounterClass) {
                $this->setClass($data[self::FIELD_CLASS]);
            } elseif ($ext && is_scalar($data[self::FIELD_CLASS])) {
                $this->setClass(new FHIREncounterClass([FHIREncounterClass::FIELD_VALUE => $data[self::FIELD_CLASS]] + $ext));
            } else {
                $this->setClass(new FHIREncounterClass($data[self::FIELD_CLASS]));
            }
        }
        if (isset($data[self::FIELD_EPISODE_OF_CARE])) {
            if (is_array($data[self::FIELD_EPISODE_OF_CARE])) {
                foreach($data[self::FIELD_EPISODE_OF_CARE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addEpisodeOfCare($v);
                    } else {
                        $this->addEpisodeOfCare(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_EPISODE_OF_CARE] instanceof FHIRReference) {
                $this->addEpisodeOfCare($data[self::FIELD_EPISODE_OF_CARE]);
            } else {
                $this->addEpisodeOfCare(new FHIRReference($data[self::FIELD_EPISODE_OF_CARE]));
            }
        }
        if (isset($data[self::FIELD_HOSPITALIZATION])) {
            if ($data[self::FIELD_HOSPITALIZATION] instanceof FHIREncounterHospitalization) {
                $this->setHospitalization($data[self::FIELD_HOSPITALIZATION]);
            } else {
                $this->setHospitalization(new FHIREncounterHospitalization($data[self::FIELD_HOSPITALIZATION]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $i => $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
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
        if (isset($data[self::FIELD_LENGTH])) {
            if ($data[self::FIELD_LENGTH] instanceof FHIRDuration) {
                $this->setLength($data[self::FIELD_LENGTH]);
            } else {
                $this->setLength(new FHIRDuration($data[self::FIELD_LENGTH]));
            }
        }
        if (isset($data[self::FIELD_LOCATION])) {
            if (is_array($data[self::FIELD_LOCATION])) {
                foreach($data[self::FIELD_LOCATION] as $v) {
                    if ($v instanceof FHIREncounterLocation) {
                        $this->addLocation($v);
                    } else {
                        $this->addLocation(new FHIREncounterLocation($v));
                    }
                }
            } else if ($data[self::FIELD_LOCATION] instanceof FHIREncounterLocation) {
                $this->addLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->addLocation(new FHIREncounterLocation($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_PART_OF])) {
            if ($data[self::FIELD_PART_OF] instanceof FHIRReference) {
                $this->setPartOf($data[self::FIELD_PART_OF]);
            } else {
                $this->setPartOf(new FHIRReference($data[self::FIELD_PART_OF]));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT])) {
            if (is_array($data[self::FIELD_PARTICIPANT])) {
                foreach($data[self::FIELD_PARTICIPANT] as $v) {
                    if ($v instanceof FHIREncounterParticipant) {
                        $this->addParticipant($v);
                    } else {
                        $this->addParticipant(new FHIREncounterParticipant($v));
                    }
                }
            } else if ($data[self::FIELD_PARTICIPANT] instanceof FHIREncounterParticipant) {
                $this->addParticipant($data[self::FIELD_PARTICIPANT]);
            } else {
                $this->addParticipant(new FHIREncounterParticipant($data[self::FIELD_PARTICIPANT]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_PRIORITY])) {
            if ($data[self::FIELD_PRIORITY] instanceof FHIRCodeableConcept) {
                $this->setPriority($data[self::FIELD_PRIORITY]);
            } else {
                $this->setPriority(new FHIRCodeableConcept($data[self::FIELD_PRIORITY]));
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
        if (isset($data[self::FIELD_SERVICE_PROVIDER])) {
            if ($data[self::FIELD_SERVICE_PROVIDER] instanceof FHIRReference) {
                $this->setServiceProvider($data[self::FIELD_SERVICE_PROVIDER]);
            } else {
                $this->setServiceProvider(new FHIRReference($data[self::FIELD_SERVICE_PROVIDER]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIREncounterState) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATUS])) {
                $this->setStatus(new FHIREncounterState([FHIREncounterState::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
            } else {
                $this->setStatus(new FHIREncounterState($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_STATUS_HISTORY])) {
            if (is_array($data[self::FIELD_STATUS_HISTORY])) {
                foreach($data[self::FIELD_STATUS_HISTORY] as $v) {
                    if ($v instanceof FHIREncounterStatusHistory) {
                        $this->addStatusHistory($v);
                    } else {
                        $this->addStatusHistory(new FHIREncounterStatusHistory($v));
                    }
                }
            } else if ($data[self::FIELD_STATUS_HISTORY] instanceof FHIREncounterStatusHistory) {
                $this->addStatusHistory($data[self::FIELD_STATUS_HISTORY]);
            } else {
                $this->addStatusHistory(new FHIREncounterStatusHistory($data[self::FIELD_STATUS_HISTORY]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if (is_array($data[self::FIELD_TYPE])) {
                foreach($data[self::FIELD_TYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addType($v);
                    } else {
                        $this->addType(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->addType($data[self::FIELD_TYPE]);
            } else {
                $this->addType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
        return "<Encounter{$xmlns}></Encounter>";
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
     * The appointment that scheduled this encounter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * The appointment that scheduled this encounter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $appointment
     * @return static
     */
    public function setAppointment(FHIRReference $appointment = null)
    {
        $this->appointment = $appointment;
        return $this;
    }

    /**
     * Classification of the encounter
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * inpatient | outpatient | ambulatory | emergency +.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREncounterClass
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Classification of the encounter
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * inpatient | outpatient | ambulatory | emergency +.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREncounterClass $class
     * @return static
     */
    public function setClass(FHIREncounterClass $class = null)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where a specific encounter should be classified as a part of a specific
     * episode(s) of care this field should be used. This association can facilitate
     * grouping of related encounters together for a specific purpose, such as
     * government reporting, issue tracking, association via a common problem. The
     * association is recorded on the encounter as these are typically created after
     * the episode of care, and grouped on entry rather than editing the episode of
     * care to append another encounter to it (the episode of care could span years).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getEpisodeOfCare()
    {
        return $this->episodeOfCare;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where a specific encounter should be classified as a part of a specific
     * episode(s) of care this field should be used. This association can facilitate
     * grouping of related encounters together for a specific purpose, such as
     * government reporting, issue tracking, association via a common problem. The
     * association is recorded on the encounter as these are typically created after
     * the episode of care, and grouped on entry rather than editing the episode of
     * care to append another encounter to it (the episode of care could span years).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $episodeOfCare
     * @return static
     */
    public function addEpisodeOfCare(FHIRReference $episodeOfCare = null)
    {
        $this->episodeOfCare[] = $episodeOfCare;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where a specific encounter should be classified as a part of a specific
     * episode(s) of care this field should be used. This association can facilitate
     * grouping of related encounters together for a specific purpose, such as
     * government reporting, issue tracking, association via a common problem. The
     * association is recorded on the encounter as these are typically created after
     * the episode of care, and grouped on entry rather than editing the episode of
     * care to append another encounter to it (the episode of care could span years).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[] $episodeOfCare
     * @return static
     */
    public function setEpisodeOfCare(array $episodeOfCare = [])
    {
        $this->episodeOfCare = [];
        if ([] === $episodeOfCare) {
            return $this;
        }
        foreach($episodeOfCare as $v) {
            if ($v instanceof FHIRReference) {
                $this->addEpisodeOfCare($v);
            } else {
                $this->addEpisodeOfCare(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * Details about the admission to a healthcare service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function getHospitalization()
    {
        return $this->hospitalization;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * Details about the admission to a healthcare service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization $hospitalization
     * @return static
     */
    public function setHospitalization(FHIREncounterHospitalization $hospitalization = null)
    {
        $this->hospitalization = $hospitalization;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier(s) by which this encounter is known.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier(s) by which this encounter is known.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier(s) by which this encounter is known.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[] $identifier
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The referral request this encounter satisfies (incoming referral).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getIncomingReferral()
    {
        return $this->incomingReferral;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The referral request this encounter satisfies (incoming referral).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $incomingReferral
     * @return static
     */
    public function addIncomingReferral(FHIRReference $incomingReferral = null)
    {
        $this->incomingReferral[] = $incomingReferral;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The referral request this encounter satisfies (incoming referral).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[] $incomingReferral
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason the encounter takes place, as specified using information from another
     * resource. For admissions, this is the admission diagnosis. The indication will
     * typically be a Condition (with other resources referenced in the
     * evidence.detail), or a Procedure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason the encounter takes place, as specified using information from another
     * resource. For admissions, this is the admission diagnosis. The indication will
     * typically be a Condition (with other resources referenced in the
     * evidence.detail), or a Procedure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $indication
     * @return static
     */
    public function addIndication(FHIRReference $indication = null)
    {
        $this->indication[] = $indication;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason the encounter takes place, as specified using information from another
     * resource. For admissions, this is the admission diagnosis. The indication will
     * typically be a Condition (with other resources referenced in the
     * evidence.detail), or a Procedure.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[] $indication
     * @return static
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
     * Quantity of time the encounter lasted. This excludes the time during leaves of
     * absence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Quantity of time the encounter lasted. This excludes the time during leaves of
     * absence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration $length
     * @return static
     */
    public function setLength(FHIRDuration $length = null)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * List of locations where the patient has been during this encounter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * List of locations where the patient has been during this encounter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation $location
     * @return static
     */
    public function addLocation(FHIREncounterLocation $location = null)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * List of locations where the patient has been during this encounter.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation[] $location
     * @return static
     */
    public function setLocation(array $location = [])
    {
        $this->location = [];
        if ([] === $location) {
            return $this;
        }
        foreach($location as $v) {
            if ($v instanceof FHIREncounterLocation) {
                $this->addLocation($v);
            } else {
                $this->addLocation(new FHIREncounterLocation($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Another Encounter of which this encounter is a part of (administratively or in
     * time).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Another Encounter of which this encounter is a part of (administratively or in
     * time).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $partOf
     * @return static
     */
    public function setPartOf(FHIRReference $partOf = null)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * The list of people responsible for providing the service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * The list of people responsible for providing the service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant $participant
     * @return static
     */
    public function addParticipant(FHIREncounterParticipant $participant = null)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * The list of people responsible for providing the service.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant[] $participant
     * @return static
     */
    public function setParticipant(array $participant = [])
    {
        $this->participant = [];
        if ([] === $participant) {
            return $this;
        }
        foreach($participant as $v) {
            if ($v instanceof FHIREncounterParticipant) {
                $this->addParticipant($v);
            } else {
                $this->addParticipant(new FHIREncounterParticipant($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient present at the encounter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient present at the encounter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The start and end time of the encounter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The start and end time of the encounter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the urgency of the encounter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the urgency of the encounter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $priority
     * @return static
     */
    public function setPriority(FHIRCodeableConcept $priority = null)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason the encounter takes place, expressed as a code. For admissions, this can
     * be used for a coded admission diagnosis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason the encounter takes place, expressed as a code. For admissions, this can
     * be used for a coded admission diagnosis.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $reason
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason the encounter takes place, expressed as a code. For admissions, this can
     * be used for a coded admission diagnosis.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $reason
     * @return static
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An organization that is in charge of maintaining the information of this
     * Encounter (e.g. who maintains the report or the master service catalog item,
     * etc.). This MAY be the same as the organization on the Patient record, however
     * it could be different. This MAY not be not the Service Delivery Location's
     * Organization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An organization that is in charge of maintaining the information of this
     * Encounter (e.g. who maintains the report or the master service catalog item,
     * etc.). This MAY be the same as the organization on the Patient record, however
     * it could be different. This MAY not be not the Service Delivery Location's
     * Organization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $serviceProvider
     * @return static
     */
    public function setServiceProvider(FHIRReference $serviceProvider = null)
    {
        $this->serviceProvider = $serviceProvider;
        return $this;
    }

    /**
     * Current state of the encounter
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * planned | arrived | in-progress | onleave | finished | cancelled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREncounterState
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Current state of the encounter
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * planned | arrived | in-progress | onleave | finished | cancelled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREncounterState $status
     * @return static
     */
    public function setStatus(FHIREncounterState $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * The status history permits the encounter resource to contain the status history
     * without needing to read through the historical versions of the resource, or even
     * have the server store them.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory[]
     */
    public function getStatusHistory()
    {
        return $this->statusHistory;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * The status history permits the encounter resource to contain the status history
     * without needing to read through the historical versions of the resource, or even
     * have the server store them.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory $statusHistory
     * @return static
     */
    public function addStatusHistory(FHIREncounterStatusHistory $statusHistory = null)
    {
        $this->statusHistory[] = $statusHistory;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * The status history permits the encounter resource to contain the status history
     * without needing to read through the historical versions of the resource, or even
     * have the server store them.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory[] $statusHistory
     * @return static
     */
    public function setStatusHistory(array $statusHistory = [])
    {
        $this->statusHistory = [];
        if ([] === $statusHistory) {
            return $this;
        }
        foreach($statusHistory as $v) {
            if ($v instanceof FHIREncounterStatusHistory) {
                $this->addStatusHistory($v);
            } else {
                $this->addStatusHistory(new FHIREncounterStatusHistory($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled
     * nursing, rehabilitation).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled
     * nursing, rehabilitation).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function addType(FHIRCodeableConcept $type = null)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled
     * nursing, rehabilitation).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $type
     * @return static
     */
    public function setType(array $type = [])
    {
        $this->type = [];
        if ([] === $type) {
            return $this;
        }
        foreach($type as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addType($v);
            } else {
                $this->addType(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREncounter $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREncounter
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
                throw new \DomainException(sprintf('FHIREncounter::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIREncounter::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIREncounter;
        } elseif (!is_object($type) || !($type instanceof FHIREncounter)) {
            throw new \RuntimeException(sprintf(
                'FHIREncounter::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREncounter or null, %s seen.',
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
        if (isset($children->appointment)) {
            $type->setAppointment(FHIRReference::xmlUnserialize($children->appointment));
        }
        if (isset($children->class)) {
            $type->setClass(FHIREncounterClass::xmlUnserialize($children->class));
        }
        if (isset($children->episodeOfCare)) {
            foreach($children->episodeOfCare as $child) {
                $type->addEpisodeOfCare(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->hospitalization)) {
            $type->setHospitalization(FHIREncounterHospitalization::xmlUnserialize($children->hospitalization));
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
        if (isset($children->length)) {
            $type->setLength(FHIRDuration::xmlUnserialize($children->length));
        }
        if (isset($children->location)) {
            foreach($children->location as $child) {
                $type->addLocation(FHIREncounterLocation::xmlUnserialize($child));
            }
        }
        if (isset($children->partOf)) {
            $type->setPartOf(FHIRReference::xmlUnserialize($children->partOf));
        }
        if (isset($children->participant)) {
            foreach($children->participant as $child) {
                $type->addParticipant(FHIREncounterParticipant::xmlUnserialize($child));
            }
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($children->priority)) {
            $type->setPriority(FHIRCodeableConcept::xmlUnserialize($children->priority));
        }
        if (isset($children->reason)) {
            foreach($children->reason as $child) {
                $type->addReason(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->serviceProvider)) {
            $type->setServiceProvider(FHIRReference::xmlUnserialize($children->serviceProvider));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIREncounterState::xmlUnserialize($children->status));
        }
        if (isset($children->statusHistory)) {
            foreach($children->statusHistory as $child) {
                $type->addStatusHistory(FHIREncounterStatusHistory::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            foreach($children->type as $child) {
                $type->addType(FHIRCodeableConcept::xmlUnserialize($child));
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

        if (null !== ($v = $this->getAppointment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_APPOINTMENT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getClass())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CLASS, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getEpisodeOfCare())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_EPISODE_OF_CARE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getHospitalization())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_HOSPITALIZATION, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getIncomingReferral())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INCOMING_REFERRAL, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getIndication())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INDICATION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getLength())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LENGTH, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getLocation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getPartOf())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PART_OF, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getParticipant())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPriority())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRIORITY, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getServiceProvider())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SERVICE_PROVIDER, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getStatusHistory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS_HISTORY, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getAppointment())) {
            $a[self::FIELD_APPOINTMENT] = $v;
        }
        if (null !== ($v = $this->getClass())) {
            $a[self::FIELD_CLASS] = $v;
        }
        if ([] !== ($vs = $this->getEpisodeOfCare())) {
            $a[self::FIELD_EPISODE_OF_CARE] = $vs;
        }
        if (null !== ($v = $this->getHospitalization())) {
            $a[self::FIELD_HOSPITALIZATION] = $v;
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
        if (null !== ($v = $this->getLength())) {
            $a[self::FIELD_LENGTH] = $v;
        }
        if ([] !== ($vs = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = $vs;
        }
        if (null !== ($v = $this->getPartOf())) {
            $a[self::FIELD_PART_OF] = $v;
        }
        if ([] !== ($vs = $this->getParticipant())) {
            $a[self::FIELD_PARTICIPANT] = $vs;
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if (null !== ($v = $this->getPriority())) {
            $a[self::FIELD_PRIORITY] = $v;
        }
        if ([] !== ($vs = $this->getReason())) {
            $a[self::FIELD_REASON] = $vs;
        }
        if (null !== ($v = $this->getServiceProvider())) {
            $a[self::FIELD_SERVICE_PROVIDER] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if ([] !== ($vs = $this->getStatusHistory())) {
            $a[self::FIELD_STATUS_HISTORY] = $vs;
        }
        if ([] !== ($vs = $this->getType())) {
            $a[self::FIELD_TYPE] = $vs;
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