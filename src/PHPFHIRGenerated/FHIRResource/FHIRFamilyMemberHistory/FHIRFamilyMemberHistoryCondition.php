<?php namespace PHPFHIRGenerated\FHIRResource\FHIRFamilyMemberHistory;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\JsonSerializable;

/**
 * Significant health events and conditions for a person related to the patient relevant in the context of care for the patient.
 */
class FHIRFamilyMemberHistoryCondition extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * The actual condition specified. Could be a coded condition (like MI or Diabetes) or a less specific string like 'cancer' depending on how much is known about the condition and the capabilities of the creating system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Indicates what happened as a result of this condition.  If the condition resulted in death, deceased date is captured on the relation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $outcome = null;

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     * @var \PHPFHIRGenerated\FHIRAge
     */
    public $onsetQuantity = null;

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $onsetRange = null;

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $onsetPeriod = null;

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $onsetString = null;

    /**
     * An area where general notes can be placed about this specific condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'FamilyMemberHistory.Condition';

    /**
     * The actual condition specified. Could be a coded condition (like MI or Diabetes) or a less specific string like 'cancer' depending on how much is known about the condition and the capabilities of the creating system.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * The actual condition specified. Could be a coded condition (like MI or Diabetes) or a less specific string like 'cancer' depending on how much is known about the condition and the capabilities of the creating system.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Indicates what happened as a result of this condition.  If the condition resulted in death, deceased date is captured on the relation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Indicates what happened as a result of this condition.  If the condition resulted in death, deceased date is captured on the relation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $outcome
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     * @return \PHPFHIRGenerated\FHIRAge
     */
    public function getOnsetQuantity()
    {
        return $this->onsetQuantity;
    }

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     * @param \PHPFHIRGenerated\FHIRAge $onsetQuantity
     * @return $this
     */
    public function setOnsetQuantity($onsetQuantity)
    {
        $this->onsetQuantity = $onsetQuantity;
        return $this;
    }

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getOnsetRange()
    {
        return $this->onsetRange;
    }

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $onsetRange
     * @return $this
     */
    public function setOnsetRange($onsetRange)
    {
        $this->onsetRange = $onsetRange;
        return $this;
    }

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getOnsetPeriod()
    {
        return $this->onsetPeriod;
    }

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $onsetPeriod
     * @return $this
     */
    public function setOnsetPeriod($onsetPeriod)
    {
        $this->onsetPeriod = $onsetPeriod;
        return $this;
    }

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getOnsetString()
    {
        return $this->onsetString;
    }

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $onsetString
     * @return $this
     */
    public function setOnsetString($onsetString)
    {
        $this->onsetString = $onsetString;
        return $this;
    }

    /**
     * An area where general notes can be placed about this specific condition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * An area where general notes can be placed about this specific condition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;
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
        if (null !== $this->code) $json['code'] = $this->code->jsonSerialize();
        if (null !== $this->outcome) $json['outcome'] = $this->outcome->jsonSerialize();
        if (null !== $this->onsetQuantity) $json['onsetQuantity'] = $this->onsetQuantity->jsonSerialize();
        if (null !== $this->onsetRange) $json['onsetRange'] = $this->onsetRange->jsonSerialize();
        if (null !== $this->onsetPeriod) $json['onsetPeriod'] = $this->onsetPeriod->jsonSerialize();
        if (null !== $this->onsetString) $json['onsetString'] = $this->onsetString->jsonSerialize();
        if (null !== $this->note) $json['note'] = $this->note->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<FamilyMemberHistoryCondition xmlns="http://hl7.org/fhir"></FamilyMemberHistoryCondition>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->outcome) $this->outcome->xmlSerialize(true, $sxe->addChild('outcome'));
        if (null !== $this->onsetQuantity) $this->onsetQuantity->xmlSerialize(true, $sxe->addChild('onsetQuantity'));
        if (null !== $this->onsetRange) $this->onsetRange->xmlSerialize(true, $sxe->addChild('onsetRange'));
        if (null !== $this->onsetPeriod) $this->onsetPeriod->xmlSerialize(true, $sxe->addChild('onsetPeriod'));
        if (null !== $this->onsetString) $this->onsetString->xmlSerialize(true, $sxe->addChild('onsetString'));
        if (null !== $this->note) $this->note->xmlSerialize(true, $sxe->addChild('note'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}