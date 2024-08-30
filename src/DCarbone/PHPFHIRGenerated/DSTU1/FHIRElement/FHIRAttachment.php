<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:23+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRBase64BinaryPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter;

/**
 * For referring to data content defined in other formats.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
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
    const FIELD_LANGUAGE = 'language';
    const FIELD_LANGUAGE_EXT = '_language';
    const FIELD_DATA = 'data';
    const FIELD_DATA_EXT = '_data';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_SIZE = 'size';
    const FIELD_SIZE_EXT = '_size';
    const FIELD_HASH = 'hash';
    const FIELD_HASH_EXT = '_hash';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies the type of the data in the attachment and allows a method to be
     * chosen to interpret or render the data. Includes mime type parameters such as
     * charset where appropriate.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $contentType = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The human language of the content. The value can be any valid value according to
     * BCP 47.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $language = null;
    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual data of the attachment - a sequence of bytes. In XML, represented
     * using base64.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary
     */
    protected null|FHIRBase64Binary $data = null;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An alternative location where the data can be accessed.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $url = null;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of bytes of data that make up this attachment.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $size = null;
    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The calculated hash of the data using SHA-1. Represented using base64.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary
     */
    protected null|FHIRBase64Binary $hash = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A label or set of text to display in place of the data.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $title = null;

    /**
     * Validation map for fields in type Attachment
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_CONTENT_TYPE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRAttachment Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_CONTENT_TYPE, $data) || array_key_exists(self::FIELD_CONTENT_TYPE_EXT, $data)) {
            $value = $data[self::FIELD_CONTENT_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_CONTENT_TYPE_EXT]) && is_array($data[self::FIELD_CONTENT_TYPE_EXT])) ? $data[self::FIELD_CONTENT_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setContentType($value);
                } else if (is_array($value)) {
                    $this->setContentType(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setContentType(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setContentType(new FHIRCode($ext));
            } else {
                $this->setContentType(new FHIRCode(null));
            }
        }
        if (array_key_exists(self::FIELD_LANGUAGE, $data) || array_key_exists(self::FIELD_LANGUAGE_EXT, $data)) {
            $value = $data[self::FIELD_LANGUAGE] ?? null;
            $ext = (isset($data[self::FIELD_LANGUAGE_EXT]) && is_array($data[self::FIELD_LANGUAGE_EXT])) ? $data[self::FIELD_LANGUAGE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setLanguage($value);
                } else if (is_array($value)) {
                    $this->setLanguage(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setLanguage(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLanguage(new FHIRCode($ext));
            } else {
                $this->setLanguage(new FHIRCode(null));
            }
        }
        if (array_key_exists(self::FIELD_DATA, $data) || array_key_exists(self::FIELD_DATA_EXT, $data)) {
            $value = $data[self::FIELD_DATA] ?? null;
            $ext = (isset($data[self::FIELD_DATA_EXT]) && is_array($data[self::FIELD_DATA_EXT])) ? $data[self::FIELD_DATA_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setData($value);
                } else if (is_array($value)) {
                    $this->setData(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setData(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setData(new FHIRBase64Binary($ext));
            } else {
                $this->setData(new FHIRBase64Binary(null));
            }
        }
        if (array_key_exists(self::FIELD_URL, $data) || array_key_exists(self::FIELD_URL_EXT, $data)) {
            $value = $data[self::FIELD_URL] ?? null;
            $ext = (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT])) ? $data[self::FIELD_URL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setUrl($value);
                } else if (is_array($value)) {
                    $this->setUrl(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUrl(new FHIRUri($ext));
            } else {
                $this->setUrl(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_SIZE, $data) || array_key_exists(self::FIELD_SIZE_EXT, $data)) {
            $value = $data[self::FIELD_SIZE] ?? null;
            $ext = (isset($data[self::FIELD_SIZE_EXT]) && is_array($data[self::FIELD_SIZE_EXT])) ? $data[self::FIELD_SIZE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setSize($value);
                } else if (is_array($value)) {
                    $this->setSize(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setSize(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSize(new FHIRInteger($ext));
            } else {
                $this->setSize(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_HASH, $data) || array_key_exists(self::FIELD_HASH_EXT, $data)) {
            $value = $data[self::FIELD_HASH] ?? null;
            $ext = (isset($data[self::FIELD_HASH_EXT]) && is_array($data[self::FIELD_HASH_EXT])) ? $data[self::FIELD_HASH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setHash($value);
                } else if (is_array($value)) {
                    $this->setHash(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setHash(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setHash(new FHIRBase64Binary($ext));
            } else {
                $this->setHash(new FHIRBase64Binary(null));
            }
        }
        if (array_key_exists(self::FIELD_TITLE, $data) || array_key_exists(self::FIELD_TITLE_EXT, $data)) {
            $value = $data[self::FIELD_TITLE] ?? null;
            $ext = (isset($data[self::FIELD_TITLE_EXT]) && is_array($data[self::FIELD_TITLE_EXT])) ? $data[self::FIELD_TITLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTitle($value);
                } else if (is_array($value)) {
                    $this->setTitle(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTitle(new FHIRString($ext));
            } else {
                $this->setTitle(new FHIRString(null));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies the type of the data in the attachment and allows a method to be
     * chosen to interpret or render the data. Includes mime type parameters such as
     * charset where appropriate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    public function getContentType(): null|FHIRCode
    {
        return $this->contentType;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies the type of the data in the attachment and allows a method to be
     * chosen to interpret or render the data. Includes mime type parameters such as
     * charset where appropriate.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode $contentType
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setContentType(null|string|FHIRCodePrimitive|FHIRCode $contentType = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $contentType && !($contentType instanceof FHIRCode)) {
            $contentType = new FHIRCode($contentType);
        }
        $this->_trackValueSet($this->contentType, $contentType);
        if (!isset($this->_xmlLocations[self::FIELD_CONTENT_TYPE])) {
            $this->_xmlLocations[self::FIELD_CONTENT_TYPE] = [];
        }
        $this->_xmlLocations[self::FIELD_CONTENT_TYPE][0] = $xmlLocation;
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The human language of the content. The value can be any valid value according to
     * BCP 47.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    public function getLanguage(): null|FHIRCode
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
     * BCP 47.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode $language
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setLanguage(null|string|FHIRCodePrimitive|FHIRCode $language = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $language && !($language instanceof FHIRCode)) {
            $language = new FHIRCode($language);
        }
        $this->_trackValueSet($this->language, $language);
        if (!isset($this->_xmlLocations[self::FIELD_LANGUAGE])) {
            $this->_xmlLocations[self::FIELD_LANGUAGE] = [];
        }
        $this->_xmlLocations[self::FIELD_LANGUAGE][0] = $xmlLocation;
        $this->language = $language;
        return $this;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual data of the attachment - a sequence of bytes. In XML, represented
     * using base64.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary
     */
    public function getData(): null|FHIRBase64Binary
    {
        return $this->data;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual data of the attachment - a sequence of bytes. In XML, represented
     * using base64.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary $data
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setData(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $data = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $data && !($data instanceof FHIRBase64Binary)) {
            $data = new FHIRBase64Binary($data);
        }
        $this->_trackValueSet($this->data, $data);
        if (!isset($this->_xmlLocations[self::FIELD_DATA])) {
            $this->_xmlLocations[self::FIELD_DATA] = [];
        }
        $this->_xmlLocations[self::FIELD_DATA][0] = $xmlLocation;
        $this->data = $data;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An alternative location where the data can be accessed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    public function getUrl(): null|FHIRUri
    {
        return $this->url;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An alternative location where the data can be accessed.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $url
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setUrl(null|string|FHIRUriPrimitive|FHIRUri $url = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $url && !($url instanceof FHIRUri)) {
            $url = new FHIRUri($url);
        }
        $this->_trackValueSet($this->url, $url);
        if (!isset($this->_xmlLocations[self::FIELD_URL])) {
            $this->_xmlLocations[self::FIELD_URL] = [];
        }
        $this->_xmlLocations[self::FIELD_URL][0] = $xmlLocation;
        $this->url = $url;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of bytes of data that make up this attachment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getSize(): null|FHIRInteger
    {
        return $this->size;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of bytes of data that make up this attachment.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $size
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSize(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $size = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $size && !($size instanceof FHIRInteger)) {
            $size = new FHIRInteger($size);
        }
        $this->_trackValueSet($this->size, $size);
        if (!isset($this->_xmlLocations[self::FIELD_SIZE])) {
            $this->_xmlLocations[self::FIELD_SIZE] = [];
        }
        $this->_xmlLocations[self::FIELD_SIZE][0] = $xmlLocation;
        $this->size = $size;
        return $this;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The calculated hash of the data using SHA-1. Represented using base64.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary
     */
    public function getHash(): null|FHIRBase64Binary
    {
        return $this->hash;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The calculated hash of the data using SHA-1. Represented using base64.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary $hash
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setHash(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $hash = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $hash && !($hash instanceof FHIRBase64Binary)) {
            $hash = new FHIRBase64Binary($hash);
        }
        $this->_trackValueSet($this->hash, $hash);
        if (!isset($this->_xmlLocations[self::FIELD_HASH])) {
            $this->_xmlLocations[self::FIELD_HASH] = [];
        }
        $this->_xmlLocations[self::FIELD_HASH][0] = $xmlLocation;
        $this->hash = $hash;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A label or set of text to display in place of the data.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getTitle(): null|FHIRString
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A label or set of text to display in place of the data.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $title
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setTitle(null|string|FHIRStringPrimitive|FHIRString $title = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $title && !($title instanceof FHIRString)) {
            $title = new FHIRString($title);
        }
        $this->_trackValueSet($this->title, $title);
        if (!isset($this->_xmlLocations[self::FIELD_TITLE])) {
            $this->_xmlLocations[self::FIELD_TITLE] = [];
        }
        $this->_xmlLocations[self::FIELD_TITLE][0] = $xmlLocation;
        $this->title = $title;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getContentType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTENT_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLanguage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LANGUAGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getData())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSize())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SIZE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getHash())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HASH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TITLE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT_TYPE])) {
            $v = $this->getContentType();
            foreach($validationRules[self::FIELD_CONTENT_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ATTACHMENT, self::FIELD_CONTENT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT_TYPE])) {
                        $errs[self::FIELD_CONTENT_TYPE] = [];
                    }
                    $errs[self::FIELD_CONTENT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ATTACHMENT, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA])) {
            $v = $this->getData();
            foreach($validationRules[self::FIELD_DATA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ATTACHMENT, self::FIELD_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA])) {
                        $errs[self::FIELD_DATA] = [];
                    }
                    $errs[self::FIELD_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ATTACHMENT, self::FIELD_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_URL])) {
                        $errs[self::FIELD_URL] = [];
                    }
                    $errs[self::FIELD_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SIZE])) {
            $v = $this->getSize();
            foreach($validationRules[self::FIELD_SIZE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ATTACHMENT, self::FIELD_SIZE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SIZE])) {
                        $errs[self::FIELD_SIZE] = [];
                    }
                    $errs[self::FIELD_SIZE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HASH])) {
            $v = $this->getHash();
            foreach($validationRules[self::FIELD_HASH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ATTACHMENT, self::FIELD_HASH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HASH])) {
                        $errs[self::FIELD_HASH] = [];
                    }
                    $errs[self::FIELD_HASH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TITLE])) {
            $v = $this->getTitle();
            foreach($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ATTACHMENT, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRAttachment)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_CONTENT_TYPE === $childName) {
                $type->setContentType(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DATA === $childName) {
                $type->setData(FHIRBase64Binary::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_URL === $childName) {
                $type->setUrl(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SIZE === $childName) {
                $type->setSize(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_HASH === $childName) {
                $type->setHash(FHIRBase64Binary::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TITLE === $childName) {
                $type->setTitle(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_CONTENT_TYPE])) {
            $pt = $type->getContentType();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CONTENT_TYPE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setContentType((string)$attributes[self::FIELD_CONTENT_TYPE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATA])) {
            $pt = $type->getData();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setData((string)$attributes[self::FIELD_DATA], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_URL])) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_URL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setUrl((string)$attributes[self::FIELD_URL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SIZE])) {
            $pt = $type->getSize();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SIZE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSize((string)$attributes[self::FIELD_SIZE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_HASH])) {
            $pt = $type->getHash();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_HASH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setHash((string)$attributes[self::FIELD_HASH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TITLE])) {
            $pt = $type->getTitle();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TITLE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setTitle((string)$attributes[self::FIELD_TITLE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'Attachment', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_CONTENT_TYPE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getContentType())) {
            $xw->writeAttribute(self::FIELD_CONTENT_TYPE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_LANGUAGE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getLanguage())) {
            $xw->writeAttribute(self::FIELD_LANGUAGE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DATA] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getData())) {
            $xw->writeAttribute(self::FIELD_DATA, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_URL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getUrl())) {
            $xw->writeAttribute(self::FIELD_URL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_SIZE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSize())) {
            $xw->writeAttribute(self::FIELD_SIZE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_HASH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getHash())) {
            $xw->writeAttribute(self::FIELD_HASH, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_TITLE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getTitle())) {
            $xw->writeAttribute(self::FIELD_TITLE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_CONTENT_TYPE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getContentType())) {
            $xw->startElement(self::FIELD_CONTENT_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_LANGUAGE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getLanguage())) {
            $xw->startElement(self::FIELD_LANGUAGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DATA] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getData())) {
            $xw->startElement(self::FIELD_DATA);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_URL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getUrl())) {
            $xw->startElement(self::FIELD_URL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_SIZE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSize())) {
            $xw->startElement(self::FIELD_SIZE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_HASH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getHash())) {
            $xw->startElement(self::FIELD_HASH);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_TITLE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getTitle())) {
            $xw->startElement(self::FIELD_TITLE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getContentType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONTENT_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONTENT_TYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLanguage())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LANGUAGE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LANGUAGE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getData())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATA} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBase64Binary::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATA_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_URL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_URL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSize())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SIZE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SIZE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getHash())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_HASH} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBase64Binary::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_HASH_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TITLE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TITLE_EXT} = $ext;
            }
        }

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}