<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:25+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRHTTPVerb;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R5\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * A container for a collection of resources.
 *
 * Class FHIRBundleRequest
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle
 */
class FHIRBundleRequest extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_REQUEST;

    const FIELD_METHOD = 'method';
    const FIELD_METHOD_EXT = '_method';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_IF_NONE_MATCH = 'ifNoneMatch';
    const FIELD_IF_NONE_MATCH_EXT = '_ifNoneMatch';
    const FIELD_IF_MODIFIED_SINCE = 'ifModifiedSince';
    const FIELD_IF_MODIFIED_SINCE_EXT = '_ifModifiedSince';
    const FIELD_IF_MATCH = 'ifMatch';
    const FIELD_IF_MATCH_EXT = '_ifMatch';
    const FIELD_IF_NONE_EXIST = 'ifNoneExist';
    const FIELD_IF_NONE_EXIST_EXT = '_ifNoneExist';

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * In a transaction or batch, this is the HTTP action to be executed for this
     * entry. In a history bundle, this indicates the HTTP action that occurred.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRHTTPVerb
     */
    protected null|FHIRHTTPVerb $method = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL for this entry, relative to the root (the address to which the request
     * is posted).
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $url = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the ETag values match, return a 304 Not Modified status. See the API
     * documentation for ["Conditional Read"](http.html#cread).
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $ifNoneMatch = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Only perform the operation if the last updated date matches. See the API
     * documentation for ["Conditional Read"](http.html#cread).
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $ifModifiedSince = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Only perform the operation if the Etag value matches. For more information, see
     * the API section ["Managing Resource Contention"](http.html#concurrency).
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $ifMatch = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Instruct the server not to perform the create if a specified resource already
     * exists. For further information, see the API documentation for ["Conditional
     * Create"](http.html#ccreate). This is just the query portion of the URL - what
     * follows the "?" (not including the "?").
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $ifNoneExist = null;

    /**
     * Validation map for fields in type Bundle.Request
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_METHOD => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_URL => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRBundleRequest Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_METHOD, $data) || array_key_exists(self::FIELD_METHOD_EXT, $data)) {
            $value = $data[self::FIELD_METHOD] ?? null;
            $ext = (isset($data[self::FIELD_METHOD_EXT]) && is_array($data[self::FIELD_METHOD_EXT])) ? $data[self::FIELD_METHOD_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRHTTPVerb) {
                    $this->setMethod($value);
                } else if (is_array($value)) {
                    $this->setMethod(new FHIRHTTPVerb(array_merge($ext, $value)));
                } else {
                    $this->setMethod(new FHIRHTTPVerb([FHIRHTTPVerb::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMethod(new FHIRHTTPVerb($ext));
            } else {
                $this->setMethod(new FHIRHTTPVerb(null));
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
        if (array_key_exists(self::FIELD_IF_NONE_MATCH, $data) || array_key_exists(self::FIELD_IF_NONE_MATCH_EXT, $data)) {
            $value = $data[self::FIELD_IF_NONE_MATCH] ?? null;
            $ext = (isset($data[self::FIELD_IF_NONE_MATCH_EXT]) && is_array($data[self::FIELD_IF_NONE_MATCH_EXT])) ? $data[self::FIELD_IF_NONE_MATCH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setIfNoneMatch($value);
                } else if (is_array($value)) {
                    $this->setIfNoneMatch(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setIfNoneMatch(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIfNoneMatch(new FHIRString($ext));
            } else {
                $this->setIfNoneMatch(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_IF_MODIFIED_SINCE, $data) || array_key_exists(self::FIELD_IF_MODIFIED_SINCE_EXT, $data)) {
            $value = $data[self::FIELD_IF_MODIFIED_SINCE] ?? null;
            $ext = (isset($data[self::FIELD_IF_MODIFIED_SINCE_EXT]) && is_array($data[self::FIELD_IF_MODIFIED_SINCE_EXT])) ? $data[self::FIELD_IF_MODIFIED_SINCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setIfModifiedSince($value);
                } else if (is_array($value)) {
                    $this->setIfModifiedSince(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setIfModifiedSince(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIfModifiedSince(new FHIRInstant($ext));
            } else {
                $this->setIfModifiedSince(new FHIRInstant(null));
            }
        }
        if (array_key_exists(self::FIELD_IF_MATCH, $data) || array_key_exists(self::FIELD_IF_MATCH_EXT, $data)) {
            $value = $data[self::FIELD_IF_MATCH] ?? null;
            $ext = (isset($data[self::FIELD_IF_MATCH_EXT]) && is_array($data[self::FIELD_IF_MATCH_EXT])) ? $data[self::FIELD_IF_MATCH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setIfMatch($value);
                } else if (is_array($value)) {
                    $this->setIfMatch(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setIfMatch(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIfMatch(new FHIRString($ext));
            } else {
                $this->setIfMatch(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_IF_NONE_EXIST, $data) || array_key_exists(self::FIELD_IF_NONE_EXIST_EXT, $data)) {
            $value = $data[self::FIELD_IF_NONE_EXIST] ?? null;
            $ext = (isset($data[self::FIELD_IF_NONE_EXIST_EXT]) && is_array($data[self::FIELD_IF_NONE_EXIST_EXT])) ? $data[self::FIELD_IF_NONE_EXIST_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setIfNoneExist($value);
                } else if (is_array($value)) {
                    $this->setIfNoneExist(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setIfNoneExist(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIfNoneExist(new FHIRString($ext));
            } else {
                $this->setIfNoneExist(new FHIRString(null));
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * In a transaction or batch, this is the HTTP action to be executed for this
     * entry. In a history bundle, this indicates the HTTP action that occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRHTTPVerb
     */
    public function getMethod(): null|FHIRHTTPVerb
    {
        return $this->method;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * In a transaction or batch, this is the HTTP action to be executed for this
     * entry. In a history bundle, this indicates the HTTP action that occurred.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRHTTPVerb $method
     * @return static
     */
    public function setMethod(null|FHIRHTTPVerb $method = null): self
    {
        if (null === $method) {
            $method = new FHIRHTTPVerb();
        }
        $this->_trackValueSet($this->method, $method);
        $this->method = $method;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL for this entry, relative to the root (the address to which the request
     * is posted).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri
     */
    public function getUrl(): null|FHIRUri
    {
        return $this->url;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL for this entry, relative to the root (the address to which the request
     * is posted).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri $url
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the ETag values match, return a 304 Not Modified status. See the API
     * documentation for ["Conditional Read"](http.html#cread).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getIfNoneMatch(): null|FHIRString
    {
        return $this->ifNoneMatch;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the ETag values match, return a 304 Not Modified status. See the API
     * documentation for ["Conditional Read"](http.html#cread).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $ifNoneMatch
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setIfNoneMatch(null|string|FHIRStringPrimitive|FHIRString $ifNoneMatch = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $ifNoneMatch && !($ifNoneMatch instanceof FHIRString)) {
            $ifNoneMatch = new FHIRString($ifNoneMatch);
        }
        $this->_trackValueSet($this->ifNoneMatch, $ifNoneMatch);
        if (!isset($this->_xmlLocations[self::FIELD_IF_NONE_MATCH])) {
            $this->_xmlLocations[self::FIELD_IF_NONE_MATCH] = [];
        }
        $this->_xmlLocations[self::FIELD_IF_NONE_MATCH][0] = $xmlLocation;
        $this->ifNoneMatch = $ifNoneMatch;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Only perform the operation if the last updated date matches. See the API
     * documentation for ["Conditional Read"](http.html#cread).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInstant
     */
    public function getIfModifiedSince(): null|FHIRInstant
    {
        return $this->ifModifiedSince;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Only perform the operation if the last updated date matches. See the API
     * documentation for ["Conditional Read"](http.html#cread).
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R5\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInstant $ifModifiedSince
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setIfModifiedSince(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $ifModifiedSince = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $ifModifiedSince && !($ifModifiedSince instanceof FHIRInstant)) {
            $ifModifiedSince = new FHIRInstant($ifModifiedSince);
        }
        $this->_trackValueSet($this->ifModifiedSince, $ifModifiedSince);
        if (!isset($this->_xmlLocations[self::FIELD_IF_MODIFIED_SINCE])) {
            $this->_xmlLocations[self::FIELD_IF_MODIFIED_SINCE] = [];
        }
        $this->_xmlLocations[self::FIELD_IF_MODIFIED_SINCE][0] = $xmlLocation;
        $this->ifModifiedSince = $ifModifiedSince;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Only perform the operation if the Etag value matches. For more information, see
     * the API section ["Managing Resource Contention"](http.html#concurrency).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getIfMatch(): null|FHIRString
    {
        return $this->ifMatch;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Only perform the operation if the Etag value matches. For more information, see
     * the API section ["Managing Resource Contention"](http.html#concurrency).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $ifMatch
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setIfMatch(null|string|FHIRStringPrimitive|FHIRString $ifMatch = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $ifMatch && !($ifMatch instanceof FHIRString)) {
            $ifMatch = new FHIRString($ifMatch);
        }
        $this->_trackValueSet($this->ifMatch, $ifMatch);
        if (!isset($this->_xmlLocations[self::FIELD_IF_MATCH])) {
            $this->_xmlLocations[self::FIELD_IF_MATCH] = [];
        }
        $this->_xmlLocations[self::FIELD_IF_MATCH][0] = $xmlLocation;
        $this->ifMatch = $ifMatch;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Instruct the server not to perform the create if a specified resource already
     * exists. For further information, see the API documentation for ["Conditional
     * Create"](http.html#ccreate). This is just the query portion of the URL - what
     * follows the "?" (not including the "?").
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getIfNoneExist(): null|FHIRString
    {
        return $this->ifNoneExist;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Instruct the server not to perform the create if a specified resource already
     * exists. For further information, see the API documentation for ["Conditional
     * Create"](http.html#ccreate). This is just the query portion of the URL - what
     * follows the "?" (not including the "?").
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $ifNoneExist
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setIfNoneExist(null|string|FHIRStringPrimitive|FHIRString $ifNoneExist = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $ifNoneExist && !($ifNoneExist instanceof FHIRString)) {
            $ifNoneExist = new FHIRString($ifNoneExist);
        }
        $this->_trackValueSet($this->ifNoneExist, $ifNoneExist);
        if (!isset($this->_xmlLocations[self::FIELD_IF_NONE_EXIST])) {
            $this->_xmlLocations[self::FIELD_IF_NONE_EXIST] = [];
        }
        $this->_xmlLocations[self::FIELD_IF_NONE_EXIST][0] = $xmlLocation;
        $this->ifNoneExist = $ifNoneExist;
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
        if (null !== ($v = $this->getMethod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_METHOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIfNoneMatch())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IF_NONE_MATCH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIfModifiedSince())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IF_MODIFIED_SINCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIfMatch())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IF_MATCH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIfNoneExist())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IF_NONE_EXIST] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_METHOD])) {
            $v = $this->getMethod();
            foreach($validationRules[self::FIELD_METHOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_REQUEST, self::FIELD_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_METHOD])) {
                        $errs[self::FIELD_METHOD] = [];
                    }
                    $errs[self::FIELD_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_REQUEST, self::FIELD_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_URL])) {
                        $errs[self::FIELD_URL] = [];
                    }
                    $errs[self::FIELD_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IF_NONE_MATCH])) {
            $v = $this->getIfNoneMatch();
            foreach($validationRules[self::FIELD_IF_NONE_MATCH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_REQUEST, self::FIELD_IF_NONE_MATCH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IF_NONE_MATCH])) {
                        $errs[self::FIELD_IF_NONE_MATCH] = [];
                    }
                    $errs[self::FIELD_IF_NONE_MATCH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IF_MODIFIED_SINCE])) {
            $v = $this->getIfModifiedSince();
            foreach($validationRules[self::FIELD_IF_MODIFIED_SINCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_REQUEST, self::FIELD_IF_MODIFIED_SINCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IF_MODIFIED_SINCE])) {
                        $errs[self::FIELD_IF_MODIFIED_SINCE] = [];
                    }
                    $errs[self::FIELD_IF_MODIFIED_SINCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IF_MATCH])) {
            $v = $this->getIfMatch();
            foreach($validationRules[self::FIELD_IF_MATCH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_REQUEST, self::FIELD_IF_MATCH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IF_MATCH])) {
                        $errs[self::FIELD_IF_MATCH] = [];
                    }
                    $errs[self::FIELD_IF_MATCH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IF_NONE_EXIST])) {
            $v = $this->getIfNoneExist();
            foreach($validationRules[self::FIELD_IF_NONE_EXIST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_REQUEST, self::FIELD_IF_NONE_EXIST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IF_NONE_EXIST])) {
                        $errs[self::FIELD_IF_NONE_EXIST] = [];
                    }
                    $errs[self::FIELD_IF_NONE_EXIST][$rule] = $err;
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
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
        } else if (!($type instanceof FHIRBundleRequest)) {
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
            if (self::FIELD_METHOD === $childName) {
                $type->setMethod(FHIRHTTPVerb::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_URL === $childName) {
                $type->setUrl(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_IF_NONE_MATCH === $childName) {
                $type->setIfNoneMatch(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_IF_MODIFIED_SINCE === $childName) {
                $type->setIfModifiedSince(FHIRInstant::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_IF_MATCH === $childName) {
                $type->setIfMatch(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_IF_NONE_EXIST === $childName) {
                $type->setIfNoneExist(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_URL])) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_URL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setUrl((string)$attributes[self::FIELD_URL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IF_NONE_MATCH])) {
            $pt = $type->getIfNoneMatch();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IF_NONE_MATCH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setIfNoneMatch((string)$attributes[self::FIELD_IF_NONE_MATCH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IF_MODIFIED_SINCE])) {
            $pt = $type->getIfModifiedSince();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IF_MODIFIED_SINCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setIfModifiedSince((string)$attributes[self::FIELD_IF_MODIFIED_SINCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IF_MATCH])) {
            $pt = $type->getIfMatch();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IF_MATCH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setIfMatch((string)$attributes[self::FIELD_IF_MATCH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IF_NONE_EXIST])) {
            $pt = $type->getIfNoneExist();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IF_NONE_EXIST], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setIfNoneExist((string)$attributes[self::FIELD_IF_NONE_EXIST], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'BundleRequest', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_URL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getUrl())) {
            $xw->writeAttribute(self::FIELD_URL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_IF_NONE_MATCH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getIfNoneMatch())) {
            $xw->writeAttribute(self::FIELD_IF_NONE_MATCH, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_IF_MODIFIED_SINCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getIfModifiedSince())) {
            $xw->writeAttribute(self::FIELD_IF_MODIFIED_SINCE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_IF_MATCH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getIfMatch())) {
            $xw->writeAttribute(self::FIELD_IF_MATCH, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_IF_NONE_EXIST] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getIfNoneExist())) {
            $xw->writeAttribute(self::FIELD_IF_NONE_EXIST, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getMethod())) {
            $xw->startElement(self::FIELD_METHOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_URL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getUrl())) {
            $xw->startElement(self::FIELD_URL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_IF_NONE_MATCH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getIfNoneMatch())) {
            $xw->startElement(self::FIELD_IF_NONE_MATCH);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_IF_MODIFIED_SINCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getIfModifiedSince())) {
            $xw->startElement(self::FIELD_IF_MODIFIED_SINCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_IF_MATCH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getIfMatch())) {
            $xw->startElement(self::FIELD_IF_MATCH);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_IF_NONE_EXIST] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getIfNoneExist())) {
            $xw->startElement(self::FIELD_IF_NONE_EXIST);
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
        if (null !== ($v = $this->getMethod())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_METHOD} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRHTTPVerb::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_METHOD_EXT} = $ext;
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
        if (null !== ($v = $this->getIfNoneMatch())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_IF_NONE_MATCH} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_IF_NONE_MATCH_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getIfModifiedSince())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_IF_MODIFIED_SINCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_IF_MODIFIED_SINCE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getIfMatch())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_IF_MATCH} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_IF_MATCH_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getIfNoneExist())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_IF_NONE_EXIST} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_IF_NONE_EXIST_EXT} = $ext;
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