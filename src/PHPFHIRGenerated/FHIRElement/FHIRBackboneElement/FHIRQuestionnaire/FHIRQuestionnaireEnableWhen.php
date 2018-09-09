<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire;

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
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireItemOperator;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRTime;

/**
 * A structured set of questions intended to guide the collection of answers from end-users. Questionnaires provide detailed control over order, presentation, phraseology and grouping to allow coherent, consistent data collection.
 *
 * Class FHIRQuestionnaireEnableWhen
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire
 */
class FHIRQuestionnaireEnableWhen extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Questionnaire.EnableWhen';

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $answerBoolean = null;

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $answerCoding = null;

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $answerDate = null;

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $answerDateTime = null;

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $answerDecimal = null;

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $answerInteger = null;

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $answerQuantity = null;

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $answerReference = null;

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $answerString = null;

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $answerTime = null;

    /**
     * Specifies the criteria by which the question is enabled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireItemOperator
     */
    public $operator = null;

    /**
     * The linkId for the question whose answer (or lack of answer) governs whether this item is enabled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $question = null;

    /**
     * FHIRQuestionnaireEnableWhen Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['answerBoolean'])) {
                $this->setAnswerBoolean($data['answerBoolean']);
            }
            if (isset($data['answerCoding'])) {
                $this->setAnswerCoding($data['answerCoding']);
            }
            if (isset($data['answerDate'])) {
                $this->setAnswerDate($data['answerDate']);
            }
            if (isset($data['answerDateTime'])) {
                $this->setAnswerDateTime($data['answerDateTime']);
            }
            if (isset($data['answerDecimal'])) {
                $this->setAnswerDecimal($data['answerDecimal']);
            }
            if (isset($data['answerInteger'])) {
                $this->setAnswerInteger($data['answerInteger']);
            }
            if (isset($data['answerQuantity'])) {
                $this->setAnswerQuantity($data['answerQuantity']);
            }
            if (isset($data['answerReference'])) {
                $this->setAnswerReference($data['answerReference']);
            }
            if (isset($data['answerString'])) {
                $this->setAnswerString($data['answerString']);
            }
            if (isset($data['answerTime'])) {
                $this->setAnswerTime($data['answerTime']);
            }
            if (isset($data['operator'])) {
                $this->setOperator($data['operator']);
            }
            if (isset($data['question'])) {
                $this->setQuestion($data['question']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setAnswerBoolean($answerBoolean)
    {
        if (null === $answerBoolean) {
            return $this; 
        }
        if (is_scalar($answerBoolean)) {
            $answerBoolean = new FHIRBoolean($answerBoolean);
        }
        if (!($answerBoolean instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireEnableWhen::setAnswerBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($answerBoolean)
            ));
        }
        $this->answerBoolean = $answerBoolean;
        return $this;
    }

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAnswerBoolean()
    {
        return $this->answerBoolean;
    }


    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setAnswerCoding(FHIRCoding $answerCoding = null)
    {
        if (null === $answerCoding) {
            return $this; 
        }
        $this->answerCoding = $answerCoding;
        return $this;
    }

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getAnswerCoding()
    {
        return $this->answerCoding;
    }


    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setAnswerDate($answerDate)
    {
        if (null === $answerDate) {
            return $this; 
        }
        if (is_scalar($answerDate)) {
            $answerDate = new FHIRDate($answerDate);
        }
        if (!($answerDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireEnableWhen::setAnswerDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($answerDate)
            ));
        }
        $this->answerDate = $answerDate;
        return $this;
    }

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getAnswerDate()
    {
        return $this->answerDate;
    }


    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setAnswerDateTime($answerDateTime)
    {
        if (null === $answerDateTime) {
            return $this; 
        }
        if (is_scalar($answerDateTime)) {
            $answerDateTime = new FHIRDateTime($answerDateTime);
        }
        if (!($answerDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireEnableWhen::setAnswerDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($answerDateTime)
            ));
        }
        $this->answerDateTime = $answerDateTime;
        return $this;
    }

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAnswerDateTime()
    {
        return $this->answerDateTime;
    }


    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setAnswerDecimal($answerDecimal)
    {
        if (null === $answerDecimal) {
            return $this; 
        }
        if (is_scalar($answerDecimal)) {
            $answerDecimal = new FHIRDecimal($answerDecimal);
        }
        if (!($answerDecimal instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireEnableWhen::setAnswerDecimal - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($answerDecimal)
            ));
        }
        $this->answerDecimal = $answerDecimal;
        return $this;
    }

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getAnswerDecimal()
    {
        return $this->answerDecimal;
    }


    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setAnswerInteger($answerInteger)
    {
        if (null === $answerInteger) {
            return $this; 
        }
        if (is_scalar($answerInteger)) {
            $answerInteger = new FHIRInteger($answerInteger);
        }
        if (!($answerInteger instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireEnableWhen::setAnswerInteger - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($answerInteger)
            ));
        }
        $this->answerInteger = $answerInteger;
        return $this;
    }

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getAnswerInteger()
    {
        return $this->answerInteger;
    }


    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setAnswerQuantity(FHIRQuantity $answerQuantity = null)
    {
        if (null === $answerQuantity) {
            return $this; 
        }
        $this->answerQuantity = $answerQuantity;
        return $this;
    }

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getAnswerQuantity()
    {
        return $this->answerQuantity;
    }


    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAnswerReference(FHIRReference $answerReference = null)
    {
        if (null === $answerReference) {
            return $this; 
        }
        $this->answerReference = $answerReference;
        return $this;
    }

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAnswerReference()
    {
        return $this->answerReference;
    }


    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAnswerString($answerString)
    {
        if (null === $answerString) {
            return $this; 
        }
        if (is_scalar($answerString)) {
            $answerString = new FHIRString($answerString);
        }
        if (!($answerString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireEnableWhen::setAnswerString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($answerString)
            ));
        }
        $this->answerString = $answerString;
        return $this;
    }

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAnswerString()
    {
        return $this->answerString;
    }


    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     * @return $this
     */
    public function setAnswerTime($answerTime)
    {
        if (null === $answerTime) {
            return $this; 
        }
        if (is_scalar($answerTime)) {
            $answerTime = new FHIRTime($answerTime);
        }
        if (!($answerTime instanceof FHIRTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireEnableWhen::setAnswerTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or appropriate scalar value, %s seen.',
                gettype($answerTime)
            ));
        }
        $this->answerTime = $answerTime;
        return $this;
    }

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getAnswerTime()
    {
        return $this->answerTime;
    }


    /**
     * Specifies the criteria by which the question is enabled.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireItemOperator
     * @return $this
     */
    public function setOperator($operator)
    {
        if (null === $operator) {
            return $this; 
        }
        if (is_scalar($operator)) {
            $operator = new FHIRQuestionnaireItemOperator($operator);
        }
        if (!($operator instanceof FHIRQuestionnaireItemOperator)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireEnableWhen::setOperator - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireItemOperator or appropriate scalar value, %s seen.',
                gettype($operator)
            ));
        }
        $this->operator = $operator;
        return $this;
    }

    /**
     * Specifies the criteria by which the question is enabled.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireItemOperator
     */
    public function getOperator()
    {
        return $this->operator;
    }


    /**
     * The linkId for the question whose answer (or lack of answer) governs whether this item is enabled.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setQuestion($question)
    {
        if (null === $question) {
            return $this; 
        }
        if (is_scalar($question)) {
            $question = new FHIRString($question);
        }
        if (!($question instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireEnableWhen::setQuestion - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($question)
            ));
        }
        $this->question = $question;
        return $this;
    }

    /**
     * The linkId for the question whose answer (or lack of answer) governs whether this item is enabled.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getQuestion()
    {
        return $this->question;
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
        if (null !== ($v = $this->getAnswerBoolean())) {
            $a['answerBoolean'] = $v;
        }
        if (null !== ($v = $this->getAnswerCoding())) {
            $a['answerCoding'] = $v;
        }
        if (null !== ($v = $this->getAnswerDate())) {
            $a['answerDate'] = $v;
        }
        if (null !== ($v = $this->getAnswerDateTime())) {
            $a['answerDateTime'] = $v;
        }
        if (null !== ($v = $this->getAnswerDecimal())) {
            $a['answerDecimal'] = $v;
        }
        if (null !== ($v = $this->getAnswerInteger())) {
            $a['answerInteger'] = $v;
        }
        if (null !== ($v = $this->getAnswerQuantity())) {
            $a['answerQuantity'] = $v;
        }
        if (null !== ($v = $this->getAnswerReference())) {
            $a['answerReference'] = $v;
        }
        if (null !== ($v = $this->getAnswerString())) {
            $a['answerString'] = $v;
        }
        if (null !== ($v = $this->getAnswerTime())) {
            $a['answerTime'] = $v;
        }
        if (null !== ($v = $this->getOperator())) {
            $a['operator'] = $v;
        }
        if (null !== ($v = $this->getQuestion())) {
            $a['question'] = $v;
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
            $sxe = new \SimpleXMLElement('<QuestionnaireEnableWhen xmlns="http://hl7.org/fhir"></QuestionnaireEnableWhen>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}