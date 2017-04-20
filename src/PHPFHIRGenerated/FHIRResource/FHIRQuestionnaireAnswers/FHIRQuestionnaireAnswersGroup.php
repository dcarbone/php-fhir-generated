<?php namespace PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireAnswers;

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
 * A structured set of questions and their answers. The questions are ordered and grouped into coherent subsets, corresponding to the structure of the grouping of the underlying questions.
 */
class FHIRQuestionnaireAnswersGroup extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Identifies the group from the Questionnaire that corresponds to this group in the QuestionnaireAnswers resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $linkId = null;

    /**
     * Text that is displayed above the contents of the group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * Additional text for the group, used for display purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * More specific subject this section's answers are about, details the subject given in QuestionnaireAnswers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * A sub-group within a group. The ordering of groups within this group is relevant.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireAnswers\FHIRQuestionnaireAnswersGroup[]
     */
    public $group = array();

    /**
     * Set of questions within this group. The order of questions within the group is relevant.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireAnswers\FHIRQuestionnaireAnswersQuestion[]
     */
    public $question = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'QuestionnaireAnswers.Group';

    /**
     * Identifies the group from the Questionnaire that corresponds to this group in the QuestionnaireAnswers resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Identifies the group from the Questionnaire that corresponds to this group in the QuestionnaireAnswers resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $linkId
     * @return $this
     */
    public function setLinkId($linkId)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Text that is displayed above the contents of the group.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Text that is displayed above the contents of the group.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Additional text for the group, used for display purposes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Additional text for the group, used for display purposes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * More specific subject this section's answers are about, details the subject given in QuestionnaireAnswers.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * More specific subject this section's answers are about, details the subject given in QuestionnaireAnswers.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * A sub-group within a group. The ordering of groups within this group is relevant.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireAnswers\FHIRQuestionnaireAnswersGroup[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * A sub-group within a group. The ordering of groups within this group is relevant.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireAnswers\FHIRQuestionnaireAnswersGroup $group
     * @return $this
     */
    public function addGroup($group)
    {
        $this->group[] = $group;
        return $this;
    }

    /**
     * Set of questions within this group. The order of questions within the group is relevant.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireAnswers\FHIRQuestionnaireAnswersQuestion[]
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set of questions within this group. The order of questions within the group is relevant.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireAnswers\FHIRQuestionnaireAnswersQuestion $question
     * @return $this
     */
    public function addQuestion($question)
    {
        $this->question[] = $question;
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
        if (null !== $this->title) $json['title'] = json_encode($this->title);
        if (null !== $this->text) $json['text'] = json_encode($this->text);
        if (null !== $this->subject) $json['subject'] = json_encode($this->subject);
        if (0 < count($this->group)) {
            $json['group'] = [];
            foreach($this->group as $group) {
                $json['group'][] = json_encode($group);
            }
        }
        if (0 < count($this->question)) {
            $json['question'] = [];
            foreach($this->question as $question) {
                $json['question'][] = json_encode($question);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<QuestionnaireAnswersGroup xmlns="http://hl7.org/fhir"></QuestionnaireAnswersGroup>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->linkId) $this->linkId->xmlSerialize(true, $sxe->addChild('linkId'));
        if (null !== $this->title) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (null !== $this->text) $this->text->xmlSerialize(true, $sxe->addChild('text'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (0 < count($this->group)) {
            foreach($this->group as $group) {
                $group->xmlSerialize(true, $sxe->addChild('group'));
            }
        }
        if (0 < count($this->question)) {
            foreach($this->question as $question) {
                $question->xmlSerialize(true, $sxe->addChild('question'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}