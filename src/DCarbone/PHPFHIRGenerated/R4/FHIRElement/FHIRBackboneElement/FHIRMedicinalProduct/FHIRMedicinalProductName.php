<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 29th, 2019 23:11+0000
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
    protected $_xmlns = 'http://hl7.org/fhir';

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
    private static $_fieldValidation = [    ];

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
        if (isset($data[self::FIELD_PRODUCT_NAME])) {
            $ext = (isset($data[self::FIELD_PRODUCT_NAME_EXT]) && is_array($data[self::FIELD_PRODUCT_NAME_EXT]))
                ? $data[self::FIELD_PRODUCT_NAME_EXT]
                : null;
            if ($data[self::FIELD_PRODUCT_NAME] instanceof FHIRString) {
                $this->setProductName($data[self::FIELD_PRODUCT_NAME]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PRODUCT_NAME])) {
                    $this->setProductName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PRODUCT_NAME]] + $ext));
                } else if (is_array($data[self::FIELD_PRODUCT_NAME])) {
                    $this->setProductName(new FHIRString(array_merge($ext, $data[self::FIELD_PRODUCT_NAME])));
                }
            } else {
                $this->setProductName(new FHIRString($data[self::FIELD_PRODUCT_NAME]));
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
     * @return array
     */
    public function _validationErrors()
    {
        // TODO: implement validation
        return [];
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
        if (isset($attributes->productName)) {
            $type->setProductName((string)$attributes->productName);
        }
        if (isset($children->productName)) {
            $type->setProductName(FHIRString::xmlUnserialize($children->productName));
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
            $a[self::FIELD_COUNTRY_LANGUAGE] = $vs;
        }
        if ([] !== ($vs = $this->getNamePart())) {
            $a[self::FIELD_NAME_PART] = $vs;
        }
        if (null !== ($v = $this->getProductName())) {
            $a[self::FIELD_PRODUCT_NAME] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_PRODUCT_NAME_EXT] = $enc;
            }
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