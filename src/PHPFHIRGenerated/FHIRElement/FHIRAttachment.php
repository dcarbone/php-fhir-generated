<?php

namespace PHPFHIRGenerated\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement;

/**
 * For referring to data content defined in other formats.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRAttachment
 * @package PHPFHIRGenerated\FHIRElement
 */
class FHIRAttachment extends FHIRElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Attachment';

    /**
     * Identifies the type of the data in the attachment and allows a method to be chosen to interpret or render the data. Includes mime type parameters such as charset where appropriate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $contentType = null;

    /**
     * The date that the attachment was first created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $creation = null;

    /**
     * The actual data of the attachment - a sequence of bytes, base64 encoded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $data = null;

    /**
     * The calculated hash of the data using SHA-1. Represented using base64.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $hash = null;

    /**
     * The human language of the content. The value can be any valid value according to BCP 47.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $language = null;

    /**
     * The number of bytes of data that make up this attachment (before base64 encoding, if that is done).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $size = null;

    /**
     * A label or set of text to display in place of the data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * A location where the data can be accessed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public $url = null;

    /**
     * FHIRAttachment Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['contentType'])) {
                $this->setContentType($data['contentType']);
            }
            if (isset($data['creation'])) {
                $this->setCreation($data['creation']);
            }
            if (isset($data['data'])) {
                $this->setData($data['data']);
            }
            if (isset($data['hash'])) {
                $this->setHash($data['hash']);
            }
            if (isset($data['language'])) {
                $this->setLanguage($data['language']);
            }
            if (isset($data['size'])) {
                $this->setSize($data['size']);
            }
            if (isset($data['title'])) {
                $this->setTitle($data['title']);
            }
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRAttachment::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Identifies the type of the data in the attachment and allows a method to be chosen to interpret or render the data. Includes mime type parameters such as charset where appropriate.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setContentType($contentType)
    {
        if (null === $contentType) {
            return $this; 
        }
        if (is_scalar($contentType)) {
            $contentType = new FHIRCode($contentType);
        }
        if (!($contentType instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAttachment::setContentType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($contentType)
            ));
        }
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * Identifies the type of the data in the attachment and allows a method to be chosen to interpret or render the data. Includes mime type parameters such as charset where appropriate.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getContentType()
    {
        return $this->contentType;
    }


    /**
     * The date that the attachment was first created.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setCreation($creation)
    {
        if (null === $creation) {
            return $this; 
        }
        if (is_scalar($creation)) {
            $creation = new FHIRDateTime($creation);
        }
        if (!($creation instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAttachment::setCreation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($creation)
            ));
        }
        $this->creation = $creation;
        return $this;
    }

    /**
     * The date that the attachment was first created.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreation()
    {
        return $this->creation;
    }


    /**
     * The actual data of the attachment - a sequence of bytes, base64 encoded.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     * @return $this
     */
    public function setData($data)
    {
        if (null === $data) {
            return $this; 
        }
        if (is_scalar($data)) {
            $data = new FHIRBase64Binary($data);
        }
        if (!($data instanceof FHIRBase64Binary)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAttachment::setData - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary or appropriate scalar value, %s seen.',
                gettype($data)
            ));
        }
        $this->data = $data;
        return $this;
    }

    /**
     * The actual data of the attachment - a sequence of bytes, base64 encoded.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getData()
    {
        return $this->data;
    }


    /**
     * The calculated hash of the data using SHA-1. Represented using base64.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     * @return $this
     */
    public function setHash($hash)
    {
        if (null === $hash) {
            return $this; 
        }
        if (is_scalar($hash)) {
            $hash = new FHIRBase64Binary($hash);
        }
        if (!($hash instanceof FHIRBase64Binary)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAttachment::setHash - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary or appropriate scalar value, %s seen.',
                gettype($hash)
            ));
        }
        $this->hash = $hash;
        return $this;
    }

    /**
     * The calculated hash of the data using SHA-1. Represented using base64.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getHash()
    {
        return $this->hash;
    }


    /**
     * The human language of the content. The value can be any valid value according to BCP 47.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setLanguage($language)
    {
        if (null === $language) {
            return $this; 
        }
        if (is_scalar($language)) {
            $language = new FHIRCode($language);
        }
        if (!($language instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAttachment::setLanguage - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($language)
            ));
        }
        $this->language = $language;
        return $this;
    }

    /**
     * The human language of the content. The value can be any valid value according to BCP 47.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getLanguage()
    {
        return $this->language;
    }


    /**
     * The number of bytes of data that make up this attachment (before base64 encoding, if that is done).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setSize($size)
    {
        if (null === $size) {
            return $this; 
        }
        if (is_scalar($size)) {
            $size = new FHIRUnsignedInt($size);
        }
        if (!($size instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAttachment::setSize - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($size)
            ));
        }
        $this->size = $size;
        return $this;
    }

    /**
     * The number of bytes of data that make up this attachment (before base64 encoding, if that is done).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getSize()
    {
        return $this->size;
    }


    /**
     * A label or set of text to display in place of the data.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setTitle($title)
    {
        if (null === $title) {
            return $this; 
        }
        if (is_scalar($title)) {
            $title = new FHIRString($title);
        }
        if (!($title instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAttachment::setTitle - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($title)
            ));
        }
        $this->title = $title;
        return $this;
    }

    /**
     * A label or set of text to display in place of the data.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * A location where the data can be accessed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     * @return $this
     */
    public function setUrl($url)
    {
        if (null === $url) {
            return $this; 
        }
        if (is_scalar($url)) {
            $url = new FHIRUrl($url);
        }
        if (!($url instanceof FHIRUrl)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAttachment::setUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUrl or appropriate scalar value, %s seen.',
                gettype($url)
            ));
        }
        $this->url = $url;
        return $this;
    }

    /**
     * A location where the data can be accessed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public function getUrl()
    {
        return $this->url;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getContentType())) {
            $a['contentType'] = $v;
        }
        if (null !== ($v = $this->getCreation())) {
            $a['creation'] = $v;
        }
        if (null !== ($v = $this->getData())) {
            $a['data'] = $v;
        }
        if (null !== ($v = $this->getHash())) {
            $a['hash'] = $v;
        }
        if (null !== ($v = $this->getLanguage())) {
            $a['language'] = $v;
        }
        if (null !== ($v = $this->getSize())) {
            $a['size'] = $v;
        }
        if (null !== ($v = $this->getTitle())) {
            $a['title'] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a['url'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<Attachment xmlns="http://hl7.org/fhir"></Attachment>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}