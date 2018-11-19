<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript;

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
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRContentType;
use PHPFHIRGenerated\FHIRElement\FHIRFHIRDefinedType;
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A structured set of tests against a FHIR server implementation to determine compliance against the FHIR specification.
 *
 * Class FHIRTestScriptOperation
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript
 */
class FHIRTestScriptOperation extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'TestScript.Operation';

    /**
     * The content-type or mime-type to use for RESTful operation in the 'Accept' header.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContentType
     */
    private $accept = null;

    /**
     * The content-type or mime-type to use for RESTful operation in the 'Content-Type' header.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContentType
     */
    private $contentType = null;

    /**
     * The description would be used by test engines for tracking and reporting purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $description = null;

    /**
     * The server where the request message is destined for.  Must be one of the server numbers listed in TestScript.destination section.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $destination = null;

    /**
     * Whether or not to implicitly send the request url in encoded format. The default is true to match the standard RESTful client behavior. Set to false when communicating with a server that does not support encoded url paths.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $encodeRequestUrl = null;

    /**
     * The label would be used for tracking/logging purposes by test engines.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $label = null;

    /**
     * The server where the request message originates from.  Must be one of the server numbers listed in TestScript.origin section.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $origin = null;

    /**
     * Path plus parameters after [type].  Used to set parts of the request URL explicitly.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $params = null;

    /**
     * Header elements would be used to set HTTP headers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader[]
     */
    private $requestHeader = [];

    /**
     * The fixture id (maybe new) to map to the request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    private $requestId = null;

    /**
     * The type of the resource.  See http://build.fhir.org/resourcelist.html.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFHIRDefinedType
     */
    private $resource = null;

    /**
     * The fixture id (maybe new) to map to the response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    private $responseId = null;

    /**
     * The id of the fixture used as the body of a PUT or POST request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    private $sourceId = null;

    /**
     * Id of fixture used for extracting the [id],  [type], and [vid] for GET requests.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    private $targetId = null;

    /**
     * Server interaction or operation type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    private $type = null;

    /**
     * Complete request URL.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $url = null;

    /**
     * FHIRTestScriptOperation Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['accept'])) {
                $value = $data['accept'];
                if (is_array($value)) {
                    $value = new FHIRContentType($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRContentType($value);
                }
                if (!($value instanceof FHIRContentType)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation::__construct - Property \"accept\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRContentType or data to construct type, saw ".gettype($value)); 
                }
                $this->setAccept($value);
            }
            if (isset($data['contentType'])) {
                $value = $data['contentType'];
                if (is_array($value)) {
                    $value = new FHIRContentType($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRContentType($value);
                }
                if (!($value instanceof FHIRContentType)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation::__construct - Property \"contentType\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRContentType or data to construct type, saw ".gettype($value)); 
                }
                $this->setContentType($value);
            }
            if (isset($data['description'])) {
                $value = $data['description'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation::__construct - Property \"description\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setDescription($value);
            }
            if (isset($data['destination'])) {
                $value = $data['destination'];
                if (is_array($value)) {
                    $value = new FHIRInteger($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInteger($value);
                }
                if (!($value instanceof FHIRInteger)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation::__construct - Property \"destination\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or data to construct type, saw ".gettype($value)); 
                }
                $this->setDestination($value);
            }
            if (isset($data['encodeRequestUrl'])) {
                $value = $data['encodeRequestUrl'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation::__construct - Property \"encodeRequestUrl\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value)); 
                }
                $this->setEncodeRequestUrl($value);
            }
            if (isset($data['label'])) {
                $value = $data['label'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation::__construct - Property \"label\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setLabel($value);
            }
            if (isset($data['origin'])) {
                $value = $data['origin'];
                if (is_array($value)) {
                    $value = new FHIRInteger($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInteger($value);
                }
                if (!($value instanceof FHIRInteger)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation::__construct - Property \"origin\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or data to construct type, saw ".gettype($value)); 
                }
                $this->setOrigin($value);
            }
            if (isset($data['params'])) {
                $value = $data['params'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation::__construct - Property \"params\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setParams($value);
            }
            if (isset($data['requestHeader'])) {
                $value = $data['requestHeader'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRTestScriptRequestHeader($v);
                        } 
                        if (!($v instanceof FHIRTestScriptRequestHeader)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation::__construct - Collection field \"requestHeader\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addRequestHeader($v);
                    }
                }
            }
            if (isset($data['requestId'])) {
                $value = $data['requestId'];
                if (is_array($value)) {
                    $value = new FHIRId($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRId($value);
                }
                if (!($value instanceof FHIRId)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation::__construct - Property \"requestId\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or data to construct type, saw ".gettype($value)); 
                }
                $this->setRequestId($value);
            }
            if (isset($data['resource'])) {
                $value = $data['resource'];
                if (is_array($value)) {
                    $value = new FHIRFHIRDefinedType($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRFHIRDefinedType($value);
                }
                if (!($value instanceof FHIRFHIRDefinedType)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation::__construct - Property \"resource\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRFHIRDefinedType or data to construct type, saw ".gettype($value)); 
                }
                $this->setResource($value);
            }
            if (isset($data['responseId'])) {
                $value = $data['responseId'];
                if (is_array($value)) {
                    $value = new FHIRId($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRId($value);
                }
                if (!($value instanceof FHIRId)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation::__construct - Property \"responseId\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or data to construct type, saw ".gettype($value)); 
                }
                $this->setResponseId($value);
            }
            if (isset($data['sourceId'])) {
                $value = $data['sourceId'];
                if (is_array($value)) {
                    $value = new FHIRId($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRId($value);
                }
                if (!($value instanceof FHIRId)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation::__construct - Property \"sourceId\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or data to construct type, saw ".gettype($value)); 
                }
                $this->setSourceId($value);
            }
            if (isset($data['targetId'])) {
                $value = $data['targetId'];
                if (is_array($value)) {
                    $value = new FHIRId($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRId($value);
                }
                if (!($value instanceof FHIRId)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation::__construct - Property \"targetId\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or data to construct type, saw ".gettype($value)); 
                }
                $this->setTargetId($value);
            }
            if (isset($data['type'])) {
                $value = $data['type'];
                if (is_array($value)) {
                    $value = new FHIRCoding($value);
                } 
                if (!($value instanceof FHIRCoding)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation::__construct - Property \"type\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCoding or data to construct type, saw ".gettype($value)); 
                }
                $this->setType($value);
            }
            if (isset($data['url'])) {
                $value = $data['url'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation::__construct - Property \"url\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setUrl($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The content-type or mime-type to use for RESTful operation in the 'Accept' header.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContentType
     * @return $this
     */
    public function setAccept($accept)
    {
        if (null === $accept) {
            return $this; 
        }
        if (is_scalar($accept)) {
            $accept = new FHIRContentType($accept);
        }
        if (!($accept instanceof FHIRContentType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptOperation::setAccept - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRContentType or appropriate scalar value, %s seen.',
                gettype($accept)
            ));
        }
        $this->accept = $accept;
        return $this;
    }

    /**
     * The content-type or mime-type to use for RESTful operation in the 'Accept' header.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContentType
     */
    public function getAccept()
    {
        return $this->accept;
    }

    /**
     * The content-type or mime-type to use for RESTful operation in the 'Content-Type' header.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContentType
     * @return $this
     */
    public function setContentType($contentType)
    {
        if (null === $contentType) {
            return $this; 
        }
        if (is_scalar($contentType)) {
            $contentType = new FHIRContentType($contentType);
        }
        if (!($contentType instanceof FHIRContentType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptOperation::setContentType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRContentType or appropriate scalar value, %s seen.',
                gettype($contentType)
            ));
        }
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * The content-type or mime-type to use for RESTful operation in the 'Content-Type' header.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContentType
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
    public function addRequestHeader(FHIRTestScriptRequestHeader $requestHeader = null)
    {
        if (null === $requestHeader) {
            return $this; 
        }
        $this->requestHeader[] = $requestHeader;
        return $this;
    }

    /**
     * Header elements would be used to set HTTP headers.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader[]
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
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRFHIRDefinedType
     * @return $this
     */
    public function setResource($resource)
    {
        if (null === $resource) {
            return $this; 
        }
        if (is_scalar($resource)) {
            $resource = new FHIRFHIRDefinedType($resource);
        }
        if (!($resource instanceof FHIRFHIRDefinedType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptOperation::setResource - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRFHIRDefinedType or appropriate scalar value, %s seen.',
                gettype($resource)
            ));
        }
        $this->resource = $resource;
        return $this;
    }

    /**
     * The type of the resource.  See http://build.fhir.org/resourcelist.html.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRFHIRDefinedType
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
        if (0 < count($values = $this->getRequestHeader())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['requestHeader'] = $vs;
            }
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
        if (null !== ($v = $this->getAccept())) {
            $v->xmlSerialize(true, $sxe->addChild('accept'));
        }
        if (null !== ($v = $this->getContentType())) {
            $v->xmlSerialize(true, $sxe->addChild('contentType'));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize(true, $sxe->addChild('description'));
        }
        if (null !== ($v = $this->getDestination())) {
            $v->xmlSerialize(true, $sxe->addChild('destination'));
        }
        if (null !== ($v = $this->getEncodeRequestUrl())) {
            $v->xmlSerialize(true, $sxe->addChild('encodeRequestUrl'));
        }
        if (null !== ($v = $this->getLabel())) {
            $v->xmlSerialize(true, $sxe->addChild('label'));
        }
        if (null !== ($v = $this->getOrigin())) {
            $v->xmlSerialize(true, $sxe->addChild('origin'));
        }
        if (null !== ($v = $this->getParams())) {
            $v->xmlSerialize(true, $sxe->addChild('params'));
        }
        if (0 < count($values = $this->getRequestHeader())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('requestHeader'));
                }
            }
        }
        if (null !== ($v = $this->getRequestId())) {
            $v->xmlSerialize(true, $sxe->addChild('requestId'));
        }
        if (null !== ($v = $this->getResource())) {
            $v->xmlSerialize(true, $sxe->addChild('resource'));
        }
        if (null !== ($v = $this->getResponseId())) {
            $v->xmlSerialize(true, $sxe->addChild('responseId'));
        }
        if (null !== ($v = $this->getSourceId())) {
            $v->xmlSerialize(true, $sxe->addChild('sourceId'));
        }
        if (null !== ($v = $this->getTargetId())) {
            $v->xmlSerialize(true, $sxe->addChild('targetId'));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize(true, $sxe->addChild('type'));
        }
        if (null !== ($v = $this->getUrl())) {
            $v->xmlSerialize(true, $sxe->addChild('url'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}