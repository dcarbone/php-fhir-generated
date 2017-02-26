<?php namespace PHPFHIRGenerated\FHIRDomainResource;

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
 * Describes the event of a patient consuming or otherwise being administered a medication.  This may be as simple as swallowing a tablet or it may be a long running infusion.  Related resources tie this event to the authorizing prescription, and the specific encounter between patient and health care practitioner.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedicationAdministration extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * External identifier - FHIR will generate its own internal identifiers (probably URLs) which do not need to be explicitly managed by the resource.  The identifier here is one that would be used by another non-FHIR system - for example an automated medication pump would provide a record each time it operated; an administration while the patient was off the ward might be made with a different system and entered after the event.  Particularly important if these records have to be updated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Will generally be set to show that the administration has been completed.  For some long running administrations such as infusions it is possible for an administration to be started but not completed or it may be paused while some other process is under way.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMedicationAdministrationStatus
     */
    public $status = null;

    /**
     * The person or animal receiving the medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The individual who was responsible for giving the medication to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $practitioner = null;

    /**
     * The visit, admission or other contact between patient and health care provider the medication administration was performed as part of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * The original request, instruction or authority to perform the administration.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
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
     * A code indicating why the medication was given.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonGiven = array();

    /**
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate. (choose any one of effectiveTime*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $effectiveTimeDateTime = null;

    /**
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate. (choose any one of effectiveTime*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $effectiveTimePeriod = null;

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $medicationCodeableConcept = null;

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $medicationReference = null;

    /**
     * The device used in administering the medication to the patient.  For example, a particular infusion pump.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $device = array();

    /**
     * Extra information about the medication administration that is not conveyed by the other attributes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $note = null;

    /**
     * Describes the medication dosage information details e.g. dose, rate, site, route, etc.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage
     */
    public $dosage = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicationAdministration';

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
     * The person or animal receiving the medication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The person or animal receiving the medication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The individual who was responsible for giving the medication to the patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPractitioner()
    {
        return $this->practitioner;
    }

    /**
     * The individual who was responsible for giving the medication to the patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $practitioner
     * @return $this
     */
    public function setPractitioner($practitioner)
    {
        $this->practitioner = $practitioner;
        return $this;
    }

    /**
     * The visit, admission or other contact between patient and health care provider the medication administration was performed as part of.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * The visit, admission or other contact between patient and health care provider the medication administration was performed as part of.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     * @return $this
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * The original request, instruction or authority to perform the administration.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPrescription()
    {
        return $this->prescription;
    }

    /**
     * The original request, instruction or authority to perform the administration.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $prescription
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
     * A code indicating why the medication was given.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonGiven()
    {
        return $this->reasonGiven;
    }

    /**
     * A code indicating why the medication was given.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonGiven
     * @return $this
     */
    public function addReasonGiven($reasonGiven)
    {
        $this->reasonGiven[] = $reasonGiven;
        return $this;
    }

    /**
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate. (choose any one of effectiveTime*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getEffectiveTimeDateTime()
    {
        return $this->effectiveTimeDateTime;
    }

    /**
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate. (choose any one of effectiveTime*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $effectiveTimeDateTime
     * @return $this
     */
    public function setEffectiveTimeDateTime($effectiveTimeDateTime)
    {
        $this->effectiveTimeDateTime = $effectiveTimeDateTime;
        return $this;
    }

    /**
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate. (choose any one of effectiveTime*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getEffectiveTimePeriod()
    {
        return $this->effectiveTimePeriod;
    }

    /**
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate. (choose any one of effectiveTime*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $effectiveTimePeriod
     * @return $this
     */
    public function setEffectiveTimePeriod($effectiveTimePeriod)
    {
        $this->effectiveTimePeriod = $effectiveTimePeriod;
        return $this;
    }

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMedicationCodeableConcept()
    {
        return $this->medicationCodeableConcept;
    }

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $medicationCodeableConcept
     * @return $this
     */
    public function setMedicationCodeableConcept($medicationCodeableConcept)
    {
        $this->medicationCodeableConcept = $medicationCodeableConcept;
        return $this;
    }

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getMedicationReference()
    {
        return $this->medicationReference;
    }

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $medicationReference
     * @return $this
     */
    public function setMedicationReference($medicationReference)
    {
        $this->medicationReference = $medicationReference;
        return $this;
    }

    /**
     * The device used in administering the medication to the patient.  For example, a particular infusion pump.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * The device used in administering the medication to the patient.  For example, a particular infusion pump.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $device
     * @return $this
     */
    public function addDevice($device)
    {
        $this->device[] = $device;
        return $this;
    }

    /**
     * Extra information about the medication administration that is not conveyed by the other attributes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Extra information about the medication administration that is not conveyed by the other attributes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $note
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Describes the medication dosage information details e.g. dose, rate, site, route, etc.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * Describes the medication dosage information details e.g. dose, rate, site, route, etc.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage $dosage
     * @return $this
     */
    public function setDosage($dosage)
    {
        $this->dosage = $dosage;
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
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->patient) $json['patient'] = json_encode($this->patient);
        if (null !== $this->practitioner) $json['practitioner'] = json_encode($this->practitioner);
        if (null !== $this->encounter) $json['encounter'] = json_encode($this->encounter);
        if (null !== $this->prescription) $json['prescription'] = json_encode($this->prescription);
        if (null !== $this->wasNotGiven) $json['wasNotGiven'] = json_encode($this->wasNotGiven);
        if (0 < count($this->reasonNotGiven)) {
            $json['reasonNotGiven'] = [];
            foreach($this->reasonNotGiven as $reasonNotGiven) {
                $json['reasonNotGiven'][] = json_encode($reasonNotGiven);
            }
        }
        if (0 < count($this->reasonGiven)) {
            $json['reasonGiven'] = [];
            foreach($this->reasonGiven as $reasonGiven) {
                $json['reasonGiven'][] = json_encode($reasonGiven);
            }
        }
        if (null !== $this->effectiveTimeDateTime) $json['effectiveTimeDateTime'] = json_encode($this->effectiveTimeDateTime);
        if (null !== $this->effectiveTimePeriod) $json['effectiveTimePeriod'] = json_encode($this->effectiveTimePeriod);
        if (null !== $this->medicationCodeableConcept) $json['medicationCodeableConcept'] = json_encode($this->medicationCodeableConcept);
        if (null !== $this->medicationReference) $json['medicationReference'] = json_encode($this->medicationReference);
        if (0 < count($this->device)) {
            $json['device'] = [];
            foreach($this->device as $device) {
                $json['device'][] = json_encode($device);
            }
        }
        if (null !== $this->note) $json['note'] = json_encode($this->note);
        if (null !== $this->dosage) $json['dosage'] = json_encode($this->dosage);
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
        if (0 < count($this->reasonGiven)) {
            foreach($this->reasonGiven as $reasonGiven) {
                $reasonGiven->xmlSerialize(true, $sxe->addChild('reasonGiven'));
            }
        }
        if (null !== $this->effectiveTimeDateTime) $this->effectiveTimeDateTime->xmlSerialize(true, $sxe->addChild('effectiveTimeDateTime'));
        if (null !== $this->effectiveTimePeriod) $this->effectiveTimePeriod->xmlSerialize(true, $sxe->addChild('effectiveTimePeriod'));
        if (null !== $this->medicationCodeableConcept) $this->medicationCodeableConcept->xmlSerialize(true, $sxe->addChild('medicationCodeableConcept'));
        if (null !== $this->medicationReference) $this->medicationReference->xmlSerialize(true, $sxe->addChild('medicationReference'));
        if (0 < count($this->device)) {
            foreach($this->device as $device) {
                $device->xmlSerialize(true, $sxe->addChild('device'));
            }
        }
        if (null !== $this->note) $this->note->xmlSerialize(true, $sxe->addChild('note'));
        if (null !== $this->dosage) $this->dosage->xmlSerialize(true, $sxe->addChild('dosage'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}