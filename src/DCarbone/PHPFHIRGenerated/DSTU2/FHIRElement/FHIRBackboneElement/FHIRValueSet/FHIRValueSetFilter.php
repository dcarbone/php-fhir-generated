<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRFilterOperator;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A value set specifies a set of codes drawn from one or more code systems.
 *
 * Class FHIRValueSetFilter
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet
 */
class FHIRValueSetFilter extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_FILTER;
    const FIELD_OP = 'op';
    const FIELD_OP_EXT = '_op';
    const FIELD_PROPERTY = 'property';
    const FIELD_PROPERTY_EXT = '_property';
    const FIELD_VALUE = 'value';
    const FIELD_VALUE_EXT = '_value';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * The kind of operation to perform as a part of a property based filter.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The kind of operation to perform as a part of the filter criteria.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRFilterOperator
     */
    protected $op = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A code that identifies a property defined in the code system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    protected $property = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The match value may be either a code defined by the system, or a string value,
     * which is a regex match on the literal string of the property value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    protected $value = null;

    /**
     * Validation map for fields in type ValueSet.Filter
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRValueSetFilter Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRValueSetFilter::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_OP]) || isset($data[self::FIELD_OP_EXT])) {
            if (isset($data[self::FIELD_OP])) {
                $value = $data[self::FIELD_OP];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_OP_EXT]) && is_array($data[self::FIELD_OP_EXT])) {
                $ext = $data[self::FIELD_OP_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRFilterOperator) {
                    $this->setOp($value);
                } else if (is_array($value)) {
                    $this->setOp(new FHIRFilterOperator(array_merge($ext, $value)));
                } else {
                    $this->setOp(new FHIRFilterOperator([FHIRFilterOperator::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setOp(new FHIRFilterOperator($ext));
            }
        }
        if (isset($data[self::FIELD_PROPERTY]) || isset($data[self::FIELD_PROPERTY_EXT])) {
            if (isset($data[self::FIELD_PROPERTY])) {
                $value = $data[self::FIELD_PROPERTY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PROPERTY_EXT]) && is_array($data[self::FIELD_PROPERTY_EXT])) {
                $ext = $data[self::FIELD_PROPERTY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setProperty($value);
                } else if (is_array($value)) {
                    $this->setProperty(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setProperty(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setProperty(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE]) || isset($data[self::FIELD_VALUE_EXT])) {
            if (isset($data[self::FIELD_VALUE])) {
                $value = $data[self::FIELD_VALUE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_EXT]) && is_array($data[self::FIELD_VALUE_EXT])) {
                $ext = $data[self::FIELD_VALUE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setValue($value);
                } else if (is_array($value)) {
                    $this->setValue(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setValue(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValue(new FHIRCode($ext));
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
        return "<ValueSetFilter{$xmlns}></ValueSetFilter>";
    }

    /**
     * The kind of operation to perform as a part of a property based filter.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The kind of operation to perform as a part of the filter criteria.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRFilterOperator
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * The kind of operation to perform as a part of a property based filter.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The kind of operation to perform as a part of the filter criteria.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRFilterOperator $op
     * @return static
     */
    public function setOp(FHIRFilterOperator $op = null)
    {
        $this->op = $op;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A code that identifies a property defined in the code system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A code that identifies a property defined in the code system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $property
     * @return static
     */
    public function setProperty($property = null)
    {
        if (null === $property) {
            $this->property = null;
            return $this;
        }
        if ($property instanceof FHIRCode) {
            $this->property = $property;
            return $this;
        }
        $this->property = new FHIRCode($property);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The match value may be either a code defined by the system, or a string value,
     * which is a regex match on the literal string of the property value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The match value may be either a code defined by the system, or a string value,
     * which is a regex match on the literal string of the property value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $value
     * @return static
     */
    public function setValue($value = null)
    {
        if (null === $value) {
            $this->value = null;
            return $this;
        }
        if ($value instanceof FHIRCode) {
            $this->value = $value;
            return $this;
        }
        $this->value = new FHIRCode($value);
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
        if (null !== ($v = $this->getOp())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProperty())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROPERTY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValue())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_OP])) {
            $v = $this->getOp();
            foreach($validationRules[self::FIELD_OP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_FILTER, self::FIELD_OP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OP])) {
                        $errs[self::FIELD_OP] = [];
                    }
                    $errs[self::FIELD_OP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROPERTY])) {
            $v = $this->getProperty();
            foreach($validationRules[self::FIELD_PROPERTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_FILTER, self::FIELD_PROPERTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROPERTY])) {
                        $errs[self::FIELD_PROPERTY] = [];
                    }
                    $errs[self::FIELD_PROPERTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE])) {
            $v = $this->getValue();
            foreach($validationRules[self::FIELD_VALUE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_FILTER, self::FIELD_VALUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE])) {
                        $errs[self::FIELD_VALUE] = [];
                    }
                    $errs[self::FIELD_VALUE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter
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
                throw new \DomainException(sprintf('FHIRValueSetFilter::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRValueSetFilter::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRValueSetFilter;
        } elseif (!is_object($type) || !($type instanceof FHIRValueSetFilter)) {
            throw new \RuntimeException(sprintf(
                'FHIRValueSetFilter::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter or null, %s seen.',
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
        if (isset($children->op)) {
            $type->setOp(FHIRFilterOperator::xmlUnserialize($children->op));
        }
        if (isset($children->property)) {
            $type->setProperty(FHIRCode::xmlUnserialize($children->property));
        }
        if (isset($attributes->property)) {
            $pt = $type->getProperty();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->property);
            } else {
                $type->setProperty((string)$attributes->property);
            }
        }
        if (isset($children->value)) {
            $type->setValue(FHIRCode::xmlUnserialize($children->value));
        }
        if (isset($attributes->value)) {
            $pt = $type->getValue();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->value);
            } else {
                $type->setValue((string)$attributes->value);
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
        if (null !== ($v = $this->getOp())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OP, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getProperty())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROPERTY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValue())) {
            $sxe->addAttribute(self::FIELD_VALUE, (string)$v);
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getOp())) {
            $a[self::FIELD_OP] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRFilterOperator::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRFilterOperator::FIELD_VALUE]);
                $a[self::FIELD_OP_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getProperty())) {
            $a[self::FIELD_PROPERTY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_PROPERTY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValue())) {
            $a[self::FIELD_VALUE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_VALUE_EXT] = $enc;
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