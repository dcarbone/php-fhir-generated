<?php

namespace PHPFHIRGenerated\FHIRElement;

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

use PHPFHIRGenerated\FHIRElement;

/**
 * A expression that is evaluated in a specified context and returns a value. The context of use of the expression must specify the context in which the expression is evaluated, and how the result of the expression is used.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRExpression
 * @package PHPFHIRGenerated\FHIRElement
 */
class FHIRExpression extends FHIRElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Expression';

    /**
     * A brief, natural language description of the condition that effectively communicates the intended semantics.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * An expression in the specified language that returns a value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $expression = null;

    /**
     * The media type of the language for the expression.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExpressionLanguage
     */
    public $language = null;

    /**
     * A short name assigned to the expression to allow for multiple reuse of the expression in the context where it is defined.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $name = null;

    /**
     * A URI that defines where the expression is found.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $reference = null;

    /**
     * FHIRExpression Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['expression'])) {
                $this->setExpression($data['expression']);
            }
            if (isset($data['language'])) {
                $this->setLanguage($data['language']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['reference'])) {
                $this->setReference($data['reference']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRExpression::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A brief, natural language description of the condition that effectively communicates the intended semantics.
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
                'FHIRExpression::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A brief, natural language description of the condition that effectively communicates the intended semantics.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * An expression in the specified language that returns a value.
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
                'FHIRExpression::setExpression - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($expression)
            ));
        }
        $this->expression = $expression;
        return $this;
    }

    /**
     * An expression in the specified language that returns a value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getExpression()
    {
        return $this->expression;
    }


    /**
     * The media type of the language for the expression.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRExpressionLanguage
     * @return $this
     */
    public function setLanguage($language)
    {
        if (null === $language) {
            return $this; 
        }
        if (is_scalar($language)) {
            $language = new FHIRExpressionLanguage($language);
        }
        if (!($language instanceof FHIRExpressionLanguage)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExpression::setLanguage - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRExpressionLanguage or appropriate scalar value, %s seen.',
                gettype($language)
            ));
        }
        $this->language = $language;
        return $this;
    }

    /**
     * The media type of the language for the expression.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRExpressionLanguage
     */
    public function getLanguage()
    {
        return $this->language;
    }


    /**
     * A short name assigned to the expression to allow for multiple reuse of the expression in the context where it is defined.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setName($name)
    {
        if (null === $name) {
            return $this; 
        }
        if (is_scalar($name)) {
            $name = new FHIRId($name);
        }
        if (!($name instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExpression::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A short name assigned to the expression to allow for multiple reuse of the expression in the context where it is defined.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * A URI that defines where the expression is found.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setReference($reference)
    {
        if (null === $reference) {
            return $this; 
        }
        if (is_scalar($reference)) {
            $reference = new FHIRUri($reference);
        }
        if (!($reference instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExpression::setReference - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($reference)
            ));
        }
        $this->reference = $reference;
        return $this;
    }

    /**
     * A URI that defines where the expression is found.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getReference()
    {
        return $this->reference;
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
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getExpression())) {
            $a['expression'] = $v;
        }
        if (null !== ($v = $this->getLanguage())) {
            $a['language'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getReference())) {
            $a['reference'] = $v;
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
            $sxe = new \SimpleXMLElement('<Expression xmlns="http://hl7.org/fhir"></Expression>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}