<?php namespace PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireAnswers;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A structured set of questions and their answers. The questions are ordered and grouped into coherent subsets, corresponding to the structure of the grouping of the underlying questions.
 */
class FHIRQuestionnaireAnswersQuestion extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Identifies the question from the Questionnaire that corresponds to this question in the QuestionnaireAnswers resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $linkId = null;

    /**
     * The actual question as shown to the user to prompt them for an answer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * The respondent's answer(s) to the question.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireAnswers\FHIRQuestionnaireAnswersAnswer[]
     */
    public $answer = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'QuestionnaireAnswers.Question';

    /**
     * Identifies the question from the Questionnaire that corresponds to this question in the QuestionnaireAnswers resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Identifies the question from the Questionnaire that corresponds to this question in the QuestionnaireAnswers resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $linkId
     * @return $this
     */
    public function setLinkId($linkId)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * The actual question as shown to the user to prompt them for an answer.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * The actual question as shown to the user to prompt them for an answer.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * The respondent's answer(s) to the question.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireAnswers\FHIRQuestionnaireAnswersAnswer[]
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * The respondent's answer(s) to the question.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireAnswers\FHIRQuestionnaireAnswersAnswer $answer
     * @return $this
     */
    public function addAnswer($answer)
    {
        $this->answer[] = $answer;
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
        if (null !== $this->linkId) $json['linkId'] = json_encode($this->linkId);
        if (null !== $this->text) $json['text'] = json_encode($this->text);
        if (0 < count($this->answer)) {
            $json['answer'] = [];
            foreach($this->answer as $answer) {
                $json['answer'][] = json_encode($answer);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<QuestionnaireAnswersQuestion xmlns="http://hl7.org/fhir"></QuestionnaireAnswersQuestion>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->linkId) $this->linkId->xmlSerialize(true, $sxe->addChild('linkId'));
        if (null !== $this->text) $this->text->xmlSerialize(true, $sxe->addChild('text'));
        if (0 < count($this->answer)) {
            foreach($this->answer as $answer) {
                $answer->xmlSerialize(true, $sxe->addChild('answer'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}