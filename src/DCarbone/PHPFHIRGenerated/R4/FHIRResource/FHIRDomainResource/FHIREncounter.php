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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterClassHistory;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterDiagnosis;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIREncounterStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * An interaction between a patient and healthcare provider(s) for the purpose of
 * providing healthcare service(s) or assessing the health status of a patient.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIREncounter
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIREncounter extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ENCOUNTER;
    const FIELD_ACCOUNT = 'account';
    const FIELD_APPOINTMENT = 'appointment';
    const FIELD_BASED_ON = 'basedOn';
    const FIELD_CLASS = 'class';
    const FIELD_CLASS_HISTORY = 'classHistory';
    const FIELD_DIAGNOSIS = 'diagnosis';
    const FIELD_EPISODE_OF_CARE = 'episodeOfCare';
    const FIELD_HOSPITALIZATION = 'hospitalization';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_LENGTH = 'length';
    const FIELD_LOCATION = 'location';
    const FIELD_PART_OF = 'partOf';
    const FIELD_PARTICIPANT = 'participant';
    const FIELD_PERIOD = 'period';
    const FIELD_PRIORITY = 'priority';
    const FIELD_REASON_CODE = 'reasonCode';
    const FIELD_REASON_REFERENCE = 'reasonReference';
    const FIELD_SERVICE_PROVIDER = 'serviceProvider';
    const FIELD_SERVICE_TYPE = 'serviceType';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_STATUS_HISTORY = 'statusHistory';
    const FIELD_SUBJECT = 'subject';
    const FIELD_TYPE = 'type';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of accounts that may be used for billing for this Encounter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $account = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The appointment that scheduled this encounter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $appointment = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request this encounter satisfies (e.g. incoming referral or procedure
     * request).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $basedOn = [];

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Concepts representing classification of patient encounter such as ambulatory
     * (outpatient), inpatient, emergency, home health or others due to local
     * variations.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding
     */
    protected $class = null;

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * The class history permits the tracking of the encounters transitions without
     * needing to go through the resource history. This would be used for a case where
     * an admission starts of as an emergency encounter, then transitions into an
     * inpatient scenario. Doing this and not restarting a new encounter ensures that
     * any lab/diagnostic results can more easily follow the patient and not require
     * re-processing and not get lost or cancelled during a kind of discharge from
     * emergency to inpatient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterClassHistory[]
     */
    protected $classHistory = [];

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * The list of diagnosis relevant to this encounter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterDiagnosis[]
     */
    protected $diagnosis = [];

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
     * the episode of care and grouped on entry rather than editing the episode of care
     * to append another encounter to it (the episode of care could span years).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $episodeOfCare = [];

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * Details about the admission to a healthcare service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    protected $hospitalization = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier(s) by which this encounter is known.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Quantity of time the encounter lasted. This excludes the time during leaves of
     * absence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected $length = null;

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * List of locations where the patient has been during this encounter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation[]
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $partOf = null;

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * The list of people responsible for providing the service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant[]
     */
    protected $participant = [];

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The start and end time of the encounter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $reasonCode = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason the encounter takes place, expressed as a code. For admissions, this can
     * be used for a coded admission diagnosis.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $reasonReference = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that is primarily responsible for this Encounter's services.
     * This MAY be the same as the organization on the Patient record, however it could
     * be different, such as if the actor performing the services was from an external
     * organization (which may be billed seperately) for an external consultation.
     * Refer to the example bundle showing an abbreviated set of Encounters for a
     * colonoscopy.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $serviceProvider = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Broad categorization of the service that is to be provided (e.g. cardiology).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $serviceType = null;

    /**
     * Current state of the encounter.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * planned | arrived | triaged | in-progress | onleave | finished | cancelled +.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIREncounterStatus
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory[]
     */
    protected $statusHistory = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient or group present at the encounter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $subject = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled
     * nursing, rehabilitation).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $type = [];

    /**
     * Validation map for fields in type Encounter
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_ACCOUNT])) {
            if (is_array($data[self::FIELD_ACCOUNT])) {
                foreach($data[self::FIELD_ACCOUNT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addAccount($v);
                    } else {
                        $this->addAccount(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_ACCOUNT] instanceof FHIRReference) {
                $this->addAccount($data[self::FIELD_ACCOUNT]);
            } else {
                $this->addAccount(new FHIRReference($data[self::FIELD_ACCOUNT]));
            }
        }
        if (isset($data[self::FIELD_APPOINTMENT])) {
            if (is_array($data[self::FIELD_APPOINTMENT])) {
                foreach($data[self::FIELD_APPOINTMENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addAppointment($v);
                    } else {
                        $this->addAppointment(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_APPOINTMENT] instanceof FHIRReference) {
                $this->addAppointment($data[self::FIELD_APPOINTMENT]);
            } else {
                $this->addAppointment(new FHIRReference($data[self::FIELD_APPOINTMENT]));
            }
        }
        if (isset($data[self::FIELD_BASED_ON])) {
            if (is_array($data[self::FIELD_BASED_ON])) {
                foreach($data[self::FIELD_BASED_ON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addBasedOn($v);
                    } else {
                        $this->addBasedOn(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_BASED_ON] instanceof FHIRReference) {
                $this->addBasedOn($data[self::FIELD_BASED_ON]);
            } else {
                $this->addBasedOn(new FHIRReference($data[self::FIELD_BASED_ON]));
            }
        }
        if (isset($data[self::FIELD_CLASS])) {
            if ($data[self::FIELD_CLASS] instanceof FHIRCoding) {
                $this->setClass($data[self::FIELD_CLASS]);
            } else {
                $this->setClass(new FHIRCoding($data[self::FIELD_CLASS]));
            }
        }
        if (isset($data[self::FIELD_CLASS_HISTORY])) {
            if (is_array($data[self::FIELD_CLASS_HISTORY])) {
                foreach($data[self::FIELD_CLASS_HISTORY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIREncounterClassHistory) {
                        $this->addClassHistory($v);
                    } else {
                        $this->addClassHistory(new FHIREncounterClassHistory($v));
                    }
                }
            } else if ($data[self::FIELD_CLASS_HISTORY] instanceof FHIREncounterClassHistory) {
                $this->addClassHistory($data[self::FIELD_CLASS_HISTORY]);
            } else {
                $this->addClassHistory(new FHIREncounterClassHistory($data[self::FIELD_CLASS_HISTORY]));
            }
        }
        if (isset($data[self::FIELD_DIAGNOSIS])) {
            if (is_array($data[self::FIELD_DIAGNOSIS])) {
                foreach($data[self::FIELD_DIAGNOSIS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIREncounterDiagnosis) {
                        $this->addDiagnosis($v);
                    } else {
                        $this->addDiagnosis(new FHIREncounterDiagnosis($v));
                    }
                }
            } else if ($data[self::FIELD_DIAGNOSIS] instanceof FHIREncounterDiagnosis) {
                $this->addDiagnosis($data[self::FIELD_DIAGNOSIS]);
            } else {
                $this->addDiagnosis(new FHIREncounterDiagnosis($data[self::FIELD_DIAGNOSIS]));
            }
        }
        if (isset($data[self::FIELD_EPISODE_OF_CARE])) {
            if (is_array($data[self::FIELD_EPISODE_OF_CARE])) {
                foreach($data[self::FIELD_EPISODE_OF_CARE] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_REASON_CODE])) {
            if (is_array($data[self::FIELD_REASON_CODE])) {
                foreach($data[self::FIELD_REASON_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReasonCode($v);
                    } else {
                        $this->addReasonCode(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_REASON_CODE] instanceof FHIRCodeableConcept) {
                $this->addReasonCode($data[self::FIELD_REASON_CODE]);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($data[self::FIELD_REASON_CODE]));
            }
        }
        if (isset($data[self::FIELD_REASON_REFERENCE])) {
            if (is_array($data[self::FIELD_REASON_REFERENCE])) {
                foreach($data[self::FIELD_REASON_REFERENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addReasonReference($v);
                    } else {
                        $this->addReasonReference(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_REASON_REFERENCE] instanceof FHIRReference) {
                $this->addReasonReference($data[self::FIELD_REASON_REFERENCE]);
            } else {
                $this->addReasonReference(new FHIRReference($data[self::FIELD_REASON_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_SERVICE_PROVIDER])) {
            if ($data[self::FIELD_SERVICE_PROVIDER] instanceof FHIRReference) {
                $this->setServiceProvider($data[self::FIELD_SERVICE_PROVIDER]);
            } else {
                $this->setServiceProvider(new FHIRReference($data[self::FIELD_SERVICE_PROVIDER]));
            }
        }
        if (isset($data[self::FIELD_SERVICE_TYPE])) {
            if ($data[self::FIELD_SERVICE_TYPE] instanceof FHIRCodeableConcept) {
                $this->setServiceType($data[self::FIELD_SERVICE_TYPE]);
            } else {
                $this->setServiceType(new FHIRCodeableConcept($data[self::FIELD_SERVICE_TYPE]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIREncounterStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIREncounterStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIREncounterStatus([FHIREncounterStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIREncounterStatus($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS_HISTORY])) {
            if (is_array($data[self::FIELD_STATUS_HISTORY])) {
                foreach($data[self::FIELD_STATUS_HISTORY] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if (is_array($data[self::FIELD_TYPE])) {
                foreach($data[self::FIELD_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
     * The set of accounts that may be used for billing for this Encounter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of accounts that may be used for billing for this Encounter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $account
     * @return static
     */
    public function addAccount(FHIRReference $account = null)
    {
        $this->account[] = $account;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of accounts that may be used for billing for this Encounter.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $account
     * @return static
     */
    public function setAccount(array $account = [])
    {
        $this->account = [];
        if ([] === $account) {
            return $this;
        }
        foreach($account as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAccount($v);
            } else {
                $this->addAccount(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The appointment that scheduled this encounter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $appointment
     * @return static
     */
    public function addAppointment(FHIRReference $appointment = null)
    {
        $this->appointment[] = $appointment;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The appointment that scheduled this encounter.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $appointment
     * @return static
     */
    public function setAppointment(array $appointment = [])
    {
        $this->appointment = [];
        if ([] === $appointment) {
            return $this;
        }
        foreach($appointment as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAppointment($v);
            } else {
                $this->addAppointment(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request this encounter satisfies (e.g. incoming referral or procedure
     * request).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request this encounter satisfies (e.g. incoming referral or procedure
     * request).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $basedOn
     * @return static
     */
    public function addBasedOn(FHIRReference $basedOn = null)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request this encounter satisfies (e.g. incoming referral or procedure
     * request).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $basedOn
     * @return static
     */
    public function setBasedOn(array $basedOn = [])
    {
        $this->basedOn = [];
        if ([] === $basedOn) {
            return $this;
        }
        foreach($basedOn as $v) {
            if ($v instanceof FHIRReference) {
                $this->addBasedOn($v);
            } else {
                $this->addBasedOn(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Concepts representing classification of patient encounter such as ambulatory
     * (outpatient), inpatient, emergency, home health or others due to local
     * variations.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Concepts representing classification of patient encounter such as ambulatory
     * (outpatient), inpatient, emergency, home health or others due to local
     * variations.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding $class
     * @return static
     */
    public function setClass(FHIRCoding $class = null)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * The class history permits the tracking of the encounters transitions without
     * needing to go through the resource history. This would be used for a case where
     * an admission starts of as an emergency encounter, then transitions into an
     * inpatient scenario. Doing this and not restarting a new encounter ensures that
     * any lab/diagnostic results can more easily follow the patient and not require
     * re-processing and not get lost or cancelled during a kind of discharge from
     * emergency to inpatient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterClassHistory[]
     */
    public function getClassHistory()
    {
        return $this->classHistory;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * The class history permits the tracking of the encounters transitions without
     * needing to go through the resource history. This would be used for a case where
     * an admission starts of as an emergency encounter, then transitions into an
     * inpatient scenario. Doing this and not restarting a new encounter ensures that
     * any lab/diagnostic results can more easily follow the patient and not require
     * re-processing and not get lost or cancelled during a kind of discharge from
     * emergency to inpatient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterClassHistory $classHistory
     * @return static
     */
    public function addClassHistory(FHIREncounterClassHistory $classHistory = null)
    {
        $this->classHistory[] = $classHistory;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * The class history permits the tracking of the encounters transitions without
     * needing to go through the resource history. This would be used for a case where
     * an admission starts of as an emergency encounter, then transitions into an
     * inpatient scenario. Doing this and not restarting a new encounter ensures that
     * any lab/diagnostic results can more easily follow the patient and not require
     * re-processing and not get lost or cancelled during a kind of discharge from
     * emergency to inpatient.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterClassHistory[] $classHistory
     * @return static
     */
    public function setClassHistory(array $classHistory = [])
    {
        $this->classHistory = [];
        if ([] === $classHistory) {
            return $this;
        }
        foreach($classHistory as $v) {
            if ($v instanceof FHIREncounterClassHistory) {
                $this->addClassHistory($v);
            } else {
                $this->addClassHistory(new FHIREncounterClassHistory($v));
            }
        }
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * The list of diagnosis relevant to this encounter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterDiagnosis[]
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * The list of diagnosis relevant to this encounter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterDiagnosis $diagnosis
     * @return static
     */
    public function addDiagnosis(FHIREncounterDiagnosis $diagnosis = null)
    {
        $this->diagnosis[] = $diagnosis;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * The list of diagnosis relevant to this encounter.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterDiagnosis[] $diagnosis
     * @return static
     */
    public function setDiagnosis(array $diagnosis = [])
    {
        $this->diagnosis = [];
        if ([] === $diagnosis) {
            return $this;
        }
        foreach($diagnosis as $v) {
            if ($v instanceof FHIREncounterDiagnosis) {
                $this->addDiagnosis($v);
            } else {
                $this->addDiagnosis(new FHIREncounterDiagnosis($v));
            }
        }
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
     * the episode of care and grouped on entry rather than editing the episode of care
     * to append another encounter to it (the episode of care could span years).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
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
     * the episode of care and grouped on entry rather than editing the episode of care
     * to append another encounter to it (the episode of care could span years).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $episodeOfCare
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
     * the episode of care and grouped on entry rather than editing the episode of care
     * to append another encounter to it (the episode of care could span years).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $episodeOfCare
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization $hospitalization
     * @return static
     */
    public function setHospitalization(FHIREncounterHospitalization $hospitalization = null)
    {
        $this->hospitalization = $hospitalization;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier(s) by which this encounter is known.
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
     * Identifier(s) by which this encounter is known.
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
     * Identifier(s) by which this encounter is known.
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
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Quantity of time the encounter lasted. This excludes the time during leaves of
     * absence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Quantity of time the encounter lasted. This excludes the time during leaves of
     * absence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $length
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation $location
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation[] $location
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $partOf
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
     * The list of people responsible for providing the service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * The list of people responsible for providing the service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant $participant
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
     * The list of people responsible for providing the service.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant[] $participant
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
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The start and end time of the encounter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $period
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $priority
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return static
     */
    public function addReasonCode(FHIRCodeableConcept $reasonCode = null)
    {
        $this->reasonCode[] = $reasonCode;
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $reasonCode
     * @return static
     */
    public function setReasonCode(array $reasonCode = [])
    {
        $this->reasonCode = [];
        if ([] === $reasonCode) {
            return $this;
        }
        foreach($reasonCode as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReasonCode($v);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason the encounter takes place, expressed as a code. For admissions, this can
     * be used for a coded admission diagnosis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason the encounter takes place, expressed as a code. For admissions, this can
     * be used for a coded admission diagnosis.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $reasonReference
     * @return static
     */
    public function addReasonReference(FHIRReference $reasonReference = null)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason the encounter takes place, expressed as a code. For admissions, this can
     * be used for a coded admission diagnosis.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $reasonReference
     * @return static
     */
    public function setReasonReference(array $reasonReference = [])
    {
        $this->reasonReference = [];
        if ([] === $reasonReference) {
            return $this;
        }
        foreach($reasonReference as $v) {
            if ($v instanceof FHIRReference) {
                $this->addReasonReference($v);
            } else {
                $this->addReasonReference(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that is primarily responsible for this Encounter's services.
     * This MAY be the same as the organization on the Patient record, however it could
     * be different, such as if the actor performing the services was from an external
     * organization (which may be billed seperately) for an external consultation.
     * Refer to the example bundle showing an abbreviated set of Encounters for a
     * colonoscopy.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * The organization that is primarily responsible for this Encounter's services.
     * This MAY be the same as the organization on the Patient record, however it could
     * be different, such as if the actor performing the services was from an external
     * organization (which may be billed seperately) for an external consultation.
     * Refer to the example bundle showing an abbreviated set of Encounters for a
     * colonoscopy.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $serviceProvider
     * @return static
     */
    public function setServiceProvider(FHIRReference $serviceProvider = null)
    {
        $this->serviceProvider = $serviceProvider;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Broad categorization of the service that is to be provided (e.g. cardiology).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Broad categorization of the service that is to be provided (e.g. cardiology).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $serviceType
     * @return static
     */
    public function setServiceType(FHIRCodeableConcept $serviceType = null)
    {
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * Current state of the encounter.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * planned | arrived | triaged | in-progress | onleave | finished | cancelled +.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIREncounterStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Current state of the encounter.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * planned | arrived | triaged | in-progress | onleave | finished | cancelled +.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIREncounterStatus $status
     * @return static
     */
    public function setStatus(FHIREncounterStatus $status = null)
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory $statusHistory
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory[] $statusHistory
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient or group present at the encounter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient or group present at the encounter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $type
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
        if ([] !== ($vs = $this->getAccount())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ACCOUNT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAppointment())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_APPOINTMENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BASED_ON, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getClass())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLASS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getClassHistory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CLASS_HISTORY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDiagnosis())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DIAGNOSIS, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getEpisodeOfCare())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EPISODE_OF_CARE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getHospitalization())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HOSPITALIZATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getLength())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LENGTH] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getLocation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LOCATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPartOf())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PART_OF] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getParticipant())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARTICIPANT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPriority())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIORITY] = $fieldErrs;
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
        if (null !== ($v = $this->getServiceProvider())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERVICE_PROVIDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getServiceType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERVICE_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getStatusHistory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_STATUS_HISTORY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACCOUNT])) {
            $v = $this->getAccount();
            foreach($validationRules[self::FIELD_ACCOUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_ACCOUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACCOUNT])) {
                        $errs[self::FIELD_ACCOUNT] = [];
                    }
                    $errs[self::FIELD_ACCOUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_APPOINTMENT])) {
            $v = $this->getAppointment();
            foreach($validationRules[self::FIELD_APPOINTMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_APPOINTMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPOINTMENT])) {
                        $errs[self::FIELD_APPOINTMENT] = [];
                    }
                    $errs[self::FIELD_APPOINTMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASED_ON])) {
            $v = $this->getBasedOn();
            foreach($validationRules[self::FIELD_BASED_ON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_BASED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASED_ON])) {
                        $errs[self::FIELD_BASED_ON] = [];
                    }
                    $errs[self::FIELD_BASED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASS])) {
            $v = $this->getClass();
            foreach($validationRules[self::FIELD_CLASS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_CLASS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASS])) {
                        $errs[self::FIELD_CLASS] = [];
                    }
                    $errs[self::FIELD_CLASS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASS_HISTORY])) {
            $v = $this->getClassHistory();
            foreach($validationRules[self::FIELD_CLASS_HISTORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_CLASS_HISTORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASS_HISTORY])) {
                        $errs[self::FIELD_CLASS_HISTORY] = [];
                    }
                    $errs[self::FIELD_CLASS_HISTORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIAGNOSIS])) {
            $v = $this->getDiagnosis();
            foreach($validationRules[self::FIELD_DIAGNOSIS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_DIAGNOSIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIAGNOSIS])) {
                        $errs[self::FIELD_DIAGNOSIS] = [];
                    }
                    $errs[self::FIELD_DIAGNOSIS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EPISODE_OF_CARE])) {
            $v = $this->getEpisodeOfCare();
            foreach($validationRules[self::FIELD_EPISODE_OF_CARE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_EPISODE_OF_CARE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EPISODE_OF_CARE])) {
                        $errs[self::FIELD_EPISODE_OF_CARE] = [];
                    }
                    $errs[self::FIELD_EPISODE_OF_CARE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HOSPITALIZATION])) {
            $v = $this->getHospitalization();
            foreach($validationRules[self::FIELD_HOSPITALIZATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_HOSPITALIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HOSPITALIZATION])) {
                        $errs[self::FIELD_HOSPITALIZATION] = [];
                    }
                    $errs[self::FIELD_HOSPITALIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LENGTH])) {
            $v = $this->getLength();
            foreach($validationRules[self::FIELD_LENGTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_LENGTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LENGTH])) {
                        $errs[self::FIELD_LENGTH] = [];
                    }
                    $errs[self::FIELD_LENGTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PART_OF])) {
            $v = $this->getPartOf();
            foreach($validationRules[self::FIELD_PART_OF] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_PART_OF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PART_OF])) {
                        $errs[self::FIELD_PART_OF] = [];
                    }
                    $errs[self::FIELD_PART_OF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARTICIPANT])) {
            $v = $this->getParticipant();
            foreach($validationRules[self::FIELD_PARTICIPANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_PARTICIPANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTICIPANT])) {
                        $errs[self::FIELD_PARTICIPANT] = [];
                    }
                    $errs[self::FIELD_PARTICIPANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIORITY])) {
            $v = $this->getPriority();
            foreach($validationRules[self::FIELD_PRIORITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_PRIORITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIORITY])) {
                        $errs[self::FIELD_PRIORITY] = [];
                    }
                    $errs[self::FIELD_PRIORITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_CODE])) {
            $v = $this->getReasonCode();
            foreach($validationRules[self::FIELD_REASON_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_REASON_CODE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_REASON_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_REFERENCE])) {
                        $errs[self::FIELD_REASON_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REASON_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICE_PROVIDER])) {
            $v = $this->getServiceProvider();
            foreach($validationRules[self::FIELD_SERVICE_PROVIDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_SERVICE_PROVIDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICE_PROVIDER])) {
                        $errs[self::FIELD_SERVICE_PROVIDER] = [];
                    }
                    $errs[self::FIELD_SERVICE_PROVIDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICE_TYPE])) {
            $v = $this->getServiceType();
            foreach($validationRules[self::FIELD_SERVICE_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_SERVICE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICE_TYPE])) {
                        $errs[self::FIELD_SERVICE_TYPE] = [];
                    }
                    $errs[self::FIELD_SERVICE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS_HISTORY])) {
            $v = $this->getStatusHistory();
            foreach($validationRules[self::FIELD_STATUS_HISTORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_STATUS_HISTORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_HISTORY])) {
                        $errs[self::FIELD_STATUS_HISTORY] = [];
                    }
                    $errs[self::FIELD_STATUS_HISTORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREncounter $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREncounter
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
                'FHIREncounter::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREncounter or null, %s seen.',
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
        if (isset($children->account)) {
            foreach($children->account as $child) {
                $type->addAccount(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->appointment)) {
            foreach($children->appointment as $child) {
                $type->addAppointment(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->basedOn)) {
            foreach($children->basedOn as $child) {
                $type->addBasedOn(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->class)) {
            $type->setClass(FHIRCoding::xmlUnserialize($children->class));
        }
        if (isset($children->classHistory)) {
            foreach($children->classHistory as $child) {
                $type->addClassHistory(FHIREncounterClassHistory::xmlUnserialize($child));
            }
        }
        if (isset($children->diagnosis)) {
            foreach($children->diagnosis as $child) {
                $type->addDiagnosis(FHIREncounterDiagnosis::xmlUnserialize($child));
            }
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
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($children->priority)) {
            $type->setPriority(FHIRCodeableConcept::xmlUnserialize($children->priority));
        }
        if (isset($children->reasonCode)) {
            foreach($children->reasonCode as $child) {
                $type->addReasonCode(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->reasonReference)) {
            foreach($children->reasonReference as $child) {
                $type->addReasonReference(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->serviceProvider)) {
            $type->setServiceProvider(FHIRReference::xmlUnserialize($children->serviceProvider));
        }
        if (isset($children->serviceType)) {
            $type->setServiceType(FHIRCodeableConcept::xmlUnserialize($children->serviceType));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIREncounterStatus::xmlUnserialize($children->status));
        }
        if (isset($children->statusHistory)) {
            foreach($children->statusHistory as $child) {
                $type->addStatusHistory(FHIREncounterStatusHistory::xmlUnserialize($child));
            }
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
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
        if ([] !== ($vs = $this->getAccount())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ACCOUNT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getAppointment())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_APPOINTMENT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_BASED_ON, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getClass())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CLASS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getClassHistory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CLASS_HISTORY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getDiagnosis())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DIAGNOSIS, null, $v->_getFHIRXMLNamespace()));
            }
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
        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPriority())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRIORITY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_REFERENCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getServiceProvider())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SERVICE_PROVIDER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getServiceType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SERVICE_TYPE, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getAccount())) {
            $a[self::FIELD_ACCOUNT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ACCOUNT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getAppointment())) {
            $a[self::FIELD_APPOINTMENT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_APPOINTMENT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            $a[self::FIELD_BASED_ON] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_BASED_ON][] = $v;
            }
        }
        if (null !== ($v = $this->getClass())) {
            $a[self::FIELD_CLASS] = $v;
        }
        if ([] !== ($vs = $this->getClassHistory())) {
            $a[self::FIELD_CLASS_HISTORY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CLASS_HISTORY][] = $v;
            }
        }
        if ([] !== ($vs = $this->getDiagnosis())) {
            $a[self::FIELD_DIAGNOSIS] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DIAGNOSIS][] = $v;
            }
        }
        if ([] !== ($vs = $this->getEpisodeOfCare())) {
            $a[self::FIELD_EPISODE_OF_CARE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_EPISODE_OF_CARE][] = $v;
            }
        }
        if (null !== ($v = $this->getHospitalization())) {
            $a[self::FIELD_HOSPITALIZATION] = $v;
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
        if (null !== ($v = $this->getLength())) {
            $a[self::FIELD_LENGTH] = $v;
        }
        if ([] !== ($vs = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LOCATION][] = $v;
            }
        }
        if (null !== ($v = $this->getPartOf())) {
            $a[self::FIELD_PART_OF] = $v;
        }
        if ([] !== ($vs = $this->getParticipant())) {
            $a[self::FIELD_PARTICIPANT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PARTICIPANT][] = $v;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if (null !== ($v = $this->getPriority())) {
            $a[self::FIELD_PRIORITY] = $v;
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            $a[self::FIELD_REASON_CODE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REASON_CODE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            $a[self::FIELD_REASON_REFERENCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REASON_REFERENCE][] = $v;
            }
        }
        if (null !== ($v = $this->getServiceProvider())) {
            $a[self::FIELD_SERVICE_PROVIDER] = $v;
        }
        if (null !== ($v = $this->getServiceType())) {
            $a[self::FIELD_SERVICE_TYPE] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIREncounterStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIREncounterStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getStatusHistory())) {
            $a[self::FIELD_STATUS_HISTORY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_STATUS_HISTORY][] = $v;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if ([] !== ($vs = $this->getType())) {
            $a[self::FIELD_TYPE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TYPE][] = $v;
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