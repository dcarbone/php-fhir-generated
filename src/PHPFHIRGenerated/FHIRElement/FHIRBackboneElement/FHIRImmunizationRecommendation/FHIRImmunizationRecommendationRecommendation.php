<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A patient's point-in-time set of recommendations (i.e. forecasting) according to a published schedule with optional supporting justification.
 *
 * Class FHIRImmunizationRecommendationRecommendation
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation
 */
class FHIRImmunizationRecommendationRecommendation extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ImmunizationRecommendation.Recommendation';

    /**
     * Vaccine(s) which should not be used to fulfill the recommendation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $contraindicatedVaccineCode = null;

    /**
     * Vaccine date recommendations.  For example, earliest date to administer, latest date to administer, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion
     */
    public $dateCriterion = null;

    /**
     * Contains the description about the protocol under which the vaccine was administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next recommended dose).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $doseNumberPositiveInt = null;

    /**
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next recommended dose).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $doseNumberString = null;

    /**
     * The reason for the assigned forecast status.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $forecastReason = null;

    /**
     * Indicates the patient status with respect to the path to immunity for the target disease.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $forecastStatus = null;

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $series = null;

    /**
     * The recommended number of doses to achieve immunity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $seriesDosesPositiveInt = null;

    /**
     * The recommended number of doses to achieve immunity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $seriesDosesString = null;

    /**
     * Immunization event history and/or evaluation that supports the status and recommendation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $supportingImmunization = null;

    /**
     * Patient Information that supports the status and recommendation.  This includes patient observations, adverse reactions and allergy/intolerance information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $supportingPatientInformation = null;

    /**
     * The targeted disease for the recommendation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $targetDisease = null;

    /**
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $vaccineCode = null;

    /**
     * FHIRImmunizationRecommendationRecommendation Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['contraindicatedVaccineCode'])) {
                $this->setContraindicatedVaccineCode($data['contraindicatedVaccineCode']);
            }
            if (isset($data['dateCriterion'])) {
                $this->setDateCriterion($data['dateCriterion']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['doseNumberPositiveInt'])) {
                $this->setDoseNumberPositiveInt($data['doseNumberPositiveInt']);
            }
            if (isset($data['doseNumberString'])) {
                $this->setDoseNumberString($data['doseNumberString']);
            }
            if (isset($data['forecastReason'])) {
                $this->setForecastReason($data['forecastReason']);
            }
            if (isset($data['forecastStatus'])) {
                $this->setForecastStatus($data['forecastStatus']);
            }
            if (isset($data['series'])) {
                $this->setSeries($data['series']);
            }
            if (isset($data['seriesDosesPositiveInt'])) {
                $this->setSeriesDosesPositiveInt($data['seriesDosesPositiveInt']);
            }
            if (isset($data['seriesDosesString'])) {
                $this->setSeriesDosesString($data['seriesDosesString']);
            }
            if (isset($data['supportingImmunization'])) {
                $this->setSupportingImmunization($data['supportingImmunization']);
            }
            if (isset($data['supportingPatientInformation'])) {
                $this->setSupportingPatientInformation($data['supportingPatientInformation']);
            }
            if (isset($data['targetDisease'])) {
                $this->setTargetDisease($data['targetDisease']);
            }
            if (isset($data['vaccineCode'])) {
                $this->setVaccineCode($data['vaccineCode']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Vaccine(s) which should not be used to fulfill the recommendation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setContraindicatedVaccineCode(FHIRCodeableConcept $contraindicatedVaccineCode = null)
    {
        if (null === $contraindicatedVaccineCode) {
            return $this; 
        }
        $this->contraindicatedVaccineCode = $contraindicatedVaccineCode;
        return $this;
    }

    /**
     * Vaccine(s) which should not be used to fulfill the recommendation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getContraindicatedVaccineCode()
    {
        return $this->contraindicatedVaccineCode;
    }


    /**
     * Vaccine date recommendations.  For example, earliest date to administer, latest date to administer, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion
     * @return $this
     */
    public function setDateCriterion(FHIRImmunizationRecommendationDateCriterion $dateCriterion = null)
    {
        if (null === $dateCriterion) {
            return $this; 
        }
        $this->dateCriterion = $dateCriterion;
        return $this;
    }

    /**
     * Vaccine date recommendations.  For example, earliest date to administer, latest date to administer, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion
     */
    public function getDateCriterion()
    {
        return $this->dateCriterion;
    }


    /**
     * Contains the description about the protocol under which the vaccine was administered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRString($description);
        }
        if (!($description instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationRecommendationRecommendation::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * Contains the description about the protocol under which the vaccine was administered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next recommended dose).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setDoseNumberPositiveInt($doseNumberPositiveInt)
    {
        if (null === $doseNumberPositiveInt) {
            return $this; 
        }
        if (is_scalar($doseNumberPositiveInt)) {
            $doseNumberPositiveInt = new FHIRPositiveInt($doseNumberPositiveInt);
        }
        if (!($doseNumberPositiveInt instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationRecommendationRecommendation::setDoseNumberPositiveInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($doseNumberPositiveInt)
            ));
        }
        $this->doseNumberPositiveInt = $doseNumberPositiveInt;
        return $this;
    }

    /**
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next recommended dose).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getDoseNumberPositiveInt()
    {
        return $this->doseNumberPositiveInt;
    }


    /**
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next recommended dose).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDoseNumberString($doseNumberString)
    {
        if (null === $doseNumberString) {
            return $this; 
        }
        if (is_scalar($doseNumberString)) {
            $doseNumberString = new FHIRString($doseNumberString);
        }
        if (!($doseNumberString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationRecommendationRecommendation::setDoseNumberString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($doseNumberString)
            ));
        }
        $this->doseNumberString = $doseNumberString;
        return $this;
    }

    /**
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next recommended dose).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDoseNumberString()
    {
        return $this->doseNumberString;
    }


    /**
     * The reason for the assigned forecast status.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setForecastReason(FHIRCodeableConcept $forecastReason = null)
    {
        if (null === $forecastReason) {
            return $this; 
        }
        $this->forecastReason = $forecastReason;
        return $this;
    }

    /**
     * The reason for the assigned forecast status.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getForecastReason()
    {
        return $this->forecastReason;
    }


    /**
     * Indicates the patient status with respect to the path to immunity for the target disease.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setForecastStatus(FHIRCodeableConcept $forecastStatus = null)
    {
        if (null === $forecastStatus) {
            return $this; 
        }
        $this->forecastStatus = $forecastStatus;
        return $this;
    }

    /**
     * Indicates the patient status with respect to the path to immunity for the target disease.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getForecastStatus()
    {
        return $this->forecastStatus;
    }


    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setSeries($series)
    {
        if (null === $series) {
            return $this; 
        }
        if (is_scalar($series)) {
            $series = new FHIRString($series);
        }
        if (!($series instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationRecommendationRecommendation::setSeries - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($series)
            ));
        }
        $this->series = $series;
        return $this;
    }

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSeries()
    {
        return $this->series;
    }


    /**
     * The recommended number of doses to achieve immunity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setSeriesDosesPositiveInt($seriesDosesPositiveInt)
    {
        if (null === $seriesDosesPositiveInt) {
            return $this; 
        }
        if (is_scalar($seriesDosesPositiveInt)) {
            $seriesDosesPositiveInt = new FHIRPositiveInt($seriesDosesPositiveInt);
        }
        if (!($seriesDosesPositiveInt instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationRecommendationRecommendation::setSeriesDosesPositiveInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($seriesDosesPositiveInt)
            ));
        }
        $this->seriesDosesPositiveInt = $seriesDosesPositiveInt;
        return $this;
    }

    /**
     * The recommended number of doses to achieve immunity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getSeriesDosesPositiveInt()
    {
        return $this->seriesDosesPositiveInt;
    }


    /**
     * The recommended number of doses to achieve immunity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setSeriesDosesString($seriesDosesString)
    {
        if (null === $seriesDosesString) {
            return $this; 
        }
        if (is_scalar($seriesDosesString)) {
            $seriesDosesString = new FHIRString($seriesDosesString);
        }
        if (!($seriesDosesString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationRecommendationRecommendation::setSeriesDosesString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($seriesDosesString)
            ));
        }
        $this->seriesDosesString = $seriesDosesString;
        return $this;
    }

    /**
     * The recommended number of doses to achieve immunity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSeriesDosesString()
    {
        return $this->seriesDosesString;
    }


    /**
     * Immunization event history and/or evaluation that supports the status and recommendation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSupportingImmunization(FHIRReference $supportingImmunization = null)
    {
        if (null === $supportingImmunization) {
            return $this; 
        }
        $this->supportingImmunization = $supportingImmunization;
        return $this;
    }

    /**
     * Immunization event history and/or evaluation that supports the status and recommendation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSupportingImmunization()
    {
        return $this->supportingImmunization;
    }


    /**
     * Patient Information that supports the status and recommendation.  This includes patient observations, adverse reactions and allergy/intolerance information.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSupportingPatientInformation(FHIRReference $supportingPatientInformation = null)
    {
        if (null === $supportingPatientInformation) {
            return $this; 
        }
        $this->supportingPatientInformation = $supportingPatientInformation;
        return $this;
    }

    /**
     * Patient Information that supports the status and recommendation.  This includes patient observations, adverse reactions and allergy/intolerance information.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSupportingPatientInformation()
    {
        return $this->supportingPatientInformation;
    }


    /**
     * The targeted disease for the recommendation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setTargetDisease(FHIRCodeableConcept $targetDisease = null)
    {
        if (null === $targetDisease) {
            return $this; 
        }
        $this->targetDisease = $targetDisease;
        return $this;
    }

    /**
     * The targeted disease for the recommendation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getTargetDisease()
    {
        return $this->targetDisease;
    }


    /**
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setVaccineCode(FHIRCodeableConcept $vaccineCode = null)
    {
        if (null === $vaccineCode) {
            return $this; 
        }
        $this->vaccineCode = $vaccineCode;
        return $this;
    }

    /**
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getVaccineCode()
    {
        return $this->vaccineCode;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getContraindicatedVaccineCode())) {
            $a['contraindicatedVaccineCode'] = $v;
        }
        if (null !== ($v = $this->getDateCriterion())) {
            $a['dateCriterion'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getDoseNumberPositiveInt())) {
            $a['doseNumberPositiveInt'] = $v;
        }
        if (null !== ($v = $this->getDoseNumberString())) {
            $a['doseNumberString'] = $v;
        }
        if (null !== ($v = $this->getForecastReason())) {
            $a['forecastReason'] = $v;
        }
        if (null !== ($v = $this->getForecastStatus())) {
            $a['forecastStatus'] = $v;
        }
        if (null !== ($v = $this->getSeries())) {
            $a['series'] = $v;
        }
        if (null !== ($v = $this->getSeriesDosesPositiveInt())) {
            $a['seriesDosesPositiveInt'] = $v;
        }
        if (null !== ($v = $this->getSeriesDosesString())) {
            $a['seriesDosesString'] = $v;
        }
        if (null !== ($v = $this->getSupportingImmunization())) {
            $a['supportingImmunization'] = $v;
        }
        if (null !== ($v = $this->getSupportingPatientInformation())) {
            $a['supportingPatientInformation'] = $v;
        }
        if (null !== ($v = $this->getTargetDisease())) {
            $a['targetDisease'] = $v;
        }
        if (null !== ($v = $this->getVaccineCode())) {
            $a['vaccineCode'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ImmunizationRecommendationRecommendation xmlns="http://hl7.org/fhir"></ImmunizationRecommendationRecommendation>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}