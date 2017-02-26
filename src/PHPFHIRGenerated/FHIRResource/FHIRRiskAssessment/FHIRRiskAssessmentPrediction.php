<?php namespace PHPFHIRGenerated\FHIRResource\FHIRRiskAssessment;

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
 *   Generated on Tue, Dec 6, 2016 12:22+1100 for FHIR v1.8.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * An assessment of the likely outcome(s) for a patient or other subject as well as the likelihood of each outcome.
 */
class FHIRRiskAssessmentPrediction extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * One of the potential outcomes for the patient (e.g. remission, death,  a particular condition).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $outcome = null;

    /**
     * How likely is the outcome (in the specified timeframe). (choose any one of probability*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $probabilityDecimal = null;

    /**
     * How likely is the outcome (in the specified timeframe). (choose any one of probability*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $probabilityRange = null;

    /**
     * How likely is the outcome (in the specified timeframe). (choose any one of probability*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $probabilityCodeableConcept = null;

    /**
     * Indicates the risk for this particular subject (with their specific characteristics) divided by the risk of the population in general.  (Numbers greater than 1 = higher risk than the population, numbers less than 1 = lower risk.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $relativeRisk = null;

    /**
     * Indicates the period of time or age range of the subject to which the specified probability applies. (choose any one of when*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $whenPeriod = null;

    /**
     * Indicates the period of time or age range of the subject to which the specified probability applies. (choose any one of when*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $whenRange = null;

    /**
     * Additional information explaining the basis for the prediction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $rationale = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'RiskAssessment.Prediction';

    /**
     * One of the potential outcomes for the patient (e.g. remission, death,  a particular condition).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * One of the potential outcomes for the patient (e.g. remission, death,  a particular condition).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $outcome
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * How likely is the outcome (in the specified timeframe). (choose any one of probability*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getProbabilityDecimal()
    {
        return $this->probabilityDecimal;
    }

    /**
     * How likely is the outcome (in the specified timeframe). (choose any one of probability*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $probabilityDecimal
     * @return $this
     */
    public function setProbabilityDecimal($probabilityDecimal)
    {
        $this->probabilityDecimal = $probabilityDecimal;
        return $this;
    }

    /**
     * How likely is the outcome (in the specified timeframe). (choose any one of probability*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getProbabilityRange()
    {
        return $this->probabilityRange;
    }

    /**
     * How likely is the outcome (in the specified timeframe). (choose any one of probability*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $probabilityRange
     * @return $this
     */
    public function setProbabilityRange($probabilityRange)
    {
        $this->probabilityRange = $probabilityRange;
        return $this;
    }

    /**
     * How likely is the outcome (in the specified timeframe). (choose any one of probability*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getProbabilityCodeableConcept()
    {
        return $this->probabilityCodeableConcept;
    }

    /**
     * How likely is the outcome (in the specified timeframe). (choose any one of probability*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $probabilityCodeableConcept
     * @return $this
     */
    public function setProbabilityCodeableConcept($probabilityCodeableConcept)
    {
        $this->probabilityCodeableConcept = $probabilityCodeableConcept;
        return $this;
    }

    /**
     * Indicates the risk for this particular subject (with their specific characteristics) divided by the risk of the population in general.  (Numbers greater than 1 = higher risk than the population, numbers less than 1 = lower risk.).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getRelativeRisk()
    {
        return $this->relativeRisk;
    }

    /**
     * Indicates the risk for this particular subject (with their specific characteristics) divided by the risk of the population in general.  (Numbers greater than 1 = higher risk than the population, numbers less than 1 = lower risk.).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $relativeRisk
     * @return $this
     */
    public function setRelativeRisk($relativeRisk)
    {
        $this->relativeRisk = $relativeRisk;
        return $this;
    }

    /**
     * Indicates the period of time or age range of the subject to which the specified probability applies. (choose any one of when*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getWhenPeriod()
    {
        return $this->whenPeriod;
    }

    /**
     * Indicates the period of time or age range of the subject to which the specified probability applies. (choose any one of when*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $whenPeriod
     * @return $this
     */
    public function setWhenPeriod($whenPeriod)
    {
        $this->whenPeriod = $whenPeriod;
        return $this;
    }

    /**
     * Indicates the period of time or age range of the subject to which the specified probability applies. (choose any one of when*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getWhenRange()
    {
        return $this->whenRange;
    }

    /**
     * Indicates the period of time or age range of the subject to which the specified probability applies. (choose any one of when*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $whenRange
     * @return $this
     */
    public function setWhenRange($whenRange)
    {
        $this->whenRange = $whenRange;
        return $this;
    }

    /**
     * Additional information explaining the basis for the prediction.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRationale()
    {
        return $this->rationale;
    }

    /**
     * Additional information explaining the basis for the prediction.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $rationale
     * @return $this
     */
    public function setRationale($rationale)
    {
        $this->rationale = $rationale;
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
        if (null !== $this->outcome) $json['outcome'] = json_encode($this->outcome);
        if (null !== $this->probabilityDecimal) $json['probabilityDecimal'] = json_encode($this->probabilityDecimal);
        if (null !== $this->probabilityRange) $json['probabilityRange'] = json_encode($this->probabilityRange);
        if (null !== $this->probabilityCodeableConcept) $json['probabilityCodeableConcept'] = json_encode($this->probabilityCodeableConcept);
        if (null !== $this->relativeRisk) $json['relativeRisk'] = json_encode($this->relativeRisk);
        if (null !== $this->whenPeriod) $json['whenPeriod'] = json_encode($this->whenPeriod);
        if (null !== $this->whenRange) $json['whenRange'] = json_encode($this->whenRange);
        if (null !== $this->rationale) $json['rationale'] = json_encode($this->rationale);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<RiskAssessmentPrediction xmlns="http://hl7.org/fhir"></RiskAssessmentPrediction>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->outcome) $this->outcome->xmlSerialize(true, $sxe->addChild('outcome'));
        if (null !== $this->probabilityDecimal) $this->probabilityDecimal->xmlSerialize(true, $sxe->addChild('probabilityDecimal'));
        if (null !== $this->probabilityRange) $this->probabilityRange->xmlSerialize(true, $sxe->addChild('probabilityRange'));
        if (null !== $this->probabilityCodeableConcept) $this->probabilityCodeableConcept->xmlSerialize(true, $sxe->addChild('probabilityCodeableConcept'));
        if (null !== $this->relativeRisk) $this->relativeRisk->xmlSerialize(true, $sxe->addChild('relativeRisk'));
        if (null !== $this->whenPeriod) $this->whenPeriod->xmlSerialize(true, $sxe->addChild('whenPeriod'));
        if (null !== $this->whenRange) $this->whenRange->xmlSerialize(true, $sxe->addChild('whenRange'));
        if (null !== $this->rationale) $this->rationale->xmlSerialize(true, $sxe->addChild('rationale'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}