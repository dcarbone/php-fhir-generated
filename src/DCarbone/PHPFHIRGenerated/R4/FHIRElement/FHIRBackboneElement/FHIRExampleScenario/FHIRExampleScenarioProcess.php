<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Example of workflow instance.
 *
 * Class FHIRExampleScenarioProcess
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario
 */
class FHIRExampleScenarioProcess extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_PROCESS;
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_POST_CONDITIONS = 'postConditions';
    const FIELD_POST_CONDITIONS_EXT = '_postConditions';
    const FIELD_PRE_CONDITIONS = 'preConditions';
    const FIELD_PRE_CONDITIONS_EXT = '_preConditions';
    const FIELD_STEP = 'step';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A longer description of the group of operations.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    protected $description = null;

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Description of final status after the process ends.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    protected $postConditions = null;

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Description of initial status before the process starts.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    protected $preConditions = null;

    /**
     * Example of workflow instance.
     *
     * Each step of the process.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep[]
     */
    protected $step = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The diagram title of the group of operations.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $title = null;

    /**
     * Validation map for fields in type ExampleScenario.Process
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRExampleScenarioProcess Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExampleScenarioProcess::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            if (isset($data[self::FIELD_DESCRIPTION])) {
                $value = $data[self::FIELD_DESCRIPTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) {
                $ext = $data[self::FIELD_DESCRIPTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDescription(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_POST_CONDITIONS]) || isset($data[self::FIELD_POST_CONDITIONS_EXT])) {
            if (isset($data[self::FIELD_POST_CONDITIONS])) {
                $value = $data[self::FIELD_POST_CONDITIONS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_POST_CONDITIONS_EXT]) && is_array($data[self::FIELD_POST_CONDITIONS_EXT])) {
                $ext = $data[self::FIELD_POST_CONDITIONS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setPostConditions($value);
                } else if (is_array($value)) {
                    $this->setPostConditions(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setPostConditions(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPostConditions(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_PRE_CONDITIONS]) || isset($data[self::FIELD_PRE_CONDITIONS_EXT])) {
            if (isset($data[self::FIELD_PRE_CONDITIONS])) {
                $value = $data[self::FIELD_PRE_CONDITIONS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PRE_CONDITIONS_EXT]) && is_array($data[self::FIELD_PRE_CONDITIONS_EXT])) {
                $ext = $data[self::FIELD_PRE_CONDITIONS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setPreConditions($value);
                } else if (is_array($value)) {
                    $this->setPreConditions(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setPreConditions(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPreConditions(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_STEP])) {
            if (is_array($data[self::FIELD_STEP])) {
                foreach($data[self::FIELD_STEP] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRExampleScenarioStep) {
                        $this->addStep($v);
                    } else {
                        $this->addStep(new FHIRExampleScenarioStep($v));
                    }
                }
            } else if ($data[self::FIELD_STEP] instanceof FHIRExampleScenarioStep) {
                $this->addStep($data[self::FIELD_STEP]);
            } else {
                $this->addStep(new FHIRExampleScenarioStep($data[self::FIELD_STEP]));
            }
        }
        if (isset($data[self::FIELD_TITLE]) || isset($data[self::FIELD_TITLE_EXT])) {
            if (isset($data[self::FIELD_TITLE])) {
                $value = $data[self::FIELD_TITLE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TITLE_EXT]) && is_array($data[self::FIELD_TITLE_EXT])) {
                $ext = $data[self::FIELD_TITLE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTitle($value);
                } else if (is_array($value)) {
                    $this->setTitle(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTitle(new FHIRString($ext));
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
        return "<ExampleScenarioProcess{$xmlns}></ExampleScenarioProcess>";
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A longer description of the group of operations.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A longer description of the group of operations.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $description
     * @return static
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRMarkdown) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRMarkdown($description);
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Description of final status after the process ends.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    public function getPostConditions()
    {
        return $this->postConditions;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Description of final status after the process ends.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $postConditions
     * @return static
     */
    public function setPostConditions($postConditions = null)
    {
        if (null === $postConditions) {
            $this->postConditions = null;
            return $this;
        }
        if ($postConditions instanceof FHIRMarkdown) {
            $this->postConditions = $postConditions;
            return $this;
        }
        $this->postConditions = new FHIRMarkdown($postConditions);
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Description of initial status before the process starts.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    public function getPreConditions()
    {
        return $this->preConditions;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Description of initial status before the process starts.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $preConditions
     * @return static
     */
    public function setPreConditions($preConditions = null)
    {
        if (null === $preConditions) {
            $this->preConditions = null;
            return $this;
        }
        if ($preConditions instanceof FHIRMarkdown) {
            $this->preConditions = $preConditions;
            return $this;
        }
        $this->preConditions = new FHIRMarkdown($preConditions);
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Each step of the process.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep[]
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * Example of workflow instance.
     *
     * Each step of the process.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep $step
     * @return static
     */
    public function addStep(FHIRExampleScenarioStep $step = null)
    {
        $this->step[] = $step;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Each step of the process.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep[] $step
     * @return static
     */
    public function setStep(array $step = [])
    {
        $this->step = [];
        if ([] === $step) {
            return $this;
        }
        foreach($step as $v) {
            if ($v instanceof FHIRExampleScenarioStep) {
                $this->addStep($v);
            } else {
                $this->addStep(new FHIRExampleScenarioStep($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The diagram title of the group of operations.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The diagram title of the group of operations.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $title
     * @return static
     */
    public function setTitle($title = null)
    {
        if (null === $title) {
            $this->title = null;
            return $this;
        }
        if ($title instanceof FHIRString) {
            $this->title = $title;
            return $this;
        }
        $this->title = new FHIRString($title);
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
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPostConditions())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_POST_CONDITIONS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPreConditions())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRE_CONDITIONS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getStep())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_STEP, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TITLE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_PROCESS, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POST_CONDITIONS])) {
            $v = $this->getPostConditions();
            foreach($validationRules[self::FIELD_POST_CONDITIONS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_PROCESS, self::FIELD_POST_CONDITIONS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POST_CONDITIONS])) {
                        $errs[self::FIELD_POST_CONDITIONS] = [];
                    }
                    $errs[self::FIELD_POST_CONDITIONS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRE_CONDITIONS])) {
            $v = $this->getPreConditions();
            foreach($validationRules[self::FIELD_PRE_CONDITIONS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_PROCESS, self::FIELD_PRE_CONDITIONS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRE_CONDITIONS])) {
                        $errs[self::FIELD_PRE_CONDITIONS] = [];
                    }
                    $errs[self::FIELD_PRE_CONDITIONS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STEP])) {
            $v = $this->getStep();
            foreach($validationRules[self::FIELD_STEP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_PROCESS, self::FIELD_STEP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STEP])) {
                        $errs[self::FIELD_STEP] = [];
                    }
                    $errs[self::FIELD_STEP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TITLE])) {
            $v = $this->getTitle();
            foreach($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_PROCESS, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess
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
                throw new \DomainException(sprintf('FHIRExampleScenarioProcess::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRExampleScenarioProcess::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRExampleScenarioProcess;
        } elseif (!is_object($type) || !($type instanceof FHIRExampleScenarioProcess)) {
            throw new \RuntimeException(sprintf(
                'FHIRExampleScenarioProcess::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess or null, %s seen.',
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
        if (isset($children->description)) {
            $type->setDescription(FHIRMarkdown::xmlUnserialize($children->description));
        }
        if (isset($attributes->description)) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->description);
            } else {
                $type->setDescription((string)$attributes->description);
            }
        }
        if (isset($children->postConditions)) {
            $type->setPostConditions(FHIRMarkdown::xmlUnserialize($children->postConditions));
        }
        if (isset($attributes->postConditions)) {
            $pt = $type->getPostConditions();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->postConditions);
            } else {
                $type->setPostConditions((string)$attributes->postConditions);
            }
        }
        if (isset($children->preConditions)) {
            $type->setPreConditions(FHIRMarkdown::xmlUnserialize($children->preConditions));
        }
        if (isset($attributes->preConditions)) {
            $pt = $type->getPreConditions();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->preConditions);
            } else {
                $type->setPreConditions((string)$attributes->preConditions);
            }
        }
        if (isset($children->step)) {
            foreach($children->step as $child) {
                $type->addStep(FHIRExampleScenarioStep::xmlUnserialize($child));
            }
        }
        if (isset($children->title)) {
            $type->setTitle(FHIRString::xmlUnserialize($children->title));
        }
        if (isset($attributes->title)) {
            $pt = $type->getTitle();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->title);
            } else {
                $type->setTitle((string)$attributes->title);
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
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPostConditions())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_POST_CONDITIONS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPreConditions())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRE_CONDITIONS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getStep())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_STEP, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getTitle())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TITLE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPostConditions())) {
            $a[self::FIELD_POST_CONDITIONS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_POST_CONDITIONS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPreConditions())) {
            $a[self::FIELD_PRE_CONDITIONS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_PRE_CONDITIONS_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getStep())) {
            $a[self::FIELD_STEP] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_STEP][] = $v;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            $a[self::FIELD_TITLE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_TITLE_EXT] = $enc;
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