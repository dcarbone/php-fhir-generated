<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript;

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
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.
 *
 * Class FHIRTestScriptOperation
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript
 */
class FHIRTestScriptOperation extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'TestScript.Operation';

    /**
     * The mime-type to use for RESTful operation in the 'Accept' header.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $accept = null;

    /**
     * The mime-type to use for RESTful operation in the 'Content-Type' header.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $contentType = null;

    /**
     * The description would be used by test engines for tracking and reporting purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The server where the request message is destined for.  Must be one of the server numbers listed in TestScript.destination section.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $destination = null;

    /**
     * Whether or not to implicitly send the request url in encoded format. The default is true to match the standard RESTful client behavior. Set to false when communicating with a server that does not support encoded url paths.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $encodeRequestUrl = null;

    /**
     * The label would be used for tracking/logging purposes by test engines.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $label = null;

    /**
     * The server where the request message originates from.  Must be one of the server numbers listed in TestScript.origin section.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $origin = null;

    /**
     * Path plus parameters after [type].  Used to set parts of the request URL explicitly.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $params = null;

    /**
     * Header elements would be used to set HTTP headers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader
     */
    public $requestHeader = null;

    /**
     * The fixture id (maybe new) to map to the request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $requestId = null;

    /**
     * The type of the resource.  See http://build.fhir.org/resourcelist.html.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $resource = null;

    /**
     * The fixture id (maybe new) to map to the response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $responseId = null;

    /**
     * The id of the fixture used as the body of a PUT or POST request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $sourceId = null;

    /**
     * Id of fixture used for extracting the [id],  [type], and [vid] for GET requests.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $targetId = null;

    /**
     * Server interaction or operation type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $type = null;

    /**
     * Complete request URL.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $url = null;

    /**
     * FHIRTestScriptOperation Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['accept'])) {
                $this->setAccept($data['accept']);
            }
            if (isset($data['contentType'])) {
                $this->setContentType($data['contentType']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['destination'])) {
                $this->setDestination($data['destination']);
            }
            if (isset($data['encodeRequestUrl'])) {
                $this->setEncodeRequestUrl($data['encodeRequestUrl']);
            }
            if (isset($data['label'])) {
                $this->setLabel($data['label']);
            }
            if (isset($data['origin'])) {
                $this->setOrigin($data['origin']);
            }
            if (isset($data['params'])) {
                $this->setParams($data['params']);
            }
            if (isset($data['requestHeader'])) {
                $this->setRequestHeader($data['requestHeader']);
            }
            if (isset($data['requestId'])) {
                $this->setRequestId($data['requestId']);
            }
            if (isset($data['resource'])) {
                $this->setResource($data['resource']);
            }
            if (isset($data['responseId'])) {
                $this->setResponseId($data['responseId']);
            }
            if (isset($data['sourceId'])) {
                $this->setSourceId($data['sourceId']);
            }
            if (isset($data['targetId'])) {
                $this->setTargetId($data['targetId']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The mime-type to use for RESTful operation in the 'Accept' header.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setAccept($accept)
    {
        if (null === $accept) {
            return $this; 
        }
        if (is_scalar($accept)) {
            $accept = new FHIRCode($accept);
        }
        if (!($accept instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptOperation::setAccept - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($accept)
            ));
        }
        $this->accept = $accept;
        return $this;
    }

    /**
     * The mime-type to use for RESTful operation in the 'Accept' header.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getAccept()
    {
        return $this->accept;
    }


    /**
     * The mime-type to use for RESTful operation in the 'Content-Type' header.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setContentType($contentType)
    {
        if (null === $contentType) {
            return $this; 
        }
        if (is_scalar($contentType)) {
            $contentType = new FHIRCode($contentType);
        }
        if (!($contentType instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptOperation::setContentType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($contentType)
            ));
        }
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * The mime-type to use for RESTful operation in the 'Content-Type' header.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getContentType()
    {
        return $this->contentType;
    }


    /**
     * The description would be used by test engines for tracking and reporting purposes.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRString($description);
        }
        if (!($description instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptOperation::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * The description would be used by test engines for tracking and reporting purposes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * The server where the request message is destined for.  Must be one of the server numbers listed in TestScript.destination section.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setDestination($destination)
    {
        if (null === $destination) {
            return $this; 
        }
        if (is_scalar($destination)) {
            $destination = new FHIRInteger($destination);
        }
        if (!($destination instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptOperation::setDestination - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($destination)
            ));
        }
        $this->destination = $destination;
        return $this;
    }

    /**
     * The server where the request message is destined for.  Must be one of the server numbers listed in TestScript.destination section.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getDestination()
    {
        return $this->destination;
    }


    /**
     * Whether or not to implicitly send the request url in encoded format. The default is true to match the standard RESTful client behavior. Set to false when communicating with a server that does not support encoded url paths.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setEncodeRequestUrl($encodeRequestUrl)
    {
        if (null === $encodeRequestUrl) {
            return $this; 
        }
        if (is_scalar($encodeRequestUrl)) {
            $encodeRequestUrl = new FHIRBoolean($encodeRequestUrl);
        }
        if (!($encodeRequestUrl instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptOperation::setEncodeRequestUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($encodeRequestUrl)
            ));
        }
        $this->encodeRequestUrl = $encodeRequestUrl;
        return $this;
    }

    /**
     * Whether or not to implicitly send the request url in encoded format. The default is true to match the standard RESTful client behavior. Set to false when communicating with a server that does not support encoded url paths.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getEncodeRequestUrl()
    {
        return $this->encodeRequestUrl;
    }


    /**
     * The label would be used for tracking/logging purposes by test engines.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setLabel($label)
    {
        if (null === $label) {
            return $this; 
        }
        if (is_scalar($label)) {
            $label = new FHIRString($label);
        }
        if (!($label instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptOperation::setLabel - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($label)
            ));
        }
        $this->label = $label;
        return $this;
    }

    /**
     * The label would be used for tracking/logging purposes by test engines.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLabel()
    {
        return $this->label;
    }


    /**
     * The server where the request message originates from.  Must be one of the server numbers listed in TestScript.origin section.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setOrigin($origin)
    {
        if (null === $origin) {
            return $this; 
        }
        if (is_scalar($origin)) {
            $origin = new FHIRInteger($origin);
        }
        if (!($origin instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptOperation::setOrigin - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($origin)
            ));
        }
        $this->origin = $origin;
        return $this;
    }

    /**
     * The server where the request message originates from.  Must be one of the server numbers listed in TestScript.origin section.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getOrigin()
    {
        return $this->origin;
    }


    /**
     * Path plus parameters after [type].  Used to set parts of the request URL explicitly.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setParams($params)
    {
        if (null === $params) {
            return $this; 
        }
        if (is_scalar($params)) {
            $params = new FHIRString($params);
        }
        if (!($params instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptOperation::setParams - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($params)
            ));
        }
        $this->params = $params;
        return $this;
    }

    /**
     * Path plus parameters after [type].  Used to set parts of the request URL explicitly.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getParams()
    {
        return $this->params;
    }


    /**
     * Header elements would be used to set HTTP headers.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader
     * @return $this
     */
    public function setRequestHeader(FHIRTestScriptRequestHeader $requestHeader = null)
    {
        if (null === $requestHeader) {
            return $this; 
        }
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * Header elements would be used to set HTTP headers.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader
     */
    public function getRequestHeader()
    {
        return $this->requestHeader;
    }


    /**
     * The fixture id (maybe new) to map to the request.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setRequestId($requestId)
    {
        if (null === $requestId) {
            return $this; 
        }
        if (is_scalar($requestId)) {
            $requestId = new FHIRId($requestId);
        }
        if (!($requestId instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptOperation::setRequestId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($requestId)
            ));
        }
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * The fixture id (maybe new) to map to the request.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getRequestId()
    {
        return $this->requestId;
    }


    /**
     * The type of the resource.  See http://build.fhir.org/resourcelist.html.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setResource($resource)
    {
        if (null === $resource) {
            return $this; 
        }
        if (is_scalar($resource)) {
            $resource = new FHIRCode($resource);
        }
        if (!($resource instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptOperation::setResource - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($resource)
            ));
        }
        $this->resource = $resource;
        return $this;
    }

    /**
     * The type of the resource.  See http://build.fhir.org/resourcelist.html.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getResource()
    {
        return $this->resource;
    }


    /**
     * The fixture id (maybe new) to map to the response.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setResponseId($responseId)
    {
        if (null === $responseId) {
            return $this; 
        }
        if (is_scalar($responseId)) {
            $responseId = new FHIRId($responseId);
        }
        if (!($responseId instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptOperation::setResponseId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($responseId)
            ));
        }
        $this->responseId = $responseId;
        return $this;
    }

    /**
     * The fixture id (maybe new) to map to the response.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getResponseId()
    {
        return $this->responseId;
    }


    /**
     * The id of the fixture used as the body of a PUT or POST request.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setSourceId($sourceId)
    {
        if (null === $sourceId) {
            return $this; 
        }
        if (is_scalar($sourceId)) {
            $sourceId = new FHIRId($sourceId);
        }
        if (!($sourceId instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptOperation::setSourceId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($sourceId)
            ));
        }
        $this->sourceId = $sourceId;
        return $this;
    }

    /**
     * The id of the fixture used as the body of a PUT or POST request.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }


    /**
     * Id of fixture used for extracting the [id],  [type], and [vid] for GET requests.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setTargetId($targetId)
    {
        if (null === $targetId) {
            return $this; 
        }
        if (is_scalar($targetId)) {
            $targetId = new FHIRId($targetId);
        }
        if (!($targetId instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptOperation::setTargetId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($targetId)
            ));
        }
        $this->targetId = $targetId;
        return $this;
    }

    /**
     * Id of fixture used for extracting the [id],  [type], and [vid] for GET requests.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getTargetId()
    {
        return $this->targetId;
    }


    /**
     * Server interaction or operation type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setType(FHIRCoding $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Server interaction or operation type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * Complete request URL.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setUrl($url)
    {
        if (null === $url) {
            return $this; 
        }
        if (is_scalar($url)) {
            $url = new FHIRString($url);
        }
        if (!($url instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptOperation::setUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($url)
            ));
        }
        $this->url = $url;
        return $this;
    }

    /**
     * Complete request URL.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
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
        if (null !== ($v = $this->getAccept())) {
            $a['accept'] = $v;
        }
        if (null !== ($v = $this->getContentType())) {
            $a['contentType'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getDestination())) {
            $a['destination'] = $v;
        }
        if (null !== ($v = $this->getEncodeRequestUrl())) {
            $a['encodeRequestUrl'] = $v;
        }
        if (null !== ($v = $this->getLabel())) {
            $a['label'] = $v;
        }
        if (null !== ($v = $this->getOrigin())) {
            $a['origin'] = $v;
        }
        if (null !== ($v = $this->getParams())) {
            $a['params'] = $v;
        }
        if (null !== ($v = $this->getRequestHeader())) {
            $a['requestHeader'] = $v;
        }
        if (null !== ($v = $this->getRequestId())) {
            $a['requestId'] = $v;
        }
        if (null !== ($v = $this->getResource())) {
            $a['resource'] = $v;
        }
        if (null !== ($v = $this->getResponseId())) {
            $a['responseId'] = $v;
        }
        if (null !== ($v = $this->getSourceId())) {
            $a['sourceId'] = $v;
        }
        if (null !== ($v = $this->getTargetId())) {
            $a['targetId'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
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
            $sxe = new \SimpleXMLElement('<TestScriptOperation xmlns="http://hl7.org/fhir"></TestScriptOperation>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}