<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:04+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * A description of a query with a set of parameters.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRQuery
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIRQuery extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_QUERY;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_PARAMETER = 'parameter';
    const FIELD_RESPONSE = 'response';

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Links query and its response(s).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    private $identifier = null;
    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Set of query parameters with values.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    private $parameter = [];
    /**
     * A description of a query with a set of parameters.
     *
     * If this is a response to a query.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
     */
    private $response = null;

    /**
     * FHIRQuery Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuery::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRUri) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->setIdentifier(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->setIdentifier(new FHIRUri($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_PARAMETER])) {
            if (is_array($data[self::FIELD_PARAMETER])) {
                foreach($data[self::FIELD_PARAMETER] as $v) {
                    if ($v instanceof FHIRExtension) {
                        $this->addParameter($v);
                    } else {
                        $this->addParameter(new FHIRExtension($v));
                    }
                }
            } else if ($data[self::FIELD_PARAMETER] instanceof FHIRExtension) {
                $this->addParameter($data[self::FIELD_PARAMETER]);
            } else {
                $this->addParameter(new FHIRExtension($data[self::FIELD_PARAMETER]));
            }
        }
        if (isset($data[self::FIELD_RESPONSE])) {
            if ($data[self::FIELD_RESPONSE] instanceof FHIRQueryResponse) {
                $this->setResponse($data[self::FIELD_RESPONSE]);
            } else {
                $this->setResponse(new FHIRQueryResponse($data[self::FIELD_RESPONSE]));
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuery
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
        return "<Query{$xmlns}></Query>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Links query and its response(s).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Links query and its response(s).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuery
     */
    public function setIdentifier($identifier = null)
    {
        if (null === $identifier) {
            $this->identifier = null;
            return $this;
        }
        if ($identifier instanceof FHIRUri) {
            $this->identifier = $identifier;
            return $this;
        }
        $this->identifier = new FHIRUri($identifier);
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Set of query parameters with values.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Set of query parameters with values.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension $parameter
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuery
     */
    public function addParameter(FHIRExtension $parameter = null)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Set of query parameters with values.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[] $parameter
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuery
     */
    public function setParameter(array $parameter = [])
    {
        $this->parameter = [];
        if ([] === $parameter) {
            return $this;
        }
        foreach($parameter as $v) {
            if ($v instanceof FHIRExtension) {
                $this->addParameter($v);
            } else {
                $this->addParameter(new FHIRExtension($v));
            }
        }
        return $this;
    }

    /**
     * A description of a query with a set of parameters.
     *
     * If this is a response to a query.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * A description of a query with a set of parameters.
     *
     * If this is a response to a query.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse $response
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuery
     */
    public function setResponse(FHIRQueryResponse $response = null)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuery $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuery
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
                throw new \DomainException(sprintf('FHIRQuery::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRQuery::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRQuery;
        } elseif (!is_object($type) || !($type instanceof FHIRQuery)) {
            throw new \RuntimeException(sprintf(
                'FHIRQuery::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuery or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->identifier)) {
            $type->setIdentifier((string)$attributes->identifier);
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRUri::xmlUnserialize($children->identifier));
        }
        if (isset($children->parameter)) {
            foreach($children->parameter as $child) {
                $type->addParameter(FHIRExtension::xmlUnserialize($child));
            }
        }
        if (isset($children->response)) {
            $type->setResponse(FHIRQueryResponse::xmlUnserialize($children->response));
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
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getParameter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARAMETER, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getResponse())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESPONSE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_IDENTIFIER_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getParameter())) {
            $a[self::FIELD_PARAMETER] = $vs;
        }
        if (null !== ($v = $this->getResponse())) {
            $a[self::FIELD_RESPONSE] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}