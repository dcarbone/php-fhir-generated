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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosageInstruction;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationDispenseStatus;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * Indicates that a medication product is to be or has been dispensed for a named
 * person/patient. This includes a description of the medication product (supply)
 * provided and the instructions for administering the medication. The medication
 * dispense is the result of a pharmacy system responding to a medication order.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicationDispense
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRMedicationDispense extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE;
    const FIELD_AUTHORIZING_PRESCRIPTION = 'authorizingPrescription';
    const FIELD_DAYS_SUPPLY = 'daysSupply';
    const FIELD_DESTINATION = 'destination';
    const FIELD_DISPENSER = 'dispenser';
    const FIELD_DOSAGE_INSTRUCTION = 'dosageInstruction';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_MEDICATION_CODEABLE_CONCEPT = 'medicationCodeableConcept';
    const FIELD_MEDICATION_REFERENCE = 'medicationReference';
    const FIELD_NOTE = 'note';
    const FIELD_NOTE_EXT = '_note';
    const FIELD_PATIENT = 'patient';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_RECEIVER = 'receiver';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUBSTITUTION = 'substitution';
    const FIELD_TYPE = 'type';
    const FIELD_WHEN_HANDED_OVER = 'whenHandedOver';
    const FIELD_WHEN_HANDED_OVER_EXT = '_whenHandedOver';
    const FIELD_WHEN_PREPARED = 'whenPrepared';
    const FIELD_WHEN_PREPARED_EXT = '_whenPrepared';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the medication order that is being dispensed against.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    protected $authorizingPrescription = [];

    /**
     * The amount of medication expressed as a timing amount.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    protected $daysSupply = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the facility/location where the medication was shipped to, as
     * part of the dispense event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $destination = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual responsible for dispensing the medication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $dispenser = null;

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosageInstruction[]
     */
    protected $dosageInstruction = [];

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier assigned by the dispensing facility - this is an identifier assigned
     * outside FHIR.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    protected $identifier = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $medicationCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $medicationReference = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra information about the dispense that could not be conveyed in the other
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
     * The amount of medication that has been dispensed. Includes unit of measure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    protected $quantity = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the person who picked up the medication. This will usually be a
     * patient or their caregiver, but some cases exist where it can be a healthcare
     * professional.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    protected $receiver = [];

    /**
     * A code specifying the state of the dispense event.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the set of dispense events.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationDispenseStatus
     */
    protected $status = null;

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     *
     * Indicates whether or not substitution was made as part of the dispense. In some
     * cases substitution will be expected but does not happen, in other cases
     * substitution is not expected but does happen. This block explains what
     * substitution did or did not happen and why.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution
     */
    protected $substitution = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of dispensing event that is performed. For example, Trial
     * Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $type = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time the dispensed product was provided to the patient or their
     * representative.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $whenHandedOver = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when the dispensed product was packaged and reviewed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $whenPrepared = null;

    /**
     * Validation map for fields in type MedicationDispense
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRMedicationDispense Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationDispense::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AUTHORIZING_PRESCRIPTION])) {
            if (is_array($data[self::FIELD_AUTHORIZING_PRESCRIPTION])) {
                foreach($data[self::FIELD_AUTHORIZING_PRESCRIPTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addAuthorizingPrescription($v);
                    } else {
                        $this->addAuthorizingPrescription(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_AUTHORIZING_PRESCRIPTION] instanceof FHIRReference) {
                $this->addAuthorizingPrescription($data[self::FIELD_AUTHORIZING_PRESCRIPTION]);
            } else {
                $this->addAuthorizingPrescription(new FHIRReference($data[self::FIELD_AUTHORIZING_PRESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_DAYS_SUPPLY])) {
            if ($data[self::FIELD_DAYS_SUPPLY] instanceof FHIRSimpleQuantity) {
                $this->setDaysSupply($data[self::FIELD_DAYS_SUPPLY]);
            } else {
                $this->setDaysSupply(new FHIRSimpleQuantity($data[self::FIELD_DAYS_SUPPLY]));
            }
        }
        if (isset($data[self::FIELD_DESTINATION])) {
            if ($data[self::FIELD_DESTINATION] instanceof FHIRReference) {
                $this->setDestination($data[self::FIELD_DESTINATION]);
            } else {
                $this->setDestination(new FHIRReference($data[self::FIELD_DESTINATION]));
            }
        }
        if (isset($data[self::FIELD_DISPENSER])) {
            if ($data[self::FIELD_DISPENSER] instanceof FHIRReference) {
                $this->setDispenser($data[self::FIELD_DISPENSER]);
            } else {
                $this->setDispenser(new FHIRReference($data[self::FIELD_DISPENSER]));
            }
        }
        if (isset($data[self::FIELD_DOSAGE_INSTRUCTION])) {
            if (is_array($data[self::FIELD_DOSAGE_INSTRUCTION])) {
                foreach($data[self::FIELD_DOSAGE_INSTRUCTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationDispenseDosageInstruction) {
                        $this->addDosageInstruction($v);
                    } else {
                        $this->addDosageInstruction(new FHIRMedicationDispenseDosageInstruction($v));
                    }
                }
            } else if ($data[self::FIELD_DOSAGE_INSTRUCTION] instanceof FHIRMedicationDispenseDosageInstruction) {
                $this->addDosageInstruction($data[self::FIELD_DOSAGE_INSTRUCTION]);
            } else {
                $this->addDosageInstruction(new FHIRMedicationDispenseDosageInstruction($data[self::FIELD_DOSAGE_INSTRUCTION]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
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
        if (isset($data[self::FIELD_QUANTITY])) {
            if ($data[self::FIELD_QUANTITY] instanceof FHIRSimpleQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } else {
                $this->setQuantity(new FHIRSimpleQuantity($data[self::FIELD_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_RECEIVER])) {
            if (is_array($data[self::FIELD_RECEIVER])) {
                foreach($data[self::FIELD_RECEIVER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addReceiver($v);
                    } else {
                        $this->addReceiver(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_RECEIVER] instanceof FHIRReference) {
                $this->addReceiver($data[self::FIELD_RECEIVER]);
            } else {
                $this->addReceiver(new FHIRReference($data[self::FIELD_RECEIVER]));
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
                if ($value instanceof FHIRMedicationDispenseStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRMedicationDispenseStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRMedicationDispenseStatus([FHIRMedicationDispenseStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRMedicationDispenseStatus($ext));
            }
        }
        if (isset($data[self::FIELD_SUBSTITUTION])) {
            if ($data[self::FIELD_SUBSTITUTION] instanceof FHIRMedicationDispenseSubstitution) {
                $this->setSubstitution($data[self::FIELD_SUBSTITUTION]);
            } else {
                $this->setSubstitution(new FHIRMedicationDispenseSubstitution($data[self::FIELD_SUBSTITUTION]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_WHEN_HANDED_OVER]) || isset($data[self::FIELD_WHEN_HANDED_OVER_EXT])) {
            if (isset($data[self::FIELD_WHEN_HANDED_OVER])) {
                $value = $data[self::FIELD_WHEN_HANDED_OVER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_WHEN_HANDED_OVER_EXT]) && is_array($data[self::FIELD_WHEN_HANDED_OVER_EXT])) {
                $ext = $data[self::FIELD_WHEN_HANDED_OVER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setWhenHandedOver($value);
                } else if (is_array($value)) {
                    $this->setWhenHandedOver(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setWhenHandedOver(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setWhenHandedOver(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_WHEN_PREPARED]) || isset($data[self::FIELD_WHEN_PREPARED_EXT])) {
            if (isset($data[self::FIELD_WHEN_PREPARED])) {
                $value = $data[self::FIELD_WHEN_PREPARED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_WHEN_PREPARED_EXT]) && is_array($data[self::FIELD_WHEN_PREPARED_EXT])) {
                $ext = $data[self::FIELD_WHEN_PREPARED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setWhenPrepared($value);
                } else if (is_array($value)) {
                    $this->setWhenPrepared(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setWhenPrepared(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setWhenPrepared(new FHIRDateTime($ext));
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
        return "<MedicationDispense{$xmlns}></MedicationDispense>";
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
     * Indicates the medication order that is being dispensed against.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getAuthorizingPrescription()
    {
        return $this->authorizingPrescription;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the medication order that is being dispensed against.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $authorizingPrescription
     * @return static
     */
    public function addAuthorizingPrescription(FHIRReference $authorizingPrescription = null)
    {
        $this->authorizingPrescription[] = $authorizingPrescription;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the medication order that is being dispensed against.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[] $authorizingPrescription
     * @return static
     */
    public function setAuthorizingPrescription(array $authorizingPrescription = [])
    {
        $this->authorizingPrescription = [];
        if ([] === $authorizingPrescription) {
            return $this;
        }
        foreach($authorizingPrescription as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAuthorizingPrescription($v);
            } else {
                $this->addAuthorizingPrescription(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * The amount of medication expressed as a timing amount.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getDaysSupply()
    {
        return $this->daysSupply;
    }

    /**
     * The amount of medication expressed as a timing amount.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $daysSupply
     * @return static
     */
    public function setDaysSupply(FHIRSimpleQuantity $daysSupply = null)
    {
        $this->daysSupply = $daysSupply;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the facility/location where the medication was shipped to, as
     * part of the dispense event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the facility/location where the medication was shipped to, as
     * part of the dispense event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $destination
     * @return static
     */
    public function setDestination(FHIRReference $destination = null)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual responsible for dispensing the medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getDispenser()
    {
        return $this->dispenser;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual responsible for dispensing the medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $dispenser
     * @return static
     */
    public function setDispenser(FHIRReference $dispenser = null)
    {
        $this->dispenser = $dispenser;
        return $this;
    }

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosageInstruction[]
     */
    public function getDosageInstruction()
    {
        return $this->dosageInstruction;
    }

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosageInstruction $dosageInstruction
     * @return static
     */
    public function addDosageInstruction(FHIRMedicationDispenseDosageInstruction $dosageInstruction = null)
    {
        $this->dosageInstruction[] = $dosageInstruction;
        return $this;
    }

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosageInstruction[] $dosageInstruction
     * @return static
     */
    public function setDosageInstruction(array $dosageInstruction = [])
    {
        $this->dosageInstruction = [];
        if ([] === $dosageInstruction) {
            return $this;
        }
        foreach($dosageInstruction as $v) {
            if ($v instanceof FHIRMedicationDispenseDosageInstruction) {
                $this->addDosageInstruction($v);
            } else {
                $this->addDosageInstruction(new FHIRMedicationDispenseDosageInstruction($v));
            }
        }
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier assigned by the dispensing facility - this is an identifier assigned
     * outside FHIR.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
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
     * Identifier assigned by the dispensing facility - this is an identifier assigned
     * outside FHIR.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
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
     * Identifies the medication being administered. This is either a link to a
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
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
     * Extra information about the dispense that could not be conveyed in the other
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
     * Extra information about the dispense that could not be conveyed in the other
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
     * The amount of medication that has been dispensed. Includes unit of measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * The amount of medication that has been dispensed. Includes unit of measure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $quantity
     * @return static
     */
    public function setQuantity(FHIRSimpleQuantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the person who picked up the medication. This will usually be a
     * patient or their caregiver, but some cases exist where it can be a healthcare
     * professional.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the person who picked up the medication. This will usually be a
     * patient or their caregiver, but some cases exist where it can be a healthcare
     * professional.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $receiver
     * @return static
     */
    public function addReceiver(FHIRReference $receiver = null)
    {
        $this->receiver[] = $receiver;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the person who picked up the medication. This will usually be a
     * patient or their caregiver, but some cases exist where it can be a healthcare
     * professional.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[] $receiver
     * @return static
     */
    public function setReceiver(array $receiver = [])
    {
        $this->receiver = [];
        if ([] === $receiver) {
            return $this;
        }
        foreach($receiver as $v) {
            if ($v instanceof FHIRReference) {
                $this->addReceiver($v);
            } else {
                $this->addReceiver(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A code specifying the state of the dispense event.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the set of dispense events.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationDispenseStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code specifying the state of the dispense event.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the set of dispense events.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationDispenseStatus $status
     * @return static
     */
    public function setStatus(FHIRMedicationDispenseStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     *
     * Indicates whether or not substitution was made as part of the dispense. In some
     * cases substitution will be expected but does not happen, in other cases
     * substitution is not expected but does happen. This block explains what
     * substitution did or did not happen and why.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution
     */
    public function getSubstitution()
    {
        return $this->substitution;
    }

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     *
     * Indicates whether or not substitution was made as part of the dispense. In some
     * cases substitution will be expected but does not happen, in other cases
     * substitution is not expected but does happen. This block explains what
     * substitution did or did not happen and why.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution $substitution
     * @return static
     */
    public function setSubstitution(FHIRMedicationDispenseSubstitution $substitution = null)
    {
        $this->substitution = $substitution;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of dispensing event that is performed. For example, Trial
     * Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
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
     * Indicates the type of dispensing event that is performed. For example, Trial
     * Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
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
     * The time the dispensed product was provided to the patient or their
     * representative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getWhenHandedOver()
    {
        return $this->whenHandedOver;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time the dispensed product was provided to the patient or their
     * representative.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $whenHandedOver
     * @return static
     */
    public function setWhenHandedOver($whenHandedOver = null)
    {
        if (null === $whenHandedOver) {
            $this->whenHandedOver = null;
            return $this;
        }
        if ($whenHandedOver instanceof FHIRDateTime) {
            $this->whenHandedOver = $whenHandedOver;
            return $this;
        }
        $this->whenHandedOver = new FHIRDateTime($whenHandedOver);
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
     * The time when the dispensed product was packaged and reviewed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getWhenPrepared()
    {
        return $this->whenPrepared;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when the dispensed product was packaged and reviewed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $whenPrepared
     * @return static
     */
    public function setWhenPrepared($whenPrepared = null)
    {
        if (null === $whenPrepared) {
            $this->whenPrepared = null;
            return $this;
        }
        if ($whenPrepared instanceof FHIRDateTime) {
            $this->whenPrepared = $whenPrepared;
            return $this;
        }
        $this->whenPrepared = new FHIRDateTime($whenPrepared);
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
        if ([] !== ($vs = $this->getAuthorizingPrescription())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AUTHORIZING_PRESCRIPTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDaysSupply())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DAYS_SUPPLY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDestination())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESTINATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDispenser())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISPENSER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDosageInstruction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DOSAGE_INSTRUCTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
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
        if (null !== ($v = $this->getQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUANTITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReceiver())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RECEIVER, $i)] = $fieldErrs;
                }
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWhenHandedOver())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHEN_HANDED_OVER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWhenPrepared())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHEN_PREPARED] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_AUTHORIZING_PRESCRIPTION])) {
            $v = $this->getAuthorizingPrescription();
            foreach($validationRules[self::FIELD_AUTHORIZING_PRESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_AUTHORIZING_PRESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHORIZING_PRESCRIPTION])) {
                        $errs[self::FIELD_AUTHORIZING_PRESCRIPTION] = [];
                    }
                    $errs[self::FIELD_AUTHORIZING_PRESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DAYS_SUPPLY])) {
            $v = $this->getDaysSupply();
            foreach($validationRules[self::FIELD_DAYS_SUPPLY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_DAYS_SUPPLY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DAYS_SUPPLY])) {
                        $errs[self::FIELD_DAYS_SUPPLY] = [];
                    }
                    $errs[self::FIELD_DAYS_SUPPLY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESTINATION])) {
            $v = $this->getDestination();
            foreach($validationRules[self::FIELD_DESTINATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_DESTINATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESTINATION])) {
                        $errs[self::FIELD_DESTINATION] = [];
                    }
                    $errs[self::FIELD_DESTINATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISPENSER])) {
            $v = $this->getDispenser();
            foreach($validationRules[self::FIELD_DISPENSER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_DISPENSER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISPENSER])) {
                        $errs[self::FIELD_DISPENSER] = [];
                    }
                    $errs[self::FIELD_DISPENSER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSAGE_INSTRUCTION])) {
            $v = $this->getDosageInstruction();
            foreach($validationRules[self::FIELD_DOSAGE_INSTRUCTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_DOSAGE_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSAGE_INSTRUCTION])) {
                        $errs[self::FIELD_DOSAGE_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_DOSAGE_INSTRUCTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_MEDICATION_CODEABLE_CONCEPT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_MEDICATION_REFERENCE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_NOTE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUANTITY])) {
            $v = $this->getQuantity();
            foreach($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITY])) {
                        $errs[self::FIELD_QUANTITY] = [];
                    }
                    $errs[self::FIELD_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECEIVER])) {
            $v = $this->getReceiver();
            foreach($validationRules[self::FIELD_RECEIVER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_RECEIVER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECEIVER])) {
                        $errs[self::FIELD_RECEIVER] = [];
                    }
                    $errs[self::FIELD_RECEIVER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_STATUS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_SUBSTITUTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSTITUTION])) {
                        $errs[self::FIELD_SUBSTITUTION] = [];
                    }
                    $errs[self::FIELD_SUBSTITUTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHEN_HANDED_OVER])) {
            $v = $this->getWhenHandedOver();
            foreach($validationRules[self::FIELD_WHEN_HANDED_OVER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_WHEN_HANDED_OVER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHEN_HANDED_OVER])) {
                        $errs[self::FIELD_WHEN_HANDED_OVER] = [];
                    }
                    $errs[self::FIELD_WHEN_HANDED_OVER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHEN_PREPARED])) {
            $v = $this->getWhenPrepared();
            foreach($validationRules[self::FIELD_WHEN_PREPARED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_WHEN_PREPARED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHEN_PREPARED])) {
                        $errs[self::FIELD_WHEN_PREPARED] = [];
                    }
                    $errs[self::FIELD_WHEN_PREPARED][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationDispense $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
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
                throw new \DomainException(sprintf('FHIRMedicationDispense::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicationDispense::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicationDispense;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicationDispense)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicationDispense::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationDispense or null, %s seen.',
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
        if (isset($children->authorizingPrescription)) {
            foreach($children->authorizingPrescription as $child) {
                $type->addAuthorizingPrescription(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->daysSupply)) {
            $type->setDaysSupply(FHIRSimpleQuantity::xmlUnserialize($children->daysSupply));
        }
        if (isset($children->destination)) {
            $type->setDestination(FHIRReference::xmlUnserialize($children->destination));
        }
        if (isset($children->dispenser)) {
            $type->setDispenser(FHIRReference::xmlUnserialize($children->dispenser));
        }
        if (isset($children->dosageInstruction)) {
            foreach($children->dosageInstruction as $child) {
                $type->addDosageInstruction(FHIRMedicationDispenseDosageInstruction::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
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
        if (isset($children->quantity)) {
            $type->setQuantity(FHIRSimpleQuantity::xmlUnserialize($children->quantity));
        }
        if (isset($children->receiver)) {
            foreach($children->receiver as $child) {
                $type->addReceiver(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRMedicationDispenseStatus::xmlUnserialize($children->status));
        }
        if (isset($children->substitution)) {
            $type->setSubstitution(FHIRMedicationDispenseSubstitution::xmlUnserialize($children->substitution));
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        if (isset($children->whenHandedOver)) {
            $type->setWhenHandedOver(FHIRDateTime::xmlUnserialize($children->whenHandedOver));
        }
        if (isset($attributes->whenHandedOver)) {
            $pt = $type->getWhenHandedOver();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->whenHandedOver);
            } else {
                $type->setWhenHandedOver((string)$attributes->whenHandedOver);
            }
        }
        if (isset($children->whenPrepared)) {
            $type->setWhenPrepared(FHIRDateTime::xmlUnserialize($children->whenPrepared));
        }
        if (isset($attributes->whenPrepared)) {
            $pt = $type->getWhenPrepared();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->whenPrepared);
            } else {
                $type->setWhenPrepared((string)$attributes->whenPrepared);
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
        if ([] !== ($vs = $this->getAuthorizingPrescription())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHORIZING_PRESCRIPTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDaysSupply())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DAYS_SUPPLY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDestination())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESTINATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDispenser())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISPENSER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getDosageInstruction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DOSAGE_INSTRUCTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getReceiver())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RECEIVER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubstitution())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBSTITUTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWhenHandedOver())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHEN_HANDED_OVER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWhenPrepared())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHEN_PREPARED, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getAuthorizingPrescription())) {
            $a[self::FIELD_AUTHORIZING_PRESCRIPTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_AUTHORIZING_PRESCRIPTION][] = $v;
            }
        }
        if (null !== ($v = $this->getDaysSupply())) {
            $a[self::FIELD_DAYS_SUPPLY] = $v;
        }
        if (null !== ($v = $this->getDestination())) {
            $a[self::FIELD_DESTINATION] = $v;
        }
        if (null !== ($v = $this->getDispenser())) {
            $a[self::FIELD_DISPENSER] = $v;
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
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
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
        if (null !== ($v = $this->getQuantity())) {
            $a[self::FIELD_QUANTITY] = $v;
        }
        if ([] !== ($vs = $this->getReceiver())) {
            $a[self::FIELD_RECEIVER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_RECEIVER][] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMedicationDispenseStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMedicationDispenseStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubstitution())) {
            $a[self::FIELD_SUBSTITUTION] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getWhenHandedOver())) {
            $a[self::FIELD_WHEN_HANDED_OVER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_WHEN_HANDED_OVER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getWhenPrepared())) {
            $a[self::FIELD_WHEN_PREPARED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_WHEN_PREPARED_EXT] = $enc;
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