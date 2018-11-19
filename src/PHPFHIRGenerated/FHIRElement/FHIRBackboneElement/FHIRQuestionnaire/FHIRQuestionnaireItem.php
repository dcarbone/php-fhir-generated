<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireItemType;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRTime;
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
     * A terminology code that corresponds to this group or question (e.g. a code from LOINC, which defines many questions and answers).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    private $code = [];

    /**
     * A reference to an [[[ElementDefinition]]] that provides the details for the item. If a definition is provided, then the following element values can be inferred from the definition: 

* code (ElementDefinition.code)
* type (ElementDefinition.type)
* required (ElementDefinition.min)
* repeats (ElementDefinition.max)
* maxLength (ElementDefinition.maxLength)
* options (ElementDefinition.binding)

Any information provided in these elements on a Questionnaire Item overrides the information from the definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $definition = null;

    /**
     * A constraint indicating that this item should only be enabled (displayed/allow answers to be captured) when the specified condition is true.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen[]
     */
    private $enableWhen = [];

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    private $initialAttachment = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $initialBoolean = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    private $initialCoding = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    private $initialDate = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $initialDateTime = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $initialDecimal = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $initialInteger = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $initialQuantity = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $initialReference = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $initialString = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    private $initialTime = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $initialUri = null;

    /**
     * Text, questions and other groups to be nested beneath a question or group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem[]
     */
    private $item = [];

    /**
     * An identifier that is unique within the Questionnaire allowing linkage to the equivalent item in a QuestionnaireResponse resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $linkId = null;

    /**
     * The maximum number of characters that are permitted in the answer to be considered a "valid" QuestionnaireResponse.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $maxLength = null;

    /**
     * One of the permitted answers for a "choice" or "open-choice" question.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireOption[]
     */
    private $option = [];

    /**
     * A reference to a value set containing a list of codes representing permitted answers for a "choice" or "open-choice" question.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $options = null;

    /**
     * A short label for a particular group, question or set of display text within the questionnaire used for reference by the individual completing the questionnaire.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $prefix = null;

    /**
     * An indication, when true, that the value cannot be changed by a human respondent to the Questionnaire.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $readOnly = null;

    /**
     * An indication, if true, that the item may occur multiple times in the response, collecting multiple answers answers for questions or multiple sets of answers for groups.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $repeats = null;

    /**
     * An indication, if true, that the item must be present in a "completed" QuestionnaireResponse.  If false, the item may be skipped when answering the questionnaire.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $required = null;

    /**
     * The name of a section, the text of a question or text content for a display item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $text = null;

    /**
     * The type of questionnaire item this is - whether text for display, a grouping of other items or a particular type of data to be captured (string, integer, coded choice, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireItemType
     */
    private $type = null;

    /**
     * FHIRQuestionnaireItem Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['code'])) {
                $value = $data['code'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCoding($v);
                        } 
                        if (!($v instanceof FHIRCoding)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Collection field \"code\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCoding or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addCode($v);
                    }
                }
            }
            if (isset($data['definition'])) {
                $value = $data['definition'];
                if (is_array($value)) {
                    $value = new FHIRUri($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUri($value);
                }
                if (!($value instanceof FHIRUri)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"definition\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($value)); 
                }
                $this->setDefinition($value);
            }
            if (isset($data['enableWhen'])) {
                $value = $data['enableWhen'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRQuestionnaireEnableWhen($v);
                        } 
                        if (!($v instanceof FHIRQuestionnaireEnableWhen)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Collection field \"enableWhen\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addEnableWhen($v);
                    }
                }
            }
            if (isset($data['initialAttachment'])) {
                $value = $data['initialAttachment'];
                if (is_array($value)) {
                    $value = new FHIRAttachment($value);
                } 
                if (!($value instanceof FHIRAttachment)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"initialAttachment\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAttachment or data to construct type, saw ".gettype($value)); 
                }
                $this->setInitialAttachment($value);
            }
            if (isset($data['initialBoolean'])) {
                $value = $data['initialBoolean'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"initialBoolean\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value)); 
                }
                $this->setInitialBoolean($value);
            }
            if (isset($data['initialCoding'])) {
                $value = $data['initialCoding'];
                if (is_array($value)) {
                    $value = new FHIRCoding($value);
                } 
                if (!($value instanceof FHIRCoding)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"initialCoding\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCoding or data to construct type, saw ".gettype($value)); 
                }
                $this->setInitialCoding($value);
            }
            if (isset($data['initialDate'])) {
                $value = $data['initialDate'];
                if (is_array($value)) {
                    $value = new FHIRDate($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDate($value);
                }
                if (!($value instanceof FHIRDate)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"initialDate\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or data to construct type, saw ".gettype($value)); 
                }
                $this->setInitialDate($value);
            }
            if (isset($data['initialDateTime'])) {
                $value = $data['initialDateTime'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"initialDateTime\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value)); 
                }
                $this->setInitialDateTime($value);
            }
            if (isset($data['initialDecimal'])) {
                $value = $data['initialDecimal'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"initialDecimal\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value)); 
                }
                $this->setInitialDecimal($value);
            }
            if (isset($data['initialInteger'])) {
                $value = $data['initialInteger'];
                if (is_array($value)) {
                    $value = new FHIRInteger($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInteger($value);
                }
                if (!($value instanceof FHIRInteger)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"initialInteger\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or data to construct type, saw ".gettype($value)); 
                }
                $this->setInitialInteger($value);
            }
            if (isset($data['initialQuantity'])) {
                $value = $data['initialQuantity'];
                if (is_array($value)) {
                    $value = new FHIRQuantity($value);
                } 
                if (!($value instanceof FHIRQuantity)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"initialQuantity\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity or data to construct type, saw ".gettype($value)); 
                }
                $this->setInitialQuantity($value);
            }
            if (isset($data['initialReference'])) {
                $value = $data['initialReference'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"initialReference\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setInitialReference($value);
            }
            if (isset($data['initialString'])) {
                $value = $data['initialString'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"initialString\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setInitialString($value);
            }
            if (isset($data['initialTime'])) {
                $value = $data['initialTime'];
                if (is_array($value)) {
                    $value = new FHIRTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRTime($value);
                }
                if (!($value instanceof FHIRTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"initialTime\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or data to construct type, saw ".gettype($value)); 
                }
                $this->setInitialTime($value);
            }
            if (isset($data['initialUri'])) {
                $value = $data['initialUri'];
                if (is_array($value)) {
                    $value = new FHIRUri($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUri($value);
                }
                if (!($value instanceof FHIRUri)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"initialUri\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($value)); 
                }
                $this->setInitialUri($value);
            }
            if (isset($data['item'])) {
                $value = $data['item'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRQuestionnaireItem($v);
                        } 
                        if (!($v instanceof FHIRQuestionnaireItem)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Collection field \"item\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addItem($v);
                    }
                }
            }
            if (isset($data['linkId'])) {
                $value = $data['linkId'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"linkId\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setLinkId($value);
            }
            if (isset($data['maxLength'])) {
                $value = $data['maxLength'];
                if (is_array($value)) {
                    $value = new FHIRInteger($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInteger($value);
                }
                if (!($value instanceof FHIRInteger)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"maxLength\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or data to construct type, saw ".gettype($value)); 
                }
                $this->setMaxLength($value);
            }
            if (isset($data['option'])) {
                $value = $data['option'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRQuestionnaireOption($v);
                        } 
                        if (!($v instanceof FHIRQuestionnaireOption)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Collection field \"option\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireOption or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addOption($v);
                    }
                }
            }
            if (isset($data['options'])) {
                $value = $data['options'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"options\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setOptions($value);
            }
            if (isset($data['prefix'])) {
                $value = $data['prefix'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"prefix\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setPrefix($value);
            }
            if (isset($data['readOnly'])) {
                $value = $data['readOnly'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"readOnly\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value)); 
                }
                $this->setReadOnly($value);
            }
            if (isset($data['repeats'])) {
                $value = $data['repeats'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"repeats\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value)); 
                }
                $this->setRepeats($value);
            }
            if (isset($data['required'])) {
                $value = $data['required'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"required\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value)); 
                }
                $this->setRequired($value);
            }
            if (isset($data['text'])) {
                $value = $data['text'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"text\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setText($value);
            }
            if (isset($data['type'])) {
                $value = $data['type'];
                if (is_array($value)) {
                    $value = new FHIRQuestionnaireItemType($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRQuestionnaireItemType($value);
                }
                if (!($value instanceof FHIRQuestionnaireItemType)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Property \"type\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireItemType or data to construct type, saw ".gettype($value)); 
                }
                $this->setType($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * A terminology code that corresponds to this group or question (e.g. a code from LOINC, which defines many questions and answers).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function addCode(FHIRCoding $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code[] = $code;
        return $this;
    }

    /**
     * A terminology code that corresponds to this group or question (e.g. a code from LOINC, which defines many questions and answers).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A reference to an [[[ElementDefinition]]] that provides the details for the item. If a definition is provided, then the following element values can be inferred from the definition: 

* code (ElementDefinition.code)
* type (ElementDefinition.type)
* required (ElementDefinition.min)
* repeats (ElementDefinition.max)
* maxLength (ElementDefinition.maxLength)
* options (ElementDefinition.binding)

Any information provided in these elements on a Questionnaire Item overrides the information from the definition.
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
     * A reference to an [[[ElementDefinition]]] that provides the details for the item. If a definition is provided, then the following element values can be inferred from the definition: 

* code (ElementDefinition.code)
* type (ElementDefinition.type)
* required (ElementDefinition.min)
* repeats (ElementDefinition.max)
* maxLength (ElementDefinition.maxLength)
* options (ElementDefinition.binding)

Any information provided in these elements on a Questionnaire Item overrides the information from the definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * A constraint indicating that this item should only be enabled (displayed/allow answers to be captured) when the specified condition is true.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
     * @return $this
     */
    public function addEnableWhen(FHIRQuestionnaireEnableWhen $enableWhen = null)
    {
        if (null === $enableWhen) {
            return $this; 
        }
        $this->enableWhen[] = $enableWhen;
        return $this;
    }

    /**
     * A constraint indicating that this item should only be enabled (displayed/allow answers to be captured) when the specified condition is true.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen[]
     */
    public function getEnableWhen()
    {
        return $this->enableWhen;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function setInitialAttachment(FHIRAttachment $initialAttachment = null)
    {
        if (null === $initialAttachment) {
            return $this; 
        }
        $this->initialAttachment = $initialAttachment;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getInitialAttachment()
    {
        return $this->initialAttachment;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setInitialBoolean($initialBoolean)
    {
        if (null === $initialBoolean) {
            return $this; 
        }
        if (is_scalar($initialBoolean)) {
            $initialBoolean = new FHIRBoolean($initialBoolean);
        }
        if (!($initialBoolean instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireItem::setInitialBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($initialBoolean)
            ));
        }
        $this->initialBoolean = $initialBoolean;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getInitialBoolean()
    {
        return $this->initialBoolean;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setInitialCoding(FHIRCoding $initialCoding = null)
    {
        if (null === $initialCoding) {
            return $this; 
        }
        $this->initialCoding = $initialCoding;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getInitialCoding()
    {
        return $this->initialCoding;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setInitialDate($initialDate)
    {
        if (null === $initialDate) {
            return $this; 
        }
        if (is_scalar($initialDate)) {
            $initialDate = new FHIRDate($initialDate);
        }
        if (!($initialDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireItem::setInitialDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($initialDate)
            ));
        }
        $this->initialDate = $initialDate;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getInitialDate()
    {
        return $this->initialDate;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setInitialDateTime($initialDateTime)
    {
        if (null === $initialDateTime) {
            return $this; 
        }
        if (is_scalar($initialDateTime)) {
            $initialDateTime = new FHIRDateTime($initialDateTime);
        }
        if (!($initialDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireItem::setInitialDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($initialDateTime)
            ));
        }
        $this->initialDateTime = $initialDateTime;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getInitialDateTime()
    {
        return $this->initialDateTime;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setInitialDecimal($initialDecimal)
    {
        if (null === $initialDecimal) {
            return $this; 
        }
        if (is_scalar($initialDecimal)) {
            $initialDecimal = new FHIRDecimal($initialDecimal);
        }
        if (!($initialDecimal instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireItem::setInitialDecimal - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($initialDecimal)
            ));
        }
        $this->initialDecimal = $initialDecimal;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getInitialDecimal()
    {
        return $this->initialDecimal;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setInitialInteger($initialInteger)
    {
        if (null === $initialInteger) {
            return $this; 
        }
        if (is_scalar($initialInteger)) {
            $initialInteger = new FHIRInteger($initialInteger);
        }
        if (!($initialInteger instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireItem::setInitialInteger - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($initialInteger)
            ));
        }
        $this->initialInteger = $initialInteger;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getInitialInteger()
    {
        return $this->initialInteger;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setInitialQuantity(FHIRQuantity $initialQuantity = null)
    {
        if (null === $initialQuantity) {
            return $this; 
        }
        $this->initialQuantity = $initialQuantity;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getInitialQuantity()
    {
        return $this->initialQuantity;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setInitialReference(FHIRReference $initialReference = null)
    {
        if (null === $initialReference) {
            return $this; 
        }
        $this->initialReference = $initialReference;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInitialReference()
    {
        return $this->initialReference;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setInitialString($initialString)
    {
        if (null === $initialString) {
            return $this; 
        }
        if (is_scalar($initialString)) {
            $initialString = new FHIRString($initialString);
        }
        if (!($initialString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireItem::setInitialString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($initialString)
            ));
        }
        $this->initialString = $initialString;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getInitialString()
    {
        return $this->initialString;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     * @return $this
     */
    public function setInitialTime($initialTime)
    {
        if (null === $initialTime) {
            return $this; 
        }
        if (is_scalar($initialTime)) {
            $initialTime = new FHIRTime($initialTime);
        }
        if (!($initialTime instanceof FHIRTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireItem::setInitialTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or appropriate scalar value, %s seen.',
                gettype($initialTime)
            ));
        }
        $this->initialTime = $initialTime;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getInitialTime()
    {
        return $this->initialTime;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setInitialUri($initialUri)
    {
        if (null === $initialUri) {
            return $this; 
        }
        if (is_scalar($initialUri)) {
            $initialUri = new FHIRUri($initialUri);
        }
        if (!($initialUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireItem::setInitialUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($initialUri)
            ));
        }
        $this->initialUri = $initialUri;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getInitialUri()
    {
        return $this->initialUri;
    }

    /**
     * Text, questions and other groups to be nested beneath a question or group.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem
     * @return $this
     */
    public function addItem(FHIRQuestionnaireItem $item = null)
    {
        if (null === $item) {
            return $this; 
        }
        $this->item[] = $item;
        return $this;
    }

    /**
     * Text, questions and other groups to be nested beneath a question or group.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem[]
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
     * One of the permitted answers for a "choice" or "open-choice" question.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireOption
     * @return $this
     */
    public function addOption(FHIRQuestionnaireOption $option = null)
    {
        if (null === $option) {
            return $this; 
        }
        $this->option[] = $option;
        return $this;
    }

    /**
     * One of the permitted answers for a "choice" or "open-choice" question.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireOption[]
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * A reference to a value set containing a list of codes representing permitted answers for a "choice" or "open-choice" question.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setOptions(FHIRReference $options = null)
    {
        if (null === $options) {
            return $this; 
        }
        $this->options = $options;
        return $this;
    }

    /**
     * A reference to a value set containing a list of codes representing permitted answers for a "choice" or "open-choice" question.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOptions()
    {
        return $this->options;
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
     * An indication, if true, that the item may occur multiple times in the response, collecting multiple answers answers for questions or multiple sets of answers for groups.
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
     * An indication, if true, that the item may occur multiple times in the response, collecting multiple answers answers for questions or multiple sets of answers for groups.
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
        if (0 < count($values = $this->getCode())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['code'] = $vs;
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            $a['definition'] = $v;
        }
        if (0 < count($values = $this->getEnableWhen())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['enableWhen'] = $vs;
            }
        }
        if (null !== ($v = $this->getInitialAttachment())) {
            $a['initialAttachment'] = $v;
        }
        if (null !== ($v = $this->getInitialBoolean())) {
            $a['initialBoolean'] = $v;
        }
        if (null !== ($v = $this->getInitialCoding())) {
            $a['initialCoding'] = $v;
        }
        if (null !== ($v = $this->getInitialDate())) {
            $a['initialDate'] = $v;
        }
        if (null !== ($v = $this->getInitialDateTime())) {
            $a['initialDateTime'] = $v;
        }
        if (null !== ($v = $this->getInitialDecimal())) {
            $a['initialDecimal'] = $v;
        }
        if (null !== ($v = $this->getInitialInteger())) {
            $a['initialInteger'] = $v;
        }
        if (null !== ($v = $this->getInitialQuantity())) {
            $a['initialQuantity'] = $v;
        }
        if (null !== ($v = $this->getInitialReference())) {
            $a['initialReference'] = $v;
        }
        if (null !== ($v = $this->getInitialString())) {
            $a['initialString'] = $v;
        }
        if (null !== ($v = $this->getInitialTime())) {
            $a['initialTime'] = $v;
        }
        if (null !== ($v = $this->getInitialUri())) {
            $a['initialUri'] = $v;
        }
        if (0 < count($values = $this->getItem())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['item'] = $vs;
            }
        }
        if (null !== ($v = $this->getLinkId())) {
            $a['linkId'] = $v;
        }
        if (null !== ($v = $this->getMaxLength())) {
            $a['maxLength'] = $v;
        }
        if (0 < count($values = $this->getOption())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['option'] = $vs;
            }
        }
        if (null !== ($v = $this->getOptions())) {
            $a['options'] = $v;
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
        if (0 < count($values = $this->getCode())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('code'));
                }
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            $v->xmlSerialize(true, $sxe->addChild('definition'));
        }
        if (0 < count($values = $this->getEnableWhen())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('enableWhen'));
                }
            }
        }
        if (null !== ($v = $this->getInitialAttachment())) {
            $v->xmlSerialize(true, $sxe->addChild('initialAttachment'));
        }
        if (null !== ($v = $this->getInitialBoolean())) {
            $v->xmlSerialize(true, $sxe->addChild('initialBoolean'));
        }
        if (null !== ($v = $this->getInitialCoding())) {
            $v->xmlSerialize(true, $sxe->addChild('initialCoding'));
        }
        if (null !== ($v = $this->getInitialDate())) {
            $v->xmlSerialize(true, $sxe->addChild('initialDate'));
        }
        if (null !== ($v = $this->getInitialDateTime())) {
            $v->xmlSerialize(true, $sxe->addChild('initialDateTime'));
        }
        if (null !== ($v = $this->getInitialDecimal())) {
            $v->xmlSerialize(true, $sxe->addChild('initialDecimal'));
        }
        if (null !== ($v = $this->getInitialInteger())) {
            $v->xmlSerialize(true, $sxe->addChild('initialInteger'));
        }
        if (null !== ($v = $this->getInitialQuantity())) {
            $v->xmlSerialize(true, $sxe->addChild('initialQuantity'));
        }
        if (null !== ($v = $this->getInitialReference())) {
            $v->xmlSerialize(true, $sxe->addChild('initialReference'));
        }
        if (null !== ($v = $this->getInitialString())) {
            $v->xmlSerialize(true, $sxe->addChild('initialString'));
        }
        if (null !== ($v = $this->getInitialTime())) {
            $v->xmlSerialize(true, $sxe->addChild('initialTime'));
        }
        if (null !== ($v = $this->getInitialUri())) {
            $v->xmlSerialize(true, $sxe->addChild('initialUri'));
        }
        if (0 < count($values = $this->getItem())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('item'));
                }
            }
        }
        if (null !== ($v = $this->getLinkId())) {
            $v->xmlSerialize(true, $sxe->addChild('linkId'));
        }
        if (null !== ($v = $this->getMaxLength())) {
            $v->xmlSerialize(true, $sxe->addChild('maxLength'));
        }
        if (0 < count($values = $this->getOption())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('option'));
                }
            }
        }
        if (null !== ($v = $this->getOptions())) {
            $v->xmlSerialize(true, $sxe->addChild('options'));
        }
        if (null !== ($v = $this->getPrefix())) {
            $v->xmlSerialize(true, $sxe->addChild('prefix'));
        }
        if (null !== ($v = $this->getReadOnly())) {
            $v->xmlSerialize(true, $sxe->addChild('readOnly'));
        }
        if (null !== ($v = $this->getRepeats())) {
            $v->xmlSerialize(true, $sxe->addChild('repeats'));
        }
        if (null !== ($v = $this->getRequired())) {
            $v->xmlSerialize(true, $sxe->addChild('required'));
        }
        if (null !== ($v = $this->getText())) {
            $v->xmlSerialize(true, $sxe->addChild('text'));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize(true, $sxe->addChild('type'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}