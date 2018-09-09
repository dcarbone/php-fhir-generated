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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.
 *
 * Class FHIRTestScriptVariable
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript
 */
class FHIRTestScriptVariable extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'TestScript.Variable';

    /**
     * A default, hard-coded, or user-defined value for this variable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $defaultValue = null;

    /**
     * A free text natural language description of the variable and its purpose.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The FHIRPath expression to evaluate against the fixture body. When variables are defined, only one of either expression, headerField or path must be specified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $expression = null;

    /**
     * Will be used to grab the HTTP header field value from the headers that sourceId is pointing to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $headerField = null;

    /**
     * Displayable text string with hint help information to the user when entering a default value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $hint = null;

    /**
     * Descriptive name for this variable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * XPath or JSONPath to evaluate against the fixture body.  When variables are defined, only one of either expression, headerField or path must be specified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $path = null;

    /**
     * Fixture to evaluate the XPath/JSONPath expression or the headerField  against within this variable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $sourceId = null;

    /**
     * FHIRTestScriptVariable Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['defaultValue'])) {
                $this->setDefaultValue($data['defaultValue']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['expression'])) {
                $this->setExpression($data['expression']);
            }
            if (isset($data['headerField'])) {
                $this->setHeaderField($data['headerField']);
            }
            if (isset($data['hint'])) {
                $this->setHint($data['hint']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['path'])) {
                $this->setPath($data['path']);
            }
            if (isset($data['sourceId'])) {
                $this->setSourceId($data['sourceId']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptVariable::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A default, hard-coded, or user-defined value for this variable.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDefaultValue($defaultValue)
    {
        if (null === $defaultValue) {
            return $this; 
        }
        if (is_scalar($defaultValue)) {
            $defaultValue = new FHIRString($defaultValue);
        }
        if (!($defaultValue instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptVariable::setDefaultValue - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($defaultValue)
            ));
        }
        $this->defaultValue = $defaultValue;
        return $this;
    }

    /**
     * A default, hard-coded, or user-defined value for this variable.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }


    /**
     * A free text natural language description of the variable and its purpose.
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
                'FHIRTestScriptVariable::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A free text natural language description of the variable and its purpose.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * The FHIRPath expression to evaluate against the fixture body. When variables are defined, only one of either expression, headerField or path must be specified.
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
                'FHIRTestScriptVariable::setExpression - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($expression)
            ));
        }
        $this->expression = $expression;
        return $this;
    }

    /**
     * The FHIRPath expression to evaluate against the fixture body. When variables are defined, only one of either expression, headerField or path must be specified.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getExpression()
    {
        return $this->expression;
    }


    /**
     * Will be used to grab the HTTP header field value from the headers that sourceId is pointing to.
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
                'FHIRTestScriptVariable::setHeaderField - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($headerField)
            ));
        }
        $this->headerField = $headerField;
        return $this;
    }

    /**
     * Will be used to grab the HTTP header field value from the headers that sourceId is pointing to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getHeaderField()
    {
        return $this->headerField;
    }


    /**
     * Displayable text string with hint help information to the user when entering a default value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setHint($hint)
    {
        if (null === $hint) {
            return $this; 
        }
        if (is_scalar($hint)) {
            $hint = new FHIRString($hint);
        }
        if (!($hint instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptVariable::setHint - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($hint)
            ));
        }
        $this->hint = $hint;
        return $this;
    }

    /**
     * Displayable text string with hint help information to the user when entering a default value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getHint()
    {
        return $this->hint;
    }


    /**
     * Descriptive name for this variable.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setName($name)
    {
        if (null === $name) {
            return $this; 
        }
        if (is_scalar($name)) {
            $name = new FHIRString($name);
        }
        if (!($name instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptVariable::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * Descriptive name for this variable.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * XPath or JSONPath to evaluate against the fixture body.  When variables are defined, only one of either expression, headerField or path must be specified.
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
                'FHIRTestScriptVariable::setPath - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($path)
            ));
        }
        $this->path = $path;
        return $this;
    }

    /**
     * XPath or JSONPath to evaluate against the fixture body.  When variables are defined, only one of either expression, headerField or path must be specified.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPath()
    {
        return $this->path;
    }


    /**
     * Fixture to evaluate the XPath/JSONPath expression or the headerField  against within this variable.
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
                'FHIRTestScriptVariable::setSourceId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($sourceId)
            ));
        }
        $this->sourceId = $sourceId;
        return $this;
    }

    /**
     * Fixture to evaluate the XPath/JSONPath expression or the headerField  against within this variable.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getSourceId()
    {
        return $this->sourceId;
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
        if (null !== ($v = $this->getDefaultValue())) {
            $a['defaultValue'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getExpression())) {
            $a['expression'] = $v;
        }
        if (null !== ($v = $this->getHeaderField())) {
            $a['headerField'] = $v;
        }
        if (null !== ($v = $this->getHint())) {
            $a['hint'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getPath())) {
            $a['path'] = $v;
        }
        if (null !== ($v = $this->getSourceId())) {
            $a['sourceId'] = $v;
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
            $sxe = new \SimpleXMLElement('<TestScriptVariable xmlns="http://hl7.org/fhir"></TestScriptVariable>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}