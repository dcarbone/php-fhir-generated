<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 28th, 2019 20:54+0000
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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * Describes the event of a patient being administered a vaccination or a record of
 * a vaccination as reported by a patient, a clinician or another party and may
 * include vaccine reaction information and what vaccination protocol was followed.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRImmunization
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRImmunization extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMMUNIZATION;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DOSE_QUANTITY = 'doseQuantity';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_EXPIRATION_DATE = 'expirationDate';
    const FIELD_EXPIRATION_DATE_EXT = '_expirationDate';
    const FIELD_EXPLANATION = 'explanation';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_LOCATION = 'location';
    const FIELD_LOT_NUMBER = 'lotNumber';
    const FIELD_LOT_NUMBER_EXT = '_lotNumber';
    const FIELD_MANUFACTURER = 'manufacturer';
    const FIELD_NOTE = 'note';
    const FIELD_PATIENT = 'patient';
    const FIELD_PERFORMER = 'performer';
    const FIELD_REACTION = 'reaction';
    const FIELD_REPORTED = 'reported';
    const FIELD_REPORTED_EXT = '_reported';
    const FIELD_REQUESTER = 'requester';
    const FIELD_ROUTE = 'route';
    const FIELD_SITE = 'site';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_VACCINATION_PROTOCOL = 'vaccinationProtocol';
    const FIELD_VACCINE_CODE = 'vaccineCode';
    const FIELD_WAS_NOT_GIVEN = 'wasNotGiven';
    const FIELD_WAS_NOT_GIVEN_EXT = '_wasNotGiven';

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine administered or was to be administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $date = null;

    /**
     * The quantity of vaccine product that was administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    protected $doseQuantity = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The visit or admission or other contact between patient and health care provider
     * the immunization was performed as part of.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $encounter = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine batch expires.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate
     */
    protected $expirationDate = null;

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Reasons why a vaccine was or was not administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation
     */
    protected $explanation = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this immunization record.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service delivery location where the vaccine administration occurred.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $location = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lot number of the vaccine product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $lotNumber = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Name of vaccine manufacturer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $manufacturer = null;

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Extra information about the immunization that is not conveyed by the other
     * attributes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation[]
     */
    protected $note = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who either received or did not receive the immunization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $patient = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinician who administered the vaccine.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $performer = null;

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Categorical data indicating that an adverse event is associated in time to an
     * immunization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction[]
     */
    protected $reaction = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if this administration was reported rather than directly administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $reported = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinician who ordered the vaccination.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $requester = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the vaccine product is taken into the body.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $route = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Body site where vaccine was administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $site = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates the current status of the vaccination event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    protected $status = null;

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Contains information about the protocol(s) under which the vaccine was
     * administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol[]
     */
    protected $vaccinationProtocol = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine that was administered or was to be administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $vaccineCode = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the vaccination was or was not given.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $wasNotGiven = null;

    /**
     * FHIRImmunization Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunization::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DATE])) {
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT]))
                ? $data[self::FIELD_DATE_EXT]
                : null;
            if ($data[self::FIELD_DATE] instanceof FHIRDateTime) {
                $this->setDate($data[self::FIELD_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_DATE])) {
                $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_DATE]] + $ext));
            } else {
                $this->setDate(new FHIRDateTime($data[self::FIELD_DATE]));
            }
        }
        if (isset($data[self::FIELD_DOSE_QUANTITY])) {
            if ($data[self::FIELD_DOSE_QUANTITY] instanceof FHIRSimpleQuantity) {
                $this->setDoseQuantity($data[self::FIELD_DOSE_QUANTITY]);
            } else {
                $this->setDoseQuantity(new FHIRSimpleQuantity($data[self::FIELD_DOSE_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($data[self::FIELD_EXPIRATION_DATE])) {
            $ext = (isset($data[self::FIELD_EXPIRATION_DATE_EXT]) && is_array($data[self::FIELD_EXPIRATION_DATE_EXT]))
                ? $data[self::FIELD_EXPIRATION_DATE_EXT]
                : null;
            if ($data[self::FIELD_EXPIRATION_DATE] instanceof FHIRDate) {
                $this->setExpirationDate($data[self::FIELD_EXPIRATION_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXPIRATION_DATE])) {
                $this->setExpirationDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_EXPIRATION_DATE]] + $ext));
            } else {
                $this->setExpirationDate(new FHIRDate($data[self::FIELD_EXPIRATION_DATE]));
            }
        }
        if (isset($data[self::FIELD_EXPLANATION])) {
            if ($data[self::FIELD_EXPLANATION] instanceof FHIRImmunizationExplanation) {
                $this->setExplanation($data[self::FIELD_EXPLANATION]);
            } else {
                $this->setExplanation(new FHIRImmunizationExplanation($data[self::FIELD_EXPLANATION]));
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
        if (isset($data[self::FIELD_LOCATION])) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRReference) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRReference($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_LOT_NUMBER])) {
            $ext = (isset($data[self::FIELD_LOT_NUMBER_EXT]) && is_array($data[self::FIELD_LOT_NUMBER_EXT]))
                ? $data[self::FIELD_LOT_NUMBER_EXT]
                : null;
            if ($data[self::FIELD_LOT_NUMBER] instanceof FHIRString) {
                $this->setLotNumber($data[self::FIELD_LOT_NUMBER]);
            } elseif ($ext && is_scalar($data[self::FIELD_LOT_NUMBER])) {
                $this->setLotNumber(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_LOT_NUMBER]] + $ext));
            } else {
                $this->setLotNumber(new FHIRString($data[self::FIELD_LOT_NUMBER]));
            }
        }
        if (isset($data[self::FIELD_MANUFACTURER])) {
            if ($data[self::FIELD_MANUFACTURER] instanceof FHIRReference) {
                $this->setManufacturer($data[self::FIELD_MANUFACTURER]);
            } else {
                $this->setManufacturer(new FHIRReference($data[self::FIELD_MANUFACTURER]));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } else if ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER])) {
            if ($data[self::FIELD_PERFORMER] instanceof FHIRReference) {
                $this->setPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->setPerformer(new FHIRReference($data[self::FIELD_PERFORMER]));
            }
        }
        if (isset($data[self::FIELD_REACTION])) {
            if (is_array($data[self::FIELD_REACTION])) {
                foreach($data[self::FIELD_REACTION] as $v) {
                    if ($v instanceof FHIRImmunizationReaction) {
                        $this->addReaction($v);
                    } else {
                        $this->addReaction(new FHIRImmunizationReaction($v));
                    }
                }
            } else if ($data[self::FIELD_REACTION] instanceof FHIRImmunizationReaction) {
                $this->addReaction($data[self::FIELD_REACTION]);
            } else {
                $this->addReaction(new FHIRImmunizationReaction($data[self::FIELD_REACTION]));
            }
        }
        if (isset($data[self::FIELD_REPORTED])) {
            $ext = (isset($data[self::FIELD_REPORTED_EXT]) && is_array($data[self::FIELD_REPORTED_EXT]))
                ? $data[self::FIELD_REPORTED_EXT]
                : null;
            if ($data[self::FIELD_REPORTED] instanceof FHIRBoolean) {
                $this->setReported($data[self::FIELD_REPORTED]);
            } elseif ($ext && is_scalar($data[self::FIELD_REPORTED])) {
                $this->setReported(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_REPORTED]] + $ext));
            } else {
                $this->setReported(new FHIRBoolean($data[self::FIELD_REPORTED]));
            }
        }
        if (isset($data[self::FIELD_REQUESTER])) {
            if ($data[self::FIELD_REQUESTER] instanceof FHIRReference) {
                $this->setRequester($data[self::FIELD_REQUESTER]);
            } else {
                $this->setRequester(new FHIRReference($data[self::FIELD_REQUESTER]));
            }
        }
        if (isset($data[self::FIELD_ROUTE])) {
            if ($data[self::FIELD_ROUTE] instanceof FHIRCodeableConcept) {
                $this->setRoute($data[self::FIELD_ROUTE]);
            } else {
                $this->setRoute(new FHIRCodeableConcept($data[self::FIELD_ROUTE]));
            }
        }
        if (isset($data[self::FIELD_SITE])) {
            if ($data[self::FIELD_SITE] instanceof FHIRCodeableConcept) {
                $this->setSite($data[self::FIELD_SITE]);
            } else {
                $this->setSite(new FHIRCodeableConcept($data[self::FIELD_SITE]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRCode) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATUS])) {
                $this->setStatus(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
            } else {
                $this->setStatus(new FHIRCode($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_VACCINATION_PROTOCOL])) {
            if (is_array($data[self::FIELD_VACCINATION_PROTOCOL])) {
                foreach($data[self::FIELD_VACCINATION_PROTOCOL] as $v) {
                    if ($v instanceof FHIRImmunizationVaccinationProtocol) {
                        $this->addVaccinationProtocol($v);
                    } else {
                        $this->addVaccinationProtocol(new FHIRImmunizationVaccinationProtocol($v));
                    }
                }
            } else if ($data[self::FIELD_VACCINATION_PROTOCOL] instanceof FHIRImmunizationVaccinationProtocol) {
                $this->addVaccinationProtocol($data[self::FIELD_VACCINATION_PROTOCOL]);
            } else {
                $this->addVaccinationProtocol(new FHIRImmunizationVaccinationProtocol($data[self::FIELD_VACCINATION_PROTOCOL]));
            }
        }
        if (isset($data[self::FIELD_VACCINE_CODE])) {
            if ($data[self::FIELD_VACCINE_CODE] instanceof FHIRCodeableConcept) {
                $this->setVaccineCode($data[self::FIELD_VACCINE_CODE]);
            } else {
                $this->setVaccineCode(new FHIRCodeableConcept($data[self::FIELD_VACCINE_CODE]));
            }
        }
        if (isset($data[self::FIELD_WAS_NOT_GIVEN])) {
            $ext = (isset($data[self::FIELD_WAS_NOT_GIVEN_EXT]) && is_array($data[self::FIELD_WAS_NOT_GIVEN_EXT]))
                ? $data[self::FIELD_WAS_NOT_GIVEN_EXT]
                : null;
            if ($data[self::FIELD_WAS_NOT_GIVEN] instanceof FHIRBoolean) {
                $this->setWasNotGiven($data[self::FIELD_WAS_NOT_GIVEN]);
            } elseif ($ext && is_scalar($data[self::FIELD_WAS_NOT_GIVEN])) {
                $this->setWasNotGiven(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_WAS_NOT_GIVEN]] + $ext));
            } else {
                $this->setWasNotGiven(new FHIRBoolean($data[self::FIELD_WAS_NOT_GIVEN]));
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
        return "<Immunization{$xmlns}></Immunization>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine administered or was to be administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine administered or was to be administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $date
     * @return static
     */
    public function setDate($date = null)
    {
        if (null === $date) {
            $this->date = null;
            return $this;
        }
        if ($date instanceof FHIRDateTime) {
            $this->date = $date;
            return $this;
        }
        $this->date = new FHIRDateTime($date);
        return $this;
    }

    /**
     * The quantity of vaccine product that was administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getDoseQuantity()
    {
        return $this->doseQuantity;
    }

    /**
     * The quantity of vaccine product that was administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $doseQuantity
     * @return static
     */
    public function setDoseQuantity(FHIRSimpleQuantity $doseQuantity = null)
    {
        $this->doseQuantity = $doseQuantity;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The visit or admission or other contact between patient and health care provider
     * the immunization was performed as part of.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The visit or admission or other contact between patient and health care provider
     * the immunization was performed as part of.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(FHIRReference $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine batch expires.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine batch expires.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate $expirationDate
     * @return static
     */
    public function setExpirationDate($expirationDate = null)
    {
        if (null === $expirationDate) {
            $this->expirationDate = null;
            return $this;
        }
        if ($expirationDate instanceof FHIRDate) {
            $this->expirationDate = $expirationDate;
            return $this;
        }
        $this->expirationDate = new FHIRDate($expirationDate);
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Reasons why a vaccine was or was not administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation
     */
    public function getExplanation()
    {
        return $this->explanation;
    }

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Reasons why a vaccine was or was not administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation $explanation
     * @return static
     */
    public function setExplanation(FHIRImmunizationExplanation $explanation = null)
    {
        $this->explanation = $explanation;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this immunization record.
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
     * A unique identifier assigned to this immunization record.
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
     * A unique identifier assigned to this immunization record.
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
     * The service delivery location where the vaccine administration occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service delivery location where the vaccine administration occurred.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $location
     * @return static
     */
    public function setLocation(FHIRReference $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lot number of the vaccine product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lot number of the vaccine product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $lotNumber
     * @return static
     */
    public function setLotNumber($lotNumber = null)
    {
        if (null === $lotNumber) {
            $this->lotNumber = null;
            return $this;
        }
        if ($lotNumber instanceof FHIRString) {
            $this->lotNumber = $lotNumber;
            return $this;
        }
        $this->lotNumber = new FHIRString($lotNumber);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Name of vaccine manufacturer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Name of vaccine manufacturer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $manufacturer
     * @return static
     */
    public function setManufacturer(FHIRReference $manufacturer = null)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Extra information about the immunization that is not conveyed by the other
     * attributes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Extra information about the immunization that is not conveyed by the other
     * attributes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(FHIRAnnotation $note = null)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Extra information about the immunization that is not conveyed by the other
     * attributes.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation[] $note
     * @return static
     */
    public function setNote(array $note = [])
    {
        $this->note = [];
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRAnnotation($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who either received or did not receive the immunization.
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
     * The patient who either received or did not receive the immunization.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinician who administered the vaccine.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinician who administered the vaccine.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $performer
     * @return static
     */
    public function setPerformer(FHIRReference $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Categorical data indicating that an adverse event is associated in time to an
     * immunization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction[]
     */
    public function getReaction()
    {
        return $this->reaction;
    }

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Categorical data indicating that an adverse event is associated in time to an
     * immunization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction $reaction
     * @return static
     */
    public function addReaction(FHIRImmunizationReaction $reaction = null)
    {
        $this->reaction[] = $reaction;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Categorical data indicating that an adverse event is associated in time to an
     * immunization.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction[] $reaction
     * @return static
     */
    public function setReaction(array $reaction = [])
    {
        $this->reaction = [];
        if ([] === $reaction) {
            return $this;
        }
        foreach($reaction as $v) {
            if ($v instanceof FHIRImmunizationReaction) {
                $this->addReaction($v);
            } else {
                $this->addReaction(new FHIRImmunizationReaction($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if this administration was reported rather than directly administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getReported()
    {
        return $this->reported;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if this administration was reported rather than directly administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $reported
     * @return static
     */
    public function setReported($reported = null)
    {
        if (null === $reported) {
            $this->reported = null;
            return $this;
        }
        if ($reported instanceof FHIRBoolean) {
            $this->reported = $reported;
            return $this;
        }
        $this->reported = new FHIRBoolean($reported);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinician who ordered the vaccination.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinician who ordered the vaccination.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $requester
     * @return static
     */
    public function setRequester(FHIRReference $requester = null)
    {
        $this->requester = $requester;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the vaccine product is taken into the body.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the vaccine product is taken into the body.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $route
     * @return static
     */
    public function setRoute(FHIRCodeableConcept $route = null)
    {
        $this->route = $route;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Body site where vaccine was administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Body site where vaccine was administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $site
     * @return static
     */
    public function setSite(FHIRCodeableConcept $site = null)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates the current status of the vaccination event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates the current status of the vaccination event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $status
     * @return static
     */
    public function setStatus($status = null)
    {
        if (null === $status) {
            $this->status = null;
            return $this;
        }
        if ($status instanceof FHIRCode) {
            $this->status = $status;
            return $this;
        }
        $this->status = new FHIRCode($status);
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Contains information about the protocol(s) under which the vaccine was
     * administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol[]
     */
    public function getVaccinationProtocol()
    {
        return $this->vaccinationProtocol;
    }

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Contains information about the protocol(s) under which the vaccine was
     * administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol $vaccinationProtocol
     * @return static
     */
    public function addVaccinationProtocol(FHIRImmunizationVaccinationProtocol $vaccinationProtocol = null)
    {
        $this->vaccinationProtocol[] = $vaccinationProtocol;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Contains information about the protocol(s) under which the vaccine was
     * administered.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol[] $vaccinationProtocol
     * @return static
     */
    public function setVaccinationProtocol(array $vaccinationProtocol = [])
    {
        $this->vaccinationProtocol = [];
        if ([] === $vaccinationProtocol) {
            return $this;
        }
        foreach($vaccinationProtocol as $v) {
            if ($v instanceof FHIRImmunizationVaccinationProtocol) {
                $this->addVaccinationProtocol($v);
            } else {
                $this->addVaccinationProtocol(new FHIRImmunizationVaccinationProtocol($v));
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
     * Vaccine that was administered or was to be administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getVaccineCode()
    {
        return $this->vaccineCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine that was administered or was to be administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $vaccineCode
     * @return static
     */
    public function setVaccineCode(FHIRCodeableConcept $vaccineCode = null)
    {
        $this->vaccineCode = $vaccineCode;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the vaccination was or was not given.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getWasNotGiven()
    {
        return $this->wasNotGiven;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the vaccination was or was not given.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $wasNotGiven
     * @return static
     */
    public function setWasNotGiven($wasNotGiven = null)
    {
        if (null === $wasNotGiven) {
            $this->wasNotGiven = null;
            return $this;
        }
        if ($wasNotGiven instanceof FHIRBoolean) {
            $this->wasNotGiven = $wasNotGiven;
            return $this;
        }
        $this->wasNotGiven = new FHIRBoolean($wasNotGiven);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRImmunization $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRImmunization
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
                throw new \DomainException(sprintf('FHIRImmunization::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImmunization::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRImmunization;
        } elseif (!is_object($type) || !($type instanceof FHIRImmunization)) {
            throw new \RuntimeException(sprintf(
                'FHIRImmunization::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRImmunization or null, %s seen.',
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
        if (isset($attributes->date)) {
            $type->setDate((string)$attributes->date);
        }
        if (isset($children->date)) {
            $type->setDate(FHIRDateTime::xmlUnserialize($children->date));
        }
        if (isset($children->doseQuantity)) {
            $type->setDoseQuantity(FHIRSimpleQuantity::xmlUnserialize($children->doseQuantity));
        }
        if (isset($children->encounter)) {
            $type->setEncounter(FHIRReference::xmlUnserialize($children->encounter));
        }
        if (isset($attributes->expirationDate)) {
            $type->setExpirationDate((string)$attributes->expirationDate);
        }
        if (isset($children->expirationDate)) {
            $type->setExpirationDate(FHIRDate::xmlUnserialize($children->expirationDate));
        }
        if (isset($children->explanation)) {
            $type->setExplanation(FHIRImmunizationExplanation::xmlUnserialize($children->explanation));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->location)) {
            $type->setLocation(FHIRReference::xmlUnserialize($children->location));
        }
        if (isset($attributes->lotNumber)) {
            $type->setLotNumber((string)$attributes->lotNumber);
        }
        if (isset($children->lotNumber)) {
            $type->setLotNumber(FHIRString::xmlUnserialize($children->lotNumber));
        }
        if (isset($children->manufacturer)) {
            $type->setManufacturer(FHIRReference::xmlUnserialize($children->manufacturer));
        }
        if (isset($children->note)) {
            foreach($children->note as $child) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($child));
            }
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->performer)) {
            $type->setPerformer(FHIRReference::xmlUnserialize($children->performer));
        }
        if (isset($children->reaction)) {
            foreach($children->reaction as $child) {
                $type->addReaction(FHIRImmunizationReaction::xmlUnserialize($child));
            }
        }
        if (isset($attributes->reported)) {
            $type->setReported((string)$attributes->reported);
        }
        if (isset($children->reported)) {
            $type->setReported(FHIRBoolean::xmlUnserialize($children->reported));
        }
        if (isset($children->requester)) {
            $type->setRequester(FHIRReference::xmlUnserialize($children->requester));
        }
        if (isset($children->route)) {
            $type->setRoute(FHIRCodeableConcept::xmlUnserialize($children->route));
        }
        if (isset($children->site)) {
            $type->setSite(FHIRCodeableConcept::xmlUnserialize($children->site));
        }
        if (isset($attributes->status)) {
            $type->setStatus((string)$attributes->status);
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRCode::xmlUnserialize($children->status));
        }
        if (isset($children->vaccinationProtocol)) {
            foreach($children->vaccinationProtocol as $child) {
                $type->addVaccinationProtocol(FHIRImmunizationVaccinationProtocol::xmlUnserialize($child));
            }
        }
        if (isset($children->vaccineCode)) {
            $type->setVaccineCode(FHIRCodeableConcept::xmlUnserialize($children->vaccineCode));
        }
        if (isset($attributes->wasNotGiven)) {
            $type->setWasNotGiven((string)$attributes->wasNotGiven);
        }
        if (isset($children->wasNotGiven)) {
            $type->setWasNotGiven(FHIRBoolean::xmlUnserialize($children->wasNotGiven));
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
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDoseQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOSE_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getEncounter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENCOUNTER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExpirationDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPIRATION_DATE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getExplanation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPLANATION, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getLocation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLotNumber())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOT_NUMBER, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getManufacturer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MANUFACTURER, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPerformer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getReaction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REACTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getReported())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REPORTED, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getRequester())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUESTER, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getRoute())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ROUTE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getSite())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SITE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getVaccinationProtocol())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_VACCINATION_PROTOCOL, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getVaccineCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VACCINE_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWasNotGiven())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WAS_NOT_GIVEN, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = $v->getValue();
            $a[self::FIELD_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getDoseQuantity())) {
            $a[self::FIELD_DOSE_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $a[self::FIELD_ENCOUNTER] = $v;
        }
        if (null !== ($v = $this->getExpirationDate())) {
            $a[self::FIELD_EXPIRATION_DATE] = $v->getValue();
            $a[self::FIELD_EXPIRATION_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getExplanation())) {
            $a[self::FIELD_EXPLANATION] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = $v;
        }
        if (null !== ($v = $this->getLotNumber())) {
            $a[self::FIELD_LOT_NUMBER] = $v->getValue();
            $a[self::FIELD_LOT_NUMBER_EXT] = $v;
        }
        if (null !== ($v = $this->getManufacturer())) {
            $a[self::FIELD_MANUFACTURER] = $v;
        }
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = $vs;
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if (null !== ($v = $this->getPerformer())) {
            $a[self::FIELD_PERFORMER] = $v;
        }
        if ([] !== ($vs = $this->getReaction())) {
            $a[self::FIELD_REACTION] = $vs;
        }
        if (null !== ($v = $this->getReported())) {
            $a[self::FIELD_REPORTED] = $v->getValue();
            $a[self::FIELD_REPORTED_EXT] = $v;
        }
        if (null !== ($v = $this->getRequester())) {
            $a[self::FIELD_REQUESTER] = $v;
        }
        if (null !== ($v = $this->getRoute())) {
            $a[self::FIELD_ROUTE] = $v;
        }
        if (null !== ($v = $this->getSite())) {
            $a[self::FIELD_SITE] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $a[self::FIELD_STATUS_EXT] = $v;
        }
        if ([] !== ($vs = $this->getVaccinationProtocol())) {
            $a[self::FIELD_VACCINATION_PROTOCOL] = $vs;
        }
        if (null !== ($v = $this->getVaccineCode())) {
            $a[self::FIELD_VACCINE_CODE] = $v;
        }
        if (null !== ($v = $this->getWasNotGiven())) {
            $a[self::FIELD_WAS_NOT_GIVEN] = $v->getValue();
            $a[self::FIELD_WAS_NOT_GIVEN_EXT] = $v;
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