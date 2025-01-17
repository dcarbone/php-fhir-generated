<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAssertionDirectionType;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAssertionOperatorType;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAssertionResponseTypes;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTestScriptRequestMethodCode;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * A structured set of tests against a FHIR server or client implementation to
 * determine compliance against the FHIR specification.
 */
class FHIRTestScriptAssert extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT;


    public const FIELD_LABEL = 'label';
    public const FIELD_LABEL_EXT = '_label';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_DIRECTION = 'direction';
    public const FIELD_DIRECTION_EXT = '_direction';
    public const FIELD_COMPARE_TO_SOURCE_ID = 'compareToSourceId';
    public const FIELD_COMPARE_TO_SOURCE_ID_EXT = '_compareToSourceId';
    public const FIELD_COMPARE_TO_SOURCE_EXPRESSION = 'compareToSourceExpression';
    public const FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT = '_compareToSourceExpression';
    public const FIELD_COMPARE_TO_SOURCE_PATH = 'compareToSourcePath';
    public const FIELD_COMPARE_TO_SOURCE_PATH_EXT = '_compareToSourcePath';
    public const FIELD_CONTENT_TYPE = 'contentType';
    public const FIELD_CONTENT_TYPE_EXT = '_contentType';
    public const FIELD_EXPRESSION = 'expression';
    public const FIELD_EXPRESSION_EXT = '_expression';
    public const FIELD_HEADER_FIELD = 'headerField';
    public const FIELD_HEADER_FIELD_EXT = '_headerField';
    public const FIELD_MINIMUM_ID = 'minimumId';
    public const FIELD_MINIMUM_ID_EXT = '_minimumId';
    public const FIELD_NAVIGATION_LINKS = 'navigationLinks';
    public const FIELD_NAVIGATION_LINKS_EXT = '_navigationLinks';
    public const FIELD_OPERATOR = 'operator';
    public const FIELD_OPERATOR_EXT = '_operator';
    public const FIELD_PATH = 'path';
    public const FIELD_PATH_EXT = '_path';
    public const FIELD_REQUEST_METHOD = 'requestMethod';
    public const FIELD_REQUEST_METHOD_EXT = '_requestMethod';
    public const FIELD_REQUEST_URL = 'requestURL';
    public const FIELD_REQUEST_URL_EXT = '_requestURL';
    public const FIELD_RESOURCE = 'resource';
    public const FIELD_RESOURCE_EXT = '_resource';
    public const FIELD_RESPONSE = 'response';
    public const FIELD_RESPONSE_EXT = '_response';
    public const FIELD_RESPONSE_CODE = 'responseCode';
    public const FIELD_RESPONSE_CODE_EXT = '_responseCode';
    public const FIELD_SOURCE_ID = 'sourceId';
    public const FIELD_SOURCE_ID_EXT = '_sourceId';
    public const FIELD_VALIDATE_PROFILE_ID = 'validateProfileId';
    public const FIELD_VALIDATE_PROFILE_ID_EXT = '_validateProfileId';
    public const FIELD_VALUE = 'value';
    public const FIELD_VALUE_EXT = '_value';
    public const FIELD_WARNING_ONLY = 'warningOnly';
    public const FIELD_WARNING_ONLY_EXT = '_warningOnly';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $label;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The description would be used by test engines for tracking and reporting
     * purposes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $description;
    /**
     * The type of direction to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The direction to use for the assertion.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAssertionDirectionType 
     */
    protected FHIRAssertionDirectionType $direction;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the source fixture used as the contents to be evaluated by either the
     * "source/expression" or "sourceId/path" definition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $compareToSourceId;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath expression to evaluate against the source fixture. When
     * compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $compareToSourceExpression;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * XPath or JSONPath expression to evaluate against the source fixture. When
     * compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $compareToSourcePath;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The mime-type contents to compare against the request or response message
     * 'Content-Type' header.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $contentType;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath expression to be evaluated against the request or response message
     * contents - HTTP headers and payload.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $expression;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The HTTP header field name e.g. 'Location'.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $headerField;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The ID of a fixture. Asserts that the response contains at a minimum the fixture
     * specified by minimumId.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $minimumId;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution performs validation on the bundle navigation
     * links.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $navigationLinks;
    /**
     * The type of operator to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The operator type defines the conditional behavior of the assert. If not
     * defined, the default is equals.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAssertionOperatorType 
     */
    protected FHIRAssertionOperatorType $operator;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The XPath or JSONPath expression to be evaluated against the fixture
     * representing the response received from server.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $path;
    /**
     * The allowable request method or HTTP operation codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The request method or HTTP operation code to compare against that used by the
     * client system under test.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTestScriptRequestMethodCode 
     */
    protected FHIRTestScriptRequestMethodCode $requestMethod;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to use in a comparison against the request URL path string.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $requestURL;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the resource. See http://build.fhir.org/resourcelist.html.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $resource;
    /**
     * The type of response code to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * okay | created | noContent | notModified | bad | forbidden | notFound |
     * methodNotAllowed | conflict | gone | preconditionFailed | unprocessable.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAssertionResponseTypes 
     */
    protected FHIRAssertionResponseTypes $response;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the HTTP response code to be tested.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $responseCode;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $sourceId;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $validateProfileId;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to compare to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $value;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution will produce a warning only on error for this
     * assert.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $warningOnly;

    /** Default validation map for fields in type TestScript.Assert */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_WARNING_ONLY => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRTestScriptAssert Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $label
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAssertionDirectionType $direction
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $compareToSourceId
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $compareToSourceExpression
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $compareToSourcePath
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $contentType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $expression
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $headerField
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $minimumId
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $navigationLinks
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAssertionOperatorType $operator
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $path
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTestScriptRequestMethodCode $requestMethod
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $requestURL
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $resource
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAssertionResponseTypes $response
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $responseCode
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $sourceId
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $validateProfileId
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $value
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $warningOnly
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $label = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|FHIRAssertionDirectionType $direction = null,
                                null|string|FHIRStringPrimitive|FHIRString $compareToSourceId = null,
                                null|string|FHIRStringPrimitive|FHIRString $compareToSourceExpression = null,
                                null|string|FHIRStringPrimitive|FHIRString $compareToSourcePath = null,
                                null|string|FHIRCodePrimitive|FHIRCode $contentType = null,
                                null|string|FHIRStringPrimitive|FHIRString $expression = null,
                                null|string|FHIRStringPrimitive|FHIRString $headerField = null,
                                null|string|FHIRStringPrimitive|FHIRString $minimumId = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $navigationLinks = null,
                                null|FHIRAssertionOperatorType $operator = null,
                                null|string|FHIRStringPrimitive|FHIRString $path = null,
                                null|FHIRTestScriptRequestMethodCode $requestMethod = null,
                                null|string|FHIRStringPrimitive|FHIRString $requestURL = null,
                                null|string|FHIRCodePrimitive|FHIRCode $resource = null,
                                null|FHIRAssertionResponseTypes $response = null,
                                null|string|FHIRStringPrimitive|FHIRString $responseCode = null,
                                null|string|FHIRIdPrimitive|FHIRId $sourceId = null,
                                null|string|FHIRIdPrimitive|FHIRId $validateProfileId = null,
                                null|string|FHIRString|FHIRStringPrimitive $value = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $warningOnly = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $label) {
            $this->setLabel($label);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $direction) {
            $this->setDirection($direction);
        }
        if (null !== $compareToSourceId) {
            $this->setCompareToSourceId($compareToSourceId);
        }
        if (null !== $compareToSourceExpression) {
            $this->setCompareToSourceExpression($compareToSourceExpression);
        }
        if (null !== $compareToSourcePath) {
            $this->setCompareToSourcePath($compareToSourcePath);
        }
        if (null !== $contentType) {
            $this->setContentType($contentType);
        }
        if (null !== $expression) {
            $this->setExpression($expression);
        }
        if (null !== $headerField) {
            $this->setHeaderField($headerField);
        }
        if (null !== $minimumId) {
            $this->setMinimumId($minimumId);
        }
        if (null !== $navigationLinks) {
            $this->setNavigationLinks($navigationLinks);
        }
        if (null !== $operator) {
            $this->setOperator($operator);
        }
        if (null !== $path) {
            $this->setPath($path);
        }
        if (null !== $requestMethod) {
            $this->setRequestMethod($requestMethod);
        }
        if (null !== $requestURL) {
            $this->setRequestURL($requestURL);
        }
        if (null !== $resource) {
            $this->setResource($resource);
        }
        if (null !== $response) {
            $this->setResponse($response);
        }
        if (null !== $responseCode) {
            $this->setResponseCode($responseCode);
        }
        if (null !== $sourceId) {
            $this->setSourceId($sourceId);
        }
        if (null !== $validateProfileId) {
            $this->setValidateProfileId($validateProfileId);
        }
        if (null !== $value) {
            $this->setValue($value);
        }
        if (null !== $warningOnly) {
            $this->setWarningOnly($warningOnly);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getLabel(): null|FHIRString
    {
        return $this->label ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $label
     * @return static
     */
    public function setLabel(null|string|FHIRStringPrimitive|FHIRString $label): self
    {
        if (null === $label) {
            unset($this->label);
            return $this;
        }
        if (!($label instanceof FHIRString)) {
            $label = new FHIRString(value: $label);
        }
        $this->label = $label;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The description would be used by test engines for tracking and reporting
     * purposes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The description would be used by test engines for tracking and reporting
     * purposes.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRString)) {
            $description = new FHIRString(value: $description);
        }
        $this->description = $description;
        return $this;
    }

    /**
     * The type of direction to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The direction to use for the assertion.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAssertionDirectionType
     */
    public function getDirection(): null|FHIRAssertionDirectionType
    {
        return $this->direction ?? null;
    }

    /**
     * The type of direction to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The direction to use for the assertion.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAssertionDirectionType $direction
     * @return static
     */
    public function setDirection(null|FHIRAssertionDirectionType $direction): self
    {
        if (null === $direction) {
            unset($this->direction);
            return $this;
        }
        $this->direction = $direction;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the source fixture used as the contents to be evaluated by either the
     * "source/expression" or "sourceId/path" definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getCompareToSourceId(): null|FHIRString
    {
        return $this->compareToSourceId ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the source fixture used as the contents to be evaluated by either the
     * "source/expression" or "sourceId/path" definition.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $compareToSourceId
     * @return static
     */
    public function setCompareToSourceId(null|string|FHIRStringPrimitive|FHIRString $compareToSourceId): self
    {
        if (null === $compareToSourceId) {
            unset($this->compareToSourceId);
            return $this;
        }
        if (!($compareToSourceId instanceof FHIRString)) {
            $compareToSourceId = new FHIRString(value: $compareToSourceId);
        }
        $this->compareToSourceId = $compareToSourceId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath expression to evaluate against the source fixture. When
     * compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getCompareToSourceExpression(): null|FHIRString
    {
        return $this->compareToSourceExpression ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath expression to evaluate against the source fixture. When
     * compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $compareToSourceExpression
     * @return static
     */
    public function setCompareToSourceExpression(null|string|FHIRStringPrimitive|FHIRString $compareToSourceExpression): self
    {
        if (null === $compareToSourceExpression) {
            unset($this->compareToSourceExpression);
            return $this;
        }
        if (!($compareToSourceExpression instanceof FHIRString)) {
            $compareToSourceExpression = new FHIRString(value: $compareToSourceExpression);
        }
        $this->compareToSourceExpression = $compareToSourceExpression;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * XPath or JSONPath expression to evaluate against the source fixture. When
     * compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getCompareToSourcePath(): null|FHIRString
    {
        return $this->compareToSourcePath ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * XPath or JSONPath expression to evaluate against the source fixture. When
     * compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $compareToSourcePath
     * @return static
     */
    public function setCompareToSourcePath(null|string|FHIRStringPrimitive|FHIRString $compareToSourcePath): self
    {
        if (null === $compareToSourcePath) {
            unset($this->compareToSourcePath);
            return $this;
        }
        if (!($compareToSourcePath instanceof FHIRString)) {
            $compareToSourcePath = new FHIRString(value: $compareToSourcePath);
        }
        $this->compareToSourcePath = $compareToSourcePath;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The mime-type contents to compare against the request or response message
     * 'Content-Type' header.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode
     */
    public function getContentType(): null|FHIRCode
    {
        return $this->contentType ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The mime-type contents to compare against the request or response message
     * 'Content-Type' header.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $contentType
     * @return static
     */
    public function setContentType(null|string|FHIRCodePrimitive|FHIRCode $contentType): self
    {
        if (null === $contentType) {
            unset($this->contentType);
            return $this;
        }
        if (!($contentType instanceof FHIRCode)) {
            $contentType = new FHIRCode(value: $contentType);
        }
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath expression to be evaluated against the request or response message
     * contents - HTTP headers and payload.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getExpression(): null|FHIRString
    {
        return $this->expression ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath expression to be evaluated against the request or response message
     * contents - HTTP headers and payload.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $expression
     * @return static
     */
    public function setExpression(null|string|FHIRStringPrimitive|FHIRString $expression): self
    {
        if (null === $expression) {
            unset($this->expression);
            return $this;
        }
        if (!($expression instanceof FHIRString)) {
            $expression = new FHIRString(value: $expression);
        }
        $this->expression = $expression;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The HTTP header field name e.g. 'Location'.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getHeaderField(): null|FHIRString
    {
        return $this->headerField ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The HTTP header field name e.g. 'Location'.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $headerField
     * @return static
     */
    public function setHeaderField(null|string|FHIRStringPrimitive|FHIRString $headerField): self
    {
        if (null === $headerField) {
            unset($this->headerField);
            return $this;
        }
        if (!($headerField instanceof FHIRString)) {
            $headerField = new FHIRString(value: $headerField);
        }
        $this->headerField = $headerField;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The ID of a fixture. Asserts that the response contains at a minimum the fixture
     * specified by minimumId.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getMinimumId(): null|FHIRString
    {
        return $this->minimumId ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The ID of a fixture. Asserts that the response contains at a minimum the fixture
     * specified by minimumId.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $minimumId
     * @return static
     */
    public function setMinimumId(null|string|FHIRStringPrimitive|FHIRString $minimumId): self
    {
        if (null === $minimumId) {
            unset($this->minimumId);
            return $this;
        }
        if (!($minimumId instanceof FHIRString)) {
            $minimumId = new FHIRString(value: $minimumId);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean
     */
    public function getNavigationLinks(): null|FHIRBoolean
    {
        return $this->navigationLinks ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution performs validation on the bundle navigation
     * links.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $navigationLinks
     * @return static
     */
    public function setNavigationLinks(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $navigationLinks): self
    {
        if (null === $navigationLinks) {
            unset($this->navigationLinks);
            return $this;
        }
        if (!($navigationLinks instanceof FHIRBoolean)) {
            $navigationLinks = new FHIRBoolean(value: $navigationLinks);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAssertionOperatorType
     */
    public function getOperator(): null|FHIRAssertionOperatorType
    {
        return $this->operator ?? null;
    }

    /**
     * The type of operator to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The operator type defines the conditional behavior of the assert. If not
     * defined, the default is equals.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAssertionOperatorType $operator
     * @return static
     */
    public function setOperator(null|FHIRAssertionOperatorType $operator): self
    {
        if (null === $operator) {
            unset($this->operator);
            return $this;
        }
        $this->operator = $operator;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The XPath or JSONPath expression to be evaluated against the fixture
     * representing the response received from server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getPath(): null|FHIRString
    {
        return $this->path ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The XPath or JSONPath expression to be evaluated against the fixture
     * representing the response received from server.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $path
     * @return static
     */
    public function setPath(null|string|FHIRStringPrimitive|FHIRString $path): self
    {
        if (null === $path) {
            unset($this->path);
            return $this;
        }
        if (!($path instanceof FHIRString)) {
            $path = new FHIRString(value: $path);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTestScriptRequestMethodCode
     */
    public function getRequestMethod(): null|FHIRTestScriptRequestMethodCode
    {
        return $this->requestMethod ?? null;
    }

    /**
     * The allowable request method or HTTP operation codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The request method or HTTP operation code to compare against that used by the
     * client system under test.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTestScriptRequestMethodCode $requestMethod
     * @return static
     */
    public function setRequestMethod(null|FHIRTestScriptRequestMethodCode $requestMethod): self
    {
        if (null === $requestMethod) {
            unset($this->requestMethod);
            return $this;
        }
        $this->requestMethod = $requestMethod;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to use in a comparison against the request URL path string.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getRequestURL(): null|FHIRString
    {
        return $this->requestURL ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to use in a comparison against the request URL path string.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $requestURL
     * @return static
     */
    public function setRequestURL(null|string|FHIRStringPrimitive|FHIRString $requestURL): self
    {
        if (null === $requestURL) {
            unset($this->requestURL);
            return $this;
        }
        if (!($requestURL instanceof FHIRString)) {
            $requestURL = new FHIRString(value: $requestURL);
        }
        $this->requestURL = $requestURL;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the resource. See http://build.fhir.org/resourcelist.html.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode
     */
    public function getResource(): null|FHIRCode
    {
        return $this->resource ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the resource. See http://build.fhir.org/resourcelist.html.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $resource
     * @return static
     */
    public function setResource(null|string|FHIRCodePrimitive|FHIRCode $resource): self
    {
        if (null === $resource) {
            unset($this->resource);
            return $this;
        }
        if (!($resource instanceof FHIRCode)) {
            $resource = new FHIRCode(value: $resource);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAssertionResponseTypes
     */
    public function getResponse(): null|FHIRAssertionResponseTypes
    {
        return $this->response ?? null;
    }

    /**
     * The type of response code to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * okay | created | noContent | notModified | bad | forbidden | notFound |
     * methodNotAllowed | conflict | gone | preconditionFailed | unprocessable.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAssertionResponseTypes $response
     * @return static
     */
    public function setResponse(null|FHIRAssertionResponseTypes $response): self
    {
        if (null === $response) {
            unset($this->response);
            return $this;
        }
        $this->response = $response;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the HTTP response code to be tested.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getResponseCode(): null|FHIRString
    {
        return $this->responseCode ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the HTTP response code to be tested.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $responseCode
     * @return static
     */
    public function setResponseCode(null|string|FHIRStringPrimitive|FHIRString $responseCode): self
    {
        if (null === $responseCode) {
            unset($this->responseCode);
            return $this;
        }
        if (!($responseCode instanceof FHIRString)) {
            $responseCode = new FHIRString(value: $responseCode);
        }
        $this->responseCode = $responseCode;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId
     */
    public function getSourceId(): null|FHIRId
    {
        return $this->sourceId ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $sourceId
     * @return static
     */
    public function setSourceId(null|string|FHIRIdPrimitive|FHIRId $sourceId): self
    {
        if (null === $sourceId) {
            unset($this->sourceId);
            return $this;
        }
        if (!($sourceId instanceof FHIRId)) {
            $sourceId = new FHIRId(value: $sourceId);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId
     */
    public function getValidateProfileId(): null|FHIRId
    {
        return $this->validateProfileId ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $validateProfileId
     * @return static
     */
    public function setValidateProfileId(null|string|FHIRIdPrimitive|FHIRId $validateProfileId): self
    {
        if (null === $validateProfileId) {
            unset($this->validateProfileId);
            return $this;
        }
        if (!($validateProfileId instanceof FHIRId)) {
            $validateProfileId = new FHIRId(value: $validateProfileId);
        }
        $this->validateProfileId = $validateProfileId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to compare to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getValue(): null|FHIRString
    {
        return $this->value ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to compare to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $value
     * @return static
     */
    public function setValue(null|string|FHIRString|FHIRStringPrimitive $value): self
    {
        if (null === $value) {
            unset($this->value);
            return $this;
        }
        if (!($value instanceof FHIRString)) {
            $value = new FHIRString(value: $value);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean
     */
    public function getWarningOnly(): null|FHIRBoolean
    {
        return $this->warningOnly ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution will produce a warning only on error for this
     * assert.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $warningOnly
     * @return static
     */
    public function setWarningOnly(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $warningOnly): self
    {
        if (null === $warningOnly) {
            unset($this->warningOnly);
            return $this;
        }
        if (!($warningOnly instanceof FHIRBoolean)) {
            $warningOnly = new FHIRBoolean(value: $warningOnly);
        }
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
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getWarningOnly())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WARNING_ONLY] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_LABEL])) {
            $v = $this->getLabel();
            foreach($validationRules[self::FIELD_LABEL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LABEL, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DIRECTION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COMPARE_TO_SOURCE_ID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COMPARE_TO_SOURCE_EXPRESSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COMPARE_TO_SOURCE_PATH, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTENT_TYPE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXPRESSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_HEADER_FIELD, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MINIMUM_ID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NAVIGATION_LINKS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OPERATOR, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATH, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REQUEST_METHOD, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REQUEST_URL, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RESOURCE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RESPONSE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RESPONSE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESPONSE_CODE])) {
                        $errs[self::FIELD_RESPONSE_CODE] = [];
                    }
                    $errs[self::FIELD_RESPONSE_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_ID])) {
            $v = $this->getSourceId();
            foreach($validationRules[self::FIELD_SOURCE_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SOURCE_ID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALIDATE_PROFILE_ID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_WARNING_ONLY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRTestScriptAssert)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $v = new FHIRStringPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LABEL === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setLabel(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DESCRIPTION === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDescription(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DIRECTION === $childName) {
                $v = new FHIRAssertionDirectionType(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDirection(FHIRAssertionDirectionType::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COMPARE_TO_SOURCE_ID === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setCompareToSourceId(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COMPARE_TO_SOURCE_EXPRESSION === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setCompareToSourceExpression(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COMPARE_TO_SOURCE_PATH === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setCompareToSourcePath(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTENT_TYPE === $childName) {
                $v = new FHIRCode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setContentType(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXPRESSION === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setExpression(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_HEADER_FIELD === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setHeaderField(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MINIMUM_ID === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMinimumId(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NAVIGATION_LINKS === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setNavigationLinks(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OPERATOR === $childName) {
                $v = new FHIRAssertionOperatorType(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setOperator(FHIRAssertionOperatorType::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATH === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPath(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REQUEST_METHOD === $childName) {
                $v = new FHIRTestScriptRequestMethodCode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setRequestMethod(FHIRTestScriptRequestMethodCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REQUEST_URL === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setRequestURL(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RESOURCE === $childName) {
                $v = new FHIRCode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setResource(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RESPONSE === $childName) {
                $v = new FHIRAssertionResponseTypes(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setResponse(FHIRAssertionResponseTypes::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RESPONSE_CODE === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setResponseCode(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SOURCE_ID === $childName) {
                $v = new FHIRId(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setSourceId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALIDATE_PROFILE_ID === $childName) {
                $v = new FHIRId(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setValidateProfileId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setValue(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_WARNING_ONLY === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setWarningOnly(FHIRBoolean::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LABEL])) {
            $pt = $type->getLabel();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LABEL]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLabel(new FHIRString(
                    value: (string)$attributes[self::FIELD_LABEL],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription(new FHIRString(
                    value: (string)$attributes[self::FIELD_DESCRIPTION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_COMPARE_TO_SOURCE_ID])) {
            $pt = $type->getCompareToSourceId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_COMPARE_TO_SOURCE_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCompareToSourceId(new FHIRString(
                    value: (string)$attributes[self::FIELD_COMPARE_TO_SOURCE_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION])) {
            $pt = $type->getCompareToSourceExpression();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCompareToSourceExpression(new FHIRString(
                    value: (string)$attributes[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_COMPARE_TO_SOURCE_PATH])) {
            $pt = $type->getCompareToSourcePath();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_COMPARE_TO_SOURCE_PATH]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCompareToSourcePath(new FHIRString(
                    value: (string)$attributes[self::FIELD_COMPARE_TO_SOURCE_PATH],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CONTENT_TYPE])) {
            $pt = $type->getContentType();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CONTENT_TYPE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setContentType(new FHIRCode(
                    value: (string)$attributes[self::FIELD_CONTENT_TYPE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXPRESSION])) {
            $pt = $type->getExpression();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_EXPRESSION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExpression(new FHIRString(
                    value: (string)$attributes[self::FIELD_EXPRESSION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_HEADER_FIELD])) {
            $pt = $type->getHeaderField();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_HEADER_FIELD]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setHeaderField(new FHIRString(
                    value: (string)$attributes[self::FIELD_HEADER_FIELD],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MINIMUM_ID])) {
            $pt = $type->getMinimumId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MINIMUM_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMinimumId(new FHIRString(
                    value: (string)$attributes[self::FIELD_MINIMUM_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_NAVIGATION_LINKS])) {
            $pt = $type->getNavigationLinks();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NAVIGATION_LINKS]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setNavigationLinks(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_NAVIGATION_LINKS],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PATH])) {
            $pt = $type->getPath();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATH]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPath(new FHIRString(
                    value: (string)$attributes[self::FIELD_PATH],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_REQUEST_URL])) {
            $pt = $type->getRequestURL();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_REQUEST_URL]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setRequestURL(new FHIRString(
                    value: (string)$attributes[self::FIELD_REQUEST_URL],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_RESOURCE])) {
            $pt = $type->getResource();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_RESOURCE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setResource(new FHIRCode(
                    value: (string)$attributes[self::FIELD_RESOURCE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_RESPONSE_CODE])) {
            $pt = $type->getResponseCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_RESPONSE_CODE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setResponseCode(new FHIRString(
                    value: (string)$attributes[self::FIELD_RESPONSE_CODE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SOURCE_ID])) {
            $pt = $type->getSourceId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SOURCE_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSourceId(new FHIRId(
                    value: (string)$attributes[self::FIELD_SOURCE_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VALIDATE_PROFILE_ID])) {
            $pt = $type->getValidateProfileId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALIDATE_PROFILE_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValidateProfileId(new FHIRId(
                    value: (string)$attributes[self::FIELD_VALIDATE_PROFILE_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VALUE])) {
            $pt = $type->getValue();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValue(new FHIRString(
                    value: (string)$attributes[self::FIELD_VALUE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_WARNING_ONLY])) {
            $pt = $type->getWarningOnly();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_WARNING_ONLY]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setWarningOnly(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_WARNING_ONLY],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('TestScriptAssert', $this->_getSourceXMLNS());
        }
        if (isset($this->label) && $this->label->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_LABEL, $this->label->getValue()?->getFormattedValue());
        }
        if (isset($this->description) && $this->description->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->getValue()?->getFormattedValue());
        }
        if (isset($this->compareToSourceId) && $this->compareToSourceId->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_COMPARE_TO_SOURCE_ID, $this->compareToSourceId->getValue()?->getFormattedValue());
        }
        if (isset($this->compareToSourceExpression) && $this->compareToSourceExpression->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_COMPARE_TO_SOURCE_EXPRESSION, $this->compareToSourceExpression->getValue()?->getFormattedValue());
        }
        if (isset($this->compareToSourcePath) && $this->compareToSourcePath->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_COMPARE_TO_SOURCE_PATH, $this->compareToSourcePath->getValue()?->getFormattedValue());
        }
        if (isset($this->contentType) && $this->contentType->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CONTENT_TYPE, $this->contentType->getValue()?->getFormattedValue());
        }
        if (isset($this->expression) && $this->expression->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXPRESSION, $this->expression->getValue()?->getFormattedValue());
        }
        if (isset($this->headerField) && $this->headerField->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_HEADER_FIELD, $this->headerField->getValue()?->getFormattedValue());
        }
        if (isset($this->minimumId) && $this->minimumId->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MINIMUM_ID, $this->minimumId->getValue()?->getFormattedValue());
        }
        if (isset($this->navigationLinks) && $this->navigationLinks->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NAVIGATION_LINKS, $this->navigationLinks->getValue()?->getFormattedValue());
        }
        if (isset($this->path) && $this->path->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATH, $this->path->getValue()?->getFormattedValue());
        }
        if (isset($this->requestURL) && $this->requestURL->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_REQUEST_URL, $this->requestURL->getValue()?->getFormattedValue());
        }
        if (isset($this->resource) && $this->resource->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_RESOURCE, $this->resource->getValue()?->getFormattedValue());
        }
        if (isset($this->responseCode) && $this->responseCode->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_RESPONSE_CODE, $this->responseCode->getValue()?->getFormattedValue());
        }
        if (isset($this->sourceId) && $this->sourceId->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SOURCE_ID, $this->sourceId->getValue()?->getFormattedValue());
        }
        if (isset($this->validateProfileId) && $this->validateProfileId->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALIDATE_PROFILE_ID, $this->validateProfileId->getValue()?->getFormattedValue());
        }
        if (isset($this->value) && $this->value->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALUE, $this->value->getValue()?->getFormattedValue());
        }
        if (isset($this->warningOnly) && $this->warningOnly->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_WARNING_ONLY, $this->warningOnly->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->label) && $this->label->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_LABEL);
            $this->label->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->description) && $this->description->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->direction)) {
            $xw->startElement(self::FIELD_DIRECTION);
            $this->direction->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->compareToSourceId) && $this->compareToSourceId->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_COMPARE_TO_SOURCE_ID);
            $this->compareToSourceId->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->compareToSourceExpression) && $this->compareToSourceExpression->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_COMPARE_TO_SOURCE_EXPRESSION);
            $this->compareToSourceExpression->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->compareToSourcePath) && $this->compareToSourcePath->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_COMPARE_TO_SOURCE_PATH);
            $this->compareToSourcePath->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->contentType) && $this->contentType->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CONTENT_TYPE);
            $this->contentType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->expression) && $this->expression->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXPRESSION);
            $this->expression->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->headerField) && $this->headerField->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_HEADER_FIELD);
            $this->headerField->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->minimumId) && $this->minimumId->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MINIMUM_ID);
            $this->minimumId->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->navigationLinks) && $this->navigationLinks->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NAVIGATION_LINKS);
            $this->navigationLinks->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->operator)) {
            $xw->startElement(self::FIELD_OPERATOR);
            $this->operator->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->path) && $this->path->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATH);
            $this->path->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->requestMethod)) {
            $xw->startElement(self::FIELD_REQUEST_METHOD);
            $this->requestMethod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->requestURL) && $this->requestURL->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_REQUEST_URL);
            $this->requestURL->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->resource) && $this->resource->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_RESOURCE);
            $this->resource->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->response)) {
            $xw->startElement(self::FIELD_RESPONSE);
            $this->response->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->responseCode) && $this->responseCode->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_RESPONSE_CODE);
            $this->responseCode->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sourceId) && $this->sourceId->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SOURCE_ID);
            $this->sourceId->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->validateProfileId) && $this->validateProfileId->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALIDATE_PROFILE_ID);
            $this->validateProfileId->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->value) && $this->value->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALUE);
            $this->value->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->warningOnly) && $this->warningOnly->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_WARNING_ONLY);
            $this->warningOnly->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRTestScriptAssert)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_LABEL]) || isset($json[self::FIELD_LABEL_EXT]) || array_key_exists(self::FIELD_LABEL, $json) || array_key_exists(self::FIELD_LABEL_EXT, $json)) {
            $value = $json[self::FIELD_LABEL] ?? null;
            $ext = (isset($json[self::FIELD_LABEL_EXT]) && is_array($json[self::FIELD_LABEL_EXT])) ? $json[self::FIELD_LABEL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setLabel($value);
                } else if (is_array($value)) {
                    $type->setLabel(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setLabel(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setLabel(new FHIRString($ext));
            } else {
                $type->setLabel(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_DESCRIPTION]) || isset($json[self::FIELD_DESCRIPTION_EXT]) || array_key_exists(self::FIELD_DESCRIPTION, $json) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($json[self::FIELD_DESCRIPTION_EXT]) && is_array($json[self::FIELD_DESCRIPTION_EXT])) ? $json[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDescription($value);
                } else if (is_array($value)) {
                    $type->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDescription(new FHIRString($ext));
            } else {
                $type->setDescription(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_DIRECTION]) || isset($json[self::FIELD_DIRECTION_EXT]) || array_key_exists(self::FIELD_DIRECTION, $json) || array_key_exists(self::FIELD_DIRECTION_EXT, $json)) {
            $value = $json[self::FIELD_DIRECTION] ?? null;
            $ext = (isset($json[self::FIELD_DIRECTION_EXT]) && is_array($json[self::FIELD_DIRECTION_EXT])) ? $json[self::FIELD_DIRECTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAssertionDirectionType) {
                    $type->setDirection($value);
                } else if (is_array($value)) {
                    $type->setDirection(new FHIRAssertionDirectionType(array_merge($ext, $value)));
                } else {
                    $type->setDirection(new FHIRAssertionDirectionType([FHIRAssertionDirectionType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDirection(new FHIRAssertionDirectionType($ext));
            } else {
                $type->setDirection(new FHIRAssertionDirectionType(null));
            }
        }
        if (isset($json[self::FIELD_COMPARE_TO_SOURCE_ID]) || isset($json[self::FIELD_COMPARE_TO_SOURCE_ID_EXT]) || array_key_exists(self::FIELD_COMPARE_TO_SOURCE_ID, $json) || array_key_exists(self::FIELD_COMPARE_TO_SOURCE_ID_EXT, $json)) {
            $value = $json[self::FIELD_COMPARE_TO_SOURCE_ID] ?? null;
            $ext = (isset($json[self::FIELD_COMPARE_TO_SOURCE_ID_EXT]) && is_array($json[self::FIELD_COMPARE_TO_SOURCE_ID_EXT])) ? $json[self::FIELD_COMPARE_TO_SOURCE_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setCompareToSourceId($value);
                } else if (is_array($value)) {
                    $type->setCompareToSourceId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setCompareToSourceId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCompareToSourceId(new FHIRString($ext));
            } else {
                $type->setCompareToSourceId(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION]) || isset($json[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT]) || array_key_exists(self::FIELD_COMPARE_TO_SOURCE_EXPRESSION, $json) || array_key_exists(self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT, $json)) {
            $value = $json[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION] ?? null;
            $ext = (isset($json[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT]) && is_array($json[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT])) ? $json[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setCompareToSourceExpression($value);
                } else if (is_array($value)) {
                    $type->setCompareToSourceExpression(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setCompareToSourceExpression(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCompareToSourceExpression(new FHIRString($ext));
            } else {
                $type->setCompareToSourceExpression(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_COMPARE_TO_SOURCE_PATH]) || isset($json[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT]) || array_key_exists(self::FIELD_COMPARE_TO_SOURCE_PATH, $json) || array_key_exists(self::FIELD_COMPARE_TO_SOURCE_PATH_EXT, $json)) {
            $value = $json[self::FIELD_COMPARE_TO_SOURCE_PATH] ?? null;
            $ext = (isset($json[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT]) && is_array($json[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT])) ? $json[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setCompareToSourcePath($value);
                } else if (is_array($value)) {
                    $type->setCompareToSourcePath(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setCompareToSourcePath(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCompareToSourcePath(new FHIRString($ext));
            } else {
                $type->setCompareToSourcePath(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_CONTENT_TYPE]) || isset($json[self::FIELD_CONTENT_TYPE_EXT]) || array_key_exists(self::FIELD_CONTENT_TYPE, $json) || array_key_exists(self::FIELD_CONTENT_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_CONTENT_TYPE] ?? null;
            $ext = (isset($json[self::FIELD_CONTENT_TYPE_EXT]) && is_array($json[self::FIELD_CONTENT_TYPE_EXT])) ? $json[self::FIELD_CONTENT_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $type->setContentType($value);
                } else if (is_array($value)) {
                    $type->setContentType(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $type->setContentType(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setContentType(new FHIRCode($ext));
            } else {
                $type->setContentType(new FHIRCode(null));
            }
        }
        if (isset($json[self::FIELD_EXPRESSION]) || isset($json[self::FIELD_EXPRESSION_EXT]) || array_key_exists(self::FIELD_EXPRESSION, $json) || array_key_exists(self::FIELD_EXPRESSION_EXT, $json)) {
            $value = $json[self::FIELD_EXPRESSION] ?? null;
            $ext = (isset($json[self::FIELD_EXPRESSION_EXT]) && is_array($json[self::FIELD_EXPRESSION_EXT])) ? $json[self::FIELD_EXPRESSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setExpression($value);
                } else if (is_array($value)) {
                    $type->setExpression(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setExpression(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setExpression(new FHIRString($ext));
            } else {
                $type->setExpression(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_HEADER_FIELD]) || isset($json[self::FIELD_HEADER_FIELD_EXT]) || array_key_exists(self::FIELD_HEADER_FIELD, $json) || array_key_exists(self::FIELD_HEADER_FIELD_EXT, $json)) {
            $value = $json[self::FIELD_HEADER_FIELD] ?? null;
            $ext = (isset($json[self::FIELD_HEADER_FIELD_EXT]) && is_array($json[self::FIELD_HEADER_FIELD_EXT])) ? $json[self::FIELD_HEADER_FIELD_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setHeaderField($value);
                } else if (is_array($value)) {
                    $type->setHeaderField(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setHeaderField(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setHeaderField(new FHIRString($ext));
            } else {
                $type->setHeaderField(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_MINIMUM_ID]) || isset($json[self::FIELD_MINIMUM_ID_EXT]) || array_key_exists(self::FIELD_MINIMUM_ID, $json) || array_key_exists(self::FIELD_MINIMUM_ID_EXT, $json)) {
            $value = $json[self::FIELD_MINIMUM_ID] ?? null;
            $ext = (isset($json[self::FIELD_MINIMUM_ID_EXT]) && is_array($json[self::FIELD_MINIMUM_ID_EXT])) ? $json[self::FIELD_MINIMUM_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setMinimumId($value);
                } else if (is_array($value)) {
                    $type->setMinimumId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setMinimumId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMinimumId(new FHIRString($ext));
            } else {
                $type->setMinimumId(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_NAVIGATION_LINKS]) || isset($json[self::FIELD_NAVIGATION_LINKS_EXT]) || array_key_exists(self::FIELD_NAVIGATION_LINKS, $json) || array_key_exists(self::FIELD_NAVIGATION_LINKS_EXT, $json)) {
            $value = $json[self::FIELD_NAVIGATION_LINKS] ?? null;
            $ext = (isset($json[self::FIELD_NAVIGATION_LINKS_EXT]) && is_array($json[self::FIELD_NAVIGATION_LINKS_EXT])) ? $json[self::FIELD_NAVIGATION_LINKS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setNavigationLinks($value);
                } else if (is_array($value)) {
                    $type->setNavigationLinks(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setNavigationLinks(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setNavigationLinks(new FHIRBoolean($ext));
            } else {
                $type->setNavigationLinks(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_OPERATOR]) || isset($json[self::FIELD_OPERATOR_EXT]) || array_key_exists(self::FIELD_OPERATOR, $json) || array_key_exists(self::FIELD_OPERATOR_EXT, $json)) {
            $value = $json[self::FIELD_OPERATOR] ?? null;
            $ext = (isset($json[self::FIELD_OPERATOR_EXT]) && is_array($json[self::FIELD_OPERATOR_EXT])) ? $json[self::FIELD_OPERATOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAssertionOperatorType) {
                    $type->setOperator($value);
                } else if (is_array($value)) {
                    $type->setOperator(new FHIRAssertionOperatorType(array_merge($ext, $value)));
                } else {
                    $type->setOperator(new FHIRAssertionOperatorType([FHIRAssertionOperatorType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setOperator(new FHIRAssertionOperatorType($ext));
            } else {
                $type->setOperator(new FHIRAssertionOperatorType(null));
            }
        }
        if (isset($json[self::FIELD_PATH]) || isset($json[self::FIELD_PATH_EXT]) || array_key_exists(self::FIELD_PATH, $json) || array_key_exists(self::FIELD_PATH_EXT, $json)) {
            $value = $json[self::FIELD_PATH] ?? null;
            $ext = (isset($json[self::FIELD_PATH_EXT]) && is_array($json[self::FIELD_PATH_EXT])) ? $json[self::FIELD_PATH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setPath($value);
                } else if (is_array($value)) {
                    $type->setPath(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setPath(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPath(new FHIRString($ext));
            } else {
                $type->setPath(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_REQUEST_METHOD]) || isset($json[self::FIELD_REQUEST_METHOD_EXT]) || array_key_exists(self::FIELD_REQUEST_METHOD, $json) || array_key_exists(self::FIELD_REQUEST_METHOD_EXT, $json)) {
            $value = $json[self::FIELD_REQUEST_METHOD] ?? null;
            $ext = (isset($json[self::FIELD_REQUEST_METHOD_EXT]) && is_array($json[self::FIELD_REQUEST_METHOD_EXT])) ? $json[self::FIELD_REQUEST_METHOD_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTestScriptRequestMethodCode) {
                    $type->setRequestMethod($value);
                } else if (is_array($value)) {
                    $type->setRequestMethod(new FHIRTestScriptRequestMethodCode(array_merge($ext, $value)));
                } else {
                    $type->setRequestMethod(new FHIRTestScriptRequestMethodCode([FHIRTestScriptRequestMethodCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setRequestMethod(new FHIRTestScriptRequestMethodCode($ext));
            } else {
                $type->setRequestMethod(new FHIRTestScriptRequestMethodCode(null));
            }
        }
        if (isset($json[self::FIELD_REQUEST_URL]) || isset($json[self::FIELD_REQUEST_URL_EXT]) || array_key_exists(self::FIELD_REQUEST_URL, $json) || array_key_exists(self::FIELD_REQUEST_URL_EXT, $json)) {
            $value = $json[self::FIELD_REQUEST_URL] ?? null;
            $ext = (isset($json[self::FIELD_REQUEST_URL_EXT]) && is_array($json[self::FIELD_REQUEST_URL_EXT])) ? $json[self::FIELD_REQUEST_URL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setRequestURL($value);
                } else if (is_array($value)) {
                    $type->setRequestURL(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setRequestURL(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setRequestURL(new FHIRString($ext));
            } else {
                $type->setRequestURL(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_RESOURCE]) || isset($json[self::FIELD_RESOURCE_EXT]) || array_key_exists(self::FIELD_RESOURCE, $json) || array_key_exists(self::FIELD_RESOURCE_EXT, $json)) {
            $value = $json[self::FIELD_RESOURCE] ?? null;
            $ext = (isset($json[self::FIELD_RESOURCE_EXT]) && is_array($json[self::FIELD_RESOURCE_EXT])) ? $json[self::FIELD_RESOURCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $type->setResource($value);
                } else if (is_array($value)) {
                    $type->setResource(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $type->setResource(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setResource(new FHIRCode($ext));
            } else {
                $type->setResource(new FHIRCode(null));
            }
        }
        if (isset($json[self::FIELD_RESPONSE]) || isset($json[self::FIELD_RESPONSE_EXT]) || array_key_exists(self::FIELD_RESPONSE, $json) || array_key_exists(self::FIELD_RESPONSE_EXT, $json)) {
            $value = $json[self::FIELD_RESPONSE] ?? null;
            $ext = (isset($json[self::FIELD_RESPONSE_EXT]) && is_array($json[self::FIELD_RESPONSE_EXT])) ? $json[self::FIELD_RESPONSE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAssertionResponseTypes) {
                    $type->setResponse($value);
                } else if (is_array($value)) {
                    $type->setResponse(new FHIRAssertionResponseTypes(array_merge($ext, $value)));
                } else {
                    $type->setResponse(new FHIRAssertionResponseTypes([FHIRAssertionResponseTypes::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setResponse(new FHIRAssertionResponseTypes($ext));
            } else {
                $type->setResponse(new FHIRAssertionResponseTypes(null));
            }
        }
        if (isset($json[self::FIELD_RESPONSE_CODE]) || isset($json[self::FIELD_RESPONSE_CODE_EXT]) || array_key_exists(self::FIELD_RESPONSE_CODE, $json) || array_key_exists(self::FIELD_RESPONSE_CODE_EXT, $json)) {
            $value = $json[self::FIELD_RESPONSE_CODE] ?? null;
            $ext = (isset($json[self::FIELD_RESPONSE_CODE_EXT]) && is_array($json[self::FIELD_RESPONSE_CODE_EXT])) ? $json[self::FIELD_RESPONSE_CODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setResponseCode($value);
                } else if (is_array($value)) {
                    $type->setResponseCode(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setResponseCode(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setResponseCode(new FHIRString($ext));
            } else {
                $type->setResponseCode(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_SOURCE_ID]) || isset($json[self::FIELD_SOURCE_ID_EXT]) || array_key_exists(self::FIELD_SOURCE_ID, $json) || array_key_exists(self::FIELD_SOURCE_ID_EXT, $json)) {
            $value = $json[self::FIELD_SOURCE_ID] ?? null;
            $ext = (isset($json[self::FIELD_SOURCE_ID_EXT]) && is_array($json[self::FIELD_SOURCE_ID_EXT])) ? $json[self::FIELD_SOURCE_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $type->setSourceId($value);
                } else if (is_array($value)) {
                    $type->setSourceId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $type->setSourceId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSourceId(new FHIRId($ext));
            } else {
                $type->setSourceId(new FHIRId(null));
            }
        }
        if (isset($json[self::FIELD_VALIDATE_PROFILE_ID]) || isset($json[self::FIELD_VALIDATE_PROFILE_ID_EXT]) || array_key_exists(self::FIELD_VALIDATE_PROFILE_ID, $json) || array_key_exists(self::FIELD_VALIDATE_PROFILE_ID_EXT, $json)) {
            $value = $json[self::FIELD_VALIDATE_PROFILE_ID] ?? null;
            $ext = (isset($json[self::FIELD_VALIDATE_PROFILE_ID_EXT]) && is_array($json[self::FIELD_VALIDATE_PROFILE_ID_EXT])) ? $json[self::FIELD_VALIDATE_PROFILE_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $type->setValidateProfileId($value);
                } else if (is_array($value)) {
                    $type->setValidateProfileId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $type->setValidateProfileId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setValidateProfileId(new FHIRId($ext));
            } else {
                $type->setValidateProfileId(new FHIRId(null));
            }
        }
        if (isset($json[self::FIELD_VALUE]) || isset($json[self::FIELD_VALUE_EXT]) || array_key_exists(self::FIELD_VALUE, $json) || array_key_exists(self::FIELD_VALUE_EXT, $json)) {
            $value = $json[self::FIELD_VALUE] ?? null;
            $ext = (isset($json[self::FIELD_VALUE_EXT]) && is_array($json[self::FIELD_VALUE_EXT])) ? $json[self::FIELD_VALUE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setValue($value);
                } else if (is_array($value)) {
                    $type->setValue(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setValue(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setValue(new FHIRString($ext));
            } else {
                $type->setValue(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_WARNING_ONLY]) || isset($json[self::FIELD_WARNING_ONLY_EXT]) || array_key_exists(self::FIELD_WARNING_ONLY, $json) || array_key_exists(self::FIELD_WARNING_ONLY_EXT, $json)) {
            $value = $json[self::FIELD_WARNING_ONLY] ?? null;
            $ext = (isset($json[self::FIELD_WARNING_ONLY_EXT]) && is_array($json[self::FIELD_WARNING_ONLY_EXT])) ? $json[self::FIELD_WARNING_ONLY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setWarningOnly($value);
                } else if (is_array($value)) {
                    $type->setWarningOnly(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setWarningOnly(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setWarningOnly(new FHIRBoolean($ext));
            } else {
                $type->setWarningOnly(new FHIRBoolean(null));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->label)) {
            if (null !== ($val = $this->label->getValue())) {
                $out->label = $val;
            }
            $ext = $this->label->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_label = $ext;
            }
        }
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            $ext = $this->description->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_description = $ext;
            }
        }
        if (isset($this->direction)) {
            if (null !== ($val = $this->direction->getValue())) {
                $out->direction = $val;
            }
            $ext = $this->direction->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_direction = $ext;
            }
        }
        if (isset($this->compareToSourceId)) {
            if (null !== ($val = $this->compareToSourceId->getValue())) {
                $out->compareToSourceId = $val;
            }
            $ext = $this->compareToSourceId->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_compareToSourceId = $ext;
            }
        }
        if (isset($this->compareToSourceExpression)) {
            if (null !== ($val = $this->compareToSourceExpression->getValue())) {
                $out->compareToSourceExpression = $val;
            }
            $ext = $this->compareToSourceExpression->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_compareToSourceExpression = $ext;
            }
        }
        if (isset($this->compareToSourcePath)) {
            if (null !== ($val = $this->compareToSourcePath->getValue())) {
                $out->compareToSourcePath = $val;
            }
            $ext = $this->compareToSourcePath->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_compareToSourcePath = $ext;
            }
        }
        if (isset($this->contentType)) {
            if (null !== ($val = $this->contentType->getValue())) {
                $out->contentType = $val;
            }
            $ext = $this->contentType->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_contentType = $ext;
            }
        }
        if (isset($this->expression)) {
            if (null !== ($val = $this->expression->getValue())) {
                $out->expression = $val;
            }
            $ext = $this->expression->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_expression = $ext;
            }
        }
        if (isset($this->headerField)) {
            if (null !== ($val = $this->headerField->getValue())) {
                $out->headerField = $val;
            }
            $ext = $this->headerField->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_headerField = $ext;
            }
        }
        if (isset($this->minimumId)) {
            if (null !== ($val = $this->minimumId->getValue())) {
                $out->minimumId = $val;
            }
            $ext = $this->minimumId->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_minimumId = $ext;
            }
        }
        if (isset($this->navigationLinks)) {
            if (null !== ($val = $this->navigationLinks->getValue())) {
                $out->navigationLinks = $val;
            }
            $ext = $this->navigationLinks->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_navigationLinks = $ext;
            }
        }
        if (isset($this->operator)) {
            if (null !== ($val = $this->operator->getValue())) {
                $out->operator = $val;
            }
            $ext = $this->operator->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_operator = $ext;
            }
        }
        if (isset($this->path)) {
            if (null !== ($val = $this->path->getValue())) {
                $out->path = $val;
            }
            $ext = $this->path->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_path = $ext;
            }
        }
        if (isset($this->requestMethod)) {
            if (null !== ($val = $this->requestMethod->getValue())) {
                $out->requestMethod = $val;
            }
            $ext = $this->requestMethod->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_requestMethod = $ext;
            }
        }
        if (isset($this->requestURL)) {
            if (null !== ($val = $this->requestURL->getValue())) {
                $out->requestURL = $val;
            }
            $ext = $this->requestURL->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_requestURL = $ext;
            }
        }
        if (isset($this->resource)) {
            if (null !== ($val = $this->resource->getValue())) {
                $out->resource = $val;
            }
            $ext = $this->resource->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_resource = $ext;
            }
        }
        if (isset($this->response)) {
            if (null !== ($val = $this->response->getValue())) {
                $out->response = $val;
            }
            $ext = $this->response->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_response = $ext;
            }
        }
        if (isset($this->responseCode)) {
            if (null !== ($val = $this->responseCode->getValue())) {
                $out->responseCode = $val;
            }
            $ext = $this->responseCode->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_responseCode = $ext;
            }
        }
        if (isset($this->sourceId)) {
            if (null !== ($val = $this->sourceId->getValue())) {
                $out->sourceId = $val;
            }
            $ext = $this->sourceId->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_sourceId = $ext;
            }
        }
        if (isset($this->validateProfileId)) {
            if (null !== ($val = $this->validateProfileId->getValue())) {
                $out->validateProfileId = $val;
            }
            $ext = $this->validateProfileId->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_validateProfileId = $ext;
            }
        }
        if (isset($this->value)) {
            if (null !== ($val = $this->value->getValue())) {
                $out->value = $val;
            }
            $ext = $this->value->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_value = $ext;
            }
        }
        if (isset($this->warningOnly)) {
            if (null !== ($val = $this->warningOnly->getValue())) {
                $out->warningOnly = $val;
            }
            $ext = $this->warningOnly->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_warningOnly = $ext;
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