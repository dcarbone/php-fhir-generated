<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A record of a medication that is being consumed by a patient.   A MedicationStatement may indicate that the patient may be taking the medication now, or has taken the medication in the past or will be taking the medication in the future.  The source of this information can be the patient, significant other (such as a family member or spouse), or a clinician.  A common scenario where this information is captured is during the history taking process during a patient visit or stay.   The medication information may come from e.g. the patient's memory, from a prescription bottle,  or from a list of medications the patient, clinician or other party maintains 

The primary difference between a medication statement and a medication administration is that the medication administration has complete administration information and is based on actual administration information from the person who administered the medication.  A medication statement is often, if not always, less specific.  There is no required date/time when the medication was administered, in fact we only know that a source has reported the patient is taking this medication, where details such as time, quantity, or rate or even medication product may be incomplete or missing or less precise.  As stated earlier, the medication statement information may come from the patient's memory, from a prescription bottle or from a list of medications the patient, clinician or other party maintains.  Medication administration is more formal and is not missing detailed information.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedicationStatement extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * External identifier - FHIR will generate its own internal identifiers (probably URLs) which do not need to be explicitly managed by the resource.  The identifier here is one that would be used by another non-FHIR system - for example an automated medication pump would provide a record each time it operated; an administration while the patient was off the ward might be made with a different system and entered after the event.  Particularly important if these records have to be updated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The person or animal who is/was taking the medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The person who provided the information about the taking of this medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $informationSource = null;

    /**
     * The date when the medication statement was asserted by the information source.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $dateAsserted = null;

    /**
     * A code representing the patient or other source's judgment about the state of the medication used that this statement is about.  Generally this will be active or completed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMedicationStatementStatus
     */
    public $status = null;

    /**
     * Set this to true if the record is saying that the medication was NOT taken.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $wasNotTaken = null;

    /**
     * A code indicating why the medication was not taken.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonNotTaken = array();

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonForUseCodeableConcept = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonForUseReference = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $effectiveDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $effectivePeriod = null;

    /**
     * Provides extra information about the medication statement that is not conveyed by the other attributes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $note = null;

    /**
     * Allows linking the MedicationStatement to the underlying MedicationOrder, or to other information that supports the MedicationStatement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $supportingInformation = array();

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $medicationCodeableConcept = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $medicationReference = null;

    /**
     * Indicates how the medication is/was used by the patient.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicationStatement\FHIRMedicationStatementDosage[]
     */
    public $dosage = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicationStatement';

    /**
     * External identifier - FHIR will generate its own internal identifiers (probably URLs) which do not need to be explicitly managed by the resource.  The identifier here is one that would be used by another non-FHIR system - for example an automated medication pump would provide a record each time it operated; an administration while the patient was off the ward might be made with a different system and entered after the event.  Particularly important if these records have to be updated.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * External identifier - FHIR will generate its own internal identifiers (probably URLs) which do not need to be explicitly managed by the resource.  The identifier here is one that would be used by another non-FHIR system - for example an automated medication pump would provide a record each time it operated; an administration while the patient was off the ward might be made with a different system and entered after the event.  Particularly important if these records have to be updated.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The person or animal who is/was taking the medication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The person or animal who is/was taking the medication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The person who provided the information about the taking of this medication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInformationSource()
    {
        return $this->informationSource;
    }

    /**
     * The person who provided the information about the taking of this medication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $informationSource
     * @return $this
     */
    public function setInformationSource($informationSource)
    {
        $this->informationSource = $informationSource;
        return $this;
    }

    /**
     * The date when the medication statement was asserted by the information source.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDateAsserted()
    {
        return $this->dateAsserted;
    }

    /**
     * The date when the medication statement was asserted by the information source.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $dateAsserted
     * @return $this
     */
    public function setDateAsserted($dateAsserted)
    {
        $this->dateAsserted = $dateAsserted;
        return $this;
    }

    /**
     * A code representing the patient or other source's judgment about the state of the medication used that this statement is about.  Generally this will be active or completed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMedicationStatementStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code representing the patient or other source's judgment about the state of the medication used that this statement is about.  Generally this will be active or completed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMedicationStatementStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Set this to true if the record is saying that the medication was NOT taken.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getWasNotTaken()
    {
        return $this->wasNotTaken;
    }

    /**
     * Set this to true if the record is saying that the medication was NOT taken.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $wasNotTaken
     * @return $this
     */
    public function setWasNotTaken($wasNotTaken)
    {
        $this->wasNotTaken = $wasNotTaken;
        return $this;
    }

    /**
     * A code indicating why the medication was not taken.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonNotTaken()
    {
        return $this->reasonNotTaken;
    }

    /**
     * A code indicating why the medication was not taken.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonNotTaken
     * @return $this
     */
    public function addReasonNotTaken($reasonNotTaken)
    {
        $this->reasonNotTaken[] = $reasonNotTaken;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonForUseCodeableConcept()
    {
        return $this->reasonForUseCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonForUseCodeableConcept
     * @return $this
     */
    public function setReasonForUseCodeableConcept($reasonForUseCodeableConcept)
    {
        $this->reasonForUseCodeableConcept = $reasonForUseCodeableConcept;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonForUseReference()
    {
        return $this->reasonForUseReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $reasonForUseReference
     * @return $this
     */
    public function setReasonForUseReference($reasonForUseReference)
    {
        $this->reasonForUseReference = $reasonForUseReference;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getEffectiveDateTime()
    {
        return $this->effectiveDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $effectiveDateTime
     * @return $this
     */
    public function setEffectiveDateTime($effectiveDateTime)
    {
        $this->effectiveDateTime = $effectiveDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $effectivePeriod
     * @return $this
     */
    public function setEffectivePeriod($effectivePeriod)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Provides extra information about the medication statement that is not conveyed by the other attributes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Provides extra information about the medication statement that is not conveyed by the other attributes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $note
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Allows linking the MedicationStatement to the underlying MedicationOrder, or to other information that supports the MedicationStatement.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
    }

    /**
     * Allows linking the MedicationStatement to the underlying MedicationOrder, or to other information that supports the MedicationStatement.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $supportingInformation
     * @return $this
     */
    public function addSupportingInformation($supportingInformation)
    {
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMedicationCodeableConcept()
    {
        return $this->medicationCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $medicationCodeableConcept
     * @return $this
     */
    public function setMedicationCodeableConcept($medicationCodeableConcept)
    {
        $this->medicationCodeableConcept = $medicationCodeableConcept;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getMedicationReference()
    {
        return $this->medicationReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $medicationReference
     * @return $this
     */
    public function setMedicationReference($medicationReference)
    {
        $this->medicationReference = $medicationReference;
        return $this;
    }

    /**
     * Indicates how the medication is/was used by the patient.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicationStatement\FHIRMedicationStatementDosage[]
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * Indicates how the medication is/was used by the patient.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicationStatement\FHIRMedicationStatementDosage $dosage
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
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier;
            }
        }
        if (null !== $this->patient) $json['patient'] = $this->patient;
        if (null !== $this->informationSource) $json['informationSource'] = $this->informationSource;
        if (null !== $this->dateAsserted) $json['dateAsserted'] = $this->dateAsserted;
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->wasNotTaken) $json['wasNotTaken'] = $this->wasNotTaken;
        if (0 < count($this->reasonNotTaken)) {
            $json['reasonNotTaken'] = [];
            foreach($this->reasonNotTaken as $reasonNotTaken) {
                $json['reasonNotTaken'][] = $reasonNotTaken;
            }
        }
        if (null !== $this->reasonForUseCodeableConcept) $json['reasonForUseCodeableConcept'] = $this->reasonForUseCodeableConcept;
        if (null !== $this->reasonForUseReference) $json['reasonForUseReference'] = $this->reasonForUseReference;
        if (null !== $this->effectiveDateTime) $json['effectiveDateTime'] = $this->effectiveDateTime;
        if (null !== $this->effectivePeriod) $json['effectivePeriod'] = $this->effectivePeriod;
        if (null !== $this->note) $json['note'] = $this->note;
        if (0 < count($this->supportingInformation)) {
            $json['supportingInformation'] = [];
            foreach($this->supportingInformation as $supportingInformation) {
                $json['supportingInformation'][] = $supportingInformation;
            }
        }
        if (null !== $this->medicationCodeableConcept) $json['medicationCodeableConcept'] = $this->medicationCodeableConcept;
        if (null !== $this->medicationReference) $json['medicationReference'] = $this->medicationReference;
        if (0 < count($this->dosage)) {
            $json['dosage'] = [];
            foreach($this->dosage as $dosage) {
                $json['dosage'][] = $dosage;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicationStatement xmlns="http://hl7.org/fhir"></MedicationStatement>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (null !== $this->informationSource) $this->informationSource->xmlSerialize(true, $sxe->addChild('informationSource'));
        if (null !== $this->dateAsserted) $this->dateAsserted->xmlSerialize(true, $sxe->addChild('dateAsserted'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->wasNotTaken) $this->wasNotTaken->xmlSerialize(true, $sxe->addChild('wasNotTaken'));
        if (0 < count($this->reasonNotTaken)) {
            foreach($this->reasonNotTaken as $reasonNotTaken) {
                $reasonNotTaken->xmlSerialize(true, $sxe->addChild('reasonNotTaken'));
            }
        }
        if (null !== $this->reasonForUseCodeableConcept) $this->reasonForUseCodeableConcept->xmlSerialize(true, $sxe->addChild('reasonForUseCodeableConcept'));
        if (null !== $this->reasonForUseReference) $this->reasonForUseReference->xmlSerialize(true, $sxe->addChild('reasonForUseReference'));
        if (null !== $this->effectiveDateTime) $this->effectiveDateTime->xmlSerialize(true, $sxe->addChild('effectiveDateTime'));
        if (null !== $this->effectivePeriod) $this->effectivePeriod->xmlSerialize(true, $sxe->addChild('effectivePeriod'));
        if (null !== $this->note) $this->note->xmlSerialize(true, $sxe->addChild('note'));
        if (0 < count($this->supportingInformation)) {
            foreach($this->supportingInformation as $supportingInformation) {
                $supportingInformation->xmlSerialize(true, $sxe->addChild('supportingInformation'));
            }
        }
        if (null !== $this->medicationCodeableConcept) $this->medicationCodeableConcept->xmlSerialize(true, $sxe->addChild('medicationCodeableConcept'));
        if (null !== $this->medicationReference) $this->medicationReference->xmlSerialize(true, $sxe->addChild('medicationReference'));
        if (0 < count($this->dosage)) {
            foreach($this->dosage as $dosage) {
                $dosage->xmlSerialize(true, $sxe->addChild('dosage'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}