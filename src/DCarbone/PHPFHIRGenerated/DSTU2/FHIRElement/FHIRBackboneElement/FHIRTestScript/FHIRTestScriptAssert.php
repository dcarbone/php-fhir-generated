<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAssertionDirectionType;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAssertionOperatorType;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAssertionResponseTypes;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContentType;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * TestScript is a resource that specifies a suite of tests against a FHIR server
 * implementation to determine compliance against the FHIR specification.
 *
 * Class FHIRTestScriptAssert
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript
 */
class FHIRTestScriptAssert extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT;
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
    const FIELD_RESOURCE = 'resource';
    const FIELD_RESOURCE_EXT = '_resource';
    const FIELD_RESPONSE = 'response';
    const FIELD_RESPONSE_EXT = '_response';
    const FIELD_RESPONSE_CODE = 'responseCode';
    const FIELD_RESPONSE_CODE_EXT = '_responseCode';
    const FIELD_SOURCE_ID = 'sourceId';
    const FIELD_SOURCE_ID_EXT = '_sourceId';
    const FIELD_VALIDATE_PROFILE_ID = 'validateProfileId';
    const FIELD_VALIDATE_PROFILE_ID_EXT = '_validateProfileId';
    const FIELD_VALUE = 'value';
    const FIELD_VALUE_EXT = '_value';
    const FIELD_WARNING_ONLY = 'warningOnly';
    const FIELD_WARNING_ONLY_EXT = '_warningOnly';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of fixture used to compare the "sourceId/path" evaluations to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $compareToSourceId = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * XPath or JSONPath expression against fixture used to compare the "sourceId/path"
     * evaluations to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $compareToSourcePath = null;

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
     * The type of direction to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The direction to use for the assertion.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAssertionDirectionType
     */
    protected $direction = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The HTTP header field name e.g. 'Location'.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $headerField = null;

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
     * The ID of a fixture. Asserts that the response contains at a minimumId the
     * fixture specified by minimumId.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $minimumId = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution performs validation on the bundle navigation
     * links.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $navigationLinks = null;

    /**
     * The type of operator to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The operator type.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAssertionOperatorType
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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $path = null;

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
     * The type of response code to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * okay | created | noContent | notModified | bad | forbidden | notFound |
     * methodNotAllowed | conflict | gone | preconditionFailed | unprocessable.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAssertionResponseTypes
     */
    protected $response = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the HTTP response code to be tested.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $responseCode = null;

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
     * The ID of the Profile to validate against.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId
     */
    protected $validateProfileId = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to compare to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $value = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution will produce a warning only on error for this
     * assert.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $warningOnly = null;

    /**
     * Validation map for fields in type TestScript.Assert
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRTestScriptAssert Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptAssert::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COMPARE_TO_SOURCE_ID]) || isset($data[self::FIELD_COMPARE_TO_SOURCE_ID_EXT])) {
            if (isset($data[self::FIELD_COMPARE_TO_SOURCE_ID])) {
                $value = $data[self::FIELD_COMPARE_TO_SOURCE_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_COMPARE_TO_SOURCE_ID_EXT]) && is_array($data[self::FIELD_COMPARE_TO_SOURCE_ID_EXT])) {
                $ext = $data[self::FIELD_COMPARE_TO_SOURCE_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCompareToSourceId($value);
                } else if (is_array($value)) {
                    $this->setCompareToSourceId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCompareToSourceId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCompareToSourceId(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_COMPARE_TO_SOURCE_PATH]) || isset($data[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT])) {
            if (isset($data[self::FIELD_COMPARE_TO_SOURCE_PATH])) {
                $value = $data[self::FIELD_COMPARE_TO_SOURCE_PATH];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT]) && is_array($data[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT])) {
                $ext = $data[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCompareToSourcePath($value);
                } else if (is_array($value)) {
                    $this->setCompareToSourcePath(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCompareToSourcePath(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCompareToSourcePath(new FHIRString($ext));
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
        if (isset($data[self::FIELD_DIRECTION]) || isset($data[self::FIELD_DIRECTION_EXT])) {
            if (isset($data[self::FIELD_DIRECTION])) {
                $value = $data[self::FIELD_DIRECTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DIRECTION_EXT]) && is_array($data[self::FIELD_DIRECTION_EXT])) {
                $ext = $data[self::FIELD_DIRECTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRAssertionDirectionType) {
                    $this->setDirection($value);
                } else if (is_array($value)) {
                    $this->setDirection(new FHIRAssertionDirectionType(array_merge($ext, $value)));
                } else {
                    $this->setDirection(new FHIRAssertionDirectionType([FHIRAssertionDirectionType::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDirection(new FHIRAssertionDirectionType($ext));
            }
        }
        if (isset($data[self::FIELD_HEADER_FIELD]) || isset($data[self::FIELD_HEADER_FIELD_EXT])) {
            if (isset($data[self::FIELD_HEADER_FIELD])) {
                $value = $data[self::FIELD_HEADER_FIELD];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_HEADER_FIELD_EXT]) && is_array($data[self::FIELD_HEADER_FIELD_EXT])) {
                $ext = $data[self::FIELD_HEADER_FIELD_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setHeaderField($value);
                } else if (is_array($value)) {
                    $this->setHeaderField(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setHeaderField(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setHeaderField(new FHIRString($ext));
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
        if (isset($data[self::FIELD_MINIMUM_ID]) || isset($data[self::FIELD_MINIMUM_ID_EXT])) {
            if (isset($data[self::FIELD_MINIMUM_ID])) {
                $value = $data[self::FIELD_MINIMUM_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MINIMUM_ID_EXT]) && is_array($data[self::FIELD_MINIMUM_ID_EXT])) {
                $ext = $data[self::FIELD_MINIMUM_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMinimumId($value);
                } else if (is_array($value)) {
                    $this->setMinimumId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMinimumId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMinimumId(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_NAVIGATION_LINKS]) || isset($data[self::FIELD_NAVIGATION_LINKS_EXT])) {
            if (isset($data[self::FIELD_NAVIGATION_LINKS])) {
                $value = $data[self::FIELD_NAVIGATION_LINKS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NAVIGATION_LINKS_EXT]) && is_array($data[self::FIELD_NAVIGATION_LINKS_EXT])) {
                $ext = $data[self::FIELD_NAVIGATION_LINKS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setNavigationLinks($value);
                } else if (is_array($value)) {
                    $this->setNavigationLinks(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setNavigationLinks(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setNavigationLinks(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_OPERATOR]) || isset($data[self::FIELD_OPERATOR_EXT])) {
            if (isset($data[self::FIELD_OPERATOR])) {
                $value = $data[self::FIELD_OPERATOR];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_OPERATOR_EXT]) && is_array($data[self::FIELD_OPERATOR_EXT])) {
                $ext = $data[self::FIELD_OPERATOR_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRAssertionOperatorType) {
                    $this->setOperator($value);
                } else if (is_array($value)) {
                    $this->setOperator(new FHIRAssertionOperatorType(array_merge($ext, $value)));
                } else {
                    $this->setOperator(new FHIRAssertionOperatorType([FHIRAssertionOperatorType::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setOperator(new FHIRAssertionOperatorType($ext));
            }
        }
        if (isset($data[self::FIELD_PATH]) || isset($data[self::FIELD_PATH_EXT])) {
            if (isset($data[self::FIELD_PATH])) {
                $value = $data[self::FIELD_PATH];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATH_EXT]) && is_array($data[self::FIELD_PATH_EXT])) {
                $ext = $data[self::FIELD_PATH_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPath($value);
                } else if (is_array($value)) {
                    $this->setPath(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPath(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPath(new FHIRString($ext));
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
                if ($value instanceof FHIRCode) {
                    $this->setResource($value);
                } else if (is_array($value)) {
                    $this->setResource(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setResource(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setResource(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_RESPONSE]) || isset($data[self::FIELD_RESPONSE_EXT])) {
            if (isset($data[self::FIELD_RESPONSE])) {
                $value = $data[self::FIELD_RESPONSE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_RESPONSE_EXT]) && is_array($data[self::FIELD_RESPONSE_EXT])) {
                $ext = $data[self::FIELD_RESPONSE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRAssertionResponseTypes) {
                    $this->setResponse($value);
                } else if (is_array($value)) {
                    $this->setResponse(new FHIRAssertionResponseTypes(array_merge($ext, $value)));
                } else {
                    $this->setResponse(new FHIRAssertionResponseTypes([FHIRAssertionResponseTypes::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setResponse(new FHIRAssertionResponseTypes($ext));
            }
        }
        if (isset($data[self::FIELD_RESPONSE_CODE]) || isset($data[self::FIELD_RESPONSE_CODE_EXT])) {
            if (isset($data[self::FIELD_RESPONSE_CODE])) {
                $value = $data[self::FIELD_RESPONSE_CODE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_RESPONSE_CODE_EXT]) && is_array($data[self::FIELD_RESPONSE_CODE_EXT])) {
                $ext = $data[self::FIELD_RESPONSE_CODE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setResponseCode($value);
                } else if (is_array($value)) {
                    $this->setResponseCode(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setResponseCode(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setResponseCode(new FHIRString($ext));
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
        if (isset($data[self::FIELD_VALIDATE_PROFILE_ID]) || isset($data[self::FIELD_VALIDATE_PROFILE_ID_EXT])) {
            if (isset($data[self::FIELD_VALIDATE_PROFILE_ID])) {
                $value = $data[self::FIELD_VALIDATE_PROFILE_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALIDATE_PROFILE_ID_EXT]) && is_array($data[self::FIELD_VALIDATE_PROFILE_ID_EXT])) {
                $ext = $data[self::FIELD_VALIDATE_PROFILE_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setValidateProfileId($value);
                } else if (is_array($value)) {
                    $this->setValidateProfileId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setValidateProfileId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValidateProfileId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE]) || isset($data[self::FIELD_VALUE_EXT])) {
            if (isset($data[self::FIELD_VALUE])) {
                $value = $data[self::FIELD_VALUE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_EXT]) && is_array($data[self::FIELD_VALUE_EXT])) {
                $ext = $data[self::FIELD_VALUE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setValue($value);
                } else if (is_array($value)) {
                    $this->setValue(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setValue(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValue(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_WARNING_ONLY]) || isset($data[self::FIELD_WARNING_ONLY_EXT])) {
            if (isset($data[self::FIELD_WARNING_ONLY])) {
                $value = $data[self::FIELD_WARNING_ONLY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_WARNING_ONLY_EXT]) && is_array($data[self::FIELD_WARNING_ONLY_EXT])) {
                $ext = $data[self::FIELD_WARNING_ONLY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setWarningOnly($value);
                } else if (is_array($value)) {
                    $this->setWarningOnly(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setWarningOnly(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setWarningOnly(new FHIRBoolean($ext));
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
        return "<TestScriptAssert{$xmlns}></TestScriptAssert>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of fixture used to compare the "sourceId/path" evaluations to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
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
     * Id of fixture used to compare the "sourceId/path" evaluations to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $compareToSourceId
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
     * XPath or JSONPath expression against fixture used to compare the "sourceId/path"
     * evaluations to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
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
     * XPath or JSONPath expression against fixture used to compare the "sourceId/path"
     * evaluations to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $compareToSourcePath
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAssertionDirectionType
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAssertionDirectionType $direction
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
     * The HTTP header field name e.g. 'Location'.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $headerField
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
     * The ID of a fixture. Asserts that the response contains at a minimumId the
     * fixture specified by minimumId.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
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
     * The ID of a fixture. Asserts that the response contains at a minimumId the
     * fixture specified by minimumId.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $minimumId
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $navigationLinks
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
     * The operator type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAssertionOperatorType
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * The type of operator to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The operator type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAssertionOperatorType $operator
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $path
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
        if (null === $resource) {
            $this->resource = null;
            return $this;
        }
        if ($resource instanceof FHIRCode) {
            $this->resource = $resource;
            return $this;
        }
        $this->resource = new FHIRCode($resource);
        return $this;
    }

    /**
     * The type of response code to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * okay | created | noContent | notModified | bad | forbidden | notFound |
     * methodNotAllowed | conflict | gone | preconditionFailed | unprocessable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAssertionResponseTypes
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAssertionResponseTypes $response
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $responseCode
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
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Fixture to evaluate the XPath/JSONPath expression or the headerField against.
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
     * Fixture to evaluate the XPath/JSONPath expression or the headerField against.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId $sourceId
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId $validateProfileId
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $value
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $warningOnly
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
        if (null !== ($v = $this->getCompareToSourceId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMPARE_TO_SOURCE_ID] = $fieldErrs;
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
        if (null !== ($v = $this->getHeaderField())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HEADER_FIELD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLabel())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LABEL] = $fieldErrs;
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert
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
                'FHIRTestScriptAssert::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert or null, %s seen.',
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
        if (isset($children->compareToSourceId)) {
            $type->setCompareToSourceId(FHIRString::xmlUnserialize($children->compareToSourceId));
        }
        if (isset($attributes->compareToSourceId)) {
            $pt = $type->getCompareToSourceId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->compareToSourceId);
            } else {
                $type->setCompareToSourceId((string)$attributes->compareToSourceId);
            }
        }
        if (isset($children->compareToSourcePath)) {
            $type->setCompareToSourcePath(FHIRString::xmlUnserialize($children->compareToSourcePath));
        }
        if (isset($attributes->compareToSourcePath)) {
            $pt = $type->getCompareToSourcePath();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->compareToSourcePath);
            } else {
                $type->setCompareToSourcePath((string)$attributes->compareToSourcePath);
            }
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
        if (isset($children->direction)) {
            $type->setDirection(FHIRAssertionDirectionType::xmlUnserialize($children->direction));
        }
        if (isset($children->headerField)) {
            $type->setHeaderField(FHIRString::xmlUnserialize($children->headerField));
        }
        if (isset($attributes->headerField)) {
            $pt = $type->getHeaderField();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->headerField);
            } else {
                $type->setHeaderField((string)$attributes->headerField);
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
        if (isset($children->minimumId)) {
            $type->setMinimumId(FHIRString::xmlUnserialize($children->minimumId));
        }
        if (isset($attributes->minimumId)) {
            $pt = $type->getMinimumId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->minimumId);
            } else {
                $type->setMinimumId((string)$attributes->minimumId);
            }
        }
        if (isset($children->navigationLinks)) {
            $type->setNavigationLinks(FHIRBoolean::xmlUnserialize($children->navigationLinks));
        }
        if (isset($attributes->navigationLinks)) {
            $pt = $type->getNavigationLinks();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->navigationLinks);
            } else {
                $type->setNavigationLinks((string)$attributes->navigationLinks);
            }
        }
        if (isset($children->operator)) {
            $type->setOperator(FHIRAssertionOperatorType::xmlUnserialize($children->operator));
        }
        if (isset($children->path)) {
            $type->setPath(FHIRString::xmlUnserialize($children->path));
        }
        if (isset($attributes->path)) {
            $pt = $type->getPath();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->path);
            } else {
                $type->setPath((string)$attributes->path);
            }
        }
        if (isset($children->resource)) {
            $type->setResource(FHIRCode::xmlUnserialize($children->resource));
        }
        if (isset($attributes->resource)) {
            $pt = $type->getResource();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->resource);
            } else {
                $type->setResource((string)$attributes->resource);
            }
        }
        if (isset($children->response)) {
            $type->setResponse(FHIRAssertionResponseTypes::xmlUnserialize($children->response));
        }
        if (isset($children->responseCode)) {
            $type->setResponseCode(FHIRString::xmlUnserialize($children->responseCode));
        }
        if (isset($attributes->responseCode)) {
            $pt = $type->getResponseCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->responseCode);
            } else {
                $type->setResponseCode((string)$attributes->responseCode);
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
        if (isset($children->validateProfileId)) {
            $type->setValidateProfileId(FHIRId::xmlUnserialize($children->validateProfileId));
        }
        if (isset($attributes->validateProfileId)) {
            $pt = $type->getValidateProfileId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->validateProfileId);
            } else {
                $type->setValidateProfileId((string)$attributes->validateProfileId);
            }
        }
        if (isset($children->value)) {
            $type->setValue(FHIRString::xmlUnserialize($children->value));
        }
        if (isset($attributes->value)) {
            $pt = $type->getValue();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->value);
            } else {
                $type->setValue((string)$attributes->value);
            }
        }
        if (isset($children->warningOnly)) {
            $type->setWarningOnly(FHIRBoolean::xmlUnserialize($children->warningOnly));
        }
        if (isset($attributes->warningOnly)) {
            $pt = $type->getWarningOnly();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->warningOnly);
            } else {
                $type->setWarningOnly((string)$attributes->warningOnly);
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
        if (null !== ($v = $this->getResource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESOURCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getResponse())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESPONSE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getResponseCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESPONSE_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSourceId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValidateProfileId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALIDATE_PROFILE_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValue())) {
            $sxe->addAttribute(self::FIELD_VALUE, (string)$v);
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
        if (null !== ($v = $this->getCompareToSourceId())) {
            $a[self::FIELD_COMPARE_TO_SOURCE_ID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_COMPARE_TO_SOURCE_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getCompareToSourcePath())) {
            $a[self::FIELD_COMPARE_TO_SOURCE_PATH] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT] = $enc;
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
        if (null !== ($v = $this->getDirection())) {
            $a[self::FIELD_DIRECTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRAssertionDirectionType::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRAssertionDirectionType::FIELD_VALUE]);
                $a[self::FIELD_DIRECTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getHeaderField())) {
            $a[self::FIELD_HEADER_FIELD] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_HEADER_FIELD_EXT] = $enc;
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
        if (null !== ($v = $this->getMinimumId())) {
            $a[self::FIELD_MINIMUM_ID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_MINIMUM_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getNavigationLinks())) {
            $a[self::FIELD_NAVIGATION_LINKS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_NAVIGATION_LINKS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getOperator())) {
            $a[self::FIELD_OPERATOR] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRAssertionOperatorType::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRAssertionOperatorType::FIELD_VALUE]);
                $a[self::FIELD_OPERATOR_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPath())) {
            $a[self::FIELD_PATH] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PATH_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getResource())) {
            $a[self::FIELD_RESOURCE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_RESOURCE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getResponse())) {
            $a[self::FIELD_RESPONSE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRAssertionResponseTypes::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRAssertionResponseTypes::FIELD_VALUE]);
                $a[self::FIELD_RESPONSE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getResponseCode())) {
            $a[self::FIELD_RESPONSE_CODE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_RESPONSE_CODE_EXT] = $enc;
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
        if (null !== ($v = $this->getValidateProfileId())) {
            $a[self::FIELD_VALIDATE_PROFILE_ID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRId::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRId::FIELD_VALUE]);
                $a[self::FIELD_VALIDATE_PROFILE_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValue())) {
            $a[self::FIELD_VALUE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_VALUE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getWarningOnly())) {
            $a[self::FIELD_WARNING_ONLY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_WARNING_ONLY_EXT] = $enc;
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