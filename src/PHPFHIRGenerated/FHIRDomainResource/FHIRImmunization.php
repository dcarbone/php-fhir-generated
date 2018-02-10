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
 * Describes the event of a patient being administered a vaccination or a record of a vaccination as reported by a patient, a clinician or another party and may include vaccine reaction information and what vaccination protocol was followed.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRImmunization extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A unique identifier assigned to this immunization record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Indicates the current status of the vaccination event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $status = null;

    /**
     * Date vaccine administered or was to be administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

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
     * Indicates if the vaccination was or was not given.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $wasNotGiven = null;

    /**
     * True if this administration was reported rather than directly administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $reported = null;

    /**
     * Clinician who administered the vaccine.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $performer = null;

    /**
     * Clinician who ordered the vaccination.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $requester = null;

    /**
     * The visit or admission or other contact between patient and health care provider the immunization was performed as part of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * Name of vaccine manufacturer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $manufacturer = null;

    /**
     * The service delivery location where the vaccine administration occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

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
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public $doseQuantity = null;

    /**
     * Extra information about the immunization that is not conveyed by the other attributes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * Reasons why a vaccine was or was not administered.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImmunization\FHIRImmunizationExplanation
     */
    public $explanation = null;

    /**
     * Categorical data indicating that an adverse event is associated in time to an immunization.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImmunization\FHIRImmunizationReaction[]
     */
    public $reaction = array();

    /**
     * Contains information about the protocol(s) under which the vaccine was administered.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImmunization\FHIRImmunizationVaccinationProtocol[]
     */
    public $vaccinationProtocol = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Immunization';

    /**
     * A unique identifier assigned to this immunization record.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A unique identifier assigned to this immunization record.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Indicates the current status of the vaccination event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates the current status of the vaccination event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Date vaccine administered or was to be administered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Date vaccine administered or was to be administered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Vaccine that was administered or was to be administered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getVaccineCode()
    {
        return $this->vaccineCode;
    }

    /**
     * Vaccine that was administered or was to be administered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $vaccineCode
     * @return $this
     */
    public function setVaccineCode($vaccineCode)
    {
        $this->vaccineCode = $vaccineCode;
        return $this;
    }

    /**
     * The patient who either received or did not receive the immunization.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The patient who either received or did not receive the immunization.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Indicates if the vaccination was or was not given.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getWasNotGiven()
    {
        return $this->wasNotGiven;
    }

    /**
     * Indicates if the vaccination was or was not given.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $wasNotGiven
     * @return $this
     */
    public function setWasNotGiven($wasNotGiven)
    {
        $this->wasNotGiven = $wasNotGiven;
        return $this;
    }

    /**
     * True if this administration was reported rather than directly administered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getReported()
    {
        return $this->reported;
    }

    /**
     * True if this administration was reported rather than directly administered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $reported
     * @return $this
     */
    public function setReported($reported)
    {
        $this->reported = $reported;
        return $this;
    }

    /**
     * Clinician who administered the vaccine.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Clinician who administered the vaccine.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $performer
     * @return $this
     */
    public function setPerformer($performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Clinician who ordered the vaccination.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * Clinician who ordered the vaccination.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $requester
     * @return $this
     */
    public function setRequester($requester)
    {
        $this->requester = $requester;
        return $this;
    }

    /**
     * The visit or admission or other contact between patient and health care provider the immunization was performed as part of.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * The visit or admission or other contact between patient and health care provider the immunization was performed as part of.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     * @return $this
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Name of vaccine manufacturer.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Name of vaccine manufacturer.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $manufacturer
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * The service delivery location where the vaccine administration occurred.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The service delivery location where the vaccine administration occurred.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Lot number of the  vaccine product.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }

    /**
     * Lot number of the  vaccine product.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $lotNumber
     * @return $this
     */
    public function setLotNumber($lotNumber)
    {
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * Date vaccine batch expires.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Date vaccine batch expires.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Body site where vaccine was administered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Body site where vaccine was administered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $site
     * @return $this
     */
    public function setSite($site)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * The path by which the vaccine product is taken into the body.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * The path by which the vaccine product is taken into the body.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $route
     * @return $this
     */
    public function setRoute($route)
    {
        $this->route = $route;
        return $this;
    }

    /**
     * The quantity of vaccine product that was administered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getDoseQuantity()
    {
        return $this->doseQuantity;
    }

    /**
     * The quantity of vaccine product that was administered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $doseQuantity
     * @return $this
     */
    public function setDoseQuantity($doseQuantity)
    {
        $this->doseQuantity = $doseQuantity;
        return $this;
    }

    /**
     * Extra information about the immunization that is not conveyed by the other attributes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Extra information about the immunization that is not conveyed by the other attributes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Reasons why a vaccine was or was not administered.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImmunization\FHIRImmunizationExplanation
     */
    public function getExplanation()
    {
        return $this->explanation;
    }

    /**
     * Reasons why a vaccine was or was not administered.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImmunization\FHIRImmunizationExplanation $explanation
     * @return $this
     */
    public function setExplanation($explanation)
    {
        $this->explanation = $explanation;
        return $this;
    }

    /**
     * Categorical data indicating that an adverse event is associated in time to an immunization.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImmunization\FHIRImmunizationReaction[]
     */
    public function getReaction()
    {
        return $this->reaction;
    }

    /**
     * Categorical data indicating that an adverse event is associated in time to an immunization.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImmunization\FHIRImmunizationReaction $reaction
     * @return $this
     */
    public function addReaction($reaction)
    {
        $this->reaction[] = $reaction;
        return $this;
    }

    /**
     * Contains information about the protocol(s) under which the vaccine was administered.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImmunization\FHIRImmunizationVaccinationProtocol[]
     */
    public function getVaccinationProtocol()
    {
        return $this->vaccinationProtocol;
    }

    /**
     * Contains information about the protocol(s) under which the vaccine was administered.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImmunization\FHIRImmunizationVaccinationProtocol $vaccinationProtocol
     * @return $this
     */
    public function addVaccinationProtocol($vaccinationProtocol)
    {
        $this->vaccinationProtocol[] = $vaccinationProtocol;
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
        if (null !== $this->date) $json['date'] = $this->date;
        if (null !== $this->vaccineCode) $json['vaccineCode'] = $this->vaccineCode;
        if (null !== $this->patient) $json['patient'] = $this->patient;
        if (null !== $this->wasNotGiven) $json['wasNotGiven'] = $this->wasNotGiven;
        if (null !== $this->reported) $json['reported'] = $this->reported;
        if (null !== $this->performer) $json['performer'] = $this->performer;
        if (null !== $this->requester) $json['requester'] = $this->requester;
        if (null !== $this->encounter) $json['encounter'] = $this->encounter;
        if (null !== $this->manufacturer) $json['manufacturer'] = $this->manufacturer;
        if (null !== $this->location) $json['location'] = $this->location;
        if (null !== $this->lotNumber) $json['lotNumber'] = $this->lotNumber;
        if (null !== $this->expirationDate) $json['expirationDate'] = $this->expirationDate;
        if (null !== $this->site) $json['site'] = $this->site;
        if (null !== $this->route) $json['route'] = $this->route;
        if (null !== $this->doseQuantity) $json['doseQuantity'] = $this->doseQuantity;
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                $json['note'][] = $note;
            }
        }
        if (null !== $this->explanation) $json['explanation'] = $this->explanation;
        if (0 < count($this->reaction)) {
            $json['reaction'] = [];
            foreach($this->reaction as $reaction) {
                $json['reaction'][] = $reaction;
            }
        }
        if (0 < count($this->vaccinationProtocol)) {
            $json['vaccinationProtocol'] = [];
            foreach($this->vaccinationProtocol as $vaccinationProtocol) {
                $json['vaccinationProtocol'][] = $vaccinationProtocol;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Immunization xmlns="http://hl7.org/fhir"></Immunization>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->vaccineCode) $this->vaccineCode->xmlSerialize(true, $sxe->addChild('vaccineCode'));
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (null !== $this->wasNotGiven) $this->wasNotGiven->xmlSerialize(true, $sxe->addChild('wasNotGiven'));
        if (null !== $this->reported) $this->reported->xmlSerialize(true, $sxe->addChild('reported'));
        if (null !== $this->performer) $this->performer->xmlSerialize(true, $sxe->addChild('performer'));
        if (null !== $this->requester) $this->requester->xmlSerialize(true, $sxe->addChild('requester'));
        if (null !== $this->encounter) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
        if (null !== $this->manufacturer) $this->manufacturer->xmlSerialize(true, $sxe->addChild('manufacturer'));
        if (null !== $this->location) $this->location->xmlSerialize(true, $sxe->addChild('location'));
        if (null !== $this->lotNumber) $this->lotNumber->xmlSerialize(true, $sxe->addChild('lotNumber'));
        if (null !== $this->expirationDate) $this->expirationDate->xmlSerialize(true, $sxe->addChild('expirationDate'));
        if (null !== $this->site) $this->site->xmlSerialize(true, $sxe->addChild('site'));
        if (null !== $this->route) $this->route->xmlSerialize(true, $sxe->addChild('route'));
        if (null !== $this->doseQuantity) $this->doseQuantity->xmlSerialize(true, $sxe->addChild('doseQuantity'));
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (null !== $this->explanation) $this->explanation->xmlSerialize(true, $sxe->addChild('explanation'));
        if (0 < count($this->reaction)) {
            foreach($this->reaction as $reaction) {
                $reaction->xmlSerialize(true, $sxe->addChild('reaction'));
            }
        }
        if (0 < count($this->vaccinationProtocol)) {
            foreach($this->vaccinationProtocol as $vaccinationProtocol) {
                $vaccinationProtocol->xmlSerialize(true, $sxe->addChild('vaccinationProtocol'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}