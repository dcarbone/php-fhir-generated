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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Describes the event of a patient being administered a vaccine or a record of an immunization as reported by a patient, a clinician or another party.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRImmunization extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A unique identifier assigned to this immunization record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * Indicates the current status of the immunization event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRImmunizationStatusCodes
     */
    public $status = null;

    /**
     * Vaccine that was administered or was to be administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $vaccineCode = null;

    /**
     * The patient who either received or did not receive the immunization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The visit or admission or other contact between patient and health care provider the immunization was performed as part of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * Date vaccine administered or was to be administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * An indication that the content of the record is based on information from the person who administered the vaccine. This reflects the context under which the data was originally recorded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $primarySource = null;

    /**
     * The source of the data when the report of the immunization event is not based on information from the person who administered the vaccine.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reportOrigin = null;

    /**
     * The service delivery location where the vaccine administration occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * Name of vaccine manufacturer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $manufacturer = null;

    /**
     * Lot number of the  vaccine product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $lotNumber = null;

    /**
     * Date vaccine batch expires.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $expirationDate = null;

    /**
     * Body site where vaccine was administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $site = null;

    /**
     * The path by which the vaccine product is taken into the body.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $route = null;

    /**
     * The quantity of vaccine product that was administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $doseQuantity = null;

    /**
     * Indicates who performed the immunization event.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImmunization\FHIRImmunizationPractitioner[]
     */
    public $practitioner = [];

    /**
     * Extra information about the immunization that is not conveyed by the other attributes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $note = [];

    /**
     * Reasons why a vaccine was or was not administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $reason = [];

    /**
     * Educational material presented to the patient (or guardian) at the time of vaccine administration.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImmunization\FHIRImmunizationEducation[]
     */
    public $education = [];

    /**
     * Indicates a patient's eligibility for a funding program.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $programEligibility = [];

    /**
     * Indicates the source of the vaccine actually administered. This may be different than the patient eligbility (e.g. the patient may be eligibile for a publically purchased vaccine but due to inventory issues, vaccine purchased with private funds was actually administered).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $fundingSource = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Immunization';

    /**
     * A unique identifier assigned to this immunization record.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * A unique identifier assigned to this immunization record.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Indicates the current status of the immunization event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRImmunizationStatusCodes
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Indicates the current status of the immunization event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRImmunizationStatusCodes $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Vaccine that was administered or was to be administered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getVaccineCode() {
        return $this->vaccineCode;
    }

    /**
     * Vaccine that was administered or was to be administered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $vaccineCode
     * @return $this
     */
    public function setVaccineCode($vaccineCode) {
        $this->vaccineCode = $vaccineCode;
        return $this;
    }

    /**
     * The patient who either received or did not receive the immunization.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient() {
        return $this->patient;
    }

    /**
     * The patient who either received or did not receive the immunization.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient) {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The visit or admission or other contact between patient and health care provider the immunization was performed as part of.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter() {
        return $this->encounter;
    }

    /**
     * The visit or admission or other contact between patient and health care provider the immunization was performed as part of.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     * @return $this
     */
    public function setEncounter($encounter) {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Date vaccine administered or was to be administered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Date vaccine administered or was to be administered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    /**
     * An indication that the content of the record is based on information from the person who administered the vaccine. This reflects the context under which the data was originally recorded.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getPrimarySource() {
        return $this->primarySource;
    }

    /**
     * An indication that the content of the record is based on information from the person who administered the vaccine. This reflects the context under which the data was originally recorded.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $primarySource
     * @return $this
     */
    public function setPrimarySource($primarySource) {
        $this->primarySource = $primarySource;
        return $this;
    }

    /**
     * The source of the data when the report of the immunization event is not based on information from the person who administered the vaccine.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReportOrigin() {
        return $this->reportOrigin;
    }

    /**
     * The source of the data when the report of the immunization event is not based on information from the person who administered the vaccine.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reportOrigin
     * @return $this
     */
    public function setReportOrigin($reportOrigin) {
        $this->reportOrigin = $reportOrigin;
        return $this;
    }

    /**
     * The service delivery location where the vaccine administration occurred.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * The service delivery location where the vaccine administration occurred.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $location
     * @return $this
     */
    public function setLocation($location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Name of vaccine manufacturer.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManufacturer() {
        return $this->manufacturer;
    }

    /**
     * Name of vaccine manufacturer.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $manufacturer
     * @return $this
     */
    public function setManufacturer($manufacturer) {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Lot number of the  vaccine product.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLotNumber() {
        return $this->lotNumber;
    }

    /**
     * Lot number of the  vaccine product.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $lotNumber
     * @return $this
     */
    public function setLotNumber($lotNumber) {
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * Date vaccine batch expires.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getExpirationDate() {
        return $this->expirationDate;
    }

    /**
     * Date vaccine batch expires.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate) {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Body site where vaccine was administered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSite() {
        return $this->site;
    }

    /**
     * Body site where vaccine was administered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $site
     * @return $this
     */
    public function setSite($site) {
        $this->site = $site;
        return $this;
    }

    /**
     * The path by which the vaccine product is taken into the body.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRoute() {
        return $this->route;
    }

    /**
     * The path by which the vaccine product is taken into the body.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $route
     * @return $this
     */
    public function setRoute($route) {
        $this->route = $route;
        return $this;
    }

    /**
     * The quantity of vaccine product that was administered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDoseQuantity() {
        return $this->doseQuantity;
    }

    /**
     * The quantity of vaccine product that was administered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $doseQuantity
     * @return $this
     */
    public function setDoseQuantity($doseQuantity) {
        $this->doseQuantity = $doseQuantity;
        return $this;
    }

    /**
     * Indicates who performed the immunization event.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImmunization\FHIRImmunizationPractitioner[]
     */
    public function getPractitioner() {
        return $this->practitioner;
    }

    /**
     * Indicates who performed the immunization event.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImmunization\FHIRImmunizationPractitioner $practitioner
     * @return $this
     */
    public function addPractitioner($practitioner) {
        $this->practitioner[] = $practitioner;
        return $this;
    }

    /**
     * Extra information about the immunization that is not conveyed by the other attributes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Extra information about the immunization that is not conveyed by the other attributes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note) {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Reasons why a vaccine was or was not administered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason() {
        return $this->reason;
    }

    /**
     * Reasons why a vaccine was or was not administered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reason
     * @return $this
     */
    public function addReason($reason) {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * Educational material presented to the patient (or guardian) at the time of vaccine administration.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImmunization\FHIRImmunizationEducation[]
     */
    public function getEducation() {
        return $this->education;
    }

    /**
     * Educational material presented to the patient (or guardian) at the time of vaccine administration.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImmunization\FHIRImmunizationEducation $education
     * @return $this
     */
    public function addEducation($education) {
        $this->education[] = $education;
        return $this;
    }

    /**
     * Indicates a patient's eligibility for a funding program.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getProgramEligibility() {
        return $this->programEligibility;
    }

    /**
     * Indicates a patient's eligibility for a funding program.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $programEligibility
     * @return $this
     */
    public function addProgramEligibility($programEligibility) {
        $this->programEligibility[] = $programEligibility;
        return $this;
    }

    /**
     * Indicates the source of the vaccine actually administered. This may be different than the patient eligbility (e.g. the patient may be eligibile for a publically purchased vaccine but due to inventory issues, vaccine purchased with private funds was actually administered).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getFundingSource() {
        return $this->fundingSource;
    }

    /**
     * Indicates the source of the vaccine actually administered. This may be different than the patient eligbility (e.g. the patient may be eligibile for a publically purchased vaccine but due to inventory issues, vaccine purchased with private funds was actually administered).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $fundingSource
     * @return $this
     */
    public function setFundingSource($fundingSource) {
        $this->fundingSource = $fundingSource;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addIdentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.');
                }
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['vaccineCode'])) {
                $this->setVaccineCode($data['vaccineCode']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['encounter'])) {
                $this->setEncounter($data['encounter']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['primarySource'])) {
                $this->setPrimarySource($data['primarySource']);
            }
            if (isset($data['reportOrigin'])) {
                $this->setReportOrigin($data['reportOrigin']);
            }
            if (isset($data['location'])) {
                $this->setLocation($data['location']);
            }
            if (isset($data['manufacturer'])) {
                $this->setManufacturer($data['manufacturer']);
            }
            if (isset($data['lotNumber'])) {
                $this->setLotNumber($data['lotNumber']);
            }
            if (isset($data['expirationDate'])) {
                $this->setExpirationDate($data['expirationDate']);
            }
            if (isset($data['site'])) {
                $this->setSite($data['site']);
            }
            if (isset($data['route'])) {
                $this->setRoute($data['route']);
            }
            if (isset($data['doseQuantity'])) {
                $this->setDoseQuantity($data['doseQuantity']);
            }
            if (isset($data['practitioner'])) {
                if (is_array($data['practitioner'])) {
                    foreach($data['practitioner'] as $d) {
                        $this->addPractitioner($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"practitioner" must be array of objects or null, '.gettype($data['practitioner']).' seen.');
                }
            }
            if (isset($data['note'])) {
                if (is_array($data['note'])) {
                    foreach($data['note'] as $d) {
                        $this->addNote($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"note" must be array of objects or null, '.gettype($data['note']).' seen.');
                }
            }
            if (isset($data['reason'])) {
                if (is_array($data['reason'])) {
                    foreach($data['reason'] as $d) {
                        $this->addReason($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"reason" must be array of objects or null, '.gettype($data['reason']).' seen.');
                }
            }
            if (isset($data['education'])) {
                if (is_array($data['education'])) {
                    foreach($data['education'] as $d) {
                        $this->addEducation($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"education" must be array of objects or null, '.gettype($data['education']).' seen.');
                }
            }
            if (isset($data['programEligibility'])) {
                if (is_array($data['programEligibility'])) {
                    foreach($data['programEligibility'] as $d) {
                        $this->addProgramEligibility($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"programEligibility" must be array of objects or null, '.gettype($data['programEligibility']).' seen.');
                }
            }
            if (isset($data['fundingSource'])) {
                $this->setFundingSource($data['fundingSource']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->vaccineCode)) $json['vaccineCode'] = $this->vaccineCode;
        if (isset($this->patient)) $json['patient'] = $this->patient;
        if (isset($this->encounter)) $json['encounter'] = $this->encounter;
        if (isset($this->date)) $json['date'] = $this->date;
        if (isset($this->primarySource)) $json['primarySource'] = $this->primarySource;
        if (isset($this->reportOrigin)) $json['reportOrigin'] = $this->reportOrigin;
        if (isset($this->location)) $json['location'] = $this->location;
        if (isset($this->manufacturer)) $json['manufacturer'] = $this->manufacturer;
        if (isset($this->lotNumber)) $json['lotNumber'] = $this->lotNumber;
        if (isset($this->expirationDate)) $json['expirationDate'] = $this->expirationDate;
        if (isset($this->site)) $json['site'] = $this->site;
        if (isset($this->route)) $json['route'] = $this->route;
        if (isset($this->doseQuantity)) $json['doseQuantity'] = $this->doseQuantity;
        if (0 < count($this->practitioner)) {
            $json['practitioner'] = [];
            foreach($this->practitioner as $practitioner) {
                if (null !== $practitioner) $json['practitioner'][] = $practitioner;
            }
        }
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                if (null !== $note) $json['note'][] = $note;
            }
        }
        if (0 < count($this->reason)) {
            $json['reason'] = [];
            foreach($this->reason as $reason) {
                if (null !== $reason) $json['reason'][] = $reason;
            }
        }
        if (0 < count($this->education)) {
            $json['education'] = [];
            foreach($this->education as $education) {
                if (null !== $education) $json['education'][] = $education;
            }
        }
        if (0 < count($this->programEligibility)) {
            $json['programEligibility'] = [];
            foreach($this->programEligibility as $programEligibility) {
                if (null !== $programEligibility) $json['programEligibility'][] = $programEligibility;
            }
        }
        if (isset($this->fundingSource)) $json['fundingSource'] = $this->fundingSource;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Immunization xmlns="http://hl7.org/fhir"></Immunization>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->vaccineCode)) $this->vaccineCode->xmlSerialize(true, $sxe->addChild('vaccineCode'));
        if (isset($this->patient)) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (isset($this->encounter)) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
        if (isset($this->date)) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (isset($this->primarySource)) $this->primarySource->xmlSerialize(true, $sxe->addChild('primarySource'));
        if (isset($this->reportOrigin)) $this->reportOrigin->xmlSerialize(true, $sxe->addChild('reportOrigin'));
        if (isset($this->location)) $this->location->xmlSerialize(true, $sxe->addChild('location'));
        if (isset($this->manufacturer)) $this->manufacturer->xmlSerialize(true, $sxe->addChild('manufacturer'));
        if (isset($this->lotNumber)) $this->lotNumber->xmlSerialize(true, $sxe->addChild('lotNumber'));
        if (isset($this->expirationDate)) $this->expirationDate->xmlSerialize(true, $sxe->addChild('expirationDate'));
        if (isset($this->site)) $this->site->xmlSerialize(true, $sxe->addChild('site'));
        if (isset($this->route)) $this->route->xmlSerialize(true, $sxe->addChild('route'));
        if (isset($this->doseQuantity)) $this->doseQuantity->xmlSerialize(true, $sxe->addChild('doseQuantity'));
        if (0 < count($this->practitioner)) {
            foreach($this->practitioner as $practitioner) {
                $practitioner->xmlSerialize(true, $sxe->addChild('practitioner'));
            }
        }
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (0 < count($this->reason)) {
            foreach($this->reason as $reason) {
                $reason->xmlSerialize(true, $sxe->addChild('reason'));
            }
        }
        if (0 < count($this->education)) {
            foreach($this->education as $education) {
                $education->xmlSerialize(true, $sxe->addChild('education'));
            }
        }
        if (0 < count($this->programEligibility)) {
            foreach($this->programEligibility as $programEligibility) {
                $programEligibility->xmlSerialize(true, $sxe->addChild('programEligibility'));
            }
        }
        if (isset($this->fundingSource)) $this->fundingSource->xmlSerialize(true, $sxe->addChild('fundingSource'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}