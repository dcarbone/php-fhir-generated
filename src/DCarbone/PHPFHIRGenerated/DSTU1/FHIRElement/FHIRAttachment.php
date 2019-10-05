<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 5th, 2019 19:59+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * For referring to data content defined in other formats.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRAttachment
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement
 */
class FHIRAttachment extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ATTACHMENT;

    const FIELD_CONTENT_TYPE = 'contentType';
    const FIELD_CONTENT_TYPE_EXT = '_contentType';
    const FIELD_DATA = 'data';
    const FIELD_DATA_EXT = '_data';
    const FIELD_HASH = 'hash';
    const FIELD_HASH_EXT = '_hash';
    const FIELD_LANGUAGE = 'language';
    const FIELD_LANGUAGE_EXT = '_language';
    const FIELD_SIZE = 'size';
    const FIELD_SIZE_EXT = '_size';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Identifies the type of the data in the attachment and allows a method to be
     * chosen to interpret or render the data. Includes mime type parameters such as
     * charset where appropriate.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    private $contentType = null;
    /**
     * A stream of bytes
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The actual data of the attachment - a sequence of bytes. In XML, represented
     * using base64.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary
     */
    private $data = null;
    /**
     * A stream of bytes
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The calculated hash of the data using SHA-1. Represented using base64.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary
     */
    private $hash = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The human language of the content. The value can be any valid value according to
     * BCP 47.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    private $language = null;
    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The number of bytes of data that make up this attachment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    private $size = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A label or set of text to display in place of the data.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $title = null;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An alternative location where the data can be accessed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    private $url = null;

    /**
     * FHIRAttachment Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAttachment::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CONTENT_TYPE])) {
            $ext = (isset($data[self::FIELD_CONTENT_TYPE_EXT]) && is_array($data[self::FIELD_CONTENT_TYPE_EXT]))
                ? $data[self::FIELD_CONTENT_TYPE_EXT]
                : null;
            if ($data[self::FIELD_CONTENT_TYPE] instanceof FHIRCode) {
                $this->setContentType($data[self::FIELD_CONTENT_TYPE]);
            } elseif ($ext && is_scalar($data[self::FIELD_CONTENT_TYPE])) {
                $this->setContentType(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_CONTENT_TYPE]] + $ext));
            } else {
                $this->setContentType(new FHIRCode($data[self::FIELD_CONTENT_TYPE]));
            }
        }
        if (isset($data[self::FIELD_DATA])) {
            $ext = (isset($data[self::FIELD_DATA_EXT]) && is_array($data[self::FIELD_DATA_EXT]))
                ? $data[self::FIELD_DATA_EXT]
                : null;
            if ($data[self::FIELD_DATA] instanceof FHIRBase64Binary) {
                $this->setData($data[self::FIELD_DATA]);
            } elseif ($ext && is_scalar($data[self::FIELD_DATA])) {
                $this->setData(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $data[self::FIELD_DATA]] + $ext));
            } else {
                $this->setData(new FHIRBase64Binary($data[self::FIELD_DATA]));
            }
        }
        if (isset($data[self::FIELD_HASH])) {
            $ext = (isset($data[self::FIELD_HASH_EXT]) && is_array($data[self::FIELD_HASH_EXT]))
                ? $data[self::FIELD_HASH_EXT]
                : null;
            if ($data[self::FIELD_HASH] instanceof FHIRBase64Binary) {
                $this->setHash($data[self::FIELD_HASH]);
            } elseif ($ext && is_scalar($data[self::FIELD_HASH])) {
                $this->setHash(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $data[self::FIELD_HASH]] + $ext));
            } else {
                $this->setHash(new FHIRBase64Binary($data[self::FIELD_HASH]));
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
        if (isset($data[self::FIELD_SIZE])) {
            $ext = (isset($data[self::FIELD_SIZE_EXT]) && is_array($data[self::FIELD_SIZE_EXT]))
                ? $data[self::FIELD_SIZE_EXT]
                : null;
            if ($data[self::FIELD_SIZE] instanceof FHIRInteger) {
                $this->setSize($data[self::FIELD_SIZE]);
            } elseif ($ext && is_scalar($data[self::FIELD_SIZE])) {
                $this->setSize(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_SIZE]] + $ext));
            } else {
                $this->setSize(new FHIRInteger($data[self::FIELD_SIZE]));
            }
        }
        if (isset($data[self::FIELD_TITLE])) {
            $ext = (isset($data[self::FIELD_TITLE_EXT]) && is_array($data[self::FIELD_TITLE_EXT]))
                ? $data[self::FIELD_TITLE_EXT]
                : null;
            if ($data[self::FIELD_TITLE] instanceof FHIRString) {
                $this->setTitle($data[self::FIELD_TITLE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TITLE])) {
                $this->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_TITLE]] + $ext));
            } else {
                $this->setTitle(new FHIRString($data[self::FIELD_TITLE]));
            }
        }
        if (isset($data[self::FIELD_URL])) {
            $ext = (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT]))
                ? $data[self::FIELD_URL_EXT]
                : null;
            if ($data[self::FIELD_URL] instanceof FHIRUri) {
                $this->setUrl($data[self::FIELD_URL]);
            } elseif ($ext && is_scalar($data[self::FIELD_URL])) {
                $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_URL]] + $ext));
            } else {
                $this->setUrl(new FHIRUri($data[self::FIELD_URL]));
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
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Identifies the type of the data in the attachment and allows a method to be
     * chosen to interpret or render the data. Includes mime type parameters such as
     * charset where appropriate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Identifies the type of the data in the attachment and allows a method to be
     * chosen to interpret or render the data. Includes mime type parameters such as
     * charset where appropriate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode $contentType
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment
     */
    public function setContentType($contentType = null)
    {
        if (null === $contentType) {
            $this->contentType = null;
            return $this;
        }
        if ($contentType instanceof FHIRCode) {
            $this->contentType = $contentType;
            return $this;
        }
        $this->contentType = new FHIRCode($contentType);
        return $this;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The actual data of the attachment - a sequence of bytes. In XML, represented
     * using base64.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The actual data of the attachment - a sequence of bytes. In XML, represented
     * using base64.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary $data
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment
     */
    public function setData($data = null)
    {
        if (null === $data) {
            $this->data = null;
            return $this;
        }
        if ($data instanceof FHIRBase64Binary) {
            $this->data = $data;
            return $this;
        }
        $this->data = new FHIRBase64Binary($data);
        return $this;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The calculated hash of the data using SHA-1. Represented using base64.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The calculated hash of the data using SHA-1. Represented using base64.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary $hash
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment
     */
    public function setHash($hash = null)
    {
        if (null === $hash) {
            $this->hash = null;
            return $this;
        }
        if ($hash instanceof FHIRBase64Binary) {
            $this->hash = $hash;
            return $this;
        }
        $this->hash = new FHIRBase64Binary($hash);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The human language of the content. The value can be any valid value according to
     * BCP 47.
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The human language of the content. The value can be any valid value according to
     * BCP 47.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode $language
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment
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
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The number of bytes of data that make up this attachment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The number of bytes of data that make up this attachment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $size
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment
     */
    public function setSize($size = null)
    {
        if (null === $size) {
            $this->size = null;
            return $this;
        }
        if ($size instanceof FHIRInteger) {
            $this->size = $size;
            return $this;
        }
        $this->size = new FHIRInteger($size);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A label or set of text to display in place of the data.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A label or set of text to display in place of the data.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $title
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment
     */
    public function setTitle($title = null)
    {
        if (null === $title) {
            $this->title = null;
            return $this;
        }
        if ($title instanceof FHIRString) {
            $this->title = $title;
            return $this;
        }
        $this->title = new FHIRString($title);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An alternative location where the data can be accessed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An alternative location where the data can be accessed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $url
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment
     */
    public function setUrl($url = null)
    {
        if (null === $url) {
            $this->url = null;
            return $this;
        }
        if ($url instanceof FHIRUri) {
            $this->url = $url;
            return $this;
        }
        $this->url = new FHIRUri($url);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment
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
                throw new \DomainException(sprintf('FHIRAttachment::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRAttachment::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRElement::xmlUnserialize($sxe, new FHIRAttachment);
        } elseif (!is_object($type) || !($type instanceof FHIRAttachment)) {
            throw new \RuntimeException(sprintf(
                'FHIRAttachment::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->contentType)) {
            $type->setContentType((string)$attributes->contentType);
        }
        if (isset($children->contentType)) {
            $type->setContentType(FHIRCode::xmlUnserialize($children->contentType));
        }
        if (isset($attributes->data)) {
            $type->setData((string)$attributes->data);
        }
        if (isset($children->data)) {
            $type->setData(FHIRBase64Binary::xmlUnserialize($children->data));
        }
        if (isset($attributes->hash)) {
            $type->setHash((string)$attributes->hash);
        }
        if (isset($children->hash)) {
            $type->setHash(FHIRBase64Binary::xmlUnserialize($children->hash));
        }
        if (isset($attributes->language)) {
            $type->setLanguage((string)$attributes->language);
        }
        if (isset($children->language)) {
            $type->setLanguage(FHIRCode::xmlUnserialize($children->language));
        }
        if (isset($attributes->size)) {
            $type->setSize((string)$attributes->size);
        }
        if (isset($children->size)) {
            $type->setSize(FHIRInteger::xmlUnserialize($children->size));
        }
        if (isset($attributes->title)) {
            $type->setTitle((string)$attributes->title);
        }
        if (isset($children->title)) {
            $type->setTitle(FHIRString::xmlUnserialize($children->title));
        }
        if (isset($attributes->url)) {
            $type->setUrl((string)$attributes->url);
        }
        if (isset($children->url)) {
            $type->setUrl(FHIRUri::xmlUnserialize($children->url));
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
            $sxe = new \SimpleXMLElement('<Attachment xmlns="http://hl7.org/fhir"></Attachment>');
        }
    parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getContentType())) {
            $sxe->addAttribute(self::FIELD_CONTENT_TYPE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTENT_TYPE));
            }
        }
        if (null !== ($v = $this->getData())) {
            $sxe->addAttribute(self::FIELD_DATA, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DATA));
            }
        }
        if (null !== ($v = $this->getHash())) {
            $sxe->addAttribute(self::FIELD_HASH, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_HASH));
            }
        }
        if (null !== ($v = $this->getLanguage())) {
            $sxe->addAttribute(self::FIELD_LANGUAGE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_LANGUAGE));
            }
        }
        if (null !== ($v = $this->getSize())) {
            $sxe->addAttribute(self::FIELD_SIZE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SIZE));
            }
        }
        if (null !== ($v = $this->getTitle())) {
            $sxe->addAttribute(self::FIELD_TITLE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TITLE));
            }
        }
        if (null !== ($v = $this->getUrl())) {
            $sxe->addAttribute(self::FIELD_URL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_URL));
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
        if (null !== ($v = $this->getContentType())) {
            $a[self::FIELD_CONTENT_TYPE] = (string)$v;
            $a[self::FIELD_CONTENT_TYPE_EXT] = $v;
        }
        if (null !== ($v = $this->getData())) {
            $a[self::FIELD_DATA] = (string)$v;
            $a[self::FIELD_DATA_EXT] = $v;
        }
        if (null !== ($v = $this->getHash())) {
            $a[self::FIELD_HASH] = (string)$v;
            $a[self::FIELD_HASH_EXT] = $v;
        }
        if (null !== ($v = $this->getLanguage())) {
            $a[self::FIELD_LANGUAGE] = (string)$v;
            $a[self::FIELD_LANGUAGE_EXT] = $v;
        }
        if (null !== ($v = $this->getSize())) {
            $a[self::FIELD_SIZE] = (string)$v;
            $a[self::FIELD_SIZE_EXT] = $v;
        }
        if (null !== ($v = $this->getTitle())) {
            $a[self::FIELD_TITLE] = (string)$v;
            $a[self::FIELD_TITLE_EXT] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = (string)$v;
            $a[self::FIELD_URL_EXT] = $v;
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