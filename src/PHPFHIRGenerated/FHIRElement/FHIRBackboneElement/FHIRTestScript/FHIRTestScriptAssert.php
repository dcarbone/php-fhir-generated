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

use PHPFHIRGenerated\FHIRElement\FHIRAssertionDirectionType;
use PHPFHIRGenerated\FHIRElement\FHIRAssertionOperatorType;
use PHPFHIRGenerated\FHIRElement\FHIRAssertionResponseTypes;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRTestScriptRequestMethodCode;

/**
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.
 *
 * Class FHIRTestScriptAssert
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript
 */
class FHIRTestScriptAssert extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'TestScript.Assert';

    /**
     * The FHIRPath expression to evaluate against the source fixture. When compareToSourceId is defined, either compareToSourceExpression or compareToSourcePath must be defined, but not both.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $compareToSourceExpression = null;

    /**
     * Id of the source fixture used as the contents to be evaluated by either the "source/expression" or "sourceId/path" definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $compareToSourceId = null;

    /**
     * XPath or JSONPath expression to evaluate against the source fixture. When compareToSourceId is defined, either compareToSourceExpression or compareToSourcePath must be defined, but not both.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $compareToSourcePath = null;

    /**
     * The mime-type contents to compare against the request or response message 'Content-Type' header.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $contentType = null;

    /**
     * The description would be used by test engines for tracking and reporting purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The direction to use for the assertion.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAssertionDirectionType
     */
    public $direction = null;

    /**
     * The FHIRPath expression to be evaluated against the request or response message contents - HTTP headers and payload.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $expression = null;

    /**
     * The HTTP header field name e.g. 'Location'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $headerField = null;

    /**
     * The label would be used for tracking/logging purposes by test engines.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $label = null;

    /**
     * The ID of a fixture.  Asserts that the response contains at a minimum the fixture specified by minimumId.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $minimumId = null;

    /**
     * Whether or not the test execution performs validation on the bundle navigation links.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $navigationLinks = null;

    /**
     * The operator type defines the conditional behavior of the assert. If not defined, the default is equals.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAssertionOperatorType
     */
    public $operator = null;

    /**
     * The XPath or JSONPath expression to be evaluated against the fixture representing the response received from server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $path = null;

    /**
     * The request method or HTTP operation code to compare against that used by the client system under test.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTestScriptRequestMethodCode
     */
    public $requestMethod = null;

    /**
     * The value to use in a comparison against the request URL path string.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $requestURL = null;

    /**
     * The type of the resource.  See http://build.fhir.org/resourcelist.html.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $resource = null;

    /**
     * okay | created | noContent | notModified | bad | forbidden | notFound | methodNotAllowed | conflict | gone | preconditionFailed | unprocessable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAssertionResponseTypes
     */
    public $response = null;

    /**
     * The value of the HTTP response code to be tested.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $responseCode = null;

    /**
     * The TestScript.rule this assert will evaluate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRule2
     */
    public $rule = null;

    /**
     * The TestScript.ruleset this assert will evaluate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRuleset1
     */
    public $ruleset = null;

    /**
     * Fixture to evaluate the XPath/JSONPath expression or the headerField  against.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $sourceId = null;

    /**
     * The ID of the Profile to validate against.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $validateProfileId = null;

    /**
     * The value to compare to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $value = null;

    /**
     * Whether or not the test execution will produce a warning only on error for this assert.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $warningOnly = null;

    /**
     * FHIRTestScriptAssert Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['compareToSourceExpression'])) {
                $this->setCompareToSourceExpression($data['compareToSourceExpression']);
            }
            if (isset($data['compareToSourceId'])) {
                $this->setCompareToSourceId($data['compareToSourceId']);
            }
            if (isset($data['compareToSourcePath'])) {
                $this->setCompareToSourcePath($data['compareToSourcePath']);
            }
            if (isset($data['contentType'])) {
                $this->setContentType($data['contentType']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['direction'])) {
                $this->setDirection($data['direction']);
            }
            if (isset($data['expression'])) {
                $this->setExpression($data['expression']);
            }
            if (isset($data['headerField'])) {
                $this->setHeaderField($data['headerField']);
            }
            if (isset($data['label'])) {
                $this->setLabel($data['label']);
            }
            if (isset($data['minimumId'])) {
                $this->setMinimumId($data['minimumId']);
            }
            if (isset($data['navigationLinks'])) {
                $this->setNavigationLinks($data['navigationLinks']);
            }
            if (isset($data['operator'])) {
                $this->setOperator($data['operator']);
            }
            if (isset($data['path'])) {
                $this->setPath($data['path']);
            }
            if (isset($data['requestMethod'])) {
                $this->setRequestMethod($data['requestMethod']);
            }
            if (isset($data['requestURL'])) {
                $this->setRequestURL($data['requestURL']);
            }
            if (isset($data['resource'])) {
                $this->setResource($data['resource']);
            }
            if (isset($data['response'])) {
                $this->setResponse($data['response']);
            }
            if (isset($data['responseCode'])) {
                $this->setResponseCode($data['responseCode']);
            }
            if (isset($data['rule'])) {
                $this->setRule($data['rule']);
            }
            if (isset($data['ruleset'])) {
                $this->setRuleset($data['ruleset']);
            }
            if (isset($data['sourceId'])) {
                $this->setSourceId($data['sourceId']);
            }
            if (isset($data['validateProfileId'])) {
                $this->setValidateProfileId($data['validateProfileId']);
            }
            if (isset($data['value'])) {
                $this->setValue($data['value']);
            }
            if (isset($data['warningOnly'])) {
                $this->setWarningOnly($data['warningOnly']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The FHIRPath expression to evaluate against the source fixture. When compareToSourceId is defined, either compareToSourceExpression or compareToSourcePath must be defined, but not both.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setCompareToSourceExpression($compareToSourceExpression)
    {
        if (null === $compareToSourceExpression) {
            return $this; 
        }
        if (is_scalar($compareToSourceExpression)) {
            $compareToSourceExpression = new FHIRString($compareToSourceExpression);
        }
        if (!($compareToSourceExpression instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptAssert::setCompareToSourceExpression - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($compareToSourceExpression)
            ));
        }
        $this->compareToSourceExpression = $compareToSourceExpression;
        return $this;
    }

    /**
     * The FHIRPath expression to evaluate against the source fixture. When compareToSourceId is defined, either compareToSourceExpression or compareToSourcePath must be defined, but not both.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCompareToSourceExpression()
    {
        return $this->compareToSourceExpression;
    }


    /**
     * Id of the source fixture used as the contents to be evaluated by either the "source/expression" or "sourceId/path" definition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setCompareToSourceId($compareToSourceId)
    {
        if (null === $compareToSourceId) {
            return $this; 
        }
        if (is_scalar($compareToSourceId)) {
            $compareToSourceId = new FHIRString($compareToSourceId);
        }
        if (!($compareToSourceId instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptAssert::setCompareToSourceId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($compareToSourceId)
            ));
        }
        $this->compareToSourceId = $compareToSourceId;
        return $this;
    }

    /**
     * Id of the source fixture used as the contents to be evaluated by either the "source/expression" or "sourceId/path" definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCompareToSourceId()
    {
        return $this->compareToSourceId;
    }


    /**
     * XPath or JSONPath expression to evaluate against the source fixture. When compareToSourceId is defined, either compareToSourceExpression or compareToSourcePath must be defined, but not both.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setCompareToSourcePath($compareToSourcePath)
    {
        if (null === $compareToSourcePath) {
            return $this; 
        }
        if (is_scalar($compareToSourcePath)) {
            $compareToSourcePath = new FHIRString($compareToSourcePath);
        }
        if (!($compareToSourcePath instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptAssert::setCompareToSourcePath - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($compareToSourcePath)
            ));
        }
        $this->compareToSourcePath = $compareToSourcePath;
        return $this;
    }

    /**
     * XPath or JSONPath expression to evaluate against the source fixture. When compareToSourceId is defined, either compareToSourceExpression or compareToSourcePath must be defined, but not both.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCompareToSourcePath()
    {
        return $this->compareToSourcePath;
    }


    /**
     * The mime-type contents to compare against the request or response message 'Content-Type' header.
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
                'FHIRTestScriptAssert::setContentType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($contentType)
            ));
        }
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * The mime-type contents to compare against the request or response message 'Content-Type' header.
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
                'FHIRTestScriptAssert::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
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
     * The direction to use for the assertion.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAssertionDirectionType
     * @return $this
     */
    public function setDirection($direction)
    {
        if (null === $direction) {
            return $this; 
        }
        if (is_scalar($direction)) {
            $direction = new FHIRAssertionDirectionType($direction);
        }
        if (!($direction instanceof FHIRAssertionDirectionType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptAssert::setDirection - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAssertionDirectionType or appropriate scalar value, %s seen.',
                gettype($direction)
            ));
        }
        $this->direction = $direction;
        return $this;
    }

    /**
     * The direction to use for the assertion.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAssertionDirectionType
     */
    public function getDirection()
    {
        return $this->direction;
    }


    /**
     * The FHIRPath expression to be evaluated against the request or response message contents - HTTP headers and payload.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setExpression($expression)
    {
        if (null === $expression) {
            return $this; 
        }
        if (is_scalar($expression)) {
            $expression = new FHIRString($expression);
        }
        if (!($expression instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptAssert::setExpression - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($expression)
            ));
        }
        $this->expression = $expression;
        return $this;
    }

    /**
     * The FHIRPath expression to be evaluated against the request or response message contents - HTTP headers and payload.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getExpression()
    {
        return $this->expression;
    }


    /**
     * The HTTP header field name e.g. 'Location'.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setHeaderField($headerField)
    {
        if (null === $headerField) {
            return $this; 
        }
        if (is_scalar($headerField)) {
            $headerField = new FHIRString($headerField);
        }
        if (!($headerField instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptAssert::setHeaderField - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($headerField)
            ));
        }
        $this->headerField = $headerField;
        return $this;
    }

    /**
     * The HTTP header field name e.g. 'Location'.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getHeaderField()
    {
        return $this->headerField;
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
                'FHIRTestScriptAssert::setLabel - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
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
     * The ID of a fixture.  Asserts that the response contains at a minimum the fixture specified by minimumId.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setMinimumId($minimumId)
    {
        if (null === $minimumId) {
            return $this; 
        }
        if (is_scalar($minimumId)) {
            $minimumId = new FHIRString($minimumId);
        }
        if (!($minimumId instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptAssert::setMinimumId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($minimumId)
            ));
        }
        $this->minimumId = $minimumId;
        return $this;
    }

    /**
     * The ID of a fixture.  Asserts that the response contains at a minimum the fixture specified by minimumId.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMinimumId()
    {
        return $this->minimumId;
    }


    /**
     * Whether or not the test execution performs validation on the bundle navigation links.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setNavigationLinks($navigationLinks)
    {
        if (null === $navigationLinks) {
            return $this; 
        }
        if (is_scalar($navigationLinks)) {
            $navigationLinks = new FHIRBoolean($navigationLinks);
        }
        if (!($navigationLinks instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptAssert::setNavigationLinks - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($navigationLinks)
            ));
        }
        $this->navigationLinks = $navigationLinks;
        return $this;
    }

    /**
     * Whether or not the test execution performs validation on the bundle navigation links.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getNavigationLinks()
    {
        return $this->navigationLinks;
    }


    /**
     * The operator type defines the conditional behavior of the assert. If not defined, the default is equals.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAssertionOperatorType
     * @return $this
     */
    public function setOperator($operator)
    {
        if (null === $operator) {
            return $this; 
        }
        if (is_scalar($operator)) {
            $operator = new FHIRAssertionOperatorType($operator);
        }
        if (!($operator instanceof FHIRAssertionOperatorType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptAssert::setOperator - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAssertionOperatorType or appropriate scalar value, %s seen.',
                gettype($operator)
            ));
        }
        $this->operator = $operator;
        return $this;
    }

    /**
     * The operator type defines the conditional behavior of the assert. If not defined, the default is equals.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAssertionOperatorType
     */
    public function getOperator()
    {
        return $this->operator;
    }


    /**
     * The XPath or JSONPath expression to be evaluated against the fixture representing the response received from server.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPath($path)
    {
        if (null === $path) {
            return $this; 
        }
        if (is_scalar($path)) {
            $path = new FHIRString($path);
        }
        if (!($path instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptAssert::setPath - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($path)
            ));
        }
        $this->path = $path;
        return $this;
    }

    /**
     * The XPath or JSONPath expression to be evaluated against the fixture representing the response received from server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPath()
    {
        return $this->path;
    }


    /**
     * The request method or HTTP operation code to compare against that used by the client system under test.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTestScriptRequestMethodCode
     * @return $this
     */
    public function setRequestMethod($requestMethod)
    {
        if (null === $requestMethod) {
            return $this; 
        }
        if (is_scalar($requestMethod)) {
            $requestMethod = new FHIRTestScriptRequestMethodCode($requestMethod);
        }
        if (!($requestMethod instanceof FHIRTestScriptRequestMethodCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptAssert::setRequestMethod - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTestScriptRequestMethodCode or appropriate scalar value, %s seen.',
                gettype($requestMethod)
            ));
        }
        $this->requestMethod = $requestMethod;
        return $this;
    }

    /**
     * The request method or HTTP operation code to compare against that used by the client system under test.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTestScriptRequestMethodCode
     */
    public function getRequestMethod()
    {
        return $this->requestMethod;
    }


    /**
     * The value to use in a comparison against the request URL path string.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setRequestURL($requestURL)
    {
        if (null === $requestURL) {
            return $this; 
        }
        if (is_scalar($requestURL)) {
            $requestURL = new FHIRString($requestURL);
        }
        if (!($requestURL instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptAssert::setRequestURL - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($requestURL)
            ));
        }
        $this->requestURL = $requestURL;
        return $this;
    }

    /**
     * The value to use in a comparison against the request URL path string.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRequestURL()
    {
        return $this->requestURL;
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
                'FHIRTestScriptAssert::setResource - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
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
     * okay | created | noContent | notModified | bad | forbidden | notFound | methodNotAllowed | conflict | gone | preconditionFailed | unprocessable.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAssertionResponseTypes
     * @return $this
     */
    public function setResponse($response)
    {
        if (null === $response) {
            return $this; 
        }
        if (is_scalar($response)) {
            $response = new FHIRAssertionResponseTypes($response);
        }
        if (!($response instanceof FHIRAssertionResponseTypes)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptAssert::setResponse - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAssertionResponseTypes or appropriate scalar value, %s seen.',
                gettype($response)
            ));
        }
        $this->response = $response;
        return $this;
    }

    /**
     * okay | created | noContent | notModified | bad | forbidden | notFound | methodNotAllowed | conflict | gone | preconditionFailed | unprocessable.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAssertionResponseTypes
     */
    public function getResponse()
    {
        return $this->response;
    }


    /**
     * The value of the HTTP response code to be tested.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setResponseCode($responseCode)
    {
        if (null === $responseCode) {
            return $this; 
        }
        if (is_scalar($responseCode)) {
            $responseCode = new FHIRString($responseCode);
        }
        if (!($responseCode instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptAssert::setResponseCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($responseCode)
            ));
        }
        $this->responseCode = $responseCode;
        return $this;
    }

    /**
     * The value of the HTTP response code to be tested.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }


    /**
     * The TestScript.rule this assert will evaluate.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRule2
     * @return $this
     */
    public function setRule(FHIRTestScriptRule2 $rule = null)
    {
        if (null === $rule) {
            return $this; 
        }
        $this->rule = $rule;
        return $this;
    }

    /**
     * The TestScript.rule this assert will evaluate.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRule2
     */
    public function getRule()
    {
        return $this->rule;
    }


    /**
     * The TestScript.ruleset this assert will evaluate.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRuleset1
     * @return $this
     */
    public function setRuleset(FHIRTestScriptRuleset1 $ruleset = null)
    {
        if (null === $ruleset) {
            return $this; 
        }
        $this->ruleset = $ruleset;
        return $this;
    }

    /**
     * The TestScript.ruleset this assert will evaluate.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRuleset1
     */
    public function getRuleset()
    {
        return $this->ruleset;
    }


    /**
     * Fixture to evaluate the XPath/JSONPath expression or the headerField  against.
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
                'FHIRTestScriptAssert::setSourceId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($sourceId)
            ));
        }
        $this->sourceId = $sourceId;
        return $this;
    }

    /**
     * Fixture to evaluate the XPath/JSONPath expression or the headerField  against.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }


    /**
     * The ID of the Profile to validate against.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setValidateProfileId($validateProfileId)
    {
        if (null === $validateProfileId) {
            return $this; 
        }
        if (is_scalar($validateProfileId)) {
            $validateProfileId = new FHIRId($validateProfileId);
        }
        if (!($validateProfileId instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptAssert::setValidateProfileId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($validateProfileId)
            ));
        }
        $this->validateProfileId = $validateProfileId;
        return $this;
    }

    /**
     * The ID of the Profile to validate against.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getValidateProfileId()
    {
        return $this->validateProfileId;
    }


    /**
     * The value to compare to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setValue($value)
    {
        if (null === $value) {
            return $this; 
        }
        if (is_scalar($value)) {
            $value = new FHIRString($value);
        }
        if (!($value instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptAssert::setValue - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($value)
            ));
        }
        $this->value = $value;
        return $this;
    }

    /**
     * The value to compare to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValue()
    {
        return $this->value;
    }


    /**
     * Whether or not the test execution will produce a warning only on error for this assert.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setWarningOnly($warningOnly)
    {
        if (null === $warningOnly) {
            return $this; 
        }
        if (is_scalar($warningOnly)) {
            $warningOnly = new FHIRBoolean($warningOnly);
        }
        if (!($warningOnly instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptAssert::setWarningOnly - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($warningOnly)
            ));
        }
        $this->warningOnly = $warningOnly;
        return $this;
    }

    /**
     * Whether or not the test execution will produce a warning only on error for this assert.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getWarningOnly()
    {
        return $this->warningOnly;
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
        if (null !== ($v = $this->getCompareToSourceExpression())) {
            $a['compareToSourceExpression'] = $v;
        }
        if (null !== ($v = $this->getCompareToSourceId())) {
            $a['compareToSourceId'] = $v;
        }
        if (null !== ($v = $this->getCompareToSourcePath())) {
            $a['compareToSourcePath'] = $v;
        }
        if (null !== ($v = $this->getContentType())) {
            $a['contentType'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getDirection())) {
            $a['direction'] = $v;
        }
        if (null !== ($v = $this->getExpression())) {
            $a['expression'] = $v;
        }
        if (null !== ($v = $this->getHeaderField())) {
            $a['headerField'] = $v;
        }
        if (null !== ($v = $this->getLabel())) {
            $a['label'] = $v;
        }
        if (null !== ($v = $this->getMinimumId())) {
            $a['minimumId'] = $v;
        }
        if (null !== ($v = $this->getNavigationLinks())) {
            $a['navigationLinks'] = $v;
        }
        if (null !== ($v = $this->getOperator())) {
            $a['operator'] = $v;
        }
        if (null !== ($v = $this->getPath())) {
            $a['path'] = $v;
        }
        if (null !== ($v = $this->getRequestMethod())) {
            $a['requestMethod'] = $v;
        }
        if (null !== ($v = $this->getRequestURL())) {
            $a['requestURL'] = $v;
        }
        if (null !== ($v = $this->getResource())) {
            $a['resource'] = $v;
        }
        if (null !== ($v = $this->getResponse())) {
            $a['response'] = $v;
        }
        if (null !== ($v = $this->getResponseCode())) {
            $a['responseCode'] = $v;
        }
        if (null !== ($v = $this->getRule())) {
            $a['rule'] = $v;
        }
        if (null !== ($v = $this->getRuleset())) {
            $a['ruleset'] = $v;
        }
        if (null !== ($v = $this->getSourceId())) {
            $a['sourceId'] = $v;
        }
        if (null !== ($v = $this->getValidateProfileId())) {
            $a['validateProfileId'] = $v;
        }
        if (null !== ($v = $this->getValue())) {
            $a['value'] = $v;
        }
        if (null !== ($v = $this->getWarningOnly())) {
            $a['warningOnly'] = $v;
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
            $sxe = new \SimpleXMLElement('<TestScriptAssert xmlns="http://hl7.org/fhir"></TestScriptAssert>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}