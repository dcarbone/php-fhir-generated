<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:13+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAdverseEventCausality;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Actual or potential/avoided event causing unintended physical injury resulting
 * from or contributed to by medical care, a research study or other healthcare
 * setting factors that requires additional monitoring, treatment, or
 * hospitalization, or that results in death.
 *
 * Class FHIRAdverseEventSuspectEntity
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent
 */
class FHIRAdverseEventSuspectEntity extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY;
    const FIELD_INSTANCE = 'instance';
    const FIELD_CAUSALITY = 'causality';
    const FIELD_CAUSALITY_EXT = '_causality';
    const FIELD_CAUSALITY_ASSESSMENT = 'causalityAssessment';
    const FIELD_CAUSALITY_PRODUCT_RELATEDNESS = 'causalityProductRelatedness';
    const FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT = '_causalityProductRelatedness';
    const FIELD_CAUSALITY_METHOD = 'causalityMethod';
    const FIELD_CAUSALITY_AUTHOR = 'causalityAuthor';
    const FIELD_CAUSALITY_RESULT = 'causalityResult';

    /** @var string */
    private $_xmlns = '';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the actual instance of what caused the adverse event. May be a
     * substance, medication, medication administration, medication statement or a
     * device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $instance = null;

    /**
     * TODO
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * causality1 | causality2.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAdverseEventCausality
     */
    protected $causality = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * assess1 | assess2.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $causalityAssessment = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $causalityProductRelatedness = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * method1 | method2.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $causalityMethod = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.suspectEntity.causalityAuthor.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $causalityAuthor = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * result1 | result2.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $causalityResult = null;

    /**
     * Validation map for fields in type AdverseEvent.SuspectEntity
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRAdverseEventSuspectEntity Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAdverseEventSuspectEntity::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_INSTANCE])) {
            if ($data[self::FIELD_INSTANCE] instanceof FHIRReference) {
                $this->setInstance($data[self::FIELD_INSTANCE]);
            } else {
                $this->setInstance(new FHIRReference($data[self::FIELD_INSTANCE]));
            }
        }
        if (isset($data[self::FIELD_CAUSALITY]) || isset($data[self::FIELD_CAUSALITY_EXT])) {
            $value = isset($data[self::FIELD_CAUSALITY]) ? $data[self::FIELD_CAUSALITY] : null;
            $ext = (isset($data[self::FIELD_CAUSALITY_EXT]) && is_array($data[self::FIELD_CAUSALITY_EXT])) ? $ext = $data[self::FIELD_CAUSALITY_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRAdverseEventCausality) {
                    $this->setCausality($value);
                } else if (is_array($value)) {
                    $this->setCausality(new FHIRAdverseEventCausality(array_merge($ext, $value)));
                } else {
                    $this->setCausality(new FHIRAdverseEventCausality([FHIRAdverseEventCausality::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCausality(new FHIRAdverseEventCausality($ext));
            }
        }
        if (isset($data[self::FIELD_CAUSALITY_ASSESSMENT])) {
            if ($data[self::FIELD_CAUSALITY_ASSESSMENT] instanceof FHIRCodeableConcept) {
                $this->setCausalityAssessment($data[self::FIELD_CAUSALITY_ASSESSMENT]);
            } else {
                $this->setCausalityAssessment(new FHIRCodeableConcept($data[self::FIELD_CAUSALITY_ASSESSMENT]));
            }
        }
        if (isset($data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS]) || isset($data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT])) {
            $value = isset($data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS]) ? $data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS] : null;
            $ext = (isset($data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT]) && is_array($data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT])) ? $ext = $data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCausalityProductRelatedness($value);
                } else if (is_array($value)) {
                    $this->setCausalityProductRelatedness(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCausalityProductRelatedness(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCausalityProductRelatedness(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_CAUSALITY_METHOD])) {
            if ($data[self::FIELD_CAUSALITY_METHOD] instanceof FHIRCodeableConcept) {
                $this->setCausalityMethod($data[self::FIELD_CAUSALITY_METHOD]);
            } else {
                $this->setCausalityMethod(new FHIRCodeableConcept($data[self::FIELD_CAUSALITY_METHOD]));
            }
        }
        if (isset($data[self::FIELD_CAUSALITY_AUTHOR])) {
            if ($data[self::FIELD_CAUSALITY_AUTHOR] instanceof FHIRReference) {
                $this->setCausalityAuthor($data[self::FIELD_CAUSALITY_AUTHOR]);
            } else {
                $this->setCausalityAuthor(new FHIRReference($data[self::FIELD_CAUSALITY_AUTHOR]));
            }
        }
        if (isset($data[self::FIELD_CAUSALITY_RESULT])) {
            if ($data[self::FIELD_CAUSALITY_RESULT] instanceof FHIRCodeableConcept) {
                $this->setCausalityResult($data[self::FIELD_CAUSALITY_RESULT]);
            } else {
                $this->setCausalityResult(new FHIRCodeableConcept($data[self::FIELD_CAUSALITY_RESULT]));
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
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<AdverseEventSuspectEntity{$xmlns}></AdverseEventSuspectEntity>";
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the actual instance of what caused the adverse event. May be a
     * substance, medication, medication administration, medication statement or a
     * device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the actual instance of what caused the adverse event. May be a
     * substance, medication, medication administration, medication statement or a
     * device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $instance
     * @return static
     */
    public function setInstance(FHIRReference $instance = null)
    {
        $this->_trackValueSet($this->instance, $instance);
        $this->instance = $instance;
        return $this;
    }

    /**
     * TODO
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * causality1 | causality2.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAdverseEventCausality
     */
    public function getCausality()
    {
        return $this->causality;
    }

    /**
     * TODO
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * causality1 | causality2.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAdverseEventCausality $causality
     * @return static
     */
    public function setCausality(FHIRAdverseEventCausality $causality = null)
    {
        $this->_trackValueSet($this->causality, $causality);
        $this->causality = $causality;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * assess1 | assess2.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getCausalityAssessment()
    {
        return $this->causalityAssessment;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * assess1 | assess2.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $causalityAssessment
     * @return static
     */
    public function setCausalityAssessment(FHIRCodeableConcept $causalityAssessment = null)
    {
        $this->_trackValueSet($this->causalityAssessment, $causalityAssessment);
        $this->causalityAssessment = $causalityAssessment;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getCausalityProductRelatedness()
    {
        return $this->causalityProductRelatedness;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $causalityProductRelatedness
     * @return static
     */
    public function setCausalityProductRelatedness($causalityProductRelatedness = null)
    {
        if (null !== $causalityProductRelatedness && !($causalityProductRelatedness instanceof FHIRString)) {
            $causalityProductRelatedness = new FHIRString($causalityProductRelatedness);
        }
        $this->_trackValueSet($this->causalityProductRelatedness, $causalityProductRelatedness);
        $this->causalityProductRelatedness = $causalityProductRelatedness;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * method1 | method2.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getCausalityMethod()
    {
        return $this->causalityMethod;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * method1 | method2.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $causalityMethod
     * @return static
     */
    public function setCausalityMethod(FHIRCodeableConcept $causalityMethod = null)
    {
        $this->_trackValueSet($this->causalityMethod, $causalityMethod);
        $this->causalityMethod = $causalityMethod;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.suspectEntity.causalityAuthor.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getCausalityAuthor()
    {
        return $this->causalityAuthor;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.suspectEntity.causalityAuthor.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $causalityAuthor
     * @return static
     */
    public function setCausalityAuthor(FHIRReference $causalityAuthor = null)
    {
        $this->_trackValueSet($this->causalityAuthor, $causalityAuthor);
        $this->causalityAuthor = $causalityAuthor;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * result1 | result2.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getCausalityResult()
    {
        return $this->causalityResult;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * result1 | result2.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $causalityResult
     * @return static
     */
    public function setCausalityResult(FHIRCodeableConcept $causalityResult = null)
    {
        $this->_trackValueSet($this->causalityResult, $causalityResult);
        $this->causalityResult = $causalityResult;
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
        if (null !== ($v = $this->getInstance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INSTANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCausality())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CAUSALITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCausalityAssessment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CAUSALITY_ASSESSMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCausalityProductRelatedness())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCausalityMethod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CAUSALITY_METHOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCausalityAuthor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CAUSALITY_AUTHOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCausalityResult())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CAUSALITY_RESULT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_INSTANCE])) {
            $v = $this->getInstance();
            foreach($validationRules[self::FIELD_INSTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY, self::FIELD_INSTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTANCE])) {
                        $errs[self::FIELD_INSTANCE] = [];
                    }
                    $errs[self::FIELD_INSTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAUSALITY])) {
            $v = $this->getCausality();
            foreach($validationRules[self::FIELD_CAUSALITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY, self::FIELD_CAUSALITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAUSALITY])) {
                        $errs[self::FIELD_CAUSALITY] = [];
                    }
                    $errs[self::FIELD_CAUSALITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAUSALITY_ASSESSMENT])) {
            $v = $this->getCausalityAssessment();
            foreach($validationRules[self::FIELD_CAUSALITY_ASSESSMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY, self::FIELD_CAUSALITY_ASSESSMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAUSALITY_ASSESSMENT])) {
                        $errs[self::FIELD_CAUSALITY_ASSESSMENT] = [];
                    }
                    $errs[self::FIELD_CAUSALITY_ASSESSMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS])) {
            $v = $this->getCausalityProductRelatedness();
            foreach($validationRules[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY, self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS])) {
                        $errs[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS] = [];
                    }
                    $errs[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAUSALITY_METHOD])) {
            $v = $this->getCausalityMethod();
            foreach($validationRules[self::FIELD_CAUSALITY_METHOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY, self::FIELD_CAUSALITY_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAUSALITY_METHOD])) {
                        $errs[self::FIELD_CAUSALITY_METHOD] = [];
                    }
                    $errs[self::FIELD_CAUSALITY_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAUSALITY_AUTHOR])) {
            $v = $this->getCausalityAuthor();
            foreach($validationRules[self::FIELD_CAUSALITY_AUTHOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY, self::FIELD_CAUSALITY_AUTHOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAUSALITY_AUTHOR])) {
                        $errs[self::FIELD_CAUSALITY_AUTHOR] = [];
                    }
                    $errs[self::FIELD_CAUSALITY_AUTHOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAUSALITY_RESULT])) {
            $v = $this->getCausalityResult();
            foreach($validationRules[self::FIELD_CAUSALITY_RESULT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY, self::FIELD_CAUSALITY_RESULT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAUSALITY_RESULT])) {
                        $errs[self::FIELD_CAUSALITY_RESULT] = [];
                    }
                    $errs[self::FIELD_CAUSALITY_RESULT][$rule] = $err;
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
     * @param null|string|\DOMElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            $dom->loadXML($element, $libxmlOpts);
            if (false === $dom) {
                throw new \DomainException(sprintf('FHIRAdverseEventSuspectEntity::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRAdverseEventSuspectEntity::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRAdverseEventSuspectEntity(null);
        } elseif (!is_object($type) || !($type instanceof FHIRAdverseEventSuspectEntity)) {
            throw new \RuntimeException(sprintf(
                'FHIRAdverseEventSuspectEntity::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_INSTANCE === $n->nodeName) {
                $type->setInstance(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CAUSALITY === $n->nodeName) {
                $type->setCausality(FHIRAdverseEventCausality::xmlUnserialize($n));
            } elseif (self::FIELD_CAUSALITY_ASSESSMENT === $n->nodeName) {
                $type->setCausalityAssessment(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS === $n->nodeName) {
                $type->setCausalityProductRelatedness(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_CAUSALITY_METHOD === $n->nodeName) {
                $type->setCausalityMethod(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_CAUSALITY_AUTHOR === $n->nodeName) {
                $type->setCausalityAuthor(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CAUSALITY_RESULT === $n->nodeName) {
                $type->setCausalityResult(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS);
        if (null !== $n) {
            $pt = $type->getCausalityProductRelatedness();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCausalityProductRelatedness($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ID);
        if (null !== $n) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setId($n->nodeValue);
            }
        }
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getInstance())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INSTANCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCausality())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CAUSALITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCausalityAssessment())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CAUSALITY_ASSESSMENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCausalityProductRelatedness())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCausalityMethod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CAUSALITY_METHOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCausalityAuthor())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CAUSALITY_AUTHOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCausalityResult())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CAUSALITY_RESULT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        return $element;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getInstance())) {
            $a[self::FIELD_INSTANCE] = $v;
        }
        if (null !== ($v = $this->getCausality())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_CAUSALITY] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRAdverseEventCausality::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_CAUSALITY_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getCausalityAssessment())) {
            $a[self::FIELD_CAUSALITY_ASSESSMENT] = $v;
        }
        if (null !== ($v = $this->getCausalityProductRelatedness())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getCausalityMethod())) {
            $a[self::FIELD_CAUSALITY_METHOD] = $v;
        }
        if (null !== ($v = $this->getCausalityAuthor())) {
            $a[self::FIELD_CAUSALITY_AUTHOR] = $v;
        }
        if (null !== ($v = $this->getCausalityResult())) {
            $a[self::FIELD_CAUSALITY_RESULT] = $v;
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