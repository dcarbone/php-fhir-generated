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
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRTime;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

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
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    private $answerAttachment = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $answerBoolean = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    private $answerCoding = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    private $answerDate = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $answerDateTime = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $answerDecimal = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $answerInteger = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $answerQuantity = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $answerReference = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $answerString = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    private $answerTime = null;

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $answerUri = null;

    /**
     * An indication that this item should be enabled only if the specified question is answered (hasAnswer=true) or not answered (hasAnswer=false).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $hasAnswer = null;

    /**
     * The linkId for the question whose answer (or lack of answer) governs whether this item is enabled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $question = null;

    /**
     * FHIRQuestionnaireEnableWhen Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['answerAttachment'])) {
                $value = $data['answerAttachment'];
                if (is_array($value)) {
                    $value = new FHIRAttachment($value);
                } 
                if (!($value instanceof FHIRAttachment)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen::__construct - Property \"answerAttachment\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAttachment or data to construct type, saw ".gettype($value));
                }
                $this->setAnswerAttachment($value);
            }
            if (isset($data['answerBoolean'])) {
                $value = $data['answerBoolean'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen::__construct - Property \"answerBoolean\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value));
                }
                $this->setAnswerBoolean($value);
            }
            if (isset($data['answerCoding'])) {
                $value = $data['answerCoding'];
                if (is_array($value)) {
                    $value = new FHIRCoding($value);
                } 
                if (!($value instanceof FHIRCoding)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen::__construct - Property \"answerCoding\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCoding or data to construct type, saw ".gettype($value));
                }
                $this->setAnswerCoding($value);
            }
            if (isset($data['answerDate'])) {
                $value = $data['answerDate'];
                if (is_array($value)) {
                    $value = new FHIRDate($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDate($value);
                }
                if (!($value instanceof FHIRDate)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen::__construct - Property \"answerDate\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or data to construct type, saw ".gettype($value));
                }
                $this->setAnswerDate($value);
            }
            if (isset($data['answerDateTime'])) {
                $value = $data['answerDateTime'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen::__construct - Property \"answerDateTime\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setAnswerDateTime($value);
            }
            if (isset($data['answerDecimal'])) {
                $value = $data['answerDecimal'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen::__construct - Property \"answerDecimal\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value));
                }
                $this->setAnswerDecimal($value);
            }
            if (isset($data['answerInteger'])) {
                $value = $data['answerInteger'];
                if (is_array($value)) {
                    $value = new FHIRInteger($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInteger($value);
                }
                if (!($value instanceof FHIRInteger)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen::__construct - Property \"answerInteger\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or data to construct type, saw ".gettype($value));
                }
                $this->setAnswerInteger($value);
            }
            if (isset($data['answerQuantity'])) {
                $value = $data['answerQuantity'];
                if (is_array($value)) {
                    $value = new FHIRQuantity($value);
                } 
                if (!($value instanceof FHIRQuantity)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen::__construct - Property \"answerQuantity\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity or data to construct type, saw ".gettype($value));
                }
                $this->setAnswerQuantity($value);
            }
            if (isset($data['answerReference'])) {
                $value = $data['answerReference'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen::__construct - Property \"answerReference\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setAnswerReference($value);
            }
            if (isset($data['answerString'])) {
                $value = $data['answerString'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen::__construct - Property \"answerString\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setAnswerString($value);
            }
            if (isset($data['answerTime'])) {
                $value = $data['answerTime'];
                if (is_array($value)) {
                    $value = new FHIRTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRTime($value);
                }
                if (!($value instanceof FHIRTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen::__construct - Property \"answerTime\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or data to construct type, saw ".gettype($value));
                }
                $this->setAnswerTime($value);
            }
            if (isset($data['answerUri'])) {
                $value = $data['answerUri'];
                if (is_array($value)) {
                    $value = new FHIRUri($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUri($value);
                }
                if (!($value instanceof FHIRUri)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen::__construct - Property \"answerUri\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($value));
                }
                $this->setAnswerUri($value);
            }
            if (isset($data['hasAnswer'])) {
                $value = $data['hasAnswer'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen::__construct - Property \"hasAnswer\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value));
                }
                $this->setHasAnswer($value);
            }
            if (isset($data['question'])) {
                $value = $data['question'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen::__construct - Property \"question\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setQuestion($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function setAnswerAttachment(FHIRAttachment $answerAttachment = null)
    {
        if (null === $answerAttachment) {
            return $this; 
        }
        $this->answerAttachment = $answerAttachment;
        return $this;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getAnswerAttachment()
    {
        return $this->answerAttachment;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
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
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAnswerBoolean()
    {
        return $this->answerBoolean;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
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
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getAnswerCoding()
    {
        return $this->answerCoding;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
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
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getAnswerDate()
    {
        return $this->answerDate;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
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
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAnswerDateTime()
    {
        return $this->answerDateTime;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
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
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getAnswerDecimal()
    {
        return $this->answerDecimal;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
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
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getAnswerInteger()
    {
        return $this->answerInteger;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
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
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getAnswerQuantity()
    {
        return $this->answerQuantity;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
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
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAnswerReference()
    {
        return $this->answerReference;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
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
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAnswerString()
    {
        return $this->answerString;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
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
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getAnswerTime()
    {
        return $this->answerTime;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setAnswerUri($answerUri)
    {
        if (null === $answerUri) {
            return $this; 
        }
        if (is_scalar($answerUri)) {
            $answerUri = new FHIRUri($answerUri);
        }
        if (!($answerUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireEnableWhen::setAnswerUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($answerUri)
            ));
        }
        $this->answerUri = $answerUri;
        return $this;
    }

    /**
     * An answer that the referenced question must match in order for the item to be enabled. (choose any one of answer*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getAnswerUri()
    {
        return $this->answerUri;
    }

    /**
     * An indication that this item should be enabled only if the specified question is answered (hasAnswer=true) or not answered (hasAnswer=false).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setHasAnswer($hasAnswer)
    {
        if (null === $hasAnswer) {
            return $this; 
        }
        if (is_scalar($hasAnswer)) {
            $hasAnswer = new FHIRBoolean($hasAnswer);
        }
        if (!($hasAnswer instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireEnableWhen::setHasAnswer - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($hasAnswer)
            ));
        }
        $this->hasAnswer = $hasAnswer;
        return $this;
    }

    /**
     * An indication that this item should be enabled only if the specified question is answered (hasAnswer=true) or not answered (hasAnswer=false).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getHasAnswer()
    {
        return $this->hasAnswer;
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
        if (null !== ($v = $this->getAnswerAttachment())) {
            $a['answerAttachment'] = $v;
        }
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
        if (null !== ($v = $this->getAnswerUri())) {
            $a['answerUri'] = $v;
        }
        if (null !== ($v = $this->getHasAnswer())) {
            $a['hasAnswer'] = $v;
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
        if (null !== ($v = $this->getAnswerAttachment())) {
            $v->xmlSerialize(true, $sxe->addChild('answerAttachment'));
        }
        if (null !== ($v = $this->getAnswerBoolean())) {
            $v->xmlSerialize(true, $sxe->addChild('answerBoolean'));
        }
        if (null !== ($v = $this->getAnswerCoding())) {
            $v->xmlSerialize(true, $sxe->addChild('answerCoding'));
        }
        if (null !== ($v = $this->getAnswerDate())) {
            $v->xmlSerialize(true, $sxe->addChild('answerDate'));
        }
        if (null !== ($v = $this->getAnswerDateTime())) {
            $v->xmlSerialize(true, $sxe->addChild('answerDateTime'));
        }
        if (null !== ($v = $this->getAnswerDecimal())) {
            $v->xmlSerialize(true, $sxe->addChild('answerDecimal'));
        }
        if (null !== ($v = $this->getAnswerInteger())) {
            $v->xmlSerialize(true, $sxe->addChild('answerInteger'));
        }
        if (null !== ($v = $this->getAnswerQuantity())) {
            $v->xmlSerialize(true, $sxe->addChild('answerQuantity'));
        }
        if (null !== ($v = $this->getAnswerReference())) {
            $v->xmlSerialize(true, $sxe->addChild('answerReference'));
        }
        if (null !== ($v = $this->getAnswerString())) {
            $v->xmlSerialize(true, $sxe->addChild('answerString'));
        }
        if (null !== ($v = $this->getAnswerTime())) {
            $v->xmlSerialize(true, $sxe->addChild('answerTime'));
        }
        if (null !== ($v = $this->getAnswerUri())) {
            $v->xmlSerialize(true, $sxe->addChild('answerUri'));
        }
        if (null !== ($v = $this->getHasAnswer())) {
            $v->xmlSerialize(true, $sxe->addChild('hasAnswer'));
        }
        if (null !== ($v = $this->getQuestion())) {
            $v->xmlSerialize(true, $sxe->addChild('question'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}