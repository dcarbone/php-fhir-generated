<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseItem;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireResponseStatus;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A structured set of questions and their answers. The questions are ordered and grouped into coherent subsets, corresponding to the structure of the grouping of the questionnaire being responded to.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRQuestionnaireResponse
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRQuestionnaireResponse extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'QuestionnaireResponse';

    /**
     * Person who received the answers to the questions in the QuestionnaireResponse and recorded them in the system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $author = null;

    /**
     * The date and/or time that this set of answers were last changed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $authored = null;

    /**
     * The order, proposal or plan that is fulfilled in whole or in part by this QuestionnaireResponse.  For example, a ServiceRequest seeking an intake assessment or a decision support recommendation to assess for post-partum depression.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $basedOn = null;

    /**
     * The encounter or episode of care with primary association to the questionnaire response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * A business identifier assigned to a particular completed (or partially completed) questionnaire.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * A group or question item from the original questionnaire for which answers are provided.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseItem
     */
    public $item = null;

    /**
     * A procedure or observation that this questionnaire was performed as part of the execution of.  For example, the surgery a checklist was executed as part of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $partOf = null;

    /**
     * The Questionnaire that defines and organizes the questions for which answers are being provided.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $questionnaire = null;

    /**
     * The person who answered the questions about the subject.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $source = null;

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
     * FHIRQuestionnaireResponse Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['author'])) {
                $this->setAuthor($data['author']);
            }
            if (isset($data['authored'])) {
                $this->setAuthored($data['authored']);
            }
            if (isset($data['basedOn'])) {
                $this->setBasedOn($data['basedOn']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['item'])) {
                $this->setItem($data['item']);
            }
            if (isset($data['partOf'])) {
                $this->setPartOf($data['partOf']);
            }
            if (isset($data['questionnaire'])) {
                $this->setQuestionnaire($data['questionnaire']);
            }
            if (isset($data['source'])) {
                $this->setSource($data['source']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Person who received the answers to the questions in the QuestionnaireResponse and recorded them in the system.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAuthor(FHIRReference $author = null)
    {
        if (null === $author) {
            return $this; 
        }
        $this->author = $author;
        return $this;
    }

    /**
     * Person who received the answers to the questions in the QuestionnaireResponse and recorded them in the system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }


    /**
     * The date and/or time that this set of answers were last changed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setAuthored($authored)
    {
        if (null === $authored) {
            return $this; 
        }
        if (is_scalar($authored)) {
            $authored = new FHIRDateTime($authored);
        }
        if (!($authored instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireResponse::setAuthored - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($authored)
            ));
        }
        $this->authored = $authored;
        return $this;
    }

    /**
     * The date and/or time that this set of answers were last changed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAuthored()
    {
        return $this->authored;
    }


    /**
     * The order, proposal or plan that is fulfilled in whole or in part by this QuestionnaireResponse.  For example, a ServiceRequest seeking an intake assessment or a decision support recommendation to assess for post-partum depression.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setBasedOn(FHIRReference $basedOn = null)
    {
        if (null === $basedOn) {
            return $this; 
        }
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * The order, proposal or plan that is fulfilled in whole or in part by this QuestionnaireResponse.  For example, a ServiceRequest seeking an intake assessment or a decision support recommendation to assess for post-partum depression.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }


    /**
     * The encounter or episode of care with primary association to the questionnaire response.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setContext(FHIRReference $context = null)
    {
        if (null === $context) {
            return $this; 
        }
        $this->context = $context;
        return $this;
    }

    /**
     * The encounter or episode of care with primary association to the questionnaire response.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * A business identifier assigned to a particular completed (or partially completed) questionnaire.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A business identifier assigned to a particular completed (or partially completed) questionnaire.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * A group or question item from the original questionnaire for which answers are provided.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseItem
     * @return $this
     */
    public function setItem(FHIRQuestionnaireResponseItem $item = null)
    {
        if (null === $item) {
            return $this; 
        }
        $this->item = $item;
        return $this;
    }

    /**
     * A group or question item from the original questionnaire for which answers are provided.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseItem
     */
    public function getItem()
    {
        return $this->item;
    }


    /**
     * A procedure or observation that this questionnaire was performed as part of the execution of.  For example, the surgery a checklist was executed as part of.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPartOf(FHIRReference $partOf = null)
    {
        if (null === $partOf) {
            return $this; 
        }
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * A procedure or observation that this questionnaire was performed as part of the execution of.  For example, the surgery a checklist was executed as part of.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }


    /**
     * The Questionnaire that defines and organizes the questions for which answers are being provided.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setQuestionnaire($questionnaire)
    {
        if (null === $questionnaire) {
            return $this; 
        }
        if (is_scalar($questionnaire)) {
            $questionnaire = new FHIRCanonical($questionnaire);
        }
        if (!($questionnaire instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireResponse::setQuestionnaire - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($questionnaire)
            ));
        }
        $this->questionnaire = $questionnaire;
        return $this;
    }

    /**
     * The Questionnaire that defines and organizes the questions for which answers are being provided.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getQuestionnaire()
    {
        return $this->questionnaire;
    }


    /**
     * The person who answered the questions about the subject.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSource(FHIRReference $source = null)
    {
        if (null === $source) {
            return $this; 
        }
        $this->source = $source;
        return $this;
    }

    /**
     * The person who answered the questions about the subject.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSource()
    {
        return $this->source;
    }


    /**
     * The position of the questionnaire response within its overall lifecycle.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireResponseStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRQuestionnaireResponseStatus($status);
        }
        if (!($status instanceof FHIRQuestionnaireResponseStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireResponse::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireResponseStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The position of the questionnaire response within its overall lifecycle.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireResponseStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * The subject of the questionnaire response.  This could be a patient, organization, practitioner, device, etc.  This is who/what the answers apply to, but is not necessarily the source of information.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubject(FHIRReference $subject = null)
    {
        if (null === $subject) {
            return $this; 
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * The subject of the questionnaire response.  This could be a patient, organization, practitioner, device, etc.  This is who/what the answers apply to, but is not necessarily the source of information.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getAuthor())) {
            $a['author'] = $v;
        }
        if (null !== ($v = $this->getAuthored())) {
            $a['authored'] = $v;
        }
        if (null !== ($v = $this->getBasedOn())) {
            $a['basedOn'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getItem())) {
            $a['item'] = $v;
        }
        if (null !== ($v = $this->getPartOf())) {
            $a['partOf'] = $v;
        }
        if (null !== ($v = $this->getQuestionnaire())) {
            $a['questionnaire'] = $v;
        }
        if (null !== ($v = $this->getSource())) {
            $a['source'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
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
            $sxe = new \SimpleXMLElement('<QuestionnaireResponse xmlns="http://hl7.org/fhir"></QuestionnaireResponse>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}