<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript;

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
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContentType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFHIRDefinedType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A structured set of tests against a FHIR server implementation to determine
 * compliance against the FHIR specification.
 *
 * Class FHIRTestScriptOperation
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript
 */
class FHIRTestScriptOperation extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION;
    const FIELD_ACCEPT = 'accept';
    const FIELD_ACCEPT_EXT = '_accept';
    const FIELD_CONTENT_TYPE = 'contentType';
    const FIELD_CONTENT_TYPE_EXT = '_contentType';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DESTINATION = 'destination';
    const FIELD_DESTINATION_EXT = '_destination';
    const FIELD_ENCODE_REQUEST_URL = 'encodeRequestUrl';
    const FIELD_ENCODE_REQUEST_URL_EXT = '_encodeRequestUrl';
    const FIELD_LABEL = 'label';
    const FIELD_LABEL_EXT = '_label';
    const FIELD_ORIGIN = 'origin';
    const FIELD_ORIGIN_EXT = '_origin';
    const FIELD_PARAMS = 'params';
    const FIELD_PARAMS_EXT = '_params';
    const FIELD_REQUEST_HEADER = 'requestHeader';
    const FIELD_REQUEST_ID = 'requestId';
    const FIELD_REQUEST_ID_EXT = '_requestId';
    const FIELD_RESOURCE = 'resource';
    const FIELD_RESOURCE_EXT = '_resource';
    const FIELD_RESPONSE_ID = 'responseId';
    const FIELD_RESPONSE_ID_EXT = '_responseId';
    const FIELD_SOURCE_ID = 'sourceId';
    const FIELD_SOURCE_ID_EXT = '_sourceId';
    const FIELD_TARGET_ID = 'targetId';
    const FIELD_TARGET_ID_EXT = '_targetId';
    const FIELD_TYPE = 'type';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * The content or mime type.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The content-type or mime-type to use for RESTful operation in the 'Accept'
     * header.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContentType
     */
    protected $accept = null;

    /**
     * The content or mime type.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The content-type or mime-type to use for RESTful operation in the 'Content-Type'
     * header.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContentType
     */
    protected $contentType = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The description would be used by test engines for tracking and reporting
     * purposes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The server where the request message is destined for. Must be one of the server
     * numbers listed in TestScript.destination section.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected $destination = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not to implicitly send the request url in encoded format. The default
     * is true to match the standard RESTful client behavior. Set to false when
     * communicating with a server that does not support encoded url paths.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $encodeRequestUrl = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $label = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The server where the request message originates from. Must be one of the server
     * numbers listed in TestScript.origin section.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected $origin = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Path plus parameters after [type]. Used to set parts of the request URL
     * explicitly.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $params = null;

    /**
     * A structured set of tests against a FHIR server implementation to determine
     * compliance against the FHIR specification.
     *
     * Header elements would be used to set HTTP headers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader[]
     */
    protected $requestHeader = [];

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The fixture id (maybe new) to map to the request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    protected $requestId = null;

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of the resource. See http://build.fhir.org/resourcelist.html.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFHIRDefinedType
     */
    protected $resource = null;

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The fixture id (maybe new) to map to the response.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    protected $responseId = null;

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The id of the fixture used as the body of a PUT or POST request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    protected $sourceId = null;

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Id of fixture used for extracting the [id], [type], and [vid] for GET requests.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    protected $targetId = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Server interaction or operation type.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    protected $type = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Complete request URL.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $url = null;

    /**
     * Validation map for fields in type TestScript.Operation
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRTestScriptOperation Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptOperation::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACCEPT]) || isset($data[self::FIELD_ACCEPT_EXT])) {
            if (isset($data[self::FIELD_ACCEPT])) {
                $value = $data[self::FIELD_ACCEPT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ACCEPT_EXT]) && is_array($data[self::FIELD_ACCEPT_EXT])) {
                $ext = $data[self::FIELD_ACCEPT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRContentType) {
                    $this->setAccept($value);
                } else if (is_array($value)) {
                    $this->setAccept(new FHIRContentType(array_merge($ext, $value)));
                } else {
                    $this->setAccept(new FHIRContentType([FHIRContentType::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAccept(new FHIRContentType($ext));
            }
        }
        if (isset($data[self::FIELD_CONTENT_TYPE]) || isset($data[self::FIELD_CONTENT_TYPE_EXT])) {
            if (isset($data[self::FIELD_CONTENT_TYPE])) {
                $value = $data[self::FIELD_CONTENT_TYPE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CONTENT_TYPE_EXT]) && is_array($data[self::FIELD_CONTENT_TYPE_EXT])) {
                $ext = $data[self::FIELD_CONTENT_TYPE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRContentType) {
                    $this->setContentType($value);
                } else if (is_array($value)) {
                    $this->setContentType(new FHIRContentType(array_merge($ext, $value)));
                } else {
                    $this->setContentType(new FHIRContentType([FHIRContentType::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setContentType(new FHIRContentType($ext));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            if (isset($data[self::FIELD_DESCRIPTION])) {
                $value = $data[self::FIELD_DESCRIPTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) {
                $ext = $data[self::FIELD_DESCRIPTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DESTINATION]) || isset($data[self::FIELD_DESTINATION_EXT])) {
            if (isset($data[self::FIELD_DESTINATION])) {
                $value = $data[self::FIELD_DESTINATION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DESTINATION_EXT]) && is_array($data[self::FIELD_DESTINATION_EXT])) {
                $ext = $data[self::FIELD_DESTINATION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setDestination($value);
                } else if (is_array($value)) {
                    $this->setDestination(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setDestination(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDestination(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_ENCODE_REQUEST_URL]) || isset($data[self::FIELD_ENCODE_REQUEST_URL_EXT])) {
            if (isset($data[self::FIELD_ENCODE_REQUEST_URL])) {
                $value = $data[self::FIELD_ENCODE_REQUEST_URL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ENCODE_REQUEST_URL_EXT]) && is_array($data[self::FIELD_ENCODE_REQUEST_URL_EXT])) {
                $ext = $data[self::FIELD_ENCODE_REQUEST_URL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setEncodeRequestUrl($value);
                } else if (is_array($value)) {
                    $this->setEncodeRequestUrl(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setEncodeRequestUrl(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setEncodeRequestUrl(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_LABEL]) || isset($data[self::FIELD_LABEL_EXT])) {
            if (isset($data[self::FIELD_LABEL])) {
                $value = $data[self::FIELD_LABEL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LABEL_EXT]) && is_array($data[self::FIELD_LABEL_EXT])) {
                $ext = $data[self::FIELD_LABEL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setLabel($value);
                } else if (is_array($value)) {
                    $this->setLabel(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setLabel(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLabel(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_ORIGIN]) || isset($data[self::FIELD_ORIGIN_EXT])) {
            if (isset($data[self::FIELD_ORIGIN])) {
                $value = $data[self::FIELD_ORIGIN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ORIGIN_EXT]) && is_array($data[self::FIELD_ORIGIN_EXT])) {
                $ext = $data[self::FIELD_ORIGIN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setOrigin($value);
                } else if (is_array($value)) {
                    $this->setOrigin(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setOrigin(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setOrigin(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_PARAMS]) || isset($data[self::FIELD_PARAMS_EXT])) {
            if (isset($data[self::FIELD_PARAMS])) {
                $value = $data[self::FIELD_PARAMS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PARAMS_EXT]) && is_array($data[self::FIELD_PARAMS_EXT])) {
                $ext = $data[self::FIELD_PARAMS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setParams($value);
                } else if (is_array($value)) {
                    $this->setParams(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setParams(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setParams(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_REQUEST_HEADER])) {
            if (is_array($data[self::FIELD_REQUEST_HEADER])) {
                foreach($data[self::FIELD_REQUEST_HEADER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRTestScriptRequestHeader) {
                        $this->addRequestHeader($v);
                    } else {
                        $this->addRequestHeader(new FHIRTestScriptRequestHeader($v));
                    }
                }
            } else if ($data[self::FIELD_REQUEST_HEADER] instanceof FHIRTestScriptRequestHeader) {
                $this->addRequestHeader($data[self::FIELD_REQUEST_HEADER]);
            } else {
                $this->addRequestHeader(new FHIRTestScriptRequestHeader($data[self::FIELD_REQUEST_HEADER]));
            }
        }
        if (isset($data[self::FIELD_REQUEST_ID]) || isset($data[self::FIELD_REQUEST_ID_EXT])) {
            if (isset($data[self::FIELD_REQUEST_ID])) {
                $value = $data[self::FIELD_REQUEST_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_REQUEST_ID_EXT]) && is_array($data[self::FIELD_REQUEST_ID_EXT])) {
                $ext = $data[self::FIELD_REQUEST_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setRequestId($value);
                } else if (is_array($value)) {
                    $this->setRequestId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setRequestId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setRequestId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_RESOURCE]) || isset($data[self::FIELD_RESOURCE_EXT])) {
            if (isset($data[self::FIELD_RESOURCE])) {
                $value = $data[self::FIELD_RESOURCE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_RESOURCE_EXT]) && is_array($data[self::FIELD_RESOURCE_EXT])) {
                $ext = $data[self::FIELD_RESOURCE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRFHIRDefinedType) {
                    $this->setResource($value);
                } else if (is_array($value)) {
                    $this->setResource(new FHIRFHIRDefinedType(array_merge($ext, $value)));
                } else {
                    $this->setResource(new FHIRFHIRDefinedType([FHIRFHIRDefinedType::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setResource(new FHIRFHIRDefinedType($ext));
            }
        }
        if (isset($data[self::FIELD_RESPONSE_ID]) || isset($data[self::FIELD_RESPONSE_ID_EXT])) {
            if (isset($data[self::FIELD_RESPONSE_ID])) {
                $value = $data[self::FIELD_RESPONSE_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_RESPONSE_ID_EXT]) && is_array($data[self::FIELD_RESPONSE_ID_EXT])) {
                $ext = $data[self::FIELD_RESPONSE_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setResponseId($value);
                } else if (is_array($value)) {
                    $this->setResponseId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setResponseId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setResponseId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_SOURCE_ID]) || isset($data[self::FIELD_SOURCE_ID_EXT])) {
            if (isset($data[self::FIELD_SOURCE_ID])) {
                $value = $data[self::FIELD_SOURCE_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SOURCE_ID_EXT]) && is_array($data[self::FIELD_SOURCE_ID_EXT])) {
                $ext = $data[self::FIELD_SOURCE_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setSourceId($value);
                } else if (is_array($value)) {
                    $this->setSourceId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setSourceId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSourceId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_TARGET_ID]) || isset($data[self::FIELD_TARGET_ID_EXT])) {
            if (isset($data[self::FIELD_TARGET_ID])) {
                $value = $data[self::FIELD_TARGET_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TARGET_ID_EXT]) && is_array($data[self::FIELD_TARGET_ID_EXT])) {
                $ext = $data[self::FIELD_TARGET_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setTargetId($value);
                } else if (is_array($value)) {
                    $this->setTargetId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setTargetId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTargetId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCoding) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCoding($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_URL]) || isset($data[self::FIELD_URL_EXT])) {
            if (isset($data[self::FIELD_URL])) {
                $value = $data[self::FIELD_URL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT])) {
                $ext = $data[self::FIELD_URL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setUrl($value);
                } else if (is_array($value)) {
                    $this->setUrl(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setUrl(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setUrl(new FHIRString($ext));
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
        return "<TestScriptOperation{$xmlns}></TestScriptOperation>";
    }

    /**
     * The content or mime type.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The content-type or mime-type to use for RESTful operation in the 'Accept'
     * header.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContentType
     */
    public function getAccept()
    {
        return $this->accept;
    }

    /**
     * The content or mime type.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The content-type or mime-type to use for RESTful operation in the 'Accept'
     * header.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContentType $accept
     * @return static
     */
    public function setAccept(FHIRContentType $accept = null)
    {
        $this->accept = $accept;
        return $this;
    }

    /**
     * The content or mime type.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The content-type or mime-type to use for RESTful operation in the 'Content-Type'
     * header.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContentType
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * The content or mime type.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The content-type or mime-type to use for RESTful operation in the 'Content-Type'
     * header.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContentType $contentType
     * @return static
     */
    public function setContentType(FHIRContentType $contentType = null)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The description would be used by test engines for tracking and reporting
     * purposes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The description would be used by test engines for tracking and reporting
     * purposes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The server where the request message is destined for. Must be one of the server
     * numbers listed in TestScript.destination section.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The server where the request message is destined for. Must be one of the server
     * numbers listed in TestScript.destination section.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $destination
     * @return static
     */
    public function setDestination($destination = null)
    {
        if (null === $destination) {
            $this->destination = null;
            return $this;
        }
        if ($destination instanceof FHIRInteger) {
            $this->destination = $destination;
            return $this;
        }
        $this->destination = new FHIRInteger($destination);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not to implicitly send the request url in encoded format. The default
     * is true to match the standard RESTful client behavior. Set to false when
     * communicating with a server that does not support encoded url paths.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getEncodeRequestUrl()
    {
        return $this->encodeRequestUrl;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not to implicitly send the request url in encoded format. The default
     * is true to match the standard RESTful client behavior. Set to false when
     * communicating with a server that does not support encoded url paths.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $encodeRequestUrl
     * @return static
     */
    public function setEncodeRequestUrl($encodeRequestUrl = null)
    {
        if (null === $encodeRequestUrl) {
            $this->encodeRequestUrl = null;
            return $this;
        }
        if ($encodeRequestUrl instanceof FHIRBoolean) {
            $this->encodeRequestUrl = $encodeRequestUrl;
            return $this;
        }
        $this->encodeRequestUrl = new FHIRBoolean($encodeRequestUrl);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $label
     * @return static
     */
    public function setLabel($label = null)
    {
        if (null === $label) {
            $this->label = null;
            return $this;
        }
        if ($label instanceof FHIRString) {
            $this->label = $label;
            return $this;
        }
        $this->label = new FHIRString($label);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The server where the request message originates from. Must be one of the server
     * numbers listed in TestScript.origin section.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The server where the request message originates from. Must be one of the server
     * numbers listed in TestScript.origin section.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $origin
     * @return static
     */
    public function setOrigin($origin = null)
    {
        if (null === $origin) {
            $this->origin = null;
            return $this;
        }
        if ($origin instanceof FHIRInteger) {
            $this->origin = $origin;
            return $this;
        }
        $this->origin = new FHIRInteger($origin);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Path plus parameters after [type]. Used to set parts of the request URL
     * explicitly.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Path plus parameters after [type]. Used to set parts of the request URL
     * explicitly.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $params
     * @return static
     */
    public function setParams($params = null)
    {
        if (null === $params) {
            $this->params = null;
            return $this;
        }
        if ($params instanceof FHIRString) {
            $this->params = $params;
            return $this;
        }
        $this->params = new FHIRString($params);
        return $this;
    }

    /**
     * A structured set of tests against a FHIR server implementation to determine
     * compliance against the FHIR specification.
     *
     * Header elements would be used to set HTTP headers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader[]
     */
    public function getRequestHeader()
    {
        return $this->requestHeader;
    }

    /**
     * A structured set of tests against a FHIR server implementation to determine
     * compliance against the FHIR specification.
     *
     * Header elements would be used to set HTTP headers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader $requestHeader
     * @return static
     */
    public function addRequestHeader(FHIRTestScriptRequestHeader $requestHeader = null)
    {
        $this->requestHeader[] = $requestHeader;
        return $this;
    }

    /**
     * A structured set of tests against a FHIR server implementation to determine
     * compliance against the FHIR specification.
     *
     * Header elements would be used to set HTTP headers.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader[] $requestHeader
     * @return static
     */
    public function setRequestHeader(array $requestHeader = [])
    {
        $this->requestHeader = [];
        if ([] === $requestHeader) {
            return $this;
        }
        foreach($requestHeader as $v) {
            if ($v instanceof FHIRTestScriptRequestHeader) {
                $this->addRequestHeader($v);
            } else {
                $this->addRequestHeader(new FHIRTestScriptRequestHeader($v));
            }
        }
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The fixture id (maybe new) to map to the request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The fixture id (maybe new) to map to the request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $requestId
     * @return static
     */
    public function setRequestId($requestId = null)
    {
        if (null === $requestId) {
            $this->requestId = null;
            return $this;
        }
        if ($requestId instanceof FHIRId) {
            $this->requestId = $requestId;
            return $this;
        }
        $this->requestId = new FHIRId($requestId);
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of the resource. See http://build.fhir.org/resourcelist.html.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFHIRDefinedType
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of the resource. See http://build.fhir.org/resourcelist.html.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFHIRDefinedType $resource
     * @return static
     */
    public function setResource(FHIRFHIRDefinedType $resource = null)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The fixture id (maybe new) to map to the response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getResponseId()
    {
        return $this->responseId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The fixture id (maybe new) to map to the response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $responseId
     * @return static
     */
    public function setResponseId($responseId = null)
    {
        if (null === $responseId) {
            $this->responseId = null;
            return $this;
        }
        if ($responseId instanceof FHIRId) {
            $this->responseId = $responseId;
            return $this;
        }
        $this->responseId = new FHIRId($responseId);
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The id of the fixture used as the body of a PUT or POST request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The id of the fixture used as the body of a PUT or POST request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $sourceId
     * @return static
     */
    public function setSourceId($sourceId = null)
    {
        if (null === $sourceId) {
            $this->sourceId = null;
            return $this;
        }
        if ($sourceId instanceof FHIRId) {
            $this->sourceId = $sourceId;
            return $this;
        }
        $this->sourceId = new FHIRId($sourceId);
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Id of fixture used for extracting the [id], [type], and [vid] for GET requests.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getTargetId()
    {
        return $this->targetId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Id of fixture used for extracting the [id], [type], and [vid] for GET requests.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $targetId
     * @return static
     */
    public function setTargetId($targetId = null)
    {
        if (null === $targetId) {
            $this->targetId = null;
            return $this;
        }
        if ($targetId instanceof FHIRId) {
            $this->targetId = $targetId;
            return $this;
        }
        $this->targetId = new FHIRId($targetId);
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Server interaction or operation type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Server interaction or operation type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $type
     * @return static
     */
    public function setType(FHIRCoding $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Complete request URL.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Complete request URL.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $url
     * @return static
     */
    public function setUrl($url = null)
    {
        if (null === $url) {
            $this->url = null;
            return $this;
        }
        if ($url instanceof FHIRString) {
            $this->url = $url;
            return $this;
        }
        $this->url = new FHIRString($url);
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
        if (null !== ($v = $this->getAccept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContentType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTENT_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDestination())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESTINATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEncodeRequestUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCODE_REQUEST_URL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLabel())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LABEL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrigin())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORIGIN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParams())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARAMS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRequestHeader())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REQUEST_HEADER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRequestId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUEST_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResponseId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESPONSE_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSourceId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTargetId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TARGET_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URL] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ACCEPT])) {
            $v = $this->getAccept();
            foreach($validationRules[self::FIELD_ACCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION, self::FIELD_ACCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACCEPT])) {
                        $errs[self::FIELD_ACCEPT] = [];
                    }
                    $errs[self::FIELD_ACCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT_TYPE])) {
            $v = $this->getContentType();
            foreach($validationRules[self::FIELD_CONTENT_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION, self::FIELD_CONTENT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT_TYPE])) {
                        $errs[self::FIELD_CONTENT_TYPE] = [];
                    }
                    $errs[self::FIELD_CONTENT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESTINATION])) {
            $v = $this->getDestination();
            foreach($validationRules[self::FIELD_DESTINATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION, self::FIELD_DESTINATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESTINATION])) {
                        $errs[self::FIELD_DESTINATION] = [];
                    }
                    $errs[self::FIELD_DESTINATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCODE_REQUEST_URL])) {
            $v = $this->getEncodeRequestUrl();
            foreach($validationRules[self::FIELD_ENCODE_REQUEST_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION, self::FIELD_ENCODE_REQUEST_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCODE_REQUEST_URL])) {
                        $errs[self::FIELD_ENCODE_REQUEST_URL] = [];
                    }
                    $errs[self::FIELD_ENCODE_REQUEST_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LABEL])) {
            $v = $this->getLabel();
            foreach($validationRules[self::FIELD_LABEL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION, self::FIELD_LABEL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LABEL])) {
                        $errs[self::FIELD_LABEL] = [];
                    }
                    $errs[self::FIELD_LABEL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORIGIN])) {
            $v = $this->getOrigin();
            foreach($validationRules[self::FIELD_ORIGIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION, self::FIELD_ORIGIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORIGIN])) {
                        $errs[self::FIELD_ORIGIN] = [];
                    }
                    $errs[self::FIELD_ORIGIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARAMS])) {
            $v = $this->getParams();
            foreach($validationRules[self::FIELD_PARAMS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION, self::FIELD_PARAMS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARAMS])) {
                        $errs[self::FIELD_PARAMS] = [];
                    }
                    $errs[self::FIELD_PARAMS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST_HEADER])) {
            $v = $this->getRequestHeader();
            foreach($validationRules[self::FIELD_REQUEST_HEADER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION, self::FIELD_REQUEST_HEADER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST_HEADER])) {
                        $errs[self::FIELD_REQUEST_HEADER] = [];
                    }
                    $errs[self::FIELD_REQUEST_HEADER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST_ID])) {
            $v = $this->getRequestId();
            foreach($validationRules[self::FIELD_REQUEST_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION, self::FIELD_REQUEST_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST_ID])) {
                        $errs[self::FIELD_REQUEST_ID] = [];
                    }
                    $errs[self::FIELD_REQUEST_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESOURCE])) {
            $v = $this->getResource();
            foreach($validationRules[self::FIELD_RESOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION, self::FIELD_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE])) {
                        $errs[self::FIELD_RESOURCE] = [];
                    }
                    $errs[self::FIELD_RESOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESPONSE_ID])) {
            $v = $this->getResponseId();
            foreach($validationRules[self::FIELD_RESPONSE_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION, self::FIELD_RESPONSE_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESPONSE_ID])) {
                        $errs[self::FIELD_RESPONSE_ID] = [];
                    }
                    $errs[self::FIELD_RESPONSE_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_ID])) {
            $v = $this->getSourceId();
            foreach($validationRules[self::FIELD_SOURCE_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION, self::FIELD_SOURCE_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_ID])) {
                        $errs[self::FIELD_SOURCE_ID] = [];
                    }
                    $errs[self::FIELD_SOURCE_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_ID])) {
            $v = $this->getTargetId();
            foreach($validationRules[self::FIELD_TARGET_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION, self::FIELD_TARGET_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_ID])) {
                        $errs[self::FIELD_TARGET_ID] = [];
                    }
                    $errs[self::FIELD_TARGET_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION, self::FIELD_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_URL])) {
                        $errs[self::FIELD_URL] = [];
                    }
                    $errs[self::FIELD_URL][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation
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
                throw new \DomainException(sprintf('FHIRTestScriptOperation::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRTestScriptOperation::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRTestScriptOperation;
        } elseif (!is_object($type) || !($type instanceof FHIRTestScriptOperation)) {
            throw new \RuntimeException(sprintf(
                'FHIRTestScriptOperation::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation or null, %s seen.',
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
        if (isset($children->accept)) {
            $type->setAccept(FHIRContentType::xmlUnserialize($children->accept));
        }
        if (isset($children->contentType)) {
            $type->setContentType(FHIRContentType::xmlUnserialize($children->contentType));
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->description)) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->description);
            } else {
                $type->setDescription((string)$attributes->description);
            }
        }
        if (isset($children->destination)) {
            $type->setDestination(FHIRInteger::xmlUnserialize($children->destination));
        }
        if (isset($attributes->destination)) {
            $pt = $type->getDestination();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->destination);
            } else {
                $type->setDestination((string)$attributes->destination);
            }
        }
        if (isset($children->encodeRequestUrl)) {
            $type->setEncodeRequestUrl(FHIRBoolean::xmlUnserialize($children->encodeRequestUrl));
        }
        if (isset($attributes->encodeRequestUrl)) {
            $pt = $type->getEncodeRequestUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->encodeRequestUrl);
            } else {
                $type->setEncodeRequestUrl((string)$attributes->encodeRequestUrl);
            }
        }
        if (isset($children->label)) {
            $type->setLabel(FHIRString::xmlUnserialize($children->label));
        }
        if (isset($attributes->label)) {
            $pt = $type->getLabel();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->label);
            } else {
                $type->setLabel((string)$attributes->label);
            }
        }
        if (isset($children->origin)) {
            $type->setOrigin(FHIRInteger::xmlUnserialize($children->origin));
        }
        if (isset($attributes->origin)) {
            $pt = $type->getOrigin();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->origin);
            } else {
                $type->setOrigin((string)$attributes->origin);
            }
        }
        if (isset($children->params)) {
            $type->setParams(FHIRString::xmlUnserialize($children->params));
        }
        if (isset($attributes->params)) {
            $pt = $type->getParams();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->params);
            } else {
                $type->setParams((string)$attributes->params);
            }
        }
        if (isset($children->requestHeader)) {
            foreach($children->requestHeader as $child) {
                $type->addRequestHeader(FHIRTestScriptRequestHeader::xmlUnserialize($child));
            }
        }
        if (isset($children->requestId)) {
            $type->setRequestId(FHIRId::xmlUnserialize($children->requestId));
        }
        if (isset($attributes->requestId)) {
            $pt = $type->getRequestId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->requestId);
            } else {
                $type->setRequestId((string)$attributes->requestId);
            }
        }
        if (isset($children->resource)) {
            $type->setResource(FHIRFHIRDefinedType::xmlUnserialize($children->resource));
        }
        if (isset($children->responseId)) {
            $type->setResponseId(FHIRId::xmlUnserialize($children->responseId));
        }
        if (isset($attributes->responseId)) {
            $pt = $type->getResponseId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->responseId);
            } else {
                $type->setResponseId((string)$attributes->responseId);
            }
        }
        if (isset($children->sourceId)) {
            $type->setSourceId(FHIRId::xmlUnserialize($children->sourceId));
        }
        if (isset($attributes->sourceId)) {
            $pt = $type->getSourceId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->sourceId);
            } else {
                $type->setSourceId((string)$attributes->sourceId);
            }
        }
        if (isset($children->targetId)) {
            $type->setTargetId(FHIRId::xmlUnserialize($children->targetId));
        }
        if (isset($attributes->targetId)) {
            $pt = $type->getTargetId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->targetId);
            } else {
                $type->setTargetId((string)$attributes->targetId);
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRCoding::xmlUnserialize($children->type));
        }
        if (isset($children->url)) {
            $type->setUrl(FHIRString::xmlUnserialize($children->url));
        }
        if (isset($attributes->url)) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->url);
            } else {
                $type->setUrl((string)$attributes->url);
            }
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
        if (null !== ($v = $this->getAccept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getContentType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTENT_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDestination())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESTINATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEncodeRequestUrl())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENCODE_REQUEST_URL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLabel())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LABEL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOrigin())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORIGIN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getParams())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PARAMS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getRequestHeader())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST_HEADER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getRequestId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getResource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESOURCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getResponseId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESPONSE_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSourceId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTargetId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUrl())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_URL, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAccept())) {
            $a[self::FIELD_ACCEPT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRContentType::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRContentType::FIELD_VALUE]);
                $a[self::FIELD_ACCEPT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getContentType())) {
            $a[self::FIELD_CONTENT_TYPE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRContentType::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRContentType::FIELD_VALUE]);
                $a[self::FIELD_CONTENT_TYPE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDestination())) {
            $a[self::FIELD_DESTINATION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_DESTINATION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getEncodeRequestUrl())) {
            $a[self::FIELD_ENCODE_REQUEST_URL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_ENCODE_REQUEST_URL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getLabel())) {
            $a[self::FIELD_LABEL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_LABEL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getOrigin())) {
            $a[self::FIELD_ORIGIN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_ORIGIN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getParams())) {
            $a[self::FIELD_PARAMS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PARAMS_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getRequestHeader())) {
            $a[self::FIELD_REQUEST_HEADER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REQUEST_HEADER][] = $v;
            }
        }
        if (null !== ($v = $this->getRequestId())) {
            $a[self::FIELD_REQUEST_ID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRId::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRId::FIELD_VALUE]);
                $a[self::FIELD_REQUEST_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getResource())) {
            $a[self::FIELD_RESOURCE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRFHIRDefinedType::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRFHIRDefinedType::FIELD_VALUE]);
                $a[self::FIELD_RESOURCE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getResponseId())) {
            $a[self::FIELD_RESPONSE_ID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRId::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRId::FIELD_VALUE]);
                $a[self::FIELD_RESPONSE_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSourceId())) {
            $a[self::FIELD_SOURCE_ID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRId::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRId::FIELD_VALUE]);
                $a[self::FIELD_SOURCE_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getTargetId())) {
            $a[self::FIELD_TARGET_ID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRId::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRId::FIELD_VALUE]);
                $a[self::FIELD_TARGET_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_URL_EXT] = $enc;
            }
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