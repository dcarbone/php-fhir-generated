<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:25+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationAdministrationStatus;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter;

/**
 * Describes the event of a patient consuming or otherwise being administered a
 * medication. This may be as simple as swallowing a tablet or it may be a long
 * running infusion. Related resources tie this event to the authorizing
 * prescription, and the specific encounter between patient and health care
 * practitioner.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicationAdministration
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRMedicationAdministration extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_PATIENT = 'patient';
    const FIELD_PRACTITIONER = 'practitioner';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_PRESCRIPTION = 'prescription';
    const FIELD_WAS_NOT_GIVEN = 'wasNotGiven';
    const FIELD_WAS_NOT_GIVEN_EXT = '_wasNotGiven';
    const FIELD_REASON_NOT_GIVEN = 'reasonNotGiven';
    const FIELD_REASON_GIVEN = 'reasonGiven';
    const FIELD_EFFECTIVE_TIME_DATE_TIME = 'effectiveTimeDateTime';
    const FIELD_EFFECTIVE_TIME_DATE_TIME_EXT = '_effectiveTimeDateTime';
    const FIELD_EFFECTIVE_TIME_PERIOD = 'effectiveTimePeriod';
    const FIELD_MEDICATION_CODEABLE_CONCEPT = 'medicationCodeableConcept';
    const FIELD_MEDICATION_REFERENCE = 'medicationReference';
    const FIELD_DEVICE = 'device';
    const FIELD_NOTE = 'note';
    const FIELD_NOTE_EXT = '_note';
    const FIELD_DOSAGE = 'dosage';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifier - FHIR will generate its own internal identifiers (probably
     * URLs) which do not need to be explicitly managed by the resource. The identifier
     * here is one that would be used by another non-FHIR system - for example an
     * automated medication pump would provide a record each time it operated; an
     * administration while the patient was off the ward might be made with a different
     * system and entered after the event. Particularly important if these records have
     * to be updated.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A set of codes indicating the current status of a MedicationAdministration.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Will generally be set to show that the administration has been completed. For
     * some long running administrations such as infusions it is possible for an
     * administration to be started but not completed or it may be paused while some
     * other process is under way.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationAdministrationStatus
     */
    protected null|FHIRMedicationAdministrationStatus $status = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or animal receiving the medication.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $patient = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual who was responsible for giving the medication to the patient.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $practitioner = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The visit, admission or other contact between patient and health care provider
     * the medication administration was performed as part of.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $encounter = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The original request, instruction or authority to perform the administration.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $prescription = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set this to true if the record is saying that the medication was NOT
     * administered.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $wasNotGiven = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the administration was not performed.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $reasonNotGiven = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the medication was given.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $reasonGiven = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $effectiveTimeDateTime = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $effectiveTimePeriod = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $medicationCodeableConcept = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $medicationReference = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The device used in administering the medication to the patient. For example, a
     * particular infusion pump.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    protected null|array $device = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra information about the medication administration that is not conveyed by
     * the other attributes.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $note = null;
    /**
     * Describes the event of a patient consuming or otherwise being administered a
     * medication. This may be as simple as swallowing a tablet or it may be a long
     * running infusion. Related resources tie this event to the authorizing
     * prescription, and the specific encounter between patient and health care
     * practitioner.
     *
     * Describes the medication dosage information details e.g. dose, rate, site,
     * route, etc.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage
     */
    protected null|FHIRMedicationAdministrationDosage $dosage = null;

    /**
     * Validation map for fields in type MedicationAdministration
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_EFFECTIVE_TIME_DATE_TIME => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_EFFECTIVE_TIME_PERIOD => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_MEDICATION_CODEABLE_CONCEPT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_MEDICATION_REFERENCE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_PATIENT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_STATUS => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRMedicationAdministration Constructor
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
                if ($value instanceof FHIRMedicationAdministrationStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRMedicationAdministrationStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRMedicationAdministrationStatus([FHIRMedicationAdministrationStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRMedicationAdministrationStatus($ext));
            } else {
                $this->setStatus(new FHIRMedicationAdministrationStatus(null));
            }
        }
        if (array_key_exists(self::FIELD_PATIENT, $data)) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (array_key_exists(self::FIELD_PRACTITIONER, $data)) {
            if ($data[self::FIELD_PRACTITIONER] instanceof FHIRReference) {
                $this->setPractitioner($data[self::FIELD_PRACTITIONER]);
            } else {
                $this->setPractitioner(new FHIRReference($data[self::FIELD_PRACTITIONER]));
            }
        }
        if (array_key_exists(self::FIELD_ENCOUNTER, $data)) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (array_key_exists(self::FIELD_PRESCRIPTION, $data)) {
            if ($data[self::FIELD_PRESCRIPTION] instanceof FHIRReference) {
                $this->setPrescription($data[self::FIELD_PRESCRIPTION]);
            } else {
                $this->setPrescription(new FHIRReference($data[self::FIELD_PRESCRIPTION]));
            }
        }
        if (array_key_exists(self::FIELD_WAS_NOT_GIVEN, $data) || array_key_exists(self::FIELD_WAS_NOT_GIVEN_EXT, $data)) {
            $value = $data[self::FIELD_WAS_NOT_GIVEN] ?? null;
            $ext = (isset($data[self::FIELD_WAS_NOT_GIVEN_EXT]) && is_array($data[self::FIELD_WAS_NOT_GIVEN_EXT])) ? $data[self::FIELD_WAS_NOT_GIVEN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setWasNotGiven($value);
                } else if (is_array($value)) {
                    $this->setWasNotGiven(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setWasNotGiven(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setWasNotGiven(new FHIRBoolean($ext));
            } else {
                $this->setWasNotGiven(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_REASON_NOT_GIVEN, $data)) {
            if (is_array($data[self::FIELD_REASON_NOT_GIVEN])) {
                foreach($data[self::FIELD_REASON_NOT_GIVEN] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReasonNotGiven($v);
                    } else {
                        $this->addReasonNotGiven(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_REASON_NOT_GIVEN] instanceof FHIRCodeableConcept) {
                $this->addReasonNotGiven($data[self::FIELD_REASON_NOT_GIVEN]);
            } else {
                $this->addReasonNotGiven(new FHIRCodeableConcept($data[self::FIELD_REASON_NOT_GIVEN]));
            }
        }
        if (array_key_exists(self::FIELD_REASON_GIVEN, $data)) {
            if (is_array($data[self::FIELD_REASON_GIVEN])) {
                foreach($data[self::FIELD_REASON_GIVEN] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReasonGiven($v);
                    } else {
                        $this->addReasonGiven(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_REASON_GIVEN] instanceof FHIRCodeableConcept) {
                $this->addReasonGiven($data[self::FIELD_REASON_GIVEN]);
            } else {
                $this->addReasonGiven(new FHIRCodeableConcept($data[self::FIELD_REASON_GIVEN]));
            }
        }
        if (array_key_exists(self::FIELD_EFFECTIVE_TIME_DATE_TIME, $data) || array_key_exists(self::FIELD_EFFECTIVE_TIME_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_EFFECTIVE_TIME_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_EFFECTIVE_TIME_DATE_TIME_EXT]) && is_array($data[self::FIELD_EFFECTIVE_TIME_DATE_TIME_EXT])) ? $data[self::FIELD_EFFECTIVE_TIME_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setEffectiveTimeDateTime($value);
                } else if (is_array($value)) {
                    $this->setEffectiveTimeDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setEffectiveTimeDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setEffectiveTimeDateTime(new FHIRDateTime($ext));
            } else {
                $this->setEffectiveTimeDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_EFFECTIVE_TIME_PERIOD, $data)) {
            if ($data[self::FIELD_EFFECTIVE_TIME_PERIOD] instanceof FHIRPeriod) {
                $this->setEffectiveTimePeriod($data[self::FIELD_EFFECTIVE_TIME_PERIOD]);
            } else {
                $this->setEffectiveTimePeriod(new FHIRPeriod($data[self::FIELD_EFFECTIVE_TIME_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICATION_CODEABLE_CONCEPT, $data)) {
            if ($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setMedicationCodeableConcept($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT]);
            } else {
                $this->setMedicationCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICATION_REFERENCE, $data)) {
            if ($data[self::FIELD_MEDICATION_REFERENCE] instanceof FHIRReference) {
                $this->setMedicationReference($data[self::FIELD_MEDICATION_REFERENCE]);
            } else {
                $this->setMedicationReference(new FHIRReference($data[self::FIELD_MEDICATION_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_DEVICE, $data)) {
            if (is_array($data[self::FIELD_DEVICE])) {
                foreach($data[self::FIELD_DEVICE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addDevice($v);
                    } else {
                        $this->addDevice(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_DEVICE] instanceof FHIRReference) {
                $this->addDevice($data[self::FIELD_DEVICE]);
            } else {
                $this->addDevice(new FHIRReference($data[self::FIELD_DEVICE]));
            }
        }
        if (array_key_exists(self::FIELD_NOTE, $data) || array_key_exists(self::FIELD_NOTE_EXT, $data)) {
            $value = $data[self::FIELD_NOTE] ?? null;
            $ext = (isset($data[self::FIELD_NOTE_EXT]) && is_array($data[self::FIELD_NOTE_EXT])) ? $data[self::FIELD_NOTE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setNote($value);
                } else if (is_array($value)) {
                    $this->setNote(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setNote(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNote(new FHIRString($ext));
            } else {
                $this->setNote(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DOSAGE, $data)) {
            if ($data[self::FIELD_DOSAGE] instanceof FHIRMedicationAdministrationDosage) {
                $this->setDosage($data[self::FIELD_DOSAGE]);
            } else {
                $this->setDosage(new FHIRMedicationAdministrationDosage($data[self::FIELD_DOSAGE]));
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
     * External identifier - FHIR will generate its own internal identifiers (probably
     * URLs) which do not need to be explicitly managed by the resource. The identifier
     * here is one that would be used by another non-FHIR system - for example an
     * automated medication pump would provide a record each time it operated; an
     * administration while the patient was off the ward might be made with a different
     * system and entered after the event. Particularly important if these records have
     * to be updated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
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
     * External identifier - FHIR will generate its own internal identifiers (probably
     * URLs) which do not need to be explicitly managed by the resource. The identifier
     * here is one that would be used by another non-FHIR system - for example an
     * automated medication pump would provide a record each time it operated; an
     * administration while the patient was off the ward might be made with a different
     * system and entered after the event. Particularly important if these records have
     * to be updated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $identifier
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifier - FHIR will generate its own internal identifiers (probably
     * URLs) which do not need to be explicitly managed by the resource. The identifier
     * here is one that would be used by another non-FHIR system - for example an
     * automated medication pump would provide a record each time it operated; an
     * administration while the patient was off the ward might be made with a different
     * system and entered after the event. Particularly important if these records have
     * to be updated.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier ...$identifier
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
     * A set of codes indicating the current status of a MedicationAdministration.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Will generally be set to show that the administration has been completed. For
     * some long running administrations such as infusions it is possible for an
     * administration to be started but not completed or it may be paused while some
     * other process is under way.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationAdministrationStatus
     */
    public function getStatus(): null|FHIRMedicationAdministrationStatus
    {
        return $this->status;
    }

    /**
     * A set of codes indicating the current status of a MedicationAdministration.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Will generally be set to show that the administration has been completed. For
     * some long running administrations such as infusions it is possible for an
     * administration to be started but not completed or it may be paused while some
     * other process is under way.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationAdministrationStatus $status
     * @return static
     */
    public function setStatus(null|FHIRMedicationAdministrationStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRMedicationAdministrationStatus();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or animal receiving the medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getPatient(): null|FHIRReference
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or animal receiving the medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(null|FHIRReference $patient = null): self
    {
        if (null === $patient) {
            $patient = new FHIRReference();
        }
        $this->_trackValueSet($this->patient, $patient);
        $this->patient = $patient;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual who was responsible for giving the medication to the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getPractitioner(): null|FHIRReference
    {
        return $this->practitioner;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual who was responsible for giving the medication to the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $practitioner
     * @return static
     */
    public function setPractitioner(null|FHIRReference $practitioner = null): self
    {
        if (null === $practitioner) {
            $practitioner = new FHIRReference();
        }
        $this->_trackValueSet($this->practitioner, $practitioner);
        $this->practitioner = $practitioner;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The visit, admission or other contact between patient and health care provider
     * the medication administration was performed as part of.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getEncounter(): null|FHIRReference
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The visit, admission or other contact between patient and health care provider
     * the medication administration was performed as part of.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(null|FHIRReference $encounter = null): self
    {
        if (null === $encounter) {
            $encounter = new FHIRReference();
        }
        $this->_trackValueSet($this->encounter, $encounter);
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The original request, instruction or authority to perform the administration.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getPrescription(): null|FHIRReference
    {
        return $this->prescription;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The original request, instruction or authority to perform the administration.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $prescription
     * @return static
     */
    public function setPrescription(null|FHIRReference $prescription = null): self
    {
        if (null === $prescription) {
            $prescription = new FHIRReference();
        }
        $this->_trackValueSet($this->prescription, $prescription);
        $this->prescription = $prescription;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set this to true if the record is saying that the medication was NOT
     * administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getWasNotGiven(): null|FHIRBoolean
    {
        return $this->wasNotGiven;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set this to true if the record is saying that the medication was NOT
     * administered.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $wasNotGiven
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setWasNotGiven(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $wasNotGiven = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $wasNotGiven && !($wasNotGiven instanceof FHIRBoolean)) {
            $wasNotGiven = new FHIRBoolean($wasNotGiven);
        }
        $this->_trackValueSet($this->wasNotGiven, $wasNotGiven);
        if (!isset($this->_xmlLocations[self::FIELD_WAS_NOT_GIVEN])) {
            $this->_xmlLocations[self::FIELD_WAS_NOT_GIVEN] = [];
        }
        $this->_xmlLocations[self::FIELD_WAS_NOT_GIVEN][0] = $xmlLocation;
        $this->wasNotGiven = $wasNotGiven;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the administration was not performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonNotGiven(): null|array
    {
        return $this->reasonNotGiven;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the administration was not performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $reasonNotGiven
     * @return static
     */
    public function addReasonNotGiven(null|FHIRCodeableConcept $reasonNotGiven = null): self
    {
        if (null === $reasonNotGiven) {
            $reasonNotGiven = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->reasonNotGiven[] = $reasonNotGiven;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the administration was not performed.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept ...$reasonNotGiven
     * @return static
     */
    public function setReasonNotGiven(FHIRCodeableConcept ...$reasonNotGiven): self
    {
        if ([] !== $this->reasonNotGiven) {
            $this->_trackValuesRemoved(count($this->reasonNotGiven));
            $this->reasonNotGiven = [];
        }
        if ([] === $reasonNotGiven) {
            return $this;
        }
        foreach($reasonNotGiven as $v) {
            $this->addReasonNotGiven($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the medication was given.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonGiven(): null|array
    {
        return $this->reasonGiven;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the medication was given.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $reasonGiven
     * @return static
     */
    public function addReasonGiven(null|FHIRCodeableConcept $reasonGiven = null): self
    {
        if (null === $reasonGiven) {
            $reasonGiven = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->reasonGiven[] = $reasonGiven;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the medication was given.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept ...$reasonGiven
     * @return static
     */
    public function setReasonGiven(FHIRCodeableConcept ...$reasonGiven): self
    {
        if ([] !== $this->reasonGiven) {
            $this->_trackValuesRemoved(count($this->reasonGiven));
            $this->reasonGiven = [];
        }
        if ([] === $reasonGiven) {
            return $this;
        }
        foreach($reasonGiven as $v) {
            $this->addReasonGiven($v);
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
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getEffectiveTimeDateTime(): null|FHIRDateTime
    {
        return $this->effectiveTimeDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $effectiveTimeDateTime
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setEffectiveTimeDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $effectiveTimeDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $effectiveTimeDateTime && !($effectiveTimeDateTime instanceof FHIRDateTime)) {
            $effectiveTimeDateTime = new FHIRDateTime($effectiveTimeDateTime);
        }
        $this->_trackValueSet($this->effectiveTimeDateTime, $effectiveTimeDateTime);
        if (!isset($this->_xmlLocations[self::FIELD_EFFECTIVE_TIME_DATE_TIME])) {
            $this->_xmlLocations[self::FIELD_EFFECTIVE_TIME_DATE_TIME] = [];
        }
        $this->_xmlLocations[self::FIELD_EFFECTIVE_TIME_DATE_TIME][0] = $xmlLocation;
        $this->effectiveTimeDateTime = $effectiveTimeDateTime;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getEffectiveTimePeriod(): null|FHIRPeriod
    {
        return $this->effectiveTimePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod $effectiveTimePeriod
     * @return static
     */
    public function setEffectiveTimePeriod(null|FHIRPeriod $effectiveTimePeriod = null): self
    {
        if (null === $effectiveTimePeriod) {
            $effectiveTimePeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->effectiveTimePeriod, $effectiveTimePeriod);
        $this->effectiveTimePeriod = $effectiveTimePeriod;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getMedicationCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->medicationCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $medicationCodeableConcept
     * @return static
     */
    public function setMedicationCodeableConcept(null|FHIRCodeableConcept $medicationCodeableConcept = null): self
    {
        if (null === $medicationCodeableConcept) {
            $medicationCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->medicationCodeableConcept, $medicationCodeableConcept);
        $this->medicationCodeableConcept = $medicationCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getMedicationReference(): null|FHIRReference
    {
        return $this->medicationReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $medicationReference
     * @return static
     */
    public function setMedicationReference(null|FHIRReference $medicationReference = null): self
    {
        if (null === $medicationReference) {
            $medicationReference = new FHIRReference();
        }
        $this->_trackValueSet($this->medicationReference, $medicationReference);
        $this->medicationReference = $medicationReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The device used in administering the medication to the patient. For example, a
     * particular infusion pump.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getDevice(): null|array
    {
        return $this->device;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The device used in administering the medication to the patient. For example, a
     * particular infusion pump.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $device
     * @return static
     */
    public function addDevice(null|FHIRReference $device = null): self
    {
        if (null === $device) {
            $device = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->device[] = $device;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The device used in administering the medication to the patient. For example, a
     * particular infusion pump.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference ...$device
     * @return static
     */
    public function setDevice(FHIRReference ...$device): self
    {
        if ([] !== $this->device) {
            $this->_trackValuesRemoved(count($this->device));
            $this->device = [];
        }
        if ([] === $device) {
            return $this;
        }
        foreach($device as $v) {
            $this->addDevice($v);
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra information about the medication administration that is not conveyed by
     * the other attributes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getNote(): null|FHIRString
    {
        return $this->note;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra information about the medication administration that is not conveyed by
     * the other attributes.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $note
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setNote(null|string|FHIRStringPrimitive|FHIRString $note = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $note && !($note instanceof FHIRString)) {
            $note = new FHIRString($note);
        }
        $this->_trackValueSet($this->note, $note);
        if (!isset($this->_xmlLocations[self::FIELD_NOTE])) {
            $this->_xmlLocations[self::FIELD_NOTE] = [];
        }
        $this->_xmlLocations[self::FIELD_NOTE][0] = $xmlLocation;
        $this->note = $note;
        return $this;
    }

    /**
     * Describes the event of a patient consuming or otherwise being administered a
     * medication. This may be as simple as swallowing a tablet or it may be a long
     * running infusion. Related resources tie this event to the authorizing
     * prescription, and the specific encounter between patient and health care
     * practitioner.
     *
     * Describes the medication dosage information details e.g. dose, rate, site,
     * route, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage
     */
    public function getDosage(): null|FHIRMedicationAdministrationDosage
    {
        return $this->dosage;
    }

    /**
     * Describes the event of a patient consuming or otherwise being administered a
     * medication. This may be as simple as swallowing a tablet or it may be a long
     * running infusion. Related resources tie this event to the authorizing
     * prescription, and the specific encounter between patient and health care
     * practitioner.
     *
     * Describes the medication dosage information details e.g. dose, rate, site,
     * route, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage $dosage
     * @return static
     */
    public function setDosage(null|FHIRMedicationAdministrationDosage $dosage = null): self
    {
        if (null === $dosage) {
            $dosage = new FHIRMedicationAdministrationDosage();
        }
        $this->_trackValueSet($this->dosage, $dosage);
        $this->dosage = $dosage;
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
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPractitioner())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRACTITIONER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPrescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWasNotGiven())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WAS_NOT_GIVEN] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReasonNotGiven())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_NOT_GIVEN, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReasonGiven())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_GIVEN, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getEffectiveTimeDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EFFECTIVE_TIME_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEffectiveTimePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EFFECTIVE_TIME_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicationCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicationReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION_REFERENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDevice())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DEVICE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getNote())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NOTE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDosage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSAGE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRACTITIONER])) {
            $v = $this->getPractitioner();
            foreach($validationRules[self::FIELD_PRACTITIONER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_PRACTITIONER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRACTITIONER])) {
                        $errs[self::FIELD_PRACTITIONER] = [];
                    }
                    $errs[self::FIELD_PRACTITIONER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRESCRIPTION])) {
            $v = $this->getPrescription();
            foreach($validationRules[self::FIELD_PRESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_PRESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRESCRIPTION])) {
                        $errs[self::FIELD_PRESCRIPTION] = [];
                    }
                    $errs[self::FIELD_PRESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WAS_NOT_GIVEN])) {
            $v = $this->getWasNotGiven();
            foreach($validationRules[self::FIELD_WAS_NOT_GIVEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_WAS_NOT_GIVEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WAS_NOT_GIVEN])) {
                        $errs[self::FIELD_WAS_NOT_GIVEN] = [];
                    }
                    $errs[self::FIELD_WAS_NOT_GIVEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_NOT_GIVEN])) {
            $v = $this->getReasonNotGiven();
            foreach($validationRules[self::FIELD_REASON_NOT_GIVEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_REASON_NOT_GIVEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_NOT_GIVEN])) {
                        $errs[self::FIELD_REASON_NOT_GIVEN] = [];
                    }
                    $errs[self::FIELD_REASON_NOT_GIVEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_GIVEN])) {
            $v = $this->getReasonGiven();
            foreach($validationRules[self::FIELD_REASON_GIVEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_REASON_GIVEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_GIVEN])) {
                        $errs[self::FIELD_REASON_GIVEN] = [];
                    }
                    $errs[self::FIELD_REASON_GIVEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EFFECTIVE_TIME_DATE_TIME])) {
            $v = $this->getEffectiveTimeDateTime();
            foreach($validationRules[self::FIELD_EFFECTIVE_TIME_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_EFFECTIVE_TIME_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EFFECTIVE_TIME_DATE_TIME])) {
                        $errs[self::FIELD_EFFECTIVE_TIME_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_EFFECTIVE_TIME_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EFFECTIVE_TIME_PERIOD])) {
            $v = $this->getEffectiveTimePeriod();
            foreach($validationRules[self::FIELD_EFFECTIVE_TIME_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_EFFECTIVE_TIME_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EFFECTIVE_TIME_PERIOD])) {
                        $errs[self::FIELD_EFFECTIVE_TIME_PERIOD] = [];
                    }
                    $errs[self::FIELD_EFFECTIVE_TIME_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEDICATION_CODEABLE_CONCEPT])) {
            $v = $this->getMedicationCodeableConcept();
            foreach($validationRules[self::FIELD_MEDICATION_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_MEDICATION_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEDICATION_REFERENCE])) {
            $v = $this->getMedicationReference();
            foreach($validationRules[self::FIELD_MEDICATION_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_MEDICATION_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEDICATION_REFERENCE])) {
                        $errs[self::FIELD_MEDICATION_REFERENCE] = [];
                    }
                    $errs[self::FIELD_MEDICATION_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEVICE])) {
            $v = $this->getDevice();
            foreach($validationRules[self::FIELD_DEVICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_DEVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEVICE])) {
                        $errs[self::FIELD_DEVICE] = [];
                    }
                    $errs[self::FIELD_DEVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSAGE])) {
            $v = $this->getDosage();
            foreach($validationRules[self::FIELD_DOSAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_DOSAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSAGE])) {
                        $errs[self::FIELD_DOSAGE] = [];
                    }
                    $errs[self::FIELD_DOSAGE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
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
        } else if (!($type instanceof FHIRMedicationAdministration)) {
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
                $type->setStatus(FHIRMedicationAdministrationStatus::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATIENT === $childName) {
                $type->setPatient(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PRACTITIONER === $childName) {
                $type->setPractitioner(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ENCOUNTER === $childName) {
                $type->setEncounter(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PRESCRIPTION === $childName) {
                $type->setPrescription(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_WAS_NOT_GIVEN === $childName) {
                $type->setWasNotGiven(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_REASON_NOT_GIVEN === $childName) {
                $type->addReasonNotGiven(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REASON_GIVEN === $childName) {
                $type->addReasonGiven(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EFFECTIVE_TIME_DATE_TIME === $childName) {
                $type->setEffectiveTimeDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_EFFECTIVE_TIME_PERIOD === $childName) {
                $type->setEffectiveTimePeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICATION_CODEABLE_CONCEPT === $childName) {
                $type->setMedicationCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICATION_REFERENCE === $childName) {
                $type->setMedicationReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEVICE === $childName) {
                $type->addDevice(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NOTE === $childName) {
                $type->setNote(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DOSAGE === $childName) {
                $type->setDosage(FHIRMedicationAdministrationDosage::xmlUnserialize($n, null, $config));
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
        if (isset($attributes[self::FIELD_WAS_NOT_GIVEN])) {
            $pt = $type->getWasNotGiven();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_WAS_NOT_GIVEN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setWasNotGiven((string)$attributes[self::FIELD_WAS_NOT_GIVEN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EFFECTIVE_TIME_DATE_TIME])) {
            $pt = $type->getEffectiveTimeDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_EFFECTIVE_TIME_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setEffectiveTimeDateTime((string)$attributes[self::FIELD_EFFECTIVE_TIME_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NOTE])) {
            $pt = $type->getNote();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NOTE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setNote((string)$attributes[self::FIELD_NOTE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'MedicationAdministration', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_WAS_NOT_GIVEN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getWasNotGiven())) {
            $xw->writeAttribute(self::FIELD_WAS_NOT_GIVEN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_EFFECTIVE_TIME_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getEffectiveTimeDateTime())) {
            $xw->writeAttribute(self::FIELD_EFFECTIVE_TIME_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_NOTE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getNote())) {
            $xw->writeAttribute(self::FIELD_NOTE, $v->getValue()?->getFormattedValue());
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
        if (null !== ($v = $this->getPatient())) {
            $xw->startElement(self::FIELD_PATIENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPractitioner())) {
            $xw->startElement(self::FIELD_PRACTITIONER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getEncounter())) {
            $xw->startElement(self::FIELD_ENCOUNTER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPrescription())) {
            $xw->startElement(self::FIELD_PRESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_WAS_NOT_GIVEN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getWasNotGiven())) {
            $xw->startElement(self::FIELD_WAS_NOT_GIVEN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getReasonNotGiven() as $v) {
            $xw->startElement(self::FIELD_REASON_NOT_GIVEN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getReasonGiven() as $v) {
            $xw->startElement(self::FIELD_REASON_GIVEN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_EFFECTIVE_TIME_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getEffectiveTimeDateTime())) {
            $xw->startElement(self::FIELD_EFFECTIVE_TIME_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getEffectiveTimePeriod())) {
            $xw->startElement(self::FIELD_EFFECTIVE_TIME_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getMedicationCodeableConcept())) {
            $xw->startElement(self::FIELD_MEDICATION_CODEABLE_CONCEPT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getMedicationReference())) {
            $xw->startElement(self::FIELD_MEDICATION_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getDevice() as $v) {
            $xw->startElement(self::FIELD_DEVICE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_NOTE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getNote())) {
            $xw->startElement(self::FIELD_NOTE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDosage())) {
            $xw->startElement(self::FIELD_DOSAGE);
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
            unset($ext->{FHIRMedicationAdministrationStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $out->{self::FIELD_PATIENT} = $v;
        }
        if (null !== ($v = $this->getPractitioner())) {
            $out->{self::FIELD_PRACTITIONER} = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $out->{self::FIELD_ENCOUNTER} = $v;
        }
        if (null !== ($v = $this->getPrescription())) {
            $out->{self::FIELD_PRESCRIPTION} = $v;
        }
        if (null !== ($v = $this->getWasNotGiven())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_WAS_NOT_GIVEN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_WAS_NOT_GIVEN_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getReasonNotGiven())) {
            $out->{self::FIELD_REASON_NOT_GIVEN} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_REASON_NOT_GIVEN}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getReasonGiven())) {
            $out->{self::FIELD_REASON_GIVEN} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_REASON_GIVEN}[] = $v;
            }
        }
        if (null !== ($v = $this->getEffectiveTimeDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EFFECTIVE_TIME_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EFFECTIVE_TIME_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getEffectiveTimePeriod())) {
            $out->{self::FIELD_EFFECTIVE_TIME_PERIOD} = $v;
        }
        if (null !== ($v = $this->getMedicationCodeableConcept())) {
            $out->{self::FIELD_MEDICATION_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getMedicationReference())) {
            $out->{self::FIELD_MEDICATION_REFERENCE} = $v;
        }
        if ([] !== ($vs = $this->getDevice())) {
            $out->{self::FIELD_DEVICE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_DEVICE}[] = $v;
            }
        }
        if (null !== ($v = $this->getNote())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NOTE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NOTE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDosage())) {
            $out->{self::FIELD_DOSAGE} = $v;
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