<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 8th, 2019 00:59+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
 * policy or agreement.
 *
 * Class FHIRContractSecurityLabel
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract
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

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the applicable privacy and security
     * policies governing this term and/or term elements.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    private $category = [];

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the level of confidentiality protection
     * required for this term and/or term elements.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    private $classification = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the manner in which term and/or term
     * elements are to be protected.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    private $control = [];

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Number used to link this term or term element to the applicable Security Label.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt[]
     */
    private $number = [];

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
        if (isset($data[self::FIELD_NUMBER])) {
            $ext = (isset($data[self::FIELD_NUMBER_EXT]) && is_array($data[self::FIELD_NUMBER_EXT]))
                ? $data[self::FIELD_NUMBER_EXT]
                : null;
            if (is_array($data[self::FIELD_NUMBER])) {
                foreach($data[self::FIELD_NUMBER] as $i => $v) {
                    if ($v instanceof FHIRUnsignedInt) {
                        $this->addNumber($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addNumber(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addNumber(new FHIRUnsignedInt($v));
                    }
                }
            } elseif ($data[self::FIELD_NUMBER] instanceof FHIRUnsignedInt) {
                $this->addNumber($data[self::FIELD_NUMBER]);
            } elseif ($ext && is_scalar($data[self::FIELD_NUMBER])) {
                $this->addNumber(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $data[self::FIELD_NUMBER]] + $ext));
            } else {
                $this->addNumber(new FHIRUnsignedInt($data[self::FIELD_NUMBER]));
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
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the applicable privacy and security
     * policies governing this term and/or term elements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the applicable privacy and security
     * policies governing this term and/or term elements.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding $category
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSecurityLabel
     */
    public function addCategory(FHIRCoding $category = null)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the applicable privacy and security
     * policies governing this term and/or term elements.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding[] $category
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSecurityLabel
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the level of confidentiality protection
     * required for this term and/or term elements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the level of confidentiality protection
     * required for this term and/or term elements.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding $classification
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSecurityLabel
     */
    public function setClassification(FHIRCoding $classification = null)
    {
        $this->classification = $classification;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the manner in which term and/or term
     * elements are to be protected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getControl()
    {
        return $this->control;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the manner in which term and/or term
     * elements are to be protected.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding $control
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSecurityLabel
     */
    public function addControl(FHIRCoding $control = null)
    {
        $this->control[] = $control;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Security label privacy tag that species the manner in which term and/or term
     * elements are to be protected.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding[] $control
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSecurityLabel
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Number used to link this term or term element to the applicable Security Label.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt[]
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Number used to link this term or term element to the applicable Security Label.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $number
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSecurityLabel
     */
    public function addNumber($number = null)
    {
        if (null === $number) {
            $this->number = null;
            return $this;
        }
        if ($number instanceof FHIRUnsignedInt) {
            $this->number = $number;
            return $this;
        }
        $this->number = new FHIRUnsignedInt($number);
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Number used to link this term or term element to the applicable Security Label.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt[] $number
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSecurityLabel
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSecurityLabel $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSecurityLabel
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRContractSecurityLabel::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRContractSecurityLabel::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRContractSecurityLabel);
        } elseif (!is_object($type) || !($type instanceof FHIRContractSecurityLabel)) {
            throw new \RuntimeException(sprintf(
                'FHIRContractSecurityLabel::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSecurityLabel or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
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
        if (isset($attributes->number)) {
            $type->addNumber((string)$attributes->number);
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
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ContractSecurityLabel xmlns="http://hl7.org/fhir"></ContractSecurityLabel>');
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY));
            }
        }
        if (null !== ($v = $this->getClassification())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CLASSIFICATION));
        }
        if ([] !== ($vs = $this->getControl())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTROL));
            }
        }
        if ([] !== ($vs = $this->getNumber())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_NUMBER, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_NUMBER));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_NUMBER));
                }
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
            $a[self::FIELD_CATEGORY] = $vs;
        }
        if (null !== ($v = $this->getClassification())) {
            $a[self::FIELD_CLASSIFICATION] = $v;
        }
        if ([] !== ($vs = $this->getControl())) {
            $a[self::FIELD_CONTROL] = $vs;
        }
        if ([] !== ($vs = $this->getNumber())) {
            $a[self::FIELD_NUMBER] = [];
            $a[self::FIELD_NUMBER_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_NUMBER][] = (string)$v;
                $a[self::FIELD_NUMBER_EXT][] = $v;
            }
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