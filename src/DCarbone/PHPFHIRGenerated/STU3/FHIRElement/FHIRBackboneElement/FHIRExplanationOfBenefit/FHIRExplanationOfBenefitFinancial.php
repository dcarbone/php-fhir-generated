<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit;

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
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * This resource provides: the claim details; adjudication details from the
 * processing of a Claim; and optionally account balance information, for informing
 * the subscriber of the benefits provided.
 *
 * Class FHIRExplanationOfBenefitFinancial
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit
 */
class FHIRExplanationOfBenefitFinancial extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_FINANCIAL;
    const FIELD_ALLOWED_MONEY = 'allowedMoney';
    const FIELD_ALLOWED_STRING = 'allowedString';
    const FIELD_ALLOWED_STRING_EXT = '_allowedString';
    const FIELD_ALLOWED_UNSIGNED_INT = 'allowedUnsignedInt';
    const FIELD_ALLOWED_UNSIGNED_INT_EXT = '_allowedUnsignedInt';
    const FIELD_TYPE = 'type';
    const FIELD_USED_MONEY = 'usedMoney';
    const FIELD_USED_UNSIGNED_INT = 'usedUnsignedInt';
    const FIELD_USED_UNSIGNED_INT_EXT = '_usedUnsignedInt';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Benefits allowed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    protected $allowedMoney = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Benefits allowed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $allowedString = null;

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Benefits allowed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    protected $allowedUnsignedInt = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Deductable, visits, benefit amount.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $type = null;

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Benefits used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    protected $usedMoney = null;

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Benefits used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    protected $usedUnsignedInt = null;

    /**
     * Validation map for fields in type ExplanationOfBenefit.Financial
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRExplanationOfBenefitFinancial Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExplanationOfBenefitFinancial::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ALLOWED_MONEY])) {
            if ($data[self::FIELD_ALLOWED_MONEY] instanceof FHIRMoney) {
                $this->setAllowedMoney($data[self::FIELD_ALLOWED_MONEY]);
            } else {
                $this->setAllowedMoney(new FHIRMoney($data[self::FIELD_ALLOWED_MONEY]));
            }
        }
        if (isset($data[self::FIELD_ALLOWED_STRING]) || isset($data[self::FIELD_ALLOWED_STRING_EXT])) {
            if (isset($data[self::FIELD_ALLOWED_STRING])) {
                $value = $data[self::FIELD_ALLOWED_STRING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ALLOWED_STRING_EXT]) && is_array($data[self::FIELD_ALLOWED_STRING_EXT])) {
                $ext = $data[self::FIELD_ALLOWED_STRING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAllowedString($value);
                } else if (is_array($value)) {
                    $this->setAllowedString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAllowedString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAllowedString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_ALLOWED_UNSIGNED_INT]) || isset($data[self::FIELD_ALLOWED_UNSIGNED_INT_EXT])) {
            if (isset($data[self::FIELD_ALLOWED_UNSIGNED_INT])) {
                $value = $data[self::FIELD_ALLOWED_UNSIGNED_INT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ALLOWED_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_ALLOWED_UNSIGNED_INT_EXT])) {
                $ext = $data[self::FIELD_ALLOWED_UNSIGNED_INT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setAllowedUnsignedInt($value);
                } else if (is_array($value)) {
                    $this->setAllowedUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setAllowedUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAllowedUnsignedInt(new FHIRUnsignedInt($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_USED_MONEY])) {
            if ($data[self::FIELD_USED_MONEY] instanceof FHIRMoney) {
                $this->setUsedMoney($data[self::FIELD_USED_MONEY]);
            } else {
                $this->setUsedMoney(new FHIRMoney($data[self::FIELD_USED_MONEY]));
            }
        }
        if (isset($data[self::FIELD_USED_UNSIGNED_INT]) || isset($data[self::FIELD_USED_UNSIGNED_INT_EXT])) {
            if (isset($data[self::FIELD_USED_UNSIGNED_INT])) {
                $value = $data[self::FIELD_USED_UNSIGNED_INT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_USED_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_USED_UNSIGNED_INT_EXT])) {
                $ext = $data[self::FIELD_USED_UNSIGNED_INT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setUsedUnsignedInt($value);
                } else if (is_array($value)) {
                    $this->setUsedUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setUsedUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setUsedUnsignedInt(new FHIRUnsignedInt($ext));
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
        return "<ExplanationOfBenefitFinancial{$xmlns}></ExplanationOfBenefitFinancial>";
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Benefits allowed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getAllowedMoney()
    {
        return $this->allowedMoney;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Benefits allowed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney $allowedMoney
     * @return static
     */
    public function setAllowedMoney(FHIRMoney $allowedMoney = null)
    {
        $this->allowedMoney = $allowedMoney;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Benefits allowed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getAllowedString()
    {
        return $this->allowedString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Benefits allowed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $allowedString
     * @return static
     */
    public function setAllowedString($allowedString = null)
    {
        if (null === $allowedString) {
            $this->allowedString = null;
            return $this;
        }
        if ($allowedString instanceof FHIRString) {
            $this->allowedString = $allowedString;
            return $this;
        }
        $this->allowedString = new FHIRString($allowedString);
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Benefits allowed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getAllowedUnsignedInt()
    {
        return $this->allowedUnsignedInt;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Benefits allowed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $allowedUnsignedInt
     * @return static
     */
    public function setAllowedUnsignedInt($allowedUnsignedInt = null)
    {
        if (null === $allowedUnsignedInt) {
            $this->allowedUnsignedInt = null;
            return $this;
        }
        if ($allowedUnsignedInt instanceof FHIRUnsignedInt) {
            $this->allowedUnsignedInt = $allowedUnsignedInt;
            return $this;
        }
        $this->allowedUnsignedInt = new FHIRUnsignedInt($allowedUnsignedInt);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Deductable, visits, benefit amount.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Deductable, visits, benefit amount.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Benefits used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getUsedMoney()
    {
        return $this->usedMoney;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Benefits used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney $usedMoney
     * @return static
     */
    public function setUsedMoney(FHIRMoney $usedMoney = null)
    {
        $this->usedMoney = $usedMoney;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Benefits used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getUsedUnsignedInt()
    {
        return $this->usedUnsignedInt;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Benefits used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $usedUnsignedInt
     * @return static
     */
    public function setUsedUnsignedInt($usedUnsignedInt = null)
    {
        if (null === $usedUnsignedInt) {
            $this->usedUnsignedInt = null;
            return $this;
        }
        if ($usedUnsignedInt instanceof FHIRUnsignedInt) {
            $this->usedUnsignedInt = $usedUnsignedInt;
            return $this;
        }
        $this->usedUnsignedInt = new FHIRUnsignedInt($usedUnsignedInt);
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
        if (null !== ($v = $this->getAllowedMoney())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ALLOWED_MONEY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAllowedString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ALLOWED_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAllowedUnsignedInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ALLOWED_UNSIGNED_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUsedMoney())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_USED_MONEY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUsedUnsignedInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_USED_UNSIGNED_INT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ALLOWED_MONEY])) {
            $v = $this->getAllowedMoney();
            foreach($validationRules[self::FIELD_ALLOWED_MONEY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_FINANCIAL, self::FIELD_ALLOWED_MONEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALLOWED_MONEY])) {
                        $errs[self::FIELD_ALLOWED_MONEY] = [];
                    }
                    $errs[self::FIELD_ALLOWED_MONEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALLOWED_STRING])) {
            $v = $this->getAllowedString();
            foreach($validationRules[self::FIELD_ALLOWED_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_FINANCIAL, self::FIELD_ALLOWED_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALLOWED_STRING])) {
                        $errs[self::FIELD_ALLOWED_STRING] = [];
                    }
                    $errs[self::FIELD_ALLOWED_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALLOWED_UNSIGNED_INT])) {
            $v = $this->getAllowedUnsignedInt();
            foreach($validationRules[self::FIELD_ALLOWED_UNSIGNED_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_FINANCIAL, self::FIELD_ALLOWED_UNSIGNED_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALLOWED_UNSIGNED_INT])) {
                        $errs[self::FIELD_ALLOWED_UNSIGNED_INT] = [];
                    }
                    $errs[self::FIELD_ALLOWED_UNSIGNED_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_FINANCIAL, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USED_MONEY])) {
            $v = $this->getUsedMoney();
            foreach($validationRules[self::FIELD_USED_MONEY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_FINANCIAL, self::FIELD_USED_MONEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USED_MONEY])) {
                        $errs[self::FIELD_USED_MONEY] = [];
                    }
                    $errs[self::FIELD_USED_MONEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USED_UNSIGNED_INT])) {
            $v = $this->getUsedUnsignedInt();
            foreach($validationRules[self::FIELD_USED_UNSIGNED_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_FINANCIAL, self::FIELD_USED_UNSIGNED_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USED_UNSIGNED_INT])) {
                        $errs[self::FIELD_USED_UNSIGNED_INT] = [];
                    }
                    $errs[self::FIELD_USED_UNSIGNED_INT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial
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
                throw new \DomainException(sprintf('FHIRExplanationOfBenefitFinancial::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRExplanationOfBenefitFinancial::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRExplanationOfBenefitFinancial;
        } elseif (!is_object($type) || !($type instanceof FHIRExplanationOfBenefitFinancial)) {
            throw new \RuntimeException(sprintf(
                'FHIRExplanationOfBenefitFinancial::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial or null, %s seen.',
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
        if (isset($children->allowedMoney)) {
            $type->setAllowedMoney(FHIRMoney::xmlUnserialize($children->allowedMoney));
        }
        if (isset($children->allowedString)) {
            $type->setAllowedString(FHIRString::xmlUnserialize($children->allowedString));
        }
        if (isset($attributes->allowedString)) {
            $pt = $type->getAllowedString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->allowedString);
            } else {
                $type->setAllowedString((string)$attributes->allowedString);
            }
        }
        if (isset($children->allowedUnsignedInt)) {
            $type->setAllowedUnsignedInt(FHIRUnsignedInt::xmlUnserialize($children->allowedUnsignedInt));
        }
        if (isset($attributes->allowedUnsignedInt)) {
            $pt = $type->getAllowedUnsignedInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->allowedUnsignedInt);
            } else {
                $type->setAllowedUnsignedInt((string)$attributes->allowedUnsignedInt);
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        if (isset($children->usedMoney)) {
            $type->setUsedMoney(FHIRMoney::xmlUnserialize($children->usedMoney));
        }
        if (isset($children->usedUnsignedInt)) {
            $type->setUsedUnsignedInt(FHIRUnsignedInt::xmlUnserialize($children->usedUnsignedInt));
        }
        if (isset($attributes->usedUnsignedInt)) {
            $pt = $type->getUsedUnsignedInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->usedUnsignedInt);
            } else {
                $type->setUsedUnsignedInt((string)$attributes->usedUnsignedInt);
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
        if (null !== ($v = $this->getAllowedMoney())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ALLOWED_MONEY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAllowedString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ALLOWED_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAllowedUnsignedInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ALLOWED_UNSIGNED_INT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUsedMoney())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_USED_MONEY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUsedUnsignedInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_USED_UNSIGNED_INT, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAllowedMoney())) {
            $a[self::FIELD_ALLOWED_MONEY] = $v;
        }
        if (null !== ($v = $this->getAllowedString())) {
            $a[self::FIELD_ALLOWED_STRING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_ALLOWED_STRING_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAllowedUnsignedInt())) {
            $a[self::FIELD_ALLOWED_UNSIGNED_INT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUnsignedInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUnsignedInt::FIELD_VALUE]);
                $a[self::FIELD_ALLOWED_UNSIGNED_INT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getUsedMoney())) {
            $a[self::FIELD_USED_MONEY] = $v;
        }
        if (null !== ($v = $this->getUsedUnsignedInt())) {
            $a[self::FIELD_USED_UNSIGNED_INT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUnsignedInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUnsignedInt::FIELD_VALUE]);
                $a[self::FIELD_USED_UNSIGNED_INT_EXT] = $enc;
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