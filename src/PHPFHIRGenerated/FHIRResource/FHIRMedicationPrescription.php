<?php namespace PHPFHIRGenerated\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
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

use PHPFHIRGenerated\FHIRResource\FHIRResource;

/**
 * An order for both supply of the medication and the instructions for administration of the medicine to a patient.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedicationPrescription extends FHIRResource implements \JsonSerializable
{
    /**
     * External identifier - one that would be used by another non-FHIR system - for example a re-imbursement system might issue its own id for each prescription that is created.  This is particularly important where FHIR only provides part of an erntire workflow process where records have to be tracked through an entire system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The date (and perhaps time) when the prescription was written.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $dateWritten = null;

    /**
     * A code specifying the state of the order.  Generally this will be active or completed state.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMedicationPrescriptionStatus
     */
    public $status = null;

    /**
     * A link to a resource representing the person to whom the medication will be given.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $patient = null;

    /**
     * The healthcare professional responsible for authorizing the prescription.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $prescriber = null;

    /**
     * A link to a resource that identifies the particular occurrence of contact between patient and health care provider.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $encounter = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCodeableConcept = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $reasonResource = null;

    /**
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $medication = null;

    /**
     * Indicates how the medication is to be used by the patient.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicationPrescription\FHIRMedicationPrescriptionDosageInstruction[]
     */
    public $dosageInstruction = array();

    /**
     * Deals with details of the dispense part of the order.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense
     */
    public $dispense = null;

    /**
     * Indicates whether or not substitution can or should be part of the dispense. In some cases substitution must happen, in other cases substitution must not happen, and in others it does not matter. This block explains the prescriber's intent. If nothing is specified substitution may be done.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicationPrescription\FHIRMedicationPrescriptionSubstitution
     */
    public $substitution = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicationPrescription';

    /**
     * External identifier - one that would be used by another non-FHIR system - for example a re-imbursement system might issue its own id for each prescription that is created.  This is particularly important where FHIR only provides part of an erntire workflow process where records have to be tracked through an entire system.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * External identifier - one that would be used by another non-FHIR system - for example a re-imbursement system might issue its own id for each prescription that is created.  This is particularly important where FHIR only provides part of an erntire workflow process where records have to be tracked through an entire system.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The date (and perhaps time) when the prescription was written.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDateWritten()
    {
        return $this->dateWritten;
    }

    /**
     * The date (and perhaps time) when the prescription was written.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $dateWritten
     * @return $this
     */
    public function setDateWritten($dateWritten)
    {
        $this->dateWritten = $dateWritten;
        return $this;
    }

    /**
     * A code specifying the state of the order.  Generally this will be active or completed state.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMedicationPrescriptionStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code specifying the state of the order.  Generally this will be active or completed state.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMedicationPrescriptionStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A link to a resource representing the person to whom the medication will be given.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A link to a resource representing the person to whom the medication will be given.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The healthcare professional responsible for authorizing the prescription.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getPrescriber()
    {
        return $this->prescriber;
    }

    /**
     * The healthcare professional responsible for authorizing the prescription.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $prescriber
     * @return $this
     */
    public function setPrescriber($prescriber)
    {
        $this->prescriber = $prescriber;
        return $this;
    }

    /**
     * A link to a resource that identifies the particular occurrence of contact between patient and health care provider.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * A link to a resource that identifies the particular occurrence of contact between patient and health care provider.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $encounter
     * @return $this
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCodeableConcept()
    {
        return $this->reasonCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonCodeableConcept
     * @return $this
     */
    public function setReasonCodeableConcept($reasonCodeableConcept)
    {
        $this->reasonCodeableConcept = $reasonCodeableConcept;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getReasonResource()
    {
        return $this->reasonResource;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $reasonResource
     * @return $this
     */
    public function setReasonResource($reasonResource)
    {
        $this->reasonResource = $reasonResource;
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
     * Indicates how the medication is to be used by the patient.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicationPrescription\FHIRMedicationPrescriptionDosageInstruction[]
     */
    public function getDosageInstruction()
    {
        return $this->dosageInstruction;
    }

    /**
     * Indicates how the medication is to be used by the patient.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicationPrescription\FHIRMedicationPrescriptionDosageInstruction $dosageInstruction
     * @return $this
     */
    public function addDosageInstruction($dosageInstruction)
    {
        $this->dosageInstruction[] = $dosageInstruction;
        return $this;
    }

    /**
     * Deals with details of the dispense part of the order.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense
     */
    public function getDispense()
    {
        return $this->dispense;
    }

    /**
     * Deals with details of the dispense part of the order.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense $dispense
     * @return $this
     */
    public function setDispense($dispense)
    {
        $this->dispense = $dispense;
        return $this;
    }

    /**
     * Indicates whether or not substitution can or should be part of the dispense. In some cases substitution must happen, in other cases substitution must not happen, and in others it does not matter. This block explains the prescriber's intent. If nothing is specified substitution may be done.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicationPrescription\FHIRMedicationPrescriptionSubstitution
     */
    public function getSubstitution()
    {
        return $this->substitution;
    }

    /**
     * Indicates whether or not substitution can or should be part of the dispense. In some cases substitution must happen, in other cases substitution must not happen, and in others it does not matter. This block explains the prescriber's intent. If nothing is specified substitution may be done.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicationPrescription\FHIRMedicationPrescriptionSubstitution $substitution
     * @return $this
     */
    public function setSubstitution($substitution)
    {
        $this->substitution = $substitution;
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
        if (null !== $this->dateWritten) $json['dateWritten'] = json_encode($this->dateWritten);
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->patient) $json['patient'] = json_encode($this->patient);
        if (null !== $this->prescriber) $json['prescriber'] = json_encode($this->prescriber);
        if (null !== $this->encounter) $json['encounter'] = json_encode($this->encounter);
        if (null !== $this->reasonCodeableConcept) $json['reasonCodeableConcept'] = json_encode($this->reasonCodeableConcept);
        if (null !== $this->reasonResource) $json['reasonResource'] = json_encode($this->reasonResource);
        if (null !== $this->medication) $json['medication'] = json_encode($this->medication);
        if (0 < count($this->dosageInstruction)) {
            $json['dosageInstruction'] = [];
            foreach($this->dosageInstruction as $dosageInstruction) {
                $json['dosageInstruction'][] = json_encode($dosageInstruction);
            }
        }
        if (null !== $this->dispense) $json['dispense'] = json_encode($this->dispense);
        if (null !== $this->substitution) $json['substitution'] = json_encode($this->substitution);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicationPrescription xmlns="http://hl7.org/fhir"></MedicationPrescription>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->dateWritten) $this->dateWritten->xmlSerialize(true, $sxe->addChild('dateWritten'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (null !== $this->prescriber) $this->prescriber->xmlSerialize(true, $sxe->addChild('prescriber'));
        if (null !== $this->encounter) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
        if (null !== $this->reasonCodeableConcept) $this->reasonCodeableConcept->xmlSerialize(true, $sxe->addChild('reasonCodeableConcept'));
        if (null !== $this->reasonResource) $this->reasonResource->xmlSerialize(true, $sxe->addChild('reasonResource'));
        if (null !== $this->medication) $this->medication->xmlSerialize(true, $sxe->addChild('medication'));
        if (0 < count($this->dosageInstruction)) {
            foreach($this->dosageInstruction as $dosageInstruction) {
                $dosageInstruction->xmlSerialize(true, $sxe->addChild('dosageInstruction'));
            }
        }
        if (null !== $this->dispense) $this->dispense->xmlSerialize(true, $sxe->addChild('dispense'));
        if (null !== $this->substitution) $this->substitution->xmlSerialize(true, $sxe->addChild('substitution'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}