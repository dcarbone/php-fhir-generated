<?php namespace PHPFHIRGenerated\FHIRResource\FHIRTestScript;

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
 * A structured set of tests against a FHIR server implementation to determine compliance against the FHIR specification.
 */
class FHIRTestScriptOperation extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Server interaction or operation type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $type = null;

    /**
     * The type of the resource.  See http://build.fhir.org/resourcelist.html.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFHIRDefinedType
     */
    public $resource = null;

    /**
     * The label would be used for tracking/logging purposes by test engines.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $label = null;

    /**
     * The description would be used by test engines for tracking and reporting purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The content-type or mime-type to use for RESTful operation in the 'Accept' header.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContentType
     */
    public $accept = null;

    /**
     * The content-type or mime-type to use for RESTful operation in the 'Content-Type' header.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContentType
     */
    public $contentType = null;

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
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptRequestHeader[]
     */
    public $requestHeader = array();

    /**
     * The fixture id (maybe new) to map to the request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $requestId = null;

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
     * Complete request URL.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $url = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'TestScript.Operation';

    /**
     * Server interaction or operation type.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Server interaction or operation type.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * The type of the resource.  See http://build.fhir.org/resourcelist.html.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRFHIRDefinedType
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * The type of the resource.  See http://build.fhir.org/resourcelist.html.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRFHIRDefinedType $resource
     * @return $this
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * The label would be used for tracking/logging purposes by test engines.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * The label would be used for tracking/logging purposes by test engines.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * The description would be used by test engines for tracking and reporting purposes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description would be used by test engines for tracking and reporting purposes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The content-type or mime-type to use for RESTful operation in the 'Accept' header.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContentType
     */
    public function getAccept()
    {
        return $this->accept;
    }

    /**
     * The content-type or mime-type to use for RESTful operation in the 'Accept' header.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContentType $accept
     * @return $this
     */
    public function setAccept($accept)
    {
        $this->accept = $accept;
        return $this;
    }

    /**
     * The content-type or mime-type to use for RESTful operation in the 'Content-Type' header.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContentType
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * The content-type or mime-type to use for RESTful operation in the 'Content-Type' header.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContentType $contentType
     * @return $this
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * The server where the request message is destined for.  Must be one of the server numbers listed in TestScript.destination section.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * The server where the request message is destined for.  Must be one of the server numbers listed in TestScript.destination section.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $destination
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Whether or not to implicitly send the request url in encoded format. The default is true to match the standard RESTful client behavior. Set to false when communicating with a server that does not support encoded url paths.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getEncodeRequestUrl()
    {
        return $this->encodeRequestUrl;
    }

    /**
     * Whether or not to implicitly send the request url in encoded format. The default is true to match the standard RESTful client behavior. Set to false when communicating with a server that does not support encoded url paths.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $encodeRequestUrl
     * @return $this
     */
    public function setEncodeRequestUrl($encodeRequestUrl)
    {
        $this->encodeRequestUrl = $encodeRequestUrl;
        return $this;
    }

    /**
     * The server where the request message originates from.  Must be one of the server numbers listed in TestScript.origin section.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * The server where the request message originates from.  Must be one of the server numbers listed in TestScript.origin section.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $origin
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * Path plus parameters after [type].  Used to set parts of the request URL explicitly.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Path plus parameters after [type].  Used to set parts of the request URL explicitly.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $params
     * @return $this
     */
    public function setParams($params)
    {
        $this->params = $params;
        return $this;
    }

    /**
     * Header elements would be used to set HTTP headers.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptRequestHeader[]
     */
    public function getRequestHeader()
    {
        return $this->requestHeader;
    }

    /**
     * Header elements would be used to set HTTP headers.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptRequestHeader $requestHeader
     * @return $this
     */
    public function addRequestHeader($requestHeader)
    {
        $this->requestHeader[] = $requestHeader;
        return $this;
    }

    /**
     * The fixture id (maybe new) to map to the request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * The fixture id (maybe new) to map to the request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $requestId
     * @return $this
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * The fixture id (maybe new) to map to the response.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getResponseId()
    {
        return $this->responseId;
    }

    /**
     * The fixture id (maybe new) to map to the response.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $responseId
     * @return $this
     */
    public function setResponseId($responseId)
    {
        $this->responseId = $responseId;
        return $this;
    }

    /**
     * The id of the fixture used as the body of a PUT or POST request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * The id of the fixture used as the body of a PUT or POST request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $sourceId
     * @return $this
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId = $sourceId;
        return $this;
    }

    /**
     * Id of fixture used for extracting the [id],  [type], and [vid] for GET requests.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getTargetId()
    {
        return $this->targetId;
    }

    /**
     * Id of fixture used for extracting the [id],  [type], and [vid] for GET requests.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $targetId
     * @return $this
     */
    public function setTargetId($targetId)
    {
        $this->targetId = $targetId;
        return $this;
    }

    /**
     * Complete request URL.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Complete request URL.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
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
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->resource) $json['resource'] = $this->resource;
        if (null !== $this->label) $json['label'] = $this->label;
        if (null !== $this->description) $json['description'] = $this->description;
        if (null !== $this->accept) $json['accept'] = $this->accept;
        if (null !== $this->contentType) $json['contentType'] = $this->contentType;
        if (null !== $this->destination) $json['destination'] = $this->destination;
        if (null !== $this->encodeRequestUrl) $json['encodeRequestUrl'] = $this->encodeRequestUrl;
        if (null !== $this->origin) $json['origin'] = $this->origin;
        if (null !== $this->params) $json['params'] = $this->params;
        if (0 < count($this->requestHeader)) {
            $json['requestHeader'] = [];
            foreach($this->requestHeader as $requestHeader) {
                $json['requestHeader'][] = $requestHeader;
            }
        }
        if (null !== $this->requestId) $json['requestId'] = $this->requestId;
        if (null !== $this->responseId) $json['responseId'] = $this->responseId;
        if (null !== $this->sourceId) $json['sourceId'] = $this->sourceId;
        if (null !== $this->targetId) $json['targetId'] = $this->targetId;
        if (null !== $this->url) $json['url'] = $this->url;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<TestScriptOperation xmlns="http://hl7.org/fhir"></TestScriptOperation>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->resource) $this->resource->xmlSerialize(true, $sxe->addChild('resource'));
        if (null !== $this->label) $this->label->xmlSerialize(true, $sxe->addChild('label'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->accept) $this->accept->xmlSerialize(true, $sxe->addChild('accept'));
        if (null !== $this->contentType) $this->contentType->xmlSerialize(true, $sxe->addChild('contentType'));
        if (null !== $this->destination) $this->destination->xmlSerialize(true, $sxe->addChild('destination'));
        if (null !== $this->encodeRequestUrl) $this->encodeRequestUrl->xmlSerialize(true, $sxe->addChild('encodeRequestUrl'));
        if (null !== $this->origin) $this->origin->xmlSerialize(true, $sxe->addChild('origin'));
        if (null !== $this->params) $this->params->xmlSerialize(true, $sxe->addChild('params'));
        if (0 < count($this->requestHeader)) {
            foreach($this->requestHeader as $requestHeader) {
                $requestHeader->xmlSerialize(true, $sxe->addChild('requestHeader'));
            }
        }
        if (null !== $this->requestId) $this->requestId->xmlSerialize(true, $sxe->addChild('requestId'));
        if (null !== $this->responseId) $this->responseId->xmlSerialize(true, $sxe->addChild('responseId'));
        if (null !== $this->sourceId) $this->sourceId->xmlSerialize(true, $sxe->addChild('sourceId'));
        if (null !== $this->targetId) $this->targetId->xmlSerialize(true, $sxe->addChild('targetId'));
        if (null !== $this->url) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}