<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeMap;

/**
 * A container for a collection of resources.
 *
 * Class FHIRBundleEntry
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle
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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Absolute URL for the resource. The fullUrl SHALL not disagree with the id in
     * the resource. The fullUrl is a version independent reference to the resource.
     * The fullUrl element SHALL have a value except that: * fullUrl can be empty on a
     * POST (although it does not need to when specifying a temporary id for reference
     * in the bundle) * Results from operations might involve resources that are not
     * identified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $fullUrl = null;

    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this entry.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[]
     */
    protected $link = [];

    /**
     * A container for a collection of resources.
     *
     * Additional information about how this entry should be processed as part of a
     * transaction.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
     */
    protected $request = null;

    /**
     * The Resources for the entry.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface
     */
    protected $resource = null;

    /**
     * A container for a collection of resources.
     *
     * Additional information about how this entry should be processed as part of a
     * transaction.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse
     */
    protected $response = null;

    /**
     * A container for a collection of resources.
     *
     * Information about the search process that lead to the creation of this entry.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch
     */
    protected $search = null;

    /**
     * Validation map for fields in type Bundle.Entry
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_FULL_URL]) || isset($data[self::FIELD_FULL_URL_EXT])) {
            if (isset($data[self::FIELD_FULL_URL])) {
                $value = $data[self::FIELD_FULL_URL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FULL_URL_EXT]) && is_array($data[self::FIELD_FULL_URL_EXT])) {
                $ext = $data[self::FIELD_FULL_URL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setFullUrl($value);
                } else if (is_array($value)) {
                    $this->setFullUrl(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setFullUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFullUrl(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_LINK])) {
            if (is_array($data[self::FIELD_LINK])) {
                foreach($data[self::FIELD_LINK] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        return "<BundleEntry{$xmlns}></BundleEntry>";
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Absolute URL for the resource. The fullUrl SHALL not disagree with the id in
     * the resource. The fullUrl is a version independent reference to the resource.
     * The fullUrl element SHALL have a value except that: * fullUrl can be empty on a
     * POST (although it does not need to when specifying a temporary id for reference
     * in the bundle) * Results from operations might involve resources that are not
     * identified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getFullUrl()
    {
        return $this->fullUrl;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Absolute URL for the resource. The fullUrl SHALL not disagree with the id in
     * the resource. The fullUrl is a version independent reference to the resource.
     * The fullUrl element SHALL have a value except that: * fullUrl can be empty on a
     * POST (although it does not need to when specifying a temporary id for reference
     * in the bundle) * Results from operations might involve resources that are not
     * identified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $fullUrl
     * @return static
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink $link
     * @return static
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[] $link
     * @return static
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
     * transaction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * A container for a collection of resources.
     *
     * Additional information about how this entry should be processed as part of a
     * transaction.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest $request
     * @return static
     */
    public function setRequest(FHIRBundleRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * The Resources for the entry.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * The Resources for the entry.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface $resource
     * @return static
     */
    public function setResource(PHPFHIRContainedTypeInterface $resource = null)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * Additional information about how this entry should be processed as part of a
     * transaction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * A container for a collection of resources.
     *
     * Additional information about how this entry should be processed as part of a
     * transaction.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse $response
     * @return static
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch $search
     * @return static
     */
    public function setSearch(FHIRBundleSearch $search = null)
    {
        $this->search = $search;
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
        if (null !== ($v = $this->getFullUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FULL_URL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getLink())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LINK, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRequest())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUEST] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResponse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESPONSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSearch())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEARCH] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_FULL_URL])) {
            $v = $this->getFullUrl();
            foreach($validationRules[self::FIELD_FULL_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_ENTRY, self::FIELD_FULL_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FULL_URL])) {
                        $errs[self::FIELD_FULL_URL] = [];
                    }
                    $errs[self::FIELD_FULL_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LINK])) {
            $v = $this->getLink();
            foreach($validationRules[self::FIELD_LINK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_ENTRY, self::FIELD_LINK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINK])) {
                        $errs[self::FIELD_LINK] = [];
                    }
                    $errs[self::FIELD_LINK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST])) {
            $v = $this->getRequest();
            foreach($validationRules[self::FIELD_REQUEST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_ENTRY, self::FIELD_REQUEST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST])) {
                        $errs[self::FIELD_REQUEST] = [];
                    }
                    $errs[self::FIELD_REQUEST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESOURCE])) {
            $v = $this->getResource();
            foreach($validationRules[self::FIELD_RESOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_ENTRY, self::FIELD_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE])) {
                        $errs[self::FIELD_RESOURCE] = [];
                    }
                    $errs[self::FIELD_RESOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESPONSE])) {
            $v = $this->getResponse();
            foreach($validationRules[self::FIELD_RESPONSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_ENTRY, self::FIELD_RESPONSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESPONSE])) {
                        $errs[self::FIELD_RESPONSE] = [];
                    }
                    $errs[self::FIELD_RESPONSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEARCH])) {
            $v = $this->getSearch();
            foreach($validationRules[self::FIELD_SEARCH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_ENTRY, self::FIELD_SEARCH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEARCH])) {
                        $errs[self::FIELD_SEARCH] = [];
                    }
                    $errs[self::FIELD_SEARCH][$rule] = $err;
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry
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
                throw new \DomainException(sprintf('FHIRBundleEntry::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRBundleEntry::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRBundleEntry;
        } elseif (!is_object($type) || !($type instanceof FHIRBundleEntry)) {
            throw new \RuntimeException(sprintf(
                'FHIRBundleEntry::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry or null, %s seen.',
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
        if (isset($children->fullUrl)) {
            $type->setFullUrl(FHIRUri::xmlUnserialize($children->fullUrl));
        }
        if (isset($attributes->fullUrl)) {
            $pt = $type->getFullUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->fullUrl);
            } else {
                $type->setFullUrl((string)$attributes->fullUrl);
            }
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
            foreach($children->resource as $child) {
                foreach($child->children() as $babe) {
                    $type->setResource(PHPFHIRTypeMap::getContainedTypeFromXML($babe));
                    break 2;
                }
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
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getFullUrl())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FULL_URL, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getLink())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LINK, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getRequest())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getResource())) {
            $tsxe = $sxe->addChild(self::FIELD_RESOURCE);
            $v->xmlSerialize($tsxe->addChild($v->_getFHIRTypeName(), null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getResponse())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESPONSE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSearch())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEARCH, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_FULL_URL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_FULL_URL_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getLink())) {
            $a[self::FIELD_LINK] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LINK][] = $v;
            }
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