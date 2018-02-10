<?php namespace PHPFHIRGenerated\FHIRResource;

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
 * Describes the event of a patient being given a dose of a medication.  This may be as simple as swallowing a tablet or it may be a long running infusion.

Related resources tie this event to the authorizing prescription, and the specific encounter between patient and health care practitioner.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedicationAdministration extends FHIRResource implements \JsonSerializable
{
    /**
     * External identifier - FHIR will generate its own internal IDs (probably URLs) which do not need to be explicitly managed by the resource.  The identifier here is one that would be used by another non-FHIR system - for example an automated medication pump would provide a record each time it operated; an administration while the patient was off the ward might be made with a different system and entered after the event.  Particularly important if these records have to be updated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Will generally be set to show that the administration has been completed.  For some long running administrations such as infusions it is possible for an administration to be started but not completed or it may be paused while some other process is under way.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMedicationAdministrationStatus
     */
    public $status = null;

    /**
     * The person or animal to whom the medication was given.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $patient = null;

    /**
     * The individual who was responsible for giving the medication to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $practitioner = null;

    /**
     * The visit or admission the or other contact between patient and health care provider the medication administration was performed as part of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $encounter = null;

    /**
     * The original request, instruction or authority to perform the administration.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $prescription = null;

    /**
     * Set this to true if the record is saying that the medication was NOT administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $wasNotGiven = null;

    /**
     * A code indicating why the administration was not performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonNotGiven = array();

    /**
     * An interval of time during which the administration took place.  For many administrations, such as swallowing a tablet the lower and upper values of the interval will be the same.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $whenGiven = null;

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $medication = null;

    /**
     * The device used in administering the medication to the patient.  E.g. a particular infusion pump.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $device = array();

    /**
     * Provides details of how much of the medication was administered.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage[]
     */
    public $dosage = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicationAdministration';

    /**
     * External identifier - FHIR will generate its own internal IDs (probably URLs) which do not need to be explicitly managed by the resource.  The identifier here is one that would be used by another non-FHIR system - for example an automated medication pump would provide a record each time it operated; an administration while the patient was off the ward might be made with a different system and entered after the event.  Particularly important if these records have to be updated.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * External identifier - FHIR will generate its own internal IDs (probably URLs) which do not need to be explicitly managed by the resource.  The identifier here is one that would be used by another non-FHIR system - for example an automated medication pump would provide a record each time it operated; an administration while the patient was off the ward might be made with a different system and entered after the event.  Particularly important if these records have to be updated.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Will generally be set to show that the administration has been completed.  For some long running administrations such as infusions it is possible for an administration to be started but not completed or it may be paused while some other process is under way.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMedicationAdministrationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Will generally be set to show that the administration has been completed.  For some long running administrations such as infusions it is possible for an administration to be started but not completed or it may be paused while some other process is under way.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMedicationAdministrationStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The person or animal to whom the medication was given.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The person or animal to whom the medication was given.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The individual who was responsible for giving the medication to the patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getPractitioner()
    {
        return $this->practitioner;
    }

    /**
     * The individual who was responsible for giving the medication to the patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $practitioner
     * @return $this
     */
    public function setPractitioner($practitioner)
    {
        $this->practitioner = $practitioner;
        return $this;
    }

    /**
     * The visit or admission the or other contact between patient and health care provider the medication administration was performed as part of.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * The visit or admission the or other contact between patient and health care provider the medication administration was performed as part of.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $encounter
     * @return $this
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * The original request, instruction or authority to perform the administration.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getPrescription()
    {
        return $this->prescription;
    }

    /**
     * The original request, instruction or authority to perform the administration.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $prescription
     * @return $this
     */
    public function setPrescription($prescription)
    {
        $this->prescription = $prescription;
        return $this;
    }

    /**
     * Set this to true if the record is saying that the medication was NOT administered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getWasNotGiven()
    {
        return $this->wasNotGiven;
    }

    /**
     * Set this to true if the record is saying that the medication was NOT administered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $wasNotGiven
     * @return $this
     */
    public function setWasNotGiven($wasNotGiven)
    {
        $this->wasNotGiven = $wasNotGiven;
        return $this;
    }

    /**
     * A code indicating why the administration was not performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonNotGiven()
    {
        return $this->reasonNotGiven;
    }

    /**
     * A code indicating why the administration was not performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonNotGiven
     * @return $this
     */
    public function addReasonNotGiven($reasonNotGiven)
    {
        $this->reasonNotGiven[] = $reasonNotGiven;
        return $this;
    }

    /**
     * An interval of time during which the administration took place.  For many administrations, such as swallowing a tablet the lower and upper values of the interval will be the same.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getWhenGiven()
    {
        return $this->whenGiven;
    }

    /**
     * An interval of time during which the administration took place.  For many administrations, such as swallowing a tablet the lower and upper values of the interval will be the same.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $whenGiven
     * @return $this
     */
    public function setWhenGiven($whenGiven)
    {
        $this->whenGiven = $whenGiven;
        return $this;
    }

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getMedication()
    {
        return $this->medication;
    }

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $medication
     * @return $this
     */
    public function setMedication($medication)
    {
        $this->medication = $medication;
        return $this;
    }

    /**
     * The device used in administering the medication to the patient.  E.g. a particular infusion pump.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * The device used in administering the medication to the patient.  E.g. a particular infusion pump.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $device
     * @return $this
     */
    public function addDevice($device)
    {
        $this->device[] = $device;
        return $this;
    }

    /**
     * Provides details of how much of the medication was administered.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage[]
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * Provides details of how much of the medication was administered.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage $dosage
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
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->patient) $json['patient'] = $this->patient;
        if (null !== $this->practitioner) $json['practitioner'] = $this->practitioner;
        if (null !== $this->encounter) $json['encounter'] = $this->encounter;
        if (null !== $this->prescription) $json['prescription'] = $this->prescription;
        if (null !== $this->wasNotGiven) $json['wasNotGiven'] = $this->wasNotGiven;
        if (0 < count($this->reasonNotGiven)) {
            $json['reasonNotGiven'] = [];
            foreach($this->reasonNotGiven as $reasonNotGiven) {
                $json['reasonNotGiven'][] = $reasonNotGiven;
            }
        }
        if (null !== $this->whenGiven) $json['whenGiven'] = $this->whenGiven;
        if (null !== $this->medication) $json['medication'] = $this->medication;
        if (0 < count($this->device)) {
            $json['device'] = [];
            foreach($this->device as $device) {
                $json['device'][] = $device;
            }
        }
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicationAdministration xmlns="http://hl7.org/fhir"></MedicationAdministration>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (null !== $this->practitioner) $this->practitioner->xmlSerialize(true, $sxe->addChild('practitioner'));
        if (null !== $this->encounter) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
        if (null !== $this->prescription) $this->prescription->xmlSerialize(true, $sxe->addChild('prescription'));
        if (null !== $this->wasNotGiven) $this->wasNotGiven->xmlSerialize(true, $sxe->addChild('wasNotGiven'));
        if (0 < count($this->reasonNotGiven)) {
            foreach($this->reasonNotGiven as $reasonNotGiven) {
                $reasonNotGiven->xmlSerialize(true, $sxe->addChild('reasonNotGiven'));
            }
        }
        if (null !== $this->whenGiven) $this->whenGiven->xmlSerialize(true, $sxe->addChild('whenGiven'));
        if (null !== $this->medication) $this->medication->xmlSerialize(true, $sxe->addChild('medication'));
        if (0 < count($this->device)) {
            foreach($this->device as $device) {
                $device->xmlSerialize(true, $sxe->addChild('device'));
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