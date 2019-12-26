<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * An amount of economic utility in some recognized currency.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRMoney
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement
 */
class FHIRMoney extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MONEY;
    const FIELD_CURRENCY = 'currency';
    const FIELD_CURRENCY_EXT = '_currency';
    const FIELD_VALUE = 'value';
    const FIELD_VALUE_EXT = '_value';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * ISO 4217 Currency Code.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    protected $currency = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Numerical value (with implicit precision).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected $value = null;

    /**
     * Validation map for fields in type Money
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRMoney Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMoney::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CURRENCY]) || isset($data[self::FIELD_CURRENCY_EXT])) {
            if (isset($data[self::FIELD_CURRENCY])) {
                $value = $data[self::FIELD_CURRENCY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CURRENCY_EXT]) && is_array($data[self::FIELD_CURRENCY_EXT])) {
                $ext = $data[self::FIELD_CURRENCY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setCurrency($value);
                } else if (is_array($value)) {
                    $this->setCurrency(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setCurrency(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCurrency(new FHIRCode($ext));
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
                if ($value instanceof FHIRDecimal) {
                    $this->setValue($value);
                } else if (is_array($value)) {
                    $this->setValue(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setValue(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValue(new FHIRDecimal($ext));
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
        return "<Money{$xmlns}></Money>";
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * ISO 4217 Currency Code.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * ISO 4217 Currency Code.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $currency
     * @return static
     */
    public function setCurrency($currency = null)
    {
        if (null === $currency) {
            $this->currency = null;
            return $this;
        }
        if ($currency instanceof FHIRCode) {
            $this->currency = $currency;
            return $this;
        }
        $this->currency = new FHIRCode($currency);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Numerical value (with implicit precision).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Numerical value (with implicit precision).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $value
     * @return static
     */
    public function setValue($value = null)
    {
        if (null === $value) {
            $this->value = null;
            return $this;
        }
        if ($value instanceof FHIRDecimal) {
            $this->value = $value;
            return $this;
        }
        $this->value = new FHIRDecimal($value);
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
        if (null !== ($v = $this->getCurrency())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CURRENCY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValue())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CURRENCY])) {
            $v = $this->getCurrency();
            foreach($validationRules[self::FIELD_CURRENCY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MONEY, self::FIELD_CURRENCY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CURRENCY])) {
                        $errs[self::FIELD_CURRENCY] = [];
                    }
                    $errs[self::FIELD_CURRENCY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE])) {
            $v = $this->getValue();
            foreach($validationRules[self::FIELD_VALUE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MONEY, self::FIELD_VALUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE])) {
                        $errs[self::FIELD_VALUE] = [];
                    }
                    $errs[self::FIELD_VALUE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
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
                throw new \DomainException(sprintf('FHIRMoney::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMoney::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMoney;
        } elseif (!is_object($type) || !($type instanceof FHIRMoney)) {
            throw new \RuntimeException(sprintf(
                'FHIRMoney::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->currency)) {
            $type->setCurrency(FHIRCode::xmlUnserialize($children->currency));
        }
        if (isset($attributes->currency)) {
            $pt = $type->getCurrency();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->currency);
            } else {
                $type->setCurrency((string)$attributes->currency);
            }
        }
        if (isset($children->value)) {
            $type->setValue(FHIRDecimal::xmlUnserialize($children->value));
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
        if (null !== ($v = $this->getCurrency())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CURRENCY, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getCurrency())) {
            $a[self::FIELD_CURRENCY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_CURRENCY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValue())) {
            $a[self::FIELD_VALUE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
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