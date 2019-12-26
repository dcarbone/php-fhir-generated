<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * For referring to data content defined in other formats.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRAttachment
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement
 */
class FHIRAttachment extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ATTACHMENT;
    const FIELD_CONTENT_TYPE = 'contentType';
    const FIELD_CONTENT_TYPE_EXT = '_contentType';
    const FIELD_CREATION = 'creation';
    const FIELD_CREATION_EXT = '_creation';
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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    protected $contentType = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date that the attachment was first created.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $creation = null;

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual data of the attachment - a sequence of bytes. In XML, represented
     * using base64.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBase64Binary
     */
    protected $data = null;

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The calculated hash of the data using SHA-1. Represented using base64.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBase64Binary
     */
    protected $hash = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The human language of the content. The value can be any valid value according to
     * BCP 47.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    protected $language = null;

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of bytes of data that make up this attachment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    protected $size = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A label or set of text to display in place of the data.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $title = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An alternative location where the data can be accessed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    protected $url = null;

    /**
     * Validation map for fields in type Attachment
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_CONTENT_TYPE]) || isset($data[self::FIELD_CONTENT_TYPE_EXT])) {
            if (isset($data[self::FIELD_CONTENT_TYPE])) {
                $value = $data[self::FIELD_CONTENT_TYPE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CONTENT_TYPE_EXT]) && is_array($data[self::FIELD_CONTENT_TYPE_EXT])) {
                $ext = $data[self::FIELD_CONTENT_TYPE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setContentType($value);
                } else if (is_array($value)) {
                    $this->setContentType(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setContentType(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setContentType(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_CREATION]) || isset($data[self::FIELD_CREATION_EXT])) {
            if (isset($data[self::FIELD_CREATION])) {
                $value = $data[self::FIELD_CREATION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CREATION_EXT]) && is_array($data[self::FIELD_CREATION_EXT])) {
                $ext = $data[self::FIELD_CREATION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setCreation($value);
                } else if (is_array($value)) {
                    $this->setCreation(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setCreation(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCreation(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_DATA]) || isset($data[self::FIELD_DATA_EXT])) {
            if (isset($data[self::FIELD_DATA])) {
                $value = $data[self::FIELD_DATA];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATA_EXT]) && is_array($data[self::FIELD_DATA_EXT])) {
                $ext = $data[self::FIELD_DATA_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setData($value);
                } else if (is_array($value)) {
                    $this->setData(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setData(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setData(new FHIRBase64Binary($ext));
            }
        }
        if (isset($data[self::FIELD_HASH]) || isset($data[self::FIELD_HASH_EXT])) {
            if (isset($data[self::FIELD_HASH])) {
                $value = $data[self::FIELD_HASH];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_HASH_EXT]) && is_array($data[self::FIELD_HASH_EXT])) {
                $ext = $data[self::FIELD_HASH_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setHash($value);
                } else if (is_array($value)) {
                    $this->setHash(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setHash(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setHash(new FHIRBase64Binary($ext));
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
        if (isset($data[self::FIELD_SIZE]) || isset($data[self::FIELD_SIZE_EXT])) {
            if (isset($data[self::FIELD_SIZE])) {
                $value = $data[self::FIELD_SIZE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SIZE_EXT]) && is_array($data[self::FIELD_SIZE_EXT])) {
                $ext = $data[self::FIELD_SIZE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setSize($value);
                } else if (is_array($value)) {
                    $this->setSize(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setSize(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSize(new FHIRUnsignedInt($ext));
            }
        }
        if (isset($data[self::FIELD_TITLE]) || isset($data[self::FIELD_TITLE_EXT])) {
            if (isset($data[self::FIELD_TITLE])) {
                $value = $data[self::FIELD_TITLE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TITLE_EXT]) && is_array($data[self::FIELD_TITLE_EXT])) {
                $ext = $data[self::FIELD_TITLE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTitle($value);
                } else if (is_array($value)) {
                    $this->setTitle(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTitle(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_URL]) || isset($data[self::FIELD_URL_EXT])) {
            if (isset($data[self::FIELD_URL])) {
                $value = $data[self::FIELD_URL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT])) {
                $ext = $data[self::FIELD_URL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setUrl($value);
                } else if (is_array($value)) {
                    $this->setUrl(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setUrl(new FHIRUri($ext));
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
        return "<Attachment{$xmlns}></Attachment>";
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    public function getContentType()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $contentType
     * @return static
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date that the attachment was first created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date that the attachment was first created.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $creation
     * @return static
     */
    public function setCreation($creation = null)
    {
        if (null === $creation) {
            $this->creation = null;
            return $this;
        }
        if ($creation instanceof FHIRDateTime) {
            $this->creation = $creation;
            return $this;
        }
        $this->creation = new FHIRDateTime($creation);
        return $this;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual data of the attachment - a sequence of bytes. In XML, represented
     * using base64.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBase64Binary
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual data of the attachment - a sequence of bytes. In XML, represented
     * using base64.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBase64Binary $data
     * @return static
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
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The calculated hash of the data using SHA-1. Represented using base64.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBase64Binary
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The calculated hash of the data using SHA-1. Represented using base64.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBase64Binary $hash
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The human language of the content. The value can be any valid value according to
     * BCP 47.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
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
     * BCP 47.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $language
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
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of bytes of data that make up this attachment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of bytes of data that make up this attachment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnsignedInt $size
     * @return static
     */
    public function setSize($size = null)
    {
        if (null === $size) {
            $this->size = null;
            return $this;
        }
        if ($size instanceof FHIRUnsignedInt) {
            $this->size = $size;
            return $this;
        }
        $this->size = new FHIRUnsignedInt($size);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A label or set of text to display in place of the data.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A label or set of text to display in place of the data.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $title
     * @return static
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
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An alternative location where the data can be accessed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An alternative location where the data can be accessed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri $url
     * @return static
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
        if (null !== ($v = $this->getContentType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTENT_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCreation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CREATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getData())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getHash())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HASH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLanguage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LANGUAGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSize())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SIZE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TITLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URL] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_CREATION])) {
            $v = $this->getCreation();
            foreach($validationRules[self::FIELD_CREATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ATTACHMENT, self::FIELD_CREATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CREATION])) {
                        $errs[self::FIELD_CREATION] = [];
                    }
                    $errs[self::FIELD_CREATION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment
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
                throw new \DomainException(sprintf('FHIRAttachment::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRAttachment::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRAttachment;
        } elseif (!is_object($type) || !($type instanceof FHIRAttachment)) {
            throw new \RuntimeException(sprintf(
                'FHIRAttachment::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->contentType)) {
            $type->setContentType(FHIRCode::xmlUnserialize($children->contentType));
        }
        if (isset($attributes->contentType)) {
            $pt = $type->getContentType();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->contentType);
            } else {
                $type->setContentType((string)$attributes->contentType);
            }
        }
        if (isset($children->creation)) {
            $type->setCreation(FHIRDateTime::xmlUnserialize($children->creation));
        }
        if (isset($attributes->creation)) {
            $pt = $type->getCreation();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->creation);
            } else {
                $type->setCreation((string)$attributes->creation);
            }
        }
        if (isset($children->data)) {
            $type->setData(FHIRBase64Binary::xmlUnserialize($children->data));
        }
        if (isset($attributes->data)) {
            $pt = $type->getData();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->data);
            } else {
                $type->setData((string)$attributes->data);
            }
        }
        if (isset($children->hash)) {
            $type->setHash(FHIRBase64Binary::xmlUnserialize($children->hash));
        }
        if (isset($attributes->hash)) {
            $pt = $type->getHash();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->hash);
            } else {
                $type->setHash((string)$attributes->hash);
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
        if (isset($children->size)) {
            $type->setSize(FHIRUnsignedInt::xmlUnserialize($children->size));
        }
        if (isset($attributes->size)) {
            $pt = $type->getSize();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->size);
            } else {
                $type->setSize((string)$attributes->size);
            }
        }
        if (isset($children->title)) {
            $type->setTitle(FHIRString::xmlUnserialize($children->title));
        }
        if (isset($attributes->title)) {
            $pt = $type->getTitle();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->title);
            } else {
                $type->setTitle((string)$attributes->title);
            }
        }
        if (isset($children->url)) {
            $type->setUrl(FHIRUri::xmlUnserialize($children->url));
        }
        if (isset($attributes->url)) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->url);
            } else {
                $type->setUrl((string)$attributes->url);
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
        if (null !== ($v = $this->getContentType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTENT_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCreation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CREATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getData())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getHash())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_HASH, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLanguage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LANGUAGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSize())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SIZE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTitle())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TITLE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUrl())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_URL, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_CONTENT_TYPE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_CONTENT_TYPE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getCreation())) {
            $a[self::FIELD_CREATION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_CREATION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getData())) {
            $a[self::FIELD_DATA] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBase64Binary::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBase64Binary::FIELD_VALUE]);
                $a[self::FIELD_DATA_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getHash())) {
            $a[self::FIELD_HASH] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBase64Binary::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBase64Binary::FIELD_VALUE]);
                $a[self::FIELD_HASH_EXT] = $enc;
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
        if (null !== ($v = $this->getSize())) {
            $a[self::FIELD_SIZE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUnsignedInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUnsignedInt::FIELD_VALUE]);
                $a[self::FIELD_SIZE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            $a[self::FIELD_TITLE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_TITLE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_URL_EXT] = $enc;
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