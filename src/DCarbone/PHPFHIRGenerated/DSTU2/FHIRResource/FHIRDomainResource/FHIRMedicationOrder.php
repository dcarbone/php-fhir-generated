<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDispenseRequest;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDosageInstruction;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderSubstitution;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationOrderStatus;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * An order for both supply of the medication and the instructions for
 * administration of the medication to a patient. The resource is called
 * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
 * across inpatient and outpatient settings as well as for care plans, etc.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicationOrder
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRMedicationOrder extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER;
    const FIELD_DATE_ENDED = 'dateEnded';
    const FIELD_DATE_ENDED_EXT = '_dateEnded';
    const FIELD_DATE_WRITTEN = 'dateWritten';
    const FIELD_DATE_WRITTEN_EXT = '_dateWritten';
    const FIELD_DISPENSE_REQUEST = 'dispenseRequest';
    const FIELD_DOSAGE_INSTRUCTION = 'dosageInstruction';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_MEDICATION_CODEABLE_CONCEPT = 'medicationCodeableConcept';
    const FIELD_MEDICATION_REFERENCE = 'medicationReference';
    const FIELD_NOTE = 'note';
    const FIELD_NOTE_EXT = '_note';
    const FIELD_PATIENT = 'patient';
    const FIELD_PRESCRIBER = 'prescriber';
    const FIELD_PRIOR_PRESCRIPTION = 'priorPrescription';
    const FIELD_REASON_CODEABLE_CONCEPT = 'reasonCodeableConcept';
    const FIELD_REASON_ENDED = 'reasonEnded';
    const FIELD_REASON_REFERENCE = 'reasonReference';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUBSTITUTION = 'substitution';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the prescription was stopped.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $dateEnded = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the prescription was written.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $dateWritten = null;

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
     * across inpatient and outpatient settings as well as for care plans, etc.
     *
     * Indicates the specific details for the dispense or medication supply part of a
     * medication order (also known as a Medication Prescription). Note that this
     * information is NOT always sent with the order. There may be in some settings
     * (e.g. hospitals) institutional or system support for completing the dispense
     * details in the pharmacy department.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDispenseRequest
     */
    protected $dispenseRequest = null;

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
     * across inpatient and outpatient settings as well as for care plans, etc.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDosageInstruction[]
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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * an entire workflow process where records have to be tracked through an entire
     * system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is a link to a resource that
     * represents the medication which may be the details of the medication or simply
     * an attribute carrying a code that identifies the medication from a known list of
     * medications.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $medicationCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is a link to a resource that
     * represents the medication which may be the details of the medication or simply
     * an attribute carrying a code that identifies the medication from a known list of
     * medications.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $medicationReference = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra information about the prescription that could not be conveyed by the other
     * attributes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $note = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing the person to whom the medication will be
     * given.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $patient = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare professional responsible for authorizing the prescription.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $prescriber = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing an earlier order or prescription that this
     * order supersedes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $priorPrescription = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Can be the reason or the indication for writing the prescription.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $reasonCodeableConcept = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason why the prescription was stopped, if it was.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $reasonEnded = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Can be the reason or the indication for writing the prescription.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $reasonReference = null;

    /**
     * A code specifying the state of the prescribing event. Describes the lifecycle of
     * the prescription.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the order. Generally this will be active or
     * completed state.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationOrderStatus
     */
    protected $status = null;

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
     * across inpatient and outpatient settings as well as for care plans, etc.
     *
     * Indicates whether or not substitution can or should be part of the dispense. In
     * some cases substitution must happen, in other cases substitution must not
     * happen, and in others it does not matter. This block explains the prescriber's
     * intent. If nothing is specified substitution may be done.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderSubstitution
     */
    protected $substitution = null;

    /**
     * Validation map for fields in type MedicationOrder
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRMedicationOrder Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationOrder::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DATE_ENDED]) || isset($data[self::FIELD_DATE_ENDED_EXT])) {
            if (isset($data[self::FIELD_DATE_ENDED])) {
                $value = $data[self::FIELD_DATE_ENDED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATE_ENDED_EXT]) && is_array($data[self::FIELD_DATE_ENDED_EXT])) {
                $ext = $data[self::FIELD_DATE_ENDED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDateEnded($value);
                } else if (is_array($value)) {
                    $this->setDateEnded(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDateEnded(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDateEnded(new FHIRDateTime($ext));
            }
        }
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
        if (isset($data[self::FIELD_DISPENSE_REQUEST])) {
            if ($data[self::FIELD_DISPENSE_REQUEST] instanceof FHIRMedicationOrderDispenseRequest) {
                $this->setDispenseRequest($data[self::FIELD_DISPENSE_REQUEST]);
            } else {
                $this->setDispenseRequest(new FHIRMedicationOrderDispenseRequest($data[self::FIELD_DISPENSE_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_DOSAGE_INSTRUCTION])) {
            if (is_array($data[self::FIELD_DOSAGE_INSTRUCTION])) {
                foreach($data[self::FIELD_DOSAGE_INSTRUCTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationOrderDosageInstruction) {
                        $this->addDosageInstruction($v);
                    } else {
                        $this->addDosageInstruction(new FHIRMedicationOrderDosageInstruction($v));
                    }
                }
            } else if ($data[self::FIELD_DOSAGE_INSTRUCTION] instanceof FHIRMedicationOrderDosageInstruction) {
                $this->addDosageInstruction($data[self::FIELD_DOSAGE_INSTRUCTION]);
            } else {
                $this->addDosageInstruction(new FHIRMedicationOrderDosageInstruction($data[self::FIELD_DOSAGE_INSTRUCTION]));
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
        if (isset($data[self::FIELD_NOTE]) || isset($data[self::FIELD_NOTE_EXT])) {
            if (isset($data[self::FIELD_NOTE])) {
                $value = $data[self::FIELD_NOTE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NOTE_EXT]) && is_array($data[self::FIELD_NOTE_EXT])) {
                $ext = $data[self::FIELD_NOTE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setNote($value);
                } else if (is_array($value)) {
                    $this->setNote(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setNote(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setNote(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_PRESCRIBER])) {
            if ($data[self::FIELD_PRESCRIBER] instanceof FHIRReference) {
                $this->setPrescriber($data[self::FIELD_PRESCRIBER]);
            } else {
                $this->setPrescriber(new FHIRReference($data[self::FIELD_PRESCRIBER]));
            }
        }
        if (isset($data[self::FIELD_PRIOR_PRESCRIPTION])) {
            if ($data[self::FIELD_PRIOR_PRESCRIPTION] instanceof FHIRReference) {
                $this->setPriorPrescription($data[self::FIELD_PRIOR_PRESCRIPTION]);
            } else {
                $this->setPriorPrescription(new FHIRReference($data[self::FIELD_PRIOR_PRESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_REASON_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_REASON_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setReasonCodeableConcept($data[self::FIELD_REASON_CODEABLE_CONCEPT]);
            } else {
                $this->setReasonCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_REASON_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_REASON_ENDED])) {
            if ($data[self::FIELD_REASON_ENDED] instanceof FHIRCodeableConcept) {
                $this->setReasonEnded($data[self::FIELD_REASON_ENDED]);
            } else {
                $this->setReasonEnded(new FHIRCodeableConcept($data[self::FIELD_REASON_ENDED]));
            }
        }
        if (isset($data[self::FIELD_REASON_REFERENCE])) {
            if ($data[self::FIELD_REASON_REFERENCE] instanceof FHIRReference) {
                $this->setReasonReference($data[self::FIELD_REASON_REFERENCE]);
            } else {
                $this->setReasonReference(new FHIRReference($data[self::FIELD_REASON_REFERENCE]));
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
                if ($value instanceof FHIRMedicationOrderStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRMedicationOrderStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRMedicationOrderStatus([FHIRMedicationOrderStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRMedicationOrderStatus($ext));
            }
        }
        if (isset($data[self::FIELD_SUBSTITUTION])) {
            if ($data[self::FIELD_SUBSTITUTION] instanceof FHIRMedicationOrderSubstitution) {
                $this->setSubstitution($data[self::FIELD_SUBSTITUTION]);
            } else {
                $this->setSubstitution(new FHIRMedicationOrderSubstitution($data[self::FIELD_SUBSTITUTION]));
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
        return "<MedicationOrder{$xmlns}></MedicationOrder>";
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
     * The date (and perhaps time) when the prescription was stopped.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getDateEnded()
    {
        return $this->dateEnded;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the prescription was stopped.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $dateEnded
     * @return static
     */
    public function setDateEnded($dateEnded = null)
    {
        if (null === $dateEnded) {
            $this->dateEnded = null;
            return $this;
        }
        if ($dateEnded instanceof FHIRDateTime) {
            $this->dateEnded = $dateEnded;
            return $this;
        }
        $this->dateEnded = new FHIRDateTime($dateEnded);
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
     * The date (and perhaps time) when the prescription was written.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getDateWritten()
    {
        return $this->dateWritten;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the prescription was written.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $dateWritten
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
     * administration of the medication to a patient. The resource is called
     * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
     * across inpatient and outpatient settings as well as for care plans, etc.
     *
     * Indicates the specific details for the dispense or medication supply part of a
     * medication order (also known as a Medication Prescription). Note that this
     * information is NOT always sent with the order. There may be in some settings
     * (e.g. hospitals) institutional or system support for completing the dispense
     * details in the pharmacy department.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDispenseRequest
     */
    public function getDispenseRequest()
    {
        return $this->dispenseRequest;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
     * across inpatient and outpatient settings as well as for care plans, etc.
     *
     * Indicates the specific details for the dispense or medication supply part of a
     * medication order (also known as a Medication Prescription). Note that this
     * information is NOT always sent with the order. There may be in some settings
     * (e.g. hospitals) institutional or system support for completing the dispense
     * details in the pharmacy department.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDispenseRequest $dispenseRequest
     * @return static
     */
    public function setDispenseRequest(FHIRMedicationOrderDispenseRequest $dispenseRequest = null)
    {
        $this->dispenseRequest = $dispenseRequest;
        return $this;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
     * across inpatient and outpatient settings as well as for care plans, etc.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDosageInstruction[]
     */
    public function getDosageInstruction()
    {
        return $this->dosageInstruction;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
     * across inpatient and outpatient settings as well as for care plans, etc.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDosageInstruction $dosageInstruction
     * @return static
     */
    public function addDosageInstruction(FHIRMedicationOrderDosageInstruction $dosageInstruction = null)
    {
        $this->dosageInstruction[] = $dosageInstruction;
        return $this;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
     * across inpatient and outpatient settings as well as for care plans, etc.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDosageInstruction[] $dosageInstruction
     * @return static
     */
    public function setDosageInstruction(array $dosageInstruction = [])
    {
        $this->dosageInstruction = [];
        if ([] === $dosageInstruction) {
            return $this;
        }
        foreach($dosageInstruction as $v) {
            if ($v instanceof FHIRMedicationOrderDosageInstruction) {
                $this->addDosageInstruction($v);
            } else {
                $this->addDosageInstruction(new FHIRMedicationOrderDosageInstruction($v));
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
     * A link to a resource that identifies the particular occurrence of contact
     * between patient and health care provider.
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifier - one that would be used by another non-FHIR system - for
     * example a re-imbursement system might issue its own id for each prescription
     * that is created. This is particularly important where FHIR only provides part of
     * an entire workflow process where records have to be tracked through an entire
     * system.
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
     * External identifier - one that would be used by another non-FHIR system - for
     * example a re-imbursement system might issue its own id for each prescription
     * that is created. This is particularly important where FHIR only provides part of
     * an entire workflow process where records have to be tracked through an entire
     * system.
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
     * External identifier - one that would be used by another non-FHIR system - for
     * example a re-imbursement system might issue its own id for each prescription
     * that is created. This is particularly important where FHIR only provides part of
     * an entire workflow process where records have to be tracked through an entire
     * system.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is a link to a resource that
     * represents the medication which may be the details of the medication or simply
     * an attribute carrying a code that identifies the medication from a known list of
     * medications.
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is a link to a resource that
     * represents the medication which may be the details of the medication or simply
     * an attribute carrying a code that identifies the medication from a known list of
     * medications.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $medicationCodeableConcept
     * @return static
     */
    public function setMedicationCodeableConcept(FHIRCodeableConcept $medicationCodeableConcept = null)
    {
        $this->medicationCodeableConcept = $medicationCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is a link to a resource that
     * represents the medication which may be the details of the medication or simply
     * an attribute carrying a code that identifies the medication from a known list of
     * medications.
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is a link to a resource that
     * represents the medication which may be the details of the medication or simply
     * an attribute carrying a code that identifies the medication from a known list of
     * medications.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $medicationReference
     * @return static
     */
    public function setMedicationReference(FHIRReference $medicationReference = null)
    {
        $this->medicationReference = $medicationReference;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra information about the prescription that could not be conveyed by the other
     * attributes.
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra information about the prescription that could not be conveyed by the other
     * attributes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $note
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing the person to whom the medication will be
     * given.
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
     * A link to a resource representing the person to whom the medication will be
     * given.
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
     * The healthcare professional responsible for authorizing the prescription.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $prescriber
     * @return static
     */
    public function setPrescriber(FHIRReference $prescriber = null)
    {
        $this->prescriber = $prescriber;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing an earlier order or prescription that this
     * order supersedes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getPriorPrescription()
    {
        return $this->priorPrescription;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing an earlier order or prescription that this
     * order supersedes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $priorPrescription
     * @return static
     */
    public function setPriorPrescription(FHIRReference $priorPrescription = null)
    {
        $this->priorPrescription = $priorPrescription;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $reasonCodeableConcept
     * @return static
     */
    public function setReasonCodeableConcept(FHIRCodeableConcept $reasonCodeableConcept = null)
    {
        $this->reasonCodeableConcept = $reasonCodeableConcept;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason why the prescription was stopped, if it was.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonEnded()
    {
        return $this->reasonEnded;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason why the prescription was stopped, if it was.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $reasonEnded
     * @return static
     */
    public function setReasonEnded(FHIRCodeableConcept $reasonEnded = null)
    {
        $this->reasonEnded = $reasonEnded;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Can be the reason or the indication for writing the prescription.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * Can be the reason or the indication for writing the prescription.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $reasonReference
     * @return static
     */
    public function setReasonReference(FHIRReference $reasonReference = null)
    {
        $this->reasonReference = $reasonReference;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationOrderStatus
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationOrderStatus $status
     * @return static
     */
    public function setStatus(FHIRMedicationOrderStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
     * across inpatient and outpatient settings as well as for care plans, etc.
     *
     * Indicates whether or not substitution can or should be part of the dispense. In
     * some cases substitution must happen, in other cases substitution must not
     * happen, and in others it does not matter. This block explains the prescriber's
     * intent. If nothing is specified substitution may be done.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderSubstitution
     */
    public function getSubstitution()
    {
        return $this->substitution;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
     * across inpatient and outpatient settings as well as for care plans, etc.
     *
     * Indicates whether or not substitution can or should be part of the dispense. In
     * some cases substitution must happen, in other cases substitution must not
     * happen, and in others it does not matter. This block explains the prescriber's
     * intent. If nothing is specified substitution may be done.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderSubstitution $substitution
     * @return static
     */
    public function setSubstitution(FHIRMedicationOrderSubstitution $substitution = null)
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
        if (null !== ($v = $this->getDateEnded())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE_ENDED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDateWritten())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE_WRITTEN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDispenseRequest())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISPENSE_REQUEST] = $fieldErrs;
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
        if (null !== ($v = $this->getNote())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NOTE] = $fieldErrs;
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
        if (null !== ($v = $this->getPriorPrescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIOR_PRESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReasonCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REASON_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReasonEnded())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REASON_ENDED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReasonReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REASON_REFERENCE] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_DATE_ENDED])) {
            $v = $this->getDateEnded();
            foreach($validationRules[self::FIELD_DATE_ENDED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER, self::FIELD_DATE_ENDED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_ENDED])) {
                        $errs[self::FIELD_DATE_ENDED] = [];
                    }
                    $errs[self::FIELD_DATE_ENDED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE_WRITTEN])) {
            $v = $this->getDateWritten();
            foreach($validationRules[self::FIELD_DATE_WRITTEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER, self::FIELD_DATE_WRITTEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_WRITTEN])) {
                        $errs[self::FIELD_DATE_WRITTEN] = [];
                    }
                    $errs[self::FIELD_DATE_WRITTEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISPENSE_REQUEST])) {
            $v = $this->getDispenseRequest();
            foreach($validationRules[self::FIELD_DISPENSE_REQUEST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER, self::FIELD_DISPENSE_REQUEST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISPENSE_REQUEST])) {
                        $errs[self::FIELD_DISPENSE_REQUEST] = [];
                    }
                    $errs[self::FIELD_DISPENSE_REQUEST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSAGE_INSTRUCTION])) {
            $v = $this->getDosageInstruction();
            foreach($validationRules[self::FIELD_DOSAGE_INSTRUCTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER, self::FIELD_DOSAGE_INSTRUCTION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEDICATION_CODEABLE_CONCEPT])) {
            $v = $this->getMedicationCodeableConcept();
            foreach($validationRules[self::FIELD_MEDICATION_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER, self::FIELD_MEDICATION_CODEABLE_CONCEPT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER, self::FIELD_MEDICATION_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEDICATION_REFERENCE])) {
                        $errs[self::FIELD_MEDICATION_REFERENCE] = [];
                    }
                    $errs[self::FIELD_MEDICATION_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER, self::FIELD_PATIENT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER, self::FIELD_PRESCRIBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRESCRIBER])) {
                        $errs[self::FIELD_PRESCRIBER] = [];
                    }
                    $errs[self::FIELD_PRESCRIBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIOR_PRESCRIPTION])) {
            $v = $this->getPriorPrescription();
            foreach($validationRules[self::FIELD_PRIOR_PRESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER, self::FIELD_PRIOR_PRESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIOR_PRESCRIPTION])) {
                        $errs[self::FIELD_PRIOR_PRESCRIPTION] = [];
                    }
                    $errs[self::FIELD_PRIOR_PRESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_CODEABLE_CONCEPT])) {
            $v = $this->getReasonCodeableConcept();
            foreach($validationRules[self::FIELD_REASON_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER, self::FIELD_REASON_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_REASON_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_REASON_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_ENDED])) {
            $v = $this->getReasonEnded();
            foreach($validationRules[self::FIELD_REASON_ENDED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER, self::FIELD_REASON_ENDED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_ENDED])) {
                        $errs[self::FIELD_REASON_ENDED] = [];
                    }
                    $errs[self::FIELD_REASON_ENDED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_REFERENCE])) {
            $v = $this->getReasonReference();
            foreach($validationRules[self::FIELD_REASON_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER, self::FIELD_REASON_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_REFERENCE])) {
                        $errs[self::FIELD_REASON_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REASON_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER, self::FIELD_STATUS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER, self::FIELD_SUBSTITUTION, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationOrder $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationOrder
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
                throw new \DomainException(sprintf('FHIRMedicationOrder::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicationOrder::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicationOrder;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicationOrder)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicationOrder::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationOrder or null, %s seen.',
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
        if (isset($children->dateEnded)) {
            $type->setDateEnded(FHIRDateTime::xmlUnserialize($children->dateEnded));
        }
        if (isset($attributes->dateEnded)) {
            $pt = $type->getDateEnded();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dateEnded);
            } else {
                $type->setDateEnded((string)$attributes->dateEnded);
            }
        }
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
        if (isset($children->dispenseRequest)) {
            $type->setDispenseRequest(FHIRMedicationOrderDispenseRequest::xmlUnserialize($children->dispenseRequest));
        }
        if (isset($children->dosageInstruction)) {
            foreach($children->dosageInstruction as $child) {
                $type->addDosageInstruction(FHIRMedicationOrderDosageInstruction::xmlUnserialize($child));
            }
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
        if (isset($children->note)) {
            $type->setNote(FHIRString::xmlUnserialize($children->note));
        }
        if (isset($attributes->note)) {
            $pt = $type->getNote();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->note);
            } else {
                $type->setNote((string)$attributes->note);
            }
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->prescriber)) {
            $type->setPrescriber(FHIRReference::xmlUnserialize($children->prescriber));
        }
        if (isset($children->priorPrescription)) {
            $type->setPriorPrescription(FHIRReference::xmlUnserialize($children->priorPrescription));
        }
        if (isset($children->reasonCodeableConcept)) {
            $type->setReasonCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->reasonCodeableConcept));
        }
        if (isset($children->reasonEnded)) {
            $type->setReasonEnded(FHIRCodeableConcept::xmlUnserialize($children->reasonEnded));
        }
        if (isset($children->reasonReference)) {
            $type->setReasonReference(FHIRReference::xmlUnserialize($children->reasonReference));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRMedicationOrderStatus::xmlUnserialize($children->status));
        }
        if (isset($children->substitution)) {
            $type->setSubstitution(FHIRMedicationOrderSubstitution::xmlUnserialize($children->substitution));
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
        if (null !== ($v = $this->getDateEnded())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE_ENDED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDateWritten())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE_WRITTEN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDispenseRequest())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISPENSE_REQUEST, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getPrescriber())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRESCRIBER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPriorPrescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRIOR_PRESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReasonCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReasonEnded())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_ENDED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReasonReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_REFERENCE, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getDateEnded())) {
            $a[self::FIELD_DATE_ENDED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_DATE_ENDED_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDateWritten())) {
            $a[self::FIELD_DATE_WRITTEN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_DATE_WRITTEN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDispenseRequest())) {
            $a[self::FIELD_DISPENSE_REQUEST] = $v;
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
        if (null !== ($v = $this->getMedicationCodeableConcept())) {
            $a[self::FIELD_MEDICATION_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getMedicationReference())) {
            $a[self::FIELD_MEDICATION_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a[self::FIELD_NOTE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_NOTE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if (null !== ($v = $this->getPrescriber())) {
            $a[self::FIELD_PRESCRIBER] = $v;
        }
        if (null !== ($v = $this->getPriorPrescription())) {
            $a[self::FIELD_PRIOR_PRESCRIPTION] = $v;
        }
        if (null !== ($v = $this->getReasonCodeableConcept())) {
            $a[self::FIELD_REASON_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getReasonEnded())) {
            $a[self::FIELD_REASON_ENDED] = $v;
        }
        if (null !== ($v = $this->getReasonReference())) {
            $a[self::FIELD_REASON_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMedicationOrderStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMedicationOrderStatus::FIELD_VALUE]);
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