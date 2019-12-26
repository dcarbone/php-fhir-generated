<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDosageInstruction;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionSubstitution;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRMedicationPrescriptionStatus;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * An order for both supply of the medication and the instructions for
 * administration of the medicine to a patient.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicationPrescription
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIRMedicationPrescription extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_PRESCRIPTION;
    const FIELD_DATE_WRITTEN = 'dateWritten';
    const FIELD_DATE_WRITTEN_EXT = '_dateWritten';
    const FIELD_DISPENSE = 'dispense';
    const FIELD_DOSAGE_INSTRUCTION = 'dosageInstruction';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_MEDICATION = 'medication';
    const FIELD_PATIENT = 'patient';
    const FIELD_PRESCRIBER = 'prescriber';
    const FIELD_REASON_CODEABLE_CONCEPT = 'reasonCodeableConcept';
    const FIELD_REASON_RESOURCE = 'reasonResource';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUBSTITUTION = 'substitution';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the prescription was written.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    protected $dateWritten = null;

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     *
     * Deals with details of the dispense part of the order.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense
     */
    protected $dispense = null;

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDosageInstruction[]
     */
    protected $dosageInstruction = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource that identifies the particular occurrence of contact
     * between patient and health care provider.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $encounter = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifier - one that would be used by another non-FHIR system - for
     * example a re-imbursement system might issue its own id for each prescription
     * that is created. This is particularly important where FHIR only provides part of
     * an erntire workflow process where records have to be tracked through an entire
     * system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $medication = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing the person to whom the medication will be
     * given.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $patient = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare professional responsible for authorizing the prescription.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $prescriber = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Can be the reason or the indication for writing the prescription.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $reasonCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Can be the reason or the indication for writing the prescription.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $reasonResource = null;

    /**
     * A code specifying the state of the prescribing event. Describes the lifecycle of
     * the prescription.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the order. Generally this will be active or
     * completed state.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRMedicationPrescriptionStatus
     */
    protected $status = null;

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     *
     * Indicates whether or not substitution can or should be part of the dispense. In
     * some cases substitution must happen, in other cases substitution must not
     * happen, and in others it does not matter. This block explains the prescriber's
     * intent. If nothing is specified substitution may be done.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionSubstitution
     */
    protected $substitution = null;

    /**
     * Validation map for fields in type MedicationPrescription
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRMedicationPrescription Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationPrescription::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DATE_WRITTEN]) || isset($data[self::FIELD_DATE_WRITTEN_EXT])) {
            if (isset($data[self::FIELD_DATE_WRITTEN])) {
                $value = $data[self::FIELD_DATE_WRITTEN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATE_WRITTEN_EXT]) && is_array($data[self::FIELD_DATE_WRITTEN_EXT])) {
                $ext = $data[self::FIELD_DATE_WRITTEN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDateWritten($value);
                } else if (is_array($value)) {
                    $this->setDateWritten(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDateWritten(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDateWritten(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_DISPENSE])) {
            if ($data[self::FIELD_DISPENSE] instanceof FHIRMedicationPrescriptionDispense) {
                $this->setDispense($data[self::FIELD_DISPENSE]);
            } else {
                $this->setDispense(new FHIRMedicationPrescriptionDispense($data[self::FIELD_DISPENSE]));
            }
        }
        if (isset($data[self::FIELD_DOSAGE_INSTRUCTION])) {
            if (is_array($data[self::FIELD_DOSAGE_INSTRUCTION])) {
                foreach($data[self::FIELD_DOSAGE_INSTRUCTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationPrescriptionDosageInstruction) {
                        $this->addDosageInstruction($v);
                    } else {
                        $this->addDosageInstruction(new FHIRMedicationPrescriptionDosageInstruction($v));
                    }
                }
            } else if ($data[self::FIELD_DOSAGE_INSTRUCTION] instanceof FHIRMedicationPrescriptionDosageInstruction) {
                $this->addDosageInstruction($data[self::FIELD_DOSAGE_INSTRUCTION]);
            } else {
                $this->addDosageInstruction(new FHIRMedicationPrescriptionDosageInstruction($data[self::FIELD_DOSAGE_INSTRUCTION]));
            }
        }
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRResourceReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRResourceReference($data[self::FIELD_ENCOUNTER]));
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
        if (isset($data[self::FIELD_MEDICATION])) {
            if ($data[self::FIELD_MEDICATION] instanceof FHIRResourceReference) {
                $this->setMedication($data[self::FIELD_MEDICATION]);
            } else {
                $this->setMedication(new FHIRResourceReference($data[self::FIELD_MEDICATION]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRResourceReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRResourceReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_PRESCRIBER])) {
            if ($data[self::FIELD_PRESCRIBER] instanceof FHIRResourceReference) {
                $this->setPrescriber($data[self::FIELD_PRESCRIBER]);
            } else {
                $this->setPrescriber(new FHIRResourceReference($data[self::FIELD_PRESCRIBER]));
            }
        }
        if (isset($data[self::FIELD_REASON_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_REASON_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setReasonCodeableConcept($data[self::FIELD_REASON_CODEABLE_CONCEPT]);
            } else {
                $this->setReasonCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_REASON_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_REASON_RESOURCE])) {
            if ($data[self::FIELD_REASON_RESOURCE] instanceof FHIRResourceReference) {
                $this->setReasonResource($data[self::FIELD_REASON_RESOURCE]);
            } else {
                $this->setReasonResource(new FHIRResourceReference($data[self::FIELD_REASON_RESOURCE]));
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
                if ($value instanceof FHIRMedicationPrescriptionStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRMedicationPrescriptionStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRMedicationPrescriptionStatus([FHIRMedicationPrescriptionStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRMedicationPrescriptionStatus($ext));
            }
        }
        if (isset($data[self::FIELD_SUBSTITUTION])) {
            if ($data[self::FIELD_SUBSTITUTION] instanceof FHIRMedicationPrescriptionSubstitution) {
                $this->setSubstitution($data[self::FIELD_SUBSTITUTION]);
            } else {
                $this->setSubstitution(new FHIRMedicationPrescriptionSubstitution($data[self::FIELD_SUBSTITUTION]));
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
        return "<MedicationPrescription{$xmlns}></MedicationPrescription>";
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
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the prescription was written.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    public function getDateWritten()
    {
        return $this->dateWritten;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the prescription was written.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $dateWritten
     * @return static
     */
    public function setDateWritten($dateWritten = null)
    {
        if (null === $dateWritten) {
            $this->dateWritten = null;
            return $this;
        }
        if ($dateWritten instanceof FHIRDateTime) {
            $this->dateWritten = $dateWritten;
            return $this;
        }
        $this->dateWritten = new FHIRDateTime($dateWritten);
        return $this;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     *
     * Deals with details of the dispense part of the order.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense
     */
    public function getDispense()
    {
        return $this->dispense;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     *
     * Deals with details of the dispense part of the order.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense $dispense
     * @return static
     */
    public function setDispense(FHIRMedicationPrescriptionDispense $dispense = null)
    {
        $this->dispense = $dispense;
        return $this;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDosageInstruction[]
     */
    public function getDosageInstruction()
    {
        return $this->dosageInstruction;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDosageInstruction $dosageInstruction
     * @return static
     */
    public function addDosageInstruction(FHIRMedicationPrescriptionDosageInstruction $dosageInstruction = null)
    {
        $this->dosageInstruction[] = $dosageInstruction;
        return $this;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDosageInstruction[] $dosageInstruction
     * @return static
     */
    public function setDosageInstruction(array $dosageInstruction = [])
    {
        $this->dosageInstruction = [];
        if ([] === $dosageInstruction) {
            return $this;
        }
        foreach($dosageInstruction as $v) {
            if ($v instanceof FHIRMedicationPrescriptionDosageInstruction) {
                $this->addDosageInstruction($v);
            } else {
                $this->addDosageInstruction(new FHIRMedicationPrescriptionDosageInstruction($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource that identifies the particular occurrence of contact
     * between patient and health care provider.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
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
     * A link to a resource that identifies the particular occurrence of contact
     * between patient and health care provider.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $encounter
     * @return static
     */
    public function setEncounter(FHIRResourceReference $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifier - one that would be used by another non-FHIR system - for
     * example a re-imbursement system might issue its own id for each prescription
     * that is created. This is particularly important where FHIR only provides part of
     * an erntire workflow process where records have to be tracked through an entire
     * system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
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
     * External identifier - one that would be used by another non-FHIR system - for
     * example a re-imbursement system might issue its own id for each prescription
     * that is created. This is particularly important where FHIR only provides part of
     * an erntire workflow process where records have to be tracked through an entire
     * system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $identifier
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
     * External identifier - one that would be used by another non-FHIR system - for
     * example a re-imbursement system might issue its own id for each prescription
     * that is created. This is particularly important where FHIR only provides part of
     * an erntire workflow process where records have to be tracked through an entire
     * system.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[] $identifier
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
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getMedication()
    {
        return $this->medication;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $medication
     * @return static
     */
    public function setMedication(FHIRResourceReference $medication = null)
    {
        $this->medication = $medication;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing the person to whom the medication will be
     * given.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
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
     * A link to a resource representing the person to whom the medication will be
     * given.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $patient
     * @return static
     */
    public function setPatient(FHIRResourceReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare professional responsible for authorizing the prescription.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getPrescriber()
    {
        return $this->prescriber;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare professional responsible for authorizing the prescription.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $prescriber
     * @return static
     */
    public function setPrescriber(FHIRResourceReference $prescriber = null)
    {
        $this->prescriber = $prescriber;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Can be the reason or the indication for writing the prescription.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCodeableConcept()
    {
        return $this->reasonCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Can be the reason or the indication for writing the prescription.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $reasonCodeableConcept
     * @return static
     */
    public function setReasonCodeableConcept(FHIRCodeableConcept $reasonCodeableConcept = null)
    {
        $this->reasonCodeableConcept = $reasonCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Can be the reason or the indication for writing the prescription.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getReasonResource()
    {
        return $this->reasonResource;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Can be the reason or the indication for writing the prescription.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $reasonResource
     * @return static
     */
    public function setReasonResource(FHIRResourceReference $reasonResource = null)
    {
        $this->reasonResource = $reasonResource;
        return $this;
    }

    /**
     * A code specifying the state of the prescribing event. Describes the lifecycle of
     * the prescription.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the order. Generally this will be active or
     * completed state.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRMedicationPrescriptionStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code specifying the state of the prescribing event. Describes the lifecycle of
     * the prescription.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the order. Generally this will be active or
     * completed state.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRMedicationPrescriptionStatus $status
     * @return static
     */
    public function setStatus(FHIRMedicationPrescriptionStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     *
     * Indicates whether or not substitution can or should be part of the dispense. In
     * some cases substitution must happen, in other cases substitution must not
     * happen, and in others it does not matter. This block explains the prescriber's
     * intent. If nothing is specified substitution may be done.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionSubstitution
     */
    public function getSubstitution()
    {
        return $this->substitution;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     *
     * Indicates whether or not substitution can or should be part of the dispense. In
     * some cases substitution must happen, in other cases substitution must not
     * happen, and in others it does not matter. This block explains the prescriber's
     * intent. If nothing is specified substitution may be done.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionSubstitution $substitution
     * @return static
     */
    public function setSubstitution(FHIRMedicationPrescriptionSubstitution $substitution = null)
    {
        $this->substitution = $substitution;
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
        if (null !== ($v = $this->getDateWritten())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE_WRITTEN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDispense())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISPENSE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDosageInstruction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DOSAGE_INSTRUCTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getMedication())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPrescriber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRESCRIBER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReasonCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REASON_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReasonResource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REASON_RESOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubstitution())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTITUTION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DATE_WRITTEN])) {
            $v = $this->getDateWritten();
            foreach($validationRules[self::FIELD_DATE_WRITTEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_PRESCRIPTION, self::FIELD_DATE_WRITTEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_WRITTEN])) {
                        $errs[self::FIELD_DATE_WRITTEN] = [];
                    }
                    $errs[self::FIELD_DATE_WRITTEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISPENSE])) {
            $v = $this->getDispense();
            foreach($validationRules[self::FIELD_DISPENSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_PRESCRIPTION, self::FIELD_DISPENSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISPENSE])) {
                        $errs[self::FIELD_DISPENSE] = [];
                    }
                    $errs[self::FIELD_DISPENSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSAGE_INSTRUCTION])) {
            $v = $this->getDosageInstruction();
            foreach($validationRules[self::FIELD_DOSAGE_INSTRUCTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_PRESCRIPTION, self::FIELD_DOSAGE_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSAGE_INSTRUCTION])) {
                        $errs[self::FIELD_DOSAGE_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_DOSAGE_INSTRUCTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_PRESCRIPTION, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_PRESCRIPTION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEDICATION])) {
            $v = $this->getMedication();
            foreach($validationRules[self::FIELD_MEDICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_PRESCRIPTION, self::FIELD_MEDICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEDICATION])) {
                        $errs[self::FIELD_MEDICATION] = [];
                    }
                    $errs[self::FIELD_MEDICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_PRESCRIPTION, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRESCRIBER])) {
            $v = $this->getPrescriber();
            foreach($validationRules[self::FIELD_PRESCRIBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_PRESCRIPTION, self::FIELD_PRESCRIBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRESCRIBER])) {
                        $errs[self::FIELD_PRESCRIBER] = [];
                    }
                    $errs[self::FIELD_PRESCRIBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_CODEABLE_CONCEPT])) {
            $v = $this->getReasonCodeableConcept();
            foreach($validationRules[self::FIELD_REASON_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_PRESCRIPTION, self::FIELD_REASON_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_REASON_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_REASON_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_RESOURCE])) {
            $v = $this->getReasonResource();
            foreach($validationRules[self::FIELD_REASON_RESOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_PRESCRIPTION, self::FIELD_REASON_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_RESOURCE])) {
                        $errs[self::FIELD_REASON_RESOURCE] = [];
                    }
                    $errs[self::FIELD_REASON_RESOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_PRESCRIPTION, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSTITUTION])) {
            $v = $this->getSubstitution();
            foreach($validationRules[self::FIELD_SUBSTITUTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_PRESCRIPTION, self::FIELD_SUBSTITUTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSTITUTION])) {
                        $errs[self::FIELD_SUBSTITUTION] = [];
                    }
                    $errs[self::FIELD_SUBSTITUTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationPrescription $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationPrescription
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
                throw new \DomainException(sprintf('FHIRMedicationPrescription::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicationPrescription::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicationPrescription;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicationPrescription)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicationPrescription::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationPrescription or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->dateWritten)) {
            $type->setDateWritten(FHIRDateTime::xmlUnserialize($children->dateWritten));
        }
        if (isset($attributes->dateWritten)) {
            $pt = $type->getDateWritten();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dateWritten);
            } else {
                $type->setDateWritten((string)$attributes->dateWritten);
            }
        }
        if (isset($children->dispense)) {
            $type->setDispense(FHIRMedicationPrescriptionDispense::xmlUnserialize($children->dispense));
        }
        if (isset($children->dosageInstruction)) {
            foreach($children->dosageInstruction as $child) {
                $type->addDosageInstruction(FHIRMedicationPrescriptionDosageInstruction::xmlUnserialize($child));
            }
        }
        if (isset($children->encounter)) {
            $type->setEncounter(FHIRResourceReference::xmlUnserialize($children->encounter));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->medication)) {
            $type->setMedication(FHIRResourceReference::xmlUnserialize($children->medication));
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRResourceReference::xmlUnserialize($children->patient));
        }
        if (isset($children->prescriber)) {
            $type->setPrescriber(FHIRResourceReference::xmlUnserialize($children->prescriber));
        }
        if (isset($children->reasonCodeableConcept)) {
            $type->setReasonCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->reasonCodeableConcept));
        }
        if (isset($children->reasonResource)) {
            $type->setReasonResource(FHIRResourceReference::xmlUnserialize($children->reasonResource));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRMedicationPrescriptionStatus::xmlUnserialize($children->status));
        }
        if (isset($children->substitution)) {
            $type->setSubstitution(FHIRMedicationPrescriptionSubstitution::xmlUnserialize($children->substitution));
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
        if (null !== ($v = $this->getDateWritten())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE_WRITTEN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDispense())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISPENSE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getDosageInstruction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DOSAGE_INSTRUCTION, null, $v->_getFHIRXMLNamespace()));
            }
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
        if (null !== ($v = $this->getMedication())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MEDICATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPrescriber())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRESCRIBER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReasonCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReasonResource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_RESOURCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubstitution())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBSTITUTION, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDateWritten())) {
            $a[self::FIELD_DATE_WRITTEN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_DATE_WRITTEN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDispense())) {
            $a[self::FIELD_DISPENSE] = $v;
        }
        if ([] !== ($vs = $this->getDosageInstruction())) {
            $a[self::FIELD_DOSAGE_INSTRUCTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DOSAGE_INSTRUCTION][] = $v;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            $a[self::FIELD_ENCOUNTER] = $v;
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
        if (null !== ($v = $this->getMedication())) {
            $a[self::FIELD_MEDICATION] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if (null !== ($v = $this->getPrescriber())) {
            $a[self::FIELD_PRESCRIBER] = $v;
        }
        if (null !== ($v = $this->getReasonCodeableConcept())) {
            $a[self::FIELD_REASON_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getReasonResource())) {
            $a[self::FIELD_REASON_RESOURCE] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMedicationPrescriptionStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMedicationPrescriptionStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubstitution())) {
            $a[self::FIELD_SUBSTITUTION] = $v;
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