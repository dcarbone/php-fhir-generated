<?php namespace PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire;

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
 * A structured set of questions intended to guide the collection of answers. The questions are ordered and grouped into coherent subsets, corresponding to the structure of the grouping of the underlying questions.
 */
class FHIRQuestionnaireQuestion extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * An identifier that is unique within the questionnaire allowing linkage to the equivalent group in a [[[QuestionnaireResponse]]] resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $linkId = null;

    /**
     * Identifies a how this question is known in a particular terminology such as LOINC.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $concept = array();

    /**
     * The actual question as shown to the user to prompt them for an answer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * The expected format of the answer, e.g. the type of input (string, integer) or whether a (multiple) choice is expected.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnswerFormat
     */
    public $type = null;

    /**
     * If true, indicates that the question must be answered and have required groups within it also present.  If false, the question and any contained groups may be skipped when answering the questionnaire.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $required = null;

    /**
     * If true, the question may have more than one answer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $repeats = null;

    /**
     * Reference to a value set containing a list of codes representing permitted answers for the question.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $options = null;

    /**
     * For a "choice" question, identifies one of the permitted answers for the question.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $option = array();

    /**
     * Nested group, containing nested question for this question. The order of groups within the question is relevant.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireGroup[]
     */
    public $group = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Questionnaire.Question';

    /**
     * An identifier that is unique within the questionnaire allowing linkage to the equivalent group in a [[[QuestionnaireResponse]]] resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * An identifier that is unique within the questionnaire allowing linkage to the equivalent group in a [[[QuestionnaireResponse]]] resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $linkId
     * @return $this
     */
    public function setLinkId($linkId)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Identifies a how this question is known in a particular terminology such as LOINC.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * Identifies a how this question is known in a particular terminology such as LOINC.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding[] $concept
     * @return $this
     */
    public function addConcept($concept)
    {
        $this->concept[] = $concept;
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
     * The expected format of the answer, e.g. the type of input (string, integer) or whether a (multiple) choice is expected.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnswerFormat
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The expected format of the answer, e.g. the type of input (string, integer) or whether a (multiple) choice is expected.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnswerFormat $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * If true, indicates that the question must be answered and have required groups within it also present.  If false, the question and any contained groups may be skipped when answering the questionnaire.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * If true, indicates that the question must be answered and have required groups within it also present.  If false, the question and any contained groups may be skipped when answering the questionnaire.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $required
     * @return $this
     */
    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }

    /**
     * If true, the question may have more than one answer.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getRepeats()
    {
        return $this->repeats;
    }

    /**
     * If true, the question may have more than one answer.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $repeats
     * @return $this
     */
    public function setRepeats($repeats)
    {
        $this->repeats = $repeats;
        return $this;
    }

    /**
     * Reference to a value set containing a list of codes representing permitted answers for the question.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Reference to a value set containing a list of codes representing permitted answers for the question.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $options
     * @return $this
     */
    public function setOptions($options)
    {
        $this->options = $options;
        return $this;
    }

    /**
     * For a "choice" question, identifies one of the permitted answers for the question.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * For a "choice" question, identifies one of the permitted answers for the question.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding[] $option
     * @return $this
     */
    public function addOption($option)
    {
        $this->option[] = $option;
        return $this;
    }

    /**
     * Nested group, containing nested question for this question. The order of groups within the question is relevant.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireGroup[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Nested group, containing nested question for this question. The order of groups within the question is relevant.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireGroup[] $group
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
        if (null !== $this->linkId) $json['linkId'] = $this->linkId->jsonSerialize();
        if (0 < count($this->concept)) {
            $json['concept'] = array();
            foreach($this->concept as $concept) {
                $json['concept'][] = $concept->jsonSerialize();
            }
        }
        if (null !== $this->text) $json['text'] = $this->text->jsonSerialize();
        if (null !== $this->type) $json['type'] = $this->type->jsonSerialize();
        if (null !== $this->required) $json['required'] = $this->required->jsonSerialize();
        if (null !== $this->repeats) $json['repeats'] = $this->repeats->jsonSerialize();
        if (null !== $this->options) $json['options'] = $this->options->jsonSerialize();
        if (0 < count($this->option)) {
            $json['option'] = array();
            foreach($this->option as $option) {
                $json['option'][] = $option->jsonSerialize();
            }
        }
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<QuestionnaireQuestion xmlns="http://hl7.org/fhir"></QuestionnaireQuestion>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->linkId) $this->linkId->xmlSerialize(true, $sxe->addChild('linkId'));
        if (0 < count($this->concept)) {
            foreach($this->concept as $concept) {
                $concept->xmlSerialize(true, $sxe->addChild('concept'));
            }
        }
        if (null !== $this->text) $this->text->xmlSerialize(true, $sxe->addChild('text'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->required) $this->required->xmlSerialize(true, $sxe->addChild('required'));
        if (null !== $this->repeats) $this->repeats->xmlSerialize(true, $sxe->addChild('repeats'));
        if (null !== $this->options) $this->options->xmlSerialize(true, $sxe->addChild('options'));
        if (0 < count($this->option)) {
            foreach($this->option as $option) {
                $option->xmlSerialize(true, $sxe->addChild('option'));
            }
        }
        if (0 < count($this->group)) {
            foreach($this->group as $group) {
                $group->xmlSerialize(true, $sxe->addChild('group'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}