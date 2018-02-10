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
 * Immunization event information.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRImmunization extends FHIRResource implements \JsonSerializable
{
    /**
     * A unique identifier assigned to this adverse reaction record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Date vaccine administered or was to be administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Vaccine that was administered or was to be administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $vaccineType = null;

    /**
     * The patient to whom the vaccine was to be administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $subject = null;

    /**
     * Indicates if the vaccination was refused.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $refusedIndicator = null;

    /**
     * True if this administration was reported rather than directly administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $reported = null;

    /**
     * Clinician who administered the vaccine.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $performer = null;

    /**
     * Clinician who ordered the vaccination.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $requester = null;

    /**
     * Name of vaccine manufacturer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $manufacturer = null;

    /**
     * The service delivery location where the vaccine administration occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
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
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $doseQuantity = null;

    /**
     * Reasons why a vaccine was administered or refused.
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
     * A unique identifier assigned to this adverse reaction record.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A unique identifier assigned to this adverse reaction record.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
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
    public function getVaccineType()
    {
        return $this->vaccineType;
    }

    /**
     * Vaccine that was administered or was to be administered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $vaccineType
     * @return $this
     */
    public function setVaccineType($vaccineType)
    {
        $this->vaccineType = $vaccineType;
        return $this;
    }

    /**
     * The patient to whom the vaccine was to be administered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The patient to whom the vaccine was to be administered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Indicates if the vaccination was refused.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getRefusedIndicator()
    {
        return $this->refusedIndicator;
    }

    /**
     * Indicates if the vaccination was refused.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $refusedIndicator
     * @return $this
     */
    public function setRefusedIndicator($refusedIndicator)
    {
        $this->refusedIndicator = $refusedIndicator;
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
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Clinician who administered the vaccine.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $performer
     * @return $this
     */
    public function setPerformer($performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Clinician who ordered the vaccination.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * Clinician who ordered the vaccination.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $requester
     * @return $this
     */
    public function setRequester($requester)
    {
        $this->requester = $requester;
        return $this;
    }

    /**
     * Name of vaccine manufacturer.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Name of vaccine manufacturer.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $manufacturer
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * The service delivery location where the vaccine administration occurred.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The service delivery location where the vaccine administration occurred.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $location
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
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDoseQuantity()
    {
        return $this->doseQuantity;
    }

    /**
     * The quantity of vaccine product that was administered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $doseQuantity
     * @return $this
     */
    public function setDoseQuantity($doseQuantity)
    {
        $this->doseQuantity = $doseQuantity;
        return $this;
    }

    /**
     * Reasons why a vaccine was administered or refused.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImmunization\FHIRImmunizationExplanation
     */
    public function getExplanation()
    {
        return $this->explanation;
    }

    /**
     * Reasons why a vaccine was administered or refused.
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
        if (null !== $this->date) $json['date'] = $this->date;
        if (null !== $this->vaccineType) $json['vaccineType'] = $this->vaccineType;
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (null !== $this->refusedIndicator) $json['refusedIndicator'] = $this->refusedIndicator;
        if (null !== $this->reported) $json['reported'] = $this->reported;
        if (null !== $this->performer) $json['performer'] = $this->performer;
        if (null !== $this->requester) $json['requester'] = $this->requester;
        if (null !== $this->manufacturer) $json['manufacturer'] = $this->manufacturer;
        if (null !== $this->location) $json['location'] = $this->location;
        if (null !== $this->lotNumber) $json['lotNumber'] = $this->lotNumber;
        if (null !== $this->expirationDate) $json['expirationDate'] = $this->expirationDate;
        if (null !== $this->site) $json['site'] = $this->site;
        if (null !== $this->route) $json['route'] = $this->route;
        if (null !== $this->doseQuantity) $json['doseQuantity'] = $this->doseQuantity;
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
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->vaccineType) $this->vaccineType->xmlSerialize(true, $sxe->addChild('vaccineType'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->refusedIndicator) $this->refusedIndicator->xmlSerialize(true, $sxe->addChild('refusedIndicator'));
        if (null !== $this->reported) $this->reported->xmlSerialize(true, $sxe->addChild('reported'));
        if (null !== $this->performer) $this->performer->xmlSerialize(true, $sxe->addChild('performer'));
        if (null !== $this->requester) $this->requester->xmlSerialize(true, $sxe->addChild('requester'));
        if (null !== $this->manufacturer) $this->manufacturer->xmlSerialize(true, $sxe->addChild('manufacturer'));
        if (null !== $this->location) $this->location->xmlSerialize(true, $sxe->addChild('location'));
        if (null !== $this->lotNumber) $this->lotNumber->xmlSerialize(true, $sxe->addChild('lotNumber'));
        if (null !== $this->expirationDate) $this->expirationDate->xmlSerialize(true, $sxe->addChild('expirationDate'));
        if (null !== $this->site) $this->site->xmlSerialize(true, $sxe->addChild('site'));
        if (null !== $this->route) $this->route->xmlSerialize(true, $sxe->addChild('route'));
        if (null !== $this->doseQuantity) $this->doseQuantity->xmlSerialize(true, $sxe->addChild('doseQuantity'));
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