<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestScript;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 22:01+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAssertionDirectionType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAssertionManualCompletionType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAssertionOperatorType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAssertionResponseTypes;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRTestScriptRequestMethodCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAssertionDirectionTypeEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAssertionManualCompletionTypeEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAssertionOperatorTypeEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAssertionResponseTypesEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRTestScriptRequestMethodCodeEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A structured set of tests against a FHIR server or client implementation to
 * determine compliance against the FHIR specification.
 */
class FHIRTestScriptAssert extends FHIRBackboneElement
{    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT;

    /* class_default.php:47 */
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
    public const FIELD_DEFAULT_MANUAL_COMPLETION = 'defaultManualCompletion';
    public const FIELD_DEFAULT_MANUAL_COMPLETION_EXT = '_defaultManualCompletion';
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
    public const FIELD_STOP_TEST_ON_FAIL = 'stopTestOnFail';
    public const FIELD_STOP_TEST_ON_FAIL_EXT = '_stopTestOnFail';
    public const FIELD_VALIDATE_PROFILE_ID = 'validateProfileId';
    public const FIELD_VALIDATE_PROFILE_ID_EXT = '_validateProfileId';
    public const FIELD_VALUE = 'value';
    public const FIELD_VALUE_EXT = '_value';
    public const FIELD_WARNING_ONLY = 'warningOnly';
    public const FIELD_WARNING_ONLY_EXT = '_warningOnly';
    public const FIELD_REQUIREMENT = 'requirement';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_STOP_TEST_ON_FAIL => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_WARNING_ONLY => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_LABEL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DIRECTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COMPARE_TO_SOURCE_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COMPARE_TO_SOURCE_EXPRESSION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COMPARE_TO_SOURCE_PATH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CONTENT_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_MANUAL_COMPLETION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXPRESSION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_HEADER_FIELD => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MINIMUM_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NAVIGATION_LINKS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_OPERATOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PATH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_REQUEST_METHOD => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_REQUEST_URL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_RESOURCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_RESPONSE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_RESPONSE_CODE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SOURCE_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STOP_TEST_ON_FAIL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALIDATE_PROFILE_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_WARNING_ONLY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $label;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The description would be used by test engines for tracking and reporting
     * purposes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $description;
    /**
     * The type of direction to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The direction to use for the assertion.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAssertionDirectionType 
     */
    protected FHIRAssertionDirectionType $direction;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the source fixture used as the contents to be evaluated by either the
     * "source/expression" or "sourceId/path" definition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $compareToSourceId;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath expression for a specific value to evaluate against the source
     * fixture. When compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $compareToSourceExpression;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * XPath or JSONPath expression to evaluate against the source fixture. When
     * compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode 
     */
    protected FHIRCode $contentType;
    /**
     * The type of operator to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The default manual completion outcome applied to this assertion.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAssertionManualCompletionType 
     */
    protected FHIRAssertionManualCompletionType $defaultManualCompletion;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath expression to be evaluated against the request or response message
     * contents - HTTP headers and payload.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $expression;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The HTTP header field name e.g. 'Location'.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $headerField;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The ID of a fixture. Asserts that the response contains at a minimum the fixture
     * specified by minimumId.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $minimumId;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution performs validation on the bundle navigation
     * links.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $navigationLinks;
    /**
     * The type of operator to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The operator type defines the conditional behavior of the assert.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAssertionOperatorType 
     */
    protected FHIRAssertionOperatorType $operator;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The XPath or JSONPath expression to be evaluated against the fixture
     * representing the response received from server.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $path;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The request method or HTTP operation code to compare against that used by the
     * client system under test.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRTestScriptRequestMethodCode 
     */
    protected FHIRTestScriptRequestMethodCode $requestMethod;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to use in a comparison against the request URL path string.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $requestURL;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of the resource. See the [resource list](resourcelist.html).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri 
     */
    protected FHIRUri $resource;
    /**
     * The type of response code to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * continue | switchingProtocols | okay | created | accepted |
     * nonAuthoritativeInformation | noContent | resetContent | partialContent |
     * multipleChoices | movedPermanently | found | seeOther | notModified | useProxy |
     * temporaryRedirect | permanentRedirect | badRequest | unauthorized |
     * paymentRequired | forbidden | notFound | methodNotAllowed | notAcceptable |
     * proxyAuthenticationRequired | requestTimeout | conflict | gone | lengthRequired
     * | preconditionFailed | contentTooLarge | uriTooLong | unsupportedMediaType |
     * rangeNotSatisfiable | expectationFailed | misdirectedRequest |
     * unprocessableContent | upgradeRequired | internalServerError | notImplemented |
     * badGateway | serviceUnavailable | gatewayTimeout | httpVersionNotSupported.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAssertionResponseTypes 
     */
    protected FHIRAssertionResponseTypes $response;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the HTTP response code to be tested.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId 
     */
    protected FHIRId $sourceId;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the current test execution will stop on failure for this assert.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $stopTestOnFail;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId 
     */
    protected FHIRId $validateProfileId;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to compare to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $value;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution will produce a warning only on error for this
     * assert.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $warningOnly;
    /**
     * A structured set of tests against a FHIR server or client implementation to
     * determine compliance against the FHIR specification.
     *
     * Links or references providing traceability to the testing requirements for this
     * assert.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequirement[] 
     */
    protected array $requirement;

    /* constructor.php:63 */
    /**
     * FHIRTestScriptAssert Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $label
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $description
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAssertionDirectionTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAssertionDirectionType $direction
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $compareToSourceId
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $compareToSourceExpression
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $compareToSourcePath
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $contentType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAssertionManualCompletionTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAssertionManualCompletionType $defaultManualCompletion
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $expression
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $headerField
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $minimumId
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $navigationLinks
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAssertionOperatorTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAssertionOperatorType $operator
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $path
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRTestScriptRequestMethodCodeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRTestScriptRequestMethodCode $requestMethod
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $requestURL
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $resource
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAssertionResponseTypesEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAssertionResponseTypes $response
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $responseCode
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $sourceId
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $stopTestOnFail
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $validateProfileId
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $value
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $warningOnly
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequirement[] $requirement
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $label = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|string|FHIRAssertionDirectionTypeEnum|FHIRAssertionDirectionType $direction = null,
                                null|string|FHIRStringPrimitive|FHIRString $compareToSourceId = null,
                                null|string|FHIRStringPrimitive|FHIRString $compareToSourceExpression = null,
                                null|string|FHIRStringPrimitive|FHIRString $compareToSourcePath = null,
                                null|string|FHIRCodePrimitive|FHIRCode $contentType = null,
                                null|string|FHIRAssertionManualCompletionTypeEnum|FHIRAssertionManualCompletionType $defaultManualCompletion = null,
                                null|string|FHIRStringPrimitive|FHIRString $expression = null,
                                null|string|FHIRStringPrimitive|FHIRString $headerField = null,
                                null|string|FHIRStringPrimitive|FHIRString $minimumId = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $navigationLinks = null,
                                null|string|FHIRAssertionOperatorTypeEnum|FHIRAssertionOperatorType $operator = null,
                                null|string|FHIRStringPrimitive|FHIRString $path = null,
                                null|string|FHIRTestScriptRequestMethodCodeEnum|FHIRTestScriptRequestMethodCode $requestMethod = null,
                                null|string|FHIRStringPrimitive|FHIRString $requestURL = null,
                                null|string|FHIRUriPrimitive|FHIRUri $resource = null,
                                null|string|FHIRAssertionResponseTypesEnum|FHIRAssertionResponseTypes $response = null,
                                null|string|FHIRStringPrimitive|FHIRString $responseCode = null,
                                null|string|FHIRIdPrimitive|FHIRId $sourceId = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $stopTestOnFail = null,
                                null|string|FHIRIdPrimitive|FHIRId $validateProfileId = null,
                                null|string|FHIRStringPrimitive|FHIRString $value = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $warningOnly = null,
                                null|iterable $requirement = null,
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
        if (null !== $defaultManualCompletion) {
            $this->setDefaultManualCompletion($defaultManualCompletion);
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
        if (null !== $stopTestOnFail) {
            $this->setStopTestOnFail($stopTestOnFail);
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
        if (null !== $requirement) {
            $this->setRequirement(...$requirement);
        }
    }

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getLabel(): null|FHIRString
    {
        return $this->label ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $label
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLabel(null|string|FHIRStringPrimitive|FHIRString $label,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $label) {
            unset($this->label);
            return $this;
        }
        if (!($label instanceof FHIRString)) {
            $label = new FHIRString(value: $label);
        }
        $this->label = $label;
        if ($this->_valueXMLLocations[self::FIELD_LABEL] !== $valueXMLLocation) {
            $this->_setLabelValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the label element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getLabelValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_LABEL];
    }

    /**
     * Set the location the "value" field of the label element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setLabelValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_LABEL] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The description would be used by test engines for tracking and reporting
     * purposes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The description would be used by test engines for tracking and reporting
     * purposes.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $description
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRString)) {
            $description = new FHIRString(value: $description);
        }
        $this->description = $description;
        if ($this->_valueXMLLocations[self::FIELD_DESCRIPTION] !== $valueXMLLocation) {
            $this->_setDescriptionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the description element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDescriptionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DESCRIPTION];
    }

    /**
     * Set the location the "value" field of the description element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDescriptionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DESCRIPTION] = $valueXMLLocation;
        return $this;
    }

    /**
     * The type of direction to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The direction to use for the assertion.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAssertionDirectionType
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAssertionDirectionTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAssertionDirectionType $direction
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDirection(null|string|FHIRAssertionDirectionTypeEnum|FHIRAssertionDirectionType $direction,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $direction) {
            unset($this->direction);
            return $this;
        }
        if (!($direction instanceof FHIRAssertionDirectionType)) {
            $direction = new FHIRAssertionDirectionType(value: $direction);
        }
        $this->direction = $direction;
        if ($this->_valueXMLLocations[self::FIELD_DIRECTION] !== $valueXMLLocation) {
            $this->_setDirectionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the direction element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDirectionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DIRECTION];
    }

    /**
     * Set the location the "value" field of the direction element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDirectionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DIRECTION] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the source fixture used as the contents to be evaluated by either the
     * "source/expression" or "sourceId/path" definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getCompareToSourceId(): null|FHIRString
    {
        return $this->compareToSourceId ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the source fixture used as the contents to be evaluated by either the
     * "source/expression" or "sourceId/path" definition.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $compareToSourceId
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCompareToSourceId(null|string|FHIRStringPrimitive|FHIRString $compareToSourceId,
                                         ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $compareToSourceId) {
            unset($this->compareToSourceId);
            return $this;
        }
        if (!($compareToSourceId instanceof FHIRString)) {
            $compareToSourceId = new FHIRString(value: $compareToSourceId);
        }
        $this->compareToSourceId = $compareToSourceId;
        if ($this->_valueXMLLocations[self::FIELD_COMPARE_TO_SOURCE_ID] !== $valueXMLLocation) {
            $this->_setCompareToSourceIdValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the compareToSourceId element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCompareToSourceIdValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_COMPARE_TO_SOURCE_ID];
    }

    /**
     * Set the location the "value" field of the compareToSourceId element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCompareToSourceIdValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_COMPARE_TO_SOURCE_ID] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath expression for a specific value to evaluate against the source
     * fixture. When compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getCompareToSourceExpression(): null|FHIRString
    {
        return $this->compareToSourceExpression ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath expression for a specific value to evaluate against the source
     * fixture. When compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $compareToSourceExpression
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCompareToSourceExpression(null|string|FHIRStringPrimitive|FHIRString $compareToSourceExpression,
                                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $compareToSourceExpression) {
            unset($this->compareToSourceExpression);
            return $this;
        }
        if (!($compareToSourceExpression instanceof FHIRString)) {
            $compareToSourceExpression = new FHIRString(value: $compareToSourceExpression);
        }
        $this->compareToSourceExpression = $compareToSourceExpression;
        if ($this->_valueXMLLocations[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION] !== $valueXMLLocation) {
            $this->_setCompareToSourceExpressionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the compareToSourceExpression element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCompareToSourceExpressionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION];
    }

    /**
     * Set the location the "value" field of the compareToSourceExpression element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCompareToSourceExpressionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * XPath or JSONPath expression to evaluate against the source fixture. When
     * compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getCompareToSourcePath(): null|FHIRString
    {
        return $this->compareToSourcePath ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * XPath or JSONPath expression to evaluate against the source fixture. When
     * compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $compareToSourcePath
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCompareToSourcePath(null|string|FHIRStringPrimitive|FHIRString $compareToSourcePath,
                                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $compareToSourcePath) {
            unset($this->compareToSourcePath);
            return $this;
        }
        if (!($compareToSourcePath instanceof FHIRString)) {
            $compareToSourcePath = new FHIRString(value: $compareToSourcePath);
        }
        $this->compareToSourcePath = $compareToSourcePath;
        if ($this->_valueXMLLocations[self::FIELD_COMPARE_TO_SOURCE_PATH] !== $valueXMLLocation) {
            $this->_setCompareToSourcePathValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the compareToSourcePath element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCompareToSourcePathValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_COMPARE_TO_SOURCE_PATH];
    }

    /**
     * Set the location the "value" field of the compareToSourcePath element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCompareToSourcePathValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_COMPARE_TO_SOURCE_PATH] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $contentType
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setContentType(null|string|FHIRCodePrimitive|FHIRCode $contentType,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $contentType) {
            unset($this->contentType);
            return $this;
        }
        if (!($contentType instanceof FHIRCode)) {
            $contentType = new FHIRCode(value: $contentType);
        }
        $this->contentType = $contentType;
        if ($this->_valueXMLLocations[self::FIELD_CONTENT_TYPE] !== $valueXMLLocation) {
            $this->_setContentTypeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the contentType element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getContentTypeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CONTENT_TYPE];
    }

    /**
     * Set the location the "value" field of the contentType element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setContentTypeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CONTENT_TYPE] = $valueXMLLocation;
        return $this;
    }

    /**
     * The type of operator to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The default manual completion outcome applied to this assertion.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAssertionManualCompletionType
     */
    public function getDefaultManualCompletion(): null|FHIRAssertionManualCompletionType
    {
        return $this->defaultManualCompletion ?? null;
    }

    /**
     * The type of operator to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The default manual completion outcome applied to this assertion.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAssertionManualCompletionTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAssertionManualCompletionType $defaultManualCompletion
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefaultManualCompletion(null|string|FHIRAssertionManualCompletionTypeEnum|FHIRAssertionManualCompletionType $defaultManualCompletion,
                                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $defaultManualCompletion) {
            unset($this->defaultManualCompletion);
            return $this;
        }
        if (!($defaultManualCompletion instanceof FHIRAssertionManualCompletionType)) {
            $defaultManualCompletion = new FHIRAssertionManualCompletionType(value: $defaultManualCompletion);
        }
        $this->defaultManualCompletion = $defaultManualCompletion;
        if ($this->_valueXMLLocations[self::FIELD_DEFAULT_MANUAL_COMPLETION] !== $valueXMLLocation) {
            $this->_setDefaultManualCompletionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the defaultManualCompletion element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefaultManualCompletionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFAULT_MANUAL_COMPLETION];
    }

    /**
     * Set the location the "value" field of the defaultManualCompletion element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefaultManualCompletionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFAULT_MANUAL_COMPLETION] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath expression to be evaluated against the request or response message
     * contents - HTTP headers and payload.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getExpression(): null|FHIRString
    {
        return $this->expression ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath expression to be evaluated against the request or response message
     * contents - HTTP headers and payload.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $expression
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExpression(null|string|FHIRStringPrimitive|FHIRString $expression,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $expression) {
            unset($this->expression);
            return $this;
        }
        if (!($expression instanceof FHIRString)) {
            $expression = new FHIRString(value: $expression);
        }
        $this->expression = $expression;
        if ($this->_valueXMLLocations[self::FIELD_EXPRESSION] !== $valueXMLLocation) {
            $this->_setExpressionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the expression element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExpressionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXPRESSION];
    }

    /**
     * Set the location the "value" field of the expression element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExpressionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXPRESSION] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The HTTP header field name e.g. 'Location'.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getHeaderField(): null|FHIRString
    {
        return $this->headerField ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The HTTP header field name e.g. 'Location'.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $headerField
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setHeaderField(null|string|FHIRStringPrimitive|FHIRString $headerField,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $headerField) {
            unset($this->headerField);
            return $this;
        }
        if (!($headerField instanceof FHIRString)) {
            $headerField = new FHIRString(value: $headerField);
        }
        $this->headerField = $headerField;
        if ($this->_valueXMLLocations[self::FIELD_HEADER_FIELD] !== $valueXMLLocation) {
            $this->_setHeaderFieldValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the headerField element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getHeaderFieldValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_HEADER_FIELD];
    }

    /**
     * Set the location the "value" field of the headerField element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setHeaderFieldValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_HEADER_FIELD] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The ID of a fixture. Asserts that the response contains at a minimum the fixture
     * specified by minimumId.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getMinimumId(): null|FHIRString
    {
        return $this->minimumId ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The ID of a fixture. Asserts that the response contains at a minimum the fixture
     * specified by minimumId.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $minimumId
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMinimumId(null|string|FHIRStringPrimitive|FHIRString $minimumId,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $minimumId) {
            unset($this->minimumId);
            return $this;
        }
        if (!($minimumId instanceof FHIRString)) {
            $minimumId = new FHIRString(value: $minimumId);
        }
        $this->minimumId = $minimumId;
        if ($this->_valueXMLLocations[self::FIELD_MINIMUM_ID] !== $valueXMLLocation) {
            $this->_setMinimumIdValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the minimumId element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getMinimumIdValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_MINIMUM_ID];
    }

    /**
     * Set the location the "value" field of the minimumId element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setMinimumIdValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_MINIMUM_ID] = $valueXMLLocation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution performs validation on the bundle navigation
     * links.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $navigationLinks
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setNavigationLinks(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $navigationLinks,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $navigationLinks) {
            unset($this->navigationLinks);
            return $this;
        }
        if (!($navigationLinks instanceof FHIRBoolean)) {
            $navigationLinks = new FHIRBoolean(value: $navigationLinks);
        }
        $this->navigationLinks = $navigationLinks;
        if ($this->_valueXMLLocations[self::FIELD_NAVIGATION_LINKS] !== $valueXMLLocation) {
            $this->_setNavigationLinksValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the navigationLinks element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getNavigationLinksValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_NAVIGATION_LINKS];
    }

    /**
     * Set the location the "value" field of the navigationLinks element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setNavigationLinksValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_NAVIGATION_LINKS] = $valueXMLLocation;
        return $this;
    }

    /**
     * The type of operator to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The operator type defines the conditional behavior of the assert.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAssertionOperatorType
     */
    public function getOperator(): null|FHIRAssertionOperatorType
    {
        return $this->operator ?? null;
    }

    /**
     * The type of operator to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The operator type defines the conditional behavior of the assert.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAssertionOperatorTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAssertionOperatorType $operator
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOperator(null|string|FHIRAssertionOperatorTypeEnum|FHIRAssertionOperatorType $operator,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $operator) {
            unset($this->operator);
            return $this;
        }
        if (!($operator instanceof FHIRAssertionOperatorType)) {
            $operator = new FHIRAssertionOperatorType(value: $operator);
        }
        $this->operator = $operator;
        if ($this->_valueXMLLocations[self::FIELD_OPERATOR] !== $valueXMLLocation) {
            $this->_setOperatorValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the operator element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getOperatorValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_OPERATOR];
    }

    /**
     * Set the location the "value" field of the operator element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setOperatorValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_OPERATOR] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The XPath or JSONPath expression to be evaluated against the fixture
     * representing the response received from server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getPath(): null|FHIRString
    {
        return $this->path ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The XPath or JSONPath expression to be evaluated against the fixture
     * representing the response received from server.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $path
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPath(null|string|FHIRStringPrimitive|FHIRString $path,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $path) {
            unset($this->path);
            return $this;
        }
        if (!($path instanceof FHIRString)) {
            $path = new FHIRString(value: $path);
        }
        $this->path = $path;
        if ($this->_valueXMLLocations[self::FIELD_PATH] !== $valueXMLLocation) {
            $this->_setPathValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the path element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPathValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PATH];
    }

    /**
     * Set the location the "value" field of the path element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPathValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PATH] = $valueXMLLocation;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The request method or HTTP operation code to compare against that used by the
     * client system under test.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRTestScriptRequestMethodCode
     */
    public function getRequestMethod(): null|FHIRTestScriptRequestMethodCode
    {
        return $this->requestMethod ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The request method or HTTP operation code to compare against that used by the
     * client system under test.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRTestScriptRequestMethodCodeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRTestScriptRequestMethodCode $requestMethod
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRequestMethod(null|string|FHIRTestScriptRequestMethodCodeEnum|FHIRTestScriptRequestMethodCode $requestMethod,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $requestMethod) {
            unset($this->requestMethod);
            return $this;
        }
        if (!($requestMethod instanceof FHIRTestScriptRequestMethodCode)) {
            $requestMethod = new FHIRTestScriptRequestMethodCode(value: $requestMethod);
        }
        $this->requestMethod = $requestMethod;
        if ($this->_valueXMLLocations[self::FIELD_REQUEST_METHOD] !== $valueXMLLocation) {
            $this->_setRequestMethodValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the requestMethod element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getRequestMethodValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_REQUEST_METHOD];
    }

    /**
     * Set the location the "value" field of the requestMethod element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setRequestMethodValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_REQUEST_METHOD] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to use in a comparison against the request URL path string.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getRequestURL(): null|FHIRString
    {
        return $this->requestURL ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to use in a comparison against the request URL path string.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $requestURL
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRequestURL(null|string|FHIRStringPrimitive|FHIRString $requestURL,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $requestURL) {
            unset($this->requestURL);
            return $this;
        }
        if (!($requestURL instanceof FHIRString)) {
            $requestURL = new FHIRString(value: $requestURL);
        }
        $this->requestURL = $requestURL;
        if ($this->_valueXMLLocations[self::FIELD_REQUEST_URL] !== $valueXMLLocation) {
            $this->_setRequestURLValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the requestURL element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getRequestURLValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_REQUEST_URL];
    }

    /**
     * Set the location the "value" field of the requestURL element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setRequestURLValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_REQUEST_URL] = $valueXMLLocation;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of the resource. See the [resource list](resourcelist.html).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri
     */
    public function getResource(): null|FHIRUri
    {
        return $this->resource ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of the resource. See the [resource list](resourcelist.html).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $resource
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setResource(null|string|FHIRUriPrimitive|FHIRUri $resource,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $resource) {
            unset($this->resource);
            return $this;
        }
        if (!($resource instanceof FHIRUri)) {
            $resource = new FHIRUri(value: $resource);
        }
        $this->resource = $resource;
        if ($this->_valueXMLLocations[self::FIELD_RESOURCE] !== $valueXMLLocation) {
            $this->_setResourceValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the resource element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getResourceValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_RESOURCE];
    }

    /**
     * Set the location the "value" field of the resource element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setResourceValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_RESOURCE] = $valueXMLLocation;
        return $this;
    }

    /**
     * The type of response code to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * continue | switchingProtocols | okay | created | accepted |
     * nonAuthoritativeInformation | noContent | resetContent | partialContent |
     * multipleChoices | movedPermanently | found | seeOther | notModified | useProxy |
     * temporaryRedirect | permanentRedirect | badRequest | unauthorized |
     * paymentRequired | forbidden | notFound | methodNotAllowed | notAcceptable |
     * proxyAuthenticationRequired | requestTimeout | conflict | gone | lengthRequired
     * | preconditionFailed | contentTooLarge | uriTooLong | unsupportedMediaType |
     * rangeNotSatisfiable | expectationFailed | misdirectedRequest |
     * unprocessableContent | upgradeRequired | internalServerError | notImplemented |
     * badGateway | serviceUnavailable | gatewayTimeout | httpVersionNotSupported.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAssertionResponseTypes
     */
    public function getResponse(): null|FHIRAssertionResponseTypes
    {
        return $this->response ?? null;
    }

    /**
     * The type of response code to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * continue | switchingProtocols | okay | created | accepted |
     * nonAuthoritativeInformation | noContent | resetContent | partialContent |
     * multipleChoices | movedPermanently | found | seeOther | notModified | useProxy |
     * temporaryRedirect | permanentRedirect | badRequest | unauthorized |
     * paymentRequired | forbidden | notFound | methodNotAllowed | notAcceptable |
     * proxyAuthenticationRequired | requestTimeout | conflict | gone | lengthRequired
     * | preconditionFailed | contentTooLarge | uriTooLong | unsupportedMediaType |
     * rangeNotSatisfiable | expectationFailed | misdirectedRequest |
     * unprocessableContent | upgradeRequired | internalServerError | notImplemented |
     * badGateway | serviceUnavailable | gatewayTimeout | httpVersionNotSupported.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAssertionResponseTypesEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAssertionResponseTypes $response
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setResponse(null|string|FHIRAssertionResponseTypesEnum|FHIRAssertionResponseTypes $response,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $response) {
            unset($this->response);
            return $this;
        }
        if (!($response instanceof FHIRAssertionResponseTypes)) {
            $response = new FHIRAssertionResponseTypes(value: $response);
        }
        $this->response = $response;
        if ($this->_valueXMLLocations[self::FIELD_RESPONSE] !== $valueXMLLocation) {
            $this->_setResponseValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the response element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getResponseValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_RESPONSE];
    }

    /**
     * Set the location the "value" field of the response element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setResponseValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_RESPONSE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the HTTP response code to be tested.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getResponseCode(): null|FHIRString
    {
        return $this->responseCode ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the HTTP response code to be tested.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $responseCode
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setResponseCode(null|string|FHIRStringPrimitive|FHIRString $responseCode,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $responseCode) {
            unset($this->responseCode);
            return $this;
        }
        if (!($responseCode instanceof FHIRString)) {
            $responseCode = new FHIRString(value: $responseCode);
        }
        $this->responseCode = $responseCode;
        if ($this->_valueXMLLocations[self::FIELD_RESPONSE_CODE] !== $valueXMLLocation) {
            $this->_setResponseCodeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the responseCode element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getResponseCodeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_RESPONSE_CODE];
    }

    /**
     * Set the location the "value" field of the responseCode element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setResponseCodeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_RESPONSE_CODE] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $sourceId
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSourceId(null|string|FHIRIdPrimitive|FHIRId $sourceId,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $sourceId) {
            unset($this->sourceId);
            return $this;
        }
        if (!($sourceId instanceof FHIRId)) {
            $sourceId = new FHIRId(value: $sourceId);
        }
        $this->sourceId = $sourceId;
        if ($this->_valueXMLLocations[self::FIELD_SOURCE_ID] !== $valueXMLLocation) {
            $this->_setSourceIdValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the sourceId element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getSourceIdValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_SOURCE_ID];
    }

    /**
     * Set the location the "value" field of the sourceId element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setSourceIdValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_SOURCE_ID] = $valueXMLLocation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the current test execution will stop on failure for this assert.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getStopTestOnFail(): null|FHIRBoolean
    {
        return $this->stopTestOnFail ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the current test execution will stop on failure for this assert.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $stopTestOnFail
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStopTestOnFail(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $stopTestOnFail,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $stopTestOnFail) {
            unset($this->stopTestOnFail);
            return $this;
        }
        if (!($stopTestOnFail instanceof FHIRBoolean)) {
            $stopTestOnFail = new FHIRBoolean(value: $stopTestOnFail);
        }
        $this->stopTestOnFail = $stopTestOnFail;
        if ($this->_valueXMLLocations[self::FIELD_STOP_TEST_ON_FAIL] !== $valueXMLLocation) {
            $this->_setStopTestOnFailValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the stopTestOnFail element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getStopTestOnFailValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_STOP_TEST_ON_FAIL];
    }

    /**
     * Set the location the "value" field of the stopTestOnFail element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setStopTestOnFailValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_STOP_TEST_ON_FAIL] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $validateProfileId
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValidateProfileId(null|string|FHIRIdPrimitive|FHIRId $validateProfileId,
                                         ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $validateProfileId) {
            unset($this->validateProfileId);
            return $this;
        }
        if (!($validateProfileId instanceof FHIRId)) {
            $validateProfileId = new FHIRId(value: $validateProfileId);
        }
        $this->validateProfileId = $validateProfileId;
        if ($this->_valueXMLLocations[self::FIELD_VALIDATE_PROFILE_ID] !== $valueXMLLocation) {
            $this->_setValidateProfileIdValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the validateProfileId element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValidateProfileIdValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALIDATE_PROFILE_ID];
    }

    /**
     * Set the location the "value" field of the validateProfileId element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValidateProfileIdValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALIDATE_PROFILE_ID] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to compare to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getValue(): null|FHIRString
    {
        return $this->value ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to compare to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $value
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValue(null|string|FHIRStringPrimitive|FHIRString $value,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $value) {
            unset($this->value);
            return $this;
        }
        if (!($value instanceof FHIRString)) {
            $value = new FHIRString(value: $value);
        }
        $this->value = $value;
        if ($this->_valueXMLLocations[self::FIELD_VALUE] !== $valueXMLLocation) {
            $this->_setValueValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the value element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE];
    }

    /**
     * Set the location the "value" field of the value element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE] = $valueXMLLocation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution will produce a warning only on error for this
     * assert.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $warningOnly
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setWarningOnly(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $warningOnly,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $warningOnly) {
            unset($this->warningOnly);
            return $this;
        }
        if (!($warningOnly instanceof FHIRBoolean)) {
            $warningOnly = new FHIRBoolean(value: $warningOnly);
        }
        $this->warningOnly = $warningOnly;
        if ($this->_valueXMLLocations[self::FIELD_WARNING_ONLY] !== $valueXMLLocation) {
            $this->_setWarningOnlyValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the warningOnly element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getWarningOnlyValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_WARNING_ONLY];
    }

    /**
     * Set the location the "value" field of the warningOnly element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setWarningOnlyValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_WARNING_ONLY] = $valueXMLLocation;
        return $this;
    }

    /**
     * A structured set of tests against a FHIR server or client implementation to
     * determine compliance against the FHIR specification.
     *
     * Links or references providing traceability to the testing requirements for this
     * assert.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequirement[]
     */
    public function getRequirement(): array
    {
        return $this->requirement ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequirement>
     */
    public function getRequirementIterator(): iterable
    {
        if (!isset($this->requirement)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->requirement);
    }

    /**
     * A structured set of tests against a FHIR server or client implementation to
     * determine compliance against the FHIR specification.
     *
     * Links or references providing traceability to the testing requirements for this
     * assert.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequirement $requirement
     * @return static
     */
    public function addRequirement(FHIRTestScriptRequirement $requirement): self
    {
        if (!isset($this->requirement)) {
            $this->requirement = [];
        }
        $this->requirement[] = $requirement;
        return $this;
    }

    /**
     * A structured set of tests against a FHIR server or client implementation to
     * determine compliance against the FHIR specification.
     *
     * Links or references providing traceability to the testing requirements for this
     * assert.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequirement ...$requirement
     * @return static
     */
    public function setRequirement(FHIRTestScriptRequirement ...$requirement): self
    {
        if ([] === $requirement) {
            unset($this->requirement);
            return $this;
        }
        $this->requirement = $requirement;
        return $this;
    }

    /* class_default.php:188 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
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
        if (null !== ($v = $this->getStopTestOnFail())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STOP_TEST_ON_FAIL] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_DEFAULT_MANUAL_COMPLETION])) {
            $v = $this->getDefaultManualCompletion();
            foreach($validationRules[self::FIELD_DEFAULT_MANUAL_COMPLETION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_MANUAL_COMPLETION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_MANUAL_COMPLETION])) {
                        $errs[self::FIELD_DEFAULT_MANUAL_COMPLETION] = [];
                    }
                    $errs[self::FIELD_DEFAULT_MANUAL_COMPLETION][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_STOP_TEST_ON_FAIL])) {
            $v = $this->getStopTestOnFail();
            foreach($validationRules[self::FIELD_STOP_TEST_ON_FAIL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STOP_TEST_ON_FAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STOP_TEST_ON_FAIL])) {
                        $errs[self::FIELD_STOP_TEST_ON_FAIL] = [];
                    }
                    $errs[self::FIELD_STOP_TEST_ON_FAIL][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_REQUIREMENT])) {
            $v = $this->getRequirement();
            foreach($validationRules[self::FIELD_REQUIREMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REQUIREMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUIREMENT])) {
                        $errs[self::FIELD_REQUIREMENT] = [];
                    }
                    $errs[self::FIELD_REQUIREMENT][$rule] = $err;
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

    /* class_default.php:211 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LABEL === $cen) {
                $type->setLabel(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DIRECTION === $cen) {
                $type->setDirection(FHIRAssertionDirectionType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMPARE_TO_SOURCE_ID === $cen) {
                $type->setCompareToSourceId(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMPARE_TO_SOURCE_EXPRESSION === $cen) {
                $type->setCompareToSourceExpression(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMPARE_TO_SOURCE_PATH === $cen) {
                $type->setCompareToSourcePath(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTENT_TYPE === $cen) {
                $type->setContentType(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_MANUAL_COMPLETION === $cen) {
                $type->setDefaultManualCompletion(FHIRAssertionManualCompletionType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXPRESSION === $cen) {
                $type->setExpression(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_HEADER_FIELD === $cen) {
                $type->setHeaderField(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MINIMUM_ID === $cen) {
                $type->setMinimumId(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NAVIGATION_LINKS === $cen) {
                $type->setNavigationLinks(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OPERATOR === $cen) {
                $type->setOperator(FHIRAssertionOperatorType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATH === $cen) {
                $type->setPath(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REQUEST_METHOD === $cen) {
                $type->setRequestMethod(FHIRTestScriptRequestMethodCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REQUEST_URL === $cen) {
                $type->setRequestURL(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RESOURCE === $cen) {
                $type->setResource(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RESPONSE === $cen) {
                $type->setResponse(FHIRAssertionResponseTypes::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RESPONSE_CODE === $cen) {
                $type->setResponseCode(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SOURCE_ID === $cen) {
                $type->setSourceId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STOP_TEST_ON_FAIL === $cen) {
                $type->setStopTestOnFail(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALIDATE_PROFILE_ID === $cen) {
                $type->setValidateProfileId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE === $cen) {
                $type->setValue(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_WARNING_ONLY === $cen) {
                $type->setWarningOnly(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REQUIREMENT === $cen) {
                $type->addRequirement(FHIRTestScriptRequirement::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LABEL])) {
            if (isset($type->label)) {
                $type->label->setValue((string)$attributes[self::FIELD_LABEL]);
                $type->_setLabelValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLabel((string)$attributes[self::FIELD_LABEL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
                $type->_setDescriptionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DIRECTION])) {
            if (isset($type->direction)) {
                $type->direction->setValue((string)$attributes[self::FIELD_DIRECTION]);
                $type->_setDirectionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDirection((string)$attributes[self::FIELD_DIRECTION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_COMPARE_TO_SOURCE_ID])) {
            if (isset($type->compareToSourceId)) {
                $type->compareToSourceId->setValue((string)$attributes[self::FIELD_COMPARE_TO_SOURCE_ID]);
                $type->_setCompareToSourceIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCompareToSourceId((string)$attributes[self::FIELD_COMPARE_TO_SOURCE_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION])) {
            if (isset($type->compareToSourceExpression)) {
                $type->compareToSourceExpression->setValue((string)$attributes[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION]);
                $type->_setCompareToSourceExpressionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCompareToSourceExpression((string)$attributes[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_COMPARE_TO_SOURCE_PATH])) {
            if (isset($type->compareToSourcePath)) {
                $type->compareToSourcePath->setValue((string)$attributes[self::FIELD_COMPARE_TO_SOURCE_PATH]);
                $type->_setCompareToSourcePathValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCompareToSourcePath((string)$attributes[self::FIELD_COMPARE_TO_SOURCE_PATH], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CONTENT_TYPE])) {
            if (isset($type->contentType)) {
                $type->contentType->setValue((string)$attributes[self::FIELD_CONTENT_TYPE]);
                $type->_setContentTypeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setContentType((string)$attributes[self::FIELD_CONTENT_TYPE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_MANUAL_COMPLETION])) {
            if (isset($type->defaultManualCompletion)) {
                $type->defaultManualCompletion->setValue((string)$attributes[self::FIELD_DEFAULT_MANUAL_COMPLETION]);
                $type->_setDefaultManualCompletionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefaultManualCompletion((string)$attributes[self::FIELD_DEFAULT_MANUAL_COMPLETION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXPRESSION])) {
            if (isset($type->expression)) {
                $type->expression->setValue((string)$attributes[self::FIELD_EXPRESSION]);
                $type->_setExpressionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExpression((string)$attributes[self::FIELD_EXPRESSION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_HEADER_FIELD])) {
            if (isset($type->headerField)) {
                $type->headerField->setValue((string)$attributes[self::FIELD_HEADER_FIELD]);
                $type->_setHeaderFieldValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setHeaderField((string)$attributes[self::FIELD_HEADER_FIELD], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MINIMUM_ID])) {
            if (isset($type->minimumId)) {
                $type->minimumId->setValue((string)$attributes[self::FIELD_MINIMUM_ID]);
                $type->_setMinimumIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setMinimumId((string)$attributes[self::FIELD_MINIMUM_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NAVIGATION_LINKS])) {
            if (isset($type->navigationLinks)) {
                $type->navigationLinks->setValue((string)$attributes[self::FIELD_NAVIGATION_LINKS]);
                $type->_setNavigationLinksValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setNavigationLinks((string)$attributes[self::FIELD_NAVIGATION_LINKS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_OPERATOR])) {
            if (isset($type->operator)) {
                $type->operator->setValue((string)$attributes[self::FIELD_OPERATOR]);
                $type->_setOperatorValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setOperator((string)$attributes[self::FIELD_OPERATOR], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATH])) {
            if (isset($type->path)) {
                $type->path->setValue((string)$attributes[self::FIELD_PATH]);
                $type->_setPathValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPath((string)$attributes[self::FIELD_PATH], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_REQUEST_METHOD])) {
            if (isset($type->requestMethod)) {
                $type->requestMethod->setValue((string)$attributes[self::FIELD_REQUEST_METHOD]);
                $type->_setRequestMethodValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setRequestMethod((string)$attributes[self::FIELD_REQUEST_METHOD], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_REQUEST_URL])) {
            if (isset($type->requestURL)) {
                $type->requestURL->setValue((string)$attributes[self::FIELD_REQUEST_URL]);
                $type->_setRequestURLValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setRequestURL((string)$attributes[self::FIELD_REQUEST_URL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RESOURCE])) {
            if (isset($type->resource)) {
                $type->resource->setValue((string)$attributes[self::FIELD_RESOURCE]);
                $type->_setResourceValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setResource((string)$attributes[self::FIELD_RESOURCE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RESPONSE])) {
            if (isset($type->response)) {
                $type->response->setValue((string)$attributes[self::FIELD_RESPONSE]);
                $type->_setResponseValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setResponse((string)$attributes[self::FIELD_RESPONSE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RESPONSE_CODE])) {
            if (isset($type->responseCode)) {
                $type->responseCode->setValue((string)$attributes[self::FIELD_RESPONSE_CODE]);
                $type->_setResponseCodeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setResponseCode((string)$attributes[self::FIELD_RESPONSE_CODE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SOURCE_ID])) {
            if (isset($type->sourceId)) {
                $type->sourceId->setValue((string)$attributes[self::FIELD_SOURCE_ID]);
                $type->_setSourceIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setSourceId((string)$attributes[self::FIELD_SOURCE_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_STOP_TEST_ON_FAIL])) {
            if (isset($type->stopTestOnFail)) {
                $type->stopTestOnFail->setValue((string)$attributes[self::FIELD_STOP_TEST_ON_FAIL]);
                $type->_setStopTestOnFailValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setStopTestOnFail((string)$attributes[self::FIELD_STOP_TEST_ON_FAIL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALIDATE_PROFILE_ID])) {
            if (isset($type->validateProfileId)) {
                $type->validateProfileId->setValue((string)$attributes[self::FIELD_VALIDATE_PROFILE_ID]);
                $type->_setValidateProfileIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValidateProfileId((string)$attributes[self::FIELD_VALIDATE_PROFILE_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE])) {
            if (isset($type->value)) {
                $type->value->setValue((string)$attributes[self::FIELD_VALUE]);
                $type->_setValueValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValue((string)$attributes[self::FIELD_VALUE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_WARNING_ONLY])) {
            if (isset($type->warningOnly)) {
                $type->warningOnly->setValue((string)$attributes[self::FIELD_WARNING_ONLY]);
                $type->_setWarningOnlyValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setWarningOnly((string)$attributes[self::FIELD_WARNING_ONLY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->label) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LABEL]) {
            $xw->writeAttribute(self::FIELD_LABEL, $this->label->_getFormattedValue());
        }
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getFormattedValue());
        }
        if (isset($this->direction) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DIRECTION]) {
            $xw->writeAttribute(self::FIELD_DIRECTION, $this->direction->_getFormattedValue());
        }
        if (isset($this->compareToSourceId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COMPARE_TO_SOURCE_ID]) {
            $xw->writeAttribute(self::FIELD_COMPARE_TO_SOURCE_ID, $this->compareToSourceId->_getFormattedValue());
        }
        if (isset($this->compareToSourceExpression) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION]) {
            $xw->writeAttribute(self::FIELD_COMPARE_TO_SOURCE_EXPRESSION, $this->compareToSourceExpression->_getFormattedValue());
        }
        if (isset($this->compareToSourcePath) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COMPARE_TO_SOURCE_PATH]) {
            $xw->writeAttribute(self::FIELD_COMPARE_TO_SOURCE_PATH, $this->compareToSourcePath->_getFormattedValue());
        }
        if (isset($this->contentType) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CONTENT_TYPE]) {
            $xw->writeAttribute(self::FIELD_CONTENT_TYPE, $this->contentType->_getFormattedValue());
        }
        if (isset($this->defaultManualCompletion) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_MANUAL_COMPLETION]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_MANUAL_COMPLETION, $this->defaultManualCompletion->_getFormattedValue());
        }
        if (isset($this->expression) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXPRESSION]) {
            $xw->writeAttribute(self::FIELD_EXPRESSION, $this->expression->_getFormattedValue());
        }
        if (isset($this->headerField) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_HEADER_FIELD]) {
            $xw->writeAttribute(self::FIELD_HEADER_FIELD, $this->headerField->_getFormattedValue());
        }
        if (isset($this->minimumId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MINIMUM_ID]) {
            $xw->writeAttribute(self::FIELD_MINIMUM_ID, $this->minimumId->_getFormattedValue());
        }
        if (isset($this->navigationLinks) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NAVIGATION_LINKS]) {
            $xw->writeAttribute(self::FIELD_NAVIGATION_LINKS, $this->navigationLinks->_getFormattedValue());
        }
        if (isset($this->operator) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_OPERATOR]) {
            $xw->writeAttribute(self::FIELD_OPERATOR, $this->operator->_getFormattedValue());
        }
        if (isset($this->path) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATH]) {
            $xw->writeAttribute(self::FIELD_PATH, $this->path->_getFormattedValue());
        }
        if (isset($this->requestMethod) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_REQUEST_METHOD]) {
            $xw->writeAttribute(self::FIELD_REQUEST_METHOD, $this->requestMethod->_getFormattedValue());
        }
        if (isset($this->requestURL) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_REQUEST_URL]) {
            $xw->writeAttribute(self::FIELD_REQUEST_URL, $this->requestURL->_getFormattedValue());
        }
        if (isset($this->resource) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RESOURCE]) {
            $xw->writeAttribute(self::FIELD_RESOURCE, $this->resource->_getFormattedValue());
        }
        if (isset($this->response) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RESPONSE]) {
            $xw->writeAttribute(self::FIELD_RESPONSE, $this->response->_getFormattedValue());
        }
        if (isset($this->responseCode) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RESPONSE_CODE]) {
            $xw->writeAttribute(self::FIELD_RESPONSE_CODE, $this->responseCode->_getFormattedValue());
        }
        if (isset($this->sourceId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SOURCE_ID]) {
            $xw->writeAttribute(self::FIELD_SOURCE_ID, $this->sourceId->_getFormattedValue());
        }
        if (isset($this->stopTestOnFail) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STOP_TEST_ON_FAIL]) {
            $xw->writeAttribute(self::FIELD_STOP_TEST_ON_FAIL, $this->stopTestOnFail->_getFormattedValue());
        }
        if (isset($this->validateProfileId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALIDATE_PROFILE_ID]) {
            $xw->writeAttribute(self::FIELD_VALIDATE_PROFILE_ID, $this->validateProfileId->_getFormattedValue());
        }
        if (isset($this->value) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE]) {
            $xw->writeAttribute(self::FIELD_VALUE, $this->value->_getFormattedValue());
        }
        if (isset($this->warningOnly) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_WARNING_ONLY]) {
            $xw->writeAttribute(self::FIELD_WARNING_ONLY, $this->warningOnly->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->label)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LABEL]
                || $this->label->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LABEL);
            $this->label->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LABEL]);
            $xw->endElement();
        }
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->direction)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DIRECTION]
                || $this->direction->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DIRECTION);
            $this->direction->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DIRECTION]);
            $xw->endElement();
        }
        if (isset($this->compareToSourceId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COMPARE_TO_SOURCE_ID]
                || $this->compareToSourceId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COMPARE_TO_SOURCE_ID);
            $this->compareToSourceId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COMPARE_TO_SOURCE_ID]);
            $xw->endElement();
        }
        if (isset($this->compareToSourceExpression)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION]
                || $this->compareToSourceExpression->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COMPARE_TO_SOURCE_EXPRESSION);
            $this->compareToSourceExpression->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION]);
            $xw->endElement();
        }
        if (isset($this->compareToSourcePath)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COMPARE_TO_SOURCE_PATH]
                || $this->compareToSourcePath->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COMPARE_TO_SOURCE_PATH);
            $this->compareToSourcePath->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COMPARE_TO_SOURCE_PATH]);
            $xw->endElement();
        }
        if (isset($this->contentType)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CONTENT_TYPE]
                || $this->contentType->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CONTENT_TYPE);
            $this->contentType->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CONTENT_TYPE]);
            $xw->endElement();
        }
        if (isset($this->defaultManualCompletion)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFAULT_MANUAL_COMPLETION]
                || $this->defaultManualCompletion->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFAULT_MANUAL_COMPLETION);
            $this->defaultManualCompletion->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFAULT_MANUAL_COMPLETION]);
            $xw->endElement();
        }
        if (isset($this->expression)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXPRESSION]
                || $this->expression->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXPRESSION);
            $this->expression->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXPRESSION]);
            $xw->endElement();
        }
        if (isset($this->headerField)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_HEADER_FIELD]
                || $this->headerField->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_HEADER_FIELD);
            $this->headerField->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_HEADER_FIELD]);
            $xw->endElement();
        }
        if (isset($this->minimumId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MINIMUM_ID]
                || $this->minimumId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MINIMUM_ID);
            $this->minimumId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MINIMUM_ID]);
            $xw->endElement();
        }
        if (isset($this->navigationLinks)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NAVIGATION_LINKS]
                || $this->navigationLinks->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NAVIGATION_LINKS);
            $this->navigationLinks->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NAVIGATION_LINKS]);
            $xw->endElement();
        }
        if (isset($this->operator)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_OPERATOR]
                || $this->operator->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_OPERATOR);
            $this->operator->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_OPERATOR]);
            $xw->endElement();
        }
        if (isset($this->path)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PATH]
                || $this->path->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PATH);
            $this->path->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PATH]);
            $xw->endElement();
        }
        if (isset($this->requestMethod)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_REQUEST_METHOD]
                || $this->requestMethod->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_REQUEST_METHOD);
            $this->requestMethod->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_REQUEST_METHOD]);
            $xw->endElement();
        }
        if (isset($this->requestURL)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_REQUEST_URL]
                || $this->requestURL->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_REQUEST_URL);
            $this->requestURL->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_REQUEST_URL]);
            $xw->endElement();
        }
        if (isset($this->resource)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RESOURCE]
                || $this->resource->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RESOURCE);
            $this->resource->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RESOURCE]);
            $xw->endElement();
        }
        if (isset($this->response)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RESPONSE]
                || $this->response->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RESPONSE);
            $this->response->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RESPONSE]);
            $xw->endElement();
        }
        if (isset($this->responseCode)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RESPONSE_CODE]
                || $this->responseCode->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RESPONSE_CODE);
            $this->responseCode->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RESPONSE_CODE]);
            $xw->endElement();
        }
        if (isset($this->sourceId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SOURCE_ID]
                || $this->sourceId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SOURCE_ID);
            $this->sourceId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SOURCE_ID]);
            $xw->endElement();
        }
        if (isset($this->stopTestOnFail)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STOP_TEST_ON_FAIL]
                || $this->stopTestOnFail->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STOP_TEST_ON_FAIL);
            $this->stopTestOnFail->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STOP_TEST_ON_FAIL]);
            $xw->endElement();
        }
        if (isset($this->validateProfileId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALIDATE_PROFILE_ID]
                || $this->validateProfileId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALIDATE_PROFILE_ID);
            $this->validateProfileId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALIDATE_PROFILE_ID]);
            $xw->endElement();
        }
        if (isset($this->value)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE]
                || $this->value->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE);
            $this->value->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE]);
            $xw->endElement();
        }
        if (isset($this->warningOnly)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_WARNING_ONLY]
                || $this->warningOnly->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_WARNING_ONLY);
            $this->warningOnly->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_WARNING_ONLY]);
            $xw->endElement();
        }
        if (isset($this->requirement)) {
            foreach ($this->requirement as $v) {
                $xw->startElement(self::FIELD_REQUIREMENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_LABEL])
            || isset($json[self::FIELD_LABEL_EXT])
            || array_key_exists(self::FIELD_LABEL, $json)
            || array_key_exists(self::FIELD_LABEL_EXT, $json)) {
            $value = $json[self::FIELD_LABEL] ?? null;
            $type->setLabel(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_LABEL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DESCRIPTION])
            || isset($json[self::FIELD_DESCRIPTION_EXT])
            || array_key_exists(self::FIELD_DESCRIPTION, $json)
            || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $type->setDescription(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_DESCRIPTION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DIRECTION])
            || isset($json[self::FIELD_DIRECTION_EXT])
            || array_key_exists(self::FIELD_DIRECTION, $json)
            || array_key_exists(self::FIELD_DIRECTION_EXT, $json)) {
            $value = $json[self::FIELD_DIRECTION] ?? null;
            $type->setDirection(FHIRAssertionDirectionType::jsonUnserialize(
                (is_array($value) ? $value : [FHIRAssertionDirectionType::FIELD_VALUE => $value]) + ($json[self::FIELD_DIRECTION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_COMPARE_TO_SOURCE_ID])
            || isset($json[self::FIELD_COMPARE_TO_SOURCE_ID_EXT])
            || array_key_exists(self::FIELD_COMPARE_TO_SOURCE_ID, $json)
            || array_key_exists(self::FIELD_COMPARE_TO_SOURCE_ID_EXT, $json)) {
            $value = $json[self::FIELD_COMPARE_TO_SOURCE_ID] ?? null;
            $type->setCompareToSourceId(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_COMPARE_TO_SOURCE_ID_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION])
            || isset($json[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT])
            || array_key_exists(self::FIELD_COMPARE_TO_SOURCE_EXPRESSION, $json)
            || array_key_exists(self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT, $json)) {
            $value = $json[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION] ?? null;
            $type->setCompareToSourceExpression(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_COMPARE_TO_SOURCE_PATH])
            || isset($json[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT])
            || array_key_exists(self::FIELD_COMPARE_TO_SOURCE_PATH, $json)
            || array_key_exists(self::FIELD_COMPARE_TO_SOURCE_PATH_EXT, $json)) {
            $value = $json[self::FIELD_COMPARE_TO_SOURCE_PATH] ?? null;
            $type->setCompareToSourcePath(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CONTENT_TYPE])
            || isset($json[self::FIELD_CONTENT_TYPE_EXT])
            || array_key_exists(self::FIELD_CONTENT_TYPE, $json)
            || array_key_exists(self::FIELD_CONTENT_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_CONTENT_TYPE] ?? null;
            $type->setContentType(FHIRCode::jsonUnserialize(
                (is_array($value) ? $value : [FHIRCode::FIELD_VALUE => $value]) + ($json[self::FIELD_CONTENT_TYPE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFAULT_MANUAL_COMPLETION])
            || isset($json[self::FIELD_DEFAULT_MANUAL_COMPLETION_EXT])
            || array_key_exists(self::FIELD_DEFAULT_MANUAL_COMPLETION, $json)
            || array_key_exists(self::FIELD_DEFAULT_MANUAL_COMPLETION_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_MANUAL_COMPLETION] ?? null;
            $type->setDefaultManualCompletion(FHIRAssertionManualCompletionType::jsonUnserialize(
                (is_array($value) ? $value : [FHIRAssertionManualCompletionType::FIELD_VALUE => $value]) + ($json[self::FIELD_DEFAULT_MANUAL_COMPLETION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EXPRESSION])
            || isset($json[self::FIELD_EXPRESSION_EXT])
            || array_key_exists(self::FIELD_EXPRESSION, $json)
            || array_key_exists(self::FIELD_EXPRESSION_EXT, $json)) {
            $value = $json[self::FIELD_EXPRESSION] ?? null;
            $type->setExpression(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_EXPRESSION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_HEADER_FIELD])
            || isset($json[self::FIELD_HEADER_FIELD_EXT])
            || array_key_exists(self::FIELD_HEADER_FIELD, $json)
            || array_key_exists(self::FIELD_HEADER_FIELD_EXT, $json)) {
            $value = $json[self::FIELD_HEADER_FIELD] ?? null;
            $type->setHeaderField(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_HEADER_FIELD_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_MINIMUM_ID])
            || isset($json[self::FIELD_MINIMUM_ID_EXT])
            || array_key_exists(self::FIELD_MINIMUM_ID, $json)
            || array_key_exists(self::FIELD_MINIMUM_ID_EXT, $json)) {
            $value = $json[self::FIELD_MINIMUM_ID] ?? null;
            $type->setMinimumId(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_MINIMUM_ID_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_NAVIGATION_LINKS])
            || isset($json[self::FIELD_NAVIGATION_LINKS_EXT])
            || array_key_exists(self::FIELD_NAVIGATION_LINKS, $json)
            || array_key_exists(self::FIELD_NAVIGATION_LINKS_EXT, $json)) {
            $value = $json[self::FIELD_NAVIGATION_LINKS] ?? null;
            $type->setNavigationLinks(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_NAVIGATION_LINKS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_OPERATOR])
            || isset($json[self::FIELD_OPERATOR_EXT])
            || array_key_exists(self::FIELD_OPERATOR, $json)
            || array_key_exists(self::FIELD_OPERATOR_EXT, $json)) {
            $value = $json[self::FIELD_OPERATOR] ?? null;
            $type->setOperator(FHIRAssertionOperatorType::jsonUnserialize(
                (is_array($value) ? $value : [FHIRAssertionOperatorType::FIELD_VALUE => $value]) + ($json[self::FIELD_OPERATOR_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PATH])
            || isset($json[self::FIELD_PATH_EXT])
            || array_key_exists(self::FIELD_PATH, $json)
            || array_key_exists(self::FIELD_PATH_EXT, $json)) {
            $value = $json[self::FIELD_PATH] ?? null;
            $type->setPath(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_PATH_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_REQUEST_METHOD])
            || isset($json[self::FIELD_REQUEST_METHOD_EXT])
            || array_key_exists(self::FIELD_REQUEST_METHOD, $json)
            || array_key_exists(self::FIELD_REQUEST_METHOD_EXT, $json)) {
            $value = $json[self::FIELD_REQUEST_METHOD] ?? null;
            $type->setRequestMethod(FHIRTestScriptRequestMethodCode::jsonUnserialize(
                (is_array($value) ? $value : [FHIRTestScriptRequestMethodCode::FIELD_VALUE => $value]) + ($json[self::FIELD_REQUEST_METHOD_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_REQUEST_URL])
            || isset($json[self::FIELD_REQUEST_URL_EXT])
            || array_key_exists(self::FIELD_REQUEST_URL, $json)
            || array_key_exists(self::FIELD_REQUEST_URL_EXT, $json)) {
            $value = $json[self::FIELD_REQUEST_URL] ?? null;
            $type->setRequestURL(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_REQUEST_URL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_RESOURCE])
            || isset($json[self::FIELD_RESOURCE_EXT])
            || array_key_exists(self::FIELD_RESOURCE, $json)
            || array_key_exists(self::FIELD_RESOURCE_EXT, $json)) {
            $value = $json[self::FIELD_RESOURCE] ?? null;
            $type->setResource(FHIRUri::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUri::FIELD_VALUE => $value]) + ($json[self::FIELD_RESOURCE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_RESPONSE])
            || isset($json[self::FIELD_RESPONSE_EXT])
            || array_key_exists(self::FIELD_RESPONSE, $json)
            || array_key_exists(self::FIELD_RESPONSE_EXT, $json)) {
            $value = $json[self::FIELD_RESPONSE] ?? null;
            $type->setResponse(FHIRAssertionResponseTypes::jsonUnserialize(
                (is_array($value) ? $value : [FHIRAssertionResponseTypes::FIELD_VALUE => $value]) + ($json[self::FIELD_RESPONSE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_RESPONSE_CODE])
            || isset($json[self::FIELD_RESPONSE_CODE_EXT])
            || array_key_exists(self::FIELD_RESPONSE_CODE, $json)
            || array_key_exists(self::FIELD_RESPONSE_CODE_EXT, $json)) {
            $value = $json[self::FIELD_RESPONSE_CODE] ?? null;
            $type->setResponseCode(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_RESPONSE_CODE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_SOURCE_ID])
            || isset($json[self::FIELD_SOURCE_ID_EXT])
            || array_key_exists(self::FIELD_SOURCE_ID, $json)
            || array_key_exists(self::FIELD_SOURCE_ID_EXT, $json)) {
            $value = $json[self::FIELD_SOURCE_ID] ?? null;
            $type->setSourceId(FHIRId::jsonUnserialize(
                (is_array($value) ? $value : [FHIRId::FIELD_VALUE => $value]) + ($json[self::FIELD_SOURCE_ID_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_STOP_TEST_ON_FAIL])
            || isset($json[self::FIELD_STOP_TEST_ON_FAIL_EXT])
            || array_key_exists(self::FIELD_STOP_TEST_ON_FAIL, $json)
            || array_key_exists(self::FIELD_STOP_TEST_ON_FAIL_EXT, $json)) {
            $value = $json[self::FIELD_STOP_TEST_ON_FAIL] ?? null;
            $type->setStopTestOnFail(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_STOP_TEST_ON_FAIL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALIDATE_PROFILE_ID])
            || isset($json[self::FIELD_VALIDATE_PROFILE_ID_EXT])
            || array_key_exists(self::FIELD_VALIDATE_PROFILE_ID, $json)
            || array_key_exists(self::FIELD_VALIDATE_PROFILE_ID_EXT, $json)) {
            $value = $json[self::FIELD_VALIDATE_PROFILE_ID] ?? null;
            $type->setValidateProfileId(FHIRId::jsonUnserialize(
                (is_array($value) ? $value : [FHIRId::FIELD_VALUE => $value]) + ($json[self::FIELD_VALIDATE_PROFILE_ID_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE])
            || isset($json[self::FIELD_VALUE_EXT])
            || array_key_exists(self::FIELD_VALUE, $json)
            || array_key_exists(self::FIELD_VALUE_EXT, $json)) {
            $value = $json[self::FIELD_VALUE] ?? null;
            $type->setValue(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_WARNING_ONLY])
            || isset($json[self::FIELD_WARNING_ONLY_EXT])
            || array_key_exists(self::FIELD_WARNING_ONLY, $json)
            || array_key_exists(self::FIELD_WARNING_ONLY_EXT, $json)) {
            $value = $json[self::FIELD_WARNING_ONLY] ?? null;
            $type->setWarningOnly(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_WARNING_ONLY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_REQUIREMENT]) || array_key_exists(self::FIELD_REQUIREMENT, $json)) {
            $vs = $json[self::FIELD_REQUIREMENT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addRequirement(FHIRTestScriptRequirement::jsonUnserialize($v, $config));
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
            if ($this->label->_nonValueFieldDefined()) {
                $ext = $this->label->jsonSerialize();
                unset($ext->value);
                $out->_label = $ext;
            }
        }
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            if ($this->description->_nonValueFieldDefined()) {
                $ext = $this->description->jsonSerialize();
                unset($ext->value);
                $out->_description = $ext;
            }
        }
        if (isset($this->direction)) {
            if (null !== ($val = $this->direction->getValue())) {
                $out->direction = $val;
            }
            if ($this->direction->_nonValueFieldDefined()) {
                $ext = $this->direction->jsonSerialize();
                unset($ext->value);
                $out->_direction = $ext;
            }
        }
        if (isset($this->compareToSourceId)) {
            if (null !== ($val = $this->compareToSourceId->getValue())) {
                $out->compareToSourceId = $val;
            }
            if ($this->compareToSourceId->_nonValueFieldDefined()) {
                $ext = $this->compareToSourceId->jsonSerialize();
                unset($ext->value);
                $out->_compareToSourceId = $ext;
            }
        }
        if (isset($this->compareToSourceExpression)) {
            if (null !== ($val = $this->compareToSourceExpression->getValue())) {
                $out->compareToSourceExpression = $val;
            }
            if ($this->compareToSourceExpression->_nonValueFieldDefined()) {
                $ext = $this->compareToSourceExpression->jsonSerialize();
                unset($ext->value);
                $out->_compareToSourceExpression = $ext;
            }
        }
        if (isset($this->compareToSourcePath)) {
            if (null !== ($val = $this->compareToSourcePath->getValue())) {
                $out->compareToSourcePath = $val;
            }
            if ($this->compareToSourcePath->_nonValueFieldDefined()) {
                $ext = $this->compareToSourcePath->jsonSerialize();
                unset($ext->value);
                $out->_compareToSourcePath = $ext;
            }
        }
        if (isset($this->contentType)) {
            if (null !== ($val = $this->contentType->getValue())) {
                $out->contentType = $val;
            }
            if ($this->contentType->_nonValueFieldDefined()) {
                $ext = $this->contentType->jsonSerialize();
                unset($ext->value);
                $out->_contentType = $ext;
            }
        }
        if (isset($this->defaultManualCompletion)) {
            if (null !== ($val = $this->defaultManualCompletion->getValue())) {
                $out->defaultManualCompletion = $val;
            }
            if ($this->defaultManualCompletion->_nonValueFieldDefined()) {
                $ext = $this->defaultManualCompletion->jsonSerialize();
                unset($ext->value);
                $out->_defaultManualCompletion = $ext;
            }
        }
        if (isset($this->expression)) {
            if (null !== ($val = $this->expression->getValue())) {
                $out->expression = $val;
            }
            if ($this->expression->_nonValueFieldDefined()) {
                $ext = $this->expression->jsonSerialize();
                unset($ext->value);
                $out->_expression = $ext;
            }
        }
        if (isset($this->headerField)) {
            if (null !== ($val = $this->headerField->getValue())) {
                $out->headerField = $val;
            }
            if ($this->headerField->_nonValueFieldDefined()) {
                $ext = $this->headerField->jsonSerialize();
                unset($ext->value);
                $out->_headerField = $ext;
            }
        }
        if (isset($this->minimumId)) {
            if (null !== ($val = $this->minimumId->getValue())) {
                $out->minimumId = $val;
            }
            if ($this->minimumId->_nonValueFieldDefined()) {
                $ext = $this->minimumId->jsonSerialize();
                unset($ext->value);
                $out->_minimumId = $ext;
            }
        }
        if (isset($this->navigationLinks)) {
            if (null !== ($val = $this->navigationLinks->getValue())) {
                $out->navigationLinks = $val;
            }
            if ($this->navigationLinks->_nonValueFieldDefined()) {
                $ext = $this->navigationLinks->jsonSerialize();
                unset($ext->value);
                $out->_navigationLinks = $ext;
            }
        }
        if (isset($this->operator)) {
            if (null !== ($val = $this->operator->getValue())) {
                $out->operator = $val;
            }
            if ($this->operator->_nonValueFieldDefined()) {
                $ext = $this->operator->jsonSerialize();
                unset($ext->value);
                $out->_operator = $ext;
            }
        }
        if (isset($this->path)) {
            if (null !== ($val = $this->path->getValue())) {
                $out->path = $val;
            }
            if ($this->path->_nonValueFieldDefined()) {
                $ext = $this->path->jsonSerialize();
                unset($ext->value);
                $out->_path = $ext;
            }
        }
        if (isset($this->requestMethod)) {
            if (null !== ($val = $this->requestMethod->getValue())) {
                $out->requestMethod = $val;
            }
            if ($this->requestMethod->_nonValueFieldDefined()) {
                $ext = $this->requestMethod->jsonSerialize();
                unset($ext->value);
                $out->_requestMethod = $ext;
            }
        }
        if (isset($this->requestURL)) {
            if (null !== ($val = $this->requestURL->getValue())) {
                $out->requestURL = $val;
            }
            if ($this->requestURL->_nonValueFieldDefined()) {
                $ext = $this->requestURL->jsonSerialize();
                unset($ext->value);
                $out->_requestURL = $ext;
            }
        }
        if (isset($this->resource)) {
            if (null !== ($val = $this->resource->getValue())) {
                $out->resource = $val;
            }
            if ($this->resource->_nonValueFieldDefined()) {
                $ext = $this->resource->jsonSerialize();
                unset($ext->value);
                $out->_resource = $ext;
            }
        }
        if (isset($this->response)) {
            if (null !== ($val = $this->response->getValue())) {
                $out->response = $val;
            }
            if ($this->response->_nonValueFieldDefined()) {
                $ext = $this->response->jsonSerialize();
                unset($ext->value);
                $out->_response = $ext;
            }
        }
        if (isset($this->responseCode)) {
            if (null !== ($val = $this->responseCode->getValue())) {
                $out->responseCode = $val;
            }
            if ($this->responseCode->_nonValueFieldDefined()) {
                $ext = $this->responseCode->jsonSerialize();
                unset($ext->value);
                $out->_responseCode = $ext;
            }
        }
        if (isset($this->sourceId)) {
            if (null !== ($val = $this->sourceId->getValue())) {
                $out->sourceId = $val;
            }
            if ($this->sourceId->_nonValueFieldDefined()) {
                $ext = $this->sourceId->jsonSerialize();
                unset($ext->value);
                $out->_sourceId = $ext;
            }
        }
        if (isset($this->stopTestOnFail)) {
            if (null !== ($val = $this->stopTestOnFail->getValue())) {
                $out->stopTestOnFail = $val;
            }
            if ($this->stopTestOnFail->_nonValueFieldDefined()) {
                $ext = $this->stopTestOnFail->jsonSerialize();
                unset($ext->value);
                $out->_stopTestOnFail = $ext;
            }
        }
        if (isset($this->validateProfileId)) {
            if (null !== ($val = $this->validateProfileId->getValue())) {
                $out->validateProfileId = $val;
            }
            if ($this->validateProfileId->_nonValueFieldDefined()) {
                $ext = $this->validateProfileId->jsonSerialize();
                unset($ext->value);
                $out->_validateProfileId = $ext;
            }
        }
        if (isset($this->value)) {
            if (null !== ($val = $this->value->getValue())) {
                $out->value = $val;
            }
            if ($this->value->_nonValueFieldDefined()) {
                $ext = $this->value->jsonSerialize();
                unset($ext->value);
                $out->_value = $ext;
            }
        }
        if (isset($this->warningOnly)) {
            if (null !== ($val = $this->warningOnly->getValue())) {
                $out->warningOnly = $val;
            }
            if ($this->warningOnly->_nonValueFieldDefined()) {
                $ext = $this->warningOnly->jsonSerialize();
                unset($ext->value);
                $out->_warningOnly = $ext;
            }
        }
        if (isset($this->requirement) && [] !== $this->requirement) {
            $out->requirement = $this->requirement;
        }
        return $out;
    }
}