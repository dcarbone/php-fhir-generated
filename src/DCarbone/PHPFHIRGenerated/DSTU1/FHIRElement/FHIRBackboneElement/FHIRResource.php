<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;

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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeMap;

/**
 * The base resource declaration used for all FHIR resource types - adds Narrative
 * and xml:lang
 *
 * Class FHIRResource
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement
 */
class FHIRResource extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_RESOURCE;
    const FIELD_CONTAINED = 'contained';
    const FIELD_LANGUAGE = 'language';
    const FIELD_LANGUAGE_EXT = '_language';
    const FIELD_TEXT = 'text';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Contained, inline Resources. These resources do not have an independent
     * existence apart from the resource that contains them - they cannot be identified
     * independently, and nor can they have their own independent transaction scope
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface[]
     */
    protected $contained = [];

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The human language of the content. The value can be any valid value according to
     * BCP-47
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    protected $language = null;

    /**
     * A human-readable formatted text, including images.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Text summary of resource content (for human interpretation)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRNarrative
     */
    protected $text = null;

    /**
     * Validation map for fields in type Resource
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRResource Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRResource::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CONTAINED])) {
            if (is_array($data[self::FIELD_CONTAINED])) {
                if (is_int(key($data[self::FIELD_CONTAINED]))) {
                    $this->setContained($data[self::FIELD_CONTAINED]);
                } else {
                    $typeClass = PHPFHIRTypeMap::getContainedTypeFromArray($data[self::FIELD_CONTAINED]);
                    if (null === $typeClass) {
                        throw new \InvalidArgumentException(sprintf(
                            'FHIRResource - Unable to determine class for field "contained" from value: %s',
                            json_encode($data[self::FIELD_CONTAINED])
                        ));
                    }
                    $this->addContained(new $typeClass($data[self::FIELD_CONTAINED]));
                }
            } else if ($data[self::FIELD_CONTAINED] instanceof PHPFHIRContainedTypeInterface) {
                $this->addContained($data[self::FIELD_CONTAINED]);
            }
        }
        if (isset($data[self::FIELD_LANGUAGE]) || isset($data[self::FIELD_LANGUAGE_EXT])) {
            if (isset($data[self::FIELD_LANGUAGE])) {
                $value = $data[self::FIELD_LANGUAGE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LANGUAGE_EXT]) && is_array($data[self::FIELD_LANGUAGE_EXT])) {
                $ext = $data[self::FIELD_LANGUAGE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setLanguage($value);
                } else if (is_array($value)) {
                    $this->setLanguage(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setLanguage(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLanguage(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_TEXT])) {
            if ($data[self::FIELD_TEXT] instanceof FHIRNarrative) {
                $this->setText($data[self::FIELD_TEXT]);
            } else {
                $this->setText(new FHIRNarrative($data[self::FIELD_TEXT]));
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
        return "<Resource{$xmlns}></Resource>";
    }

    /**
     * Contained, inline Resources. These resources do not have an independent
     * existence apart from the resource that contains them - they cannot be identified
     * independently, and nor can they have their own independent transaction scope
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface[]
     */
    public function getContained()
    {
        return $this->contained;
    }

    /**
     * Contained, inline Resources. These resources do not have an independent
     * existence apart from the resource that contains them - they cannot be identified
     * independently, and nor can they have their own independent transaction scope
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface $contained
     * @return static
     */
    public function addContained(PHPFHIRContainedTypeInterface $contained = null)
    {
        $this->contained[] = $contained;
        return $this;
    }

    /**
     * Contained, inline Resources. These resources do not have an independent
     * existence apart from the resource that contains them - they cannot be identified
     * independently, and nor can they have their own independent transaction scope
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface[] $contained
     * @return static
     */
    public function setContained(array $contained = [])
    {
        $this->contained = [];
        if ([] === $contained) {
            return $this;
        }
        foreach($contained as $v) {
            if (null === $v) {
                continue;
            }
            if (is_object($v)) {
                if ($v instanceof PHPFHIRContainedTypeInterface) {
                    $this->addContained($v);
                } else {
                    throw new \InvalidArgumentException(sprintf(
                        'FHIRResource - Field "contained" must be an array of objects implementing PHPFHIRContainedTypeInterface, object of type %s seen',
                        get_class($v)
                    ));
                }
            } else if (is_array($v)) {
                $typeClass = PHPFHIRTypeMap::getContainedTypeFromArray($v);
                if (null === $typeClass) {
                    throw new \InvalidArgumentException(sprintf(
                        'FHIRResource - Unable to determine class for field "contained" from value: %s',
                        json_encode($v)
                    ));
                }
                $this->addContained(new $typeClass($v));
            } else {
                throw new \InvalidArgumentException(sprintf(
                    'FHIRResource - Unable to determine class for field "contained" from value: %s',
                    json_encode($v)
                ));
            }
        }
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The human language of the content. The value can be any valid value according to
     * BCP-47
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The human language of the content. The value can be any valid value according to
     * BCP-47
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode $language
     * @return static
     */
    public function setLanguage($language = null)
    {
        if (null === $language) {
            $this->language = null;
            return $this;
        }
        if ($language instanceof FHIRCode) {
            $this->language = $language;
            return $this;
        }
        $this->language = new FHIRCode($language);
        return $this;
    }

    /**
     * A human-readable formatted text, including images.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Text summary of resource content (for human interpretation)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRNarrative
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * A human-readable formatted text, including images.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Text summary of resource content (for human interpretation)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRNarrative $text
     * @return static
     */
    public function setText(FHIRNarrative $text = null)
    {
        $this->text = $text;
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
        if ([] !== ($vs = $this->getContained())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTAINED, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getLanguage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LANGUAGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getText())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
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
                throw new \DomainException(sprintf('FHIRResource::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRResource::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRResource;
        } elseif (!is_object($type) || !($type instanceof FHIRResource)) {
            throw new \RuntimeException(sprintf(
                'FHIRResource::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource or null, %s seen.',
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
        if (isset($children->contained)) {
            foreach($children->contained as $child) {
                foreach($child->children() as $babe) {
                    $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($babe));
                    continue 2;
                }
            }
        }
        if (isset($children->language)) {
            $type->setLanguage(FHIRCode::xmlUnserialize($children->language));
        }
        if (isset($attributes->language)) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->language);
            } else {
                $type->setLanguage((string)$attributes->language);
            }
        }
        if (isset($children->text)) {
            $type->setText(FHIRNarrative::xmlUnserialize($children->text));
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
        if ([] !== ($vs = $this->getContained())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $tsxe = $sxe->addChild(self::FIELD_CONTAINED);
                $v->xmlSerialize($tsxe->addChild($v->_getFHIRTypeName(), null, $v->_getFHIRXMLNamespace()));
            }
        }        if (null !== ($v = $this->getLanguage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LANGUAGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getText())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TEXT, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getContained())) {
            $a[self::FIELD_CONTAINED] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONTAINED][] = $v;
            }
        }
        if (null !== ($v = $this->getLanguage())) {
            $a[self::FIELD_LANGUAGE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_LANGUAGE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getText())) {
            $a[self::FIELD_TEXT] = $v;
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