<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
 * policy or agreement.
 *
 * Class FHIRContractSecurityLabel
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract
 */
class FHIRContractSecurityLabel extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_SECURITY_LABEL;
    const FIELD_CATEGORY = 'category';
    const FIELD_CLASSIFICATION = 'classification';
    const FIELD_CONTROL = 'control';
    const FIELD_NUMBER = 'number';
    const FIELD_NUMBER_EXT = '_number';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the applicable privacy and security
     * policies governing this term and/or term elements.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding[]
     */
    protected $category = [];

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the level of confidentiality protection
     * required for this term and/or term elements.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding
     */
    protected $classification = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the manner in which term and/or term
     * elements are to be protected.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding[]
     */
    protected $control = [];

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number used to link this term or term element to the applicable Security Label.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt[]
     */
    protected $number = [];

    /**
     * Validation map for fields in type Contract.SecurityLabel
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRContractSecurityLabel Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractSecurityLabel::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CATEGORY])) {
            if (is_array($data[self::FIELD_CATEGORY])) {
                foreach($data[self::FIELD_CATEGORY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addCategory($v);
                    } else {
                        $this->addCategory(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_CATEGORY] instanceof FHIRCoding) {
                $this->addCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->addCategory(new FHIRCoding($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_CLASSIFICATION])) {
            if ($data[self::FIELD_CLASSIFICATION] instanceof FHIRCoding) {
                $this->setClassification($data[self::FIELD_CLASSIFICATION]);
            } else {
                $this->setClassification(new FHIRCoding($data[self::FIELD_CLASSIFICATION]));
            }
        }
        if (isset($data[self::FIELD_CONTROL])) {
            if (is_array($data[self::FIELD_CONTROL])) {
                foreach($data[self::FIELD_CONTROL] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addControl($v);
                    } else {
                        $this->addControl(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_CONTROL] instanceof FHIRCoding) {
                $this->addControl($data[self::FIELD_CONTROL]);
            } else {
                $this->addControl(new FHIRCoding($data[self::FIELD_CONTROL]));
            }
        }
        if (isset($data[self::FIELD_NUMBER]) || isset($data[self::FIELD_NUMBER_EXT])) {
            if (isset($data[self::FIELD_NUMBER])) {
                $value = $data[self::FIELD_NUMBER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NUMBER_EXT]) && is_array($data[self::FIELD_NUMBER_EXT])) {
                $ext = $data[self::FIELD_NUMBER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->addNumber($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUnsignedInt) {
                            $this->addNumber($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addNumber(new FHIRUnsignedInt(array_merge($v, $iext)));
                            } else {
                                $this->addNumber(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addNumber(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->addNumber(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addNumber(new FHIRUnsignedInt($iext));
                }
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
        return "<ContractSecurityLabel{$xmlns}></ContractSecurityLabel>";
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the applicable privacy and security
     * policies governing this term and/or term elements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the applicable privacy and security
     * policies governing this term and/or term elements.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding $category
     * @return static
     */
    public function addCategory(FHIRCoding $category = null)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the applicable privacy and security
     * policies governing this term and/or term elements.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding[] $category
     * @return static
     */
    public function setCategory(array $category = [])
    {
        $this->category = [];
        if ([] === $category) {
            return $this;
        }
        foreach($category as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addCategory($v);
            } else {
                $this->addCategory(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the level of confidentiality protection
     * required for this term and/or term elements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the level of confidentiality protection
     * required for this term and/or term elements.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding $classification
     * @return static
     */
    public function setClassification(FHIRCoding $classification = null)
    {
        $this->classification = $classification;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the manner in which term and/or term
     * elements are to be protected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding[]
     */
    public function getControl()
    {
        return $this->control;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the manner in which term and/or term
     * elements are to be protected.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding $control
     * @return static
     */
    public function addControl(FHIRCoding $control = null)
    {
        $this->control[] = $control;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the manner in which term and/or term
     * elements are to be protected.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding[] $control
     * @return static
     */
    public function setControl(array $control = [])
    {
        $this->control = [];
        if ([] === $control) {
            return $this;
        }
        foreach($control as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addControl($v);
            } else {
                $this->addControl(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number used to link this term or term element to the applicable Security Label.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt[]
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number used to link this term or term element to the applicable Security Label.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt $number
     * @return static
     */
    public function addNumber($number = null)
    {
        if (null === $number) {
            $this->number = [];
            return $this;
        }
        if ($number instanceof FHIRUnsignedInt) {
            $this->number[] = $number;
            return $this;
        }
        $this->number[] = new FHIRUnsignedInt($number);
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number used to link this term or term element to the applicable Security Label.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt[] $number
     * @return static
     */
    public function setNumber(array $number = [])
    {
        $this->number = [];
        if ([] === $number) {
            return $this;
        }
        foreach($number as $v) {
            if ($v instanceof FHIRUnsignedInt) {
                $this->addNumber($v);
            } else {
                $this->addNumber(new FHIRUnsignedInt($v));
            }
        }
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
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CATEGORY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getClassification())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLASSIFICATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getControl())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTROL, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getNumber())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NUMBER, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_SECURITY_LABEL, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASSIFICATION])) {
            $v = $this->getClassification();
            foreach($validationRules[self::FIELD_CLASSIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_SECURITY_LABEL, self::FIELD_CLASSIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASSIFICATION])) {
                        $errs[self::FIELD_CLASSIFICATION] = [];
                    }
                    $errs[self::FIELD_CLASSIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTROL])) {
            $v = $this->getControl();
            foreach($validationRules[self::FIELD_CONTROL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_SECURITY_LABEL, self::FIELD_CONTROL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTROL])) {
                        $errs[self::FIELD_CONTROL] = [];
                    }
                    $errs[self::FIELD_CONTROL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUMBER])) {
            $v = $this->getNumber();
            foreach($validationRules[self::FIELD_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_SECURITY_LABEL, self::FIELD_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER])) {
                        $errs[self::FIELD_NUMBER] = [];
                    }
                    $errs[self::FIELD_NUMBER][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSecurityLabel $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSecurityLabel
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
                throw new \DomainException(sprintf('FHIRContractSecurityLabel::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRContractSecurityLabel::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRContractSecurityLabel;
        } elseif (!is_object($type) || !($type instanceof FHIRContractSecurityLabel)) {
            throw new \RuntimeException(sprintf(
                'FHIRContractSecurityLabel::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSecurityLabel or null, %s seen.',
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
        if (isset($children->category)) {
            foreach($children->category as $child) {
                $type->addCategory(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->classification)) {
            $type->setClassification(FHIRCoding::xmlUnserialize($children->classification));
        }
        if (isset($children->control)) {
            foreach($children->control as $child) {
                $type->addControl(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->number)) {
            foreach($children->number as $child) {
                $type->addNumber(FHIRUnsignedInt::xmlUnserialize($child));
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
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getClassification())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CLASSIFICATION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getControl())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTROL, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getNumber())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NUMBER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CATEGORY][] = $v;
            }
        }
        if (null !== ($v = $this->getClassification())) {
            $a[self::FIELD_CLASSIFICATION] = $v;
        }
        if ([] !== ($vs = $this->getControl())) {
            $a[self::FIELD_CONTROL] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONTROL][] = $v;
            }
        }
        if ([] !== ($vs = $this->getNumber())) {
            $a[self::FIELD_NUMBER] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_NUMBER][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRUnsignedInt::FIELD_VALUE]) || array_key_exists(FHIRUnsignedInt::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRUnsignedInt::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_NUMBER_EXT] = $encs;
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