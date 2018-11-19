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
     * The Absolute URL for the resource.  The fullUrl SHALL not disagree with the id in the resource. The fullUrl is a version independent reference to the resource. The fullUrl element SHALL have a value except that: 
* fullUrl can be empty on a POST (although it does not need to when specifying a temporary id for reference in the bundle)
* Results from operations might involve resources that are not identified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $fullUrl = null;

    /**
     * A series of links that provide context to this entry.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[]
     */
    private $link = [];

    /**
     * Additional information about how this entry should be processed as part of a transaction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
     */
    private $request = null;

    /**
     * The Resources for the entry.
     * @var \PHPFHIRGenerated\FHIRResourceContainer
     */
    private $resource = null;

    /**
     * Additional information about how this entry should be processed as part of a transaction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse
     */
    private $response = null;

    /**
     * Information about the search process that lead to the creation of this entry.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch
     */
    private $search = null;

    /**
     * FHIRBundleEntry Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['fullUrl'])) {
                $value = $data['fullUrl'];
                if (is_array($value)) {
                    $value = new FHIRUri($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUri($value);
                }
                if (!($value instanceof FHIRUri)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry::__construct - Property \"fullUrl\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($value));
                }
                $this->setFullUrl($value);
            }
            if (isset($data['link'])) {
                $value = $data['link'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRBundleLink($v);
                        } 
                        if (!($v instanceof FHIRBundleLink)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry::__construct - Collection field \"link\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink or data to construct type, saw ".gettype($v));
                        }
                        $this->addLink($v);
                    }
                }
            }
            if (isset($data['request'])) {
                $value = $data['request'];
                if (is_array($value)) {
                    $value = new FHIRBundleRequest($value);
                } 
                if (!($value instanceof FHIRBundleRequest)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry::__construct - Property \"request\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest or data to construct type, saw ".gettype($value));
                }
                $this->setRequest($value);
            }
            if (isset($data['resource'])) {
                $value = $data['resource'];
                if (is_array($value)) {
                    $value = new FHIRResourceContainer($value);
                } 
                if (!($value instanceof FHIRResourceContainer)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry::__construct - Property \"resource\" must either be instance of \PHPFHIRGenerated\FHIRResourceContainer or data to construct type, saw ".gettype($value));
                }
                $this->setResource($value);
            }
            if (isset($data['response'])) {
                $value = $data['response'];
                if (is_array($value)) {
                    $value = new FHIRBundleResponse($value);
                } 
                if (!($value instanceof FHIRBundleResponse)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry::__construct - Property \"response\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse or data to construct type, saw ".gettype($value));
                }
                $this->setResponse($value);
            }
            if (isset($data['search'])) {
                $value = $data['search'];
                if (is_array($value)) {
                    $value = new FHIRBundleSearch($value);
                } 
                if (!($value instanceof FHIRBundleSearch)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry::__construct - Property \"search\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch or data to construct type, saw ".gettype($value));
                }
                $this->setSearch($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The Absolute URL for the resource.  The fullUrl SHALL not disagree with the id in the resource. The fullUrl is a version independent reference to the resource. The fullUrl element SHALL have a value except that: 
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
     * The Absolute URL for the resource.  The fullUrl SHALL not disagree with the id in the resource. The fullUrl is a version independent reference to the resource. The fullUrl element SHALL have a value except that: 
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
    public function addLink(FHIRBundleLink $link = null)
    {
        if (null === $link) {
            return $this; 
        }
        $this->link[] = $link;
        return $this;
    }

    /**
     * A series of links that provide context to this entry.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Additional information about how this entry should be processed as part of a transaction.
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
     * Additional information about how this entry should be processed as part of a transaction.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * The Resources for the entry.
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
     * The Resources for the entry.
,
     * @return null|mixed
     */
    public function getResource()
    {
        return isset($this->resource) ? $this->resource->jsonSerialize() : null;
    }

    /**
     * Additional information about how this entry should be processed as part of a transaction.
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
     * Additional information about how this entry should be processed as part of a transaction.
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
        if (0 < count($values = $this->getLink())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['link'] = $vs;
            }
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
        if (null !== ($v = $this->getFullUrl())) {
            $v->xmlSerialize(true, $sxe->addChild('fullUrl'));
        }
        if (0 < count($values = $this->getLink())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('link'));
                }
            }
        }
        if (null !== ($v = $this->getRequest())) {
            $v->xmlSerialize(true, $sxe->addChild('request'));
        }
        if (null !== ($v = $this->getResource())) {
            $v->xmlSerialize(true, $sxe->addChild('resource'));
        }
        if (null !== ($v = $this->getResponse())) {
            $v->xmlSerialize(true, $sxe->addChild('response'));
        }
        if (null !== ($v = $this->getSearch())) {
            $v->xmlSerialize(true, $sxe->addChild('search'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}