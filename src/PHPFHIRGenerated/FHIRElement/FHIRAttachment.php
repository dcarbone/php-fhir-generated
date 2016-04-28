<?php namespace PHPFHIRGenerated\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRElement;
use PHPFHIRGenerated\JsonSerializable;

/**
 * For referring to data content defined in other formats.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRAttachment extends FHIRElement implements JsonSerializable
{
    /**
     * Identifies the type of the data in the attachment and allows a method to be chosen to interpret or render the data. Includes mime type parameters such as charset where appropriate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $contentType = null;

    /**
     * The human language of the content. The value can be any valid value according to BCP 47.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $language = null;

    /**
     * The actual data of the attachment - a sequence of bytes. In XML, represented using base64.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $data = null;

    /**
     * An alternative location where the data can be accessed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * The number of bytes of data that make up this attachment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $size = null;

    /**
     * The calculated hash of the data using SHA-1. Represented using base64.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $hash = null;

    /**
     * A label or set of text to display in place of the data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Attachment';

    /**
     * Identifies the type of the data in the attachment and allows a method to be chosen to interpret or render the data. Includes mime type parameters such as charset where appropriate.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Identifies the type of the data in the attachment and allows a method to be chosen to interpret or render the data. Includes mime type parameters such as charset where appropriate.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $contentType
     * @return $this
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * The human language of the content. The value can be any valid value according to BCP 47.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * The human language of the content. The value can be any valid value according to BCP 47.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * The actual data of the attachment - a sequence of bytes. In XML, represented using base64.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * The actual data of the attachment - a sequence of bytes. In XML, represented using base64.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * An alternative location where the data can be accessed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * An alternative location where the data can be accessed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * The number of bytes of data that make up this attachment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * The number of bytes of data that make up this attachment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * The calculated hash of the data using SHA-1. Represented using base64.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * The calculated hash of the data using SHA-1. Represented using base64.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $hash
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
        return $this;
    }

    /**
     * A label or set of text to display in place of the data.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A label or set of text to display in place of the data.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->contentType) $json['contentType'] = $this->contentType->jsonSerialize();
        if (null !== $this->language) $json['language'] = $this->language->jsonSerialize();
        if (null !== $this->data) $json['data'] = $this->data->jsonSerialize();
        if (null !== $this->url) $json['url'] = $this->url->jsonSerialize();
        if (null !== $this->size) $json['size'] = $this->size->jsonSerialize();
        if (null !== $this->hash) $json['hash'] = $this->hash->jsonSerialize();
        if (null !== $this->title) $json['title'] = $this->title->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Attachment xmlns="http://hl7.org/fhir"></Attachment>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->contentType) $this->contentType->xmlSerialize(true, $sxe->addChild('contentType'));
        if (null !== $this->language) $this->language->xmlSerialize(true, $sxe->addChild('language'));
        if (null !== $this->data) $this->data->xmlSerialize(true, $sxe->addChild('data'));
        if (null !== $this->url) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (null !== $this->size) $this->size->xmlSerialize(true, $sxe->addChild('size'));
        if (null !== $this->hash) $this->hash->xmlSerialize(true, $sxe->addChild('hash'));
        if (null !== $this->title) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}