<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Indicates that a medication product is to be or has been dispensed for a named person/patient.  This includes a description of the medication product (supply) provided and the instructions for administering the medication.  The medication dispense is the result of a pharmacy system responding to a medication order.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedicationDispense extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifier assigned by the dispensing facility - this is an identifier assigned outside FHIR.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The procedure that the dispense is done because of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $partOf = array();

    /**
     * A code specifying the state of the set of dispense events.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMedicationDispenseStatus
     */
    public $status = null;

    /**
     * Indicates type of medication dispense and where the medication is expected to be consumed or administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $medicationCodeableConcept = null;

    /**
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $medicationReference = null;

    /**
     * A link to a resource representing the person or the group to whom the medication will be given.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The encounter or episode of care that establishes the context for this event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * Additional information that supports the medication being dispensed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $supportingInformation = array();

    /**
     * Indicates who or what performed the event.  It should be assumed that the performer is the dispenser of the medication.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicationDispense\FHIRMedicationDispensePerformer[]
     */
    public $performer = array();

    /**
     * Indicates the medication order that is being dispensed against.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $authorizingPrescription = array();

    /**
     * Indicates the type of dispensing event that is performed. For example, Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The amount of medication that has been dispensed. Includes unit of measure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * The amount of medication expressed as a timing amount.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $daysSupply = null;

    /**
     * The time when the dispensed product was packaged and reviewed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $whenPrepared = null;

    /**
     * The time the dispensed product was provided to the patient or their representative.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $whenHandedOver = null;

    /**
     * Identification of the facility/location where the medication was shipped to, as part of the dispense event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $destination = null;

    /**
     * Identifies the person who picked up the medication.  This will usually be a patient or their caregiver, but some cases exist where it can be a healthcare professional.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $receiver = array();

    /**
     * Extra information about the dispense that could not be conveyed in the other attributes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * Indicates how the medication is to be used by the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDosage[]
     */
    public $dosageInstruction = array();

    /**
     * Indicates whether or not substitution was made as part of the dispense.  In some cases substitution will be expected but does not happen, in other cases substitution is not expected but does happen.  This block explains what substitution did or did not happen and why.  If nothing is specified, substitution was not done.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution
     */
    public $substitution = null;

    /**
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, duplicate therapy, dosage alert etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $detectedIssue = array();

    /**
     * True if the dispense was not performed for some reason.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $notDone = null;

    /**
     * Indicates the reason why a dispense was not performed. (choose any one of notDoneReason*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $notDoneReasonCodeableConcept = null;

    /**
     * Indicates the reason why a dispense was not performed. (choose any one of notDoneReason*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $notDoneReasonReference = null;

    /**
     * A summary of the events of interest that have occurred, such as when the dispense was verified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $eventHistory = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicationDispense';

    /**
     * Identifier assigned by the dispensing facility - this is an identifier assigned outside FHIR.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifier assigned by the dispensing facility - this is an identifier assigned outside FHIR.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The procedure that the dispense is done because of.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * The procedure that the dispense is done because of.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $partOf
     * @return $this
     */
    public function addPartOf($partOf)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * A code specifying the state of the set of dispense events.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMedicationDispenseStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code specifying the state of the set of dispense events.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMedicationDispenseStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Indicates type of medication dispense and where the medication is expected to be consumed or administered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Indicates type of medication dispense and where the medication is expected to be consumed or administered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMedicationCodeableConcept()
    {
        return $this->medicationCodeableConcept;
    }

    /**
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $medicationCodeableConcept
     * @return $this
     */
    public function setMedicationCodeableConcept($medicationCodeableConcept)
    {
        $this->medicationCodeableConcept = $medicationCodeableConcept;
        return $this;
    }

    /**
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getMedicationReference()
    {
        return $this->medicationReference;
    }

    /**
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $medicationReference
     * @return $this
     */
    public function setMedicationReference($medicationReference)
    {
        $this->medicationReference = $medicationReference;
        return $this;
    }

    /**
     * A link to a resource representing the person or the group to whom the medication will be given.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A link to a resource representing the person or the group to whom the medication will be given.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The encounter or episode of care that establishes the context for this event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * The encounter or episode of care that establishes the context for this event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * Additional information that supports the medication being dispensed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
    }

    /**
     * Additional information that supports the medication being dispensed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $supportingInformation
     * @return $this
     */
    public function addSupportingInformation($supportingInformation)
    {
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * Indicates who or what performed the event.  It should be assumed that the performer is the dispenser of the medication.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicationDispense\FHIRMedicationDispensePerformer[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Indicates who or what performed the event.  It should be assumed that the performer is the dispenser of the medication.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicationDispense\FHIRMedicationDispensePerformer $performer
     * @return $this
     */
    public function addPerformer($performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * Indicates the medication order that is being dispensed against.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAuthorizingPrescription()
    {
        return $this->authorizingPrescription;
    }

    /**
     * Indicates the medication order that is being dispensed against.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $authorizingPrescription
     * @return $this
     */
    public function addAuthorizingPrescription($authorizingPrescription)
    {
        $this->authorizingPrescription[] = $authorizingPrescription;
        return $this;
    }

    /**
     * Indicates the type of dispensing event that is performed. For example, Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Indicates the type of dispensing event that is performed. For example, Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * The amount of medication that has been dispensed. Includes unit of measure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * The amount of medication that has been dispensed. Includes unit of measure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * The amount of medication expressed as a timing amount.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDaysSupply()
    {
        return $this->daysSupply;
    }

    /**
     * The amount of medication expressed as a timing amount.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $daysSupply
     * @return $this
     */
    public function setDaysSupply($daysSupply)
    {
        $this->daysSupply = $daysSupply;
        return $this;
    }

    /**
     * The time when the dispensed product was packaged and reviewed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getWhenPrepared()
    {
        return $this->whenPrepared;
    }

    /**
     * The time when the dispensed product was packaged and reviewed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $whenPrepared
     * @return $this
     */
    public function setWhenPrepared($whenPrepared)
    {
        $this->whenPrepared = $whenPrepared;
        return $this;
    }

    /**
     * The time the dispensed product was provided to the patient or their representative.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getWhenHandedOver()
    {
        return $this->whenHandedOver;
    }

    /**
     * The time the dispensed product was provided to the patient or their representative.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $whenHandedOver
     * @return $this
     */
    public function setWhenHandedOver($whenHandedOver)
    {
        $this->whenHandedOver = $whenHandedOver;
        return $this;
    }

    /**
     * Identification of the facility/location where the medication was shipped to, as part of the dispense event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Identification of the facility/location where the medication was shipped to, as part of the dispense event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $destination
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Identifies the person who picked up the medication.  This will usually be a patient or their caregiver, but some cases exist where it can be a healthcare professional.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Identifies the person who picked up the medication.  This will usually be a patient or their caregiver, but some cases exist where it can be a healthcare professional.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $receiver
     * @return $this
     */
    public function addReceiver($receiver)
    {
        $this->receiver[] = $receiver;
        return $this;
    }

    /**
     * Extra information about the dispense that could not be conveyed in the other attributes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Extra information about the dispense that could not be conveyed in the other attributes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Indicates how the medication is to be used by the patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDosage[]
     */
    public function getDosageInstruction()
    {
        return $this->dosageInstruction;
    }

    /**
     * Indicates how the medication is to be used by the patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDosage $dosageInstruction
     * @return $this
     */
    public function addDosageInstruction($dosageInstruction)
    {
        $this->dosageInstruction[] = $dosageInstruction;
        return $this;
    }

    /**
     * Indicates whether or not substitution was made as part of the dispense.  In some cases substitution will be expected but does not happen, in other cases substitution is not expected but does happen.  This block explains what substitution did or did not happen and why.  If nothing is specified, substitution was not done.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution
     */
    public function getSubstitution()
    {
        return $this->substitution;
    }

    /**
     * Indicates whether or not substitution was made as part of the dispense.  In some cases substitution will be expected but does not happen, in other cases substitution is not expected but does happen.  This block explains what substitution did or did not happen and why.  If nothing is specified, substitution was not done.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution $substitution
     * @return $this
     */
    public function setSubstitution($substitution)
    {
        $this->substitution = $substitution;
        return $this;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, duplicate therapy, dosage alert etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getDetectedIssue()
    {
        return $this->detectedIssue;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, duplicate therapy, dosage alert etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $detectedIssue
     * @return $this
     */
    public function addDetectedIssue($detectedIssue)
    {
        $this->detectedIssue[] = $detectedIssue;
        return $this;
    }

    /**
     * True if the dispense was not performed for some reason.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getNotDone()
    {
        return $this->notDone;
    }

    /**
     * True if the dispense was not performed for some reason.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $notDone
     * @return $this
     */
    public function setNotDone($notDone)
    {
        $this->notDone = $notDone;
        return $this;
    }

    /**
     * Indicates the reason why a dispense was not performed. (choose any one of notDoneReason*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getNotDoneReasonCodeableConcept()
    {
        return $this->notDoneReasonCodeableConcept;
    }

    /**
     * Indicates the reason why a dispense was not performed. (choose any one of notDoneReason*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $notDoneReasonCodeableConcept
     * @return $this
     */
    public function setNotDoneReasonCodeableConcept($notDoneReasonCodeableConcept)
    {
        $this->notDoneReasonCodeableConcept = $notDoneReasonCodeableConcept;
        return $this;
    }

    /**
     * Indicates the reason why a dispense was not performed. (choose any one of notDoneReason*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getNotDoneReasonReference()
    {
        return $this->notDoneReasonReference;
    }

    /**
     * Indicates the reason why a dispense was not performed. (choose any one of notDoneReason*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $notDoneReasonReference
     * @return $this
     */
    public function setNotDoneReasonReference($notDoneReasonReference)
    {
        $this->notDoneReasonReference = $notDoneReasonReference;
        return $this;
    }

    /**
     * A summary of the events of interest that have occurred, such as when the dispense was verified.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getEventHistory()
    {
        return $this->eventHistory;
    }

    /**
     * A summary of the events of interest that have occurred, such as when the dispense was verified.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $eventHistory
     * @return $this
     */
    public function addEventHistory($eventHistory)
    {
        $this->eventHistory[] = $eventHistory;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = json_encode($identifier);
            }
        }
        if (0 < count($this->partOf)) {
            $json['partOf'] = [];
            foreach($this->partOf as $partOf) {
                $json['partOf'][] = json_encode($partOf);
            }
        }
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->category) $json['category'] = json_encode($this->category);
        if (null !== $this->medicationCodeableConcept) $json['medicationCodeableConcept'] = json_encode($this->medicationCodeableConcept);
        if (null !== $this->medicationReference) $json['medicationReference'] = json_encode($this->medicationReference);
        if (null !== $this->subject) $json['subject'] = json_encode($this->subject);
        if (null !== $this->context) $json['context'] = json_encode($this->context);
        if (0 < count($this->supportingInformation)) {
            $json['supportingInformation'] = [];
            foreach($this->supportingInformation as $supportingInformation) {
                $json['supportingInformation'][] = json_encode($supportingInformation);
            }
        }
        if (0 < count($this->performer)) {
            $json['performer'] = [];
            foreach($this->performer as $performer) {
                $json['performer'][] = json_encode($performer);
            }
        }
        if (0 < count($this->authorizingPrescription)) {
            $json['authorizingPrescription'] = [];
            foreach($this->authorizingPrescription as $authorizingPrescription) {
                $json['authorizingPrescription'][] = json_encode($authorizingPrescription);
            }
        }
        if (null !== $this->type) $json['type'] = json_encode($this->type);
        if (null !== $this->quantity) $json['quantity'] = json_encode($this->quantity);
        if (null !== $this->daysSupply) $json['daysSupply'] = json_encode($this->daysSupply);
        if (null !== $this->whenPrepared) $json['whenPrepared'] = json_encode($this->whenPrepared);
        if (null !== $this->whenHandedOver) $json['whenHandedOver'] = json_encode($this->whenHandedOver);
        if (null !== $this->destination) $json['destination'] = json_encode($this->destination);
        if (0 < count($this->receiver)) {
            $json['receiver'] = [];
            foreach($this->receiver as $receiver) {
                $json['receiver'][] = json_encode($receiver);
            }
        }
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                $json['note'][] = json_encode($note);
            }
        }
        if (0 < count($this->dosageInstruction)) {
            $json['dosageInstruction'] = [];
            foreach($this->dosageInstruction as $dosageInstruction) {
                $json['dosageInstruction'][] = json_encode($dosageInstruction);
            }
        }
        if (null !== $this->substitution) $json['substitution'] = json_encode($this->substitution);
        if (0 < count($this->detectedIssue)) {
            $json['detectedIssue'] = [];
            foreach($this->detectedIssue as $detectedIssue) {
                $json['detectedIssue'][] = json_encode($detectedIssue);
            }
        }
        if (null !== $this->notDone) $json['notDone'] = json_encode($this->notDone);
        if (null !== $this->notDoneReasonCodeableConcept) $json['notDoneReasonCodeableConcept'] = json_encode($this->notDoneReasonCodeableConcept);
        if (null !== $this->notDoneReasonReference) $json['notDoneReasonReference'] = json_encode($this->notDoneReasonReference);
        if (0 < count($this->eventHistory)) {
            $json['eventHistory'] = [];
            foreach($this->eventHistory as $eventHistory) {
                $json['eventHistory'][] = json_encode($eventHistory);
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicationDispense xmlns="http://hl7.org/fhir"></MedicationDispense>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->partOf)) {
            foreach($this->partOf as $partOf) {
                $partOf->xmlSerialize(true, $sxe->addChild('partOf'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->category) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (null !== $this->medicationCodeableConcept) $this->medicationCodeableConcept->xmlSerialize(true, $sxe->addChild('medicationCodeableConcept'));
        if (null !== $this->medicationReference) $this->medicationReference->xmlSerialize(true, $sxe->addChild('medicationReference'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->context) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (0 < count($this->supportingInformation)) {
            foreach($this->supportingInformation as $supportingInformation) {
                $supportingInformation->xmlSerialize(true, $sxe->addChild('supportingInformation'));
            }
        }
        if (0 < count($this->performer)) {
            foreach($this->performer as $performer) {
                $performer->xmlSerialize(true, $sxe->addChild('performer'));
            }
        }
        if (0 < count($this->authorizingPrescription)) {
            foreach($this->authorizingPrescription as $authorizingPrescription) {
                $authorizingPrescription->xmlSerialize(true, $sxe->addChild('authorizingPrescription'));
            }
        }
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->quantity) $this->quantity->xmlSerialize(true, $sxe->addChild('quantity'));
        if (null !== $this->daysSupply) $this->daysSupply->xmlSerialize(true, $sxe->addChild('daysSupply'));
        if (null !== $this->whenPrepared) $this->whenPrepared->xmlSerialize(true, $sxe->addChild('whenPrepared'));
        if (null !== $this->whenHandedOver) $this->whenHandedOver->xmlSerialize(true, $sxe->addChild('whenHandedOver'));
        if (null !== $this->destination) $this->destination->xmlSerialize(true, $sxe->addChild('destination'));
        if (0 < count($this->receiver)) {
            foreach($this->receiver as $receiver) {
                $receiver->xmlSerialize(true, $sxe->addChild('receiver'));
            }
        }
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (0 < count($this->dosageInstruction)) {
            foreach($this->dosageInstruction as $dosageInstruction) {
                $dosageInstruction->xmlSerialize(true, $sxe->addChild('dosageInstruction'));
            }
        }
        if (null !== $this->substitution) $this->substitution->xmlSerialize(true, $sxe->addChild('substitution'));
        if (0 < count($this->detectedIssue)) {
            foreach($this->detectedIssue as $detectedIssue) {
                $detectedIssue->xmlSerialize(true, $sxe->addChild('detectedIssue'));
            }
        }
        if (null !== $this->notDone) $this->notDone->xmlSerialize(true, $sxe->addChild('notDone'));
        if (null !== $this->notDoneReasonCodeableConcept) $this->notDoneReasonCodeableConcept->xmlSerialize(true, $sxe->addChild('notDoneReasonCodeableConcept'));
        if (null !== $this->notDoneReasonReference) $this->notDoneReasonReference->xmlSerialize(true, $sxe->addChild('notDoneReasonReference'));
        if (0 < count($this->eventHistory)) {
            foreach($this->eventHistory as $eventHistory) {
                $eventHistory->xmlSerialize(true, $sxe->addChild('eventHistory'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}