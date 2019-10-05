<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 5th, 2019 12:58+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeMap;

/**
 * A container for a collection of resources.
 *
 * Class FHIRBundleEntry
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle
 */
class FHIRBundleEntry extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_ENTRY;

    const FIELD_FULL_URL = 'fullUrl';
    const FIELD_FULL_URL_EXT = '_fullUrl';
    const FIELD_LINK = 'link';
    const FIELD_REQUEST = 'request';
    const FIELD_RESOURCE = 'resource';
    const FIELD_RESPONSE = 'response';
    const FIELD_SEARCH = 'search';

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The Absolute URL for the resource. The fullUrl SHALL NOT disagree with the id in
     * the resource - i.e. if the fullUrl is not a urn:uuid, the URL shall be
     * version-independent URL consistent with the Resource.id. The fullUrl is a
     * version independent reference to the resource. The fullUrl element SHALL have a
     * value except that: * fullUrl can be empty on a POST (although it does not need
     * to when specifying a temporary id for reference in the bundle) * Results from
     * operations might involve resources that are not identified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    private $fullUrl = null;

    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this entry.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[]
     */
    private $link = [];

    /**
     * A container for a collection of resources.
     *
     * Additional information about how this entry should be processed as part of a
     * transaction or batch. For history, it shows how the entry was processed to
     * create the version contained in the entry.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
     */
    private $request = null;

    /**
     * (choose any one of the elements, but only one)
     *
     * The Resource for the entry. The purpose/meaning of the resource is determined by
     * the Bundle.type.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface
     */
    private $resource = null;

    /**
     * A container for a collection of resources.
     *
     * Indicates the results of processing the corresponding 'request' entry in the
     * batch or transaction being responded to or what the results of an operation
     * where when returning history.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse
     */
    private $response = null;

    /**
     * A container for a collection of resources.
     *
     * Information about the search process that lead to the creation of this entry.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch
     */
    private $search = null;

    /**
     * FHIRBundleEntry Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundleEntry::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_FULL_URL])) {
            $ext = (isset($data[self::FIELD_FULL_URL_EXT]) && is_array($data[self::FIELD_FULL_URL_EXT]))
                ? $data[self::FIELD_FULL_URL_EXT]
                : null;
            if ($data[self::FIELD_FULL_URL] instanceof FHIRUri) {
                $this->setFullUrl($data[self::FIELD_FULL_URL]);
            } elseif ($ext && is_scalar($data[self::FIELD_FULL_URL])) {
                $this->setFullUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_FULL_URL]] + $ext));
            } else {
                $this->setFullUrl(new FHIRUri($data[self::FIELD_FULL_URL]));
            }
        }
        if (isset($data[self::FIELD_LINK])) {
            if (is_array($data[self::FIELD_LINK])) {
                foreach($data[self::FIELD_LINK] as $v) {
                    if ($v instanceof FHIRBundleLink) {
                        $this->addLink($v);
                    } else {
                        $this->addLink(new FHIRBundleLink($v));
                    }
                }
            } else if ($data[self::FIELD_LINK] instanceof FHIRBundleLink) {
                $this->addLink($data[self::FIELD_LINK]);
            } else {
                $this->addLink(new FHIRBundleLink($data[self::FIELD_LINK]));
            }
        }
        if (isset($data[self::FIELD_REQUEST])) {
            if ($data[self::FIELD_REQUEST] instanceof FHIRBundleRequest) {
                $this->setRequest($data[self::FIELD_REQUEST]);
            } else {
                $this->setRequest(new FHIRBundleRequest($data[self::FIELD_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_RESOURCE])) {
            if (is_object($data[self::FIELD_RESOURCE])) {
                if ($data[self::FIELD_RESOURCE] instanceof PHPFHIRContainedTypeInterface) {
                    $this->setResource($data[self::FIELD_RESOURCE]);
                } else {
                    throw new \InvalidArgumentException(sprintf(
                        'FHIRBundleEntry - Field "resource" must be an object implementing PHPFHIRContainedTypeInterface, object of type %s seen',
                        get_class($data[self::FIELD_RESOURCE])
                    ));
                }
            } else if (is_array($data[self::FIELD_RESOURCE])) {
                $typeClass = PHPFHIRTypeMap::getContainedTypeFromArray($data[self::FIELD_RESOURCE]);
                if (null === $typeClass) {
                    throw new \InvalidArgumentException(sprintf(
                        'FHIRBundleEntry - Unable to determine class for field "resource" from value: %s',
                        json_encode($data[self::FIELD_RESOURCE])
                    ));
                }
                $this->setResource(new $typeClass($data[self::FIELD_RESOURCE]));
            } else {
                throw new \InvalidArgumentException(sprintf(
                    'FHIRBundleEntry - Unable to determine class for field "resource" from value: %s',
                    json_encode($data[self::FIELD_RESOURCE])
                ));
            }
        }
        if (isset($data[self::FIELD_RESPONSE])) {
            if ($data[self::FIELD_RESPONSE] instanceof FHIRBundleResponse) {
                $this->setResponse($data[self::FIELD_RESPONSE]);
            } else {
                $this->setResponse(new FHIRBundleResponse($data[self::FIELD_RESPONSE]));
            }
        }
        if (isset($data[self::FIELD_SEARCH])) {
            if ($data[self::FIELD_SEARCH] instanceof FHIRBundleSearch) {
                $this->setSearch($data[self::FIELD_SEARCH]);
            } else {
                $this->setSearch(new FHIRBundleSearch($data[self::FIELD_SEARCH]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The Absolute URL for the resource. The fullUrl SHALL NOT disagree with the id in
     * the resource - i.e. if the fullUrl is not a urn:uuid, the URL shall be
     * version-independent URL consistent with the Resource.id. The fullUrl is a
     * version independent reference to the resource. The fullUrl element SHALL have a
     * value except that: * fullUrl can be empty on a POST (although it does not need
     * to when specifying a temporary id for reference in the bundle) * Results from
     * operations might involve resources that are not identified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    public function getFullUrl()
    {
        return $this->fullUrl;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The Absolute URL for the resource. The fullUrl SHALL NOT disagree with the id in
     * the resource - i.e. if the fullUrl is not a urn:uuid, the URL shall be
     * version-independent URL consistent with the Resource.id. The fullUrl is a
     * version independent reference to the resource. The fullUrl element SHALL have a
     * value except that: * fullUrl can be empty on a POST (although it does not need
     * to when specifying a temporary id for reference in the bundle) * Results from
     * operations might involve resources that are not identified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $fullUrl
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry
     */
    public function setFullUrl($fullUrl = null)
    {
        if (null === $fullUrl) {
            $this->fullUrl = null;
            return $this;
        }
        if ($fullUrl instanceof FHIRUri) {
            $this->fullUrl = $fullUrl;
            return $this;
        }
        $this->fullUrl = new FHIRUri($fullUrl);
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this entry.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this entry.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink $link
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry
     */
    public function addLink(FHIRBundleLink $link = null)
    {
        $this->link[] = $link;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this entry.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[] $link
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry
     */
    public function setLink(array $link = [])
    {
        $this->link = [];
        if ([] === $link) {
            return $this;
        }
        foreach($link as $v) {
            if ($v instanceof FHIRBundleLink) {
                $this->addLink($v);
            } else {
                $this->addLink(new FHIRBundleLink($v));
            }
        }
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * Additional information about how this entry should be processed as part of a
     * transaction or batch. For history, it shows how the entry was processed to
     * create the version contained in the entry.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * A container for a collection of resources.
     *
     * Additional information about how this entry should be processed as part of a
     * transaction or batch. For history, it shows how the entry was processed to
     * create the version contained in the entry.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest $request
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry
     */
    public function setRequest(FHIRBundleRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * (choose any one of the elements, but only one)
     *
     * The Resource for the entry. The purpose/meaning of the resource is determined by
     * the Bundle.type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * (choose any one of the elements, but only one)
     *
     * The Resource for the entry. The purpose/meaning of the resource is determined by
     * the Bundle.type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface $resource
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry
     */
    public function setResource(PHPFHIRContainedTypeInterface $resource = null)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * Indicates the results of processing the corresponding 'request' entry in the
     * batch or transaction being responded to or what the results of an operation
     * where when returning history.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * A container for a collection of resources.
     *
     * Indicates the results of processing the corresponding 'request' entry in the
     * batch or transaction being responded to or what the results of an operation
     * where when returning history.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse $response
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry
     */
    public function setResponse(FHIRBundleResponse $response = null)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * Information about the search process that lead to the creation of this entry.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * A container for a collection of resources.
     *
     * Information about the search process that lead to the creation of this entry.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch $search
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry
     */
    public function setSearch(FHIRBundleSearch $search = null)
    {
        $this->search = $search;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry $type
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRBundleEntry::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRBundleEntry::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRBundleEntry);
        } elseif (!is_object($type) || !($type instanceof FHIRBundleEntry)) {
            throw new \RuntimeException(sprintf(
                'FHIRBundleEntry::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->fullUrl)) {
            $type->setFullUrl((string)$attributes->fullUrl);
        }
        if (isset($children->fullUrl)) {
            $type->setFullUrl(FHIRUri::xmlUnserialize($children->fullUrl));
        }
        if (isset($children->link)) {
            foreach($children->link as $child) {
                $type->addLink(FHIRBundleLink::xmlUnserialize($child));
            }
        }
        if (isset($children->request)) {
            $type->setRequest(FHIRBundleRequest::xmlUnserialize($children->request));
        }
        if (isset($children->resource)) {
            $babes = $children->resource->children();
            switch($cnt = count($babes)) {
                case 0:
                    break;
                case 1:
                    $type->setResource(PHPFHIRTypeMap::getContainedTypeFromXML($babes[0]));
                    break;
                default:
                    throw new \RuntimeException(sprintf(
                        'Expected to see a single entry for "resource", but saw %d',
                        $cnt
                    ));
            }
        }
        if (isset($children->response)) {
            $type->setResponse(FHIRBundleResponse::xmlUnserialize($children->response));
        }
        if (isset($children->search)) {
            $type->setSearch(FHIRBundleSearch::xmlUnserialize($children->search));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<BundleEntry xmlns="http://hl7.org/fhir"></BundleEntry>');
        }
    parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getFullUrl())) {
            $sxe->addAttribute(self::FIELD_FULL_URL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_FULL_URL));
            }
        }

        if ([] !== ($vs = $this->getLink())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LINK));
            }
        }

        if (null !== ($v = $this->getRequest())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST));
        }

        if (null !== ($v = $this->getResource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESOURCE));
        }

        if (null !== ($v = $this->getResponse())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESPONSE));
        }

        if (null !== ($v = $this->getSearch())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEARCH));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getFullUrl())) {
            $a[self::FIELD_FULL_URL] = (string)$v;
            $a[self::FIELD_FULL_URL_EXT] = $v;
        }
        if ([] !== ($vs = $this->getLink())) {
            $a[self::FIELD_LINK] = $vs;
        }
        if (null !== ($v = $this->getRequest())) {
            $a[self::FIELD_REQUEST] = $v;
        }
        if (null !== ($v = $this->getResource())) {
            $a[self::FIELD_RESOURCE] = $v;
        }
        if (null !== ($v = $this->getResponse())) {
            $a[self::FIELD_RESPONSE] = $v;
        }
        if (null !== ($v = $this->getSearch())) {
            $a[self::FIELD_SEARCH] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}