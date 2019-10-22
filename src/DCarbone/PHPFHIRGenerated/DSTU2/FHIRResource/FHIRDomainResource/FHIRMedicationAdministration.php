<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 22nd, 2019 01:51+0000
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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationAdministrationStatus;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * Describes the event of a patient consuming or otherwise being administered a
 * medication. This may be as simple as swallowing a tablet or it may be a long
 * running infusion. Related resources tie this event to the authorizing
 * prescription, and the specific encounter between patient and health care
 * practitioner.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedicationAdministration
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRMedicationAdministration extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_DEVICE = 'device';
    const FIELD_DOSAGE = 'dosage';
    const FIELD_EFFECTIVE_TIME_DATE_TIME = 'effectiveTimeDateTime';
    const FIELD_EFFECTIVE_TIME_DATE_TIME_EXT = '_effectiveTimeDateTime';
    const FIELD_EFFECTIVE_TIME_PERIOD = 'effectiveTimePeriod';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_MEDICATION_CODEABLE_CONCEPT = 'medicationCodeableConcept';
    const FIELD_MEDICATION_REFERENCE = 'medicationReference';
    const FIELD_NOTE = 'note';
    const FIELD_NOTE_EXT = '_note';
    const FIELD_PATIENT = 'patient';
    const FIELD_PRACTITIONER = 'practitioner';
    const FIELD_PRESCRIPTION = 'prescription';
    const FIELD_REASON_GIVEN = 'reasonGiven';
    const FIELD_REASON_NOT_GIVEN = 'reasonNotGiven';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_WAS_NOT_GIVEN = 'wasNotGiven';
    const FIELD_WAS_NOT_GIVEN_EXT = '_wasNotGiven';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The device used in administering the medication to the patient. For example, a
     * particular infusion pump.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    private $device = [];
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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage
     */
    private $dosage = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    private $effectiveTimeDateTime = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    private $effectiveTimePeriod = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The visit, admission or other contact between patient and health care provider
     * the medication administration was performed as part of.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $encounter = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * External identifier - FHIR will generate its own internal identifiers (probably
     * URLs) which do not need to be explicitly managed by the resource. The identifier
     * here is one that would be used by another non-FHIR system - for example an
     * automated medication pump would provide a record each time it operated; an
     * administration while the patient was off the ward might be made with a different
     * system and entered after the event. Particularly important if these records have
     * to be updated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    private $medicationCodeableConcept = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $medicationReference = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Extra information about the medication administration that is not conveyed by
     * the other attributes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    private $note = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The person or animal receiving the medication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $patient = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The individual who was responsible for giving the medication to the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $practitioner = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The original request, instruction or authority to perform the administration.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $prescription = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code indicating why the medication was given.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    private $reasonGiven = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code indicating why the administration was not performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    private $reasonNotGiven = [];
    /**
     * A set of codes indicating the current status of a MedicationAdministration.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Will generally be set to show that the administration has been completed. For
     * some long running administrations such as infusions it is possible for an
     * administration to be started but not completed or it may be paused while some
     * other process is under way.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationAdministrationStatus
     */
    private $status = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Set this to true if the record is saying that the medication was NOT
     * administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    private $wasNotGiven = null;

    /**
     * FHIRMedicationAdministration Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationAdministration::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DEVICE])) {
            if (is_array($data[self::FIELD_DEVICE])) {
                foreach($data[self::FIELD_DEVICE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addDevice($v);
                    } else {
                        $this->addDevice(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_DEVICE] instanceof FHIRReference) {
                $this->addDevice($data[self::FIELD_DEVICE]);
            } else {
                $this->addDevice(new FHIRReference($data[self::FIELD_DEVICE]));
            }
        }
        if (isset($data[self::FIELD_DOSAGE])) {
            if ($data[self::FIELD_DOSAGE] instanceof FHIRMedicationAdministrationDosage) {
                $this->setDosage($data[self::FIELD_DOSAGE]);
            } else {
                $this->setDosage(new FHIRMedicationAdministrationDosage($data[self::FIELD_DOSAGE]));
            }
        }
        if (isset($data[self::FIELD_EFFECTIVE_TIME_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_EFFECTIVE_TIME_DATE_TIME_EXT]) && is_array($data[self::FIELD_EFFECTIVE_TIME_DATE_TIME_EXT]))
                ? $data[self::FIELD_EFFECTIVE_TIME_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_EFFECTIVE_TIME_DATE_TIME] instanceof FHIRDateTime) {
                $this->setEffectiveTimeDateTime($data[self::FIELD_EFFECTIVE_TIME_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_EFFECTIVE_TIME_DATE_TIME])) {
                $this->setEffectiveTimeDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_EFFECTIVE_TIME_DATE_TIME]] + $ext));
            } else {
                $this->setEffectiveTimeDateTime(new FHIRDateTime($data[self::FIELD_EFFECTIVE_TIME_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_EFFECTIVE_TIME_PERIOD])) {
            if ($data[self::FIELD_EFFECTIVE_TIME_PERIOD] instanceof FHIRPeriod) {
                $this->setEffectiveTimePeriod($data[self::FIELD_EFFECTIVE_TIME_PERIOD]);
            } else {
                $this->setEffectiveTimePeriod(new FHIRPeriod($data[self::FIELD_EFFECTIVE_TIME_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
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
        if (isset($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setMedicationCodeableConcept($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT]);
            } else {
                $this->setMedicationCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_MEDICATION_REFERENCE])) {
            if ($data[self::FIELD_MEDICATION_REFERENCE] instanceof FHIRReference) {
                $this->setMedicationReference($data[self::FIELD_MEDICATION_REFERENCE]);
            } else {
                $this->setMedicationReference(new FHIRReference($data[self::FIELD_MEDICATION_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            $ext = (isset($data[self::FIELD_NOTE_EXT]) && is_array($data[self::FIELD_NOTE_EXT]))
                ? $data[self::FIELD_NOTE_EXT]
                : null;
            if ($data[self::FIELD_NOTE] instanceof FHIRString) {
                $this->setNote($data[self::FIELD_NOTE]);
            } elseif ($ext && is_scalar($data[self::FIELD_NOTE])) {
                $this->setNote(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NOTE]] + $ext));
            } else {
                $this->setNote(new FHIRString($data[self::FIELD_NOTE]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_PRACTITIONER])) {
            if ($data[self::FIELD_PRACTITIONER] instanceof FHIRReference) {
                $this->setPractitioner($data[self::FIELD_PRACTITIONER]);
            } else {
                $this->setPractitioner(new FHIRReference($data[self::FIELD_PRACTITIONER]));
            }
        }
        if (isset($data[self::FIELD_PRESCRIPTION])) {
            if ($data[self::FIELD_PRESCRIPTION] instanceof FHIRReference) {
                $this->setPrescription($data[self::FIELD_PRESCRIPTION]);
            } else {
                $this->setPrescription(new FHIRReference($data[self::FIELD_PRESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_REASON_GIVEN])) {
            if (is_array($data[self::FIELD_REASON_GIVEN])) {
                foreach($data[self::FIELD_REASON_GIVEN] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReasonGiven($v);
                    } else {
                        $this->addReasonGiven(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_REASON_GIVEN] instanceof FHIRCodeableConcept) {
                $this->addReasonGiven($data[self::FIELD_REASON_GIVEN]);
            } else {
                $this->addReasonGiven(new FHIRCodeableConcept($data[self::FIELD_REASON_GIVEN]));
            }
        }
        if (isset($data[self::FIELD_REASON_NOT_GIVEN])) {
            if (is_array($data[self::FIELD_REASON_NOT_GIVEN])) {
                foreach($data[self::FIELD_REASON_NOT_GIVEN] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReasonNotGiven($v);
                    } else {
                        $this->addReasonNotGiven(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_REASON_NOT_GIVEN] instanceof FHIRCodeableConcept) {
                $this->addReasonNotGiven($data[self::FIELD_REASON_NOT_GIVEN]);
            } else {
                $this->addReasonNotGiven(new FHIRCodeableConcept($data[self::FIELD_REASON_NOT_GIVEN]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRMedicationAdministrationStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATUS])) {
                $this->setStatus(new FHIRMedicationAdministrationStatus([FHIRMedicationAdministrationStatus::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
            } else {
                $this->setStatus(new FHIRMedicationAdministrationStatus($data[self::FIELD_STATUS]));
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
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
        return "<MedicationAdministration{$xmlns}></MedicationAdministration>";
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The device used in administering the medication to the patient. For example, a
     * particular infusion pump.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The device used in administering the medication to the patient. For example, a
     * particular infusion pump.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $device
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function addDevice(FHIRReference $device = null)
    {
        $this->device[] = $device;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The device used in administering the medication to the patient. For example, a
     * particular infusion pump.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[] $device
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function setDevice(array $device = [])
    {
        $this->device = [];
        if ([] === $device) {
            return $this;
        }
        foreach($device as $v) {
            if ($v instanceof FHIRReference) {
                $this->addDevice($v);
            } else {
                $this->addDevice(new FHIRReference($v));
            }
        }
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
    public function getDosage()
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function setDosage(FHIRMedicationAdministrationDosage $dosage = null)
    {
        $this->dosage = $dosage;
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
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getEffectiveTimeDateTime()
    {
        return $this->effectiveTimeDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $effectiveTimeDateTime
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function setEffectiveTimeDateTime($effectiveTimeDateTime = null)
    {
        if (null === $effectiveTimeDateTime) {
            $this->effectiveTimeDateTime = null;
            return $this;
        }
        if ($effectiveTimeDateTime instanceof FHIRDateTime) {
            $this->effectiveTimeDateTime = $effectiveTimeDateTime;
            return $this;
        }
        $this->effectiveTimeDateTime = new FHIRDateTime($effectiveTimeDateTime);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getEffectiveTimePeriod()
    {
        return $this->effectiveTimePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod $effectiveTimePeriod
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function setEffectiveTimePeriod(FHIRPeriod $effectiveTimePeriod = null)
    {
        $this->effectiveTimePeriod = $effectiveTimePeriod;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The visit, admission or other contact between patient and health care provider
     * the medication administration was performed as part of.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The visit, admission or other contact between patient and health care provider
     * the medication administration was performed as part of.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $encounter
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function setEncounter(FHIRReference $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
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
     * External identifier - FHIR will generate its own internal identifiers (probably
     * URLs) which do not need to be explicitly managed by the resource. The identifier
     * here is one that would be used by another non-FHIR system - for example an
     * automated medication pump would provide a record each time it operated; an
     * administration while the patient was off the ward might be made with a different
     * system and entered after the event. Particularly important if these records have
     * to be updated.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getMedicationCodeableConcept()
    {
        return $this->medicationCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $medicationCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function setMedicationCodeableConcept(FHIRCodeableConcept $medicationCodeableConcept = null)
    {
        $this->medicationCodeableConcept = $medicationCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getMedicationReference()
    {
        return $this->medicationReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $medicationReference
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function setMedicationReference(FHIRReference $medicationReference = null)
    {
        $this->medicationReference = $medicationReference;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Extra information about the medication administration that is not conveyed by
     * the other attributes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Extra information about the medication administration that is not conveyed by
     * the other attributes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $note
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function setNote($note = null)
    {
        if (null === $note) {
            $this->note = null;
            return $this;
        }
        if ($note instanceof FHIRString) {
            $this->note = $note;
            return $this;
        }
        $this->note = new FHIRString($note);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The person or animal receiving the medication.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The person or animal receiving the medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $patient
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The individual who was responsible for giving the medication to the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getPractitioner()
    {
        return $this->practitioner;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The individual who was responsible for giving the medication to the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $practitioner
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function setPractitioner(FHIRReference $practitioner = null)
    {
        $this->practitioner = $practitioner;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The original request, instruction or authority to perform the administration.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getPrescription()
    {
        return $this->prescription;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The original request, instruction or authority to perform the administration.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $prescription
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function setPrescription(FHIRReference $prescription = null)
    {
        $this->prescription = $prescription;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code indicating why the medication was given.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonGiven()
    {
        return $this->reasonGiven;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code indicating why the medication was given.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $reasonGiven
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function addReasonGiven(FHIRCodeableConcept $reasonGiven = null)
    {
        $this->reasonGiven[] = $reasonGiven;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code indicating why the medication was given.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $reasonGiven
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function setReasonGiven(array $reasonGiven = [])
    {
        $this->reasonGiven = [];
        if ([] === $reasonGiven) {
            return $this;
        }
        foreach($reasonGiven as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReasonGiven($v);
            } else {
                $this->addReasonGiven(new FHIRCodeableConcept($v));
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
     * A code indicating why the administration was not performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonNotGiven()
    {
        return $this->reasonNotGiven;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code indicating why the administration was not performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $reasonNotGiven
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function addReasonNotGiven(FHIRCodeableConcept $reasonNotGiven = null)
    {
        $this->reasonNotGiven[] = $reasonNotGiven;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code indicating why the administration was not performed.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $reasonNotGiven
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function setReasonNotGiven(array $reasonNotGiven = [])
    {
        $this->reasonNotGiven = [];
        if ([] === $reasonNotGiven) {
            return $this;
        }
        foreach($reasonNotGiven as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReasonNotGiven($v);
            } else {
                $this->addReasonNotGiven(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A set of codes indicating the current status of a MedicationAdministration.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Will generally be set to show that the administration has been completed. For
     * some long running administrations such as infusions it is possible for an
     * administration to be started but not completed or it may be paused while some
     * other process is under way.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationAdministrationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A set of codes indicating the current status of a MedicationAdministration.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Will generally be set to show that the administration has been completed. For
     * some long running administrations such as infusions it is possible for an
     * administration to be started but not completed or it may be paused while some
     * other process is under way.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationAdministrationStatus $status
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function setStatus(FHIRMedicationAdministrationStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Set this to true if the record is saying that the medication was NOT
     * administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getWasNotGiven()
    {
        return $this->wasNotGiven;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Set this to true if the record is saying that the medication was NOT
     * administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $wasNotGiven
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
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
                throw new \DomainException(sprintf('FHIRMedicationAdministration::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicationAdministration::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicationAdministration;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicationAdministration)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicationAdministration::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration or null, %s seen.',
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
        if (isset($children->device)) {
            foreach($children->device as $child) {
                $type->addDevice(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->dosage)) {
            $type->setDosage(FHIRMedicationAdministrationDosage::xmlUnserialize($children->dosage));
        }
        if (isset($attributes->effectiveTimeDateTime)) {
            $type->setEffectiveTimeDateTime((string)$attributes->effectiveTimeDateTime);
        }
        if (isset($children->effectiveTimeDateTime)) {
            $type->setEffectiveTimeDateTime(FHIRDateTime::xmlUnserialize($children->effectiveTimeDateTime));
        }
        if (isset($children->effectiveTimePeriod)) {
            $type->setEffectiveTimePeriod(FHIRPeriod::xmlUnserialize($children->effectiveTimePeriod));
        }
        if (isset($children->encounter)) {
            $type->setEncounter(FHIRReference::xmlUnserialize($children->encounter));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->medicationCodeableConcept)) {
            $type->setMedicationCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->medicationCodeableConcept));
        }
        if (isset($children->medicationReference)) {
            $type->setMedicationReference(FHIRReference::xmlUnserialize($children->medicationReference));
        }
        if (isset($attributes->note)) {
            $type->setNote((string)$attributes->note);
        }
        if (isset($children->note)) {
            $type->setNote(FHIRString::xmlUnserialize($children->note));
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->practitioner)) {
            $type->setPractitioner(FHIRReference::xmlUnserialize($children->practitioner));
        }
        if (isset($children->prescription)) {
            $type->setPrescription(FHIRReference::xmlUnserialize($children->prescription));
        }
        if (isset($children->reasonGiven)) {
            foreach($children->reasonGiven as $child) {
                $type->addReasonGiven(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->reasonNotGiven)) {
            foreach($children->reasonNotGiven as $child) {
                $type->addReasonNotGiven(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRMedicationAdministrationStatus::xmlUnserialize($children->status));
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

        if ([] !== ($vs = $this->getDevice())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DEVICE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getDosage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOSAGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEffectiveTimeDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EFFECTIVE_TIME_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getEffectiveTimePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EFFECTIVE_TIME_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getEncounter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENCOUNTER, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getMedicationCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MEDICATION_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getMedicationReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MEDICATION_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNote())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPractitioner())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRACTITIONER, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPrescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getReasonGiven())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_GIVEN, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getReasonNotGiven())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_NOT_GIVEN, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getDevice())) {
            $a[self::FIELD_DEVICE] = $vs;
        }
        if (null !== ($v = $this->getDosage())) {
            $a[self::FIELD_DOSAGE] = $v;
        }
        if (null !== ($v = $this->getEffectiveTimeDateTime())) {
            $a[self::FIELD_EFFECTIVE_TIME_DATE_TIME] = $v->getValue();
            $a[self::FIELD_EFFECTIVE_TIME_DATE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getEffectiveTimePeriod())) {
            $a[self::FIELD_EFFECTIVE_TIME_PERIOD] = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $a[self::FIELD_ENCOUNTER] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getMedicationCodeableConcept())) {
            $a[self::FIELD_MEDICATION_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getMedicationReference())) {
            $a[self::FIELD_MEDICATION_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a[self::FIELD_NOTE] = $v->getValue();
            $a[self::FIELD_NOTE_EXT] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if (null !== ($v = $this->getPractitioner())) {
            $a[self::FIELD_PRACTITIONER] = $v;
        }
        if (null !== ($v = $this->getPrescription())) {
            $a[self::FIELD_PRESCRIPTION] = $v;
        }
        if ([] !== ($vs = $this->getReasonGiven())) {
            $a[self::FIELD_REASON_GIVEN] = $vs;
        }
        if ([] !== ($vs = $this->getReasonNotGiven())) {
            $a[self::FIELD_REASON_NOT_GIVEN] = $vs;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
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