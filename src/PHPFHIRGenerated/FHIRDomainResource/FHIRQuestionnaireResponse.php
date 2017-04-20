<?php namespace PHPFHIRGenerated\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A structured set of questions and their answers. The questions are ordered and grouped into coherent subsets, corresponding to the structure of the grouping of the questionnaire being responded to.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRQuestionnaireResponse extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A business identifier assigned to a particular completed (or partially completed) questionnaire.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The order, proposal or plan that is fulfilled in whole or in part by this QuestionnaireResponse.  For example, a ProcedureRequest seeking an intake assessment or a decision support recommendation to assess for post-partum depression.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $basedOn = array();

    /**
     * A procedure or observation that this questionnaire was performed as part of the execution of.  For example, the surgery a checklist was executed as part of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $parent = array();

    /**
     * The Questionnaire that defines and organizes the questions for which answers are being provided.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $questionnaire = null;

    /**
     * The position of the questionnaire response within its overall lifecycle.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireResponseStatus
     */
    public $status = null;

    /**
     * The subject of the questionnaire response.  This could be a patient, organization, practitioner, device, etc.  This is who/what the answers apply to, but is not necessarily the source of information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The encounter or episode of care with primary association to the questionnaire response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * The date and/or time that this set of answers were last changed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $authored = null;

    /**
     * Person who received the answers to the questions in the QuestionnaireResponse and recorded them in the system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $author = null;

    /**
     * The person who answered the questions about the subject.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $source = null;

    /**
     * A group or question item from the original questionnaire for which answers are provided.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseItem[]
     */
    public $item = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'QuestionnaireResponse';

    /**
     * A business identifier assigned to a particular completed (or partially completed) questionnaire.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A business identifier assigned to a particular completed (or partially completed) questionnaire.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The order, proposal or plan that is fulfilled in whole or in part by this QuestionnaireResponse.  For example, a ProcedureRequest seeking an intake assessment or a decision support recommendation to assess for post-partum depression.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * The order, proposal or plan that is fulfilled in whole or in part by this QuestionnaireResponse.  For example, a ProcedureRequest seeking an intake assessment or a decision support recommendation to assess for post-partum depression.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $basedOn
     * @return $this
     */
    public function addBasedOn($basedOn)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A procedure or observation that this questionnaire was performed as part of the execution of.  For example, the surgery a checklist was executed as part of.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * A procedure or observation that this questionnaire was performed as part of the execution of.  For example, the surgery a checklist was executed as part of.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $parent
     * @return $this
     */
    public function addParent($parent)
    {
        $this->parent[] = $parent;
        return $this;
    }

    /**
     * The Questionnaire that defines and organizes the questions for which answers are being provided.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getQuestionnaire()
    {
        return $this->questionnaire;
    }

    /**
     * The Questionnaire that defines and organizes the questions for which answers are being provided.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $questionnaire
     * @return $this
     */
    public function setQuestionnaire($questionnaire)
    {
        $this->questionnaire = $questionnaire;
        return $this;
    }

    /**
     * The position of the questionnaire response within its overall lifecycle.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireResponseStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The position of the questionnaire response within its overall lifecycle.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireResponseStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The subject of the questionnaire response.  This could be a patient, organization, practitioner, device, etc.  This is who/what the answers apply to, but is not necessarily the source of information.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The subject of the questionnaire response.  This could be a patient, organization, practitioner, device, etc.  This is who/what the answers apply to, but is not necessarily the source of information.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The encounter or episode of care with primary association to the questionnaire response.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * The encounter or episode of care with primary association to the questionnaire response.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * The date and/or time that this set of answers were last changed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAuthored()
    {
        return $this->authored;
    }

    /**
     * The date and/or time that this set of answers were last changed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $authored
     * @return $this
     */
    public function setAuthored($authored)
    {
        $this->authored = $authored;
        return $this;
    }

    /**
     * Person who received the answers to the questions in the QuestionnaireResponse and recorded them in the system.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Person who received the answers to the questions in the QuestionnaireResponse and recorded them in the system.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $author
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * The person who answered the questions about the subject.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * The person who answered the questions about the subject.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * A group or question item from the original questionnaire for which answers are provided.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseItem[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * A group or question item from the original questionnaire for which answers are provided.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseItem $item
     * @return $this
     */
    public function addItem($item)
    {
        $this->item[] = $item;
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
        $json['resourceType'] = $this->_fhirElementName;
        if (null !== $this->identifier) $json['identifier'] = json_encode($this->identifier);
        if (0 < count($this->basedOn)) {
            $json['basedOn'] = [];
            foreach($this->basedOn as $basedOn) {
                $json['basedOn'][] = json_encode($basedOn);
            }
        }
        if (0 < count($this->parent)) {
            $json['parent'] = [];
            foreach($this->parent as $parent) {
                $json['parent'][] = json_encode($parent);
            }
        }
        if (null !== $this->questionnaire) $json['questionnaire'] = json_encode($this->questionnaire);
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->subject) $json['subject'] = json_encode($this->subject);
        if (null !== $this->context) $json['context'] = json_encode($this->context);
        if (null !== $this->authored) $json['authored'] = json_encode($this->authored);
        if (null !== $this->author) $json['author'] = json_encode($this->author);
        if (null !== $this->source) $json['source'] = json_encode($this->source);
        if (0 < count($this->item)) {
            $json['item'] = [];
            foreach($this->item as $item) {
                $json['item'][] = json_encode($item);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<QuestionnaireResponse xmlns="http://hl7.org/fhir"></QuestionnaireResponse>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (0 < count($this->basedOn)) {
            foreach($this->basedOn as $basedOn) {
                $basedOn->xmlSerialize(true, $sxe->addChild('basedOn'));
            }
        }
        if (0 < count($this->parent)) {
            foreach($this->parent as $parent) {
                $parent->xmlSerialize(true, $sxe->addChild('parent'));
            }
        }
        if (null !== $this->questionnaire) $this->questionnaire->xmlSerialize(true, $sxe->addChild('questionnaire'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->context) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (null !== $this->authored) $this->authored->xmlSerialize(true, $sxe->addChild('authored'));
        if (null !== $this->author) $this->author->xmlSerialize(true, $sxe->addChild('author'));
        if (null !== $this->source) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (0 < count($this->item)) {
            foreach($this->item as $item) {
                $item->xmlSerialize(true, $sxe->addChild('item'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}