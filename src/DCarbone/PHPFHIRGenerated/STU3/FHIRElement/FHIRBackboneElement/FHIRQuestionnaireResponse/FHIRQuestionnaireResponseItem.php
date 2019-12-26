<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A structured set of questions and their answers. The questions are ordered and
 * grouped into coherent subsets, corresponding to the structure of the grouping of
 * the questionnaire being responded to.
 *
 * Class FHIRQuestionnaireResponseItem
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse
 */
class FHIRQuestionnaireResponseItem extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_DOT_ITEM;
    const FIELD_ANSWER = 'answer';
    const FIELD_DEFINITION = 'definition';
    const FIELD_DEFINITION_EXT = '_definition';
    const FIELD_ITEM = 'item';
    const FIELD_LINK_ID = 'linkId';
    const FIELD_LINK_ID_EXT = '_linkId';
    const FIELD_SUBJECT = 'subject';
    const FIELD_TEXT = 'text';
    const FIELD_TEXT_EXT = '_text';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A structured set of questions and their answers. The questions are ordered and
     * grouped into coherent subsets, corresponding to the structure of the grouping of
     * the questionnaire being responded to.
     *
     * The respondent's answer(s) to the question.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseAnswer[]
     */
    protected $answer = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an [[[ElementDefinition]]] that provides the details for the
     * item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $definition = null;

    /**
     * A structured set of questions and their answers. The questions are ordered and
     * grouped into coherent subsets, corresponding to the structure of the grouping of
     * the questionnaire being responded to.
     *
     * Questions or sub-groups nested beneath a question or group.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseItem[]
     */
    protected $item = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The item from the Questionnaire that corresponds to this item in the
     * QuestionnaireResponse resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $linkId = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * More specific subject this section's answers are about, details the subject
     * given in QuestionnaireResponse.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $subject = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text that is displayed above the contents of the group or as the text of the
     * question being answered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $text = null;

    /**
     * Validation map for fields in type QuestionnaireResponse.Item
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRQuestionnaireResponseItem Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireResponseItem::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ANSWER])) {
            if (is_array($data[self::FIELD_ANSWER])) {
                foreach($data[self::FIELD_ANSWER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRQuestionnaireResponseAnswer) {
                        $this->addAnswer($v);
                    } else {
                        $this->addAnswer(new FHIRQuestionnaireResponseAnswer($v));
                    }
                }
            } else if ($data[self::FIELD_ANSWER] instanceof FHIRQuestionnaireResponseAnswer) {
                $this->addAnswer($data[self::FIELD_ANSWER]);
            } else {
                $this->addAnswer(new FHIRQuestionnaireResponseAnswer($data[self::FIELD_ANSWER]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION]) || isset($data[self::FIELD_DEFINITION_EXT])) {
            if (isset($data[self::FIELD_DEFINITION])) {
                $value = $data[self::FIELD_DEFINITION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEFINITION_EXT]) && is_array($data[self::FIELD_DEFINITION_EXT])) {
                $ext = $data[self::FIELD_DEFINITION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setDefinition($value);
                } else if (is_array($value)) {
                    $this->setDefinition(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setDefinition(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDefinition(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_ITEM])) {
            if (is_array($data[self::FIELD_ITEM])) {
                foreach($data[self::FIELD_ITEM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRQuestionnaireResponseItem) {
                        $this->addItem($v);
                    } else {
                        $this->addItem(new FHIRQuestionnaireResponseItem($v));
                    }
                }
            } else if ($data[self::FIELD_ITEM] instanceof FHIRQuestionnaireResponseItem) {
                $this->addItem($data[self::FIELD_ITEM]);
            } else {
                $this->addItem(new FHIRQuestionnaireResponseItem($data[self::FIELD_ITEM]));
            }
        }
        if (isset($data[self::FIELD_LINK_ID]) || isset($data[self::FIELD_LINK_ID_EXT])) {
            if (isset($data[self::FIELD_LINK_ID])) {
                $value = $data[self::FIELD_LINK_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LINK_ID_EXT]) && is_array($data[self::FIELD_LINK_ID_EXT])) {
                $ext = $data[self::FIELD_LINK_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setLinkId($value);
                } else if (is_array($value)) {
                    $this->setLinkId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setLinkId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLinkId(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_TEXT]) || isset($data[self::FIELD_TEXT_EXT])) {
            if (isset($data[self::FIELD_TEXT])) {
                $value = $data[self::FIELD_TEXT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TEXT_EXT]) && is_array($data[self::FIELD_TEXT_EXT])) {
                $ext = $data[self::FIELD_TEXT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setText($value);
                } else if (is_array($value)) {
                    $this->setText(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setText(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setText(new FHIRString($ext));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<QuestionnaireResponseItem{$xmlns}></QuestionnaireResponseItem>";
    }

    /**
     * A structured set of questions and their answers. The questions are ordered and
     * grouped into coherent subsets, corresponding to the structure of the grouping of
     * the questionnaire being responded to.
     *
     * The respondent's answer(s) to the question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseAnswer[]
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * A structured set of questions and their answers. The questions are ordered and
     * grouped into coherent subsets, corresponding to the structure of the grouping of
     * the questionnaire being responded to.
     *
     * The respondent's answer(s) to the question.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseAnswer $answer
     * @return static
     */
    public function addAnswer(FHIRQuestionnaireResponseAnswer $answer = null)
    {
        $this->answer[] = $answer;
        return $this;
    }

    /**
     * A structured set of questions and their answers. The questions are ordered and
     * grouped into coherent subsets, corresponding to the structure of the grouping of
     * the questionnaire being responded to.
     *
     * The respondent's answer(s) to the question.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseAnswer[] $answer
     * @return static
     */
    public function setAnswer(array $answer = [])
    {
        $this->answer = [];
        if ([] === $answer) {
            return $this;
        }
        foreach($answer as $v) {
            if ($v instanceof FHIRQuestionnaireResponseAnswer) {
                $this->addAnswer($v);
            } else {
                $this->addAnswer(new FHIRQuestionnaireResponseAnswer($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an [[[ElementDefinition]]] that provides the details for the
     * item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an [[[ElementDefinition]]] that provides the details for the
     * item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $definition
     * @return static
     */
    public function setDefinition($definition = null)
    {
        if (null === $definition) {
            $this->definition = null;
            return $this;
        }
        if ($definition instanceof FHIRUri) {
            $this->definition = $definition;
            return $this;
        }
        $this->definition = new FHIRUri($definition);
        return $this;
    }

    /**
     * A structured set of questions and their answers. The questions are ordered and
     * grouped into coherent subsets, corresponding to the structure of the grouping of
     * the questionnaire being responded to.
     *
     * Questions or sub-groups nested beneath a question or group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseItem[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * A structured set of questions and their answers. The questions are ordered and
     * grouped into coherent subsets, corresponding to the structure of the grouping of
     * the questionnaire being responded to.
     *
     * Questions or sub-groups nested beneath a question or group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseItem $item
     * @return static
     */
    public function addItem(FHIRQuestionnaireResponseItem $item = null)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * A structured set of questions and their answers. The questions are ordered and
     * grouped into coherent subsets, corresponding to the structure of the grouping of
     * the questionnaire being responded to.
     *
     * Questions or sub-groups nested beneath a question or group.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseItem[] $item
     * @return static
     */
    public function setItem(array $item = [])
    {
        $this->item = [];
        if ([] === $item) {
            return $this;
        }
        foreach($item as $v) {
            if ($v instanceof FHIRQuestionnaireResponseItem) {
                $this->addItem($v);
            } else {
                $this->addItem(new FHIRQuestionnaireResponseItem($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The item from the Questionnaire that corresponds to this item in the
     * QuestionnaireResponse resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The item from the Questionnaire that corresponds to this item in the
     * QuestionnaireResponse resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $linkId
     * @return static
     */
    public function setLinkId($linkId = null)
    {
        if (null === $linkId) {
            $this->linkId = null;
            return $this;
        }
        if ($linkId instanceof FHIRString) {
            $this->linkId = $linkId;
            return $this;
        }
        $this->linkId = new FHIRString($linkId);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * More specific subject this section's answers are about, details the subject
     * given in QuestionnaireResponse.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * More specific subject this section's answers are about, details the subject
     * given in QuestionnaireResponse.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text that is displayed above the contents of the group or as the text of the
     * question being answered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text that is displayed above the contents of the group or as the text of the
     * question being answered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $text
     * @return static
     */
    public function setText($text = null)
    {
        if (null === $text) {
            $this->text = null;
            return $this;
        }
        if ($text instanceof FHIRString) {
            $this->text = $text;
            return $this;
        }
        $this->text = new FHIRString($text);
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if ([] !== ($vs = $this->getAnswer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ANSWER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getItem())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ITEM, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getLinkId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LINK_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getText())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER])) {
            $v = $this->getAnswer();
            foreach($validationRules[self::FIELD_ANSWER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_DOT_ITEM, self::FIELD_ANSWER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER])) {
                        $errs[self::FIELD_ANSWER] = [];
                    }
                    $errs[self::FIELD_ANSWER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION])) {
            $v = $this->getDefinition();
            foreach($validationRules[self::FIELD_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_DOT_ITEM, self::FIELD_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION])) {
                        $errs[self::FIELD_DEFINITION] = [];
                    }
                    $errs[self::FIELD_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ITEM])) {
            $v = $this->getItem();
            foreach($validationRules[self::FIELD_ITEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_DOT_ITEM, self::FIELD_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ITEM])) {
                        $errs[self::FIELD_ITEM] = [];
                    }
                    $errs[self::FIELD_ITEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LINK_ID])) {
            $v = $this->getLinkId();
            foreach($validationRules[self::FIELD_LINK_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_DOT_ITEM, self::FIELD_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINK_ID])) {
                        $errs[self::FIELD_LINK_ID] = [];
                    }
                    $errs[self::FIELD_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_DOT_ITEM, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_DOT_ITEM, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseItem $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseItem
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRQuestionnaireResponseItem::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRQuestionnaireResponseItem::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRQuestionnaireResponseItem;
        } elseif (!is_object($type) || !($type instanceof FHIRQuestionnaireResponseItem)) {
            throw new \RuntimeException(sprintf(
                'FHIRQuestionnaireResponseItem::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseItem or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->answer)) {
            foreach($children->answer as $child) {
                $type->addAnswer(FHIRQuestionnaireResponseAnswer::xmlUnserialize($child));
            }
        }
        if (isset($children->definition)) {
            $type->setDefinition(FHIRUri::xmlUnserialize($children->definition));
        }
        if (isset($attributes->definition)) {
            $pt = $type->getDefinition();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->definition);
            } else {
                $type->setDefinition((string)$attributes->definition);
            }
        }
        if (isset($children->item)) {
            foreach($children->item as $child) {
                $type->addItem(FHIRQuestionnaireResponseItem::xmlUnserialize($child));
            }
        }
        if (isset($children->linkId)) {
            $type->setLinkId(FHIRString::xmlUnserialize($children->linkId));
        }
        if (isset($attributes->linkId)) {
            $pt = $type->getLinkId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->linkId);
            } else {
                $type->setLinkId((string)$attributes->linkId);
            }
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
        }
        if (isset($children->text)) {
            $type->setText(FHIRString::xmlUnserialize($children->text));
        }
        if (isset($attributes->text)) {
            $pt = $type->getText();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->text);
            } else {
                $type->setText((string)$attributes->text);
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if ([] !== ($vs = $this->getAnswer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ITEM, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getLinkId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LINK_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getText())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TEXT, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getAnswer())) {
            $a[self::FIELD_ANSWER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ANSWER][] = $v;
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            $a[self::FIELD_DEFINITION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_DEFINITION_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getItem())) {
            $a[self::FIELD_ITEM] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ITEM][] = $v;
            }
        }
        if (null !== ($v = $this->getLinkId())) {
            $a[self::FIELD_LINK_ID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_LINK_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if (null !== ($v = $this->getText())) {
            $a[self::FIELD_TEXT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_TEXT_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}