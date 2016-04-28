<?php namespace PHPFHIRGenerated\FHIRResource\FHIRImmunizationRecommendation;

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
 * A patient's point-of-time immunization status and recommendation with optional supporting justification.
 */
class FHIRImmunizationRecommendationRecommendation extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * The date the immunization recommendation was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Vaccine that pertains to the recommendation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $vaccineType = null;

    /**
     * This indicates the next recommended dose number (e.g. dose 2 is the next recommended dose).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $doseNumber = null;

    /**
     * Vaccine administration status.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $forecastStatus = null;

    /**
     * Vaccine date recommendations - e.g. earliest date to administer, latest date to administer, etc.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[]
     */
    public $dateCriterion = array();

    /**
     * Contains information about the protocol under which the vaccine was administered.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol
     */
    public $protocol = null;

    /**
     * Immunization event history that supports the status and recommendation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $supportingImmunization = array();

    /**
     * Patient Information that supports the status and recommendation.  This includes patient observations, adverse reactions and allergy/intolerance information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $supportingPatientInformation = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ImmunizationRecommendation.Recommendation';

    /**
     * The date the immunization recommendation was created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date the immunization recommendation was created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Vaccine that pertains to the recommendation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getVaccineType()
    {
        return $this->vaccineType;
    }

    /**
     * Vaccine that pertains to the recommendation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $vaccineType
     * @return $this
     */
    public function setVaccineType($vaccineType)
    {
        $this->vaccineType = $vaccineType;
        return $this;
    }

    /**
     * This indicates the next recommended dose number (e.g. dose 2 is the next recommended dose).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getDoseNumber()
    {
        return $this->doseNumber;
    }

    /**
     * This indicates the next recommended dose number (e.g. dose 2 is the next recommended dose).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $doseNumber
     * @return $this
     */
    public function setDoseNumber($doseNumber)
    {
        $this->doseNumber = $doseNumber;
        return $this;
    }

    /**
     * Vaccine administration status.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getForecastStatus()
    {
        return $this->forecastStatus;
    }

    /**
     * Vaccine administration status.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $forecastStatus
     * @return $this
     */
    public function setForecastStatus($forecastStatus)
    {
        $this->forecastStatus = $forecastStatus;
        return $this;
    }

    /**
     * Vaccine date recommendations - e.g. earliest date to administer, latest date to administer, etc.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[]
     */
    public function getDateCriterion()
    {
        return $this->dateCriterion;
    }

    /**
     * Vaccine date recommendations - e.g. earliest date to administer, latest date to administer, etc.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[] $dateCriterion
     * @return $this
     */
    public function addDateCriterion($dateCriterion)
    {
        $this->dateCriterion[] = $dateCriterion;
        return $this;
    }

    /**
     * Contains information about the protocol under which the vaccine was administered.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Contains information about the protocol under which the vaccine was administered.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol $protocol
     * @return $this
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * Immunization event history that supports the status and recommendation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getSupportingImmunization()
    {
        return $this->supportingImmunization;
    }

    /**
     * Immunization event history that supports the status and recommendation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[] $supportingImmunization
     * @return $this
     */
    public function addSupportingImmunization($supportingImmunization)
    {
        $this->supportingImmunization[] = $supportingImmunization;
        return $this;
    }

    /**
     * Patient Information that supports the status and recommendation.  This includes patient observations, adverse reactions and allergy/intolerance information.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getSupportingPatientInformation()
    {
        return $this->supportingPatientInformation;
    }

    /**
     * Patient Information that supports the status and recommendation.  This includes patient observations, adverse reactions and allergy/intolerance information.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[] $supportingPatientInformation
     * @return $this
     */
    public function addSupportingPatientInformation($supportingPatientInformation)
    {
        $this->supportingPatientInformation[] = $supportingPatientInformation;
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
        if (null !== $this->date) $json['date'] = $this->date->jsonSerialize();
        if (null !== $this->vaccineType) $json['vaccineType'] = $this->vaccineType->jsonSerialize();
        if (null !== $this->doseNumber) $json['doseNumber'] = $this->doseNumber->jsonSerialize();
        if (null !== $this->forecastStatus) $json['forecastStatus'] = $this->forecastStatus->jsonSerialize();
        if (0 < count($this->dateCriterion)) {
            $json['dateCriterion'] = array();
            foreach($this->dateCriterion as $dateCriterion) {
                $json['dateCriterion'][] = $dateCriterion->jsonSerialize();
            }
        }
        if (null !== $this->protocol) $json['protocol'] = $this->protocol->jsonSerialize();
        if (0 < count($this->supportingImmunization)) {
            $json['supportingImmunization'] = array();
            foreach($this->supportingImmunization as $supportingImmunization) {
                $json['supportingImmunization'][] = $supportingImmunization->jsonSerialize();
            }
        }
        if (0 < count($this->supportingPatientInformation)) {
            $json['supportingPatientInformation'] = array();
            foreach($this->supportingPatientInformation as $supportingPatientInformation) {
                $json['supportingPatientInformation'][] = $supportingPatientInformation->jsonSerialize();
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImmunizationRecommendationRecommendation xmlns="http://hl7.org/fhir"></ImmunizationRecommendationRecommendation>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->vaccineType) $this->vaccineType->xmlSerialize(true, $sxe->addChild('vaccineType'));
        if (null !== $this->doseNumber) $this->doseNumber->xmlSerialize(true, $sxe->addChild('doseNumber'));
        if (null !== $this->forecastStatus) $this->forecastStatus->xmlSerialize(true, $sxe->addChild('forecastStatus'));
        if (0 < count($this->dateCriterion)) {
            foreach($this->dateCriterion as $dateCriterion) {
                $dateCriterion->xmlSerialize(true, $sxe->addChild('dateCriterion'));
            }
        }
        if (null !== $this->protocol) $this->protocol->xmlSerialize(true, $sxe->addChild('protocol'));
        if (0 < count($this->supportingImmunization)) {
            foreach($this->supportingImmunization as $supportingImmunization) {
                $supportingImmunization->xmlSerialize(true, $sxe->addChild('supportingImmunization'));
            }
        }
        if (0 < count($this->supportingPatientInformation)) {
            foreach($this->supportingPatientInformation as $supportingPatientInformation) {
                $supportingPatientInformation->xmlSerialize(true, $sxe->addChild('supportingPatientInformation'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}