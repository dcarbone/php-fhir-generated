<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 10th, 2024 03:24+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAssertionDirectionType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAssertionOperatorType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAssertionResponseTypes;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContentType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFHIRDefinedType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTestScriptRequestMethodCode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter;

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

    const FIELD_LABEL = 'label';
    const FIELD_LABEL_EXT = '_label';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DIRECTION = 'direction';
    const FIELD_DIRECTION_EXT = '_direction';
    const FIELD_COMPARE_TO_SOURCE_ID = 'compareToSourceId';
    const FIELD_COMPARE_TO_SOURCE_ID_EXT = '_compareToSourceId';
    const FIELD_COMPARE_TO_SOURCE_EXPRESSION = 'compareToSourceExpression';
    const FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT = '_compareToSourceExpression';
    const FIELD_COMPARE_TO_SOURCE_PATH = 'compareToSourcePath';
    const FIELD_COMPARE_TO_SOURCE_PATH_EXT = '_compareToSourcePath';
    const FIELD_CONTENT_TYPE = 'contentType';
    const FIELD_CONTENT_TYPE_EXT = '_contentType';
    const FIELD_EXPRESSION = 'expression';
    const FIELD_EXPRESSION_EXT = '_expression';
    const FIELD_HEADER_FIELD = 'headerField';
    const FIELD_HEADER_FIELD_EXT = '_headerField';
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
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $label = null;
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
    protected null|FHIRString $description = null;
    /**
     * The type of direction to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The direction to use for the assertion.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAssertionDirectionType
     */
    protected null|FHIRAssertionDirectionType $direction = null;
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
    protected null|FHIRString $compareToSourceId = null;
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
    protected null|FHIRString $compareToSourceExpression = null;
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
    protected null|FHIRString $compareToSourcePath = null;
    /**
     * The content or mime type.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The content-type or mime-type to use for RESTful operation in the 'Content-Type'
     * header.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContentType
     */
    protected null|FHIRContentType $contentType = null;
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
    protected null|FHIRString $expression = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The HTTP header field name e.g. 'Location'.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $headerField = null;
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
    protected null|FHIRString $minimumId = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution performs validation on the bundle navigation
     * links.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $navigationLinks = null;
    /**
     * The type of operator to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The operator type defines the conditional behavior of the assert. If not
     * defined, the default is equals.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAssertionOperatorType
     */
    protected null|FHIRAssertionOperatorType $operator = null;
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
    protected null|FHIRString $path = null;
    /**
     * The allowable request method or HTTP operation codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The request method or HTTP operation code to compare against that used by the
     * client system under test.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTestScriptRequestMethodCode
     */
    protected null|FHIRTestScriptRequestMethodCode $requestMethod = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to use in a comparison against the request URL path string.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $requestURL = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of the resource. See http://build.fhir.org/resourcelist.html.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFHIRDefinedType
     */
    protected null|FHIRFHIRDefinedType $resource = null;
    /**
     * The type of response code to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * okay | created | noContent | notModified | bad | forbidden | notFound |
     * methodNotAllowed | conflict | gone | preconditionFailed | unprocessable.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAssertionResponseTypes
     */
    protected null|FHIRAssertionResponseTypes $response = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the HTTP response code to be tested.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $responseCode = null;
    /**
     * A structured set of tests against a FHIR server implementation to determine
     * compliance against the FHIR specification.
     *
     * The TestScript.rule this assert will evaluate.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRule2
     */
    protected null|FHIRTestScriptRule2 $rule = null;
    /**
     * A structured set of tests against a FHIR server implementation to determine
     * compliance against the FHIR specification.
     *
     * The TestScript.ruleset this assert will evaluate.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRuleset1
     */
    protected null|FHIRTestScriptRuleset1 $ruleset = null;
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
    protected null|FHIRId $sourceId = null;
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
    protected null|FHIRId $validateProfileId = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to compare to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $value = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution will produce a warning only on error for this
     * assert.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $warningOnly = null;

    /**
     * Validation map for fields in type TestScript.Assert
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRTestScriptAssert Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_LABEL, $data) || array_key_exists(self::FIELD_LABEL_EXT, $data)) {
            $value = $data[self::FIELD_LABEL] ?? null;
            $ext = (isset($data[self::FIELD_LABEL_EXT]) && is_array($data[self::FIELD_LABEL_EXT])) ? $data[self::FIELD_LABEL_EXT] : [];
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
            } else {
                $this->setLabel(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DESCRIPTION, $data) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $data)) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
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
            } else {
                $this->setDescription(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DIRECTION, $data) || array_key_exists(self::FIELD_DIRECTION_EXT, $data)) {
            $value = $data[self::FIELD_DIRECTION] ?? null;
            $ext = (isset($data[self::FIELD_DIRECTION_EXT]) && is_array($data[self::FIELD_DIRECTION_EXT])) ? $data[self::FIELD_DIRECTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAssertionDirectionType) {
                    $this->setDirection($value);
                } else if (is_array($value)) {
                    $this->setDirection(new FHIRAssertionDirectionType(array_merge($ext, $value)));
                } else {
                    $this->setDirection(new FHIRAssertionDirectionType([FHIRAssertionDirectionType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDirection(new FHIRAssertionDirectionType($ext));
            } else {
                $this->setDirection(new FHIRAssertionDirectionType(null));
            }
        }
        if (array_key_exists(self::FIELD_COMPARE_TO_SOURCE_ID, $data) || array_key_exists(self::FIELD_COMPARE_TO_SOURCE_ID_EXT, $data)) {
            $value = $data[self::FIELD_COMPARE_TO_SOURCE_ID] ?? null;
            $ext = (isset($data[self::FIELD_COMPARE_TO_SOURCE_ID_EXT]) && is_array($data[self::FIELD_COMPARE_TO_SOURCE_ID_EXT])) ? $data[self::FIELD_COMPARE_TO_SOURCE_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCompareToSourceId($value);
                } else if (is_array($value)) {
                    $this->setCompareToSourceId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCompareToSourceId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCompareToSourceId(new FHIRString($ext));
            } else {
                $this->setCompareToSourceId(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_COMPARE_TO_SOURCE_EXPRESSION, $data) || array_key_exists(self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT, $data)) {
            $value = $data[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION] ?? null;
            $ext = (isset($data[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT]) && is_array($data[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT])) ? $data[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCompareToSourceExpression($value);
                } else if (is_array($value)) {
                    $this->setCompareToSourceExpression(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCompareToSourceExpression(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCompareToSourceExpression(new FHIRString($ext));
            } else {
                $this->setCompareToSourceExpression(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_COMPARE_TO_SOURCE_PATH, $data) || array_key_exists(self::FIELD_COMPARE_TO_SOURCE_PATH_EXT, $data)) {
            $value = $data[self::FIELD_COMPARE_TO_SOURCE_PATH] ?? null;
            $ext = (isset($data[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT]) && is_array($data[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT])) ? $data[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCompareToSourcePath($value);
                } else if (is_array($value)) {
                    $this->setCompareToSourcePath(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCompareToSourcePath(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCompareToSourcePath(new FHIRString($ext));
            } else {
                $this->setCompareToSourcePath(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_CONTENT_TYPE, $data) || array_key_exists(self::FIELD_CONTENT_TYPE_EXT, $data)) {
            $value = $data[self::FIELD_CONTENT_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_CONTENT_TYPE_EXT]) && is_array($data[self::FIELD_CONTENT_TYPE_EXT])) ? $data[self::FIELD_CONTENT_TYPE_EXT] : [];
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
            } else {
                $this->setContentType(new FHIRContentType(null));
            }
        }
        if (array_key_exists(self::FIELD_EXPRESSION, $data) || array_key_exists(self::FIELD_EXPRESSION_EXT, $data)) {
            $value = $data[self::FIELD_EXPRESSION] ?? null;
            $ext = (isset($data[self::FIELD_EXPRESSION_EXT]) && is_array($data[self::FIELD_EXPRESSION_EXT])) ? $data[self::FIELD_EXPRESSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setExpression($value);
                } else if (is_array($value)) {
                    $this->setExpression(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setExpression(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExpression(new FHIRString($ext));
            } else {
                $this->setExpression(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_HEADER_FIELD, $data) || array_key_exists(self::FIELD_HEADER_FIELD_EXT, $data)) {
            $value = $data[self::FIELD_HEADER_FIELD] ?? null;
            $ext = (isset($data[self::FIELD_HEADER_FIELD_EXT]) && is_array($data[self::FIELD_HEADER_FIELD_EXT])) ? $data[self::FIELD_HEADER_FIELD_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setHeaderField($value);
                } else if (is_array($value)) {
                    $this->setHeaderField(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setHeaderField(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setHeaderField(new FHIRString($ext));
            } else {
                $this->setHeaderField(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_MINIMUM_ID, $data) || array_key_exists(self::FIELD_MINIMUM_ID_EXT, $data)) {
            $value = $data[self::FIELD_MINIMUM_ID] ?? null;
            $ext = (isset($data[self::FIELD_MINIMUM_ID_EXT]) && is_array($data[self::FIELD_MINIMUM_ID_EXT])) ? $data[self::FIELD_MINIMUM_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMinimumId($value);
                } else if (is_array($value)) {
                    $this->setMinimumId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMinimumId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMinimumId(new FHIRString($ext));
            } else {
                $this->setMinimumId(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_NAVIGATION_LINKS, $data) || array_key_exists(self::FIELD_NAVIGATION_LINKS_EXT, $data)) {
            $value = $data[self::FIELD_NAVIGATION_LINKS] ?? null;
            $ext = (isset($data[self::FIELD_NAVIGATION_LINKS_EXT]) && is_array($data[self::FIELD_NAVIGATION_LINKS_EXT])) ? $data[self::FIELD_NAVIGATION_LINKS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setNavigationLinks($value);
                } else if (is_array($value)) {
                    $this->setNavigationLinks(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setNavigationLinks(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNavigationLinks(new FHIRBoolean($ext));
            } else {
                $this->setNavigationLinks(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_OPERATOR, $data) || array_key_exists(self::FIELD_OPERATOR_EXT, $data)) {
            $value = $data[self::FIELD_OPERATOR] ?? null;
            $ext = (isset($data[self::FIELD_OPERATOR_EXT]) && is_array($data[self::FIELD_OPERATOR_EXT])) ? $data[self::FIELD_OPERATOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAssertionOperatorType) {
                    $this->setOperator($value);
                } else if (is_array($value)) {
                    $this->setOperator(new FHIRAssertionOperatorType(array_merge($ext, $value)));
                } else {
                    $this->setOperator(new FHIRAssertionOperatorType([FHIRAssertionOperatorType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOperator(new FHIRAssertionOperatorType($ext));
            } else {
                $this->setOperator(new FHIRAssertionOperatorType(null));
            }
        }
        if (array_key_exists(self::FIELD_PATH, $data) || array_key_exists(self::FIELD_PATH_EXT, $data)) {
            $value = $data[self::FIELD_PATH] ?? null;
            $ext = (isset($data[self::FIELD_PATH_EXT]) && is_array($data[self::FIELD_PATH_EXT])) ? $data[self::FIELD_PATH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPath($value);
                } else if (is_array($value)) {
                    $this->setPath(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPath(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPath(new FHIRString($ext));
            } else {
                $this->setPath(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_REQUEST_METHOD, $data) || array_key_exists(self::FIELD_REQUEST_METHOD_EXT, $data)) {
            $value = $data[self::FIELD_REQUEST_METHOD] ?? null;
            $ext = (isset($data[self::FIELD_REQUEST_METHOD_EXT]) && is_array($data[self::FIELD_REQUEST_METHOD_EXT])) ? $data[self::FIELD_REQUEST_METHOD_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTestScriptRequestMethodCode) {
                    $this->setRequestMethod($value);
                } else if (is_array($value)) {
                    $this->setRequestMethod(new FHIRTestScriptRequestMethodCode(array_merge($ext, $value)));
                } else {
                    $this->setRequestMethod(new FHIRTestScriptRequestMethodCode([FHIRTestScriptRequestMethodCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRequestMethod(new FHIRTestScriptRequestMethodCode($ext));
            } else {
                $this->setRequestMethod(new FHIRTestScriptRequestMethodCode(null));
            }
        }
        if (array_key_exists(self::FIELD_REQUEST_URL, $data) || array_key_exists(self::FIELD_REQUEST_URL_EXT, $data)) {
            $value = $data[self::FIELD_REQUEST_URL] ?? null;
            $ext = (isset($data[self::FIELD_REQUEST_URL_EXT]) && is_array($data[self::FIELD_REQUEST_URL_EXT])) ? $data[self::FIELD_REQUEST_URL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setRequestURL($value);
                } else if (is_array($value)) {
                    $this->setRequestURL(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setRequestURL(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRequestURL(new FHIRString($ext));
            } else {
                $this->setRequestURL(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_RESOURCE, $data) || array_key_exists(self::FIELD_RESOURCE_EXT, $data)) {
            $value = $data[self::FIELD_RESOURCE] ?? null;
            $ext = (isset($data[self::FIELD_RESOURCE_EXT]) && is_array($data[self::FIELD_RESOURCE_EXT])) ? $data[self::FIELD_RESOURCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRFHIRDefinedType) {
                    $this->setResource($value);
                } else if (is_array($value)) {
                    $this->setResource(new FHIRFHIRDefinedType(array_merge($ext, $value)));
                } else {
                    $this->setResource(new FHIRFHIRDefinedType([FHIRFHIRDefinedType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setResource(new FHIRFHIRDefinedType($ext));
            } else {
                $this->setResource(new FHIRFHIRDefinedType(null));
            }
        }
        if (array_key_exists(self::FIELD_RESPONSE, $data) || array_key_exists(self::FIELD_RESPONSE_EXT, $data)) {
            $value = $data[self::FIELD_RESPONSE] ?? null;
            $ext = (isset($data[self::FIELD_RESPONSE_EXT]) && is_array($data[self::FIELD_RESPONSE_EXT])) ? $data[self::FIELD_RESPONSE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAssertionResponseTypes) {
                    $this->setResponse($value);
                } else if (is_array($value)) {
                    $this->setResponse(new FHIRAssertionResponseTypes(array_merge($ext, $value)));
                } else {
                    $this->setResponse(new FHIRAssertionResponseTypes([FHIRAssertionResponseTypes::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setResponse(new FHIRAssertionResponseTypes($ext));
            } else {
                $this->setResponse(new FHIRAssertionResponseTypes(null));
            }
        }
        if (array_key_exists(self::FIELD_RESPONSE_CODE, $data) || array_key_exists(self::FIELD_RESPONSE_CODE_EXT, $data)) {
            $value = $data[self::FIELD_RESPONSE_CODE] ?? null;
            $ext = (isset($data[self::FIELD_RESPONSE_CODE_EXT]) && is_array($data[self::FIELD_RESPONSE_CODE_EXT])) ? $data[self::FIELD_RESPONSE_CODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setResponseCode($value);
                } else if (is_array($value)) {
                    $this->setResponseCode(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setResponseCode(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setResponseCode(new FHIRString($ext));
            } else {
                $this->setResponseCode(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_RULE, $data)) {
            if ($data[self::FIELD_RULE] instanceof FHIRTestScriptRule2) {
                $this->setRule($data[self::FIELD_RULE]);
            } else {
                $this->setRule(new FHIRTestScriptRule2($data[self::FIELD_RULE]));
            }
        }
        if (array_key_exists(self::FIELD_RULESET, $data)) {
            if ($data[self::FIELD_RULESET] instanceof FHIRTestScriptRuleset1) {
                $this->setRuleset($data[self::FIELD_RULESET]);
            } else {
                $this->setRuleset(new FHIRTestScriptRuleset1($data[self::FIELD_RULESET]));
            }
        }
        if (array_key_exists(self::FIELD_SOURCE_ID, $data) || array_key_exists(self::FIELD_SOURCE_ID_EXT, $data)) {
            $value = $data[self::FIELD_SOURCE_ID] ?? null;
            $ext = (isset($data[self::FIELD_SOURCE_ID_EXT]) && is_array($data[self::FIELD_SOURCE_ID_EXT])) ? $data[self::FIELD_SOURCE_ID_EXT] : [];
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
            } else {
                $this->setSourceId(new FHIRId(null));
            }
        }
        if (array_key_exists(self::FIELD_VALIDATE_PROFILE_ID, $data) || array_key_exists(self::FIELD_VALIDATE_PROFILE_ID_EXT, $data)) {
            $value = $data[self::FIELD_VALIDATE_PROFILE_ID] ?? null;
            $ext = (isset($data[self::FIELD_VALIDATE_PROFILE_ID_EXT]) && is_array($data[self::FIELD_VALIDATE_PROFILE_ID_EXT])) ? $data[self::FIELD_VALIDATE_PROFILE_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setValidateProfileId($value);
                } else if (is_array($value)) {
                    $this->setValidateProfileId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setValidateProfileId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValidateProfileId(new FHIRId($ext));
            } else {
                $this->setValidateProfileId(new FHIRId(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE, $data) || array_key_exists(self::FIELD_VALUE_EXT, $data)) {
            $value = $data[self::FIELD_VALUE] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_EXT]) && is_array($data[self::FIELD_VALUE_EXT])) ? $data[self::FIELD_VALUE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setValue($value);
                } else if (is_array($value)) {
                    $this->setValue(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setValue(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValue(new FHIRString($ext));
            } else {
                $this->setValue(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_WARNING_ONLY, $data) || array_key_exists(self::FIELD_WARNING_ONLY_EXT, $data)) {
            $value = $data[self::FIELD_WARNING_ONLY] ?? null;
            $ext = (isset($data[self::FIELD_WARNING_ONLY_EXT]) && is_array($data[self::FIELD_WARNING_ONLY_EXT])) ? $data[self::FIELD_WARNING_ONLY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setWarningOnly($value);
                } else if (is_array($value)) {
                    $this->setWarningOnly(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setWarningOnly(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setWarningOnly(new FHIRBoolean($ext));
            } else {
                $this->setWarningOnly(new FHIRBoolean(null));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
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
    public function getLabel(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $label
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setLabel(null|string|FHIRStringPrimitive|FHIRString $label = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $label && !($label instanceof FHIRString)) {
            $label = new FHIRString($label);
        }
        $this->_trackValueSet($this->label, $label);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_LABEL])) {
            $this->_primitiveXmlLocations[self::FIELD_LABEL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_LABEL][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $description
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $description && !($description instanceof FHIRString)) {
            $description = new FHIRString($description);
        }
        $this->_trackValueSet($this->description, $description);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DESCRIPTION])) {
            $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION][0] = $xmlLocation;
        $this->description = $description;
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
    public function getDirection(): null|FHIRAssertionDirectionType
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
    public function setDirection(null|FHIRAssertionDirectionType $direction = null): self
    {
        if (null === $direction) {
            $direction = new FHIRAssertionDirectionType();
        }
        $this->_trackValueSet($this->direction, $direction);
        $this->direction = $direction;
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
    public function getCompareToSourceId(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $compareToSourceId
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCompareToSourceId(null|string|FHIRStringPrimitive|FHIRString $compareToSourceId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $compareToSourceId && !($compareToSourceId instanceof FHIRString)) {
            $compareToSourceId = new FHIRString($compareToSourceId);
        }
        $this->_trackValueSet($this->compareToSourceId, $compareToSourceId);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_COMPARE_TO_SOURCE_ID])) {
            $this->_primitiveXmlLocations[self::FIELD_COMPARE_TO_SOURCE_ID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_COMPARE_TO_SOURCE_ID][0] = $xmlLocation;
        $this->compareToSourceId = $compareToSourceId;
        return $this;
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
    public function getCompareToSourceExpression(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $compareToSourceExpression
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCompareToSourceExpression(null|string|FHIRStringPrimitive|FHIRString $compareToSourceExpression = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $compareToSourceExpression && !($compareToSourceExpression instanceof FHIRString)) {
            $compareToSourceExpression = new FHIRString($compareToSourceExpression);
        }
        $this->_trackValueSet($this->compareToSourceExpression, $compareToSourceExpression);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION])) {
            $this->_primitiveXmlLocations[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION][0] = $xmlLocation;
        $this->compareToSourceExpression = $compareToSourceExpression;
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
    public function getCompareToSourcePath(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $compareToSourcePath
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCompareToSourcePath(null|string|FHIRStringPrimitive|FHIRString $compareToSourcePath = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $compareToSourcePath && !($compareToSourcePath instanceof FHIRString)) {
            $compareToSourcePath = new FHIRString($compareToSourcePath);
        }
        $this->_trackValueSet($this->compareToSourcePath, $compareToSourcePath);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_COMPARE_TO_SOURCE_PATH])) {
            $this->_primitiveXmlLocations[self::FIELD_COMPARE_TO_SOURCE_PATH] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_COMPARE_TO_SOURCE_PATH][0] = $xmlLocation;
        $this->compareToSourcePath = $compareToSourcePath;
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
    public function getContentType(): null|FHIRContentType
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
    public function setContentType(null|FHIRContentType $contentType = null): self
    {
        if (null === $contentType) {
            $contentType = new FHIRContentType();
        }
        $this->_trackValueSet($this->contentType, $contentType);
        $this->contentType = $contentType;
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
    public function getExpression(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $expression
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setExpression(null|string|FHIRStringPrimitive|FHIRString $expression = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $expression && !($expression instanceof FHIRString)) {
            $expression = new FHIRString($expression);
        }
        $this->_trackValueSet($this->expression, $expression);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_EXPRESSION])) {
            $this->_primitiveXmlLocations[self::FIELD_EXPRESSION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_EXPRESSION][0] = $xmlLocation;
        $this->expression = $expression;
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
    public function getHeaderField(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $headerField
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setHeaderField(null|string|FHIRStringPrimitive|FHIRString $headerField = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $headerField && !($headerField instanceof FHIRString)) {
            $headerField = new FHIRString($headerField);
        }
        $this->_trackValueSet($this->headerField, $headerField);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_HEADER_FIELD])) {
            $this->_primitiveXmlLocations[self::FIELD_HEADER_FIELD] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_HEADER_FIELD][0] = $xmlLocation;
        $this->headerField = $headerField;
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
    public function getMinimumId(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $minimumId
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMinimumId(null|string|FHIRStringPrimitive|FHIRString $minimumId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $minimumId && !($minimumId instanceof FHIRString)) {
            $minimumId = new FHIRString($minimumId);
        }
        $this->_trackValueSet($this->minimumId, $minimumId);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MINIMUM_ID])) {
            $this->_primitiveXmlLocations[self::FIELD_MINIMUM_ID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MINIMUM_ID][0] = $xmlLocation;
        $this->minimumId = $minimumId;
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
    public function getNavigationLinks(): null|FHIRBoolean
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\STU3\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $navigationLinks
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setNavigationLinks(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $navigationLinks = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $navigationLinks && !($navigationLinks instanceof FHIRBoolean)) {
            $navigationLinks = new FHIRBoolean($navigationLinks);
        }
        $this->_trackValueSet($this->navigationLinks, $navigationLinks);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_NAVIGATION_LINKS])) {
            $this->_primitiveXmlLocations[self::FIELD_NAVIGATION_LINKS] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_NAVIGATION_LINKS][0] = $xmlLocation;
        $this->navigationLinks = $navigationLinks;
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
    public function getOperator(): null|FHIRAssertionOperatorType
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
    public function setOperator(null|FHIRAssertionOperatorType $operator = null): self
    {
        if (null === $operator) {
            $operator = new FHIRAssertionOperatorType();
        }
        $this->_trackValueSet($this->operator, $operator);
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
    public function getPath(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $path
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPath(null|string|FHIRStringPrimitive|FHIRString $path = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $path && !($path instanceof FHIRString)) {
            $path = new FHIRString($path);
        }
        $this->_trackValueSet($this->path, $path);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PATH])) {
            $this->_primitiveXmlLocations[self::FIELD_PATH] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PATH][0] = $xmlLocation;
        $this->path = $path;
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
    public function getRequestMethod(): null|FHIRTestScriptRequestMethodCode
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
    public function setRequestMethod(null|FHIRTestScriptRequestMethodCode $requestMethod = null): self
    {
        if (null === $requestMethod) {
            $requestMethod = new FHIRTestScriptRequestMethodCode();
        }
        $this->_trackValueSet($this->requestMethod, $requestMethod);
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
    public function getRequestURL(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $requestURL
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setRequestURL(null|string|FHIRStringPrimitive|FHIRString $requestURL = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $requestURL && !($requestURL instanceof FHIRString)) {
            $requestURL = new FHIRString($requestURL);
        }
        $this->_trackValueSet($this->requestURL, $requestURL);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_REQUEST_URL])) {
            $this->_primitiveXmlLocations[self::FIELD_REQUEST_URL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_REQUEST_URL][0] = $xmlLocation;
        $this->requestURL = $requestURL;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of the resource. See http://build.fhir.org/resourcelist.html.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFHIRDefinedType
     */
    public function getResource(): null|FHIRFHIRDefinedType
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
    public function setResource(null|FHIRFHIRDefinedType $resource = null): self
    {
        if (null === $resource) {
            $resource = new FHIRFHIRDefinedType();
        }
        $this->_trackValueSet($this->resource, $resource);
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
    public function getResponse(): null|FHIRAssertionResponseTypes
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
    public function setResponse(null|FHIRAssertionResponseTypes $response = null): self
    {
        if (null === $response) {
            $response = new FHIRAssertionResponseTypes();
        }
        $this->_trackValueSet($this->response, $response);
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
    public function getResponseCode(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $responseCode
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setResponseCode(null|string|FHIRStringPrimitive|FHIRString $responseCode = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $responseCode && !($responseCode instanceof FHIRString)) {
            $responseCode = new FHIRString($responseCode);
        }
        $this->_trackValueSet($this->responseCode, $responseCode);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_RESPONSE_CODE])) {
            $this->_primitiveXmlLocations[self::FIELD_RESPONSE_CODE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_RESPONSE_CODE][0] = $xmlLocation;
        $this->responseCode = $responseCode;
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
    public function getRule(): null|FHIRTestScriptRule2
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
    public function setRule(null|FHIRTestScriptRule2 $rule = null): self
    {
        if (null === $rule) {
            $rule = new FHIRTestScriptRule2();
        }
        $this->_trackValueSet($this->rule, $rule);
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
    public function getRuleset(): null|FHIRTestScriptRuleset1
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
    public function setRuleset(null|FHIRTestScriptRuleset1 $ruleset = null): self
    {
        if (null === $ruleset) {
            $ruleset = new FHIRTestScriptRuleset1();
        }
        $this->_trackValueSet($this->ruleset, $ruleset);
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
    public function getSourceId(): null|FHIRId
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $sourceId
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSourceId(null|string|FHIRIdPrimitive|FHIRId $sourceId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $sourceId && !($sourceId instanceof FHIRId)) {
            $sourceId = new FHIRId($sourceId);
        }
        $this->_trackValueSet($this->sourceId, $sourceId);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_SOURCE_ID])) {
            $this->_primitiveXmlLocations[self::FIELD_SOURCE_ID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_SOURCE_ID][0] = $xmlLocation;
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
     * The ID of the Profile to validate against.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getValidateProfileId(): null|FHIRId
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $validateProfileId
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValidateProfileId(null|string|FHIRIdPrimitive|FHIRId $validateProfileId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $validateProfileId && !($validateProfileId instanceof FHIRId)) {
            $validateProfileId = new FHIRId($validateProfileId);
        }
        $this->_trackValueSet($this->validateProfileId, $validateProfileId);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALIDATE_PROFILE_ID])) {
            $this->_primitiveXmlLocations[self::FIELD_VALIDATE_PROFILE_ID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALIDATE_PROFILE_ID][0] = $xmlLocation;
        $this->validateProfileId = $validateProfileId;
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
    public function getValue(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $value
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValue(null|string|FHIRStringPrimitive|FHIRString $value = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $value && !($value instanceof FHIRString)) {
            $value = new FHIRString($value);
        }
        $this->_trackValueSet($this->value, $value);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE][0] = $xmlLocation;
        $this->value = $value;
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
    public function getWarningOnly(): null|FHIRBoolean
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\STU3\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $warningOnly
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setWarningOnly(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $warningOnly = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $warningOnly && !($warningOnly instanceof FHIRBoolean)) {
            $warningOnly = new FHIRBoolean($warningOnly);
        }
        $this->_trackValueSet($this->warningOnly, $warningOnly);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_WARNING_ONLY])) {
            $this->_primitiveXmlLocations[self::FIELD_WARNING_ONLY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_WARNING_ONLY][0] = $xmlLocation;
        $this->warningOnly = $warningOnly;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
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
        if (null !== ($v = $this->getDirection())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DIRECTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCompareToSourceId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMPARE_TO_SOURCE_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCompareToSourceExpression())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCompareToSourcePath())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMPARE_TO_SOURCE_PATH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContentType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTENT_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExpression())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPRESSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getHeaderField())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HEADER_FIELD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinimumId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MINIMUM_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNavigationLinks())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAVIGATION_LINKS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOperator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OPERATOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPath())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequestMethod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUEST_METHOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequestURL())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUEST_URL] = $fieldErrs;
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
        if (null !== ($v = $this->getResponseCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESPONSE_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRule())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RULE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRuleset())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RULESET] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSourceId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValidateProfileId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALIDATE_PROFILE_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValue())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWarningOnly())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WARNING_ONLY] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_LABEL])) {
            $v = $this->getLabel();
            foreach($validationRules[self::FIELD_LABEL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_LABEL, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIRECTION])) {
            $v = $this->getDirection();
            foreach($validationRules[self::FIELD_DIRECTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_DIRECTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIRECTION])) {
                        $errs[self::FIELD_DIRECTION] = [];
                    }
                    $errs[self::FIELD_DIRECTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPARE_TO_SOURCE_ID])) {
            $v = $this->getCompareToSourceId();
            foreach($validationRules[self::FIELD_COMPARE_TO_SOURCE_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_COMPARE_TO_SOURCE_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPARE_TO_SOURCE_ID])) {
                        $errs[self::FIELD_COMPARE_TO_SOURCE_ID] = [];
                    }
                    $errs[self::FIELD_COMPARE_TO_SOURCE_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION])) {
            $v = $this->getCompareToSourceExpression();
            foreach($validationRules[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_COMPARE_TO_SOURCE_EXPRESSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION])) {
                        $errs[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION] = [];
                    }
                    $errs[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPARE_TO_SOURCE_PATH])) {
            $v = $this->getCompareToSourcePath();
            foreach($validationRules[self::FIELD_COMPARE_TO_SOURCE_PATH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_COMPARE_TO_SOURCE_PATH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPARE_TO_SOURCE_PATH])) {
                        $errs[self::FIELD_COMPARE_TO_SOURCE_PATH] = [];
                    }
                    $errs[self::FIELD_COMPARE_TO_SOURCE_PATH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT_TYPE])) {
            $v = $this->getContentType();
            foreach($validationRules[self::FIELD_CONTENT_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_CONTENT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT_TYPE])) {
                        $errs[self::FIELD_CONTENT_TYPE] = [];
                    }
                    $errs[self::FIELD_CONTENT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPRESSION])) {
            $v = $this->getExpression();
            foreach($validationRules[self::FIELD_EXPRESSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_EXPRESSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPRESSION])) {
                        $errs[self::FIELD_EXPRESSION] = [];
                    }
                    $errs[self::FIELD_EXPRESSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HEADER_FIELD])) {
            $v = $this->getHeaderField();
            foreach($validationRules[self::FIELD_HEADER_FIELD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_HEADER_FIELD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HEADER_FIELD])) {
                        $errs[self::FIELD_HEADER_FIELD] = [];
                    }
                    $errs[self::FIELD_HEADER_FIELD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MINIMUM_ID])) {
            $v = $this->getMinimumId();
            foreach($validationRules[self::FIELD_MINIMUM_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_MINIMUM_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MINIMUM_ID])) {
                        $errs[self::FIELD_MINIMUM_ID] = [];
                    }
                    $errs[self::FIELD_MINIMUM_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAVIGATION_LINKS])) {
            $v = $this->getNavigationLinks();
            foreach($validationRules[self::FIELD_NAVIGATION_LINKS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_NAVIGATION_LINKS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAVIGATION_LINKS])) {
                        $errs[self::FIELD_NAVIGATION_LINKS] = [];
                    }
                    $errs[self::FIELD_NAVIGATION_LINKS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPERATOR])) {
            $v = $this->getOperator();
            foreach($validationRules[self::FIELD_OPERATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_OPERATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPERATOR])) {
                        $errs[self::FIELD_OPERATOR] = [];
                    }
                    $errs[self::FIELD_OPERATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATH])) {
            $v = $this->getPath();
            foreach($validationRules[self::FIELD_PATH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_PATH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATH])) {
                        $errs[self::FIELD_PATH] = [];
                    }
                    $errs[self::FIELD_PATH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST_METHOD])) {
            $v = $this->getRequestMethod();
            foreach($validationRules[self::FIELD_REQUEST_METHOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_REQUEST_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST_METHOD])) {
                        $errs[self::FIELD_REQUEST_METHOD] = [];
                    }
                    $errs[self::FIELD_REQUEST_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST_URL])) {
            $v = $this->getRequestURL();
            foreach($validationRules[self::FIELD_REQUEST_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_REQUEST_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST_URL])) {
                        $errs[self::FIELD_REQUEST_URL] = [];
                    }
                    $errs[self::FIELD_REQUEST_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESOURCE])) {
            $v = $this->getResource();
            foreach($validationRules[self::FIELD_RESOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_RESOURCE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_RESPONSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESPONSE])) {
                        $errs[self::FIELD_RESPONSE] = [];
                    }
                    $errs[self::FIELD_RESPONSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESPONSE_CODE])) {
            $v = $this->getResponseCode();
            foreach($validationRules[self::FIELD_RESPONSE_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_RESPONSE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESPONSE_CODE])) {
                        $errs[self::FIELD_RESPONSE_CODE] = [];
                    }
                    $errs[self::FIELD_RESPONSE_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RULE])) {
            $v = $this->getRule();
            foreach($validationRules[self::FIELD_RULE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_RULE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RULE])) {
                        $errs[self::FIELD_RULE] = [];
                    }
                    $errs[self::FIELD_RULE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RULESET])) {
            $v = $this->getRuleset();
            foreach($validationRules[self::FIELD_RULESET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_RULESET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RULESET])) {
                        $errs[self::FIELD_RULESET] = [];
                    }
                    $errs[self::FIELD_RULESET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_ID])) {
            $v = $this->getSourceId();
            foreach($validationRules[self::FIELD_SOURCE_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_SOURCE_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_ID])) {
                        $errs[self::FIELD_SOURCE_ID] = [];
                    }
                    $errs[self::FIELD_SOURCE_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDATE_PROFILE_ID])) {
            $v = $this->getValidateProfileId();
            foreach($validationRules[self::FIELD_VALIDATE_PROFILE_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_VALIDATE_PROFILE_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDATE_PROFILE_ID])) {
                        $errs[self::FIELD_VALIDATE_PROFILE_ID] = [];
                    }
                    $errs[self::FIELD_VALIDATE_PROFILE_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE])) {
            $v = $this->getValue();
            foreach($validationRules[self::FIELD_VALUE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_VALUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE])) {
                        $errs[self::FIELD_VALUE] = [];
                    }
                    $errs[self::FIELD_VALUE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WARNING_ONLY])) {
            $v = $this->getWarningOnly();
            foreach($validationRules[self::FIELD_WARNING_ONLY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_WARNING_ONLY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WARNING_ONLY])) {
                        $errs[self::FIELD_WARNING_ONLY] = [];
                    }
                    $errs[self::FIELD_WARNING_ONLY][$rule] = $err;
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRTestScriptAssert)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_LABEL === $childName) {
                $type->setLabel(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DIRECTION === $childName) {
                $type->setDirection(FHIRAssertionDirectionType::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_COMPARE_TO_SOURCE_ID === $childName) {
                $type->setCompareToSourceId(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_COMPARE_TO_SOURCE_EXPRESSION === $childName) {
                $type->setCompareToSourceExpression(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_COMPARE_TO_SOURCE_PATH === $childName) {
                $type->setCompareToSourcePath(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CONTENT_TYPE === $childName) {
                $type->setContentType(FHIRContentType::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXPRESSION === $childName) {
                $type->setExpression(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_HEADER_FIELD === $childName) {
                $type->setHeaderField(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MINIMUM_ID === $childName) {
                $type->setMinimumId(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_NAVIGATION_LINKS === $childName) {
                $type->setNavigationLinks(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_OPERATOR === $childName) {
                $type->setOperator(FHIRAssertionOperatorType::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATH === $childName) {
                $type->setPath(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_REQUEST_METHOD === $childName) {
                $type->setRequestMethod(FHIRTestScriptRequestMethodCode::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REQUEST_URL === $childName) {
                $type->setRequestURL(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_RESOURCE === $childName) {
                $type->setResource(FHIRFHIRDefinedType::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RESPONSE === $childName) {
                $type->setResponse(FHIRAssertionResponseTypes::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RESPONSE_CODE === $childName) {
                $type->setResponseCode(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_RULE === $childName) {
                $type->setRule(FHIRTestScriptRule2::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RULESET === $childName) {
                $type->setRuleset(FHIRTestScriptRuleset1::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SOURCE_ID === $childName) {
                $type->setSourceId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALIDATE_PROFILE_ID === $childName) {
                $type->setValidateProfileId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE === $childName) {
                $type->setValue(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_WARNING_ONLY === $childName) {
                $type->setWarningOnly(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_LABEL])) {
            $pt = $type->getLabel();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LABEL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLabel((string)$attributes[self::FIELD_LABEL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_COMPARE_TO_SOURCE_ID])) {
            $pt = $type->getCompareToSourceId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_COMPARE_TO_SOURCE_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCompareToSourceId((string)$attributes[self::FIELD_COMPARE_TO_SOURCE_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION])) {
            $pt = $type->getCompareToSourceExpression();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCompareToSourceExpression((string)$attributes[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_COMPARE_TO_SOURCE_PATH])) {
            $pt = $type->getCompareToSourcePath();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_COMPARE_TO_SOURCE_PATH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCompareToSourcePath((string)$attributes[self::FIELD_COMPARE_TO_SOURCE_PATH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXPRESSION])) {
            $pt = $type->getExpression();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_EXPRESSION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setExpression((string)$attributes[self::FIELD_EXPRESSION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_HEADER_FIELD])) {
            $pt = $type->getHeaderField();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_HEADER_FIELD], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setHeaderField((string)$attributes[self::FIELD_HEADER_FIELD], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MINIMUM_ID])) {
            $pt = $type->getMinimumId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MINIMUM_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMinimumId((string)$attributes[self::FIELD_MINIMUM_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NAVIGATION_LINKS])) {
            $pt = $type->getNavigationLinks();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NAVIGATION_LINKS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setNavigationLinks((string)$attributes[self::FIELD_NAVIGATION_LINKS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATH])) {
            $pt = $type->getPath();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPath((string)$attributes[self::FIELD_PATH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_REQUEST_URL])) {
            $pt = $type->getRequestURL();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_REQUEST_URL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setRequestURL((string)$attributes[self::FIELD_REQUEST_URL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RESPONSE_CODE])) {
            $pt = $type->getResponseCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_RESPONSE_CODE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setResponseCode((string)$attributes[self::FIELD_RESPONSE_CODE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SOURCE_ID])) {
            $pt = $type->getSourceId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SOURCE_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSourceId((string)$attributes[self::FIELD_SOURCE_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALIDATE_PROFILE_ID])) {
            $pt = $type->getValidateProfileId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALIDATE_PROFILE_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValidateProfileId((string)$attributes[self::FIELD_VALIDATE_PROFILE_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE])) {
            $pt = $type->getValue();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValue((string)$attributes[self::FIELD_VALUE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_WARNING_ONLY])) {
            $pt = $type->getWarningOnly();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_WARNING_ONLY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setWarningOnly((string)$attributes[self::FIELD_WARNING_ONLY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'TestScriptAssert', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_LABEL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getLabel())) {
            $xw->writeAttribute(self::FIELD_LABEL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_COMPARE_TO_SOURCE_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCompareToSourceId())) {
            $xw->writeAttribute(self::FIELD_COMPARE_TO_SOURCE_ID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCompareToSourceExpression())) {
            $xw->writeAttribute(self::FIELD_COMPARE_TO_SOURCE_EXPRESSION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_COMPARE_TO_SOURCE_PATH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCompareToSourcePath())) {
            $xw->writeAttribute(self::FIELD_COMPARE_TO_SOURCE_PATH, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXPRESSION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getExpression())) {
            $xw->writeAttribute(self::FIELD_EXPRESSION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_HEADER_FIELD] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getHeaderField())) {
            $xw->writeAttribute(self::FIELD_HEADER_FIELD, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MINIMUM_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMinimumId())) {
            $xw->writeAttribute(self::FIELD_MINIMUM_ID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_NAVIGATION_LINKS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getNavigationLinks())) {
            $xw->writeAttribute(self::FIELD_NAVIGATION_LINKS, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPath())) {
            $xw->writeAttribute(self::FIELD_PATH, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_REQUEST_URL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getRequestURL())) {
            $xw->writeAttribute(self::FIELD_REQUEST_URL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_RESPONSE_CODE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getResponseCode())) {
            $xw->writeAttribute(self::FIELD_RESPONSE_CODE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SOURCE_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSourceId())) {
            $xw->writeAttribute(self::FIELD_SOURCE_ID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALIDATE_PROFILE_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValidateProfileId())) {
            $xw->writeAttribute(self::FIELD_VALIDATE_PROFILE_ID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValue())) {
            $xw->writeAttribute(self::FIELD_VALUE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_WARNING_ONLY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getWarningOnly())) {
            $xw->writeAttribute(self::FIELD_WARNING_ONLY, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_LABEL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getLabel())) {
            $xw->startElement(self::FIELD_LABEL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDirection())) {
            $xw->startElement(self::FIELD_DIRECTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_COMPARE_TO_SOURCE_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCompareToSourceId())) {
            $xw->startElement(self::FIELD_COMPARE_TO_SOURCE_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCompareToSourceExpression())) {
            $xw->startElement(self::FIELD_COMPARE_TO_SOURCE_EXPRESSION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_COMPARE_TO_SOURCE_PATH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCompareToSourcePath())) {
            $xw->startElement(self::FIELD_COMPARE_TO_SOURCE_PATH);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getContentType())) {
            $xw->startElement(self::FIELD_CONTENT_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXPRESSION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getExpression())) {
            $xw->startElement(self::FIELD_EXPRESSION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_HEADER_FIELD] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getHeaderField())) {
            $xw->startElement(self::FIELD_HEADER_FIELD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MINIMUM_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMinimumId())) {
            $xw->startElement(self::FIELD_MINIMUM_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_NAVIGATION_LINKS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getNavigationLinks())) {
            $xw->startElement(self::FIELD_NAVIGATION_LINKS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOperator())) {
            $xw->startElement(self::FIELD_OPERATOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPath())) {
            $xw->startElement(self::FIELD_PATH);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRequestMethod())) {
            $xw->startElement(self::FIELD_REQUEST_METHOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_REQUEST_URL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getRequestURL())) {
            $xw->startElement(self::FIELD_REQUEST_URL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getResource())) {
            $xw->startElement(self::FIELD_RESOURCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getResponse())) {
            $xw->startElement(self::FIELD_RESPONSE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_RESPONSE_CODE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getResponseCode())) {
            $xw->startElement(self::FIELD_RESPONSE_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRule())) {
            $xw->startElement(self::FIELD_RULE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRuleset())) {
            $xw->startElement(self::FIELD_RULESET);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SOURCE_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSourceId())) {
            $xw->startElement(self::FIELD_SOURCE_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALIDATE_PROFILE_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValidateProfileId())) {
            $xw->startElement(self::FIELD_VALIDATE_PROFILE_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValue())) {
            $xw->startElement(self::FIELD_VALUE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_WARNING_ONLY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getWarningOnly())) {
            $xw->startElement(self::FIELD_WARNING_ONLY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getLabel())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LABEL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LABEL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDirection())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DIRECTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRAssertionDirectionType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DIRECTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCompareToSourceId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COMPARE_TO_SOURCE_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COMPARE_TO_SOURCE_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCompareToSourceExpression())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COMPARE_TO_SOURCE_EXPRESSION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCompareToSourcePath())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COMPARE_TO_SOURCE_PATH} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COMPARE_TO_SOURCE_PATH_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getContentType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONTENT_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRContentType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONTENT_TYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getExpression())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EXPRESSION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXPRESSION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getHeaderField())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_HEADER_FIELD} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_HEADER_FIELD_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMinimumId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MINIMUM_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MINIMUM_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getNavigationLinks())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NAVIGATION_LINKS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NAVIGATION_LINKS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOperator())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_OPERATOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRAssertionOperatorType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OPERATOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPath())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATH} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATH_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRequestMethod())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REQUEST_METHOD} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRTestScriptRequestMethodCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REQUEST_METHOD_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRequestURL())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REQUEST_URL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REQUEST_URL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getResource())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RESOURCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRFHIRDefinedType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RESOURCE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getResponse())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RESPONSE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRAssertionResponseTypes::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RESPONSE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getResponseCode())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RESPONSE_CODE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RESPONSE_CODE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRule())) {
            $out->{self::FIELD_RULE} = $v;
        }
        if (null !== ($v = $this->getRuleset())) {
            $out->{self::FIELD_RULESET} = $v;
        }
        if (null !== ($v = $this->getSourceId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SOURCE_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SOURCE_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValidateProfileId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALIDATE_PROFILE_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALIDATE_PROFILE_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValue())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getWarningOnly())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_WARNING_ONLY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_WARNING_ONLY_EXT} = $ext;
            }
        }

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}