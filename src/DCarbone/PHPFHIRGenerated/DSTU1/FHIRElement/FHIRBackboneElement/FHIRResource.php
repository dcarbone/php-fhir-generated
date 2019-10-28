<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 28th, 2019 20:54+0000
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

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CONTAINED = 'contained';
    const FIELD_LANGUAGE = 'language';
    const FIELD_LANGUAGE_EXT = '_language';
    const FIELD_TEXT = 'text';

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
        if (isset($data[self::FIELD_LANGUAGE])) {
            $ext = (isset($data[self::FIELD_LANGUAGE_EXT]) && is_array($data[self::FIELD_LANGUAGE_EXT]))
                ? $data[self::FIELD_LANGUAGE_EXT]
                : null;
            if ($data[self::FIELD_LANGUAGE] instanceof FHIRCode) {
                $this->setLanguage($data[self::FIELD_LANGUAGE]);
            } elseif ($ext && is_scalar($data[self::FIELD_LANGUAGE])) {
                $this->setLanguage(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_LANGUAGE]] + $ext));
            } else {
                $this->setLanguage(new FHIRCode($data[self::FIELD_LANGUAGE]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
        if (isset($attributes->language)) {
            $type->setLanguage((string)$attributes->language);
        }
        if (isset($children->language)) {
            $type->setLanguage(FHIRCode::xmlUnserialize($children->language));
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
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTAINED, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getLanguage())) {
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
            $a[self::FIELD_CONTAINED] = $vs;
        }
        if (null !== ($v = $this->getLanguage())) {
            $a[self::FIELD_LANGUAGE] = $v->getValue();
            $a[self::FIELD_LANGUAGE_EXT] = $v;
        }
        if (null !== ($v = $this->getText())) {
            $a[self::FIELD_TEXT] = $v;
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