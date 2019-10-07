<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 7th, 2019 22:31+0000
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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ALLOWED_MONEY = 'allowedMoney';
    const FIELD_ALLOWED_STRING = 'allowedString';
    const FIELD_ALLOWED_STRING_EXT = '_allowedString';
    const FIELD_ALLOWED_UNSIGNED_INT = 'allowedUnsignedInt';
    const FIELD_ALLOWED_UNSIGNED_INT_EXT = '_allowedUnsignedInt';
    const FIELD_TYPE = 'type';
    const FIELD_USED_MONEY = 'usedMoney';
    const FIELD_USED_UNSIGNED_INT = 'usedUnsignedInt';
    const FIELD_USED_UNSIGNED_INT_EXT = '_usedUnsignedInt';

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Benefits allowed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    private $allowedMoney = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Benefits allowed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $allowedString = null;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Benefits allowed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    private $allowedUnsignedInt = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Deductable, visits, benefit amount.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Benefits used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    private $usedMoney = null;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Benefits used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    private $usedUnsignedInt = null;

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
        if (isset($data[self::FIELD_ALLOWED_STRING])) {
            $ext = (isset($data[self::FIELD_ALLOWED_STRING_EXT]) && is_array($data[self::FIELD_ALLOWED_STRING_EXT]))
                ? $data[self::FIELD_ALLOWED_STRING_EXT]
                : null;
            if ($data[self::FIELD_ALLOWED_STRING] instanceof FHIRString) {
                $this->setAllowedString($data[self::FIELD_ALLOWED_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_ALLOWED_STRING])) {
                $this->setAllowedString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_ALLOWED_STRING]] + $ext));
            } else {
                $this->setAllowedString(new FHIRString($data[self::FIELD_ALLOWED_STRING]));
            }
        }
        if (isset($data[self::FIELD_ALLOWED_UNSIGNED_INT])) {
            $ext = (isset($data[self::FIELD_ALLOWED_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_ALLOWED_UNSIGNED_INT_EXT]))
                ? $data[self::FIELD_ALLOWED_UNSIGNED_INT_EXT]
                : null;
            if ($data[self::FIELD_ALLOWED_UNSIGNED_INT] instanceof FHIRUnsignedInt) {
                $this->setAllowedUnsignedInt($data[self::FIELD_ALLOWED_UNSIGNED_INT]);
            } elseif ($ext && is_scalar($data[self::FIELD_ALLOWED_UNSIGNED_INT])) {
                $this->setAllowedUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $data[self::FIELD_ALLOWED_UNSIGNED_INT]] + $ext));
            } else {
                $this->setAllowedUnsignedInt(new FHIRUnsignedInt($data[self::FIELD_ALLOWED_UNSIGNED_INT]));
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
        if (isset($data[self::FIELD_USED_UNSIGNED_INT])) {
            $ext = (isset($data[self::FIELD_USED_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_USED_UNSIGNED_INT_EXT]))
                ? $data[self::FIELD_USED_UNSIGNED_INT_EXT]
                : null;
            if ($data[self::FIELD_USED_UNSIGNED_INT] instanceof FHIRUnsignedInt) {
                $this->setUsedUnsignedInt($data[self::FIELD_USED_UNSIGNED_INT]);
            } elseif ($ext && is_scalar($data[self::FIELD_USED_UNSIGNED_INT])) {
                $this->setUsedUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $data[self::FIELD_USED_UNSIGNED_INT]] + $ext));
            } else {
                $this->setUsedUnsignedInt(new FHIRUnsignedInt($data[self::FIELD_USED_UNSIGNED_INT]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @return string
     */
    public function getFHIRXMLElementDefinition()
    {
        $xmlns = $this->getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ExplanationOfBenefitFinancial{$xmlns}></ExplanationOfBenefitFinancial>";
    }


    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Benefits allowed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney $allowedMoney
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial
     */
    public function setAllowedMoney(FHIRMoney $allowedMoney = null)
    {
        $this->allowedMoney = $allowedMoney;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Benefits allowed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $allowedString
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial
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
     * If the element is present, it must have either a @value, an @id referenced from
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Benefits allowed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $allowedUnsignedInt
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Deductable, visits, benefit amount.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Benefits used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney $usedMoney
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial
     */
    public function setUsedMoney(FHIRMoney $usedMoney = null)
    {
        $this->usedMoney = $usedMoney;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Benefits used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $usedUnsignedInt
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial
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
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRExplanationOfBenefitFinancial);
        } elseif (!is_object($type) || !($type instanceof FHIRExplanationOfBenefitFinancial)) {
            throw new \RuntimeException(sprintf(
                'FHIRExplanationOfBenefitFinancial::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
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
        if (isset($attributes->allowedString)) {
            $type->setAllowedString((string)$attributes->allowedString);
        }
        if (isset($children->allowedString)) {
            $type->setAllowedString(FHIRString::xmlUnserialize($children->allowedString));
        }
        if (isset($attributes->allowedUnsignedInt)) {
            $type->setAllowedUnsignedInt((string)$attributes->allowedUnsignedInt);
        }
        if (isset($children->allowedUnsignedInt)) {
            $type->setAllowedUnsignedInt(FHIRUnsignedInt::xmlUnserialize($children->allowedUnsignedInt));
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        if (isset($children->usedMoney)) {
            $type->setUsedMoney(FHIRMoney::xmlUnserialize($children->usedMoney));
        }
        if (isset($attributes->usedUnsignedInt)) {
            $type->setUsedUnsignedInt((string)$attributes->usedUnsignedInt);
        }
        if (isset($children->usedUnsignedInt)) {
            $type->setUsedUnsignedInt(FHIRUnsignedInt::xmlUnserialize($children->usedUnsignedInt));
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
            $sxe = new \SimpleXMLElement($this->getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getAllowedMoney())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ALLOWED_MONEY, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAllowedString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ALLOWED_STRING, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAllowedUnsignedInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ALLOWED_UNSIGNED_INT, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getUsedMoney())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_USED_MONEY, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUsedUnsignedInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_USED_UNSIGNED_INT, null, $v->getFHIRXMLNamespace()));
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
            $a[self::FIELD_ALLOWED_STRING] = (string)$v;
            $a[self::FIELD_ALLOWED_STRING_EXT] = $v;
        }
        if (null !== ($v = $this->getAllowedUnsignedInt())) {
            $a[self::FIELD_ALLOWED_UNSIGNED_INT] = (string)$v;
            $a[self::FIELD_ALLOWED_UNSIGNED_INT_EXT] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getUsedMoney())) {
            $a[self::FIELD_USED_MONEY] = $v;
        }
        if (null !== ($v = $this->getUsedUnsignedInt())) {
            $a[self::FIELD_USED_UNSIGNED_INT] = (string)$v;
            $a[self::FIELD_USED_UNSIGNED_INT_EXT] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}