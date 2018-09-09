<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment;

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
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * An assessment of the likely outcome(s) for a patient or other subject as well as the likelihood of each outcome.
 *
 * Class FHIRRiskAssessmentPrediction
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment
 */
class FHIRRiskAssessmentPrediction extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'RiskAssessment.Prediction';

    /**
     * One of the potential outcomes for the patient (e.g. remission, death,  a particular condition).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $outcome = null;

    /**
     * Indicates how likely the outcome is (in the specified timeframe).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $probabilityDecimal = null;

    /**
     * Indicates how likely the outcome is (in the specified timeframe).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $probabilityRange = null;

    /**
     * Indicates how likely the outcome is (in the specified timeframe), expressed as a qualitative value (e.g. low, medium, or high).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $qualitativeRisk = null;

    /**
     * Additional information explaining the basis for the prediction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $rationale = null;

    /**
     * Indicates the risk for this particular subject (with their specific characteristics) divided by the risk of the population in general.  (Numbers greater than 1 = higher risk than the population, numbers less than 1 = lower risk.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $relativeRisk = null;

    /**
     * Indicates the period of time or age range of the subject to which the specified probability applies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $whenPeriod = null;

    /**
     * Indicates the period of time or age range of the subject to which the specified probability applies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $whenRange = null;

    /**
     * FHIRRiskAssessmentPrediction Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['outcome'])) {
                $this->setOutcome($data['outcome']);
            }
            if (isset($data['probabilityDecimal'])) {
                $this->setProbabilityDecimal($data['probabilityDecimal']);
            }
            if (isset($data['probabilityRange'])) {
                $this->setProbabilityRange($data['probabilityRange']);
            }
            if (isset($data['qualitativeRisk'])) {
                $this->setQualitativeRisk($data['qualitativeRisk']);
            }
            if (isset($data['rationale'])) {
                $this->setRationale($data['rationale']);
            }
            if (isset($data['relativeRisk'])) {
                $this->setRelativeRisk($data['relativeRisk']);
            }
            if (isset($data['whenPeriod'])) {
                $this->setWhenPeriod($data['whenPeriod']);
            }
            if (isset($data['whenRange'])) {
                $this->setWhenRange($data['whenRange']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * One of the potential outcomes for the patient (e.g. remission, death,  a particular condition).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setOutcome(FHIRCodeableConcept $outcome = null)
    {
        if (null === $outcome) {
            return $this; 
        }
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * One of the potential outcomes for the patient (e.g. remission, death,  a particular condition).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome()
    {
        return $this->outcome;
    }


    /**
     * Indicates how likely the outcome is (in the specified timeframe).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setProbabilityDecimal($probabilityDecimal)
    {
        if (null === $probabilityDecimal) {
            return $this; 
        }
        if (is_scalar($probabilityDecimal)) {
            $probabilityDecimal = new FHIRDecimal($probabilityDecimal);
        }
        if (!($probabilityDecimal instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRRiskAssessmentPrediction::setProbabilityDecimal - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($probabilityDecimal)
            ));
        }
        $this->probabilityDecimal = $probabilityDecimal;
        return $this;
    }

    /**
     * Indicates how likely the outcome is (in the specified timeframe).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getProbabilityDecimal()
    {
        return $this->probabilityDecimal;
    }


    /**
     * Indicates how likely the outcome is (in the specified timeframe).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setProbabilityRange(FHIRRange $probabilityRange = null)
    {
        if (null === $probabilityRange) {
            return $this; 
        }
        $this->probabilityRange = $probabilityRange;
        return $this;
    }

    /**
     * Indicates how likely the outcome is (in the specified timeframe).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getProbabilityRange()
    {
        return $this->probabilityRange;
    }


    /**
     * Indicates how likely the outcome is (in the specified timeframe), expressed as a qualitative value (e.g. low, medium, or high).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setQualitativeRisk(FHIRCodeableConcept $qualitativeRisk = null)
    {
        if (null === $qualitativeRisk) {
            return $this; 
        }
        $this->qualitativeRisk = $qualitativeRisk;
        return $this;
    }

    /**
     * Indicates how likely the outcome is (in the specified timeframe), expressed as a qualitative value (e.g. low, medium, or high).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getQualitativeRisk()
    {
        return $this->qualitativeRisk;
    }


    /**
     * Additional information explaining the basis for the prediction.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setRationale($rationale)
    {
        if (null === $rationale) {
            return $this; 
        }
        if (is_scalar($rationale)) {
            $rationale = new FHIRString($rationale);
        }
        if (!($rationale instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRRiskAssessmentPrediction::setRationale - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($rationale)
            ));
        }
        $this->rationale = $rationale;
        return $this;
    }

    /**
     * Additional information explaining the basis for the prediction.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRationale()
    {
        return $this->rationale;
    }


    /**
     * Indicates the risk for this particular subject (with their specific characteristics) divided by the risk of the population in general.  (Numbers greater than 1 = higher risk than the population, numbers less than 1 = lower risk.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setRelativeRisk($relativeRisk)
    {
        if (null === $relativeRisk) {
            return $this; 
        }
        if (is_scalar($relativeRisk)) {
            $relativeRisk = new FHIRDecimal($relativeRisk);
        }
        if (!($relativeRisk instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRRiskAssessmentPrediction::setRelativeRisk - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($relativeRisk)
            ));
        }
        $this->relativeRisk = $relativeRisk;
        return $this;
    }

    /**
     * Indicates the risk for this particular subject (with their specific characteristics) divided by the risk of the population in general.  (Numbers greater than 1 = higher risk than the population, numbers less than 1 = lower risk.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getRelativeRisk()
    {
        return $this->relativeRisk;
    }


    /**
     * Indicates the period of time or age range of the subject to which the specified probability applies.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setWhenPeriod(FHIRPeriod $whenPeriod = null)
    {
        if (null === $whenPeriod) {
            return $this; 
        }
        $this->whenPeriod = $whenPeriod;
        return $this;
    }

    /**
     * Indicates the period of time or age range of the subject to which the specified probability applies.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getWhenPeriod()
    {
        return $this->whenPeriod;
    }


    /**
     * Indicates the period of time or age range of the subject to which the specified probability applies.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setWhenRange(FHIRRange $whenRange = null)
    {
        if (null === $whenRange) {
            return $this; 
        }
        $this->whenRange = $whenRange;
        return $this;
    }

    /**
     * Indicates the period of time or age range of the subject to which the specified probability applies.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getWhenRange()
    {
        return $this->whenRange;
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
        if (null !== ($v = $this->getOutcome())) {
            $a['outcome'] = $v;
        }
        if (null !== ($v = $this->getProbabilityDecimal())) {
            $a['probabilityDecimal'] = $v;
        }
        if (null !== ($v = $this->getProbabilityRange())) {
            $a['probabilityRange'] = $v;
        }
        if (null !== ($v = $this->getQualitativeRisk())) {
            $a['qualitativeRisk'] = $v;
        }
        if (null !== ($v = $this->getRationale())) {
            $a['rationale'] = $v;
        }
        if (null !== ($v = $this->getRelativeRisk())) {
            $a['relativeRisk'] = $v;
        }
        if (null !== ($v = $this->getWhenPeriod())) {
            $a['whenPeriod'] = $v;
        }
        if (null !== ($v = $this->getWhenRange())) {
            $a['whenRange'] = $v;
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
            $sxe = new \SimpleXMLElement('<RiskAssessmentPrediction xmlns="http://hl7.org/fhir"></RiskAssessmentPrediction>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}