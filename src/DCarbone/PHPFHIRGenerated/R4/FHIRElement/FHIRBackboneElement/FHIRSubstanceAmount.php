<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount\FHIRSubstanceAmountReferenceRange;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Chemical substances are a single substance type whose primary defining element
 * is the molecular structure. Chemical substances shall be defined on the basis of
 * their complete covalent molecular structure; the presence of a salt
 * (counter-ion) and/or solvates (water, alcohols) is also captured. Purity, grade,
 * physical form or particle size are not taken into account in the definition of a
 * chemical substance or in the assignment of a Substance ID.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRSubstanceAmount
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement
 */
class FHIRSubstanceAmount extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_AMOUNT;
    const FIELD_AMOUNT_QUANTITY = 'amountQuantity';
    const FIELD_AMOUNT_RANGE = 'amountRange';
    const FIELD_AMOUNT_STRING = 'amountString';
    const FIELD_AMOUNT_STRING_EXT = '_amountString';
    const FIELD_AMOUNT_TEXT = 'amountText';
    const FIELD_AMOUNT_TEXT_EXT = '_amountText';
    const FIELD_AMOUNT_TYPE = 'amountType';
    const FIELD_REFERENCE_RANGE = 'referenceRange';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used to capture quantitative values for a variety of elements. If only limits
     * are given, the arithmetic mean would be the average. If only a single definite
     * value for a given element is given, it would be captured in this field. (choose
     * any one of amount*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $amountQuantity = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used to capture quantitative values for a variety of elements. If only limits
     * are given, the arithmetic mean would be the average. If only a single definite
     * value for a given element is given, it would be captured in this field. (choose
     * any one of amount*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    protected $amountRange = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used to capture quantitative values for a variety of elements. If only limits
     * are given, the arithmetic mean would be the average. If only a single definite
     * value for a given element is given, it would be captured in this field. (choose
     * any one of amount*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $amountString = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual comment on a numeric value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $amountText = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Most elements that require a quantitative value will also have a field called
     * amount type. Amount type should always be specified because the actual value of
     * the amount is often dependent on it. EXAMPLE: In capturing the actual relative
     * amounts of substances or molecular fragments it is essential to indicate whether
     * the amount refers to a mole ratio or weight ratio. For any given element an
     * effort should be made to use same the amount type for all related definitional
     * elements.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $amountType = null;

    /**
     * Chemical substances are a single substance type whose primary defining element
     * is the molecular structure. Chemical substances shall be defined on the basis of
     * their complete covalent molecular structure; the presence of a salt
     * (counter-ion) and/or solvates (water, alcohols) is also captured. Purity, grade,
     * physical form or particle size are not taken into account in the definition of a
     * chemical substance or in the assignment of a Substance ID.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference range of possible or expected values.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount\FHIRSubstanceAmountReferenceRange
     */
    protected $referenceRange = null;

    /**
     * Validation map for fields in type SubstanceAmount
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRSubstanceAmount Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceAmount::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AMOUNT_QUANTITY])) {
            if ($data[self::FIELD_AMOUNT_QUANTITY] instanceof FHIRQuantity) {
                $this->setAmountQuantity($data[self::FIELD_AMOUNT_QUANTITY]);
            } else {
                $this->setAmountQuantity(new FHIRQuantity($data[self::FIELD_AMOUNT_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_AMOUNT_RANGE])) {
            if ($data[self::FIELD_AMOUNT_RANGE] instanceof FHIRRange) {
                $this->setAmountRange($data[self::FIELD_AMOUNT_RANGE]);
            } else {
                $this->setAmountRange(new FHIRRange($data[self::FIELD_AMOUNT_RANGE]));
            }
        }
        if (isset($data[self::FIELD_AMOUNT_STRING]) || isset($data[self::FIELD_AMOUNT_STRING_EXT])) {
            if (isset($data[self::FIELD_AMOUNT_STRING])) {
                $value = $data[self::FIELD_AMOUNT_STRING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_AMOUNT_STRING_EXT]) && is_array($data[self::FIELD_AMOUNT_STRING_EXT])) {
                $ext = $data[self::FIELD_AMOUNT_STRING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAmountString($value);
                } else if (is_array($value)) {
                    $this->setAmountString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAmountString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAmountString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_AMOUNT_TEXT]) || isset($data[self::FIELD_AMOUNT_TEXT_EXT])) {
            if (isset($data[self::FIELD_AMOUNT_TEXT])) {
                $value = $data[self::FIELD_AMOUNT_TEXT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_AMOUNT_TEXT_EXT]) && is_array($data[self::FIELD_AMOUNT_TEXT_EXT])) {
                $ext = $data[self::FIELD_AMOUNT_TEXT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAmountText($value);
                } else if (is_array($value)) {
                    $this->setAmountText(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAmountText(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAmountText(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_AMOUNT_TYPE])) {
            if ($data[self::FIELD_AMOUNT_TYPE] instanceof FHIRCodeableConcept) {
                $this->setAmountType($data[self::FIELD_AMOUNT_TYPE]);
            } else {
                $this->setAmountType(new FHIRCodeableConcept($data[self::FIELD_AMOUNT_TYPE]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_RANGE])) {
            if ($data[self::FIELD_REFERENCE_RANGE] instanceof FHIRSubstanceAmountReferenceRange) {
                $this->setReferenceRange($data[self::FIELD_REFERENCE_RANGE]);
            } else {
                $this->setReferenceRange(new FHIRSubstanceAmountReferenceRange($data[self::FIELD_REFERENCE_RANGE]));
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
        return "<SubstanceAmount{$xmlns}></SubstanceAmount>";
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used to capture quantitative values for a variety of elements. If only limits
     * are given, the arithmetic mean would be the average. If only a single definite
     * value for a given element is given, it would be captured in this field. (choose
     * any one of amount*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getAmountQuantity()
    {
        return $this->amountQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used to capture quantitative values for a variety of elements. If only limits
     * are given, the arithmetic mean would be the average. If only a single definite
     * value for a given element is given, it would be captured in this field. (choose
     * any one of amount*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $amountQuantity
     * @return static
     */
    public function setAmountQuantity(FHIRQuantity $amountQuantity = null)
    {
        $this->amountQuantity = $amountQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used to capture quantitative values for a variety of elements. If only limits
     * are given, the arithmetic mean would be the average. If only a single definite
     * value for a given element is given, it would be captured in this field. (choose
     * any one of amount*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    public function getAmountRange()
    {
        return $this->amountRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used to capture quantitative values for a variety of elements. If only limits
     * are given, the arithmetic mean would be the average. If only a single definite
     * value for a given element is given, it would be captured in this field. (choose
     * any one of amount*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $amountRange
     * @return static
     */
    public function setAmountRange(FHIRRange $amountRange = null)
    {
        $this->amountRange = $amountRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used to capture quantitative values for a variety of elements. If only limits
     * are given, the arithmetic mean would be the average. If only a single definite
     * value for a given element is given, it would be captured in this field. (choose
     * any one of amount*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getAmountString()
    {
        return $this->amountString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used to capture quantitative values for a variety of elements. If only limits
     * are given, the arithmetic mean would be the average. If only a single definite
     * value for a given element is given, it would be captured in this field. (choose
     * any one of amount*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $amountString
     * @return static
     */
    public function setAmountString($amountString = null)
    {
        if (null === $amountString) {
            $this->amountString = null;
            return $this;
        }
        if ($amountString instanceof FHIRString) {
            $this->amountString = $amountString;
            return $this;
        }
        $this->amountString = new FHIRString($amountString);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual comment on a numeric value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getAmountText()
    {
        return $this->amountText;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual comment on a numeric value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $amountText
     * @return static
     */
    public function setAmountText($amountText = null)
    {
        if (null === $amountText) {
            $this->amountText = null;
            return $this;
        }
        if ($amountText instanceof FHIRString) {
            $this->amountText = $amountText;
            return $this;
        }
        $this->amountText = new FHIRString($amountText);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Most elements that require a quantitative value will also have a field called
     * amount type. Amount type should always be specified because the actual value of
     * the amount is often dependent on it. EXAMPLE: In capturing the actual relative
     * amounts of substances or molecular fragments it is essential to indicate whether
     * the amount refers to a mole ratio or weight ratio. For any given element an
     * effort should be made to use same the amount type for all related definitional
     * elements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getAmountType()
    {
        return $this->amountType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Most elements that require a quantitative value will also have a field called
     * amount type. Amount type should always be specified because the actual value of
     * the amount is often dependent on it. EXAMPLE: In capturing the actual relative
     * amounts of substances or molecular fragments it is essential to indicate whether
     * the amount refers to a mole ratio or weight ratio. For any given element an
     * effort should be made to use same the amount type for all related definitional
     * elements.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $amountType
     * @return static
     */
    public function setAmountType(FHIRCodeableConcept $amountType = null)
    {
        $this->amountType = $amountType;
        return $this;
    }

    /**
     * Chemical substances are a single substance type whose primary defining element
     * is the molecular structure. Chemical substances shall be defined on the basis of
     * their complete covalent molecular structure; the presence of a salt
     * (counter-ion) and/or solvates (water, alcohols) is also captured. Purity, grade,
     * physical form or particle size are not taken into account in the definition of a
     * chemical substance or in the assignment of a Substance ID.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference range of possible or expected values.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount\FHIRSubstanceAmountReferenceRange
     */
    public function getReferenceRange()
    {
        return $this->referenceRange;
    }

    /**
     * Chemical substances are a single substance type whose primary defining element
     * is the molecular structure. Chemical substances shall be defined on the basis of
     * their complete covalent molecular structure; the presence of a salt
     * (counter-ion) and/or solvates (water, alcohols) is also captured. Purity, grade,
     * physical form or particle size are not taken into account in the definition of a
     * chemical substance or in the assignment of a Substance ID.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference range of possible or expected values.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount\FHIRSubstanceAmountReferenceRange $referenceRange
     * @return static
     */
    public function setReferenceRange(FHIRSubstanceAmountReferenceRange $referenceRange = null)
    {
        $this->referenceRange = $referenceRange;
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
        if (null !== ($v = $this->getAmountQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAmountRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAmountString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAmountText())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT_TEXT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAmountType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReferenceRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE_RANGE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT_QUANTITY])) {
            $v = $this->getAmountQuantity();
            foreach($validationRules[self::FIELD_AMOUNT_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_AMOUNT, self::FIELD_AMOUNT_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT_QUANTITY])) {
                        $errs[self::FIELD_AMOUNT_QUANTITY] = [];
                    }
                    $errs[self::FIELD_AMOUNT_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT_RANGE])) {
            $v = $this->getAmountRange();
            foreach($validationRules[self::FIELD_AMOUNT_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_AMOUNT, self::FIELD_AMOUNT_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT_RANGE])) {
                        $errs[self::FIELD_AMOUNT_RANGE] = [];
                    }
                    $errs[self::FIELD_AMOUNT_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT_STRING])) {
            $v = $this->getAmountString();
            foreach($validationRules[self::FIELD_AMOUNT_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_AMOUNT, self::FIELD_AMOUNT_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT_STRING])) {
                        $errs[self::FIELD_AMOUNT_STRING] = [];
                    }
                    $errs[self::FIELD_AMOUNT_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT_TEXT])) {
            $v = $this->getAmountText();
            foreach($validationRules[self::FIELD_AMOUNT_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_AMOUNT, self::FIELD_AMOUNT_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT_TEXT])) {
                        $errs[self::FIELD_AMOUNT_TEXT] = [];
                    }
                    $errs[self::FIELD_AMOUNT_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT_TYPE])) {
            $v = $this->getAmountType();
            foreach($validationRules[self::FIELD_AMOUNT_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_AMOUNT, self::FIELD_AMOUNT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT_TYPE])) {
                        $errs[self::FIELD_AMOUNT_TYPE] = [];
                    }
                    $errs[self::FIELD_AMOUNT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_RANGE])) {
            $v = $this->getReferenceRange();
            foreach($validationRules[self::FIELD_REFERENCE_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_AMOUNT, self::FIELD_REFERENCE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_RANGE])) {
                        $errs[self::FIELD_REFERENCE_RANGE] = [];
                    }
                    $errs[self::FIELD_REFERENCE_RANGE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount
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
                throw new \DomainException(sprintf('FHIRSubstanceAmount::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceAmount::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSubstanceAmount;
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceAmount)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceAmount::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount or null, %s seen.',
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
        if (isset($children->amountQuantity)) {
            $type->setAmountQuantity(FHIRQuantity::xmlUnserialize($children->amountQuantity));
        }
        if (isset($children->amountRange)) {
            $type->setAmountRange(FHIRRange::xmlUnserialize($children->amountRange));
        }
        if (isset($children->amountString)) {
            $type->setAmountString(FHIRString::xmlUnserialize($children->amountString));
        }
        if (isset($attributes->amountString)) {
            $pt = $type->getAmountString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->amountString);
            } else {
                $type->setAmountString((string)$attributes->amountString);
            }
        }
        if (isset($children->amountText)) {
            $type->setAmountText(FHIRString::xmlUnserialize($children->amountText));
        }
        if (isset($attributes->amountText)) {
            $pt = $type->getAmountText();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->amountText);
            } else {
                $type->setAmountText((string)$attributes->amountText);
            }
        }
        if (isset($children->amountType)) {
            $type->setAmountType(FHIRCodeableConcept::xmlUnserialize($children->amountType));
        }
        if (isset($children->referenceRange)) {
            $type->setReferenceRange(FHIRSubstanceAmountReferenceRange::xmlUnserialize($children->referenceRange));
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
        if (null !== ($v = $this->getAmountQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AMOUNT_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAmountRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AMOUNT_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAmountString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AMOUNT_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAmountText())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AMOUNT_TEXT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAmountType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AMOUNT_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReferenceRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAmountQuantity())) {
            $a[self::FIELD_AMOUNT_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getAmountRange())) {
            $a[self::FIELD_AMOUNT_RANGE] = $v;
        }
        if (null !== ($v = $this->getAmountString())) {
            $a[self::FIELD_AMOUNT_STRING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_AMOUNT_STRING_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAmountText())) {
            $a[self::FIELD_AMOUNT_TEXT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_AMOUNT_TEXT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAmountType())) {
            $a[self::FIELD_AMOUNT_TYPE] = $v;
        }
        if (null !== ($v = $this->getReferenceRange())) {
            $a[self::FIELD_REFERENCE_RANGE] = $v;
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