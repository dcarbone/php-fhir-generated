<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * A structured set of questions and their answers. The questions are ordered and grouped into coherent subsets, corresponding to the structure of the grouping of the questionnaire being responded to.
 *
 * Class FHIRQuestionnaireResponseItem
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse
 */
class FHIRQuestionnaireResponseItem extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'QuestionnaireResponse.Item';

    /**
     * The respondent's answer(s) to the question.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseAnswer
     */
    public $answer = null;

    /**
     * A reference to an [[[ElementDefinition]]] that provides the details for the item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $definition = null;

    /**
     * Questions or sub-groups nested beneath a question or group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseItem
     */
    public $item = null;

    /**
     * The item from the Questionnaire that corresponds to this item in the QuestionnaireResponse resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $linkId = null;

    /**
     * Text that is displayed above the contents of the group or as the text of the question being answered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * FHIRQuestionnaireResponseItem Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['answer'])) {
                $this->setAnswer($data['answer']);
            }
            if (isset($data['definition'])) {
                $this->setDefinition($data['definition']);
            }
            if (isset($data['item'])) {
                $this->setItem($data['item']);
            }
            if (isset($data['linkId'])) {
                $this->setLinkId($data['linkId']);
            }
            if (isset($data['text'])) {
                $this->setText($data['text']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseItem::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The respondent's answer(s) to the question.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseAnswer
     * @return $this
     */
    public function setAnswer(FHIRQuestionnaireResponseAnswer $answer = null)
    {
        if (null === $answer) {
            return $this; 
        }
        $this->answer = $answer;
        return $this;
    }

    /**
     * The respondent's answer(s) to the question.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseAnswer
     */
    public function getAnswer()
    {
        return $this->answer;
    }


    /**
     * A reference to an [[[ElementDefinition]]] that provides the details for the item.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setDefinition($definition)
    {
        if (null === $definition) {
            return $this; 
        }
        if (is_scalar($definition)) {
            $definition = new FHIRUri($definition);
        }
        if (!($definition instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireResponseItem::setDefinition - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($definition)
            ));
        }
        $this->definition = $definition;
        return $this;
    }

    /**
     * A reference to an [[[ElementDefinition]]] that provides the details for the item.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getDefinition()
    {
        return $this->definition;
    }


    /**
     * Questions or sub-groups nested beneath a question or group.
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
     * Questions or sub-groups nested beneath a question or group.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseItem
     */
    public function getItem()
    {
        return $this->item;
    }


    /**
     * The item from the Questionnaire that corresponds to this item in the QuestionnaireResponse resource.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setLinkId($linkId)
    {
        if (null === $linkId) {
            return $this; 
        }
        if (is_scalar($linkId)) {
            $linkId = new FHIRString($linkId);
        }
        if (!($linkId instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireResponseItem::setLinkId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($linkId)
            ));
        }
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * The item from the Questionnaire that corresponds to this item in the QuestionnaireResponse resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLinkId()
    {
        return $this->linkId;
    }


    /**
     * Text that is displayed above the contents of the group or as the text of the question being answered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setText($text)
    {
        if (null === $text) {
            return $this; 
        }
        if (is_scalar($text)) {
            $text = new FHIRString($text);
        }
        if (!($text instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireResponseItem::setText - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($text)
            ));
        }
        $this->text = $text;
        return $this;
    }

    /**
     * Text that is displayed above the contents of the group or as the text of the question being answered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
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
        if (null !== ($v = $this->getAnswer())) {
            $a['answer'] = $v;
        }
        if (null !== ($v = $this->getDefinition())) {
            $a['definition'] = $v;
        }
        if (null !== ($v = $this->getItem())) {
            $a['item'] = $v;
        }
        if (null !== ($v = $this->getLinkId())) {
            $a['linkId'] = $v;
        }
        if (null !== ($v = $this->getText())) {
            $a['text'] = $v;
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
            $sxe = new \SimpleXMLElement('<QuestionnaireResponseItem xmlns="http://hl7.org/fhir"></QuestionnaireResponseItem>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}