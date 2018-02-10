<?php namespace PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A structured set of questions and their answers. The Questionnaire may contain questions, answers or both. The questions are ordered and grouped into coherent subsets, corresponding to the structure of the grouping of the underlying questions.
 */
class FHIRQuestionnaireGroup extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Structured name for a section of a predefined list of questions this questionnaire is responding to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $name = null;

    /**
     * Text that is displayed above the contents of the group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $header = null;

    /**
     * Additional text for the group, used for display purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * More specific subject this section's answers are about, details the subject given in Questionnaire.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $subject = null;

    /**
     * A sub-group within a group. The ordering of groups within this group is relevant.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireGroup[]
     */
    public $group = array();

    /**
     * Set of questions within this group. The order of questions within the group is relevant.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireQuestion[]
     */
    public $question = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Questionnaire.Group';

    /**
     * Structured name for a section of a predefined list of questions this questionnaire is responding to.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Structured name for a section of a predefined list of questions this questionnaire is responding to.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Text that is displayed above the contents of the group.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Text that is displayed above the contents of the group.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $header
     * @return $this
     */
    public function setHeader($header)
    {
        $this->header = $header;
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
     * More specific subject this section's answers are about, details the subject given in Questionnaire.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * More specific subject this section's answers are about, details the subject given in Questionnaire.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * A sub-group within a group. The ordering of groups within this group is relevant.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireGroup[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * A sub-group within a group. The ordering of groups within this group is relevant.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireGroup $group
     * @return $this
     */
    public function addGroup($group)
    {
        $this->group[] = $group;
        return $this;
    }

    /**
     * Set of questions within this group. The order of questions within the group is relevant.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireQuestion[]
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set of questions within this group. The order of questions within the group is relevant.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireQuestion $question
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
        if (null !== $this->name) $json['name'] = $this->name;
        if (null !== $this->header) $json['header'] = $this->header;
        if (null !== $this->text) $json['text'] = $this->text;
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (0 < count($this->group)) {
            $json['group'] = [];
            foreach($this->group as $group) {
                $json['group'][] = $group;
            }
        }
        if (0 < count($this->question)) {
            $json['question'] = [];
            foreach($this->question as $question) {
                $json['question'][] = $question;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<QuestionnaireGroup xmlns="http://hl7.org/fhir"></QuestionnaireGroup>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->header) $this->header->xmlSerialize(true, $sxe->addChild('header'));
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