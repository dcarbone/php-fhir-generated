<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory;

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

use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * Significant health conditions for a person related to the patient relevant in the context of care for the patient.
 *
 * Class FHIRFamilyMemberHistoryCondition
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory
 */
class FHIRFamilyMemberHistoryCondition extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'FamilyMemberHistory.Condition';

    /**
     * The actual condition specified. Could be a coded condition (like MI or Diabetes) or a less specific string like 'cancer' depending on how much is known about the condition and the capabilities of the creating system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * An area where general notes can be placed about this specific condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $onsetAge = null;

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $onsetPeriod = null;

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $onsetRange = null;

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $onsetString = null;

    /**
     * Indicates what happened as a result of this condition.  If the condition resulted in death, deceased date is captured on the relation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $outcome = null;

    /**
     * FHIRFamilyMemberHistoryCondition Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['onsetAge'])) {
                $this->setOnsetAge($data['onsetAge']);
            }
            if (isset($data['onsetPeriod'])) {
                $this->setOnsetPeriod($data['onsetPeriod']);
            }
            if (isset($data['onsetRange'])) {
                $this->setOnsetRange($data['onsetRange']);
            }
            if (isset($data['onsetString'])) {
                $this->setOnsetString($data['onsetString']);
            }
            if (isset($data['outcome'])) {
                $this->setOutcome($data['outcome']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The actual condition specified. Could be a coded condition (like MI or Diabetes) or a less specific string like 'cancer' depending on how much is known about the condition and the capabilities of the creating system.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * The actual condition specified. Could be a coded condition (like MI or Diabetes) or a less specific string like 'cancer' depending on how much is known about the condition and the capabilities of the creating system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * An area where general notes can be placed about this specific condition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note = $note;
        return $this;
    }

    /**
     * An area where general notes can be placed about this specific condition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     * @return $this
     */
    public function setOnsetAge(FHIRAge $onsetAge = null)
    {
        if (null === $onsetAge) {
            return $this; 
        }
        $this->onsetAge = $onsetAge;
        return $this;
    }

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getOnsetAge()
    {
        return $this->onsetAge;
    }


    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setOnsetPeriod(FHIRPeriod $onsetPeriod = null)
    {
        if (null === $onsetPeriod) {
            return $this; 
        }
        $this->onsetPeriod = $onsetPeriod;
        return $this;
    }

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getOnsetPeriod()
    {
        return $this->onsetPeriod;
    }


    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setOnsetRange(FHIRRange $onsetRange = null)
    {
        if (null === $onsetRange) {
            return $this; 
        }
        $this->onsetRange = $onsetRange;
        return $this;
    }

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getOnsetRange()
    {
        return $this->onsetRange;
    }


    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setOnsetString($onsetString)
    {
        if (null === $onsetString) {
            return $this; 
        }
        if (is_scalar($onsetString)) {
            $onsetString = new FHIRString($onsetString);
        }
        if (!($onsetString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRFamilyMemberHistoryCondition::setOnsetString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($onsetString)
            ));
        }
        $this->onsetString = $onsetString;
        return $this;
    }

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded.  For conditions with multiple occurrences, this describes the first known occurrence.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getOnsetString()
    {
        return $this->onsetString;
    }


    /**
     * Indicates what happened as a result of this condition.  If the condition resulted in death, deceased date is captured on the relation.
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
     * Indicates what happened as a result of this condition.  If the condition resulted in death, deceased date is captured on the relation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome()
    {
        return $this->outcome;
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
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getOnsetAge())) {
            $a['onsetAge'] = $v;
        }
        if (null !== ($v = $this->getOnsetPeriod())) {
            $a['onsetPeriod'] = $v;
        }
        if (null !== ($v = $this->getOnsetRange())) {
            $a['onsetRange'] = $v;
        }
        if (null !== ($v = $this->getOnsetString())) {
            $a['onsetString'] = $v;
        }
        if (null !== ($v = $this->getOutcome())) {
            $a['outcome'] = $v;
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
            $sxe = new \SimpleXMLElement('<FamilyMemberHistoryCondition xmlns="http://hl7.org/fhir"></FamilyMemberHistoryCondition>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}