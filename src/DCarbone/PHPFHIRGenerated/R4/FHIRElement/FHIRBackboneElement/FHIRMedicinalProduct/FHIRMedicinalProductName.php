<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Detailed definition of a medicinal product, typically for uses other than direct
 * patient care (e.g. regulatory use).
 *
 * Class FHIRMedicinalProductName
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct
 */
class FHIRMedicinalProductName extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DOT_NAME;
    const FIELD_COUNTRY_LANGUAGE = 'countryLanguage';
    const FIELD_NAME_PART = 'namePart';
    const FIELD_PRODUCT_NAME = 'productName';
    const FIELD_PRODUCT_NAME_EXT = '_productName';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * Country where the name applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductCountryLanguage[]
     */
    protected $countryLanguage = [];

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * Coding words or phrases of the name.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductNamePart[]
     */
    protected $namePart = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The full product name.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $productName = null;

    /**
     * Validation map for fields in type MedicinalProduct.Name
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRMedicinalProductName Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductName::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COUNTRY_LANGUAGE])) {
            if (is_array($data[self::FIELD_COUNTRY_LANGUAGE])) {
                foreach($data[self::FIELD_COUNTRY_LANGUAGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicinalProductCountryLanguage) {
                        $this->addCountryLanguage($v);
                    } else {
                        $this->addCountryLanguage(new FHIRMedicinalProductCountryLanguage($v));
                    }
                }
            } else if ($data[self::FIELD_COUNTRY_LANGUAGE] instanceof FHIRMedicinalProductCountryLanguage) {
                $this->addCountryLanguage($data[self::FIELD_COUNTRY_LANGUAGE]);
            } else {
                $this->addCountryLanguage(new FHIRMedicinalProductCountryLanguage($data[self::FIELD_COUNTRY_LANGUAGE]));
            }
        }
        if (isset($data[self::FIELD_NAME_PART])) {
            if (is_array($data[self::FIELD_NAME_PART])) {
                foreach($data[self::FIELD_NAME_PART] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicinalProductNamePart) {
                        $this->addNamePart($v);
                    } else {
                        $this->addNamePart(new FHIRMedicinalProductNamePart($v));
                    }
                }
            } else if ($data[self::FIELD_NAME_PART] instanceof FHIRMedicinalProductNamePart) {
                $this->addNamePart($data[self::FIELD_NAME_PART]);
            } else {
                $this->addNamePart(new FHIRMedicinalProductNamePart($data[self::FIELD_NAME_PART]));
            }
        }
        if (isset($data[self::FIELD_PRODUCT_NAME]) || isset($data[self::FIELD_PRODUCT_NAME_EXT])) {
            if (isset($data[self::FIELD_PRODUCT_NAME])) {
                $value = $data[self::FIELD_PRODUCT_NAME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PRODUCT_NAME_EXT]) && is_array($data[self::FIELD_PRODUCT_NAME_EXT])) {
                $ext = $data[self::FIELD_PRODUCT_NAME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setProductName($value);
                } else if (is_array($value)) {
                    $this->setProductName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setProductName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setProductName(new FHIRString($ext));
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
        return "<MedicinalProductName{$xmlns}></MedicinalProductName>";
    }

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * Country where the name applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductCountryLanguage[]
     */
    public function getCountryLanguage()
    {
        return $this->countryLanguage;
    }

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * Country where the name applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductCountryLanguage $countryLanguage
     * @return static
     */
    public function addCountryLanguage(FHIRMedicinalProductCountryLanguage $countryLanguage = null)
    {
        $this->countryLanguage[] = $countryLanguage;
        return $this;
    }

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * Country where the name applies.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductCountryLanguage[] $countryLanguage
     * @return static
     */
    public function setCountryLanguage(array $countryLanguage = [])
    {
        $this->countryLanguage = [];
        if ([] === $countryLanguage) {
            return $this;
        }
        foreach($countryLanguage as $v) {
            if ($v instanceof FHIRMedicinalProductCountryLanguage) {
                $this->addCountryLanguage($v);
            } else {
                $this->addCountryLanguage(new FHIRMedicinalProductCountryLanguage($v));
            }
        }
        return $this;
    }

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * Coding words or phrases of the name.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductNamePart[]
     */
    public function getNamePart()
    {
        return $this->namePart;
    }

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * Coding words or phrases of the name.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductNamePart $namePart
     * @return static
     */
    public function addNamePart(FHIRMedicinalProductNamePart $namePart = null)
    {
        $this->namePart[] = $namePart;
        return $this;
    }

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * Coding words or phrases of the name.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductNamePart[] $namePart
     * @return static
     */
    public function setNamePart(array $namePart = [])
    {
        $this->namePart = [];
        if ([] === $namePart) {
            return $this;
        }
        foreach($namePart as $v) {
            if ($v instanceof FHIRMedicinalProductNamePart) {
                $this->addNamePart($v);
            } else {
                $this->addNamePart(new FHIRMedicinalProductNamePart($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The full product name.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The full product name.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $productName
     * @return static
     */
    public function setProductName($productName = null)
    {
        if (null === $productName) {
            $this->productName = null;
            return $this;
        }
        if ($productName instanceof FHIRString) {
            $this->productName = $productName;
            return $this;
        }
        $this->productName = new FHIRString($productName);
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
        if ([] !== ($vs = $this->getCountryLanguage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COUNTRY_LANGUAGE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getNamePart())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NAME_PART, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getProductName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRODUCT_NAME] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_COUNTRY_LANGUAGE])) {
            $v = $this->getCountryLanguage();
            foreach($validationRules[self::FIELD_COUNTRY_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DOT_NAME, self::FIELD_COUNTRY_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COUNTRY_LANGUAGE])) {
                        $errs[self::FIELD_COUNTRY_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_COUNTRY_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME_PART])) {
            $v = $this->getNamePart();
            foreach($validationRules[self::FIELD_NAME_PART] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DOT_NAME, self::FIELD_NAME_PART, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME_PART])) {
                        $errs[self::FIELD_NAME_PART] = [];
                    }
                    $errs[self::FIELD_NAME_PART][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT_NAME])) {
            $v = $this->getProductName();
            foreach($validationRules[self::FIELD_PRODUCT_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DOT_NAME, self::FIELD_PRODUCT_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT_NAME])) {
                        $errs[self::FIELD_PRODUCT_NAME] = [];
                    }
                    $errs[self::FIELD_PRODUCT_NAME][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductName $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductName
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
                throw new \DomainException(sprintf('FHIRMedicinalProductName::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicinalProductName::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicinalProductName;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicinalProductName)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicinalProductName::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductName or null, %s seen.',
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
        if (isset($children->countryLanguage)) {
            foreach($children->countryLanguage as $child) {
                $type->addCountryLanguage(FHIRMedicinalProductCountryLanguage::xmlUnserialize($child));
            }
        }
        if (isset($children->namePart)) {
            foreach($children->namePart as $child) {
                $type->addNamePart(FHIRMedicinalProductNamePart::xmlUnserialize($child));
            }
        }
        if (isset($children->productName)) {
            $type->setProductName(FHIRString::xmlUnserialize($children->productName));
        }
        if (isset($attributes->productName)) {
            $pt = $type->getProductName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->productName);
            } else {
                $type->setProductName((string)$attributes->productName);
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
        if ([] !== ($vs = $this->getCountryLanguage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COUNTRY_LANGUAGE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getNamePart())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NAME_PART, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getProductName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCT_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getCountryLanguage())) {
            $a[self::FIELD_COUNTRY_LANGUAGE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_COUNTRY_LANGUAGE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getNamePart())) {
            $a[self::FIELD_NAME_PART] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_NAME_PART][] = $v;
            }
        }
        if (null !== ($v = $this->getProductName())) {
            $a[self::FIELD_PRODUCT_NAME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PRODUCT_NAME_EXT] = $enc;
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