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

use PHPFHIRGenerated;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResourceContainer;

/**
 * A container for a collection of resources.
 *
 * Class FHIRBundleEntry
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle
 */
class FHIRBundleEntry extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Bundle.Entry';

    /**
     * The Absolute URL for the resource.  The fullUrl SHALL NOT disagree with the id in the resource - i.e. if the fullUrl is not a urn:uuid, the URL shall be version-independent URL consistent with the Resource.id. The fullUrl is a version independent reference to the resource. The fullUrl element SHALL have a value except that: 
* fullUrl can be empty on a POST (although it does not need to when specifying a temporary id for reference in the bundle)
* Results from operations might involve resources that are not identified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $fullUrl = null;

    /**
     * A series of links that provide context to this entry.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink
     */
    public $link = null;

    /**
     * Additional information about how this entry should be processed as part of a transaction or batch.  For history, it shows how the entry was processed to create the version contained in the entry.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
     */
    public $request = null;

    /**
     * The Resource for the entry. The purpose/meaning of the resource is determined by the Bundle.type.
     * @var \PHPFHIRGenerated\FHIRResourceContainer
     */
    public $resource = null;

    /**
     * Indicates the results of processing the corresponding 'request' entry in the batch or transaction being responded to or what the results of an operation where when returning history.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse
     */
    public $response = null;

    /**
     * Information about the search process that lead to the creation of this entry.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch
     */
    public $search = null;

    /**
     * FHIRBundleEntry Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['fullUrl'])) {
                $this->setFullUrl($data['fullUrl']);
            }
            if (isset($data['link'])) {
                $this->setLink($data['link']);
            }
            if (isset($data['request'])) {
                $this->setRequest($data['request']);
            }
            if (isset($data['resource'])) {
                $this->setResource($data['resource']);
            }
            if (isset($data['response'])) {
                $this->setResponse($data['response']);
            }
            if (isset($data['search'])) {
                $this->setSearch($data['search']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The Absolute URL for the resource.  The fullUrl SHALL NOT disagree with the id in the resource - i.e. if the fullUrl is not a urn:uuid, the URL shall be version-independent URL consistent with the Resource.id. The fullUrl is a version independent reference to the resource. The fullUrl element SHALL have a value except that: 
* fullUrl can be empty on a POST (although it does not need to when specifying a temporary id for reference in the bundle)
* Results from operations might involve resources that are not identified.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setFullUrl($fullUrl)
    {
        if (null === $fullUrl) {
            return $this; 
        }
        if (is_scalar($fullUrl)) {
            $fullUrl = new FHIRUri($fullUrl);
        }
        if (!($fullUrl instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundleEntry::setFullUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($fullUrl)
            ));
        }
        $this->fullUrl = $fullUrl;
        return $this;
    }

    /**
     * The Absolute URL for the resource.  The fullUrl SHALL NOT disagree with the id in the resource - i.e. if the fullUrl is not a urn:uuid, the URL shall be version-independent URL consistent with the Resource.id. The fullUrl is a version independent reference to the resource. The fullUrl element SHALL have a value except that: 
* fullUrl can be empty on a POST (although it does not need to when specifying a temporary id for reference in the bundle)
* Results from operations might involve resources that are not identified.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getFullUrl()
    {
        return $this->fullUrl;
    }


    /**
     * A series of links that provide context to this entry.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink
     * @return $this
     */
    public function setLink(FHIRBundleLink $link = null)
    {
        if (null === $link) {
            return $this; 
        }
        $this->link = $link;
        return $this;
    }

    /**
     * A series of links that provide context to this entry.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink
     */
    public function getLink()
    {
        return $this->link;
    }


    /**
     * Additional information about how this entry should be processed as part of a transaction or batch.  For history, it shows how the entry was processed to create the version contained in the entry.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
     * @return $this
     */
    public function setRequest(FHIRBundleRequest $request = null)
    {
        if (null === $request) {
            return $this; 
        }
        $this->request = $request;
        return $this;
    }

    /**
     * Additional information about how this entry should be processed as part of a transaction or batch.  For history, it shows how the entry was processed to create the version contained in the entry.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
     */
    public function getRequest()
    {
        return $this->request;
    }


    /**
     * The Resource for the entry. The purpose/meaning of the resource is determined by the Bundle.type.
     * @param null|mixed An instance of a FHIRResource or FHIRResourceContainer
     * @return $this
     */
    public function setResource($resource = null)
    {
        if (null === $resource) {
            return $this; 
        }
        if ($resource instanceof FHIRResource){
            $resource = new FHIRResourceContainer($resource);
        }
        if (!($resource instanceof FHIRResourceContainer)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundleEntry::setResource - Argument expected to be instanceof FHIRResource, FHIRResourceContainer, or null, %s seen',
                gettype($resource)
            ));
        }
        $this->resource = $resource;
        return $this;
    }

    /**
     * The Resource for the entry. The purpose/meaning of the resource is determined by the Bundle.type.
,
     * @return null|mixed
     */
    public function getResource()
    {
        return isset($this->resource) ? $this->resource->jsonSerialize() : null;
    }


    /**
     * Indicates the results of processing the corresponding 'request' entry in the batch or transaction being responded to or what the results of an operation where when returning history.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse
     * @return $this
     */
    public function setResponse(FHIRBundleResponse $response = null)
    {
        if (null === $response) {
            return $this; 
        }
        $this->response = $response;
        return $this;
    }

    /**
     * Indicates the results of processing the corresponding 'request' entry in the batch or transaction being responded to or what the results of an operation where when returning history.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse
     */
    public function getResponse()
    {
        return $this->response;
    }


    /**
     * Information about the search process that lead to the creation of this entry.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch
     * @return $this
     */
    public function setSearch(FHIRBundleSearch $search = null)
    {
        if (null === $search) {
            return $this; 
        }
        $this->search = $search;
        return $this;
    }

    /**
     * Information about the search process that lead to the creation of this entry.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch
     */
    public function getSearch()
    {
        return $this->search;
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
        if (null !== ($v = $this->getFullUrl())) {
            $a['fullUrl'] = $v;
        }
        if (null !== ($v = $this->getLink())) {
            $a['link'] = $v;
        }
        if (null !== ($v = $this->getRequest())) {
            $a['request'] = $v;
        }
        if (null !== ($v = $this->getResource())) {
            $a['resource'] = $v;
        }
        if (null !== ($v = $this->getResponse())) {
            $a['response'] = $v;
        }
        if (null !== ($v = $this->getSearch())) {
            $a['search'] = $v;
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
            $sxe = new \SimpleXMLElement('<BundleEntry xmlns="http://hl7.org/fhir"></BundleEntry>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}