<?php namespace PHPFHIRGenerated\FHIRResource\FHIRGoal;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * Describes the intended objective(s) for a patient, group or organization care, for example, weight loss, restoring an activity of daily living, obtaining herd immunity via immunization, meeting a process improvement objective, etc.
 */
class FHIRGoalTarget extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The parameter whose value is being tracked, e.g. body weight, blood pressure, or hemoglobin A1c level.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $measure = null;

    /**
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $detailQuantity = null;

    /**
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $detailRange = null;

    /**
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $detailCodeableConcept = null;

    /**
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of due*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $dueDate = null;

    /**
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of due*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $dueDuration = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Goal.Target';

    /**
     * The parameter whose value is being tracked, e.g. body weight, blood pressure, or hemoglobin A1c level.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMeasure()
    {
        return $this->measure;
    }

    /**
     * The parameter whose value is being tracked, e.g. body weight, blood pressure, or hemoglobin A1c level.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $measure
     * @return $this
     */
    public function setMeasure($measure)
    {
        $this->measure = $measure;
        return $this;
    }

    /**
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDetailQuantity()
    {
        return $this->detailQuantity;
    }

    /**
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $detailQuantity
     * @return $this
     */
    public function setDetailQuantity($detailQuantity)
    {
        $this->detailQuantity = $detailQuantity;
        return $this;
    }

    /**
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getDetailRange()
    {
        return $this->detailRange;
    }

    /**
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $detailRange
     * @return $this
     */
    public function setDetailRange($detailRange)
    {
        $this->detailRange = $detailRange;
        return $this;
    }

    /**
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDetailCodeableConcept()
    {
        return $this->detailCodeableConcept;
    }

    /**
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $detailCodeableConcept
     * @return $this
     */
    public function setDetailCodeableConcept($detailCodeableConcept)
    {
        $this->detailCodeableConcept = $detailCodeableConcept;
        return $this;
    }

    /**
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of due*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of due*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $dueDate
     * @return $this
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of due*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getDueDuration()
    {
        return $this->dueDuration;
    }

    /**
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of due*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $dueDuration
     * @return $this
     */
    public function setDueDuration($dueDuration)
    {
        $this->dueDuration = $dueDuration;
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
        if (null !== $this->measure) $json['measure'] = json_encode($this->measure);
        if (null !== $this->detailQuantity) $json['detailQuantity'] = json_encode($this->detailQuantity);
        if (null !== $this->detailRange) $json['detailRange'] = json_encode($this->detailRange);
        if (null !== $this->detailCodeableConcept) $json['detailCodeableConcept'] = json_encode($this->detailCodeableConcept);
        if (null !== $this->dueDate) $json['dueDate'] = json_encode($this->dueDate);
        if (null !== $this->dueDuration) $json['dueDuration'] = json_encode($this->dueDuration);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<GoalTarget xmlns="http://hl7.org/fhir"></GoalTarget>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->measure) $this->measure->xmlSerialize(true, $sxe->addChild('measure'));
        if (null !== $this->detailQuantity) $this->detailQuantity->xmlSerialize(true, $sxe->addChild('detailQuantity'));
        if (null !== $this->detailRange) $this->detailRange->xmlSerialize(true, $sxe->addChild('detailRange'));
        if (null !== $this->detailCodeableConcept) $this->detailCodeableConcept->xmlSerialize(true, $sxe->addChild('detailCodeableConcept'));
        if (null !== $this->dueDate) $this->dueDate->xmlSerialize(true, $sxe->addChild('dueDate'));
        if (null !== $this->dueDuration) $this->dueDuration->xmlSerialize(true, $sxe->addChild('dueDuration'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}