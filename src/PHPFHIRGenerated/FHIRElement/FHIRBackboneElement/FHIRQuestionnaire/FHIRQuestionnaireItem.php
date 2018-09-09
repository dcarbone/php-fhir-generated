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
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIREnableWhenBehavior;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireItemType;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * A structured set of questions intended to guide the collection of answers from end-users. Questionnaires provide detailed control over order, presentation, phraseology and grouping to allow coherent, consistent data collection.
 *
 * Class FHIRQuestionnaireItem
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire
 */
class FHIRQuestionnaireItem extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Questionnaire.Item';

    /**
     * One of the permitted answers for a "choice" or "open-choice" question.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption
     */
    public $answerOption = null;

    /**
     * A reference to a value set containing a list of codes representing permitted answers for a "choice" or "open-choice" question.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $answerValueSet = null;

    /**
     * A terminology code that corresponds to this group or question (e.g. a code from LOINC, which defines many questions and answers).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $code = null;

    /**
     * This element is a URI that refers to an [[[ElementDefinition]]] that provides information about this item, including information that might otherwise be included in the instance of the Questionnaire resource. A detailed description of the construction of the URI is shown in Comments, below. If this element is present then the following element values MAY be derived from the Element Definition if the corresponding elements of this Questionnaire resource instance have no value:

* code (ElementDefinition.code) 
* type (ElementDefinition.type) 
* required (ElementDefinition.min) 
* repeats (ElementDefinition.max) 
* maxLength (ElementDefinition.maxLength) 
* answerValueSet (ElementDefinition.binding)
* options (ElementDefinition.binding).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $definition = null;

    /**
     * Controls how multiple enableWhen values are interpreted -  whether all or any must be true.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREnableWhenBehavior
     */
    public $enableBehavior = null;

    /**
     * A constraint indicating that this item should only be enabled (displayed/allow answers to be captured) when the specified condition is true.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
     */
    public $enableWhen = null;

    /**
     * One or more values that should be pre-populated in the answer when initially rendering the questionnaire for user input.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial
     */
    public $initial = null;

    /**
     * Text, questions and other groups to be nested beneath a question or group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem
     */
    public $item = null;

    /**
     * An identifier that is unique within the Questionnaire allowing linkage to the equivalent item in a QuestionnaireResponse resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $linkId = null;

    /**
     * The maximum number of characters that are permitted in the answer to be considered a "valid" QuestionnaireResponse.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $maxLength = null;

    /**
     * A short label for a particular group, question or set of display text within the questionnaire used for reference by the individual completing the questionnaire.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $prefix = null;

    /**
     * An indication, when true, that the value cannot be changed by a human respondent to the Questionnaire.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $readOnly = null;

    /**
     * An indication, if true, that the item may occur multiple times in the response, collecting multiple answers for questions or multiple sets of answers for groups.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $repeats = null;

    /**
     * An indication, if true, that the item must be present in a "completed" QuestionnaireResponse.  If false, the item may be skipped when answering the questionnaire.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $required = null;

    /**
     * The name of a section, the text of a question or text content for a display item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * The type of questionnaire item this is - whether text for display, a grouping of other items or a particular type of data to be captured (string, integer, coded choice, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireItemType
     */
    public $type = null;

    /**
     * FHIRQuestionnaireItem Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['answerOption'])) {
                $this->setAnswerOption($data['answerOption']);
            }
            if (isset($data['answerValueSet'])) {
                $this->setAnswerValueSet($data['answerValueSet']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['definition'])) {
                $this->setDefinition($data['definition']);
            }
            if (isset($data['enableBehavior'])) {
                $this->setEnableBehavior($data['enableBehavior']);
            }
            if (isset($data['enableWhen'])) {
                $this->setEnableWhen($data['enableWhen']);
            }
            if (isset($data['initial'])) {
                $this->setInitial($data['initial']);
            }
            if (isset($data['item'])) {
                $this->setItem($data['item']);
            }
            if (isset($data['linkId'])) {
                $this->setLinkId($data['linkId']);
            }
            if (isset($data['maxLength'])) {
                $this->setMaxLength($data['maxLength']);
            }
            if (isset($data['prefix'])) {
                $this->setPrefix($data['prefix']);
            }
            if (isset($data['readOnly'])) {
                $this->setReadOnly($data['readOnly']);
            }
            if (isset($data['repeats'])) {
                $this->setRepeats($data['repeats']);
            }
            if (isset($data['required'])) {
                $this->setRequired($data['required']);
            }
            if (isset($data['text'])) {
                $this->setText($data['text']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * One of the permitted answers for a "choice" or "open-choice" question.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption
     * @return $this
     */
    public function setAnswerOption(FHIRQuestionnaireAnswerOption $answerOption = null)
    {
        if (null === $answerOption) {
            return $this; 
        }
        $this->answerOption = $answerOption;
        return $this;
    }

    /**
     * One of the permitted answers for a "choice" or "open-choice" question.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption
     */
    public function getAnswerOption()
    {
        return $this->answerOption;
    }


    /**
     * A reference to a value set containing a list of codes representing permitted answers for a "choice" or "open-choice" question.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setAnswerValueSet($answerValueSet)
    {
        if (null === $answerValueSet) {
            return $this; 
        }
        if (is_scalar($answerValueSet)) {
            $answerValueSet = new FHIRCanonical($answerValueSet);
        }
        if (!($answerValueSet instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireItem::setAnswerValueSet - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($answerValueSet)
            ));
        }
        $this->answerValueSet = $answerValueSet;
        return $this;
    }

    /**
     * A reference to a value set containing a list of codes representing permitted answers for a "choice" or "open-choice" question.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getAnswerValueSet()
    {
        return $this->answerValueSet;
    }


    /**
     * A terminology code that corresponds to this group or question (e.g. a code from LOINC, which defines many questions and answers).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setCode(FHIRCoding $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A terminology code that corresponds to this group or question (e.g. a code from LOINC, which defines many questions and answers).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * This element is a URI that refers to an [[[ElementDefinition]]] that provides information about this item, including information that might otherwise be included in the instance of the Questionnaire resource. A detailed description of the construction of the URI is shown in Comments, below. If this element is present then the following element values MAY be derived from the Element Definition if the corresponding elements of this Questionnaire resource instance have no value:

* code (ElementDefinition.code) 
* type (ElementDefinition.type) 
* required (ElementDefinition.min) 
* repeats (ElementDefinition.max) 
* maxLength (ElementDefinition.maxLength) 
* answerValueSet (ElementDefinition.binding)
* options (ElementDefinition.binding).
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
                'FHIRQuestionnaireItem::setDefinition - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($definition)
            ));
        }
        $this->definition = $definition;
        return $this;
    }

    /**
     * This element is a URI that refers to an [[[ElementDefinition]]] that provides information about this item, including information that might otherwise be included in the instance of the Questionnaire resource. A detailed description of the construction of the URI is shown in Comments, below. If this element is present then the following element values MAY be derived from the Element Definition if the corresponding elements of this Questionnaire resource instance have no value:

* code (ElementDefinition.code) 
* type (ElementDefinition.type) 
* required (ElementDefinition.min) 
* repeats (ElementDefinition.max) 
* maxLength (ElementDefinition.maxLength) 
* answerValueSet (ElementDefinition.binding)
* options (ElementDefinition.binding).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getDefinition()
    {
        return $this->definition;
    }


    /**
     * Controls how multiple enableWhen values are interpreted -  whether all or any must be true.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIREnableWhenBehavior
     * @return $this
     */
    public function setEnableBehavior($enableBehavior)
    {
        if (null === $enableBehavior) {
            return $this; 
        }
        if (is_scalar($enableBehavior)) {
            $enableBehavior = new FHIREnableWhenBehavior($enableBehavior);
        }
        if (!($enableBehavior instanceof FHIREnableWhenBehavior)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireItem::setEnableBehavior - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIREnableWhenBehavior or appropriate scalar value, %s seen.',
                gettype($enableBehavior)
            ));
        }
        $this->enableBehavior = $enableBehavior;
        return $this;
    }

    /**
     * Controls how multiple enableWhen values are interpreted -  whether all or any must be true.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIREnableWhenBehavior
     */
    public function getEnableBehavior()
    {
        return $this->enableBehavior;
    }


    /**
     * A constraint indicating that this item should only be enabled (displayed/allow answers to be captured) when the specified condition is true.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
     * @return $this
     */
    public function setEnableWhen(FHIRQuestionnaireEnableWhen $enableWhen = null)
    {
        if (null === $enableWhen) {
            return $this; 
        }
        $this->enableWhen = $enableWhen;
        return $this;
    }

    /**
     * A constraint indicating that this item should only be enabled (displayed/allow answers to be captured) when the specified condition is true.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
     */
    public function getEnableWhen()
    {
        return $this->enableWhen;
    }


    /**
     * One or more values that should be pre-populated in the answer when initially rendering the questionnaire for user input.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial
     * @return $this
     */
    public function setInitial(FHIRQuestionnaireInitial $initial = null)
    {
        if (null === $initial) {
            return $this; 
        }
        $this->initial = $initial;
        return $this;
    }

    /**
     * One or more values that should be pre-populated in the answer when initially rendering the questionnaire for user input.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial
     */
    public function getInitial()
    {
        return $this->initial;
    }


    /**
     * Text, questions and other groups to be nested beneath a question or group.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem
     * @return $this
     */
    public function setItem(FHIRQuestionnaireItem $item = null)
    {
        if (null === $item) {
            return $this; 
        }
        $this->item = $item;
        return $this;
    }

    /**
     * Text, questions and other groups to be nested beneath a question or group.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem
     */
    public function getItem()
    {
        return $this->item;
    }


    /**
     * An identifier that is unique within the Questionnaire allowing linkage to the equivalent item in a QuestionnaireResponse resource.
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
                'FHIRQuestionnaireItem::setLinkId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($linkId)
            ));
        }
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * An identifier that is unique within the Questionnaire allowing linkage to the equivalent item in a QuestionnaireResponse resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLinkId()
    {
        return $this->linkId;
    }


    /**
     * The maximum number of characters that are permitted in the answer to be considered a "valid" QuestionnaireResponse.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setMaxLength($maxLength)
    {
        if (null === $maxLength) {
            return $this; 
        }
        if (is_scalar($maxLength)) {
            $maxLength = new FHIRInteger($maxLength);
        }
        if (!($maxLength instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireItem::setMaxLength - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($maxLength)
            ));
        }
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * The maximum number of characters that are permitted in the answer to be considered a "valid" QuestionnaireResponse.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }


    /**
     * A short label for a particular group, question or set of display text within the questionnaire used for reference by the individual completing the questionnaire.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPrefix($prefix)
    {
        if (null === $prefix) {
            return $this; 
        }
        if (is_scalar($prefix)) {
            $prefix = new FHIRString($prefix);
        }
        if (!($prefix instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireItem::setPrefix - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($prefix)
            ));
        }
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * A short label for a particular group, question or set of display text within the questionnaire used for reference by the individual completing the questionnaire.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPrefix()
    {
        return $this->prefix;
    }


    /**
     * An indication, when true, that the value cannot be changed by a human respondent to the Questionnaire.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setReadOnly($readOnly)
    {
        if (null === $readOnly) {
            return $this; 
        }
        if (is_scalar($readOnly)) {
            $readOnly = new FHIRBoolean($readOnly);
        }
        if (!($readOnly instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireItem::setReadOnly - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($readOnly)
            ));
        }
        $this->readOnly = $readOnly;
        return $this;
    }

    /**
     * An indication, when true, that the value cannot be changed by a human respondent to the Questionnaire.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getReadOnly()
    {
        return $this->readOnly;
    }


    /**
     * An indication, if true, that the item may occur multiple times in the response, collecting multiple answers for questions or multiple sets of answers for groups.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setRepeats($repeats)
    {
        if (null === $repeats) {
            return $this; 
        }
        if (is_scalar($repeats)) {
            $repeats = new FHIRBoolean($repeats);
        }
        if (!($repeats instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireItem::setRepeats - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($repeats)
            ));
        }
        $this->repeats = $repeats;
        return $this;
    }

    /**
     * An indication, if true, that the item may occur multiple times in the response, collecting multiple answers for questions or multiple sets of answers for groups.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getRepeats()
    {
        return $this->repeats;
    }


    /**
     * An indication, if true, that the item must be present in a "completed" QuestionnaireResponse.  If false, the item may be skipped when answering the questionnaire.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setRequired($required)
    {
        if (null === $required) {
            return $this; 
        }
        if (is_scalar($required)) {
            $required = new FHIRBoolean($required);
        }
        if (!($required instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireItem::setRequired - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($required)
            ));
        }
        $this->required = $required;
        return $this;
    }

    /**
     * An indication, if true, that the item must be present in a "completed" QuestionnaireResponse.  If false, the item may be skipped when answering the questionnaire.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getRequired()
    {
        return $this->required;
    }


    /**
     * The name of a section, the text of a question or text content for a display item.
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
                'FHIRQuestionnaireItem::setText - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($text)
            ));
        }
        $this->text = $text;
        return $this;
    }

    /**
     * The name of a section, the text of a question or text content for a display item.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }


    /**
     * The type of questionnaire item this is - whether text for display, a grouping of other items or a particular type of data to be captured (string, integer, coded choice, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireItemType
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRQuestionnaireItemType($type);
        }
        if (!($type instanceof FHIRQuestionnaireItemType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireItem::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireItemType or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The type of questionnaire item this is - whether text for display, a grouping of other items or a particular type of data to be captured (string, integer, coded choice, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireItemType
     */
    public function getType()
    {
        return $this->type;
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
        if (null !== ($v = $this->getAnswerOption())) {
            $a['answerOption'] = $v;
        }
        if (null !== ($v = $this->getAnswerValueSet())) {
            $a['answerValueSet'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getDefinition())) {
            $a['definition'] = $v;
        }
        if (null !== ($v = $this->getEnableBehavior())) {
            $a['enableBehavior'] = $v;
        }
        if (null !== ($v = $this->getEnableWhen())) {
            $a['enableWhen'] = $v;
        }
        if (null !== ($v = $this->getInitial())) {
            $a['initial'] = $v;
        }
        if (null !== ($v = $this->getItem())) {
            $a['item'] = $v;
        }
        if (null !== ($v = $this->getLinkId())) {
            $a['linkId'] = $v;
        }
        if (null !== ($v = $this->getMaxLength())) {
            $a['maxLength'] = $v;
        }
        if (null !== ($v = $this->getPrefix())) {
            $a['prefix'] = $v;
        }
        if (null !== ($v = $this->getReadOnly())) {
            $a['readOnly'] = $v;
        }
        if (null !== ($v = $this->getRepeats())) {
            $a['repeats'] = $v;
        }
        if (null !== ($v = $this->getRequired())) {
            $a['required'] = $v;
        }
        if (null !== ($v = $this->getText())) {
            $a['text'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
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
            $sxe = new \SimpleXMLElement('<QuestionnaireItem xmlns="http://hl7.org/fhir"></QuestionnaireItem>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}