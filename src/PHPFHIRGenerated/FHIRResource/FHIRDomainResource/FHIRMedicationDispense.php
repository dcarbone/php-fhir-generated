<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispensePerformer;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRMedicationDispenseStatus;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Indicates that a medication product is to be or has been dispensed for a named person/patient.  This includes a description of the medication product (supply) provided and the instructions for administering the medication.  The medication dispense is the result of a pharmacy system responding to a medication order.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedicationDispense
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMedicationDispense extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MedicationDispense';

    /**
     * Indicates the medication order that is being dispensed against.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $authorizingPrescription = null;

    /**
     * Indicates the type of medication dispense (for example, where the medication is expected to be consumed or administered (i.e. inpatient or outpatient)).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * The encounter or episode of care that establishes the context for this event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * The amount of medication expressed as a timing amount.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $daysSupply = null;

    /**
     * Identification of the facility/location where the medication was shipped to, as part of the dispense event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $destination = null;

    /**
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. drug-drug interaction, duplicate therapy, dosage alert etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $detectedIssue = null;

    /**
     * Indicates how the medication is to be used by the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    public $dosageInstruction = null;

    /**
     * A summary of the events of interest that have occurred, such as when the dispense was verified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $eventHistory = null;

    /**
     * Identifier assigned by the dispensing facility - this is an identifier assigned outside FHIR.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The principal physical location where the dispense was performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $medicationCodeableConcept = null;

    /**
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $medicationReference = null;

    /**
     * Extra information about the dispense that could not be conveyed in the other attributes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * The procedure that trigger the dispense.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $partOf = null;

    /**
     * Indicates who or what performed the event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispensePerformer
     */
    public $performer = null;

    /**
     * The amount of medication that has been dispensed. Includes unit of measure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * Identifies the person who picked up the medication.  This will usually be a patient or their caregiver, but some cases exist where it can be a healthcare professional.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $receiver = null;

    /**
     * A code specifying the state of the set of dispense events.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMedicationDispenseStatus
     */
    public $status = null;

    /**
     * Indicates the reason why a dispense was not performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $statusReasonCodeableConcept = null;

    /**
     * Indicates the reason why a dispense was not performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $statusReasonReference = null;

    /**
     * A link to a resource representing the person or the group to whom the medication will be given.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Indicates whether or not substitution was made as part of the dispense.  In some cases substitution will be expected but does not happen, in other cases substitution is not expected but does happen.  This block explains what substitution did or did not happen and why.  If nothing is specified, substitution was not done.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution
     */
    public $substitution = null;

    /**
     * Additional information that supports the medication being dispensed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $supportingInformation = null;

    /**
     * Indicates the type of dispensing event that is performed. For example, Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The time the dispensed product was provided to the patient or their representative.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $whenHandedOver = null;

    /**
     * The time when the dispensed product was packaged and reviewed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $whenPrepared = null;

    /**
     * FHIRMedicationDispense Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['authorizingPrescription'])) {
                $this->setAuthorizingPrescription($data['authorizingPrescription']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['daysSupply'])) {
                $this->setDaysSupply($data['daysSupply']);
            }
            if (isset($data['destination'])) {
                $this->setDestination($data['destination']);
            }
            if (isset($data['detectedIssue'])) {
                $this->setDetectedIssue($data['detectedIssue']);
            }
            if (isset($data['dosageInstruction'])) {
                $this->setDosageInstruction($data['dosageInstruction']);
            }
            if (isset($data['eventHistory'])) {
                $this->setEventHistory($data['eventHistory']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['location'])) {
                $this->setLocation($data['location']);
            }
            if (isset($data['medicationCodeableConcept'])) {
                $this->setMedicationCodeableConcept($data['medicationCodeableConcept']);
            }
            if (isset($data['medicationReference'])) {
                $this->setMedicationReference($data['medicationReference']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['partOf'])) {
                $this->setPartOf($data['partOf']);
            }
            if (isset($data['performer'])) {
                $this->setPerformer($data['performer']);
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['receiver'])) {
                $this->setReceiver($data['receiver']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['statusReasonCodeableConcept'])) {
                $this->setStatusReasonCodeableConcept($data['statusReasonCodeableConcept']);
            }
            if (isset($data['statusReasonReference'])) {
                $this->setStatusReasonReference($data['statusReasonReference']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['substitution'])) {
                $this->setSubstitution($data['substitution']);
            }
            if (isset($data['supportingInformation'])) {
                $this->setSupportingInformation($data['supportingInformation']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['whenHandedOver'])) {
                $this->setWhenHandedOver($data['whenHandedOver']);
            }
            if (isset($data['whenPrepared'])) {
                $this->setWhenPrepared($data['whenPrepared']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicationDispense::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Indicates the medication order that is being dispensed against.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAuthorizingPrescription(FHIRReference $authorizingPrescription = null)
    {
        if (null === $authorizingPrescription) {
            return $this; 
        }
        $this->authorizingPrescription = $authorizingPrescription;
        return $this;
    }

    /**
     * Indicates the medication order that is being dispensed against.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthorizingPrescription()
    {
        return $this->authorizingPrescription;
    }


    /**
     * Indicates the type of medication dispense (for example, where the medication is expected to be consumed or administered (i.e. inpatient or outpatient)).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        if (null === $category) {
            return $this; 
        }
        $this->category = $category;
        return $this;
    }

    /**
     * Indicates the type of medication dispense (for example, where the medication is expected to be consumed or administered (i.e. inpatient or outpatient)).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * The encounter or episode of care that establishes the context for this event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setContext(FHIRReference $context = null)
    {
        if (null === $context) {
            return $this; 
        }
        $this->context = $context;
        return $this;
    }

    /**
     * The encounter or episode of care that establishes the context for this event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * The amount of medication expressed as a timing amount.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setDaysSupply(FHIRQuantity $daysSupply = null)
    {
        if (null === $daysSupply) {
            return $this; 
        }
        $this->daysSupply = $daysSupply;
        return $this;
    }

    /**
     * The amount of medication expressed as a timing amount.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDaysSupply()
    {
        return $this->daysSupply;
    }


    /**
     * Identification of the facility/location where the medication was shipped to, as part of the dispense event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDestination(FHIRReference $destination = null)
    {
        if (null === $destination) {
            return $this; 
        }
        $this->destination = $destination;
        return $this;
    }

    /**
     * Identification of the facility/location where the medication was shipped to, as part of the dispense event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDestination()
    {
        return $this->destination;
    }


    /**
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. drug-drug interaction, duplicate therapy, dosage alert etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDetectedIssue(FHIRReference $detectedIssue = null)
    {
        if (null === $detectedIssue) {
            return $this; 
        }
        $this->detectedIssue = $detectedIssue;
        return $this;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. drug-drug interaction, duplicate therapy, dosage alert etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDetectedIssue()
    {
        return $this->detectedIssue;
    }


    /**
     * Indicates how the medication is to be used by the patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     * @return $this
     */
    public function setDosageInstruction(FHIRDosage $dosageInstruction = null)
    {
        if (null === $dosageInstruction) {
            return $this; 
        }
        $this->dosageInstruction = $dosageInstruction;
        return $this;
    }

    /**
     * Indicates how the medication is to be used by the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    public function getDosageInstruction()
    {
        return $this->dosageInstruction;
    }


    /**
     * A summary of the events of interest that have occurred, such as when the dispense was verified.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEventHistory(FHIRReference $eventHistory = null)
    {
        if (null === $eventHistory) {
            return $this; 
        }
        $this->eventHistory = $eventHistory;
        return $this;
    }

    /**
     * A summary of the events of interest that have occurred, such as when the dispense was verified.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEventHistory()
    {
        return $this->eventHistory;
    }


    /**
     * Identifier assigned by the dispensing facility - this is an identifier assigned outside FHIR.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Identifier assigned by the dispensing facility - this is an identifier assigned outside FHIR.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The principal physical location where the dispense was performed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setLocation(FHIRReference $location = null)
    {
        if (null === $location) {
            return $this; 
        }
        $this->location = $location;
        return $this;
    }

    /**
     * The principal physical location where the dispense was performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }


    /**
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setMedicationCodeableConcept(FHIRCodeableConcept $medicationCodeableConcept = null)
    {
        if (null === $medicationCodeableConcept) {
            return $this; 
        }
        $this->medicationCodeableConcept = $medicationCodeableConcept;
        return $this;
    }

    /**
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMedicationCodeableConcept()
    {
        return $this->medicationCodeableConcept;
    }


    /**
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setMedicationReference(FHIRReference $medicationReference = null)
    {
        if (null === $medicationReference) {
            return $this; 
        }
        $this->medicationReference = $medicationReference;
        return $this;
    }

    /**
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getMedicationReference()
    {
        return $this->medicationReference;
    }


    /**
     * Extra information about the dispense that could not be conveyed in the other attributes.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note = $note;
        return $this;
    }

    /**
     * Extra information about the dispense that could not be conveyed in the other attributes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * The procedure that trigger the dispense.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPartOf(FHIRReference $partOf = null)
    {
        if (null === $partOf) {
            return $this; 
        }
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * The procedure that trigger the dispense.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }


    /**
     * Indicates who or what performed the event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispensePerformer
     * @return $this
     */
    public function setPerformer(FHIRMedicationDispensePerformer $performer = null)
    {
        if (null === $performer) {
            return $this; 
        }
        $this->performer = $performer;
        return $this;
    }

    /**
     * Indicates who or what performed the event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispensePerformer
     */
    public function getPerformer()
    {
        return $this->performer;
    }


    /**
     * The amount of medication that has been dispensed. Includes unit of measure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setQuantity(FHIRQuantity $quantity = null)
    {
        if (null === $quantity) {
            return $this; 
        }
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * The amount of medication that has been dispensed. Includes unit of measure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }


    /**
     * Identifies the person who picked up the medication.  This will usually be a patient or their caregiver, but some cases exist where it can be a healthcare professional.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReceiver(FHIRReference $receiver = null)
    {
        if (null === $receiver) {
            return $this; 
        }
        $this->receiver = $receiver;
        return $this;
    }

    /**
     * Identifies the person who picked up the medication.  This will usually be a patient or their caregiver, but some cases exist where it can be a healthcare professional.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReceiver()
    {
        return $this->receiver;
    }


    /**
     * A code specifying the state of the set of dispense events.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMedicationDispenseStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRMedicationDispenseStatus($status);
        }
        if (!($status instanceof FHIRMedicationDispenseStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationDispense::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMedicationDispenseStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A code specifying the state of the set of dispense events.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMedicationDispenseStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Indicates the reason why a dispense was not performed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setStatusReasonCodeableConcept(FHIRCodeableConcept $statusReasonCodeableConcept = null)
    {
        if (null === $statusReasonCodeableConcept) {
            return $this; 
        }
        $this->statusReasonCodeableConcept = $statusReasonCodeableConcept;
        return $this;
    }

    /**
     * Indicates the reason why a dispense was not performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReasonCodeableConcept()
    {
        return $this->statusReasonCodeableConcept;
    }


    /**
     * Indicates the reason why a dispense was not performed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setStatusReasonReference(FHIRReference $statusReasonReference = null)
    {
        if (null === $statusReasonReference) {
            return $this; 
        }
        $this->statusReasonReference = $statusReasonReference;
        return $this;
    }

    /**
     * Indicates the reason why a dispense was not performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getStatusReasonReference()
    {
        return $this->statusReasonReference;
    }


    /**
     * A link to a resource representing the person or the group to whom the medication will be given.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubject(FHIRReference $subject = null)
    {
        if (null === $subject) {
            return $this; 
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * A link to a resource representing the person or the group to whom the medication will be given.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * Indicates whether or not substitution was made as part of the dispense.  In some cases substitution will be expected but does not happen, in other cases substitution is not expected but does happen.  This block explains what substitution did or did not happen and why.  If nothing is specified, substitution was not done.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution
     * @return $this
     */
    public function setSubstitution(FHIRMedicationDispenseSubstitution $substitution = null)
    {
        if (null === $substitution) {
            return $this; 
        }
        $this->substitution = $substitution;
        return $this;
    }

    /**
     * Indicates whether or not substitution was made as part of the dispense.  In some cases substitution will be expected but does not happen, in other cases substitution is not expected but does happen.  This block explains what substitution did or did not happen and why.  If nothing is specified, substitution was not done.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution
     */
    public function getSubstitution()
    {
        return $this->substitution;
    }


    /**
     * Additional information that supports the medication being dispensed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSupportingInformation(FHIRReference $supportingInformation = null)
    {
        if (null === $supportingInformation) {
            return $this; 
        }
        $this->supportingInformation = $supportingInformation;
        return $this;
    }

    /**
     * Additional information that supports the medication being dispensed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
    }


    /**
     * Indicates the type of dispensing event that is performed. For example, Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Indicates the type of dispensing event that is performed. For example, Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * The time the dispensed product was provided to the patient or their representative.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setWhenHandedOver($whenHandedOver)
    {
        if (null === $whenHandedOver) {
            return $this; 
        }
        if (is_scalar($whenHandedOver)) {
            $whenHandedOver = new FHIRDateTime($whenHandedOver);
        }
        if (!($whenHandedOver instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationDispense::setWhenHandedOver - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($whenHandedOver)
            ));
        }
        $this->whenHandedOver = $whenHandedOver;
        return $this;
    }

    /**
     * The time the dispensed product was provided to the patient or their representative.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getWhenHandedOver()
    {
        return $this->whenHandedOver;
    }


    /**
     * The time when the dispensed product was packaged and reviewed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setWhenPrepared($whenPrepared)
    {
        if (null === $whenPrepared) {
            return $this; 
        }
        if (is_scalar($whenPrepared)) {
            $whenPrepared = new FHIRDateTime($whenPrepared);
        }
        if (!($whenPrepared instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationDispense::setWhenPrepared - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($whenPrepared)
            ));
        }
        $this->whenPrepared = $whenPrepared;
        return $this;
    }

    /**
     * The time when the dispensed product was packaged and reviewed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getWhenPrepared()
    {
        return $this->whenPrepared;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getAuthorizingPrescription())) {
            $a['authorizingPrescription'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getDaysSupply())) {
            $a['daysSupply'] = $v;
        }
        if (null !== ($v = $this->getDestination())) {
            $a['destination'] = $v;
        }
        if (null !== ($v = $this->getDetectedIssue())) {
            $a['detectedIssue'] = $v;
        }
        if (null !== ($v = $this->getDosageInstruction())) {
            $a['dosageInstruction'] = $v;
        }
        if (null !== ($v = $this->getEventHistory())) {
            $a['eventHistory'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getLocation())) {
            $a['location'] = $v;
        }
        if (null !== ($v = $this->getMedicationCodeableConcept())) {
            $a['medicationCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getMedicationReference())) {
            $a['medicationReference'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getPartOf())) {
            $a['partOf'] = $v;
        }
        if (null !== ($v = $this->getPerformer())) {
            $a['performer'] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a['quantity'] = $v;
        }
        if (null !== ($v = $this->getReceiver())) {
            $a['receiver'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getStatusReasonCodeableConcept())) {
            $a['statusReasonCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getStatusReasonReference())) {
            $a['statusReasonReference'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getSubstitution())) {
            $a['substitution'] = $v;
        }
        if (null !== ($v = $this->getSupportingInformation())) {
            $a['supportingInformation'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getWhenHandedOver())) {
            $a['whenHandedOver'] = $v;
        }
        if (null !== ($v = $this->getWhenPrepared())) {
            $a['whenPrepared'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<MedicationDispense xmlns="http://hl7.org/fhir"></MedicationDispense>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}