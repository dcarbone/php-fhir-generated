<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:13+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContentType;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * TestScript is a resource that specifies a suite of tests against a FHIR server
 * implementation to determine compliance against the FHIR specification.
 *
 * Class FHIRTestScriptOperation
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript
 */
class FHIRTestScriptOperation extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION;
    const FIELD_TYPE = 'type';
    const FIELD_RESOURCE = 'resource';
    const FIELD_RESOURCE_EXT = '_resource';
    const FIELD_LABEL = 'label';
    const FIELD_LABEL_EXT = '_label';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_ACCEPT = 'accept';
    const FIELD_ACCEPT_EXT = '_accept';
    const FIELD_CONTENT_TYPE = 'contentType';
    const FIELD_CONTENT_TYPE_EXT = '_contentType';
    const FIELD_DESTINATION = 'destination';
    const FIELD_DESTINATION_EXT = '_destination';
    const FIELD_ENCODE_REQUEST_URL = 'encodeRequestUrl';
    const FIELD_ENCODE_REQUEST_URL_EXT = '_encodeRequestUrl';
    const FIELD_PARAMS = 'params';
    const FIELD_PARAMS_EXT = '_params';
    const FIELD_REQUEST_HEADER = 'requestHeader';
    const FIELD_RESPONSE_ID = 'responseId';
    const FIELD_RESPONSE_ID_EXT = '_responseId';
    const FIELD_SOURCE_ID = 'sourceId';
    const FIELD_SOURCE_ID_EXT = '_sourceId';
    const FIELD_TARGET_ID = 'targetId';
    const FIELD_TARGET_ID_EXT = '_targetId';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';

    /** @var string */
    private $_xmlns = '';

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Server interaction or operation type.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    protected $type = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the resource. See http://hl7-fhir.github.io/resourcelist.html.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    protected $resource = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $label = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The description would be used by test engines for tracking and reporting
     * purposes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * The content or mime type.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The content-type or mime-type to use for RESTful operation in the 'Accept'
     * header.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContentType
     */
    protected $accept = null;

    /**
     * The content or mime type.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The content-type or mime-type to use for RESTful operation in the 'Content-Type'
     * header.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContentType
     */
    protected $contentType = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Which server to perform the operation on.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger
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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $encodeRequestUrl = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Path plus parameters after [type]. Used to set parts of the request URL
     * explicitly.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $params = null;

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * Header elements would be used to set HTTP headers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader[]
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
     * The fixture id (maybe new) to map to the response.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId
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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId
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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId
     */
    protected $targetId = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Complete request URL.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
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
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCoding) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCoding($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_RESOURCE]) || isset($data[self::FIELD_RESOURCE_EXT])) {
            $value = isset($data[self::FIELD_RESOURCE]) ? $data[self::FIELD_RESOURCE] : null;
            $ext = (isset($data[self::FIELD_RESOURCE_EXT]) && is_array($data[self::FIELD_RESOURCE_EXT])) ? $ext = $data[self::FIELD_RESOURCE_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setResource($value);
                } else if (is_array($value)) {
                    $this->setResource(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setResource(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setResource(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_LABEL]) || isset($data[self::FIELD_LABEL_EXT])) {
            $value = isset($data[self::FIELD_LABEL]) ? $data[self::FIELD_LABEL] : null;
            $ext = (isset($data[self::FIELD_LABEL_EXT]) && is_array($data[self::FIELD_LABEL_EXT])) ? $ext = $data[self::FIELD_LABEL_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setLabel($value);
                } else if (is_array($value)) {
                    $this->setLabel(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setLabel(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLabel(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            $value = isset($data[self::FIELD_DESCRIPTION]) ? $data[self::FIELD_DESCRIPTION] : null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $ext = $data[self::FIELD_DESCRIPTION_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_ACCEPT]) || isset($data[self::FIELD_ACCEPT_EXT])) {
            $value = isset($data[self::FIELD_ACCEPT]) ? $data[self::FIELD_ACCEPT] : null;
            $ext = (isset($data[self::FIELD_ACCEPT_EXT]) && is_array($data[self::FIELD_ACCEPT_EXT])) ? $ext = $data[self::FIELD_ACCEPT_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRContentType) {
                    $this->setAccept($value);
                } else if (is_array($value)) {
                    $this->setAccept(new FHIRContentType(array_merge($ext, $value)));
                } else {
                    $this->setAccept(new FHIRContentType([FHIRContentType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAccept(new FHIRContentType($ext));
            }
        }
        if (isset($data[self::FIELD_CONTENT_TYPE]) || isset($data[self::FIELD_CONTENT_TYPE_EXT])) {
            $value = isset($data[self::FIELD_CONTENT_TYPE]) ? $data[self::FIELD_CONTENT_TYPE] : null;
            $ext = (isset($data[self::FIELD_CONTENT_TYPE_EXT]) && is_array($data[self::FIELD_CONTENT_TYPE_EXT])) ? $ext = $data[self::FIELD_CONTENT_TYPE_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRContentType) {
                    $this->setContentType($value);
                } else if (is_array($value)) {
                    $this->setContentType(new FHIRContentType(array_merge($ext, $value)));
                } else {
                    $this->setContentType(new FHIRContentType([FHIRContentType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setContentType(new FHIRContentType($ext));
            }
        }
        if (isset($data[self::FIELD_DESTINATION]) || isset($data[self::FIELD_DESTINATION_EXT])) {
            $value = isset($data[self::FIELD_DESTINATION]) ? $data[self::FIELD_DESTINATION] : null;
            $ext = (isset($data[self::FIELD_DESTINATION_EXT]) && is_array($data[self::FIELD_DESTINATION_EXT])) ? $ext = $data[self::FIELD_DESTINATION_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setDestination($value);
                } else if (is_array($value)) {
                    $this->setDestination(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setDestination(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDestination(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_ENCODE_REQUEST_URL]) || isset($data[self::FIELD_ENCODE_REQUEST_URL_EXT])) {
            $value = isset($data[self::FIELD_ENCODE_REQUEST_URL]) ? $data[self::FIELD_ENCODE_REQUEST_URL] : null;
            $ext = (isset($data[self::FIELD_ENCODE_REQUEST_URL_EXT]) && is_array($data[self::FIELD_ENCODE_REQUEST_URL_EXT])) ? $ext = $data[self::FIELD_ENCODE_REQUEST_URL_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setEncodeRequestUrl($value);
                } else if (is_array($value)) {
                    $this->setEncodeRequestUrl(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setEncodeRequestUrl(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setEncodeRequestUrl(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_PARAMS]) || isset($data[self::FIELD_PARAMS_EXT])) {
            $value = isset($data[self::FIELD_PARAMS]) ? $data[self::FIELD_PARAMS] : null;
            $ext = (isset($data[self::FIELD_PARAMS_EXT]) && is_array($data[self::FIELD_PARAMS_EXT])) ? $ext = $data[self::FIELD_PARAMS_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setParams($value);
                } else if (is_array($value)) {
                    $this->setParams(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setParams(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
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
            } elseif ($data[self::FIELD_REQUEST_HEADER] instanceof FHIRTestScriptRequestHeader) {
                $this->addRequestHeader($data[self::FIELD_REQUEST_HEADER]);
            } else {
                $this->addRequestHeader(new FHIRTestScriptRequestHeader($data[self::FIELD_REQUEST_HEADER]));
            }
        }
        if (isset($data[self::FIELD_RESPONSE_ID]) || isset($data[self::FIELD_RESPONSE_ID_EXT])) {
            $value = isset($data[self::FIELD_RESPONSE_ID]) ? $data[self::FIELD_RESPONSE_ID] : null;
            $ext = (isset($data[self::FIELD_RESPONSE_ID_EXT]) && is_array($data[self::FIELD_RESPONSE_ID_EXT])) ? $ext = $data[self::FIELD_RESPONSE_ID_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setResponseId($value);
                } else if (is_array($value)) {
                    $this->setResponseId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setResponseId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setResponseId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_SOURCE_ID]) || isset($data[self::FIELD_SOURCE_ID_EXT])) {
            $value = isset($data[self::FIELD_SOURCE_ID]) ? $data[self::FIELD_SOURCE_ID] : null;
            $ext = (isset($data[self::FIELD_SOURCE_ID_EXT]) && is_array($data[self::FIELD_SOURCE_ID_EXT])) ? $ext = $data[self::FIELD_SOURCE_ID_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setSourceId($value);
                } else if (is_array($value)) {
                    $this->setSourceId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setSourceId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSourceId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_TARGET_ID]) || isset($data[self::FIELD_TARGET_ID_EXT])) {
            $value = isset($data[self::FIELD_TARGET_ID]) ? $data[self::FIELD_TARGET_ID] : null;
            $ext = (isset($data[self::FIELD_TARGET_ID_EXT]) && is_array($data[self::FIELD_TARGET_ID_EXT])) ? $ext = $data[self::FIELD_TARGET_ID_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setTargetId($value);
                } else if (is_array($value)) {
                    $this->setTargetId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setTargetId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTargetId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_URL]) || isset($data[self::FIELD_URL_EXT])) {
            $value = isset($data[self::FIELD_URL]) ? $data[self::FIELD_URL] : null;
            $ext = (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT])) ? $ext = $data[self::FIELD_URL_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setUrl($value);
                } else if (is_array($value)) {
                    $this->setUrl(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setUrl(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
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
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<TestScriptOperation{$xmlns}></TestScriptOperation>";
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Server interaction or operation type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $type
     * @return static
     */
    public function setType(FHIRCoding $type = null)
    {
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the resource. See http://hl7-fhir.github.io/resourcelist.html.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the resource. See http://hl7-fhir.github.io/resourcelist.html.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $resource
     * @return static
     */
    public function setResource($resource = null)
    {
        if (null !== $resource && !($resource instanceof FHIRCode)) {
            $resource = new FHIRCode($resource);
        }
        $this->_trackValueSet($this->resource, $resource);
        $this->resource = $resource;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $label
     * @return static
     */
    public function setLabel($label = null)
    {
        if (null !== $label && !($label instanceof FHIRString)) {
            $label = new FHIRString($label);
        }
        $this->_trackValueSet($this->label, $label);
        $this->label = $label;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription($description = null)
    {
        if (null !== $description && !($description instanceof FHIRString)) {
            $description = new FHIRString($description);
        }
        $this->_trackValueSet($this->description, $description);
        $this->description = $description;
        return $this;
    }

    /**
     * The content or mime type.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The content-type or mime-type to use for RESTful operation in the 'Accept'
     * header.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContentType
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContentType $accept
     * @return static
     */
    public function setAccept(FHIRContentType $accept = null)
    {
        $this->_trackValueSet($this->accept, $accept);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContentType
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContentType $contentType
     * @return static
     */
    public function setContentType(FHIRContentType $contentType = null)
    {
        $this->_trackValueSet($this->contentType, $contentType);
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Which server to perform the operation on.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger
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
     * Which server to perform the operation on.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger $destination
     * @return static
     */
    public function setDestination($destination = null)
    {
        if (null !== $destination && !($destination instanceof FHIRInteger)) {
            $destination = new FHIRInteger($destination);
        }
        $this->_trackValueSet($this->destination, $destination);
        $this->destination = $destination;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $encodeRequestUrl
     * @return static
     */
    public function setEncodeRequestUrl($encodeRequestUrl = null)
    {
        if (null !== $encodeRequestUrl && !($encodeRequestUrl instanceof FHIRBoolean)) {
            $encodeRequestUrl = new FHIRBoolean($encodeRequestUrl);
        }
        $this->_trackValueSet($this->encodeRequestUrl, $encodeRequestUrl);
        $this->encodeRequestUrl = $encodeRequestUrl;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $params
     * @return static
     */
    public function setParams($params = null)
    {
        if (null !== $params && !($params instanceof FHIRString)) {
            $params = new FHIRString($params);
        }
        $this->_trackValueSet($this->params, $params);
        $this->params = $params;
        return $this;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * Header elements would be used to set HTTP headers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader[]
     */
    public function getRequestHeader()
    {
        return $this->requestHeader;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * Header elements would be used to set HTTP headers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader $requestHeader
     * @return static
     */
    public function addRequestHeader(FHIRTestScriptRequestHeader $requestHeader = null)
    {
        $this->_trackValueAdded();
        $this->requestHeader[] = $requestHeader;
        return $this;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * Header elements would be used to set HTTP headers.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader[] $requestHeader
     * @return static
     */
    public function setRequestHeader(array $requestHeader = [])
    {
        if ([] !== $this->requestHeader) {
            $this->_trackValuesRemoved(count($this->requestHeader));
            $this->requestHeader = [];
        }
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
     * The fixture id (maybe new) to map to the response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId $responseId
     * @return static
     */
    public function setResponseId($responseId = null)
    {
        if (null !== $responseId && !($responseId instanceof FHIRId)) {
            $responseId = new FHIRId($responseId);
        }
        $this->_trackValueSet($this->responseId, $responseId);
        $this->responseId = $responseId;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId $sourceId
     * @return static
     */
    public function setSourceId($sourceId = null)
    {
        if (null !== $sourceId && !($sourceId instanceof FHIRId)) {
            $sourceId = new FHIRId($sourceId);
        }
        $this->_trackValueSet($this->sourceId, $sourceId);
        $this->sourceId = $sourceId;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId $targetId
     * @return static
     */
    public function setTargetId($targetId = null)
    {
        if (null !== $targetId && !($targetId instanceof FHIRId)) {
            $targetId = new FHIRId($targetId);
        }
        $this->_trackValueSet($this->targetId, $targetId);
        $this->targetId = $targetId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Complete request URL.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $url
     * @return static
     */
    public function setUrl($url = null)
    {
        if (null !== $url && !($url instanceof FHIRString)) {
            $url = new FHIRString($url);
        }
        $this->_trackValueSet($this->url, $url);
        $this->url = $url;
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLabel())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LABEL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
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
        if (null !== ($v = $this->getUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URL] = $fieldErrs;
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
     * @param null|string|\DOMElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            $dom->loadXML($element, $libxmlOpts);
            if (false === $dom) {
                throw new \DomainException(sprintf('FHIRTestScriptOperation::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRTestScriptOperation::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRTestScriptOperation(null);
        } elseif (!is_object($type) || !($type instanceof FHIRTestScriptOperation)) {
            throw new \RuntimeException(sprintf(
                'FHIRTestScriptOperation::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_RESOURCE === $n->nodeName) {
                $type->setResource(FHIRCode::xmlUnserialize($n));
            } elseif (self::FIELD_LABEL === $n->nodeName) {
                $type->setLabel(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
                $type->setDescription(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_ACCEPT === $n->nodeName) {
                $type->setAccept(FHIRContentType::xmlUnserialize($n));
            } elseif (self::FIELD_CONTENT_TYPE === $n->nodeName) {
                $type->setContentType(FHIRContentType::xmlUnserialize($n));
            } elseif (self::FIELD_DESTINATION === $n->nodeName) {
                $type->setDestination(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_ENCODE_REQUEST_URL === $n->nodeName) {
                $type->setEncodeRequestUrl(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_PARAMS === $n->nodeName) {
                $type->setParams(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_REQUEST_HEADER === $n->nodeName) {
                $type->addRequestHeader(FHIRTestScriptRequestHeader::xmlUnserialize($n));
            } elseif (self::FIELD_RESPONSE_ID === $n->nodeName) {
                $type->setResponseId(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_SOURCE_ID === $n->nodeName) {
                $type->setSourceId(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_TARGET_ID === $n->nodeName) {
                $type->setTargetId(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_URL === $n->nodeName) {
                $type->setUrl(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_RESOURCE);
        if (null !== $n) {
            $pt = $type->getResource();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setResource($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LABEL);
        if (null !== $n) {
            $pt = $type->getLabel();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLabel($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DESCRIPTION);
        if (null !== $n) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDescription($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DESTINATION);
        if (null !== $n) {
            $pt = $type->getDestination();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDestination($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ENCODE_REQUEST_URL);
        if (null !== $n) {
            $pt = $type->getEncodeRequestUrl();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setEncodeRequestUrl($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PARAMS);
        if (null !== $n) {
            $pt = $type->getParams();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setParams($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_RESPONSE_ID);
        if (null !== $n) {
            $pt = $type->getResponseId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setResponseId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SOURCE_ID);
        if (null !== $n) {
            $pt = $type->getSourceId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSourceId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_TARGET_ID);
        if (null !== $n) {
            $pt = $type->getTargetId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setTargetId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_URL);
        if (null !== $n) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setUrl($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ID);
        if (null !== $n) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setId($n->nodeValue);
            }
        }
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getResource())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RESOURCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLabel())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LABEL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAccept())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ACCEPT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getContentType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONTENT_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDestination())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESTINATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getEncodeRequestUrl())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ENCODE_REQUEST_URL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getParams())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PARAMS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getRequestHeader())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REQUEST_HEADER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getResponseId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RESPONSE_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSourceId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SOURCE_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getTargetId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TARGET_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getUrl())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_URL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        return $element;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getResource())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_RESOURCE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRCode::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_RESOURCE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getLabel())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_LABEL] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_LABEL_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DESCRIPTION] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_DESCRIPTION_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getAccept())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_ACCEPT] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRContentType::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_ACCEPT_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getContentType())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_CONTENT_TYPE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRContentType::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_CONTENT_TYPE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDestination())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DESTINATION] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRInteger::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_DESTINATION_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getEncodeRequestUrl())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_ENCODE_REQUEST_URL] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRBoolean::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_ENCODE_REQUEST_URL_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getParams())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PARAMS] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_PARAMS_EXT] = $ext;
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
        if (null !== ($v = $this->getResponseId())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_RESPONSE_ID] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRId::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_RESPONSE_ID_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getSourceId())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_SOURCE_ID] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRId::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_SOURCE_ID_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getTargetId())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_TARGET_ID] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRId::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_TARGET_ID_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_URL] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_URL_EXT] = $ext;
            }
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