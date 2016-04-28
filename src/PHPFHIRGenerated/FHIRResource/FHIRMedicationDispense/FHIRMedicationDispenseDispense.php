<?php namespace PHPFHIRGenerated\FHIRResource\FHIRMedicationDispense;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\JsonSerializable;

/**
 * Dispensing a medication to a named patient.  This includes a description of the supply provided and the instructions for administering the medication.
 */
class FHIRMedicationDispenseDispense extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * Identifier assigned by the dispensing facility.   This is an identifier assigned outside FHIR.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * A code specifying the state of the dispense event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMedicationDispenseStatus
     */
    public $status = null;

    /**
     * Indicates the type of dispensing event that is performed. Examples include: Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The amount of medication that has been dispensed. Includes unit of measure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $medication = null;

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
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $destination = null;

    /**
     * Identifies the person who picked up the medication.  This will usually be a patient or their carer, but some cases exist where it can be a healthcare professional.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $receiver = array();

    /**
     * Indicates how the medication is to be used by the patient.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicationDispense\FHIRMedicationDispenseDosage[]
     */
    public $dosage = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicationDispense.Dispense';

    /**
     * Identifier assigned by the dispensing facility.   This is an identifier assigned outside FHIR.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifier assigned by the dispensing facility.   This is an identifier assigned outside FHIR.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A code specifying the state of the dispense event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMedicationDispenseStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code specifying the state of the dispense event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMedicationDispenseStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Indicates the type of dispensing event that is performed. Examples include: Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Indicates the type of dispensing event that is performed. Examples include: Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
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
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getMedication()
    {
        return $this->medication;
    }

    /**
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $medication
     * @return $this
     */
    public function setMedication($medication)
    {
        $this->medication = $medication;
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
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Identification of the facility/location where the medication was shipped to, as part of the dispense event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $destination
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Identifies the person who picked up the medication.  This will usually be a patient or their carer, but some cases exist where it can be a healthcare professional.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Identifies the person who picked up the medication.  This will usually be a patient or their carer, but some cases exist where it can be a healthcare professional.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[] $receiver
     * @return $this
     */
    public function addReceiver($receiver)
    {
        $this->receiver[] = $receiver;
        return $this;
    }

    /**
     * Indicates how the medication is to be used by the patient.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicationDispense\FHIRMedicationDispenseDosage[]
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * Indicates how the medication is to be used by the patient.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicationDispense\FHIRMedicationDispenseDosage[] $dosage
     * @return $this
     */
    public function addDosage($dosage)
    {
        $this->dosage[] = $dosage;
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
        if (null !== $this->identifier) $json['identifier'] = $this->identifier->jsonSerialize();
        if (null !== $this->status) $json['status'] = $this->status->jsonSerialize();
        if (null !== $this->type) $json['type'] = $this->type->jsonSerialize();
        if (null !== $this->quantity) $json['quantity'] = $this->quantity->jsonSerialize();
        if (null !== $this->medication) $json['medication'] = $this->medication->jsonSerialize();
        if (null !== $this->whenPrepared) $json['whenPrepared'] = $this->whenPrepared->jsonSerialize();
        if (null !== $this->whenHandedOver) $json['whenHandedOver'] = $this->whenHandedOver->jsonSerialize();
        if (null !== $this->destination) $json['destination'] = $this->destination->jsonSerialize();
        if (0 < count($this->receiver)) {
            $json['receiver'] = array();
            foreach($this->receiver as $receiver) {
                $json['receiver'][] = $receiver->jsonSerialize();
            }
        }
        if (0 < count($this->dosage)) {
            $json['dosage'] = array();
            foreach($this->dosage as $dosage) {
                $json['dosage'][] = $dosage->jsonSerialize();
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicationDispenseDispense xmlns="http://hl7.org/fhir"></MedicationDispenseDispense>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->quantity) $this->quantity->xmlSerialize(true, $sxe->addChild('quantity'));
        if (null !== $this->medication) $this->medication->xmlSerialize(true, $sxe->addChild('medication'));
        if (null !== $this->whenPrepared) $this->whenPrepared->xmlSerialize(true, $sxe->addChild('whenPrepared'));
        if (null !== $this->whenHandedOver) $this->whenHandedOver->xmlSerialize(true, $sxe->addChild('whenHandedOver'));
        if (null !== $this->destination) $this->destination->xmlSerialize(true, $sxe->addChild('destination'));
        if (0 < count($this->receiver)) {
            foreach($this->receiver as $receiver) {
                $receiver->xmlSerialize(true, $sxe->addChild('receiver'));
            }
        }
        if (0 < count($this->dosage)) {
            foreach($this->dosage as $dosage) {
                $dosage->xmlSerialize(true, $sxe->addChild('dosage'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}