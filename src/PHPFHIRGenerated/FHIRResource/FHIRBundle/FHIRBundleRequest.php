<?php namespace PHPFHIRGenerated\FHIRResource\FHIRBundle;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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

/**
 * A container for a collection of resources.
 */
class FHIRBundleRequest extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The HTTP verb for this entry in either a change history, or a transaction/ transaction response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHTTPVerb
     */
    public $method = null;

    /**
     * The URL for this entry, relative to the root (the address to which the request is posted).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * If the ETag values match, return a 304 Not Modified status. See the API documentation for ["Conditional Read"](http.html#cread).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $ifNoneMatch = null;

    /**
     * Only perform the operation if the last updated date matches. See the API documentation for ["Conditional Read"](http.html#cread).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $ifModifiedSince = null;

    /**
     * Only perform the operation if the Etag value matches. For more information, see the API section ["Managing Resource Contention"](http.html#concurrency).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $ifMatch = null;

    /**
     * Instruct the server not to perform the create if a specified resource already exists. For further information, see the API documentation for ["Conditional Create"](http.html#ccreate). This is just the query portion of the URL - what follows the "?" (not including the "?").
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $ifNoneExist = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Bundle.Request';

    /**
     * The HTTP verb for this entry in either a change history, or a transaction/ transaction response.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHTTPVerb
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * The HTTP verb for this entry in either a change history, or a transaction/ transaction response.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHTTPVerb $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * The URL for this entry, relative to the root (the address to which the request is posted).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * The URL for this entry, relative to the root (the address to which the request is posted).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * If the ETag values match, return a 304 Not Modified status. See the API documentation for ["Conditional Read"](http.html#cread).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getIfNoneMatch()
    {
        return $this->ifNoneMatch;
    }

    /**
     * If the ETag values match, return a 304 Not Modified status. See the API documentation for ["Conditional Read"](http.html#cread).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $ifNoneMatch
     * @return $this
     */
    public function setIfNoneMatch($ifNoneMatch)
    {
        $this->ifNoneMatch = $ifNoneMatch;
        return $this;
    }

    /**
     * Only perform the operation if the last updated date matches. See the API documentation for ["Conditional Read"](http.html#cread).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getIfModifiedSince()
    {
        return $this->ifModifiedSince;
    }

    /**
     * Only perform the operation if the last updated date matches. See the API documentation for ["Conditional Read"](http.html#cread).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $ifModifiedSince
     * @return $this
     */
    public function setIfModifiedSince($ifModifiedSince)
    {
        $this->ifModifiedSince = $ifModifiedSince;
        return $this;
    }

    /**
     * Only perform the operation if the Etag value matches. For more information, see the API section ["Managing Resource Contention"](http.html#concurrency).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getIfMatch()
    {
        return $this->ifMatch;
    }

    /**
     * Only perform the operation if the Etag value matches. For more information, see the API section ["Managing Resource Contention"](http.html#concurrency).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $ifMatch
     * @return $this
     */
    public function setIfMatch($ifMatch)
    {
        $this->ifMatch = $ifMatch;
        return $this;
    }

    /**
     * Instruct the server not to perform the create if a specified resource already exists. For further information, see the API documentation for ["Conditional Create"](http.html#ccreate). This is just the query portion of the URL - what follows the "?" (not including the "?").
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getIfNoneExist()
    {
        return $this->ifNoneExist;
    }

    /**
     * Instruct the server not to perform the create if a specified resource already exists. For further information, see the API documentation for ["Conditional Create"](http.html#ccreate). This is just the query portion of the URL - what follows the "?" (not including the "?").
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $ifNoneExist
     * @return $this
     */
    public function setIfNoneExist($ifNoneExist)
    {
        $this->ifNoneExist = $ifNoneExist;
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
        if (null !== $this->method) $json['method'] = $this->method;
        if (null !== $this->url) $json['url'] = $this->url;
        if (null !== $this->ifNoneMatch) $json['ifNoneMatch'] = $this->ifNoneMatch;
        if (null !== $this->ifModifiedSince) $json['ifModifiedSince'] = $this->ifModifiedSince;
        if (null !== $this->ifMatch) $json['ifMatch'] = $this->ifMatch;
        if (null !== $this->ifNoneExist) $json['ifNoneExist'] = $this->ifNoneExist;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<BundleRequest xmlns="http://hl7.org/fhir"></BundleRequest>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->method) $this->method->xmlSerialize(true, $sxe->addChild('method'));
        if (null !== $this->url) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (null !== $this->ifNoneMatch) $this->ifNoneMatch->xmlSerialize(true, $sxe->addChild('ifNoneMatch'));
        if (null !== $this->ifModifiedSince) $this->ifModifiedSince->xmlSerialize(true, $sxe->addChild('ifModifiedSince'));
        if (null !== $this->ifMatch) $this->ifMatch->xmlSerialize(true, $sxe->addChild('ifMatch'));
        if (null !== $this->ifNoneExist) $this->ifNoneExist->xmlSerialize(true, $sxe->addChild('ifNoneExist'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}