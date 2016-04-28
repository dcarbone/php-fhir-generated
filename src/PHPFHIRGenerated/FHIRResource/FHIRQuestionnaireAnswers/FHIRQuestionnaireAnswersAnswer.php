<?php namespace PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireAnswers;

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
 * A structured set of questions and their answers. The questions are ordered and grouped into coherent subsets, corresponding to the structure of the grouping of the underlying questions.
 */
class FHIRQuestionnaireAnswersAnswer extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $valueBoolean = null;

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $valueDecimal = null;

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $valueInteger = null;

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $valueDate = null;

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $valueDateTime = null;

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $valueInstant = null;

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $valueTime = null;

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $valueUri = null;

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $valueAttachment = null;

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $valueCoding = null;

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @var \
     */
    public $valueMeasuredQuantity = null;

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $valueReference = null;

    /**
     * Nested group, containing nested question for this question. The order of groups within the question is relevant.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireAnswers\FHIRQuestionnaireAnswersGroup[]
     */
    public $group = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'QuestionnaireAnswers.Answer';

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $valueBoolean
     * @return $this
     */
    public function setValueBoolean($valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $valueDecimal
     * @return $this
     */
    public function setValueDecimal($valueDecimal)
    {
        $this->valueDecimal = $valueDecimal;
        return $this;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $valueInteger
     * @return $this
     */
    public function setValueInteger($valueInteger)
    {
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getValueDate()
    {
        return $this->valueDate;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $valueDate
     * @return $this
     */
    public function setValueDate($valueDate)
    {
        $this->valueDate = $valueDate;
        return $this;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $valueDateTime
     * @return $this
     */
    public function setValueDateTime($valueDateTime)
    {
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getValueInstant()
    {
        return $this->valueInstant;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $valueInstant
     * @return $this
     */
    public function setValueInstant($valueInstant)
    {
        $this->valueInstant = $valueInstant;
        return $this;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $valueTime
     * @return $this
     */
    public function setValueTime($valueTime)
    {
        $this->valueTime = $valueTime;
        return $this;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $valueString
     * @return $this
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getValueUri()
    {
        return $this->valueUri;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $valueUri
     * @return $this
     */
    public function setValueUri($valueUri)
    {
        $this->valueUri = $valueUri;
        return $this;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $valueAttachment
     * @return $this
     */
    public function setValueAttachment($valueAttachment)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $valueCoding
     * @return $this
     */
    public function setValueCoding($valueCoding)
    {
        $this->valueCoding = $valueCoding;
        return $this;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @return \
     */
    public function getValueMeasuredQuantity()
    {
        return $this->valueMeasuredQuantity;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @param \ $valueMeasuredQuantity
     * @return $this
     */
    public function setValueMeasuredQuantity($valueMeasuredQuantity)
    {
        $this->valueMeasuredQuantity = $valueMeasuredQuantity;
        return $this;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * The answer (or one of the answers) provided by the respondant to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $valueReference
     * @return $this
     */
    public function setValueReference($valueReference)
    {
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * Nested group, containing nested question for this question. The order of groups within the question is relevant.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireAnswers\FHIRQuestionnaireAnswersGroup[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Nested group, containing nested question for this question. The order of groups within the question is relevant.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireAnswers\FHIRQuestionnaireAnswersGroup[] $group
     * @return $this
     */
    public function addGroup($group)
    {
        $this->group[] = $group;
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
        if (null !== $this->valueBoolean) $json['valueBoolean'] = $this->valueBoolean->jsonSerialize();
        if (null !== $this->valueDecimal) $json['valueDecimal'] = $this->valueDecimal->jsonSerialize();
        if (null !== $this->valueInteger) $json['valueInteger'] = $this->valueInteger->jsonSerialize();
        if (null !== $this->valueDate) $json['valueDate'] = $this->valueDate->jsonSerialize();
        if (null !== $this->valueDateTime) $json['valueDateTime'] = $this->valueDateTime->jsonSerialize();
        if (null !== $this->valueInstant) $json['valueInstant'] = $this->valueInstant->jsonSerialize();
        if (null !== $this->valueTime) $json['valueTime'] = $this->valueTime->jsonSerialize();
        if (null !== $this->valueString) $json['valueString'] = $this->valueString->jsonSerialize();
        if (null !== $this->valueUri) $json['valueUri'] = $this->valueUri->jsonSerialize();
        if (null !== $this->valueAttachment) $json['valueAttachment'] = $this->valueAttachment->jsonSerialize();
        if (null !== $this->valueCoding) $json['valueCoding'] = $this->valueCoding->jsonSerialize();
        if (null !== $this->valueMeasuredQuantity) $json['valueMeasuredQuantity'] = $this->valueMeasuredQuantity->jsonSerialize();
        if (null !== $this->valueReference) $json['valueReference'] = $this->valueReference->jsonSerialize();
        if (0 < count($this->group)) {
            $json['group'] = array();
            foreach($this->group as $group) {
                $json['group'][] = $group->jsonSerialize();
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<QuestionnaireAnswersAnswer xmlns="http://hl7.org/fhir"></QuestionnaireAnswersAnswer>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->valueBoolean) $this->valueBoolean->xmlSerialize(true, $sxe->addChild('valueBoolean'));
        if (null !== $this->valueDecimal) $this->valueDecimal->xmlSerialize(true, $sxe->addChild('valueDecimal'));
        if (null !== $this->valueInteger) $this->valueInteger->xmlSerialize(true, $sxe->addChild('valueInteger'));
        if (null !== $this->valueDate) $this->valueDate->xmlSerialize(true, $sxe->addChild('valueDate'));
        if (null !== $this->valueDateTime) $this->valueDateTime->xmlSerialize(true, $sxe->addChild('valueDateTime'));
        if (null !== $this->valueInstant) $this->valueInstant->xmlSerialize(true, $sxe->addChild('valueInstant'));
        if (null !== $this->valueTime) $this->valueTime->xmlSerialize(true, $sxe->addChild('valueTime'));
        if (null !== $this->valueString) $this->valueString->xmlSerialize(true, $sxe->addChild('valueString'));
        if (null !== $this->valueUri) $this->valueUri->xmlSerialize(true, $sxe->addChild('valueUri'));
        if (null !== $this->valueAttachment) $this->valueAttachment->xmlSerialize(true, $sxe->addChild('valueAttachment'));
        if (null !== $this->valueCoding) $this->valueCoding->xmlSerialize(true, $sxe->addChild('valueCoding'));
        if (null !== $this->valueMeasuredQuantity) $this->valueMeasuredQuantity->xmlSerialize(true, $sxe->addChild('valueMeasuredQuantity'));
        if (null !== $this->valueReference) $this->valueReference->xmlSerialize(true, $sxe->addChild('valueReference'));
        if (0 < count($this->group)) {
            foreach($this->group as $group) {
                $group->xmlSerialize(true, $sxe->addChild('group'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}