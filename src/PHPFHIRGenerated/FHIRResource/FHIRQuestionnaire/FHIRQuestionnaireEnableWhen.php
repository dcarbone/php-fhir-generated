<?php namespace PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire;

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
 * A structured set of questions intended to guide the collection of answers from end-users. Questionnaires provide detailed control over order, presentation, phraseology and grouping to allow coherent, consistent data collection.
 */
class FHIRQuestionnaireEnableWhen extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The linkId for the question whose answer (or lack of answer) governs whether this item is enabled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $question = null;

    /**
     * An indication that this item should be enabled only if the specified question is answered (hasAnswer=true) or not answered (hasAnswer=false).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $hasAnswer = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $answerBoolean = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $answerDecimal = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $answerInteger = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $answerDate = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $answerDateTime = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $answerTime = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $answerString = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $answerUri = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $answerAttachment = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $answerCoding = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $answerQuantity = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $answerReference = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Questionnaire.EnableWhen';

    /**
     * The linkId for the question whose answer (or lack of answer) governs whether this item is enabled.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * The linkId for the question whose answer (or lack of answer) governs whether this item is enabled.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $question
     * @return $this
     */
    public function setQuestion($question)
    {
        $this->question = $question;
        return $this;
    }

    /**
     * An indication that this item should be enabled only if the specified question is answered (hasAnswer=true) or not answered (hasAnswer=false).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getHasAnswer()
    {
        return $this->hasAnswer;
    }

    /**
     * An indication that this item should be enabled only if the specified question is answered (hasAnswer=true) or not answered (hasAnswer=false).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $hasAnswer
     * @return $this
     */
    public function setHasAnswer($hasAnswer)
    {
        $this->hasAnswer = $hasAnswer;
        return $this;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAnswerBoolean()
    {
        return $this->answerBoolean;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $answerBoolean
     * @return $this
     */
    public function setAnswerBoolean($answerBoolean)
    {
        $this->answerBoolean = $answerBoolean;
        return $this;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getAnswerDecimal()
    {
        return $this->answerDecimal;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $answerDecimal
     * @return $this
     */
    public function setAnswerDecimal($answerDecimal)
    {
        $this->answerDecimal = $answerDecimal;
        return $this;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getAnswerInteger()
    {
        return $this->answerInteger;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $answerInteger
     * @return $this
     */
    public function setAnswerInteger($answerInteger)
    {
        $this->answerInteger = $answerInteger;
        return $this;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getAnswerDate()
    {
        return $this->answerDate;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $answerDate
     * @return $this
     */
    public function setAnswerDate($answerDate)
    {
        $this->answerDate = $answerDate;
        return $this;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAnswerDateTime()
    {
        return $this->answerDateTime;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $answerDateTime
     * @return $this
     */
    public function setAnswerDateTime($answerDateTime)
    {
        $this->answerDateTime = $answerDateTime;
        return $this;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getAnswerTime()
    {
        return $this->answerTime;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $answerTime
     * @return $this
     */
    public function setAnswerTime($answerTime)
    {
        $this->answerTime = $answerTime;
        return $this;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAnswerString()
    {
        return $this->answerString;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $answerString
     * @return $this
     */
    public function setAnswerString($answerString)
    {
        $this->answerString = $answerString;
        return $this;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getAnswerUri()
    {
        return $this->answerUri;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $answerUri
     * @return $this
     */
    public function setAnswerUri($answerUri)
    {
        $this->answerUri = $answerUri;
        return $this;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getAnswerAttachment()
    {
        return $this->answerAttachment;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $answerAttachment
     * @return $this
     */
    public function setAnswerAttachment($answerAttachment)
    {
        $this->answerAttachment = $answerAttachment;
        return $this;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getAnswerCoding()
    {
        return $this->answerCoding;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $answerCoding
     * @return $this
     */
    public function setAnswerCoding($answerCoding)
    {
        $this->answerCoding = $answerCoding;
        return $this;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getAnswerQuantity()
    {
        return $this->answerQuantity;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $answerQuantity
     * @return $this
     */
    public function setAnswerQuantity($answerQuantity)
    {
        $this->answerQuantity = $answerQuantity;
        return $this;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAnswerReference()
    {
        return $this->answerReference;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $answerReference
     * @return $this
     */
    public function setAnswerReference($answerReference)
    {
        $this->answerReference = $answerReference;
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
        if (null !== $this->question) $json['question'] = json_encode($this->question);
        if (null !== $this->hasAnswer) $json['hasAnswer'] = json_encode($this->hasAnswer);
        if (null !== $this->answerBoolean) $json['answerBoolean'] = json_encode($this->answerBoolean);
        if (null !== $this->answerDecimal) $json['answerDecimal'] = json_encode($this->answerDecimal);
        if (null !== $this->answerInteger) $json['answerInteger'] = json_encode($this->answerInteger);
        if (null !== $this->answerDate) $json['answerDate'] = json_encode($this->answerDate);
        if (null !== $this->answerDateTime) $json['answerDateTime'] = json_encode($this->answerDateTime);
        if (null !== $this->answerTime) $json['answerTime'] = json_encode($this->answerTime);
        if (null !== $this->answerString) $json['answerString'] = json_encode($this->answerString);
        if (null !== $this->answerUri) $json['answerUri'] = json_encode($this->answerUri);
        if (null !== $this->answerAttachment) $json['answerAttachment'] = json_encode($this->answerAttachment);
        if (null !== $this->answerCoding) $json['answerCoding'] = json_encode($this->answerCoding);
        if (null !== $this->answerQuantity) $json['answerQuantity'] = json_encode($this->answerQuantity);
        if (null !== $this->answerReference) $json['answerReference'] = json_encode($this->answerReference);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<QuestionnaireEnableWhen xmlns="http://hl7.org/fhir"></QuestionnaireEnableWhen>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->question) $this->question->xmlSerialize(true, $sxe->addChild('question'));
        if (null !== $this->hasAnswer) $this->hasAnswer->xmlSerialize(true, $sxe->addChild('hasAnswer'));
        if (null !== $this->answerBoolean) $this->answerBoolean->xmlSerialize(true, $sxe->addChild('answerBoolean'));
        if (null !== $this->answerDecimal) $this->answerDecimal->xmlSerialize(true, $sxe->addChild('answerDecimal'));
        if (null !== $this->answerInteger) $this->answerInteger->xmlSerialize(true, $sxe->addChild('answerInteger'));
        if (null !== $this->answerDate) $this->answerDate->xmlSerialize(true, $sxe->addChild('answerDate'));
        if (null !== $this->answerDateTime) $this->answerDateTime->xmlSerialize(true, $sxe->addChild('answerDateTime'));
        if (null !== $this->answerTime) $this->answerTime->xmlSerialize(true, $sxe->addChild('answerTime'));
        if (null !== $this->answerString) $this->answerString->xmlSerialize(true, $sxe->addChild('answerString'));
        if (null !== $this->answerUri) $this->answerUri->xmlSerialize(true, $sxe->addChild('answerUri'));
        if (null !== $this->answerAttachment) $this->answerAttachment->xmlSerialize(true, $sxe->addChild('answerAttachment'));
        if (null !== $this->answerCoding) $this->answerCoding->xmlSerialize(true, $sxe->addChild('answerCoding'));
        if (null !== $this->answerQuantity) $this->answerQuantity->xmlSerialize(true, $sxe->addChild('answerQuantity'));
        if (null !== $this->answerReference) $this->answerReference->xmlSerialize(true, $sxe->addChild('answerReference'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}