<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * A patient's point-in-time immunization and recommendation (i.e. forecasting a patient's immunization eligibility according to a published schedule) with optional supporting justification.
 *
 * Class FHIRImmunizationRecommendationRecommendation
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation
 */
class FHIRImmunizationRecommendationRecommendation extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ImmunizationRecommendation.Recommendation';

    /**
     * The date the immunization recommendation was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $date = null;

    /**
     * Vaccine date recommendations.  For example, earliest date to administer, latest date to administer, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[]
     */
    private $dateCriterion = [];

    /**
     * The next recommended dose number (e.g. dose 2 is the next recommended dose).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $doseNumber = null;

    /**
     * Vaccine administration status.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $forecastStatus = null;

    /**
     * Contains information about the protocol under which the vaccine was administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol
     */
    private $protocol = null;

    /**
     * Immunization event history that supports the status and recommendation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $supportingImmunization = [];

    /**
     * Patient Information that supports the status and recommendation.  This includes patient observations, adverse reactions and allergy/intolerance information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $supportingPatientInformation = [];

    /**
     * The targeted disease for the recommendation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $targetDisease = null;

    /**
     * Vaccine that pertains to the recommendation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $vaccineCode = null;

    /**
     * FHIRImmunizationRecommendationRecommendation Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['date'])) {
                $value = $data['date'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation::__construct - Property \"date\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setDate($value);
            }
            if (isset($data['dateCriterion'])) {
                $value = $data['dateCriterion'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRImmunizationRecommendationDateCriterion($v);
                        } 
                        if (!($v instanceof FHIRImmunizationRecommendationDateCriterion)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation::__construct - Collection field \"dateCriterion\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion or data to construct type, saw ".gettype($v));
                        }
                        $this->addDateCriterion($v);
                    }
                }
            }
            if (isset($data['doseNumber'])) {
                $value = $data['doseNumber'];
                if (is_array($value)) {
                    $value = new FHIRPositiveInt($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRPositiveInt($value);
                }
                if (!($value instanceof FHIRPositiveInt)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation::__construct - Property \"doseNumber\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or data to construct type, saw ".gettype($value));
                }
                $this->setDoseNumber($value);
            }
            if (isset($data['forecastStatus'])) {
                $value = $data['forecastStatus'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation::__construct - Property \"forecastStatus\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setForecastStatus($value);
            }
            if (isset($data['protocol'])) {
                $value = $data['protocol'];
                if (is_array($value)) {
                    $value = new FHIRImmunizationRecommendationProtocol($value);
                } 
                if (!($value instanceof FHIRImmunizationRecommendationProtocol)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation::__construct - Property \"protocol\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol or data to construct type, saw ".gettype($value));
                }
                $this->setProtocol($value);
            }
            if (isset($data['supportingImmunization'])) {
                $value = $data['supportingImmunization'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRReference($v);
                        } 
                        if (!($v instanceof FHIRReference)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation::__construct - Collection field \"supportingImmunization\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($v));
                        }
                        $this->addSupportingImmunization($v);
                    }
                }
            }
            if (isset($data['supportingPatientInformation'])) {
                $value = $data['supportingPatientInformation'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRReference($v);
                        } 
                        if (!($v instanceof FHIRReference)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation::__construct - Collection field \"supportingPatientInformation\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($v));
                        }
                        $this->addSupportingPatientInformation($v);
                    }
                }
            }
            if (isset($data['targetDisease'])) {
                $value = $data['targetDisease'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation::__construct - Property \"targetDisease\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setTargetDisease($value);
            }
            if (isset($data['vaccineCode'])) {
                $value = $data['vaccineCode'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation::__construct - Property \"vaccineCode\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setVaccineCode($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The date the immunization recommendation was created.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDate($date)
    {
        if (null === $date) {
            return $this; 
        }
        if (is_scalar($date)) {
            $date = new FHIRDateTime($date);
        }
        if (!($date instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationRecommendationRecommendation::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * The date the immunization recommendation was created.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Vaccine date recommendations.  For example, earliest date to administer, latest date to administer, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion
     * @return $this
     */
    public function addDateCriterion(FHIRImmunizationRecommendationDateCriterion $dateCriterion = null)
    {
        if (null === $dateCriterion) {
            return $this; 
        }
        $this->dateCriterion[] = $dateCriterion;
        return $this;
    }

    /**
     * Vaccine date recommendations.  For example, earliest date to administer, latest date to administer, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[]
     */
    public function getDateCriterion()
    {
        return $this->dateCriterion;
    }

    /**
     * The next recommended dose number (e.g. dose 2 is the next recommended dose).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setDoseNumber($doseNumber)
    {
        if (null === $doseNumber) {
            return $this; 
        }
        if (is_scalar($doseNumber)) {
            $doseNumber = new FHIRPositiveInt($doseNumber);
        }
        if (!($doseNumber instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationRecommendationRecommendation::setDoseNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($doseNumber)
            ));
        }
        $this->doseNumber = $doseNumber;
        return $this;
    }

    /**
     * The next recommended dose number (e.g. dose 2 is the next recommended dose).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getDoseNumber()
    {
        return $this->doseNumber;
    }

    /**
     * Vaccine administration status.
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
     * Vaccine administration status.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getForecastStatus()
    {
        return $this->forecastStatus;
    }

    /**
     * Contains information about the protocol under which the vaccine was administered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol
     * @return $this
     */
    public function setProtocol(FHIRImmunizationRecommendationProtocol $protocol = null)
    {
        if (null === $protocol) {
            return $this; 
        }
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * Contains information about the protocol under which the vaccine was administered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Immunization event history that supports the status and recommendation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function addSupportingImmunization(FHIRReference $supportingImmunization = null)
    {
        if (null === $supportingImmunization) {
            return $this; 
        }
        $this->supportingImmunization[] = $supportingImmunization;
        return $this;
    }

    /**
     * Immunization event history that supports the status and recommendation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference[]
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
    public function addSupportingPatientInformation(FHIRReference $supportingPatientInformation = null)
    {
        if (null === $supportingPatientInformation) {
            return $this; 
        }
        $this->supportingPatientInformation[] = $supportingPatientInformation;
        return $this;
    }

    /**
     * Patient Information that supports the status and recommendation.  This includes patient observations, adverse reactions and allergy/intolerance information.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference[]
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
     * Vaccine that pertains to the recommendation.
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
     * Vaccine that pertains to the recommendation.
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
        if (null !== ($v = $this->getDate())) {
            $a['date'] = $v;
        }
        if (0 < count($values = $this->getDateCriterion())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['dateCriterion'] = $vs;
            }
        }
        if (null !== ($v = $this->getDoseNumber())) {
            $a['doseNumber'] = $v;
        }
        if (null !== ($v = $this->getForecastStatus())) {
            $a['forecastStatus'] = $v;
        }
        if (null !== ($v = $this->getProtocol())) {
            $a['protocol'] = $v;
        }
        if (0 < count($values = $this->getSupportingImmunization())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['supportingImmunization'] = $vs;
            }
        }
        if (0 < count($values = $this->getSupportingPatientInformation())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['supportingPatientInformation'] = $vs;
            }
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
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize(true, $sxe->addChild('date'));
        }
        if (0 < count($values = $this->getDateCriterion())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('dateCriterion'));
                }
            }
        }
        if (null !== ($v = $this->getDoseNumber())) {
            $v->xmlSerialize(true, $sxe->addChild('doseNumber'));
        }
        if (null !== ($v = $this->getForecastStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('forecastStatus'));
        }
        if (null !== ($v = $this->getProtocol())) {
            $v->xmlSerialize(true, $sxe->addChild('protocol'));
        }
        if (0 < count($values = $this->getSupportingImmunization())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('supportingImmunization'));
                }
            }
        }
        if (0 < count($values = $this->getSupportingPatientInformation())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('supportingPatientInformation'));
                }
            }
        }
        if (null !== ($v = $this->getTargetDisease())) {
            $v->xmlSerialize(true, $sxe->addChild('targetDisease'));
        }
        if (null !== ($v = $this->getVaccineCode())) {
            $v->xmlSerialize(true, $sxe->addChild('vaccineCode'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}