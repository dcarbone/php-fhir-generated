<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRHTTPVerb;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * A container for a collection of resources.
 *
 * Class FHIRBundleRequest
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle
 */
class FHIRBundleRequest extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Bundle.Request';

    /**
     * Only perform the operation if the Etag value matches. For more information, see the API section ["Managing Resource Contention"](http.html#concurrency).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $ifMatch = null;

    /**
     * Only perform the operation if the last updated date matches. See the API documentation for ["Conditional Read"](http.html#cread).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $ifModifiedSince = null;

    /**
     * Instruct the server not to perform the create if a specified resource already exists. For further information, see the API documentation for ["Conditional Create"](http.html#ccreate). This is just the query portion of the URL - what follows the "?" (not including the "?").
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $ifNoneExist = null;

    /**
     * If the ETag values match, return a 304 Not Modified status. See the API documentation for ["Conditional Read"](http.html#cread).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $ifNoneMatch = null;

    /**
     * In a transaction or batch, this is the HTTP action to be executed for this entry. In a history bundle, this indicates the HTTP action that occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHTTPVerb
     */
    public $method = null;

    /**
     * The URL for this entry, relative to the root (the address to which the request is posted).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * FHIRBundleRequest Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['ifMatch'])) {
                $this->setIfMatch($data['ifMatch']);
            }
            if (isset($data['ifModifiedSince'])) {
                $this->setIfModifiedSince($data['ifModifiedSince']);
            }
            if (isset($data['ifNoneExist'])) {
                $this->setIfNoneExist($data['ifNoneExist']);
            }
            if (isset($data['ifNoneMatch'])) {
                $this->setIfNoneMatch($data['ifNoneMatch']);
            }
            if (isset($data['method'])) {
                $this->setMethod($data['method']);
            }
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Only perform the operation if the Etag value matches. For more information, see the API section ["Managing Resource Contention"](http.html#concurrency).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setIfMatch($ifMatch)
    {
        if (null === $ifMatch) {
            return $this; 
        }
        if (is_scalar($ifMatch)) {
            $ifMatch = new FHIRString($ifMatch);
        }
        if (!($ifMatch instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundleRequest::setIfMatch - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($ifMatch)
            ));
        }
        $this->ifMatch = $ifMatch;
        return $this;
    }

    /**
     * Only perform the operation if the Etag value matches. For more information, see the API section ["Managing Resource Contention"](http.html#concurrency).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getIfMatch()
    {
        return $this->ifMatch;
    }


    /**
     * Only perform the operation if the last updated date matches. See the API documentation for ["Conditional Read"](http.html#cread).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setIfModifiedSince($ifModifiedSince)
    {
        if (null === $ifModifiedSince) {
            return $this; 
        }
        if (is_scalar($ifModifiedSince)) {
            $ifModifiedSince = new FHIRInstant($ifModifiedSince);
        }
        if (!($ifModifiedSince instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundleRequest::setIfModifiedSince - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($ifModifiedSince)
            ));
        }
        $this->ifModifiedSince = $ifModifiedSince;
        return $this;
    }

    /**
     * Only perform the operation if the last updated date matches. See the API documentation for ["Conditional Read"](http.html#cread).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getIfModifiedSince()
    {
        return $this->ifModifiedSince;
    }


    /**
     * Instruct the server not to perform the create if a specified resource already exists. For further information, see the API documentation for ["Conditional Create"](http.html#ccreate). This is just the query portion of the URL - what follows the "?" (not including the "?").
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setIfNoneExist($ifNoneExist)
    {
        if (null === $ifNoneExist) {
            return $this; 
        }
        if (is_scalar($ifNoneExist)) {
            $ifNoneExist = new FHIRString($ifNoneExist);
        }
        if (!($ifNoneExist instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundleRequest::setIfNoneExist - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($ifNoneExist)
            ));
        }
        $this->ifNoneExist = $ifNoneExist;
        return $this;
    }

    /**
     * Instruct the server not to perform the create if a specified resource already exists. For further information, see the API documentation for ["Conditional Create"](http.html#ccreate). This is just the query portion of the URL - what follows the "?" (not including the "?").
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getIfNoneExist()
    {
        return $this->ifNoneExist;
    }


    /**
     * If the ETag values match, return a 304 Not Modified status. See the API documentation for ["Conditional Read"](http.html#cread).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setIfNoneMatch($ifNoneMatch)
    {
        if (null === $ifNoneMatch) {
            return $this; 
        }
        if (is_scalar($ifNoneMatch)) {
            $ifNoneMatch = new FHIRString($ifNoneMatch);
        }
        if (!($ifNoneMatch instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundleRequest::setIfNoneMatch - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($ifNoneMatch)
            ));
        }
        $this->ifNoneMatch = $ifNoneMatch;
        return $this;
    }

    /**
     * If the ETag values match, return a 304 Not Modified status. See the API documentation for ["Conditional Read"](http.html#cread).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getIfNoneMatch()
    {
        return $this->ifNoneMatch;
    }


    /**
     * In a transaction or batch, this is the HTTP action to be executed for this entry. In a history bundle, this indicates the HTTP action that occurred.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRHTTPVerb
     * @return $this
     */
    public function setMethod($method)
    {
        if (null === $method) {
            return $this; 
        }
        if (is_scalar($method)) {
            $method = new FHIRHTTPVerb($method);
        }
        if (!($method instanceof FHIRHTTPVerb)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundleRequest::setMethod - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRHTTPVerb or appropriate scalar value, %s seen.',
                gettype($method)
            ));
        }
        $this->method = $method;
        return $this;
    }

    /**
     * In a transaction or batch, this is the HTTP action to be executed for this entry. In a history bundle, this indicates the HTTP action that occurred.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRHTTPVerb
     */
    public function getMethod()
    {
        return $this->method;
    }


    /**
     * The URL for this entry, relative to the root (the address to which the request is posted).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setUrl($url)
    {
        if (null === $url) {
            return $this; 
        }
        if (is_scalar($url)) {
            $url = new FHIRUri($url);
        }
        if (!($url instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundleRequest::setUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($url)
            ));
        }
        $this->url = $url;
        return $this;
    }

    /**
     * The URL for this entry, relative to the root (the address to which the request is posted).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
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
        if (null !== ($v = $this->getIfMatch())) {
            $a['ifMatch'] = $v;
        }
        if (null !== ($v = $this->getIfModifiedSince())) {
            $a['ifModifiedSince'] = $v;
        }
        if (null !== ($v = $this->getIfNoneExist())) {
            $a['ifNoneExist'] = $v;
        }
        if (null !== ($v = $this->getIfNoneMatch())) {
            $a['ifNoneMatch'] = $v;
        }
        if (null !== ($v = $this->getMethod())) {
            $a['method'] = $v;
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
            $sxe = new \SimpleXMLElement('<BundleRequest xmlns="http://hl7.org/fhir"></BundleRequest>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}