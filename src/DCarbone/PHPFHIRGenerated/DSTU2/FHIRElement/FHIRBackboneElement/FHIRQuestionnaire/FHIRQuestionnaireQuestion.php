<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 10th, 2019 18:12+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnswerFormat;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A structured set of questions intended to guide the collection of answers. The
 * questions are ordered and grouped into coherent subsets, corresponding to the
 * structure of the grouping of the underlying questions.
 *
 * Class FHIRQuestionnaireQuestion
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire
 */
class FHIRQuestionnaireQuestion extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CONCEPT = 'concept';
    const FIELD_GROUP = 'group';
    const FIELD_LINK_ID = 'linkId';
    const FIELD_LINK_ID_EXT = '_linkId';
    const FIELD_OPTION = 'option';
    const FIELD_OPTIONS = 'options';
    const FIELD_REPEATS = 'repeats';
    const FIELD_REPEATS_EXT = '_repeats';
    const FIELD_REQUIRED = 'required';
    const FIELD_REQUIRED_EXT = '_required';
    const FIELD_TEXT = 'text';
    const FIELD_TEXT_EXT = '_text';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a how this question is known in a particular terminology such as
     * LOINC.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    protected $concept = [];

    /**
     * A structured set of questions intended to guide the collection of answers. The
     * questions are ordered and grouped into coherent subsets, corresponding to the
     * structure of the grouping of the underlying questions.
     *
     * Nested group, containing nested question for this question. The order of groups
     * within the question is relevant.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup[]
     */
    protected $group = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the questionnaire allowing linkage to the
     * equivalent group in a [[[QuestionnaireResponse]]] resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $linkId = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For a "choice" question, identifies one of the permitted answers for the
     * question.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    protected $option = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to a value set containing a list of codes representing permitted
     * answers for the question.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $options = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, the question may have more than one answer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $repeats = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the question must be answered and have required groups
     * within it also present. If false, the question and any contained groups may be
     * skipped when answering the questionnaire.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $required = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual question as shown to the user to prompt them for an answer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $text = null;

    /**
     * The expected format of an answer.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The expected format of the answer, e.g. the type of input (string, integer) or
     * whether a (multiple) choice is expected.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnswerFormat
     */
    protected $type = null;

    /**
     * FHIRQuestionnaireQuestion Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireQuestion::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CONCEPT])) {
            if (is_array($data[self::FIELD_CONCEPT])) {
                foreach($data[self::FIELD_CONCEPT] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $this->addConcept($v);
                    } else {
                        $this->addConcept(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_CONCEPT] instanceof FHIRCoding) {
                $this->addConcept($data[self::FIELD_CONCEPT]);
            } else {
                $this->addConcept(new FHIRCoding($data[self::FIELD_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_GROUP])) {
            if (is_array($data[self::FIELD_GROUP])) {
                foreach($data[self::FIELD_GROUP] as $v) {
                    if ($v instanceof FHIRQuestionnaireGroup) {
                        $this->addGroup($v);
                    } else {
                        $this->addGroup(new FHIRQuestionnaireGroup($v));
                    }
                }
            } else if ($data[self::FIELD_GROUP] instanceof FHIRQuestionnaireGroup) {
                $this->addGroup($data[self::FIELD_GROUP]);
            } else {
                $this->addGroup(new FHIRQuestionnaireGroup($data[self::FIELD_GROUP]));
            }
        }
        if (isset($data[self::FIELD_LINK_ID])) {
            $ext = (isset($data[self::FIELD_LINK_ID_EXT]) && is_array($data[self::FIELD_LINK_ID_EXT]))
                ? $data[self::FIELD_LINK_ID_EXT]
                : null;
            if ($data[self::FIELD_LINK_ID] instanceof FHIRString) {
                $this->setLinkId($data[self::FIELD_LINK_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_LINK_ID])) {
                $this->setLinkId(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_LINK_ID]] + $ext));
            } else {
                $this->setLinkId(new FHIRString($data[self::FIELD_LINK_ID]));
            }
        }
        if (isset($data[self::FIELD_OPTION])) {
            if (is_array($data[self::FIELD_OPTION])) {
                foreach($data[self::FIELD_OPTION] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $this->addOption($v);
                    } else {
                        $this->addOption(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_OPTION] instanceof FHIRCoding) {
                $this->addOption($data[self::FIELD_OPTION]);
            } else {
                $this->addOption(new FHIRCoding($data[self::FIELD_OPTION]));
            }
        }
        if (isset($data[self::FIELD_OPTIONS])) {
            if ($data[self::FIELD_OPTIONS] instanceof FHIRReference) {
                $this->setOptions($data[self::FIELD_OPTIONS]);
            } else {
                $this->setOptions(new FHIRReference($data[self::FIELD_OPTIONS]));
            }
        }
        if (isset($data[self::FIELD_REPEATS])) {
            $ext = (isset($data[self::FIELD_REPEATS_EXT]) && is_array($data[self::FIELD_REPEATS_EXT]))
                ? $data[self::FIELD_REPEATS_EXT]
                : null;
            if ($data[self::FIELD_REPEATS] instanceof FHIRBoolean) {
                $this->setRepeats($data[self::FIELD_REPEATS]);
            } elseif ($ext && is_scalar($data[self::FIELD_REPEATS])) {
                $this->setRepeats(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_REPEATS]] + $ext));
            } else {
                $this->setRepeats(new FHIRBoolean($data[self::FIELD_REPEATS]));
            }
        }
        if (isset($data[self::FIELD_REQUIRED])) {
            $ext = (isset($data[self::FIELD_REQUIRED_EXT]) && is_array($data[self::FIELD_REQUIRED_EXT]))
                ? $data[self::FIELD_REQUIRED_EXT]
                : null;
            if ($data[self::FIELD_REQUIRED] instanceof FHIRBoolean) {
                $this->setRequired($data[self::FIELD_REQUIRED]);
            } elseif ($ext && is_scalar($data[self::FIELD_REQUIRED])) {
                $this->setRequired(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_REQUIRED]] + $ext));
            } else {
                $this->setRequired(new FHIRBoolean($data[self::FIELD_REQUIRED]));
            }
        }
        if (isset($data[self::FIELD_TEXT])) {
            $ext = (isset($data[self::FIELD_TEXT_EXT]) && is_array($data[self::FIELD_TEXT_EXT]))
                ? $data[self::FIELD_TEXT_EXT]
                : null;
            if ($data[self::FIELD_TEXT] instanceof FHIRString) {
                $this->setText($data[self::FIELD_TEXT]);
            } elseif ($ext && is_scalar($data[self::FIELD_TEXT])) {
                $this->setText(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_TEXT]] + $ext));
            } else {
                $this->setText(new FHIRString($data[self::FIELD_TEXT]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT]))
                ? $data[self::FIELD_TYPE_EXT]
                : null;
            if ($data[self::FIELD_TYPE] instanceof FHIRAnswerFormat) {
                $this->setType($data[self::FIELD_TYPE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TYPE])) {
                $this->setType(new FHIRAnswerFormat([FHIRAnswerFormat::FIELD_VALUE => $data[self::FIELD_TYPE]] + $ext));
            } else {
                $this->setType(new FHIRAnswerFormat($data[self::FIELD_TYPE]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
        return "<QuestionnaireQuestion{$xmlns}></QuestionnaireQuestion>";
    }


    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a how this question is known in a particular terminology such as
     * LOINC.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a how this question is known in a particular terminology such as
     * LOINC.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $concept
     * @return static
     */
    public function addConcept(FHIRCoding $concept = null)
    {
        $this->concept[] = $concept;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a how this question is known in a particular terminology such as
     * LOINC.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[] $concept
     * @return static
     */
    public function setConcept(array $concept = [])
    {
        $this->concept = [];
        if ([] === $concept) {
            return $this;
        }
        foreach($concept as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addConcept($v);
            } else {
                $this->addConcept(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers. The
     * questions are ordered and grouped into coherent subsets, corresponding to the
     * structure of the grouping of the underlying questions.
     *
     * Nested group, containing nested question for this question. The order of groups
     * within the question is relevant.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * A structured set of questions intended to guide the collection of answers. The
     * questions are ordered and grouped into coherent subsets, corresponding to the
     * structure of the grouping of the underlying questions.
     *
     * Nested group, containing nested question for this question. The order of groups
     * within the question is relevant.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup $group
     * @return static
     */
    public function addGroup(FHIRQuestionnaireGroup $group = null)
    {
        $this->group[] = $group;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers. The
     * questions are ordered and grouped into coherent subsets, corresponding to the
     * structure of the grouping of the underlying questions.
     *
     * Nested group, containing nested question for this question. The order of groups
     * within the question is relevant.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup[] $group
     * @return static
     */
    public function setGroup(array $group = [])
    {
        $this->group = [];
        if ([] === $group) {
            return $this;
        }
        foreach($group as $v) {
            if ($v instanceof FHIRQuestionnaireGroup) {
                $this->addGroup($v);
            } else {
                $this->addGroup(new FHIRQuestionnaireGroup($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the questionnaire allowing linkage to the
     * equivalent group in a [[[QuestionnaireResponse]]] resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
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
     * An identifier that is unique within the questionnaire allowing linkage to the
     * equivalent group in a [[[QuestionnaireResponse]]] resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $linkId
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
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For a "choice" question, identifies one of the permitted answers for the
     * question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For a "choice" question, identifies one of the permitted answers for the
     * question.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $option
     * @return static
     */
    public function addOption(FHIRCoding $option = null)
    {
        $this->option[] = $option;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For a "choice" question, identifies one of the permitted answers for the
     * question.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[] $option
     * @return static
     */
    public function setOption(array $option = [])
    {
        $this->option = [];
        if ([] === $option) {
            return $this;
        }
        foreach($option as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addOption($v);
            } else {
                $this->addOption(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to a value set containing a list of codes representing permitted
     * answers for the question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to a value set containing a list of codes representing permitted
     * answers for the question.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $options
     * @return static
     */
    public function setOptions(FHIRReference $options = null)
    {
        $this->options = $options;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, the question may have more than one answer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getRepeats()
    {
        return $this->repeats;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, the question may have more than one answer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $repeats
     * @return static
     */
    public function setRepeats($repeats = null)
    {
        if (null === $repeats) {
            $this->repeats = null;
            return $this;
        }
        if ($repeats instanceof FHIRBoolean) {
            $this->repeats = $repeats;
            return $this;
        }
        $this->repeats = new FHIRBoolean($repeats);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the question must be answered and have required groups
     * within it also present. If false, the question and any contained groups may be
     * skipped when answering the questionnaire.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the question must be answered and have required groups
     * within it also present. If false, the question and any contained groups may be
     * skipped when answering the questionnaire.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $required
     * @return static
     */
    public function setRequired($required = null)
    {
        if (null === $required) {
            $this->required = null;
            return $this;
        }
        if ($required instanceof FHIRBoolean) {
            $this->required = $required;
            return $this;
        }
        $this->required = new FHIRBoolean($required);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual question as shown to the user to prompt them for an answer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
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
     * The actual question as shown to the user to prompt them for an answer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $text
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
     * The expected format of an answer.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The expected format of the answer, e.g. the type of input (string, integer) or
     * whether a (multiple) choice is expected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnswerFormat
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The expected format of an answer.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The expected format of the answer, e.g. the type of input (string, integer) or
     * whether a (multiple) choice is expected.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnswerFormat $type
     * @return static
     */
    public function setType(FHIRAnswerFormat $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion
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
                throw new \DomainException(sprintf('FHIRQuestionnaireQuestion::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRQuestionnaireQuestion::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRQuestionnaireQuestion;
        } elseif (!is_object($type) || !($type instanceof FHIRQuestionnaireQuestion)) {
            throw new \RuntimeException(sprintf(
                'FHIRQuestionnaireQuestion::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion or null, %s seen.',
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
        if (isset($children->concept)) {
            foreach($children->concept as $child) {
                $type->addConcept(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->group)) {
            foreach($children->group as $child) {
                $type->addGroup(FHIRQuestionnaireGroup::xmlUnserialize($child));
            }
        }
        if (isset($attributes->linkId)) {
            $type->setLinkId((string)$attributes->linkId);
        }
        if (isset($children->linkId)) {
            $type->setLinkId(FHIRString::xmlUnserialize($children->linkId));
        }
        if (isset($children->option)) {
            foreach($children->option as $child) {
                $type->addOption(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->options)) {
            $type->setOptions(FHIRReference::xmlUnserialize($children->options));
        }
        if (isset($attributes->repeats)) {
            $type->setRepeats((string)$attributes->repeats);
        }
        if (isset($children->repeats)) {
            $type->setRepeats(FHIRBoolean::xmlUnserialize($children->repeats));
        }
        if (isset($attributes->required)) {
            $type->setRequired((string)$attributes->required);
        }
        if (isset($children->required)) {
            $type->setRequired(FHIRBoolean::xmlUnserialize($children->required));
        }
        if (isset($attributes->text)) {
            $type->setText((string)$attributes->text);
        }
        if (isset($children->text)) {
            $type->setText(FHIRString::xmlUnserialize($children->text));
        }
        if (isset($children->type)) {
            $type->setType(FHIRAnswerFormat::xmlUnserialize($children->type));
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

        if ([] !== ($vs = $this->getConcept())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONCEPT, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getGroup())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_GROUP, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getLinkId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LINK_ID, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getOption())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_OPTION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getOptions())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OPTIONS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRepeats())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REPEATS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRequired())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUIRED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getText())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TEXT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getConcept())) {
            $a[self::FIELD_CONCEPT] = $vs;
        }
        if ([] !== ($vs = $this->getGroup())) {
            $a[self::FIELD_GROUP] = $vs;
        }
        if (null !== ($v = $this->getLinkId())) {
            $a[self::FIELD_LINK_ID] = $v->getValue();
            $a[self::FIELD_LINK_ID_EXT] = $v;
        }
        if ([] !== ($vs = $this->getOption())) {
            $a[self::FIELD_OPTION] = $vs;
        }
        if (null !== ($v = $this->getOptions())) {
            $a[self::FIELD_OPTIONS] = $v;
        }
        if (null !== ($v = $this->getRepeats())) {
            $a[self::FIELD_REPEATS] = $v->getValue();
            $a[self::FIELD_REPEATS_EXT] = $v;
        }
        if (null !== ($v = $this->getRequired())) {
            $a[self::FIELD_REQUIRED] = $v->getValue();
            $a[self::FIELD_REQUIRED_EXT] = $v;
        }
        if (null !== ($v = $this->getText())) {
            $a[self::FIELD_TEXT] = $v->getValue();
            $a[self::FIELD_TEXT_EXT] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
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