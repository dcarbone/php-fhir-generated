<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 10th, 2019 18:12+0000
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAssertionDirectionType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAssertionOperatorType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAssertionResponseTypes;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContentType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFHIRDefinedType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTestScriptRequestMethodCode;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A structured set of tests against a FHIR server implementation to determine
 * compliance against the FHIR specification.
 *
 * Class FHIRTestScriptAssert
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript
 */
class FHIRTestScriptAssert extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_COMPARE_TO_SOURCE_EXPRESSION = 'compareToSourceExpression';
    const FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT = '_compareToSourceExpression';
    const FIELD_COMPARE_TO_SOURCE_ID = 'compareToSourceId';
    const FIELD_COMPARE_TO_SOURCE_ID_EXT = '_compareToSourceId';
    const FIELD_COMPARE_TO_SOURCE_PATH = 'compareToSourcePath';
    const FIELD_COMPARE_TO_SOURCE_PATH_EXT = '_compareToSourcePath';
    const FIELD_CONTENT_TYPE = 'contentType';
    const FIELD_CONTENT_TYPE_EXT = '_contentType';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DIRECTION = 'direction';
    const FIELD_DIRECTION_EXT = '_direction';
    const FIELD_EXPRESSION = 'expression';
    const FIELD_EXPRESSION_EXT = '_expression';
    const FIELD_HEADER_FIELD = 'headerField';
    const FIELD_HEADER_FIELD_EXT = '_headerField';
    const FIELD_LABEL = 'label';
    const FIELD_LABEL_EXT = '_label';
    const FIELD_MINIMUM_ID = 'minimumId';
    const FIELD_MINIMUM_ID_EXT = '_minimumId';
    const FIELD_NAVIGATION_LINKS = 'navigationLinks';
    const FIELD_NAVIGATION_LINKS_EXT = '_navigationLinks';
    const FIELD_OPERATOR = 'operator';
    const FIELD_OPERATOR_EXT = '_operator';
    const FIELD_PATH = 'path';
    const FIELD_PATH_EXT = '_path';
    const FIELD_REQUEST_METHOD = 'requestMethod';
    const FIELD_REQUEST_METHOD_EXT = '_requestMethod';
    const FIELD_REQUEST_URL = 'requestURL';
    const FIELD_REQUEST_URL_EXT = '_requestURL';
    const FIELD_RESOURCE = 'resource';
    const FIELD_RESOURCE_EXT = '_resource';
    const FIELD_RESPONSE = 'response';
    const FIELD_RESPONSE_EXT = '_response';
    const FIELD_RESPONSE_CODE = 'responseCode';
    const FIELD_RESPONSE_CODE_EXT = '_responseCode';
    const FIELD_RULE = 'rule';
    const FIELD_RULESET = 'ruleset';
    const FIELD_SOURCE_ID = 'sourceId';
    const FIELD_SOURCE_ID_EXT = '_sourceId';
    const FIELD_VALIDATE_PROFILE_ID = 'validateProfileId';
    const FIELD_VALIDATE_PROFILE_ID_EXT = '_validateProfileId';
    const FIELD_VALUE = 'value';
    const FIELD_VALUE_EXT = '_value';
    const FIELD_WARNING_ONLY = 'warningOnly';
    const FIELD_WARNING_ONLY_EXT = '_warningOnly';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The fluentpath expression to evaluate against the source fixture. When
     * compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $compareToSourceExpression = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the source fixture used as the contents to be evaluated by either the
     * "source/expression" or "sourceId/path" definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $compareToSourceId = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * XPath or JSONPath expression to evaluate against the source fixture. When
     * compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $compareToSourcePath = null;

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
     * The type of direction to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The direction to use for the assertion.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAssertionDirectionType
     */
    protected $direction = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The fluentpath expression to be evaluated against the request or response
     * message contents - HTTP headers and payload.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $expression = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The HTTP header field name e.g. 'Location'.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $headerField = null;

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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The ID of a fixture. Asserts that the response contains at a minimum the fixture
     * specified by minimumId.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $minimumId = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution performs validation on the bundle navigation
     * links.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $navigationLinks = null;

    /**
     * The type of operator to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The operator type defines the conditional behavior of the assert. If not
     * defined, the default is equals.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAssertionOperatorType
     */
    protected $operator = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The XPath or JSONPath expression to be evaluated against the fixture
     * representing the response received from server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $path = null;

    /**
     * The allowable request method or HTTP operation codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The request method or HTTP operation code to compare against that used by the
     * client system under test.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTestScriptRequestMethodCode
     */
    protected $requestMethod = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to use in a comparison against the request URL path string.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $requestURL = null;

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of the resource. See http://build.fhir.org/resourcelist.html.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFHIRDefinedType
     */
    protected $resource = null;

    /**
     * The type of response code to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * okay | created | noContent | notModified | bad | forbidden | notFound |
     * methodNotAllowed | conflict | gone | preconditionFailed | unprocessable.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAssertionResponseTypes
     */
    protected $response = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the HTTP response code to be tested.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $responseCode = null;

    /**
     * A structured set of tests against a FHIR server implementation to determine
     * compliance against the FHIR specification.
     *
     * The TestScript.rule this assert will evaluate.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRule2
     */
    protected $rule = null;

    /**
     * A structured set of tests against a FHIR server implementation to determine
     * compliance against the FHIR specification.
     *
     * The TestScript.ruleset this assert will evaluate.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRuleset1
     */
    protected $ruleset = null;

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Fixture to evaluate the XPath/JSONPath expression or the headerField against.
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
     * The ID of the Profile to validate against.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    protected $validateProfileId = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to compare to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $value = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution will produce a warning only on error for this
     * assert.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $warningOnly = null;

    /**
     * FHIRTestScriptAssert Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (is_scalar($data)) {
            $this->setValue(new FHIRString($data));
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptAssert::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION])) {
            $ext = (isset($data[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT]) && is_array($data[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT]))
                ? $data[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT]
                : null;
            if ($data[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION] instanceof FHIRString) {
                $this->setCompareToSourceExpression($data[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION]);
            } elseif ($ext && is_scalar($data[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION])) {
                $this->setCompareToSourceExpression(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION]] + $ext));
            } else {
                $this->setCompareToSourceExpression(new FHIRString($data[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION]));
            }
        }
        if (isset($data[self::FIELD_COMPARE_TO_SOURCE_ID])) {
            $ext = (isset($data[self::FIELD_COMPARE_TO_SOURCE_ID_EXT]) && is_array($data[self::FIELD_COMPARE_TO_SOURCE_ID_EXT]))
                ? $data[self::FIELD_COMPARE_TO_SOURCE_ID_EXT]
                : null;
            if ($data[self::FIELD_COMPARE_TO_SOURCE_ID] instanceof FHIRString) {
                $this->setCompareToSourceId($data[self::FIELD_COMPARE_TO_SOURCE_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_COMPARE_TO_SOURCE_ID])) {
                $this->setCompareToSourceId(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_COMPARE_TO_SOURCE_ID]] + $ext));
            } else {
                $this->setCompareToSourceId(new FHIRString($data[self::FIELD_COMPARE_TO_SOURCE_ID]));
            }
        }
        if (isset($data[self::FIELD_COMPARE_TO_SOURCE_PATH])) {
            $ext = (isset($data[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT]) && is_array($data[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT]))
                ? $data[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT]
                : null;
            if ($data[self::FIELD_COMPARE_TO_SOURCE_PATH] instanceof FHIRString) {
                $this->setCompareToSourcePath($data[self::FIELD_COMPARE_TO_SOURCE_PATH]);
            } elseif ($ext && is_scalar($data[self::FIELD_COMPARE_TO_SOURCE_PATH])) {
                $this->setCompareToSourcePath(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_COMPARE_TO_SOURCE_PATH]] + $ext));
            } else {
                $this->setCompareToSourcePath(new FHIRString($data[self::FIELD_COMPARE_TO_SOURCE_PATH]));
            }
        }
        if (isset($data[self::FIELD_CONTENT_TYPE])) {
            $ext = (isset($data[self::FIELD_CONTENT_TYPE_EXT]) && is_array($data[self::FIELD_CONTENT_TYPE_EXT]))
                ? $data[self::FIELD_CONTENT_TYPE_EXT]
                : null;
            if ($data[self::FIELD_CONTENT_TYPE] instanceof FHIRContentType) {
                $this->setContentType($data[self::FIELD_CONTENT_TYPE]);
            } elseif ($ext && is_scalar($data[self::FIELD_CONTENT_TYPE])) {
                $this->setContentType(new FHIRContentType([FHIRContentType::FIELD_VALUE => $data[self::FIELD_CONTENT_TYPE]] + $ext));
            } else {
                $this->setContentType(new FHIRContentType($data[self::FIELD_CONTENT_TYPE]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESCRIPTION])) {
                $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_DIRECTION])) {
            $ext = (isset($data[self::FIELD_DIRECTION_EXT]) && is_array($data[self::FIELD_DIRECTION_EXT]))
                ? $data[self::FIELD_DIRECTION_EXT]
                : null;
            if ($data[self::FIELD_DIRECTION] instanceof FHIRAssertionDirectionType) {
                $this->setDirection($data[self::FIELD_DIRECTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DIRECTION])) {
                $this->setDirection(new FHIRAssertionDirectionType([FHIRAssertionDirectionType::FIELD_VALUE => $data[self::FIELD_DIRECTION]] + $ext));
            } else {
                $this->setDirection(new FHIRAssertionDirectionType($data[self::FIELD_DIRECTION]));
            }
        }
        if (isset($data[self::FIELD_EXPRESSION])) {
            $ext = (isset($data[self::FIELD_EXPRESSION_EXT]) && is_array($data[self::FIELD_EXPRESSION_EXT]))
                ? $data[self::FIELD_EXPRESSION_EXT]
                : null;
            if ($data[self::FIELD_EXPRESSION] instanceof FHIRString) {
                $this->setExpression($data[self::FIELD_EXPRESSION]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXPRESSION])) {
                $this->setExpression(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_EXPRESSION]] + $ext));
            } else {
                $this->setExpression(new FHIRString($data[self::FIELD_EXPRESSION]));
            }
        }
        if (isset($data[self::FIELD_HEADER_FIELD])) {
            $ext = (isset($data[self::FIELD_HEADER_FIELD_EXT]) && is_array($data[self::FIELD_HEADER_FIELD_EXT]))
                ? $data[self::FIELD_HEADER_FIELD_EXT]
                : null;
            if ($data[self::FIELD_HEADER_FIELD] instanceof FHIRString) {
                $this->setHeaderField($data[self::FIELD_HEADER_FIELD]);
            } elseif ($ext && is_scalar($data[self::FIELD_HEADER_FIELD])) {
                $this->setHeaderField(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_HEADER_FIELD]] + $ext));
            } else {
                $this->setHeaderField(new FHIRString($data[self::FIELD_HEADER_FIELD]));
            }
        }
        if (isset($data[self::FIELD_LABEL])) {
            $ext = (isset($data[self::FIELD_LABEL_EXT]) && is_array($data[self::FIELD_LABEL_EXT]))
                ? $data[self::FIELD_LABEL_EXT]
                : null;
            if ($data[self::FIELD_LABEL] instanceof FHIRString) {
                $this->setLabel($data[self::FIELD_LABEL]);
            } elseif ($ext && is_scalar($data[self::FIELD_LABEL])) {
                $this->setLabel(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_LABEL]] + $ext));
            } else {
                $this->setLabel(new FHIRString($data[self::FIELD_LABEL]));
            }
        }
        if (isset($data[self::FIELD_MINIMUM_ID])) {
            $ext = (isset($data[self::FIELD_MINIMUM_ID_EXT]) && is_array($data[self::FIELD_MINIMUM_ID_EXT]))
                ? $data[self::FIELD_MINIMUM_ID_EXT]
                : null;
            if ($data[self::FIELD_MINIMUM_ID] instanceof FHIRString) {
                $this->setMinimumId($data[self::FIELD_MINIMUM_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_MINIMUM_ID])) {
                $this->setMinimumId(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_MINIMUM_ID]] + $ext));
            } else {
                $this->setMinimumId(new FHIRString($data[self::FIELD_MINIMUM_ID]));
            }
        }
        if (isset($data[self::FIELD_NAVIGATION_LINKS])) {
            $ext = (isset($data[self::FIELD_NAVIGATION_LINKS_EXT]) && is_array($data[self::FIELD_NAVIGATION_LINKS_EXT]))
                ? $data[self::FIELD_NAVIGATION_LINKS_EXT]
                : null;
            if ($data[self::FIELD_NAVIGATION_LINKS] instanceof FHIRBoolean) {
                $this->setNavigationLinks($data[self::FIELD_NAVIGATION_LINKS]);
            } elseif ($ext && is_scalar($data[self::FIELD_NAVIGATION_LINKS])) {
                $this->setNavigationLinks(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_NAVIGATION_LINKS]] + $ext));
            } else {
                $this->setNavigationLinks(new FHIRBoolean($data[self::FIELD_NAVIGATION_LINKS]));
            }
        }
        if (isset($data[self::FIELD_OPERATOR])) {
            $ext = (isset($data[self::FIELD_OPERATOR_EXT]) && is_array($data[self::FIELD_OPERATOR_EXT]))
                ? $data[self::FIELD_OPERATOR_EXT]
                : null;
            if ($data[self::FIELD_OPERATOR] instanceof FHIRAssertionOperatorType) {
                $this->setOperator($data[self::FIELD_OPERATOR]);
            } elseif ($ext && is_scalar($data[self::FIELD_OPERATOR])) {
                $this->setOperator(new FHIRAssertionOperatorType([FHIRAssertionOperatorType::FIELD_VALUE => $data[self::FIELD_OPERATOR]] + $ext));
            } else {
                $this->setOperator(new FHIRAssertionOperatorType($data[self::FIELD_OPERATOR]));
            }
        }
        if (isset($data[self::FIELD_PATH])) {
            $ext = (isset($data[self::FIELD_PATH_EXT]) && is_array($data[self::FIELD_PATH_EXT]))
                ? $data[self::FIELD_PATH_EXT]
                : null;
            if ($data[self::FIELD_PATH] instanceof FHIRString) {
                $this->setPath($data[self::FIELD_PATH]);
            } elseif ($ext && is_scalar($data[self::FIELD_PATH])) {
                $this->setPath(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PATH]] + $ext));
            } else {
                $this->setPath(new FHIRString($data[self::FIELD_PATH]));
            }
        }
        if (isset($data[self::FIELD_REQUEST_METHOD])) {
            $ext = (isset($data[self::FIELD_REQUEST_METHOD_EXT]) && is_array($data[self::FIELD_REQUEST_METHOD_EXT]))
                ? $data[self::FIELD_REQUEST_METHOD_EXT]
                : null;
            if ($data[self::FIELD_REQUEST_METHOD] instanceof FHIRTestScriptRequestMethodCode) {
                $this->setRequestMethod($data[self::FIELD_REQUEST_METHOD]);
            } elseif ($ext && is_scalar($data[self::FIELD_REQUEST_METHOD])) {
                $this->setRequestMethod(new FHIRTestScriptRequestMethodCode([FHIRTestScriptRequestMethodCode::FIELD_VALUE => $data[self::FIELD_REQUEST_METHOD]] + $ext));
            } else {
                $this->setRequestMethod(new FHIRTestScriptRequestMethodCode($data[self::FIELD_REQUEST_METHOD]));
            }
        }
        if (isset($data[self::FIELD_REQUEST_URL])) {
            $ext = (isset($data[self::FIELD_REQUEST_URL_EXT]) && is_array($data[self::FIELD_REQUEST_URL_EXT]))
                ? $data[self::FIELD_REQUEST_URL_EXT]
                : null;
            if ($data[self::FIELD_REQUEST_URL] instanceof FHIRString) {
                $this->setRequestURL($data[self::FIELD_REQUEST_URL]);
            } elseif ($ext && is_scalar($data[self::FIELD_REQUEST_URL])) {
                $this->setRequestURL(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_REQUEST_URL]] + $ext));
            } else {
                $this->setRequestURL(new FHIRString($data[self::FIELD_REQUEST_URL]));
            }
        }
        if (isset($data[self::FIELD_RESOURCE])) {
            $ext = (isset($data[self::FIELD_RESOURCE_EXT]) && is_array($data[self::FIELD_RESOURCE_EXT]))
                ? $data[self::FIELD_RESOURCE_EXT]
                : null;
            if ($data[self::FIELD_RESOURCE] instanceof FHIRFHIRDefinedType) {
                $this->setResource($data[self::FIELD_RESOURCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_RESOURCE])) {
                $this->setResource(new FHIRFHIRDefinedType([FHIRFHIRDefinedType::FIELD_VALUE => $data[self::FIELD_RESOURCE]] + $ext));
            } else {
                $this->setResource(new FHIRFHIRDefinedType($data[self::FIELD_RESOURCE]));
            }
        }
        if (isset($data[self::FIELD_RESPONSE])) {
            $ext = (isset($data[self::FIELD_RESPONSE_EXT]) && is_array($data[self::FIELD_RESPONSE_EXT]))
                ? $data[self::FIELD_RESPONSE_EXT]
                : null;
            if ($data[self::FIELD_RESPONSE] instanceof FHIRAssertionResponseTypes) {
                $this->setResponse($data[self::FIELD_RESPONSE]);
            } elseif ($ext && is_scalar($data[self::FIELD_RESPONSE])) {
                $this->setResponse(new FHIRAssertionResponseTypes([FHIRAssertionResponseTypes::FIELD_VALUE => $data[self::FIELD_RESPONSE]] + $ext));
            } else {
                $this->setResponse(new FHIRAssertionResponseTypes($data[self::FIELD_RESPONSE]));
            }
        }
        if (isset($data[self::FIELD_RESPONSE_CODE])) {
            $ext = (isset($data[self::FIELD_RESPONSE_CODE_EXT]) && is_array($data[self::FIELD_RESPONSE_CODE_EXT]))
                ? $data[self::FIELD_RESPONSE_CODE_EXT]
                : null;
            if ($data[self::FIELD_RESPONSE_CODE] instanceof FHIRString) {
                $this->setResponseCode($data[self::FIELD_RESPONSE_CODE]);
            } elseif ($ext && is_scalar($data[self::FIELD_RESPONSE_CODE])) {
                $this->setResponseCode(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_RESPONSE_CODE]] + $ext));
            } else {
                $this->setResponseCode(new FHIRString($data[self::FIELD_RESPONSE_CODE]));
            }
        }
        if (isset($data[self::FIELD_RULE])) {
            if ($data[self::FIELD_RULE] instanceof FHIRTestScriptRule2) {
                $this->setRule($data[self::FIELD_RULE]);
            } else {
                $this->setRule(new FHIRTestScriptRule2($data[self::FIELD_RULE]));
            }
        }
        if (isset($data[self::FIELD_RULESET])) {
            if ($data[self::FIELD_RULESET] instanceof FHIRTestScriptRuleset1) {
                $this->setRuleset($data[self::FIELD_RULESET]);
            } else {
                $this->setRuleset(new FHIRTestScriptRuleset1($data[self::FIELD_RULESET]));
            }
        }
        if (isset($data[self::FIELD_SOURCE_ID])) {
            $ext = (isset($data[self::FIELD_SOURCE_ID_EXT]) && is_array($data[self::FIELD_SOURCE_ID_EXT]))
                ? $data[self::FIELD_SOURCE_ID_EXT]
                : null;
            if ($data[self::FIELD_SOURCE_ID] instanceof FHIRId) {
                $this->setSourceId($data[self::FIELD_SOURCE_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_SOURCE_ID])) {
                $this->setSourceId(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_SOURCE_ID]] + $ext));
            } else {
                $this->setSourceId(new FHIRId($data[self::FIELD_SOURCE_ID]));
            }
        }
        if (isset($data[self::FIELD_VALIDATE_PROFILE_ID])) {
            $ext = (isset($data[self::FIELD_VALIDATE_PROFILE_ID_EXT]) && is_array($data[self::FIELD_VALIDATE_PROFILE_ID_EXT]))
                ? $data[self::FIELD_VALIDATE_PROFILE_ID_EXT]
                : null;
            if ($data[self::FIELD_VALIDATE_PROFILE_ID] instanceof FHIRId) {
                $this->setValidateProfileId($data[self::FIELD_VALIDATE_PROFILE_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALIDATE_PROFILE_ID])) {
                $this->setValidateProfileId(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_VALIDATE_PROFILE_ID]] + $ext));
            } else {
                $this->setValidateProfileId(new FHIRId($data[self::FIELD_VALIDATE_PROFILE_ID]));
            }
        }
        if (isset($data[self::FIELD_VALUE])) {
            $ext = (isset($data[self::FIELD_VALUE_EXT]) && is_array($data[self::FIELD_VALUE_EXT]))
                ? $data[self::FIELD_VALUE_EXT]
                : null;
            if ($data[self::FIELD_VALUE] instanceof FHIRString) {
                $this->setValue($data[self::FIELD_VALUE]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE])) {
                $this->setValue(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_VALUE]] + $ext));
            } else {
                $this->setValue(new FHIRString($data[self::FIELD_VALUE]));
            }
        }
        if (isset($data[self::FIELD_WARNING_ONLY])) {
            $ext = (isset($data[self::FIELD_WARNING_ONLY_EXT]) && is_array($data[self::FIELD_WARNING_ONLY_EXT]))
                ? $data[self::FIELD_WARNING_ONLY_EXT]
                : null;
            if ($data[self::FIELD_WARNING_ONLY] instanceof FHIRBoolean) {
                $this->setWarningOnly($data[self::FIELD_WARNING_ONLY]);
            } elseif ($ext && is_scalar($data[self::FIELD_WARNING_ONLY])) {
                $this->setWarningOnly(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_WARNING_ONLY]] + $ext));
            } else {
                $this->setWarningOnly(new FHIRBoolean($data[self::FIELD_WARNING_ONLY]));
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
     * @return static
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
        return "<TestScriptAssert{$xmlns}></TestScriptAssert>";
    }


    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The fluentpath expression to evaluate against the source fixture. When
     * compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getCompareToSourceExpression()
    {
        return $this->compareToSourceExpression;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The fluentpath expression to evaluate against the source fixture. When
     * compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $compareToSourceExpression
     * @return static
     */
    public function setCompareToSourceExpression($compareToSourceExpression = null)
    {
        if (null === $compareToSourceExpression) {
            $this->compareToSourceExpression = null;
            return $this;
        }
        if ($compareToSourceExpression instanceof FHIRString) {
            $this->compareToSourceExpression = $compareToSourceExpression;
            return $this;
        }
        $this->compareToSourceExpression = new FHIRString($compareToSourceExpression);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the source fixture used as the contents to be evaluated by either the
     * "source/expression" or "sourceId/path" definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getCompareToSourceId()
    {
        return $this->compareToSourceId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the source fixture used as the contents to be evaluated by either the
     * "source/expression" or "sourceId/path" definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $compareToSourceId
     * @return static
     */
    public function setCompareToSourceId($compareToSourceId = null)
    {
        if (null === $compareToSourceId) {
            $this->compareToSourceId = null;
            return $this;
        }
        if ($compareToSourceId instanceof FHIRString) {
            $this->compareToSourceId = $compareToSourceId;
            return $this;
        }
        $this->compareToSourceId = new FHIRString($compareToSourceId);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * XPath or JSONPath expression to evaluate against the source fixture. When
     * compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getCompareToSourcePath()
    {
        return $this->compareToSourcePath;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * XPath or JSONPath expression to evaluate against the source fixture. When
     * compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $compareToSourcePath
     * @return static
     */
    public function setCompareToSourcePath($compareToSourcePath = null)
    {
        if (null === $compareToSourcePath) {
            $this->compareToSourcePath = null;
            return $this;
        }
        if ($compareToSourcePath instanceof FHIRString) {
            $this->compareToSourcePath = $compareToSourcePath;
            return $this;
        }
        $this->compareToSourcePath = new FHIRString($compareToSourcePath);
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
     * The type of direction to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The direction to use for the assertion.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAssertionDirectionType
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * The type of direction to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The direction to use for the assertion.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAssertionDirectionType $direction
     * @return static
     */
    public function setDirection(FHIRAssertionDirectionType $direction = null)
    {
        $this->direction = $direction;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The fluentpath expression to be evaluated against the request or response
     * message contents - HTTP headers and payload.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The fluentpath expression to be evaluated against the request or response
     * message contents - HTTP headers and payload.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $expression
     * @return static
     */
    public function setExpression($expression = null)
    {
        if (null === $expression) {
            $this->expression = null;
            return $this;
        }
        if ($expression instanceof FHIRString) {
            $this->expression = $expression;
            return $this;
        }
        $this->expression = new FHIRString($expression);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The HTTP header field name e.g. 'Location'.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getHeaderField()
    {
        return $this->headerField;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The HTTP header field name e.g. 'Location'.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $headerField
     * @return static
     */
    public function setHeaderField($headerField = null)
    {
        if (null === $headerField) {
            $this->headerField = null;
            return $this;
        }
        if ($headerField instanceof FHIRString) {
            $this->headerField = $headerField;
            return $this;
        }
        $this->headerField = new FHIRString($headerField);
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The ID of a fixture. Asserts that the response contains at a minimum the fixture
     * specified by minimumId.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getMinimumId()
    {
        return $this->minimumId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The ID of a fixture. Asserts that the response contains at a minimum the fixture
     * specified by minimumId.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $minimumId
     * @return static
     */
    public function setMinimumId($minimumId = null)
    {
        if (null === $minimumId) {
            $this->minimumId = null;
            return $this;
        }
        if ($minimumId instanceof FHIRString) {
            $this->minimumId = $minimumId;
            return $this;
        }
        $this->minimumId = new FHIRString($minimumId);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution performs validation on the bundle navigation
     * links.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getNavigationLinks()
    {
        return $this->navigationLinks;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution performs validation on the bundle navigation
     * links.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $navigationLinks
     * @return static
     */
    public function setNavigationLinks($navigationLinks = null)
    {
        if (null === $navigationLinks) {
            $this->navigationLinks = null;
            return $this;
        }
        if ($navigationLinks instanceof FHIRBoolean) {
            $this->navigationLinks = $navigationLinks;
            return $this;
        }
        $this->navigationLinks = new FHIRBoolean($navigationLinks);
        return $this;
    }

    /**
     * The type of operator to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The operator type defines the conditional behavior of the assert. If not
     * defined, the default is equals.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAssertionOperatorType
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * The type of operator to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The operator type defines the conditional behavior of the assert. If not
     * defined, the default is equals.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAssertionOperatorType $operator
     * @return static
     */
    public function setOperator(FHIRAssertionOperatorType $operator = null)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The XPath or JSONPath expression to be evaluated against the fixture
     * representing the response received from server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The XPath or JSONPath expression to be evaluated against the fixture
     * representing the response received from server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $path
     * @return static
     */
    public function setPath($path = null)
    {
        if (null === $path) {
            $this->path = null;
            return $this;
        }
        if ($path instanceof FHIRString) {
            $this->path = $path;
            return $this;
        }
        $this->path = new FHIRString($path);
        return $this;
    }

    /**
     * The allowable request method or HTTP operation codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The request method or HTTP operation code to compare against that used by the
     * client system under test.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTestScriptRequestMethodCode
     */
    public function getRequestMethod()
    {
        return $this->requestMethod;
    }

    /**
     * The allowable request method or HTTP operation codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The request method or HTTP operation code to compare against that used by the
     * client system under test.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTestScriptRequestMethodCode $requestMethod
     * @return static
     */
    public function setRequestMethod(FHIRTestScriptRequestMethodCode $requestMethod = null)
    {
        $this->requestMethod = $requestMethod;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to use in a comparison against the request URL path string.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getRequestURL()
    {
        return $this->requestURL;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to use in a comparison against the request URL path string.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $requestURL
     * @return static
     */
    public function setRequestURL($requestURL = null)
    {
        if (null === $requestURL) {
            $this->requestURL = null;
            return $this;
        }
        if ($requestURL instanceof FHIRString) {
            $this->requestURL = $requestURL;
            return $this;
        }
        $this->requestURL = new FHIRString($requestURL);
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
     * The type of response code to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * okay | created | noContent | notModified | bad | forbidden | notFound |
     * methodNotAllowed | conflict | gone | preconditionFailed | unprocessable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAssertionResponseTypes
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * The type of response code to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * okay | created | noContent | notModified | bad | forbidden | notFound |
     * methodNotAllowed | conflict | gone | preconditionFailed | unprocessable.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAssertionResponseTypes $response
     * @return static
     */
    public function setResponse(FHIRAssertionResponseTypes $response = null)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the HTTP response code to be tested.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the HTTP response code to be tested.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $responseCode
     * @return static
     */
    public function setResponseCode($responseCode = null)
    {
        if (null === $responseCode) {
            $this->responseCode = null;
            return $this;
        }
        if ($responseCode instanceof FHIRString) {
            $this->responseCode = $responseCode;
            return $this;
        }
        $this->responseCode = new FHIRString($responseCode);
        return $this;
    }

    /**
     * A structured set of tests against a FHIR server implementation to determine
     * compliance against the FHIR specification.
     *
     * The TestScript.rule this assert will evaluate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRule2
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * A structured set of tests against a FHIR server implementation to determine
     * compliance against the FHIR specification.
     *
     * The TestScript.rule this assert will evaluate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRule2 $rule
     * @return static
     */
    public function setRule(FHIRTestScriptRule2 $rule = null)
    {
        $this->rule = $rule;
        return $this;
    }

    /**
     * A structured set of tests against a FHIR server implementation to determine
     * compliance against the FHIR specification.
     *
     * The TestScript.ruleset this assert will evaluate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRuleset1
     */
    public function getRuleset()
    {
        return $this->ruleset;
    }

    /**
     * A structured set of tests against a FHIR server implementation to determine
     * compliance against the FHIR specification.
     *
     * The TestScript.ruleset this assert will evaluate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRuleset1 $ruleset
     * @return static
     */
    public function setRuleset(FHIRTestScriptRuleset1 $ruleset = null)
    {
        $this->ruleset = $ruleset;
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
     * Fixture to evaluate the XPath/JSONPath expression or the headerField against.
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
     * Fixture to evaluate the XPath/JSONPath expression or the headerField against.
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
     * The ID of the Profile to validate against.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getValidateProfileId()
    {
        return $this->validateProfileId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The ID of the Profile to validate against.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $validateProfileId
     * @return static
     */
    public function setValidateProfileId($validateProfileId = null)
    {
        if (null === $validateProfileId) {
            $this->validateProfileId = null;
            return $this;
        }
        if ($validateProfileId instanceof FHIRId) {
            $this->validateProfileId = $validateProfileId;
            return $this;
        }
        $this->validateProfileId = new FHIRId($validateProfileId);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to compare to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to compare to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $value
     * @return static
     */
    public function setValue($value = null)
    {
        if (null === $value) {
            $this->value = null;
            return $this;
        }
        if ($value instanceof FHIRString) {
            $this->value = $value;
            return $this;
        }
        $this->value = new FHIRString($value);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution will produce a warning only on error for this
     * assert.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getWarningOnly()
    {
        return $this->warningOnly;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution will produce a warning only on error for this
     * assert.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $warningOnly
     * @return static
     */
    public function setWarningOnly($warningOnly = null)
    {
        if (null === $warningOnly) {
            $this->warningOnly = null;
            return $this;
        }
        if ($warningOnly instanceof FHIRBoolean) {
            $this->warningOnly = $warningOnly;
            return $this;
        }
        $this->warningOnly = new FHIRBoolean($warningOnly);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert
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
                throw new \DomainException(sprintf('FHIRTestScriptAssert::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRTestScriptAssert::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRTestScriptAssert;
        } elseif (!is_object($type) || !($type instanceof FHIRTestScriptAssert)) {
            throw new \RuntimeException(sprintf(
                'FHIRTestScriptAssert::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert or null, %s seen.',
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
        if (isset($attributes->compareToSourceExpression)) {
            $type->setCompareToSourceExpression((string)$attributes->compareToSourceExpression);
        }
        if (isset($children->compareToSourceExpression)) {
            $type->setCompareToSourceExpression(FHIRString::xmlUnserialize($children->compareToSourceExpression));
        }
        if (isset($attributes->compareToSourceId)) {
            $type->setCompareToSourceId((string)$attributes->compareToSourceId);
        }
        if (isset($children->compareToSourceId)) {
            $type->setCompareToSourceId(FHIRString::xmlUnserialize($children->compareToSourceId));
        }
        if (isset($attributes->compareToSourcePath)) {
            $type->setCompareToSourcePath((string)$attributes->compareToSourcePath);
        }
        if (isset($children->compareToSourcePath)) {
            $type->setCompareToSourcePath(FHIRString::xmlUnserialize($children->compareToSourcePath));
        }
        if (isset($children->contentType)) {
            $type->setContentType(FHIRContentType::xmlUnserialize($children->contentType));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($children->direction)) {
            $type->setDirection(FHIRAssertionDirectionType::xmlUnserialize($children->direction));
        }
        if (isset($attributes->expression)) {
            $type->setExpression((string)$attributes->expression);
        }
        if (isset($children->expression)) {
            $type->setExpression(FHIRString::xmlUnserialize($children->expression));
        }
        if (isset($attributes->headerField)) {
            $type->setHeaderField((string)$attributes->headerField);
        }
        if (isset($children->headerField)) {
            $type->setHeaderField(FHIRString::xmlUnserialize($children->headerField));
        }
        if (isset($attributes->label)) {
            $type->setLabel((string)$attributes->label);
        }
        if (isset($children->label)) {
            $type->setLabel(FHIRString::xmlUnserialize($children->label));
        }
        if (isset($attributes->minimumId)) {
            $type->setMinimumId((string)$attributes->minimumId);
        }
        if (isset($children->minimumId)) {
            $type->setMinimumId(FHIRString::xmlUnserialize($children->minimumId));
        }
        if (isset($attributes->navigationLinks)) {
            $type->setNavigationLinks((string)$attributes->navigationLinks);
        }
        if (isset($children->navigationLinks)) {
            $type->setNavigationLinks(FHIRBoolean::xmlUnserialize($children->navigationLinks));
        }
        if (isset($children->operator)) {
            $type->setOperator(FHIRAssertionOperatorType::xmlUnserialize($children->operator));
        }
        if (isset($attributes->path)) {
            $type->setPath((string)$attributes->path);
        }
        if (isset($children->path)) {
            $type->setPath(FHIRString::xmlUnserialize($children->path));
        }
        if (isset($children->requestMethod)) {
            $type->setRequestMethod(FHIRTestScriptRequestMethodCode::xmlUnserialize($children->requestMethod));
        }
        if (isset($attributes->requestURL)) {
            $type->setRequestURL((string)$attributes->requestURL);
        }
        if (isset($children->requestURL)) {
            $type->setRequestURL(FHIRString::xmlUnserialize($children->requestURL));
        }
        if (isset($children->resource)) {
            $type->setResource(FHIRFHIRDefinedType::xmlUnserialize($children->resource));
        }
        if (isset($children->response)) {
            $type->setResponse(FHIRAssertionResponseTypes::xmlUnserialize($children->response));
        }
        if (isset($attributes->responseCode)) {
            $type->setResponseCode((string)$attributes->responseCode);
        }
        if (isset($children->responseCode)) {
            $type->setResponseCode(FHIRString::xmlUnserialize($children->responseCode));
        }
        if (isset($children->rule)) {
            $type->setRule(FHIRTestScriptRule2::xmlUnserialize($children->rule));
        }
        if (isset($children->ruleset)) {
            $type->setRuleset(FHIRTestScriptRuleset1::xmlUnserialize($children->ruleset));
        }
        if (isset($attributes->sourceId)) {
            $type->setSourceId((string)$attributes->sourceId);
        }
        if (isset($children->sourceId)) {
            $type->setSourceId(FHIRId::xmlUnserialize($children->sourceId));
        }
        if (isset($attributes->validateProfileId)) {
            $type->setValidateProfileId((string)$attributes->validateProfileId);
        }
        if (isset($children->validateProfileId)) {
            $type->setValidateProfileId(FHIRId::xmlUnserialize($children->validateProfileId));
        }
        if (isset($attributes->value)) {
            $type->setValue((string)$attributes->value);
        }
        if (isset($children->value)) {
            $type->setValue(FHIRString::xmlUnserialize($children->value));
        }
        if (isset($attributes->warningOnly)) {
            $type->setWarningOnly((string)$attributes->warningOnly);
        }
        if (isset($children->warningOnly)) {
            $type->setWarningOnly(FHIRBoolean::xmlUnserialize($children->warningOnly));
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
        if (null !== ($v = $this->getCompareToSourceExpression())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COMPARE_TO_SOURCE_EXPRESSION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCompareToSourceId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COMPARE_TO_SOURCE_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCompareToSourcePath())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COMPARE_TO_SOURCE_PATH, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getContentType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTENT_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDirection())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DIRECTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExpression())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPRESSION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getHeaderField())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_HEADER_FIELD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLabel())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LABEL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMinimumId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MINIMUM_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNavigationLinks())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAVIGATION_LINKS, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getOperator())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OPERATOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPath())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATH, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getRequestMethod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST_METHOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRequestURL())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST_URL, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getResource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESOURCE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getResponse())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESPONSE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getResponseCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESPONSE_CODE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getRule())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RULE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getRuleset())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RULESET, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSourceId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValidateProfileId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALIDATE_PROFILE_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValue())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWarningOnly())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WARNING_ONLY, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCompareToSourceExpression())) {
            $a[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION] = $v->getValue();
            $a[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT] = $v;
        }
        if (null !== ($v = $this->getCompareToSourceId())) {
            $a[self::FIELD_COMPARE_TO_SOURCE_ID] = $v->getValue();
            $a[self::FIELD_COMPARE_TO_SOURCE_ID_EXT] = $v;
        }
        if (null !== ($v = $this->getCompareToSourcePath())) {
            $a[self::FIELD_COMPARE_TO_SOURCE_PATH] = $v->getValue();
            $a[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT] = $v;
        }
        if (null !== ($v = $this->getContentType())) {
            $a[self::FIELD_CONTENT_TYPE] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if (null !== ($v = $this->getDirection())) {
            $a[self::FIELD_DIRECTION] = $v;
        }
        if (null !== ($v = $this->getExpression())) {
            $a[self::FIELD_EXPRESSION] = $v->getValue();
            $a[self::FIELD_EXPRESSION_EXT] = $v;
        }
        if (null !== ($v = $this->getHeaderField())) {
            $a[self::FIELD_HEADER_FIELD] = $v->getValue();
            $a[self::FIELD_HEADER_FIELD_EXT] = $v;
        }
        if (null !== ($v = $this->getLabel())) {
            $a[self::FIELD_LABEL] = $v->getValue();
            $a[self::FIELD_LABEL_EXT] = $v;
        }
        if (null !== ($v = $this->getMinimumId())) {
            $a[self::FIELD_MINIMUM_ID] = $v->getValue();
            $a[self::FIELD_MINIMUM_ID_EXT] = $v;
        }
        if (null !== ($v = $this->getNavigationLinks())) {
            $a[self::FIELD_NAVIGATION_LINKS] = $v->getValue();
            $a[self::FIELD_NAVIGATION_LINKS_EXT] = $v;
        }
        if (null !== ($v = $this->getOperator())) {
            $a[self::FIELD_OPERATOR] = $v;
        }
        if (null !== ($v = $this->getPath())) {
            $a[self::FIELD_PATH] = $v->getValue();
            $a[self::FIELD_PATH_EXT] = $v;
        }
        if (null !== ($v = $this->getRequestMethod())) {
            $a[self::FIELD_REQUEST_METHOD] = $v;
        }
        if (null !== ($v = $this->getRequestURL())) {
            $a[self::FIELD_REQUEST_URL] = $v->getValue();
            $a[self::FIELD_REQUEST_URL_EXT] = $v;
        }
        if (null !== ($v = $this->getResource())) {
            $a[self::FIELD_RESOURCE] = $v;
        }
        if (null !== ($v = $this->getResponse())) {
            $a[self::FIELD_RESPONSE] = $v;
        }
        if (null !== ($v = $this->getResponseCode())) {
            $a[self::FIELD_RESPONSE_CODE] = $v->getValue();
            $a[self::FIELD_RESPONSE_CODE_EXT] = $v;
        }
        if (null !== ($v = $this->getRule())) {
            $a[self::FIELD_RULE] = $v;
        }
        if (null !== ($v = $this->getRuleset())) {
            $a[self::FIELD_RULESET] = $v;
        }
        if (null !== ($v = $this->getSourceId())) {
            $a[self::FIELD_SOURCE_ID] = $v->getValue();
            $a[self::FIELD_SOURCE_ID_EXT] = $v;
        }
        if (null !== ($v = $this->getValidateProfileId())) {
            $a[self::FIELD_VALIDATE_PROFILE_ID] = $v->getValue();
            $a[self::FIELD_VALIDATE_PROFILE_ID_EXT] = $v;
        }
        if (null !== ($v = $this->getValue())) {
            $a[self::FIELD_VALUE] = $v->getValue();
            $a[self::FIELD_VALUE_EXT] = $v;
        }
        if (null !== ($v = $this->getWarningOnly())) {
            $a[self::FIELD_WARNING_ONLY] = $v->getValue();
            $a[self::FIELD_WARNING_ONLY_EXT] = $v;
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