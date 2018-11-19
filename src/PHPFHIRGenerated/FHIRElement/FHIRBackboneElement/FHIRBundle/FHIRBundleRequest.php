<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
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
    private $ifMatch = null;

    /**
     * Only perform the operation if the last updated date matches. See the API documentation for ["Conditional Read"](http.html#cread).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    private $ifModifiedSince = null;

    /**
     * Instruct the server not to perform the create if a specified resource already exists. For further information, see the API documentation for ["Conditional Create"](http.html#ccreate). This is just the query portion of the URL - what follows the "?" (not including the "?").
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $ifNoneExist = null;

    /**
     * If the ETag values match, return a 304 Not Modified status. See the API documentation for ["Conditional Read"](http.html#cread).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $ifNoneMatch = null;

    /**
     * The HTTP verb for this entry in either a change history, or a transaction/ transaction response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHTTPVerb
     */
    private $method = null;

    /**
     * The URL for this entry, relative to the root (the address to which the request is posted).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $url = null;

    /**
     * FHIRBundleRequest Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['ifMatch'])) {
                $value = $data['ifMatch'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest::__construct - Property \"ifMatch\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setIfMatch($value);
            }
            if (isset($data['ifModifiedSince'])) {
                $value = $data['ifModifiedSince'];
                if (is_array($value)) {
                    $value = new FHIRInstant($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInstant($value);
                }
                if (!($value instanceof FHIRInstant)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest::__construct - Property \"ifModifiedSince\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or data to construct type, saw ".gettype($value));
                }
                $this->setIfModifiedSince($value);
            }
            if (isset($data['ifNoneExist'])) {
                $value = $data['ifNoneExist'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest::__construct - Property \"ifNoneExist\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setIfNoneExist($value);
            }
            if (isset($data['ifNoneMatch'])) {
                $value = $data['ifNoneMatch'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest::__construct - Property \"ifNoneMatch\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setIfNoneMatch($value);
            }
            if (isset($data['method'])) {
                $value = $data['method'];
                if (is_array($value)) {
                    $value = new FHIRHTTPVerb($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRHTTPVerb($value);
                }
                if (!($value instanceof FHIRHTTPVerb)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest::__construct - Property \"method\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRHTTPVerb or data to construct type, saw ".gettype($value));
                }
                $this->setMethod($value);
            }
            if (isset($data['url'])) {
                $value = $data['url'];
                if (is_array($value)) {
                    $value = new FHIRUri($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUri($value);
                }
                if (!($value instanceof FHIRUri)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest::__construct - Property \"url\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($value));
                }
                $this->setUrl($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
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
     * The HTTP verb for this entry in either a change history, or a transaction/ transaction response.
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
     * The HTTP verb for this entry in either a change history, or a transaction/ transaction response.
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
        if (null !== ($v = $this->getIfMatch())) {
            $v->xmlSerialize(true, $sxe->addChild('ifMatch'));
        }
        if (null !== ($v = $this->getIfModifiedSince())) {
            $v->xmlSerialize(true, $sxe->addChild('ifModifiedSince'));
        }
        if (null !== ($v = $this->getIfNoneExist())) {
            $v->xmlSerialize(true, $sxe->addChild('ifNoneExist'));
        }
        if (null !== ($v = $this->getIfNoneMatch())) {
            $v->xmlSerialize(true, $sxe->addChild('ifNoneMatch'));
        }
        if (null !== ($v = $this->getMethod())) {
            $v->xmlSerialize(true, $sxe->addChild('method'));
        }
        if (null !== ($v = $this->getUrl())) {
            $v->xmlSerialize(true, $sxe->addChild('url'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}