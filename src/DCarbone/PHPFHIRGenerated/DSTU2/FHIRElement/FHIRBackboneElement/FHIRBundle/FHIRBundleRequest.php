<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 23:43+0000
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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRHTTPVerb;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A container for a collection of resources.
 *
 * Class FHIRBundleRequest
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle
 */
class FHIRBundleRequest extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_REQUEST;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_IF_MATCH = 'ifMatch';
    const FIELD_IF_MATCH_EXT = '_ifMatch';
    const FIELD_IF_MODIFIED_SINCE = 'ifModifiedSince';
    const FIELD_IF_MODIFIED_SINCE_EXT = '_ifModifiedSince';
    const FIELD_IF_NONE_EXIST = 'ifNoneExist';
    const FIELD_IF_NONE_EXIST_EXT = '_ifNoneExist';
    const FIELD_IF_NONE_MATCH = 'ifNoneMatch';
    const FIELD_IF_NONE_MATCH_EXT = '_ifNoneMatch';
    const FIELD_METHOD = 'method';
    const FIELD_METHOD_EXT = '_method';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Only perform the operation if the Etag value matches. For more information, see
     * the API section ["Managing Resource Contention"](http.html#concurrency).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    private $ifMatch = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Only perform the operation if the last updated date matches. See the API
     * documentation for ["Conditional Read"](http.html#cread).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant
     */
    private $ifModifiedSince = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Instruct the server not to perform the create if a specified resource already
     * exists. For further information, see the API documentation for ["Conditional
     * Create"](http.html#ccreate). This is just the query portion of the URL - what
     * follows the "?" (not including the "?").
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    private $ifNoneExist = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If the ETag values match, return a 304 Not modified status. See the API
     * documentation for ["Conditional Read"](http.html#cread).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    private $ifNoneMatch = null;
    /**
     * HTTP verbs (in the HTTP command line).
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The HTTP verb for this entry in either a update history, or a transaction/
     * transaction response.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRHTTPVerb
     */
    private $method = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The URL for this entry, relative to the root (the address to which the request
     * is posted).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    private $url = null;

    /**
     * FHIRBundleRequest Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundleRequest::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_IF_MATCH])) {
            $ext = (isset($data[self::FIELD_IF_MATCH_EXT]) && is_array($data[self::FIELD_IF_MATCH_EXT]))
                ? $data[self::FIELD_IF_MATCH_EXT]
                : null;
            if ($data[self::FIELD_IF_MATCH] instanceof FHIRString) {
                $this->setIfMatch($data[self::FIELD_IF_MATCH]);
            } elseif ($ext && is_scalar($data[self::FIELD_IF_MATCH])) {
                $this->setIfMatch(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_IF_MATCH]] + $ext));
            } else {
                $this->setIfMatch(new FHIRString($data[self::FIELD_IF_MATCH]));
            }
        }
        if (isset($data[self::FIELD_IF_MODIFIED_SINCE])) {
            $ext = (isset($data[self::FIELD_IF_MODIFIED_SINCE_EXT]) && is_array($data[self::FIELD_IF_MODIFIED_SINCE_EXT]))
                ? $data[self::FIELD_IF_MODIFIED_SINCE_EXT]
                : null;
            if ($data[self::FIELD_IF_MODIFIED_SINCE] instanceof FHIRInstant) {
                $this->setIfModifiedSince($data[self::FIELD_IF_MODIFIED_SINCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_IF_MODIFIED_SINCE])) {
                $this->setIfModifiedSince(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_IF_MODIFIED_SINCE]] + $ext));
            } else {
                $this->setIfModifiedSince(new FHIRInstant($data[self::FIELD_IF_MODIFIED_SINCE]));
            }
        }
        if (isset($data[self::FIELD_IF_NONE_EXIST])) {
            $ext = (isset($data[self::FIELD_IF_NONE_EXIST_EXT]) && is_array($data[self::FIELD_IF_NONE_EXIST_EXT]))
                ? $data[self::FIELD_IF_NONE_EXIST_EXT]
                : null;
            if ($data[self::FIELD_IF_NONE_EXIST] instanceof FHIRString) {
                $this->setIfNoneExist($data[self::FIELD_IF_NONE_EXIST]);
            } elseif ($ext && is_scalar($data[self::FIELD_IF_NONE_EXIST])) {
                $this->setIfNoneExist(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_IF_NONE_EXIST]] + $ext));
            } else {
                $this->setIfNoneExist(new FHIRString($data[self::FIELD_IF_NONE_EXIST]));
            }
        }
        if (isset($data[self::FIELD_IF_NONE_MATCH])) {
            $ext = (isset($data[self::FIELD_IF_NONE_MATCH_EXT]) && is_array($data[self::FIELD_IF_NONE_MATCH_EXT]))
                ? $data[self::FIELD_IF_NONE_MATCH_EXT]
                : null;
            if ($data[self::FIELD_IF_NONE_MATCH] instanceof FHIRString) {
                $this->setIfNoneMatch($data[self::FIELD_IF_NONE_MATCH]);
            } elseif ($ext && is_scalar($data[self::FIELD_IF_NONE_MATCH])) {
                $this->setIfNoneMatch(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_IF_NONE_MATCH]] + $ext));
            } else {
                $this->setIfNoneMatch(new FHIRString($data[self::FIELD_IF_NONE_MATCH]));
            }
        }
        if (isset($data[self::FIELD_METHOD])) {
            $ext = (isset($data[self::FIELD_METHOD_EXT]) && is_array($data[self::FIELD_METHOD_EXT]))
                ? $data[self::FIELD_METHOD_EXT]
                : null;
            if ($data[self::FIELD_METHOD] instanceof FHIRHTTPVerb) {
                $this->setMethod($data[self::FIELD_METHOD]);
            } elseif ($ext && is_scalar($data[self::FIELD_METHOD])) {
                $this->setMethod(new FHIRHTTPVerb([FHIRHTTPVerb::FIELD_VALUE => $data[self::FIELD_METHOD]] + $ext));
            } else {
                $this->setMethod(new FHIRHTTPVerb($data[self::FIELD_METHOD]));
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
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
        return "<BundleRequest{$xmlns}></BundleRequest>";
    }


    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Only perform the operation if the Etag value matches. For more information, see
     * the API section ["Managing Resource Contention"](http.html#concurrency).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getIfMatch()
    {
        return $this->ifMatch;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Only perform the operation if the Etag value matches. For more information, see
     * the API section ["Managing Resource Contention"](http.html#concurrency).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $ifMatch
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
     */
    public function setIfMatch($ifMatch = null)
    {
        if (null === $ifMatch) {
            $this->ifMatch = null;
            return $this;
        }
        if ($ifMatch instanceof FHIRString) {
            $this->ifMatch = $ifMatch;
            return $this;
        }
        $this->ifMatch = new FHIRString($ifMatch);
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Only perform the operation if the last updated date matches. See the API
     * documentation for ["Conditional Read"](http.html#cread).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant
     */
    public function getIfModifiedSince()
    {
        return $this->ifModifiedSince;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Only perform the operation if the last updated date matches. See the API
     * documentation for ["Conditional Read"](http.html#cread).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant $ifModifiedSince
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
     */
    public function setIfModifiedSince($ifModifiedSince = null)
    {
        if (null === $ifModifiedSince) {
            $this->ifModifiedSince = null;
            return $this;
        }
        if ($ifModifiedSince instanceof FHIRInstant) {
            $this->ifModifiedSince = $ifModifiedSince;
            return $this;
        }
        $this->ifModifiedSince = new FHIRInstant($ifModifiedSince);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Instruct the server not to perform the create if a specified resource already
     * exists. For further information, see the API documentation for ["Conditional
     * Create"](http.html#ccreate). This is just the query portion of the URL - what
     * follows the "?" (not including the "?").
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getIfNoneExist()
    {
        return $this->ifNoneExist;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Instruct the server not to perform the create if a specified resource already
     * exists. For further information, see the API documentation for ["Conditional
     * Create"](http.html#ccreate). This is just the query portion of the URL - what
     * follows the "?" (not including the "?").
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $ifNoneExist
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
     */
    public function setIfNoneExist($ifNoneExist = null)
    {
        if (null === $ifNoneExist) {
            $this->ifNoneExist = null;
            return $this;
        }
        if ($ifNoneExist instanceof FHIRString) {
            $this->ifNoneExist = $ifNoneExist;
            return $this;
        }
        $this->ifNoneExist = new FHIRString($ifNoneExist);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If the ETag values match, return a 304 Not modified status. See the API
     * documentation for ["Conditional Read"](http.html#cread).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getIfNoneMatch()
    {
        return $this->ifNoneMatch;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If the ETag values match, return a 304 Not modified status. See the API
     * documentation for ["Conditional Read"](http.html#cread).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $ifNoneMatch
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
     */
    public function setIfNoneMatch($ifNoneMatch = null)
    {
        if (null === $ifNoneMatch) {
            $this->ifNoneMatch = null;
            return $this;
        }
        if ($ifNoneMatch instanceof FHIRString) {
            $this->ifNoneMatch = $ifNoneMatch;
            return $this;
        }
        $this->ifNoneMatch = new FHIRString($ifNoneMatch);
        return $this;
    }

    /**
     * HTTP verbs (in the HTTP command line).
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The HTTP verb for this entry in either a update history, or a transaction/
     * transaction response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRHTTPVerb
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * HTTP verbs (in the HTTP command line).
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The HTTP verb for this entry in either a update history, or a transaction/
     * transaction response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRHTTPVerb $method
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
     */
    public function setMethod(FHIRHTTPVerb $method = null)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The URL for this entry, relative to the root (the address to which the request
     * is posted).
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The URL for this entry, relative to the root (the address to which the request
     * is posted).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri $url
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
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
                throw new \DomainException(sprintf('FHIRBundleRequest::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRBundleRequest::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRBundleRequest;
        } elseif (!is_object($type) || !($type instanceof FHIRBundleRequest)) {
            throw new \RuntimeException(sprintf(
                'FHIRBundleRequest::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest or null, %s seen.',
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
        if (isset($attributes->ifMatch)) {
            $type->setIfMatch((string)$attributes->ifMatch);
        }
        if (isset($children->ifMatch)) {
            $type->setIfMatch(FHIRString::xmlUnserialize($children->ifMatch));
        }
        if (isset($attributes->ifModifiedSince)) {
            $type->setIfModifiedSince((string)$attributes->ifModifiedSince);
        }
        if (isset($children->ifModifiedSince)) {
            $type->setIfModifiedSince(FHIRInstant::xmlUnserialize($children->ifModifiedSince));
        }
        if (isset($attributes->ifNoneExist)) {
            $type->setIfNoneExist((string)$attributes->ifNoneExist);
        }
        if (isset($children->ifNoneExist)) {
            $type->setIfNoneExist(FHIRString::xmlUnserialize($children->ifNoneExist));
        }
        if (isset($attributes->ifNoneMatch)) {
            $type->setIfNoneMatch((string)$attributes->ifNoneMatch);
        }
        if (isset($children->ifNoneMatch)) {
            $type->setIfNoneMatch(FHIRString::xmlUnserialize($children->ifNoneMatch));
        }
        if (isset($children->method)) {
            $type->setMethod(FHIRHTTPVerb::xmlUnserialize($children->method));
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
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getIfMatch())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IF_MATCH, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIfModifiedSince())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IF_MODIFIED_SINCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIfNoneExist())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IF_NONE_EXIST, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIfNoneMatch())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IF_NONE_MATCH, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getMethod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_METHOD, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getIfMatch())) {
            $a[self::FIELD_IF_MATCH] = $v->getValue();
            $a[self::FIELD_IF_MATCH_EXT] = $v;
        }
        if (null !== ($v = $this->getIfModifiedSince())) {
            $a[self::FIELD_IF_MODIFIED_SINCE] = $v->getValue();
            $a[self::FIELD_IF_MODIFIED_SINCE_EXT] = $v;
        }
        if (null !== ($v = $this->getIfNoneExist())) {
            $a[self::FIELD_IF_NONE_EXIST] = $v->getValue();
            $a[self::FIELD_IF_NONE_EXIST_EXT] = $v;
        }
        if (null !== ($v = $this->getIfNoneMatch())) {
            $a[self::FIELD_IF_NONE_MATCH] = $v->getValue();
            $a[self::FIELD_IF_NONE_MATCH_EXT] = $v;
        }
        if (null !== ($v = $this->getMethod())) {
            $a[self::FIELD_METHOD] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = $v->getValue();
            $a[self::FIELD_URL_EXT] = $v;
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